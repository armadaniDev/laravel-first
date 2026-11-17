<?php

namespace Database\Factories;

use App\Models\Classroom;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Classroom>
 */
class ClassroomFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return fake()->unique()->randomElement([
            ['name' => '10 PPLG 1',  'major' => 'PPLG'],
            ['name' => '10 PPLG 2',  'major' => 'PPLG'],
            ['name' => '10 PPLG 3',  'major' => 'PPLG'],
            ['name' => '11 PPLG 1',  'major' => 'PPLG'],
            ['name' => '11 PPLG 2',  'major' => 'PPLG'],
            ['name' => '11 PPLG 3',  'major' => 'PPLG'],
            ['name' => '10 DKV 1',   'major' => 'DKV'],
            ['name' => '10 DKV 2',   'major' => 'DKV'],
            ['name' => '10 DKV 3',   'major' => 'DKV'],
            ['name' => '10 ANIM 1',  'major' => 'ANIMASI'],
            ['name' => '10 ANIM 2',  'major' => 'ANIMASI'],
            ['name' => '10 ANIM 3',  'major' => 'ANIMASI'],
        ]);
    }
}
