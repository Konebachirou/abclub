<?php

namespace App\Http\Controllers\abclub;

use Illuminate\Http\Request;
use App\Models\FormerPresident;
use App\Http\Controllers\Controller;
use App\Models\Office;

class AboutController extends Controller
{
    public function about()
    {
        $lastPresidents = FormerPresident::all();
        $office = Office::latest()->first();
        return view('users.global.about', ['lastPresidents' => $lastPresidents, 'office' => $office]);
    }
}
