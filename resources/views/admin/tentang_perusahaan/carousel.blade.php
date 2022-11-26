@extends('layouts.app')

@section('title')
BAK INDONESIA ADMIN
@endsection


@section('content')

<div class="row">
 <div class="col-lg-12">
  <div class="card">
    <div class="card-header">
      <h4 style="color: #1C75BC">Informasi Perusahaan / Carousel</h4><br>
    </div>


    <div class="card-body">
     <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#ModalTambahKontak">
      Tambah Image
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
            <th>Indeks</th>
            <th>Image</th>
            <th>Opsi</th>
            <th style="display: none;">hidden</th>
          </tr>
        </thead>
        <tbody>
          @php $no=1 @endphp
          @foreach($carousel as $data)
          <tr>
            <td>{{$no++}}</td>
            <td>{{$data->indeks}}</td>
            <td><img style="border-radius: 0%" height="70" id="ImageTampil" src="{{asset('uploads/carousel/'.$data->image)}}"  data-toggle="modal" data-target="#myModal"></img></td>
            <td>
               <button class="btn btn-success btn-sm editCarousel">Edit</button>

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
<div class="modal fade" id="ModalTambahKontak" tabindex="-1" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="myLargeModalLabel">Tambah Data Carousel</h5>
      </div>
      <div class="modal-body">
       <form method="post" action="{{route('carousel_add')}}" enctype="multipart/form-data">

        {{csrf_field()}}

        <div class="form-group">
          <label for="image">Image</label>
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
<div id="updateCarousel" class="modal fade" role="dialog">
  <div class="modal-dialog">
   <!--Modal content-->
   <form action="" id="updateCarouselform" method="post" enctype="multipart/form-data">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Anda yakin ingin memperbarui Data Carousel ini ?</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        {{ csrf_field() }}
        {{ method_field('POST') }}

       <div class="form-group">
          <label for="image">Image</label>
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
    var url = '{{route("carousel_delete", ":id") }}';
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
    table.on('click', '.editCarousel', function() {
      $tr = $(this).closest('tr');
      if ($($tr).hasClass('child')) {
        $tr = $tr.prev('.parent');
      }
      var data = table.row($tr).data();
      console.log(data);
      $('#updateCarouselform').attr('action','carousel_update/'+ data[4]);
      $('#updateCarousel').modal('show');
    });
  });
</script>




@endsection

