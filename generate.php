<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QR Code Scanner</title>
    <style>
        /* Global Styles */
body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    margin: 0;
    padding: 0;
}

header {
    background-color: #4285f4;
    color: white;
    text-align: center;
    padding: 20px;
}

main {
    max-width: 800px;
    margin: 0 auto;
    padding: 20px;
}

/* QR Code Scanner Styles */
#scanner {
    background-color: white;
    border-radius: 10px;
    padding: 20px;
    margin-top: 20px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
}

#scanner h2 {
    font-size: 24px;
    margin-bottom: 15px;
}

#scanner-container {
    text-align: center;
}

#qr-scanner {
    width: 100%;
    max-width: 400px;
    margin: 0 auto;
    border: 1px solid #ccc;
    border-radius: 5px;
}

#start-scan {
    background-color: #4285f4;
    color: white;
    border: none;
    border-radius: 5px;
    padding: 10px 20px;
    font-size: 16px;
    cursor: pointer;
    transition: background-color 0.3s ease, color 0.3s ease;
}

#start-scan:hover {
    background-color: #357ae8;
}

#qr-result {
    font-size: 16px;
    margin-top: 10px;
}

    </style>
</head>
<body>
    <header>
        <h1>QR Code Scanner</h1>
    </header>
    <main>
        <section id="scanner">
            <h2>Scan QR Code</h2>
        
                <div id="qrcode"></div>
                <p id="qr-result">QR code result will appear here
                
    <label for="qr-content">Enter content:</label>
    <input type="text" id="qr-content">
    <!-- Button to generate the QR code -->
    <button id="generate-qr">Generate QR Code</button>
    <!-- Display the generated QR code here -->
   

    <script>
        // Function to generate the QR code
        function generateQRCode() {
            const qrContent = document.getElementById('qr-content').value;
            const qrcode = new QRCode(document.getElementById('qrcode'), {
                text: qrContent,
                width: 128,
                height: 128
            });
        }

        // Attach the generateQRCode function to the button click event
        document.getElementById('generate-qr').addEventListener('click', generateQRCode);
    </script>

    </p></div>
        </section>
    </main>
    <script src="qrscanner.js"></script>
</body>
</html>