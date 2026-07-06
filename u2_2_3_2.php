<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><program2.3.2</title>
</head>
<body>
    <?php
            // 2 array_chunk()
                echo"<hr><h3>2=array_chunk()</h3>";
                $months=array("jan","feb","march","april","may","june","july","aug","sep","oct","nov","dec");
                print_r(array_chunk($months,3,"<br>"));
    ?>
</body>
</html>