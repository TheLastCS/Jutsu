
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Jutsu || Art</title>
    <!-- Head -->	
    <?php include "head.php";?>
    <style>
    .tryme{
  font-family: myFirstFont;
  margin-top: 2.5%;
  margin-bottom: 4%;
  text-align: center;
  
}

h1, h2, h3, h4 ,h5{
  font-family: myFirstFont !important;
}


.tryme h1 {
  font-size: 100px;
}
.category {
    position: relative;
    padding: 0 15px;
    margin-bottom: 30px;
}

.category .col-md-3 {
    padding: 0;
}

.category .category-item {
    position: relative;
    display: flex;
    flex-wrap: wrap;
    align-items: center;
    height: 100%;
    max-height: 400px;
    overflow: hidden;
    background: #bec8e4;
}

.category .category-item.ch-400 {
    height: 400px;
}

.category .category-item.ch-250 {
    height: 250px;
}

.category .category-item.ch-150 {
    height: 150px;
}

.category .category-item img {
    width: 100%; 
    height: 100%; 
    object-fit: cover; 
}

.category .category-name {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    display: flex;
    align-items: center;
    background: #bec8e4(255, 111, 97, .7);
    transition: all 0.3s;
    opacity: 0;
}

.category .category-name:hover {
    opacity: 1;     
}

.category .category-name p {
    margin: 0 0 50px 0;
    padding: 15px;
    width: 100%;
    text-align: center;
    color: #bec8e4;
    font-size: 16px;
    transition: all 0.3s;
}

.category .category-name:hover p {
    margin: 0;
    color: #bec8e4;       
}


/**********************************/
/*********** Feature CSS **********/
/**********************************/
.feature {
    position: relative;
    color: #0950bb;
}

.feature .feature-col {
    margin-bottom: 30px;
}

.feature .feature-content {
    position: relative;
    width: 100%;
    height: 100%;
    padding: 30px 15px;
    text-align: center;
    background: #bec8e4;
}

.feature .feature-content i {
    color: black;
    font-size: 60px;
    margin-bottom: 30px;
}

.feature .feature-content h2 {
    font-size: 18px;
}

.feature .feature-content p {
    font-size: 15px;
    margin: 0;
}


/**********************************/
/******** Product Item CSS ********/
/**********************************/
.product-item {
    position: relative;
}

.product-item .product-title {
    padding: 15px;
    text-align: center;
    background: #bec8e4;
    color: #0950bb;
    transition: all .3s;
}

.product-item:hover .product-title {
    background: #0d6efd;
}

.product-item .product-title a,
.product-item .product-title .ratting {
    position: relative;
    width: 100%;
}

.product-item .product-title a {
    margin-bottom: 5px;
    color: #ffffff;
    font-size: 18px;
}

.product-item .product-title .ratting i {
    font-size: 14px;
    color: #0950bb;
}

.product-item .product-content .price span {
    margin-left: 12px;
    text-decoration: line-through;
    font-weight: 700;
    color: #bec8e4;
}

.product-item:hover .product-title a,
.product-item:hover .product-title .ratting i {
    color: #0950bb;
}

.product-item:hover .product-content .price span {
    color: #bec8e4;
}

.product-item .product-image {
    position: relative;
    overflow: hidden;
}

.product-item .product-image a {
    display: block;
    background: #bec8e4;
    transition: .3s;
}

.product-item .product-image img {
    width: 100%; 
    transition: all .3s;
}

.product-item:hover .product-image img {
    transform: scale(1.2);
}

.product-item .product-image .product-action {
    position: absolute;
    width: 100%;
    height: 100%;
    top: 0;
    left: 0;
    display: flex;
    align-items: center;
    justify-content: center;
    background: #bec8e4(255, 111, 97, .5);
    transition: all .3s;
    font-size: 0;
    z-index: 1;
    opacity: 0;
}

.product-item:hover .product-image .product-action {
    opacity: 1; 
}

.product-item .product-image .product-action a {
    display: inline-block;
    width: 40px;
    height: 40px;
    margin-right: 5px;
    padding: 7px 0 10px 0;
    font-size: 16px;
    text-align: center;
    color: #bec8e4;
    background: #0d6efd;
    border: 1px solid #bec8e4;
    border-radius: 4px;
    transition: all .3s;
    margin-top: 50px;
}

.product-item:hover .product-image .product-action a {
    margin-top: 0;
}

.product-item .product-image .product-action a:last-child {
    margin-right: 0;
}

.product-item .product-image .product-action a:hover {
    color: #0d6efd;
    background: #bec8e4;
    border: 1px solid #0d6efd;
}

.product-item .product-price {
    padding: 20px;
    background: #ffff;
    transition: all .3s;
}

.product-item:hover .product-price {
    background: #0d6efd;
}

.product-item .product-price h3 {
    display: inline-block;
    color: #bec8e4;
    margin: 0;
}

.product-item .product-price h3 span {
    font-size: 16px;
}

.product-item .product-price .btn {
    float: right;
    border: none;
    color: #bec8e4;
    background: #0d6efd;
}

.product-item:hover .product-price .btn,
.product-item .product-price .btn:hover {
    color: #0d6efd;
    background: #bec8e4;
}

.product-item .product-price .btn i {
    margin-right: 5px;
}


/**********************************/
/******** Featured Product ********/
/**********************************/
.featured-product {
    position: relative;
    padding: 30px 0;
}

.recent-product {
    position: relative;
    padding: 30px 0;
}

.product .section-header {
    margin-bottom: 30px;
    padding: 20px 30px 15px 30px;
    color: BLACK;
    background: #E4EBF5;
;
}

.product .slick-prev,
.product .slick-next {
    top: -75px;
    width: 30px;
    height: 30px;
    z-index: 1;
    transition: .5s;
    color: #0d6efd;
    background: #ffffff;
    border: 1px solid #0d6efd;
    border-radius: 4px;
}

.product .slick-prev {
    left: calc(100% - 120px);
}

.product .slick-next {
    right: 45px;
}

.product .slick-prev:hover,
.product .slick-prev:focus,
.product .slick-next:hover,
.product .slick-next:focus {
    background: #0d6efd;
}

.product .slick-prev::before,
.product .slick-next::before {
    font-family: "Font Awesome 5 Free";
    font-size: 18px;
    font-weight: 900;
    color: #0950bb;
}

.product .slick-prev::before {
    content: "\f104";
}

.product .slick-next::before {
    content: "\f105";
}

.product .slick-prev:hover::before,
.product .slick-prev:focus::before,
.product .slick-next:hover::before,
.product .slick-next:focus::before {
    color: #ffffff;
}


/**********************************/
/******** Product View CSS ********/
/**********************************/
.product-view {
    position: relative;
    width: 100%;
    padding: 30px 0;
}

.product-view .product-view-top {
    padding: 30px;
    margin-bottom: 30px;
    background: #ffffff;
}

.product-view .product-search {
    position: relative;
    width: 100%;
}

.product-view .product-search input {
    width: 100%;
    height: 35px;
    padding: 0 15px;
    color: #999999;
    background: transparent;
    border: 1px solid #353535;
    border-radius: 4px;
    transition: all .3s;
}

.product-view .product-search input:focus {
    border-color: #0d6efd;
}

.product-view .product-search button {
    position: absolute;
    width: 35px;
    height: 33px;
    top: 1px;
    right: 1px;
    text-align: center;
    background: transparent;
    color: #353535;
    border: none;
    border-radius: 0 4px 4px 0;
    transition: all .3s;
}

.product-view .product-search button i {
    font-size: 16px;
}

.product-view .product-search button:hover {
    background: #0d6efd;
    color: #ffffff;
}

.product-view .product-short,
.product-view .product-price-range {
    position: relative;
    width: 100%;
    text-align: right;
}

.product-view .product-short .dropdown .dropdown-toggle,
.product-view .product-price-range .dropdown .dropdown-toggle {
    display: block;
    width: 100%;
    height: 35px;
    padding: 5px 10px;
    background: transparent;
    border: 1px solid #353535;
    text-align: left;
    border-radius: 4px;
    cursor: pointer;
    transition: all .3s;
}

.product-view .product-short .dropdown .dropdown-toggle:hover,
.product-view .product-price-range .dropdown .dropdown-toggle:hover {
    color: #0950bb;
    border-color: #0d6efd;
}

.product-view .product-short .dropdown .dropdown-toggle::after,
.product-view .product-price-range .dropdown .dropdown-toggle::after {
    float: right;
    margin-top: 10px;
}

.product-view .product-short .dropdown-menu,
.product-view .product-price-range .dropdown-menu {
    margin: -1px 0 0 0;
    border-radius: 0;
}

.product-view .product-item {
    margin-bottom: 30px;
}

.product-view .pagination {
    margin: 0;
}

.product-view .pagination .page-item .page-link {
    color: #0950bb;
    background: transparent;
    border-color: #353535;
}

.product-view .pagination .page-item:hover .page-link,
.product-view .pagination .page-item.active .page-link {
    color: #0d6efd;
    background: #000000;
}

@media (max-width: 991.98px) {
    .product-view .pagination {
        margin-bottom: 30px;
    }
}

</style>
</head>

<body>
    <div class="page-wrapper default-theme sidebar-bg bg1 toggled">
        <!-- navbar -->
    <?php include "navbar.php";?>
    
        <!-- page-content  -->
        <main class="page-content pt-2 neumorphic3">
            <div id="overlay" class="overlay"></div>
           
           
          
            <div class="featured-product product ">
            <div class="container-fluid p-5 ">
                <div class="section-header neumorphic3 inset5">
                    <h1>Art</h1>
                    </div>

       
        

        <div class="row align-items-center product-slider product-slider-4">
                    <div class="col-lg-3">
                        <div class="product-item neumorphic4">
                            <div class="product-title">
                                <a href="artist_1-1.php">Wolf</a>
                                <div class="ratting">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                            </div>
                            <div class="product-image">
                                <a href="cart.php">
                                    <img src="image/CAS 1.png" alt="Product Image">
                                </a>
                                <div class="product-action">
                                    <a href="cart.php"><i class="fa fa-cart-plus"></i></a>
                                    <a href="artist_1.php"><i class="fa fa-user"></i></a>
                                    <a href="artist_1-1.php"><i class="fa fa-search"></i></a>
                                </div>
                            </div>
                            <div class="product-price">
                                <h3><span>$</span>23</h3>
                                <a class="btn" href="cart.php"><i class="fa fa-shopping-cart"></i>Buy Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="product-item neumorphic4">
                            <div class="product-title">
                                <a href="artist_3-1.php">Alma</a>
                                <div class="ratting">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                            </div>
                            <div class="product-image">
                                <a href="cart.php">
                                    <img src="image/KIBA  1.png" alt="Product Image">
                                </a>
                                <div class="product-action">
                                    <a href="cart.php"><i class="fa fa-cart-plus"></i></a>
                                    <a href="artist_3.php"><i class="fa fa-user"></i></a>
                                    <a href="artist_3-1.php"><i class="fa fa-search"></i></a>
                                </div>
                            </div>
                            <div class="product-price">
                                <h3><span>$</span>12</h3>
                                <a class="btn" href="cart.php"><i class="fa fa-shopping-cart"></i>Buy Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="product-item neumorphic4">
                            <div class="product-title">
                                <a href="artist_5-1.php">Sunflower Girl </a>
                                <div class="ratting">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                            </div>
                            <div class="product-image">
                                <a href="cart.php">
                                    <img src="image/MADRONA 1.png" alt="Product Image">
                                </a>
                                <div class="product-action">
                                    <a href="cart.php"><i class="fa fa-cart-plus"></i></a>
                                    <a href="artist_5.php"><i class="fa fa-user"></i></a>
                                    <a href="artist_5-1.php"><i class="fa fa-search"></i></a>
                                </div>
                            </div>
                            <div class="product-price">
                                <h3><span>$</span>99</h3>
                                <a class="btn" href="cart.php"><i class="fa fa-shopping-cart"></i>Buy Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="product-item neumorphic4">
                            <div class="product-title">
                                <a href="artist_2-1.php">Van Gogh</a>
                                <div class="ratting">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                            </div>
                            <div class="product-image">
                                <a href="cart.php">
                                    <img src="image/VP 1.png" alt="Product Image">
                                </a>
                                <div class="product-action">
                                    <a href="cart.php"><i class="fa fa-cart-plus"></i></a>
                                    <a href="artist_2.php"><i class="fa fa-user"></i></a>
                                    <a href="artist_2-1.php"><i class="fa fa-search"></i></a>
                                </div>
                            </div>
                            <div class="product-price">
                                <h3><span>$</span>45</h3>
                                <a class="btn" href="cart.php"><i class="fa fa-shopping-cart"></i>Buy Now</a>
                            </div>
                        </div>
                    </div>
                   
                </div>

                <br><br>


                <div class="row align-items-center product-slider product-slider-4">
                    <div class="col-lg-3">
                        <div class="product-item neumorphic4">
                            <div class="product-title">
                                <a href="artist_1-2.php">Shine on Me</a>
                                <div class="ratting">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                            </div>
                            <div class="product-image">
                                <a href="cart.php">
                                    <img src="image/CAS 2.png" alt="Product Image">
                                </a>
                                <div class="product-action">
                                    <a href="cart.php"><i class="fa fa-cart-plus"></i></a>
                                    <a href="artist_1.php"><i class="fa fa-user"></i></a>
                                    <a href="artist_1-2.php"><i class="fa fa-search"></i></a>
                                </div>
                            </div>
                            <div class="product-price">
                                <h3><span>$</span>56</h3>
                                <a class="btn" href="cart.php"><i class="fa fa-shopping-cart"></i>Buy Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="product-item neumorphic4">
                            <div class="product-title">
                                <a href="artist_3-2.php">Ultralight Beam</a>
                                <div class="ratting">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                            </div>
                            <div class="product-image">
                                <a href="cart.php">
                                    <img src="image/KIBA 2.png" alt="Product Image">
                                </a>
                                <div class="product-action">
                                    <a href="cart.php"><i class="fa fa-cart-plus"></i></a>
                                    <a href="artist_3.php"><i class="fa fa-user"></i></a>
                                    <a href="artist_3-2.php"><i class="fa fa-search"></i></a>
                                </div>
                            </div>
                            <div class="product-price">
                                <h3><span>$</span>67</h3>
                                <a class="btn" href="cart.php"><i class="fa fa-shopping-cart"></i>Buy Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="product-item neumorphic4">
                            <div class="product-title">
                                <a href="artist_5-2.php">Detective Lau</a>
                                <div class="ratting">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                            </div>
                            <div class="product-image">
                                <a href="cart.php">
                                    <img src="image/MADRONA 2.png" alt="Product Image">
                                </a>
                                <div class="product-action">
                                    <a href="cart.php"><i class="fa fa-cart-plus"></i></a>
                                    <a href="artist_5.php"><i class="fa fa-user"></i></a>
                                    <a href="artist_5-2.php"><i class="fa fa-search"></i></a>
                                </div>
                            </div>
                            <div class="product-price">
                                <h3><span>$</span>78</h3>
                                <a class="btn" href="cart.php"><i class="fa fa-shopping-cart"></i>Buy Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="product-item neumorphic4">
                            <div class="product-title">
                                <a href="artist_2-2.php">Still Life</a>
                                <div class="ratting">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                            </div>
                            <div class="product-image">
                                <a href="cart.php">
                                    <img src="image/VP 2.png" alt="Product Image">
                                </a>
                                <div class="product-action">
                                    <a href="cart.php"><i class="fa fa-cart-plus"></i></a>
                                    <a href="artist_2.php"><i class="fa fa-user"></i></a>
                                    <a href="artist_2-2.php"><i class="fa fa-search"></i></a>
                                </div>
                            </div>
                            <div class="product-price">
                                <h3><span>$</span>89</h3>
                                <a class="btn" href="cart.php"><i class="fa fa-shopping-cart"></i>Buy Now</a>
                            </div>
                        </div>
                    </div>
                   
                </div>
                <br><br>

                <div class="row align-items-center product-slider product-slider-4">
                    <div class="col-lg-3">
                        <div class="product-item neumorphic4">
                            <div class="product-title">
                                <a href="artist_1-3.php">Focus</a>
                                <div class="ratting">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                            </div>
                            <div class="product-image">
                                <a href="cart.php">
                                    <img src="image/CAS 3.png" alt="Product Image">
                                </a>
                                <div class="product-action">
                                    <a href="cart.php"><i class="fa fa-cart-plus"></i></a>
                                    <a href="artist_1.php"><i class="fa fa-user"></i></a>
                                    <a href="artist_1-3.php"><i class="fa fa-search"></i></a>
                                </div>
                            </div>
                            <div class="product-price">
                                <h3><span>$</span>99</h3>
                                <a class="btn" href="cart.php"><i class="fa fa-shopping-cart"></i>Buy Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="product-item neumorphic4">
                            <div class="product-title">
                                <a href="artist_3-3.php">Drawn</a>
                                <div class="ratting">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                            </div>
                            <div class="product-image">
                                <a href="cart.php">
                                    <img src="image/KIBA 3.png" alt="Product Image">
                                </a>
                                <div class="product-action">
                                    <a href="cart.php"><i class="fa fa-cart-plus"></i></a>
                                    <a href="artist_3.php"><i class="fa fa-user"></i></a>
                                    <a href="artist_3-3.php"><i class="fa fa-search"></i></a>
                                </div>
                            </div>
                            <div class="product-price">
                                <h3><span>$</span>91</h3>
                                <a class="btn" href="cart.php"><i class="fa fa-shopping-cart"></i>Buy Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="product-item neumorphic4">
                            <div class="product-title">
                                <a href="artist_5-3.php">Comic Graphic</a>
                                <div class="ratting">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                            </div>
                            <div class="product-image">
                                <a href="cart.php">
                                    <img src="image/MADRONA 3.png" alt="Product Image">
                                </a>
                                <div class="product-action">
                                    <a href="cart.php"><i class="fa fa-cart-plus"></i></a>
                                    <a href="artist_5.php"><i class="fa fa-user"></i></a>
                                    <a href="artist_5-3.php"><i class="fa fa-search"></i></a>
                                </div>
                            </div>
                            <div class="product-price">
                                <h3><span>$</span>88</h3>
                                <a class="btn" href="cart.php"><i class="fa fa-shopping-cart"></i>Buy Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="product-item neumorphic4">
                            <div class="product-title">
                                <a href="artist_2-3.php">Lion</a>
                                <div class="ratting">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                            </div>
                            <div class="product-image">
                                <a href="cart.php">
                                    <img src="image/VP 3.png" alt="Product Image">
                                </a>
                                <div class="product-action">
                                    <a href="cart.php"><i class="fa fa-cart-plus"></i></a>
                                    <a href="artist_2.php"><i class="fa fa-user"></i></a>
                                    <a href="artist_2-3.php"><i class="fa fa-search"></i></a>
                                </div>
                            </div>
                            <div class="product-price">
                                <h3><span>$</span>99</h3>
                                <a class="btn" href="cart.php"><i class="fa fa-shopping-cart"></i>Buy Now</a>
                            </div>
                        </div>
                    </div>
                   
                </div>
                <br><br>

                <div class="row align-items-center product-slider product-slider-4">
                    <div class="col-lg-3">
                        <div class="product-item neumorphic4">
                            <div class="product-title">
                                <a href="artist_1-4.php">Ninja</a>
                                <div class="ratting">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                            </div>
                            <div class="product-image">
                                <a href="cart.php">
                                    <img src="image/CAS 4.png" alt="Product Image">
                                </a>
                                <div class="product-action">
                                    <a href="cart.php"><i class="fa fa-cart-plus"></i></a>
                                    <a href="artist_1.php"><i class="fa fa-user"></i></a>
                                    <a href="artist_1-4.php"><i class="fa fa-search"></i></a>
                                </div>
                            </div>
                            <div class="product-price">
                                <h3><span>$</span>33</h3>
                                <a class="btn" href="cart.php"><i class="fa fa-shopping-cart"></i>Buy Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="product-item neumorphic4">
                            <div class="product-title">
                                <a href="artist_3-4.php">Night Changes</a>
                                <div class="ratting">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                            </div>
                            <div class="product-image">
                                <a href="cart.php">
                                    <img src="image/KIBA  4.png" alt="Product Image">
                                </a>
                                <div class="product-action">
                                    <a href="cart.php"><i class="fa fa-cart-plus"></i></a>
                                    <a href="artist_3.php"><i class="fa fa-user"></i></a>
                                    <a href="artist_3-4.php"><i class="fa fa-search"></i></a>
                                </div>
                            </div>
                            <div class="product-price">
                                <h3><span>$</span>42</h3>
                                <a class="btn" href="cart.php"><i class="fa fa-shopping-cart"></i>Buy Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="product-item neumorphic4">
                            <div class="product-title">
                                <a href="artist_5-4.php">Rei and Ren</a>
                                <div class="ratting">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                            </div>
                            <div class="product-image">
                                <a href="cart.php">
                                    <img src="image/MADRONA 4.png" alt="Product Image">
                                </a>
                                <div class="product-action">
                                    <a href="cart.php"><i class="fa fa-cart-plus"></i></a>
                                    <a href="artist_5.php"><i class="fa fa-user"></i></a>
                                    <a href="artist_5-4.php"><i class="fa fa-search"></i></a>
                                </div>
                            </div>
                            <div class="product-price">
                                <h3><span>$</span>20</h3>
                                <a class="btn" href="cart.php"><i class="fa fa-shopping-cart"></i>Buy Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="product-item neumorphic4">
                            <div class="product-title">
                                <a href="artist_1-5.php">Broke Ninja</a>
                                <div class="ratting">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                            </div>
                            <div class="product-image">
                                <a href="cart.php">
                                    <img src="image/CAS 5.png" alt="Product Image">
                                </a>
                                <div class="product-action">
                                    <a href="cart.php"><i class="fa fa-cart-plus"></i></a>
                                    <a href="artist_1.php"><i class="fa fa-user"></i></a>
                                    <a href="artist_1-5.php"><i class="fa fa-search"></i></a>
                                </div>
                            </div>
                            <div class="product-price">
                                <h3><span>$</span>69</h3>
                                <a class="btn" href="cart.php"><i class="fa fa-shopping-cart"></i>Buy Now</a>
                            </div>
                        </div>
                    </div>
                   
                </div> <br><br>


                <div class="row align-items-center product-slider product-slider-4">
                    <div class="col-lg-3">
                        <div class="product-item neumorphic4">
                            <div class="product-title">
                                <a href="artist_1-6.php">Brand Art</a>
                                <div class="ratting">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                            </div>
                            <div class="product-image">
                                <a href="cart.php">
                                    <img src="image/CAS 6.png" alt="Product Image">
                                </a>
                                <div class="product-action">
                                    <a href="cart.php"><i class="fa fa-cart-plus"></i></a>
                                    <a href="artist_1.php"><i class="fa fa-user"></i></a>
                                    <a href="artist_1-6.php"><i class="fa fa-search"></i></a>
                                </div>
                            </div>
                            <div class="product-price">
                                <h3><span>$</span>96</h3>
                                <a class="btn" href="cart.php"><i class="fa fa-shopping-cart"></i>Buy Now</a>
                            </div>
                        </div>
                    </div>

                        </div>
                    </div>

                </div>

            <br><br>    
            <!-- footer -->
        <?php include "footer.php";?>
        

        </main>
        <!-- page-content" -->
    </div>

    <!-- using local scripts -->
    <?php include "script.php";?>
</body>

</html>