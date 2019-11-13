<!DOCTYPE html>

<html lang="en">


<head>
  <title> Add Blog </title>
  @include('Template.head')
</head>


<body class="hold-transition sidebar-mini">
<div class="wrapper" id="app">

  <!-- Navbar -->
  @include('Template.navbar')
  <!-- /.navbar -->


  <!-- Main Sidebar Container -->
  @include('Template.sidebar-left')


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
              <li class="breadcrumb-item active">Data Blog</li>
              
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->


    <!-- Main content -->
    <h1 align='center'> DATA BLOG </h1>
      <center>
          <table border=10 width=98% height=100 ALIGN='center'>
                      <tr>
                        <th> <center> Nama </center></th>
                        <th style='width: 25%'> <center> Aksi </center></th>
                      </tr> 
                      @foreach ($varAngka as $isinya)
                      <tr>
                        <td>  {{$isinya}} </td>
                        <td> 
                          <center>
                          <a href="{{$isinya}}">
                            <i class="fas fa-eye red"> Lihat </i>
                          </a>
                        {{-- </td> --}}
                        {{-- <td> --}}
                          |
                          <a href="{{$isinya}}">
                            <i class="fas fa-pencil-alt green"> Edit </i>
                          </a>
                          |
                        {{-- </td> --}}
                        {{-- <td> --}}
                          <a href="{{$isinya}}">
                            <i class="fas fa-trash-alt"> Hapus </i>
                          </a>
                        </center>
                        </td>
                      </tr>
                @endforeach
              </table>
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body">
                    
            </div>
      <!-- ISI HALAMAN -->
    </div>

    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


  <!-- Main Footer -->
  @include('Template.footer')
</div>
<!-- ./wrapper -->


<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
@include('Template.script')

</body>
</html>