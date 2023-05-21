<?php

namespace Database\Seeders;

use App\Models\Recipe;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class RecipesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Schema::disableForeignKeyConstraints();

        Recipe::truncate();

        $recipes = [
            [
                'id' => 1,
                'category_id' => 4, // Dessert
                'name' => 'Banana Bread',
                'image_path' => 'Banana_Bread.jpg',
                'prep_time' => 10,
                'cook_time' => 55,
                'rest_time' => 0,
                'servings' => 10,
            ],
            [
                'id' => 2,
                'category_id' => 2, // Main Dish
                'name' => 'Boeuf Bourguignon',
                'image_path' => 'Boeuf_Bourguignon.jpg',
                'prep_time' => 6,
                'cook_time' => 300,
                'rest_time' => 0,
                'servings' => 4,
            ],
            [
                'id' => 3,
                'category_id' => 6, // Other
                'name' => 'Bolognese Sauce',
                'image_path' => 'Bolognese_Sauce.jpg',
                'prep_time' => 20,
                'cook_time' => 180,
                'rest_time' => 0,
                'servings' => 6,
            ],
            [
                'id' => 4,
                'category_id' => 2,
                'name' => 'Brisket',
                'image_path' => 'Brisket.jpg',
                'prep_time' => 10,
                'cook_time' => 240,
                'rest_time' => 10,
                'servings' => 4,
            ],
            [
                'id' => 5,
                'category_id' => 1, // Appetizer
                'name' => 'Cake Jambon Olives',
                'image_path' => 'Cake_Jambon_Olives.jpg',
                'prep_time' => 20,
                'cook_time' => 45,
                'rest_time' => 0,
                'servings' => 6,
            ],
            [
                'id' => 6,
                'category_id' => 4,
                'name' => 'Cannelés',
                'image_path' => 'Cannels.jpg',
                'prep_time' => 15,
                'cook_time' => 75,
                'rest_time' => 0,
                'servings' => 12,
            ],
            [
                'id' => 7,
                'category_id' => 2,
                'name' => 'Carbonade flamande',
                'image_path' => 'Carbonade_flamande.jpg',
                'prep_time' => 30,
                'cook_time' => 190,
                'rest_time' => 0,
                'servings' => 4,
            ],
            [
                'id' => 8,
                'category_id' => 6,
                'name' => 'Carbonara Sauce',
                'image_path' => 'Carbonara_Sauce.jpg',
                'prep_time' => 10,
                'cook_time' => 10,
                'rest_time' => 0,
                'servings' => 4,
            ],
            [
                'id' => 9,
                'category_id' => 4,
                'name' => 'Cherry Vareniki',
                'image_path' => 'Cherry_Vareniki.jpg',
                'prep_time' => 105,
                'cook_time' => 5,
                'rest_time' => 0,
                'servings' => 45,
            ],
            [
                'id' => 10,
                'category_id' => 2,
                'name' => 'Chicken & Mushrooms Julienne',
                'image_path' => 'Chicken__Mushrooms_Julienne.jpg',
                'prep_time' => 10,
                'cook_time' => 35,
                'rest_time' => 0,
                'servings' => 4,
            ],
            [
                'id' => 11,
                'category_id' => 2,
                'name' => 'Chicken Fried Rice',
                'image_path' => 'Chicken_Fried_Rice.jpg',
                'prep_time' => 5,
                'cook_time' => 10,
                'rest_time' => 0,
                'servings' => 6,
            ],
            [
                'id' => 12,
                'category_id' => 2,
                'name' => 'Coconut Chicken Curry',
                'image_path' => 'Coconut_Chicken_Curry.jpg',
                'prep_time' => 15,
                'cook_time' => 35,
                'rest_time' => 0,
                'servings' => 5,
            ],
            [
                'id' => 13,
                'category_id' => 4,
                'name' => 'Crème brûlée à la vanille',
                'image_path' => 'Crme_brle__la_vanille.jpg',
                'prep_time' => 20,
                'cook_time' => 35,
                'rest_time' => 0,
                'servings' => 8,
            ],
            [
                'id' => 14,
                'category_id' => 5, // Cocktails
                'name' => 'Daiquiri',
                'image_path' => 'Daiquiri.jpg',
                'prep_time' => 5,
                'cook_time' => 0,
                'rest_time' => 0,
                'servings' => 1,
            ],
            [
                'id' => 15,
                'category_id' => 4,
                'name' => 'Far breton',
                'image_path' => 'Far_breton.jpg',
                'prep_time' => 15,
                'cook_time' => 35,
                'rest_time' => 0,
                'servings' => 8,
            ],
            [
                'id' => 16,
                'category_id' => 4,
                'name' => 'Fondant au chocolat',
                'image_path' => 'Fondant_au_chocolat.jpg',
                'prep_time' => 15,
                'cook_time' => 30,
                'rest_time' => 0,
                'servings' => 6,
            ],
            [
                'id' => 17,
                'category_id' => 3, // Side Dish
                'name' => 'Fresh Pasta',
                'image_path' => 'Fresh_Pasta.jpg',
                'prep_time' => 70,
                'cook_time' => 2,
                'rest_time' => 0,
                'servings' => 4,
            ],
            [
                'id' => 18,
                'category_id' => 2,
                'name' => 'Fricassée de porc',
                'image_path' => 'Fricasse_de_porc.jpg',
                'prep_time' => 30,
                'cook_time' => 120,
                'rest_time' => 0,
                'servings' => 4,
            ],
            [
                'id' => 19,
                'category_id' => 5,
                'name' => 'Frozen Margarita',
                'image_path' => 'Frozen_Margarita.jpg',
                'prep_time' => 5,
                'cook_time' => 0,
                'rest_time' => 0,
                'servings' => 1,
            ],
            [
                'id' => 20,
                'category_id' => 4,
                'name' => 'Galette des Rois',
                'image_path' => 'Galette_des_Rois.jpg',
                'prep_time' => 15,
                'cook_time' => 40,
                'rest_time' => 0,
                'servings' => 6,
            ],
            [
                'id' => 21,
                'category_id' => 6,
                'name' => 'Genovese Pesto Sauce',
                'image_path' => 'Genovese_Pesto_Sauce.jpg',
                'prep_time' => 10,
                'cook_time' => 0,
                'rest_time' => 0,
                'servings' => 6,
            ],
            [
                'id' => 22,
                'category_id' => 3,
                'name' => 'Gratin Dauphinois',
                'image_path' => 'Gratin_Dauphinois.jpg',
                'prep_time' => 10,
                'cook_time' => 55,
                'rest_time' => 0,
                'servings' => 10,
            ],
            [
                'id' => 23,
                'category_id' => 1,
                'name' => 'Guacamole',
                'image_path' => 'Guacamole.jpg',
                'prep_time' => 10,
                'cook_time' => 0,
                'rest_time' => 0,
                'servings' => 4,
            ],
            [
                'id' => 24,
                'category_id' => 4,
                'name' => 'Gâteau au Petit-Beurre',
                'image_path' => 'Gteau_au_Petit-Beurre.jpg',
                'prep_time' => 40,
                'cook_time' => 0,
                'rest_time' => 86400,
                'servings' => 8,
            ],
            [
                'id' => 25,
                'category_id' => 1,
                'name' => 'Hummus',
                'image_path' => 'Hummus.jpg',
                'prep_time' => 3,
                'cook_time' => 3,
                'rest_time' => 0,
                'servings' => 8,
            ],
            [
                'id' => 26,
                'category_id' => 3,
                'name' => 'Jambalaya',
                'image_path' => 'Jambalaya.jpg',
                'prep_time' => 30,
                'cook_time' => 35,
                'rest_time' => 0,
                'servings' => 6,
            ],
            [
                'id' => 27,
                'category_id' => 1,
                'name' => 'Khachapuri',
                'image_path' => 'Khachapuri.jpg',
                'prep_time' => 30,
                'cook_time' => 20,
                'rest_time' => 0,
                'servings' => 4,
            ],
            [
                'id' => 28,
                'category_id' => 4,
                'name' => 'Kouign Amann',
                'image_path' => 'Kouign_Amann.jpg',
                'prep_time' => 60,
                'cook_time' => 25,
                'rest_time' => 60,
                'servings' => 8,
            ],
            [
                'id' => 29,
                'category_id' => 1,
                'name' => 'Kyopolou',
                'image_path' => 'Kyopolou.jpg',
                'prep_time' => 20,
                'cook_time' => 40,
                'rest_time' => 10,
                'servings' => 3,
            ],
            [
                'id' => 30,
                'category_id' => 1,
                'name' => 'Ljutenitsa',
                'image_path' => 'Ljutenitsa.jpg',
                'prep_time' => 60,
                'cook_time' => 90,
                'rest_time' => 0,
                'servings' => 20,
            ],
            [
                'id' => 31,
                'category_id' => 2,
                'name' => 'Lohikeitto',
                'image_path' => 'Lohikeitto.jpg',
                'prep_time' => 10,
                'cook_time' => 25,
                'rest_time' => 0,
                'servings' => 4,
            ],
            [
                'id' => 32,
                'category_id' => 3,
                'name' => 'Mac & Cheese',
                'image_path' => 'Mac__Cheese.jpg',
                'prep_time' => 20,
                'cook_time' => 30,
                'rest_time' => 0,
                'servings' => 6,
            ],
            [
                'id' => 33,
                'category_id' => 6,
                'name' => 'Marinara Sauce',
                'image_path' => 'Marinara_Sauce.jpg',
                'prep_time' => 5,
                'cook_time' => 45,
                'rest_time' => 0,
                'servings' => 2,
            ],
            [
                'id' => 34,
                'category_id' => 5,
                'name' => 'Martini',
                'image_path' => 'Martini.jpg',
                'prep_time' => 5,
                'cook_time' => 0,
                'rest_time' => 0,
                'servings' => 1,
            ],
            [
                'id' => 35,
                'category_id' => 3,
                'name' => 'Mashed Potatoes',
                'image_path' => 'Mashed_Potatoes.jpg',
                'prep_time' => 10,
                'cook_time' => 30,
                'rest_time' => 0,
                'servings' => 4,
            ],
            [
                'id' => 36,
                'category_id' => 5,
                'name' => 'Mojito',
                'image_path' => 'Mojito.jpg',
                'prep_time' => 5,
                'cook_time' => 0,
                'rest_time' => 0,
                'servings' => 1,
            ],
            [
                'id' => 37,
                'category_id' => 5,
                'name' => 'Moscow Mule',
                'image_path' => 'Moscow_Mule.jpg',
                'prep_time' => 5,
                'cook_time' => 0,
                'rest_time' => 0,
                'servings' => 1,
            ],
            [
                'id' => 38,
                'category_id' => 2,
                'name' => 'Mushroom Risotto',
                'image_path' => 'Mushroom_Risotto.jpg',
                'prep_time' => 30,
                'cook_time' => 45,
                'rest_time' => 0,
                'servings' => 4,
            ],
            [
                'id' => 39,
                'category_id' => 5,
                'name' => 'Old Fashioned',
                'image_path' => 'Old_Fashioned.jpg',
                'prep_time' => 5,
                'cook_time' => 0,
                'rest_time' => 0,
                'servings' => 1,
            ],
            [
                'id' => 40,
                'category_id' => 2,
                'name' => 'Pan Seared Salmon',
                'image_path' => 'Pan_Seared_Salmon.jpg',
                'prep_time' => 5,
                'cook_time' => 10,
                'rest_time' => 0,
                'servings' => 4,
            ],
            [
                'id' => 41,
                'category_id' => 4,
                'name' => 'Perle de coco',
                'image_path' => 'Perle_de_coco.jpg',
                'prep_time' => 180,
                'cook_time' => 60,
                'rest_time' => 0,
                'servings' => 12,
            ],
            [
                'id' => 42,
                'category_id' => 2,
                'name' => 'Poke Bowl',
                'image_path' => 'Poke_Bowl.jpg',
                'prep_time' => 10,
                'cook_time' => 0,
                'rest_time' => 0,
                'servings' => 2,
            ],
            [
                'id' => 43,
                'category_id' => 2,
                'name' => 'Porc au caramel',
                'image_path' => 'Porc_au_caramel.jpg',
                'prep_time' => 30,
                'cook_time' => 120,
                'rest_time' => 0,
                'servings' => 4,
            ],
            [
                'id' => 44,
                'category_id' => 3,
                'name' => 'Potato Pancakes',
                'image_path' => 'Potato_Pancakes.jpg',
                'prep_time' => 30,
                'cook_time' => 30,
                'rest_time' => 0,
                'servings' => 6,
            ],
            [
                'id' => 45,
                'category_id' => 4,
                'name' => 'Pâte à Crêpes',
                'image_path' => 'Pte__Crpes.jpg',
                'prep_time' => 15,
                'cook_time' => 2,
                'rest_time' => 0,
                'servings' => 6,
            ],
            [
                'id' => 46,
                'category_id' => 1,
                'name' => 'Quiche Lorraine',
                'image_path' => 'Quiche_Lorraine.jpg',
                'prep_time' => 15,
                'cook_time' => 45,
                'rest_time' => 0,
                'servings' => 4,
            ],
            [
                'id' => 47,
                'category_id' => 3,
                'name' => 'Ratatouille',
                'image_path' => 'Ratatouille.jpg',
                'prep_time' => 20,
                'cook_time' => 55,
                'rest_time' => 0,
                'servings' => 4,
            ],
            [
                'id' => 48,
                'category_id' => 1,
                'name' => 'Salmorejo',
                'image_path' => 'Salmorejo.jpg',
                'prep_time' => 10,
                'cook_time' => 2,
                'rest_time' => 120,
                'servings' => 4,
            ],
            [
                'id' => 49,
                'category_id' => 1,
                'name' => 'Soupe à l\'oignon',
                'image_path' => 'Soupe__loignon.jpg',
                'prep_time' => 25,
                'cook_time' => 20,
                'rest_time' => 0,
                'servings' => 4,
            ],
            [
                'id' => 50,
                'category_id' => 2,
                'name' => 'Spaghetti aglio olio e peperoncino',
                'image_path' => 'Spaghetti_aglio_olio_e_peperoncino.jpg',
                'prep_time' => 5,
                'cook_time' => 10,
                'rest_time' => 0,
                'servings' => 4,
            ],
            [
                'id' => 51,
                'category_id' => 2,
                'name' => 'Sweet and Sour Chicken',
                'image_path' => 'Sweet_and_Sour_Chicken.jpg',
                'prep_time' => 10,
                'cook_time' => 15,
                'rest_time' => 0,
                'servings' => 4,
            ],
            [
                'id' => 52,
                'category_id' => 3,
                'name' => 'Tachin (Persian Saffron Rice)',
                'image_path' => 'Tachin_Persian_Saffron_Rice.jpg',
                'prep_time' => 15,
                'cook_time' => 80,
                'rest_time' => 10,
                'servings' => 9,
            ],
            [
                'id' => 53,
                'category_id' => 1,
                'name' => 'Tahini',
                'image_path' => 'Tahini.jpg',
                'prep_time' => 2,
                'cook_time' => 6,
                'rest_time' => 0,
                'servings' => 16,
            ],
            [
                'id' => 54,
                'category_id' => 1,
                'name' => 'Tarte Roquefort Noix',
                'image_path' => 'Tarte_Roquefort_Noix.jpg',
                'prep_time' => 40,
                'cook_time' => 50,
                'rest_time' => 0,
                'servings' => 8,
            ],
            [
                'id' => 55,
                'category_id' => 2,
                'name' => 'Tartiflette',
                'image_path' => 'Tartiflette.jpg',
                'prep_time' => 15,
                'cook_time' => 60,
                'rest_time' => 0,
                'servings' => 4,
            ],
            [
                'id' => 56,
                'category_id' => 4,
                'name' => 'Tiramisu',
                'image_path' => 'Tiramisu.jpg',
                'prep_time' => 30,
                'cook_time' => 0,
                'rest_time' => 1440,
                'servings' => 6,
            ],
            [
                'id' => 57,
                'category_id' => 1,
                'name' => 'Velouté de champignons',
                'image_path' => 'Velout_de_champignons.jpg',
                'prep_time' => 10,
                'cook_time' => 40,
                'rest_time' => 0,
                'servings' => 3,
            ],
            [
                'id' => 58,
                'category_id' => 1,
                'name' => 'Velouté de Potimarron',
                'image_path' => 'Velout_de_Potimarron.jpg',
                'prep_time' => 20,
                'cook_time' => 40,
                'rest_time' => 0,
                'servings' => 6,
            ],
            [
                'id' => 59,
                'category_id' => 6,
                'name' => 'Viking Bread',
                'image_path' => 'Viking_Bread.jpg',
                'prep_time' => 15,
                'cook_time' => 45,
                'rest_time' => 0,
                'servings' => 8,
            ],
            [
                'id' => 60,
                'category_id' => 3,
                'name' => 'Zucchini Crumble',
                'image_path' => 'Zucchini_Crumble.jpg',
                'prep_time' => 20,
                'cook_time' => 25,
                'rest_time' => 0,
                'servings' => 6,
            ],
            [
                'id' => 61,
                'category_id' => 3,
                'name' => 'Gorgonzola Risotto',
                'image_path' => 'Gorgonzola_Risotto.jpg',
                'prep_time' => 10,
                'cook_time' => 35,
                'rest_time' => 0,
                'servings' => 4,
            ],
        ];

        foreach ($recipes as $recipe) {
            Recipe::create($recipe);
        }

        Schema::enableForeignKeyConstraints();
    }
}
