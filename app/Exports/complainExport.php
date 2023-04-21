<?php
use App\Models\complain;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class complainExport implements FromQuery, WithHeadings, WithMapping
{
    public function query()
    {
        return complain::query();
    }

    public function map($complain): array
    {
        return [
            $complian->id,
            $complian->lab->lab_no,
            $complian->computer->computer_no,
            $complian->hardware->hardware_name,
            $complian->software->software_name,
            $complian->feedback,
            $complian->image,
        ];
    }

    public function headings(): array
    {
        return [
            'ID',
            'Lab Name',
            'Computer Name',
            'Hardware Name',
            'Software Name',
            'Feedback',
            'Image',
        ];
    }
}
