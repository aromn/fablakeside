@extends('layouts.master') 

@section('NavBar')
<nav class="navbar navbar-expand-lg menuMovil">
    <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-md-center" id="navbarResponsive" >
        <ul class="navbar-nav">
          <li class="nav-item active">
            <a class="nav-link active" href="{{ route('home1') }}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('specialBusiness1') }}">Business Categories</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('listBusiness1') }}">List Your Business</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('ourTeam1') }}">About Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('contact1') }}">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
@endsection

@section('section')

<!--HOME HERO IMAGE-->
<div class="container ml-auto text-center heroImg">
    <div class="backImg">
      <h1>FIND A BUSINESS AJIJIC</h1>
      <p>Webpage Management for Business Owners <br> and One-Stop Portal Costumers</p>
    </div>
</div>

<!--Search Section Button-->
<div class="container subtitle w-75 shadow align-self-center">
    <div class="text-center py-2">
      <!--THIS ONE GOES TO THE ALL BUSINESS SEARCH PAGE-->
      <h5>SEARCH FOR <a href="{{ route('specialBusiness1') }}" class="subtitle-link">THE BEST BUSINESS</a> FOR YOU</h5>
    </div>
</div>

<!-- ======= SPECIAL BUSINESS SECTION ======= -->
<section class="section site-portfolio">  
    <div class="container menuPortfolio">

        <!--CATEGORIES SELECTION-->
        <div class="row mb-5 align-items-center">
            <div class="col-md-12 col-lg-12 text-center text-lg-center">
                <div id="filters" class="filters">
                    <a href="#" data-filter="*" class="active">ALL</a>
                    <a href="#" data-filter=".restaurants">RESTAURANTS</a>
                    <a href="#" data-filter=".retail">RETAIL</a>
                    <a href="#" data-filter=".services">SERVICES</a>
                    <a href="#" data-filter=".bars">BARS & CANTINAS</a>
                </div>
            </div>
        </div>
        <!--END CATEGORIES SELECTION-->

        <!--BUSINESS PICTURE SECTION-->
        <div id="portfolio-grid" class="row no-gutter" ><!--data-aos="fade-up" data-aos-delay="200"-->
        <!--The Fade In Data AOS effect doesn't work, don't know why-->

            <!-- COLUMN 1 | 4 ITEMS-->

            <!--Casa Linda Restaurante-->
            <div class="item restaurants col-sm-6 col-md-4 col-lg-3 mb-4">
                <a href="https://www.fabajijicfoodandbev.com/casa-linda" class="item-wrap fancybox">
                    <div class="work-info">
                        <h3>Casa Linda Restaurante</h3>
                        <span>See More</span>
                    </div>
                    <img class="img-fluid" src="img/principalBusinessImg/img_0.jpg">
                </a>
            </div>

            <!--Dely Very Dely-->
            <div class="item restaurants col-sm-6 col-md-4 col-lg-3 mb-4">
                <a href="https://www.fabajijicfoodandbev.com/deli-very-deli" class="item-wrap fancybox">
                    <div class="work-info">
                        <h3>Dely Very Dely</h3>
                        <span>See More</span>
                    </div>
                    <img class="img-fluid" src="img/principalBusinessImg/img_13.jpeg">
                </a>
            </div>

            <!--The Art House-->
            <div class="item retail shopping col-sm-6 col-md-4 col-lg-3 mb-4">
                <a href="https://www.fabajijiclisted.com/the-art-house" class="item-wrap fancybox">
                    <div class="work-info">
                        <h3>The Art House</h3>
                        <span>See More</span>
                    </div>
                    <img class="img-fluid" src="img/principalBusinessImg/img_12.jpg">
                </a>
            </div>

            <!--Casita de Muñecas-->
            <div class="item retail col-sm-6 col-md-4 col-lg-3 mb-4">
                <a href="https://www.fabajijiclisted.com/casita-de-mu" class="item-wrap fancybox">
                    <div class="work-info">
                        <h3>Casita de Muñecas</h3>
                        <span>See More</span>
                    </div>
                    <img class="img-fluid" src="img/principalBusinessImg/img_11.jpg">
                </a>
            </div>

            <!-- END COLUMN 1 | 4 ITEMS-->


            <!-- COLUMN 2 | 4 ITEMS-->

            <!--Professional Massages-->
            <div class="item services col-sm-6 col-md-4 col-lg-3 mb-4">
                <a href="https://www.fabajijiclisted.com/professional-massages-of-lakeside" class="item-wrap fancybox">
                    <div class="work-info">
                        <h3>Professional Massages</h3>
                        <span>See More</span>
                    </div>
                    <img class="img-fluid" src="img/principalBusinessImg/img_10.jpg">
                </a>
            </div>

            <!--Le Club 4 / Oui Ou-->
            <div class="item restaurants bars col-sm-6 col-md-4 col-lg-3 mb-4">
                <a href="#" class="item-wrap fancybox">
                    <div class="work-info">
                        <h3>Le Club 4 / Oui Oui</h3>
                        <span>See More</span>
                    </div>
                    <img class="img-fluid" src="img/principalBusinessImg/img_14.jpeg">
                </a>
            </div>

            <!--Rolo Hair-->
            <div class="item services col-sm-6 col-md-4 col-lg-3 mb-4">
                <a href="https://www.fabajijiclisted.com/rolo-hair" class="item-wrap fancybox">
                    <div class="work-info">
                        <h3>Rolo Hair</h3>
                        <span>See More</span>
                    </div>
                    <img class="img-fluid" src="img/principalBusinessImg/img_9.jpg">
                </a>
            </div>

            <!--Fusion Tactical-->
            <div class="item retail col-sm-6 col-md-4 col-lg-3 mb-4">
                <a href="https://www.fabajijiclisted.com/fusion-tactica" class="item-wrap fancybox">
                    <div class="work-info">
                        <h3>Fusion Tactical</h3>
                        <span>See More</span>
                    </div>
                    <img class="img-fluid" src="img/principalBusinessImg/img_8.jpg">
                </a>
            </div>

        <!-- END COLUMN 2 | 4 ITEMS-->


        <!-- COLUMN 3 | 4 ITEMS-->

        <!-- Media Luna -->
        <div class="item restaurants healthCare col-sm-6 col-md-4 col-lg-3 mb-4">
            <a href="https://www.fabajijicfoodandbev.com/media-luna" class="item-wrap fancybox">
                <div class="work-info">
                    <h3>Media Luna</h3>
                    <span>See More</span>
                </div>
                <img class="img-fluid" src="img/principalBusinessImg/img_7.jpg">
            </a>
        </div>

        <!-- Laundry -->
        <div class="item services house col-sm-6 col-md-4 col-lg-3 mb-4">
            <a href="https://www.fabajijiclisted.com/la-princesa" class="item-wrap fancybox">
                <div class="work-info">
                    <h3>Mi Princesa Laundry</h3>
                    <span>See More</span>
                </div>
                <img class="img-fluid" src="img/principalBusinessImg/img_5.jpg">
            </a>
        </div>

        <!-- Gardening Services -->
        <div class="item services col-sm-6 col-md-4 col-lg-3 mb-4">
            <a href="https://www.fabajijiclisted.com/andres-gardening" class="item-wrap fancybox">
                <div class="work-info">
                    <h3>Gardening Services</h3>
                    <span>See More</span>
                </div>
                <img class="img-fluid" src="img/principalBusinessImg/img_6.jpg">
            </a>
        </div>

        <!-- Laundry Amigos -->
        <div class="item services col-sm-6 col-md-4 col-lg-3 mb-4">
            <a href="https://www.fabajijiclisted.com/lavanderia-y-tintoreria-amigos" class="item-wrap fancybox">
                <div class="work-info">
                    <h3>Laundry Amigos</h3>
                    <span>See More</span>
                </div>
                <img class="img-fluid" src="img/principalBusinessImg/img_15.jpeg">
            </a>
        </div>

        <!-- END COLUMN 3 | 4 ITEMS-->

        <!-- COLUMN 4 OF 4 ITEMS-->

        <!-- Meson de Don Quijote -->
        <div class="item restaurants col-sm-6 col-md-4 col-lg-3 mb-4">
            <a href="https://www.fabajijicfoodandbev.com/meson-don-quijote" class="item-wrap fancybox">
                <div class="work-info">
                    <h3>Meson de Don Quijote</h3>
                    <span>See More</span>
                </div>
                <img class="img-fluid" src="img/principalBusinessImg/img_4.jpg">
            </a>
        </div>

        <!-- Mojo Dental -->
        <div class="item services col-sm-6 col-md-4 col-lg-3 mb-4">
            <a href="https://www.fabajijiclisted.com/mojo-dental" class="item-wrap fancybox">
                <div class="work-info">
                    <h3>Mojo Dental</h3>
                    <span>See More</span>
                </div>
                <img class="img-fluid" src="img/principalBusinessImg/img_3.jpg">
            </a>
        </div>

        <!-- Casa Catrina -->
        <div class="item retail col-sm-6 col-md-4 col-lg-3 mb-4">
            <a href="https://www.fabajijiclisted.com/casa-de-catrina" class="item-wrap fancybox">
                <div class="work-info">
                    <h3>Casa Catrina</h3>
                    <span>See More</span>
                </div>
                <img class="img-fluid" src="img/principalBusinessImg/img_2.jpg">
            </a>
        </div>

        <!-- Luxury Homes -->
        <div class="item services col-sm-6 col-md-4 col-lg-3 mb-4">
            <a href="#" class="item-wrap fancybox">
                <div class="work-info">
                    <h3>Luxury Homes</h3>
                    <span>See More</span>
                </div>
                <img class="img-fluid" src="img/principalBusinessImg/img_1.jpg">
            </a>
        </div>

      <!-- END COLUMN 4 OF 4 ITEMS-->

        </div>
    </div>
</section>
<!-- End  Business Section -->

<!--HOME ACTION IMAGE-->
<div class="container ml-auto text-center">
    <div class="callActionSection" style="background-image: url('img/infoSectionImg.png');">
      <h1>ADD YOUR BUSINESS</h1>
      <h4>Your business name could be here!</h4>
      <br>
      <a href="{{ route('listBusiness1') }}" class="buttonList">Learn How</a>
    </div>
</div>

<!--INFO SECTION-->
<div class="container">
    <div class="row no-gutter imgRight">
      <div class="d-none d-md-flex col-md-4 col-lg-4 bg-image"></div>
      
      <div class="col-sm-12 col-md-6 col-lg-8">
        <div class="d-flex alig-items-center py-5">
          <div class="container textHome">
            <div class="row">
              <div class="col-sm-12 col-md-12 col-lg-11 mx-auto">
                <h2 class="text-center">We Make it Easy for Both Businesses and Customers</h2>
                <p class="pb-4 text-justify">
                  Have you been frustrated by the lack of businesses with webpages around Lakeside? 
                  We list businesses and manage their pages to ensure they are up to date, and all in one 
                  convenient location. You can search for businesses by category or look up a specific business 
                  to view their own external page or their professionally managed webpage through our portal. 
                </p>
                <a class="pb-4 buton" href="{{ route('listBusiness1') }}">Sing Up Your Business Today!</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
<!--END INFO SECTION-->

@endsection