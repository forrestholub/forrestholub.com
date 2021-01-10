<?php
$counter = $_COOKIE['counter'];
?>
<h1>counter</h1>
<p> Your delay time is:<?php echo $_COOKIE['counter']; ?>  <br> </p>
<body>
            <h1 style="text-align:left">Random Image Factory</h1>
        <div class="item">
            <img src="vance_bridge_homepage_50kb.JPG">
        </div>
</body>
<?php
$page = $_SERVER['PHP_SELF'];
echo $page;
for ($i = 1; ; $i++) {
    sleep(1);
    
    if ($i > $counter) {
        echo '<script type="text/javascript">location.reload();</script>';
        break;
    }
    echo $i;
}


?>
