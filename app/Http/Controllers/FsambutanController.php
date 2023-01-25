<?php

namespace App\Http\Controllers;

use App\Models\Sambutan;
use Illuminate\Http\Request;
use Carbon\Carbon;


class FsambutanController extends Controller
{
    /**
     * index
     *
     * @return void
     */
    public function index()
    {
        $sambutans = Sambutan::latest()->take(1)->get();

        return view('front.sambutan.index', compact('sambutans'));
    }
}
