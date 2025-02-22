<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    @vite(['resources/css/app.css'])
</head>
<body class="bg-gray-100">
<div class="bg-[url(./images/EDKA_website_cover.png)]">

</div>
<div class="flex justify-between items-center px-8 py-6 bg-white shadow-md w-full">
  <div class="navbar-start">
    <div class="dropdown">
      <div tabindex="0" role="button" class="btn btn-ghost btn-circle">
      <a class="btn btn-ghost text-xl">Cozy<span class="text-xl">&reg;</span></a>
      
      </div>
      
    </div>
  </div>
  <div class="navbar-center md:flex absolute left-1/2 transform -translate-x-1/2 space-x-6 text-gray-600">
 
      <a href="#" class="text-sm p-4 uppercase text-black">Shop</a>
      <a href="#" class="text-sm p-4 uppercase text-black">Collective</a>
      <a href="#" class="text-sm p-4 uppercase text-black">Designers</a>
      <a href="#" class="text-sm p-4 uppercase text-black">About Us</a>
      <a href="#" class="text-sm p-4 uppercase text-black">Contact</a>
    
  </div>
  
  <div class="navbar-end flex gap-8">
    <button class="btn btn-ghost btn-circle">
    <svg
          xmlns="http://www.w3.org/2000/svg"
          class="h-5 w-5"
          fill="none"
          viewBox="0 0 24 24"
          stroke="currentColor">
          <path
            stroke-linecap="round"
            stroke-linejoin="round"
            stroke-width="2"
            d="M4 6h16M4 12h16m-7 6h7" />
        </svg>
      
    </button>
    <button class="btn btn-ghost btn-circle">
      <div class="indicator">
      <svg
        xmlns="http://www.w3.org/2000/svg"
        class="h-5 w-5"
        fill="none"
        viewBox="0 0 24 24"
        stroke="currentColor">
        <path
          stroke-linecap="round"
          stroke-linejoin="round"
          stroke-width="2"
          d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
      </svg>
        <span class="badge badge-xs badge-primary indicator-item"></span>
      </div>
    </button>
  </div>
</div>

<div class="relative flex flex-col my-6 bg-white shadow-sm border border-slate-200 rounded-lg w-96 ml-auto">
  <div class="p-4 bg-teal-50">
    <h5 class="mb-2 text-slate-800 text-xl font-semibold">
      Website Review Check Update from Our Team in San Francisco
    </h5>
    <p class="text-slate-600 leading-normal font-light">
      The place is close to Barceloneta Beach and bus stop just 2 min by walk and near to Naviglio where you can enjoy the main night life in Barcelona.
    </p>
 
    <button class="rounded-md bg-slate-800 py-2 px-4 mt-6 border border-transparent text-center text-sm text-white transition-all shadow-md hover:shadow-lg focus:bg-slate-700 focus:shadow-none active:bg-slate-700 hover:bg-slate-700 active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none" type="button">
      Read more
    </button>
  </div>
</div>


{{-- -carousel photo --}}
    <div class="flex overflow-x-auto space-x-4 p-4 rounded-box w-full">
      <div class="carousel-item">
        <img
          src="https://img.daisyui.com/images/stock/photo-1559703248-dcaaec9fab78.webp"
          alt="Burger" class="object-cover rounded-xl shadow-lg"/>
      </div>
      <div class="carousel-item">
        <img
          src="https://img.daisyui.com/images/stock/photo-1565098772267-60af42b81ef2.webp"
          alt="Burger" class="object-cover rounded-xl shadow-lg"/>
      </div>
      <div class="carousel-item">
        <img
          src="https://img.daisyui.com/images/stock/photo-1572635148818-ef6fd45eb394.webp"
          alt="Burger" class="object-cover rounded-xl shadow-lg"/>
      </div>
      
    </div>
</body>
</html>