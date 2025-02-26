<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Meryl Lounge Chair</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="https://cdn.jsdelivr.net/npm/daisyui@1.19.0/dist/full.js"></script>
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
</head>
<body class="bg-gray-50 h-screen flex flex-col">

  <!-- ✅ Navbar (Matches UI) -->
  <div class="w-full flex justify-between items-center px-8 py-6 bg-white shadow-md fixed top-0 left-0 z-50">
    <!-- Left: Logo -->
    <h1 class="text-2xl font-semibold text-gray-900">Cozy</h1>

    <!-- Center: Navigation Links -->
    <div class="hidden md:flex absolute left-1/2 transform -translate-x-1/2 space-x-6 text-gray-600">
      <a href="#" class="hover:text-gray-900">Shop</a>
      <a href="#" class="hover:text-gray-900">Collective</a>
      <a href="#" class="hover:text-gray-900">About Us</a>
      <a href="#" class="hover:text-gray-900">Contact</a>
    </div>

    <!-- Right: Icons (Search & Cart) -->
    <div class="flex space-x-4">
      <span class="material-icons text-gray-600 cursor-pointer">search</span>
      <span class="material-icons text-gray-600 cursor-pointer">shopping_cart</span>
    </div>
  </div>

  <div class="flex flex-col md:flex-row flex-1 px-8 py-20 bg-white w-full h-full">
    <!-- Left: Product Details -->
    <div class="md:w-1/2 flex flex-col space-y-12 justify-center">
      <!-- ✅ Breadcrumb Navigation (Arrow with Chair / Meryl Lounge Chair Below) -->
      <div class="flex flex-col text-gray-600">
        <span class="material-icons cursor-pointer">arrow_back</span>
        <div class="flex space-x-5 mt-5">
          <span class="hover:text-blue-600 cursor-pointer">Chair</span>
          <span>/</span>
          <span class="hover:text-blue-600 cursor-pointer font-bold">Meryl Lounge Chair</span>
        </div>
      </div>

      <!-- Product Title -->
      <h2 class="text-5xl font-semibold text-gray-900">Meryl Lounge Chair</h2>

      <!-- ✅ Increased Space Between Price & Rating for Proper Alignment -->
      <div class="flex items-center space-x-44 mt-4"> <!-- Adjusted spacing -->
        <p class="text-2xl font-bold text-gray-900">$149.99</p>
        <div class="flex items-center space-x-2">
          <span class="text-yellow-500 text-lg">&#9733;&#9733;&#9733;&#9733;&#9733;</span>
          <span class="text-sm text-gray-500">(4.6 / 5.0) (556)</span>
        </div>
      </div>

      <!-- ✅ Adjusted Description Width to Align with Quantity Selector & Add to Cart -->
      <p class="text-gray-700 text-lg w-[75%]">The gently curved lines accentuated by sewn details are kind to your body and pleasant to look at. Also, there’s a tilt and height-adjusting mechanism that’s built to outlast years of ups and downs.</p>

      <!-- Quantity & Add to Cart (Now Aligned with Description) -->
      <div class="flex items-center space-x-5 w-[75%]"> <!-- Same width as description -->
        <div class="border border-gray-300 rounded-md flex items-center p-2">
          <button class="text-xl text-gray-600 px-4">-</button>
          <input type="number" value="1" class="w-12 text-center border-none outline-none">
          <button class="text-xl text-gray-600 px-3">+</button>
        </div>
        <button class="py-2 px-10 bg-blue-600 text-white rounded-lg hover:bg-blue-700">Add to Cart</button>
      </div>

      

      <!-- Shipping Info -->
      <p class="text-sm text-gray-500 w-[75%] ">Free 3-5 day shipping • Tool-free assembly • 30-day trial</p>
      <!-- "Add to Wishlist" Button (No Border, No Background) -->


<!-- Wishlist & Social Media Section -->
<div class="flex items-center space-x-6 mt-6 text-gray-600">
  <button class="flex items-center space-x-2 text-gray-700 hover:text-red-500 cursor-pointer">
    <span class="text-lg">♥</span>
    <span class="text-lg font-medium">Add to Wishlist</span>
  </button>
  

  <!-- Social Media Links -->
  <div class="flex items-center space-x-4">
      <a href="#" class="hover:text-blue-600">
          <i class="fab fa-facebook-f text-xl"></i>
      </a>
      <a href="#" class="hover:text-blue-400">
          <i class="fab fa-twitter text-xl"></i>
      </a>
      <a href="#" class="hover:text-red-600">
          <i class="fab fa-pinterest text-xl"></i>
      </a>
      <a href="#" class="hover:text-gray-900">
          <i class="fab fa-instagram text-xl"></i>
      </a>
  </div>
</div>

<!-- ✅ Make sure FontAwesome is included for icons to work -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/js/all.min.js" crossorigin="anonymous"></script>
    </div>
    
<!-- Right: Product Images & Carousel -->
<div class="md:w-1/2 flex flex-col items-end justify-center">
    <!-- ✅ Dynamic Image Counter (Bold Changing Number, Normal `/05`) -->
    <div id="image-counter" class="text-gray-600 mb-2 text-right w-full text-2xl">
        <span id="current-image" class="font-bold">01</span>/05
    </div>

    <!-- ✅ Enlarged Carousel Controls with More Spacing -->
    <div class="flex justify-end w-full max-w-md">
        <span class="material-icons cursor-pointer text-gray-600 text-5xl" onclick="prevImage()">chevron_left</span>
        <span class="material-icons cursor-pointer text-gray-600 text-5xl ml-12" onclick="nextImage()">chevron_right</span>
    </div>

    <div class="w-full max-w-3xl mt-2 relative">
        <!-- ✅ Bolder Placeholder Effect -->
        <div id="image-placeholder" class="absolute inset-0 bg-gray-500 animate-pulse rounded-lg"></div>

        <!-- ✅ Enlarged Main Image (Carousel) -->
        <img id="mainImage" src="img/Meryl_chair_1.jpeg" alt="Meryl Lounge Chair"
            class="rounded-lg shadow-lg w-full opacity-0 transition-opacity duration-500" onload="removePlaceholder()">
    </div>

    <!-- ✅ Enlarged Image Thumbnails with Proper Spacing & Border -->
    <div class="flex space-x-6 mt-4">
        <img src="img/Meryl_chair_1.jpeg" alt="Thumbnail 1" class="w-28 h-28 object-cover rounded-md cursor-pointer border-4 border-gray-300 hover:border-gray-500"
            onclick="updateMainImage(0, this)" id="thumb-0">
        <img src="img/Meryl_chair_2.jpeg" alt="Thumbnail 2" class="w-28 h-28 object-cover rounded-md cursor-pointer border-4 border-gray-300 hover:border-gray-500"
            onclick="updateMainImage(1, this)" id="thumb-1">
        <img src="img/Meryl_chair_3.jpeg" alt="Thumbnail 3" class="w-28 h-2284 object-cover rounded-md cursor-pointer border-4 border-gray-300 hover:border-gray-500"
            onclick="updateMainImage(2, this)" id="thumb-2">
        <img src="img/Meryl_chair_4.jpeg" alt="Thumbnail 4" class="w-28 h-28 object-cover rounded-md cursor-pointer border-4 border-gray-300 hover:border-gray-500"
            onclick="updateMainImage(3, this)" id="thumb-3">
        <img src="img/Meryl_chair_5.png" alt="Thumbnail 5" class="w-28 h-28 object-cover rounded-md cursor-pointer border-4 border-gray-300 hover:border-gray-500"
            onclick="updateMainImage(4, this)" id="thumb-4">
    </div>
</div>



<!-- ✅ JavaScript for Carousel Controls & Placeholder Effect on Thumbnails -->
<script>
    const images = [
        "img/Meryl_chair_1.jpeg",
        "img/Meryl_chair_2.jpeg",
        "img/Meryl_chair_3.jpeg",
        "img/Meryl_chair_4.jpeg",
        "img/Meryl_chair_5.png"
    ];
    let currentImageIndex = 0;

    function updateMainImage(index, clickedThumbnail = null) {
        let mainImage = document.getElementById('mainImage');
        let placeholder = document.getElementById('image-placeholder');

        // Show bolder placeholder while image loads
        placeholder.style.display = 'block';
        mainImage.style.opacity = '0';

        // Update image source
        currentImageIndex = index;
        mainImage.src = images[currentImageIndex];

        // ✅ Update Image Counter with Bold Number
        document.getElementById('current-image').innerText = (currentImageIndex + 1).toString().padStart(2, '0');

        // Remove active border from all thumbnails
        document.querySelectorAll('.cursor-pointer').forEach(img => {
            img.classList.remove('border-gray-900');
        });

        // Apply active border to clicked thumbnail
        if (clickedThumbnail) {
            clickedThumbnail.classList.add('border-gray-900');
        } else {
            // If changing via arrows, highlight the correct thumbnail
            document.getElementById(`thumb-${currentImageIndex}`).classList.add('border-gray-900');
        }
    }

    function prevImage() {
        let placeholder = document.getElementById('image-placeholder');

        // Show bolder placeholder effect on thumbnails
        placeholder.style.display = 'block';
        
        currentImageIndex = (currentImageIndex - 1 + images.length) % images.length;
        updateMainImage(currentImageIndex);
    }

    function nextImage() {
        let placeholder = document.getElementById('image-placeholder');

        // Show bolder placeholder effect on thumbnails
        placeholder.style.display = 'block';

        currentImageIndex = (currentImageIndex + 1) % images.length;
        updateMainImage(currentImageIndex);
    }

    function removePlaceholder() {
        let mainImage = document.getElementById('mainImage');
        let placeholder = document.getElementById('image-placeholder');

        // Hide placeholder when image is loaded
        placeholder.style.display = 'none';
        mainImage.style.opacity = '1';
    }
</script>

    </div>

  </div>
  </div>
</div>

  

</body>
</html>