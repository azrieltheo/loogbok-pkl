<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\PembimbingSekolah;

class PembimbingSekolahFactory extends Factory
{
    protected $model = PembimbingSekolah::class;

    public function definition()
    {
        return [
            'nama' => $this->faker->name,
            'nip' => $this->faker->unique()->numerify('###########'),
            'jenis_kelamin' => $this->faker->randomElement(['Laki-laki', 'Perempuan']),
        ];
    }
}
