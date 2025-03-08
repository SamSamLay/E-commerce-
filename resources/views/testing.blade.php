<x-layout>
    <x-nav-bar/>

    <form action="/testing/order" method="POST">
        @csrf

        <!-- Product 1 (Price $100) -->
        <div class="flex items-center space-x-4">
            <!-- Minus Button for Product 1 -->
            <button type="button" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600" id="minusBtn1">-</button>

            <!-- Quantity Display for Product 1 -->
            <span id="textDisplay1" class="text-2xl">0</span>

            <!-- Plus Button for Product 1 -->
            <button type="button" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600" id="plusBtn1">+</button>
        </div>
        <br><br>

        <!-- Product 2 (Price $200) -->
        <div class="flex items-center space-x-4">
            <!-- Minus Button for Product 2 -->
            <button type="button" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600" id="minusBtn2">-</button>

            <!-- Quantity Display for Product 2 -->
            <span id="textDisplay2" class="text-2xl">0</span>

            <!-- Plus Button for Product 2 -->
            <button type="button" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600" id="plusBtn2">+</button>
        </div>

        <br><br>

        <!-- Total Price Display -->
        <div id="totalPrice" class="text-xl" style="visibility: hidden" name="totalPrice" >$0</div>

        <!-- Order Summary section -->
        <div class="h-[589px] p-8 left-[980px] top-[153px] absolute bg-white rounded-sm border border-[#d1d1d8] flex-col justify-start items-start gap-8 inline-flex">
            <div class="self-stretch text-[#17183b] text-2xl font-bold font-['Proxima Nova'] leading-loose">Order Summary</div>
            <div class="self-stretch h-[168px] flex-col justify-start items-start gap-6 flex">
                <div class="self-stretch justify-between items-start inline-flex">
                    <div class="text-[#17183b] text-base font-normal font-['Proxima Nova'] leading-normal">Price</div>
                    <div id="price1" class="text-[#17183b] text-base font-normal font-['Proxima Nova'] leading-normal">$0.00</div>
                </div>
                <div class="self-stretch justify-between items-start inline-flex">
                    <div class="text-[#17183b] text-base font-normal font-['Proxima Nova'] leading-normal">Price 2</div>
                    <div id="price2" class="text-[#17183b] text-base font-normal font-['Proxima Nova'] leading-normal">$0.00</div>
                </div>
                <div class="self-stretch justify-between items-start inline-flex">
                    <div class="text-[#17183b] text-base font-normal font-['Proxima Nova'] leading-normal">Shipping</div>
                    <div class="text-[#3aa29f] text-base font-normal font-['Proxima Nova'] leading-normal">Free</div>
                </div>
            </div>

            <div class="w-[316px] h-px bg-[#d1d1d8]"></div>

            <div class="self-stretch h-[228px] flex-col justify-start items-start gap-6 flex">
                <div class="self-stretch justify-start items-start gap-[206px] inline-flex">
                    <div class="text-[#17183b] text-base font-normal font-['Proxima Nova'] leading-normal">TOTAL</div>
                      <!-- Hidden input to submit totalPrice -->
                     <input type="hidden" name="totalPrice" id="totalPriceInput" value="0.00">

            <!-- Display Total Price in a div (for user viewing) -->
            <div id="totalDisplay" class="text-right text-[#17183b] text-base font-semibold font-['Proxima Nova'] leading-tight tracking-tight">
            $<span id="totalAmount">0.00</span>
</div>
</div>
                </div>
                <div class="self-stretch justify-between items-center inline-flex">
                    <div class="text-[#17183b] text-base font-normal font-['Proxima Nova'] leading-normal">Estimated Delivery by</div>
                    <div class="text-[#17183b] text-base font-semibold font-['Proxima Nova'] leading-tight tracking-tight">01 Feb, 2023</div>
                </div>

                <!-- Proceed to Checkout -->
                <div class="self-stretch h-[52px] px-10 py-[18px] bg-[#3aa29f] rounded justify-center items-center gap-4 inline-flex">
                    
                    <button type="submit" class="btn btn-primary text-white text-base font-semibold font-['Proxima Nova'] leading-tight tracking-tight">Proceed to Checkout</button>
                </div>
            </div>
        </div>

        <!-- Hidden input to store quantities -->
        <input type="hidden" name="quantity1" id="quantity1Input" value="0">
        <input type="hidden" name="quantity2" id="quantity2Input" value="0">
    </form>

    <script>
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
</script>


</x-layout>
