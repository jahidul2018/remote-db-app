<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\URL;
use Yajra\DataTables\Facades\DataTables; // For Storage

class TiplistController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('remote-app.table');
    }

    public function synctable()
    {
        $tipLists = DB::table('tiplist')->select('ip', 'isp', 'status', 'allow_latency', 'avg_latency', 'sysdt')->get();

        return $data_table_render = DataTables::of($tipLists)
        ->addIndexColumn()
        //->removeColumn('id')
        // ->editColumn('thumbnail_image', function ($raw) {
        //     if (!empty($raw->thumbnail_image)) {
        //         $url = URL::to('/img/bank/catagory/thumbnail/'.$raw->thumbnail_image);
        //         $img = '<img src='.$url.' border="0" width="40" class="img-rounded img-30" align="center" />';

        //         return $img;
        //     }
        // })
        // ->editColumn('status', function ($banks) {
        //     return ($banks->status == 1) ? 'Active' : (($banks->payment_method == 0) ? 'Inactive' : 'other');
        // })
        // // ->addColumn('parent_catagories',function($banks){
        // //     return view('backend.pages.bank.child_bank',compact('banks'));
        // // })
        // ->addColumn('action', function ($row) {
        //     return view('backend.pages.bank.action', compact('row'));
        // })
        // ->rawColumns(['thumbnail_image', 'action'])
        ->make(true);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
    }

    /**
     * Update the specified resource in storage.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
    }
}
