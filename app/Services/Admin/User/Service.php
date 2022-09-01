<?php


namespace App\Services\Admin\User;


use App\Models\User;
use Illuminate\Support\Facades\Storage;

class Service
{
    public function store($data)
    {
        $roles = $data['roles'];
        unset($data['roles']);

        $data['profileImage'] = Storage::put('/upload/images', $data['profileImage']);
        $data['password'] = encrypt($data['password']);

        $user = User::create($data);
        $user->roles()->attach($roles);
    }

    public function update($user, $data)
    {
        $roles = $data['roles'];
        unset($data['roles']);

        $data['profileImage'] = Storage::put('/upload/images', $data['profileImage']);

        $user->update($data);
        $user->roles()->sync($roles);
    }
}
