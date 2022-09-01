@extends('layouts.admin')
@section('content')
    <div class="main-body pt-5">
        <div class="row gutters-sm">
            <div class="col-md-8">
                <div class="card mb-3">
                    <div class="card-body">
                        <form action="{{ route('admin.user.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="userImage" class="">File</label>
                                <input type="file" value="" name="profileImage" class="form-control" id="userImage"
                                       aria-describedby="userImage">
                            </div>
                            <div class="mb-3">
                                <label for="userName" class="">Name</label>
                                <input type="text" value="" name="name" class="form-control" id="userName"
                                       aria-describedby="userName">
                                <div id="userName" class="form-text">We'll never share your name with anyone else.</div>
                            </div>
                            <div class="mb-3">
                                <label for="userEmail" class="">Email</label>
                                <input type="text" value="" name="email" class="form-control" id="userEmail"
                                       aria-describedby="userName">
                                <div id="userEmail" class="form-text">We'll never share your email with anyone else.</div>
                            </div>
                            <div class="mb-3">
                                <label for="userPhone" class="">Phone</label>
                                <input type="text" value="" name="phone" class="form-control" id="userPhone"
                                       aria-describedby="userPhone">
                            </div>
                            <div class="mb-3">
                                <label for="userAddress" class="">Address</label>
                                <input type="text" value="" name="address" class="form-control" id="userAddress"
                                       aria-describedby="userAddress">
                            </div>
                            <div class="mb-3">
                                <label for="userPassword" class="">Password</label>
                                <input type="password" value="" name="password" class="form-control" id="userPassword"
                                       aria-describedby="userPassword">
                                <div id="userPassword" class="form-text">We'll never share your password with anyone else.</div>
                            </div>
                            <div class="mb-3">
                                <label for="selectRoles" class="form-label">Select category</label>
                                <select multiple name="roles[]" id="selectRoles" class="form-select">
                                    @foreach($roles as $role)
                                        <option value="{{ $role->id }}">{{ $role->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary">Create</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
