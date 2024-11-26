<?php
include 'manggil.php';

if (@$_SESSION['login'] == true) {
    header('Location: dashbor.php');
}

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['pass'];

    $data = $conn->query("SELECT * from login_data WHERE username = '$username'")->fetch_assoc();

    if (!$data || $password != $data['pass']) {
        echo "<script>alert('Login gagal')</script>";

        return; 
    }

    $_SESSION['login'] = true;
    $_SESSION['username'] = $data['username'];
    header('Location: dashbor.php');
}


// function login($conn, $username, $pass) {
//     $userpass = sha1($pass);
//     $stmt = mysqli_prepare($conn, "SELECT * FROM login_data WHERE username=? AND pass=?");
//     mysqli_stmt_bind_param($stmt, "ss", $username, $userpass);

//     if (!mysqli_stmt_execute($stmt)) {
//         echo "Error executing query: " . mysqli_error($conn);
//         return;
//     }

//     $result = mysqli_stmt_get_result($stmt);

//     if (mysqli_num_rows($result) > 0) {
//         $_SESSION['username'] = $username; 
//         // Redirect to home page
//         header("Location : dashbor.php"); // Example redirect
//         echo'<div>sukses</div>';
//         exit();
//     } else {
//         echo '<div class="alert alert-danger">Oops! It looks like your username and/or password are incorrect. Please try again.</div>';
//     }

//     mysqli_stmt_close($stmt); // Close the statement
// }

// // Check if the form is submitted
// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     $username = $_POST['username'];
//     $password = $_POST['pass'];
//     login($conn, $username, $password);
// }

// function open_jalan(){
//     header("Location : dashbor.php");
// }

// error_reporting(E_ALL);
// ini_set('display_errors', 1);

// $penentu=false;
// $user_inp = $_POST['username'] ?? null; 
// $pass_inp = $_POST['pass'] ?? null;

// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     $SsQL = "SELECT * FROM login_data ORDER BY id DESC";
//     $result = $conn->query($SsQL);

//     if ($result) {
//         while ($cobaab = $result->fetch_row()) {
//             $username_data = $cobaab[1];
//             $pass_data = $cobaab[2];

//             if ($user_inp==$username_data&&$pass_inp == $pass_data) {
//                 @$penentu=true;
//             }


//         }


//         if ($penentu) {
//              echo "<script>alert('benar')</script>";
//               header("Location: dashbor.php");
//                  exit(); 
//            } else {
//              echo "<script>alert('salah')</script>";
//          }

//     } else {
//         echo "Error: " . $conn->error;
//     }
// }
