<?php

# database/seeds/QuoteTableSeeder.php

use App\Models\Quote;
use Illuminate\Database\Seeder;

class QuoteTableSeeder extends Seeder
{
    public function run()
    {
        Quote::create([
            'text' => 'Muken nunca muestra debilidad',
            'author' => 'Muka',
            'background' => '1.jpg'
        ]);

        Quote::create([
            'text' => 'Tengo las mejor mechas del mundo',
            'author' => 'Sombrita',
            'background' => '2.jpg'
        ]);
    }

}
