<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jasa;
use App\Models\VisiMisi;
use App\Models\Kontak;
use App\Models\Carousel;
use App\Models\Kerjasama;
use App\Models\Portofolio;
use App\Models\Team;
use App\Models\Beranda;
use App\Models\About;




class LandingpageController extends Controller
{
    public function landingpage()
	{

		$jasa = Jasa::orderBy('id', 'DESC')->get();
		$kontak = Kontak::orderBy('id', 'DESC')->first();
		$visi_misi =  VisiMisi::all();
		$kerjasama = Kerjasama::orderBy('id', 'DESC')->first();

		$portofolio = Portofolio::orderBy('id', 'DESC')->get();
		// $portofolio_desain = Portofolio::where('id_jasa', '2')->orderBy('id', 'DESC')->get();
		$filter_portofolio = Portofolio::where('indeks','1')->get();

		$team = Team::orderBy('id', 'DESC')->get();

		$beranda = Beranda::orderBy('id', 'DESC')->first();
		$about = About::orderBy('id', 'DESC')->first();

		return view('landingpage.index', compact('jasa','kontak','visi_misi','kerjasama','team','portofolio','filter_portofolio','beranda','about'));
	}

	public function detail_jasa($id)
	{

		$detail_jasa = Jasa::where('id',$id)->get();
		$nama_jasa = Jasa::where('id', $id)->first();
		$kontak = Kontak::orderBy('id', 'DESC')->first();

		return view('landingpage.jasa.detail_jasa', compact('detail_jasa','nama_jasa','kontak'));
	}

}
