<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Passwork>
 */
class PassworkFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            //'group_id' =>$this->faker->randomElement([1, 2, 3]),
            'name' => $this->faker->randomElement(['Hotmail','Gmail', 'Facebook', 'Steam']),
            'email' => $this->faker->safeEmail(),
            'pass' => '$2y$10$92IXUNpkjO0rOQ5byMi',
            'note' => $this->faker->paragraph()
        ];
    }
}
