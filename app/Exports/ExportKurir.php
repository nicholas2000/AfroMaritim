<?php
namespace App\Exports;
use App\Models\Transaksi;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
class ExportKurir implements FromCollection, WithHeadings, ShouldAutoSize
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Transaksi::select( "nomor_resi",  "nama_penerima", "jenis_barang", "alamat", "jumlah_barang", "volume",)->get();
    }
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function headings(): array
    {
        return ["Nomor Resi", "Nama Penerima", "Nama Pengirim", "Jenis Barang", "Alamat", "Colly", "Volume"];
    }
}
