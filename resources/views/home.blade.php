@extends('layouts.header-footer-master') 

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
      <h5>SEARCH FOR <a href="#" class="subtitle-link">THE BEST BUSINESS</a> FOR YOU</h5>
    </div>
</div>

<!-- ======= SPECIAL BUSINESS SECTION ======= -->
<section class="section site-portfolio">  
    <div class="container">

        <!--CATEGORIES SELECTION-->
        <div class="row mb-5 align-items-center">
            <div class="col-md-12 col-lg-12 text-center text-lg-center">
                <div id="filters" class="filters">
                    <a href="#" data-filter="*" class="active">ALL</a>
                    <a href="#" data-filter=".restaurants">RESTAURANTS</a>
                    <a href="#" data-filter=".markets">MARKETS</a>
                    <a href="#" data-filter=".entertainment">ENTERTAINMENT</a>
                    <a href="#" data-filter=".arts">ARTS</a>
                    <a href="#" data-filter=".shopping">SHOPPING</a>
                    <a href="#" data-filter=".insurance">INSURANCE</a>
                    <a href="#" data-filter=".house">HOUSE</a>
                    <a href="#" data-filter=".pets">PETS</a>
                    <a href="#" data-filter=".healthCare">HEALTH CARE</a>
                    <a href="#" data-filter=".autoSales">AUTO SALES</a>
                    <!--THIS ONE GOES TO THE ALL BUSINESS SEARCH PAGE-->
                    <a href="#" data-filter=".more">MORE</a>
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
                <a href="#" class="item-wrap fancybox">
                    <div class="work-info">
                        <h3>Casa Linda Restaurante</h3>
                        <span>See More</span>
                    </div>
                    <img class="img-fluid" src="img/principalBusinessImg/img_0.jpg">
                </a>
            </div>

            <!--Dely Very Dely-->
            <div class="item restaurants col-sm-6 col-md-4 col-lg-3 mb-4">
                <a href="#" class="item-wrap fancybox">
                    <div class="work-info">
                        <h3>Dely Very Dely</h3>
                        <span>See More</span>
                    </div>
                    <img class="img-fluid" src="img/principalBusinessImg/img_13.jpeg">
                </a>
            </div>

            <!--The Art House-->
            <div class="item arts shopping col-sm-6 col-md-4 col-lg-3 mb-4">
                <a href="#" class="item-wrap fancybox">
                    <div class="work-info">
                        <h3>The Art House</h3>
                        <span>See More</span>
                    </div>
                    <img class="img-fluid" src="img/principalBusinessImg/img_12.jpg">
                </a>
            </div>

            <!--Casita de Muñecas-->
            <div class="item shopping col-sm-6 col-md-4 col-lg-3 mb-4">
                <a href="#" class="item-wrap fancybox">
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
            <div class="item healthCare col-sm-6 col-md-4 col-lg-3 mb-4">
                <a href="#" class="item-wrap fancybox">
                    <div class="work-info">
                        <h3>Professional Massages</h3>
                        <span>See More</span>
                    </div>
                    <img class="img-fluid" src="img/principalBusinessImg/img_10.jpg">
                </a>
            </div>

            <!--Le Club 4 / Oui Ou-->
            <div class="item restaurants entertainment col-sm-6 col-md-4 col-lg-3 mb-4">
                <a href="#" class="item-wrap fancybox">
                    <div class="work-info">
                        <h3>Le Club 4 / Oui Oui</h3>
                        <span>See More</span>
                    </div>
                    <img class="img-fluid" src="img/principalBusinessImg/img_14.jpeg">
                </a>
            </div>

            <!--Rolo Hair-->
            <div class="item healthCare col-sm-6 col-md-4 col-lg-3 mb-4">
                <a href="#" class="item-wrap fancybox">
                    <div class="work-info">
                        <h3>Rolo Hair</h3>
                        <span>See More</span>
                    </div>
                    <img class="img-fluid" src="img/principalBusinessImg/img_9.jpg">
                </a>
            </div>

            <!--Fusion Tactical-->
            <div class="item shopping col-sm-6 col-md-4 col-lg-3 mb-4">
                <a href="#" class="item-wrap fancybox">
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
            <a href="#" class="item-wrap fancybox">
                <div class="work-info">
                    <h3>Media Luna</h3>
                    <span>See More</span>
                </div>
                <img class="img-fluid" src="img/principalBusinessImg/img_7.jpg">
            </a>
        </div>

        <!-- Laundry -->
        <div class="item markets house col-sm-6 col-md-4 col-lg-3 mb-4">
            <a href="#" class="item-wrap fancybox">
                <div class="work-info">
                    <h3>Laundry</h3>
                    <span>See More</span>
                </div>
                <img class="img-fluid" src="img/principalBusinessImg/img_5.jpg">
            </a>
        </div>

        <!-- Gardening Services -->
        <div class="item house markets col-sm-6 col-md-4 col-lg-3 mb-4">
            <a href="#" class="item-wrap fancybox">
                <div class="work-info">
                    <h3>Gardening Services</h3>
                    <span>See More</span>
                </div>
                <img class="img-fluid" src="img/principalBusinessImg/img_6.jpg">
            </a>
        </div>

        <!-- Laundry Amigos -->
        <div class="item house col-sm-6 col-md-4 col-lg-3 mb-4">
            <a href="#" class="item-wrap fancybox">
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
            <a href="#" class="item-wrap fancybox">
                <div class="work-info">
                    <h3>Meson de Don Quijote</h3>
                    <span>See More</span>
                </div>
                <img class="img-fluid" src="img/principalBusinessImg/img_4.jpg">
            </a>
        </div>

        <!-- Mojo Dental -->
        <div class="item healthCare col-sm-6 col-md-4 col-lg-3 mb-4">
            <a href="#" class="item-wrap fancybox">
                <div class="work-info">
                    <h3>Mojo Dental</h3>
                    <span>See More</span>
                </div>
                <img class="img-fluid" src="img/principalBusinessImg/img_3.jpg">
            </a>
        </div>

        <!-- Casa Catrina -->
        <div class="item shopping house col-sm-6 col-md-4 col-lg-3 mb-4">
            <a href="#" class="item-wrap fancybox">
                <div class="work-info">
                    <h3>Casa Catrina</h3>
                    <span>See More</span>
                </div>
                <img class="img-fluid" src="img/principalBusinessImg/img_2.jpg">
            </a>
        </div>

        <!-- Luxury Homes -->
        <div class="item insurance house col-sm-6 col-md-4 col-lg-3 mb-4">
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
      <a href="#" class="buttonList">Learn How</a>
    </div>
</div>

<!--INFO SECTION-->
<div class="container imgRight">
    <div class="row no-gutter">
      <div class="d-none d-md-flex col-md-4 col-lg-4 bg-image"></div>
      <div class="col-md-6 col-lg-8">
        <div class="d-flex alig-items-center py-5">
          <div class="container">
            <div class="row">
              <div class="col-md-12 col-lg-11 mx-auto">
                <h2>We Make it Easy for Both Businesses and Customers</h2>
                <p>
                  Have you been frustrated by the lack of businesses with webpages around Lakeside? 
                  We list businesses and manage their pages to ensure they are up to date, and all in one 
                  convenient location. You can search for businesses by category or look up a specific business 
                  to view their own external page or their professionally managed webpage through our portal. 
                </p>
                <a href="#">Sing Up Your Business Today!</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
<!--END INFO SECTION-->

@endsection