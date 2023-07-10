<?php

namespace Database\Factories;

use App\Models\Contact;
use Illuminate\Database\Eloquent\Factories\Factory;

class ContactFactory extends Factory
{
    protected $model = Contact::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */

    public function definition()
    {
        return [
            'name1' => $this->faker->name,
            'name2' => $this->faker->name,
            'gender' => $this->faker->boolean,
            'email' => $this->faker->safeEmail,
            'postcode' => $this->faker->randomNumber(8),
            'address' => $this->faker->country,
            'building_name' => $this->faker->text(10),
            'opinion' => $this->faker->sentence,
        ];
    }
}
