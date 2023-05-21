<?php

namespace Database\Seeders;

use App\Models\Ingredient;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class IngredientsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Schema::disableForeignKeyConstraints();

        Ingredient::truncate();

        $ingredients = [
            [
                'id' => 1,
                'name' => '(200g) salmon fillets, 5cm thick',
            ],
            [
                'id' => 2,
                'name' => 'Angostura bitters',
            ],
            [
                'id' => 3,
                'name' => 'Leffe brune',
            ],
            [
                'id' => 4,
                'name' => 'Reblochon',
            ],
            [
                'id' => 5,
                'name' => 'Spaghetti',
            ],
            [
                'id' => 6,
                'name' => 'active dry yeast',
            ],
            [
                'id' => 7,
                'name' => 'almond extract',
            ],
            [
                'id' => 8,
                'name' => 'almond powder',
            ],
            [
                'id' => 9,
                'name' => 'applesauce (optional)',
            ],
            [
                'id' => 10,
                'name' => 'avocado',
            ],
            [
                'id' => 11,
                'name' => 'bacon',
            ],
            [
                'id' => 12,
                'name' => 'baker\'s yeast',
            ],
            [
                'id' => 13,
                'name' => 'baking soda',
            ],
            [
                'id' => 14,
                'name' => 'banana',
            ],
            [
                'id' => 15,
                'name' => 'barbecue sauce',
            ],
            [
                'id' => 16,
                'name' => 'barberries',
            ],
            [
                'id' => 17,
                'name' => 'basil',
            ],
            [
                'id' => 18,
                'name' => 'basmati rice',
            ],
            [
                'id' => 19,
                'name' => 'bay leaf',
            ],
            [
                'id' => 20,
                'name' => 'beef brisket',
            ],
            [
                'id' => 21,
                'name' => 'biscuits petit-beurre véritables',
            ],
            [
                'id' => 22,
                'name' => 'bitter cocoa',
            ],
            [
                'id' => 23,
                'name' => 'black coffee',
            ],
            [
                'id' => 24,
                'name' => 'bouillon',
            ],
            [
                'id' => 25,
                'name' => 'bouquet garni',
            ],
            [
                'id' => 26,
                'name' => 'bourbon',
            ],
            [
                'id' => 27,
                'name' => 'bourguignon',
            ],
            [
                'id' => 28,
                'name' => 'bread',
            ],
            [
                'id' => 29,
                'name' => 'brown sugar',
            ],
            [
                'id' => 30,
                'name' => 'butter',
            ],
            [
                'id' => 31,
                'name' => 'cabbage',
            ],
            [
                'id' => 32,
                'name' => 'canned chickpeas, drained with liquid reserved',
            ],
            [
                'id' => 33,
                'name' => 'canned of pineapple chunks in juice',
            ],
            [
                'id' => 34,
                'name' => 'carrot',
            ],
            [
                'id' => 35,
                'name' => 'cayenne pepper',
            ],
            [
                'id' => 36,
                'name' => 'celery root',
            ],
            [
                'id' => 37,
                'name' => 'celery stalk',
            ],
            [
                'id' => 38,
                'name' => 'cheese',
            ],
            [
                'id' => 39,
                'name' => 'chicken breast',
            ],
            [
                'id' => 40,
                'name' => 'chickpea liquid',
            ],
            [
                'id' => 41,
                'name' => 'chili pepper',
            ],
            [
                'id' => 42,
                'name' => 'chocolate',
            ],
            [
                'id' => 43,
                'name' => 'chopped fresh cilantro',
            ],
            [
                'id' => 44,
                'name' => 'clove',
            ],
            [
                'id' => 45,
                'name' => 'club soda',
            ],
            [
                'id' => 46,
                'name' => 'coconut',
            ],
            [
                'id' => 47,
                'name' => 'coconut milk',
            ],
            [
                'id' => 48,
                'name' => 'coffee',
            ],
            [
                'id' => 49,
                'name' => 'cognac',
            ],
            [
                'id' => 50,
                'name' => 'cold water',
            ],
            [
                'id' => 51,
                'name' => 'cooked rice',
            ],
            [
                'id' => 52,
                'name' => 'cornstarch',
            ],
            [
                'id' => 53,
                'name' => 'cracked black pepper',
            ],
            [
                'id' => 54,
                'name' => 'crawfish',
            ],
            [
                'id' => 55,
                'name' => 'crushed ice',
            ],
            [
                'id' => 56,
                'name' => 'cucumber',
            ],
            [
                'id' => 57,
                'name' => 'cumin',
            ],
            [
                'id' => 58,
                'name' => 'curry powder',
            ],
            [
                'id' => 59,
                'name' => 'diced pancetta',
            ],
            [
                'id' => 60,
                'name' => 'dill',
            ],
            [
                'id' => 61,
                'name' => 'dry vermouth',
            ],
            [
                'id' => 62,
                'name' => 'egg',
            ],
            [
                'id' => 63,
                'name' => 'egg yolk',
            ],
            [
                'id' => 64,
                'name' => 'eggplant',
            ],
            [
                'id' => 65,
                'name' => 'elbow macaroni, cooked (or other tubular pasta)',
            ],
            [
                'id' => 66,
                'name' => 'fish stock',
            ],
            [
                'id' => 67,
                'name' => 'flour',
            ],
            [
                'id' => 68,
                'name' => 'fresh cherries, pitted and halved',
            ],
            [
                'id' => 69,
                'name' => 'fève',
            ],
            [
                'id' => 70,
                'name' => 'garlic clove',
            ],
            [
                'id' => 71,
                'name' => 'garlic powder',
            ],
            [
                'id' => 72,
                'name' => 'gin',
            ],
            [
                'id' => 73,
                'name' => 'ginger beer',
            ],
            [
                'id' => 74,
                'name' => 'ginger bitters',
            ],
            [
                'id' => 75,
                'name' => 'gingerbread',
            ],
            [
                'id' => 76,
                'name' => 'glutinous rice flour',
            ],
            [
                'id' => 77,
                'name' => 'green mungo bean without skin',
            ],
            [
                'id' => 78,
                'name' => 'green onion',
            ],
            [
                'id' => 79,
                'name' => 'ground beef',
            ],
            [
                'id' => 80,
                'name' => 'ground pork',
            ],
            [
                'id' => 81,
                'name' => 'ham',
            ],
            [
                'id' => 82,
                'name' => 'heavy cream',
            ],
            [
                'id' => 83,
                'name' => 'heavy whipping cream',
            ],
            [
                'id' => 84,
                'name' => 'honey',
            ],
            [
                'id' => 85,
                'name' => 'hot milk',
            ],
            [
                'id' => 86,
                'name' => 'icing sugar',
            ],
            [
                'id' => 87,
                'name' => 'kosher salt',
            ],
            [
                'id' => 88,
                'name' => 'ladyfingers',
            ],
            [
                'id' => 89,
                'name' => 'lean beef',
            ],
            [
                'id' => 90,
                'name' => 'leek',
            ],
            [
                'id' => 91,
                'name' => 'lemon',
            ],
            [
                'id' => 92,
                'name' => 'lemon peel',
            ],
            [
                'id' => 93,
                'name' => 'lime',
            ],
            [
                'id' => 94,
                'name' => 'liquid cream',
            ],
            [
                'id' => 95,
                'name' => 'long rice',
            ],
            [
                'id' => 96,
                'name' => 'malt vinegar',
            ],
            [
                'id' => 97,
                'name' => 'mango',
            ],
            [
                'id' => 98,
                'name' => 'maraschino cherry',
            ],
            [
                'id' => 99,
                'name' => 'maraschino liqueur',
            ],
            [
                'id' => 100,
                'name' => 'mascarpone',
            ],
            [
                'id' => 101,
                'name' => 'meat stock',
            ],
            [
                'id' => 102,
                'name' => 'milk',
            ],
            [
                'id' => 103,
                'name' => 'milk or cream',
            ],
            [
                'id' => 104,
                'name' => 'minced garlic',
            ],
            [
                'id' => 105,
                'name' => 'minced ginger',
            ],
            [
                'id' => 106,
                'name' => 'mint leaves',
            ],
            [
                'id' => 107,
                'name' => 'mixed greens',
            ],
            [
                'id' => 108,
                'name' => 'mushrooms',
            ],
            [
                'id' => 109,
                'name' => 'mustard',
            ],
            [
                'id' => 110,
                'name' => 'nuoc-mam',
            ],
            [
                'id' => 111,
                'name' => 'nutmeg',
            ],
            [
                'id' => 112,
                'name' => 'oats',
            ],
            [
                'id' => 113,
                'name' => 'olive',
            ],
            [
                'id' => 114,
                'name' => 'olive oil',
            ],
            [
                'id' => 115,
                'name' => 'onion',
            ],
            [
                'id' => 116,
                'name' => 'onion powder',
            ],
            [
                'id' => 117,
                'name' => 'orange',
            ],
            [
                'id' => 118,
                'name' => 'oregano',
            ],
            [
                'id' => 119,
                'name' => 'panko crumbs',
            ],
            [
                'id' => 120,
                'name' => 'paprika',
            ],
            [
                'id' => 121,
                'name' => 'parsley',
            ],
            [
                'id' => 122,
                'name' => 'peas',
            ],
            [
                'id' => 123,
                'name' => 'pickled ginger',
            ],
            [
                'id' => 124,
                'name' => 'pine nut',
            ],
            [
                'id' => 125,
                'name' => 'plain yogurt',
            ],
            [
                'id' => 126,
                'name' => 'pork shoulder',
            ],
            [
                'id' => 127,
                'name' => 'pork echinacea',
            ],
            [
                'id' => 128,
                'name' => 'potatoes',
            ],
            [
                'id' => 129,
                'name' => 'poultry bouillon cube',
            ],
            [
                'id' => 130,
                'name' => 'puff pastry',
            ],
            [
                'id' => 131,
                'name' => 'red and green bell pepper',
            ],
            [
                'id' => 132,
                'name' => 'red bell pepper',
            ],
            [
                'id' => 133,
                'name' => 'red kuri squash',
            ],
            [
                'id' => 134,
                'name' => 'red wine',
            ],
            [
                'id' => 135,
                'name' => 'roquefort',
            ],
            [
                'id' => 136,
                'name' => 'round rice',
            ],
            [
                'id' => 137,
                'name' => 'saffron threads',
            ],
            [
                'id' => 138,
                'name' => 'salmon fillet',
            ],
            [
                'id' => 139,
                'name' => 'salt',
            ],
            [
                'id' => 140,
                'name' => 'salt and pepper',
            ],
            [
                'id' => 141,
                'name' => 'sesame oil',
            ],
            [
                'id' => 142,
                'name' => 'sesame seeds',
            ],
            [
                'id' => 143,
                'name' => 'shallot',
            ],
            [
                'id' => 144,
                'name' => 'sherry vinegar',
            ],
            [
                'id' => 145,
                'name' => 'shortcrust pastry',
            ],
            [
                'id' => 146,
                'name' => 'shredded parmesan',
            ],
            [
                'id' => 147,
                'name' => 'shredded pecorino romano',
            ],
            [
                'id' => 148,
                'name' => 'sour cream',
            ],
            [
                'id' => 149,
                'name' => 'sour cream (optional)',
            ],
            [
                'id' => 150,
                'name' => 'soy sauce',
            ],
            [
                'id' => 151,
                'name' => 'spanish ham (Iberico or Serrano)',
            ],
            [
                'id' => 152,
                'name' => 'sugar',
            ],
            [
                'id' => 153,
                'name' => 'sugar syrup',
            ],
            [
                'id' => 154,
                'name' => 'sushi grade salmon',
            ],
            [
                'id' => 155,
                'name' => 'sweet onion',
            ],
            [
                'id' => 156,
                'name' => 'sweet yellow chili pepper',
            ],
            [
                'id' => 157,
                'name' => 'tahini',
            ],
            [
                'id' => 158,
                'name' => 'tequila',
            ],
            [
                'id' => 159,
                'name' => 'thyme',
            ],
            [
                'id' => 160,
                'name' => 'tomato',
            ],
            [
                'id' => 161,
                'name' => 'tomato ketchup',
            ],
            [
                'id' => 162,
                'name' => 'tomato paste',
            ],
            [
                'id' => 163,
                'name' => 'tomato puree',
            ],
            [
                'id' => 164,
                'name' => 'triple sec',
            ],
            [
                'id' => 165,
                'name' => 'unsweetened coconut milk',
            ],
            [
                'id' => 166,
                'name' => 'vanilla extract',
            ],
            [
                'id' => 167,
                'name' => 'vanilla pod',
            ],
            [
                'id' => 168,
                'name' => 'vegetable oil',
            ],
            [
                'id' => 169,
                'name' => 'veggie bouillon cube',
            ],
            [
                'id' => 170,
                'name' => 'vodka',
            ],
            [
                'id' => 171,
                'name' => 'walnut',
            ],
            [
                'id' => 172,
                'name' => 'warm milk',
            ],
            [
                'id' => 173,
                'name' => 'warm water',
            ],
            [
                'id' => 174,
                'name' => 'white rum',
            ],
            [
                'id' => 175,
                'name' => 'white wine',
            ],
            [
                'id' => 176,
                'name' => 'whole wheat flour',
            ],
            [
                'id' => 177,
                'name' => 'worcestershire sauce',
            ],
            [
                'id' => 178,
                'name' => 'zucchini',
            ],
            [
                'id' => 179,
                'name' => 'veggie stock',
            ],
            [
                'id' => 180,
                'name' => 'gorgonzola',
            ],
        ];

        foreach ($ingredients as $ingredient) {
            Ingredient::create($ingredient);
        }

        Schema::enableForeignKeyConstraints();
    }
}
