<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Slider;

class HomeController extends Controller
{
    public function home(){

        $data = [];
        $data['sliders'] = Slider::get(['photo']);
        $data['categories'] = Category::parent()->select('id', 'slug')->with(['children' => function ($q) {
            $q->select('id', 'parent_id', 'slug');
            $q->with(['children' => function ($qq) {
                $qq->select('id', 'parent_id', 'slug');
            }]);
        }])->get();
        return view('front.home', $data);
    }



}
