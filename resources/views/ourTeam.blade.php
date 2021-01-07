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
                    <p>President of Ajijic Business Enterprises</p>
                </div>
                <div class="quoteText">
                    <p>I founded this company to help local business survive 
                      and thrive in these difficult times. 
                      We make it easier for customers to find the local business 
                      they are seeking using an innovative 
                      approach. By making business discoverable through category 
                      and multiple sub-category listings, 
                      we increase their customer exposure. Add that to our custom 
                      designed business pages that take advantage
                       of professional marketing knowledge and we have created a 
                       recipe that results in more success for 
                       local business and greater customer satisfaction, 
                      all at a price every business can afford.</p>
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
            I thoroughly enjoyed getting to know all the businesses owners 
            I worked with and decided I should do something to help them during more normal times ass well.
        </p>
        <br>
        <p>
            Coming from the U.S. I was used to being able to find almost everything about a business 
            online. A lot of businesses here don't have the time, money, or expertise to hire a 
            professional to manage their web pages, so I figured the best way to economically allow 
            them access to this tool was by bundling everything together on one web page.
        </p>
        <br>
        <p>
            Now, instead of each individual business having to try to fight for a high search engine 
            rank, by pooling our resources, we can ensure everyone has a place at the top through this site.
        </p>
        <br>
        <p>
          While this project is close to my heart, the true purpose if this project is to fund future 
          initiatives in philanthropy to help our community be better prepared to tackle the challenges 
          we face in the 21st century.
          Under the umbrella of Ajijic Business Enterprises, we are launching multiple ventures to provide
           affordable green solutions to everyday problems, ensure the lasting legacy of indigenous culture
           ct and restore ejido lands, and clean up the lake to ensure that it can be enjoyed by future
            generations. We are also partnering with the Instituto Tecnologico Superior de Chapala to provide
             an intership track for students so that they can get hands on experience working for a blended 
             operation with exposure to many different types and models of business, and we hope to fund future 
             business owners looking for startup capital in the future.
        </p>
        <br>
  </div>
</div>

<!--LINE SPACE-->
<div class="container">
  <div class="row">
      <hr>
  </div>
</div>

  <!--ALDO AND ABIGAIL PRESENTATION-->
  <div class="container pt-5 d-flex justify-content-center text-center team">
    <div class="row align-items-center">
      <div class="container infoTextSectionLighta">
        <div class="row">
          <div class="col-lg-12 col-sm-12 align-self-center">
              <h2>MEET THE REST OF THE TEAM</h2>
              <p style="color:#14253c">The best people formula for the best results!</p>
          </div>
      </div>
      </div>
        <!--ALDO-->
        <div class="col-lg-6 col-sm-12">
          <div class="col-12">
            <div class="col-12 text-center">
              <img src="img/aldo.png" style="width: 40%;">
            </div> 
            <div class="col-12 text-center">
                <div class="container-fluid">
                    <div class="AlexName">
                        <h2>Aldo Romero</h2>
                        <p style="font-weight: bold; color: #477B9D;">Back End and Software</p>
                    </div>
                    <div class="quoteText">
                        <p>I have been working as a System Administrator/Consultant at Evalinux since 2016. 
                          Besides, I work as a freelancer with clients around the world doing web/software developmente</p>
                    </div>
                    <!--
                    <div class="quoteImg">
                        <img class="quoteMarks" src="img/quoteMarks.png">
                    </div>
                    -->
                </div>
            </div>
          </div>
        </div>
        <!--ABIGAIL-->
        <div class="col-lg-6 col-sm-12">
          <div class="col-12">
            <div class="col-12 text-center">
              <img src="img/abi.png" style="width: 40%;">
            </div> 
            <div class="col-12 text-center">
                <div class="container-fluid">
                    <div class="AlexName">
                        <h2>Abigail Pérez</h2>
                        <p style="font-weight: bold; color: #477B9D;">Front End and Designer</p>
                    </div>
                    <div class="quoteText">
                        <p>I love design, web, games, apps. 
                          I studied Fine Arts and IT five years ago, and I've been working on it since then.</p>
                    </div>
                    <!--
                    <div class="quoteImg">
                        <img class="quoteMarks" src="img/quoteMarks.png">
                    </div>
                    -->
                </div>
            </div>
          </div>
        </div>
        
    </div>
  </div>

<!--ACTION IMAGE-->
<div class="container ml-auto text-center">
  <div class="callActionSection" style="background-image: url('img/ourTeam-LogoSection.png');">
    <img src="/img/logo_white.png">
  </div>
</div>

<!--LIST YOUR BUSINESS-->
<div class="container text-center">
  <div class="callActionSection">
    <h1>ADD YOUR BUSINESS</h1>
    <h4>Your business name could be here!</h4>
    <br>
    <a href="{{ route('listBusiness1') }}" class="buttonList">Learn How</a>
  </div>
</div>

@endsection