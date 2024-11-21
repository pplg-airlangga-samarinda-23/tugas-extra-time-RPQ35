<!DOCTYPE html>
<html lang="en" id="indexone">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <?php 
    // Start the session at the beginning
    session_start(); 

    // Database connection
    $sname = "localhost";
    $unmae = "root";
    $password = "";
    $database = "login-tugas";
    $conn = mysqli_connect($sname, $unmae, $password, $database);
    
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    function login($conn, $username, $password) {
        $userpass = sha1($password);
        $stmt = mysqli_prepare($conn, "SELECT * FROM login_data WHERE username=? AND password=?");
        mysqli_stmt_bind_param($stmt, "ss", $username, $userpass);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
        
        $success = false; // Initialize $success to false

        if (mysqli_num_rows($result) > 0) {
            $success = true;
        }

        if ($success) {
            $_SESSION['username'] = $username; 
            // Redirect to home page
            header("Location: dashbor.php"); // Example redirect
            exit();
        } else {
            echo '<div class="alert alert-danger">Oops! It looks like your username and/or password are incorrect. Please try again.</div>';
        }

        mysqli_stmt_close($stmt); // Close the statement
    }

    // Check if the form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = $_POST['username'];
        $password = $_POST['pass'];
        login($conn, $username, $password);
    }
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
            <form method="POST" action="">
                <label for="username">Username:</label>
                <input type="text" name="username" placeholder="admin1234" required>
                <label for="password">Password:</label>
                <input type="password" name="pass" placeholder="12345" required>
                <button accesskey="submit" type="submit">Submit</button>
            </form>
            <a href="">Lupa password</a>
        </div>
    </main>
</body>
</html>