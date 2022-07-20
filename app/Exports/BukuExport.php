<?php

namespace App\Exports;

use App\Models\Buku;
use Illuminate\View\View;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Excel;

class BukuExport implements FromView
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function view(): View
    {
        return view('laporan.buku', [
            'buku' => Buku::all()

        ]);
    }

}

