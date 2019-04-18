<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class cartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      ob_start();
      system('ipconfig /all');
      $mycom=ob_get_contents();
      ob_clean();

      $findme = 'Physical';
      $pmac = strpos($mycom, $findme);
      $mac=substr($mycom,($pmac+36),17);

      $barang = DB::table('tb_barang')
                    ->join('tb_cart', 'tb_barang.id_barang', '=', 'tb_cart.id_barang')
                    ->get();

      $jumlah_barang= DB::table('tb_cart')->count();

              return view('cart') -> with ([
                  'mac' => $mac,
                  'barang' => $barang,
                  'jumlah_barang' => $jumlah_barang
              ]);
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $delete = DB::delete('delete from tb_barang where id_barang = ?',[$id]);

      if ($delete) {
          return Redirect::route('my_item',auth()->user()->name);
      }else {
        return Redirect::route('my_item',auth()->user()->name);
      }
    }
}
