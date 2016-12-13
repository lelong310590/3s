<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TaxonomyController extends Controller
{
    public function getListTaxonomies()
    {
        return view('dashboard.modules.taxonomies.list');
    }
}
