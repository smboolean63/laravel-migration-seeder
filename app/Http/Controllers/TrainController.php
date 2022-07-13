<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Train;

class TrainController extends Controller
{
    public function index()
    {
        $trains = Train::where('date_departure', date('Y-m-d'))->get();

        return view('index', compact('trains'));
    }

    public function show($id)
    {
        $train = Train::findOrFail($id);

        return view('show', compact('train'));
    }

    public function cancelledTrains()
    {
        $trains = Train::where('cancelled', true)->get();

        return view('cancelled-trains', compact('trains')); 
    }
}
