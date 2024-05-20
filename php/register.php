<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/register.css">
</head>
<body>
    <div class="formulir">
        <form action="registerhandler.php" method="post">
            <h1> Register </h1>
            <div class="usn">
                <input type="text" name="username" placeholder="username"   >
            </div>
            <div class="pwd">
                <input type="password" name="password" placeholder="password">
            </div>
            <br>
            <div class="btn">
                <button type="submit" class = "btn" name="login">Login</button>
            </div>
        </form>
    </div>
</body>
</html>