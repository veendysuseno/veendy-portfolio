# Veendy Portfolio (PHP)

## Menjalankan lokal
    php -S localhost:8000
Buka http://localhost:8000 (butuh PHP 7.4+).

## Yang perlu Anda ganti
- `assets/js/data.js` : nama kontak, skill, project, pengalaman, pendidikan, sertifikasi, `cvUrl`
- `config/config.php` : title SEO, email tujuan (`mail_to`) dan pengirim (`mail_from`)
- `assets/img/profile.jpg` : foto profil (otomatis tampil jika file ada)
- `assets/cv/` : taruh PDF CV, lalu isi `cvUrl` di data.js (mis. `assets/cv/Veendy-CV.pdf`)

## Deploy
Upload semua isi folder ke hosting PHP (Apache). Form kontak memakai `mail()`;
pastikan `mail_from` memakai domain hosting Anda agar tidak masuk spam.
