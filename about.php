<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - IT Company</title>
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
.navbar {
    display: flex;
    justify-content: space-between;
    align-items: center;
    background-color: #77ff00;
    padding: 10px 20px;
}
nav ul li a:hover {
    background-color: #77ff00;
    padding: 10px;
    border-radius: 5px;
}

h1, h2, h3 {
    color: #77ff00;
}

p {
    font-size: 18px;
    line-height: 1.6;
}

/* About Section */
.about-section {
    background-color: #fff;
    padding: 50px 20px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.about-section h1 {
    text-align: center;
    margin-bottom: 40px;
}

.about-details {
    display: flex;
    justify-content: space-between;
    margin-bottom: 50px;
}

.about-item {
    flex: 1;
    margin: 0 20px;
}

.about-item h2 {
    margin-bottom: 20px;
    font-size: 24px;
}

.team-section {
    background-color: #f8f9fa;
    padding: 50px 20px;
    text-align: center;
}

.team-container {
    display: flex;
    justify-content: space-around;
    flex-wrap: wrap;
    gap: 20px;
}

.team-member {
    text-align: center;
    padding: 20px;
    background-color: #fff;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    flex-basis: 30%;
}

.team-member img {
    width: 100px;
    height: 100px;
    border-radius: 50%;
    margin-bottom: 20px;
}

.team-member h3 {
    margin-bottom: 10px;
    font-size: 20px;
    color: #333;
}

.team-member p {
    font-size: 16px;
    color: #777;
}

/* Footer Styling */
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

    <!-- Main About Section -->
    <section class="about-section">
        <div class="container">
            <h1>About Our Company</h1>
            <p>
                At BestItsolution, we are committed to delivering innovative technology solutions that drive digital transformation and growth for businesses around the world. We specialize in providing cutting-edge software development, IT consulting, and cloud computing services tailored to meet the unique needs of our clients.
            </p>

            <div class="about-details">
                <div class="about-item">
                    <h2>Our Mission</h2>
                    <p>To empower businesses through innovative technology solutions that enhance efficiency, productivity, and success in the digital era.</p>
                </div>

                <div class="about-item">
                    <h2>Our Vision</h2>
                    <p>To be the global leader in IT solutions, driving transformation and creating value for businesses worldwide.</p>
                </div>

                <div class="about-item">
                    <h2>Meet Our Team</h2>
                    <p>
                        Our dedicated team of professionals includes software engineers, project managers, IT consultants, and cloud architects, all of whom are passionate about technology and committed to delivering excellence in every project.
                    </p>
                </div>
            </div>

            <div class="team-section">
                <h2>Our Leadership</h2>
                <div class="team-container">
                    <div class="team-member">
                        <!-- <img src="images/team1.jpg" alt="Team Member 1"> -->
                        <h3>Rose wanjiku</h3>
                        <p>Chief Executive Officer</p>
                    </div>
                    <div class="team-member">
                        <!-- <img src="images/team2.jpg" alt="Team Member 2"> -->
                        <h3>Charles Muhoro</h3>
                        <p>Chief Technology Officer</p>
                    </div>
                    <div class="team-member">
                        <!-- <img src="images/team3.jpg" alt="Team Member 3"> -->
                        <h3>Miguel Migwi</h3>
                        <p>Head of Engineering</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer Section -->
    <footer>
        
        <div class="footer-bottom">
            <p>&copy; 2024 BestItsolution . All rights reserved.</p>
        </div>
    </footer>

</body>
</html>
