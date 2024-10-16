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
        <section class="contact-banner">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-lg-8">
                        <ul class="nav nav-pills mb-3 d-flex justify-content-center gap-2" id="pills-tab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home"
                                    aria-selected="true">Contact</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-profile" type="button" role="tab"
                                    aria-controls="pills-profile" aria-selected="false">Enquiry Form</button>
                            </li>
                        </ul>
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                                aria-labelledby="pills-home-tab" tabindex="0">
                                <div class="row">
                                    <div class="col-6 text-center">
                                        <h6>Head Office</h6>
                                        <p>F-715, Sitapura Industrial Area , <br>
                                        Tonk Road Jaipur,  Rajasthan (302022), India</p>
                                    </div>  
                                    <div class="col-6 text-center">
                                        <h6>Phone</h6>
                                        <p>+91-9680000789</p>
                                        <h6 class="mt-2">Email</h6>
                                        <p>mayurdynamic@yahoo.com</p>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-profile" role="tabpanel"
                                aria-labelledby="pills-profile-tab" tabindex="0">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo blanditiis minima, nobis quibusdam aut amet consequuntur sint perspiciatis! Quisquam nesciunt harum tenetur odio ex quod ea dignissimos voluptatum, maiores at?
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