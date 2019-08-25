<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Community Sports</title>
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet"
          href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.9/dist/css/bootstrap-select.min.css">
    <!-- FONTAWESOME CDN -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    <!-- Owl Styles -->
    <link rel="stylesheet" href="{{ asset('vendor/owl/css/owl.carousel.min.css') }}">
    <!-- jQuery UI -->
    <!-- Custom SCSS -->
    <link href="{{ asset('scss/custom.css') }}" type="text/css" rel="stylesheet">
    <link href="{{ asset('css/owl.carousel.min.css') }}" type="text/css" rel="stylesheet">
    @yield('css')
</head>

<body id="page-top" data-spy="scroll">
@include('includes.navbar')
@yield('content')
@include('includes.footer')
<!-- Bootstrap core JavaScript -->
<!-- <script src="vendor/jquery/jquery.slim.min.js"></script> -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.9/dist/js/bootstrap-select.min.js"></script> -->
<!-- OWL JavaScript -->
<script src="{{ asset('vendor/owl/js/owl.carousel.js') }}"></script>
<script src="{{ asset('js/owl.initialization.js') }}"></script>
<!-- Custom JavaScript -->
<script src="{{ asset('js/custom.js') }}"></script>

<!-- Video Popup JavaScript -->
<script src="{!! asset('js/video.popup.js') !!}"></script>
@yield('scripts')
</body>

</html>
