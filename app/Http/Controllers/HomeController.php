<?php

namespace App\Http\Controllers;

use App\Models\FieldOfText;
use App\Models\Language;
use App\Models\PackageType;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home')
            ->with([
                'languages' => Language::query()->get()->toArray(),
                'package_types' => PackageType::query()->get()->toArray(),
                'field_of_texts' => FieldOfText::query()->get()->toArray()
            ]);
    }
}
