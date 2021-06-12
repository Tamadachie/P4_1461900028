<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Exports\UsersExport;
use App\Exports\InvoicesExport;
use Maatwebsite\Excel\Facades\Excel;

class bukucontrol extends Controller
{
    public function index(){
        $rak_buku = DB::table('jenis_buku')->join('buku','jenis_buku.id','=','buku.id')
        ->select('jenis_buku.id','buku.judul','jenis_buku.jenis')
        ->get();
        return view('index0028',['rak_buku'=>$rak_buku]);
    }

    public function ekspor()
    {
        return Excel::download(new UsersExport, '1461900028.xlsx');
    }
    public function ekspor2()
    {
        return Excel::download(new InvoicesExport, 'invoices.xlsx');
    }
}
