<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $users = User::all();
        return view('users.index', compact('users'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::find($id);
        return view('users.show',compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     */
    public function edit($user, Request $request)
    {

        $user = User::findOrFail($user);

            return view('users.edit', compact("user"));

    }

    /**
     * Update the specified resource in storage.
     *
     *
     */
    public function update(Request $request, $user)
    {
        $formData = $request->all();
        $user = User::findOrFail($user);
            $user->update($formData);

            return redirect('users');
        }


    /**
     * Remove the specified resource from storage.
     *
     *
     *
     */
    public function destroy($user)
    {
        $user->delete();
        return redirect('users');
    }
}
