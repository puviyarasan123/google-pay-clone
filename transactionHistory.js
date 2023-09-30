// JavaScript for displaying transaction history
document.addEventListener('DOMContentLoaded', function () {
    // Simulated transaction data (replace with actual data from your backend)
    const transactionData = [
        { date: '2023-09-01', description: 'Payment from John', amount: '$50.00' },
        { date: '2023-09-02', description: 'Payment from Alice', amount: '$30.00' },
        // Add more transaction records here
    ];

    // Get the table body element
    const transactionHistory = document.getElementById('transactionHistory');

    // Loop through the transaction data and populate the table rows
    transactionData.forEach((transaction) => {
        const row = document.createElement('tr');
        row.innerHTML = `
            <td>${transaction.date}</td>
            <td>${transaction.description}</td>
            <td>${transaction.amount}</td>
        `;
        transactionHistory.appendChild(row);
    });
});
