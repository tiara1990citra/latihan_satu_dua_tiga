<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Return_;

class Datasiswa extends Controller
{
    public function Tampilkan()
    {
        $p = new Siswa();
        return view('Dashboard.MasterData.tabelsiswa', [
            'siswa' => $p->all()
        ]);
    }
    public function tabelsiswa()
    {
        return view('Dashboard.MasterData.tabelsiswa');
    }

    public function simpan(Request $request)
    {
        $request->validate(rules:[
        'Nama Siswa' =>'required',
        'NISN' =>'required',
        'Kelas' =>'required',
        'Aksi' =>'max:13'
        ]);

        $p = new Siswa();
        $p->create($request->all());
        return redirect('/');
    }
    public function tampil($nisn)
    {
        $p = new Siswa();
        return view('Dashboard.MasterData.tabelsiswa'[
        'dataSiswa' => $p->find($nisn)           
        ]);
    }

    public function update(Request $request, $nisn)
    {
        $request->validate([
         'Nama Siswa' =>'required',
        'NISN' =>'required',
        'Kelas' =>'required',
        'Aksi' =>'max:13'
        ]);

        $p = new Siswa();
        $p->find($nisn)->update($request->all());
        return redirect('/');
    }

    public function delete($nisn)
    {
        $p = new Siswa();
        $p->find($nisn)->delete();
        return redirect('/');
    }

}