
    
            
           <div class="user-actions">
                <div class="user-profile">
                    
                </div>
                
            </div>
        </div>
    </header>

    <!-- Patient Profile Section -->
    <section class="patient-profile">
        <div class="container">
            <div class="profile-header">
                <div class="profile-image">
                    <img src="image/IMG-20240718-WA0031.jpg" alt="Patient Profile">
                    <button class="edit-profile-btn">Edit Profile</button>
                </div>
                <div class="profile-info">
                    <h1>John Doe</h1>
                    <p class="patient-id">Patient ID: PRSC123456</p>
                    <div class="profile-stats">
                        <div class="stat-item">
                            <span class="stat-number">12</span>
                            <span class="stat-label">Appointments</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">8</span>
                            <span class="stat-label">Completed</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">4</span>
                            <span class="stat-label">Upcoming</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Main Content -->
    <section class="patient-dashboard">
        <div class="container">
            <div class="dashboard-grid">
                <!-- Book Appointment Section -->
                <div class="dashboard-card" id="book-appointment">
                    <h2>Book New Appointment</h2>
                    <form id="appointment-form">
                        <div class="form-group">
                            <label for="specialty">Specialty</label>
                            <select id="specialty" name="specialty" required>
                                <option value="">Select Specialty</option>
                                <option value="general">General Physician</option>
                                <option value="gynecology">Gynecologist</option>
                                <option value="dermatology">Dermatologist</option>
                                <option value="pediatrics">Pediatricians</option>
                                <option value="neurology">Neurologist</option>
                                <option value="gastroenterology">Gastroenterologist</option>
                            </select>
                        </div>
                        
                        <div class="form-group">
                            <label for="doctor">Doctor</label>
                            <select id="doctor" name="doctor" required disabled>
                                <option value="">Select Doctor</option>
                            </select>
                        </div>
                        
                        <div class="form-group">
                            <label for="date">Date</label>
                            <input type="date" id="date" name="date" required>
                        </div>
                        
                        <div class="form-group">
                            <label for="time">Time</label>
                            <select id="time" name="time" required>
                                <option value="">Select Time</option>
                                <option value="09:00">09:00 AM</option>
                                <option value="10:00">10:00 AM</option>
                                <option value="11:00">11:00 AM</option>
                                <option value="12:00">12:00 PM</option>
                                <option value="14:00">02:00 PM</option>
                                <option value="15:00">03:00 PM</option>
                                <option value="16:00">04:00 PM</option>
                            </select>
                        </div>
                        
                        <div class="form-group">
                            <label for="symptoms">Symptoms/Reason</label>
                            <textarea id="symptoms" name="symptoms" rows="3" required></textarea>
                        </div>
                        
                        <button type="submit" class="btn btn-primary">Book Appointment</button>
                    </form>
                </div>
                
                <!-- Upcoming Appointments -->
                <div class="dashboard-card" id="appointments">
                    <h2>Upcoming Appointments</h2>
                    <div class="appointments-list">
                        <div class="appointment-card status-pending">
                            <div class="appointment-info">
                                <h3>Dr. Emily Larson</h3>
                                <p class="specialty">Gynecologist</p>
                                <p class="date-time">July 25, 2024 - 10:00 AM</p>
                                <p class="symptoms">Annual checkup and consultation</p>
                            </div>
                            <div class="appointment-actions">
                                <span class="status-badge">Pending</span>
                                <button class="btn btn-outline cancel-btn">Cancel</button>
                            </div>
                        </div>
                        
                        <div class="appointment-card status-confirmed">
                            <div class="appointment-info">
                                <h3>Dr. Richard James</h3>
                                <p class="specialty">General Physician</p>
                                <p class="date-time">July 28, 2024 - 02:00 PM</p>
                                <p class="symptoms">Follow-up for blood pressure medication</p>
                            </div>
                            <div class="appointment-actions">
                                <span class="status-badge">Confirmed</span>
                                <button class="btn btn-outline reschedule-btn">Reschedule</button>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Appointment History -->
                <div class="dashboard-card" id="history">
                    <h2>Appointment History</h2>
                    <div class="history-list">
                        <div class="history-card">
                            <div class="history-info">
                                <h3>Dr. Sarah Patel</h3>
                                <p class="specialty">Dermatologist</p>
                                <p class="date-time">June 15, 2024 - 11:00 AM</p>
                                <p class="symptoms">Skin allergy consultation</p>
                            </div>
                            <div class="history-status">
                                <span class="status-badge status-completed">Completed</span>
                                <button class="btn btn-outline view-details-btn">View Details</button>
                            </div>
                        </div>
                        
                        <div class="history-card">
                            <div class="history-info">
                                <h3>Dr. Christopher Lee</h3>
                                <p class="specialty">Pediatrician</p>
                                <p class="date-time">May 20, 2024 - 09:00 AM</p>
                                <p class="symptoms">Child vaccination</p>
                            </div>
                            <div class="history-status">
                                <span class="status-badge status-completed">Completed</span>
                                <button class="btn btn-outline view-details-btn">View Details</button>
                            </div>
                        </div>
                    </div>
                    <div class="view-all">
                        <a href="#" class="btn btn-outline">View All History</a>
                    </div>
                </div>
                
                <!-- Notifications -->
                <div class="dashboard-card" id="notifications">
                    <h2>Notifications</h2>
                    <div class="notifications-list">
                        <div class="notification-card">
                            <div class="notification-icon">
                                <i class="fas fa-calendar-check"></i>
                            </div>
                            <div class="notification-content">
                                <p>Your appointment with <strong>Dr. Richard James</strong> on <strong>July 28</strong> has been confirmed.</p>
                                <span class="notification-time">2 hours ago</span>
                            </div>
                        </div>
                        
                        <div class="notification-card">
                            <div class="notification-icon">
                                <i class="fas fa-envelope"></i>
                            </div>
                            <div class="notification-content">
                                <p>Your medical report is ready. Check your email for details.</p>
                                <span class="notification-time">1 day ago</span>
                            </div>
                        </div>
                        
                        <div class="notification-card">
                            <div class="notification-icon">
                                <i class="fas fa-calendar-times"></i>
                            </div>
                            <div class="notification-content">
                                <p>Your appointment with <strong>Dr. Andrew Williams</strong> on <strong>July 20</strong> has been cancelled.</p>
                                <span class="notification-time">3 days ago</span>
                            </div>
                        </div>
                    </div>
                    <div class="view-all">
                        <a href="#" class="btn btn-outline">View All Notifications</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="footer-container" id="contact">
                <div class="footer-col">
                    <h3>Prescripto</h3>
                    <p>Prescripto: Book appointments with trusted doctors easily. Your health, our priority. Streamlined healthcare access for everyone.</p>
                    <div class="contact-info">
                        <i class="fas fa-phone"></i>
                        <span>+237 678 931 011</span>
                    </div>
                    <div class="contact-info">
                        <i class="fas fa-envelope"></i>
                        <span>geniusabou@gmail.com</span>
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
                Copyright 2024 © Prescripto - All Right Reserved.
            </div>
        </div>
    </footer>

    <!-- Modal for Appointment Details -->
    <div class="modal" id="appointment-modal">
        <div class="modal-content">
            <span class="close-modal">&times;</span>
            <h2>Appointment Details</h2>
            <div class="modal-body">
                <div class="detail-row">
                    <span class="detail-label">Doctor:</span>
                    <span class="detail-value">Dr. Sarah Patel</span>
                </div>
                <div class="detail-row">
                    <span class="detail-label">Specialty:</span>
                    <span class="detail-value">Dermatologist</span>
                </div>
                <div class="detail-row">
                    <span class="detail-label">Date & Time:</span>
                    <span class="detail-value">June 15, 2024 - 11:00 AM</span>
                </div>
                <div class="detail-row">
                    <span class="detail-label">Status:</span>
                    <span class="detail-value status-completed">Completed</span>
                </div>
                <div class="detail-row">
                    <span class="detail-label">Symptoms:</span>
                    <span class="detail-value">Skin allergy consultation with persistent rash on arms and legs</span>
                </div>
                <div class="detail-row">
                    <span class="detail-label">Diagnosis:</span>
                    <span class="detail-value">Contact dermatitis</span>
                </div>
                <div class="detail-row">
                    <span class="detail-label">Prescription:</span>
                    <span class="detail-value">
                        <ul>
                            <li>Hydrocortisone cream 1% - Apply to affected areas twice daily</li>
                            <li>Antihistamine tablets - Take once daily at bedtime</li>
                        </ul>
                    </span>
                </div>
                <div class="detail-row">
                    <span class="detail-label">Follow-up:</span>
                    <span class="detail-value">Recommended in 2 weeks if symptoms persist</span>
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-primary">Download Report</button>
                <button class="btn btn-outline close-modal-btn">Close</button>
            </div>
        </div>
    </div>

    <script src="js/patient-profile.js"></script>
</body>
</html>