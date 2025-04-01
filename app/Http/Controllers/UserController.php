<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Http\Resources\UserResource;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //

        $users =  User::all();
        $users = UserResource::collection($users);

       return response()->json($users);
    }

    /**
     * !Show the form for creating a new resource.
     */
    public function create()
    {
        $title = "Crear usuario";
        return view('users.create' , compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(UserRequest $request)
    {
        $user = User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => bcrypt($request['password'])
        ]);
        return response()->json(
            [
                'message' => 'Usuario creado correctamente',
                'data' => $user
            ],201);
        // return redirect()->route('users.index')->with('success', 'Usuario creado correctamente');
    }

    /**
     * !Display the specified resource.
     */
    public function show(User $user)
    {
        //
        $title = "Mostrar informacion del usuario";
        return view('users.show', compact('title', 'user'));
    }

    /**
     * !Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        //
        $title = "Editar usuario";
        return view('users.edit', compact('title', 'user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        //
        $validated = $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:8',
        ]);

        $user->update($validated);

        return redirect()->route('users.index')->with('success', 'Usuario actualizado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $id)
    {
        $id->delete();
        return redirect()->route('users.index')->with('success', 'Usuario eliminado correctamente');
    }
}
