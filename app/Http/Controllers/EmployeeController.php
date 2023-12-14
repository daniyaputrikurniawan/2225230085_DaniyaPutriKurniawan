<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index () {
        $data = Employee::all();
        return view('datasiswa', compact('data'));
    }

    public function tambahsiswa () {
        return view('tambahdata');
    }

    public function insertdata (Request $request) {
        $data = Employee::create($request->all());
        if($request->hasFile('foto')){
            $request->file('foto')->move('fotosiswa/', $request->file('foto')->getClientOriginalName());
            $data->foto = $request->file('foto')->getClientOriginalName();
            $data->save();
        }
        return redirect()->route('siswa')->with('success', 'Data Berhasil Di Tambahkan');
    }

    public function tampilkandata ($id) {
        $data = Employee::find($id);
        return view('tampildata', compact('data'));
    }

    public function updatedata (Request $request, $id) {
        $data = Employee::find($id);
        $data->update($request->all());
        return redirect()->route('siswa')->with('success', 'Data Berhasil Di Edit');
    }

    public function delete ($id) {
        $data = Employee::find($id);
        $data->delete();
        return redirect()->route('siswa')->with('success', 'Data Berhasil Di Hapus');
    }
}
