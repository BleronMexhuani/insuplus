<?php

namespace App\Exports;

use App\Models\Lead;

use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class LeadsExport implements FromCollection, WithHeadings
{
    /**
     * @return \Illuminate\Support\Collection
     */
    protected $id;

    function __construct($id)
    {
        $this->id = $id;
    }

    public function collection()
    {
        return Lead::selectRaw('vorname,nachname,geburtsdatum,region,sprachen')->whereIn('id', $this->id)->get();
    }
    public function headings(): array
    {
        return ['Vorname','Nachname','Geburtsdatum','Region','Sprache'];
    }
}
