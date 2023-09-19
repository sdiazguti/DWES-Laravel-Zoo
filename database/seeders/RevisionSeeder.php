<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Revision;

class RevisionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $r = new Revision();
        $r->fecha = "2021-08-01";
        $r->descripcion = "revision 1.";
        $r->animal_id = DB::table('animales')->first()->id;
        $r->save();

        $r = new Revision();
        $r->fecha = "2022-10-21";
        $r->descripcion = "revision 2.";
        $r->animal_id = 2;
        $r->save();
    }
}
