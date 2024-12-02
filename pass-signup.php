<!--Server side code to handle passenger sign up-->
<?php
	session_start();
	include('assets/inc/config.php');
		if(isset($_POST['pass_register']))
		{
			$pass_fname=$_POST['pass_fname'];
			#$mname=$_POST['mname'];
			$pass_lname=$_POST['pass_lname'];
			$pass_phone=$_POST['pass_phone'];
			$pass_addr=$_POST['pass_addr'];
			$pass_uname=$_POST['pass_uname'];
			$pass_email=$_POST['pass_email'];
			$pass_pwd=sha1(md5($_POST['pass_pwd']));
      //sql to insert captured values
			$query="insert into orrs_passenger (pass_fname, pass_lname, pass_phone, pass_addr, pass_uname, pass_email, pass_pwd) values(?,?,?,?,?,?,?)";
			$stmt = $mysqli->prepare($query);
			$rc=$stmt->bind_param('sssssss',$pass_fname, $pass_lname, $pass_phone, $pass_addr, $pass_uname, $pass_email, $pass_pwd);
			$stmt->execute();
			/*
			*Use Sweet Alerts Instead Of Javascript Alerts
			*echo"<script>alert('Successfully Created Account Proceed To Log In ');</script>";
			*/ 
			//declare a varible which will be passed to alert function
			if($stmt)
			{
				$success = "Created Account Proceed To Log In";
			}
			else {
				$err = "Please Try Again Or Try Later";
			}
			
			
		}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up</title>
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
      height: 640px;
      width: 400px;
      background-color: rgba(255,255,255,0.02);
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
  .col-6 {
            width: 163.4px;
            height: 46px;
            border: none;
            outline: none;
            color: #fff;
            background: #111;
            cursor: pointer;
            position: relative;
            z-index: 0;
            margin-top:8px;
            margin-left:5px;
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
            margin-left:5px;
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
            width: 163.4px;
            height: 100%;
            margin-top:8px;
            margin-left:5px;
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

        input type[submit]{
            display: block;
            height: 50px;
            width: 100%;
            color: #fff;
            background-color: #111;
            border-radius: 3px;
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
          border-radius: 3px;
          padding: 0 10px;
          margin-top: 8px;
          font-size: 14px;
          font-weight: 300;
        }
  ::placeholder{
      color: #e5e5e5;
  }
  button{
      margin-top: 30px;
      width: 100%;
      background-color: #ffffff;
      color: #080710;
      padding: 15px 0;
      font-size: 18px;
      font-weight: 600;
      border-radius: 5px;
      cursor: pointer;
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
  .col-6-7 {
            width: 163.4px;
            height: 50px;
            border: none;
            outline: none;
            color: #fff;
            background: rgba(255, 255, 255, 0.07);;
            cursor: pointer;
            position: relative;
            z-index: 0;
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        
        .col-6-7:before {
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
            display: flex;
            align-items: center;
            justify-content: center;
        }
        
        .col-6-7:active {
            color: #000
        }
        
        .col-6-7:active:after {
            background: transparent;
        }
        
        .col-6-7:hover:before {
            opacity: 1;
        }
        
        .col-6-7:after {
            z-index: -1;
            content: '';
            position: absolute;
            width: 100%;
            height: 100%;
            background: #111;
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
        a{
            color: white;
            text-decoration: none;
            font-weight: 600;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
  btn btn-success btn-xl{
    cursor: pointer;
  
  }
  
  input[submit]{
    cursor: pointer;
  }
  .col6-7{
    color:white;
    height: 50px;
    width: 163.4px;
    /* background-color: rgba(255, 255, 255, 0.07);s */
    border-radius: 3px;
    padding:10px 10px;
    margin-top: 8px;
    font-size: 14px;
    font-weight: 300;
    text-align: center;
    display: flex;
    
  }
  .reg-head{
    margin-left: 30px;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
  }

      </style>
</head>
<body>
    <div class="card-body">
            
        <?php if(isset($success)) {?>
                      <!--This code for injecting an alert-->
                              <script>
                                          setTimeout(function () 
                                          { 
                                              swal("Success!","<?php echo $success;?>!","success");
                                          },
                                              100);
                              </script>
              
                      <?php } ?>
                      <?php if(isset($err)) {?>
                      <!--This code for injecting an alert-->
                              <script>
                                          setTimeout(function () 
                                          { 
                                              swal("Failed!","<?php echo $err;?>!","Failed");
                                          },
                                              100);
                              </script>
              
                      <?php } ?>

        <!--Login Form-->
          <form method ="POST">
            <div class="login-form">
            <div class="hd">
                    <h1 class="reg-head">Registraion Form</h1>
                </div>
              <div class="form-group">
                <input class="form-control" name="pass_fname" type="text" placeholder="Enter Your First Name" autocomplete="off">
              </div>
              <div class="form-group">
                <input class="form-control" name="pass_lname" type="text" placeholder="Enter Your Last Name" autocomplete="off">
              </div>
              <div class="form-group">
                <input class="form-control" name="pass_phone" type="text" placeholder="Enter Your Phone Number" autocomplete="off">
              </div>
              <div class="form-group">
                <input class="form-control" name="pass_addr" type="text" placeholder="Enter Your Aadhaar Card Number" autocomplete="off">
              </div>
              <div class="form-group">
                <input class="form-control" name="pass_uname" type="text" placeholder="Enter Your Username" autocomplete="off">
              </div>
              <div class="form-group">
                <input class="form-control" name="pass_email" type="email" placeholder="Enter Your Email Address" autocomplete="off">
              </div>
              <div class="form-group">
                <input class="form-control" name="pass_pwd" type="password" placeholder="Password">
              </div>
              <div class="form-group row login-submit" style="display:flex;">
                <div class="col-6-7" style="color:white;height: 50px;width: 163.4px;background-color: rgba(255, 255, 255, 0.07);
    border-radius: 3px;
    padding:10px 10px;
    margin-top: 8px;
    font-size: 16px;
    font-weight: 300;
    text-align: center;
    display: flex;
    align-item:center;
    justify-content:center"><a class="btn btn-outline-success btn-xl" href="pass-login.php">Login</a></div>
                <div class="col-6"><input type = "submit" name ="pass_register" class="btn btn-outline-danger btn-xl" value ="Register" style=width:163.4px;background:#111;></div>
              </div>

            </div>
          </form>
          <!--End Login-->
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