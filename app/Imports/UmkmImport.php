<?php

namespace App\Imports;

use App\Models\Umkm;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class UmkmImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Umkm([

            'nama_pelaku_usaha'=> $row['nama_pelaku_usaha'],
            'nama_produk'=> $row['nama_produk'],
            'jenis_usaha'=> $row['jenis_usaha'],
            'no_izin'=> $row['no_izin'],
            'harga'=> $row['harga'],
            'alamat_usaha'=> $row['alamat_usaha'],
            'no_hp'=> $row['no_hp'],
            'sosial_media'=> $row['sosial_media'],
            'nama_badan_hukum'=> $row['nama_badan_hukum'],
            'lama_usaha_berjalan'=> $row['lama_usaha_berjalan'],
            'kapasitas_produksi'=> $row['kapasitas_produksi'],
            'metode_penjualan'=> $row['metode_penjualan'],
            'kendala_yang_dialami'=> $row['kendala_yang_dialami'],

        ]);
    }
}
