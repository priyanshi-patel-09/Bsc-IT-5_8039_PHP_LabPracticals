<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>program2.6</title>
</head>
<body>
    <h2>calculator</h2>
    <form  method="post";>
        <input type="number" name="num1" placeholder="enter the first num" required>
        <br>
        <input type="number" name="num2" placeholder="enter the second num" required>
        <br>
        Operation:
        <select name="operator">
        <option value="+">Addition </option>
        <option value="-">Subtraction </option>
        <option value="*">Multiplication </option>
        <option value="/">Division </option>
        <option value="%">Modulus</option>
        </select><br><br>
        <input type="submit" name="submit" values="calculate">
     </form>
     <?php
            function calculate($num1,$num2,$operator)
            {
                switch($operator)
                {
                    case '+':
                        return $num1 + $num2;
                    case '-':
                        return $num1 - $num2;
                    case'*':
                         return $num1 * $num2; 
                    case '/':
                         return $num1 / $num2;
                    case '%':
                         return $num1 % $num2;
                    default:
                        return "Invalid operation";
                }
            }
            if(isset($_POST['submit']))
            {
                $n1 = $_POST['num1'];
                $n2 = $_POST['num2'];
                $operator = $_POST['operator'];

                $result=calculate($n1,$n2,$operator);
                echo"<h3>Answer =" .$result."</h3>";

            }
     ?>
</body>
</html>