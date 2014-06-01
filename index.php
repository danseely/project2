<?php

//index.php   
  
require_once 'includes/global.inc.php';  
?>  
  
<html>  
<head>  
    <title>Homepage</title>  
</head>  
<body>  

<div style="text-align:center">

<br />
<br />
<br />
<br />

<?php if(isset($_SESSION['logged_in'])) : ?>  
    <?php $user = unserialize($_SESSION['user']); ?>  
    <h3>Hello, <?php echo $user->username; ?>. You are logged in.</h3>
    <br />
    <a href="logout.php">Logout</a> | <a href="settings.php">Change Email</a>  
<?php else : ?>  
    <h3>Welcome!</h3>
    <br />
    <a href="login.php">Log In</a> | <a href="register.php">Register</a>  
<?php endif; ?>

</div>
  
</body>  
</html> 