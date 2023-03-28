<?php
namespace App\Exports;
use App\Models\Transaksi;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
class ExportTransaksi implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Transaksi::select("nomor_resi", "nomor_segel", "nama_pengirim")->get();
    }
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function headings(): array
    {
        return ["Nomor Resi", "Nomor Segel", "Nama Pengirim"];
    }
}
