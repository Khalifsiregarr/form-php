<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Login%%account</title>
</head>
<body>
    <div class="content">
        <h1><span>Beautiful</span> japan culture</h1>
        <p>no <span>worries</span> we <span>take care</span></p>

        <div class="form">
            <form action="login.php" method="post">
                <h2>Login</h2>

                <?php
                $top= "10px";
                    if (isset($_GET['error'])) { ?>
                    <p style="font-size: 15px;" class="error"><?php echo $_GET['error']; ?></p>
                <?php } ?>

                <input type="text" id="username" name="username" placeholder="username">
                <br><br> 
                <input type="password" id="password" name="password" placeholder="password">
                <br><br> 
                <input type="submit" value="Login" class="btn">
            </form>
        </div>
    </div>
</body>
</html>