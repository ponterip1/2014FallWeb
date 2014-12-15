
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Fitness Tracker Home Page</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
		<link type= "text/css" rel= "stylesheet" href= "CSS/main.css"  />
	</head>
	
	<body>	
		
		<div id= "wrapper">
			<ul class= "navbar">
				<li><a href= "index.php">Home</a></li>
				<li><a href= "food.php">Food</a></li>
				<li><a href= "exercise.php">Exercise</a></li>
				<li><a href= "apps.php">Apps</a></li>
				<li><a href= "blogs.php">Blogs</a></li>
				<li><a href= "profile.php">Profile</a></li>
			</ul>
		</div>
		
		 <script>
      		window.fbAsyncInit = function() {
        		FB.init({
          			appId      : 'your-app-id',
          			xfbml      : true,
          			version    : 'v2.1'
        		});
      		};

		
		
		<div id="fb-root"></div>
		<script>(function(d, s, id) {
		  	var js, fjs = d.getElementsByTagName(s)[0];
		  	if (d.getElementById(id)) return;
		  	js = d.createElement(s); js.id = id;
		  	js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.0";
		  	fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));</script>
	
		
		<div class="fb-login-button" data-max-rows="1" data-size="large" data-show-faces="false" data-auto-logout-link="false"></div>
		
		
		<img src='images/HEALTHY-LIVING.jpg' id= "homepagecycle">
		
		<div class="jumbotron">
  			<p>Welcome to the Fitness Tracker website thats going to put you back in shape and ready to go!</p>
  			<h5>
  				Click here to 
  				<a href="signup.php"><button type="button" class="btn btn-primary btn-lg">Sign-Up</button></a>
  				Already have an account? 
  				<a href="login.php"><button type="button" class="btn btn-primary btn-lg">Log In</button></a>
			</h5>
		</div>
		
		
		<div class="fb-login-button" data-max-rows="1" data-size="large" data-show-faces="false" data-auto-logout-link="false"></div>
		

		
		
		<script>
  		// This is called with the results from from FB.getLoginStatus().
  		function statusChangeCallback(response) {
    		console.log('statusChangeCallback');
    		console.log(response);
    		// The response object is returned with a status field that lets the
    		// app know the current login status of the person.
    		// Full docs on the response object can be found in the documentation
    		// for FB.getLoginStatus().
    		if (response.status === 'connected') {
     			 // Logged into your app and Facebook.
     			 testAPI();
    		} else if (response.status === 'not_authorized') {
      			// The person is logged into Facebook, but not your app.
      			document.getElementById('status').innerHTML = 'Please log ' +
        		'into this app.';
   			} else {
      			// The person is not logged into Facebook, so we're not sure if
      			// they are logged into this app or not.
      			document.getElementById('status').innerHTML = 'Please log ' +
        		'into Facebook.';
   			}
  			}

 			 // This function is called when someone finishes with the Login
  			// Button.  See the onlogin handler attached to it in the sample
  			// code below.
  			function checkLoginState() {
   				FB.getLoginStatus(function(response) {
      				statusChangeCallback(response);
    			});
  			}

  			window.fbAsyncInit = function() {
  				FB.init({
    				appId      : '{your-app-id}',
    				cookie     : true,  // enable cookies to allow the server to access 
                        // the session
   					 xfbml      : true,  // parse social plugins on this page
    				version    : 'v2.1' // use version 2.1
  			});

			  // Now that we've initialized the JavaScript SDK, we call 
			  // FB.getLoginStatus().  This function gets the state of the
			  // person visiting this page and can return one of three states to
			  // the callback you provide.  They can be:
			  //
			  // 1. Logged into your app ('connected')
			  // 2. Logged into Facebook, but not your app ('not_authorized')
			  // 3. Not logged into Facebook and can't tell if they are logged into
			  //    your app or not.
			  //
			  // These three cases are handled in the callback function.

  			FB.getLoginStatus(function(response) {
    			statusChangeCallback(response);
  			});

  		;

  // Load the SDK asynchronously
  (function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/en_US/sdk.js";
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));

  // Here we run a very simple test of the Graph API after login is
  // successful.  See statusChangeCallback() for when this call is made.
  function testAPI() {
    console.log('Welcome!  Fetching your information.... ');
    FB.api('/me', function(response) {
      console.log('Successful login for: ' + response.name);
      document.getElementById('status').innerHTML =
        'Thanks for logging in, ' + response.name + '!';
    });
  }
</script>

<!--
  Below we include the Login Button social plugin. This button uses
  the JavaScript SDK to present a graphical Login button that triggers
  the FB.login() function when clicked.
-->

<fb:login-button scope="public_profile,email" onlogin="checkLoginState();">
</fb:login-button>

<div id="status">
</div>
		
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/holder/2.4.0/holder.js"></script>
		<script type="text/javascript">
			$(function(){
				$("#top-nav").load("inc/_navbar.php", function(){
					$(".index").addClass("active");					
				});
			});
		</script>

	</body>	
</html>