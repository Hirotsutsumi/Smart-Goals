@extends('layouts.app')

@section('content')
    <div class='page_title'>
        <h1>Reflection of Today's Goals</h1>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-xs-8 col-xs-offset-2">
                <div class="text-center">
                    <div class="panel panel-original" style="word-break:break-all;">
                        <div class="panel-heading">
                            <h2 class="panel-title" style=>Today's Goals</h2>
                        </div>
                        <div class="panel-body">
                            {!! Form::open(['route' => 'goals.reviewed']) !!}
                                <?php foreach($goals as $goal): ?>
                                    <u><p class="text-left" style="font-size:large">Goal: {{ $goal->content }}</p></u>
                                    <div class="form-group row">
                                        <span class="col-xs-2">{!! Form::label('rate[]', 'Acheivement Rate (%):') !!}</span>
                                        <span class="col-xs-10">{!! Form::text('rate[]', old('rate[]'), ['class' => 'form-control','placeholder' => 'Input numbers']) !!}</span>
                                    </div>
                                    <div class="form-group row">
                                        <span class="col-xs-2">{!! Form::label('review[]', 'Review:') !!}</span>
                                        <span class="col-xs-10">{!! Form::text('review[]', old('review[]'), ['class' => 'form-control','placeholder' => 'Input Review in English']) !!}</span>
                                    </div>
                                    <div class="form-group row">
                                        <span class="col-xs-2">{!! Form::label('step[]', 'Next Steps:') !!}</span>
                                        <span class="col-xs-10">{!! Form::text('step[]', old('step[]'), ['class' => 'form-control','placeholder' => 'Input Next step in English']) !!}</span>
                                    </div>
                                    <input name="id[]" type="hidden" value= '{{$goal->id}}' >
                                <?php endforeach; ?>
                                {!! Form::submit('Register', ['class' => 'btn btn-register btn-block']) !!}
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
  
@endsection