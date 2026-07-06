<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>program2.2</title>
</head>
<body>
    <?php
            echo"sorting array"."<br>";
            
            $names=array("priyanshi","diyanshi","komal","krisha","kavya"," vanshita");
            
            foreach($names as $n)
            {
                echo $n."<br>";
            }
            echo "<br>"."after sorting"."<br>";

            sort($names);
            foreach($names as $n1)
            {
                echo $n1 . "<br>";
            }
    ?>
</body>
</html>