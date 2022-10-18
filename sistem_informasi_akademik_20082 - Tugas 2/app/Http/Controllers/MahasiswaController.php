<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Mahasiswa;

class MahasiswaController extends Controller
{
    public function insert(){

        $mahasiswa = DB::insert("INSERT INTO mahasiswas (npm,nama,jenis_kelamin,alamat,tempat_lahir,tanggal_lahir,photo,created_at,updated_at) VALUES ('2010631170082', 'Ilhan Firaldi','laki-laki','Jl.RendangSurya No.27','Bogor','2002-08-27','ilhan.png',now(),now())");
        dump($mahasiswa);

        $mahasiswa1 = DB::table('mahasiswas')->insert(
            [
                'npm' => '2010631170082',
                'nama' => 'Ilhan Firaldi',
                'jenis_kelamin' => 'laki-laki',
                'alamat' => 'Jl.RendangSurya No.27',
                'tempat_lahir' => 'Bogor',
                'tanggal_lahir' => '2002-08-27',
                'photo' => 'ilhan.png',
                'created_at' => now(),
                'updated_at' => now()
            ]
        );
        dump($mahasiswa1);

        $mahasiswa2 = Mahasiswa::create(
            [
                'npm' => '2010631170082',
                'nama' => 'Ilhan Firaldi',
                'jenis_kelamin' => 'laki-laki',
                'alamat' => 'Jl.RendangSurya No.27',
                'tempat_lahir' => 'Bogor',
                'tanggal_lahir' => '2002-08-27',
                'photo' => 'ilhan.png',
                'created_at' => now(),
                'updated_at' => now()
            ]
            );
            dump($mahasiswa2);
    }

    public function select(){

        $mahasiswa = DB::select("SELECT * FROM mahasiswas");
        dd($mahasiswa);

        $mahasiswa2 = DB::table('mahasiswas')->get();
        dd($mahasiswa2);

        $mahasiswa3 = Mahasiswa::all();
        dd($mahasiswa3);
    }

    public function update(){

        $mahasiswa = DB::update("UPDATE mahasiswas SET nama='Ilhan Piraldi', updated_at=now() WHERE id=?",[1]);
        dd($mahasiswa);

        $mahasiswa1 = DB::table('mahasiswas')
        ->where('id','1')
        ->update(
            [
                'nama' => 'Ilhan Piraldi',
                'updated_at' => now(),
            ]
            );
        dd($mahasiswa1);

        $mahasiswa2 = Mahasiswa::where('id','1')->first()->update([
            'nama' => 'Ilhan Piraldi',
            'updated_at' => now(),
        ]);
        dd($mahasiswa2);


    }

    public function delete(){

        $mahasiswa = DB::delete("DELETE FROM mahasiswas WHERE id=?",[1]);
        dd($mahasiswa);

        $mahasiswa1 = DB::table('mahasiswas')
        ->where('id','1')
        ->delete();
        dd($mahasiswa1);

        $mahasiswa2 = Mahasiswa::where('id','1')->delete();
        dd($mahasiswa2);
    }
}
