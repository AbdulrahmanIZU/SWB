<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Faker\Factory as Faker;

class ArticleController extends Controller
{

    public function index()
    {
        $faker = Faker::create();
        $articles = [];
    
        for ($i = 0; $i < 10; $i++) {
            $articles[] = [
                'id' => $i + 1,
                'title' => $faker->sentence,
                'body' => $faker->paragraph,
                'created_at' => $faker->dateTime,
                'updated_at' => $faker->dateTime,
            ];
        }
    
        return response()->json($articles);
    }
    

    public function show($id)
{
    $faker = Faker::create();
    $article = [
        'id' => $id,
        'title' => $faker->sentence,
        'body' => $faker->paragraph,
        'created_at' => $faker->dateTime,
                'updated_at' => $faker->dateTime,
    ];

    return response()->json($article);
}

}