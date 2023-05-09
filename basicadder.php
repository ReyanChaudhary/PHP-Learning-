<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- making out form for input -->
    <form action="calculator.php" method = "get">
        Enter number 1 : <input type="number" name = "numone">
        <br>
        Enter number 2 : <input type="number" name = "numtwo">
        <br>
        <input type="submit">
    </form>

    <!-- getting into backend -->
    Sum of the numbers is: <?php
    echo $_GET["numone"]  + $_GET["numtwo"]
    ?>
</body>
</html>
