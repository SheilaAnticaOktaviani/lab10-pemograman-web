<?php
// modules/auth/login.php - halaman login menggunakan class Database
session_start();

require __DIR__.'/../../config/database.php';

$error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = isset($_POST['username']) ? trim($_POST['username']) : '';
    $password = isset($_POST['password']) ? trim($_POST['password']) : '';

    $db = new Database();

    // Contoh sederhana (tanpa hashing password, untuk praktikum dasar)
    $sql = "SELECT * FROM users WHERE username = '".$username."' AND password = '".$password."' LIMIT 1";
    $result = $db->query($sql);

    if ($result && $result->num_rows === 1) {
        $_SESSION['username'] = $username;
        header('Location: ../../index.php');
        exit;
    } else {
        $error = 'Username atau password salah.';
    }
}

require __DIR__.'/../../views/header.php';
?>
<section class="card">
    <h1 class="page-title">Login</h1>
    <p class="page-subtitle">Silakan login untuk mengakses aplikasi.</p>

    <?php if ($error): ?>
        <p style="color:#b91c1c; font-size:14px; margin-bottom:12px;">
            <?= htmlspecialchars($error) ?>
        </p>
    <?php endif; ?>

    <form method="POST" class="form-box" style="margin-top:10px;">
        <table class="form-table">
            <tr>
                <td class="form-label">Username</td>
                <td><input class="form-input" type="text" name="username" required></td>
            </tr>
            <tr>
                <td class="form-label">Password</td>
                <td><input class="form-input" type="password" name="password" required></td>
            </tr>
            <tr>
                <td colspan="2">
                    <button type="submit" class="btn-primary">Login</button>
                </td>
            </tr>
        </table>
    </form>
</section>
<?php
require __DIR__.'/../../views/footer.php';
