<?php
// Initialize an empty array to store account details
$accounts = [];

// Check if the form was submitted
if (isset($_POST['s'])) {
    // Collect form data
    $accountName = $_POST["accountName"];
    $accountNumber = $_POST["accountNumber"];
    $expirationDate = $_POST["expirationDate"];
   

    // Create an array representing the account details
    $accountDetails = [
        "accountName" => $accountName,
        "accountNumber" => $accountNumber,
        "expirationDate" => $expirationDate,
         
    ];
echo "Working";
    // Add the account details to the accounts array
    $accounts[] = $accountDetails;

    // Save the accounts array to a PHP file for later use
    //file_put_contents("accounts.php", "<?php\n\$accounts = " . var_export($accounts, true) . ";\n
   session_start();
    // Redirect back to the home page or any other desired location
    header("Location: index.php");
    
    exit;
}
?>
