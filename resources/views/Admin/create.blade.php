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
    <!--    Form to Add  Item -->
    <form action="/Admin" method="post">
        @csrf
        <div class="form-group">
            <label for="make">title :</label>
            <input type="text" class="form-control" name="title" id="title" value=""
                   placeholder="Enter title">
            <span style="color: red">

            </span>
        </div>
        <div class="form-group">
            <label for="description">description :</label>
            <input type="text" class="form-control" id="description" name="description"
                   value="" placeholder="Enter description">
            <span style="color: red">

            </span>
        </div>
        <div class="form-group">
            <label for="cost">cost :</label>
            <input type="text" name="cost" value="" class="form-control"
                   id="cost" placeholder="Enter cost">
            <span style="color: red">

            </span>
        </div>
        <div class="form-group">
            <label for="long_description">long description :</label>
            <input type="text" name="long_description" value="" class="form-control"
                   id="long_description" placeholder="Enter long description">
            <span style="color: red">

            </span>
        </div>
        <a href="/Admin" id="btn_back" class="btn btn-success float-left">Back</a>
        <button type="submit" name="addItem"
                class="btn btn-primary float-right" id="btn-submit">
            Add Item
        </button>
    </form>
</div>

@endsection
