<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
         //4 array_combine()
         echo"<hr><h3>4-array_combine()<h3>";
         $keys=array("name","city","age");
         $values=array("priyanshi","morrajkotbi",20);
         print_r(array_combine($keys,$values));
    ?>
</body>
</html>