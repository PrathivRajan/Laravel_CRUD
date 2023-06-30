<?php

namespace App\Http\Controllers;
use App\Models\IndividualProduction;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $individualproductionDataList = IndividualProduction::where('status', 'active')->get();
        return view('dashboard.index', ['individualproductionDataList' => $individualproductionDataList]);
    }
}
