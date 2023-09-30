<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <style>
    /* Reset some default styles */
html, body, h1, table {
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
    max-width: 800px;
    margin: 2rem auto;
    background-color: #fff;
    padding: 1rem;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 1rem;
}

th, td {
    text-align: left;
    padding: 0.5rem;
    border-bottom: 1px solid #ccc;
}

th {
    background-color: #4285f4;
    color: #fff;
}
#send-money-link {
    display: block;
    text-align: center;
    text-decoration: none;
    background-color: #4285f4;
    color: #fff;
    padding: 10px 20px;
    margin-top: 1rem;
    border-radius: 5px;
}

#send-money-link:hover {
    background-color: #0056b3;
}

   </style>
    <title>Transaction History - Google Pay Clone</title>
</head>
<body>
    <header>
        <h1>Transaction History</h1>
    </header>
    <main>
        <table>
            <thead>
                <tr>
                    <th>Receipt Name</th>
                    <th>Amount</th>
                    <th>From Account</th>
                    <th>From Initial Amount</th>
                    <th>TO</th>
                    <th>TO Initial Amount</th></th>
                    <th>From new Amount</th></th>
                    <th>TO new Amount</th></th>
                    <th>Description</th>
                </tr>
            </thead>
            <?php
                // Connect to the MySQL database (change the credentials as needed)
                $mysqli = new mysqli("localhost", "root", "", "google_pay_clone");

                // Check the connection
                if ($mysqli->connect_error) {
                    die("Connection failed: " . $mysqli->connect_error);
                }

                // Prepare and execute an SQL SELECT statement
                $sql = "SELECT RNO,Amount,from_account_no,from_initial_amount,to_account_number,to_initial_amount,	from_new_balance,to_new_balance,Descriptions FROM trans";
                $result = $mysqli->query($sql);

                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $row["RNO"] . "</td>";
                        echo "<td>" . $row["Amount"] . "</td>";
                        echo "<td>" . $row["from_account_no"] . "</td>";
                        echo "<td>" . $row["from_initial_amount"] . "</td>";
                        echo "<td>" . $row["to_account_number"] . "</td>";
                        echo "<td>" . $row["to_initial_amount"] . "</td>";
                        echo "<td>" . $row["from_new_balance"] . "</td>";
                        echo "<td>" . $row["to_new_balance"] . "</td>";
                        echo "<td>" . $row["Descriptions"] . "</td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='3'>No accounts found</td></tr>";
                }

                $mysqli->close();
                ?>
           </table>
    </main>
    <a href="index.php" id="send-money-link">Home</a>
</body>
</html>
