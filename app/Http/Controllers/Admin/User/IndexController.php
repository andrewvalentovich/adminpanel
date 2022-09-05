<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Controller;
use App\Http\Filters\Admin\User\UserFilter;
use App\Http\Requests\Admin\User\FilterRequest;
use App\Models\User;

class IndexController extends Controller
{
    public function __invoke(FilterRequest $request)
    {
        $data = $request->validated();
        $filter = app()->make(UserFilter::class, ['queryParams' => array_filter($data)]);
        $users = User::filter($filter)->orderBy('id', 'desc')->paginate(10);
        return view('admin.user.index', compact('users'));
    }
}
