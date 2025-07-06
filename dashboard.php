<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prescripto - Admin Dashboard</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="<?php echo base_url('assets/style.css'); ?>" type="text/css">
</head>
<body>
    <!-- Admin Dashboard Layout -->
    <div class="admin-dashboard">
        <!-- Sidebar -->
        <div class="sidebar">
            <div class="profile-card">
                <div class="profile-image">
                    <img src="image/admin-avatar.jpg" alt="Admin Profile">
                    <button class="edit-profile-btn">
                        <i class="fas fa-camera"></i> Edit
                    </button>
                </div>
                <div class="profile-info">
                    <h3>Admin User</h3>
                    <p class="specialty">System Administrator</p>
                </div>
            </div>
            
            <nav class="dashboard-nav">
                <ul>
                    <li class="active"><a href="#dashboard"><i class="fas fa-tachometer-alt"></i> Dashboard</a></li>
                    <li><a href="#doctors"><i class="fas fa-user-md"></i> Doctors</a></li>
                    <li><a href="#patients"><i class="fas fa-procedures"></i> Patients</a></li>
                    <li><a href="#appointments"><i class="fas fa-calendar-check"></i> Appointments</a></li>
                    <li><a href="#reports"><i class="fas fa-chart-bar"></i> Reports</a></li>
                    <li><a href="#settings"><i class="fas fa-cog"></i> Settings</a></li>
                </ul>
            </nav>
        </div>
        
        <!-- Main Content -->
        <div class="main-content">
            <div class="dashboard-header">
                <h1>Admin Dashboard</h1>
                <div class="user-actions">
                    <a href="index.html" class="btn btn-outline"><i class="fas fa-home"></i> View Site</a>
                    <a href="#" class="logout-btn"><i class="fas fa-sign-out-alt"></i> Logout</a>
                </div>
            </div>
            
            <!-- Stats Overview -->
            <div class="stats-overview">
                <div class="stats-grid">
                    <div class="stat-card">
                        <div class="stat-icon">
                            <i class="fas fa-user-md"></i>
                        </div>
                        <div class="stat-info">
                            <h3>Total Doctors</h3>
                            <div class="stat-number">24</div>
                            <div class="stat-change positive">
                                <i class="fas fa-arrow-up"></i> 5 this month
                            </div>
                        </div>
                    </div>
                    
                    <div class="stat-card">
                        <div class="stat-icon">
                            <i class="fas fa-procedures"></i>
                        </div>
                        <div class="stat-info">
                            <h3>Total Patients</h3>
                            <div class="stat-number">186</div>
                            <div class="stat-change positive">
                                <i class="fas fa-arrow-up"></i> 12 this week
                            </div>
                        </div>
                    </div>
                    
                    <div class="stat-card">
                        <div class="stat-icon">
                            <i class="fas fa-calendar-check"></i>
                        </div>
                        <div class="stat-info">
                            <h3>Appointments</h3>
                            <div class="stat-number">42</div>
                            <div class="stat-change neutral">
                                <i class="fas fa-minus"></i> 2 today
                            </div>
                        </div>
                    </div>
                    
                    <div class="stat-card">
                        <div class="stat-icon">
                            <i class="fas fa-dollar-sign"></i>
                        </div>
                        <div class="stat-info">
                            <h3>Revenue</h3>
                            <div class="stat-number">$8,240</div>
                            <div class="stat-change positive">
                                <i class="fas fa-arrow-up"></i> 15% this month
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Doctors Management Section -->
            <section id="doctors">
                <div class="section-header">
                    <h2>Manage Doctors</h2>
                    <button class="btn btn-primary" id="addDoctorBtn">
                        <i class="fas fa-plus"></i> Add Doctor
                    </button>
                </div>
                
                <div class="doctors-grid">
                    <!-- Doctor cards will be populated by JavaScript -->
                </div>
            </section>
            
            <!-- Appointments Statistics -->
            <section class="statistics-section">
                <div class="section-header">
                    <h2>Appointments Statistics</h2>
                    <div class="date-filter">
                        <select id="statsFilter">
                            <option value="week">This Week</option>
                            <option value="month">This Month</option>
                            <option value="year">This Year</option>
                        </select>
                    </div>
                </div>
                
                <div class="stats-chart-container">
                    <canvas id="appointmentsChart"></canvas>
                </div>
                
                <div class="stats-summary">
                    <div class="summary-card">
                        <h3>Total Appointments</h3>
                        <div class="summary-number">156</div>
                        <div class="summary-change positive">
                            <i class="fas fa-arrow-up"></i> 12% from last period
                        </div>
                    </div>
                    
                    <div class="summary-card">
                        <h3>Completed</h3>
                        <div class="summary-number">128</div>
                        <div class="summary-change positive">
                            <i class="fas fa-arrow-up"></i> 82% completion rate
                        </div>
                    </div>
                    
                    <div class="summary-card">
                        <h3>Cancelled</h3>
                        <div class="summary-number">18</div>
                        <div class="summary-change negative">
                            <i class="fas fa-arrow-down"></i> 12% cancellation rate
                        </div>
                    </div>
                    
                    <div class="summary-card">
                        <h3>Revenue</h3>
                        <div class="summary-number">$6,240</div>
                        <div class="summary-change positive">
                            <i class="fas fa-arrow-up"></i> 15% from last period
                        </div>
                    </div>
                </div>
            </section>
            
            <!-- Patient Appointments Table -->
            <section id="patients">
                <div class="section-header">
                    <h2>Patient Appointments</h2>
                    <div class="date-filter">
                        <button class="btn btn-outline active">All</button>
                        <button class="btn btn-outline">Pending</button>
                        <button class="btn btn-outline">Confirmed</button>
                        <button class="btn btn-outline">Completed</button>
                        <button class="btn btn-outline">Cancelled</button>
                    </div>
                </div>
                
                <div class="appointments-table">
                    <table>
                        <thead>
                            <tr>
                                <th>Patient</th>
                                <th>Doctor</th>
                                <th>Date & Time</th>
                                <th>Specialty</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <div class="patient-info">
                                        <div class="patient-image">
                                            <img src="image/patient1.jpg" alt="Patient">
                                        </div>
                                        <div class="patient-details">
                                            <h3>John Smith</h3>
                                            <p class="patient-age">32 years</p>
                                        </div>
                                    </div>
                                </td>
                                <td>Dr. Sarah Patel</td>
                                <td>
                                    <div class="appointment-time">
                                        <span class="time">10:00 AM</span>
                                        <span class="date">May 15, 2023</span>
                                    </div>
                                </td>
                                <td>Dermatology</td>
                                <td><span class="status-badge status-confirmed">Confirmed</span></td>
                                <td>
                                    <button class="btn-text" title="View Details"><i class="fas fa-eye"></i></button>
                                    <button class="btn-text" title="Edit"><i class="fas fa-edit"></i></button>
                                    <button class="btn-text" title="Cancel"><i class="fas fa-times"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="patient-info">
                                        <div class="patient-image">
                                            <img src="image/patient2.jpg" alt="Patient">
                                        </div>
                                        <div class="patient-details">
                                            <h3>Emily Johnson</h3>
                                            <p class="patient-age">28 years</p>
                                        </div>
                                    </div>
                                </td>
                                <td>Dr. Richard James</td>
                                <td>
                                    <div class="appointment-time">
                                        <span class="time">2:30 PM</span>
                                        <span class="date">May 16, 2023</span>
                                    </div>
                                </td>
                                <td>General Physician</td>
                                <td><span class="status-badge status-pending">Pending</span></td>
                                <td>
                                    <button class="btn-text" title="View Details"><i class="fas fa-eye"></i></button>
                                    <button class="btn-text" title="Edit"><i class="fas fa-edit"></i></button>
                                    <button class="btn-text" title="Cancel"><i class="fas fa-times"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="patient-info">
                                        <div class="patient-image">
                                            <img src="image/patient3.jpg" alt="Patient">
                                        </div>
                                        <div class="patient-details">
                                            <h3>Michael Brown</h3>
                                            <p class="patient-age">45 years</p>
                                        </div>
                                    </div>
                                </td>
                                <td>Dr. Jennifer Garcia</td>
                                <td>
                                    <div class="appointment-time">
                                        <span class="time">9:15 AM</span>
                                        <span class="date">May 17, 2023</span>
                                    </div>
                                </td>
                                <td>Neurology</td>
                                <td><span class="status-badge status-completed">Completed</span></td>
                                <td>
                                    <button class="btn-text" title="View Details"><i class="fas fa-eye"></i></button>
                                    <button class="btn-text" title="Edit"><i class="fas fa-edit"></i></button>
                                    <button class="btn-text" title="Cancel"><i class="fas fa-times"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="patient-info">
                                        <div class="patient-image">
                                            <img src="image/patient4.jpg" alt="Patient">
                                        </div>
                                        <div class="patient-details">
                                            <h3>Sarah Wilson</h3>
                                            <p class="patient-age">38 years</p>
                                        </div>
                                    </div>
                                </td>
                                <td>Dr. Christopher Lee</td>
                                <td>
                                    <div class="appointment-time">
                                        <span class="time">11:45 AM</span>
                                        <span class="date">May 18, 2023</span>
                                    </div>
                                </td>
                                <td>Pediatrics</td>
                                <td><span class="status-badge status-cancelled">Cancelled</span></td>
                                <td>
                                    <button class="btn-text" title="View Details"><i class="fas fa-eye"></i></button>
                                    <button class="btn-text" title="Edit"><i class="fas fa-edit"></i></button>
                                    <button class="btn-text" title="Cancel"><i class="fas fa-times"></i></button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </section>
        </div>
    </div>
    
    <!-- Add Doctor Modal -->
    <div class="modal" id="doctorModal">
        <div class="modal-content">
            <button class="close-modal">&times;</button>
            <h2>Add New Doctor</h2>
            
            <form id="doctorForm" class="edit-profile-form">
                <div class="form-row">
                    <div class="form-group">
                        <label for="doctorName">Full Name</label>
                        <input type="text" id="doctorName" placeholder="Dr. Firstname Lastname" required>
                    </div>
                    <div class="form-group">
                        <label for="doctorSpecialty">Specialty</label>
                        <select id="doctorSpecialty" required>
                            <option value="">Select Specialty</option>
                            <option value="General Physician">General Physician</option>
                            <option value="Gynecologist">Gynecologist</option>
                            <option value="Dermatologist">Dermatologist</option>
                            <option value="Pediatrician">Pediatrician</option>
                            <option value="Neurologist">Neurologist</option>
                            <option value="Gastroenterologist">Gastroenterologist</option>
                        </select>
                    </div>
                </div>
                
                <div class="form-row">
                    <div class="form-group">
                        <label for="doctorEmail">Email</label>
                        <input type="email" id="doctorEmail" placeholder="doctor@example.com" required>
                    </div>
                    <div class="form-group">
                        <label for="doctorPhone">Phone</label>
                        <input type="tel" id="doctorPhone" placeholder="+1234567890" required>
                    </div>
                </div>
                
                <div class="form-row">
                    <div class="form-group">
                        <label for="doctorExperience">Years of Experience</label>
                        <input type="number" id="doctorExperience" placeholder="5" min="0" required>
                    </div>
                    <div class="form-group">
                        <label for="doctorStatus">Availability</label>
                        <select id="doctorStatus" required>
                            <option value="Available">Available</option>
                            <option value="Unavailable">Unavailable</option>
                            <option value="On Leave">On Leave</option>
                        </select>
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="doctorBio">Bio</label>
                    <textarea id="doctorBio" placeholder="Brief professional bio..."></textarea>
                </div>
                
                <div class="form-group">
                    <label for="doctorImage">Profile Image</label>
                    <input type="file" id="doctorImage" accept="image/*">
                </div>
                
                <div class="form-footer">
                    <button type="button" class="btn btn-outline close-modal-btn">Cancel</button>
                    <button type="submit" class="btn btn-primary">Save Doctor</button>
                </div>
            </form>
        </div>
    </div>
    
    <!-- Profile Picture Modal -->
    <div class="modal" id="profileModal">
        <div class="modal-content">
            <button class="close-modal">&times;</button>
            <h2>Update Profile Picture</h2>
            
            <form id="profileForm" class="edit-profile-form">
                <div class="form-group">
                    <div class="profile-image-upload">
                        <div class="image-preview" id="imagePreview">
                            <img src="image/admin-avatar.jpg" alt="Current Profile" id="currentProfileImage">
                            <div class="default-text" id="defaultText">
                                <i class="fas fa-user-circle"></i>
                                <span>Image Preview</span>
                            </div>
                        </div>
                        <input type="file" id="profileImage" accept="image/*" required>
                        <label for="profileImage" class="btn btn-primary">Choose Image</label>
                    </div>
                </div>
                
                <div class="form-footer">
                    <button type="button" class="btn btn-outline close-modal-btn">Cancel</button>
                    <button type="submit" class="btn btn-primary">Update Profile</button>
                </div>
            </form>
        </div>
    </div>
    
    <!-- Include Chart.js for statistics -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="<?php echo base_url('assets/Js/admin.js'); ?>"></script>
</body>
</html>