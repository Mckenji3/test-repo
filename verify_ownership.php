<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verify user</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            color: #333;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .verify-container {
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
            text-align: center;
        }
        .verify-container h2 {
            margin-bottom: 20px;
        }
        .verify-container input {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .verify-container button {
            width: 100%;
            padding: 10px;
            background-color: #007BFF;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .verify-container button:hover {
            background-color: #0056b3;
        }
        .verify-container p {
            margin-top: 20px;
        }
        .verify-container a {
            color: #007BFF;
            text-decoration: none;
        }
        .verify-container a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="verify-container">
        <h2>Verify Ownership</h2>
        <p>Please enter your details to verify your e-bike ownership.</p>
        <input type="text" id="fullName" placeholder="Full Name" required>
        <input type="email" id="email" placeholder="Email Address" required>
        <input type="text" id="serialNumber" placeholder="E-Bike Serial Number" required>
        <button onclick="verifyOwnership()">Verify Ownership</button>
        <p id="message"></p>
        <p>Already verified? <a href="login.html">Login here</a></p>
    </div>

    <script>
        function verifyOwnership() {
            const fullName = document.getElementById('fullName').value;
            const email = document.getElementById('email').value;
            const serialNumber = document.getElementById('serialNumber').value;

            // Simulate a check for ownership (replace with actual backend API call)
            const isVerified = checkOwnership(fullName, email, serialNumber);

            if (isVerified) {
                document.getElementById('message').innerHTML = `
                    Verification successful! An email with login credentials has been sent to ${email}.
                `;
                // Simulate sending email with credentials (replace with actual backend logic)
                sendVerificationEmail(email);
            } else {
                document.getElementById('message').innerHTML = `
                    Verification failed. Please check your details and try again.
                `;
            }
        }

        function checkOwnership(fullName, email, serialNumber) {
            // Simulate a database check (replace with actual backend logic)
            const verifiedUsers = [
                { name: "John Doe", email: "john@example.com", serial: "EB123456" },
                { name: "Jane Smith", email: "jane@example.com", serial: "EB654321" }
            ];

            return verifiedUsers.some(user => 
                user.name === fullName && 
                user.email === email && 
                user.serial === serialNumber
            );
        }

        function sendVerificationEmail(email) {
            // Simulate sending an email (replace with actual backend logic)
            console.log(`Sending verification email to ${email}...`);
            // In a real application, use a backend service to send the email.
        }
    </script>
</body>
</html>