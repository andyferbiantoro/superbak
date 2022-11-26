@extends('layouts.app')

@section('title')
BAK INDONESIA ADMIN
@endsection


@section('content')

<div class="row">
 <div class="col-lg-12">
  <div class="card">
    <div class="card-header">
       <h4 style="color: #1C75BC">Informasi Perusahaan / Visi dan Misi</h4><br>
    </div>
       


    <div class="card-body">
      <h5 style="color: #1C75BC"> Visi</h5><br>
     <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#ModalTambahVisi">
      Tambah Visi
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
            <th>Visi</th>
            <th>Opsi</th>
            <th style="display: none;">hidden</th>
          </tr>
        </thead>
        <tbody>
          @php $no=1 @endphp
          @foreach($visi_misi as $data)
          @if($data->visi != null)
          <tr>
            <td>{{$no++}}</td>
            <td>{{$data->visi}}</td>
            <td>
               <button class="btn btn-success btn-sm editvisi">Edit</button>

               <a href="#" data-toggle="modal" onclick="deleteData({{$data->id}})" data-target="#DeleteModal">
              <button class="btn btn-danger btn-sm"  title="Hapus">Hapus</button>


            </td>
            <td style="display: none;">{{$data->id}}</td>
          </tr>
          @endif
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>
</div>
</div>

<!-- ========================================================================================================== -->

<div class="row">
 <div class="col-lg-12">
  <div class="card">
    <div class="card-header">
      <h4 style="color: #1C75BC">Misi</h4><br>
    </div>


    <div class="card-body">
     <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#ModalTambahMisi">
      Tambah Misi
    </button><br><hr>

    
    <div class="table-responsive">
      <table id="dataTable2" class="table table-striped" style="width:100%">
        <thead>
          <tr>
            <th>No</th>
            <th>Misi</th>
            <th>Opsi</th>
            <th style="display: none;">hidden</th>
          </tr>
        </thead>
        <tbody>
          @php $no=1 @endphp
          @foreach($visi_misi as $data)
          @if($data->misi != null)
          <tr>
            <td>{{$no++}}</td>
            <td>{{$data->misi}}</td>
            <td>
                <button class="btn btn-success btn-sm editmisi">Edit</button>

               <a href="#" data-toggle="modal" onclick="deleteData({{$data->id}})" data-target="#DeleteModal">
              <button class="btn btn-danger btn-sm"  title="Hapus">Hapus</button>


            </td>
            <td style="display: none;">{{$data->id}}</td>
          </tr>
          @endif
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>
</div>
</div>

<!-- ======================================================================================================================= -->

<!-- Modal Tambah -->
<div class="modal fade" id="ModalTambahVisi" tabindex="-1" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="myLargeModalLabel">Tambah Data Visi</h5>
      </div>
      <div class="modal-body">
       <form method="post" action="{{route('visi_misi_add')}}" enctype="multipart/form-data">

        {{csrf_field()}}

        <div class="form-group">
          <label for="visi">Visi</label>
          <textarea type="text" class="form-control" id="visi" name="visi"  required=""></textarea>
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


<!-- Modal Tambah -->
<div class="modal fade" id="ModalTambahMisi" tabindex="-1" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="myLargeModalLabel">Tambah Data Misi</h5>
      </div>
      <div class="modal-body">
       <form method="post" action="{{route('visi_misi_add')}}" enctype="multipart/form-data">

        {{csrf_field()}}

        <div class="form-group">
          <label for="misi">Misi</label>
          <textarea type="text" class="form-control" id="misi" name="misi"  required=""></textarea>
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



<!-- =========================================================================================================================== -->


<!-- Modal Update -->
<div id="updateVisi" class="modal fade" role="dialog">
  <div class="modal-dialog">
   <!--Modal content-->
   <form action="" id="updateVisiform" method="post" enctype="multipart/form-data">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Anda yakin ingin memperbarui Data Visi ini ?</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        {{ csrf_field() }}
        {{ method_field('POST') }}

        <div class="form-group">
          <label for="visi">Visi</label>
          <input type="text" class="form-control" id="visi_update" name="visi"  required=""></input>
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



<!-- Modal Update -->
<div id="updateMisi" class="modal fade" role="dialog">
  <div class="modal-dialog">
   <!--Modal content-->
   <form action="" id="updateMisiform" method="post" enctype="multipart/form-data">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Anda yakin ingin memperbarui Data Misi ini ?</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        {{ csrf_field() }}
        {{ method_field('POST') }}

        <div class="form-group">
          <label for="misi">Misi</label>
          <input type="text" class="form-control" id="misi_update" name="misi"  required=""></input>
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


<!-- =================================================================================================================== -->








<!-- Modal konfirmasi Hapus -->
<div id="DeleteModal" class="modal fade" role="dialog">
  <div class="modal-dialog ">
    <!-- Modal content-->
    <form action="" id="deleteForm" method="post">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Hapus Data</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          {{ csrf_field() }}
          {{ method_field('POST') }}
          <p>Apakah anda yakin ingin menghapus data ini ?</p> <button type="button" class="btn btn-secondary float-right" data-dismiss="modal">Batal</button>
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
    var url = '{{route("visi_misi_delete", ":id") }}';
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
    table.on('click', '.editvisi', function() {
      $tr = $(this).closest('tr');
      if ($($tr).hasClass('child')) {
        $tr = $tr.prev('.parent');
      }
      var data = table.row($tr).data();
      console.log(data);
      $('#visi_update').val(data[1]);
      $('#updateVisiform').attr('action','visi_misi_update/'+ data[3]);
      $('#updateVisi').modal('show');
    });
  });
</script>

<script>
  $(document).ready(function() {
    var table = $('#dataTable2').DataTable();
    table.on('click', '.editmisi', function() {
      $tr = $(this).closest('tr');
      if ($($tr).hasClass('child')) {
        $tr = $tr.prev('.parent');
      }
      var data = table.row($tr).data();
      console.log(data);
      $('#misi_update').val(data[1]);
      $('#updateMisiform').attr('action','visi_misi_update/'+ data[3]);
      $('#updateMisi').modal('show');
    });
  });
</script>


@endsection

