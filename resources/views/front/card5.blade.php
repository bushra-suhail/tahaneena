@extends('front.master')
@section('css')
<link rel="stylesheet" href="{{ asset('webasset/assets/card5/index.css') }}" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Almarai:wght@300&display=swap"
      rel="stylesheet"
    />
@endsection
@section('content')

        <!-- Page Banner Start -->
        <div class="section">
            <div id="div" class="container">

                <!-- Page Banner Title Start -->
                <div class="page-banner-title">
                    {{-- <h2 class="title">Mother Day Card</h2>
                    <p>Greeting Card</p> --}}
                </div>
                <!-- Page Banner Title End -->

            </div>
        </div>



        <div id="div" class="card-container">
            <div class="right-section">

              <textarea
                placeholder="Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime
              mollitia, molestiae quas vel sint commodi repudiandae consequuntur"
                class="card-description"
                style="overflow: hidden"
              ></textarea>

            </div>
            <div class="left-section">
              <div class="celebrate-date-container">

              </div>
            </div>
          </div>
          <div class="d-grid gap-2 col-6 mx-auto">
            <button id="button" class="btn btn-primary" type="button">Download Your Card</button>
          </div>

@endsection
