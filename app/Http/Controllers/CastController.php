<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CastController extends Controller
{
    public function index()
    {
        $cast = DB::table('casts')->get();
        return view('pages.cast.index', compact('cast'));
    }

    public function create()
    {
        return view('pages.cast.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'age' => 'required',
            'bio' => 'required'
        ]);

        $query = DB::table('casts')->insert([
            "name" => $request->name,
            "age" => $request->age,
            "bio" => $request->bio
        ]);

        return redirect('/cast');
    }

    public function show($id)
    {
        $cast = DB::table('casts')->where('id', $id)->first();
        return view('pages.cast.detail', compact('cast'));
    }

    public function edit($id)
    {
        $cast = DB::table('casts')->where('id', $id)->first();
        return view('pages.cast.edit', compact('cast'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'age' => 'required',
            'bio' => 'required'
        ]);

        DB::table('casts')
            ->where('id', $id)
            ->update([
                "name" => $request->name,
                "age" => $request->age,
                "bio" => $request->bio
            ]);

        return redirect('/cast');
    }

    public function destroy($id)
    {
        DB::table('casts')->where('id', $id)->delete();

        return redirect('/cast');
    }
}
