<?php $pageTitle='Industries We Serve'; require 'includes/header.php'; ?>
<section class="page-hero"><div class="container"><div class="eyebrow">Industries</div><h1>Industry-aware funding support</h1><p>We understand industry-specific financial requirements and structure funding solutions accordingly.</p></div></section>
<section class="section"><div class="container services-grid grid">
<?php foreach(['Manufacturing','Textile','Trading','Construction','Logistics','Healthcare','Education','Retail','Hospitality','Agriculture','E-Commerce','Information Technology'] as $industry): ?>
<article class="card"><h3><?= htmlspecialchars($industry) ?></h3><p>Financial and funding support tailored to the requirements of the industry.</p></article>
<?php endforeach; ?>
</div></section>
<?php require 'includes/footer.php'; ?>