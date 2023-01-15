@extends('layout.template')

@section('master')

    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/Dashboard">Home</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">

        <!-- Left side columns -->
        <div class="col-md-8">
          <div class="row">

            <!-- Recent Sales -->
            <div class="col-12">
              <div class="card recent-sales overflow-auto">

                <div class="card-body">
                  <form method="post" action="{{ url('Dashboard/'.$data->nim)}}">
                    @csrf
                    @method('PUT')
                    <div class="modal-header">
                        <h5 class="modal-title mt-3"><b>Masukkan Data</b></h5>
                    </div>
                    <div class="modal-body">
                      <div class="form-group row mt-3">
                          <label for="nim" class="col-sm-2 col-form-label">Nim</label>
                          <div class="col-sm-10">
                              <input type="text" class="form-control" id="nim" name="nim" value="{{$data->nim}}" disabled required>
                          </div>
                      </div>
                        <div class="form-group row mt-3">
                            <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="nama" name="nama" value="{{$data->nama}}" required>
                            </div>
                        </div>
                        <div class="form-group row mt-3">
                            <label for="jurusan" class="col-sm-2 col-form-label">Jurusan</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="jurusan" name="jurusan" value="{{$data->jurusan}}" required>
                            </div>
                        </div>
                        <div class="form-group row mt-3">
                            <label for="kelas" class="col-sm-2 col-form-label">Kelas</label>
                            <div class="col-sm-2">
                                <input type="text" class="form-control" id="kelas" name="kelas" value="{{$data->kelas}}" required>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <a type="submit" class="btn btn-secondary" href="{{url('Dashboard')}}">Kembali</a>
                        <button type="reset" class="btn btn-danger mx-2">Reset</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                  </form>
                </div>

              </div>
            </div><!-- End Recent Sales -->

          </div>
        </div><!-- End Left side columns -->

      </div>
    </section>
@endsection
