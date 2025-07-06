
            
            <!-- <div class="user-actions">
                <div class="user-profile">
                    <img src="image/M Doctor 3.jpeg" alt="Doctor" class="profile-img">
                    <span>Dr. Richard James</span>
                </div>
                <a href="#" class="logout-btn">Logout</a>
            </div>
        </div>
    </header> -->

    <!-- Doctor Dashboard -->
    <div class="doctor-dashboard">
        <!-- Sidebar -->
        <aside class="sidebar">
            <div class="profile-card">
                <div class="profile-image">
                    <img src="<?php echo base_url()?>assets/image/M Doctor 3.jpeg" alt="Dr. Richard James">
                    <button class="edit-profile-btn">
                        <i class="fas fa-pencil-alt"></i> Edit
                    </button>
                </div>
                <div class="profile-info">
                    <h3>Dr. Richard James</h3>
                    <p class="specialty">General Physician</p>
                    <div class="profile-stats">
                        <div class="stat-item">
                            <span class="stat-number">4.8</span>
                            <span class="stat-label">Rating</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">156</span>
                            <span class="stat-label">Patients</span>
                        </div>
                    </div>
                </div>
            </div>
            
            <nav class="dashboard-nav">
                <ul>
                    <li class="active">
                        <a href="#">
                            <i class="fas fa-calendar-alt"></i>
                            <span>Appointments</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fas fa-user-injured"></i>
                            <span>Patients</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fas fa-chart-line"></i>
                            <span>Statistics</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fas fa-prescription"></i>
                            <span>Prescriptions</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fas fa-cog"></i>
                            <span>Settings</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </aside>

        <!-- Main Content -->
        <main class="main-content">
            <!-- Notification Panel -->
            <div class="notification-panel">
                <div class="notification-toggle">
                    <i class="fas fa-bell"></i>
                    <span class="notification-count">3</span>
                </div>
                <div class="notification-content">
                    <div class="notification-header">
                        <h3>Notifications</h3>
                        <button class="close-notifications">
                            <i class="fas fa-times"></i>
                        </button>
                    </div>
                    <div class="notifications-list">
                        <div class="notification-item unread">
                            <div class="notification-icon">
                                <i class="fas fa-calendar-check"></i>
                            </div>
                            <div class="notification-details">
                                <p>New appointment booked by John Doe for tomorrow at 10:00 AM</p>
                                <span class="notification-time">2 hours ago</span>
                            </div>
                        </div>
                        <div class="notification-item unread">
                            <div class="notification-icon">
                                <i class="fas fa-exclamation-circle"></i>
                            </div>
                            <div class="notification-details">
                                <p>Urgent: Patient Sarah Smith rescheduled her appointment</p>
                                <span class="notification-time">5 hours ago</span>
                            </div>
                        </div>
                        <div class="notification-item">
                            <div class="notification-icon">
                                <i class="fas fa-envelope"></i>
                            </div>
                            <div class="notification-details">
                                <p>New message from patient Michael Brown</p>
                                <span class="notification-time">1 day ago</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Dashboard Header -->
            <div class="dashboard-header">
                <h1>Doctor Dashboard</h1>
                <div class="dashboard-actions">
                    <button class="btn btn-primary">
                        <i class="fas fa-plus"></i> New Prescription
                    </button>
                </div>
            </div>

            <!-- Stats Overview -->
            <section class="stats-overview">
                <div class="stats-grid">
                    <div class="stat-card">
                        <div class="stat-icon">
                            <i class="fas fa-calendar-check"></i>
                        </div>
                        <div class="stat-info">
                            <h3>Today's Appointments</h3>
                            <p class="stat-number">8</p>
                            <p class="stat-change positive">
                                <i class="fas fa-arrow-up"></i> 2 from yesterday
                            </p>
                        </div>
                    </div>
                    
                    <div class="stat-card">
                        <div class="stat-icon">
                            <i class="fas fa-user-clock"></i>
                        </div>
                        <div class="stat-info">
                            <h3>Pending Approvals</h3>
                            <p class="stat-number">5</p>
                            <p class="stat-change negative">
                                <i class="fas fa-arrow-down"></i> 1 from yesterday
                            </p>
                        </div>
                    </div>
                    
                    <div class="stat-card">
                        <div class="stat-icon">
                            <i class="fas fa-procedures"></i>
                        </div>
                        <div class="stat-info">
                            <h3>Total Patients</h3>
                            <p class="stat-number">156</p>
                            <p class="stat-change positive">
                                <i class="fas fa-arrow-up"></i> 12 this month
                            </p>
                        </div>
                    </div>
                    
                    <div class="stat-card">
                        <div class="stat-icon">
                            <i class="fas fa-star"></i>
                        </div>
                        <div class="stat-info">
                            <h3>Average Rating</h3>
                            <p class="stat-number">4.8</p>
                            <p class="stat-change neutral">
                                <i class="fas fa-equals"></i> No change
                            </p>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Appointments Section -->
            <section class="appointments-section">
                <div class="section-header">
                    <h2>Upcoming Appointments</h2>
                    <div class="section-actions">
                        <div class="date-filter">
                            <button class="btn btn-outline active">Today</button>
                            <button class="btn btn-outline">Tomorrow</button>
                            <button class="btn btn-outline">This Week</button>
                        </div>
                    </div>
                </div>
                
                <div class="appointments-list">
                    <!-- Appointment 1 -->
                    <div class="appointment-card">
                        <div class="appointment-info">
                            <div class="patient-info">
                                <div class="patient-image">
                                    <img src="image/F Doctor 2 .jpg" alt="Patient">
                                </div>
                                <div class="patient-details">
                                    <h3>Sarah Johnson</h3>
                                    <p class="patient-age">32 years • Female</p>
                                    <p class="appointment-reason">Annual Checkup</p>
                                </div>
                            </div>
                            <div class="appointment-time">
                                <p class="time">10:00 AM - 10:30 AM</p>
                                <p class="date">Today, June 15</p>
                            </div>
                        </div>
                        <div class="appointment-actions">
                            <button class="btn btn-primary">
                                <i class="fas fa-check"></i> Accept
                            </button>
                            <button class="btn btn-outline">
                                <i class="fas fa-times"></i> Reject
                            </button>
                            <button class="btn btn-text">
                                <i class="fas fa-ellipsis-v"></i>
                            </button>
                        </div>
                    </div>
                    
                    <!-- Appointment 2 -->
                    <div class="appointment-card">
                        <div class="appointment-info">
                            <div class="patient-info">
                                <div class="patient-image">
                                    <img src="image/M Doctor 2.jpeg" alt="Patient">
                                </div>
                                <div class="patient-details">
                                    <h3>Michael Brown</h3>
                                    <p class="patient-age">45 years • Male</p>
                                    <p class="appointment-reason">Follow-up Visit</p>
                                </div>
                            </div>
                            <div class="appointment-time">
                                <p class="time">11:30 AM - 12:00 PM</p>
                                <p class="date">Today, June 15</p>
                            </div>
                        </div>
                        <div class="appointment-actions">
                            <button class="btn btn-primary">
                                <i class="fas fa-check"></i> Accept
                            </button>
                            <button class="btn btn-outline">
                                <i class="fas fa-times"></i> Reject
                            </button>
                            <button class="btn btn-text">
                                <i class="fas fa-ellipsis-v"></i>
                            </button>
                        </div>
                    </div>
                    
                    <!-- Appointment 3 -->
                    <div class="appointment-card">
                        <div class="appointment-info">
                            <div class="patient-info">
                                <div class="patient-image">
                                    <img src="image/F Doctor 4.jpeg" alt="Patient">
                                </div>
                                <div class="patient-details">
                                    <h3>Emily Davis</h3>
                                    <p class="patient-age">28 years • Female</p>
                                    <p class="appointment-reason">Consultation</p>
                                </div>
                            </div>
                            <div class="appointment-time">
                                <p class="time">02:15 PM - 02:45 PM</p>
                                <p class="date">Today, June 15</p>
                            </div>
                        </div>
                        <div class="appointment-actions">
                            <button class="btn btn-primary">
                                <i class="fas fa-check"></i> Accept
                            </button>
                            <button class="btn btn-outline">
                                <i class="fas fa-times"></i> Reject
                            </button>
                            <button class="btn btn-text">
                                <i class="fas fa-ellipsis-v"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Statistics Section -->
            <section class="statistics-section">
                <div class="section-header">
                    <h2>Appointment Statistics</h2>
                    <div class="section-actions">
                        <select class="time-period">
                            <option>Last 7 Days</option>
                            <option>Last 30 Days</option>
                            <option>Last 3 Months</option>
                            <option>Last Year</option>
                        </select>
                    </div>
                </div>
                
                <div class="stats-chart-container">
                    <canvas id="appointmentsChart"></canvas>
                </div>
                
                <div class="stats-summary">
                    <div class="summary-card">
                        <h3>Total Appointments</h3>
                        <p class="summary-number">42</p>
                        <p class="summary-change positive">
                            <i class="fas fa-arrow-up"></i> 15% from last month
                        </p>
                    </div>
                    
                    <div class="summary-card">
                        <h3>Completed</h3>
                        <p class="summary-number">38</p>
                        <p class="summary-change positive">
                            <i class="fas fa-arrow-up"></i> 12% from last month
                        </p>
                    </div>
                    
                    <div class="summary-card">
                        <h3>Cancelled</h3>
                        <p class="summary-number">4</p>
                        <p class="summary-change negative">
                            <i class="fas fa-arrow-down"></i> 20% from last month
                        </p>
                    </div>
                </div>
            </section>
        </main>
    </div>

    <!-- Edit Profile Modal -->
    <div class="modal" id="editProfileModal">
        <div class="modal-content">
            <button class="close-modal">
                <i class="fas fa-times"></i>
            </button>
            <h2>Edit Profile</h2>
            
            <form class="edit-profile-form">
                <div class="form-row">
                    <div class="form-group">
                        <label for="firstName">First Name</label>
                        <input type="text" id="firstName" value="Richard">
                    </div>
                    <div class="form-group">
                        <label for="lastName">Last Name</label>
                        <input type="text" id="lastName" value="James">
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="specialty">Specialty</label>
                    <input type="text" id="specialty" value="General Physician">
                </div>
                
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" value="richard.james@prescripto.com">
                </div>
                
                <div class="form-group">
                    <label for="phone">Phone</label>
                    <input type="tel" id="phone" value="+237 678 931 011">
                </div>
                
                <div class="form-group">
                    <label for="bio">Bio</label>
                    <textarea id="bio" rows="4">Experienced general physician with over 10 years of practice. Special interest in preventive medicine and chronic disease management.</textarea>
                </div>
                
                <div class="form-group">
                    <label for="profileImage">Profile Image</label>
                    <input type="file" id="profileImage">
                </div>
                
                <div class="form-footer">
                    <button type="button" class="btn btn-outline close-modal-btn">Cancel</button>
                    <button type="submit" class="btn btn-primary">Save Changes</button>
                </div>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Notification Panel Toggle
            const notificationToggle = document.querySelector('.notification-toggle');
            const notificationPanel = document.querySelector('.notification-content');
            const closeNotifications = document.querySelector('.close-notifications');
            
            notificationToggle.addEventListener('click', function() {
                notificationPanel.classList.toggle('active');
            });
            
            closeNotifications.addEventListener('click', function() {
                notificationPanel.classList.remove('active');
            });
            
            // Mark notifications as read when clicked
            const notificationItems = document.querySelectorAll('.notification-item');
            notificationItems.forEach(item => {
                item.addEventListener('click', function() {
                    this.classList.remove('unread');
                    // Update notification count
                    const unreadCount = document.querySelectorAll('.notification-item.unread').length;
                    document.querySelector('.notification-count').textContent = unreadCount;
                });
            });
            
            // Appointment actions
            const acceptButtons = document.querySelectorAll('.appointment-actions .btn-primary');
            const rejectButtons = document.querySelectorAll('.appointment-actions .btn-outline');
            
            acceptButtons.forEach(button => {
                button.addEventListener('click', function(e) {
                    e.stopPropagation();
                    const appointmentCard = this.closest('.appointment-card');
                    appointmentCard.classList.add('accepted');
                    this.innerHTML = '<i class="fas fa-check-circle"></i> Accepted';
                    this.nextElementSibling.style.display = 'none';
                    
                    // Show success message
                    showAlert('Appointment accepted successfully', 'success');
                });
            });
            
            rejectButtons.forEach(button => {
                button.addEventListener('click', function(e) {
                    e.stopPropagation();
                    const appointmentCard = this.closest('.appointment-card');
                    appointmentCard.classList.add('rejected');
                    this.previousElementSibling.style.display = 'none';
                    this.innerHTML = '<i class="fas fa-times-circle"></i> Rejected';
                    
                    // Show warning message
                    showAlert('Appointment rejected', 'warning');
                });
            });
            
            // Edit Profile Modal
            const editProfileBtn = document.querySelector('.edit-profile-btn');
            const editProfileModal = document.getElementById('editProfileModal');
            const closeModal = document.querySelector('.close-modal');
            const closeModalBtn = document.querySelector('.close-modal-btn');
            
            editProfileBtn.addEventListener('click', function() {
                editProfileModal.style.display = 'flex';
            });
            
            closeModal.addEventListener('click', function() {
                editProfileModal.style.display = 'none';
            });
            
            closeModalBtn.addEventListener('click', function() {
                editProfileModal.style.display = 'none';
            });
            
            window.addEventListener('click', function(e) {
                if (e.target === editProfileModal) {
                    editProfileModal.style.display = 'none';
                }
            });
            
            // Form submission
            const editProfileForm = document.querySelector('.edit-profile-form');
            editProfileForm.addEventListener('submit', function(e) {
                e.preventDefault();
                // Here you would typically send the data to a server
                // For this example, we'll just show an alert
                showAlert('Profile updated successfully', 'success');
                editProfileModal.style.display = 'none';
            });
            
            // Chart.js for statistics
            const ctx = document.getElementById('appointmentsChart').getContext('2d');
            const appointmentsChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'],
                    datasets: [{
                        label: 'Completed',
                        data: [8, 5, 6, 7, 9, 4, 3],
                        backgroundColor: '#2563eb',
                        borderRadius: 4
                    }, {
                        label: 'Cancelled',
                        data: [1, 2, 1, 0, 1, 0, 1],
                        backgroundColor: '#ef4444',
                        borderRadius: 4
                    }]
                },
                options: {
                    responsive: true,
                    plugins: {
                        legend: {
                            position: 'top',
                        },
                        tooltip: {
                            mode: 'index',
                            intersect: false,
                        }
                    },
                    scales: {
                        y: {
                            beginAtZero: true,
                            ticks: {
                                stepSize: 2
                            }
                        }
                    }
                }
            });
            
            // Helper function to show alerts
            function showAlert(message, type) {
                const alert = document.createElement('div');
                alert.className = `alert alert-${type}`;
                alert.innerHTML = `
                    <span>${message}</span>
                    <button class="close-alert"><i class="fas fa-times"></i></button>
                `;
                
                document.body.appendChild(alert);
                
                setTimeout(() => {
                    alert.classList.add('show');
                }, 10);
                
                // Close alert when X is clicked
                alert.querySelector('.close-alert').addEventListener('click', function() {
                    alert.classList.remove('show');
                    setTimeout(() => {
                        alert.remove();
                    }, 300);
                });
                
                // Auto-remove after 5 seconds
                setTimeout(() => {
                    alert.classList.remove('show');
                    setTimeout(() => {
                        alert.remove();
                    }, 300);
                }, 5000);
            }
            
            // Active nav link
            const navLinks = document.querySelectorAll('.dashboard-nav li');
            navLinks.forEach(link => {
                link.addEventListener('click', function() {
                    navLinks.forEach(l => l.classList.remove('active'));
                    this.classList.add('active');
                });
            });
            
            // Date filter buttons
            const dateFilterButtons = document.querySelectorAll('.date-filter .btn');
            dateFilterButtons.forEach(button => {
                button.addEventListener('click', function() {
                    dateFilterButtons.forEach(btn => btn.classList.remove('active'));
                    this.classList.add('active');
                    // Here you would typically filter appointments
                });
            });
            
            // Time period select
            const timePeriodSelect = document.querySelector('.time-period');
            timePeriodSelect.addEventListener('change', function() {
                // Here you would typically update the chart data
                console.log('Time period changed to:', this.value);
            });
        });
    </script>
</body>
