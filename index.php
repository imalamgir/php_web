<?php 
session_start();
include 'header.php'; 
setcookie('visited', "", time() - 3600);
?>
    <section class="maincontent">
        
        <br/>
        <hr/>
        PHP array() Function - array_intersect_key
        <span style= "float:right">
            <?php
                date_default_timezone_set('Asia/Dhaka');
                echo "Time : ".date("h:i:sa")."<br/>";
            ?>
        </span>
        <hr/>
        <br/>
        
            <?php
                /*
                
                */

                $array_one =array(
                    "a" => "red",
                    "b" => "white",
                    "c" => "blue",
                    "d" => "yellow"
                );
                $array_two =array(
                    "a" => "red",
                    "c" => "blue",
                    "d" => "black"
                );
                $array_three =array(
                    "a" => "red",
                    "d" => "green",
                    "c" => "blue"
                );
                
                
                $result = array_intersect_key($array_one, $array_two, $array_three);

                print("<pre>");
                print_r($result);
                print("</pre>");
                
            ?>
            
    </section>        
<?php include 'footer.php'; ?>