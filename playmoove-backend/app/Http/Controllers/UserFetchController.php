<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserFetchController extends Controller
{
    /**
     * Fetch the authenticated user's details.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function fetchUser()
    {
        $user = Auth::user();

        if (!$user) {
            return response()->json(['message' => 'Unauthorized'], 401);
        }

        return response()->json(['user' => $user], 200);
    }
}