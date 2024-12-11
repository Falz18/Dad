<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Services</title>
    <link rel="stylesheet" href="css/services.css">
    <link href="https://fonts.google.com/share?selection.family=Figtree:ital,wght@0,300..900;1,300..900" rel="stylesheet">
</head>
<body>
    <header>
        <div class="navbar">
            <div class="logo">
            <a href="/">
                    <img src="images/Logo/logo White.png" alt="logo">
                </a>
            </div>
            <nav>
                <ul>
                    <li><a href="/about">About Us</a></li>
                    <li><a href="/services">Services</a></li>
                    <li><a href="/Clients">Clients</a></li>
                    <li><a href="/Carrer">Career</a></li>
                    <li><a href="/Contact" class="contact-btn">Contact</a></li>
                </ul>
            </nav>
        </div>
        <div class="services">
            <h1>Services</h1>
            <p>From our data science data acquisition and information extraction, intergrated campaign management to formulating mind-bending ideas that well-suited for your brand niche and audience. We formulated them into most well-ellaborated campaign strategy and executes them adaptively.</p>
        </div>
    </header>

        <div class="service-grid">
        <a href="/galeri" class="service-link">
            <div class="service-item">
                <div class="overlay"></div>
                <img src="images/services/services-1.png" alt="Brand Development">
                <h3>Brand Development</h3>
            </div>
        </a>
        <a href="/galeri" class="service-link">
            <div class="service-item">
                <div class="overlay"></div>
                <img src="images/services/services-2.png" alt="Campaign">
                <h3>Campaign</h3>
            </div>
        </a>
        <a href="/galeri" class="service-link">
            <div class="service-item">
                <div class="overlay"></div>
                <img src="images/services/services-3.png" alt="Event">
                <h3>Event</h3>
            </div>
        </a>
        <a href="/galeri" class="service-link">
            <div class="service-item">
                <div class="overlay"></div>
                <img src="images/services/services-4.png" alt="Social Media Management">
                <h3>Social Media Management</h3>
            </div>
        </a>
        <a href="/galeri" class="service-link">
            <div class="service-item">
                <div class="overlay"></div>
                <img src="images/services/services-5.png" alt="Studio & Podcast">
                <h3>Studio & Podcast</h3>
            </div>
        </a>
        <a href="/galeri" class="service-link">
            <div class="service-item">
                <div class="overlay"></div>
                <img src="images/services/services-6.png" alt="Web & Apps">
                <h3>Web & Apps</h3>
            </div>
        </a>
        <a href="/galeri" class="service-link">
            <div class="service-item">
                <img src="images/services/3d.png" alt="3D">
                <h3>3D</h3>
            </div>
        </a>
        </div>

        <div class="cta-section">
            <div class="cta-border"></div>
            <div class="cta-content">
                <p>We don’t just create campaigns – we craft stories that stick, designs that spark, and strategies that deliver. Curious? Let our work do the talking and see what we can achieve together! </p>
                <div class="portfolio-button">
                    <a id="myBtn">Download Our Portfolio</a>
                </div>
            </div>
        </div>
        
            <div id="myModal" class="modal">
                <div class="modal-content">
                    <p>Fill in your details, and we’ll send our portfolio straight to your inbox!</p>
                    <form action="{{ url('/services') }}" method="POST">
                         @csrf
                        <div class="form-group">
                            <input type="text" id="name" name="name" placeholder="Name" required>
                        </div>
                        <div class="form-group">
                            <input type="email" id="email" name="email" placeholder="Email" required>
                        </div>
                        <div class="form-group-horizontal">
                            <label>
                                <input type="radio" name="userType" value="personal" required> Personal
                            </label>
                            <label>
                                <input type="radio" name="userType" value="company"> Company
                            </label>
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Download Our Portfolio">
                        </div>
                    </form>

                </div>
            </div>

        <footer>
        <div class="footer">
            <div class="footer-content">
                <div class="footer-left">
                    <img src="images/Logo/logo white.png" alt="DAD Logo"> 
                    <p>PT Data Adi Data</p>
                </div>
                <div class="alamat">
                    <p>Menara Global, 23rd Floor, Jl. Gatot Subroto No.27</p>
                    <p>Jakarta Selatan 12950</p>
                </div>
                <div class="copyright">
                    <p>DAD &copy; 2024. All right reserved</p>
                </div>
            </div>
        </div>
        <div class="footer-right">
            <div class="shortcut">
                <ul class="menu-links">
                    <li><a href="/about">About Us</a></li>
                    <li><a href="/galeri">Gallery</a></li>
                    <li><a href="/Clients">Client</a></li>
                    <li><a href="/services">Service</a></li>
                </ul>
                <div class="contact-link">
                    <a href="/Contact" class="button">Contact</a>
                </div>
            </div>
            <div class="social-icons">
                <a href="#"><img src="images/Contact/icon-tiktok.png" alt="TikTok"></a>
                <a href="#"><img src="images/Contact/icon-instagram.png" alt="Instagram"></a>
                <a href="#"><img src="images/Contact/icon-youtube.png" alt="Youtube"></a>
                <a href="#"><img src="images/Contact/icon-linkedin.png" alt="Linkedin"></a>
                <a href="#"><img src="images/Contact/icon-facebook.png" alt="Facebook"></a>
            </div>
        </div>
    </footer>
</body>
</html>


<script>
var modal = document.getElementById("myModal");
var btn = document.getElementById("myBtn");
btn.onclick = function() {
  modal.style.display = "block";
}
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>