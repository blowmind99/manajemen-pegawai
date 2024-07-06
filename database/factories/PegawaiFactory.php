<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pegawai>
 */
class PegawaiFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            //
            'nama_lengkap' => $this->faker->name(),
            'alamat'       => $this->faker->address(),
            'telepon'      => $this->faker->phoneNumber(),
            'email'        => $this->faker->unique()->safeEmail(),
            'photo'        => $this->faker->image(storage_path('app/public/avatars'), 40, 40, null, false),
            'created_at'   => Carbon::now(),
            'updated_at'   => Carbon::now(),
        ];
    }
}
