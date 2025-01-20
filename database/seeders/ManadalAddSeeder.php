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
        $xetra_id_1 = Xetra::where('name','ભાવનગર - 1')->pluck('id')->first();
        $locations1 = [
            ['name' => 'અક્ષરધામ', 'xetra_id' => $xetra_id_1],
            ['name' => 'અંબાવાડી', 'xetra_id' => $xetra_id_1],
            ['name' => 'આનંદનગર', 'xetra_id' => $xetra_id_1],
            ['name' => 'બાલયોગીનગર', 'xetra_id' => $xetra_id_1],
            ['name' => 'ભારતનગર', 'xetra_id' => $xetra_id_1],
            ['name' => 'ફુલવાડી', 'xetra_id' => $xetra_id_1],
            ['name' => 'ગાયત્રીનગર', 'xetra_id' => $xetra_id_1],
            ['name' => 'હિલડ્રાઇવ', 'xetra_id' => $xetra_id_1],
            ['name' => 'ઇસ્કોન મેગા સિટી', 'xetra_id' => $xetra_id_1],
            ['name' => 'કાળીયાબિદ', 'xetra_id' => $xetra_id_1],
            ['name' => 'કમિનિનગર', 'xetra_id' => $xetra_id_1],
            ['name' => 'કાનબીવાડ', 'xetra_id' => $xetra_id_1],
            ['name' => 'પ્રભુદસ્તળાવ', 'xetra_id' => $xetra_id_1],
            ['name' => 'સાગવાડી', 'xetra_id' => $xetra_id_1],
            ['name' => 'સરદારનગર', 'xetra_id' => $xetra_id_1],
            ['name' => 'શાંતિનગર', 'xetra_id' => $xetra_id_1],
            ['name' => 'શિવનારાયણ', 'xetra_id' => $xetra_id_1],
            ['name' => 'સુભાષનગર', 'xetra_id' => $xetra_id_1],
            ['name' => 'તિલકનગર', 'xetra_id' => $xetra_id_1],
            ['name' => 'સ્વપ્નસૃષ્ટિ', 'xetra_id' => $xetra_id_1],
            ['name' => 'સિડસર', 'xetra_id' => $xetra_id_1],
            ['name' => 'તખ્તેશ્વર હાઇટ', 'xetra_id' => $xetra_id_1],
        ];

        


        $xetra_id_2 = Xetra::where('name','ભાવનગર - 2')->pluck('id')->first();
        $locations2 = [
            ['name' => 'ભયાણી ની વાડી', 'xetra_id' => $xetra_id_2],
            ['name' => 'બોરતળાવ', 'xetra_id' => $xetra_id_2],
            ['name' => 'દેસાઈનગર', 'xetra_id' => $xetra_id_2],
            ['name' => 'ઘનશ્યામનગર', 'xetra_id' => $xetra_id_2],
            ['name' => 'નિર્ભય સોસાયટી', 'xetra_id' => $xetra_id_2],
            ['name' => 'નિર્મળનગર', 'xetra_id' => $xetra_id_2],
            ['name' => 'સરદાર પટેલ સોસાયટી', 'xetra_id' => $xetra_id_2],
            ['name' => 'અનંતવાડી', 'xetra_id' => $xetra_id_2],
            ['name' => 'સુખ સાગર', 'xetra_id' => $xetra_id_2],
            ['name' => 'વિજયરાજનગર', 'xetra_id' => $xetra_id_2],
            ['name' => 'વડવા', 'xetra_id' => $xetra_id_2],
            ['name' => 'શિવઓમનગર', 'xetra_id' => $xetra_id_2],
            ['name' => 'સરિતા સોસાયટી', 'xetra_id' => $xetra_id_2],
            ['name' => 'અક્ષરપાર્ક', 'xetra_id' => $xetra_id_2],
            ['name' => 'શાસ્ત્રીનગર', 'xetra_id' => $xetra_id_2],
            ['name' => 'હરિદર્શન', 'xetra_id' => $xetra_id_2],
            ['name' => 'શ્વેત જેમ્સ', 'xetra_id' => $xetra_id_2],
            ['name' => 'વર્ણી જેમ્સ', 'xetra_id' => $xetra_id_2],
            ['name' => 'ફૂલસર', 'xetra_id' => $xetra_id_2],
            ['name' => 'નારી', 'xetra_id' => $xetra_id_2],
            ['name' => 'સ્વામિનારાયણનગર', 'xetra_id' => $xetra_id_2],
            ['name' => 'કુંભારવાડા', 'xetra_id' => $xetra_id_2],
        ];
        $xetra_id_3 = Xetra::where('name','ભાવનગર - 3')->pluck('id')->first();
        $locations3 = [
            ['name' => 'અંબાવાડી', 'xetra_id' => $xetra_id_3],
            ['name' => 'પ્રભુદસ્તળાવ', 'xetra_id' => $xetra_id_3],
            ['name' => 'આનંદનગર', 'xetra_id' => $xetra_id_3],
            ['name' => 'કાનબિવાડ', 'xetra_id' => $xetra_id_3],
            ['name' => 'તિલકનગર', 'xetra_id' => $xetra_id_3],
            ['name' => 'વડવા', 'xetra_id' => $xetra_id_3],
            ['name' => 'અનંતવાડી', 'xetra_id' => $xetra_id_3],
            ['name' => 'વિજયરાજનગર', 'xetra_id' => $xetra_id_3],
            ['name' => 'નિર્મળનગર', 'xetra_id' => $xetra_id_3],
            ['name' => 'સુભાષનગર', 'xetra_id' => $xetra_id_3],
            ['name' => 'ગાયત્રીનગર', 'xetra_id' => $xetra_id_3],
            ['name' => 'બાળયોગિનગર', 'xetra_id' => $xetra_id_3],
            ['name' => 'અજયવાડી', 'xetra_id' => $xetra_id_3],
            ['name' => 'કૃષ્ણાપરા', 'xetra_id' => $xetra_id_3],
            ['name' => 'તરસમિયા', 'xetra_id' => $xetra_id_3],
            ['name' => 'હરિદર્શન', 'xetra_id' => $xetra_id_3],
            ['name' => 'વર્ણી જેમ્સ', 'xetra_id' => $xetra_id_3],
            ['name' => 'હરિભક્તો', 'xetra_id' => $xetra_id_3],
            ['name' => 'મંદિર', 'xetra_id' => $xetra_id_3],
        ];
        $locations = array_merge($locations2,$locations1,$locations3);
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
