<?php

namespace App\Http\Controllers;

use App\Models\Package;
use Illuminate\Http\Request;

class PackageController extends Controller
{
    public function store()
    {
        $package = new Package();

        $package->fill(request()->all())->save();

        $package->languages()->attach(array_unique(request()->get('languages')));

        return $package->load('fieldOfText', 'type', 'languages');
    }
}
