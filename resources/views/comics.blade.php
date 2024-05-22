@extends('app')

@section('title', "Fumetti")

@section('content')
<div class="container">
    <h1>I nostri Comics</h1>
</div>
<div class="container">
    <div class="row">
        @foreach ($comics as $comic)
            <div class="col">
                <div class="card" style="width: 18rem;">
                    @foreach ($comic as $content=>$value)
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"> {{ $comic[$content] }}</h5>
                        <p class="card-text">
                            
                        </p>
                    </div>
                    @endforeach
                </div>
            </div>
        @endforeach
    </div>
</div>

@endsection