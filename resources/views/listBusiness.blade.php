@extends('layouts.master') 

@section('NavBar')
<nav class="navbar navbar-expand-lg ">
    <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-md-center" id="navbarResponsive" >
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="{{ route('home1') }}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('specialBusiness1') }}">Business Categories</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link active" href="{{ route('listBusiness1') }}">List Your Business</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('ourTeam1') }}">Our Team</a>
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

<!--HERO IMAGE-->
<div class="container ml-auto text-center">
    <div class="backImg-small">
      <h1>Be part of the team</h1>
      <p>and let a whole new buch of people to know your business</p>
    </div>
</div>

<!--Subtitle-->
<div class="container subtitle w-75 shadow align-self-center">
    <div class="text-center py-2">
      <!--THIS ONE GOES TO THE ALL BUSINESS SEARCH PAGE-->
      <h5>SEARCH FOR <a href="{{ route('specialBusiness1') }}" class="subtitle-link">THE BEST BUSINESS</a> FOR YOU</h5>
    </div>
</div>

<!--PRESENTATION-->
<div class="container pt-5 d-flex justify-content-center">
    <div class="row align-items-center">
        <div class="col-lg-4 col-sm-12 text-center">
            <img src="img/ListPic.png" style="width: 80%;">
        </div> 
        <div class="col-lg-8 col-sm-12 text-center text-lg-left">
              <div class="container-fluid">
                  <div class="AlexName">
                      <h2>Our Services & Prices</h2>
                  </div>
                  <div class="quoteText">
                      <p>We provide various options and packages because we want to make this service 
                          accessible to all businesses and we understand no two businesses and their 
                          specific needs are exactly the same.</p>
                  </div>
              </div>
        </div>
    </div>
</div>

<!--INFO TEXT-->
<div class="container text-center infoTextSection">
    <div class="row">
        <div class="col-lg-12 col-sm-12 align-self-center">
            <h3>
                Your business would be listed under a category that is specific to your business 
                in our site's directory
            </h3>
        </div>
    </div>
</div>

<!--LISTING SECTION-->

    <!--TITLE
        Basic Listing Package
    -->
    <div class="container titleListing mt-5 px-4">
        <div class="row">
            <div class="col-lg-1 col-sm-12 text-center">
                <img src="../FAB-Ajijic/img/acceptIcon.png" style="width: 64px; height: auto;">
            </div>
            <div class="col-lg-7">
                <hr>
            </div>
            <div class="col-lg-4 col-sm-12 text-center text-lg-right">
                <h3>Basic Listing Package</h3>
                <p>We will build you</p>
            </div>
        </div>
    </div>
    <!--Content 
        Basic Listing Package
    -->
    <div class="container contentListing mt-5 mb-5 px-2 d-flex">
        <div class="row">
            <div class="col-lg-8 col-sm-12 text-center text-lg-left">
                <ul>
                    <li>
                        <p>One-time fee for site construction</p>
                    </li>
                    <li>
                        <p>Custom 1 page site</p>
                    </li>
                    <li>
                        <p>Listing and Basic maintenece</p>
                    </li>
                    <li>
                        <p>You can list your business under 1 to 3 categories*</p>
                    </li>
                </ul>
                <p style="font-size: 12px;">
                    *Businesses that signed up with the Apollo 2020 program prior to June 15th, 
                    2020 will receive their first 3 months free
                </p>
            </div>
            <div class="col-lg-4 col-sm-12 text-lg-right text-center align-self-end">
                <button type="button" class="btn btn-primary btn-lg" style="width: 200px;" id="moreInfo">More Info</button>
            </div>
        </div>
    </div>
    <!--
        More Info Basic Listing Package
    -->
    <div class="container">
        <div class="row">
            <div id="windowOver" class="windowOver" alt="infoBasicListing">
                <div class="p-5 text-center contentWindow">
                    <span class="close">&times;</span>
                    <br>
                    <h3>Basic Listing Package</h3>
                    <hr>
                    <p>
                        Most businesses do not need a complicated,
                        multipage website or the costs associated with one.
                    </p>
                    <p>
                        We will build you a custom 1-page site that is listed under a category that is specific 
                        to your business in our site's directory for the bargain price of $200 pesos a month, 
                        and you won't be charged 1 centavo before we sign 100 businesses to our site, because 
                        without the volume we really aren't providing you the service we sold you on. 
                    </p>
                    <p>
                        If you can't pick just one category to list under we can help you there too. 
                    </p>
                    <p>
                        List under two categories for 350 a month or three for 500 a month. 
                        (Businesses that signed up with the Apollo 2020 program prior to June 15th, 
                        2020 will receive their first 3 months free).
                    </p>
                    <hr>
                    <br>
                    <button type="button" class="btn btn-primary btn-lg text-center" style="width: 200px;">I want it!</button>
                </div>
            </div>
        </div>
    </div>

<!--TITLE
        Custom Site Construction and Maintenance
    -->
    <div class="container titleListing mt-5 px-4">
        <div class="row">
            <div class="col-lg-1 col-sm-12 text-center">
                <img src="../FAB-Ajijic/img/acceptIcon.png" style="width: 64px; height: auto;">
            </div>
            <div class="col-lg-5">
                <hr>
            </div>
            <div class="col-lg-6 col-sm-12 text-center text-lg-right">
                <h3>Custom Site Construction and Maintenance</h3>
                <p>We will build you</p>
            </div>
        </div>
    </div>
    <!--Content 
        Custom Site Construction and Maintenance
    -->
    <div class="container contentListing mt-5 mb-5 px-4 d-flex">
        <div class="row ">
            <div class="col-lg-8 col-sm-12 text-center text-lg-left">
                <ul>
                    <li>
                        <p>One-time fee for site construction</p>
                    </li>
                    <li>
                        <p>More robust Site</p>
                    </li>
                    <li>
                        <p>You need more than 1 page site? You got it</p>
                    </li>
                    <li>
                        <p>Perfect for stores who want to sell online</p>
                    </li>
                    <li>
                        <p>Monthly Maintenance</p>
                    </li>
                    <li>
                        <p>You can list your business under 1 to 3 categories*</p>
                    </li>
                    <p style="font-size: 12px;">
                        *Businesses that signed up with the Apollo 2020 program prior to June 15th, 
                        2020 will receive their first 3 months free
                    </p>
                </ul>
            </div>
            <div class="col-lg-4 col-sm-12 text-center align-self-end">
                <button type="button" class="btn btn-primary btn-lg" style="width: 200px;" id="moreInfo-CustomSite">More Info</button>
            </div>
        </div>
    </div>
     <!--
        More Info Custom Site Construction and Maintenance
    -->
    <div class="container">
        <div class="row">
            <div id="windowOver-CustomSite" class="windowOver" alt="Custom Site Construction and Maintenance">
                <div class="p-5 text-center contentWindow">
                    <span class="close-CustomSite">&times;</span>
                    <br>
                    <h3>Custom Site Construction and Maintenance</h3>
                    <hr>
                    <p>
                        In addition to a basic listing service, we also offer a service to build 
			a more robust custom website for you if your needs are greater than we can 
			provide on one single page. 
                    </p>
                    <p>
                        If you are a store interested in selling online or a medical practitioner 
			who wants to provide the customers with the proper brand image before they even 
			step into your office, this might be something for you.  
                    </p>
                    <p>
                        We will custom build your webpage, host it on our site, and maintain it 
			for $500 pesos a month (construction fees are an extra, one-time fee and 
			vary depending on what you need from your webpage and the time it will take to construct).
                    </p>
                    <hr>
                    <br>
                    <button type="button" class="btn btn-primary btn-lg text-center" style="width: 200px;">I want it!</button>
                </div>
            </div>
        </div>
    </div>

<!--INFO TEXT-->
<div class="container text-center infoTextSection">
    <div class="row">
        <div class="col-lg-12 col-sm-12 align-self-center">
            <h2>
                Featured Listing Fee
            </h2>
            <p>
                500 pesos one-time payment to be listed in the first row, 
                100 pesos less for each subsequent row with the final row costing 100 pesos.
            </p>
        </div>
    </div>
</div>

<!--INFO SECTION WITH IMAGE-->
<div class="container py-5 align-items-center">
    <div class="row imgRight no-gutter">
      <div class="d-none d-md-flex col-md-4 col-lg-5 bg-image"></div>
      <div class="col-md-6 col-lg-7">
        <div class="d-flex alig-items-center py-5 px-5">
          <div class="container">
            <div class="row">
              <div class="col-md-12 col-lg-12 mx-auto text-justify">
                
                <p>
                    Once we have signed 100 businesses and officially launch we will offer 
                    you the option to promote your business on our home page. 
                </p>
                <br>
                <ul>
                    <li>
                        We will have 20 slots, arranged in rows of 4 with 5 rows total.
                    </li>
                    <li>
                        We will sell 3 slots in each row $500 pesos one-time payment to be listed 
                            in the first row, $100 pesos less for each subsequent row with the final 
                            row costing $100 pesos.
                    </li>
                    <li>
                        We will be offering every business the potential to win a free slot in 
                        each row of the featured businesses each month.
                    </li>
                </ul>
                <br>
                <p>
                    In order to support smaller businesses, we have 5 empty slots for featured 
                    businesses each month.
                </p>
                <p>
                    We will conduct our selection through excel's randomization tool, 
                    with the top 5 business appearing on top gaining a free slot for the next 
                    month in their corresponding position in rows 1-5 of our featured businesses. 
                </p>
                <p>
                    Since we conduct the drawing a month ahead, this prevents business from 
                    potentially paying for a slot and then receiving it for free.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--END INFO SECTION-->

<!--INFO TEXT-->
<div class="container text-center infoTextSectionLight">
    <div class="row">
        <div class="col-lg-12 col-sm-12 align-self-center">
            <h3>
                Although this is a little complicated, our goal by doing this is to keep everything 
                transparent and fair. 
            </h3>
        </div>
    </div>
</div>


@endsection