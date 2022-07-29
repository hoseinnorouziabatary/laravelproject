@extends('layouts.master')

<!-- This line is used for short strings in section -->
@section('title', 'index')


@section('content')
<div class="middle">
            <h1>WELCOME</h1>
            <hr>
            @if($articles and $id)
                <!-- A line htmlspicialchars and A line code balde -->
                <!-- <p>your articles: <?= htmlspecialchars($articles)?> and by id : <?= htmlspecialchars($id)?></p> -->
                <p>your articles: {{$articles}} and by id : {{$id}}</p>
            @endif
            @if($listuser)
                @foreach($listuser as $key=>$val)
                    <p>username :{{$key}} and code : {{$val}}</p>
                @endforeach
            @endif
        </div>
@endsection