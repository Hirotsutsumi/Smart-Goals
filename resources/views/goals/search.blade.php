@extends('layouts.app')

@section('content')
    <div class='page_title'>
        <h1>Search for Smart Goals</h1>
    </div>

    <div class="search">
        <div class="row">
            <div class="col-xs-10 col-xs-offset-1">
                <div class="text-center">
                    {!! Form::open(['route' => 'goals.search', 'method' => 'get']) !!}
                        <div class="form-group row">
                             <span class="col-xs-2">{!! Form::label('keyword', 'Keyword:') !!}</span>
                             <span class="col-xs-10">{!! Form::text('keyword', old('keyword'), ['class' => 'form-control','placeholder' => 'Input Keywords in English']) !!}</span>
                        </div>
                        <div class="form-group row">
                            <span class="col-xs-2">{!! Form::label('category', 'Category:') !!}</span>
                            <span class="col-xs-10">{!! Form::select('category', [
                                '' => 'Choose category',
                                '0' => 'Study',
                                '1' => 'Private',
                                '2' => 'Communication',
                                '3' => 'Health',
                                '4' =>'Work'], null, ['class' => 'form-control'])!!}      </span>
                        </div>
                        <div class="form-group row">
                            <span class="col-xs-2">{!! Form::label('day', 'Date:') !!}</span>
                            <span class="col-xs-8">{!! Form::date('day', old('day'), ['class' => 'form-control']) !!}</span>
                            <span class="col-xs-2">{!! Form::select('relate2', [
                                '0' => 'equal',
                                '1' => 'after',
                                '2' => 'before'], null, ['class' => 'form-control'])!!}
                                </span>
                        </div>
                        {!! Form::submit('Search!', ['class' => 'btn btn-register btn-lg']) !!}
                        {!! Form::close() !!}
                        <br>
                        <div class="panel panel-original" style="word-break:break-all;">
                            <div class="panel-heading">
                                <h3 class="panel-title" style="font-family:'ＭＳ　ゴシック', sans-serif">Search Results</h3>
                            </div>
                        @include('goals.search-index', ['goals' => $goals])
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection