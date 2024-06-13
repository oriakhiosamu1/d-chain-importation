<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>D-Chain-Importation Admin Dashboard</title>
	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
	<link rel="stylesheet" href="{{ asset('admin/css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
	<link rel="stylesheet" href="{{ asset('admin/css/ready.css') }}">
	<link rel="stylesheet" href="{{ asset('admin/css/demo.css') }}">

    {{-- FONTAWESOME CSS LINK --}}
    <link rel="stylesheet" href="{{ asset('fontawesome-free-6.5.1-web\fontawesome-free-6.5.1-web\css\all.min.css') }}">

    {{-- SAMPLE CDK-EDITOR 5 SCRIPT ======================================================================= --}}
    <script src="https://cdn.ckeditor.com/ckeditor5/41.4.2/classic/ckeditor.js"></script>
    {{-- CK-EDITOR SCRIPT============================================================================== --}}

</head>
<body>
	<div class="wrapper">
        {{-- HEADER STARTS --}}
            @include('partials.admin.header')
        {{-- HEADER ENDS --}}

        {{-- SIDEBAR STARTS --}}
            @include('partials.admin.sidebar')
        {{-- SIDEBAR ENDS --}}

        {{-- MAIN-PANEL STARTS --}}
        @include('partials.admin.products')
        {{-- MAIN-PANEL STOPS --}}

        {{-- MAIN CONTENT STARTS --}}
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">Add a New Product here</div>
                    </div>

                    {{-- FORM STARTS HERE --}}
                        <form action="{{ route('admin.store-product') }}" method="post" enctype="multipart/form-data">
                            @csrf

                            <div class="card-body">
                                {{-- PRODUCT NAME AND PRICE HERE --}}
                                <div class="row px-3">
                                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                        <label for="name">Name of product:</label>
                                        <input name="name" type="text" class="form-control input-pill" id="pillInput" placeholder="Name of product">
                                        @error('name')
                                            <small class="d-block text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                        <label for="price">Price of product:</label>
                                        <input name="price" type="text" class="form-control input-pill" id="pillInput" placeholder="Price of product">
                                        @error('price')
                                            <small class="d-block text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>

                                {{-- QUANTITY AND CATEGORY OF PRODUCT --}}
                                <div class="row px-3">
                                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                        <label for="quantity">Quantity of product:</label>
                                        <input name="quantity" type="text" class="form-control input-pill" id="pillInput" placeholder="Quantity of product">
                                        @error('quantity')
                                            <small class="d-block text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                        <label for="category">Category of product:</label>
                                        <select name="category" class="form-control input-pill">
                                            <option class="text-center">-- Choose an Option --</option>
                                            <option value="kids" class="text-center">Kids</option>
                                            <option value="men" class="text-center">Men</option>
                                            <option value="women" class="text-center">Women</option>
                                        </select>
                                        @error('category')
                                            <small class="d-block text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>

                                {{-- IMAGES OF PRODUCTS --}}
                                <div class="row px-3">
                                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                        <label for="image1">Display image of product:</label>
                                        <input name="image1" type="file" class="form-control input-pill" id="pillInput" placeholder="display image of product">
                                        @error('image1')
                                            <small class="d-block text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>

                                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                        <label for="image2">Image of product:</label>
                                        <input name="image2" type="file" class="form-control input-pill" id="pillInput" placeholder="Image of product">
                                        @error('image2')
                                            <small class="d-block text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>

                            </div>

                            {{-- CK-EDITOR DIV ================================================================================================ --}}
                            <div class="mx-4 my-4">
                                <label for="description">Description of product:</label>
                                <textarea name="description" id="description">Description of product.</textarea>
                                @error('description')
                                    <small class="d-block text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            {{-- CK-EDITOR DIV================================================================================================= --}}

                            {{-- CK-EDITOR DIV ================================================================================================ --}}
                            <div class="mx-4 my-4">
                                <label for="quote">Quote of product:</label>
                                <textarea name="quote" id="quote">Quote of product.</textarea>
                                @error('quote')
                                    <small class="d-block text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            {{-- CK-EDITOR DIV================================================================================================= --}}

                            {{-- SUBMIT AND CANCEL BUTTON --}}
                            <div class="card-action">
                                <button type="submit" class="btn btn-success">Add Product</button>
                                <a href="{{ url()->previous() }}" class="btn btn-danger">Cancel</a>
                            </div>
                        </form>
                    {{-- FORM ENDS HERE --}}
                </div>
            </div>
        {{-- MAIN CONTENT ENDS --}}

					</div>
				</div>
        {{-- FOOTER STARTS --}}
            @include('partials.admin.footer')
        {{-- FOOTER ENDS --}}
			</div>
		</div>
	</div>
</body>
<script src="{{ asset('admin/js/core/jquery.3.2.1.min.js') }}"></script>
<script src="{{ asset('admin/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js') }}"></script>
<script src="{{ asset('admin/js/core/popper.min.js') }}"></script>
<script src="{{ asset('admin/js/core/bootstrap.min.js') }}"></script>
<script src="{{ asset('admin/js/plugin/chartist/chartist.min.js') }}"></script>
<script src="{{ asset('admin/js/plugin/chartist/plugin/chartist-plugin-tooltip.min.js') }}"></script>
<script src="{{ asset('admin/js/plugin/bootstrap-notify/bootstrap-notify.min.js') }}"></script>
<script src="{{ asset('admin/js/plugin/bootstrap-toggle/bootstrap-toggle.min.js') }}"></script>
<script src="{{ asset('admin/js/plugin/jquery-mapael/jquery.mapael.min.js') }}"></script>
<script src="{{ asset('admin/js/plugin/jquery-mapael/maps/world_countries.min.js') }}"></script>
<script src="{{ asset('admin/js/plugin/chart-circle/circles.min.js') }}"></script>
<script src="{{ asset('admin/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js') }}"></script>
<script src="{{ asset('admin/js/ready.min.js') }}"></script>
<script src="{{ asset('admin/js/demo.js') }}"></script>

{{-- SAMPLE CDK-EDITOR 5 SCRIPT ========================================================================== --}}
<script>
    ClassicEditor
            .create( document.querySelector( '#quote' ) )
            .then( editor => {
                    console.log( editor );
            } )
            .catch( error => {
                    console.error( error );
            } );
</script>
{{-- CK-EDITOR SCRIPT =================================================================================== --}}

{{-- SAMPLE CDK-EDITOR 5 SCRIPT ========================================================================== --}}
<script>
    ClassicEditor
            .create( document.querySelector( '#description' ) )
            .then( editor => {
                    console.log( editor );
            } )
            .catch( error => {
                    console.error( error );
            } );
</script>
{{-- CK-EDITOR SCRIPT =================================================================================== --}}

</html>
