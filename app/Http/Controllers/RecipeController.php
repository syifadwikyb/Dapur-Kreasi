<?php

namespace App\Http\Controllers;

use App\Helpers\ApiHelper;

class RecipeController extends Controller
{
    public function getRandomRecipes()
    {
        $params = [
            'number' => 12
        ];

        // Cek output respons API secara keseluruhan
        $response = ApiHelper::get('random', $params);
        $data = $response['recipes'];

        // Kirim data ke view
        return view('layouts.home', compact('data'));
    }

    public static function getDessertCategory($category)
    {
        $params = [
            'number' => 40,
            'query' => $category
        ];

        $response = ApiHelper::get('complexSearch', $params);
        $data = $response['results'];

        return view('layouts.layout_category.category_dessert', compact('data'));
    }

    public static function getVegetarianCategory($category)
    {
        $params = [
            'number' => 40,
            'query' => $category
        ];

        $response = ApiHelper::get('complexSearch', $params);
        $data = $response['results'];

        return view('layouts.layout_category.category_vegetarian', compact('data'));
    }

    public static function getMeatCategory($category)
    {
        $params = [
            'number' => 40,
            'query' => $category
        ];

        $response = ApiHelper::get('complexSearch', $params);
        $data = $response['results'];

        return view('layouts.layout_category.category_meat', compact('data'));
    }

    public static function getFishCategory($category)
    {
        $params = [
            'number' => 40,
            'query' => $category
        ];

        $response = ApiHelper::get('complexSearch', $params);
        $data = $response['results'];

        return view('layouts.layout_category.category_fish', compact('data'));
    }

    public static function getChickenCategory($category)
    {
        $params = [
            'number' => 40,
            'query' => $category
        ];

        $response = ApiHelper::get('complexSearch', $params);
        $data = $response['results'];

        return view('layouts.layout_category.category_chicken', compact('data'));
    }

    public static function getSoupCategory($category)
    {
        $params = [
            'number' => 40,
            'query' => $category
        ];

        $response = ApiHelper::get('complexSearch', $params);
        $data = $response['results'];

        return view('layouts.layout_category.category_soup', compact('data'));
    }

    public static function getSeafoodCategory($category)
    {
        $params = [
            'number' => 40,
            'query' => $category
        ];

        $response = ApiHelper::get('complexSearch', $params);
        $data = $response['results'];

        return view('layouts.layout_category.category_seafood', compact('data'));
    }

    public static function getPastaCategory($category)
    {
        $params = [
            'number' => 40,
            'query' => $category
        ];

        $response = ApiHelper::get('complexSearch', $params);
        $data = $response['results'];

        return view('layouts.layout_category.category_pasta', compact('data'));
    }

    public static function getBreadCategory($category)
    {
        $params = [
            'number' => 40,
            'query' => $category
        ];

        $response = ApiHelper::get('complexSearch', $params);
        $data = $response['results'];

        return view('layouts.layout_category.category_bread', compact('data'));
    }

    public function getDetailRecipes($id)
    {
        $data = ApiHelper::get("{$id}/information");
        return view('layouts.detail', compact('data'));
    }
}
