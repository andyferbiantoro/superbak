@extends('layouts.app')

@section('title')
BAK INDONESIA ADMIN
@endsection


@section('content')

<div class="row">
 <div class="col-lg-12">
  <div class="card">
    <div class="card-header">
      <h4 style="color: #1C75BC">Team</h4><br>
    </div>


    <div class="card-body">
     <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#ModalTambahTeam">
      Tambah Team
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
            <th>Nama</th>
            <th>Jabatan</th>
            <th>Deskripsi</th>
            <th>Instagram</th>
            <th>Facebook</th>
            <th>Twitter</th>
            <th>Linked In</th>
            <th>Foto</th>
            <th>Opsi</th>
            <th style="display: none;">hidden</th>
          </tr>
        </thead>
        <tbody>
          @php $no=1 @endphp
          @foreach($team as $data)
          <tr>
            <td>{{$no++}}</td>
            <td>{{$data->nama}}</td>
            <td>{{$data->jabatan}}</td>
            <td>{{$data->deskripsi}}</td>
            <td>{{$data->instagram}}</td>
            <td>{{$data->facebook}}</td>
            <td>{{$data->twitter}}</td>
            <td>{{$data->linkedin}}</td>
            <td><img style="border-radius: 0%" height="70" id="ImageTampil" src="{{asset('public/uploads/team/'.$data->image)}}"  data-toggle="modal" data-target="#myModal"></img></td>
            <td>
               <button class="btn btn-success btn-sm editTeam">Edit</button>

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
<div class="modal fade" id="ModalTambahTeam" tabindex="-1" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="myLargeModalLabel">Tambah Data Team</h5>
      </div>
      <div class="modal-body">
       <form method="post" action="{{route('team_add')}}" enctype="multipart/form-data">

        {{csrf_field()}}

        
        <div class="form-group">
          <label for="nama">Nama</label>
          <input type="text" class="form-control" id="nama" name="nama"  required=""></input>
        </div>

        <div class="form-group">
          <label for="jabatan">Jabatan</label>
          <input type="text" class="form-control" id="jabatan" name="jabatan"  required=""></input>
        </div>

        <div class="form-group">
          <label for="deskripsi">Deskripsi</label>
          <textarea type="text" class="form-control" id="deskripsi" name="deskripsi"  required=""></textarea>
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


        <div class="form-group">
          <label for="image">Foto</label>
          <input type="file" class="form-control" id="image" name="image"  required=""></input>
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
<div id="updateTeam" class="modal fade" role="dialog">
  <div class="modal-dialog">
   <!--Modal content-->
   <form action="" id="updateTeamform" method="post" enctype="multipart/form-data">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Anda yakin ingin memperbarui Team ini ?</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        {{ csrf_field() }}
        {{ method_field('POST') }}

       

        <div class="form-group">
          <label for="nama">Nama</label>
          <input type="text" class="form-control" id="nama_update" name="nama"  required=""></input>
        </div>

        <div class="form-group">
          <label for="jabatan">Jabatan</label>
          <input type="text" class="form-control" id="jabatan_update" name="jabatan"  required=""></input>
        </div>

        <div class="form-group">
          <label for="deskripsi">Deskripsi</label>
          <textarea type="text" class="form-control" id="deskripsi_update" name="deskripsi"  required=""></textarea>
        </div>

        <div class="form-group">
          <label for="instagram">Instagram (Opsional)</label>
          <input type="text" class="form-control" id="instagram_update" name="instagram" ></input>
        </div>

        <div class="form-group">
          <label for="facebook">Facebook (Opsional)</label>
          <input type="text" class="form-control" id="facebook_update" name="facebook" ></input>
        </div>

        <div class="form-group">
          <label for="twitter">Twitter (Opsional)</label>
          <input type="text" class="form-control" id="twitter_update" name="twitter" ></input>
        </div>

        <div class="form-group">
          <label for="linkedin">LinkedIn (Opsional)</label>
          <input type="text" class="form-control" id="linkedin_update" name="linkedin" ></input>
        </div>


        <div class="form-group">
          <label for="image">Foto</label>
          <input type="file" class="form-control" id="image_update" name="image"  required=""></input>
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


<!-- Creates the bootstrap modal where the image will appear -->
  <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        </div>
        <div class="modal-body text-center">
          <img src="" id="img01" style="width: 450px; height: auto;" >
        </div>
      </div>
    </div>
  </div>


@endsection

@section('scripts')
<script type="text/javascript">
  function deleteData(id) {
    var id = id;
    var url = '{{route("team_delete", ":id") }}';
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
    table.on('click', '.editTeam', function() {
      $tr = $(this).closest('tr');
      if ($($tr).hasClass('child')) {
        $tr = $tr.prev('.parent');
      }
      var data = table.row($tr).data();
      console.log(data);
      $('#nama_update').val(data[1]);
      $('#jabatan_update').val(data[2]);
      $('#deskripsi_update').val(data[3]);
      $('#instagram_update').val(data[4]);
      $('#facebook_update').val(data[5]);
      $('#twitter_update').val(data[6]);
      $('#linkedin_update').val(data[7]);
      $('#updateTeamform').attr('action','team_update/'+ data[10]);
      $('#updateTeam').modal('show');
    });
  });
</script>




@endsection

