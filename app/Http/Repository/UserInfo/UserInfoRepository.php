<?php

namespace App\Http\Repository\UserInfo;

use App\Models\UserInfo;
use Carbon\Carbon;

class UserInfoRepository implements UserInfoInterface
{

    public function create(array $attributes)
    {
        return UserInfo::create([
            'user_id' => $attributes['user_id'],
            'first_name' => $attributes['first_name'],
            'last_name' => $attributes['last_name'],
            'mobile' => $attributes['mobile'],
            'address' => $attributes['address'],
            'gender' => $attributes['gender'],
            'created_at'=>carbon::now()
        ]);
    }
}
