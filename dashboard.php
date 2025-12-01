<?php
// views/dashboard.php
require __DIR__.'/header.php';
?>
<section class="card">
    <h1 class="page-title">Dashboard</h1>
    <p class="page-subtitle">Implementasi modularisasi dengan class library Form dan Database.</p>

    <h3>Menu Utama</h3>
    <ul class="menu-list">
        <li><a class="btn btn-primary" href="/lab10_php_oop/modules/user/add.php">Input Data Mahasiswa</a></li>
        <li><a class="btn btn-success" href="/lab10_php_oop/mobil.php">Contoh Class OOP: Mobil</a></li>
    </ul>
</section>
<?php
require __DIR__.'/footer.php';
?>
