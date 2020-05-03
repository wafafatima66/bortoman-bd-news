@extends('layouts.app')

@section('content')

    <div class="panel panel-default">

        <div class="panel-heading">
            Categories
        </div>

        <div class="panel-body">
            <table class="table table-hover">
                <thead>
                <th>
                    Poll Question
                </th>
                
                <th>
                    Editing
                </th>
                <th>
                    Deleting
                </th>
                </thead>

                <tbody>
                @foreach($votes->sortByDesc('id') as $vote)

                    <tr>
                        <td>
                            {{$vote->question}}
                        </td>
                        
                        <td>
                            <a href="{{route('vote.edit', ['id' => $vote->id])}}" class="btn btn-xs btn-info">Edit</a>

                        </td>
                        <td>
                            <a href="{{route('vote.delete', ['id'=> $vote->id])}}" class="btn btn-xs btn-danger">Delete</a>
                        </td>
                    </tr>

                @endforeach
                </tbody>

            </table>
        </div>
    </div>

@stop