@extends('layouts.app')

@section('title')
BAK INDONESIA ADMIN
@endsection


@section('content')

<div class="row">
 <div class="col-lg-12">
  <div class="card">
    <div class="card-header">
      <h4 style="color: #1C75BC">Selamat Datang Admin</h4><br>
    </div>


    <div class="card-body">
     
      
      @if (session('success'))
      <div class="alert alert-success">
        {{ session('success') }}
      </div>
      @endif
      <div class="table-responsive">
        <table id="dataTable" class="table table-striped" style="width:100%">
          <thead>
            <tr>
              <th>No</th>
              <th>Nama Pelaku Usaha</th>
              <th>Nama Produk</th>
              <th>Jenis Usaha</th>
              <th>Foto Produk</th>
              <th>Opsi</th>
              <th style="display: none;">hidden</th>
            </tr>
          </thead>
          
    </table>
  </div>


</div>
</div>
</div>
</div>




@endsection

@section('scripts')



@endsection

