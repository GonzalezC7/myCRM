<?php

namespace App\Http\Controllers;

use App\Models\Entreprise;
use Illuminate\Http\Request;

class EntrepriseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $entreprises = Entreprise::all();
        return view('entreprises.list-entreprises', ['entreprises' => $entreprises]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('entreprises.create-form');
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

            'name' => 'string',
            'status' => 'string',
            'siren' => 'numeric|digits_between:9,9',
            'email' => 'email:rfc,dns',
            'phone' => 'string'
        ]);

        [
            'name.string' => 'Le nom est invalide.',
            'status.string' => 'Le statuts est invalide',
            'siren.numeric' => 'Le numéro de SIREN est invalide.',
            'siren.digits_between' => 'Le numéro SIREN doit comporter une suite de 9 chiffres',
            'email.email' => 'Email non valide.',
            'phone.string' => 'Numéro de téléphone non valide.'
        ];

        Entreprise::create([
            'name' => $request->name,
            'status' => $request->status,
            'siren' => $request->siren,
            'email' => $request->email,
            'phone' => $request->phone
        ]);

        return view('entreprises.success');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $infos = Entreprise::findOrFail($id);

        return view('entreprises.list-entreprise', ['infos' => $infos]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $entreprise_edit = Entreprise::findOrFail($id);

        return view('entreprises.entreprise-edit', ['entreprise_edit' => $entreprise_edit]);
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
        $entreprise_update = Entreprise::findOrFail($id);

        $entreprise_update->name = $request->name;
        $entreprise_update->status = $request->status;
        $entreprise_update->siren = $request->siren;
        $entreprise_update->email = $request->email;
        $entreprise_update->phone = $request->phone;

        $entreprise_update->save();

        return view('entreprises.success-update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $entreprise_delete = Entreprise::findOrFail($id);

        $entreprise_delete->delete();

        return view('entreprises.entreprise-delete');
    }
}
