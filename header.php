<?php
    $fonts = "verdana";
    $bgcolor = "#F3DFDF";
    $fontcolor = "#B793C1";
    
?>
<!doctype html>
<html>
<head>
    <title>PHP Syntax</title>
    <style>
    .body{font-family:<?php echo $fonts;?>}

    .phpcoding{width: 900px; margin: 0 auto; background:<?php echo"#DDF9DB" ?>;}

    .headeroption, .footeroption{background:<?php echo $bgcolor; ?>; color: <?php echo $fontcolor; ?>;
     padding: 15px; text-align: center;}

    .headeroption h2, .footeroption h2{margin: 0;}

    .maincontent{min-height: 400px; padding: 20px;}

    p{margin: 0;}
    </style>
</head>
<body>

    <div class="phpcoding">
        <section class="headeroption">
            <h2><?php echo"PHP Fundamentals Training"; ?></h2>
        </section>