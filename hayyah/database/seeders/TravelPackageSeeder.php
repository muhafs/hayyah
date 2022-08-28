<?php

namespace Database\Seeders;

use App\Models\TravelPackage;
use Illuminate\Database\Seeder;

class TravelPackageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Makkah
        TravelPackage::create([
            'title' => 'Makkah',
            'slug' => 'makkah',
            'location' => 'Saudi Arabia',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus, aut necessitatibus nam error placeat quia maiores non eligendi a, culpa, quisquam voluptate voluptatem pariatur architecto.',
            'featured_event' => 'Prays',
            'language' => 'Arabic',
            'foods' => 'Kabsah',
            'departure_date' => '2024-08-26',
            'duration' => '30D',
            'type' => 'Ziarah',
            'price' => 5000
        ]);

        // Jeddah
        TravelPackage::create([
            'title' => 'Jeddah',
            'slug' => 'jeddah',
            'location' => 'Saudi Arabia',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus, aut necessitatibus nam error placeat quia maiores non eligendi a, culpa, quisquam voluptate voluptatem pariatur architecto.',
            'featured_event' => 'Party',
            'language' => 'Arabic',
            'foods' => 'Sayyadiah',
            'departure_date' => '2024-08-26',
            'duration' => '30D',
            'type' => 'Open Trip',
            'price' => 2500
        ]);
    }
}
