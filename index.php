<!DOCTYPE html>
<html lang="en">
<head>
    <link rel = "stylesheet" type = "text/css" href = "style.css">
    <title>Test</title>
</head>
<body>
    
    <h1> TEST </h1>
    <form action="submit.php" method = "POST">
    <input type = "text" name = "firstname" placeholder = "Firstname">
    <input type = "text" name = "lastname" placeholder = "Lastname">
    <button type ="submit" name = "sub">SUBMIT</button>
    </form>
    <div class = "date">
    <?php
        echo "<br>" . date('M. d Y');
    ?>
    </div>
</body>
</html>