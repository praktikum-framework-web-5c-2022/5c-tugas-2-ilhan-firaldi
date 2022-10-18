<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Matkul;

class MatkulController extends Controller
{
    public function insert(){

        $matkul = DB::insert("INSERT INTO matkuls (kode_mk,nama_mk,created_at,updated_at) VALUES ('PBM23', 'Pemrograman Mobile',now(),now())");
        dump($matkul);

        $matkul1 = DB::table('matkuls')->insert(
            [
                'kode_mk' => 'PBM23',
                'nama_mk' => 'Pemrograman Mobile',
                'created_at' => now(),
                'updated_at' => now()
            ]
        );
        dd($matkul1);

        $matkul2 = Matkul::create(
            [
                'kode_mk' => 'PBM24',
                'nama_mk' => 'Pemrograman Mobile',
                'created_at' => now(),
                'updated_at' => now()
            ]
            );
            dd($matkul2);
        return "Data berhasil diproses";
    }

    public function select(){

        $matkul = DB::select("SELECT * FROM matkuls");
        dd($matkul);

        $matkul2 = DB::table('matkuls')->get();
        dd($matkul2);

        $matkul3 = Matkul::all();
        dd($matkul3);
    }

    public function update(){

        $matkul = DB::update("UPDATE matkuls SET nama_mk='Pemrograman Berbasis Mobile',updated_at=now() WHERE id=?",[1]);
        dd($matkul);

        $matkul1 = DB::table('matkuls')
        ->where('id','1')
        ->update(
            [
                'nama_mk' => 'Pemrograman Berbasis Mobile',
                'updated_at' => now()
            ]
            );
        dd($matkul1);

        $matkul2 = Matkul::where('id','1')->first()->update([
            'nama_mk' => 'Pemrograman Berbasis Mobile',
            'updated_at' => now()
        ]);
        dd($matkul2);

    }

    public function delete(){

        $matkul = DB::delete("DELETE FROM matkuls WHERE id=?",[1]);
        dd($matkul);

        $matkul1 = DB::table('matkuls')
        ->where('id','1')
        ->delete();
        dd($matkul1);

        $matkul2 = Matkul::where('id','1')->delete();
        dd($matkul2);
    }
}
