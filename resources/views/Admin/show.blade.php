@extends('layouts.master')

@section('content')
    <h2>Item Details: </h2>
    <table border="1">
                <tr>
                    <th>Item title</th>
                    <th>Item description</th>
                    <th>Item cost</th>
                    <th>Item long description</th>
                </tr>
        <tr>
    <td>{{$meals->title}}</td>
    <td>{{$meals->description}}</td>
    <td>{{$meals->cost}}</td>
    <td>{{$meals->long_description}}</td>
        </tr>
    </table>
{{--    <table border="1">--}}
{{--        <tr>--}}
{{--            <th>Item title</th>--}}
{{--            <th>Item description</th>--}}
{{--            <th>Item cost</th>--}}
{{--            <th>Item long description</th>--}}
{{--        </tr>--}}

{{--            @foreach($meals as $meal)--}}
{{--            <tr>--}}
{{--                <td>{{$meal->title}}</td>--}}
{{--                <td>{{$meal->description}}</td>--}}
{{--                <td>{{$meal->cost}}</td>--}}
{{--                <td>{{$meal->long_description}}</td>--}}
{{--            </tr>--}}
{{--            @endforeach--}}

{{--    </table>--}}
    <br>

    <a href="/Admin" >Back</a>
@endsection
