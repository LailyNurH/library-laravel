<?php

namespace App\Http\Controllers\Operator;

use App\Models\BarangKeluar;
use App\Models\Auction;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use App\Exports\BarangExport;
use App\Exports\BukuExport;
use App\Http\Controllers\Controller;
use App\Models\Buku;

class ReportBukuController extends Controller
{
    //
    public function index(Request $request)
    {
        $datas1 = Buku::all();
        $datas = Buku::whereBetween('tanggal', [$request->tggl1, $request->tggl2])->get();
        return view('buku', compact('datas', 'request','datas1'));
    }

    public function exportExcel($tggl1, $tggl2)
    {
        return (new BukuExport($tggl1, $tggl2))->download("Laporan-Barang-$tggl1-$tggl2.xlsx");
    }

    public function exportPdf($tggl1, $tggl2)
    {
    // retreive all records from db
      $bukus = Buku::whereBetween('tanggal', [$tggl1, $tggl2])->get();

      // share auctions to view
    //   view()->share('auctions',$auctions);
      view()->share('bukus',$bukus);
      view()->share('tggl1',$tggl1);
      view()->share('tggl2',$tggl2);
    //   $pdf = PDF::loadView('operator.both.reportbarang.laporanbarang');

    //   // download PDF file with download method
    //   return $pdf->download("Laporan-Barang-$tggl1-$tggl2.pdf");
    }
}
