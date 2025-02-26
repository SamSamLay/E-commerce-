<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
</head>
<body>
    <div class="w-[1440px] h-[900px] relative bg-white  overflow-hidden">
  <div class="left-[80px] top-[153px] absolute justify-start items-center gap-10 inline-flex">
    <div class="text-[#a2a3b1] text-2xl font-bold font-['Proxima Nova'] leading-loose">Address</div>
    <div data-svg-wrapper class="relative">
    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M9 18L15 12L9 6" stroke="#A2A3B1" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
    </svg>
    </div>
    <div class="text-[#17183b] text-2xl font-bold font-['Proxima Nova'] leading-loose">Shipping</div>
    <div data-svg-wrapper class="relative">
    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M9 18L15 12L9 6" stroke="#A2A3B1" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
    </svg>
    </div>
    <div class="text-[#a2a3b1] text-2xl font-bold font-['Proxima Nova'] leading-loose">Payment</div>
  </div>
  <x-order-summary />
  <div class="left-[80px] top-[249px] absolute flex-col justify-start items-start gap-6 inline-flex">
    <div class="text-[#17183b] text-xl font-semibold font-['Proxima Nova'] leading-normal">Shipment Method</div>
    <div class="rounded-sm border border-[#d1d1d8] flex-col justify-start items-start flex">
      <div class="w-[820px] px-6 py-4 rounded-sm border-b border-[#d1d1d8] justify-between items-center inline-flex">
        <div class="justify-start items-center gap-3 flex">
          <div class="w-6 h-6 relative">
            <div class="w-5 h-5 left-[2px] top-[2px] absolute bg-white rounded-[10px] border-2 border-[#3aa29f]"></div>
            <div class="w-2.5 h-2.5 left-[7px] top-[7px] absolute bg-[#3aa29f] rounded-[10px] border border-[#3aa29f]"></div>
          </div>
          <div class="text-[#17183b] text-base font-semibold font-['Proxima Nova'] leading-tight tracking-tight">Free</div>
          <div class="text-[#17183b] text-base font-normal font-['Proxima Nova'] leading-normal">Regular Shipment</div>
        </div>
        <div class="text-[#17183b] text-base font-semibold font-['Proxima Nova'] leading-tight tracking-tight">01 Feb, 2023</div>
      </div>
      <div class="w-[820px] px-6 py-4 rounded-sm border-b border-[#d1d1d8] justify-between items-center inline-flex">
        <div class="justify-start items-center gap-3 flex">
          <div class="w-6 h-6 relative">
            <div class="w-5 h-5 left-[2px] top-[2px] absolute rounded-[10px] border-2 border-[#a2a3b1]"></div>
          </div>
          <div class="text-[#17183b] text-base font-semibold font-['Proxima Nova'] leading-tight tracking-tight">$8.50</div>
          <div class="text-[#17183b] text-base font-normal font-['Proxima Nova'] leading-normal">Priority Shipping</div>
        </div>
        <div class="text-[#17183b] text-base font-semibold font-['Proxima Nova'] leading-tight tracking-tight">28 Jan, 2023</div>
      </div>
      <div class="w-[820px] px-6 py-4 rounded-sm justify-between items-center inline-flex">
        <div class="justify-start items-center gap-3 flex">
          <div class="w-6 h-6 relative">
            <div class="w-5 h-5 left-[2px] top-[2px] absolute rounded-[10px] border-2 border-[#a2a3b1]"></div>
          </div>
          <div class="text-[#17183b] text-base font-semibold font-['Proxima Nova'] leading-tight tracking-tight">Schedule </div>
          <div class="text-[#17183b] text-base font-normal font-['Proxima Nova'] leading-normal">Choose a date that works for you.</div>
        </div>
        <div class="justify-start items-center gap-1 flex">
          <div class="text-[#a2a3b1] text-base font-semibold font-['Proxima Nova'] leading-tight tracking-tight">Select Date</div>
          <div data-svg-wrapper class="relative">
          <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M4 6L8 10L12 6" stroke="#A2A3B1" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
          </svg>
          </div>
        </div>
      </div>
    </div>
  </div>
  <x-navbar />
</div>
</body>
</html>