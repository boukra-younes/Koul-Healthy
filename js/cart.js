function updateTotal() {
    let total = 0;

    // Iterate through each row in the table body
    const rows = document.querySelectorAll("#products-table tbody tr");
    rows.forEach(row => {
        // Get quantity and price elements
        const quantityInput = row.querySelector('input[type="number"]');
        const priceCell = row.querySelector('td:nth-child(3)'); // Assuming price is in the third column

        // Parse quantity and price
        const quantity = parseInt(quantityInput.value);
        const price = parseFloat(priceCell.textContent.trim()); // Assuming price is displayed as text

        // Calculate subtotal for this row
        const subtotal = quantity * price;

        // Accumulate subtotal to total
        total += subtotal;
    });

    // Update the total price display
    const totalElement = document.getElementById('total');
    totalElement.textContent = total.toFixed(2); // Format total to two decimal places
}

// Call updateTotal() once on page load to initialize total price display
updateTotal();
