@extends('layouts.app')

@section('title')
BAK INDONESIA ADMIN
@endsection


@section('content')

<div class="row">
 <div class="col-lg-12">
  <div class="card">
    <div class="card-header">
      <h4 style="color: #1C75BC">Informasi Perusahaan / Kerjasama</h4><br>
    </div>


    <div class="card-body">
     @if($count == null)
     <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#ModalTambahKerjasama">
      Tambah Data
    </button><br><hr>
    @endif

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
            <th>Kerjasama Terjalin</th>
            <th>Penilaian</th>
            <th>Jumlah Mitra</th>
            <th>Opsi</th>
            <th style="display: none;">hidden</th>
          </tr>
        </thead>
        <tbody>
          @php $no=1 @endphp
          @foreach($kerjasama as $data)
          <tr>
            <td>{{$no++}}</td>
            <td>{{$data->jumlah_kerjasama}}</td>
            <td>{{$data->penilaian}}</td>
            <td>{{$data->jumlah_mitra}}</td>
            <td>
               <button class="btn btn-success btn-sm editKerjasama">Edit</button>

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

<!-- ========================================================================================================== -->



<!-- Modal Tambah -->
<div class="modal fade" id="ModalTambahKerjasama" tabindex="-1" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="myLargeModalLabel">Tambah Data</h5>
      </div>
      <div class="modal-body">
       <form method="post" action="{{route('kerjasama_add')}}" enctype="multipart/form-data">

        {{csrf_field()}}

        <div class="form-group">
          <label for="jumlah_kerjasama">Kerjasama Terjalin</label>
          <input type="number" class="form-control" id="jumlah_kerjasama" name="jumlah_kerjasama"  required=""></input>
        </div>

        <div class="form-group">
          <label for="penilaian">penilaian</label>
          <input type="number" class="form-control" id="penilaian" name="penilaian"  required=""></input>
        </div>

        <div class="form-group">
          <label for="jumlah_mitra">Jumlah Mitra</label>
          <input type="number" class="form-control" id="jumlah_mitra" name="jumlah_mitra"  required=""></input>
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
<div id="updateKerjasama" class="modal fade" role="dialog">
  <div class="modal-dialog">
   <!--Modal content-->
   <form action="" id="updateKerjasamaform" method="post" enctype="multipart/form-data">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Anda yakin ingin memperbarui Data Kerjasama ini ?</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        {{ csrf_field() }}
        {{ method_field('POST') }}

        <div class="form-group">
          <label for="jumlah_kerjasama">Kerjasama Terjalin</label>
          <input type="number" class="form-control" id="jumlah_kerjasama_update" name="jumlah_kerjasama"  required=""></input>
        </div>

        <div class="form-group">
          <label for="penilaian">penilaian</label>
          <input type="number" class="form-control" id="penilaian_update" name="penilaian"  required=""></input>
        </div>

        <div class="form-group">
          <label for="jumlah_mitra">Jumlah Mitra</label>
          <input type="number" class="form-control" id="jumlah_mitra_update" name="jumlah_mitra"  required=""></input>
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
    var url = '{{route("kerjasama_delete", ":id") }}';
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
    table.on('click', '.editKerjasama', function() {
      $tr = $(this).closest('tr');
      if ($($tr).hasClass('child')) {
        $tr = $tr.prev('.parent');
      }
      var data = table.row($tr).data();
      console.log(data);
      $('#jumlah_kerjasama_update').val(data[1]);
      $('#penilaian_update').val(data[2]);
      $('#jumlah_mitra_update').val(data[3]);
      $('#updateKerjasamaform').attr('action','kerjasama_update/'+ data[5]);
      $('#updateKerjasama').modal('show');
    });
  });
</script>




@endsection

