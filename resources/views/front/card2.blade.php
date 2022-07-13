@extends('front.master')
@section('css')
<link rel="stylesheet" href="{{asset('webasset/assets/card2/index.css')}}">
@endsection
@section('content')

        <!-- Page Banner Start -->
        <div class="section">
            <div class="container">

                <!-- Page Banner Title Start -->
                <div style="padding-top: 48px" class="page-banner-title">
                    <h2 class="title">Birthday Greeting</h2>
                    <p style="margin-bottom: 46px">Birthday Greeting Card</p>
                </div>
                <!-- Page Banner Title End -->

            </div>
        </div>

        <section  class="card__box">

            <main id="div" class="card__container">
              <figure>
                <blockquote>
                  <h4 class="noto">Dear, <span contenteditable data-type="user">Eman</span></h4>
                  <h1 class="noto" contenteditable data-type="title">Many more happy returns</h1>
                  <p contenteditable data-type="content">I wish you all the best on your special day.</p>
                  <p>Regards, <br /><span contenteditable data-type="signature">Eman</span></p>
                </blockquote>
                <figcaption></figcaption>
              </figure>
            </main>
            <div class="uploader">
              <input type="file" name="uploader" id="uploader" hidden aria-hidden="true">
              <label for="uploader">Choose image</label>

            </div>
            <div class="d-grid gap-2 col-6 mx-auto">
                <button id="button" class="btn btn-primary" type="button">Download Your Card</button>
              </div>

          </section>
          @section('script')
          <script src="{{asset('webasset/assets/js/card2/index.js')}}">

          </script>
          @stop





@endsection
