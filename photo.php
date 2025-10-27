<?php /** My Videos page */ ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Lora D — My Videos</title>
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&family=Baloo+2:wght@600;700&family=Nunito:wght@400;600;700&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="styles.css" />
</head>
<body>
  <header class="site-header">
    <div class="container">
      <nav class="main-nav">
        <div class="logo">
          <a href="index.php"><span class="wave-emoji">👋</span></a>
        </div>
        <ul class="nav-links">
          <li><a href="my-story.php">Story</a></li>
          <li><a href="my-photos.php">My Photos</a></li>
          <li><a href="my-videos.php">My Videos</a></li>
        </ul>
        <div class="cta-button">
          <a href="index.html#contact" class="btn btn-primary">Connect</a>
          <button id="themeToggle" class="btn btn-light btn-small" type="button" aria-label="Toggle theme">🌙 Dark Mode</button>
        </div>
      </nav>
    </div>
  </header>

  <main>
    <section id="kind-words" class="section">
      <div class="container">
        <h2 class="section-title">My Videos</h2>
        <div class="testimonials-grid">
          <div class="testimonial-card">
            <div class="testimonial-content">
              <p>"Lora brings warmth and determination to everything she does. I'm proud of her journey."</p>
            </div>
            <div class="testimonial-author">
              <img src="https://placehold.co/100x100/fff1f5/1a1e3b?text=Family" alt="Family Member" class="testimonial-avatar" />
              <div class="testimonial-info">
                <h4>Family Member</h4>
                <p>Toronto, ON</p>
              </div>
            </div>
          </div>
          <div class="testimonial-card">
            <div class="testimonial-content">
              <p>"She’s curious, creative, and always improving—Lora inspires the people around her."</p>
            </div>
            <div class="testimonial-author">
              <img src="https://placehold.co/100x100/fff1f5/1a1e3b?text=Friend" alt="Friend" class="testimonial-avatar" />
              <div class="testimonial-info">
                <h4>Friend</h4>
                <p>Toronto, ON</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>

  <footer class="site-footer">
    <div class="container">
      <div class="footer-content">
        <div class="footer-logo">
          <a href="index.php"><span class="wave-emoji">👋</span></a>
          <p>Sharing stories, celebrating growth, and embracing the journey.</p>
        </div>
        <div class="footer-links">
          <h3>Quick Links</h3>
          <ul>
            <li><a href="my-story.php">Story</a></li>
            <li><a href="my-photos.php">My Photos</a></li>
            <li><a href="my-videos.php">My Videos</a></li>
            <li><a href="index.html#contact">Contact</a></li>
          </ul>
        </div>
        <div class="footer-contact">
          <h3>Contact</h3>
          <p>📧 rafaela.loradenz@llcc.edu.ph</p>
          <p>📍 Gun-ob Lapu-Lapu City</p>
        </div>
      </div>
      <div class="footer-bottom">
        <p>&copy; <span id="currentYear"></span> Lora D. All rights reserved.</p>
      </div>
    </div>
  </footer>

  <script src="script.js"></script>
</body>
</html>