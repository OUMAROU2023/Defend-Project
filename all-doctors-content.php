<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prescripto - All Doctors</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="style.css" type="text/css"> -->




<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><php echo "Prescripto - All Doctors"; ?></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="<php echo base_url('assets/style.css'); ?>" type="text/css">
</head>
<body> -->
    <!-- Header -->
    <!-- <header>
        <div class="container header-container">
            <a href="index.html" class="logo">
                <i class="fas fa-heartbeat"></i>
                Prescripto
            </a>
            
            <div class="nav-links">
                <a href="index.html">HOME</a>
                <a href="all-doctors.html" class="active">ALL DOCTORS</a>
                <a href="about.html">ABOUT</a>
                <a href="contact.html">CONTACT</a>
            </div>
            
            <div class="user-actions">
                <a href="#" class="admin-btn">Admin Panel</a>
            </div>
        </div>
    </header> -->

    <!-- All Doctors Section -->
    <section class="all-doctors">
        <div class="container">
            <div class="section-title">
                <h2>All Doctors</h2>
                <p>Browse through our complete list of trusted medical professionals and specialists.</p>
            </div>
            
            <!-- Search and Filter Section -->
            <div class="doctor-filters">
                <div class="search-box">
                    <input type="text" placeholder="Search doctors by name or specialty...">
                    <button><i class="fas fa-search"></i></button>
                </div>
                
                <div class="filter-options">
                    <select id="specialty-filter">
                        <option value="">All Specialties</option>
                        <option value="General physician">General Physician</option>
                        <option value="Gynecologist">Gynecologist</option>
                        <option value="Dermatologist">Dermatologist</option>
                        <option value="Pediatricians">Pediatrician</option>
                        <option value="Neurologist">Neurologist</option>
                        <option value="Gastroenterologist">Gastroenterologist</option>
                    </select>
                    
                    <select id="availability-filter">
                        <option value="">All Availability</option>
                        <option value="available">Available Now</option>
                        <option value="unavailable">Not Available</option>
                    </select>
                </div>
            </div>
            
            <!-- Doctors Grid -->
            <div class="doctors-grid">
                <!-- Doctor 1 -->
                <div class="doctor-card" data-specialty="General physician" data-availability="available">
                    <div class="doctor-img">
                        <div class="doctor-image-container">
                            <img src="<?php echo base_url()?>assets/image/M Doctor 3.jpeg" alt="Dr. Richard James" class="doctor-image">
                        </div>
                    </div>
                    <div class="doctor-info">
                        <span class="doctor-status status-available">Available</span>
                        <h3>Dr. Richard James</h3>
                        <p class="doctor-specialty">General physician</p>
                        <div class="doctor-rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                            <span>4.7 (128)</span>
                        </div>
                        <a href="#" class="btn btn-outline">Book Appointment</a>
                    </div>
                </div>
                
                <!-- Doctor 2 -->
                <div class="doctor-card" data-specialty="Dermatologist" data-availability="available">
                    <div class="doctor-img">
                        <div class="doctor-image-container">
                            <img src="<?php echo base_url()?>assets/image/F Doctor 2 .jpg" alt="Dr. Sarah Patel" class="doctor-image">
                        </div>
                    </div>
                    <div class="doctor-info">
                        <span class="doctor-status status-available">Available</span>
                        <h3>Dr. Sarah Patel</h3>
                        <p class="doctor-specialty">Dermatologist</p>
                        <div class="doctor-rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                            <span>4.2 (95)</span>
                        </div>
                        <a href="#" class="btn btn-outline">Book Appointment</a>
                    </div>
                </div>

                <!-- Doctor 3 -->
                <div class="doctor-card" data-specialty="Gynecologist" data-availability="available">
                    <div class="doctor-img">
                        <div class="doctor-image-container">
                            <img src="<?php echo base_url()?>assets/image/M Doctor 2.jpeg" alt="Dr. Emily Larson" class="doctor-image">
                        </div>
                    </div>
                    <div class="doctor-info">
                        <span class="doctor-status status-available">Available</span>
                        <h3>Dr. Emily Larson</h3>
                        <p class="doctor-specialty">Gynecologist</p>
                        <div class="doctor-rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <span>5.0 (210)</span>
                        </div>
                        <a href="#" class="btn btn-outline">Book Appointment</a>
                    </div>
                </div>
                
                <!-- Doctor 4 -->
              
                <div class="doctor-card" data-specialty="Neurologist" data-availability="unavailable">
                    <div class="doctor-img">
                        <div class="doctor-image-container">
                            <img src="<?php echo base_url()?>assets/image/F Doctor 3.jpeg" alt="Dr. Jennifer Garcia" class="doctor-image">
                        </div>
                    </div>
                    <div class="doctor-info">
                        <span class="doctor-status status-unavailable">Not Available</span>
                        <h3>Dr. Jennifer Garcia</h3>
                        <p class="doctor-specialty">Neurologist</p>
                        <div class="doctor-rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                            <span>4.1 (76)</span>
                        </div>
                        <a href="#" class="btn btn-outline disabled">Book Appointment</a>
                    </div>
                </div>

                <!-- Doctor 5 -->

                  <div class="doctor-card" data-specialty="Pediatricians" data-availability="available">
                    <div class="doctor-img">
                        <div class="doctor-image-container">
                            <img src="<?php echo base_url()?>assets/image/Doctor 1.jpg" alt="Dr. Christopher Lee" class="doctor-image">
                        </div>
                    </div>
                    <div class="doctor-info">
                        <span class="doctor-status status-available">Available</span>
                        <h3>Dr. Christopher Lee</h3>
                        <p class="doctor-specialty">Pediatrician</p>
                        <div class="doctor-rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                            <span>4.6 (187)</span>
                        </div>
                        <a href="#" class="btn btn-outline">Book Appointment</a>
                    </div>
                </div>
                
                
                <!-- Doctor 6 -->
                <div class="doctor-card" data-specialty="Gastroenterologist" data-availability="available">
                    <div class="doctor-img">
                        <div class="doctor-image-container">
                            <img src="<?php echo base_url()?>assets/image/F Doctor 9.jpeg" alt="Dr. Nina Okafore" class="doctor-image">
                        </div>
                    </div>
                    <div class="doctor-info">
                        <span class="doctor-status status-available">Available</span>
                        <h3>Dr. Nina Okafore</h3>
                        <p class="doctor-specialty">Gastroenterologist</p>
                        <div class="doctor-rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                            <span>4.5 (112)</span>
                        </div>
                        <a href="#" class="btn btn-outline">Book Appointment</a>
                    </div>
                </div>
                
                <!-- Additional Doctors -->
                <!-- Doctor 7 -->
                <div class="doctor-card" data-specialty="General physician" data-availability="available">
                    <div class="doctor-img">
                        <div class="doctor-image-container">
                            <img src="<?php echo base_url()?>assets/image/M Doctor 4.jpeg" alt="Dr. Michael Chen" class="doctor-image">
                        </div>
                    </div>
                    <div class="doctor-info">
                        <span class="doctor-status status-available">Available</span>
                        <h3>Dr. Michael Chen</h3>
                        <p class="doctor-specialty">General physician</p>
                        <div class="doctor-rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                            <span>4.0 (89)</span>
                        </div>
                        <a href="#" class="btn btn-outline">Book Appointment</a>
                    </div>
                </div>
                
                <!-- Doctor 8 -->
                <div class="doctor-card" data-specialty="Dermatologist" data-availability="unavailable">
                    <div class="doctor-img">
                        <div class="doctor-image-container">
                            <img src="<?php echo base_url()?>assets/image/F Doctor 6.jpeg" alt="Dr. Priya Sharma" class="doctor-image">
                        </div>
                    </div>
                    <div class="doctor-info">
                        <span class="doctor-status status-unavailable">Not Available</span>
                        <h3>Dr. Priya Sharma</h3>
                        <p class="doctor-specialty">Dermatologist</p>
                        <div class="doctor-rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                            <span>4.8 (156)</span>
                        </div>
                        <a href="#" class="btn btn-outline disabled">Book Appointment</a>
                    </div>
                </div>
                
                <!-- Doctor 9 -->
                <div class="doctor-card" data-specialty="Gynecologist" data-availability="available">
                    <div class="doctor-img">
                        <div class="doctor-image-container">
                            <img src="<?php echo base_url()?>assets/image/F Doctor 5.jpeg" alt="Dr. Olivia Martinez" class="doctor-image">
                        </div>
                    </div>
                    <div class="doctor-info">
                        <span class="doctor-status status-available">Available</span>
                        <h3>Dr. Olivia Martinez</h3>
                        <p class="doctor-specialty">Gynecologist</p>
                        <div class="doctor-rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <span>5.0 (203)</span>
                        </div>
                        <a href="#" class="btn btn-outline">Book Appointment</a>
                    </div>
                </div>
                
                <!-- Doctor 10 -->
                <div class="doctor-card" data-specialty="Pediatricians" data-availability="available">
                    <div class="doctor-img">
                        <div class="doctor-image-container">
                            <img src="<?php echo base_url()?>assets/image/M Doctor 4.jpeg" alt="Dr. David Wilson" class="doctor-image">
                        </div>
                    </div>
                    <div class="doctor-info">
                        <span class="doctor-status status-available">Available</span>
                        <h3>Dr. David Wilson</h3>
                        <p class="doctor-specialty">Pediatrician</p>
                        <div class="doctor-rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                            <i class="far fa-star"></i>
                            <span>3.8 (67)</span>
                        </div>
                        <a href="#" class="btn btn-outline">Book Appointment</a>
                    </div>
                </div>
                
                <!-- Doctor 11 -->
                <div class="doctor-card" data-specialty="Neurologist" data-availability="available">
                    <div class="doctor-img">
                        <div class="doctor-image-container">
                            <img src="<?php echo base_url()?>assets/image/F Doctor 13.jpg" alt="Dr. Sophia Kim" class="doctor-image">
                        </div>
                    </div>
                    <div class="doctor-info">
                        <span class="doctor-status status-available">Available</span>
                        <h3>Dr. Sophia Kim</h3>
                        <p class="doctor-specialty">Neurologist</p>
                        <div class="doctor-rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <span>5.0 (142)</span>
                        </div>
                        <a href="#" class="btn btn-outline">Book Appointment</a>
                    </div>
                </div>
                
                <!-- Doctor 12 -->
                <div class="doctor-card" data-specialty="Gastroenterologist" data-availability="unavailable">
                    <div class="doctor-img">
                        <div class="doctor-image-container">
                            <img src="<?php echo base_url()?>assets/image/M Doctor 5.jpeg" alt="Dr. Robert Johnson" class="doctor-image">
                        </div>
                    </div>
                    <div class="doctor-info">
                        <span class="doctor-status status-unavailable">Not Available</span>
                        <h3>Dr. Robert Johnson</h3>
                        <p class="doctor-specialty">Gastroenterologist</p>
                        <div class="doctor-rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                            <span>4.6 (98)</span>
                        </div>
                        <a href="#" class="btn btn-outline disabled">Book Appointment</a>
                    </div>
                </div>
            </div>
            
            <!-- Pagination -->
            <div class="pagination">
                <a href="#" class="active">1</a>
                <a href="#">2</a>
                <a href="#">3</a>
                <a href="#"><i class="fas fa-chevron-right"></i></a>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <!-- <footer>
        <div class="container">
            <div class="footer-container" id="contact">
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
                        <li><a href="index.html"><i class="fas fa-chevron-right"></i> Home</a></li>
                        <li><a href="all-doctors.html"><i class="fas fa-chevron-right"></i> All Doctors</a></li>
                        <li><a href="about.html"><i class="fas fa-chevron-right"></i> About us</a></li>
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
                Copyright 2024 © Prescripto - All Right Reserved.
            </div>
        </div>
    </footer> -->

    <script>
        // Filter Doctors Functionality
        document.addEventListener('DOMContentLoaded', function() {
            const specialtyFilter = document.getElementById('specialty-filter');
            const availabilityFilter = document.getElementById('availability-filter');
            const doctorCards = document.querySelectorAll('.doctor-card');
            const searchInput = document.querySelector('.search-box input');
            const searchButton = document.querySelector('.search-box button');
            
            // Filter function
            function filterDoctors() {
                const selectedSpecialty = specialtyFilter.value.toLowerCase();
                const selectedAvailability = availabilityFilter.value;
                const searchTerm = searchInput.value.toLowerCase();
                
                doctorCards.forEach(card => {
                    const specialty = card.getAttribute('data-specialty').toLowerCase();
                    const availability = card.getAttribute('data-availability');
                    const doctorName = card.querySelector('h3').textContent.toLowerCase();
                    
                    const specialtyMatch = selectedSpecialty === '' || specialty.includes(selectedSpecialty);
                    const availabilityMatch = selectedAvailability === '' || availability === selectedAvailability;
                    const searchMatch = doctorName.includes(searchTerm) || 
                                      specialty.includes(searchTerm);
                    
                    if (specialtyMatch && availabilityMatch && searchMatch) {
                        card.style.display = 'block';
                    } else {
                        card.style.display = 'none';
                    }
                });
            }
            
            // Event listeners for filters
            specialtyFilter.addEventListener('change', filterDoctors);
            availabilityFilter.addEventListener('change', filterDoctors);
            searchInput.addEventListener('input', filterDoctors);
            searchButton.addEventListener('click', filterDoctors);
            
            // Doctor card hover effect
            doctorCards.forEach(card => {
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
        });
    </script>
</body>
</html>