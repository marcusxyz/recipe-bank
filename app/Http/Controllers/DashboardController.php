<?php

namespace App\Http\Controllers;

use App\Models\Recipe;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $recipes = Recipe::get();
        $user = Auth::user();
        $name = Recipe::find('user_id');

        return view('dashboard', [
            'recipes' => $recipes,
            'user' => $user,
            'name' => $name
        ]);
    }
}
