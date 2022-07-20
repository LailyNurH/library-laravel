<?php

namespace App\Http\Controllers;


use Barryvdh\DomPDF\Facade\Pdf;
use App\Models\Buku;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public static function export()
    {
        // $datas2 = Pengarang::all();
        // $datas1 = Penerbit::all();
        // $datas3 = Kategori::all();
        $datas = Buku::all();
         //mengambil data dan tampilan dari halaman laporan_pdf
        //data di bawah ini bisa kalian ganti nantinya dengan data dari database
        // $data = FacadePdf::loadview('laporan.buku', ['data' => 'ini adalah contoh laporan PDF']);
        // //mendownload laporan.pdf

        $pdf = PDF::loadview('laporan.buku', compact('datas'));
    	// return $pdf->download('laporan.pdf');
        return $pdf->download('laporan-pegawai-pdf');
    }
}
