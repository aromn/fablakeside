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
          <li class="nav-item">
            <a class="nav-link" href="{{ route('listBusiness1') }}">List Your Business</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link active" href="{{ route('ourTeam1') }}">Our Team</a>
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
  <div class="row">
    <div class="col-12 backImg-small">
      <h1>Meet the Team</h1>
      <p>Our People Are The Heart And Soul Of Our Business</p>
    </div>
  </div>  
</div>

<!--Subtitle-->
<div class="container subtitle w-75 shadow align-self-center">
  <div class="text-center py-2">
    <!--THIS ONE GOES TO THE ALL BUSINESS SEARCH PAGE-->
    <h5>SEARCH FOR <a href="{{ route('specialBusiness1') }}" class="subtitle-link">THE BEST BUSINESS</a> FOR YOU</h5>
  </div>
</div>

<!--ALEX PRESENTATION-->
<div class="container pt-5 d-flex justify-content-center">
  <div class="row py-3 align-items-center">
      <div class="col-lg-4 col-sm-12 text-center">
          <img src="img/AlexPic.png" style="width: 80%;">
      </div> 
      <div class="col-lg-8 col-sm-12 text-center text-lg-left">
            <div class="container-fluid">
                <div class="AlexName">
                    <h2>Alexander Searles</h2>
                    <p>President at Ajijic Business Enterprises</p>
                </div>
                <div class="quoteText">
                    <p>I founded this company as a way to help <br>
                    local business connect with customers.</p>
                </div>
                <div class="quoteImg">
                    <img class="quoteMarks" src="img/quoteMarks.png">
                </div>
            </div>
      </div>
  </div>
</div>

<!--LINE SPACE-->
<div class="container">
  <div class="row">
      <hr>
  </div>
</div>

<!--TEXT-->
<div class="container p-5 text-justify">
  <div class="row px-4">
        <p>
            The idea occurred to me while working on the Apollo 2020. 
            Program to help support local business during the COVID-19 epidemic. 
            I thoroughly enjoyed getting to know all the business owners 
            I worked with and decided I should do something to help them during more normal times ass well.
        </p>
        <br>
        <p>
            Coming from the U.S. I was used to being able to find almost everything about a business 
            online. A lot of businesses here don't have the time, money, or expertise to hire a 
            professional to manage their web pages, so I figured the best way to economically allow 
            themaccess to this tool was bundling everything together on one web page.
        </p>
        <br>
        <p>
            Now, instead of each individual business having to try to fight for a high search engine 
            rank, by pooling our resources, we can ensure everyone has a place at the top through this site.
        </p>
        <br>
        <p>
            In addition to this business, I also am working on a business to help local artist in
            the community sell their products online in the U.S. <br>
            I participate in multiple community organizations and sell real estate with Fenix Real 
            Estate as well.
        </p>
        <br>
  </div>
</div>

@endsection