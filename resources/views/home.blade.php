@extends('layots.main')

@section('title', 'Домашняя страница')

@section('body')


    Test words

    <div>
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button>Выйти</button>
        </form>
    </div>

@endsection
