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

   </style>
    <title>View Accounts - Google Pay Clone</title>
</head>
<body>
    <header>
        <h1>View Accounts</h1>
    </header>
    <main>
        <table>
            <thead>
                <tr>
                    <th>Account Holder Name</th>
                    <th>Account Number</th>
                    <th>Bank Name</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Connect to the MySQL database (change the credentials as needed)
                $mysqli = new mysqli("localhost", "root", "", "google_pay_clone");

                // Check the connection
                if ($mysqli->connect_error) {
                    die("Connection failed: " . $mysqli->connect_error);
                }

                // Prepare and execute an SQL SELECT statement
                $sql = "SELECT Accountholdername, Accountname, Bankname FROM accounts";
                $result = $mysqli->query($sql);

                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $row["Accountholdername"] . "</td>";
                        echo "<td>" . $row["Accountname"] . "</td>";
                        echo "<td>" . $row["Bankname"] . "</td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='3'>No accounts found</td></tr>";
                }

                $mysqli->close();
                ?>
            </tbody>
        </table>
    </main>
</body>
</html>
