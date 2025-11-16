<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Ekuinova </title>
    <link rel="stylesheet" href="output.css">
    <link rel="icon" href="001-technical.png">
</head>
<body>
  <header>
    <nav class="navbar" role="navigation" aria-label="main navigation">
    <div class="logo" aria-label="Ekuinova Logo"><img src="001-technical.png" alt="" style="height: 22px; width: 22px; margin-left: -15px; margin-right: 5px;"> Ekuinova </div>
    <div class="nav-links" aria-label="Primary navigation">
      <a href="input.php" tabindex="0"> Insert Your Collections </a>
      <a href="output.php" tabindex="0"> See Collections </a>
      <button class="login" type="button" onclick="window.location.href = 'land.php'"> Log out </button>
    </div>
    </nav>
  </header>

  <div class="container">
        <h1> Your Crypto Collections </h1>
        <br>
        <div class="tambah-data-link">
            <a class="butn" href="input.php"> Add Collections </a>
        </div>
        <br>
        <br>
    </div>
    <div class="container">
    <table class="results-table">
        <tr>
            <th> Coin or Stock </th>
            <th> Types of Coin or Stock </th>
            <th> Amount </th>
            <th> Purchase Date </th>
            <th> Sales Expectations in </th>
            <th> Currency Used for Trading </th>
            <th> Update your Data </th>
        </tr>

        <?php
        include "koneksi.php";
        $data = mysqli_query($koneksi, "select * from input");
        while($d = mysqli_fetch_array($data)){
            ?>
            <tr>
                <td><?php echo $d['coin']?></td>
                <td><?php echo $d['type']?></td>
                <td><?php echo $d['amount']?></td>
                <td><?php echo $d['buyat']?></td>
                <td><?php echo $d['sellat']?></td>
                <td><?php echo $d['currency']?></td>
                <td>
                  <a class="btn" href="update.php?id=<?php echo $d['coin']; ?>">Update</a>
                  <a class="btn" href="delete.php?id=<?php echo $d['coin']; ?>">Delete</a>
                </td>
            </tr>
            <?php
            }
        ?>
          </table>
          </div>

  <footer aria-labelledby="site-footer">
    <div class="footer-top">
      <div class="footer-container" role="contentinfo">
        <section class="footer-section" aria-labelledby="footer-products">
          <h4 id="footer-products">Products</h4>
          <ul>
            <li><a href="#">Buy & Sell</a></li>
            <li><a href="#">Prices</a></li>
            <li><a href="#">Cards</a></li>
            <li><a href="#">Earn</a></li>
          </ul>
        </section>

        <section class="footer-section" aria-labelledby="footer-learn">
          <h4 id="footer-learn">Learn</h4>
          <ul>
            <li><a href="#">Blog</a></li>
            <li><a href="#">Help Center</a></li>
            <li><a href="#">Academy</a></li>
          </ul>
        </section>

        <section class="footer-section" aria-labelledby="footer-company">
          <h4 id="footer-company">Company</h4>
          <ul>
            <li><a href="#">About Us</a></li>
            <li><a href="#">Careers</a></li>
            <li><a href="#">Press</a></li>
          </ul>
        </section>

        <section class="footer-section" aria-labelledby="footer-legal">
          <h4 id="footer-legal">Legal</h4>
          <ul>
            <li><a href="#">Terms</a></li>
            <li><a href="#">Privacy</a></li>
            <li><a href="#">Fees</a></li>
          </ul>
        </section>

        <section class="footer-section" aria-labelledby="footer-support">
          <h4 id="footer-support">Support</h4>
          <ul>
            <li><a href="#">Contact</a></li>
            <li><a href="#">Report a problem</a></li>
            <li><a href="#">Status</a></li>
          </ul>
        </section>

        <section class="footer-section newsletter" aria-labelledby="footer-newsletter">
          <h4 id="footer-newsletter">Stay up to date</h4>
          <p class="muted">Get product updates, news, and insights.</p>
          <form class="newsletter-form" action="#" method="post" onsubmit="return false;">
            <label for="footer-email" class="visually-hidden">Email address</label>
            <input id="footer-email" type="email" placeholder="Enter your email" aria-label="Email address">
            <button class="cta small" type="submit">Subscribe</button>
          </form>

          <div class="app-badges">
            <a class="app" href="#" aria-label="Download on the App Store">App Store</a>
            <a class="app" href="#" aria-label="Get it on Google Play">Google Play</a>
          </div>

          <div class="social-links">
            <a href="#" aria-label="Facebook">Facebook</a>
            <a href="#" aria-label="Instagram">Instagram</a>
            <a href="#" aria-label="Twitter">Twitter</a>
            <a href="#" aria-label="LinkedIn">LinkedIn</a>
          </div>
        </section>
      </div>
    </div>

    <div class="footer-bottom">
      <div class="footer-container">
        <div>&copy; 2025 Ekuinova. All rights reserved.</div>
        <div class="footer-legal-links">
          <a href="#">Privacy</a>
          <a href="#">Terms</a>
          <a href="#">Security</a>
        </div>
      </div>
    </div>
  </footer>

</body>
</html>