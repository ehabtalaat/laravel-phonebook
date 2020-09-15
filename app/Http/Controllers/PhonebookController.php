<?php

namespace App\Http\Controllers;

use App\Phonebook;
use Illuminate\Http\Request;
use App\Http\Requests\phonebookrequest;
class PhonebookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('phonebook');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

  
    public function store(phonebookrequest $request)
    {
        Phonebook::create([
        'name' => $request->name,
        'email' => $request->email,
        'phone' =>$request->phone
        ]);
    }
    public function getdata(){
       return Phonebook::all();
    }
    public function getit(Phonebook $phonebook){
      return  Phonebook::find($phonebook);
    }
    public function show(Phonebook $phonebook)
    {
      return Phonebook::find($phonebook)->get();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Phonebook  $phonebook
     * @return \Illuminate\Http\Response
     */
    public function edit(Phonebook $phonebook)
    {
        return $phonebook;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Phonebook  $phonebook
     * @return \Illuminate\Http\Response
     */
    public function update(phonebookrequest $request, Phonebook $phonebook)
    {
        $phonebook->update([
            'name' => $request->name,
            'phone' => $request->phone,
            'email' => $request->email
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Phonebook  $phonebook
     * @return \Illuminate\Http\Response
     */
    public function destroy(Phonebook $phonebook)
    {
        $phonebook->delete();
    }
}
