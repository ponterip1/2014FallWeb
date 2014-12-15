<?php
	include_once __DIR__ . '/../inc/_all.php';
/**
 * 
 */
class Exercise {
	
	public static function Blank()
	{
		return array('id'=>null,'Name'=>null,'Time/lbs'=>null,'Distance'=>null,'Reps'=>null,'CaloriesBurned'=>null,'Time'=>date(strtotime('tomorrow')));
	}
	
	public static function Get($id=null)
	{
		$sql = "	SELECT * FROM 2014FallWeb_Exercise";
		if($id){
			$sql .= " WHERE id=$id ";
			$ret = FetchAll($sql);
			return $ret[0];
		}else{
			return FetchAll($sql);			
		}
	}
	
	static public function Save(&$row)
		{
			$conn = GetConnection();
			
			$row2 = escape_all($row, $conn);
			$row2['Time'] = date( 'Y-m-d H:i:s', strtotime( $row2['Time'] ) );
			if (!empty($row['id'])) {
				$sql = "Update 2014FallWeb_Exercise
							Set Name='$row2[Name]', Time/lbs='$row2[Timelbs]',
								Distance='$row2[Distance]', Reps='$row2[Reps]', CaloriesBurned='$row2[CaloriesBurned]', Time='$row2[Time]' WHERE id = $row2[id] ";
			}else{
				$sql = "INSERT INTO 2014FallWeb_Exercise
						(Name, Time/lbs, Distance, Reps, CaloriesBurned, Time, created_at, UserId)
						VALUES ('$row2[Name]', '$row2[Timelbs]', '$row2[Distance]', '$row2[Reps]', '$row2[CaloriesBurned]', '$row2[Time]', Now(), 3 ) ";				
			}
			
			
			//echo $sql;
			$results = $conn->query($sql);
			$error = $conn->error;
			
			if(!$error && empty($row['id'])){
				$row['id'] = $conn->insert_id;
			}
			
			$conn->close();
			
			return $error ? array ('sql error' => $error) : false;
		}
		static public function Delete($id)
		{
			$conn = GetConnection();
			$sql = "DELETE FROM 2014FallWeb_Exercise WHERE id = $id";
			//echo $sql;
			$results = $conn->query($sql);
			$error = $conn->error;
			$conn->close();
			
			return $error ? array ('sql error' => $error) : false;
		}
		
		static public function Validate($row)
		{
			$errors = array();
			if(empty($row['Name'])) $errors['Name'] = "is required";
			if(empty($row['Time/lbs'])) $errors['Time/lbs'] = "is required";
			
			if($row['Reps'] >= 20) $errors['Reps'] = "must less than 20";
			if(empty($row['Reps'])) $errors['Reps'] = "is required";
			
			return count($errors) > 0 ? $errors : false ;
	}
}