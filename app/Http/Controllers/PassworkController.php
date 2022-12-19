<?php

namespace App\Http\Controllers;

use App\Models\Passwork;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PassworkController extends Controller
{

    public function index(Request $request)
    {
        $texto=trim($request->get('texto'));
        $passwork=DB::table('passwork')
            ->select('name')
            ->where('name', 'LIKE', '%' .$texto. '%')
            ->orderBy('name', 'asc');
        $data['passworks'] = Passwork::orderBy('id', 'desc')->paginate(8);
        return view('passwork.index', $data, compact('passwork', 'texto'));
    }

 
    public function create()
    {   
        return view('passwork.create');
    }

   
    public function store(Request $request)
    {

        request()->validate(Passwork::$rules, Passwork::$mesaje);

        $dataPasswork = request()->except('_token');

        Passwork::create($dataPasswork);
        
        return redirect('passwork')->with('success', 'Passwork Creada');
    }

 
    public function show($id)
    {
        $passwork = Passwork::find($id);

        return view('passwork.show', compact('passwork'));
    }


    public function edit($id)
    {
        $passwork = Passwork::findOrFail($id);
        return view('passwork.edit', compact('passwork'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Passwork  $passwork
     * @return \Illuminate\Http\Response
     */
    // public function update(Request $request, $id)
    // {
    //     $dataPasswork = request()->except(['_token', '_method']);
    //     Passwork::where('id', '=', $id)->update($dataPasswork);

    //     $passwork = Passwork::findOrFail($id);
    //     return view('passwork.edit', compact('passwork'));

    // }


    public function update(Request $request, Passwork $passwork)
    {
        request()->validate(Passwork::$rules, Passwork::$mesaje);

        $passwork->update($request->all());

        return redirect()->route('passwork.index')->with('success', 'Se actualizo la Passwork');
    }


    public function destroy($id)
    {
        Passwork::destroy($id);
        return redirect('passwork')->with('success', 'Passwork borrada');
    }
}
