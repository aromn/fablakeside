@extends('layouts.master') 

@section('section')

<!--HOME HERO IMAGE-->
<div class="container ml-auto text-center heroImg">
    <div class="backImg">
      <h1>FIND A BUSINESS AJIJIC</h1>
      <p>{{ __('general.webpage_description') }} <br> {{ __('general.webpage_description2') }}</p>
    </div>
</div>

<!--Search Section Button-->
<div class="container subtitle w-75 shadow align-self-center">
    <div class="text-center py-2">
      <!--THIS ONE GOES TO THE ALL BUSINESS SEARCH PAGE-->
      <h5>{{ __('general.search_for') }} <a href="{{ route('specialBusiness1', app()->getLocale()) }}" class="subtitle-link">{{ __('general.best_business') }}</a> {{ __('general.for_you') }}</h5>
    </div>
</div>

<!-- ======= SPECIAL BUSINESS SECTION ======= -->
<section class="section site-portfolio">  
    <div class="container menuPortfolio">

        <!--CATEGORIES SELECTION-->
        <div class="row mb-5 align-items-center categoriesSection">
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
                        <span>{{ __('general.see_more') }}</span>
                    </div>
                    <img class="img-fluid" src="img/principalBusinessImg/img_0.jpg">
                </a>
            </div>

            <!--Deli Very Deli-->
            <div class="item restaurants col-sm-6 col-md-4 col-lg-3 mb-4">
                <a href="https://www.fabajijicfoodandbev.com/deli-very-deli" class="item-wrap fancybox">
                    <div class="work-info">
                        <h3>Deli-Very Deli</h3>
                        <span>{{ __('general.see_more') }}</span>
                    </div>
                    <img class="img-fluid" src="img/principalBusinessImg/img_13.jpeg">
                </a>
            </div>

            <!--The Art House-->
            <div class="item retail shopping col-sm-6 col-md-4 col-lg-3 mb-4">
                <a href="https://www.fabajijiclisted.com/the-art-house" class="item-wrap fancybox">
                    <div class="work-info">
                        <h3>The Art House</h3>
                        <span>{{ __('general.see_more') }}</span>
                    </div>
                    <img class="img-fluid" src="img/principalBusinessImg/img_12.jpg">
                </a>
            </div>

            <!--Casita de Muñecas-->
            <div class="item retail col-sm-6 col-md-4 col-lg-3 mb-4">
                <a href="https://www.fabajijiclisted.com/casita-de-mu" class="item-wrap fancybox">
                    <div class="work-info">
                        <h3>Casita de Muñecas</h3>
                        <span>{{ __('general.see_more') }}</span>
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
                        <span>{{ __('general.see_more') }}</span>
                    </div>
                    <img class="img-fluid" src="img/principalBusinessImg/img_10.jpg">
                </a>
            </div>

            <!--Le Club 4 / Oui Ou-->
            <div class="item restaurants bars col-sm-6 col-md-4 col-lg-3 mb-4">
                <a href="#" class="item-wrap fancybox">
                    <div class="work-info">
                        <h3>Le Club 4 / Oui Oui</h3>
                        <span>{{ __('general.see_more') }}</span>
                    </div>
                    <img class="img-fluid" src="img/principalBusinessImg/img_14.jpeg">
                </a>
            </div>

            <!--Rolo Hair-->
            <div class="item services col-sm-6 col-md-4 col-lg-3 mb-4">
                <a href="https://www.fabajijiclisted.com/rolo-hair" class="item-wrap fancybox">
                    <div class="work-info">
                        <h3>Rolo Hair</h3>
                        <span>{{ __('general.see_more') }}</span>
                    </div>
                    <img class="img-fluid" src="img/principalBusinessImg/img_9.jpg">
                </a>
            </div>

            <!--Fusion Tactical-->
            <div class="item retail col-sm-6 col-md-4 col-lg-3 mb-4">
                <a href="https://www.fabajijiclisted.com/fusion-tactica" class="item-wrap fancybox">
                    <div class="work-info">
                        <h3>Fusion Tactical</h3>
                        <span>{{ __('general.see_more') }}</span>
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
                    <span>{{ __('general.see_more') }}</span>
                </div>
                <img class="img-fluid" src="img/principalBusinessImg/img_7.jpg">
            </a>
        </div>

        <!-- Laundry -->
        <div class="item services house col-sm-6 col-md-4 col-lg-3 mb-4">
            <a href="https://www.fabajijiclisted.com/la-princesa" class="item-wrap fancybox">
                <div class="work-info">
                    <h3>Mi Princesa Laundry</h3>
                    <span>{{ __('general.see_more') }}</span>
                </div>
                <img class="img-fluid" src="img/principalBusinessImg/img_5.jpg">
            </a>
        </div>

        <!-- Gardening Services -->
        <div class="item services col-sm-6 col-md-4 col-lg-3 mb-4">
            <a href="https://www.fabajijiclisted.com/andres-gardening" class="item-wrap fancybox">
                <div class="work-info">
                    <h3>Gardening Services</h3>
                    <span>{{ __('general.see_more') }}</span>
                </div>
                <img class="img-fluid" src="img/principalBusinessImg/img_6.jpg">
            </a>
        </div>

        <!-- Laundry Amigos -->
        <div class="item services col-sm-6 col-md-4 col-lg-3 mb-4">
            <a href="https://www.fabajijiclisted.com/lavanderia-y-tintoreria-amigos" class="item-wrap fancybox">
                <div class="work-info">
                    <h3>Laundry Amigos</h3>
                    <span>{{ __('general.see_more') }}</span>
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
                    <span>{{ __('general.see_more') }}</span>
                </div>
                <img class="img-fluid" src="img/principalBusinessImg/img_4.jpg">
            </a>
        </div>

        <!-- Mojo Dental -->
        <div class="item services col-sm-6 col-md-4 col-lg-3 mb-4">
            <a href="https://www.fabajijiclisted.com/mojo-dental" class="item-wrap fancybox">
                <div class="work-info">
                    <h3>Mojo Dental</h3>
                    <span>{{ __('general.see_more') }}</span>
                </div>
                <img class="img-fluid" src="img/principalBusinessImg/img_3.jpg">
            </a>
        </div>

        <!-- Casa Catrina -->
        <div class="item retail col-sm-6 col-md-4 col-lg-3 mb-4">
            <a href="https://www.fabajijiclisted.com/casa-de-catrina" class="item-wrap fancybox">
                <div class="work-info">
                    <h3>Casa Catrina</h3>
                    <span>{{ __('general.see_more') }}</span>
                </div>
                <img class="img-fluid" src="img/principalBusinessImg/img_2.jpg">
            </a>
        </div>

        <!-- Luxury Homes -->
        <div class="item services col-sm-6 col-md-4 col-lg-3 mb-4">
            <a href="https://www.luxuryhomesajijic.com/properties" class="item-wrap fancybox">
                <div class="work-info">
                    <h3>Luxury Homes</h3>
                    <span>{{ __('general.see_more') }}</span>
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
      <h1>{{ __('general.add_your_business') }}</h1>
      <h4>{{ __('general.your_business_name_msg') }}</h4>
      <br>
      <a href="{{ route('listBusiness1', app()->getLocale()) }}" class="buttonList">{{ __('general.learn_how') }}</a>
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
                <h2 class="text-center">{{ __('general.we_make_it_easy_msg') }}</h2>
                <p class="pb-4 text-justify">
                  {{ __('general.have_you_been_frustrated') }}
                </p>
                <a class="pb-4 buton" href="{{ route('listBusiness1', app()->getLocale()) }}">{{ __('general.sign_up_your_business') }}</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
<!--END INFO SECTION-->

@endsection