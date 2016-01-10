@extends('layouts.app')

@section('content')
    <div class="container spark-screen">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <h3>Thank you..</h3>
                <p>Your average time to read is: <strong>{{$time}}</strong> words per minute.</p>
            </div>
        </div>
    </div>
@endsection
