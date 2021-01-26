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
<!--SEARCH BAR WITH CATEGORIES AND SUB CATEGORIES-->
<div class="container pt-4">
  <div class="row">
    <div class="col-12">
       <form type="get" action="{{ route('search', app()->getLocale()) }}">
          

          <!-- MORE SPECIFIC SEARCH OPTIONS -->
          <div class="row py-2">
              <div class="col-md-4">
                  <div class="form-group">
                      <select name="location" class="form-control" id="sel2">
                          <option value="">{{ __('general.select_location') }}</option>
                          <option value="Ajijic">Ajijic</option>
                          <option value="Chapala">Chapala</option>
                          <option value="Ixtlahuacan">Ixtlahuacán de los M.</option>
                          <option value="San Antonio">San Antonio</option>
                    </select>
                  </div>
              </div>

              <div class="col-md-4">
                <div class="form-group">
                    <select name="category" class="form-control" id="categories">
                        <option value="">{{ __('general.select_category') }}</option>
                        @foreach($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                  </select>
                </div>
            </div>

            <div class="col-md-4">
              <div class="form-group">
                  <select name="subcategory" class="form-control" id="subcategories">
                      <option value="" default>{{ __('general.select_subcategory') }}</option>
                  </select>
              </div>
          </div>

        </div>
        <!-- MORE SPECIFIC SEARCH OPTIONS -->

        <!--SEARCH BAR-->
        <div id="custom-search-input" class="row py-2">
          <div class="col-xs-12 col-sm-12 col-lg-10">
              <input type="search" name="query" class="search-query form-control" placeholder="{{ __('general.search') }}"/>
          </div>
          <div class="d-block d-sm-none">&nbsp;</div>
          <div class="col-xs-12 col-sm-12 col-lg-2 text-sm-center search">
              <button class="btn btn-primary" type="submit" style="width: 100%">{{ __('general.search') }}</button>
          </div>
      </div>
      <!-- END SEARCH BAR-->
          
          
        <script>

          $(document).ready(function(){
              if (window.location.toString().includes("/en/") || window.location.toString().includes("/en")) {
                $('.lang-es').removeClass('btn-outline-primary');
                $('.lang-es').addClass('btn-outline-secondary');
                $('.lang-en').removeClass('btn-outline-secondary');
                $('.lang-en').addClass('btn-outline-primary');
              } 
              else if (window.location.toString().includes("/es/") || window.location.toString().includes("/es")) {
                $('.lang-en').removeClass('btn-outline-primary');
                $('.lang-en').addClass('btn-outline-secondary');
                $('.lang-es').removeClass('btn-outline-secondary');
                $('.lang-es').addClass('btn-outline-primary');
              } 
          });


            $('#categories').change(function(){
              if($(this).val() == ""){
                $('#subcategories option').each(function(){
                    $(this).remove();
                  });
                $('#subcategories').append('<option value="">Select a subcategory</option>');
                $('#subcategories').prop("disabled", true);
                        return false;
                  }

          $('#subcategories option').each(function(){
            $(this).remove();
          });

          $.ajax({
              url: '/subcategories/' + $(this).val(),
              type: 'GET',
              success: function(e){
                $('#subcategories').removeAttr("disabled");
                $('#subcategories').append('<option value="">Select a subcategory</option>');
                  $.each(e, function(index, value){
                      console.log(value);
                              $('#subcategories').append('<option value="' + value.id + '">' + value.name + '</option>');
                  });
              }
             });
        });
        </script>


      </form>
    </div>
  </div>
</div>
<!--SECTION SEARCH-->
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