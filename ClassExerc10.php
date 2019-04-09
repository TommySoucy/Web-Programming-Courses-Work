<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Class exercise 3</title>
</head>
<body>
<h1>Die roller</h1>
<form method="get" action="ClassExerc10.php">
    <?php

    if(!isset($_GET['go']))

        echo
        "<label>Sides:<input type='text' name='sides'></label>
         <input type='submit' name='go' value='Go' >";

    else if(isset($_GET['go'])) {

        $rand=rand(1,$_GET['sides']);

        echo
        "<label>Sides:<input type='text' name='sides'></label>
         <label>Result:$rand</label>
         <input type='submit' name='go' value='Go' >";

    }

    ?>
</form>
</body>
</html>