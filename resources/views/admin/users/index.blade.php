@extends('layouts.app')

@section('content')

    <div class="panel panel-default">

        <div class="panel-heading">
            
            <a href="{{ route('user.create')}}" class="btn btn-success">Create New User</a>
        </div>

        <div class="panel-body">
            <table class="table table-hover">
                <thead>
                    <th>
                        Serial
                    </th>
                    <th>
                        Full Name
                    </th>
                    <th>
                        Email
                    </th>
                    <th>
                        Role
                    </th>
                    <th>
                        Action
                    </th>
                </thead>

                <tbody>
                @foreach($users as $key=> $user)

                    <tr>
                        <td>
                            {{ $key+1 }}
                        </td>
                        <td>
                            {{ $user->name }}
                        </td>
                        <td>
                            {{ $user->email }}
                        </td>

                        <td>
                            @if( $user->admin)
                                Admin
                                @else
                                Editor
                            @endif

                        </td>
                        <td>
                            <a href="{{route('user.edit', $user->id)}}" class="btn btn-xs btn-info">Edit</a>
                            <a href="{{route('user.delete', $user->id)}}" class="btn btn-xs btn-danger">Delete</a>

                        </td>
                    </tr>

                @endforeach
                </tbody>

            </table>
        </div>
    </div>

@stop