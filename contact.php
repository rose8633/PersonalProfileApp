<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - IT Company</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<style>

    /* General Styling */
body {
    font-family: 'Arial', sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f4f4f4;
    color: #333;
}

.container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 20px;
}

h1, h2, h3 {
    color: #77ff00;
}

p {
    font-size: 18px;
    line-height: 1.6;
}

/* Contact Section */
.contact-section {
    background-color: #fff;
    padding: 50px 20px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    text-align: center;
}

.map-container {
    margin-bottom: 40px;
}

.contact-form-container {
    margin-bottom: 40px;
}

.contact-form-container h2 {
    margin-bottom: 20px;
}

.form-group {
    margin-bottom: 20px;
    text-align: left;
}

.form-group label {
    display: block;
    margin-bottom: 5px;
}

.form-group input,
.form-group textarea {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
}

.form-group textarea {
    resize: vertical;
}

button {
    background-color: #77ff00;
    color: white;
    border: none;
    padding: 10px 15px;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

button:hover {
    background-color: #77FF00;
}
.navbar {
    display: flex;
    justify-content: space-between;
    align-items: center;
    background-color: #77ff00;
    padding: 10px 20px;
}

/* Social Media Section */
.socials-container {
    text-align: center;
}

.socials-container h3 {
    margin-bottom: 15px;
}

.social-links {
    list-style-type: none;
    padding: 0;
}

.social-links li {
    display: inline;
    margin: 0 10px;
}

.social-links a {
    color: #007bff;
    text-decoration: none;
}

.social-links a:hover {
    text-decoration: underline;
}

/* Footer Styling */
footer {
    background: #77FF00;
    color: white;
    padding: 60px 20px;
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

.social-media ul {
    display: flex;
    gap: 15px;
}

.footer-bottom {
    background-color: #77ff00;
    text-align: center;
    padding: 20px;
}
.footer-bottom p{
    color:#333
}

</style>

    <!-- Navbar Section -->
    <header>
        <div class="navbar">
            <div class="logo">
                <img src="https://th.bing.com/th/id/OIP.8FOwS2zMQROqH5nNFVBuowHaDq?w=329&h=172&c=7&r=0&o=5&pid=1.7" alt="[Your Company] Logo">
            </div>
            <nav>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="about.php">About</a></li>
                    <li><a href="services.php">Services</a></li>
                    <li><a href="contact.php">Contact</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <!-- Contact Section -->
    <section class="contact-section">
        <div class="container">
            <h1>Contact Us</h1>
            <p>If you have any questions, feel free to reach out using the form below or find us on the map!</p>

            <!-- Map Section -->
            <div class="map-container">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.1448809536055!2d37.09199857397259!3d-1.0527286354133734!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182f4fd9fcd3e4e9%3A0xaaa3e450b8f7e60!2sGretsa%20University-Main%20Campus!5e0!3m2!1sen!2ske!4v1727609813261!5m2!1sen!2ske" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>"
                    </iframe>
            </div>

            <!-- Contact Form Section -->
            <div class="contact-form-container">
                <h2>Get In Touch</h2>
                <form action="#" method="POST">
                    <div class="form-group">
                        <label for="name">Name:</label>
                        <input type="text" id="name" name="name" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" id="email" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="message">Message:</label>
                        <textarea id="message" name="message" required></textarea>
                    </div>
                    <button type="submit">Send Message</button>
                </form>
            </div>

    <!-- Footer Section -->
    <footer>
        
        <div class="footer-bottom">
            <p>&copy; 2024 BestItsolution. All rights reserved.</p>
        </div>
    </footer>

</body>
</html>
