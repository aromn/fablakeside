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
          <li class="nav-item">
            <a class="nav-link" href="{{ route('ourTeam1') }}">Our Team</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link active" href="{{ route('contact1') }}">Contact</a>
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
      <h1>GET IN TOUCH</h1>
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

<!--CONTACT FORM-->
<div class="container py-5 align-items-center">
  <div class="row imgRight no-gutter">
    <div class="d-none d-md-flex col-md-4 col-lg-4 bg-image"></div>

    <div class="col-md-6 col-lg-8">
      <div class="d-flex alig-items-center py-5">
        <div class="container">
          <div class="row">
            <div class="col-md-12 col-lg-11 mx-auto">
              <h3>Contact Us</h3>

              <form action="{{ route('contact.us') }}">
                <div class="form-label-group py-2">
                  <input type="name" id="inputName" name="full_name" class="form-control" placeholder="Full Name" required autofocus>
                </div>
                <div class="form-label-group py-2">
                  <input type="email" id="inputEmail" name="email" class="form-control" placeholder="Email address" required autofocus>
                </div>
                <div class="form-label-group py-2">
                  <input type="phone" id="inputPhone" name="phone" class="form-control" placeholder="Phone Number" required autofocus>
                </div>
                <div class="form-label-group py-2">
                  <textarea type="message" id="inputMessage" name="msg" class="form-control" placeholder="Message" required rows="8"></textarea>
                </div>
                
                <div class="py-2 text-center text-lg-right">
                  
                    <!--
                    <div class="loading">Loading</div>
                    <div class="error-message"></div>
                    <div class="sent-message">Your message has been sent. Thank you!</div>
                    -->
                    <!--<a href="#">&nbsp; Send &nbsp;</a>-->
                    
                  <button type="submit" class="btn btn-primary btn-lg" style="width: 200px;">Send</button>
                  
                  
                </div>
              </form>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!--INFO SECTION-->
<div class="container ml-auto text-center">
  <div class="row">
    <div class="col-12 backImg-small">
      <p>Call Us</p>
      <a href="#"><h1>(+52) 33 1347 8461</h1></a>
      </div>
  </div>    
</div>

<!--ACTION IMAGE-->
<div class="container text-center">
  <div class="callActionSection">
    <h1>ADD YOUR BUSINESS</h1>
    <h4>Your business name could be here!</h4>
    <br>
    <a href="{{ route('listBusiness1') }}" class="buttonList">Learn How</a>
  </div>
</div>

@endsection