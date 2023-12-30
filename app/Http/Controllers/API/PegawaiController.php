<?php

namespace App\Http\Controllers\API;

use App\Models\Pegawai;
use Illuminate\Http\Request;
use App\Helpers\ApiFormatter;
use App\Http\Controllers\Controller;
use Exception;

class PegawaiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request) //web-route
    {
        $data['title'] = 'Data Pegawai';
        $data['p'] = $request->p;
        $data['rows'] = Pegawai::where('nama_pegawai', 'like', '%' . $request->p . '%')->get();
        return view('pegawai.index', $data);

        
    }

    public function read() 
    {
        $data = Pegawai::all();

        if ($data) {
            return ApiFormatter::createApi(200, 'Successfully read all data', $data);
        }else{
            return ApiFormatter::createApi(400, 'Failed to read all data');

        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() //web-route
    {
        $data['title'] = 'Tambah Pegawai';
        return view('pegawai.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) //web-route
    {
        $request->validate([
            'nama_pegawai' => 'required',
            'no_telp' => 'required',
            'email' => 'required',
            'nik' => 'required',
            'tgl_lahir' => 'required',
            'alamat' => 'required'
        ]);

        $pegawai = new Pegawai();
        $pegawai->nama_pegawai = $request->nama_pegawai;
        $pegawai->no_telp = $request->no_telp;
        $pegawai->email = $request->email;
        $pegawai->nik = $request->nik;
        $pegawai->tgl_lahir = $request->tgl_lahir;
        $pegawai->alamat = $request->alamat;
        $pegawai->save();
        return redirect('pegawai')->with('success', 'Tambah Data Berhasil');       
    }

    public function store2(Request $request) 
    {
        try {
            $request->validate([
                'nama_pegawai' => 'required',
                'no_telp' => 'required',
                'email' => 'required',
                'nik' => 'required',
                'tgl_lahir' => 'required',
                'alamat' => 'required'
            ]);

            $pegawai = Pegawai::create([
                'nama_pegawai' => $request->nama_pegawai,
                'no_telp' => $request->no_telp,
                'email' => $request->email,
                'nik' => $request->nik,
                'tgl_lahir' => $request->tgl_lahir,
                'alamat' => $request->alamat
            ]);

            $data = Pegawai::where('id', '=', $pegawai->id)->get();

            if ($data) {
                return ApiFormatter::createApi(200, 'Successfully created new data', $data);
            }else{
                return ApiFormatter::createApi(400, 'Failed to create new data');
            }
        } catch (Exception $error) {
            return ApiFormatter::createApi(400, 'failed');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Pegawai::where('id', '=', $id)->get();

        if ($data) {
            return ApiFormatter::createApi(200, 'Successfully read data based on ID', $data);
        }else{
            return ApiFormatter::createApi(400, 'Failed to read data based on ID');
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Pegawai $pegawai) //web-route
    {
        $data['title'] = 'Ubah Pegawai';
        $data['row'] = $pegawai;
        return view('pegawai.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function update(Request $request, Pegawai $pegawai) //web-route
    // {
    //     $request->validate([
    //         'nama_pegawai' => 'required',
    //         'no_telp' => 'required',
    //         'email' => 'required',
    //         'nik' => 'required',
    //         'tgl_lahir' => 'required',
    //         'alamat' => 'required'
    //     ]);

    //     $pegawai->nama_pegawai = $request->nama_pegawai;
    //     $pegawai->no_telp = $request->no_telp;
    //     $pegawai->email = $request->email;
    //     $pegawai->nik = $request->nik;
    //     $pegawai->tgl_lahir = $request->tgl_lahir;
    //     $pegawai->alamat = $request->alamat;
    //     $pegawai->save();
    //     return redirect('pegawai')->with('success', 'Update Data Berhasil');
    // }

    public function updateData(Request $request, $id) 
    {
        try {
            $request->validate([
                'nama_pegawai' => 'required',
                'no_telp' => 'required',
                'email' => 'required',
                'nik' => 'required',
                'tgl_lahir' => 'required',
                'alamat' => 'required'
            ]);

            $pegawai = Pegawai::findOrFail($id);

            $pegawai->update([
                'nama_pegawai' => $request->nama_pegawai,
                'no_telp' => $request->no_telp,
                'email' => $request->email,
                'nik' => $request->nik,
                'tgl_lahir' => $request->tgl_lahir,
                'alamat' => $request->alamat
            ]);

            $data = Pegawai::where('id', '=', $pegawai->id)->get();

            if ($data) {
                return ApiFormatter::createApi(200, 'Successfully updated data', $data);
            }else{
                return ApiFormatter::createApi(400, 'Failed to update data');
            }
        } catch (Exception $error) {
            return ApiFormatter::createApi(400, 'failed');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pegawai $pegawai) //web-route
    {
        $pegawai->delete();
        return redirect('pegawai')->with('success', 'Hapus Data Berhasil');
    }

    public function deleteData($id)
    {
        try {
            $pegawai = Pegawai::findOrFail($id);

            $data = $pegawai->delete();

            if ($data) {
                return ApiFormatter::createApi(200, 'Successfully deleted data');
            }else{
                return ApiFormatter::createApi(400, 'Failed to delete data');
            }
        } catch (Exception $error) {
            return ApiFormatter::createApi(400, 'Failed to delete data');
        }
    }
}
