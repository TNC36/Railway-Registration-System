<!-- Server side code for log in-->
<?php
    session_start();
    include('assets/inc/config.php');//get configuration file
    if(isset($_POST['pass_login']))
    {
      $pass_email=$_POST['pass_email'];
      $pass_pwd=sha1(md5($_POST['pass_pwd']));//double encrypt to increase security
      $stmt=$mysqli->prepare("SELECT pass_email ,pass_pwd , pass_id FROM orrs_passenger WHERE pass_email=? and pass_pwd=? ");//sql to log in user
      $stmt->bind_param('ss',$pass_email,$pass_pwd);//bind fetched parameters
      $stmt->execute();//execute bind
      $stmt -> bind_result($pass_email,$pass_pwd,$pass_id);//bind result
      $rs=$stmt->fetch();
      $_SESSION['pass_id']=$pass_id;//assaign session to passenger id
      //$uip=$_SERVER['REMOTE_ADDR'];
      //$ldate=date('d/m/Y h:i:s', time());
      if($rs)
      {//if its sucessfull
        header("location:pass-dashboard.php");
      }

      else
      {
      #echo "<script>alert('Access Denied Please Check Your Credentials');</script>";
      $error = "Access Denied Please Check Your Credentials";
      }
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Passenger login</title>
 
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
    <!--Stylesheet-->
    <style media="screen">
      *,
*:before,
*:after{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
}
body{
    background: url("./images/s-bg.jpg");
    background-repeat: no-repeat;
    background-size:cover ;
}

form{
    height: 520px;
    width: 400px;
    background-color: rgba(255,255,255,0.03);
    position: absolute;
    transform: translate(-50%,-50%);
    top: 50%;
    left: 50%;
    border-radius: 10px;
    backdrop-filter: blur(10px);
    border: 2px solid rgba(255,255,255,0.1);
    box-shadow: 0 0 40px rgba(8,7,16,0.6);
    padding: 50px 35px;
}
form *{
    font-family: 'Poppins',sans-serif;
    color: #ffffff;
    letter-spacing: 0.5px;
    outline: none;
    border: none;
}
form h3{
    font-size: 25px;
    font-weight: 500;
    line-height: 30px;
    text-align: center;
}

label{
    display: block;
    margin-top: 30px;
    font-size: 16px;
    font-weight: 500;
}
/* input{
    display: block;
    height: 50px;
    width: 100%;
    background-color: rgba(255,255,255,0.07);
    border-radius: 3px;
    padding: 0 10px;
    margin-top: 8px;
    font-size: 14px;
    font-weight: 300;
} */
input{
            display: block;
            height: 50px;
            width: 100%;
            color: #fff;
            background-color: rgba(255,255,255,0.13);
            border-radius: 3px;
            padding: 0 10px;
            margin-top: 8px;
            font-size: 14px;
            font-weight: 300;
        }
        input:hover{
          color:white;
          background-color:black;
        }
        input:active{
          color:white;
        }
::placeholder{
    color: #e5e5e5;
}
button{
    margin-top: 30px;
    width: 100%;
    background-color: #ffffff;
    color: white;
    padding: 15px 0;
    font-size: 18px;
    font-weight: 600;
    border-radius: 5px;
    cursor: pointer;
}
.reg {
  margin-top:30px;
    width: 100%;
    height: 50px;
    border: none;
    outline: none;
    color: #fff;
    background: #111;
    cursor: pointer;
    position: relative;
    z-index: 0;
    border-radius: 10px;
}

.reg:before {
    content: '';
    background: linear-gradient(45deg, #ff0000, #ff7300, #fffb00, #48ff00, #00ffd5, #002bff, #7a00ff, #ff00c8, #ff0000);
    position: absolute;
    top: -2px;
    left:-2px;
    background-size: 400%;
    z-index: -1;
    filter: blur(5px);
    width: calc(100% + 4px);
    height: calc(100% + 4px);
    animation: glowing 20s linear infinite;
    opacity: 0;
    transition: opacity .3s ease-in-out;
    border-radius: 10px;
}

.reg:active {
    color: #000
}

.reg:active:after {
    background: transparent;
}

.reg:hover:before {
    opacity: 1;
}

.reg:after {
    z-index: -1;
    content: '';
    position: absolute;
    width: 100%;
    height: 100%;
    background: #111;
    left: 0;
    top: 0;
    border-radius: 10px;
}

.reg a{
  color:#fff;
  font-size:medium;
}

@keyframes glowing {
    0% { background-position: 0 0; }
    50% { background-position: 400% 0; }
    100% { background-position: 0 0; }
}
.social{
  margin-top: 30px;
  display: flex;
}
.social div{
  background: red;
  width: 150px;
  border-radius: 3px;
  padding: 5px 10px 10px 5px;
  background-color: rgba(255,255,255,0.27);
  color: #eaf0fb;
  text-align: center;
}
.social div:hover{
  background-color: rgba(255,255,255,0.47);
}
.social .fb{
  margin-left: 25px;
}
.social i{
  margin-right: 4px;
}
a{
    color: black;
    text-decoration: none;
    font-weight: 100;
    font-family: 'Poppins', sans-serif;
}
btn btn-success btn-xl{
  cursor: pointer;

}

input[submit]{
  cursor: pointer;
}


.col-6 {
            width: 100%;
            height: 46px;
            border: none;
            outline: none;
            color: #fff;
            background: #111;
            cursor: pointer;
            position: relative;
            z-index: 0;
            margin-top:8px;
            /* margin-left:5px; */
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        
        .col-6:before {
            content: '';
            background: linear-gradient(45deg, #ff0000, #ff7300, #fffb00, #48ff00, #00ffd5, #002bff, #7a00ff, #ff00c8, #ff0000);
            position: absolute;
            top: -2px;
            left:-2px;
            background-size: 400%;
            z-index: -1;
            filter: blur(5px);
            width: calc(100% + 4px);
            height: calc(100% + 4px);
            animation: glowing 20s linear infinite;
            opacity: 0;
            margin-top:8px;
            /* margin-left:5px; */
            transition: opacity .3s ease-in-out;
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        
        .col-6:active {
            color: #000
        }
        
        .col-6:active:after {
            background: transparent;
        }
        
        .col-6:hover:before {
            opacity: 1;
        }
        
        .col-6:after {
            z-index: -1;
            content: '';
            position: absolute;
            width: 100%;
            height: 100%;
            margin-top:8px;
            /* margin-left:5px; */
            /* background: #111; */
            left: 0;
            top: 0;
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        
        @keyframes glowing {
            0% { background-position: 0 0; }
            50% { background-position: 400% 0; }
            100% { background-position: 0 0; }
        }
        input{
            display: block;
            height: 50px;
            width: 100%;
            color: #fff;
            background-color: rgba(255,255,255,0.13);
            border-radius: 10px;
            padding: 0 10px;
            margin-top: 8px;
            font-size: 14px;
            font-weight: 300;
        }
        input:hover{
          color:white;
          background-color:black;
        }
        input:active{
          color:white;
        }

        input type[submit]{
            display: block;
            height: 50px;
            width: 100%;
            color: #fff;
            background-color: #111;
            border-radius: 10px;
            padding: 0 10px;
            margin-top: 8px;
            font-size: 14px;
            font-weight: 300;
        }
        input .btn btn-outline-danger btn-xl{
          margin-top:10px;
          width:100%;
          top: 50px;
          display: block;
          height: 50px;
          width: 100%;
          color: #fff;
          background-color: #111;
          border-radius: 10px;
          padding: 0 10px;
          margin-top: 8px;
          font-size: 14px;
          font-weight: 300;
        }
  ::placeholder{
      color: #e5e5e5;
  }



    </style>
     <!--Trigger Sweet Alert-->
     <?php if(isset($error)) {?>
        <!--This code for injecting an alert-->
            <script>
                  setTimeout(function () 
                  { 
                    swal("Failed!","<?php echo $error;?>!","error");
                  },
                    100);
            </script>
                          
                  <?php } ?>
</head>
<body>
    <form method="POST">
        <h3>Please Enter Your information</h3>

        <label for="username">Username</label>
        <input class="form-control" name="pass_email" type="text" placeholder="Email" autocomplete="off">

        <label for="password">Password</label>
        <input class="form-control" name="pass_pwd" type="password" placeholder="Password">

        <button class="reg"><a class="btn btn-danger btn-xl" href="pass-signup.php">Register</a></button>
        <div class="col-6"><input type="submit" name="pass_login" class="btn btn-success btn-xl" value="Log In" style="background-color: #111;"></div>
        <div class="home"><a href="index.php" style="display: block;text-align: center;margin-top: 20px;">HOME</a></div>
        <!-- <div class="social">
          <div class="go"><i class="fab fa-google"></i>  Google</div>
          <div class="fb"><i class="fab fa-facebook"></i>  Facebook</div>
        </div> -->
    </form>
    <script src="assets/lib/jquery/jquery.min.js" type="text/javascript"></script>
    <script src="assets/lib/perfect-scrollbar/js/perfect-scrollbar.min.js" type="text/javascript"></script>
    <script src="assets/lib/bootstrap/dist/js/bootstrap.bundle.min.js" type="text/javascript"></script>
    <script src="assets/js/app.js" type="text/javascript"></script>
    <script src="assets/js/swal.js"></script>

    <script type="text/javascript">
      $(document).ready(function(){
      	//-initialize the javascript
      	App.init();
      });
      
    </script>
</body>
</html>
