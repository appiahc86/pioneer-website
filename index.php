<?php include 'header.php'; ?>

<style>



    @media only screen and (max-width: 600px) {
        /*For extra small device*/
        .carousel-img {
            height: 200px;
        }
    }

    @media only screen and (max-width: 768px) {
        /*For mobile phones*/
        .carousel-img {
            height: 240px;
        }
    }
    @media only screen and (min-width: 768px)) {
        /* Medium devices (landscape tablets, 768px and up) */
        .carousel-img {
            height: 300px;
        }
    }
    @media only screen and (min-width: 992px) {
        /* Large devices (laptops/desktops, 992px and up) */
        .carousel-img {
            height: 450px;
        }
    }
    @media only screen and (min-width: 1200px) {
        /* Extra large devices (large laptops and desktops, 1200px and up) */
        .carousel-img {
            height: 600px;
        }
    }


</style>

<div class="container">
    <div class="row">
        <div class="col">

            <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleCaptions" data-slide-to="1" style="color: red;"></li>
                    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="img/c2.jpg" class="d-block w-100 carousel-img" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h1>FIND WHEELS & TYRES</h1>
                            <p class="text-warning" style="font-size: 2em;">FOR ALL VEHICLE TYPES</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="img/c5.jpg" class="d-block w-100 carousel-img" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="img/c4.jpg" class="d-block w-100 carousel-img" alt="...">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>


        </div>
    </div>
</div>



<div class="container">
    <div class="row">
        <div class="col-md-7">
            <span><i>We provide a</i></span>
            <h3 class="text-warning">
                OVER 500 TIRE TESTS TO <br>
                ENSURE YOU GET THE <br>
                PERFECT TIRE FOR YOUR <br>
                VEHICLE.
            </h3>
            <p>
                Introducing tires-wheels Tire Testing. Real-world, independent tire tests <br>
                in snow, ice, wet and dry conditions so you’ll know exactly how they’ll perform on the road.

            </p>
        </div>
        <div class="col-md-5">
                <img src="img/pic-1.png" alt="" class="img-fluid">
        </div>
    </div>
</div>








<?php include 'footer.php'; ?>
