<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Karyawan</title>
        <link href="{{ asset ('bootstrap/dist/css/styles.css') }}" rel="stylesheet" />
        <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
      @include('include.nav')
      <div id="layoutSidenav">
        @include('include.side')
        <div id="layoutSidenav_content">
          <main>
            <div class="container-fluid">
              @yield('content')
            </div>
          </main>
          @include('include.footer')
        </div>
      </div>
    </body>


<!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    {{-- <script src="{{ asset ('admines/assets/js/jquery-1.10.2.js') }}"></script> --}}
      <!-- BOOTSTRAP SCRIPTS -->
    {{-- <script src="{{ asset ('admines/assets/js/bootstrap.min.js') }}"></script> --}}
    <!-- METISMENU SCRIPTS -->
    {{-- <script src="{{ asset ('admines/assets/js/jquery.metisMenu.js') }}"></script> --}}
     <!-- MORRIS CHART SCRIPTS -->
     {{-- <script src="{{ asset ('admines/assets/js/morris/raphael-2.1.0.min.js') }}"></script>
    <script src="{{ asset ('admines/assets/js/morris/morris.js') }}"></script> --}}
      <!-- CUSTOM SCRIPTS -->
    {{-- <script src="{{ asset ('admines/assets/js/custom.js') }}"></script>
    <script type="text/javascript" src="{{ asset ('DataTables/media/js/jquery.js') }}"></script>
    <script type="text/javascript" src="{{ asset ('DataTables/media/js/jquery.dataTables.js') }}"></script> --}}

    <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="{{ asset ('bootstrap/dist/js/scripts.js') }}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="{{ asset ('bootstrap/dist/assets/demo/chart-area-demo.js') }}"></script>
        <script src="{{ asset ('bootstrap/dist/assets/demo/chart-bar-demo.js') }}"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
        <script src="{{ asset ('bootstrap/dist/assets/demo/datatables-demo.js') }}"></script>
    <script type="text/javascript">
      $(document).ready(function(){
        $('#provinsi').DataTable();
      });
    </script>
    
   
</body>
</html>