<?php include 'header.php'; ?>

<div id="sportsCarousel" class="carousel slide mb-5" data-bs-ride="carousel">

    <div class="carousel-inner">

        <!-- First Slide -->
        <div class="carousel-item active">
            <img src="images/shop1.jpg"
                 class="d-block w-100 rounded"
                 style="height:500px; object-fit:cover;">
        </div>

        <!-- Second Slide -->
        <div class="carousel-item">
            <img src="images/sport2.png"
                 class="d-block w-100 rounded"
                 style="height:500px; object-fit:cover;">
        </div>

        <!-- Third Slide -->
        <div class="carousel-item">
            <img src="images/sport3.png"
                 class="d-block w-100 rounded"
                 style="height:500px; object-fit:cover;">
        </div>

    </div>

    <!-- Previous Button -->
    <button class="carousel-control-prev"
            type="button"
            data-bs-target="#sportsCarousel"
            data-bs-slide="prev">

        <span class="carousel-control-prev-icon"></span>

    </button>

    <!-- Next Button -->
    <button class="carousel-control-next"
            type="button"
            data-bs-target="#sportsCarousel"
            data-bs-slide="next">

        <span class="carousel-control-next-icon"></span>

    </button>

</div>

<div class="text-center">

    <h1>Welcome to Prishtina Sports Shop</h1>

    <p class="lead">
        Best sports products in Prishtina.
    </p>



</div>

<?php include 'footer.php'; ?>