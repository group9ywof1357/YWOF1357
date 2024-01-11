<?php 
    session_start();

    if (!isset($_SESSION['username'])) {
        $_SESSION['msg'] = "You must log in first";
        header('location: login.php');
    }
    
    if (isset($_GET['logout'])) {
        session_destroy();
        unset($_SESSION['username']);
        header('location: login.php');
    }
    

?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>YWOF1357 - Your World Of Fashion</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <link rel="shortcut icon" type="image/x-icon" href="img/headlogo2.png">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">  

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>

    <!-- Navbar Start -->
    <div class="container-fluid bg-dark mb-30">
 
           

                <nav class="navbar navbar-expand-lg bg-dark navbar-dark py-3 py-lg-0 px-0">
                    
                    <a href="index.php" class="text-decoration-none">
                        <span class="h1 text-uppercase text-primary bg-dark px-">YWOF</span>
                        <span class="h1 text-uppercase text-dark bg-primary px- ml-n1">1357</span>
                    </a>
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                        <div class="navbar-nav mr-auto py-3">
                            <a href="index.php" class="nav-item nav-link">Home</a>
                            <a href="Allshop.php" class="nav-item nav-link">Shop</a>
                            
                            <div class="nav-item dropdown">
                                <a href="AllMen's.php" class="nav-link dropdown-toggle" data-toggle="dropdown">Men <i class="fa fa-angle-down mt-1"></i></a>
                                <div class="dropdown-menu bg-primary rounded-0 border-0 m-0">
                                    <a href="AllMen's.php" class="dropdown-item">All Men's</a>
                                    <a href="MenClothing.php" class="dropdown-item">Clothing</a>
                                    <a href="MenShoes.php" class="dropdown-item">Shoes</a>
                                    <a href="MenAccessories.php" class="dropdown-item">Accessories</a>
                                    <a href="MenBags.php" class="dropdown-item">Bags</a>
                                    <a href="MenJewelry.php" class="dropdown-item">Jewelry</a>
                                    <a href="Brands.php" class="dropdown-item">Brands</a>
                                </div>
                            </div>

                            <div class="nav-item dropdown">
                                <a href="AllMen's.php" class="nav-link dropdown-toggle" data-toggle="dropdown">Women <i class="fa fa-angle-down mt-1"></i></a>
                                <div class="dropdown-menu bg-primary rounded-0 border-0 m-0">
                                    <a href="AllWomen's.php" class="dropdown-item">All Women's</a>
                                    <a href="MenClothing.php" class="dropdown-item">Clothing</a>
                                    <a href="MenShoes.php" class="dropdown-item">Shoes</a>
                                    <a href="MenAccessories.php" class="dropdown-item">Accessories</a>
                                    <a href="MenBags.php" class="dropdown-item">Bags</a>
                                    <a href="MenJewelry.php" class="dropdown-item">Jewelry</a>
                                    <a href="Brands.php" class="dropdown-item">Brands</a>
                                </div>
                            </div>
                            <a href="New.php" class="nav-item nav-link">New</a>
                            <a href="Hottest.php" class="nav-item nav-link">Hottest</a>
                            <a href="Sale.php" class="nav-item nav-link">Sale</a>
                            <a href="Brands.php" class="nav-item nav-link">Brands</a>
                            <a href="about.php" class="nav-item nav-link">About</a>
                        </div>
                        
                        
                        <div class="navbar-nav ml-auto py-0 d-none d-lg-block">
                            <a href="https://www.facebook.com/profile.php?id=61554419720879&mibextid=LQQJ4d" target="_black" class="btn px-0 ml-2">
                                <i class="fa-brands fa-square-facebook" style="color: #ef3708;"></i>
                                <span class="badge text-secondary border border-secondary rounded-circle" style="padding-bottom: 2px;"></span>
                            </a>
                            <a href="https://www.instagram.com/" target="_black" class="btn px-0 ml-2">
                                <i class="fa-brands fa-square-instagram" style="color: #ef3708;"></i>
                                <span class="badge text-secondary border border-secondary rounded-circle" style="padding-bottom: 2px;"></span>
                            </a>
                            <a href="https://twitter.com/i/flow/login" target="_black" class="btn px-0 ml-2">
                                <i class="fa-brands fa-square-x-twitter" style="color: #ef3708;"></i>
                                <span class="badge text-secondary border border-secondary rounded-circle" style="padding-bottom: 2px;"></span>
                            </a>
                            <a href="https://web.whatsapp.com/" target="_black" class="btn px-0 ml-2">
                                <i class="fa-brands fa-square-whatsapp" style="color: #ef3708;"></i>
                                <span class="badge text-secondary border border-secondary rounded-circle" style="padding-bottom: 2px;"></span>
                            </a>
                            <a href="index.php?logout='1'" class="btn px-0 ml-2">
                                <i class="fa-solid fa-right-from-bracket fa-beat" style="color: #ef3708;"></i>
                                <span class="badge text-secondary border border-secondary rounded-circle" style="padding-bottom: 2px;"></span>
                            </a>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <!-- Navbar End -->


    <!-- Carousel Start -->
    <div class="container-fluid mb-3">
        <div class="row px-xl-5">
            <div class="col-lg-8">
                <div id="header-carousel" class="carousel slide carousel-fade mb-30 mb-lg-0" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#header-carousel" data-slide-to="0" class="active"></li>
                        <li data-target="#header-carousel" data-slide-to="1"></li>
                        <li data-target="#header-carousel" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item position-relative active" style="height: 430px;">
                            <img class="position-absolute w-100 h-100" src="img/carousel-all.jpg" style="object-fit: cover;">
                            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                                <div class="p-3" style="max-width: 700px;">
                                    <p class="mx-md-5 px-5 animate__animated animate__bounceIn"> Hello <strong><?php echo $_SESSION['username']; ?></strong> Welcome to</p>
                                    <h1 class="display-4 text-white mb-3 animate__animated animate__fadeInDown">YWOF1357</h1>
                                    <p class="mx-md-5 px-5 animate__animated animate__bounceIn">Your World of Fashion</p>
                                    <a class="btn btn-outline-light py-2 px-4 mt-3 animate__animated animate__fadeInUp" href="Allshop.php">Shop Now</a>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item position-relative" style="height: 430px;">
                            <img class="position-absolute w-100 h-100" src="img/carousel-women.jpg" style="object-fit: cover;">
                            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                                <div class="p-3" style="max-width: 700px;">
                                    <h1 class="display-4 text-white mb-3 animate__animated animate__fadeInDown">Women Fashion</h1>
                                    <p class="mx-md-5 px-5 animate__animated animate__bounceIn">Elegance Redefined, Confidence Reinvented.</p>
                                    <a class="btn btn-outline-light py-2 px-4 mt-3 animate__animated animate__fadeInUp" href="AllWomen's.php">Shop Now</a>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item position-relative" style="height: 430px;">
                            <img class="position-absolute w-100 h-100" src="img/carousel-men.jpg" style="object-fit: cover;">
                            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                                <div class="p-3" style="max-width: 700px;">
                                    <h1 class="display-4 text-white mb-3 animate__animated animate__fadeInDown">Men Fashion</h1>
                                    <p class="mx-md-5 px-5 animate__animated animate__bounceIn">Tailor-Made Confidence, Worn Daily.</p>
                                    <a class="btn btn-outline-light py-2 px-4 mt-3 animate__animated animate__fadeInUp" href="AllMen's.php">Shop Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="product-offer mb-30" style="height: 200px;">
                    <img class="img-fluid" src="img/offer-3.jpg" alt="">
                    <div class="offer-text">
                        <h6 class="text-white text-uppercase"></h6>
                        <h3 class="text-white mb-3">THE HOTTEST PRODUCTS</h3>
                        <a href="hottest.php" class="btn btn-primary">Shop Now</a>
                    </div>
                </div>
                <div class="product-offer mb-30" style="height: 200px;">
                    <img class="img-fluid" src="img/offer-5.jpg" alt="">
                    <div class="offer-text">
                        <h6 class="text-white text-uppercase"></h6>
                        <h3 class="text-white mb-3">PRODUCTS ON SALE</h3>
                        <a href="Sale.php" class="btn btn-primary">Shop Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Carousel End -->



    <!-- Products Start -->
    <div class="container-fluid pt-5 pb-3">
        <h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4"><span class="bg-secondary pr-3">Women CATEGORIES - jewelry -  </span></h2>
        <div class="row px-xl-5">
            
            <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                <div class="product-item bg-light mb-4">
                    <div class="product-img position-relative overflow-hidden" >
                        <img class="img-fluid w-100" src="#" alt="">
                    </div>
                    <div class="text-center py-4">
                        <a class="h6 text-decoration-none text-truncate" 
                            href="#" 
                            target="_black"> NAME </a>
                        <p class="text-body" href="">TITLE</p>
                        <div class="d-flex align-items-center justify-content-center mt-2">
                            <h5>$</h5><h6 class="text-muted ml-2"><del></del></h6>
                        </div>
                    </div>
                </div>
            </div>
                        
            <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                <div class="product-item bg-light mb-4">
                    <div class="product-img position-relative overflow-hidden" >
                        <img class="img-fluid w-100" src="#" alt="">
                    </div>
                    <div class="text-center py-4">
                        <a class="h6 text-decoration-none text-truncate" 
                            href="#" 
                            target="_black"> NAME </a>
                        <p class="text-body" href="">TITLE</p>
                        <div class="d-flex align-items-center justify-content-center mt-2">
                            <h5>$</h5><h6 class="text-muted ml-2"><del></del></h6>
                        </div>
                    </div>
                </div>
            </div>
                        
            <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                <div class="product-item bg-light mb-4">
                    <div class="product-img position-relative overflow-hidden" >
                        <img class="img-fluid w-100" src="#" alt="">
                    </div>
                    <div class="text-center py-4">
                        <a class="h6 text-decoration-none text-truncate" 
                            href="#" 
                            target="_black"> NAME </a>
                        <p class="text-body" href="">TITLE</p>
                        <div class="d-flex align-items-center justify-content-center mt-2">
                            <h5>$</h5><h6 class="text-muted ml-2"><del></del></h6>
                        </div>
                    </div>
                </div>
            </div>
                        
            <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                <div class="product-item bg-light mb-4">
                    <div class="product-img position-relative overflow-hidden" >
                        <img class="img-fluid w-100" src="#" alt="">
                    </div>
                    <div class="text-center py-4">
                        <a class="h6 text-decoration-none text-truncate" 
                            href="#" 
                            target="_black"> NAME </a>
                        <p class="text-body" href="">TITLE</p>
                        <div class="d-flex align-items-center justify-content-center mt-2">
                            <h5>$</h5><h6 class="text-muted ml-2"><del></del></h6>
                        </div>
                    </div>
                </div>
            </div>
                        
            <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                <div class="product-item bg-light mb-4">
                    <div class="product-img position-relative overflow-hidden" >
                        <img class="img-fluid w-100" src="#" alt="">
                    </div>
                    <div class="text-center py-4">
                        <a class="h6 text-decoration-none text-truncate" 
                            href="#" 
                            target="_black"> NAME </a>
                        <p class="text-body" href="">TITLE</p>
                        <div class="d-flex align-items-center justify-content-center mt-2">
                            <h5>$</h5><h6 class="text-muted ml-2"><del></del></h6>
                        </div>
                    </div>
                </div>
            </div>
                        
            <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                <div class="product-item bg-light mb-4">
                    <div class="product-img position-relative overflow-hidden" >
                        <img class="img-fluid w-100" src="#" alt="">
                    </div>
                    <div class="text-center py-4">
                        <a class="h6 text-decoration-none text-truncate" 
                            href="#" 
                            target="_black"> NAME </a>
                        <p class="text-body" href="">TITLE</p>
                        <div class="d-flex align-items-center justify-content-center mt-2">
                            <h5>$</h5><h6 class="text-muted ml-2"><del></del></h6>
                        </div>
                    </div>
                </div>
            </div>
                        
            <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                <div class="product-item bg-light mb-4">
                    <div class="product-img position-relative overflow-hidden" >
                        <img class="img-fluid w-100" src="#" alt="">
                    </div>
                    <div class="text-center py-4">
                        <a class="h6 text-decoration-none text-truncate" 
                            href="#" 
                            target="_black"> NAME </a>
                        <p class="text-body" href="">TITLE</p>
                        <div class="d-flex align-items-center justify-content-center mt-2">
                            <h5>$</h5><h6 class="text-muted ml-2"><del></del></h6>
                        </div>
                    </div>
                </div>
            </div>
                                    
            <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                <div class="product-item bg-light mb-4">
                    <div class="product-img position-relative overflow-hidden" >
                        <img class="img-fluid w-100" src="#" alt="">
                    </div>
                    <div class="text-center py-4">
                        <a class="h6 text-decoration-none text-truncate" 
                            href="#" 
                            target="_black"> NAME </a>
                        <p class="text-body" href="">TITLE</p>
                        <div class="d-flex align-items-center justify-content-center mt-2">
                            <h5>$</h5><h6 class="text-muted ml-2"><del></del></h6>
                        </div>
                    </div>
                </div>
            </div>
           
        </div>
    </div>
    <!-- Products End -->

    <!-- YOU MAY ALSO LIKE Start -->
    <div class="container-fluid py-5">
            <h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4"><span class="bg-secondary pr-3">You May Also Like</span></h2>
            <div class="row px-xl-5">
                <div class="col">
                    <div class="owl-carousel related-carousel">
                        
                    <div class="product-item bg-light">
                            <div class="product-img position-relative overflow-hidden">
                                <img class="img-fluid w-100" src="https://www.mrporter.com/variants/images/1647597291535123/in/w560_q60.jpg" alt="">
                            </div>
                            <div class="text-center py-4">
                                <a class="h6 text-decoration-none text-truncate" 
                                    href="https://www.mrporter.com/en-us/mens/product/balenciaga/clothing/hoodies/oversized-full-grain-leather-hoodie/1647597291535123?cm_mmc=PartnerizeAM-_-laurenlyst-_-Content-_-1011l2075&utm_source=partnerize&utm_medium=affiliation&utm_campaign=xq_1011l2075&utm_content=laurenlyst&clickref=1101ly5F9vEt"
                                    target="_black">BALENCIAGA</a>
                                <p class="text-body">Oversized Full-Grain Leather Hoodie</p>
                                <div class="d-flex align-items-center justify-content-center mt-2">
                                    <h5>$6,950</h5><h6 class="text-muted ml-2"><del></del></h6>
                                </div>
                            </div>
                        </div>
                                                
                        <div class="product-item bg-light">
                            <div class="product-img position-relative overflow-hidden">
                                <img class="img-fluid w-100" src="https://d3vfig6e0r0snz.cloudfront.net/rcYjnYuenaTH5vyDF/images/products/b5b8fbe49c0b90212ce32eafe7963618.webp" alt="">
                            </div>
                            <div class="text-center py-4">
                                <a class="h6 text-decoration-none text-truncate" 
                                    href="https://www.cettire.com/la/products/adidas-originals-logo-stripe-intarsia-three-pack-socks-916195616/cmVhY3Rpb24vcHJvZHVjdDpQNndyY0pkQkVHZ2V2ZjZQOA%3D%3D?clickref=1101ly5FccMt"
                                    target="_black">adidas</a>
                                <p class="text-body">Logo Stripe Intarsia Three-Pack Socks</p>
                                <div class="d-flex align-items-center justify-content-center mt-2">
                                    <h5>$7.86</h5><h6 class="text-muted ml-2"><del>$10.24</del></h6>
                                </div>
                            </div>
                        </div>
                                                
                        <div class="product-item bg-light">
                            <div class="product-img position-relative overflow-hidden">
                                <img class="img-fluid w-100" src="https://cdn-images.farfetch-contents.com/16/57/81/24/16578124_32705258_1000.jpg" alt="">
                            </div>
                            <div class="text-center py-4">
                                <a class="h6 text-decoration-none text-truncate" 
                                    href="https://www.farfetch.com/shopping/men/tom-ford-floral-print-swim-shorts-item-16578124.aspx?lang=en-US&fsb=1&size=19&storeid=12332&clickref=1101ly5F9x6u&utm_source=laurenlyst&utm_medium=affiliate&utm_campaign=PHUS&pid=performancehorizon_int&c=PHUS&clickid=1101ly5F9x6u&af_siteid=laurenlyst&af_cost_model=CPA&af_channel=affiliate&is_retargeting=true"
                                    target="_black">TOM FORD</a>
                                <p class="text-body">floral-print swim shorts</p>
                                <div class="d-flex align-items-center justify-content-center mt-2">
                                    <h5>$1,379</h5><h6 class="text-muted ml-2"><del></del></h6>
                                </div>
                            </div>
                        </div>
                                                
                    <div class="product-item bg-light">
                            <div class="product-img position-relative overflow-hidden">
                                <img class="img-fluid w-100" src="https://cdna.lystit.com/400/500/tr/photos/loewe/cdc9e2f9/loewe-Gold-Luxury-Draped-Hoodie-In-Suede.jpeg" alt="">
                            </div>
                            <div class="text-center py-4">
                                <a class="h6 text-decoration-none text-truncate" 
                                    href="https://www.loewe.com/usa/en/variation?pid=S359Y34L07-8130&dwvar_S359Y34L07-8130_Shared_size=3201?country=US&lang=EN&utm_source=Lyst+US&utm_medium=Affiliates&utm_campaign=LOEWE_Paulas_Ibiza_22&ranMID=47194&ranEAID=tZkYzve9Cvk&ranSiteID=tZkYzve9Cvk-vs4y737BJx9wo0v5Y_yYIQ"
                                    target="_black">Loewe</a>
                                <p class="text-body">Luxury Draped Hoodie In Suede</p>
                                <div class="d-flex align-items-center justify-content-center mt-2">
                                    <h5>$4,850</h5><h6 class="text-muted ml-2"><del></del></h6>
                                </div>
                            </div>
                        </div>
                                                
                    <div class="product-item bg-light">
                            <div class="product-img position-relative overflow-hidden">
                                <img class="img-fluid w-100" src="https://cdna.lystit.com/400/500/tr/photos/lvr/0ffe4e24/adidas-originals-Clear-Mint-Wales-Bonner-T-shirt.jpeg" alt="">
                            </div>
                            <div class="text-center py-4">
                                <a class="h6 text-decoration-none text-truncate" 
                                    href="https://www.luisaviaroma.com/en-us/p/adidas-originals/women/77I-XDA018?ColorId=Q0xFQVIgTUlOVA2&cjdata=MXxOfDB8WXww&%243p=a_cj_affiliate&%7Eclick_id=c3678180a26b11ee827500d50a18b8fa&%7Esecondary_publisher=8752526&%24canonical_url=https%3A%2F%2Fwww.luisaviaroma.com%2Fen-us%2Fp%2Fadidas-originals%2Fwomen%2F77I-XDA018%3FColorId%3DQ0xFQVIgTUlOVA2&AID=13327704&PID=8752526&SID=1377660853&utm_source=CommissionJunction&utm_medium=affiliate&utm_content=8752526&utm_campaign=5074095&CJEVENT=c3678180a26b11ee827500d50a18b8fa&click_id=c3678180a26b11ee827500d50a18b8fa&_branch_match_id=1258908271850767858&_branch_referrer=H4sIAAAAAAAAA8VR207DMAz9mvZtW9quTUCKUNkFDWmMCRh7q9wk3cJyqZp2hb8nnQQ8whuSrSMfW%2FaRz7Fta3c9mahzM4a6HitpTpMDP53Xd6%2BZgvKGvXFoga7375tqfkte930fBvE0qSkU7K2AqpJKQivCAC%2BYkuxUSE5ZkmESEQRxVkaRECTGKUI8RRCRklQwDDvBrOHQfBR1VyrpjqKhBKdxGmfDgQqUKsGv6xpFj4PKIMmDeOmj7%2Fux6qSDs4TGahgzqz0tzKhzHmufwCUHN7KNPEgDaqB7q4XxiPFqtJ%2FnKCJBspxZZZsVD5L5Fr0vt7vV4flFbXZ5PEhgYKyRDNR%2FachXcxolSYwxmoaPvvj6z9OlgXGWIZImYdfqwtmuYYLOrNbSOWnNfWdY6%2FHS1YLLTtMftwbS%2F78Vpv3eeuFA1yAPhqYIT9FVGs7uF7vFw%2FPvlv7Z%2FE9QyxIBcwIAAA%3D%3D"
                                    target="_black">adidas</a>
                                <p class="text-body">Wales Bonner Crochet-trimmed Color-block</p>
                                <div class="d-flex align-items-center justify-content-center mt-2">
                                    <h5>$50</h5><h6 class="text-muted ml-2"><del>$100</del></h6>
                                </div>
                            </div>
                        </div>
                                                
                    <div class="product-item bg-light">
                            <div class="product-img position-relative overflow-hidden">
                                <img class="img-fluid w-100" src="https://cdna.lystit.com/400/500/tr/photos/kickscrew/0dd2202b/nike-pink-Internationalist-Sd.jpeg" alt="">
                            </div>
                            <div class="text-center py-4">
                                <a class="h6 text-decoration-none text-truncate" 
                                    href="https://www.kickscrew.com/products/nike-wmns-internationalist-sd-prism-pink-919925-600?currency=USD&variant=42085400740035&irclickid=36RylEU4TxyPR3SwnrRjwTGLUkHx2v0fGV8y2o0&irgwc=1&partnerID=97233&Media=mediapartner&AdType=PRODUCT_CATALOG&utm_source=Impact&utm_medium=Lyst&utm_content=PRODUCT_CATALOG"
                                    target="_black">Nike</a>
                                <p class="text-body">Internationalist Sd - Pink</p>
                                <div class="d-flex align-items-center justify-content-center mt-2">
                                    <h5>$81,163</h5><h6 class="text-muted ml-2"><del></del></h6>
                                </div>
                            </div>
                        </div>
                                                                        
                        <div class="product-item bg-light">
                            <div class="product-img position-relative overflow-hidden">
                                <img class="img-fluid w-100" src="https://m.media-amazon.com/images/I/41o71jA9jCL._AC_SX569_.jpg" alt="">
                            </div>
                            <div class="text-center py-4">
                                <a class="h6 text-decoration-none text-truncate" 
                                    href="https://www.amazon.com/dp/B08KYMP611/ref=asc_df_B08KYMP6111702983600000?ascsubtag=1376015214&tag=lyst09-20"
                                    target="_black">adidas</a>
                                <p class="text-body">Originals Men's Trefoil Tee</p>
                                <div class="d-flex align-items-center justify-content-center mt-2">
                                    <h5>$11.93</h5><h6 class="text-muted ml-2"><del></del></h6>
                                </div>
                            </div>
                        </div>
                                                
                    <div class="product-item bg-light">
                            <div class="product-img position-relative overflow-hidden">
                                <img class="img-fluid w-100" src="https://cdna.lystit.com/520/650/n/photos/riverisland/8a6aeacc/river-island-Black-Black-Faux-Leather-Chelsea-Boots.jpeg" alt="">
                            </div>
                            <div class="text-center py-4">
                                <a class="h6 text-decoration-none text-truncate" 
                                    href="https://www.lyst.com/shoes/river-island-black-faux-leather-chelsea-boots-4/?reason=search-product-image&link_id=982689551&previous_page_type=search&previous_page_sub_type=filtered"
                                    target="_black">River Island</a>
                                <p class="text-body">Men's Black Faux Leather Chelsea Boots</p>
                                <div class="d-flex align-items-center justify-content-center mt-2">
                                    <h5>$89</h5><h6 class="text-muted ml-2"><del></del></h6>
                                </div>
                            </div>
                        </div>
                                                
                    <div class="product-item bg-light">
                            <div class="product-img position-relative overflow-hidden">
                                <img class="img-fluid w-100" src="https://cdn-images.farfetch-contents.com/17/23/95/88/17239588_35306298_1000.jpg" alt="">
                            </div>
                            <div class="text-center py-4">
                                <a class="h6 text-decoration-none text-truncate" 
                                    href="https://www.farfetch.com/shopping/men/jordan-air-jordan-1-retro-digi-camo-sneakers-item-17239588.aspx?lang=en-US&fsb=1&size=33&storeid=11218&clickref=1100ly5hCC4H&utm_source=laurenlyst&utm_medium=affiliate&utm_campaign=PHUS&pid=performancehorizon_int&c=PHUS&clickid=1100ly5hCC4H&af_siteid=laurenlyst&af_cost_model=CPA&af_channel=affiliate&is_retargeting=true"
                                    target="_black">NIKE</a>
                                <p class="text-body">Air Jordan 1 Retro "Digi-Camo" sneakers</p>
                                <div class="d-flex align-items-center justify-content-center mt-2">
                                    <h5>$10,773</h5><h6 class="text-muted ml-2"><del></del></h6>
                                </div>
                            </div>
                        </div>
                                                                        
                    <div class="product-item bg-light">
                            <div class="product-img position-relative overflow-hidden">
                                <img class="img-fluid w-100" src="https://cdna.lystit.com/400/500/tr/photos/shoppremiumoutlets/319d17aa/calvin-klein-beige-Block-Heel-Pointed-Toe-Ankle-Boots.jpeg" alt="">
                            </div>
                            <div class="text-center py-4">
                                <a class="h6 text-decoration-none text-truncate" 
                                    href="https://shoppremiumoutlets.com/products/womens-block-heel-pointed-toe-ankle-boots?variant=40646090915900&%243p=a_rakuten_marketing&ran_mid=50745&~click_id=tZkYzve9Cvk-og7ixOJnE5XicUm5J4AMpQ&utm_source=rakuten&utm_medium=affiliate&utm_content=Lyst+US&utm_campaign=15_507457804673710956733476&ranMID=50745&ranEAID=tZkYzve9Cvk&ranSiteID=tZkYzve9Cvk-og7ixOJnE5XicUm5J4AMpQ"
                                    target="_black">Calvin Klein</a>
                                <p class="text-body">Block Heel Pointed Toe Ankle Boots - Natural</p>
                                <div class="d-flex align-items-center justify-content-center mt-2">
                                    <h5>$39</h5><h6 class="text-muted ml-2"><del>$169</del></h6>
                                </div>
                            </div>
                        </div>
                                                
                    <div class="product-item bg-light">
                            <div class="product-img position-relative overflow-hidden">
                                <img class="img-fluid w-100" src="https://cdna.lystit.com/400/500/tr/photos/farfetch/e3d97fb8/dolce-gabbana-black-Iris-Crystal-embellished-34mm.jpeg" alt="">
                            </div>
                            <div class="text-center py-4">
                                <a class="h6 text-decoration-none text-truncate" 
                                    href="https://www.farfetch.com/shopping/women/dolce-gabbana-iris-crystal-embellished-34mm-item-17238869.aspx?lang=en-US&fsb=1&size=17&storeid=13097&clickref=1011ly6CqAPA&utm_source=laurenlyst&utm_medium=affiliate&utm_campaign=PHUS&pid=performancehorizon_int&c=PHUS&clickid=1011ly6CqAPA&af_siteid=laurenlyst&af_cost_model=CPA&af_channel=affiliate&is_retargeting=true"
                                    target="_black">Dolce & Gabbana</a>
                                <p class="text-body">Iris Crystal-embellished 34mm</p>
                                <div class="d-flex align-items-center justify-content-center mt-2">
                                    <h5>$16,600</h5><h6 class="text-muted ml-2"><del></del></h6>
                                </div>
                            </div>
                        </div>
                                                                        
                    <div class="product-item bg-light">
                            <div class="product-img position-relative overflow-hidden">
                                <img class="img-fluid w-100" src="https://cdna.lystit.com/400/500/tr/photos/parasolstore/29578de2/fjallraven-Kantarell-Fjallraven-Kanken-Keyring.jpeg" alt="">
                            </div>
                            <div class="text-center py-4">
                                <a class="h6 text-decoration-none text-truncate" 
                                    href="https://www.lyst.com/search/?category=belts&designer_slug=032c&designer_slug=1017-alyx-9sm&designer_slug=424&designer_slug=44-label-group&designer_slug=a-bathing-ape&designer_slug=apc&designer_slug=a_cold_wall&designer_slug=acne&designer_slug=acronym&designer_slug=adidas&designer_slug=adidas-originals&designer_slug=advisory-board-crystals-designer&designer_slug=alexander-mcqueen&designer_slug=all-saints&designer_slug=ami&designer_slug=amiri&designer_slug=ax-armani-exchange&designer_slug=awake-ny&designer_slug=balenciaga&designer_slug=balmain&designer_slug=barrow-designer&designer_slug=blue-sky-inn&designer_slug=bonsai-designer&designer_slug=boss-by-hugo-boss&designer_slug=brain-dead&designer_slug=burberry&designer_slug=calvin-klein&designer_slug=carhartt&designer_slug=cartier&designer_slug=casablanca-designer&designer_slug=champion&designer_slug=children-of-the-discordance&designer_slug=comme-des-garcons&designer_slug=comme-des-garcons-play&designer_slug=converse&designer_slug=deus-ex-machina&designer_slug=dior&designer_slug=dolce-gabbana&designer_slug=domrebel&designer_slug=doublet-designer&designer_slug=dsquared&designer_slug=endless-joy&designer_slug=fendi&designer_slug=erl-designer&designer_slug=falke&designer_slug=fear-of-god&designer_slug=fear-of-god-essentials&designer_slug=ferragamo&designer_slug=fila&designer_slug=fjallraven&designer_slug=givenchy&designer_slug=gucci&designer_slug=haculla&designer_slug=helmut-lang&designer_slug=heron-preston&designer_slug=g-shock&designer_slug=hugo&designer_slug=iceberg&designer_slug=icecream&designer_slug=ih-nom-uh-nit&designer_slug=jacquemus&designer_slug=jil-sander&designer_slug=just-cavalli&designer_slug=juunj&designer_slug=jw-anderson&designer_slug=kenzo&designer_slug=lacoste&designer_slug=lee-jeans&designer_slug=levis&designer_slug=loewe&designer_slug=lord-john-grey&designer_slug=louis-vuitton&designer_slug=maharishi&designer_slug=market&designer_slug=massimo-dutti&designer_slug=mastermind-japan&designer_slug=mastermind-world&designer_slug=mcm&designer_slug=m-i-s-b-h-v&designer_slug=mister-tee&designer_slug=moschino&designer_slug=moschino-couture&designer_slug=new-look&designer_slug=nike&designer_slug=obey&designer_slug=ocean-pacific&designer_slug=off-white-co-virgil-abloh&designer_slug=palace&designer_slug=palm-angels&designer_slug=paperboy&designer_slug=philipp-plein&designer_slug=polo-ralph-lauren&designer_slug=prada&designer_slug=pull-bear&designer_slug=puma&designer_slug=purple-brand&designer_slug=rassvet-paccbet&designer_slug=represent&designer_slug=river-island&designer_slug=saint-laurent&designer_slug=saint-michael&designer_slug=song-for-the-mute&designer_slug=stampd&designer_slug=stussy&designer_slug=sullen&designer_slug=supreme&designer_slug=the-north-face&designer_slug=timberland&designer_slug=tom-ford&designer_slug=topman&designer_slug=uniform-bridge&designer_slug=urban-outfitters-designer&designer_slug=uskees&designer_slug=valentino&designer_slug=valentino-garavani&designer_slug=vans&designer_slug=versace&designer_slug=versace-jeans&designer_slug=vetements&designer_slug=vtmnts&designer_slug=wacko-maria&designer_slug=waikei&designer_slug=we11done&designer_slug=weekday&gender=Women&product_type=Accessories&view=price_asc#slug=fjallraven-kanken-keyring-39"
                                    target="_black">Fjallraven</a>
                                <p class="text-body">Metallic Fjallraven Kanken Keyring</p>
                                <div class="d-flex align-items-center justify-content-center mt-2">
                                    <h5>$9.39</h5><h6 class="text-muted ml-2"><del>$11.05</del></h6>
                                </div>
                            </div>
                        </div>
                                                                        
                    <div class="product-item bg-light">
                            <div class="product-img position-relative overflow-hidden">
                                <img class="img-fluid w-100" src="https://images.riverisland.com/is/image/RiverIsland/black-derby-shoes_387981_main?$ProductImagePortraitLarge$" alt="">
                            </div>
                            <div class="text-center py-4">
                                <a class="h6 text-decoration-none text-truncate" 
                                    href="https://www.riverisland.com/us/p/black-derby-shoes-387981?ranMID=38434&ranEAID=tZkYzve9Cvk&ranSiteID=tZkYzve9Cvk-LFN5lxqh0I_Y1VJqnX4Suw&mid=38434&cur=USD&cmpid=af_Linkshare_US_PB_tZkYzve9Cvk_10&utm_source=Lyst+US&utm_medium=affiliates&utm_campaign=affiliates_US_Linkshare&siteID=tZkYzve9Cvk-LFN5lxqh0I_Y1VJqnX4Suw"
                                    target="_black">RiverIsland</a>
                                <p class="text-body">Black Derby Shoes</p>
                                <div class="d-flex align-items-center justify-content-center mt-2">
                                    <h5>$56.00</h5><h6 class="text-muted ml-2"><del></del></h6>
                                </div>
                            </div>
                        </div>
                                                
                    <div class="product-item bg-light">
                            <div class="product-img position-relative overflow-hidden">
                                <img class="img-fluid w-100" src="https://cdn-images.farfetch-contents.com/19/19/40/69/19194069_42013146_1000.jpg" alt="">
                            </div>
                            <div class="text-center py-4">
                                <a class="h6 text-decoration-none text-truncate" 
                                    href="https://www.farfetch.com/shopping/men/gucci-jordaan-crocodile-loafers-item-19194069.aspx?lang=en-US&fsb=1&size=38&storeid=10588&clickref=1011ly6695Wk&utm_source=laurenlyst&utm_medium=affiliate&utm_campaign=PHUS&pid=performancehorizon_int&c=PHUS&clickid=1011ly6695Wk&af_siteid=laurenlyst&af_cost_model=CPA&af_channel=affiliate&is_retargeting=true"
                                    target="_black">Gucci</a>
                                <p class="text-body">Jordaan crocodile loafers</p>
                                <div class="d-flex align-items-center justify-content-center mt-2">
                                    <h5>$3,900</h5><h6 class="text-muted ml-2"><del></del></h6>
                                </div>
                            </div>
                        </div>
                                                
                    <div class="product-item bg-light">
                            <div class="product-img position-relative overflow-hidden">
                                <img class="img-fluid w-100" src="https://cdna.lystit.com/520/650/n/photos/yardsstore/d4523884/fjallraven-Black-Fjallraven-Kanken-Keyring.jpeg" alt="">
                            </div>
                            <div class="text-center py-4">
                                <a class="h6 text-decoration-none text-truncate" 
                                    href="https://www.lyst.com/search/?category=belts&designer_slug=032c&designer_slug=1017-alyx-9sm&designer_slug=424&designer_slug=44-label-group&designer_slug=a-bathing-ape&designer_slug=apc&designer_slug=a_cold_wall&designer_slug=acne&designer_slug=acronym&designer_slug=adidas&designer_slug=adidas-originals&designer_slug=advisory-board-crystals-designer&designer_slug=alexander-mcqueen&designer_slug=all-saints&designer_slug=ami&designer_slug=amiri&designer_slug=ax-armani-exchange&designer_slug=awake-ny&designer_slug=balenciaga&designer_slug=balmain&designer_slug=barrow-designer&designer_slug=blue-sky-inn&designer_slug=bonsai-designer&designer_slug=boss-by-hugo-boss&designer_slug=brain-dead&designer_slug=burberry&designer_slug=calvin-klein&designer_slug=carhartt&designer_slug=cartier&designer_slug=casablanca-designer&designer_slug=champion&designer_slug=children-of-the-discordance&designer_slug=comme-des-garcons&designer_slug=comme-des-garcons-play&designer_slug=converse&designer_slug=deus-ex-machina&designer_slug=dior&designer_slug=dolce-gabbana&designer_slug=domrebel&designer_slug=doublet-designer&designer_slug=dsquared&designer_slug=endless-joy&designer_slug=fendi&designer_slug=erl-designer&designer_slug=falke&designer_slug=fear-of-god&designer_slug=fear-of-god-essentials&designer_slug=ferragamo&designer_slug=fila&designer_slug=fjallraven&designer_slug=givenchy&designer_slug=gucci&designer_slug=haculla&designer_slug=helmut-lang&designer_slug=heron-preston&designer_slug=g-shock&designer_slug=hugo&designer_slug=iceberg&designer_slug=icecream&designer_slug=ih-nom-uh-nit&designer_slug=jacquemus&designer_slug=jil-sander&designer_slug=just-cavalli&designer_slug=juunj&designer_slug=jw-anderson&designer_slug=kenzo&designer_slug=lacoste&designer_slug=lee-jeans&designer_slug=levis&designer_slug=loewe&designer_slug=lord-john-grey&designer_slug=louis-vuitton&designer_slug=maharishi&designer_slug=market&designer_slug=massimo-dutti&designer_slug=mastermind-japan&designer_slug=mastermind-world&designer_slug=mcm&designer_slug=m-i-s-b-h-v&designer_slug=mister-tee&designer_slug=moschino&designer_slug=moschino-couture&designer_slug=new-look&designer_slug=nike&designer_slug=obey&designer_slug=ocean-pacific&designer_slug=off-white-co-virgil-abloh&designer_slug=palace&designer_slug=palm-angels&designer_slug=paperboy&designer_slug=philipp-plein&designer_slug=polo-ralph-lauren&designer_slug=prada&designer_slug=pull-bear&designer_slug=puma&designer_slug=purple-brand&designer_slug=rassvet-paccbet&designer_slug=represent&designer_slug=river-island&designer_slug=saint-laurent&designer_slug=saint-michael&designer_slug=song-for-the-mute&designer_slug=stampd&designer_slug=stussy&designer_slug=sullen&designer_slug=supreme&designer_slug=the-north-face&designer_slug=timberland&designer_slug=tom-ford&designer_slug=topman&designer_slug=uniform-bridge&designer_slug=urban-outfitters-designer&designer_slug=uskees&designer_slug=valentino&designer_slug=valentino-garavani&designer_slug=vans&designer_slug=versace&designer_slug=versace-jeans&designer_slug=vetements&designer_slug=vtmnts&designer_slug=wacko-maria&designer_slug=waikei&designer_slug=we11done&designer_slug=weekday&gender=men&product_type=Accessories&view=price_asc&page=4#slug=fjallraven-kanken-keyring-26"
                                    target="_black">Fjallraven</a>
                                <p class="text-body">Black Fjallraven Kanken Keyring</p>
                                <div class="d-flex align-items-center justify-content-center mt-2">
                                    <h5>$11.02</h5><h6 class="text-muted ml-2"><del></del></h6>
                                </div>
                            </div>
                        </div>
                                                                        
                    <div class="product-item bg-light">
                            <div class="product-img position-relative overflow-hidden">
                                <img class="img-fluid w-100" src="https://cdna.lystit.com/400/500/tr/photos/cettire/7cc831e9/prada-Black-Logo-plaque-Embossed-Backpack.jpeg" alt="">
                            </div>
                            <div class="text-center py-4">
                                <a class="h6 text-decoration-none text-truncate" 
                                    href="https://www.cettire.com/la/products/prada-logo-plaque-embossed-backpack-932198704/cmVhY3Rpb24vcHJvZHVjdDpXcGZEMmdkOEdGa0VHMnp4ZA%3D%3D?clickref=1100ly5YcPsx"
                                    target="_black">Prada</a>
                                <p class="text-body">Borsa - Black</p>
                                <div class="d-flex align-items-center justify-content-center mt-2">
                                    <h5>$7,579.09</h5><h6 class="text-muted ml-2"><del></del></h6>
                                </div>
                            </div>
                        </div>
                                                
                    <div class="product-item bg-light">
                            <div class="product-img position-relative overflow-hidden">
                                <img class="img-fluid w-100" src="https://cdna.lystit.com/400/500/tr/photos/amazon-prime/00101b35/adidas-originals-BlackPride-Simple-Tote-Bag.jpeg" alt="">
                            </div>
                            <div class="text-center py-4">
                                <a class="h6 text-decoration-none text-truncate" 
                                    href="https://www.amazon.com/dp/B09CG1FP2B/ref=asc_df_B09CG1FP2B1703588400000?tag=lyst09-20&ascsubtag=1379016336"
                                    target="_black">adidas</a>
                                <p class="text-body">Simple Tote Bag - Black</p>
                                <div class="d-flex align-items-center justify-content-center mt-2">
                                    <h5>$26</h5><h6 class="text-muted ml-2"><del>$30</del></h6>
                                </div>
                            </div>
                        </div>
                                                
                    <div class="product-item bg-light">
                            <div class="product-img position-relative overflow-hidden">
                                <img class="img-fluid w-100" src="https://cdna.lystit.com/400/500/tr/photos/farfetch/3fe87cb4/dolce-gabbana-silver-Bague-Sicily-a-ornements.jpeg" alt="">
                            </div>
                            <div class="text-center py-4">
                                <a class="h6 text-decoration-none text-truncate" 
                                    href="https://www.farfetch.com/shopping/women/dolce-gabbana-sicily-diamond-embellished-ring-item-15959112.aspx?lang=en-US&fsb=1&size=17&storeid=13172&clickref=1100ly64BQwE&utm_source=laurenlyst&utm_medium=affiliate&utm_campaign=PHUS&pid=performancehorizon_int&c=PHUS&clickid=1100ly64BQwE&af_siteid=laurenlyst&af_cost_model=CPA&af_channel=affiliate&is_retargeting=true"
                                    target="_black">Dolce & Gabbana</a>
                                <p class="text-body">Sicily Diamond-embellished Ring</p>
                                <div class="d-flex align-items-center justify-content-center mt-2">
                                    <h5>$35,100</h5><h6 class="text-muted ml-2"><del></del></h6>
                                </div>
                            </div>
                        </div>
                                                                        
                    <div class="product-item bg-light">
                            <div class="product-img position-relative overflow-hidden">
                                <img class="img-fluid w-100" src="https://cdna.lystit.com/400/500/tr/photos/neimanmarcus/082949df/versace-BLACK-BLACK-Dv-One-Automatic-Ceramic-Bracelet-Watch-40mm.jpeg" alt="">
                            </div>
                            <div class="text-center py-4">
                                <a class="h6 text-decoration-none text-truncate" 
                                    href="https://www.neimanmarcus.com/en-la/p/versace-mens-dv-one-automatic-ceramic-bracelet-watch-40mm-prod260160004?ecid=NMAF_RK_Lyst+US&CS_003=5630585&utm_medium=affiliate&utm_source=NMAF__Lyst+US&ranSiteID=tZkYzve9Cvk-JthbLUT.sXVwVohFxFcyww"
                                    target="_black">Versace</a>
                                <p class="text-body">Dv One Automatic Ceramic Bracelet Watch</p>
                                <div class="d-flex align-items-center justify-content-center mt-2">
                                    <h5>$2,995</h5><h6 class="text-muted ml-2"><del></del></h6>
                                </div>
                            </div>
                        </div>
                                                
                    <div class="product-item bg-light">
                            <div class="product-img position-relative overflow-hidden">
                                <img class="img-fluid w-100" src="https://www.yoox.com/images/items/50/50322830EP_14_f.jpg?impolicy=crop&width=387&height=490" alt="">
                            </div>
                            <div class="text-center py-4">
                                <a class="h6 text-decoration-none text-truncate" 
                                    href="https://www.yoox.com/us/50322830EP/item?utm_source=rakuten&siteID=tZkYzve9Cvk-mu27AQ0skXNlIHqOk.km_g&utm_medium=affiliation-rs&utm_campaign=us_3341494&utm_content=Lyst%20US&ranMID=24285&ranEAID=tZkYzve9Cvk&ranSiteID=tZkYzve9Cvk-mu27AQ0skXNlIHqOk.km_g&tp=11333#cod10=50322830EP&sizeId=1"
                                    target="_black">BOSS</a>
                                <p class="text-body">Cufflinks and Tie Clips</p>
                                <div class="d-flex align-items-center justify-content-center mt-2">
                                    <h5>$ 75.00</h5><h6 class="text-muted ml-2"><del>$ 109.00</del></h6>
                                </div>
                            </div>
                        </div>
                                                
                    <div class="product-item bg-light">
                            <div class="product-img position-relative overflow-hidden">
                                <img class="img-fluid w-100" src="https://cdna.lystit.com/400/500/tr/photos/shoppremiumoutlets/085df6f8/louis-vuitton-brown-Canvas-Clutch-Bag-pre-owned.jpeg" alt="">
                            </div>
                            <div class="text-center py-4">
                                <a class="h6 text-decoration-none text-truncate" 
                                    href="https://shoppremiumoutlets.com/products/louis-vuitton-canvas-clutch-bag-pre-owned-9?variant=40893359128636&%243p=a_rakuten_marketing&ran_mid=50745&~click_id=tZkYzve9Cvk-Bt_OUz3sFFiq4CpXtFciAw&utm_source=rakuten&utm_medium=affiliate&utm_content=Lyst+US&utm_campaign=15_507457612556220408125085&ranMID=50745&ranEAID=tZkYzve9Cvk&ranSiteID=tZkYzve9Cvk-Bt_OUz3sFFiq4CpXtFciAw"
                                    target="_black">Louis Vuitton</a>
                                <p class="text-body">Canvas Clutch Bag (pre-owned)</p>
                                <div class="d-flex align-items-center justify-content-center mt-2">
                                    <h5>$4,628.20</h5><h6 class="text-muted ml-2"><del>$6,666</del></h6>
                                </div>
                            </div>
                        </div>
                                                                        
                    <div class="product-item bg-light">
                            <div class="product-img position-relative overflow-hidden">
                                <img class="img-fluid w-100" src="https://cdna.lystit.com/400/500/tr/photos/frmoda/f59a47ac/moschino-pink-Bracciale-logo-lettering.jpeg" alt="">
                            </div>
                            <div class="text-center py-4">
                                <a class="h6 text-decoration-none text-truncate" 
                                    href="https://www.frmoda.com/en_hk/moschino-logo-lettering-bracelet-woman-3227a77648008225-000429250078?utm_source=RakutenMarketing&utm_medium=Affiliate&utm_campaign=3341494:Lyst%20US&utm_content=10:1&utm_term=UKNetwork&ranMID=43101&ranEAID=3341494&ranSiteID=tZkYzve9Cvk-RxTJB6v3I5E6yh8PTdg5jQ"
                                    target="_black">Moschino</a>
                                <p class="text-body">Logo Lettering Leather Bracelet</p>
                                <div class="d-flex align-items-center justify-content-center mt-2">
                                    <h5>$100.50</h5><h6 class="text-muted ml-2"><del>$134</del></h6>
                                </div>
                            </div>
                        </div>
                                                                        
                    <div class="product-item bg-light">
                            <div class="product-img position-relative overflow-hidden">
                                <img class="img-fluid w-100" src="https://cdna.lystit.com/400/500/tr/photos/pianoluigi/429f3f29/gucci-Black-Swimsuit.jpeg" alt="">
                            </div>
                            <div class="text-center py-4">
                                <a class="h6 text-decoration-none text-truncate" 
                                    href="https://www.lyst.com/search/?category=beachwear&designer_slug=032c&designer_slug=1017-alyx-9sm&designer_slug=424&designer_slug=44-label-group&designer_slug=a-bathing-ape&designer_slug=apc&designer_slug=a_cold_wall&designer_slug=acne&designer_slug=acronym&designer_slug=adidas&designer_slug=adidas-originals&designer_slug=advisory-board-crystals-designer&designer_slug=alexander-mcqueen&designer_slug=all-saints&designer_slug=ami&designer_slug=amiri&designer_slug=ax-armani-exchange&designer_slug=awake-ny&designer_slug=balenciaga&designer_slug=balmain&designer_slug=barrow-designer&designer_slug=blue-sky-inn&designer_slug=bonsai-designer&designer_slug=boss-by-hugo-boss&designer_slug=brain-dead&designer_slug=burberry&designer_slug=calvin-klein&designer_slug=carhartt&designer_slug=cartier&designer_slug=casablanca-designer&designer_slug=champion&designer_slug=children-of-the-discordance&designer_slug=comme-des-garcons&designer_slug=comme-des-garcons-play&designer_slug=converse&designer_slug=deus-ex-machina&designer_slug=dior&designer_slug=dolce-gabbana&designer_slug=domrebel&designer_slug=doublet-designer&designer_slug=dsquared&designer_slug=endless-joy&designer_slug=fendi&designer_slug=erl-designer&designer_slug=falke&designer_slug=fear-of-god&designer_slug=fear-of-god-essentials&designer_slug=ferragamo&designer_slug=fila&designer_slug=fjallraven&designer_slug=givenchy&designer_slug=gucci&designer_slug=haculla&designer_slug=helmut-lang&designer_slug=heron-preston&designer_slug=g-shock&designer_slug=hugo&designer_slug=iceberg&designer_slug=icecream&designer_slug=ih-nom-uh-nit&designer_slug=jacquemus&designer_slug=jil-sander&designer_slug=just-cavalli&designer_slug=juunj&designer_slug=jw-anderson&designer_slug=kenzo&designer_slug=lacoste&designer_slug=lee-jeans&designer_slug=levis&designer_slug=loewe&designer_slug=lord-john-grey&designer_slug=louis-vuitton&designer_slug=maharishi&designer_slug=market&designer_slug=massimo-dutti&designer_slug=mastermind-japan&designer_slug=mastermind-world&designer_slug=mcm&designer_slug=m-i-s-b-h-v&designer_slug=mister-tee&designer_slug=moschino&designer_slug=moschino-couture&designer_slug=new-look&designer_slug=nike&designer_slug=obey&designer_slug=ocean-pacific&designer_slug=off-white-co-virgil-abloh&designer_slug=palace&designer_slug=palm-angels&designer_slug=paperboy&designer_slug=philipp-plein&designer_slug=polo-ralph-lauren&designer_slug=prada&designer_slug=pull-bear&designer_slug=puma&designer_slug=purple-brand&designer_slug=rassvet-paccbet&designer_slug=represent&designer_slug=river-island&designer_slug=saint-laurent&designer_slug=saint-michael&designer_slug=song-for-the-mute&designer_slug=stampd&designer_slug=stussy&designer_slug=sullen&designer_slug=supreme&designer_slug=the-north-face&designer_slug=timberland&designer_slug=tom-ford&designer_slug=topman&designer_slug=uniform-bridge&designer_slug=urban-outfitters-designer&designer_slug=uskees&designer_slug=valentino&designer_slug=valentino-garavani&designer_slug=vans&designer_slug=versace&designer_slug=versace-jeans&designer_slug=vetements&designer_slug=vtmnts&designer_slug=wacko-maria&designer_slug=waikei&designer_slug=we11done&designer_slug=weekday&gender=Women&product_type=Clothing&view=price_desc"
                                    target="_black">Gucci</a>
                                <p class="text-body">Sparkling Jersey Swimsuit </p>
                                <div class="d-flex align-items-center justify-content-center mt-2">
                                    <h5>$2,078.05</h5><h6 class="text-muted ml-2"><del>$2,710.50</del></h6>
                                </div>
                            </div>
                        </div>
                                                
                    <div class="product-item bg-light">
                            <div class="product-img position-relative overflow-hidden">
                                <img class="img-fluid w-100" src="https://cdna.lystit.com/400/500/tr/photos/macys/8116dfa3/calvin-klein-Tin-Petite-Cropped-Open-Front-Jacket-Abstract-Print-Mock-Neck-Ruffle-Sleeve-Blouse-Knee-Length-Side-Zip-Skirt.jpeg" alt="">
                            </div>
                            <div class="text-center py-4">
                                <a class="h6 text-decoration-none text-truncate" 
                                    href="https://www.macys.com/shop/product/calvin-klein-petite-cropped-open-front-jacket-abstract-print-mock-neck-ruffle-sleeve-blouse-knee-length-side-zip-skirt?cjdata=MXxOfDB8WXww&ID=16994806&cjevent=00c9dba1a26c11ee83d101a60a18b8f9&clickid=00c9dba1a26c11ee83d101a60a18b8f9&m_sc=aff&m_sb=aff&m_pl=Lyst+Ltd&m_si=8172428"
                                    target="_black">Calvin Klein</a>
                                <p class="text-body">Petite Cropped Open Front Jacket Abstract </p>
                                <div class="d-flex align-items-center justify-content-center mt-2">
                                    <h5>$50.14</h5><h6 class="text-muted ml-2"><del>$79</del></h6>
                                </div>
                            </div>
                        </div>
                                                                        
                    <div class="product-item bg-light">
                            <div class="product-img position-relative overflow-hidden">
                                <img class="img-fluid w-100" src="https://cdna.lystit.com/400/500/tr/photos/farfetch/4620720c/gucci-black-Jumbo-GG-Leather-Backpack.jpeg" alt="">
                            </div>
                            <div class="text-center py-4">
                                <a class="h6 text-decoration-none text-truncate" 
                                    href="https://www.farfetch.com/shopping/men/gucci-jumbo-gg-leather-backpack-item-20258300.aspx?lang=en-US&fsb=1&size=17&storeid=10644&clickref=1100ly5nfeIS&utm_source=laurenlyst&utm_medium=affiliate&utm_campaign=PHUS&pid=performancehorizon_int&c=PHUS&clickid=1100ly5nfeIS&af_siteid=laurenlyst&af_cost_model=CPA&af_channel=affiliate&is_retargeting=true"
                                    target="_black">Gucci</a>
                                <p class="text-body">Jumbo GG leather backpack</p>
                                <div class="d-flex align-items-center justify-content-center mt-2">
                                    <h5>$3,890</h5><h6 class="text-muted ml-2"><del></del></h6>
                                </div>
                            </div>
                        </div>
                                                
                    <div class="product-item bg-light">
                            <div class="product-img position-relative overflow-hidden">
                                <img class="img-fluid w-100" src="https://cdna.lystit.com/400/500/tr/photos/dsw/ce85aa6e/adidas-Black-Defender-Iv-Medium-Duffle-Bag.jpeg" alt="">
                            </div>
                            <div class="text-center py-4">
                                <a class="h6 text-decoration-none text-truncate" 
                                    href="https://www.dsw.com/en/us/product/-/541408?activeColor=Black&clickid=36RylEU4TxyPR3SwnrRjwTGLUkH0PKw:aTBPzo0&irgwc=1&cm_mmc=affil-_-Lyst"
                                    target="_black">adidas</a>
                                <p class="text-body">Defender Iv Medium Duffle Bag</p>
                                <div class="d-flex align-items-center justify-content-center mt-2">
                                    <h5>$33.98</h5><h6 class="text-muted ml-2"><del>$45</del></h6>
                                </div>
                            </div>
                        </div>
                                                
                    <div class="product-item bg-light">
                            <div class="product-img position-relative overflow-hidden">
                                <img class="img-fluid w-100" src="https://cdna.lystit.com/400/500/tr/photos/farfetch/bfecdda9/prada-Black-Leather-Triangle-Shoulder-Bag.jpeg" alt="">
                            </div>
                            <div class="text-center py-4">
                                <a class="h6 text-decoration-none text-truncate" 
                                    href="https://www.farfetch.com/shopping/men/prada-leather-triangle-shoulder-bag-item-18195301.aspx?lang=en-US&fsb=1&size=17&storeid=11241&clickref=1011ly6bp2QG&utm_source=laurenlyst&utm_medium=affiliate&utm_campaign=PHUS&pid=performancehorizon_int&c=PHUS&clickid=1011ly6bp2QG&af_siteid=laurenlyst&af_cost_model=CPA&af_channel=affiliate&is_retargeting=true"
                                    target="_black">PRADA</a>
                                <p class="text-body">Leather Triangle Shoulder Bag</p>
                                <div class="d-flex align-items-center justify-content-center mt-2">
                                    <h5>$3,350</h5><h6 class="text-muted ml-2"><del></del></h6>
                                </div>
                            </div>
                        </div>
                                                                                                
                    <div class="product-item bg-light">
                            <div class="product-img position-relative overflow-hidden">
                                <img class="img-fluid w-100" src="https://cdna.lystit.com/400/500/c/photos/balenciaga/cd1c1c5e/balenciaga-White-Technoclog.jpeg" alt="">
                            </div>
                            <div class="text-center py-4">
                                <a class="h6 text-decoration-none text-truncate" 
                                    href="https://www.balenciaga.com/en-us/technoclog--crystal-813016099.html?&utm_content=Technoclog+&tp=53670&utm_campaign=Lyst+US&utm_content=15&utm_medium=affiliate&utm_source=linkshare&ranMID=38847&ranEAID=3341494&ranSiteID=tZkYzve9Cvk-UHmFM7NTttqYdqk3xfZCfg"
                                    target="_black">Balenciaga</a>
                                <p class="text-body">Technoclog White - Gray</p>
                                <div class="d-flex align-items-center justify-content-center mt-2">
                                    <h5>$8,350</h5><h6 class="text-muted ml-2"><del></del></h6>
                                </div>
                            </div>
                        </div>
                                                
                    <div class="product-item bg-light">
                            <div class="product-img position-relative overflow-hidden">
                                <img class="img-fluid w-100" src="https://cdna.lystit.com/400/500/tr/photos/dressinn/35d0f16f/puma-Silver-Cool-Cat-Distressed-Slides.jpeg" alt="">
                            </div>
                            <div class="text-center py-4">
                                <a class="h6 text-decoration-none text-truncate" 
                                    href="https://www.tradeinn.com/dressinn/en/puma-cool-cat-distressed-slides/139002205/p?utm_medium=afiliados&id_producte=16459343&country=US&utm_source=CJ"
                                    target="_black">PUMA</a>
                                <p class="text-body">Cool Cat Distressed Slides</p>
                                <div class="d-flex align-items-center justify-content-center mt-2">
                                    <h5>$14.49</h5><h6 class="text-muted ml-2"><del></del></h6>
                                </div>
                            </div>
                        </div>
                                                                        
                    <div class="product-item bg-light">
                            <div class="product-img position-relative overflow-hidden">
                                <img class="img-fluid w-100" src="https://cdna.lystit.com/400/500/tr/photos/nordstrom/591cf154/versace-Optical-White-Palladium-La-Medusa-Crystal-Encrusted-Wallet-On-A-Chain.jpeg" alt="">
                            </div>
                            <div class="text-center py-4">
                                <a class="h6 text-decoration-none text-truncate" 
                                    href="https://www.nordstrom.com/s/la-medusa-crystal-encrusted-wallet-on-a-chain/7187281?siteid=tZkYzve9Cvk-U.3e1v8UW7x9Vg0Dp6ofzw&color=OPTICAL+WHITE%2F+PALLADIUM&mid=1237&utm_source=rakuten&utm_campaign=tZkYzve9Cvk&utm_content=12371865135011198840510&utm_term=1476273&utm_channel=low_nd_affiliates_shopping&sp_source=rakuten&sp_campaign=tZkYzve9Cvk&utm_medium=affiliate_shopping"
                                    target="_black">Versace</a>
                                <p class="text-body">La Medusa Crystal Encrusted Wallet</p>
                                <div class="d-flex align-items-center justify-content-center mt-2">
                                    <h5>$2,400</h5><h6 class="text-muted ml-2"><del></del></h6>
                                </div>
                            </div>
                        </div>
                                                                        
                    <div class="product-item bg-light">
                            <div class="product-img position-relative overflow-hidden">
                                <img class="img-fluid w-100" src="https://cdna.lystit.com/400/500/n/photos/slamjamsocialism/cfcbc9a4/adidas-originals-White-Sean-Wotherspoon-X-Hot-Wheels-Logo-Tote-Bag.jpeg" alt="">
                            </div>
                            <div class="text-center py-4">
                                <a class="h6 text-decoration-none text-truncate" 
                                    href="https://row.slamjam.com/products/adidas-accessories-shopper-white-j237891?cjdata=MXxOfDB8WXww&cjevent=cbca5df4a0d911ee81216dc70a18ba73&utm_source=cj&utm_medium=affiliation&utm_campaign=%5BCJ%5D_ECOM_affiliation_Lyst+Ltd&utm_content=4809382&PID=8172428&shpxid=3272165b-c4f9-4f04-aa4e-aafee6cb436f"
                                    target="_black">adidas</a>
                                <p class="text-body">Sean Wotherspoon X Hot Wheels Logo</p>
                                <div class="d-flex align-items-center justify-content-center mt-2">
                                    <h5>$23</h5><h6 class="text-muted ml-2"><del></del>$45</h6>
                                </div>
                            </div>
                        </div>
                                                
                    <div class="product-item bg-light">
                            <div class="product-img position-relative overflow-hidden">
                                <img class="img-fluid w-100" src="https://images.selfridges.com/is/image/selfridges/852-10134-CRB6062615_YELLOWGOLD_M?wid=476&hei=634&fmt=webp&qlt=80,1&bgc=F6F6F6&extend=-18,0,-18,0" alt="">
                            </div>
                            <div class="text-center py-4">
                                <a class="h6 text-decoration-none text-truncate" 
                                    href="https://www.selfridges.com/US/en/cat/cartierjuste-un-clou-small-model-18ct-yellow-gold-bracelet_852-10134-CRB6062615/?utm_source=partnerize&utm_medium=affil&utm_campaign=na_na_na_na_na_na&utm_term=1100ly5zoYPm&utm_content=laurenlyst&clickref=1100ly5zoYPm#colour=yellow%20gold"
                                    target="_black">Cartier</a>
                                <p class="text-body">Model 18ct Yellow-gold Bracelet - Metallic</p>
                                <div class="d-flex align-items-center justify-content-center mt-2">
                                    <h5>$3,775</h5><h6 class="text-muted ml-2"><del></del></h6>
                                </div>
                            </div>
                        </div>
                                                                        
                    <div class="product-item bg-light">
                            <div class="product-img position-relative overflow-hidden">
                                <img class="img-fluid w-100" src="https://cdna.lystit.com/400/500/tr/photos/ssense/149c0492/givenchy-040-SILVERY-Silver-Thin-Ring.jpeg" alt="">
                            </div>
                            <div class="text-center py-4">
                                <a class="h6 text-decoration-none text-truncate" 
                                    href="https://www.lyst.com/search/?category=rings&designer_slug=032c&designer_slug=1017-alyx-9sm&designer_slug=424&designer_slug=44-label-group&designer_slug=a-bathing-ape&designer_slug=apc&designer_slug=a_cold_wall&designer_slug=acne&designer_slug=acronym&designer_slug=adidas&designer_slug=adidas-originals&designer_slug=advisory-board-crystals-designer&designer_slug=alexander-mcqueen&designer_slug=all-saints&designer_slug=ami&designer_slug=amiri&designer_slug=ax-armani-exchange&designer_slug=awake-ny&designer_slug=balenciaga&designer_slug=balmain&designer_slug=barrow-designer&designer_slug=blue-sky-inn&designer_slug=bonsai-designer&designer_slug=boss-by-hugo-boss&designer_slug=brain-dead&designer_slug=burberry&designer_slug=calvin-klein&designer_slug=carhartt&designer_slug=cartier&designer_slug=casablanca-designer&designer_slug=champion&designer_slug=children-of-the-discordance&designer_slug=comme-des-garcons&designer_slug=comme-des-garcons-play&designer_slug=converse&designer_slug=deus-ex-machina&designer_slug=dior&designer_slug=dolce-gabbana&designer_slug=domrebel&designer_slug=doublet-designer&designer_slug=dsquared&designer_slug=endless-joy&designer_slug=fendi&designer_slug=erl-designer&designer_slug=falke&designer_slug=fear-of-god&designer_slug=fear-of-god-essentials&designer_slug=ferragamo&designer_slug=fila&designer_slug=fjallraven&designer_slug=givenchy&designer_slug=gucci&designer_slug=haculla&designer_slug=helmut-lang&designer_slug=heron-preston&designer_slug=g-shock&designer_slug=hugo&designer_slug=iceberg&designer_slug=icecream&designer_slug=ih-nom-uh-nit&designer_slug=jacquemus&designer_slug=jil-sander&designer_slug=just-cavalli&designer_slug=juunj&designer_slug=jw-anderson&designer_slug=kenzo&designer_slug=lacoste&designer_slug=lee-jeans&designer_slug=levis&designer_slug=loewe&designer_slug=lord-john-grey&designer_slug=louis-vuitton&designer_slug=maharishi&designer_slug=market&designer_slug=massimo-dutti&designer_slug=mastermind-japan&designer_slug=mastermind-world&designer_slug=mcm&designer_slug=m-i-s-b-h-v&designer_slug=mister-tee&designer_slug=moschino&designer_slug=moschino-couture&designer_slug=new-look&designer_slug=nike&designer_slug=obey&designer_slug=ocean-pacific&designer_slug=off-white-co-virgil-abloh&designer_slug=palace&designer_slug=palm-angels&designer_slug=paperboy&designer_slug=philipp-plein&designer_slug=polo-ralph-lauren&designer_slug=prada&designer_slug=pull-bear&designer_slug=puma&designer_slug=purple-brand&designer_slug=rassvet-paccbet&designer_slug=represent&designer_slug=river-island&designer_slug=saint-laurent&designer_slug=saint-michael&designer_slug=song-for-the-mute&designer_slug=stampd&designer_slug=stussy&designer_slug=sullen&designer_slug=supreme&designer_slug=the-north-face&designer_slug=timberland&designer_slug=tom-ford&designer_slug=topman&designer_slug=uniform-bridge&designer_slug=urban-outfitters-designer&designer_slug=uskees&designer_slug=valentino&designer_slug=valentino-garavani&designer_slug=vans&designer_slug=versace&designer_slug=versace-jeans&designer_slug=vetements&designer_slug=vtmnts&designer_slug=wacko-maria&designer_slug=waikei&designer_slug=we11done&designer_slug=weekday&gender=men&product_type=Jewelry&view=price_asc&page=4#slug=givenchy-silver-thin-ring"
                                    target="_black">GIVENCHY</a>
                                <p class="text-body">Men's Metallic Silver Thin Ring</p>
                                <div class="d-flex align-items-center justify-content-center mt-2">
                                    <h5>$132.00</h5><h6 class="text-muted ml-2"><del>$220.00</del></h6>
                                </div>
                            </div>
                        </div>
                                                                        
                    <div class="product-item bg-light">
                            <div class="product-img position-relative overflow-hidden">
                                <img class="img-fluid w-100" src="https://cdna.lystit.com/400/500/tr/photos/farfetch/cbe6f859/m-i-s-b-h-v-Neutrals-Monogram-print-Face-Mask.jpeg" alt="">
                            </div>
                            <div class="text-center py-4">
                                <a class="h6 text-decoration-none text-truncate" 
                                    href="https://www.farfetch.com/shopping/men/misbhv-monogram-print-face-mask-item-18912569.aspx?lang=en-US&fsb=1&size=22&storeid=13639&clickref=1101ly6qzrWE&utm_source=laurenlyst&utm_medium=affiliate&utm_campaign=PHUS&pid=performancehorizon_int&c=PHUS&clickid=1101ly6qzrWE&af_siteid=laurenlyst&af_cost_model=CPA&af_channel=affiliate&is_retargeting=true"
                                    target="_black">MISBHV</a>
                                <p class="text-body">Monogram-print Face Mask</p>
                                <div class="d-flex align-items-center justify-content-center mt-2">
                                    <h5>$28</h5><h6 class="text-muted ml-2"><del>$35</del></h6>
                                </div>
                            </div>
                        </div>
                                                                        
                    <div class="product-item bg-light">
                            <div class="product-img position-relative overflow-hidden">
                                <img class="img-fluid w-100" src="https://cdna.lystit.com/400/500/tr/photos/baltini/6db33898/prada-BLACK-Key-Tag.jpeg" alt="">
                            </div>
                            <div class="text-center py-4">
                                <a class="h6 text-decoration-none text-truncate" 
                                    href="https://www.lyst.com/bags/prada-key-tag-27/"
                                    target="_black">Prada</a>
                                <p class="text-body">Key Tag - Blue</p>
                                <div class="d-flex align-items-center justify-content-center mt-2">
                                    <h5>$840</h5><h6 class="text-muted ml-2"><del>$1,260</del></h6>
                                </div>
                            </div>
                        </div>
                                                
                    <div class="product-item bg-light">
                            <div class="product-img position-relative overflow-hidden">
                                <img class="img-fluid w-100" src="https://cdna.lystit.com/400/500/tr/photos/macys/28eecd01/fjallraven-Black-Rainbow-Pattern-Kanken-Rainbow-straps-Sling-Bag.jpeg" alt="">
                            </div>
                            <div class="text-center py-4">
                                <a class="h6 text-decoration-none text-truncate" 
                                    href="https://www.macys.com/shop/product/fjallraven-kanken-rainbow-straps-sling-bag?cjdata=MXxOfDB8WXww&ID=16037322&cjevent=f7ed9c3da49011ee8135381c0a18b8f8&clickid=f7ed9c3da49011ee8135381c0a18b8f8&m_sc=aff&m_sb=aff&m_pl=Lyst+Ltd&m_si=8172428"
                                    target="_black">Fjallraven</a>
                                <p class="text-body">Kanken Rainbow-straps Sling Bag</p>
                                <div class="d-flex align-items-center justify-content-center mt-2">
                                    <h5>$75</h5><h6 class="text-muted ml-2"><del></del></h6>
                                </div>
                            </div>
                        </div>
                                                                        
                    <div class="product-item bg-light">
                            <div class="product-img position-relative overflow-hidden">
                                <img class="img-fluid w-100" src="https://cdna.lystit.com/400/500/tr/photos/farfetch/5d76f79b/dolce-gabbana-gold-18kt-Yellow-Gold-Diamond-Crown-Brooch.jpeg" alt="">
                            </div>
                            <div class="text-center py-4">
                                <a class="h6 text-decoration-none text-truncate" 
                                    href="https://www.farfetch.com/shopping/men/dolce-gabbana-18kt-yellow-gold-diamond-crown-brooch-item-15960387.aspx?lang=en-US&fsb=1&size=17&storeid=13097&clickref=1100ly5zp5Gq&utm_source=laurenlyst&utm_medium=affiliate&utm_campaign=PHUS&pid=performancehorizon_int&c=PHUS&clickid=1100ly5zp5Gq&af_siteid=laurenlyst&af_cost_model=CPA&af_channel=affiliate&is_retargeting=true"
                                    target="_black">Dolce & Gabbana</a>
                                <p class="text-body">18kt Yellow Gold Diamond Crown Brooch</p>
                                <div class="d-flex align-items-center justify-content-center mt-2">
                                    <h5>$8,445</h5><h6 class="text-muted ml-2"><del></del></h6>
                                </div>
                            </div>
                        </div>
                                                
                    <div class="product-item bg-light">
                            <div class="product-img position-relative overflow-hidden">
                                <img class="img-fluid w-100" src="https://cdna.lystit.com/400/500/tr/photos/ssense/a7353ce2/off-white-co-virgil-abloh-WHITE-Off-Arrow-Pendant-Keychain.jpeg" alt="">
                            </div>
                            <div class="text-center py-4">
                                <a class="h6 text-decoration-none text-truncate" 
                                    href="https://www.lyst.com/search/?category=necklaces&designer_slug=032c&designer_slug=1017-alyx-9sm&designer_slug=424&designer_slug=44-label-group&designer_slug=a-bathing-ape&designer_slug=apc&designer_slug=a_cold_wall&designer_slug=acne&designer_slug=acronym&designer_slug=adidas&designer_slug=adidas-originals&designer_slug=advisory-board-crystals-designer&designer_slug=alexander-mcqueen&designer_slug=all-saints&designer_slug=ami&designer_slug=amiri&designer_slug=ax-armani-exchange&designer_slug=awake-ny&designer_slug=balenciaga&designer_slug=balmain&designer_slug=barrow-designer&designer_slug=blue-sky-inn&designer_slug=bonsai-designer&designer_slug=boss-by-hugo-boss&designer_slug=brain-dead&designer_slug=burberry&designer_slug=calvin-klein&designer_slug=carhartt&designer_slug=cartier&designer_slug=casablanca-designer&designer_slug=champion&designer_slug=children-of-the-discordance&designer_slug=comme-des-garcons&designer_slug=comme-des-garcons-play&designer_slug=converse&designer_slug=deus-ex-machina&designer_slug=dior&designer_slug=dolce-gabbana&designer_slug=domrebel&designer_slug=doublet-designer&designer_slug=dsquared&designer_slug=endless-joy&designer_slug=fendi&designer_slug=erl-designer&designer_slug=falke&designer_slug=fear-of-god&designer_slug=fear-of-god-essentials&designer_slug=ferragamo&designer_slug=fila&designer_slug=fjallraven&designer_slug=givenchy&designer_slug=gucci&designer_slug=haculla&designer_slug=helmut-lang&designer_slug=heron-preston&designer_slug=g-shock&designer_slug=hugo&designer_slug=iceberg&designer_slug=icecream&designer_slug=ih-nom-uh-nit&designer_slug=jacquemus&designer_slug=jil-sander&designer_slug=just-cavalli&designer_slug=juunj&designer_slug=jw-anderson&designer_slug=kenzo&designer_slug=lacoste&designer_slug=lee-jeans&designer_slug=levis&designer_slug=loewe&designer_slug=lord-john-grey&designer_slug=louis-vuitton&designer_slug=maharishi&designer_slug=market&designer_slug=massimo-dutti&designer_slug=mastermind-japan&designer_slug=mastermind-world&designer_slug=mcm&designer_slug=m-i-s-b-h-v&designer_slug=mister-tee&designer_slug=moschino&designer_slug=moschino-couture&designer_slug=new-look&designer_slug=nike&designer_slug=obey&designer_slug=ocean-pacific&designer_slug=off-white-co-virgil-abloh&designer_slug=palace&designer_slug=palm-angels&designer_slug=paperboy&designer_slug=philipp-plein&designer_slug=polo-ralph-lauren&designer_slug=prada&designer_slug=pull-bear&designer_slug=puma&designer_slug=purple-brand&designer_slug=rassvet-paccbet&designer_slug=represent&designer_slug=river-island&designer_slug=saint-laurent&designer_slug=saint-michael&designer_slug=song-for-the-mute&designer_slug=stampd&designer_slug=stussy&designer_slug=sullen&designer_slug=supreme&designer_slug=the-north-face&designer_slug=timberland&designer_slug=tom-ford&designer_slug=topman&designer_slug=uniform-bridge&designer_slug=urban-outfitters-designer&designer_slug=uskees&designer_slug=valentino&designer_slug=valentino-garavani&designer_slug=vans&designer_slug=versace&designer_slug=versace-jeans&designer_slug=vetements&designer_slug=vtmnts&designer_slug=wacko-maria&designer_slug=waikei&designer_slug=we11done&designer_slug=weekday&final_price_from=100&gender=men&product_type=Jewelry&view=price_asc#slug=off-white-co-virgil-abloh-off-arrow-pendant-keychain"
                                    target="_black">OFF-WHITE </a>
                                <p class="text-body">Men's White Off- Arrow Pendant Keychain</p>
                                <div class="d-flex align-items-center justify-content-center mt-2">
                                    <h5>$102.00</h5><h6 class="text-muted ml-2"><del>$255.00</del></h6>
                                </div>
                            </div>
                        </div>
                                                                                                
                    <div class="product-item bg-light">
                            <div class="product-img position-relative overflow-hidden">
                                <img class="img-fluid w-100" src="https://cdna.lystit.com/400/500/tr/photos/farfetch/1151f78c/dolce-gabbana-gold-Multicolour-Gem-Necklace.jpeg" alt="">
                            </div>
                            <div class="text-center py-4">
                                <a class="h6 text-decoration-none text-truncate" 
                                    href="https://www.farfetch.com/shopping/women/dolce-gabbana-multicolour-gem-necklace-item-15959108.aspx?lang=en-US&fsb=1&size=17&storeid=13097&clickref=1011ly6RBtGu&utm_source=laurenlyst&utm_medium=affiliate&utm_campaign=PHUS&pid=performancehorizon_int&c=PHUS&clickid=1011ly6RBtGu&af_siteid=laurenlyst&af_cost_model=CPA&af_channel=affiliate&is_retargeting=true"
                                    target="_black">Dolce & Gabbana</a>
                                <p class="text-body">Multicolor Gem Necklace - Metallic</p>
                                <div class="d-flex align-items-center justify-content-center mt-2">
                                    <h5>$39,300</h5><h6 class="text-muted ml-2"><del></del></h6>
                                </div>
                            </div>
                        </div>
                                                
                    <div class="product-item bg-light">
                            <div class="product-img position-relative overflow-hidden">
                                <img class="img-fluid w-100" src="https://cdna.lystit.com/400/500/tr/photos/trendstack/dff6004e/dolce-gabbana--Gold-Brass-Black-Crystal-Bee-Lapel-Pin-Brooch.jpeg" alt="">
                            </div>
                            <div class="text-center py-4">
                                <a class="h6 text-decoration-none text-truncate" 
                                    href="https://www.lyst.com/search/?category=brooches&designer_slug=032c&designer_slug=1017-alyx-9sm&designer_slug=424&designer_slug=44-label-group&designer_slug=a-bathing-ape&designer_slug=apc&designer_slug=a_cold_wall&designer_slug=acne&designer_slug=acronym&designer_slug=adidas&designer_slug=adidas-originals&designer_slug=advisory-board-crystals-designer&designer_slug=alexander-mcqueen&designer_slug=all-saints&designer_slug=ami&designer_slug=amiri&designer_slug=ax-armani-exchange&designer_slug=awake-ny&designer_slug=balenciaga&designer_slug=balmain&designer_slug=barrow-designer&designer_slug=blue-sky-inn&designer_slug=bonsai-designer&designer_slug=boss-by-hugo-boss&designer_slug=brain-dead&designer_slug=burberry&designer_slug=calvin-klein&designer_slug=carhartt&designer_slug=cartier&designer_slug=casablanca-designer&designer_slug=champion&designer_slug=children-of-the-discordance&designer_slug=comme-des-garcons&designer_slug=comme-des-garcons-play&designer_slug=converse&designer_slug=deus-ex-machina&designer_slug=dior&designer_slug=dolce-gabbana&designer_slug=domrebel&designer_slug=doublet-designer&designer_slug=dsquared&designer_slug=endless-joy&designer_slug=fendi&designer_slug=erl-designer&designer_slug=falke&designer_slug=fear-of-god&designer_slug=fear-of-god-essentials&designer_slug=ferragamo&designer_slug=fila&designer_slug=fjallraven&designer_slug=givenchy&designer_slug=gucci&designer_slug=haculla&designer_slug=helmut-lang&designer_slug=heron-preston&designer_slug=g-shock&designer_slug=hugo&designer_slug=iceberg&designer_slug=icecream&designer_slug=ih-nom-uh-nit&designer_slug=jacquemus&designer_slug=jil-sander&designer_slug=just-cavalli&designer_slug=juunj&designer_slug=jw-anderson&designer_slug=kenzo&designer_slug=lacoste&designer_slug=lee-jeans&designer_slug=levis&designer_slug=loewe&designer_slug=lord-john-grey&designer_slug=louis-vuitton&designer_slug=maharishi&designer_slug=market&designer_slug=massimo-dutti&designer_slug=mastermind-japan&designer_slug=mastermind-world&designer_slug=mcm&designer_slug=m-i-s-b-h-v&designer_slug=mister-tee&designer_slug=moschino&designer_slug=moschino-couture&designer_slug=new-look&designer_slug=nike&designer_slug=obey&designer_slug=ocean-pacific&designer_slug=off-white-co-virgil-abloh&designer_slug=palace&designer_slug=palm-angels&designer_slug=paperboy&designer_slug=philipp-plein&designer_slug=polo-ralph-lauren&designer_slug=prada&designer_slug=pull-bear&designer_slug=puma&designer_slug=purple-brand&designer_slug=rassvet-paccbet&designer_slug=represent&designer_slug=river-island&designer_slug=saint-laurent&designer_slug=saint-michael&designer_slug=song-for-the-mute&designer_slug=stampd&designer_slug=stussy&designer_slug=sullen&designer_slug=supreme&designer_slug=the-north-face&designer_slug=timberland&designer_slug=tom-ford&designer_slug=topman&designer_slug=uniform-bridge&designer_slug=urban-outfitters-designer&designer_slug=uskees&designer_slug=valentino&designer_slug=valentino-garavani&designer_slug=vans&designer_slug=versace&designer_slug=versace-jeans&designer_slug=vetements&designer_slug=vtmnts&designer_slug=wacko-maria&designer_slug=waikei&designer_slug=we11done&designer_slug=weekday&final_price_from=100&gender=Women&product_type=Jewelry&view=price_asc#slug=dolce-gabbana-brass-black-crystal-bee-lapel-pin-brooch-1"
                                    target="_black">Dolce & Gabbana</a>
                                <p class="text-body">Brass Black Crystal Bee Lapel Pin Brooch</p>
                                <div class="d-flex align-items-center justify-content-center mt-2">
                                    <h5>$191.30</h5><h6 class="text-muted ml-2"><del>$542.03</del></h6>
                                </div>
                            </div>
                        </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- YOU MAY ALSO LIKE End-->

            <!-- Footer Start -->
    <div class="container-fluid bg-dark text-secondary mt-5 pt-5">
        <div class="row px-xl-5 pt-5">
            <div class="col-lg-4 col-md-12 mb-5 pr-3 pr-xl-5">
                <h5 class="text-secondary text-uppercase mb-4">Get In Touch</h5>
                <p class="mb-4"></p>
                <p class="mb-2"><i class="fa fa-map-marker-alt text-primary mr-3"></i>12 Street, Veintiane, Laos</p>
                <p class="mb-2"><i class="fa fa-envelope text-primary mr-3"></i>YWOF1357@gmail.com</p>
                <p class="mb-0"><i class="fa fa-phone-alt text-primary mr-3"></i>+856 20 53 571 357</p>
            </div>
            <div class="col-lg-8 col-md-12">
                <div class="row">
                    <div class="col-md-4 mb-5">
                        <h5 class="text-secondary text-uppercase mb-4">Quick Shop</h5>
                        <div class="d-flex flex-column justify-content-start">
                            <a class="text-secondary mb-2" href="index.php"><i class="fa fa-angle-right mr-2"></i>Home</a>
                            <a class="text-secondary mb-2" href="Allshop.php"><i class="fa fa-angle-right mr-2"></i>Shop</a>
                            <a class="text-secondary mb-2" href="AllMen's.php"><i class="fa fa-angle-right mr-2"></i>Men</a>
                            <a class="text-secondary mb-2" href="AllWomen's.php"><i class="fa fa-angle-right mr-2"></i>Women</a>
                            <a class="text-secondary mb-2" href="New.php"><i class="fa fa-angle-right mr-2"></i>New</a>
                        </div>
                    </div>
                    <div class="col-md-4 mb-5">
                        <h5 class="text-secondary text-uppercase mb-4">Quick Shop</h5>
                        <div class="d-flex flex-column justify-content-start">
                            <a class="text-secondary mb-2" href="about.php"><i class="fa fa-angle-right mr-2"></i>About</a>
                            <a class="text-secondary" href="hottest.php"><i class="fa fa-angle-right mr-2"></i>Hottest</a>
                            <a class="text-secondary mb-2" href="Sale.php"><i class="fa fa-angle-right mr-2"></i>Sale</a>
                            <a class="text-secondary mb-2" href="Brands.php"><i class="fa fa-angle-right mr-2"></i>Brands</a>
                        </div>
                    </div>
                    <div class="col-md-4 mb-5">
                        <h5 class="text-secondary text-uppercase mb-4">Follow</h5>
                        <div class="d-flex">
                            <a class="btn btn-primary btn-square mr-2" href="https://www.facebook.com/profile.php?id=61554419720879&mibextid=LQQJ4d"><i class="fa-brands fa-square-facebook"></i></a>
                            <a class="btn btn-primary btn-square mr-2" href="https://www.instagram.com/"><i class="fa-brands fa-square-instagram"></i></a>
                            <a class="btn btn-primary btn-square mr-2" href="https://twitter.com/i/flow/login"><i class="fa-brands fa-square-x-twitter"></i></a>
                            <a class="btn btn-primary btn-square" href="https://web.whatsapp.com/"><i class="fa-brands fa-square-whatsapp"></i></a>
                        </div>
                        <h6 class="text-secondary text-uppercase mt-4 mb-3">Log in - Log out</h6>
                        <div class="d-flex">
                            <a class="btn btn-primary btn-square mr-2" href="login.php"><i class="fa-solid fa-user"></i></a>
                            <a class="btn btn-primary btn-square mr-2" href="index.php?logout='1'"><i class="fa-solid fa-right-from-bracket"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row border-top mx-xl-5 py-4" style="border-color: rgba(256, 256, 256, .1) !important;">
            <div class="col-md-6 px-xl-0">
                <p class="mb-md-0 text-center text-md-left text-secondary">
                    &copy; <a class="text-primary" href="#">Domain</a>. All Rights Reserved. Designed
                    by
                    <a class="text-primary" href="https://www.facebook.com/profile.php?id=100088113528973&mibextid=LQQJ4d" target="_black">T-OLEY</a>
                </p>
            </div>
            <div class="col-md-6 px-xl-0 text-center text-md-right">
                <img class="img-fluid" src="img/payments.png" alt="">
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>


    <!-- register-->
    <div class="homecontent">
    <!-- notification message -->     
    <?php if (isset($_SESSION['success'])) : ?>
             <div class="success">
                <h3>
                    <?php
                        echo $_SESSION['success'];
                        unset($_SESSION['success']);
                    ?>    
                </h3>

             </div>
        <?php endif ?>

    <!-- logged in user informtion -->
    <?php if (isset($_SESSION['username'])) : ?>
    <?php endif ?>    
    </div>
</body>

</html>