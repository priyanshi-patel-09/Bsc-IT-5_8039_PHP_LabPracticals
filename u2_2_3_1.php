<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>program2.3</title>
    </head>
    <body>
        <?php
            // 1 array_change_key_case()
                echo "<h3>1-array_change_key_case()</h3>";
                $arr = array("NAME"=>"priyanshi","CITY"=>"rajkot");
                echo"<br> Original array:<br>";
                print_r($arr);
                echo "<br><b>lower case keys:</b><br>";
                print_r(array_chnage_key_case($arr,CASE_LOWER));
                echo "<br><b>Upper case keys:</b><br>";
                print_r(array_change_key_case($arr, CASE_UPPER));   
        ?>
    </body>
</html>