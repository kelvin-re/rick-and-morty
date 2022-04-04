<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Rick;

class ApiRick extends Controller
{

    public function index()
    {
        return Rick::all();
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $rick = new Rick();
        $rick['name'] = $request['name'];
        $rick['species'] = $request['species'];
        $rick['gender'] = $request['gender'];
        $rick['status'] = $request['status'];
        $rick['image'] = $request['image'];

        $rick->save();

        return redirect('/')->with('msg', 'Evento criado com sucesso!');
    }

    public function show($id)
    {
        return Rick::findOrfail($id);
    }


    public function edit($id)
    {
        //
    }

    public function update(Request $request)
    {
        $rick = Rick::findOrfail($request->id);
        $rick['name'] = $request['name'];
        $rick['species'] = $request['species'];
        $rick['gender'] = $request['gender'];
        $rick['status'] = $request['status'];
        $rick['image'] = $request['image'];

        $rick->save();

        return redirect('/');
    }

    public function destroy(Request $request)
    {
       $rick = Rick::destroy($request->id);

        return $rick;
    }
}
