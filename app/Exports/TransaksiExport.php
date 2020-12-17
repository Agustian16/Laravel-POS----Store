<?php

namespace App\Exports;

use App\MOdels\Transaksi;
use Maatwebsite\Excel\Concerns\FromCollection;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\Exportable;

class TransaksiExport implements FromView
{
    use Exportable;
    public function view(): View
    {
        return view('manager.excel.transaksi', [
            'transaksis' => Transaksi::all()
        ]);
    }
}
