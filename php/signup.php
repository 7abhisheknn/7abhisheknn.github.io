<?php
$conn=mysqli_connect('localhost','root','','iwp_da');

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

if(isset($_POST["submit1"]))
{
    $name=$_POST['nme'];
    $email=$_POST['eml'];
    $pno=$_POST['pno'];  
    $uname=$_POST['uname'];
    $pword=$_POST['pwd'];
  $newuser="INSERT INTO `people`(`name`, `email`, `phone`, `username`, `password`) VALUES ('$name','$email','$pno','$uname','$pword')";
    if(mysqli_query($conn,$newuser))
    {
        
        header('Location:../index.html');
    }
    else
    {
        echo 'query error: '. mysqli_error($conn);
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="../da_css/signup.css"> 
</head>
<body>
    <script>  
        function validateform(){  
        var name=document.myform.nme.value;  
        var password=document.myform.pwd.value;
        var emai=document.myform.eml.value;
        var phoneno=document.myform.pno.value;
        var username=document.myform.uname.value;  
          
        if (name==null || name==""){  
          alert("Name can't be blank");  
          return false;  
        }
        else if(emai==null || emai==""){
            alert("Email can't be blank");  
            return false;  
        }
        else if(phoneno==null || phoneno==""){
            alert("Phone No can't be blank");  
            return false;  
        }
        else if(username==null || username==""){
            alert("Username can't be blank");  
            return false;  
        }
        else if(password==null || password==""){
            alert("Password can't be blank");  
            return false;  
        }

        else if(password.length<8){  
          alert("Password must be at least 6 characters long.");  
          return false;  
          }  
        }  
        </script>  
    <div class="header">
        <div class="nmn">
            <a href="" id="aa">Abhishek N N</a>
            
        </div>
        
        
    </div>
    <div class="hdr2">
        <a href="http://localhost/7abhisheknn.github.io/index.html" style="text-decoration: none;color :white;"><h2>Home&nbsp;&nbsp;&nbsp;</h2></a>
        <h2>Login&nbsp;&nbsp;&nbsp;</h2>
        <h2>Signup</h2>

    </div>
    <div class="bdy">
        <div class="language">
            <h1 ">Sign Up</h1>
            <hr><br><br>
            <form name="myform" action="<?php echo $_SERVER['PHP_SELF']; ?>" onsubmit="return validateform()" method="post">
                <h2 style="text-align:left;padding-left: 11%;">Name</h2>
                <input type="text" name="nme" id="nme"><br><br><br>
                <h2 style="text-align:left;padding-left: 11%;">Email Id</h2>
                <input type="email" name="eml" id="eml"><br><br><br>
                <h2 style="text-align:left;padding-left: 11%;">Phone No</h2>
                <input type="tel" name="pno" id="pno"><br><br><br>
                <h2 style="text-align:left;padding-left: 11%;">Username</h2> 
                <input type="text" name="uname" id="uname"> <br><br><br>
               <h2 style="text-align:left;padding-left: 11%;">Password</h2> 
                <input type="password" name="pwd" id="pwd"><br><br><br>
                <button type="reset" id="rst"><h3 class="btns">Reset</h3></button>
                <button type="submit" id="sbmt" name="submit1"><h3 class="btns">Submit</h3></button>
                
            </form>
        </div>
    </div>
</body>
</html>