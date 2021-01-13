@extends('layouts.master') 

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
    <h5>SEARCH FOR <a href="{{ route('specialBusiness1', app()->getLocale()) }}" class="subtitle-link">THE BEST BUSINESS</a> FOR YOU</h5>
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

              <form action="{{ route('contact.us', app()->getLocale()) }}">
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
                  <textarea type="message" id="inputMessage" name="msg" class="form-control" placeholder="" required rows="8"></textarea>
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
      <a href="https://api.whatsapp.com/send?phone=523313478461&text=Hello!%20I%20want%20more%20info%20about%20Listing%20my%20Business%20%0A%2F%2F%2F%0AHola!%20Me%20gustar%C3%ADa%20m%C3%A1s%20informaci%C3%B3n%20sobre%20inscribir%20mi%20negocio"><h1>(+52) 33 1347 8461</h1></a>
      </div>
  </div>    
</div>

<!--ACTION IMAGE-->
<div class="container text-center">
  <div class="callActionSection">
    <h1>ADD YOUR BUSINESS</h1>
    <h4>Your business name could be here!</h4>
    <br>
    <a href="{{ route('listBusiness1', app()->getLocale()) }}" class="buttonList">Learn How</a>
  </div>
</div>

@endsection