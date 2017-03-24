<?php

namespace App\Http\Controllers;

use App\Models\Frog;
use Illuminate\Http\Request;

class FrogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('index');
    }

    /*
     * Return all frogs 
     */
    public function frogs($paginate = false)
    {
        $frogs = $paginate ? Frog::paginate(10) : Frog::all();

        return response()->json($frogs);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //return view('create.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        $this->validate(request(), $this->rules());
        Frog::forceCreate(request()->all());

        return ['message' => 'successful'];
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $frog = Frog::firstOrFail($id);
        response()->json($frog);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $frog = Frog::firstOrFail($id);
        response()->json($frog);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $frog = Frog::firstOrFail($id);
        $frog->fill($request->all())->save();

        return ['message' => "Frog details have been updated."];
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $frog = Frog::findOrFail($id);
        $frog->delete();

        return ['message' => "Murderer, You killed an innocent frog."];
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function mate($groomId, $brideId)
    {
        if (!Frog::mate($groomId, $brideId))
        {
            return ['message' => "This two frogs can not mate"];
        }

        return ['message' => "Happy mating"];
    }

    // Rules to be used in validation
    public function rules()
    {
        return [
            'name' => 'required|max:32',
            'date_of_birth' => 'required|date',
            'date_of_dead' => 'date',
            'dad_id' => 'required|exists:frogs,id',
            'mom_id' => 'required|exists:frogs,id',
            'partner_id' => '',
            'gender' => 'required|in:"0","1"',
        ];
    }
}
