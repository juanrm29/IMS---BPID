<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\Pengaduan;
use App\Models\Penilaian;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;

class PenilaianController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    { 
        DB::table('pengaduans')->where('id', $request->pengaduan_id)->update([
            'status'=> $request->status,
        
        ]);
        

        $petugas_id = Auth::user()->id;   
        $penilaian_satu = Auth::user()->id;   
        $penilaian_dua = Auth::user()->id; 
        $penilaian_tiga = Auth::user()->id; 
        $penilaian_empat = Auth::user()->id; 
        $penilaian_lima = Auth::user()->id;       

            
        $data = $request->all();

       

        $data['pengaduan_id'] = $request->pengaduan_id;
        $data['petugas_id']=$petugas_id;
       
         
        $nilai_akhir = ($penilaian_satu + $penilaian_dua + $penilaian_tiga + $penilaian_empat + $penilaian_lima )/4;

        Alert::success('Berhasil', 'Suggestion anda berhasil dinilai');
        Penilaian::create($data);
        return redirect('admin/improvement')->with('info', 'Prioritas akhir adalah:' .$nilai_akhir);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $item = Pengaduan::with([
            'details', 'user' 
        ])->findOrFail($id);

        return view('pages.admin.penilaian.add',[
        'item' => $item
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

    }
}