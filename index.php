<?php
session_start();

$username = 'buyerrazz'; // ganti sesuai user lu
$password = 'razz999';   // ganti sesuai pw lu

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $user = $_POST['username'];
    $pass = $_POST['password'];

    if ($user === $username && $pass === $password) {
        $_SESSION['logged_in'] = true;
        header('Location: panel.php');
        exit;
    } else {
        $error = "Username atau Password salah.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body class="bg-gray-900 text-white">
    <div class="flex items-center justify-center min-h-screen">
        <form id="login-form" class="space-y-6 bg-gray-800 p-6 rounded-lg shadow-lg" method="POST">
            <h2 class="text-2xl font-bold">Login Reseller Panel</h2>

            <?php if (!empty($error)) : ?>
                <p class="text-red-500"><?= $error ?></p>
            <?php endif; ?>

            <input type="text" name="username" placeholder="Username" required class="w-full p-2 rounded bg-gray-700 text-white">
            <input type="password" name="password" placeholder="Password" required class="w-full p-2 rounded bg-gray-700 text-white">
            <button type="submit" class="w-full bg-blue-600 hover:bg-blue-700 p-2 rounded">Login</button>
        </form>
    </div>
</body>
</html>