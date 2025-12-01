<?php
// modules/user/list.php - daftar data mahasiswa (sederhana)
require __DIR__.'/../../views/header.php';
require __DIR__.'/../../config/database.php';

$db = new Database();
$result = $db->query('SELECT nim, nama, alamat FROM mahasiswa ORDER BY nim');
?>
<section class="card">
    <h1 class="page-title">Daftar Mahasiswa</h1>
    <p class="page-subtitle">Data diambil menggunakan class library Database.</p>

    <table class="form-table" style="margin-top:10px;">
        <tr>
            <th class="form-label" style="text-align:left;">NIM</th>
            <th class="form-label" style="text-align:left;">Nama</th>
            <th class="form-label" style="text-align:left;">Alamat</th>
        </tr>
        <?php if ($result && $result->num_rows > 0): ?>
            <?php while ($row = $result->fetch_assoc()): ?>
                <tr>
                    <td style="padding:6px 12px;"><?= htmlspecialchars($row['nim']) ?></td>
                    <td style="padding:6px 12px;"><?= htmlspecialchars($row['nama']) ?></td>
                    <td style="padding:6px 12px;"><?= htmlspecialchars($row['alamat']) ?></td>
                </tr>
            <?php endwhile; ?>
        <?php else: ?>
            <tr><td colspan="3" style="padding:8px 12px; color:#6b7280;">Belum ada data.</td></tr>
        <?php endif; ?>
    </table>

    <p style="margin-top:16px;"><a class="btn-link" href="add.php">+ Tambah Mahasiswa</a></p>
</section>
<?php
require __DIR__.'/../../views/footer.php';
