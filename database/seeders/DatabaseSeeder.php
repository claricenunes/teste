<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call(PokeSeeder::class);
    }
}

class PokeSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            'comida' => [
                'Poke Salmão','Poke Atum','Poke Camarão','Poke Vegano','Poke Frango','Poke Califórnia','Poke Havaiano','Poke Spicy Tuna','Poke Crispy','Poke Premium','Poke Fit','Poke Kids','Poke Light','Poke Supremo','Poke Tropical','Poke Mix Peixes','Poke Especial','Poke Proteico','Poke Chef','Poke Executivo'
            ],
            'bebida' => [
                'Suco Natural de Laranja','Suco Natural de Limão','Suco Natural de Abacaxi','Suco Detox Verde','Refrigerante Lata','Água Mineral','Água com Gás','Chá Gelado de Pêssego','Chá Gelado de Limão','Coca-Cola Zero','Guaraná','H2OH!','Energético','Smoothie de Morango'
            ],
            'sobremesa' => [
                'Brownie de Chocolate','Cheesecake de Morango','Mousse de Maracujá','Pudim','Torta de Limão','Torta de Chocolate','Sorvete de Creme','Sorvete de Chocolate','Açaí Bowl','Salada de Frutas'
            ],
        ];

        foreach ($data as $tipo => $items) {
            foreach ($items as $item) {
                DB::table('produtos')->insert([
                    'nome' => $item,
                    'valor' => rand(8, 65),
                    'quantidade' => rand(5, 60),
                    'estoque' => rand(0, 1) ? 'Disponível' : 'Indisponível',
                    'data_compra' => Carbon::now()->subDays(rand(1, 200)),
                    'tipo' => $tipo,
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
            }
        }
    }
}
