<x-layout>
  <x-nav-bar />
<div class="w-[1440px] h-[900px] relative bg-white overflow-hidden">
  <div class="p-5 left-[80px] top-[677px] absolute bg-[#3aa29f]/10 rounded border border-[#3aa29f] justify-start items-start gap-3 inline-flex">
    <div data-svg-wrapper class="relative">
    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M19 5L5 19" stroke="#3AA39F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
    <path d="M6.5 9C7.88071 9 9 7.88071 9 6.5C9 5.11929 7.88071 4 6.5 4C5.11929 4 4 5.11929 4 6.5C4 7.88071 5.11929 9 6.5 9Z" stroke="#3AA39F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
    <path d="M17.5 20C18.8807 20 20 18.8807 20 17.5C20 16.1193 18.8807 15 17.5 15C16.1193 15 15 16.1193 15 17.5C15 18.8807 16.1193 20 17.5 20Z" stroke="#3AA39F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
    </svg>
    </div>
    <div class="text-[#17183b] text-base font-normal font-['Proxima Nova'] leading-normal">10% Instant Discount with Federal Bank Debit Cards on a min spend of $150. TCA</div>
  </div>
  <x-order-summary />


  
  <!--Count data -->
  <form method="POST" action="">
  @csrf 
        <div class="w-[820px] h-40 left-[80px] top-[257px] absolute inline-flex shadow-xs" role="group">
          <!--button +--->
          <div class="h-[52px] p-4 left-[196px] top-[98px] absolute rounded justify-start items-center inline-flex">
            
            <button id="minusBtn1" type="button" class="px-4 py-2 text-lg font-medium text-gray-900 bg-white border border-gray-200 rounded-s-lg hover:bg-gray-100 hover:text-blue-700 ">
            -
            </button>
           

            <!--1-->
            <span  id="textDisplay1" class="px-4 py-2 text-lg font-medium text-gray-900 bg-white border-t border-b border-gray-200">
                0
            </span>
            
            <button id="plusBtn1" type="button" class="px-4 py-2 text-lg font-medium text-gray-900 bg-white border border-gray-200 rounded-e-lg hover:bg-gray-100 hover:text-blue-700">
                +
            </button>
            
          </div>
          
          
          <div class="left-[745px] top-[10px] absolute text-right text-[#17183b] text-xl font-semibold font-['Proxima Nova'] leading-normal tracking-tight">$149.99</div>
          <div class="left-[248px] top-[50px] absolute text-[#17183b] text-base font-semibold font-['Proxima Nova'] leading-tight tracking-tight">Gunnared biege</div>
          <div class="left-[196px] top-[50px] absolute text-[#a2a3b1] text-base font-semibold font-['Proxima Nova'] leading-tight tracking-tight">Color</div>
          <div class="left-[196px] top-[10px] absolute text-[#17183b] text-xl font-semibold font-['Proxima Nova'] leading-normal">Osmond Armchair</div>
          <img class="w-40 h-40 left-0 top-0 absolute mix-blend-darken" src="./images/chair1.png" />
        </div>

        <div class="w-[820px] h-px left-[80px] top-[449px] absolute bg-[#d1d1d8]"></div>
  
        <div class="w-[820px] h-40 left-[80px] top-[482px] absolute">
    
  
          <!--button +--->
          <div class="h-[52px] p-4 left-[196px] top-[98px] absolute rounded justify-start items-center inline-flex">
            
            <button id="minusBtn1" type="button" class="px-4 py-2 text-lg font-medium text-gray-900 bg-white border border-gray-200 rounded-s-lg hover:bg-gray-100 hover:text-blue-700 ">
            -
            </button>
            <span  id="textDisplay1" class="px-4 py-2 text-lg font-medium text-gray-900 bg-white border-t border-b border-gray-200">
                0
            </span>
            
            <button id="plusBtn1" type="button" class="px-4 py-2 text-lg font-medium text-gray-900 bg-white border border-gray-200 rounded-e-lg hover:bg-gray-100 hover:text-blue-700">
                +
            </button>
            
        </div>
   
    <div class="left-[745px] top-[10px] absolute text-right text-[#17183b] text-xl font-semibold font-['Proxima Nova'] leading-normal tracking-tight">$169.99</div>
    <div class="left-[248px] top-[50px] absolute text-[#17183b] text-base font-semibold font-['Proxima Nova'] leading-tight tracking-tight">Lysed bright green</div>
    <div class="left-[196px] top-[50px] absolute text-[#a2a3b1] text-base font-semibold font-['Proxima Nova'] leading-tight tracking-tight">Color</div>
    <div class="left-[196px] top-[10px] absolute text-[#17183b] text-xl font-semibold font-['Proxima Nova'] leading-normal">Meryl Lounge Chair</div>
    <img class="w-40 h-40 left-0 top-0 absolute mix-blend-darken" src="./images/chair2.png" />
  </div>
  <div class="left-[80px] top-[153px] absolute text-[#17183b] text-[32px] font-bold font-['Proxima Nova'] leading-[44px]">Cart</div>
  <div class="left-[166px] top-[167px] absolute text-[#a2a3b1] text-xl font-semibold font-['Proxima Nova'] leading-normal">2 ITEMS</div>
 
</div>
  </form>

  

  


</x-layout>