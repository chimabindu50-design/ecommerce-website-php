<?php
include('../includes/db.php');
session_start();

$error_message = "";

if (isset($_POST['login'])) {

    $email = trim($_POST['email']);
    $password = trim($_POST['password']);

    $stmt = $conn->prepare("SELECT * FROM users WHERE email = ?");
    $stmt->execute([$email]);

    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    // Plain text password check
    if ($user && $password == $user['password']) {

        $_SESSION['user_id'] = $user['id'];
        $_SESSION['username'] = $user['username'];

        header("Location: ../index.php");
        exit();

    } else {

        $error_message = "Invalid Email or Password!";

    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>User Login</title>

<style>
body{
    font-family: Arial, sans-serif;
    background:#f4f4f9;
    display:flex;
    justify-content:center;
    align-items:center;
    height:100vh;
    margin:0;
}

.login-container{
    width:100%;
    max-width:400px;
    background:#fff;
    padding:30px;
    border-radius:8px;
    box-shadow:0 4px 10px rgba(0,0,0,0.1);
}

h2{
    text-align:center;
    margin-bottom:20px;
}

label{
    display:block;
    margin-bottom:5px;
    font-weight:bold;
}

input{
    width:100%;
    padding:10px;
    margin-bottom:15px;
    border:1px solid #ccc;
    border-radius:5px;
    box-sizing:border-box;
}

button{
    width:100%;
    padding:12px;
    background:#28a745;
    color:white;
    border:none;
    border-radius:5px;
    cursor:pointer;
    font-size:16px;
}

button:hover{
    background:#218838;
}

.error{
    color:red;
    text-align:center;
    margin-bottom:15px;
}
</style>

</head>
<body>

<div class="login-container">

    <h2>User Login</h2>

    <?php if(!empty($error_message)){ ?>
        <p class="error"><?php echo $error_message; ?></p>
    <?php } ?>

    <form method="POST">

        <label>Email</label>
        <input type="email" name="email" required>

        <label>Password</label>
        <input type="password" name="password" required>

        <button type="submit" name="login">Login</button>

    </form>

</div>

</body>
</html>
