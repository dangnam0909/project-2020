@include('layout.head')
  
<!-- Page Wrapper -->
<div id="wrapper">
 
  @include('layout.sidebar')
 
  <!-- Content Wrapper -->
  <div id="content-wrapper" class="d-flex flex-column">
 
    <!-- Main Content -->
    <div id="content">
 
        @include('layout.navbar')
 
      <!-- Begin Page Content -->
      <div class="container-fluid">
 
          @yield('content')
 
      </div>
      <!-- /.container-fluid -->
 
    </div>
    <!-- End of Main Content -->
 
    @include('layout.footer')
 
  </div>
  <!-- End of Content Wrapper -->
 
</div>
<!-- End of Page Wrapper -->
 
  @include('layout.js')