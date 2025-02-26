<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<<<<<<< HEAD
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
    <script src="https://cdn.jsdelivr.net/npm/daisyui@3.0.0/dist/full.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    @vite(['resources/css/app.css'])
=======
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
>>>>>>> 07ee171 (cartAndOther)
</head>
<body>

<<<<<<< HEAD
=======
    <button class="btn btn-ghost btn-circle">
      <div class="indicator">
      <svg
            stroke-dashoffset:0;
            xmlns="http://www.w3.org/2000/svg"
            class="h-5 w-5 scale-x-[-1]"
            fill="none"
            viewBox="0 0 24 24"
           
            stroke="currentColor">
            <path
              stroke-linecap="round"
              stroke-linejoin="round"
              stroke-width="2"
              d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
          </svg>
        
        <span class="badge badge-xs badge-primary indicator-item"></span>
      </div>
    </button>
    
  </div>
</div>

<section class="py-8 antialiased md:py-12 bg-[url('/images/background.jpeg')] bg-auto bg-cover bg-center h-200 w-full">
  <div class="relative flex flex-col my-8 rounded-lg w-160 ml-auto pt-50 h-499">
    <div class="p-4 bg-teal-50">
      <p class="btn btn-ghost text-xl">New Arrival</p>
      <h2 class="mb-2 text-4xl font-semibold text-green-700">
        Discover Our <br>New Collection
      </h2>
      <p class="text-slate-600 leading-normal font-light">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis.
      </p>
      <br>
      <button type="button" class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
        Buy Now
      </button>
      
    </div>
  </div>
</section><br><br>

<h2 class="mb-2 text-xl font-semibold text-center">
Browse The Range
      </h2>
      
<p class="text-xl text-center">Lorem ipsum dolor sit amet, .</p><br><br>

{{-- -carousel photo --}}
<div class="grid grid-cols-3 gap-4 p-4 w-full h-96">
    <div class="w-full h-full">
        <img src="./images/dining.png"
            alt="Burger" class="w-full h-auto object-contain rounded-xl shadow-lg" />
            <br><p class="text-xl text-center">Dining</p>
    </div>
    <div class="w-full h-full">
        <img src="./images/living.png"
            alt="Burger" class="w-full h-auto object-contain rounded-xl shadow-lg" />
            <br><p class="text-xl text-center">Living</p>
    </div>
    <div class="w-full h-full">
        <img src="./images/bedroom.png"
            alt="Burger" class="w-full h-auto object-contain rounded-xl shadow-lg" />
            <br><p class="text-xl text-center">Bedroom</p>
    </div>
</div>


    {{--Product--}}
    <section class=" py-8 antialiased dark:bg-gray-900 md:py-12">
    <h2 class="mb-2 text-xl font-semibold text-center">
Our Products
      </h2><br>
  <div class="mx-auto max-w-screen-xl px-4 2xl:px-0">
      <div class="mb-4 grid gap-4 sm:grid-cols-2 md:mb-8 lg:grid-cols-3 xl:grid-cols-4">
      {{--Product--}}
      <div class="bg-white rounded-lg shadow-md overflow-hidden h-96">
            <div class="relative container">
                <img src="./images/syltherine.png" alt="Product Image" class="w-full h-72 object-cover">
                <div class="absolute top-2 right-2 bg-red-500 text-white text-sm font-bold w-12 h-12 flex items-center justify-center rounded-full">
                    -30%
                </div>
                <div class="button-group">
                    <button class="btn border-2 text-green-500 bg-white border-green-500 px-8 py-1">Add to cart</button>
                    <div class="second-row">
                    <button class="btn text-white"><i class="fas fa-share text-white"></i>Share</button>
                    <button class="btn text-white"><i class="fas fa-exchange-alt text-white"></i>Compare</button>
                    <button class="btn text-white"><i class="fas fa-heart text-white"></i>Like</button>
                    </div>
                </div>
                
                
            </div>
            <div class="p-4">
                <h3 class="text-lg font-semibold">Syltherine</h3>
                <p class="text-gray-500 text-sm">Stylish cafe chair</p>
                <div class="flex items-center gap-2">
                    <span class="text-gray-900 font-bold">Rp 2.500.000</span>
                    <span class="text-gray-500 text-sm">Rp 3.500.000</span>
                </div>
            </div>
        </div>
         {{--Product--}}
         {{--Product--}}
         <div class="bg-white rounded-lg shadow-md overflow-hidden h-96">
            <div class="relative">
                <img src="./images/laviosa.png" alt="Product Image" class="w-full h-72 object-cover">
            </div>
            <div class="p-4">
                <h3 class="text-lg font-semibold">Leviosa</h3>
                <p class="text-gray-500 text-sm">Stylish cafe chair</p>
                <div class="flex items-center gap-2">
                    <span class="text-gray-900 font-bold">Rp 2.500.000</span>
                    
                </div>
            </div>
        </div>
         {{--Product--}}
         {{--Product--}}
         <div class="bg-white rounded-lg shadow-md overflow-hidden h-96">
            <div class="relative">
                <img src="./images/lolito.png" alt="Product Image" class="w-full h-72 object-cover">
                <div class="absolute top-2 right-2 bg-red-500 text-white text-sm font-bold w-12 h-12 flex items-center justify-center rounded-full">
                    -50%
                </div>
            </div>
            <div class="p-4">
                <h3 class="text-lg font-semibold">Lolito</h3>
                <p class="text-gray-500 text-sm">Luxury big sofa</p>
                <div class="flex items-center gap-2">
                    <span class="text-gray-900 font-bold">Rp 7.000.000</span>
                    <span class="text-gray-500 text-sm">Rp 14.000.000</span>
                </div>
            </div>
        </div>
         {{--Product--}}
         {{--Product--}}
         <div class="bg-white rounded-lg shadow-md overflow-hidden h-96">
            <div class="relative">
                <img src="./images/respira.jpeg" alt="Product Image" class="w-full h-72 object-cover">
                <div class="absolute top-2 right-2 bg-teal-500 text-white text-sm font-bold w-12 h-12 flex items-center justify-center rounded-full">
                    New
                </div>
            </div>
            <div class="p-4">
                <h3 class="text-lg font-semibold">Respira</h3>
                <p class="text-gray-500 text-sm">Outdoor bar table and stool</p>
                <div class="flex items-center gap-2">
                    <span class="text-gray-900 font-bold">Rp 500.000</span>
                    <span class="text-gray-500 text-sm">Rp 14.000.000</span>
                </div>
            </div>
        </div>
         {{--Product--}}
         <div class="bg-white rounded-lg shadow-md overflow-hidden h-96">
            <div class="relative">
                <img src="./images/grifo.png" alt="Product Image" class="w-full h-72 object-cover">
            </div>
            <div class="p-4">
                <h3 class="text-lg font-semibold">Grifo</h3>
                <p class="text-gray-500 text-sm">Night lamp</p>
                <div class="flex items-center gap-2">
                    <span class="text-gray-900 font-bold">Rp 1.500.000</span>
                    
                </div>
            </div>
        </div>
        <div class="bg-white rounded-lg shadow-md overflow-hidden h-96">
            <div class="relative">
                <img src="./images/muggo.png" alt="Product Image" class="w-full h-72 object-cover">
                <div class="absolute top-2 right-2 bg-teal-500 text-white text-sm font-bold w-12 h-12 flex items-center justify-center rounded-full">
                    New
                </div>
            </div>
            <div class="p-4">
                <h3 class="text-lg font-semibold">Muggo</h3>
                <p class="text-gray-500 text-sm">Small mug</p>
                <div class="flex items-center gap-2">
                    <span class="text-gray-900 font-bold">Rp 150.000</span>
                 
                </div>
            </div>
        </div>
        <div class="bg-white rounded-lg shadow-md overflow-hidden h-96">
            <div class="relative">
                <img src="./images/pingky.jpeg" alt="Product Image" class="w-full h-72 object-cover">
                <div class="absolute top-2 right-2 bg-red-500 text-white text-sm font-bold w-12 h-12 flex items-center justify-center rounded-full">
                    -50%
                </div>
            </div>
            <div class="p-4">
                <h3 class="text-lg font-semibold">Pingky</h3>
                <p class="text-gray-500 text-sm">Cute bed set</p>
                <div class="flex items-center gap-2">
                    <span class="text-gray-900 font-bold">Rp 7.000.000</span>
                    <span class="text-gray-500 text-sm">Rp 14.000.000</span>
                </div>
            </div>
        </div>
        <div class="bg-white rounded-lg shadow-md overflow-hidden h-96">
            <div class="relative">
                <img src="./images/potty.jpeg" alt="Product Image" class="w-full h-72 object-cover">
                <div class="absolute top-2 right-2 bg-teal-500 text-white text-sm font-bold w-12 h-12 flex items-center justify-center rounded-full">
                    New
                </div>
            </div>
            <div class="p-4">
                <h3 class="text-lg font-semibold">Potty</h3>
                <p class="text-gray-500 text-sm">Minimalist flower</p>
                <div class="flex items-center gap-2">
                    <span class="text-gray-900 font-bold">Rp 500.000</span>
                    
                </div>
            </div>
        </div>
         <div>
      </div>
    </div>
  </form>
</section>
<div class="flex justify-center">
    <button type="button" class="px-4 py-2 border-2 border-green-500 text-green-500 rounded-lg hover:bg-green-700 hover:text-white transition">Show More</button>
</div>

<<<<<<< HEAD
>>>>>>> parent of 3e052a6 (all home)
=======
>>>>>>> parent of 3e052a6 (all home)
</body>
</html>