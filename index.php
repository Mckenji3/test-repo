<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Bike Homepage</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            color: #333;
        }
        header {
            background-color: #007BFF;
            color: white;
            padding: 20px;
            text-align: center;
        }
        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 20px;
            background-color: #333;
        }
        nav a {
            color: white;
            text-decoration: none;
            margin: 0 15px;
            font-weight: bold;
        }
        nav a:hover {
            text-decoration: underline;
        }
        .container {
            max-width: 1200px;
            margin: 20px auto;
            padding: 20px;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .cta-button {
            display: inline-block;
            padding: 10px 20px;
            background-color: #007BFF;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            margin-top: 20px;
        }
        .cta-button:hover {
            background-color: #0056b3;
        }
        .faq-section {
            margin-top: 40px;
        }
        .faq-item {
            margin-bottom: 20px;
        }
        .faq-item h3 {
            margin-bottom: 10px;
        }
        footer {
            text-align: center;
            padding: 20px;
            background-color: #333;
            color: white;
            margin-top: 40px;
        }
    </style>
</head>
<body>
    <header>
        <h1>Welcome to E-Bike</h1>
        <p>Your journey to sustainable transportation starts here.</p>
    </header>
    <nav>
        <div>
            <a href="#home">Home</a>
            <a href="#features">Features</a>
            <a href="#faq">FAQs</a>
            <a href="#contact">Contact</a>
        </div>
        <a href="login.php" class="cta-button">Login</a>
    </nav>
    <div class="container">
        <section id="home">
            <h2>About E-Bike</h2>
            <p>Discover the future of eco-friendly transportation with our state-of-the-art e-bikes. Whether you're commuting to work or exploring the outdoors, our e-bikes are designed for comfort, efficiency, and style.</p>
        </section>
        <section id="features">
            <h2>Features</h2>
            <ul>
                <li>Long-lasting battery life</li>
                <li>Smart navigation system</li>
                <li>Lightweight and durable design</li>
                <li>AI-powered support</li>
            </ul>
        </section>
        <section class="faq-section" id="faq">
            <h2>FAQs</h2>
            <div class="faq-item">
                <h3>How do I access AI chat support?</h3>
                <p>To access our AI chat support and your personal user dashboard, please <a href="login.html">log in</a> to verify your unit ownership.</p>
            </div>
            <div class="faq-item">
                <h3>What is the warranty period for the e-bike?</h3>
                <p>Our e-bikes come with a standard 2-year warranty. You can extend the warranty by purchasing additional coverage.</p>
            </div>
            <div class="faq-item">
                <h3>How do I charge the e-bike battery?</h3>
                <p>Simply connect the provided charger to the battery port and plug it into a standard wall outlet. A full charge takes approximately 4-6 hours.</p>
            </div>
        </section>
        <section id="contact">
            <h2>Contact Us</h2>
            <p>If you have any questions or need assistance, feel free to reach out to our support team at <a href="mailto:support@ebike.com">support@ebike.com</a>.</p>
        </section>
    </div>
    <footer>
        <p>&copy; 2023 E-Bike. All rights reserved.</p>
    </footer>
</body>
</html>