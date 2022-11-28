@extends('layouts.app')

@section('title')
BAK INDONESIA ADMIN
@endsection


@section('content')

<div class="row">
 <div class="col-lg-12">
  <div class="card">
    <div class="card-header">
      <h4 style="color: #1C75BC">Kelola Jasa</h4><br>
    </div>


    <div class="card-body">
     <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#ModalTambah">
      Tambah Jasa
    </button><br><hr>

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
            <th>Nama Jasa</th>
            <th>Deskripsi</th>
            <th>Foto Jasa 1</th>
            <th>Foto Jasa 2</th>
            <th>Foto Jasa 3</th>
            <th>Foto Jasa 4</th>
            <th>Foto Jasa 5</th>
            <th>Opsi</th>
            <th style="display: none;">hidden</th>
          </tr>
        </thead>
        <tbody>
          @php $no=1 @endphp
          @foreach($jasa as $data)
          <tr>
            <td>{{$no++}}</td>
            <td>{{$data->nama_jasa}}</td>
            <td>{{$data->deskripsi}}</td>
            <td><img style="border-radius: 0%" height="70" id="ImageTampil" src="{{asset('public/uploads/foto_jasa_1/'.$data->foto_jasa_1)}}"  data-toggle="modal" data-target="#myModal"></img></td>

            <td><img style="border-radius: 0%" height="70" id="ImageTampil" src="{{asset('public/uploads/foto_jasa_2/'.$data->foto_jasa_2)}}"  data-toggle="modal" data-target="#myModal"></img></td>

            <td><img style="border-radius: 0%" height="70" id="ImageTampil" src="{{asset('public/uploads/foto_jasa_3/'.$data->foto_jasa_3)}}"  data-toggle="modal" data-target="#myModal"></img></td>

            <td><img style="border-radius: 0%" height="70" id="ImageTampil" src="{{asset('public/uploads/foto_jasa_4/'.$data->foto_jasa_4)}}"  data-toggle="modal" data-target="#myModal"></img></td>

            <td><img style="border-radius: 0%" height="70" id="ImageTampil" src="{{asset('public/uploads/foto_jasa_5/'.$data->foto_jasa_5)}}"  data-toggle="modal" data-target="#myModal"></img></td>  
            <td>

               <a href="{{ route('jasa_edit',$data->id) }}"><button class="btn btn-warning btn-sm ">Edit</button></a><br><br>

               <a href="#" data-toggle="modal" onclick="deleteData({{$data->id}})" data-target="#DeleteModal">
              <button class="btn btn-danger btn-sm"  title="Hapus">Hapus</button>


            </td>
            <td style="display: none;">{{$data->id}}</td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>


  </div>
</div>
</div>
</div>

<!-- Modal Tambah -->
<div class="modal fade" id="ModalTambah" tabindex="-1" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="myLargeModalLabel">Tambah Data Paket Foto</h5>
      </div>
      <div class="modal-body">
       <form method="post" action="{{route('jasa_add')}}" enctype="multipart/form-data">

        {{csrf_field()}}

        <div class="form-group">
          <label for="nama_jasa">Nama Jasa</label>
          <input type="text" class="form-control" id="nama_jasa" name="nama_jasa"  required=""></input>
        </div>

        <div class="form-group">
          <label for="deskripsi">Deskripsi</label>
          <textarea type="text" class="form-control" id="deskripsi" name="deskripsi"  required=""></textarea>
        </div>

        <div class="form-group">
          <label for="foto_jasa_1">Foto Jasa 1</label>
          <input type="file" class="form-control" id="foto_jasa_1" name="foto_jasa_1"></input>
        </div>

        <div class="form-group">
          <label for="foto_jasa_2">Foto Jasa 2</label>
          <input type="file" class="form-control" id="foto_jasa_2" name="foto_jasa_2"></input>
        </div>

        <div class="form-group">
          <label for="foto_jasa_3">Foto Jasa 3</label>
          <input type="file" class="form-control" id="foto_jasa_3" name="foto_jasa_3"></input>
        </div>

        <div class="form-group">
          <label for="foto_jasa_4">Foto Jasa 4</label>
          <input type="file" class="form-control" id="foto_jasa_4" name="foto_jasa_4"></input>
        </div>

        <div class="form-group">
          <label for="foto_jasa_5">Foto Jasa 5</label>
          <input type="file" class="form-control" id="foto_jasa_5" name="foto_jasa_5"></input>
        </div>

      </div>
      <div class="modal-footer">
        <button class="btn btn-primary" type="Submit">Tambahkan</button>
        <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>

      </div>
    </form>
  </div>
</div>
</div>






<!-- Modal Update -->
<div id="updateInformasi" class="modal fade" role="dialog">
  <div class="modal-dialog">
   <!--Modal content-->
   <form action="" id="updateInformasiform" method="post" enctype="multipart/form-data">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Anda yakin ingin memperbarui Data Jasa ini ?</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        {{ csrf_field() }}
        {{ method_field('POST') }}

        <div class="form-group">
          <label for="nama_jasa">Nama Jasa</label>
          <input type="text" class="form-control" id="nama_jasa_update" name="nama_jasa"  required=""></input>
        </div>

        <div class="form-group">
          <label for="deskripsi">Deskripsi</label>
          <input type="text" class="form-control" id="deskripsi_update" name="deskripsi"  required=""></input>
        </div>

        <div class="form-group">
          <label for="foto_jasa_1">Foto Jasa 1</label>
          <input type="file" class="form-control" id="foto_jasa_1" name="foto_jasa_1"></input>
        </div>

        <div class="form-group">
          <label for="foto_jasa_2">Foto Jasa 2</label>
          <input type="file" class="form-control" id="foto_jasa_2" name="foto_jasa_2"></input>
        </div>

        <div class="form-group">
          <label for="foto_jasa_3">Foto Jasa 3</label>
          <input type="file" class="form-control" id="foto_jasa_3" name="foto_jasa_3"></input>
        </div>

        <div class="form-group">
          <label for="foto_jasa_4">Foto Jasa 4</label>
          <input type="file" class="form-control" id="foto_jasa_4" name="foto_jasa_4"></input>
        </div>

        <div class="form-group">
          <label for="foto_jasa_5">Foto Jasa 5</label>
          <input type="file" class="form-control" id="foto_jasa_5" name="foto_jasa_5"></input>
        </div>


      </div> 
      <div class="modal-footer">
        <button type="submit"  class="btn btn-primary float-right mr-2" >Perbarui</button>
        <button type="button" class="btn btn-secondary float-right" data-dismiss="modal">Batal</button>
      </div>
    </div>
  </form>
</div>
</div>



<!-- Modal konfirmasi Hapus -->
<div id="DeleteModal" class="modal fade" role="dialog">
  <div class="modal-dialog ">
    <!-- Modal content-->
    <form action="" id="deleteForm" method="post">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Hapus Data Jasa</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          {{ csrf_field() }}
          {{ method_field('POST') }}
          <p>Apakah anda yakin ingin menghapus data Jasa ini ?</p> <button type="button" class="btn btn-secondary float-right" data-dismiss="modal">Batal</button>
          <button type="submit" name="" class="btn btn-danger float-right mr-2" data-dismiss="modal" onclick="formSubmit()">Hapus</button>
        </div>
      </div>
    </form>
  </div>
</div> 


@endsection

@section('scripts')
<script type="text/javascript">
  function deleteData(id) {
    var id = id;
    var url = '{{route("jasa_delete", ":id") }}';
    url = url.replace(':id', id);
    $("#deleteForm").attr('action', url);
  }
  function formSubmit() {
    $("#deleteForm").submit();
  }
</script>


<script>
  $(document).ready(function() {
    var table = $('#dataTable').DataTable();
    table.on('click', '.edit', function() {
      $tr = $(this).closest('tr');
      if ($($tr).hasClass('child')) {
        $tr = $tr.prev('.parent');
      }
      var data = table.row($tr).data();
      console.log(data);
      $('#nama_jasa_update').val(data[1]);
      $('#deskripsi_update').val(data[2]);
      $('#updateInformasiform').attr('action','jasa_update/'+ data[8]);
      $('#updateInformasi').modal('show');
    });
  });
</script>


@endsection

