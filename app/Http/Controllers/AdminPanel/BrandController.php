<?php

namespace App\Http\Controllers\AdminPanel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Brand;

class BrandController extends Controller
{
    public function BrandView(){
        $brands = Brand::latest()->get();
        return view('admin.brand.brand_view', compact('brands'));
    }
}
