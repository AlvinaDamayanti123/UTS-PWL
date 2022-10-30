<?php

namespace Database\Seeders;

use App\Models\barang as ModelsBarang;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ModelsBarang::insert(
            [
                [
                    'namaBarang' => 'Piscok Rainbow rasa matcha dan tiramisu',
                    'fotoBarang' => 'jualpiscok.jpeg',
                    'harga' => '10000',
                    'stok' => '200',
                    'reviewBarang' => 'Pisang coklat dengan berbagai macam rasa yang menggiurkan dan pastinya menggoyang lidah, memiliki cita rasa yang unik serta didalamnya terdapat coklat yang lumer dimulut dengan berbagai macam toping pilihan',
                ],
                [
                    'namaBarang' => 'Lalapan Kentaki',
                    'fotoBarang' => 'Makananenak.jpeg',
                    'harga' => '8000',
                    'stok' => '100',
                    'reviewBarang' => 'Daging ayam pilihan dengan didampingi nasi dan gorengan serta sambal asli jawa yang sangat menggugah selera',
                ],
                [
                    'namaBarang' => 'Piscok Rainbow Premium',
                    'fotoBarang' => 'piscokjualan.jpeg',
                    'harga' => '10000',
                    'stok' => '300',
                    'reviewBarang' => 'Bagi pecinta pisang, kini Bananafood hadir dengan berbagai macam pisang coklat pilihan yang dapat membuat ketagihan, dijamin mantullllll',
                ],
            ]
        );
    }
}
