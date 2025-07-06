<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - Prescripto</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"> -->
    <style>
        /* Reset and Base Styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        body {
            background-color: #f8fafc;
            color: #1e293b;
            line-height: 1.6;
        }
        
       
        }
        
        section {
            padding: 60px 0;
        }
        
    
        }
        
        .logo i {
            color: #2563eb;
        }
        
        /* Contact Section */
        .contact-section {
            background-color: white;
        }
        
        .section-title {
            text-align: center;
            margin-bottom: 40px;
        }
        
        .section-title h1 {
            font-size: 36px;
            color: #0c4a6e;
            margin-bottom: 15px;
        }
        
        .section-title p {
            color: #6b7280;
            max-width: 700px;
            margin: 0 auto;
            font-size: 18px;
        }
        
        .contact-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 40px;
        }
        
        .contact-info {
            padding: 30px;
            background-color: #f1f5f9;
            border-radius: 12px;
        }
        
        .contact-info h2 {
            font-size: 24px;
            margin-bottom: 20px;
            color: #0c4a6e;
        }
        
        .contact-method {
            display: flex;
            gap: 20px;
            margin-bottom: 25px;
            align-items: flex-start;
        }
        
        .contact-icon {
            width: 50px;
            height: 50px;
            background-color: #dbeafe;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #2563eb;
            font-size: 20px;
            flex-shrink: 0;
        }
        
        .contact-details h3 {
            font-size: 18px;
            color: #0c4a6e;
            margin-bottom: 5px;
        }
        
        .contact-details p {
            color: #6b7280;
            font-size: 16px;
        }
        
        /* Contact Form */
        .contact-form {
            padding: 30px;
            background-color: #f1f5f9;
            border-radius: 12px;
        }
        
        .contact-form h2 {
            font-size: 24px;
            margin-bottom: 20px;
            color: #0c4a6e;
        }
        
        .form-group {
            margin-bottom: 20px;
        }
        
        .form-group label {
            display: block;
            margin-bottom: 8px;
            font-weight: 500;
            color: #0c4a6e;
        }
        
        .form-group input,
        .form-group select,
        .form-group textarea {
            width: 100%;
            padding: 12px 15px;
            border-radius: 8px;
            border: 1px solid #e5e7eb;
            font-size: 16px;
            transition: all 0.3s ease;
        }
        
        .form-group input:focus,
        .form-group select:focus,
        .form-group textarea:focus {
            outline: none;
            border-color: #2563eb;
            box-shadow: 0 0 0 3px rgba(37, 99, 235, 0.1);
        }
        
        .form-group textarea {
            resize: vertical;
            min-height: 150px;
        }
        
        .btn {
            display: inline-block;
            padding: 12px 28px;
            border-radius: 50px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            text-decoration: none;
            font-size: 16px;
            border: none;
        }
        
        .btn-primary {
            background-color: #2563eb;
            color: white;
            box-shadow: 0 4px 15px rgba(37, 99, 235, 0.3);
        }
        
        .btn-primary:hover {
            background-color: #1d4ed8;
            transform: translateY(-2px);
        }
        
        /* Responsive Styles */
        @media (max-width: 768px) {
            .contact-grid {
                grid-template-columns: 1fr;
            }
            
            .section-title h1 {
                font-size: 28px;
            }
        }
    </style>
</head>
<body>
    <!-- Header -->
    <!-- <header>
        <div class="container header-container">
            <a href="index.html" class="logo">
                <i class="fas fa-heartbeat"></i>
                Prescripto
            </a>
        </div>
    </header> -->

    <!-- Contact Section -->
    <section class="contact-section">
        <div class="container">
            <div class="section-title">
                <h1>Contact Prescripto Support</h1>
                <p>We're here to help you with any questions or issues you may have.</p>
            </div>
            
            <div class="contact-grid">
                <div class="contact-info">
                    <h2>Our Contact Information</h2>
                    
                    <div class="contact-method">
                        <div class="contact-icon">
                            <i class="fas fa-phone-alt"></i>
                        </div>
                        <div class="contact-details">
                            <h3>Phone Support</h3>
                            <p>+237-678-931-011</p>
                            <p>Monday to Friday, 8:00 AM to 5:00 PM</p>
                        </div>
                    </div>
                    
                    <div class="contact-method">
                        <div class="contact-icon">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <div class="contact-details">
                            <h3>Email Us</h3>
                            <p>support@prescripto.com</p>
                            <p>We typically respond within 24 hours</p>
                        </div>
                    </div>
                    
                    <div class="contact-method">
                        <div class="contact-icon">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <div class="contact-details">
                            <h3>Visit Us</h3>
                            <p>123 Medical Plaza</p>
                            <p>Douala, Cameroon</p>
                        </div>
                    </div>
                </div>
                
                <div class="contact-form">
                    <h2>Send Us a Message</h2>
                    <p>Fill out the form below and we'll get back to you soon.</p>
                    
                    <form id="contactForm">
                        <div class="form-group">
                            <label for="name">Your Name</label>
                            <input type="text" id="name" name="name" required>
                        </div>
                        
                        <div class="form-group">
                            <label for="email">Email Address</label>
                            <input type="email" id="email" name="email" required>
                        </div>
                        
                        <div class="form-group">
                            <label for="subject">Subject</label>
                            <select id="subject" name="subject" required>
                                <option value="" disabled selected>Select a subject</option>
                                <option value="appointment">Appointment Issue</option>
                                <option value="technical">Technical Problem</option>
                                <option value="other">Other</option>
                            </select>
                        </div>
                        
                        <div class="form-group">
                            <label for="message">Your Message</label>
                            <textarea id="message" name="message" rows="5" required></textarea>
                        </div>
                        
                        <button type="submit" class="btn btn-primary">Send Message</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Form submission
            const contactForm = document.getElementById('contactForm');
            
            contactForm.addEventListener('submit', function(e) {
                e.preventDefault();
                
                // Get form values
                const name = document.getElementById('name').value;
                const email = document.getElementById('email').value;
                const subject = document.getElementById('subject').value;
                const message = document.getElementById('message').value;
                
                // Here you would typically send the data to a server
                // For this example, we'll just show an alert
                alert(`Thank you, ${name}! Your message has been sent. We'll contact you at ${email} regarding your ${subject} inquiry.`);
                
                // Reset form
                contactForm.reset();
            });
        });
    </script>
</body>
</html>