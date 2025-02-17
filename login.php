<?php
session_start();
if (isset($_SESSION['user_id'])) {
    header("Location: dashboard.php"); // Dacă e autentificat, redirecționează-l
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<section class="login-form">
    <div class="container">
        <h2 class="text-center">Login</h2>
        
        <?php
        if (isset($_GET['error'])) {
            echo '<p class="error-message">' . htmlspecialchars($_GET['error']) . '</p>';
        }
        ?>

        <form action="login_process.php" method="POST">
            <label>Email</label>
            <input type="email" name="email" required>

            <label>Parola</label>
            <input type="password" name="password" required>

            <button type="submit" class="btn btn-primary">Login</button>
        </form>

        <p>Nu ai cont? <a href="register.php">Înregistrează-te aici</a></p>
    </div>
</section>

</body>
</html>
