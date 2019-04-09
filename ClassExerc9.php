<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Class exercise 3</title>
</head>
<body>
<h1>Favorite Animal</h1>
<form method="get" action="ClassExerc9.php">
    <?php

    if(!isset($_GET['go']))

        echo
           "<label>Enter your favorite animal:<br/><input type='text' name='animal'></label>
            <br/>
            <input type='submit' name='go' value='Go' >";

    else

        echo "Your favorite animal is: ".$_GET['animal'];

    ?>
</form>
</body>
</html>