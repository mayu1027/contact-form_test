<?php

namespace Database\Factories;

use App\Models\Contact;
use Illuminate\Database\Eloquent\Factories\Factory;

class ContactFactory extends Factory
{
    protected $model = Contact::class;
    protected $faker;

    public function __construct(...$args)
    {
        parent::__construct(...$args);
        $this->faker = \Faker\Factory::create('ja_JP');
    }

    public function definition()
    {

        return [
            'category_id' => $faker->numberBetween(1, 5),
            'first_name' => $faker->lastName(),
            'last_name' => $faker->firstName(),
            'gender' => $faker->randomElement([1, 2, 3]),
            'email' => $faker->safeEmail(),
            'tell' => $faker->phoneNumber(),
            'address' => $faker->prefecture . $faker->city . $faker->streetAddress,
            'building' => $faker->secondaryAddress(),
            'detail' => $faker->sentence(3),
        ];
    }
}
