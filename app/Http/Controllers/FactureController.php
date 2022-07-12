<?php

namespace App\Http\Controllers;

use App\Models\Facture;
use Illuminate\Http\Request;

class FactureController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $factures = Facture::all();
        return view('factures.list-factures', ['factures' => $factures]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('factures.create-facture');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([

            'titre' => 'required',
            'date' => 'date',
            'montantHT' => 'numeric',
            'tva' => 'numeric',
        ]);

        [
            'titre.required' => 'Le titre est obligatoire.',
            'date.date' => 'La date est invalide',
            'montantHT.numeric' => 'Le Montant HT doit être numéric.',
            'tva.numeric' => 'La TVA doit être numéric.'
        ];

        $new_date = $request->date;

        $number_rand = rand(0, 9) . rand(0, 9);

        $new_numero = $new_date . '-' . $number_rand;

        Facture::create(
            [
                'titre' => $request->titre,
                'date' => $request->date,
                'numero' => $new_numero,
                'montantHT' => $request->montantHT,
                'tva' => $request->tva,
                'montantTTC' => $request->montantHT * (1 + $request->tva / 100),
            ]
        );
        return view('factures.success');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $facture = Facture::findOrFail($id);

        return view('factures.list-facture', ['facture' => $facture]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $facture_edit = Facture::findOrFail($id);

        return view('factures.facture-edit', ['facture_edit' => $facture_edit]);
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
        $facture_update = Facture::findOrFail($id);

        $facture_update->titre = $request->titre;
        $facture_update->date = $request->date;
        $facture_update->numero = $request->numero;
        $facture_update->montantHT = $request->montantHT;
        $facture_update->tva = $request->tva;
        $facture_update->montantTTC = $request->montantTTC;

        $facture_update->save();

        return view('factures.success-update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $facture_delete = Facture::findOrFail($id);

        $facture_delete->delete();

        return view('factures.facture-delete');
    }
}
