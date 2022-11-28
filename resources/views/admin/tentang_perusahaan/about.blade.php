@extends('layouts.app')

@section('title')
BAK INDONESIA ADMIN
@endsection


@section('content')

<div class="row">
 <div class="col-lg-12">
  <div class="card">
    <div class="card-header">
      <h4 style="color: #1C75BC">Informasi Perusahaan / About</h4><br>
    </div>


    <div class="card-body">
      @if($count == null)
     <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#ModalTambahAbout">
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
            <th>Header</th>
            <th>Deskripsi</th>
            <th>Instagram</th>
            <th>Facebook</th>
            <th>Twitter</th>
            <th>LinkedIn</th>
            <th>Opsi</th>
            <th style="display: none;">hidden</th>
          </tr>
        </thead>
        <tbody>
          @php $no=1 @endphp
          @foreach($about as $data)
          <tr>
            <td>{{$no++}}</td>
            <td>{{$data->header}}</td>
            <td>{{$data->deskripsi}}</td>
            <td>{{$data->instagram}}</td>
            <td>{{$data->facebook}}</td>
            <td>{{$data->twitter}}</td>
            <td>{{$data->linkedin}}</td>
            <td>
               <button class="btn btn-success btn-sm editAbout">Edit</button>

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
<div class="modal fade" id="ModalTambahAbout" tabindex="-1" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="myLargeModalLabel">Tambah Data</h5>
      </div>
      <div class="modal-body">
       <form method="post" action="{{route('about_add')}}" enctype="multipart/form-data">

        {{csrf_field()}}

       
        <div class="form-group">
          <label for="header">Header</label>
          <input type="text" class="form-control" id="header" name="header"  required=""></input>
        </div>

        <div class="form-group">
          <label for="deskripsi">Deskripsi</label>
          <input type="text" class="form-control" id="deskripsi" name="deskripsi"  required=""></input>
        </div>

        <div class="form-group">
          <label for="instagram">Link Instagram (Opsional)</label>
          <input type="text" class="form-control" id="instagram" name="instagram" ></input>
        </div>
 
        <div class="form-group">
          <label for="facebook">Link Facebook (Opsional)</label>
          <input type="text" class="form-control" id="facebook" name="facebook" ></input>
        </div>

        <div class="form-group">
          <label for="twitter">Link Twitter (Opsional)</label>
          <input type="text" class="form-control" id="twitter" name="twitter" ></input>
        </div>

        <div class="form-group">
          <label for="linkedin">Link LinkedIn (Opsional)</label>
          <input type="text" class="form-control" id="linkedin" name="linkedin" ></input>
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
<div id="updateAbout" class="modal fade" role="dialog">
  <div class="modal-dialog">
   <!--Modal content-->
   <form action="" id="updateAboutform" method="post" enctype="multipart/form-data">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Anda yakin ingin memperbarui Data About ini ?</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        {{ csrf_field() }}
        {{ method_field('POST') }}

        

        <div class="form-group">
          <label for="header">Header</label>
          <input type="text" class="form-control" id="header_update" name="header"  required=""></input>
        </div>

        <div class="form-group">
          <label for="deskripsi">Deskripsi</label>
          <input type="text" class="form-control" id="deskripsi_update" name="deskripsi"  required=""></input>
        </div>


        <div class="form-group">
          <label for="instagram">Link Instagram (Opsional)</label>
          <input type="text" class="form-control" id="instagram_update" name="instagram" ></input>
        </div>
 
        <div class="form-group">
          <label for="facebook">Link Facebook (Opsional)</label>
          <input type="text" class="form-control" id="facebook_update" name="facebook" ></input>
        </div>

        <div class="form-group">
          <label for="twitter">Link Twitter (Opsional)</label>
          <input type="text" class="form-control" id="twitter_update" name="twitter" ></input>
        </div>

        <div class="form-group">
          <label for="linkedin">Link LinkedIn (Opsional)</label>
          <input type="text" class="form-control" id="linkedin_update" name="linkedin" ></input>
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
    var url = '{{route("about_delete", ":id") }}';
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
    table.on('click', '.editAbout', function() {
      $tr = $(this).closest('tr');
      if ($($tr).hasClass('child')) {
        $tr = $tr.prev('.parent');
      }
      var data = table.row($tr).data();
      console.log(data);
      $('#header_update').val(data[1]);
      $('#deskripsi_update').val(data[2]);
      $('#instagram_update').val(data[3]);
      $('#facebook_update').val(data[4]);
      $('#twitter_update').val(data[5]);
      $('#linkedin_update').val(data[6]);
      $('#updateAboutform').attr('action','about_update/'+ data[8]);
      $('#updateAbout').modal('show');
    });
  });
</script>




@endsection

