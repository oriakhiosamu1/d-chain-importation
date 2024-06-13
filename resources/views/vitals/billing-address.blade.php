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
    <link rel="stylesheet" href="external/css/profile.css">

    {{-- BOOTSTRAP CSS --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>


    <!-- ***** Header Area Start ***** -->
        @include('partials.header')
    <!-- ***** Header Area End ***** -->

    {{-- NOTIFICATION MESSAGE =============================================================================== --}}
    @if (session()->has('message'))
        <!-- Flexbox container for aligning the toasts -->
        <div aria-live="polite" aria-atomic="true" class="d-flex justify-content-center align-items-center w-100">

            <!-- Then put toasts within -->
            <div class="toast" role="alert" aria-live="assertive" aria-atomic="true">
                <div class="toast-header">
                    <img src="..." class="rounded me-2" alt="...">
                    <strong class="me-auto">D-Chain Importation</strong>
                    <small>{{ \Carbon\Carbon::parse(now())->diffForHumans() }}</small>
                    <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                </div>
                <div class="toast-body">
                    {{ session('message') }}
                </div>
            </div>
        </div>
    @endif
    {{-- NOTIFICATION MESSAGE ================================================================================== --}}


    {{-- BILLING ADDRESS STARTS --}}
    <div class="container rounded bg-white mt-5 mb-5">
        <div class="row mt-5">
            <div class="col-md-3 border-right">
                <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                    <img class="rounded-circle mt-5" width="150px" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg"><span class="font-weight-bold">{{ auth()->user()->name }}</span><span class="text-black-50">{{ auth()->user()->email }}</span><span> </span>
                </div>
            </div>
            <div class="col-md-5 border-right">
                {{-- BILLING ADDRESS FORM STARTS HERE --}}
                    <form action="{{ route('store.billing.address') }}" method="POST">
                        @csrf

                        <div class="p-3 py-5">
                            {{-- FORM HEADING --}}
                            <div class="d-flex justify-content-between align-items-center mb-3 mt-3">
                                <h4 class="text-right">Create Billing Address</h4>
                            </div>

                            {{-- FORM FIELDS --}}
                            <div class="row mt-2">
                                <div class="col-md-6">
                                    <label class="labels">Name</label>
                                    <input type="text" name="first_name" class="form-control" placeholder="first name" value="{{ old('first_name') }}">
                                    @error('first_name')
                                        <small class="d-block text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label class="labels">Surname</label>
                                    <input type="text" name="surname" class="form-control" value="{{ old('surname') }}" placeholder="surname">
                                    @error('surname')
                                        <small class="d-block text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mt-3">
                                <div class="col-md-12">
                                    <label class="labels">Mobile Number</label>
                                    <input type="text" name="mobile_number" class="form-control" placeholder="enter phone number" value="{{ old('mobile_number') }}">
                                    @error('mobile_number')
                                        <small class="d-block text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="col-md-12">
                                    <label class="labels">Zip/Postal code</label>
                                    <input type="text" name="postal_code" class="form-control" placeholder="enter zip/postal code" value="{{ old('postal_code') }}">
                                    @error('postal_code')
                                        <small class="d-block text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="col-md-12">
                                    <label class="labels">State</label>
                                    <input type="text" name="state" class="form-control" placeholder="enter state" value="{{ old('State') }}">
                                    @error('state')
                                        <small class="d-block text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="col-md-12">
                                    <label class="labels">City/Town</label>
                                    <input type="text" name="city" class="form-control" placeholder="enter city/town" value="{{ old('city') }}">
                                    @error('city')
                                        <small class="d-block text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="col-md-12">
                                    <label class="labels">Street Address</label>
                                    <input type="text" name="street_address" class="form-control" placeholder="enter street address" value="{{ old('street_address') }}">
                                    @error('street_address')
                                        <small class="d-block text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="col-md-12">
                                    <label class="labels">Email</label>
                                    <input type="email" name="email" class="form-control" placeholder="enter email" value="{{ auth()->user()->email }}">
                                    @error('email')
                                        <small class="d-block text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="col-md-12">
                                    <label class="labels">Country</label>
                                    <input type="text" name="country" class="form-control" placeholder="default(Nigeria)" value="{{ old('country') }}">
                                    @error('country')
                                        <small class="d-block text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>

                            {{-- SUBMIT BUTTON --}}
                            <div class="mt-5 text-center"><button class="btn text-white profile-button" style="background-color: #2A2A2A !important" type="submit">Create Billing Address</button></div>
                        </div>

                    </form>
                {{-- BILLING ADDRESS FORM ENDS HERE --}}
            </div>
            <div class="col-md-4">
                <form action="{{ route('reset.password') }}" method="POST">
                    @csrf

                    <div class="p-3 py-5 mt-3">
                        <div class="d-flex justify-content-between align-items-center experience"><span><h4>Change Password</h4></span></div><br>

                        {{-- CURRENT PASSWORD --}}
                        <div class="col-md-12">
                            <label class="labels">Current Password</label>
                            <input type="password" name="current_password" class="form-control" placeholder="current/old password" value="">
                            @error('current_password')
                                <small class="d-block text-danger">{{ $message }}</small>
                            @enderror
                        </div> <br>

                        {{-- NEW PASSWORD --}}
                        <div class="col-md-12">
                            <label class="labels">New Password</label>
                            <input type="password" name="password" class="form-control" placeholder="new password" value="">
                            @error('password')
                                <small class="d-block text-danger">{{ $message }}</small>
                            @enderror
                        </div><br>

                        {{-- CONFIRM NEW PASSWORD --}}
                        <div class="col-md-12">
                            <label class="labels">Confirm New Password</label>
                            <input type="password" name="password_confirmation" class="form-control" placeholder="confirm password" value="">
                            @error('password_confirmation')
                                <small class="d-block text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        {{-- SUBMIT BUTTON --}}
                        <div class="mt-5 text-center">
                            <button type="submit" class="btn btn-secondary" style="background-color: #2A2A2A !important">Reset Password</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    </div>
    </div>
    {{-- BILLING ADDRESS ENDS --}}

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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>
