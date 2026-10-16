<section id="about"><div class="w about">
<?php $photo = 'assets/img/profile.jpg'; ?>
<?php if (is_file(__DIR__ . '/../' . $photo)): ?>
<img class="photo rv" src="<?= e($photo) ?>" alt="Foto profil Veendy" width="360" height="450" style="object-fit:cover">
<?php else: ?>
<div class="photo rv" role="img" aria-label="Placeholder foto profil Veendy"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.2" aria-hidden="true"><circle cx="12" cy="8" r="4"/><path d="M4 21c0-4.4 3.6-8 8-8s8 3.6 8 8"/></svg></div>
<?php endif; ?>
<div class="rv"><div class="h2"><small>// about</small><h2>About Me</h2></div>
<h3>Problem Solver with a Technical Mindset</h3>
<p>Saya memiliki ketertarikan pada dunia teknologi informasi dan fokus mengembangkan kemampuan di bidang IT Support, networking, hardware, software, dan IoT.</p>
<p>Saya menikmati proses troubleshooting, menganalisis masalah, mencari penyebab, dan menemukan solusi yang efektif. Saya juga terbiasa mempelajari teknologi melalui praktik langsung dan project.</p>
<div class="stats" id="stats"></div></div>
</div></section>
