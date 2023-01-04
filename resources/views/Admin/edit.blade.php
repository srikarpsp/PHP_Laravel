@extends('layouts.master')


@section('content')

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div>
        <!--    Form to edit item -->
        <form action="{{url('/Admin', $meals->id)}}" method="post">
            {{ csrf_field() }}
            {{ method_field('PUT') }}
            <div class="form-group">
                <label for="description">title :</label>
                <input type="text" class="form-control" name="title" id="title" value="{{old('title', $meals->title)}}"
                       placeholder="Enter title">
                <span style="color: red">

            </span>
            </div>
            <div class="form-group">
                <label for="description">description :</label>
                <input type="text" class="form-control" id="description" name="description"
                       value="{{old('description', $meals->description)}}" placeholder="Enter description">
                <span style="color: red">

            </span>
            </div>
            <div class="form-group">
                <label for="cost">cost :</label>
                <input type="text" name="cost" value="{{old('cost', $meals->cost)}}" class="form-control"
                       id="cost" placeholder="Enter cost">
                <span style="color: red">

            </span>
            </div>

            <div class="form-group">
                <label for="year">long description :</label>
                <input type="text" name="long_description" value="{{old('long_description', $meals->long_description)}}" class="form-control"
                       id="year" placeholder="Enter long description">
                <span style="color: red">

            </span>
            </div>

            <button type="submit" name="updateItem"
                    class="btn btn-primary float-right" id="btn-submit">
                Update Item
            </button>
        </form>
    </div>

@endsection
