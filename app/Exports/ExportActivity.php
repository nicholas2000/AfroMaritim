<?php
namespace App\Exports;

use App\Models\Activity;
use App\Models\Transaksi;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
class ExportActivity implements FromCollection, WithHeadings, ShouldAutoSize
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Activity::select("id", "user", "activity", "ip_address", "browser", "os", "created_at")->get()->sortBy("id");
    }
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function headings(): array
    {
        return ["ID", "User", "Activity", "IP Address", "Browser", "OS", "Created At"];
    }
}
