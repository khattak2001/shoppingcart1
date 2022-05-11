<?php
//session_start();

if(isset($_POST["btnLogin"]))

{
$con=mysqli_connect("localhost","root","","bookshop") ;

$un=$_POST['txtUser'];
$pass=$_POST['txtPass'];
//echo "User Name = $un /n Password = $pass";
$sql="SELECT * FROM login WHERE username = '$un' AND password ='$pass'";

$result=mysqli_query($con,$sql);

if(mysqli_num_rows($result) >0 )
{
 echo "<script>window.location.href='Adminheader.php'</script>" ;
}
else
{
    echo "<h3> Invalid Username Or Password </h3>";
}
}
?>

<body>

<head>
  	<title>Login 01</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="css/style.css">

	</head>

    <section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">Login #01</h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-7 col-lg-5">
					<div class="login-wrap p-4 p-md-5">
		      	<div class="icon d-flex align-items-center justify-content-center">
		      		<span class="fa fa-user-o"></span>
		      	</div>
		      	<h3 class="text-center mb-4">Sign In</h3>
						<form action="Login.php" method="Post">
		      		<div class="form-group">
                      <input type="text" class="form-control rounded-left" placeholder="Username" name ="txtUser" required>
		      		</div>
	            <div class="form-group d-flex">
                <input type="password" class="form-control rounded-left" placeholder="Password" name="txtPass" required>
	            </div>
	            <div class="form-group">
	            	<input type="submit" value="Login"name="btnLogin">
	            </div>
	             <div class="form-group d-md-flex">
	            	<div class="w-50">
	            		<label class="checkbox-wrap checkbox-primary">Remember Me
									  <input type="checkbox" checked>
									  <span class="checkmark"></span>
									</label>
								</div>
								<div class="w-50 text-md-right">
									<a href="#">Forgot Password</a>
								</div>
	            </div> 
			</form>
	        </div>
				</div>
			</div>
		</div>
	</section>

	<script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>
      <!-- <form action="Login.php" method="Post">
         <label>Username</label>
         <input type="text" name="txtUser">

         <label>Password</label>
         <input type="Password" name="txtPass">

         <input type="submit" value="Login" name="btnLogin">
     </form> -->
     
 </body>