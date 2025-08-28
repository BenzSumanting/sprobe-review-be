<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Repositories\UserRepository;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function __construct(protected UserRepository $userRepo) {}

    public function __invoke(LoginRequest $request)
    {
        return $this->userRepo->login($request->email, $request->password);
    }
}
