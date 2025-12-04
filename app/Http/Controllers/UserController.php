<?php

namespace App\Http\Controllers;

use App\Enums\UserRoleEnum;
use App\Http\Requests\CreateUserRequest;
use App\Http\Requests\UpdateUserRequst;
use App\Models\User;
use Couchbase\Role;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $users = User::all();

        return view('users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $roles = UserRoleEnum::options();

        return view('users.create', compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateUserRequest $request): RedirectResponse
    {
        User::create($request->validated());

        return redirect()->route('users.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user): View
    {
        return view('users.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user): View
    {
        $roles = UserRoleEnum::options();

        return view('users.edit', compact('user', 'roles'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateUserRequst $requst, User $user): RedirectResponse
    {
        $user->update($requst->validated());

        return redirect()->route('users.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user): \Illuminate\Http\RedirectResponse
    {
        $user->delete();

        return redirect()->route('users.index');
    }
}
