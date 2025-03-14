
    // Prices for Product 1 and Product 2
    const product1Price = 100; // Product 1 price
    const product2Price = 200; // Product 2 price

    // Initial quantities
    let quantity1 = 0;
    let quantity2 = 0;

    // Get references to buttons, text displays, and price displays
    const minusBtn1 = document.getElementById("minusBtn1");
    const plusBtn1 = document.getElementById("plusBtn1");
    const textDisplay1 = document.getElementById("textDisplay1");
    const price1Display = document.getElementById("price1");

    const minusBtn2 = document.getElementById("minusBtn2");
    const plusBtn2 = document.getElementById("plusBtn2");
    const textDisplay2 = document.getElementById("textDisplay2");
    const price2Display = document.getElementById("price2");

    const totalPriceDisplay = document.getElementById("totalPrice");
    const totalDisplay = document.getElementById("totalDisplay");

    const quantity1Input = document.getElementById("quantity1Input");
    const quantity2Input = document.getElementById("quantity2Input");
    const totalPriceInput = document.getElementById("totalPriceInput");

    // Function to update prices and total
    function updatePricesAndTotal() {
        // Calculate prices for both products
        const price1 = product1Price * quantity1;
        const price2 = product2Price * quantity2;

        // Update the price displays for both products
        price1Display.textContent = `$${price1.toFixed(2)}`;
        price2Display.textContent = `$${price2.toFixed(2)}`;

        // Update the total price
        const totalPrice = price1 + price2;
        totalPriceDisplay.textContent = `$${totalPrice.toFixed(2)}`;
        totalDisplay.textContent = `$${totalPrice.toFixed(2)}`;

        // Update the hidden input values for form submission
        quantity1Input.value = quantity1;
        quantity2Input.value = quantity2;
        totalPriceInput.value = totalPrice.toFixed(2);
    }

    // Event listeners for the first product (Product 1)
    minusBtn1.addEventListener("click", function() {
        if (quantity1 > 0) {
            quantity1--;
            textDisplay1.textContent = quantity1;
            updatePricesAndTotal();
        }
    });

    plusBtn1.addEventListener("click", function() {
        quantity1++;
        textDisplay1.textContent = quantity1;
        updatePricesAndTotal();
    });

    // Event listeners for the second product (Product 2)
    minusBtn2.addEventListener("click", function() {
        if (quantity2 > 0) {
            quantity2--;
            textDisplay2.textContent = quantity2;
            updatePricesAndTotal();
        }
    });

    plusBtn2.addEventListener("click", function() {
        quantity2++;
        textDisplay2.textContent = quantity2;
        updatePricesAndTotal();
    });

    // Initial update of prices and total
    updatePricesAndTotal();
