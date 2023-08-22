<!DOCTYPE html>
<html lang="en">
@include('users.layouts.head')
<body class="rbt-header-sticky">
  @include('users.layouts.header')
  <!-- <main class="rbt-main-wrapper"> -->
    @yield('content') 
  <!-- </main> -->
    @include('users.layouts.footer')
    @include('users.layouts.js')
</body>
</html>