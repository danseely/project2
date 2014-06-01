<?php

//login.php  
  
require_once 'includes/global.inc.php';  
  
$error = "";  
$username = "";  
$password = "";  
  
//check to see if they've submitted the login form  
if(isset($_POST['submit-login'])) {  
 
    $username = $_POST['username']; 
    $password = $_POST['password'];  
  
    $userTools = new UserTools();  
    if($userTools->login($username, $password)){  
        //successful login, redirect them to a page  
        header("Location: index.php");  
    }else{  
        $error = "Incorrect username or password. Please try again.";  
    }  
}  
?>
<html>  
<head>  
    <title>Login</title>  
</head>  
<body>  
	
	<div style="text-align:center">
	
	<h2 style="color:red">
	<?php echo ($error != "") ? $error : ""; ?><br />  
    </h2>
    
    <br />
	<br />
	<br />
	<br />
	
	<h3>Please login below</h3>
    
    <form action="login.php" method="post">  
        Username: <input type="text" name="username" value="<?php echo $username; ?>" /><br/>  
        Password: <input type="password" name="password" value="<?php echo $password; ?>" /><br/>  
        <input type="submit" value="Login" name="submit-login" />  
    </form>
    
    <br />
	<br />
	<br />
	<br />
	
	<a href="/project2/index.php">Home</a>
    
    </div>
    
</body>  
</html>