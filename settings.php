<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Settings - Contact Support</title>
   <style>
    /* Your existing CSS styles */

.contact-support {
    background-color: #fff;
    border: 1px solid #ddd;
    padding: 20px;
    margin-top: 20px;
    border-radius: 5px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
}

.contact-support h2 {
    font-size: 24px;
    margin-bottom: 10px;
}

.contact-support p {
    font-size: 16px;
    margin-bottom: 20px;
}

/* Style the contact form (if you choose to include one) */
.contact-form {
    /* Your contact form styles go here */
}

/* Style the contact information (if you choose to include it) */
.contact-info {
    /* Your contact information styles go here */
}
/* Reset some default styles */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

/* Set a global font family and background color */
body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    margin: 0;
    padding: 0;
}

/* Style the header section */
header {
    background-color: #4285f4;
    color: white;
    text-align: center;
    padding: 20px;
}

/* Style the main content container */
main {
    max-width: 800px;
    margin: 0 auto;
    padding: 20px;
}

/* Style the "Contact Support" section */
.contact-form, .contact-info {
    background-color: #fff;
    border: 1px solid #ddd;
    padding: 20px;
    margin-top: 20px;
    border-radius: 5px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
}

.contact-form h2, .contact-info h2 {
    font-size: 24px;
    margin-bottom: 10px;
}

.contact-form p, .contact-info p {
    font-size: 16px;
    margin-bottom: 20px;
}

/* Style the contact form fields */
.contact-form label {
    display: block;
    margin-bottom: 5px;
    font-weight: bold;
}

.contact-form input[type="text"],
.contact-form input[type="email"],
.contact-form textarea {
    width: 100%;
    padding: 10px;
    margin-bottom: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
}

.contact-form button {
    background-color: #4285f4;
    color: white;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

.contact-form button:hover {
    background-color: #0056b3;
}

/* Style the contact information */
.contact-info a {
    text-decoration: none;
    color: #4285f4;
}

.contact-info a:hover {
    text-decoration: underline;
}
#about {
    background-color: white;
    border-radius: 10px;
    padding: 20px;
    margin-top: 20px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
}

#about h2 {
    font-size: 24px;
    margin-bottom: 15px;
}

#about p {
    font-size: 16px;
    margin-bottom: 10px;
}

#about a {
    text-decoration: none;
    color: #4285f4;
    transition: color 0.3s ease;
}

#about a:hover {
    color: #357ae8;
}



   </style>
</head>
<body>
    <header>
        <!-- Your header content -->
    </header>
    <main>
        <h1>Settings</h1>
        <!-- Other settings content here -->
        
        <section class="contact-support">
            <h2>Contact Support</h2>
            <p>If you have any questions or need assistance, please feel free to contact our support team.</p>
            
            <!-- Contact form or contact information goes here -->
            
        </section>
    
        
        <section class="contact-form">
            <h2>Send us a message</h2>
            <form action="submit_support.php" method="post">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required><br>
                
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required><br>
                
                <label for="subject">Subject:</label>
                <input type="text" id="subject" name="subject" required><br>
                
                <label for="message">Message:</label><br>
                <textarea id="message" name="message" rows="4" required></textarea><br>
                
                <button type="submit">Submit</button>
            </form>
        </section>
        
        <section class="contact-info">
            <h2>Contact Information</h2>
            <p>If you prefer to contact us directly, you can use the following:</p>
            <p>Email: <a href="mailto:support@example.com">support@example.com</a></p>
            <p>Phone: <a href="tel:+123456789">+1 (234) 567-89</a></p>
            <p>Business Hours: Monday to Friday, 9:00 AM - 5:00 PM</p>
        </section>
    </main>
    <footer>
        <!-- Your footer content -->
    </footer>


    </main>
    <footer>
        <!-- Your footer content -->
    </footer>




    <header>
        <h1>About Google Pay Clone</h1>
    </header>
    <nav>
        <!-- Navigation links here -->
    </nav>
    <main>
        <section id="about">
            <h2>About Google Pay Clone</h2>
            <p>Welcome to the Google Pay Clone application. This application is designed to provide a similar experience to Google Pay for making secure and convenient payments.</p>
            <p>Version: 1.0.0</p>
            <p>Copyright © 2023 Google Pay Clone Inc. All rights reserved.</p>
            <p>For more information, please visit our <a href="https://www.example.com">website</a>.</p>
        </section>
    </main>
</body>
</html>
</body>
</html>
