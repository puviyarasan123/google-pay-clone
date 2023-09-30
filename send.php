<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    /* Reset some default styles */
html, body, h1, form {
    margin: 0;
    padding: 0;
}

body {
    font-family: Arial, sans-serif;
    background-color: #f0f0f0;
}

header {
    background-color: #4285f4;
    color: #fff;
    text-align: center;
    padding: 1rem 0;
}

main {
    max-width: 400px;
    margin: 2rem auto;
    background-color: #fff;
    padding: 1rem;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

form {
    display: flex;
    flex-direction: column;
}

label {
    margin-bottom: 0.5rem;
}

input, textarea {
    padding: 0.5rem;
    margin-bottom: 1rem;
    border: 1px solid #ccc;
    border-radius: 3px;
}

button {
    background-color: #4285f4;
    color: #fff;
    border: none;
    padding: 0.5rem 1rem;
    border-radius: 3px;
    cursor: pointer;
}

button:hover {
    background-color: #3579db;
}

  </style>
    <title>Send Money - Google Pay Clone</title>
</head>
<body>
    <header>
        <h1>Send Money</h1>
    </header>
    <main>
        <form id="sendMoneyForm" method="POST">
            <label for="recipient">Recipient:</label>
            <input type="text" id="recipient" name="recipient" required>

            <label for="amount">Amount:</label>
            <input type="number" id="amount" name="amount" required>

            <label for="note">Note:</label>
            <textarea id="note" name="note" rows="4"></textarea>
        
            <label for="from_account">From Account Number:</label>
            <input type="text" id="from_account" name="from_account" required><br><br>
            
            <label for="from_initial_amount">From Initial Amount:</label>
            <input type="text" id="from_initial_amount" name="from_initial_amount" required><br><br>

            <label for="to_account">To Account Number:</label>
            <input type="text" id="to_account" name="to_account" required><br><br>
            
         <label for="to_initial_amount">To Initial Amount:</label>
            <input type="text" id="to_initial_amount" name="to_initial_amount" required><br><br>
            
            
        

            <button type="submit" id="sendmoney" name="s">Send Money</button>
        </form>
    </main>
    <script></script> <!-- Include JavaScript file -->

   

<?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $from_account = $_POST['from_account'];
            $from_initial_amount = floatval($_POST['from_initial_amount']);
            $to_account = $_POST['to_account'];
            $to_initial_amount = floatval($_POST['to_initial_amount']);
            $amount = floatval($_POST['amount']);

            // Validate account numbers and perform transfer logic here
            // You should have a database to store account balances and perform transactions
            
            // For demonstration purposes, we'll calculate the new balances
            $from_new_balance = $from_initial_amount - $amount;
            $to_new_balance = $to_initial_amount + $amount;
        }
   
        if(isset($_POST['s']))
        {
            // Retrieve form data
            $a = $_POST['recipient'];
            $b = $_POST['amount'];
            $c = $_POST['note'];
            $d = $_POST['from_account'];
            $e = $_POST['from_initial_amount'];
            $f = $_POST['to_account'];
            $g = $_POST['to_initial_amount'];
            $h = $from_new_balance;
            $i=$to_new_balance;
        
            // Connect to the MySQL database (change the credentials as needed)
            $mysqli = new mysqli("localhost", "root", "", "google_pay_clone");
        
            // Check the connection
            if ($mysqli->connect_error) {
                die("Connection failed: " . $mysqli->connect_error);
            }
        
            // Prepare and execute an SQL INSERT statement
            $stmt = $mysqli->prepare("INSERT INTO trans (RNO,Amount ,from_account_no,from_initial_amount,to_account_number,to_initial_amount,from_new_balance,to_new_balance,Descriptions) VALUES (?, ?, ?,?,?,?,?,?,?)");
            $stmt->bind_param("sssssssss", $a, $b,$d,$e,$f,$g,$h,$i,$c);
        
            if ($stmt->execute()) {
              
        
                $stmt->close();
                $mysqli->close();
        
                header("Location: history.php");
                exit();
            } else {
                echo "Error: " . $stmt->error;
            }
        }
        ?>
        
        


</body>
</html>
