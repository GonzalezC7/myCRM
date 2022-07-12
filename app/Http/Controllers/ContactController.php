<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $infos = Contact::all();

        return view('contacts.list-contacts', ["infos" => $infos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('contacts.create-form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(

            [

                'firstname' => 'string',
                'lastname' => 'string',
                'phone' => 'string|min:10|max:10',
                'email' => 'email:rfc,dns',
            ],
            [
                'firstname.string' => 'Le prénom est invalide.',
                'lastname.string' => 'Le nom est invalide.',
                'phone.string' => 'La numéro de téléphone est invalide.',
                'phone.min:10' => 'La numéro de téléphone à moins de 10 numéros.',
                'phone.max:10' => 'La numéro de téléphone à plus de 10 numéros.',
                'email.email' => 'Email non valide.',
            ]
        );

        Contact::create([

            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'phone' => $request->phone,
            'email' => $request->email
        ]);

        return view('contacts.success');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $profil = Contact::findOrFail($id);


        return view('contacts.list-profil', ['profil' => $profil]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $profil_edit = Contact::findOrFail($id);

        return view('contacts.profil-edit', ['profil_edit' => $profil_edit]);
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
        $profil_update = Contact::findOrFail($id);

        $profil_update->firstname = $request->firstname;
        $profil_update->lastname = $request->lastname;
        $profil_update->phone = $request->phone;
        $profil_update->email = $request->email;

        $profil_update->save();

        return view('contacts.success-update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $profil_delete = Contact::findOrFail($id);

        $profil_delete->delete();

        return view('contacts.profil-delete');
    }
}
