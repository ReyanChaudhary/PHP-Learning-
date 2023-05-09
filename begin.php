<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- Creating a form for the user-->
    <form action="site.php" method = "get">
        Name : <input type = "text" name = "username">
        <br>  
        Age : <input type = "number" name = "age">
        <br>
        <input type="submit">
    </form>

    <!-- Module 1 -->
    <!-- <?php
    // //Writing a valid html code
    // echo("<h1> PHP start </h1>");//heading
    // echo("<hr>");//liner
    // echo("<p>Using html in php </p>");//paratag
    ?> -->
    <!-- Your name is <?php echo $_GET["username"] ?> -->
    <br>
    Your age is <?php echo $_GET["age"] ?>
</body>
</html>

<!-- Running on local host port 4000 on local system -->
