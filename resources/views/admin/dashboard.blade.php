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
            @php
                $count = 0;
            @endphp
            <div class="card">
                <div class="card-header">
                    <div class="card-title">Registered Users</div>
                </div>
                <div class="card-body">
                    <div class="card-sub">
                        Be the captain of your ship, perform different actions on users.
                    </div>
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>S/N</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Billing Address</th>
                                    <th>Mail</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    @forelse ($users as $user)
                                        <tr>
                                            <th scope="row">{{ $count = $count + 1 }}</th>
                                            <td>{{ $user->name }}</td>
                                            <td>{{ $user->email }}</td>
                                            <td><a href="{{ route('admin.user.billing.address', $user->id) }}" class="btn btn-primary">view</a></td>
                                            <td><a href="{{ route('admin.notify', $user->id) }}"><i class="fa-solid fa-envelope"></i></a></td>
                                            <td><a href="{{ route('admin.delete', $user->id) }}" onclick="return confirm('Delete {{ $user->name }}?')"><i class="fa-solid fa-trash"></i></a></td>
                                        </tr>
                                    @empty
                                        <div class="text-center">No user found</div>
                                    @endforelse
                                </tr>
                            </tbody>
                        </table>
                    </div>
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
