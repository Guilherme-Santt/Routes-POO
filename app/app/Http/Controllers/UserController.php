<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public readonly User $user;
    
    public function __construct()
    {
        $this->user = new User();
    }
    
    public function index()
    {
        $users = $this->user->all();
        return View('users/users', ['users' => $users]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {   
        return View('users/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(UserRequest $request)
    {
        try{
            User::create([
                'name'=> $request->name,
                'email'=> $request->email,    
                'password' => $request->password
            ]); 
            
            return redirect()->route('users.create')->with('sucess', 
            'Usuário cadastrado com sucesso!');
            
        } catch( Exception $e){
            return back()->withInput()->with('error', 
            'Usuário não cadastrado !'); 
        }  
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}