<div class="gallery-container">
        <?php
            $imageDir = 'img/';
            $images = glob($imageDir . '*.{jpg,jpeg,png,gif}', GLOB_BRACE);
            foreach ($images as $image) {
                echo '<div class="gallery-item">';
                echo '<img src="' . $image . '" alt="Gallery Image" class="gallery-image">';
                echo '</div>';
            }
        ?>
    </div>

    <div class="lightbox-container" id="lightbox-container">
        <span class="close-btn" id="close-btn">&times;</span>
        <div class="lightbox-content" id="lightbox-content"></div>
    </div>


<script>
        document.addEventListener('DOMContentLoaded', function() {
    const galleryItems = document.querySelectorAll('.gallery-item');
    const lightboxContainer = document.getElementById('lightbox-container');
    const lightboxContent = document.getElementById('lightbox-content');

    galleryItems.forEach(item => {
        item.addEventListener('click', function() {
            const imageUrl = this.querySelector('.gallery-image').src;
            const imageElement = document.createElement('img');
            imageElement.src = imageUrl;
            imageElement.classList.add('lightbox-image');
            lightboxContent.innerHTML = '';
            lightboxContent.appendChild(imageElement);
            lightboxContainer.style.display = 'block';
        });
    });

    const closeBtn = document.getElementById('close-btn');
    closeBtn.addEventListener('click', function() {
        lightboxContainer.style.display = 'none';
    });
});

</script>
