@extends('layouts.admin')
@section('content')
    <div class="main-body pt-5">
        <div class="row gutters-sm">
            <div class="col-md-4 mb-3">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex flex-column align-items-center text-center">
                            <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Admin" class="rounded-circle" width="150">
                            <div class="mt-3">
                                <h4>{{ $user->name }}</h4>
                                <p class="text-secondary mb-1">{{ $user->email }}</p>
                                <p class="text-muted font-size-sm">Bay Area, San Francisco, CA</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="card mb-3">
                    <div class="card-body">
                        <form action="{{ route('admin.user.update', ['user' => $user]) }}" method="post">
                            @csrf
                            @method('put')
                            <div class="mb-3">
                                <label for="userImage" class="">File</label>
                                <input type="file" value="{{ $user->profileImage }}" name="profileImage" class="form-control" id="userImage"
                                       aria-describedby="userImage">
                            </div>
                            <div class="mb-3">
                                <label for="userName" class="">Name</label>
                                <input type="text" value="{{ $user->name }}" name="name" class="form-control" id="userName"
                                       aria-describedby="userName">
                                <div id="userName" class="form-text">We'll never share your name with anyone else.</div>
                            </div>
                            <div class="mb-3">
                                <label for="userEmail" class="">Email</label>
                                <input type="text" value="{{ $user->email }}" name="email" class="form-control" id="userEmail"
                                       aria-describedby="userName">
                                <div id="userEmail" class="form-text">We'll never share your email with anyone else.</div>
                            </div>
                            <div class="mb-3">
                                <label for="userPhonel" class="">Phone</label>
                                <input type="text" value="{{ $user->phone }}" name="phone" class="form-control" id="userPhonel"
                                       aria-describedby="userPhone">
                            </div>
                            <div class="mb-3">
                                <label for="userAddress" class="">Address</label>
                                <input type="text" value="{{ $user->address }}" name="address" class="form-control" id="userAddress"
                                       aria-describedby="userAddress">
                            </div>
                            <div class="mb-3">
                                <label for="selectRoles" class="form-label">Select category</label>
                                <select multiple name="roles[]" id="selectRoles" class="form-select">
                                    @foreach($roles as $role)
                                        <option
                                            @foreach($user->roles as $userRole)
                                                {{ $role->id === $userRole->id ? ' selected ' : ''}}
                                            @endforeach

                                            value="{{ $role->id }}">{{ $role->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

