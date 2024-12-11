<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>Daksa Adi Data</title>
    <link rel="stylesheet" href="../public/css/styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Figtree:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

</head>

<body>
    <!-- NAVBAR -->
    <div class="background-hijau">
        <header>
            <div class="logo">
                <img src="images/Logo/logo white.png" alt="logo">
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
        </header>

        <!-- HALAMAN 1 -->
        <section class="hero">
            <div class="hero-text">
                <h1>What's Up!</h1>
                <p>We are the game changer.</p>
                <a href="/about" class="btn">ABOUT US</a>
            </div>
            <div class="hero-image">
                <img src="images/dashboard/dummy.gif" alt="Hero Image" />
            </div>
        </section>      
    </div>

    <!-- halaman ke2 -->
        <section class="section-two">
            <div class="content">
                <h2>Let's Go!</h2>
                <p>DAD is a creative digital agency based on data driven insights. We seek what should be spoken of.
                    We examine the most significant keywords and networks of conversation happening in digital platforms.
                    These are the basis of our insights.</p>
                <a href="#" class="button-learn">LEARN MORE</a>
            </div>
            <div class="image">
                <!-- Background image is already set via CSS -->
            </div>
        </section>
   
    
    <!-- Section 3 -->
    <section class="section-three">
            <div class="service-grid">
                <div class="service-item">
                    <a href="/galeri" class="overlay"></a>
                    <img src="images/services/services-1.png" alt="Brand Development">
                    <h3>Brand Development</h3>
                </div>
                <div class="service-item">
                    <a href="/galeri" class="overlay"></a>
                    <img src="images/services/services-2.png" alt="Campaign">
                    <h3>Campaign</h3>
                </div>
                <div class="service-item">
                    <a href="/galeri" class="overlay"></a>
                    <img src="images/services/services-3.png" alt="Event">
                    <h3>Event</h3>
                </div>
                <div class="service-item">
                    <a href="/galeri" class="overlay"></a>
                    <img src="images/services/services-4.png" alt="Social Media Management">
                    <h3>Social Media Management</h3>
                </div>
                <div class="service-item">
                    <a href="/galeri" class="overlay"></a>
                    <img src="images/services/services-5.png" alt="Studio & Podcast">
                    <h3>Studio & Podcast</h3>
                </div>
                <div class="service-item">
                    <a href="/galeri" class="overlay"></a>
                    <img src="images/services/services-6.png" alt="Web & Apps">
                    <h3>Web & Apps</h3>
                </div>
        </div>
    </section>
    
        <div class="view-more">
            <a href="/services">VIEW ALL WORKS</a>
        </div>

    <section class="clients-section">
    <div class="left-content">
    <div class="slider">
        <div class="slide"><img src="images/dashboard/Layer_1.png" alt="Slide 1"></div>
        <div class="slide"><img src="images/dashboard/download1.jpg" alt="Slide 2"></div>
        <div class="slide"><img src="images/dashboard/download2.jpg" alt="Slide 3"></div>
    </div>
    <div class="slider-indicators">
        <span class="indicator active" data-index="0"></span>
        <span class="indicator" data-index="1"></span>
        <span class="indicator" data-index="2"></span>
    </div>
    </div>
        <div class="right-content">
            <div class="text-content">
                <h2>/CLIENTS</h2>
                <p>We seek to redefine the brands</p>
            </div>
            <a href="/Client" class="view-clients-button">VIEW ALL CLIENTS</a>
        </div>
    </section>
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
                    <p>DAD 2024. All right reserved</p>
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
    
    

<script>
const images = [
    'images/dashboard/Layer_1.png',
    'images/dashboard/download_1.jpg',
    'images/dashboard/download_2.jpg'
];
let currentIndex = 0;
const slider = document.querySelector('.slider');
const indicators = document.querySelectorAll('.indicator');

function changeBackgroundImage() {
    slider.style.transform = `translateX(-${currentIndex * 100}%)`;

    indicators.forEach(indicator => indicator.classList.remove('active'));
    indicators[currentIndex].classList.add('active');

    currentIndex = (currentIndex + 1) % images.length;
}

setInterval(changeBackgroundImage,2000);

changeBackgroundImage();

indicators.forEach((indicator, index) => {
    indicator.addEventListener('click', function () {
        clearInterval(autoSlide);

        currentIndex = index;
        changeBackgroundImage();

        autoSlide = setInterval(changeBackgroundImage, 2000);
    });
});
    </script>
</body>
</html>
