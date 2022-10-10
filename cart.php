
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Jutsu || Cart</title>
    <!-- Head -->	
    <?php include "head.php";?>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <style>
@font-face {
  font-family: myFirstFont;
  src: url(GTWalsheimPro-Black.woff);
}

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
.cart-page {
    position: relative;
    margin-top: 30px;
}

.cart-page .cart-page-inner {
    padding: 30px;
    margin-bottom: 30px;
    background: #E4EBF5;
}

.cart-page .table {
    width: 100%;
    text-align: center;
    margin-bottom: 0;
}

:root {
  --primary-light: #8abdff;
  --primary: #0d6efd;
  --primary-dark: #0950bb;
  --white: #FFFFFF;
  --greyLight-1: #E4EBF5;
  --greyLight-2: #c8d0e7;
  --greyLight-3: #bec8e4;
  --greyDark: #9baacf;
}

.cart-page .table .thead-dark th {
    font-family: 'Source Code Pro', monospace;
    font-size: 18px;
    font-weight: 700;
    color: #353535;
    text-align: center;
    background: transparent;
    border-color: #dddddd;
    border-bottom: none;
    vertical-align: middle;
}

.cart-page .table td {
    font-size: 16px;
    vertical-align: middle;
}

.cart-page .table .img {
    display: flex;
    align-items: center;
}

.cart-page .table .img img {
    max-width: 60px;
    max-height: 60px;
    margin-right: 15px;
}

.cart-page .table .img p {
    display: inline-block;
    text-align: left;
    margin: 0;
}

.cart-page .table .qty {
    display: inline-block;
    width: 100px;
    font-size: 0;
}

.cart-page .table button {
    width: 30px;
    height: 30px;
    font-size: 14px;
    text-align: center;
    color: #ffffff;
    background: #0d6efd;
    border: none;
    border-radius: 4px;
}

.cart-page .table button.btn-minus {
    border-radius: 4px 0 0 4px;
}

.cart-page .table button.btn-plus {
    border-radius: 0 4px 4px 0;
}

.cart-page .table button.btn-cart {
    width: auto;
}

.cart-page .table input {
    width: 40px;
    height: 30px;
    font-size: 16px;
    color: #ffffff;
    text-align: center;
    background: #000000;
    border: none;
}





.cart-page .cart-summary {
    position: relative;
    width: 100%;
}

.cart-page .cart-summary .cart-content {
    padding: 30px;
    background: #f3f6ff;
}

.cart-page .cart-summary .cart-content h1 {
    font-size: 22px;
    margin-bottom: 20px;
}

.cart-page .cart-summary .cart-content p span,
.cart-page .cart-summary .cart-content h2 span {
    float: right;
}

.cart-page .cart-summary .cart-content h2 {
    font-size: 20px;
    font-weight: 600;
    padding-top: 12px;
    border-top: 1px solid #dddddd;
    margin: 0;
}

.cart-page .cart-summary .cart-btn button {
    margin-top: 15px;
    width: calc(50% - 15px);
    height: 50px;
    padding: 2px 10px;
    text-align: center;
    color: #ffffff;
    background: #0d6efd;
    border: none;
    border-radius: 4px;
}

.cart-page .cart-summary .cart-btn button:hover {
    color: #0d6efd;
    background: white;
}

.cart-page .cart-summary .cart-btn button:first-child {
    margin-right: 25px;
    color: #0d6efd;
    background: #ffffff;
    border: 1px solid #0d6efd;
}

.cart-page .cart-summary .cart-btn button:first-child:hover {
    color: #ffffff;
    background: #0d6efd;
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
            <div class="breadcrumb-wrap">
                
            <nav aria-label="breadcrumb" class="main-breadcrumb neumorphic4">
                      <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="home.php">Home</a></li>
                        <li class="breadcrumb-item"><a href="art.php">Art</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Cart</li>
                      </ol>
                    </nav>
        </div>
        <div class="tryme"><h1>Shopping Cart</h1></div>
        <div class="cart-page">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 neumorphic4">
                        <div class="cart-page-inner">
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th>Product Name</th>
                                           
                                            <th>Total</th>
                                            <th>Remove</th>
                                        </tr>
                                    </thead>
                                    <tbody class="align-middle">
                                        <tr>
                                            <td>
                                                <div class="img">
                                                    <a href="artist_2-2.php"><img src="image/VP 2.png" alt="Image"></a>
                                                    <p>Shine on Me</p>
                                                </div>
                                            </td>
                                           
                                            <td>$89</td>
                                            <td><button><i class="fas fa-trash"></i></button></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="img">
                                                <a href="artist_1-2.php"><img src="image/CAS 2.png" alt="Image"></a>
                                                    <p>Still Life</p>
                                                </div>
                                            </td>
                                            
                                            <td>$56</td>
                                            <td><button><i class="fas fa-trash"></i></button></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="img">
                                                <a href="artist_5-2.php"><img src="image/MADRONA 2.png" alt="Image"></a>
                                                    <p>Detective Lau</p>
                                                </div>
                                            </td>
                                            
                                            <td>$78</td>
                                            <td><button><i class="fas fa-trash"></i></button></td>
                                        </tr>
                                        
                                               
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 neumorphic1">
                        <div class="cart-page-inner neumorphic4">
                            <div class="row">
                                
                                <div class="col-md-12">
                                    <div class="cart-summary">
                                        <div class="cart-content">
                                            <h2>Cart Summary</h2>
                                            <p>Sub Total<span>$99</span></p>
                                            <p>Shipping Cost<span>$1</span></p>
                                            <h2>Grand Total:</h2><p> $100</p>
                                        </div>
                                        <div class="cart-btn">
                                            <a href="checkout.php"><button>Checkout</button><a>
                                        </div>
                                    </div>
                                </div>
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