<section id="contact"><div class="w ct">
<div class="rv"><div class="h2" style="margin-bottom:16px"><small>// contact</small><h2>Let's Work Together</h2></div>
<p style="color:var(--mu);max-width:44ch">Terbuka untuk kesempatan di bidang IT Support, Technical Support, Helpdesk, System Support, dan Networking.</p>
<div class="cards" id="cc"></div></div>
<form class="rv" id="f" method="post" action="api/contact.php" data-action="api/contact.php" novalidate aria-label="Form kontak">
<input type="hidden" name="csrf" value="<?= e(csrf_token()) ?>">
<div class="hp" aria-hidden="true"><label>Website<input name="website" tabindex="-1" autocomplete="off"></label></div>
<div><label for="n">Name</label><input id="n" name="name" autocomplete="name" required><div class="err">Nama wajib diisi.</div></div>
<div><label for="e">Email</label><input id="e" name="email" type="email" autocomplete="email" required><div class="err">Masukkan email yang valid.</div></div>
<div><label for="s">Subject</label><input id="s" name="subject" required><div class="err">Subjek wajib diisi.</div></div>
<div><label for="m">Message</label><textarea id="m" name="message" rows="5" required></textarea><div class="err">Pesan minimal 10 karakter.</div></div>
<button class="btn p" type="submit">Send Message</button>
<p class="mono" style="font-size:12px;color:var(--mu)">Pesan dikirim lewat server dan diteruskan ke email saya.</p>
</form>
</div></section>
