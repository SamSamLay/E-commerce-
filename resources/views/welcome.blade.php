<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<<<<<<< HEAD
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <style>
        /* Grid Layout */
        .grid-layout {
            display: grid;
            grid-template-columns: repeat(4, 1fr); /* 3 columns */
            gap: 10px;
        }

        /* Make all images the same size */
        .grid-item img {
            width: 100%;
            height: 80%;
            object-fit: cover;
            border-radius: 10px;
        }

        /* Responsive for smaller screens */
        @media (max-width: 768px) {
            .grid-layout {
                grid-template-columns: repeat(3, 1fr); /* 2 columns on smaller screens */
            }
        }
    </style>
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

<div class="bg-[#EDF7F5] flex flex-col items-center min-h-screen">

    <!-- First Section -->
    <section class="max-w-6xl mx-auto flex flex-col md:flex-row items-center gap-10 p-6">
        <!-- Left Text Section -->
        <div class="md:w-1/2">
            <h1 class="text-4xl font-bold text-[#0F172A] leading-tight">50+ Beautiful rooms inspiration</h1>
            <p class="text-[#475569] mt-4">Our designer already made a lot of beautiful prototype of rooms that inspire you</p>
            <button class="mt-6 bg-green-700 text-white px-6 py-3 rounded-md text-lg font-medium">Explore More</button>
        </div>

        <!-- Right Carousel Section -->
        <div class="relative md:w-1/2 overflow-hidden">
            <div class="carousel w-full flex">
                <div class="w-full flex-shrink-0 relative">
                    <img src="./images/img.png" alt="Room 1" class="w-full rounded-lg">
                    <!-- Updated Card with Arrow -->
                    <div class="absolute bottom-4 left-4 bg-white p-4 rounded-lg shadow-md flex items-center justify-between w-48">
                        <div>
                            <p class="text-sm text-gray-500">01 — Bed Room</p>
                            <h3 class="text-lg font-bold text-[#0F172A]">Inner Peace</h3>
                        </div>
                        <button class="bg-green-300 text-white p-2 rounded-full">
                            &#8594;
                        </button>
                    </div>
                </div>
                <div class="w-full flex-shrink-0">
                    <img src="./images/2img.png" alt="Room 2" class="w-full rounded-lg">
                </div>
                <div class="w-full flex-shrink-0">
                    <img src="./images/3img.jpeg" alt="Room 3" class="w-full rounded-lg">
                </div>
                
                
            </div>

            <!-- Navigation Buttons -->
            <button id="prev" class="absolute left-2 top-1/2 transform -translate-y-1/2 bg-white p-2 rounded-full shadow-md">
                &#10094;
            </button>
            <button id="next" class="absolute right-2 top-1/2 transform -translate-y-1/2 bg-white p-2 rounded-full shadow-md">
                &#10095;
            </button>

            <!-- Dots Indicator -->
            <div class="absolute bottom-2 left-1/2 transform -translate-x-1/2 flex space-x-2">
                <span class="dot w-3 h-3 bg-gray-300 rounded-full cursor-pointer"></span>
                <span class="dot w-3 h-3 bg-gray-300 rounded-full cursor-pointer"></span>
                <span class="dot w-3 h-3 bg-gray-300 rounded-full cursor-pointer"></span>
            </div>
        </div>
    </section>

    <!-- Second Section (Image Grid) -->
    <section class="bg-white text-white py-12 w-full">
        <div class="max-w-6xl mx-auto text-center">
            <p class="text-lg text-gray-400">Share your setup with</p>
            <h2 class="text-3xl font-bold text-[#0F172A]">#FuniroFurniture</h2>
        </div>

        <!-- Image Grid -->
        <section class="max-w-6xl mx-auto px-4 py-4">
            <div class="grid-layout">
                <div class="grid-item"><img src="./images/img1.png" alt="Setup 1"></div>
                <div class="grid-item"><img src="./images/img2.png" alt="Setup 2"></div>
                <div class="grid-item"><img src="./images/img3.png" alt="Setup 3"></div>
                <div class="grid-item"><img src="./images/img4.png" alt="Setup 4"></div>
                <div class="grid-item"><img src="./images/img5.png" alt="Setup 5"></div>
                <div class="grid-item"><img src="./images/img6.png" alt="Setup 6"></div>
                <div class="grid-item"><img src="./images/img7.png" alt="Setup 7"></div>
                <div class="grid-item"><img src="./images/img8.png" alt="Setup 8"></div>
            </div>
        </section>
    </section>

    <script>
        let index = 1; // Start at the first real slide
        const carousel = document.querySelector(".carousel");
        const slides = document.querySelectorAll(".carousel div");
        const dots = document.querySelectorAll(".dot");
    
        // Clone first and last slides for seamless looping
        const firstClone = slides[0].cloneNode(true);
        const lastClone = slides[slides.length - 1].cloneNode(true);
    
        // Append clones to the carousel
        carousel.appendChild(firstClone);
        carousel.insertBefore(lastClone, slides[0]);
    
        // Get updated slides count
        const allSlides = document.querySelectorAll(".carousel div");
        const totalSlides = allSlides.length;
    
        // Set initial position
        carousel.style.transition = "none"; // No transition on first load
        carousel.style.transform = `translateX(-${index * 100}%)`;
    
        function updateCarousel() {
            carousel.style.transition = "transform 0.6s ease-in-out";
            carousel.style.transform = `translateX(-${index * 100}%)`;
    
            // Update dots
            dots.forEach((dot, i) => dot.classList.toggle("bg-gray-700", i === index - 1));
        }
    
        document.getElementById("next").addEventListener("click", () => {
            if (index >= totalSlides - 1) {
                index = 1; // Jump to first real slide
                carousel.style.transition = "none"; // Remove transition for instant reset
                carousel.style.transform = `translateX(-${index * 100}%)`;
                setTimeout(() => {
                    carousel.style.transition = "transform 0.6s ease-in-out"; // Restore transition
                    index++;
                    updateCarousel();
                }, 10);
            } else {
                index++;
                updateCarousel();
            }
        });
    
        document.getElementById("prev").addEventListener("click", () => {
            if (index <= 0) {
                index = totalSlides - 2; // Jump to last real slide
                carousel.style.transition = "none"; // Remove transition for instant reset
                carousel.style.transform = `translateX(-${index * 100}%)`;
                setTimeout(() => {
                    carousel.style.transition = "transform 0.6s ease-in-out"; // Restore transition
                    index--;
                    updateCarousel();
                }, 10);
            } else {
                index--;
                updateCarousel();
            }
        });
    
        dots.forEach((dot, i) => {
            dot.addEventListener("click", () => {
                index = i + 1;
                updateCarousel();
            });
        });
    
        carousel.addEventListener("transitionend", () => {
            if (index >= totalSlides - 1) {
                carousel.style.transition = "none"; // Remove transition for instant reset
                index = 1;
                carousel.style.transform = `translateX(-${index * 100}%)`;
            } 
            if (index <= 0) {
                carousel.style.transition = "none"; // Remove transition for instant reset
                index = totalSlides - 2;
                carousel.style.transform = `translateX(-${index * 100}%)`;
            }
        });
    </script>
    
    

<!-- Gray Divider Before Footer -->
<div class="border-t border-gray-300 w-full"></div>

<!-- Footer Section -->
<footer class="bg-white text-black py-20 w-full">
    <div class="max-w-7xl mx-auto flex flex-col md:flex-row justify-between px-5">
        <!-- Left Section: Company Info -->
        <div class="w-full md:w-1/3 mb-16 md:mb-0">
            <h2 class="text-3xl font-bold text-[#0F172A]">Cozy®</h2>
            <p class="text-gray-500 mt-6 text-lg leading-relaxed">
                400 University Drive Suite 200 Coral Gables, <br> FL 33134 USA
            </p>
        </div>

        <!-- Middle Section: Links & Help (Adjusted Spacing) -->
        <div class="w-full md:w-1/3 flex justify-between gap-24 mb-16 md:mb-0">
            <div>
                <h3 class="text-gray-500 text-lg font-semibold mb-8">Links</h3>
                <ul class="space-y-6 text-lg">
                    <li><a href="#" class="hover:underline">Home</a></li>
                    <li><a href="#" class="hover:underline">Shop</a></li>
                    <li><a href="#" class="hover:underline">About</a></li>
                    <li><a href="#" class="hover:underline">Contact</a></li>
                </ul>
            </div>
            <div>
                <h3 class="text-gray-500 text-lg font-semibold mb-8">Help</h3>
                <ul class="space-y-6 text-lg">
                    <li><a href="#" class="hover:underline">Payment Options</a></li>
                    <li><a href="#" class="hover:underline">Returns</a></li>
                    <li><a href="#" class="hover:underline">Privacy Policies</a></li>
                </ul>
            </div>
        </div>

        <!-- Right Section: Newsletter (Balanced Spacing) -->
<div class="w-full md:w-1/3 md:pl-12">
    <h3 class="text-gray-500 text-lg font-semibold mb-8">Newsletter</h3>
    
    <!-- Input Field & Button -->
    <div class="flex items-center border-b-2 border-black pb-2">
        <input type="email" id="emailInput" placeholder="Enter Your Email Address" 
            class="w-full py-4 text-lg outline-none bg-transparent placeholder-gray-500">
        <button id="subscribeBtn" class="text-black font-bold text-lg px-6">SUBSCRIBE</button>
    </div>

    <!-- Error & Success Messages -->
    <p id="message" class="mt-4 text-sm font-medium"></p>
</div>

<!-- JavaScript to Handle Subscription -->
<script>
    document.getElementById("subscribeBtn").addEventListener("click", function() {
        const emailInput = document.getElementById("emailInput").value.trim();
        const message = document.getElementById("message");
        
        // Regular expression for email validation
        const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

        if (emailInput === "") {
            message.textContent = "Email cannot be empty.";
            message.style.color = "red";
        } else if (!emailPattern.test(emailInput)) {
            message.textContent = "Please enter a valid email address.";
            message.style.color = "red";
        } else {
            message.textContent = "Subscribed successfully!";
            message.style.color = "green";

            // Clear input field after successful subscription
            document.getElementById("emailInput").value = "";

            // Simulate an API call (Replace this with actual API logic if needed)
            setTimeout(() => {
                message.textContent = "";
            }, 3000);
        }
    });
</script>

    </div>

    <!-- Gray Divider Before Copyright -->
    <div class="border-t border-gray-300 mt-20 w-full"></div>

    <!-- Bottom Copyright Section -->
    <div class="mt-8 ml-24 text-left text-gray-500 text-lg">
        <p>© 2023 Furino. All rights reserved.</p>
    </div>
</footer>



</div>
</body>
</html>