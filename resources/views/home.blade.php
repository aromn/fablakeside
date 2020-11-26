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

    </div>
</section>

@endsection