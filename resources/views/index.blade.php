@extends('layouts.app')
@section('title', 'Home')
@section('content')
        <table class="table table-striped table-borderless">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Price</th>
                    <th>&nbsp;</th>
                </tr>
            </thead>
            @foreach ($bbs as $bb)
                
            
            <tbody>
                <tr>
                    <td><h4>{{ $bb->title }}</h4></td>
                    <td>{{ $bb->price }}</td>
                    <td>
                        <a href="{{ route('detail', ['bb' => $bb->id]) }}">Look...</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
@endsection