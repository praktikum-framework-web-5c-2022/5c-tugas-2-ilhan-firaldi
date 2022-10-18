<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Dosen;

class DosenController extends Controller
{
    public function insert(){

        $dosen = DB::insert("INSERT INTO dosens (nidn,nama,jenis_kelamin,alamat,tempat_lahir,tanggal_lahir,photo,created_at,updated_at) VALUES ('12345678', 'Hotman Paris P.hd','laki-laki','Jl.Kekayaan no.49','Karawang','1975-01-01','hotman.png',now(),now())");
        dump($dosen);

        $dosen1 = DB::table('dosens')->insert(
            [
                'nidn' => '12345678',
                'nama' => 'Hotman Paris P.hd',
                'jenis_kelamin' => 'laki-laki',
                'alamat' => 'Jl.Kekayaan no.49',
                'tempat_lahir' => 'Karawang',
                'tanggal_lahir' => '1975-01-01',
                'photo' => 'hotman.png',
                'created_at' => now(),
                'updated_at' => now()
            ]
        );
        dump($dosen1);

        $dosen2 = Dosen::create(
            [
                'nidn' => '12345678',
                'nama' => 'Hotman Paris P.hd',
                'jenis_kelamin' => 'laki-laki',
                'alamat' => 'Jl.Kekayaan no.49',
                'tempat_lahir' => 'Karawang',
                'tanggal_lahir' => '1975-01-01',
                'photo' => 'hotman.png',
                'created_at' => now(),
                'updated_at' => now()
            ]
            );
            dump($dosen2);
    }

    public function select(){
        $dosen = DB::select("SELECT * FROM dosens");
        dd($dosen);

        $dosen2 = DB::table('dosens')->get();
        dd($dosen2);

        $dosen3 = Dosen::all();
        dd($dosen3);
    }

    public function update(){

        $dosen = DB::update("UPDATE dosens SET nama='Hotman Paris M.Kom', updated_at=now() WHERE id=?",[1]);
        dd($dosen);

        $dosen1 = DB::table('dosens')
        ->where('id','1')
        ->update(
            [
                'nama' => 'Hotman Paris M.Kom',
                'updated_at' => now(),
            ]
            );
        dd($dosen1);

        $dosen2 = Dosen::where('id','1')->first()->update([
            'nama' => 'Hotman Paris M.Kom',
            'updated_at' => now(),
        ]);
        dd($dosen2);


    }

    public function delete(){

        $dosen = DB::delete("DELETE FROM dosens WHERE id=?",[1]);
        dd($dosen);

        $dosen1 = DB::table('dosens')
        ->where('id','1')
        ->delete();
        dd($dosen1);

        $dosen2 = Dosen::where('id','1')->delete();
        dd($dosen2);
    }
}
