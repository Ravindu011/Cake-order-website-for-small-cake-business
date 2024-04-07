<html>
    <head>
        <title></title>
        <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CakeZone</title>
    <link rel="shortcut icon" type="image" href="./image/logo.png">
    <link rel="stylesheet" href="test.css">
    <!-- bootstrap links -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <!-- bootstrap links -->
    <!-- fonts links -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Uchen&display=swap" rel="stylesheet">
    <!-- fonts links -->
    <!-- icons links -->
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <!-- icons links -->
    <!-- animation links -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- animation links -->
    </head>
    <body>
    <?php include 'header.php'; ?>
        <div class="all-content">

            <div class="home">
              <div class="content" data-aos="zoom-out-right">
                  <h3>Delicious
                      <br>CakeZone
                  </h3>
                  <h2>Category <span class="changecontent"></span></h2>
                
              </div>
              <div class="img"  data-aos="zoom-out-left">
                 
              </div>
          </div>
          <!-- home section end -->
                

      <!-- banner -->
        <div class="banner"    data-aos="fade-up"
        data-aos-duration="1500">
            <div class="content">
                <h3 class="offer-head">Delicious Cake</h3>
                <h2>UPTO 50% OFF</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam, quod.</p>
                <div id="btnorder"><button>Order Now</button></div>
            </div>
            <div class="img">
                <img src="./image/banner-background.png" alt="">
            </div>
        </div>
      <!-- banner end -->
      <!-- gallary -->
      <section id="gallary"    data-aos="fade-up"
      data-aos-duration="1500">
        <div class="container">
            <h1>CATEGORIES</h1>
            <div class="row" style="margin-top: 30px;">
                <div class="col-md-4 py-3 py-md-0">
                    <div class="card">
                        <div class="overlay">
                            <h3 class="text-center">Cakes</h3>
                        </div>
                        <img src="./image/o1.jpg" alt="">
                    </div>
                </div>
                <div class="col-md-4 py-3 py-md-0">
                    <div class="card">
                        <div class="overlay">
                            <h3 class="text-center">Deserts</h3>
                        </div>
                        <img src="./image/o2.jpg" alt="">
                    </div>
                </div>
                <div class="col-md-4 py-3 py-md-0">
                    <div class="card">
                        <div class="overlay">
                            <h3 class="text-center"><a href="sweets.php">Sweets</a> </h3>
                        </div>
                        <img src="./image/o3.jpg" alt="">
                    </div>
                </div>
            </div>


            <div class="row" style="margin-top: 30px;"    data-aos="fade-up"
            data-aos-duration="1500">
                <div class="col-md-4 py-3 py-md-0">
                    <div class="card">
                        <div class="overlay">
                            <h3 class="text-center">Cup Cakes</h3>
                        </div>
                        <img src="./image/o4.jpg" alt="">
                    </div>
                </div>
                <div class="col-md-4 py-3 py-md-0">
                    <div class="card">
                        <div class="overlay">
                            <h3 class="text-center">Party Pack</h3>
                        </div>
                        <img src="./image/o5.jpg" alt="">
                    </div>
                </div>
                <div class="col-md-4 py-3 py-md-0">
                    <div class="card">
                        <div class="overlay">
                            <h3 class="text-center">Festival Pack</h3>
                        </div>
                        <img src="./image/o6.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
      </section>
      <!-- gallary -->

      
      
      


      <!-- contact  -->
      <div class="container" id="contact"    data-aos="fade-up"
      data-aos-duration="1500">
        <h1>CONTACT US</h1>
        <div class="row">
            <div class="col-md-4 py-1 py-md-0">
                <div class="form-group">
                    <input type="text" class="form-control" id="usr" placeholder="Name">
                </div>
            </div>
            <div class="col-md-4 py-1 py-md-0">
                <div class="form-group">
                    <input type="email" class="form-control" id="eml" placeholder="Email">
                </div>
            </div>
            <div class="col-md-4 py-1 py-md-0">
                <div class="form-group">
                    <input type="text" class="form-control" id="phn" placeholder="Phone">
                </div>
            </div>
            
        </div>
        <div class="form-group">
            <textarea class="form-control" rows="5" id="comment" placeholder="Message"></textarea>
        </div>
        <div id="messagebtn"><button>Send Message</button></div>
      </div>
      <!-- contact end -->


      <!-- footer -->
      <footer id="footer"    data-aos="fade-up"
      data-aos-duration="1500">
        <h1 class="text-center">Cake Bakery</h1>
        <p class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae, accusantium.</p>
        <div class="icons text-center">
            <i class="bx bxl-twitter"></i>
            <i class="bx bxl-facebook"></i>
            <i class="bx bxl-google"></i>
            <i class="bx bxl-skype"></i>
            <i class="bx bxl-instagram"></i>
        </div>
        <div class="copyright text-center">
            &copy; Copyright <strong>Cake Bakery</strong> .All Rights Reserved
        </div>
        <div class="credite text-center">
            Designed By <a href="#"><span>SA coding</span></a>
        </div>
      </footer>
      <!-- footer -->

      <a href="#" class="arrow"><i><img src="./image/up-arrow.png" alt="" width="50px"></i></a>



    </div>

  





    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
      </script>

          
    </body>
</html>