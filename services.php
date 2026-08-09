<?php $pageTitle='Services'; require 'includes/header.php'; ?>
<section class="page-hero"><div class="container"><div class="eyebrow">Our Services</div><h1>Funding solutions for every growth stage</h1><p>Business finance, corporate funding, investment, government funding and compliance support.</p></div></section>
<section class="section"><div class="container services-grid grid">
<?php
$services=[
['Business Loan Solutions','Working Capital Loans, Term Loans, Unsecured Business Loans, Machinery Loans, MSME Loans, Expansion Funding'],
['Corporate Funding','Large Ticket Funding, Structured Finance, Debt Syndication, Project Finance, Acquisition Funding'],
['Startup Funding','Seed Funding, Angel Investment, Venture Capital Support, Startup Advisory'],
['Equity Funding','Private Equity, Venture Capital, Strategic Investment, Growth Capital, Joint Ventures, Investor Networking'],
['Government Funding & Subsidies','MSME Schemes, Startup India Benefits, CGTMSE Assistance, Capital Subsidies, Interest Subsidies, Export Promotion Schemes'],
['Compliance Services','GST Registration & Compliance, Company Registration, ROC Filing, Financial Documentation, Project Reports, CMA Data Preparation, Financial Analysis']
];
foreach($services as $s): ?>
<article class="card"><div class="icon">◆</div><h3><?= htmlspecialchars($s[0]) ?></h3><p><?= htmlspecialchars($s[1]) ?></p><a class="btn btn-gold" href="enquiry.php">Enquire Now</a></article>
<?php endforeach; ?>
</div></section>
<?php require 'includes/footer.php'; ?>