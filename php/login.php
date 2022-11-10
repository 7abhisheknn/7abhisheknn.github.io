<?php
// echo "Connected successfully";
if(isset($_POST["submit1"]))
{
  $uname=$_POST['uname'];
  $pword=$_POST['pwd'];
     
  if ($uname=="admin" && $pword=="admin@123"){
    echo "Login Successful</br>";
  }
  else{
    echo "Login Unsuccessful</br>";
  }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../da_css/login.css">
    <script>  
        function validateform(){  
        var name=document.myform.uname.value;  
        var password=document.myform.pwd.value;
        if (name==null || name==""){  
          alert("Name can't be blank");  
          return false;  
        }
        else if(password==null || password==""){
            alert("Password can't be blank");  
            return false;  
        }

        else if(password.length<8){  
          alert("Password must be at least 8 characters long.");  
          return false;  
          }  
        }  
        </script>
</head>
<body>
    <div class="header">
        <div class="nmn">
            <a href=""  id="aa">Abhishek N N</a>
            
        </div>
        
        
    </div>
    <div class="hdr2">
        <a href="http://localhost/7abhisheknn.github.io/index.html" style="text-decoration: none;color :white;"><h2>Home&nbsp;&nbsp;&nbsp;</h2></a>
        <h2>Login&nbsp;&nbsp;&nbsp;</h2>
        <h2>Signup</h2>

    </div>
    <div class="bdy">
        <div class="language">
            <h1 >Login</h1>
            <hr><br><br>
            <form name="myform" action="" onsubmit="return validateform()" method="post">
                <h2>Username</h2> <br>
                <input type="text" name="uname" id="uname"> <br><br><br>
               <h2>Password</h2>  <br>
                <input type="password" name="pwd" id="pwd"><br><br><br>
                <button type="reset" id="rst"><h3 class="btns">Reset</h3></button>
                <button type="submit" name="submit1" id="sbmt" value="submt"><h3 class="btns">Submit</h3></button>
                
            </form>
        </div>
    </div>
    <!-- <div class="bdy2">
        <h1>hjfh</h1>
    </div> -->
    <!-- <h1>Hi</h1> -->
</body>
</html>