@extends('layouts.app')

@section('content')

    <div class="panel panel-default">

        <div class="panel-heading">
            Style Categories
        </div>

        <div class="panel-body">
            <table class="table table-hover">
                <thead>
                <th>
                    Style Category Name
                </th>
                <th>
                    Editing
                </th>
                <th>
                    Deleting
                </th>
                </thead>

                <tbody>
                @foreach($stylecategories as $stylecategory)

                    <tr>
                        <td>
                            {{$stylecategory->name}}
                        </td>
                        <td>
                            <a href="{{route('category.edit', ['id' => $stylecategory->id])}}" class="btn btn-xs btn-info">Edit</a>

                        </td>
                        <td>
                            <a href="{{route('category.delete', ['id'=> $stylecategory->id])}}" class="btn btn-xs btn-danger">Delete</a>
                        </td>
                    </tr>

                @endforeach
                </tbody>

            </table>
        </div>
    </div>

@stop