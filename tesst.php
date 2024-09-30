
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>

    </style>
</head>
<body>
    <div>
        <form action="tesst.php" method="get">
            <label for="">Username:</label>
            <input type="text" name="username">
            <label for="">Password</label>
            <input type="text" name="passord">
            <input type="submit"  value="login">
        </form>
    </div>
</body>
</html>
<?php
echo $_GET["username"] . "<br>";
?>