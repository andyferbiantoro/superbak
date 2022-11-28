@extends('layouts.app')

@section('title')
BAK INDONESIA ADMIN
@endsection


@section('content')

<div class="row">
 <div class="col-lg-12">
  <div class="card">
    <div class="card-header">

      <h5 style="color:#1C75BC "><a href="{{ route('jasa') }}"><b>Jasa</b></a> / {{$nama_jasa->nama_jasa}}</h5>
    </div>


    <div class="card-body">

      @if (session('success'))
      <div class="alert alert-success">
        {{ session('success') }}
      </div>
      @endif
      @foreach($jasa_edit as $data)
      <form method="post" action="{{route('jasa_update', $data->id)}}" enctype="multipart/form-data">
        <div class="row">

          {{csrf_field()}}
          <div class="col-lg-6">
            <div class="form-group">
              <label for="nama_jasa">Nama Jasa</label>
              <input type="text" class="form-control" id="nama_jasa" name="nama_jasa"  required="" value="{{$data->nama_jasa}}"></input>
            </div>
          </div>

          <div class="col-lg-6">
            <div class="form-group">
              <label for="deskripsi">Deskripsi</label>
              <input type="text" class="form-control" id="deskripsi" name="deskripsi"  required="" value="{{$data->deskripsi}}"></input>
            </div>
          </div>


        </div>
        <div class="modal-footer">
          <button class="btn btn-primary" type="Submit">Update</button>

        </div>
      </div>
    </form>
    @endforeach
  </div>
</div>
</div>


<div class="col-lg-12">
  <div class="card">
    <div class="card-header">

      <h5 style="color:#1C75BC "><b>Foto</b></h5>
    </div>


    <div class="card-body">
     @foreach($jasa_edit as $foto)
     <div class="row">

      <div class="col-lg-6 text-center">
        <img style="border-radius: 0%; height: 350px; width: auto;"  src="{{asset('public/uploads/foto_jasa_1/'.$foto->foto_jasa_1)}}">
        <p>Foto 1</p><br>
        <form method="post" action="{{route('foto_jasa_update', $foto->id)}}" enctype="multipart/form-data">
          {{csrf_field()}}
          <div class="form-group">
            <input type="file" class="form-control" id="foto_jasa_1" name="foto_jasa_1" required=""></input><br>
            <button class="btn btn-primary" type="Submit">Perbarui Foto</button>
          </div>
        </form>

        <form method="post" action="{{route('foto_jasa_delete_1', $foto->id)}}" enctype="multipart/form-data">
          {{csrf_field()}}
          <div class="form-group">
            <button class="btn btn-danger" type="Submit">Hapus Foto</button>
          </div>
        </form>
      </div>

      <div class="col-lg-6 text-center">
        <img style="border-radius: 0%; height: 350px; width: auto;"  src="{{asset('public/uploads/foto_jasa_2/'.$foto->foto_jasa_2)}}">
        <p>Foto 2</p><br>
        <form method="post" action="{{route('foto_jasa_update', $foto->id)}}" enctype="multipart/form-data">
          {{csrf_field()}}
          <div class="form-group">
            <input type="file" class="form-control" id="foto_jasa_2" name="foto_jasa_2" required=""></input><br>
            <button class="btn btn-primary" type="Submit">Perbarui Foto</button>
          </div>
        </form>

         <form method="post" action="{{route('foto_jasa_delete_2', $foto->id)}}" enctype="multipart/form-data">
          {{csrf_field()}}
          <div class="form-group">
            <button class="btn btn-danger" type="Submit">Hapus Foto</button>
          </div>
        </form>
      </div>
    </div>
    <hr><br>

    <div class="row">
      <div class="col-lg-6 text-center">
        <img style="border-radius: 0%; height: 350px; width: auto;"  src="{{asset('public/uploads/foto_jasa_3/'.$foto->foto_jasa_3)}}">
        <p>Foto 3</p>
        <br>
        <form method="post" action="{{route('foto_jasa_update', $foto->id)}}" enctype="multipart/form-data">
          {{csrf_field()}}
          <div class="form-group">
            <input type="file" class="form-control" id="foto_jasa_3" name="foto_jasa_3" required=""></input><br>
            <button class="btn btn-primary" type="Submit">Perbarui Foto</button>
          </div>
        </form>

         <form method="post" action="{{route('foto_jasa_delete_3', $foto->id)}}" enctype="multipart/form-data">
          {{csrf_field()}}
          <div class="form-group">
            <button class="btn btn-danger" type="Submit">Hapus Foto</button>
          </div>
        </form>
      </div>

      <div class="col-lg-6 text-center">
        <img style="border-radius: 0%; height: 350px; width: auto;"  src="{{asset('public/uploads/foto_jasa_4/'.$foto->foto_jasa_4)}}">
        <p>Foto 4</p>
        <br>
        <form method="post" action="{{route('foto_jasa_update', $foto->id)}}" enctype="multipart/form-data">
          {{csrf_field()}}
          <div class="form-group">
            <input type="file" class="form-control" id="foto_jasa_4" name="foto_jasa_4" required=""></input><br>
            <button class="btn btn-primary" type="Submit">Perbarui Foto</button>
          </div>
        </form>

         <form method="post" action="{{route('foto_jasa_delete_4', $foto->id)}}" enctype="multipart/form-data">
          {{csrf_field()}}
          <div class="form-group">
            <button class="btn btn-danger" type="Submit">Hapus Foto</button>
          </div>
        </form>
      </div>
    </div>
    <hr><br>


    <div class="row">

      <div class="col-lg-6 text-center">
        <img style="border-radius: 0%; height: 350px; width: auto;"  src="{{asset('public/uploads/foto_jasa_5/'.$foto->foto_jasa_5)}}">
        <p>Foto 5</p>
        <br>
        <form method="post" action="{{route('foto_jasa_update', $foto->id)}}" enctype="multipart/form-data">
          {{csrf_field()}}
          <div class="form-group">
            <input type="file" class="form-control" id="foto_jasa_5" name="foto_jasa_5" required=""></input><br>
            <button class="btn btn-primary" type="Submit">Perbarui Foto</button>
          </div>
        </form>

         <form method="post" action="{{route('foto_jasa_delete_5', $foto->id)}}" enctype="multipart/form-data">
          {{csrf_field()}}
          <div class="form-group">
            <button class="btn btn-danger" type="Submit">Hapus Foto</button>
          </div>
        </form>
      </div>



    </div>
    @endforeach
  </div>
</div>
</div>

</div>



@endsection

@section('scripts')



@endsection

