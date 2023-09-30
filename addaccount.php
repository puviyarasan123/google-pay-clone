<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Add Account - Google Pay Clone</title>
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

input {
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
/* Add these styles to your existing style.css file or create a new one */

/* Style the select label */
label[for="bank"] {
    margin-bottom: 0.5rem;
}

/* Style the select element */
select#bank {
    padding: 0.5rem;
    margin-bottom: 1rem;
    border: 1px solid #ccc;
    border-radius: 3px;
    width: 100%; /* Make the select element full-width */
    appearance: none; /* Remove default styles (browsers may vary) */
    background-image: url('arrow-down.png'); /* Add a custom arrow icon */
    background-repeat: no-repeat;
    background-position: right center;
    cursor: pointer;
}

/* Style the select options */
select#bank option {
    padding: 0.5rem;
}

/* Style the select when it's focused */
select#bank:focus {
    border-color: #4285f4;
    outline: none;
}


</style>
</head>
<body>
    <header>
        <h1>Add Account</h1>
    </header>
    <main>
        <form id="addAccountForm" method="POST" >
            <label for="accountName">Account Name:</label>
            <input type="text" id="accountName" name="acn" required>

            <label for="accountNumber">Account Number:</label>
            <input type="text" id="accountNumber" name="acno" required>
              
            
            <label for="bank">Select Bank:</label>
            <select id="bank" name="bank">
                <option value="IOB">IOB</option>
                <option value="SBI">SBI</option>
                <option value="Axis Bank">Axis Bank</option>
                <option value="HDFC Bank">HDFC Bank</option>
                <option value="Canara Bank">Canara Bank</option>
                <option value="Indian Bank">Indian Bank</option>
                <!-- Add more options as needed -->
            </select>

            <label for="expirationDate">Expiration Date:</label>
            <input type="text" id="expirationDate" name="expirationDate" required>

            <button type="submit" name="s">Submit</button>
        </form>
    </main>
</body>
</html>
<?php
// Check if the form is submitted
if(isset($_POST['s']))
{
    // Retrieve form data
    $a = $_POST['acn'];
    $b = $_POST['acno'];
    $c = $_POST['bank'];

    // Connect to the MySQL database (change the credentials as needed)
    $mysqli = new mysqli("localhost", "root", "", "google_pay_clone");

    // Check the connection
    if ($mysqli->connect_error) {
        die("Connection failed: " . $mysqli->connect_error);
    }

    // Prepare and execute an SQL INSERT statement
    $stmt = $mysqli->prepare("INSERT INTO accounts (Accountholdername, Accountname , Bankname) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $a, $b, $c);

    if ($stmt->execute()) {
      

        $stmt->close();
        $mysqli->close();

        header("Location: seeacc.php");
        exit();
    } else {
        echo "Error: " . $stmt->error;
    }
}
?>




