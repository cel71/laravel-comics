@extends('templates.base')
@section('title', 'Comics')

@section('box centrale')
    <div class="sfondo-comics">
        <div class="jumbotron">
            <img src="/images/jumbotron.jpg" alt="jumbotron">
        </div>
        <div class="special2">CURRENT SERIES</div>
        <div class="container-fluid">
            <div class="container">
                @dump($comics[$id])
            </div>
        </div>
        <button>LOAD MORE</button>
    </div>
@endsection