<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Continent;
use App\Models\Country;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $continents = [
            ['id' => 1, 'name' => 'Europa',],
            ['id' => 2, 'name' => 'Ásia',],
            ['id' => 3, 'name' => 'África',],
            ['id' => 4, 'name' => 'América',],
            ['id' => 5, 'name' => 'Oceania',],
        ];

        foreach ($continents as $continent) {
            Continent::create($continent);
        }

        $countries = [
            ['name' => 'Portugal', 'continent_id' => 1],
            ['name' => 'Espanha', 'continent_id' => 1],
            ['name' => 'França', 'continent_id' => 1],
            ['name' => 'Alemanha', 'continent_id' => 1],
            ['name' => 'Itália', 'continent_id' => 1],
            ['name' => 'Reino Unido', 'continent_id' => 1],
            ['name' => 'Holanda', 'continent_id' => 1],
            ['name' => 'Bélgica', 'continent_id' => 1],
            ['name' => 'Suíça', 'continent_id' => 1],
            ['name' => 'Suécia', 'continent_id' => 1],

            ['name' => 'China', 'continent_id' => 2],
            ['name' => 'Japão', 'continent_id' => 2],
            ['name' => 'Índia', 'continent_id' => 2],
            ['name' => 'Coreia do Sul', 'continent_id' => 2],
            ['name' => 'Indonésia', 'continent_id' => 2],
            ['name' => 'Tailândia', 'continent_id' => 2],
            ['name' => 'Vietnã', 'continent_id' => 2],
            ['name' => 'Malásia', 'continent_id' => 2],
            ['name' => 'Singapura', 'continent_id' => 2],
            ['name' => 'Filipinas', 'continent_id' => 2],

            ['name' => 'Nigéria', 'continent_id' => 3],
            ['name' => 'Egito', 'continent_id' => 3],
            ['name' => 'África do Sul', 'continent_id' => 3],
            ['name' => 'Quênia', 'continent_id' => 3],
            ['name' => 'Gana', 'continent_id' => 3],
            ['name' => 'Etiópia', 'continent_id' => 3],
            ['name' => 'Marrocos', 'continent_id' => 3],
            ['name' => 'Argélia', 'continent_id' => 3],
            ['name' => 'Uganda', 'continent_id' => 3],
            ['name' => 'Tanzânia', 'continent_id' => 3],
            
            ['name' => 'Brasil', 'continent_id' => 4],
            ['name' => 'Argentina', 'continent_id' => 4],
            ['name' => 'Chile', 'continent_id' => 4],
            ['name' => 'Colômbia', 'continent_id' => 4],
            ['name' => 'Peru', 'continent_id' => 4],
            ['name' => 'Venezuela', 'continent_id' => 4],
            ['name' => 'Bolívia', 'continent_id' => 4],
            ['name' => 'Paraguai', 'continent_id' => 4],
            ['name' => 'Uruguai', 'continent_id' => 4],
            ['name' => 'Equador', 'continent_id' => 4],
            
            ['name' => 'Austrália', 'continent_id' => 5],
            ['name' => 'Nova Zelândia', 'continent_id' => 5],
            ['name' => 'Papua Nova Guiné', 'continent_id' => 5],
            ['name' => 'Fiji', 'continent_id' => 5],
            ['name' => 'Samoa', 'continent_id' => 5],
            ['name' => 'Tonga', 'continent_id' => 5],
            ['name' => 'Vanuatu', 'continent_id' => 5],
            ['name' => 'South Georgia and the South Sandwich Islands', 'continent_id' => 5],
        ];


        foreach ($countries as $country) {
            Country::create($country);
        }
    }
}
