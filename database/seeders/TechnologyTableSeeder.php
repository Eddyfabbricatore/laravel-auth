<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Technology;
use Faker\Generator as Faker;

class TechnologyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        for($i = 0; $i < 10; $i++){
            $new_technology = new Technology();
            $new_technology->name = $faker->sentence();
            $new_technology->slug = Technology::generateSlug($new_technology->name);
            $new_technology->save();
        }
    }
}
