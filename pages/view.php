<?php include("partials/_header.php"); ?>

<!-- start: Hero section -->
<div class="hero hero--sm" style="background-image: url('../img/heros/hero-04.png')">
    <!-- you can change the background -->
    <div class="container">
        <div class="content">
            <h1>Urban Office <strong>Building</strong></h1>
            <ul class="cs-breadcrumb">
                <li><a href="index.html">Home</a></li>
                <li>/</li>
                <li><a href="#">Commercial</a></li>
            </ul>
        </div>
    </div>
</div>
<!-- end: Hero section -->

<!-- start: Filter bar -->
<div class="filter-bar">
    <ul>
        <li><a href="#">355 Photos</a></li>
        <li><a href="#">42 Packages</a></li>
        <li>
            <div class="btn-group">
                <button type="button" class="btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Categories
                </button>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">Category 1</a>
                    <a class="dropdown-item" href="#">Category 2</a>
                    <a class="dropdown-item" href="#">Category 3</a>
                </div>
            </div>
        </li>
        <li><a href="#">Show All Categories & Tags</a></li>
    </ul>
    <!-- search form -->
    <form class="filter-search-form" action="." method="POST">
        <div class="input-search">
            <i class="icon-search"></i>
            <input type="search" name="search" placeholder="Search Categories & Tags">
        </div>
    </form>
</div>
<!-- end: Filter bar -->

<main>
    <!-- start: page content -->
    <div class="content">
        <section class="section-area section-area--radius-large">
            <!-- building description and gallery for the packages -->
            <article>
                <div class="featured-image">
                    <img class="img-fluid" src="../img/view-img.jpg" alt="Featured Image">
                </div>

                <!-- description text -->
                <div class="inner-content">
                    <div class="intro-desc">
                        <p>Praesent eu dolor eu orci vehicula euismod. Vivamus sed sollicitudin libero, vel malesuada velit. Nullam et maximus lorem. Suspe maximus do quis consequat volutpat. Donec vehicula elit eu erat pulvinar, vel congue ex egestas. Praesent egestas purus dola porta arcu pharetra quis. Se vestibulum semper ligula, id accumsan orci ornare ut. Donec id ut sollicitudin mi. habitant morbit vo tristique senectus et netus et malesua fam ac turpis egestas. Aliquam dapibus nisl at diam scelerisque luctus. Nam mattis vel in malesuada maximus, erat ligula eleifend eros, et lacinianu ante vel odio.Duis aute irure dolor in reprehenderit in volupta tisa velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupi non proident, sunt in culpa qui officia. Sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    </div>

                    <!-- start: image gallery -->
                    <div class="gallery">
                        <h2>Images Included In Package</h2>

                        <div class="row">
                            <div class="gallery-item col-12 col-md-6 col-lg-3 col-xl-3">
                                <a href="#"><img class="img-fluid" src="../img/gallery-img.png" alt="gallery item"></a>
                            </div>
                            <div class="gallery-item col-12 col-md-6 col-lg-3 col-xl-3">
                                <a href="#"><img class="img-fluid" src="../img/gallery-img.png" alt="gallery item"></a>
                            </div>
                            <div class="gallery-item col-12 col-md-6 col-lg-3 col-xl-3">
                                <a href="#"><img class="img-fluid" src="../img/gallery-img.png" alt="gallery item"></a>
                            </div>
                            <div class="gallery-item col-12 col-md-6 col-lg-3 col-xl-3">
                                <a href="#"><img class="img-fluid" src="../img/gallery-img.png" alt="gallery item"></a>
                            </div>
                            <div class="gallery-item col-12 col-md-6 col-lg-3 col-xl-3">
                                <a href="#"><img class="img-fluid" src="../img/gallery-img.png" alt="gallery item"></a>
                            </div>
                            <div class="gallery-item col-12 col-md-6 col-lg-3 col-xl-3">
                                <a href="#"><img class="img-fluid" src="../img/gallery-img.png" alt="gallery item"></a>
                            </div>
                            <div class="gallery-item col-12 col-md-6 col-lg-3 col-xl-3">
                                <a href="#"><img class="img-fluid" src="../img/gallery-img.png" alt="gallery item"></a>
                            </div>
                            <div class="gallery-item col-12 col-md-6 col-lg-3 col-xl-3">
                                <a href="#"><img class="img-fluid" src="../img/gallery-img.png" alt="gallery item"></a>
                            </div>
                            <div class="gallery-item col-12 col-md-6 col-lg-3 col-xl-3">
                                <a href="#"><img class="img-fluid" src="../img/gallery-img.png" alt="gallery item"></a>
                            </div>
                            <div class="gallery-item col-12 col-md-6 col-lg-3 col-xl-3">
                                <a href="#"><img class="img-fluid" src="../img/gallery-img.png" alt="gallery item"></a>
                            </div>
                            <div class="gallery-item col-12 col-md-6 col-lg-3 col-xl-3">
                                <a href="#"><img class="img-fluid" src="../img/gallery-img.png" alt="gallery item"></a>
                            </div>
                            <div class="gallery-item col-12 col-md-6 col-lg-3 col-xl-3">
                                <a href="#"><img class="img-fluid" src="../img/gallery-img.png" alt="gallery item"></a>
                            </div>
                        </div>
                    </div>
                    <!-- end: image gallery -->
                </div>
            </article>
        </section>

        <!-- start: second section -->
        <section class="section-area section-area--list mb-0">
            <div class="row">
                <div class="col">
                    <h2>Similar Packages</h2>
                </div>
            </div>

            <!-- cards items -->
            <div class="cards">
                <div class="row">
                    <div class="col-12 col-md-6 col-lg-4 col-xl-3">
                        <div class="card package-item">
                            <img src="../img/cards/img-01.png" class="card-img-top" alt="Package name">
                            <div class="card-body">
                                <h2 class="card-title">Mollis neque</h2>
                                <p class="card-text">Phasellus dignissim, tellus in pelle mollis, mauris orci dignissim nislid gravida nunc enim quis Maecen...</p>
                                <div>
                                    <a href="#" class="more-link">Learn More</a>
                                </div>
                            </div>
                            <div class="card-bottom">
                                <div>$30.00</div>
                                <a class="buy-btn" href="#">Buy Now</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-6 col-lg-4 col-xl-3">
                        <div class="card package-item">
                            <img src="../img/cards/img-02.png" class="card-img-top" alt="Package name">
                            <div class="card-body">
                                <h2 class="card-title">Suscipit ultrices </h2>
                                <p class="card-text">Phasellus dignissim, tellus in pelle mollis, mauris orci dignissim nislid gravida nunc enim quis Maecen...</p>
                                <div>
                                    <a href="#" class="more-link">Learn More</a>
                                </div>
                            </div>
                            <div class="card-bottom">
                                <div>$30.00</div>
                                <a class="buy-btn" href="#">Buy Now</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-6 col-lg-4 col-xl-3">
                        <div class="card package-item">
                            <img src="../img/cards/img-03.png" class="card-img-top" alt="Package name">
                            <div class="card-body">
                                <h2 class="card-title">Libero vulputate</h2>
                                <p class="card-text">Phasellus dignissim, tellus in pelle mollis, mauris orci dignissim nislid gravida nunc enim quis Maecen...</p>
                                <div>
                                    <a href="#" class="more-link">Learn More</a>
                                </div>
                            </div>
                            <div class="card-bottom">
                                <div>$30.00</div>
                                <a class="buy-btn" href="#">Buy Now</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-6 col-lg-4 col-xl-3">
                        <div class="card package-item">
                            <img src="../img/cards/img-04.png" class="card-img-top" alt="Package name">
                            <div class="card-body">
                                <h2 class="card-title">Tristique augue mattis</h2>
                                <p class="card-text">Phasellus dignissim, tellus in pelle mollis, mauris orci dignissim nislid gravida nunc enim quis Maecen...</p>
                                <div>
                                    <a href="#" class="more-link">Learn More</a>
                                </div>
                            </div>
                            <div class="card-bottom">
                                <div>$30.00</div>
                                <a class="buy-btn" href="#">Buy Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- see more link -->
            <div class="more-row">
                <a href="#">See More...</a>
            </div>
        </section>
        <!-- end: second section -->

    </div>
    <!-- end: page content -->

    <!-- start: sidebar -->
    <aside class="sidebar">
        <!-- start: order-box -->
        <div class="sidebar-item order-box">
            <div class="order-box-content">
                <div class="tags">
                    <ul>
                        <li><a href="#">Commercial</a></li>
                        <li><a href="#">Urban</a></li>
                        <li><a href="#">Northeast</a></li>
                        <li><a href="#">Office Building</a></li>
                    </ul>
                </div>
                <p>Lorem ipsum dolor sit amet, consectetu adipiscing elit, sed do</p>
            </div>
            <!-- order box : price , button and payments possibility -->
            <div class="order-box-bottom">
                <div class="item-buy">
                    <div class="price">$30.00</div>
                    <a class="buy-btn" href="#">
                        Buy Now
                    </a>
                </div>
                <div class="item-support-payment">
                    <ul>
                        <li><img src="../img/visa.png" alt="payment"></li>
                        <li><img src="../img/mastercard.png" alt="payment"></li>
                        <li><img src="../img/american-express.png" alt="payment"></li>
                        <li><img src="../img/discover.png" alt="payment"></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- end: order-box -->

        <!-- start: banner place -->
        <div class="sidebar-item banner">
            <button type="button" class="badge">Ad</button>
            <img src="../img/banner-img.png" alt="Banner image">
        </div>
        <!-- end: banner place -->

    </aside>
    <!-- end: sidebar -->

</main>

<?php include("partials/_footer.php");
