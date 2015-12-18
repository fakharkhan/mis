@extends('layouts.app')
@section('content')
    <h1>{{ $teammate->full_name }} | <small>Add Leave Application</small> </h1>
    <div class="row">
        <div class="col-md-8">
            {!! Form::open(array('route' => ['teammates.{teammate}.leaves.store',$teammate->id])) !!}
                @include('leaves._form')
            {!! Form::close() !!}
        </div>
        <div class="col-md-4"></div>
    </div>
    <p>{!! link_to_route('teammates.index', 'Back')  !!}</p>
@endsection

