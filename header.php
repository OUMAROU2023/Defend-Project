<!-- <!DOCTYPE html> -->
<!-- <html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><php echo "Prescripto - Book Appointments with Trusted Doctors"; ?></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="<php echo base_url(); ?>assets/style.css" type="text/css">
</head>
<body> -->
    <!-- Header -->
    <!-- <header>
        <div class="container header-container">
            <a href="#" class="logo">
                <i class="fas fa-heartbeat"></i>
                Prescripto
            </a>
            
            <div class="nav-links">
                <a href="#home" class="active">HOME</a>
                <a href="<php echo base_url('doctor')?>">ALL DOCTORS</a>
                <a href="about.html">ABOUT</a>
                <a href="contact.html">CONTACT</a>
            </div>
            
            <div class="user-actions">
                <a href="#" class="admin-btn">Admin Panel</a>
            </div>
        </div>
    </header> -->


    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo "Prescripto - Book Appointments with Trusted Doctors"; ?></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="<?php echo base_url('assets/style.css'); ?>" type="text/css">
</head>
<body>
    <!-- Header -->
    <header>
        <div class="container header-container">
            <a href="<?php echo base_url(); ?>" class="logo">
                <i class="fas fa-heartbeat"></i>
                Prescripto
            </a>
            
            <div class="nav-links">
                <a href="<?php echo base_url(); ?>" class="<?php echo ($this->uri->segment(1) == '' || $this->uri->segment(1) == 'home') ? 'active' : ''; ?>">HOME</a>
                <a href="<?php echo base_url('doctors'); ?>" class="<?php echo ($this->uri->segment(1) == 'doctors') ? 'active' : ''; ?>">ALL DOCTORS</a>
                <a href="<?php echo base_url('about'); ?>" class="<?php echo ($this->uri->segment(1) == 'about') ? 'active' : ''; ?>">ABOUT</a>
                <a href="<?php echo base_url('contact'); ?>" class="<?php echo ($this->uri->segment(1) == 'contact') ? 'active' : ''; ?>">CONTACT</a>
            </div>
            
            <div class="user-actions">
                <a href="<php echo base_url('admin'); ?>" class="admin-btn">Admin Panel</a>
            </div>
        </div>
    </header>

    