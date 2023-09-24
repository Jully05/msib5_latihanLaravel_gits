<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class profile extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $name = 'Julyana Fayumi Hidayat';
        $location = 'Banten-Bandung';
        $age = '20 Tahun';

        $data['name'] = $name;
        $data['location'] = $location;
        $data['age'] = $age;
        return view('profile/index', compact('name', 'location', 'age'));
    }
}
