<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Models\Jasa;
use App\Models\VisiMisi;
use App\Models\Kontak;
use App\Models\Carousel;
use File;




class AdminController extends Controller
{
	public function index()
	{

		return view('admin.index');
	}

	public function jasa()
	{

		$jasa = Jasa::orderBy('id', 'DESC')->get();
		
		return view('admin.jasa.index',compact('jasa'));
	}

	public function jasa_add(Request $request)
	{

		$data_add = new Jasa();

		$data_add->nama_jasa = $request->input('nama_jasa');
		$data_add->deskripsi = $request->input('deskripsi');
		

		if($request->hasFile('foto_jasa_1')){
			$file = $request->file('foto_jasa_1');
			$filename = $file->getClientOriginalName();
			$file->move('uploads/foto_jasa_1/', $filename);
			$data_add->foto_jasa_1 = $filename;


		}else{
			echo "Gagal upload gambar";
		}

		if($request->hasFile('foto_jasa_2')){
			$file = $request->file('foto_jasa_2');
			$filename = $file->getClientOriginalName();
			$file->move('uploads/foto_jasa_2/', $filename);
			$data_add->foto_jasa_2 = $filename;


		}else{
			echo "Gagal upload gambar";
		}

		if($request->hasFile('foto_jasa_3')){
			$file = $request->file('foto_jasa_3');
			$filename = $file->getClientOriginalName();
			$file->move('uploads/foto_jasa_3/', $filename);
			$data_add->foto_jasa_3 = $filename;


		}else{
			echo "Gagal upload gambar";
		}

		if($request->hasFile('foto_jasa_4')){
			$file = $request->file('foto_jasa_4');
			$filename = $file->getClientOriginalName();
			$file->move('uploads/foto_jasa_4/', $filename);
			$data_add->foto_jasa_4 = $filename;


		}else{
			echo "Gagal upload gambar";
		}

		if($request->hasFile('foto_jasa_5')){
			$file = $request->file('foto_jasa_5');
			$filename = $file->getClientOriginalName();
			$file->move('uploads/foto_jasa_5/', $filename);
			$data_add->foto_jasa_5 = $filename;


		}else{
			echo "Gagal upload gambar";
		}


		//return $data_add;
		$data_add->save();

		return redirect()->back()
		->with('success','Data Berhasil Ditambahkan');
	}


	public function jasa_edit($id)
	{

		$jasa_edit = Jasa::where('id', $id)->get();
		$nama_jasa = Jasa::where('id', $id)->first();
		// return $detail_jasa;
		
		return view('admin.jasa.jasa_edit',compact('jasa_edit','nama_jasa'));
	}



	public function jasa_update(Request $request, $id)
	{

		$data_update = Jasa::where('id', $id)->first();

		$input = [
			'nama_jasa' => $request->nama_jasa,
			'deskripsi' => $request->deskripsi,
			

		];


		$data_update->update($input);

		return redirect()->back()->with('success', 'Data Berhasil Diupdate');
	}


	public function foto_jasa_update(Request $request, $id)
	{

		$data_update = Jasa::where('id', $id)->first();


		if ($file = $request->file('foto_jasa_1')) {
			if ($data_update->foto_jasa_1) {
				File::delete('uploads/foto_jasa_1/' . $data_update->foto_jasa_1);
			}
			$nama_file = $file->getClientOriginalName();
			$file->move(public_path() . '/uploads/foto_jasa_1/', $nama_file);
			$input['foto_jasa_1'] = $nama_file;
		}

		if ($file = $request->file('foto_jasa_2')) {
			if ($data_update->foto_jasa_2) {
				File::delete('uploads/foto_jasa_2/' . $data_update->foto_jasa_2);
			}
			$nama_file = $file->getClientOriginalName();
			$file->move(public_path() . '/uploads/foto_jasa_2/', $nama_file);
			$input['foto_jasa_2'] = $nama_file;
		}

		if ($file = $request->file('foto_jasa_3')) {
			if ($data_update->foto_jasa_3) {
				File::delete('uploads/foto_jasa_3/' . $data_update->foto_jasa_3);
			}
			$nama_file = $file->getClientOriginalName();
			$file->move(public_path() . '/uploads/foto_jasa_3/', $nama_file);
			$input['foto_jasa_3'] = $nama_file;
		}

		if ($file = $request->file('foto_jasa_4')) {
			if ($data_update->foto_jasa_4) {
				File::delete('uploads/foto_jasa_4/' . $data_update->foto_jasa_4);
			}
			$nama_file = $file->getClientOriginalName();
			$file->move(public_path() . '/uploads/foto_jasa_4/', $nama_file);
			$input['foto_jasa_4'] = $nama_file;
		}

		if ($file = $request->file('foto_jasa_5')) {
			if ($data_update->foto_jasa_5) {
				File::delete('uploads/foto_jasa_5/' . $data_update->foto_jasa_5);
			}
			$nama_file = $file->getClientOriginalName();
			$file->move(public_path() . '/uploads/foto_jasa_5/', $nama_file);
			$input['foto_jasa_5'] = $nama_file;
		}

		$data_update->update($input);

		return redirect()->back()->with('success', 'Foto Berhasil Diupdate');
	}




	public function foto_jasa_delete_1(Request $request, $id)
	{

		$data_update = Jasa::where('id', $id)->first();

		if ($file = $request->file('foto_jasa_1')) {
			if ($data_update->foto_jasa_1) {
				File::delete('uploads/foto_jasa_1/' . $data_update->foto_jasa_5);
			}
		}
		$input = [
			'foto_jasa_1' => $request->foto_jasa_1,

		];

		$data_update->update($input);

		return redirect()->back()->with('success', 'Foto Berhasil Dihapus');
	}

	public function foto_jasa_delete_2(Request $request, $id)
	{

		$data_update = Jasa::where('id', $id)->first();

		if ($file = $request->file('foto_jasa_2')) {
			if ($data_update->foto_jasa_2) {
				File::delete('uploads/foto_jasa_2/' . $data_update->foto_jasa_5);
			}
		}
		$input = [
			'foto_jasa_2' => $request->foto_jasa_2,

		];

		$data_update->update($input);

		return redirect()->back()->with('success', 'Foto Berhasil Dihapus');
	}


	public function foto_jasa_delete_3(Request $request, $id)
	{

		$data_update = Jasa::where('id', $id)->first();

		if ($file = $request->file('foto_jasa_3')) {
			if ($data_update->foto_jasa_3) {
				File::delete('uploads/foto_jasa_3/' . $data_update->foto_jasa_5);
			}
		}
		$input = [
			'foto_jasa_3' => $request->foto_jasa_3,

		];

		$data_update->update($input);

		return redirect()->back()->with('success', 'Foto Berhasil Dihapus');
	}


	public function foto_jasa_delete_4(Request $request, $id)
	{

		$data_update = Jasa::where('id', $id)->first();

		if ($file = $request->file('foto_jasa_4')) {
			if ($data_update->foto_jasa_4) {
				File::delete('uploads/foto_jasa_4/' . $data_update->foto_jasa_5);
			}
		}
		$input = [
			'foto_jasa_4' => $request->foto_jasa_4,

		];

		$data_update->update($input);

		return redirect()->back()->with('success', 'Foto Berhasil Dihapus');
	}


	public function foto_jasa_delete_5(Request $request, $id)
	{

		$data_update = Jasa::where('id', $id)->first();

		if ($file = $request->file('foto_jasa_5')) {
			if ($data_update->foto_jasa_5) {
				File::delete('uploads/foto_jasa_5/' . $data_update->foto_jasa_5);
			}
		}
		$input = [
			'foto_jasa_5' => $request->foto_jasa_5,

		];

		$data_update->update($input);

		return redirect()->back()->with('success', 'Foto Berhasil Dihapus');
	}


	

	public function jasa_delete($id)
	{
		$jasa = Jasa::findOrFail($id);

		

		$delete_jasa = Jasa::findOrFail($id);
		File::delete('uploads/foto_jasa_1/'.$delete_jasa->foto_jasa_1);
		File::delete('uploads/foto_jasa_2/'.$delete_jasa->foto_jasa_2);
		File::delete('uploads/foto_jasa_3/'.$delete_jasa->foto_jasa_3);
		File::delete('uploads/foto_jasa_4/'.$delete_jasa->foto_jasa_4);
		File::delete('uploads/foto_jasa_5/'.$delete_jasa->foto_jasa_5);
		
		$delete_jasa->delete();

		return redirect()->back()->with('success', 'Data Jasa Berhasil Dihapus');
	}
	
// ==========================================================================================================================

	
	public function visi_misi(){

		$visi_misi = VisiMisi::orderby('id','DESC')->get();
		// $count_visi_misi = VisiMisi::count();

		return view('admin.tentang_perusahaan.visi_misi',compact('visi_misi'));
	}



	public function visi_misi_add(Request $request){

		$data_add = new VisiMisi();

		$data_add->visi = $request->input('visi');
		$data_add->misi = $request->input('misi');


		$data_add->save();

		return redirect()->back()->with('success', 'Visi / Misi Berhasil Ditambahkan');
	}


	public function visi_misi_update(Request $request, $id)
	{

		$data_update = VisiMisi::where('id', $id)->first();

		$input = [
			'visi' => $request->visi,
			'misi' => $request->misi,
			

		];


		$data_update->update($input);

		return redirect()->back()->with('success', 'Visi Misi Berhasil Diupdate');
	}


	public function visi_misi_delete($id)
	{
		$delete = VisiMisi::findOrFail($id);
		$delete->delete();

		return redirect()->back()->with('success', 'Visi Misi Berhasil Dihapus');
	}


// ================================================================================================================

	public function kontak(){

		$kontak = Kontak::orderby('id','DESC')->get();
		// $count_kontak = VisiMisi::count();

		return view('admin.tentang_perusahaan.kontak',compact('kontak'));
	}


	public function kontak_add(Request $request){

		$data_add = new Kontak();

		$data_add->no_telp = $request->input('no_telp');
		$data_add->email = $request->input('email');
		$data_add->alamat = $request->input('alamat');


		$data_add->save();

		return redirect()->back()->with('success', 'Kontak Berhasil Ditambahkan');
	}


	public function kontak_update(Request $request, $id)
	{

		$data_update = Kontak::where('id', $id)->first();

		$input = [
			'no_telp' => $request->no_telp,
			'email' => $request->email,
			'alamat' => $request->alamat,
		];

		$data_update->update($input);

		return redirect()->back()->with('success', 'Kontak Berhasil Diupdate');
	}


	public function kontak_delete($id)
	{
		$delete = Kontak::findOrFail($id);
		$delete->delete();

		return redirect()->back()->with('success', 'kontak Berhasil Dihapus');
	}

// ==========================================================================================================


public function carousel(){

		$carousel = Carousel::orderby('id','DESC')->get();
		// $count_carousel = VisiMisi::count();

		return view('admin.tentang_perusahaan.carousel',compact('carousel'));
	}


	public function carousel_add(Request $request){

	    $get_count = Carousel::count();

		$data_add = new Carousel();

		$data_add->indeks = $get_count+1;
		
		if($request->hasFile('image')){
			$file = $request->file('image');
			$filename = $file->getClientOriginalName();
			$file->move('uploads/carousel/', $filename);
			$data_add->image = $filename;


		}else{
			echo "Gagal upload gambar";
		}

		$data_add->save();

		return redirect()->back()->with('success', 'carousel Berhasil Ditambahkan');
	}


	public function carousel_update(Request $request, $id)
	{

		$data_update = Carousel::where('id', $id)->first();

		if ($file = $request->file('image')) {
			if ($data_update->image) {
				File::delete('uploads/carousel/' . $data_update->image);
			}
			$nama_file = $file->getClientOriginalName();
			$file->move(public_path() . '/uploads/carousel/', $nama_file);
			$input['image'] = $nama_file;
		}

		$data_update->update($input);

		return redirect()->back()->with('success', 'carousel Berhasil Diupdate');
	}


	public function carousel_delete($id)
	{
		$delete = Carousel::findOrFail($id);
		$delete->delete();

		return redirect()->back()->with('success', 'carousel Berhasil Dihapus');
	}



	// public function detail_jasa_add(Request $request)
	// {

	// 	$data_add = new DetailJasa();

	// 	$data_add->id_jasa = $request->input('id_jasa');

	// 	if($request->hasFile('foto_jasa')){
	// 		$file = $request->file('foto_jasa');
	// 		$filename = $file->getClientOriginalName();
	// 		$file->move('uploads/foto_jasa/', $filename);
	// 		$data_add->foto_jasa = $filename;


	// 	}else{
	// 		echo "Gagal upload gambar";
	// 	}


	// 	$data_add->save();

	// 	return redirect()->back()
	// 	->with('success','Data Berhasil Ditambahkan');
	// }
	
}
