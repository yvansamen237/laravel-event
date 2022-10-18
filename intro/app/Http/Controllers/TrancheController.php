<?php

namespace App\Http\Controllers;

use App\Models\Formation;
use App\Models\Tranche;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class TrancheController extends Controller
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
        $formations = Formation::all();
        return view("tranche.create", compact("formations"));
    }

    public function store(Request $request)
    {
        //      dd($request);
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'price' => 'required',
            'formation_id' => 'required',
        ]);
        if ($validator->fails()) {
            Toastr::error('Veillez verifier tous les champs', '', ["positionClass" => "toast-top-right"]);
            return back();
        }
        try {
            $formation = Formation::find($request->formation_id);
            if ($formation == null) {
                return back();
            }
            $tranches = Tranche::all()->where('formation_id', '=', $request->formation_id)->count();
            if ($tranches == 0) {
                if ($formation->price > $request->price) {
                    $tran = new Tranche();
                    $tran->name = $request->name;
                    $tran->price = $request->price;
                    $tran->formation_id = $request->formation_id;
                } else {
                    dd("error 00");
                }
                try {
                    $tran->save();
                    dd("succes 01 ");
                    return back();
                } catch (\Exception $ex) {
                    dd("error 01 ");
                    return back();
                }
            } else {
                $total = DB::table("tranches")->where('formation_id', '=', $request->formation_id)->sum('price');
                $toPay = $formation->price - $total;
                if ($toPay >= $request->price) {
                    $tranche = new Tranche();
                    $tranche->name = $request->name;
                    $tranche->price = $request->price;
                    $tranche->formation_id = $request->formation_id;
                    $tranche->save();
                    dd("succes 02 ");

                } else {
                    dd("error 004");
                }
            }


            Toastr::success('Enregistrement effectue', 'Message', ["positionClass" => "toast-top-center"]);
        } catch (\Exception $ex) {
            dd($ex);

            Toastr::error('an error occured', '', ["positionClass" => "toast-top-right"]);
        }
        return back();
    }

    public function edit($id)
    {
        $tranche = formation::find($id);
        if ($tranche != null) {
            return view("formation.create", compact("formation"));
        }
        return back();
    }

    public function update(Request $request)
    {
        $tranche = formation::find($request->id);
        if ($tranche == null) {
            return back();
        }
        $tranche->name = $request->name;
        $tranche->price = $request->price;
        $tranche->description = $request->description;
        $tranche->save();
        return redirect("/index");
    }

    public function delete($id)
    {
        formation::find($id)->delete();
        return back();
    }
}
