<?php

namespace Database\Seeders;

use App\Models\Services;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ServicesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $servicesCsv = fopen(base_path("database/data/services.csv"), "r");

        $firstline = true;

        $services = [];

        while (($data = fgetcsv($servicesCsv, 2000, ",")) !== false)
        {
            if (!$firstline)
            {
              $services[] = [
                'id' => $data[0],
                'name' => $data[1],
                'description' => $data[2],
                'icon' => $data[3]??null,
              ];
            }
            $firstline = false;
        }
        fclose($servicesCsv);

        Services::insert($services);
    }
}
