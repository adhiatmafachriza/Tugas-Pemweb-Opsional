<?php
    $error = false;
    // form masih kosong
    if(isset($_GET['field'])){
        $error = true;
        $message = 'mohon isi semua field!';
    }
    else{
        // form tidak kosong namun username invalid
        if(isset($_GET['username'])){
            $error = true;
            $message = 'karakter username salah!';
        }
    }
?>

<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
        <title>Document</title>
    </head>

    <body>
        <div class="container">
            <section id="login">
                <!-- pesan error -->
                <?php if($error == true): ?>
                    <p style="color:red"><?= $message ?></p>
                <?php endif ?>

                <form action="login.php" method="POST">
                    <p>Username</p>
                    <input type="text" id="username" placeholder="masukkan username" name="username">
                    <p>Password</p>
                    <input type="password" placeholder="masukkan password" name="password">
                    <button id="submit" type="submit" name="submit">Log In</button>
                </form>
            </section>
        </div>
    </body>
</html>