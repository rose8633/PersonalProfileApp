<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IT Company - Home</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

</head>
<body>
 <style>
    

    /* General Reset */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    color: #333;
}

/* Navbar Section */
.navbar {
    display: flex;
    justify-content: space-between;
    align-items: center;
    background-color: #77ff00;
    padding: 10px 20px;
}

.logo img {
    height: 60px;
}

/* Navigation styling */
nav {
    display: flex;
    flex-grow: 1;
}

nav ul {
    list-style: none;
    display: flex;
    margin-left: auto; /* This pushes the navigation items to the right */
    gap: 20px;
}

nav ul li {
    display: inline; /* or keep it 'flex' if you have special flex children, but inline works for normal nav links */
}

nav ul li a {
    color: black;
    text-decoration: none;
    font-size: 18px;
    padding: 10px;
}

nav ul li a:hover {
    background-color: #77ff00;
    padding: 10px;
    border-radius: 5px;
}

/* Hero Section */
.hero {
    background-color: #7f0;
    color: white;
    padding: 100px 20px;
    text-align: center;
}

.hero h2 {
    font-size: 48px;
    margin-bottom: 20px;
}

.hero p {
    font-size: 20px;
    margin-bottom: 40px;
}

.btn {
    background-color: #fff;
    color: #007bff;
    padding: 10px 20px;
    text-decoration: none;
    border-radius: 5px;
    font-weight: bold;
}

.btn:hover {
    background-color: #f1f1f1;
}

/* Services Section */
.services {
    padding: 50px 20px;
    background-color: #fff;
    text-align: center;
}

.services h2 {
    font-size: 36px;
    margin-bottom: 20px;
}

.service-list {
    display: flex;
    justify-content: space-around;
    flex-wrap: wrap;
    gap: 20px;
}

.service-item {
    width: 30%;
    background-color: #f9f9f9;
    padding: 20px;
    border-radius: 5px;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
}

.service-item h3 {
    font-size: 24px;
    margin-bottom: 10px;
}

.service-item p {
    font-size: 16px;
}

@media (max-width: 768px) {
    .service-item {
        width: 100%;
    }
}

/* Mission Section */
.mission {
    padding: 50px 20px;
    background-color: #77ff00;
    text-align: center;
}

.mission h2 {
    font-size: 36px;
    margin-bottom: 20px;
}

.mission p {
    font-size: 18px;
}

/* Footer Section */
footer {
    background-color: #77ff00;
    color: white;
    padding: 20px;
    text-align: center;
}

.footer-content {
    display: flex;
    justify-content: space-between;
    align-items: center;
    flex-wrap: wrap;
}

.social-links {
    list-style-type: none;
    padding: 0;
    display: flex;
    gap: 10px;
}

.social-links li {
    display: inline;
}

.social-links li a {
    color: white;
    text-decoration: none;
}

.social-links li a:hover {
    text-decoration: underline;
}

@media (max-width: 768px) {
    .footer-content {
        f
    }
}


/*---------footer begins----------*/

/* Footer Section */
footer {
    background: url('images/footer-background.jpg') no-repeat center center/cover;
    color: white;
    padding: 60px 20px;
    position: relative;
}

.footer-content {
    display: flex;
    justify-content: space-between;
    align-items: flex-start;
    gap: 20px;
    flex-wrap: wrap;
    text-align: left;
}

.footer-section {
    flex: 1;
    padding: 20px;
    min-width: 250px;
}

.footer-section h3 {
    font-size: 20px;
    margin-bottom: 15px;
    text-transform: uppercase;
    border-bottom: 2px solid #007bff;
    padding-bottom: 10px;
}

.footer-section ul {
    list-style-type: none;
    padding: 0;
    margin: 0;
}

.footer-section ul li {
    margin-bottom: 10px;
}

.footer-section ul li a {
    color: white;
    text-decoration: none;
    font-size: 16px;
    transition: all 0.3s ease;
}

.footer-section ul li a:hover {
    color: #007bff;
    text-decoration: underline;
}

.footer-section p {
    font-size: 16px;
}

.social-media ul {
    display: flex;
    gap: 15px;
}

.social-media ul li a {
    color: white;
    font-size: 20px;
    text-decoration: none;
    transition: color 0.3s ease;
}

.social-media ul li a:hover {
    color: #007bff;
}

.footer-bottom {
    background-color: #77ff00;
    text-align: center;
    padding: 20px;
    position: absolute;
    bottom: 0;
    width: 100%;
    left: 0;
}

.footer-bottom p {
    margin: 0;
    font-size: 16px;
    color: #333;
}

/* Media Query for Footer on Small Screens */
@media (max-width: 768px) {
    .footer-content {
        flex-direction: column;
        text-align: center;
    }

    .footer-section {
        padding: 10px;
    }
}

 </style>

    <!-- Header Section -->
    <header>
        <h1>Welcome to BestItsolution</h1>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="services.php">Services</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
        </nav>
    </header>

    <!-- Hero Section -->
    <section class="hero">
        <h2>Your Trusted IT Partner</h2>
        <p>We provide innovative and customized IT solutions for businesses of all sizes.</p>
        <a href="services.php" class="btn">Explore Our Services</a>
    </section>

    <!-- Services Section -->
    <section class="services">
        <h2>Our Services</h2>
        <div class="service-list">
            <div class="service-item">
                <h3>Cloud Solutions</h3>
                <p>Implement secure and scalable cloud infrastructure to meet your business needs.</p>
            </div>
            <div class="service-item">
                <h3>Network Security</h3>
                <p>Protect your data and infrastructure with our cutting-edge security solutions.</p>
            </div>
            <div class="service-item">
                <h3>Software Development</h3>
                <p>Custom-built software tailored to your company's unique requirements.</p>
            </div>
        </div>
    </section>

    <!-- About/Mission Section -->
    <section class="mission">
        <h2>Our Mission</h2>
        <p>At BestItsolution, our mission is to empower businesses through innovative technology solutions, ensuring seamless operations and enhanced productivity.</p>
    </section>

    <!-- Footer Section -->
<footer>
    
    </div>
    <div class="footer-bottom">
        <p>&copy; 2024 BestItsolution. All rights reserved.</p>
    </div>
</footer>


</body>
</html>
