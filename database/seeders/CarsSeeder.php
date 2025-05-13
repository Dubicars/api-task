<?php

namespace Database\Seeders;

use App\Models\Car;
use Illuminate\Database\Seeder;

class CarsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Car::query()->truncate();
        Car::query()->forceCreateQuietly(['make' => 'Mercedes-Benz', 'model' => 'S 580 4MATIC', 'year' => 2023, 'price' => 65_999_00, 'country' => 'United Arab Emirates', 'latitude' => '25.204849', 'longitude' => '55.270783', 'image_path' => '/images/mercedes-s-580.jpeg', 'created_at' => '2023-01-15 10:30:00']);
        Car::query()->forceCreateQuietly(['make' => 'Rolls-Royce', 'model' => 'Cullinan Black Badge', 'year' => 2022, 'price' => 145_000_00, 'country' => 'United Arab Emirates', 'latitude' => '24.453884', 'longitude' => '54.3773438', 'image_path' => '/images/rolls-cullinan-black.jpeg', 'created_at' => '2022-11-03 16:45:00']);
        Car::query()->forceCreateQuietly(['make' => 'Ferrari', 'model' => '812 Superfast', 'year' => 2021, 'price' => 130_500_00, 'country' => 'United Arab Emirates', 'latitude' => '25.276987', 'longitude' => '55.296249', 'image_path' => '/images/ferrari-812-superfast.jpeg', 'created_at' => '2021-09-08 12:20:00']);
        Car::query()->forceCreateQuietly(['make' => 'Lamborghini', 'model' => 'Aventador SVJ', 'year' => 2020, 'price' => 160_000_00, 'country' => 'United Arab Emirates', 'latitude' => '25.197197', 'longitude' => '55.2743764', 'image_path' => '/images/lamborghini-aventador-svj.jpeg', 'created_at' => '2020-12-22 14:00:00']);
        Car::query()->forceCreateQuietly(['make' => 'Porsche', 'model' => '911 Turbo S', 'year' => 2023, 'price' => 92_000_00, 'country' => 'United Arab Emirates', 'latitude' => '24.299174', 'longitude' => '54.697277', 'image_path' => '/images/porsche-911-turbo-s.jpeg', 'created_at' => '2023-03-10 11:15:00']);
        Car::query()->forceCreateQuietly(['make' => 'Bentley', 'model' => 'Flying Spur V8', 'year' => 2021, 'price' => 105_000_00, 'country' => 'United Arab Emirates', 'latitude' => '25.148233', 'longitude' => '55.227353', 'image_path' => '/images/bentley-flying-spur.jpeg', 'created_at' => '2021-07-19 09:05:00']);
        Car::query()->forceCreateQuietly(['make' => 'Aston Martin', 'model' => 'DBX707', 'year' => 2023, 'price' => 89_000_00, 'country' => 'United Arab Emirates', 'latitude' => '25.118126', 'longitude' => '55.200008', 'image_path' => '/images/aston-dbx707.jpeg', 'created_at' => '2023-06-28 17:40:00']);
        Car::query()->forceCreateQuietly(['make' => 'Bugatti', 'model' => 'Chiron Sport', 'year' => 2020, 'price' => 300_000_00, 'country' => 'United Arab Emirates', 'latitude' => '25.276987', 'longitude' => '55.296249', 'image_path' => '/images/bugatti-chiron-sport.jpeg', 'created_at' => '2020-10-30 13:00:00']);
        Car::query()->forceCreateQuietly(['make' => 'McLaren', 'model' => '765LT Spider', 'year' => 2022, 'price' => 115_000_00, 'country' => 'United Arab Emirates', 'latitude' => '24.453884', 'longitude' => '54.3773438', 'image_path' => '/images/mclaren-765lt-spider.jpeg', 'created_at' => '2022-04-12 15:50:00']);
        Car::query()->forceCreateQuietly(['make' => 'Maybach', 'model' => 'GLS 600', 'year' => 2023, 'price' => 108_000_00, 'country' => 'United Arab Emirates', 'latitude' => '25.204849', 'longitude' => '55.270783', 'image_path' => '/images/maybach-gls600.jpeg', 'created_at' => '2023-02-03 08:45:00']);
        Car::query()->forceCreateQuietly(['make' => 'Tesla', 'model' => 'Model S Plaid', 'year' => 2022, 'price' => 75_000_00, 'country' => 'United Arab Emirates', 'latitude' => '25.068233', 'longitude' => '55.141212', 'image_path' => '/images/tesla-model-s-plaid.jpeg', 'created_at' => '2022-07-01 18:30:00']);
        Car::query()->forceCreateQuietly(['make' => 'BMW', 'model' => 'M8 Competition', 'year' => 2021, 'price' => 88_000_00, 'country' => 'United Arab Emirates', 'latitude' => '25.065700', 'longitude' => '55.171280', 'image_path' => '/images/bmw-m8-competition.jpeg', 'created_at' => '2021-06-15 10:10:00']);
        Car::query()->forceCreateQuietly(['make' => 'Audi', 'model' => 'RS Q8', 'year' => 2022, 'price' => 78_000_00, 'country' => 'United Arab Emirates', 'latitude' => '25.078564', 'longitude' => '55.138938', 'image_path' => '/images/audi-rs-q8.jpeg', 'created_at' => '2022-08-14 14:55:00']);
        Car::query()->forceCreateQuietly(['make' => 'Jaguar', 'model' => 'F-Type R AWD Coupe', 'year' => 2021, 'price' => 69_000_00, 'country' => 'United Arab Emirates', 'latitude' => '24.466667', 'longitude' => '54.366669', 'image_path' => '/images/jaguar-f-type-r.jpeg', 'created_at' => '2021-05-11 09:00:00']);
        Car::query()->forceCreateQuietly(['make' => 'Lexus', 'model' => 'LC 500 Convertible', 'year' => 2020, 'price' => 62_000_00, 'country' => 'United Arab Emirates', 'latitude' => '24.299174', 'longitude' => '54.697277', 'image_path' => '/images/lexus-lc500-convertible.jpeg', 'created_at' => '2020-09-23 19:20:00']);
        Car::query()->forceCreateQuietly(['make' => 'Cadillac', 'model' => 'Escalade-V', 'year' => 2023, 'price' => 85_000_00, 'country' => 'United Arab Emirates', 'latitude' => '25.276987', 'longitude' => '55.296249', 'image_path' => '/images/cadillac-escalade-v.jpeg', 'created_at' => '2023-04-18 13:10:00']);
        Car::query()->forceCreateQuietly(['make' => 'Range Rover', 'model' => 'SV Autobiography LWB', 'year' => 2022, 'price' => 95_000_00, 'country' => 'United Arab Emirates', 'latitude' => '25.197197', 'longitude' => '55.2743764', 'image_path' => '/images/range-rover-sv-lwb.jpeg', 'created_at' => '2022-12-05 17:00:00']);
        Car::query()->forceCreateQuietly(['make' => 'Chevrolet', 'model' => 'Corvette Z06', 'year' => 2023, 'price' => 72_000_00, 'country' => 'United Arab Emirates', 'latitude' => '24.321573', 'longitude' => '54.727916', 'image_path' => '/images/chevrolet-corvette-z06.jpeg', 'created_at' => '2023-08-09 20:40:00']);
        Car::query()->forceCreateQuietly(['make' => 'Genesis', 'model' => 'G90 5.0 Ultimate', 'year' => 2021, 'price' => 58_000_00, 'country' => 'United Arab Emirates', 'latitude' => '25.263055', 'longitude' => '55.297222', 'image_path' => '/images/genesis-g90.jpeg', 'created_at' => '2021-03-14 11:35:00']);
        Car::query()->forceCreateQuietly(['make' => 'Maserati', 'model' => 'MC20', 'year' => 2022, 'price' => 98_000_00, 'country' => 'United Arab Emirates', 'latitude' => '25.204849', 'longitude' => '55.270783', 'image_path' => '/images/maserati-mc20.jpeg', 'created_at' => '2022-10-21 15:15:00']);
    }
}
