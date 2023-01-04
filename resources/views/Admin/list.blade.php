@extends('layouts.master')
@section('title', 'My Title')


@section('content')

    <a href="cars/create" class="btn btn-outline-primary float-right mt-2">Add Menu</a>

    <h1>List of Menu Items</h1>
    @foreach ($meals as $c)
        <div style="margin: 40px; align-content: center">
            <a href="{{ url('/Admin', $c->id) }}" style="font-size: larger;">{{ $c->title }}</a>

            <div style="display: flex;">

                <form method="get" action="{{ url('/Admin/' . $c->id . '/edit') }}" style="margin-right: 20px">
                    {{ csrf_field() }}
                    <input type="submit" value="Update" class="btn btn-success "/>
                </form>

                <form method="post" action="{{ url('Admin', $c->id) }}">
                    {{ csrf_field() }}
                    {{ method_field('DELETE') }}
                    <input type="submit" value="Delete" class="btn btn-danger "/>
                </form>
            </div>


        </div>

    @endforeach

@endsection
