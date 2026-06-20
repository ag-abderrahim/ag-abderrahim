<section class="project-gallery">
    <div class="container">

        <div class="projects-header">
            <span class="section-label">Gallery</span>
            <h2>Project Screenshots</h2>
        </div>

        <div class="gallery-wrapper">

            <button class="gallery-arrow left" onclick="scrollGallery(-1)">
                <i class="fa-solid fa-chevron-left"></i>
            </button>

            <div class="gallery-slider" id="gallerySlider">
                @foreach($project->images as $image)
                    <div class="gallery-card">
                        <img src="{{ asset('storage/' . $image->image) }}"
                             onclick="openImage(this.src)">
                    </div>
                @endforeach
            </div>

            <button class="gallery-arrow right" onclick="scrollGallery(1)">
                <i class="fa-solid fa-chevron-right"></i>
            </button>

        </div>

    </div>
</section>

<div id="imageModal" class="image-modal">
    <span onclick="closeImage()">&times;</span>
    <img id="modalImage">
</div>

<script>
    function openImage(src){
    document.getElementById('imageModal').style.display='flex';
    document.getElementById('modalImage').src=src;
}

function closeImage(){
    document.getElementById('imageModal').style.display='none';
}
function scrollGallery(direction){
    const slider = document.getElementById('gallerySlider');
    slider.scrollBy({
        left: direction * 450,
        behavior: 'smooth'
    });
}
</script>
