<?php 
if(isset($_GET['submit'])){
    $counter =htmlentities($_GET['counter']);

    setcookie('counter', $counter, time()+3600);
    // 1 hour set

    header('Location:image_refresh.php');
}
 
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>PHP Cookies Now</title>
</head>
<body>
<h1>counter</h1>

    <form method="GET" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <input type="text" name="counter" placeholder="Enter counter">
        <br>
        <input type="submit" name="submit" value="Submit">
    </form>
</body>
</html>