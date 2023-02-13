<!doctype html>
<html lang="en">
<head>
  <!-- required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>Study</title>

  <!-- bootstrap css -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

  <!-- font awesome cdn -->
  <script src="https://kit.fontawesome.com/dd24ff9acb.js" crossorigin="anonymous"></script>
  
  {{-- css 추가 --}}
  @yield('inside_head_tag')
</head>
<body>
  <!-- 메뉴  -->
  @include('inc.nav')
  <!-- 내용 -->
  @yield('content')
  <!--bootstrap js -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  {{-- 자바스크립트 추가 --}}
  @yield('before_body_end_tag')
</body>
</html>
