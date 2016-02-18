<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use DB;
use App\Year;
use App\Poi;


class PagesController extends Controller
{
  public function index()
  {
    $years = Year::all();
    foreach($years as $y)
    {
      $y->languages = $y->languages;
      $y->pois = Poi::where('year_id', $y->id)->get();
      foreach($y->pois as $p)
      {
        $p->descriptions = $p->descriptions;
      }
    }
    return view('welcome', compact('years'));
  }
}
