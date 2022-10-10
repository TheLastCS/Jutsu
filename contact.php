
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

h1, h2, h3, h4 ,h5, p{
  font-family: myFirstFont !important;
}


.tryme h1 {
  font-size: 100px;
}
    .contact {
    position: relative;
    padding-top: 30px;
}

.contact .contact-info,
.contact .contact-form,
.contact .contact-map {
    height: 100%;
    padding: 30px;
    background: #E4EBF5;
    
  
}

.contact .contact-info h2 {
    margin-bottom: 15px;
}

.contact .contact-info h3 {
    margin-bottom: 15px;
    font-size: 18px;
}

.contact .contact-info h3 i {
    width: 20px;
    color: #0d6efd;
    margin-right: 5px;
}

.contact .social {
    position: relative;
    width: 100%;
}

.contact .social a {
    display: inline-block;
    margin: 10px 10px 0 0;
    width: 40px;
    height: 40px;
    padding: 5px 0;
    text-align: center;
    font-size: 18px;
    border: 1px solid #c8d0e7;
    border-radius: 4px;
}

.contact .social a i {
    color:#0d6efd;
}

.contact .social a:hover {
    background: #0950bb;
}

.contact .social a:hover i {
    color: #ffffff;
}

.contact .contact-map iframe {
    width: 100%;
    height: 450px;
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
            <div class="container">

<div class="tryme"><h1>Contact us</h1></div>



<div class="contact">
            <div class="container py-3 neumorphic3">
                <div class="row inset4">
                    <div class="col-lg-12 ">
                        <div class="contact-info">
                            <h2>Our Office</h2>
                            <h3><i class="fa fa-map-marker"></i>Cebu City, Cebu, Philippines</h3>
                            <h3><i class="fa fa-envelope"></i>jutsustore@art.ph</h3>
                            <h3><i class="fa fa-phone"></i>+123-456-789</h3>
                            <div class="social">
                                <a href=""><i class="fab fa-twitter"></i></a>
                                <a href=""><i class="fab fa-facebook-f"></i></a>
                                <a href=""><i class="fab fa-google"></i></a>
                                <a href=""><i class="fab fa-instagram"></i></a>
                                <a href=""><i class="fab fa-youtube"></i></a>
                            </div>
                        </div>
                    </div>
                    <br>
                    <br>
                    <div class="col-lg-12">
                        <div class="contact-form">
                            <form>
                                <div class="row">
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" placeholder="Your Name" />
                                    </div>
                                    <div class="col-md-6">
                                        <input type="email" class="form-control" placeholder="Your Email" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Subject" />
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control" rows="5" placeholder="Message"></textarea>
                                </div>
                                <div><button class="btn inset2" type="submit"><p>Send Message<p></button></div>
                            </form>
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