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
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">

    <link rel="stylesheet" href="assets/css/templatemo-hexashop.css">

    <link rel="stylesheet" href="assets/css/owl-carousel.css">

    <link rel="stylesheet" href="assets/css/lightbox.css">

    {{-- CSS FILE FROM EXTERNAL TEMPLATE --}}
    <link rel="stylesheet" href="{{ asset('external/css/table.css') }}">

    {{-- FONTAWESOME CSS LINK --}}
    <link rel="stylesheet" href="{{ asset('fontawesome-free-6.5.1-web\fontawesome-free-6.5.1-web\css\all.min.css') }}">


    {{-- BOOTSTRAP CSS --}}
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"> --}}

</head>
<body>


    <!-- ***** Header Area Start ***** -->
        @include('partials.header')
    <!-- ***** Header Area End ***** -->

    {{-- VARIABLE DECLARATION --}}
    @php
        $count = 0;
    @endphp

    {{-- CART STARTS --}}
        <section class="ftco-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h3 class="h5 mb-4 text-center">Welcome To Cart</h3>
                        <div class="table-wrap">
                            <table class="table">
                            <thead class="thead-primary" style="background-color: #2A2A2A !important">
                                <tr>
                                    <th>S/N</th>
                                    <th>&nbsp;</th>
                                    <th>Product</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                    <th>total</th>
                                    <th>&nbsp;</th>
                                </tr>
                            </thead>

                            <tbody>

                                @forelse ($cart as $carts)
                                    <tr class="alert" role="alert">
                                        {{-- S/N --}}
                                        <td>
                                            {{ $count = $count + 1 }}
                                        </td>

                                        {{-- VACANT ROW FOR IMAGE --}}
                                        {{-- <td>
                                            <div class="img" style="background-image: url(images/product-1.png);"></div>
                                        </td> --}}

                                        {{-- PRODUCT --}}
                                        <td>
                                            <a class="text-dark" href="{{ route('admin.show-product', $carts->product_id) }}">{{ $carts->product }}</a>
                                        </td>

                                        {{-- PRICE --}}
                                        <td>N{{ $carts->price }}</td>

                                        {{-- QUANTITY --}}
                                        <td class="quantity">
                                            <form action="{{ route('update.cart', $carts->id) }}" method="POST" class="mt-4">
                                                @csrf
                                                @method('PUT')

                                                <div class="row">
                                                    <input type="text" name="quantity" class="form-control col-lg-6" value="{{ $carts->quantity }}" required>
                                                    <button style="background-color: #2A2A2A !important" class="btn col-lg-6 text-white" type="submit">Set</button>
                                                    @error('quantity')
                                                        <small class="text-danger">{{ $message }}</small>
                                                    @enderror
                                                </div>
                                            </form>
                                        </td>

                                        {{-- SUBTOTAL --}}
                                        <td>N{{ $carts->subtotal }}</td>

                                        {{-- DELETE BUTTON --}}
                                        <td>
                                            <a class="text-dark" onclick="return confirm('Delete From Cart?')" href="{{route('delete.cart', $carts->id) }}"><i class="fa-solid fa-trash"></i></a>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>NO DATA AVAILABLE</tr>
                                @endforelse

                            </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- PROCEED TO CHECKOUT LINK --}}
        <div class="text-center">
            <a href="" class="btn text-white" style="background-color: #2A2A2A !important">Proceed To Checkout</a>
        </div>
    {{-- CART ENDS --}}

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

    {{-- TABLE SCRIPT FILES --}}
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>

    {{-- BOOTSTRAP JS/POPPER --}}
    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script> --}}

</body>
</html>
