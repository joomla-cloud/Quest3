@extends('master')

@section('meta')
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
@endsection

@section('content')
    <div class="row">
        <!-- Test Content Column -->
        <div class="col-lg-8">

            <!-- Title -->


            <!-- Questions -->
            {!! $questions->content !!}

        </div>
    </div>
@endsection
