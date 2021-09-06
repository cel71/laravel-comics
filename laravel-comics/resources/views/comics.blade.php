@extends('templates.base')
@section('title', 'Comics')

@section('box centrale')
    <div class="sfondo-comics">
        <div class="jumbotron">
            <img src="/images/jumbotron.jpg" alt="jumbotron">
        </div>
        <div class="line-blue">
            <img src="{{ $comics[$id]['thumb'] }}" />
        </div>
    </div>
    <div class="container box-comics">
        <div class="row">
            <div class="col-8">
                <h1>{{ $comics[$id]["title"] }}</h1>
                <div class="price-bar">
                    <div class="price">
                        <div>U.S. Price:
                            <span>{{ $comics[$id]["price"] }}</span>
                        </div>
                        <div>AVAILABLE</div>
                    </div>
                    <div class="check">Check Availability</div>
                </div>
                <p>{{ $comics[$id]["description"] }}</p>
            </div>
            <div class="col-4 imgadv">
                <div>ADVERTISEMENT</div>
                <img src="/images/imgadv.jpg" alt="">
            </div>
        </div>
        <div class="row">
            <div class="col-8 text">
                <h2>Talent</h2>
                <div class="art-by">
                    <div class="art-by-script">Art by:</div>
                    <div class="artist-writer">"José Luis García-López","Clay Mann","Rafael Albuquerque","Patrick Gleason","Dan Jurgens","Joe Shuster","Neal Adams","Curt Swan","John Cassaday","Olivier Coipel","Jim Lee"</div>
                </div>
                    <div class="written-by">
                    <div class="written-by-script">Written by:</div>
                <div class="artist-writer">"José Luis García-López","Clay Mann","Rafael Albuquerque","Patrick Gleason","Dan Jurgens","Joe Shuster","Neal Adams","Curt Swan","John Cassaday","Olivier Coipel","Jim Lee"</div>
                </div>
            </div>
            <div class="col-4 text">
                <h2>Specs</h2>
                <div class="art-by">
                    <div class="art-by-title">Series:</div>
                    <div class="artist-writer">{{ $comics[$id]["series"] }}</div>
                </div>
                <div class="art-by">
                    <div class="art-by-title">U.S. Price:</div>
                    <div class="artist-writer">{{ $comics[$id]["price"] }}</div>
                </div>
                <div class="art-by">
                    <div class="art-by-title">On sale date:</div>
                    <div class="artist-writer">{{ $comics[$id]["sale_date"] }}</div>
                </div>
            </div>
        </div>
    </div>
@endsection