<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link rel="stylesheet" href="CSS/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Karla:ital,wght@0,200..800;1,200..800&family=Unbounded:wght@200..900&display=swap"
        rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css'>
    <link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'>
</head>

<body>

    <header>
        <?php include 'navbar.php'; ?>
    </header>

    <main>
        <!-- Home Page Banner -->
        <section class="home-banner">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 px-0">
                        <video src="Images/Home-Banner-Phone.mp4"
                            class="d-block d-sm-block d-md-block d-lg-none d-xl-none" autoplay="" muted="" loop=""
                            width="100%" height="auto"></video>
                        <video src="Images/Home-Banner.mp4" class="d-none d-sm-none d-md-none d-lg-block d-xl-block"
                            autoplay="" muted="" loop="" width="100%" height="auto"></video>
                    </div>
                </div>
            </div>
        </section>

        <section class="home-about-us">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-12 order-lg-1 order-2" data-aos="fade-right" data-aos-delay="200"
                        data-aos-duration="800">
                        <div class="img-box">
                            <img src="Images/home-about.png" alt="">
                        </div>
                    </div>
                    <div class="col-lg-6 col-12 order-lg-2 order-1" data-aos="fade-left" data-aos-delay="250"
                        data-aos-duration="800">
                        <h6>About Us</h6>
                        <h2><span>Mayur Dynamic Tiles</span> Shines As a Radiant Star,
                            Illuminating The <span>Global
                                Ceramic</span> Industry</h2>
                        <p>The tenacious team behind this iconic brand has crafted a legacy that endures even a decade
                            later, a testament to their unwavering vision and foresight.With Mr. Vivekraj Jadeja at the
                            helm as the Managing Director, Invoke Tiles has scaled unprecedented heights, leaving behind
                            a trail of success that inspires awe. Its relentless focus on innovation, coupled with a
                            diverse portfolio of products across all categories, has earned it the title of the ultimate
                            décor solutions provider.</p>
                        <button>
                            <a href="">
                                Let's Connect
                                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40"
                                    fill="none">
                                    <path
                                        d="M38.5307 20C38.5307 30.7812 30.0057 39.5 19.5153 39.5C9.02495 39.5 0.5 30.7812 0.5 20C0.5 9.21881 9.02495 0.5 19.5153 0.5C30.0057 0.5 38.5307 9.21881 38.5307 20Z"
                                        stroke="#2D2D2D" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M17.278 13.2929L23.4878 19.6569C23.8688 20.0474 23.8688 20.6805 23.4878 21.0711L17.278 27.435C16.897 27.8256 16.2791 27.8256 15.8981 27.435C15.517 27.0445 15.517 26.4113 15.8981 26.0208L21.4179 20.364L15.8981 14.7071C15.517 14.3166 15.517 13.6834 15.8981 13.2929C16.2791 12.9024 16.897 12.9024 17.278 13.2929Z"
                                        fill="#2D2D2D" />
                                </svg>
                            </a>
                        </button>
                    </div>
                </div>
            </div>
        </section>

        <section class="usps">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-3 col-6 my-lg-0 my-2">
                        <div class="col-box">
                            <h2>1996</h2>
                            <p>Started In</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-6 my-lg-0 my-2">
                        <div class="col-box">
                            <h2>4,20,000</h2>
                            <p>Sq/Ft Factory Size </p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-6 my-lg-0 my-2">
                        <div class="col-box">
                            <h2>10,00,000</h2>
                            <p>sq.ft/ Monthly Production Capacity</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-6 my-lg-0 my-2">
                        <div class="col-box">
                            <h2>27</h2>
                            <p>Years Of Excellence</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="home-our-products">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <h2>Our Products</h2>
                    </div>
                    <div class="col-lg-3 col-6 my-1">
                        <a href="">
                            <div class="product-box">
                                <img src="Images/home-categories/pavers.png" alt="">
                                <div class="product-name">
                                    <h4>Pavers</h4>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-6 my-1">
                        <a href="">
                            <div class="product-box">
                                <img src="Images/home-categories/kerb.png" alt="">
                                <div class="product-name">
                                    <h4>Kerb Stones & Saucers</h4>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-6 my-1">
                        <a href="">
                            <div class="product-box">
                                <img src="Images/home-categories/parking.png" alt="">
                                <div class="product-name">
                                    <h4>Parking Tile</h4>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-6 my-1">
                        <a href="">
                            <div class="product-box">
                                <img src="Images/home-categories/terrazo.png" alt="">
                                <div class="product-name">
                                    <h4>Terrazo</h4>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-6 my-1">
                        <a href="">
                            <div class="product-box">
                                <img src="Images/home-categories/heritage.png" alt="">
                                <div class="product-name">
                                    <h4>Heritage Cement Tile</h4>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-6 my-1">
                        <a href="">
                            <div class="product-box">
                                <img src="Images/home-categories/blocks.png" alt="">
                                <div class="product-name">
                                    <h4>Engineered Blocks</h4>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-6 my-1">
                        <a href="">
                            <div class="product-box">
                                <img src="Images/home-categories/premium.png" alt="">
                                <div class="product-name">
                                    <h4>Premium Exterior Floorings</h4>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-6 my-1">
                        <a href="">
                            <div class="product-box">
                                <img src="Images/home-categories/cool.png" alt="">
                                <div class="product-name">
                                    <h4>Cool Roof Tiles</h4>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <section class="home-applications">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <h2>Application</h2>
                    </div>
                    <div class="col-12">
                        <div id="news-sliderr" class="owl-carousel">
                            <div class="post-slide text-center">
                                <div class="application-box">
                                    <img src="Images/application-real-estate.png" width="100%" height="auto" alt="">
                                    <h3>Real Estate</h3>
                                </div>
                            </div>
                            <div class="post-slide text-center">
                                <div class="application-box">
                                    <img src="Images/application-infrastructure.png" width="100%" height="auto" alt="">
                                    <h3>Infrastructure</h3>
                                </div>
                            </div>
                           
                            <div class="post-slide text-center">
                                <div class="application-box">
                                    <img src="Images/application-institution.png" width="100%" height="auto" alt="">
                                    <h3>Institutions</h3>
                                </div>
                            </div>
                            <!-- <div class="post-slide text-center">
                                <div class="application-box">
                                    <img src="Images/application-bungalow.png" width="100%" height="auto" alt="">
                                    <h3>Pathways & Walkways</h3>
                                </div>
                            </div> -->
                            <div class="post-slide text-center">
                                <div class="application-box">
                                    <img src="Images/application-institution.png" width="100%" height="auto" alt="">
                                    <h3>DriveWays & Walkways</h3>
                                </div>
                            </div>
                            

                            <div class="post-slide text-center">
                                <div class="application-box">
                                    <img src="Images/application-institution.png" width="100%" height="auto" alt="">
                                    <h3>Industries</h3>
                                </div>
                            </div>
                           
                            <div class="post-slide text-center">
                                <div class="application-box">
                                    <img src="Images/application-bungalow.png" width="100%" height="auto" alt="">
                                    <h3>Bungalows & Farm Houses</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="home-news">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <h6>From the Blog</h6>
                        <h2>News & Articles</h2>
                    </div>
                    <div class="col-12">
                        <div id="news-sliderrr" class="owl-carousel">

                            <div class="post-slide text-center">
                                <div class="news-box">
                                    <img src="Images/home-news-1.png" class="blog-image" width="100%" height="auto" alt="">
                                    <div
                                        class="news-low-box d-flex justify-content-center align-items-center flex-column">
                                        <button>03 August 2024</button>
                                        <!-- <div class="d-flex gap-3 align-items-center">
                                            <p class="d-flex align-items-center gap-1"><img src="Images/news-icon.png"
                                                    alt="">Mayur Dynamics</p>
                                            <p class="d-flex align-items-center gap-1"><img src="Images/news-icon-2.png"
                                                    alt="">1 Comment</p>
                                        </div> -->
                                        <h3>Made in India tiles by Mayur dynamic</h3>
                                    </div>

                                </div>
                            </div>

                            <div class="post-slide text-center">
                                <div class="news-box">
                                    <img src="Images/application-bungalow.png" width="100%" class="blog-image" height="auto" alt="">
                                    <div
                                        class="news-low-box d-flex justify-content-center align-items-center flex-column">
                                        <button>21 July 2024</button>
                                        <!-- <div class="d-flex gap-3 align-items-center">
                                            <p class="d-flex align-items-center gap-1"><img src="Images/news-icon.png"
                                                    alt="">Mayur Dynamics</p>
                                            <p class="d-flex align-items-center gap-1"><img src="Images/news-icon-2.png"
                                                    alt="">1 Comment</p>
                                        </div> -->
                                        <h3>The Benefits of Using Tiles in High-Traffic Areas of Your Home</h3>
                                    </div>

                                </div>
                            </div>

                            <div class="post-slide text-center">
                                <div class="news-box">
                                    <img src="Images/application-institution.png" width="100%" class="blog-image" height="auto" alt="">
                                    <div
                                        class="news-low-box d-flex justify-content-center align-items-center flex-column">
                                        <button>20 July 2024</button>
                                        <!-- <div class="d-flex gap-3 align-items-center">
                                            <p class="d-flex align-items-center gap-1"><img src="Images/news-icon.png"
                                                    alt="">Mayur Dynamics</p>
                                            <p class="d-flex align-items-center gap-1"><img src="Images/news-icon-2.png"
                                                    alt="">1 Comment</p>
                                        </div> -->
                                        <h3>Top Tile Materials: Ceramic, Porcelain, and Natural Stone – Which is Right for You?</h3>
                                    </div>

                                </div>
                            </div>

                            <div class="post-slide text-center">
                                <div class="news-box">
                                    <img src="Images/home-news-1.png" width="100%" class="blog-image" height="auto" alt="">
                                    <div
                                        class="news-low-box d-flex justify-content-center align-items-center flex-column">
                                        <button>15 July 2024</button>
                                        <!-- <div class="d-flex gap-3 align-items-center">
                                            <p class="d-flex align-items-center gap-1"><img src="Images/news-icon.png"
                                                    alt="">Mayur Dynamics</p>
                                            <p class="d-flex align-items-center gap-1"><img src="Images/news-icon-2.png"
                                                    alt="">1 Comment</p>
                                        </div> -->
                                        <h3>Tile Layout Patterns That Will Transform Any Room</h3>
                                    </div>

                                </div>
                            </div>

                            <div class="post-slide text-center">
                                <div class="news-box">
                                    <img src="Images/home-news-3.png" width="100%" class="blog-image" height="auto" alt="">
                                    <div
                                        class="news-low-box d-flex justify-content-center align-items-center flex-column">
                                        <button>05 July 2024</button>
                                        <!-- <div class="d-flex gap-3 align-items-center">
                                            <p class="d-flex align-items-center gap-1"><img src="Images/news-icon.png"
                                                    alt="">Mayur Dynamics</p>
                                            <p class="d-flex align-items-center gap-1"><img src="Images/news-icon-2.png"
                                                    alt="">1 Comment</p>
                                        </div> -->
                                        <h3>The Eco-Friendly Choice: Sustainable Tile Options for Green Living</h3>
                                    </div>

                                </div>
                            </div>

                            <div class="post-slide text-center">
                                <div class="news-box">
                                    <img src="Images/grass-grid-home.png" width="100%" class="blog-image" height="auto" alt="">
                                    <div
                                        class="news-low-box d-flex justify-content-center align-items-center flex-column">
                                        <button>10 July 2024</button>
                                        <!-- <div class="d-flex gap-3 align-items-center">
                                            <p class="d-flex align-items-center gap-1"><img src="Images/news-icon.png"
                                                    alt="">Mayur Dynamics</p>
                                            <p class="d-flex align-items-center gap-1"><img src="Images/news-icon-2.png"
                                                    alt="">1 Comment</p>
                                        </div> -->
                                        <h3>How to Choose the Right Tile Color and Finish for Your Space</h3>
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>


  
    <script src='https://code.jquery.com/jquery-1.12.0.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js'></script>
    <script src="main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    
</body>

</html>