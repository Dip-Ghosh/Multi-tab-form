<?php

namespace App\Http\Controllers;

use App\Http\Repository\User\UserInterface;
use App\Http\Repository\UserInfo\UserInfoInterface;
use App\Http\Requests\UserValidationRequest;
use Exception;


class UserController extends Controller
{

    protected $user;
    protected $userInfo;
    public function __construct(UserInterface $user,UserInfoInterface $userInfo)
    {
        $this->user = $user;
        $this->userInfo = $userInfo;
    }



    public function store(UserValidationRequest $request)
    {
        try{
            $user = $this->user->create($request->only('email','password'));
            $request['user_id'] = $user->id;
            $this->userInfo->create($request->only('first_name','last_name','mobile','address','user_id','gender'));
            return redirect()->back()->with('success','User Created Successfully');

        }catch (Exception $e) {
            throw new Exception($e->getMessage());
        }
    }


}
