<?php

namespace Database\Seeders;

use App\Models\Mandal;
use App\Models\Xetra;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ManadalAddSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $xetra_id_1 = Xetra::where('name','Bhavnagar - 1')->pluck('id')->first();
        $locations = [
            ['name' => 'Akshardham', 'xetra_id' => $xetra_id_1],
            ['name' => 'Ambavadi', 'xetra_id' => $xetra_id_1],
            ['name' => 'Anandnagar', 'xetra_id' => $xetra_id_1],
            ['name' => 'Balyoginagar', 'xetra_id' => $xetra_id_1],
            ['name' => 'Bharatnagar', 'xetra_id' => $xetra_id_1],
            ['name' => 'Fulvadi', 'xetra_id' => $xetra_id_1],
            ['name' => 'Gayatrinagar', 'xetra_id' => $xetra_id_1],
            ['name' => 'Hilldrive', 'xetra_id' => $xetra_id_1],
            ['name' => 'Iscon Mega City', 'xetra_id' => $xetra_id_1],
            ['name' => 'Kaliyabid', 'xetra_id' => $xetra_id_1],
            ['name' => 'Kaminiyanagar', 'xetra_id' => $xetra_id_1],
            ['name' => 'Kanbivad', 'xetra_id' => $xetra_id_1],
            ['name' => 'Prabhudastalav', 'xetra_id' => $xetra_id_1],
            ['name' => 'Sagvadi', 'xetra_id' => $xetra_id_1],
            ['name' => 'Sardarnagar', 'xetra_id' => $xetra_id_1],
            ['name' => 'Shantinagar', 'xetra_id' => $xetra_id_1],
            ['name' => 'Shivnarayan', 'xetra_id' => $xetra_id_1],
            ['name' => 'Subhashnagar', 'xetra_id' => $xetra_id_1],
            ['name' => 'Tilaknagar', 'xetra_id' => $xetra_id_1],
            ['name' => 'Swapn Srusti', 'xetra_id' => $xetra_id_1],
            ['name' => 'SIDSAR', 'xetra_id' => $xetra_id_1],
            ['name' => 'TAKHTESHWAR HEIGHT', 'xetra_id' => $xetra_id_1],
        ];

        


        $xetra_id_2 = Xetra::where('name','Bhavnagar - 2')->pluck('id')->first();
        $locations = [
            ['name' => 'Bhayani ni vadi', 'xetra_id' => $xetra_id_2],
            ['name' => 'Bortalav', 'xetra_id' => $xetra_id_2],
            ['name' => 'Desainagar', 'xetra_id' => $xetra_id_2],
            ['name' => 'Ghanshyamnagar', 'xetra_id' => $xetra_id_2],
            ['name' => 'Nirbhay Society', 'xetra_id' => $xetra_id_2],
            ['name' => 'Nirmalnagar', 'xetra_id' => $xetra_id_2],
            ['name' => 'Sardar Patel Society', 'xetra_id' => $xetra_id_2],
            ['name' => 'Anantvadi', 'xetra_id' => $xetra_id_2],
            ['name' => 'Sukh Sagar', 'xetra_id' => $xetra_id_2],
            ['name' => 'Vijayrajnagar', 'xetra_id' => $xetra_id_2],
            ['name' => 'Vadva', 'xetra_id' => $xetra_id_2],
            ['name' => 'Shivom Nagar', 'xetra_id' => $xetra_id_2],
            ['name' => 'Sarita Society', 'xetra_id' => $xetra_id_2],
            ['name' => 'Aksharpark', 'xetra_id' => $xetra_id_2],
            ['name' => 'Shashtrinagar', 'xetra_id' => $xetra_id_2],
            ['name' => 'Haridarshan', 'xetra_id' => $xetra_id_2],
            ['name' => 'Swet Jems', 'xetra_id' => $xetra_id_2],
            ['name' => 'Varni Jems', 'xetra_id' => $xetra_id_2],
            ['name' => 'FULSAR', 'xetra_id' => $xetra_id_2],
            ['name' => 'NARI', 'xetra_id' => $xetra_id_2],
            ['name' => 'SWAMINARAYAN NAGAR', 'xetra_id' => $xetra_id_2],
            ['name' => 'KUMBHARVADA', 'xetra_id' => $xetra_id_2],
        ];
        $xetra_id_3 = Xetra::where('name','Bhavnagar - 3')->pluck('id')->first();
        $locations = [
            ['name' => 'Ambawadi', 'xetra_id' => $xetra_id_3],
            ['name' => 'Prabhudastalav', 'xetra_id' => $xetra_id_3],
            ['name' => 'Anandnagar', 'xetra_id' => $xetra_id_3],
            ['name' => 'Kanbivad', 'xetra_id' => $xetra_id_3],
            ['name' => 'Tilaknagar', 'xetra_id' => $xetra_id_3],
            ['name' => 'Vadva', 'xetra_id' => $xetra_id_3],
            ['name' => 'Anantvadi', 'xetra_id' => $xetra_id_3],
            ['name' => 'Vijayrajnagar', 'xetra_id' => $xetra_id_3],
            ['name' => 'Nirmalnagar', 'xetra_id' => $xetra_id_3],
            ['name' => 'Subhashnagar', 'xetra_id' => $xetra_id_3],
            ['name' => 'Gayatrinagar', 'xetra_id' => $xetra_id_3],
            ['name' => 'Balyoginagar', 'xetra_id' => $xetra_id_3],
            ['name' => 'Ajayvadi', 'xetra_id' => $xetra_id_3],
            ['name' => 'Krushnapara', 'xetra_id' => $xetra_id_3],
            ['name' => 'Tarsamiya', 'xetra_id' => $xetra_id_3],
            ['name' => 'HARI DARSHAN', 'xetra_id' => $xetra_id_3],
            ['name' => 'VARNI GEMS', 'xetra_id' => $xetra_id_3],
            ['name' => 'HARI BHAKTO', 'xetra_id' => $xetra_id_3],
            ['name' => 'MANDIR', 'xetra_id' => $xetra_id_3],
        ];
        foreach ($locations as $location) {
            Mandal::updateOrCreate(
                ['mandal_name' => $location['name']], // Matching condition
                [
                    'mandal_name' => $location['name'],
                    'xetra_id' => $location['xetra_id']
                ]  
            );
        }
    }
}
