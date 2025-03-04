
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
