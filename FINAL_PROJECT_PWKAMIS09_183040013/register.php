<?php 


require 'function.php';


if (isset($_POST['register'])){
    echo "<script>alert('Registrasi Berhasil!');
    document.location.href = 'login.php';
    </script>";

    if(registrasi($_POST) >1){

        // echo "<script>alert('Registrasi Berhasil!');
        // document.location.href = 'login.php';
        // </script>";

    }
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
    <style>
    body{background:  url(./assets/img/bg_mobil.jpg); background-size:cover ;  background-color:rgba(0, 0, 0, 1);
}
html,body{
    position: relative;
    height: 100%;
}

.register-container{
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


.register-container::before,.register-container::after{
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

.register-container::after{
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

.form-box button.register{
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
	<div class="register-container">
            <div id="output"></div>
            <h1>Register</h1>
            <div class="form-box">
                <form action="" method="post">
                    
        <?php if(isset($error)) :  ?>
            <p class="error">Username / Password SALAH!!!</p>
        <?php endif; ?>

                    <input name="user" type="text" required placeholder="Masukan Username" autocomplete="off" >   
                    <input name="password" type="password" required placeholder="Masukan Password" minlength="4">
                    <input name="password2" type="password" required placeholder="Konfirmasi password" minlength="4">

                    <button name="register" class="btn btn-info btn-block register" type="submit">Register</button>
                </form>
                <p class="message">Already have an account? <a href="login.php">Login</a> </p>
            </div>
        </div>

</body>
</html>