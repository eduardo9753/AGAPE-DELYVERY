<?php

namespace App\Http\Controllers\menu\menu;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MenuController extends Controller
{
    //
    public function index()
    {
        $categoryIds = [1, 2, 3, 4]; // IDs de las categorías que deseas filtrar

        $categoriesWithDishes = DB::connection('other_system')
            ->table('categories')
            ->leftJoin('dishes', 'categories.id', '=', 'dishes.category_id')
            ->select('categories.*', 'dishes.*')
            ->whereIn('categories.id', $categoryIds)
            ->get()
            ->groupBy('category_id');
            
        return view('menu.index', compact('categoriesWithDishes'));
    }
}
