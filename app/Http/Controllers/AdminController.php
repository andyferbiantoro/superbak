<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Models\Jasa;
use App\Models\VisiMisi;
use App\Models\Kontak;
use App\Models\Carousel;
use App\Models\Kerjasama;
use App\Models\Portofolio;
use App\Models\Team;
use App\Models\Beranda;
use App\Models\About;
use File;
use DB;




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
			$file->move('public/uploads/foto_jasa_1/', $filename);
			$data_add->foto_jasa_1 = $filename;


		}else{
			echo "Gagal upload gambar";
		}

		if($request->hasFile('foto_jasa_2')){
			$file = $request->file('foto_jasa_2');
			$filename = $file->getClientOriginalName();
			$file->move('public/uploads/foto_jasa_2/', $filename);
			$data_add->foto_jasa_2 = $filename;


		}else{
			echo "Gagal upload gambar";
		}

		if($request->hasFile('foto_jasa_3')){
			$file = $request->file('foto_jasa_3');
			$filename = $file->getClientOriginalName();
			$file->move('public/uploads/foto_jasa_3/', $filename);
			$data_add->foto_jasa_3 = $filename;


		}else{
			echo "Gagal upload gambar";
		}

		if($request->hasFile('foto_jasa_4')){
			$file = $request->file('foto_jasa_4');
			$filename = $file->getClientOriginalName();
			$file->move('public/uploads/foto_jasa_4/', $filename);
			$data_add->foto_jasa_4 = $filename;


		}else{
			echo "Gagal upload gambar";
		}

		if($request->hasFile('foto_jasa_5')){
			$file = $request->file('foto_jasa_5');
			$filename = $file->getClientOriginalName();
			$file->move('public/uploads/foto_jasa_5/', $filename);
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

		$update_slug = Portofolio::where('id_jasa', $id)->get();

		foreach ($update_slug as $key => $value) {
			$input_slug = [
				'slug' => $request->nama_jasa,
			];

			$value->update($input_slug);
		}


		return redirect()->back()->with('success', 'Data Berhasil Diupdate');
	}


	public function foto_jasa_update(Request $request, $id)
	{

		$data_update = Jasa::where('id', $id)->first();


		if ($file = $request->file('foto_jasa_1')) {
			if ($data_update->foto_jasa_1) {
				File::delete('public/uploads/foto_jasa_1/' . $data_update->foto_jasa_1);
			}
			$nama_file = $file->getClientOriginalName();
			$file->move(public_path() . '/uploads/foto_jasa_1/', $nama_file);
			$input['foto_jasa_1'] = $nama_file;
		}

		if ($file = $request->file('foto_jasa_2')) {
			if ($data_update->foto_jasa_2) {
				File::delete('public/uploads/foto_jasa_2/' . $data_update->foto_jasa_2);
			}
			$nama_file = $file->getClientOriginalName();
			$file->move(public_path() . '/uploads/foto_jasa_2/', $nama_file);
			$input['foto_jasa_2'] = $nama_file;
		}

		if ($file = $request->file('foto_jasa_3')) {
			if ($data_update->foto_jasa_3) {
				File::delete('public/uploads/foto_jasa_3/' . $data_update->foto_jasa_3);
			}
			$nama_file = $file->getClientOriginalName();
			$file->move(public_path() . '/uploads/foto_jasa_3/', $nama_file);
			$input['foto_jasa_3'] = $nama_file;
		}

		if ($file = $request->file('foto_jasa_4')) {
			if ($data_update->foto_jasa_4) {
				File::delete('public/uploads/foto_jasa_4/' . $data_update->foto_jasa_4);
			}
			$nama_file = $file->getClientOriginalName();
			$file->move(public_path() . '/uploads/foto_jasa_4/', $nama_file);
			$input['foto_jasa_4'] = $nama_file;
		}

		if ($file = $request->file('foto_jasa_5')) {
			if ($data_update->foto_jasa_5) {
				File::delete('public/uploads/foto_jasa_5/' . $data_update->foto_jasa_5);
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
				File::delete('public/uploads/foto_jasa_1/' . $data_update->foto_jasa_5);
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
				File::delete('public/uploads/foto_jasa_2/' . $data_update->foto_jasa_5);
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
				File::delete('public/uploads/foto_jasa_3/' . $data_update->foto_jasa_5);
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
				File::delete('public/uploads/foto_jasa_4/' . $data_update->foto_jasa_5);
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
				File::delete('public/uploads/foto_jasa_5/' . $data_update->foto_jasa_5);
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

		$portofolio = Portofolio::where('id_jasa', $jasa->id)->get();

		foreach ($portofolio as $key => $value) {
			File::delete('public/uploads/portofolio_image/'.$value->portofolio_image);
			
			$value->delete();
		}
		

		$delete_jasa = Jasa::findOrFail($id);
		File::delete('public/uploads/foto_jasa_1/'.$delete_jasa->foto_jasa_1);
		File::delete('public/uploads/foto_jasa_2/'.$delete_jasa->foto_jasa_2);
		File::delete('public/uploads/foto_jasa_3/'.$delete_jasa->foto_jasa_3);
		File::delete('public/uploads/foto_jasa_4/'.$delete_jasa->foto_jasa_4);
		File::delete('public/uploads/foto_jasa_5/'.$delete_jasa->foto_jasa_5);
		
		$delete_jasa->delete();

		return redirect()->back()->with('success', 'Data Jasa Berhasil Dihapus');
	}
	
// ==========================================================================================================================
public function beranda(){

		$beranda = Beranda::all();
		$count = Beranda::count();
		// $count_beranda = VisiMisi::count();

		return view('admin.tentang_perusahaan.beranda',compact('beranda','count'));
	}


	public function beranda_add(Request $request){


		$data_add = new Beranda();

		$data_add->header = $request->input('header');
		$data_add->deskripsi = $request->input('deskripsi');
		
		$data_add->save();

		return redirect()->back()->with('success', 'Beranda Berhasil Ditambahkan');
	}


	public function beranda_update(Request $request, $id)
	{

		$data_update = Beranda::where('id', $id)->first();

		$input = [
			'header' => $request->header,
			'deskripsi' => $request->deskripsi,
			
		];

		$data_update->update($input);

		return redirect()->back()->with('success', 'Beranda Berhasil Diupdate');
	}


	public function beranda_delete($id)
	{
		$delete = Beranda::findOrFail($id);
		$delete->delete();

		return redirect()->back()->with('success', 'Beranda Berhasil Dihapus');
	}
// ==============================================================================================================


	public function about(){

		$about = About::all();
		$count = About::count();
		// $count_about = VisiMisi::count();

		return view('admin.tentang_perusahaan.about',compact('about','count'));
	}


	public function about_add(Request $request){


		$data_add = new About();

		$data_add->header = $request->input('header');
		$data_add->deskripsi = $request->input('deskripsi');
		$data_add->instagram = $request->input('instagram');
		$data_add->facebook = $request->input('facebook');
		$data_add->twitter = $request->input('twitter');
		$data_add->linkedin = $request->input('linkedin');

		
		$data_add->save();

		return redirect()->back()->with('success', 'Data Berhasil Ditambahkan');
	}


	public function about_update(Request $request, $id)
	{

		$data_update = About::where('id', $id)->first();

		$input = [
			'header' => $request->header,
			'deskripsi' => $request->deskripsi,
			'instagram' => $request->instagram,
			'facebook' => $request->facebook,
			'twitter' => $request->twitter,
			'linkedin' => $request->linkedin,
			
		];

		$data_update->update($input);

		return redirect()->back()->with('success', 'Data Berhasil Diupdate');
	}


	public function about_delete($id)
	{
		$delete = About::findOrFail($id);
		$delete->delete();

		return redirect()->back()->with('success', 'Data Berhasil Dihapus');
	}


// =============================================================================================================
	
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
			$file->move('public/uploads/carousel/', $filename);
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
				File::delete('public/uploads/carousel/' . $data_update->image);
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
		File::delete('public/uploads/carousel/' . $delete->image);
		$delete->delete();

		return redirect()->back()->with('success', 'carousel Berhasil Dihapus');
	}

// ==========================================================================================================================


public function kerjasama(){

		$kerjasama = Kerjasama::orderby('id','DESC')->get();
		$count = Beranda::count();
		// $count_kerjasama = VisiMisi::count();

		return view('admin.tentang_perusahaan.kerjasama',compact('kerjasama','count'));
	}


	public function kerjasama_add(Request $request){


		$data_add = new kerjasama();

		$data_add->jumlah_kerjasama = $request->input('jumlah_kerjasama');
		$data_add->penilaian = $request->input('penilaian');
		$data_add->jumlah_mitra = $request->input('jumlah_mitra');
		
		$data_add->save();

		return redirect()->back()->with('success', 'kerjasama Berhasil Ditambahkan');
	}


	public function kerjasama_update(Request $request, $id)
	{

		$data_update = kerjasama::where('id', $id)->first();

		$input = [
			'jumlah_kerjasama' => $request->jumlah_kerjasama,
			'penilaian' => $request->penilaian,
			'jumlah_mitra' => $request->jumlah_mitra,
		];

		$data_update->update($input);

		return redirect()->back()->with('success', 'kerjasama Berhasil Diupdate');
	}


	public function kerjasama_delete($id)
	{
		$delete = Kerjasama::findOrFail($id);
		$delete->delete();

		return redirect()->back()->with('success', 'kerjasama Berhasil Dihapus');
	}


//====================================================================================================================

public function portofolio(){

		// $portofolio = Portofolio::orderby('id','DESC')->get();

		$portofolio = DB::table('portofolios')
		->join('jasas' , 'portofolios.id_jasa', '=' , 'jasas.id')
		->select('portofolios.*','jasas.nama_jasa')
		->orderBy('portofolios.id','DESC')
		->get();

		$list_jasa = Jasa::orderby('id', 'DESC')->get();
		
		// return $portofolio;

		return view('admin.tentang_perusahaan.portofolio',compact('portofolio','list_jasa'));
	}


	public function portofolio_add(Request $request){

		$get_count = portofolio::where('id_jasa', $request->id_jasa)->count();

		$data = ([
			'id_jasa' => $request['id_jasa'],
			'indeks' => $get_count+1,

		]);

		

		if($request->hasFile('portofolio_image')){
			$file = $request->file('portofolio_image');
			$filename = $file->getClientOriginalName();
			$file->move('public/uploads/portofolio_image/', $filename);
			$data['portofolio_image'] = $filename;


		}else{
			echo "Gagal upload gambar";
		}


		$lastid = Portofolio::create($data)->id_jasa;

		$jasa = Jasa::where('id', $lastid)->first();
		$get_slug = $jasa->nama_jasa;

		$data_update = Portofolio::where('id_jasa', $lastid)->orderBy('id','DESC')->first();
		$update_slug = [
			'slug' => $get_slug,
		];

		$data_update->update($update_slug);


		return redirect()->back()->with('success', 'portofolio Berhasil Ditambahkan');
	}


	public function portofolio_update(Request $request, $id)
	{

		$data_update = Portofolio::where('id', $id)->first();

		$input = [
			'id_jasa' => $request->id_jasa,
		];

		if ($file = $request->file('portofolio_image')) {
			if ($data_update->portofolio_image) {
				File::delete('public/uploads/portofolio_image/' . $data_update->portofolio_image);
			}
			$nama_file = $file->getClientOriginalName();
			$file->move(public_path() . '/uploads/portofolio_image/', $nama_file);
			$input['portofolio_image'] = $nama_file;
		}

		$data_update->update($input);

		return redirect()->back()->with('success', 'portofolio Berhasil Diupdate');
	}


	public function portofolio_delete($id)
	{
		$delete = Portofolio::findOrFail($id);
		File::delete('public/uploads/portofolio_image/' . $delete->portofolio_image);
		$delete->delete();

		return redirect()->back()->with('success', 'portofolio Berhasil Dihapus');
	}

	//==============================================================================================================


	public function team(){

		$team = Team::orderby('id','DESC')->get();

		// $team = DB::table('teams')
		// ->join('jasas' , 'teams.id_jasa', '=' , 'jasas.id')
		// ->select('teams.*','jasas.nama_jasa')
		// ->orderBy('teams.id','DESC')
		// ->get();

		// $list_jasa = Jasa::orderby('id', 'DESC')->get();
		// $count_team = VisiMisi::count();

		return view('admin.team.index',compact('team'));
	}


	public function team_add(Request $request){


		$data_add = new Team();

		$data_add->nama = $request->input('nama');
		$data_add->jabatan = $request->input('jabatan');
		$data_add->deskripsi = $request->input('deskripsi');
		$data_add->instagram = $request->input('instagram');
		$data_add->facebook = $request->input('facebook');
		$data_add->linkedin = $request->input('linkedin');
		$data_add->twitter = $request->input('twitter');
		
		if($request->hasFile('image')){
			$file = $request->file('image');
			$filename = $file->getClientOriginalName();
			$file->move('public/uploads/team/', $filename);
			$data_add->image = $filename;


		}else{
			echo "Gagal upload gambar";
		}

		$data_add->save();

		return redirect()->back()->with('success', 'Team Berhasil Ditambahkan');
	}


	public function team_update(Request $request, $id)
	{

		$data_update = team::where('id', $id)->first();

		$input = [
			'nama' => $request->nama,
			'jabatan' => $request->jabatan,
			'deskripsi' => $request->deskripsi,
			'instagram' => $request->instagram,
			'facebook' => $request->facebook,
			'twitter' => $request->twitter,
			'linkedin' => $request->linkedin,
		];

		if ($file = $request->file('image')) {
			if ($data_update->image) {
				File::delete('public/uploads/team/' . $data_update->image);
			}
			$nama_file = $file->getClientOriginalName();
			$file->move(public_path() .'/uploads/team/', $nama_file);
			$input['image'] = $nama_file;
		}

		$data_update->update($input);

		return redirect()->back()->with('success', 'team Berhasil Diupdate');
	}


	public function team_delete($id)
	{
		$delete = team::findOrFail($id);
		File::delete('public/uploads/team/' . $delete->image);
		$delete->delete();

		return redirect()->back()->with('success', 'team Berhasil Dihapus');
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
