<!DOCTYPE html>

<html lang="{{ app()->getLocale() }}" class="default-style">

<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="IE=edge,chrome=1">
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">
  <link rel="shortcut icon" href="{{ asset('favicon.png') }}">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>@yield('title')</title>  

  <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900" rel="stylesheet">

  <!-- Icon fonts -->
  <link rel="stylesheet" href="{{ asset('assets/vendor/fonts/fontawesome.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/vendor/fonts/ionicons.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/vendor/fonts/linearicons.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/vendor/fonts/open-iconic.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/vendor/fonts/pe-icon-7-stroke.css') }}">

  <!-- Core stylesheets -->
  <link rel="stylesheet" href="{{ asset('assets/vendor/css/rtl/bootstrap.css') }}" class="theme-settings-bootstrap-css">
  <link rel="stylesheet" href="{{ asset('assets/vendor/css/rtl/appwork.css') }}" class="theme-settings-appwork-css">
  <link rel="stylesheet" href="{{ asset('assets/vendor/css/rtl/theme-vibrant.css') }}" class="theme-settings-theme-css">
  <link rel="stylesheet" href="{{ asset('assets/vendor/css/rtl/colors.css') }}" class="theme-settings-colors-css">
  <link rel="stylesheet" href="{{ asset('assets/vendor/css/rtl/uikit.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/demo.css') }}">

  @yield('link')

  <script src="assets/vendor/js/layout-helpers.js"></script>

  <!-- Core scripts -->
  <script src="{{ asset('assets/vendor/js/pace.js') }}"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

</head>

<body>
  @yield('body_content')
  <!-- Core scripts -->
  <script src="{{ asset('assets/vendor/libs/popper/popper.js') }}"></script>
  <script src="{{ asset('assets/vendor/js/bootstrap.js') }}"></script>
  <script src="{{ asset('assets/vendor/js/sidenav.js') }}"></script>

    <!-- Demo -->
    <script src="{{ asset('assets/js/demo.js') }}"></script>

  @yield('script')

  <script>
    $(document).ready(function(){
      $("li.sidenav-item a.sidenav-link").on('click', function(){      
        $.ajax({
          type: 'GET',
          url: $(this).data('srv'),
          context: document.body
        }).done(function(data) {
          $("#wrapper").html(data);
        });
      });      
    })
  </script>
</body>

</html>