<?php   

require_once 'includes/global.inc.php';  
  
//check to see if they're logged in  
if(!isset($_SESSION['logged_in'])) { 
    header("Location: login.php"); 
} 
 
//get the user object from the session 
$user = unserialize($_SESSION['user']); 
 
//initialize php variables used in the form 
$email = $user->email; 
$message = ""; 
 
//check to see that the form has been submitted 
if(isset($_POST['submit-settings'])) {  
 
    //retrieve the $_POST variables 
    $email = $_POST['email']; 
 
    $user->email = $email; 
    $user->save(); 
 
    $message = "Settings Saved<br/>"; 
} 
 
//If the form wasn't submitted, or didn't validate  
//then we show the registration form again  
?>  
  
<html>  
<head>  
    <title>Change Settings</title>  
</head>  
<body>

	<div style="text-align:center">

    <?php echo $message; ?>
    
    <br />
	<br />
	<br />
	<br />
	
		<h3>Enter your new email address below</h3>
  
    <form action="settings.php" method="post">  
  
    e-mail: <input type="text" value="<?php echo $email; ?>" name="email" /><br/>  
    <input type="submit" value="Update" name="submit-settings" />  
  
    </form> 
    
    <a href="/project2/index.php">Changed my mind - take me home</a>
    
    </div>
    
</body>  
</html> 