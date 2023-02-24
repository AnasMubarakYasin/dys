<?php

namespace App\Imports;

use App\Models\Youth;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class YouthsImport implements ToModel, WithHeadingRow
{
    public function headingRow(): int
    {
        return 1;
    }
    public function model(array $row)
    {
        return new Youth([
            'name' => $row['meetname'],
            'town' => $row['meettown'],
            'state' => $row['meetstate'],
            'country' => $row['meetcountry'],
        ]);
    }
}
