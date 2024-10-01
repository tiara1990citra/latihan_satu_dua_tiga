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
        return view('Dashboard.MasterData.Siswa.tabelsiswa', [
            'siswa' => $p->all()
        ]);
    }
    public function up(Request $request)
    {
        return view('Dashboard.MasterData.Siswa.tambahsiswa');
    }

    public function update(Request $request)
    {
        $siswa = new Siswa();
        $siswa->fill($request->all());
        $siswa->save();

    }
}
