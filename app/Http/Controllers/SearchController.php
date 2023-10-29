<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Language;
use App\Models\Place;
use App\Models\User;

class SearchController extends Controller
{
    public function index(Request $request)
    {
        $search_about_me = $request->input('about_me');
        $search_place = $request->input('place');
        $search_category = $request->input('category');
        
        $query = User::query();
        if(!empty($search_about_me) || !empty($search_place) || !empty($search_category)) {
            $query->select('users.*', 'place_user.id as place_user_id', 'place_user.place_id');
            $query->leftJoin('place_user', function ($query) {
                $query->on('users.id', '=', 'place_user.user_id');
            });
        }
        
        
        
        if(!empty($search_about_me)) {
            $query->where('about_me', 'LIKE', "%{$search_about_me}%");
        }
        
        if(!empty($search_place)) {
            $query->where('place_id', 'LIKE', $search_place);
        }

        if(!empty($search_category)) {
            $query->where('category', 'LIKE', "%{$search_category}%");
        }
        $items = $query->get();
        $places = Place::all();
        $user_list = User::all();  #いるかわからん
        return view('home', compact('items', 'search_category', 'search_place', 'places', 'user_list', 'search_about_me'));
            
    }
    
}

