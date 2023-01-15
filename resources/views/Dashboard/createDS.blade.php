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
                  <form method="post" action="{{ url('Dashboard')}}">
                    @csrf
                    <div class="modal-header">
                        <h5 class="modal-title mt-3"><b>Masukkan Data Dosen</b></h5>
                    </div>
                    <div class="modal-body">
                      <div class="form-group row mt-3">
                          <label for="nik" class="col-sm-2 col-form-label">NIK</label>
                          <div class="col-sm-10">
                              <input type="text" class="form-control" id="nik" name="nik" required>
                          </div>
                      </div>
                        <div class="form-group row mt-3">
                            <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="nama" name="nama" required>
                            </div>
                        </div>
                        <div class="form-group row mt-3">
                            <label for="bidang" class="col-sm-2 col-form-label">Bidang</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="bidang" name="bidang" required>
                            </div>
                        </div>
                        <div class="form-group row mt-3">
                            <label for="status" class="col-sm-2 col-form-label">Status</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="status" name="status" required>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer mt-3">
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
