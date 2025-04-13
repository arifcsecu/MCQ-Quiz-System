<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>StarTech</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <style>
        /* Custom styles */
        .top-header { background-color: #f5f5f5; }
        .main-header { background-color: #ffffff; box-shadow: 0 2px 5px rgba(0,0,0,0.1); }
        .category-nav { background-color: #2a41e8; }
        .product-card { transition: all 0.3s; }
        .product-card:hover { transform: translateY(-5px); box-shadow: 0 10px 20px rgba(0,0,0,0.1); }
        .deal-of-the-day { background-color: #fff8e6; }
        .footer { background-color: #2a2a2a; color: #ffffff; }
    </style>

</head>


<body>
    <!-- Top Header -->
    <div class="top-header py-2 border-bottom">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="d-flex align-items-center">
                        <span class="me-3"><i class="fas fa-phone-alt me-2"></i> 09678 111 222</span>
                        <span><i class="fas fa-envelope me-2"></i> support@startech.com.bd</span>
                    </div>
                </div>
                <div class="col-md-6 text-end">
                    <div class="d-flex justify-content-end">
                        <a href="#" class="me-3"><i class="fas fa-user me-1"></i> Account</a>
                        <a href="#" class="me-3"><i class="fas fa-heart me-1"></i> Wishlist</a>
                        <a href="#"><i class="fas fa-shopping-cart me-1"></i> Cart</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Main Header with Logo and Search -->
    <header class="main-header py-3">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-3 col-md-4 col-6">
                    <a href="/">
                        <img src="https://www.startech.com.bd/image/catalog/logo.png" alt="StarTech Logo" class="img-fluid">
                    </a>
                </div>
                <div class="col-lg-6 col-md-8 d-none d-md-block">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search for products...">
                        <button class="btn btn-primary" type="button"><i class="fas fa-search"></i></button>
                    </div>
                </div>
                <div class="col-lg-3 d-none d-lg-block text-end">
                    <div class="d-flex align-items-center justify-content-end">
                        <div class="text-start me-3">
                            <div class="fw-bold">Customer Care</div>
                            <div class="small">09678 111 222</div>
                        </div>
                        <div>
                            <i class="fas fa-headset fs-3 text-primary"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Category Navigation -->
    <nav class="category-nav navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCategories">
                <span class="navbar-toggler-icon"></span> All Categories
            </button>
            <div class="collapse navbar-collapse" id="navbarCategories">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#">Desktop</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#">Laptop</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#">Component</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#">Monitor</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#">UPS</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#">Phone</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#">Tablet</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#">Office Equipment</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#">Camera</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#">Security</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#">Networking</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#">Software</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#">Server & Stoarge</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#">Accessories</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#">Gadget</a> 
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#">Gaming</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#">TV</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#">Appliance</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="py-3">
        <div class="container">
            <!-- Hero Slider -->
            <section class="mb-4">
                <div id="heroCarousel" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner rounded">
                        <div class="carousel-item active">
                            <img src="https://www.startech.com.bd/image/catalog/home/banner/laptop-desktop.webp" class="d-block w-100" alt="Laptop & Desktop">
                        </div>
                        <div class="carousel-item">
                            <img src="https://www.startech.com.bd/image/catalog/home/banner/monitor.webp" class="d-block w-100" alt="Monitors">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    </button>
                </div>
            </section>

            <!-- Category Icons -->
            <section class="mb-4">
                <div class="row g-3">
                    <div class="col-6 col-sm-4 col-md-2">
                        <a href="#" class="d-block text-center p-3 border rounded bg-white">
                            <img src="https://www.startech.com.bd/image/catalog/category-thumb/laptop.png" alt="Laptop" class="img-fluid mb-2" style="height: 50px;">
                            <div class="fw-bold">Laptops</div>
                        </a>
                    </div>
                    <!-- Repeat for other categories -->
                </div>
            </section>

            <!-- Deal of the Day -->
            <section class="deal-of-the-day rounded p-4 mb-4">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h3 class="m-0">Deal of the Day</h3>
                    <div class="text-danger fw-bold">
                        <i class="fas fa-clock me-2"></i>
                        <span id="countdown">23:59:59</span>
                    </div>
                </div>
                <div class="row g-3">
                    <!-- Product cards would go here -->
                    <div class="col-6 col-md-4 col-lg-3">
                        <div class="product-card card h-100">
                            <div class="badge bg-danger position-absolute m-2">-15%</div>
                            <img src="https://www.startech.com.bd/image/cache/catalog/laptop/lenovo/ideapad-3/ideapad-3-01-228x228.jpg" class="card-img-top p-3" alt="Product">
                            <div class="card-body">
                                <h6 class="card-title">Lenovo IdeaPad 3 15IAU7</h6>
                                <div class="price">
                                    <span class="fw-bold text-danger">৳64,500</span>
                                    <span class="text-decoration-line-through text-muted small ms-2">৳75,900</span>
                                </div>
                            </div>
                            <div class="card-footer bg-white border-0">
                                <button class="btn btn-sm btn-primary w-100">Add to Cart</button>
                            </div>
                        </div>
                    </div>
                    <!-- More product cards -->
                </div>
            </section>

            <!-- Featured Categories -->
            <section class="mb-4">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h3 class="m-0">Featured Categories</h3>
                    <a href="#" class="btn btn-sm btn-outline-primary">View All</a>
                </div>
                <div class="row g-3">
                    <div class="col-6 col-md-4 col-lg-3">
                        <a href="#" class="d-block border rounded bg-white p-3 text-center">
                            <img src="https://www.startech.com.bd/image/cache/catalog/category-thumb/processor-48x48.png" alt="Processor" class="img-fluid mb-2">
                            <div class="fw-bold">Processor</div>
                            <div class="small text-muted">(25 Products)</div>
                        </a>
                    </div>
                    <!-- More category blocks -->
                </div>
            </section>

            <!-- Latest Products -->
            <section class="mb-4">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h3 class="m-0">Latest Products</h3>
                    <a href="#" class="btn btn-sm btn-outline-primary">View All</a>
                </div>
                <div class="row g-3">
                    <!-- Product cards similar to Deal of the Day -->
                </div>
            </section>

            <!-- Brand Logos -->
            <section class="mb-4">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h3 class="m-0">Popular Brands</h3>
                    <a href="#" class="btn btn-sm btn-outline-primary">View All</a>
                </div>
                <div class="row g-3">
                    <div class="col-4 col-sm-3 col-md-2">
                        <a href="#" class="d-block border rounded bg-white p-3 text-center">
                            <img src="https://www.startech.com.bd/image/cache/catalog/brand/amd-228x228.png" alt="AMD" class="img-fluid">
                        </a>
                    </div>
                    <!-- More brand logos -->
                </div>
            </section>
        </div>
    </main>

    <!-- Footer -->
    <footer class="footer pt-5 pb-3">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-3 col-md-6">
                    <h5>Information</h5>
                    <ul class="list-unstyled">
                        <li><a href="#" class="text-white-50">About Us</a></li>
                        <li><a href="#" class="text-white-50">Contact Us</a></li>
                        <li><a href="#" class="text-white-50">Privacy Policy</a></li>
                        <li><a href="#" class="text-white-50">Terms & Conditions</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h5>Customer Service</h5>
                    <ul class="list-unstyled">
                        <li><a href="#" class="text-white-50">FAQ</a></li>
                        <li><a href="#" class="text-white-50">Returns</a></li>
                        <li><a href="#" class="text-white-50">Warranty Policy</a></li>
                        <li><a href="#" class="text-white-50">Shipping Policy</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h5>My Account</h5>
                    <ul class="list-unstyled">
                        <li><a href="#" class="text-white-50">My Account</a></li>
                        <li><a href="#" class="text-white-50">Order History</a></li>
                        <li><a href="#" class="text-white-50">Wish List</a></li>
                        <li><a href="#" class="text-white-50">Newsletter</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h5>Contact Us</h5>
                    <address class="text-white-50">
                        <p><i class="fas fa-map-marker-alt me-2"></i> 6th Floor, 28 Kazi Nazrul Islam Ave, Dhaka</p>
                        <p><i class="fas fa-phone-alt me-2"></i> 09678 111 222</p>
                        <p><i class="fas fa-envelope me-2"></i> support@startech.com.bd</p>
                    </address>
                    <div class="social-icons">
                        <a href="#" class="text-white me-2"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="text-white me-2"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="text-white me-2"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="text-white"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
            </div>
            <hr class="my-4 bg-secondary">
            <div class="row">
                <div class="col-md-6">
                    <p class="mb-0 text-white-50">© 2023 StarTech.com Ltd. All Rights Reserved.</p>
                </div>
                <div class="col-md-6 text-md-end">
                    <img src="https://www.startech.com.bd/image/catalog/payment-method.png" alt="Payment Methods" class="img-fluid" style="height: 30px;">
                </div>
            </div>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Countdown timer for Deal of the Day
        function updateCountdown() {
            const now = new Date();
            const endOfDay = new Date();
            endOfDay.setHours(23, 59, 59, 999);
            
            const diff = endOfDay - now;
            
            const hours = Math.floor(diff / (1000 * 60 * 60));
            const minutes = Math.floor((diff % (1000 * 60 * 60)) / (1000 * 60));
            const seconds = Math.floor((diff % (1000 * 60)) / 1000);
            
            document.getElementById('countdown').textContent = 
                `${hours.toString().padStart(2, '0')}:${minutes.toString().padStart(2, '0')}:${seconds.toString().padStart(2, '0')}`;
        }
        
        setInterval(updateCountdown, 1000);
        updateCountdown();
    </script>
</body>
</html>