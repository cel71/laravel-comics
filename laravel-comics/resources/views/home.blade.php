@extends('templates.base')
@section('title', 'HomePage')

@section('box centrale')
    <div class="sfondo-home">
        <div class="jumbotron">
            <img class="jumbotron-img" src="/images/jumbotron.jpg" alt="jumbotron">
        </div>
        <div class="special"><p>CURRENT SERIES</p></div>
        <div class="container-fluid">
            <div class="container">
                <div class="row">
                    @foreach($comics as $comic)
                        <div class="col-2">
                            <a href="{{ route('comicspage',[ 'id' => $loop->iteration ]) }}">
                                <div class="comics-card">
                                    <img src="{{ $comic['thumb'] }}" alt="{{ $comic['series'] }}">
                                    <h4>{{ $comic["series"] }}</h4>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <button>LOAD MORE</button>
    </div>
@endsection