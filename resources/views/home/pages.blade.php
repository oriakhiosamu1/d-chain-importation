<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>D CHAIN IMPORTATION</title>


    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.min.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/font-awesome.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/templatemo-hexashop.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/owl-carousel.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/lightbox.css') }}">

    {{-- BOOTSTRAP CSS --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    </head>

    <body>


    <!-- ***** Header Area Start ***** -->
        @include('partials.header')
    <!-- ***** Header Area End ***** -->

    <!-- ***** Main Banner Area Start ***** -->
    <div class="page-heading" id="top">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="inner-content">
                        @if (url()->current() === "http://127.0.0.1:8000/men")
                            <h2>Check Our Men's Products</h2>
                        @endif

                        @if (url()->current() === "http://127.0.0.1:8000/women")
                            <h2>Check Our Women's Products</h2>
                        @endif

                        @if (url()->current() === "http://127.0.0.1:8000/kids")
                            <h2>Check Our Kid's Products</h2>
                        @endif
                        <span>Awesome &amp; Creative HTML CSS layout by TemplateMo</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Main Banner Area End ***** -->

    {{-- MAIN CONTENT STARTS --}}
        <section class="section" id="products">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-heading">
                            <h2>Our Latest Products</h2>
                            <span>Check out all of our products.</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="row">

                    {{-- SINGLE PRODUCT LISTING STARTS --}}
                        {{-- MEN'S PRODUCTS --}}
                        @if (url()->current()=== "http://127.0.0.1:8000/men")
                            @forelse ($men as $man)
                                <div class="col-lg-4">
                                    <div class="item">
                                        <div class="thumb">
                                            <div class="hover-content">
                                                <ul>
                                                    <li><a href="{{ route('admin.show-product', $man->id) }}"><i class="fa fa-eye"></i></a></li>
                                                    <li><a href="{{ route('admin.show-product', $man->id) }}"><i class="fa fa-shopping-cart"></i></a></li>
                                                </ul>
                                            </div>
                                            <img src="{{ Storage::url($man->image1) }}" alt="">
                                        </div>
                                        <div class="down-content">
                                            <h4>{{ $man->name }}</h4>
                                            <span>N{{ $man->price }}</span>
                                        </div>
                                    </div>
                                </div>
                            @empty
                                <p>NO PRODUCT ADDED</p>
                            @endforelse
                        @endif

                        {{-- WOMEN'S PRODUCTS --}}
                        @if (url()->current() === "http://127.0.0.1:8000/women")
                            @forelse ($women as $woman)
                                <div class="col-lg-4">
                                    <div class="item">
                                        <div class="thumb">
                                            <div class="hover-content">
                                                <ul>
                                                    <li><a href="{{ route('admin.show-product', $woman->id) }}"><i class="fa fa-eye"></i></a></li>
                                                    <li><a href="{{ route('admin.show-product', $woman->id) }}"><i class="fa fa-shopping-cart"></i></a></li>
                                                </ul>
                                            </div>
                                            <img src="{{ Storage::url($woman->image1) }}" alt="">
                                        </div>
                                        <div class="down-content">
                                            <h4>{{ $woman->name }}</h4>
                                            <span>N{{ $woman->price }}</span>
                                        </div>
                                    </div>
                                </div>
                            @empty
                                <p>NO PRODUCT ADDED</p>
                            @endforelse
                        @endif

                        {{-- KIDS PRODUCTS --}}
                        @if (url()->current()=== "http://127.0.0.1:8000/kids")
                            @forelse ($kids as $kid)
                                <div class="col-lg-4">
                                    <div class="item">
                                        <div class="thumb">
                                            <div class="hover-content">
                                                <ul>
                                                    <li><a href="{{ route('admin.show-product', $kid->id) }}"><i class="fa fa-eye"></i></a></li>
                                                    <li><a href="{{ route('admin.show-product', $kid->id) }}"><i class="fa fa-shopping-cart"></i></a></li>
                                                </ul>
                                            </div>
                                            <img src="{{ Storage::url($kid->image1) }}" alt="">
                                        </div>
                                        <div class="down-content">
                                            <h4>{{ $kid->name }}</h4>
                                            <span>N{{ $kid->price }}</span>
                                        </div>
                                    </div>
                                </div>
                            @empty
                                <p>NO PRODUCT ADDED</p>
                            @endforelse
                        @endif
                    {{-- SINGLE PRODUCT LISTING ENDS --}}

                    {{-- PAGE PAGINATION --}}
                    <div class="col-lg-12">
                        <div class="pagination">
                            <ul>
                                <li>
                                    <a href="#">1</a>
                                </li>
                                <li class="active">
                                    <a href="#">2</a>
                                </li>
                                <li>
                                    <a href="#">3</a>
                                </li>
                                <li>
                                    <a href="#">4</a>
                                </li>
                                <li>
                                    <a href="#">></a>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </section>
    {{-- MAIN CONTENT ENDS --}}


    <!-- ***** Footer Start ***** -->
        @include('partials.footer')


    <!-- jQuery -->
    <script src="assets/js/jquery-2.1.0.min.js"></script>

    <!-- Bootstrap -->
    <script src="assets/js/popper.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- Plugins -->
    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/accordions.js"></script>
    <script src="assets/js/datepicker.js"></script>
    <script src="assets/js/scrollreveal.min.js"></script>
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/imgfix.min.js"></script>
    <script src="assets/js/slick.js"></script>
    <script src="assets/js/lightbox.js"></script>
    <script src="assets/js/isotope.js"></script>

    <!-- Global Init -->
    <script src="assets/js/custom.js"></script>

    <script>

        $(function() {
            var selectedClass = "";
            $("p").click(function(){
            selectedClass = $(this).attr("data-rel");
            $("#portfolio").fadeTo(50, 0.1);
                $("#portfolio div").not("."+selectedClass).fadeOut();
            setTimeout(function() {
              $("."+selectedClass).fadeIn();
              $("#portfolio").fadeTo(50, 1);
            }, 500);

            });
        });

    </script>

    {{-- BOOTSTRAP JS/POPPER --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script> --}}

    {{-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
  </body> --}}

  </html>
