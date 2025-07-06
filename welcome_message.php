<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prescripto - Book Appointments with Trusted Doctors</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/style.css" type="text/css">
</head>
<body>
    <!-- Header -->
    <header>
        <div class="container header-container">
            <a href="#" class="logo">
                <i class="fas fa-heartbeat"></i>
                Prescripto
            </a>
            
            <div class="nav-links">
                <a href="#home" class="active">HOME</a>
                <a href="<?php echo base_url('doctor')?>">ALL DOCTORS</a>
                <a href="about.html">ABOUT</a>
                <a href="contact.html">CONTACT</a>
            </div>
            
            <div class="user-actions">
                <a href="#" class="admin-btn">Admin Panel</a>
            </div>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="hero">
        <div class="container" id="home">
            <div class="hero-content">
                <div class="left">
                <h1>Book Appointment<br>With Trusted Doctors</h1>
    <div class="content-wrapper">
        <div class="image-container">
                    <img src="<?php echo base_url()?>assets/image/F Doctor 2 .jpg" alt="Image 1" class="circular-image image-1">
                    <img src="<?php echo base_url()?>assets/image/Doctor 1.jpg" alt="Image 2" class="circular-image image-2">
                    <img src="<?php echo base_url()?>assets/image/F Doctor 4.jpeg" alt="Image 3" class="circular-image image-3">
                </div>
        <div class="text-content">
                <p><span>browse through our extensive list of trusted doctors,</span> <span>schedule your appointment hassle-free.</span> </p>
               <p class="first-Book"> <a href="#" class="btn btn-primary">Book appointment <i class="fas fa-arrow-right"></i></a> </p>
            </div>
             </div>   
    </div>
   
            </div>
        </div>
    </section>

    <!-- Specialties Section -->
    <section class="specialties">
        <div class="container">
            <div class="section-title">
                <h2>Find by Speciality</h2>
                <p>Simply browse through our extensive list of trusted doctors, schedule your appointment hassle-free.</p>
            </div>
            
            <div class="specialties-grid">
                <div class="specialty-card">
                    <div class="specialty-icon">
                        <i class="fas fa-user-md"></i>
                    </div>
                    <h3>General physician</h3>
                    <p>Comprehensive care for adults and children</p>
                </div>
                
                <div class="specialty-card">
                    <div class="specialty-icon">
                        <i class="fas fa-baby"></i>
                    </div>
                    <h3>Gynecologist</h3>
                    <p>Women's health and reproductive care</p>
                </div>
                
                <div class="specialty-card">
                    <div class="specialty-icon">
                        <i class="fas fa-allergies"></i>
                    </div>
                    <h3>Dermatologist</h3>
                    <p>Skin, hair, and nail conditions</p>
                </div>
                
                <div class="specialty-card">
                    <div class="specialty-icon">
                        <i class="fas fa-child"></i>
                    </div>
                    <h3>Pediatricians</h3>
                    <p>Child health and development</p>
                </div>
                
                <div class="specialty-card">
                    <div class="specialty-icon">
                        <i class="fas fa-brain"></i>
                    </div>
                    <h3>Neurologist</h3>
                    <p>Disorders of the nervous system</p>
                </div>
                
                <div class="specialty-card">
                    <div class="specialty-icon">
                        <i class="fas fa-stomach"></i>
                    </div>
                    <h3>Gastroenterologist</h3>
                    <p>Digestive system disorders</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Doctors Section -->
    <section>
        <div class="container">
            <div class="section-title" id="doctor">
                <h2>Top Doctors to Book</h2>
                <p>Simply browse through our extensive list of trusted doctors.</p>
            </div>
            
            <div class="doctors-grid">
                <!-- Doctor 1 -->
                <div class="doctor-card">
                    <div class="doctor-img">
                         <!-- Replace the icon with an image container -->
        <div class="doctor-image-container">
            <img src="<?php echo base_url()?>assets/image/M Doctor 3.jpeg" alt="Dr. Richard James" class="doctor-image">
        </div>
                    </div>
                    <div class="doctor-info">
                        <span class="doctor-status status-available">Available</span>
                        <h3>Dr. Richard James</h3>
                        <p class="doctor-specialty">General physician</p>
                        <a href="#" class="btn btn-outline">Book Appointment</a>
                    </div>
                </div>
                
  <!-- Doctor 2 -->
                <div class="doctor-card">
                    <div class="doctor-img">
                        <!-- Replace the icon with an image container -->
        <div class="doctor-image-container">
            <img src="<?php echo base_url()?>assets/image/F Doctor 2 .jpg" alt="Dr. Sarah Patel" class="doctor-image">
            
        </div>
    </div>
                    <div class="doctor-info">
                        <span class="doctor-status status-available">Available</span>
                        <h3>Dr. Sarah Patel</h3>
                        <p class="doctor-specialty">Dermatologist</p>
                        <a href="#" class="btn btn-outline">Book Appointment</a>
                    </div>
                </div>

                <!-- Doctor 3 -->
                <div class="doctor-card">
                    <div class="doctor-img">
                         <!-- Replace the icon with an image container -->
        <div class="doctor-image-container">
            <img src="<?php echo base_url()?>assets/image/M Doctor 2.jpeg" alt="Dr. Emily Larson" class="doctor-image">
        </div>
    </div>
                    <div class="doctor-info">
                        <span class="doctor-status status-available">Available</span>
                        <h3>Dr. Emily Larson</h3>
                        <p class="doctor-specialty">Gynecologist</p>
                        <a href="#" class="btn btn-outline">Book Appointment</a>
                    </div>
                </div>
                
              
                   
                <!-- Doctor 5 -->
                <div class="doctor-card">
                    <div class="doctor-img">
                         <!-- Replace the icon with an image container -->
        <div class="doctor-image-container">
            <img src="<?php echo base_url()?>assets/image/F Doctor 3.jpeg" alt="Dr. Jennifer Garcia" class="doctor-image">
            
        </div>
    </div>
                    <div class="doctor-info">
                        <span class="doctor-status status-available">Available</span>
                        <h3>Dr. Jennifer Garcia</h3>
                        <p class="doctor-specialty">Neurologist</p>
                        <a href="#" class="btn btn-outline">Book Appointment</a>
                    </div>
                </div>
                
                <!-- Doctor 4 -->

                <div class="doctor-card">
    <div class="doctor-img">
        <!-- Replace the icon with an image container -->
        <div class="doctor-image-container">
            <img src="<?php echo base_url()?>assets/image/Doctor 1.jpg" alt="Dr. Christopher Lee" class="doctor-image">
            
        </div>
    </div>
    <div class="doctor-info">
        <span class="doctor-status status-available">Available</span>
        <h3>Dr. Christopher Lee</h3>
        <p class="doctor-specialty">Pediatrician</p>
        <a href="#" class="btn btn-outline">Book Appointment</a>
    </div>
</div>
             
                
                <!-- Doctor 6 -->
                <div class="doctor-card">
                    <div class="doctor-img">
                         <!-- Replace the icon with an image container -->
        <div class="doctor-image-container">
            <img src="<?php echo base_url()?>assets/image/F Doctor 9.jpeg" alt="Dr. Nina Okafore" class="doctor-image">
            
        </div>
    </div>
                    <div class="doctor-info">
                        <span class="doctor-status status-available">Available</span>
                        <h3>Dr. Nina Okafore</h3>
                        <p class="doctor-specialty">Gastroenterologist</p>
                        <a href="#" class="btn btn-outline">Book Appointment</a>
                    </div>
                </div>
            </div>
            
            <div style="text-align: center; margin-top: 40px;">
                <a href="All-Doctors.html" class="btn btn-primary">View All Doctors</a>
            </div>
        </div>
    </section>

    <!-- Booking Section -->
    <section class="booking">
        <div class="container">
            <h2>Book Appointment<br>With 100+ Trusted Doctors</h2>
            <p>Create an account to book appointments with our expert doctors and manage your healthcare easily.</p>
            <a href="patient-registration.html" class="btn btn-primary">Create account</a>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="footer-container"id="contact">
                <div class="footer-col">
                    <h3>Prescripto</h3>
                    <p>Prescripto: Book appointments with trusted doctors easily. Your health, our priority. Streamlined healthcare access for everyone.</p>
                    <div class="contact-info">
                        <i class="fas fa-phone"></i>
                        <span>+237-678-931-011</span>
                    </div>
                    <div class="contact-info">
                        <i class="fas fa-envelope"></i>
                        <span>geniusabou.2018@gmail.com</span>
                    </div>
                </div>
                
                <div class="footer-col">
                    <h3>COMPANY</h3>
                    <ul>
                        <li><a href="#"><i class="fas fa-chevron-right"></i> Home</a></li>
                        <li><a href="#"><i class="fas fa-chevron-right"></i> About us</a></li>
                        <li><a href="contact.html"><i class="fas fa-chevron-right"></i> Contact us</a></li>
                        
                    </ul>
                </div>
                
                <div class="footer-col">
                    <h3>GET IN TOUCH</h3>
                    <ul>
                        <li><a href="#"><i class="fas fa-chevron-right"></i> Support</a></li>
                        <li><a href="#"><i class="fas fa-chevron-right"></i> Careers</a></li>
                        <li><a href="#"><i class="fas fa-chevron-right"></i> Press</a></li>
                        <li><a href="#"><i class="fas fa-chevron-right"></i> Sitemap</a></li>
                    </ul>
                </div>
                
                <div class="footer-col">
                    <h3>NEWSLETTER</h3>
                    <p>Subscribe to our newsletter for health tips and updates.</p>
                    <form>
                        <input type="email" placeholder="Your email address" style="width: 100%; padding: 12px; border-radius: 50px; border: none; margin-bottom: 15px;">
                        <button type="submit" class="btn btn-primary" style="width: 100%;">Subscribe</button>
                    </form>
                </div>
            </div>
            
            <div class="copyright">
                Copyright 2024 © Priscripto - All Right Reserved.
            </div>
        </div>
    </footer>

    <script>
        // Simple JavaScript for interactive elements
        document.addEventListener('DOMContentLoaded', function() {
            // Doctor card hover effect
            const doctorCards = document.querySelectorAll('.doctor-card');
            
            doctorCards.forEach(card => {
                card.addEventListener('mouseenter', function() {
                    this.style.transform = 'translateY(-10px)';
                });
                
                card.addEventListener('mouseleave', function() {
                    this.style.transform = 'translateY(0)';
                });
            });
            
            // Specialty card hover effect
            const specialtyCards = document.querySelectorAll('.specialty-card');
            
            specialtyCards.forEach(card => {
                card.addEventListener('mouseenter', function() {
                    this.style.transform = 'translateY(-10px)';
                });
                
                card.addEventListener('mouseleave', function() {
                    this.style.transform = 'translateY(0)';
                });
            });
            
            // Smooth scrolling for anchor links
            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', function(e) {
                    e.preventDefault();
                    const target = document.querySelector(this.getAttribute('href'));
                    if (target) {
                        window.scrollTo({
                            top: target.offsetTop - 80,
                            behavior: 'smooth'
                        });
                    }
                });
            });
            
            // Active nav link based on scroll position
            window.addEventListener('scroll', function() {
                const sections = document.querySelectorAll('section');
                const navLinks = document.querySelectorAll('.nav-links a');
                
                let current = '';
                
                sections.forEach(section => {
                    const sectionTop = section.offsetTop;
                    const sectionHeight = section.clientHeight;
                    if (pageYOffset >= (sectionTop - 100)) {
                        current = section.getAttribute('id');
                    }
                });
                
                navLinks.forEach(link => {
                    link.classList.remove('active');
                    if (link.getAttribute('href') === `#${current}`) {
                        link.classList.add('active');
                    }
                });
            });
        });
    </script>
</body>
</html>