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
        @include('partials.admin.main-panel')
        {{-- MAIN-PANEL STOPS --}}

        {{-- MAIN CONTENT STARTS --}}
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">Send Email Notification</div>
                    </div>

                    {{-- FORM STARTS HERE --}}
                        <form action="{{ route('admin.notification', $user->id) }}" method="post">
                            @csrf

                            <div class="card-body">
                                <div class="row px-3">
                                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                        <label for="pillInput">Greeting:</label>
                                        <input name="greeting" type="text" class="form-control input-pill" id="pillInput" placeholder="Greetings">
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                        <label for="pillInput">Conclusion:</label>
                                        <input name="conclusion" type="text" class="form-control input-pill" id="pillInput" placeholder="Conclusion">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="pillInput">Intro Line:</label>
                                    <input name="intro" type="text" class="form-control input-pill" id="pillInput" placeholder="Introductory line">
                                </div>

                                <div class="form-group">
                                    <label for="pillInput">Body:</label>
                                    <textarea name="body" class="form-control input-pill" placeholder="Body of notification" rows="3"></textarea>
                                </div>

                            </div>

                            {{-- SUBMIT AND CANCEL BUTTON --}}
                            <div class="card-action">
                                <button type="submit" class="btn btn-success">Send</button>
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

</html>
