<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Database\Seeders\Animal;
use Database\Seeders\Revision;
use App\Models\Cuidador;
use App\Models\User;
use App\Models\Titulacion;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
       /* DB::table('animales')->delete();
        $this->call(AnimalSeeder::class);
        DB::table('users')->delete();
        $this->call(UserSeeder::class);
        */
        //\App\Models\User::factory(5)->create();
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        //DB::table('animales_revisiones')->delete();
        //$this->call(RevisionSeeder::class);
        //\App\Models\Cuidador::factory(20)->create();
        //$this->call(AnimalSeeder::class);
        /*
        DB::table('cuidadores')->delete();
        Cuidador::factory(20)->create();
        DB::table('animales')->delete();
        $this->call(AnimalSeeder::class);
        DB::table('users')->delete();
        $this->call(UserSeeder::class);
        User::factory(5)->create();
        DB::table('animales_revisiones')->delete();
        $this->call(RevisionSeeder::class);
*/
        DB::table('titulaciones')->delete();
        Titulacion::factory(20)->create();
        DB::table('cuidadores')->delete();
        Cuidador::factory(20)->create();
        DB::table('animales_revisiones')->delete();
        DB::table('animal_cuidador')->delete();
        DB::table('animales')->delete();
        $this->call(AnimalSeeder::class);
        $this->call(RevisionSeeder::class);
        DB::table('users')->delete();
        $this->call(UserSeeder::class);
        User::factory(5)->create();

    }
}
