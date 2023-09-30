document.getElementById('sendMoneyForm').addEventListener('submit', function (e) {
    e.preventDefault();

    const formData = new FormData(this);

    // Perform an AJAX request to the server to process the transaction
    fetch('processTransaction.php', {
        method: 'POST',
        body: formData
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            // Transaction was successful, redirect to transaction history
            window.location.href = 'history.php';
        } else {
            // Handle errors, display a message to the user, etc.
            console.error('Transaction failed:', data.message);
        }
    })
    .catch(error => {
        console.error('Error:', error);
    });
});
