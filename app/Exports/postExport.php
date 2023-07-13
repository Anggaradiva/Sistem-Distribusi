<?php

namespace App\Exports;

use App\Models\post;
use Maatwebsite\Excel\Concerns\FromCollection;

class postExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return post::all();
    }
}