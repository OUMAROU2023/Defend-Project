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