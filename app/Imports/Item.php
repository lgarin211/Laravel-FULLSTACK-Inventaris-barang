<?php

namespace App\Imports;

use Hamcrest\Core\HasToString;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\ToModel;

class Item implements ToModel
{
    /**
     * @param Collection $collection
     */
    public function model(array $rows)
    {
        date_default_timezone_set('Asia/Jakarta');
        $timezone = date('Y-m-d H:i:s');
        if (!($rows[0] == 'Nama Item' || $rows[0] == 'kondisi_barang')) {
            $calesy = array(
                'nama_item' => $rows[0],
                'kondisi_item' => $rows[1],
                'banyak_item' => $rows[2],
                'lokasi_item' => $rows[3],
                'kategori' => $rows[4],
                't_key' => $rows[5],
                'pos' => 1,
                'deks' => $rows[6],
                'barcode' => $rows[7],
                'created_at' => $timezone,
                'updated_at' => $timezone
            );
            DB::table('item')->insert($calesy);
        }
    }
}
