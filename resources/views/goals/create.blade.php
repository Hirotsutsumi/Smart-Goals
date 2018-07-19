@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-xs-6">
                <div class='page_title'>
                    <h1>Smart Goals Setting</h1>
                </div>
                <div class="text-center">
                    {!! Form::open(['route' => 'goals.store']) !!}
                        <div class="form-group row">
                            <span class="col-xs-2">{!! Form::label('content', 'Smart Goal:') !!}</span>
                            <span class="col-xs-10">{!! Form::text('content', old('content'), ['class' => 'form-control','placeholder' => ' Input Smart Goal']) !!}</span>
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
                            <span class="col-xs-2">{!! Form::label('why', 'Why:') !!}</span>
                            <span class="col-xs-10">{!! Form::text('why', old('why'), ['class' => 'form-control','placeholder' => 'Input Reason']) !!}</span>
                        </div>
                        <div class="hidden_box">
                            <label for="label1" class="hidden_box_label">Second Smart Goal</label>
                            <input type="checkbox" id="label1" class="hidden_box_input" />

                        <div class="hidden_show">
                            <!--非表示ここから-->     
                                <div class="form-group row">
                                    <span class="col-xs-2">{!! Form::label('content2', 'Smart Goal:') !!}</span>
                                    <span class="col-xs-10">{!! Form::text('content2', old('content2'), ['class' => 'form-control','placeholder' => 'Input Smart Goal']) !!}</span>
                                </div>
                                <div class="form-group row">
                                    <span class="col-xs-2">{!! Form::label('category2', 'Category:') !!}</span>
                                    <span class="col-xs-10">{!! Form::select('category2', [
                                        '' => 'Choose category',
                                        '0' => 'Study',
                                        '1' => 'Private',
                                        '2' => 'Communication',
                                        '3' => 'Health',
                                        '4' =>'Work'], null, ['class' => 'form-control'])!!}</span>
                                </div>
                                <div class="form-group row">
                                    <span class="col-xs-2">{!! Form::label('why2', 'Why:') !!}</span>
                                    <span class="col-xs-10">{!! Form::text('why2', old('why2'), ['class' => 'form-control','placeholder' => 'Input Reason']) !!}</span>
                                </div>
                                <!--ここまで-->
                            </div>
                            
                            <div class="hidden_box">
                                <label for="label2" class="hidden_box_label">Third Smart Goal</label>
                                <input type="checkbox" id="label2" class="hidden_box_input" />

                                <div class="hidden_show">
                                    <!--非表示ここから-->     
                                    <div class="form-group row">
                                        <span class="col-xs-2">{!! Form::label('content3', 'Smart Goal:') !!}</span>
                                        <span class="col-xs-10">{!! Form::text('content3', old('content3'), ['class' => 'form-control','placeholder' => 'Input Smart Goal']) !!}</span>
                                    </div>
                                    <div class="form-group row">
                                        <span class="col-xs-2">{!! Form::label('category3', 'Category:') !!}</span>
                                        <span class="col-xs-10">{!! Form::select('category3', [
                                            '' => 'Choose category',
                                            '0' => 'Study',
                                            '1' => 'Private',
                                            '2' => 'Commmunication',
                                            '3' => 'Health',
                                            '4' =>'Work'], null, ['class' => 'form-control'])!!}</span>
                                    </div>
                                    <div class="form-group row">
                                        <span class="col-xs-2">{!! Form::label('why3', 'Why:') !!}</span>
                                        <span class="col-xs-10">{!! Form::text('why3', old('why3'), ['class' => 'form-control','placeholder' => 'Input Reason']) !!}</span>
                                    </div>
                                    <!--ここまで-->
                                </div>
                            </div>
                        </div>
                        {!! Form::submit('Register', ['class' => 'btn btn-primary btn-block']) !!}
                    {!! Form::close() !!}
                </div>
            </div>
            <div class="col-xs-6">
                @if(count($keeps) >0)
                <div class="panel panel-warning" style="word-break:break-all;">
                    <div class="panel-heading">
                        <p class="panel-title" style="font-family:'ＭＳ　ゴシック', sans-serif; color:black">Your Keeps</p>
                    </div>
                    @include('goals.keep-index', ['goals' => $keeps])
                </div>
                @endif
                @if(count($recommends) >0)
                <div class="panel panel-success" style="word-break:break-all;">
                    <div class="panel-heading">
                        <p class="panel-title" style="font-family:'ＭＳ　ゴシック', sans-serif; color:black">How about these goals?</p>
                    </div>
                    @include('goals.create-index', ['goals' => $recommends])
                </div>
                @endif
            </div>
        </div>
    </div>
@endsection
