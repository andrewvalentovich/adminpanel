@extends('layouts.admin')
@section('content')
    <div class="row py-5 flex-column">
        <h1>Users list page</h1>
            <table class="shadow-lg table block bg-white px-0 mt-4">
                <thead>
                    <tr class="bg-purple">
                        <th>Id</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($users as $user)
                        <tr class="py-2">
                            <td>{{ $user->id }}</td>
                            <td><a href="{{ route('admin.user.show', ['user' => $user->id]) }}">{{ $user->name }}</a></td>
                            <td>{{ $user->email }}</td>
                            <td>
                                <div class="d-flex">
                                    <a class="btn btn-outline-primary" href="{{ route('admin.user.edit', ['user' => $user->id]) }}">Edit</a>
                                    <form action="{{ route('admin.user.delete', ['user' => $user]) }}" method="post" class="mx-1">
                                        @csrf
                                        @method('delete')
                                        <input type="submit" value="Delete" class="btn btn-outline-danger">
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        <div class="pt-5">
            {{ $users->withQueryString()->links() }}
        </div>
    </div>
@endsection
