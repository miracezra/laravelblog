<!DOCTYPE html>
<html lang="en" class="h-100">
<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css" />
  <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}" />
  <link rel="stylesheet" href="{{asset('assets/css/bootstrap.css')}}" />
  <link rel="stylesheet" href="{{asset('assets/css/style.css')}}" />
  <title>Anasayfa</title>               
</head>
<body class="d-flex h-100 flex-column">
  <!-- Top Menu -->
  <div class="container-fluid menu">
    @include('Front.topmenu') 
  </div>
  
  <header>
    <!-- Nav -->
    @include('front.navbar')
  </header>
  <main>
      @include('front.slider')
    <!--  slider-->
  </main>
  <section>
    <div class="container-fluid">
      <div class="row">
        <!--categories -->
        @include('front.category')
        <!--cards -->
        @include('front.card')
      </div>
    </div>
  </section>

@include('front.pagenumber')

  <!--Footer-->
  @include('front.footer')
  <script src="{{ asset('assets/js/bootstrap.js') }}"></script>
  <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
</body>

</html>