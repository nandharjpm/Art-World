<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Art Studio</title>

    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

<!-- Navbar -->
<nav class="navbar">
    <h1>🎨 Art Studio</h1>
    <div>
        <a href="#">Home</a>
        <a href="#">Courses</a>
        <a href="#">Gallery</a>
        <a href="#">Contact</a>
        <a href="{{ url() }}">Login</a>
    </div>
</nav>

<!-- PARALLAX HERO -->
<div class="parallax" style="background-image: url('{{ asset('images/art1.png') }}');">
    <div class="parallax-content">
        <h1>Unleash Your Creativity</h1>
        <p>Join our professional drawing classes today</p>
        <button class="btn">Join Now</button>
    </div>
</div>

<!-- About -->
<div class="section">
    <h2>About the Instructor</h2>
    <p>Learn from an experienced artist with years of teaching and creative expertise.</p>
</div>

<!-- PARALLAX MIDDLE -->
<div class="parallax" style="background-image: url('{{ asset('images/art2.png') }}');">
    <div class="parallax-content">
        <h1>Art is Freedom</h1>
        <p>Express your imagination with every stroke</p>
    </div>
</div>

<!-- Courses -->
<div class="section">
    <h2>Our Courses</h2>
    <div class="card-container">
        <div class="card">
            <h3>Beginner Drawing</h3>
            <p>Start from basics and learn step by step.</p>
        </div>
        <div class="card">
            <h3>Advanced Sketching</h3>
            <p>Master shading and depth techniques.</p>
        </div>
        <div class="card">
            <h3>Portrait Art</h3>
            <p>Learn realistic face drawing skills.</p>
        </div>
    </div>
</div>

<!-- Gallery -->
<div class="section">
    <h2>Student Gallery</h2>
    <div class="gallery">
        <div></div>
        <div></div>
        <div></div>
        <div></div>
    </div>
</div>

<!-- CTA -->
<div class="cta">
    <h2>Start Your Art Journey Today</h2>
    <button class="btn">Enroll Now</button>
</div>

<!-- Footer -->
<div class="footer">
    <p>© 2026 Art Studio. All rights reserved.</p>
</div>

</body>
</html>
