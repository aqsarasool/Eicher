<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eicher Genset</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

</head>
<body>

    <!-- Header Section -->
    <header class="bg-light py-3">
        <div class="container d-flex justify-content-between align-items-center">
            <img src="assets/Logo.png" alt="Eicher Logo" class="logo">
            <nav>
                <ul class="nav">
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" id="eicherDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Eicher Engines
                        </a>
                        <div class="dropdown-menu" aria-labelledby="eicherDropdown">
                            <a class="dropdown-item" href="#">Engine Model 1</a>
                            <a class="dropdown-item" href="#">Engine Model 2</a>
                            <a class="dropdown-item" href="#">Engine Model 3</a>
                        </div>
                    </li>
                    
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" id="eicherDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Eicher Gensets
                        </a>
                        <div class="dropdown-menu" aria-labelledby="eicherDropdown">
                            <a class="dropdown-item" href="#">Engine Gensets 1</a>
                            <a class="dropdown-item" href="#">Engine Gensets 2</a>
                            <a class="dropdown-item" href="#">Engine Gensets 3</a>
                        </div>
                    </li>
                    
                    <li class="nav-item"><a href="#" class="nav-link">Our Services</a></li>
                    <li class="nav-item"><a href="#" class="nav-link">Blog</a></li>
                    <li class="nav-item"><a href="#" class="nav-link">Our Story</a></li>
                    <li class="nav-item"><a href="#" class="nav-link">Contact Us</a></li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <i class="fas fa-search"></i>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="hero-section bg-light py-5">
        <div class="container text-left">
            <h1 class="display-4">Eicher Genset</h1>
            <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            <a href="#" class="btn btn-danger">Download Brochure</a>
        </div>
    </section>
    
    <!-- Uninterrupted Power Section -->
    <section class="py-5">
        <div class="container text-center">
            <h2>Uninterrupted power for your business</h2>
            <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            <div class="row mt-4">
                <div class="col-md-6">
                    <div class="card">
                        <img src="residential.jpg" class="card-img-top" alt="Residential">
                        <div class="card-body">
                            <h5 class="card-title">Residential</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            <a href="#" class="btn btn-outline-danger">Check Gensets</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <img src="industrial.jpg" class="card-img-top" alt="Industrial Power">
                        <div class="card-body">
                            <h5 class="card-title">Industrial Power</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            <a href="#" class="btn btn-outline-danger">Find The Right Gensets</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Customizable Options Section -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <img src="genset-image.jpg" class="img-fluid" alt="Genset Image">
                </div>
                <div class="col-md-6">
                    <h3>Customizable Options</h3>
                    <ul class="list-unstyled">
                        <li><i class="bi bi-check-circle"></i> 25kva</li>
                        <li><i class="bi bi-check-circle"></i> 30kva</li>
                        <li><i class="bi bi-check-circle"></i> 45kva</li>
                        <li><i class="bi bi-check-circle"></i> 60kva</li>
                        <li><i class="bi bi-check-circle"></i> 82.5kva</li>
                        <li><i class="bi bi-check-circle"></i> 100kva</li>
                        <li><i class="bi bi-check-circle"></i> 125kva</li>
                        <li><i class="bi bi-check-circle"></i> 160kva</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="py-5">
        <div class="container text-center">
            <h3>Features</h3>
            <div id="featuresCarousel" class="carousel slide mt-4" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="feature-box p-4 bg-light">
                                    <h4>High Reliability</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="feature-box p-4 bg-light">
                                    <h4>Environment Friendly</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="feature-box p-4 bg-light">
                                    <h4>Extremely Low Vibration</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Add more carousel items here if needed -->
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#featuresCarousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#featuresCarousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="py-5 bg-light">
        <div class="container text-center">
            <h3>Testimonials</h3>
            <p class="lead">Discover What Our Clients Say About Their Success Stories</p>
            <div class="testimonial-carousel">
                <div class="carousel slide" data-bs-ride="carousel" id="testimonialCarousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <blockquote class="blockquote">
                                <p class="mb-0">The Generator performance in terms of Fuel Consumption, Sound levels, and overall Performance have been good.</p>
                                <footer class="blockquote-footer">John Doe, <cite title="Source Title">Our Client</cite></footer>
                            </blockquote>
                        </div>
                        <!-- Add more testimonials as needed -->
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer Section -->
    <footer class="bg-dark text-white py-4">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <h5>Our Links</h5>
                    <ul class="list-unstyled">
                        <li><a href="#" class="text-white">Home</a></li>
                        <li><a href="#" class="text-white">Our service</a></li>
                        <li><a href="#" class="text-white">About us</a></li>
                        <li><a href="#" class="text-white">Blogs</a></li>
                        <li><a href="#" class="text-white">Contact us</a></li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <h5>Power Generation</h5>
                    <ul class="list-unstyled">
                        <li><a href="#" class="text-white">82.5kva</a></li>
                        <li><a href="#" class="text-white">100kva</a></li>
                        <li><a href="#" class="text-white">125kva</a></li>
                        <li><a href="#" class="text-white">160kva</a></li>
                        <!-- More links as needed -->
                    </ul>
                </div>
                <div class="col-md-3">
                    <h5>Industrial</h5>
                    <ul class="list-unstyled">
                        <li><a href="#" class="text-white">56kw</a></li>
                        <li><a href="#" class="text-white">100kva</a></li>
                        <li><a href="#" class="text-white">125kva</a></li>
                        <li><a href="#" class="text-white">160kva</a></li>
                        <!-- More links as needed -->
                    </ul>
                </div>
                <div class="col-md-3">
                    <h5>Marine</h5>
                    <ul class="list-unstyled">
                        <li><a href="#" class="text-white">38-110hp</a></li>
                        <li><a href="#" class="text-white">105-190hp</a></li>
                        <li><a href="#" class="text-white">156-225hp</a></li>
                        <!-- More links as needed -->
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>