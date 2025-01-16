<?php

namespace Database\Seeders;

use App\Models\Xetra;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class XetraAddSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $add = ['Bhavnagar - 1','Bhavnagar - 2','Bhavnagar - 3'];
        foreach($add as $value){
            Xetra::updateOrCreate(
                ['name' => $value], // Matching condition
                ['name' => $value]  // Data to update or create
            );
        }
    }
}
