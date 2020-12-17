<?php

namespace App\Exports;

use App\Models\Manager;
use Maatwebsite\Excel\Concerns\FromCollection;

class ManagerExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Manager::all();
    }
}
