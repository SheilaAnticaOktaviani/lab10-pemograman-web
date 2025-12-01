// assets/js/app.js
// Script sederhana untuk interaksi UI

// Tambah kelas 'js-enabled' ke body ketika JS aktif
document.addEventListener('DOMContentLoaded', function () {
    document.body.classList.add('js-enabled');

    // Tambah konfirmasi sederhana saat submit form dengan class 'form-box'
    var forms = document.querySelectorAll('form.form-box');
    forms.forEach(function (form) {
        form.addEventListener('submit', function (e) {
            // Validasi singkat: cek field kosong
            var inputs = form.querySelectorAll('input[type="text"]');
            var empty = false;
            inputs.forEach(function (inp) {
                if (!inp.value.trim()) {
                    empty = true;
                }
            });
            if (empty) {
                e.preventDefault();
                alert('Mohon isi semua field sebelum mengirim form.');
                return;
            }

            if (!confirm('Apakah data sudah benar dan akan disimpan?')) {
                e.preventDefault();
            }
        });
    });
});
