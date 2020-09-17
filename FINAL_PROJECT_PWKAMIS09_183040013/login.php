
<?php 
session_start();


if (isset($_SESSION['username'])) {
	header("Location:menuadmin.php");
		exit;


}
require'function.php';
$conn = koneksi();
if (isset($_POST['login'])) {
	$username=$_POST['username'];
	$password=$_POST['password'];

	$cek_user=mysqli_query($conn,"SELECT * FROM user WHERE username = '$username'");
	
	if (mysqli_num_rows($cek_user)==1) {
		
//cek user
		$user= mysqli_fetch_assoc($cek_user);

		if (password_verify($password,$user['password'])) {
			$_SESSION['username']=$username;
			header('location:menuadmin.php');
			exit;
		}else{
			$error='password salah ';
		}


		}else{
	//login gagal
	$error='Username/Password Salah !';
	
}
}?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <style>
    body{
        background:  url(./assets/img/bg_mobil.jpg) ; background-size:cover
    }
html,body{
    position: relative;
    height: 100%;
}

.login-container{
    position: relative;
    width: 300px;
    margin: 80px auto;
    padding: 20px 40px 40px;
    text-align: center;
    background: #fff;
    border: 1px solid #ccc;
}

#output{
    position: absolute;
    width: 300px;
    top: -75px;
    left: 0;
    color: #fff;
}

#output.alert-success{
    background: rgb(25, 204, 25);
}

#output.alert-danger{
    background: rgb(228, 105, 105);
}


.login-container::before,.login-container::after{
    content: "";
    position: absolute;
    width: 100%;height: 100%;
    top: 3.5px;left: 0;
    background: #fff;
    z-index: -1;
    -webkit-transform: rotateZ(4deg);
    -moz-transform: rotateZ(4deg);
    -ms-transform: rotateZ(4deg);
    border: 1px solid #ccc;

}

.login-container::after{
    top: 5px;
    z-index: -2;
    -webkit-transform: rotateZ(-2deg);
     -moz-transform: rotateZ(-2deg);
      -ms-transform: rotateZ(-2deg);

}

.avatar{
    width: 100px;height: 100px;
    margin: 10px auto 30px;
    border-radius: 100%;
    border: 2px solid #aaa;
    background-size: cover;
}

.form-box input{
    width: 100%;
    padding: 10px;
    text-align: center;
    height:40px;
    border: 1px solid #ccc;;
    background: #fafafa;
    transition:0.2s ease-in-out;

}

.form-box input:focus{
    outline: 0;
    background: #eee;
}

.form-box input[type="text"]{
    border-radius: 5px 5px 0 0;
    text-transform: lowercase;
}

.form-box input[type="password"]{
    border-radius: 0 0 5px 5px;
    border-top: 0;
}

.form-box button.login{
    margin-top:15px;
    padding: 10px 20px;
}

.animated {
  -webkit-animation-duration: 1s;
  animation-duration: 1s;
  -webkit-animation-fill-mode: both;
  animation-fill-mode: both;
}

@-webkit-keyframes fadeInUp {
  0% {
    opacity: 0;
    -webkit-transform: translateY(20px);
    transform: translateY(20px);
  }

  100% {
    opacity: 1;
    -webkit-transform: translateY(0);
    transform: translateY(0);
  }
}

@keyframes fadeInUp {
  0% {
    opacity: 0;
    -webkit-transform: translateY(20px);
    -ms-transform: translateY(20px);
    transform: translateY(20px);
  }

  100% {
    opacity: 1;
    -webkit-transform: translateY(0);
    -ms-transform: translateY(0);
    transform: translateY(0);
  }
}

.fadeInUp {
  -webkit-animation-name: fadeInUp;
  animation-name: fadeInUp;
}

    .error {
        color : red;
        font-style : italic;
    }
    
    </style>


</head>
<body>


    <div class="container">
	<div class="login-container">
            <div id="output"></div>
            <h1>Login</h1>
            <div class="form-box">
                <form action="" method="post">
                    
        <?php if(isset($error)) :  ?>
            <p class="error">Username / Password SALAH!!!</p>
        <?php endif; ?>

                    <input name="username" type="text" placeholder="username" required autocomplete="off">
                    <input name="password" type="password" placeholder="password" required minlength="4">
                    <button name="login" class="btn btn-info btn-block login"  type="submit">Login</button>
                </form>
                <p class="message">Not Registered? <a href="register.php">Register</a> </p>
            </div>
        </div>

</body>
</html>