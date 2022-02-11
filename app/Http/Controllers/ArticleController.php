<?php

namespace App\Http\Controllers;
use App\Models\Hebergement;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function show($id)
    {
        $hebergement = Hebergement::find($id);
        return view('articles.show',compact('hebergement'));
    }
}
