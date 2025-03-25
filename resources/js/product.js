// ✅ JavaScript for Carousel Controls & Placeholder Effect on Thumbnails -->

    const images = [
        "./images/Meryl_chair_1.jpeg",
        "./images/Meryl_chair_2.jpeg",
        "./images/Meryl_chair_3.jpeg",
        "./images/Meryl_chair_4.jpeg",
        "./images/Meryl_chair_5.png"
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
