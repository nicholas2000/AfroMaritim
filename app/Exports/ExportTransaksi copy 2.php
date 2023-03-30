<?php
namespace App\Exports;
use App\Models\Transaksi;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
class ExportTransaksi implements FromCollection, WithHeadings, ShouldAutoSize
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Transaksi::select("tanggal", "nomor_resi", "nomor_segel", "nama_penerima", "nama_pengirim", "jenis_barang", "jumlah_barang", "volume", "nomor_container")->get()->sortBy("tanggal");
    }
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function headings(): array
    {
        return ["Tanggal", "Nomor Resi", "Nomor Segel", "Nama Penerima", "Nama Pengirim", "Jenis Barang", "Colly", "Volume", "Nomor Container"];
    }
}
