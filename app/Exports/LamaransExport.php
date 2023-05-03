<?php

namespace App\Exports;

use App\Models\Lamaran;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class LamaransExport implements FromCollection, WithHeadings, WithMapping
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Lamaran::all();
    }
    public function headings(): array
    {
        return [
            'No',
            'Nama',
            'Email',
            'Age',
            'Phone Number',
            'Last Education',
            'Education Name',
            'Schdule',
        ];
    }

    public function map($item): array
    {
        return [
            $item->id,
            $item->nama,
            $item->email,
            $item->age,
            $item->phone_number,
            $item->last_education,
            $item->education_name,
            \Carbon\Carbon::parse($item->created_at)->format('j F, Y'),
        ];
    }
}
