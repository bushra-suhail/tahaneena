@extends('front.master')
@section('css')
<link rel="stylesheet" href="{{ asset('webasset/assets/card3/index.css') }}" />
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
            <div  class="container">

                <!-- Page Banner Title Start -->
                <div style="padding-top: 48px" class="page-banner-title">
                    <h2 class="title">Birthday Card</h2>
                    <p>Birthday Greeting Card</p>
                </div>
                <!-- Page Banner Title End -->

            </div>
        </div>
<div id="div">

        <div style="background-image: {{ asset('webasset/assets/card3/images/jk.jpg') }}" class="card-container">
            <div class="right-section">

             <!--  <p class="title-main">
                <span class="title1">Happy</span><br />
                BirthDay <br /> -->

              </p>
              <p class="confirm-btn">Happy New Year </p>
              <textarea
                placeholder="I hope you have a wonderful birthday"
                class="card-description"
                style="overflow: hidden"
              ></textarea>

            </div>
            <div class="left-section">
              <div class="celebrate-date-container">
                <input type="date" class="date-picker" />



              </div>
            </div>
          </div>
        </div>

          <div class="d-grid gap-2 col-6 mx-auto">
            <button id="button" class="btn btn-primary" type="button">Download Your Card</button>
          </div>



@endsection
