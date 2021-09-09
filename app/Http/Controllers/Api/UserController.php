<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        if ($users) {
            return response()->json(['users' => $users, 'message' => 'success  !!'], 200);
        } else {
            return response()->json([['error' => 'Unauthorized', 'message' => 'error !!'], 401]);
        }
    }

    public function show($id)
    {
        $user = User::find($id);
        if ($user) {
            return response()->json(['user' => $user, 'message' => 'success  !!'], 200);
        } else {
            return response()->json([['error' => 'Unauthorized', 'message' => 'error !!'], 401]);
        }
    }
    public function edit($id)
    {
        $user = User::find($id);
        if ($user) {
            return response()->json(['user' => $user, 'message' => 'success  !!'], 200);
        } else {
            return response()->json([['error' => 'Unauthorized', 'message' => 'error !!'], 401]);
        }
    }
    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);
        $user->update($request->all());
        return response()->json(['user' => $user, 'message' => 'updated!!'], 200);
    }

    public  function delete($id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        return response()->json('User deleted successfully', 204);
    }
}
