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


@endsection