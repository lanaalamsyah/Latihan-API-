
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
    <div class="container">
    <div class="content">
      <div class="card card-info card-outline">
          <div class="card-header">
              <h3>Create data pegawai</h3>
          </div>
        <div class="card-body">
          <form action="{{ route('simpan-data-pegawai')}}" method="POST">
            {{ csrf_field() }}
              <div class="form-group">
                  <input type="text" id="nama" name="nama" class="form-control" placeholder="Nama pegawai">
                </div>

                <div class="form-group">
                    <textarea  id="alamat" name="alamat" class="form-control" placeholder="Alamat pegawai"></textarea>
                  </div>

                 <div class="form-group">
                    <input type="text" id="no_telp" name="no_telp" class="form-control" placeholder="No_Telp pegawai">
                </div>
                <div class="form-group">
                <input type="text" id="jabatan" name="jabatan" class="form-control" placeholder="jabatan">
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-success">Simpan Data</button>
                </div>
             </form>
      </div>
  
    </div>
    </div>
    </div>
    @include('Template.left-sidebar')

  
<!-- jQuery -->
@include('Template.script')
</body>
</html>
