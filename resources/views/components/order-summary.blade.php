<div>
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

            <div class="self-stretch h-[200px] flex-col justify-start items-start gap-6 flex">
                <div class="self-stretch justify-start items-start gap-[206px] inline-flex">
                    <div class="text-[#17183b] text-base font-normal font-['Proxima Nova'] leading-normal">TOTAL</div>
                      
            <!-- Display Total Price in a div (for user viewing) -->
            <div id="totalDisplay" class="text-right text-[#17183b] text-base font-semibold font-['Proxima Nova'] leading-tight tracking-tight">
            $<span id="totalAmount">0.00</span>

            
          </div>
</div>
               <!-- Proceed to Checkout -->
               <div class="self-stretch h-[52px] px-10 py-[18px] bg-[#3aa29f] rounded justify-center items-center gap-4 inline-flex">
                    
                    <button type="submit" class="btn btn-primary text-white text-base font-semibold font-['Proxima Nova'] leading-tight tracking-tight">Proceed to Checkout</button>
            </div>
                </div>
                
            </div>
        </div>

        <!-- Hidden input to store quantities -->
        <input type="hidden" name="quantity1" id="quantity1Input" value="0">
        <input type="hidden" name="quantity2" id="quantity2Input" value="0">

        <!-- Hidden input to submit totalPrice -->
        <input type="hidden" name="totalPrice" id="totalPriceInput" value="0.00">
</div>