<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class home extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $name = 'Julyana Fayumi Hidayat';
        $location = 'Indonesia';

        $data['name'] = $name;
        $data['location'] = $location;

        return view ('halamanDepan/index', $data);
    }
}
