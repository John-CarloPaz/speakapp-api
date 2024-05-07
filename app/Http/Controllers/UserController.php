<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegistrationRequest;
use App\Services\RegistrationService;

class UserController extends Controller
{
    public function login(LoginRequest $request): \Illuminate\Http\JsonResponse
    {
        return (new RegistrationService($request->validated()))->login();
    }

    public function register(RegistrationRequest $request): \Illuminate\Http\JsonResponse
    {
        return (new RegistrationService($request->validated()))->register();
    }

}
