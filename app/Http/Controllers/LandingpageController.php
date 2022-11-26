<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jasa;
use App\Models\VisiMisi;
use App\Models\Kontak;
use App\Models\Carousel;


class LandingpageController extends Controller
{
    public function landingpage()
	{

		$jasa = Jasa::orderBy('id', 'DESC')->get();
		$kontak = Kontak::orderBy('id', 'DESC')->first();


		return view('landingpage.index', compact('jasa','kontak'));
	}

	public function detail_jasa($id)
	{

		$detail_jasa = Jasa::where('id',$id)->get();
		$nama_jasa = Jasa::where('id', $id)->first();

		return view('landingpage.jasa.detail_jasa', compact('detail_jasa','nama_jasa'));
	}

}
