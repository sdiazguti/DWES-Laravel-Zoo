<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $yo = new User();
        $yo->name = "daw204";
        $yo->email = "sergio.diazgutierrez@iesmiguelherrero.com";
        $yo->password = bcrypt("Espacio@46");
        $yo->save();
    }
}
