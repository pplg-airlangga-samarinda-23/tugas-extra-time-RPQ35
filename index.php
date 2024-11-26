<!DOCTYPE html>
<html lang="en" id="indexone">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <?php 
    include 'login-system.php';
    ?>
</head>
<body>

    <main>
        <div id="laman-kiri">
           <div class="isi-kiri">
              
           </div>  
        </div>
        <div id="login">
            <div class="konten-atas"></div>
            <form  method="POST">
                <label for="username">Username:</label>
                <input type="text" name="username" placeholder="admin1234" required>
                <label for="password">Password:</label>
                <input type="password" name="pass" placeholder="12345" required>
                <button accesskey="submit" name="submit" type="submit">Submit</button>
            </form>
            <a href="">Lupa password</a>
        </div>
    </main>
</body>
</html>