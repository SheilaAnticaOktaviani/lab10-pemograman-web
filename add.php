<?php
// modules/user/add.php - form tambah mahasiswa
require __DIR__.'/../../views/header.php';
require __DIR__.'/Form.php';
?>
<section class="card">
    <h1 class="page-title">Input Data Mahasiswa</h1>
    <p class="page-subtitle">Form sederhana menggunakan class library Form.</p>
    <?php
    $form = new Form('process_add.php', 'Simpan Data');
    $form->addField('txtnim', 'NIM');
    $form->addField('txtnama', 'Nama');
    $form->addField('txtalamat', 'Alamat');

    $form->displayForm();
    ?>
</section>
<?php
require __DIR__.'/../../views/footer.php';
