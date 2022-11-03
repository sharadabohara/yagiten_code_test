<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Employee;
use Illuminate\Support\Str;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $insertData = [
           [ 
            'uuid' => 'T01',
            'name' => Str::random(10),
            'designation' => Str::random(10),
            'contact' => Str::random(10),
            'address' => Str::random(10),
            'type' => 't'
           ],
           [ 
            'uuid' => 'T01',
            'name' => Str::random(10),
            'designation' => Str::random(10),
            'contact' => Str::random(10),
            'address' => Str::random(10),
            'type' => 't'
           ],
           [ 
            'uuid' => 'P01',
            'name' => Str::random(10),
            'designation' => Str::random(10),
            'contact' => Str::random(10),
            'address' => Str::random(10),
            'type' => 'p'
           ],
           [ 
            'uuid' => 'P01',
            'name' => Str::random(10),
            'designation' => Str::random(10),
            'contact' => Str::random(10),
            'address' => Str::random(10),
            'type' => 'p'
           ],
        ];

        // loop to insert data into database
        foreach($insertData as $data)
        {
            Employee::create($data);
        }
    }
}
