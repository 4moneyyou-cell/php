<?php $pageTitle='Funding Enquiry'; require 'includes/header.php'; ?>
<section class="page-hero"><div class="container"><div class="eyebrow">Funding Requirement</div><h1>Tell us about your requirement</h1><p>Complete the form and share your funding requirement.</p></div></section>
<section class="section">
<div class="container">
<?php if(isset($_GET['sent'])): ?><div class="notice">Thank you. Your enquiry has been submitted.</div><?php endif; ?>
<form class="form" method="post" action="forms/submit-enquiry.php">
<div class="form-grid">
<div class="field"><label>Company Name *</label><input name="company" required></div>
<div class="field"><label>Contact Person *</label><input name="contact_person" required></div>
<div class="field"><label>Mobile Number *</label><input name="mobile" required></div>
<div class="field"><label>Email Address *</label><input type="email" name="email" required></div>
<div class="field"><label>Funding Type *</label><select name="funding_type" required><option value="">Select</option><option>Business Loan</option><option>Working Capital</option><option>Project Finance</option><option>Startup Funding</option><option>Equity Funding</option><option>Government Funding</option><option>Corporate Funding</option></select></div>
<div class="field"><label>Required Amount</label><input name="amount" placeholder="e.g. ₹50 Lakh"></div>
<div class="field full"><label>Remarks / Requirement Details</label><textarea name="remarks"></textarea></div>
</div>
<button class="btn btn-gold" type="submit">Submit Enquiry</button>
</form>
</div></section>
<?php require 'includes/footer.php'; ?>