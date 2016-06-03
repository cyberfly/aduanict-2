<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class AssetController extends Controller
{
    public function getAssetIctnoAttribute()
    {
        return $this->attributes['ict_no'] .' '. $this->attributes['butiran'];
    }
}
