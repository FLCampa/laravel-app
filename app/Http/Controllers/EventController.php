<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EventController extends Controller
{
  public function index()
  {
    $name = 'Felipe';
    $age = '24';

    $arr = [11, 24, 38, 42, 56];

    $names = ['Felipe', 'João', 'Maria'];

    return view(
      'welcome',
      [
        'name' => $name,
        'age' => $age,
        'arr' => $arr,
        'names' => $names
      ]
    );
  }

  // create (get)
  public function create()
  {
    return view('events.create');
  }
}
