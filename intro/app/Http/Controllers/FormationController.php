<?php

namespace App\Http\Controllers;

use App\Models\Formation;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class FormationController extends Controller
{
    public function index(Request $request)
    {

        $formations = Formation::all();
        if ($request->wantsJson()) {
            return response()->json(["formation_list" => $formations]);
        }
        return view("formation.index", compact('formations'));
    }

    public function create()
    {
        return view("formation.create");
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'price' => 'required',
        ]);
        if ($validator->fails()) {
            Toastr::error('Veillez verifier tous les champs', '', ["positionClass" => "toast-top-right"]);
            return back();
        }
        try {
            $formation = new formation();
            $formation->name = $request->name;
            $formation->price = $request->price;
            $formation->description = $request->description;
            $formation->save();
            Toastr::success('Enregistrement effectue', 'Message', ["positionClass" => "toast-top-center"]);
        } catch (\Exception $ex) {
            Toastr::error('an error occured', '', ["positionClass" => "toast-top-right"]);
        }
        return back();
    }

    public function edit($id)
    {
        $formation = formation::find($id);
        if ($formation != null) {
            return view("formation.create", compact("formation"));
        }
        return back();
    }

    public function update(Request $request)
    {
        $formation = formation::find($request->id);
        if ($formation == null) {
            return back();
        }
        $formation->name = $request->name;
        $formation->price = $request->price;
        $formation->description = $request->description;
        $formation->save();
        return redirect("/index");
    }

    public function delete($id)
    {
        formation::find($id)->delete();
        return back();
    }
}
