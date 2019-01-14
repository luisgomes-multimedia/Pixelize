<?php

namespace App\Http\Controllers;

use App\FormRequest;
use Illuminate\Http\Request;

class FormRequestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return FormRequest::all();
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

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $validated = $request->validate([
            'name' => 'required',
            'email' => 'bail|required|email',
            'phoneNumber' => 'required'
        ]);

        if($validated->fails()) {
            return response()->json($validated->errors(),422);
        }


        $model = new FormRequest;
        $model->name = $request->name;
        $model->email = $request->email;
        $model->phoneNumber = $request->phoneNumber;
        $model->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\FormRequest  $formRequest
     * @return \Illuminate\Http\Response
     */
    public function show(FormRequest $formRequest)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\FormRequest  $formRequest
     * @return \Illuminate\Http\Response
     */
    public function edit(FormRequest $formRequest)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\FormRequest  $formRequest
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, FormRequest $formRequest)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\FormRequest  $formRequest
     * @return \Illuminate\Http\Response
     */
    public function destroy(FormRequest $formRequest)
    {
        //
    }
}
