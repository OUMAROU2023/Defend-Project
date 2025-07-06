 <section class="about-hero">
        <div class="container">
            <div class="section-title">
                <h1>About Prescripto</h1>
                <p>Connecting patients with trusted healthcare professionals for seamless medical appointments</p>
            </div>
        </div>
    </section>

    <!-- Mission Section -->
    <section class="mission">
        <div class="container">
            <div class="mission-content">
                <div class="mission-text">
                    <h2>Our Mission</h2>
                    <p>At Prescripto, we're revolutionizing healthcare access by creating a bridge between patients and doctors. Our platform eliminates the traditional barriers to medical care, making it easier, faster, and more convenient to connect with the right healthcare professionals when you need them most.</p>
                    <p>We believe everyone deserves quality healthcare without the hassle of long wait times or complicated booking processes.</p>
                </div>
                <div class="mission-image">
                    <img src="<?php echo base_url()?>assets/image/T Doctor 2.jpeg" alt="Healthcare team discussing">
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="features">
        <div class="container">
            <div class="section-title">
                <h2>Why Choose Prescripto</h2>
                <p>Discover the advantages of our healthcare booking platform</p>
            </div>
            
            <div class="features-grid">
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-clock"></i>
                    </div>
                    <h3>Time-Saving</h3>
                    <p>Book appointments 24/7 without phone calls or waiting in queues. Our platform is available whenever you need it.</p>
                </div>
                
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-user-md"></i>
                    </div>
                    <h3>Verified Doctors</h3>
                    <p>All our healthcare providers are thoroughly vetted professionals with verified credentials and specialties.</p>
                </div>
                
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <h3>Secure Platform</h3>
                    <p>Your health data is protected with enterprise-grade security and strict privacy controls.</p>
                </div>
                
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-calendar-check"></i>
                    </div>
                    <h3>Flexible Scheduling</h3>
                    <p>Choose appointment times that fit your schedule with real-time availability from doctors.</p>
                </div>
                
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-map-marker-alt"></i>
                    </div>
                    <h3>Location-Based</h3>
                    <p>Find doctors near you or opt for virtual consultations from the comfort of your home.</p>
                </div>
                
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-comments"></i>
                    </div>
                    <h3>Patient Reviews</h3>
                    <p>Read authentic patient reviews to help you choose the right healthcare provider.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Team Section -->
    <section class="team">
        <div class="container">
            <div class="section-title">
                <h2>Our Team</h2>
                <p>The dedicated professionals behind Prescripto</p>
            </div>
            
            <div class="team-grid">
                <div class="team-member">
                    <div class="member-image">
                        <img src="<?php echo base_url()?>assets/image/F Doctor 11.jpg" alt="Dr. Sarah Johnson">
                    </div>
                    <h3>Dr. Sarah Johnson</h3>
                    <p class="position">Medical Director</p>
                    <p class="bio">With 15 years in healthcare administration, Dr. Johnson ensures our platform meets medical standards.</p>
                </div>
                
                <div class="team-member">
                    <div class="member-image">
                        <img src="<?php echo base_url()?>assets/image/Dr AJa.jpg" alt="Michael Chen">
                    </div>
                    <h3>Michael Chen</h3>
                    <p class="position">Technology Lead</p>
                    <p class="bio">Software engineer focused on creating seamless digital healthcare experiences for patients.</p>
                </div>
                
                <div class="team-member">
                    <div class="member-image">
                        <img src="<?php echo base_url()?>assets/image/F Doctor 12.jpg" alt="Amina Diallo">
                    </div>
                    <h3>Amina Diallo</h3>
                    <p class="position">Patient Relations</p>
                    <p class="bio">Ensures every patient's voice is heard and their needs are met through our platform.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="stats">
        <div class="container">
            <div class="stats-grid">
                <div class="stat-item">
                    <h3>500+</h3>
                    <p>Trusted Doctors</p>
                </div>
                <div class="stat-item">
                    <h3>50,000+</h3>
                    <p>Patients Served</p>
                </div>
                <div class="stat-item">
                    <h3>98%</h3>
                    <p>Satisfaction Rate</p>
                </div>
                <div class="stat-item">
                    <h3>24/7</h3>
                    <p>Availability</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta">
        <div class="container">
            <h2>Ready to Experience Better Healthcare?</h2>
            <p>Join thousands of patients who have simplified their healthcare journey with Prescripto</p>
            <div class="cta-buttons">
                <a href="patient-registration.html" class="btn btn-primary">Create Account</a>
                <a href="All-Doctors.html" class="btn btn-outline">Find a Doctor</a>
            </div>
        </div>
    </section>


     <script>
        document.addEventListener('DOMContentLoaded', function() {
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
            
            // Team member hover effect
            const teamMembers = document.querySelectorAll('.team-member');
            teamMembers.forEach(member => {
                member.addEventListener('mouseenter', function() {
                    this.style.transform = 'translateY(-10px)';
                    this.style.boxShadow = '0 15px 30px rgba(0, 0, 0, 0.1)';
                });
                
                member.addEventListener('mouseleave', function() {
                    this.style.transform = 'translateY(0)';
                    this.style.boxShadow = 'var(--card-shadow)';
                });
            });
            
            // Feature card hover effect
            const featureCards = document.querySelectorAll('.feature-card');
            featureCards.forEach(card => {
                card.addEventListener('mouseenter', function() {
                    this.style.transform = 'translateY(-10px)';
                });
                
                card.addEventListener('mouseleave', function() {
                    this.style.transform = 'translateY(0)';
                });
            });
        });
    </script>
