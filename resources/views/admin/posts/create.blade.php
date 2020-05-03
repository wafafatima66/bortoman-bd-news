@extends('layouts.app')

@section('content')

    @if(count($errors) > 0)

        <ul class="list-group">
            @foreach($errors->all() as $error)
                <li class="list-group-item text-danger">
                    {{$error}}
                </li>
            @endforeach
        </ul>

    @endif

    <div class="panel panel-default">
        <div class="panel-heading">
            Create a new Post
        </div>

        <div class="panel-body">
            <form action="{{ route('post.store') }}" method="post" enctype="multipart/form-data">
                {{csrf_field()}}

                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" name="title" class="form-control">
                </div>


                <div class="form-group">
                    <label for="featured">Select Featured Image</label><br>
                    <span class="btn btn-default btn-file">
                         <input type="file" name="featured">
                    </span>
                </div>
                <div class="form-group">
                    <label for="featured">Select Another Image</label><br>
                    <span class="btn btn-default btn-file">
                         <input type="file" name="featured_2">
                    </span>
                </div>


                <div class="form-group col-sm-6">
                    <label for="category">Select a Category</label>
                    <select name="category_id" id="category" class="form-control">
                        @foreach($categories as $category)
                            <option value="{{$category->id}}">{{$category->name}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group col-sm-6">
                    <label for="stylecategory">Select Frontpage Style</label>
                   
                    <select name="style_category_id" id="style_category_id" class="form-control">
                        <option value="-1"></option>
                        @foreach($stylecategories as $style_category)
                            <option value="{{$style_category->id}}">{{$style_category->name}}</option>
                        @endforeach
                    </select>
                </div>


                <div class="form-group">
                    <label for="tags">Select Tags</label>
                    @foreach($tags as $tag) 
                        <div class="checkbox">
                            <label for=""><input type="checkbox" name="tags[]" value="{{ $tag->id }}"> {{ $tag->tag }} </label>
                        </div>
                    @endforeach
                </div>


                <div class="form-group">
                    <label for="title">Content</label>
                    <textarea name="content" id="content" cols="5" rows="5" class="form-control widgEditor"></textarea>
                </div>

                


                <div class="form-group">
                    <div class="text-center">
                        <button class="btn btn-success" type="submit">
                            Save Post
                        </button>
                    </div>
                </div>

            </form>
        </div>
    </div>

@stop