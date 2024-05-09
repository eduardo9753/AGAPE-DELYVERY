<?php

namespace App\Http\Controllers\about\about;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AboutController extends Controller
{
    //
    public function index()
    {
        $categoryIds = [3, 4, 5 ,6 ,7 ,8, 9, 10 ,11 ,12 ,18]; // IDs de las categorías que deseas filtrar

        $categoriesWithDishes = DB::connection('other_system')
            ->table('categories')
            ->leftJoin('dishes', 'categories.id', '=', 'dishes.category_id')
            ->select('categories.*', 'dishes.*')
            ->whereIn('categories.id', $categoryIds)
            ->get()
            ->groupBy('category_id');

        return view('about.index', compact('categoriesWithDishes'));
    }
}
