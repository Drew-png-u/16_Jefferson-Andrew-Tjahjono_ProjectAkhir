<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Ekuinova </title>
    <link rel="stylesheet" href="land.css">
    <link rel="icon" href="001-technical.png">
</head>
<body>
  <header>
    <nav class="navbar" role="navigation" aria-label="main navigation">
    <div class="logo" aria-label="Ekuinova Logo"><img src="001-technical.png" alt="Ekuinova logo" class="logo-img"> Ekuinova</div>
    <div class="nav-links" aria-label="Primary navigation">
      <a href="land.php" tabindex="0">Home</a>
      <a href="about.php" tabindex="0">About Us</a>
      <button class="login" type="button" onclick="window.location.href = 'login.php'"> Login </button>
    </div>
    </nav>
  </header>

  <h1 style="margin: 100px 0 0 0; padding: 0; font-size: 70px;">The World's Premium</h1>
  <h1 style="margin: 0; padding: 0; font-size: 70px;">Crypto Trading Platform</h1>
  <h2> Buy Bitcoin, Ethereum, and 400+ crypto </h2>
  <ul>
    <li> Trade with <p style="color: #4198ff;">20+ currencies </p>and Apple/Google Pay </li>
    <li> Leader in <p style="color: #4198ff;"> regulatory compliance </p> and <p style="color: #4198ff;"> security certifications </p> </li>
    <li> Trusted by <p style="color: #4198ff;"> over 150 million users </p> worldwide </li>
  </ul>

  <div class="image">
    <img src="bitcoin.cms" alt="Crypto Illustration"> 
  </div>

  <div class="hero-ctas" id="get-started">
    <a class="cta" href="#">Get Started</a>
    <a class="cta ghost" href="#learn-more">Learn More</a>
  </div>

  <div class="price-ticker" role="region" aria-label="crypto prices">
    <div class="ticker-item">BTC <strong>$48,200</strong> <span class="muted">+1.2%</span></div>
    <div class="ticker-item">ETH <strong>$3,600</strong> <span class="muted">+0.8%</span></div>
    <div class="ticker-item">BNB <strong>$410</strong> <span class="muted">-0.5%</span></div>
  </div>

  <section class="features">
    <article class="feature">
      <h3>Fast Trading</h3>
      <p>Low latency matching engine for instant trades.</p>
    </article>
    <article class="feature">
      <h3>Insurance &amp; Security</h3>
      <p>Cold storage, insurance and audited security practices.</p>
    </article>
    <article class="feature">
      <h3>Multiple Payment Methods</h3>
      <p>Buy with cards, bank transfers, and local payments.</p>
    </article>
  </section>

  <section class="testimonials">
    <h3>What our users say</h3>
    <div class="test-grid">
      <blockquote tabindex="0">
        "Fantastic platform — easy to use and secure."
        <cite>— A. Santoso</cite>
      </blockquote>
      <blockquote tabindex="0">
        "Great liquidity and customer support."
        <cite>— R. Wijaya</cite>
      </blockquote>
      <blockquote tabindex="0">
        "Real-Time market and news."
        <cite>— B. Liem</cite>
      </blockquote>
      <blockquote tabindex="0">
        "The system response is crazily quick."
        <cite>— H. Itler</cite>
      </blockquote>
    </div>
  </section>

  <section class="faq" id="learn-more">
    <h3>Frequently Asked Questions</h3>
    <details>
      <summary>How do I buy crypto?</summary>
      <p>Sign up, verify your account, deposit funds, and place a buy order.</p>
    </details>
    <details>
      <summary>Is my crypto safe?</summary>
      <p>We use cold storage and industry-standard security protocols to protect assets.</p>
    </details>
  </section>

  

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