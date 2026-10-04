<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Fini-Ko PHP exercise showing an array of interest rates.">
  <title>Interest Rates | Fini-Ko</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
<header class="site-header"><div class="container header-inner">
  <a class="brand" href="index.html" aria-label="Fini-Ko home"><img src="images/fini-ko-logo.png" alt="Fini-Ko logo"></a>
  <nav aria-label="Main navigation" class="main-nav">
    <a href="index.html">Home</a><a href="index.html#services">Services</a><a href="index.html#how-it-works">How It Works</a><a href="index.html#about">About</a><a href="index.html#contact">Contact</a><a class="nav-button" href="InterestArray.php">PHP Exercise</a>
  </nav>
</div></header>
<main><section class="section"><div class="container"><div class="section-heading"><p class="eyebrow">PHP exercise</p><h1>Interest Rates</h1><p>This page demonstrates PHP variables, an array, and a foreach loop.</p></div>
<div class="card"><h2>Interest Rates</h2><ul>
<?php
$InterestRate1 = .0725;
$InterestRate2 = .0750;
$InterestRate3 = .0775;
$InterestRate4 = .0800;
$InterestRate5 = .0825;
$InterestRate6 = .0850;
$InterestRate7 = .0875;
$RatesArray = array($InterestRate1,$InterestRate2,$InterestRate3,$InterestRate4,$InterestRate5,$InterestRate6,$InterestRate7);
foreach ($RatesArray as $Rate) { echo "<li>" . $Rate . "</li>"; }
?>
</ul><p><a class="button secondary" href="index.html">Return to Fini-Ko Home</a></p></div>
</div></section></main>
<footer class="site-footer"><div class="container footer-inner"><p>&copy; 2026 Fini-Ko. Laundry Pickup &amp; Delivery.</p><div class="footer-links"><a href="index.html">Home</a><a href="InterestArray.php">PHP Exercise</a></div></div></footer>
</body></html>
