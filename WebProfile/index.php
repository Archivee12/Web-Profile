<?php
$site_title = 'Wiki Kehidupan Saya';
$site_tagline = 'Beranda – ringkasan singkat dan navigasi utama';
include __DIR__ . '/partials/header.php';
?>
<h2 class="page-title">Selamat Datang</h2>
<p>Ini adalah wiki personal yang mendokumentasikan perjalanan hidup saya: pendidikan, pengalaman, hobi, prestasi, dan lain-lain.</p>


<div class="grid">
<div class="card"><h3>Kehidupan</h3><p>Timeline dan momen penting.</p><a href="/kehidupan.php">Lihat</a></div>
<div class="card"><h3>Pendidikan</h3><p>Riwayat sekolah & kuliah.</p><a href="/pendidikan.php">Lihat</a></div>
<div class="card"><h3>Pengalaman</h3><p>Pekerjaan, organisasi, magang.</p><a href="/pengalaman.php">Lihat</a></div>
<div class="card"><h3>Hobi</h3><p>Minat & aktivitas.</p><a href="/hobi.php">Lihat</a></div>
<div class="card"><h3>Prestasi</h3><p>Penghargaan & sertifikat.</p><a href="/prestasi.php">Lihat</a></div>
<div class="card"><h3>Kontak</h3><p>Email & sosial media.</p><a href="/kontak.php">Lihat</a></div>
</div>
<?php include __DIR__ . '/partials/partials/footer.php'; ?>