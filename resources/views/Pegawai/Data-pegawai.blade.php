
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <title>DASHBOARD ADMIN</title>
@include('Template.head')
</head>
<body class="hold-transition sidebar-mini">

  <!-- Navbar -->
  @include('Template.navbar')
    <!-- Content Header (Page header) -->
    <div class="container">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">starter page
</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Data Pegawai</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    
    <!-- Main content -->
    <div class="content">
      <div class="card card-info card-outline">
        <div class="card-header">
          <div class="card-tools">
            <a href="{{ route('create-data-pegawai')}}" class="btn btn-success">Tambah data<i class="fas fa-plus-square"></i></a>

          </div>
        </div>

        <div class="card-body">
          <table class="table table-bordered">
            <tr>
             
              <th>Nama</th>
              <th>Alamat</th>
              <th>No_Telp</th>
              <th>Jabatan</th>
              <th>Aksi</th>
            
              </tr>
              @foreach($dtPegawai as $item)
              <tr>
              
                <td>{{ $item->nama}}</td>
                <td>{{ $item->alamat}}</td>
                <td>{{ $item->no_telp}}</td>
                <td>{{ $item->jabatan}}</td>
                <td>
                <a href="{{route('edit-data-pegawai', +$item->id)}}"><i class="fas fa-edit"></i></a> 
                |
                 <a href="{{route('delete-data-pegawai', +$item->id)}}"><i class="fas fa-trash-alt" style="color:red"></a></td>
              </tr>    
              @endforeach ()
            </table>
        </div>
      </div>
  
    </div>
    </div>
  
    @include('Template.left-sidebar')

  
<!-- jQuery -->
@include('Template.script')
@Include('sweetalert::alert')
</body>
</html>
