<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Ekuinova </title>
    <link rel="stylesheet" href="input.css">
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
    <form action="input_aksi.php" method="post">
        <table>
            <tr>
                <td> Coin or Stock </td>
                <td><input type="text" name="coin"></td>
            </tr>

            <tr>
                <td> Types of Coin or Stock </td>
                <td><input type="text" name="type"></td>
            </tr>

            <tr>
                <td> Amount </td>
                <td><input type="number" name="amount"></td>
            </tr>

            <tr>
                <td> Purchase Date </td>
                <td><input type="date" name="buyat"></td>
            </tr>

            <tr>
                <td> Sales Expectations at </td>
                <td><input type="number" name="sellat"></td>
            </tr>

            <tr>
                <td> Currency Used for Trading </td>
                <td><input type="text" name="currency"></td>
            </tr>

            <tr>
                <td></td>
                <td><button type="submit"> Submit </button></td>
            </tr>
        </table>
    </form>
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
</footer>

<script>
  // Toggle .has-value on date inputs so CSS can reveal the selected date
  (function(){
    function updateDateInput(el){
      if(!el) return;
      if(el.value) el.classList.add('has-value'); else el.classList.remove('has-value');
    }

    document.addEventListener('DOMContentLoaded', function(){
      var dates = document.querySelectorAll('input[type="date"]');
      dates.forEach(function(d){
        updateDateInput(d);
        d.addEventListener('change', function(){ updateDateInput(d); });
        d.addEventListener('input', function(){ updateDateInput(d); });
        d.addEventListener('focus', function(){ d.classList.add('focus-visible'); });
        d.addEventListener('blur', function(){ d.classList.remove('focus-visible'); });
      });
    });
  })();
</script>

</body>
</html>