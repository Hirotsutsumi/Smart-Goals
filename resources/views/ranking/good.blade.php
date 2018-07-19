@extends('layouts.app')

@section('content')
    <div class='page_title'>
        <h1>Smart Goals List</h1>
    </div>
    @if(count($mygoals) >0)
    <div class="col-sm-6">
        <div class="panel panel-primary" style="word-break:break-all;">
            <div class="panel-heading">
                <h3 class="panel-title">Keeps (Your Smart Goals)</h3>
            </div>
            @include('ranking.index', ['goals' => $mygoals])
        </div>
    </div>
    @endif
    @if(count($othersgoals) >0)
    <div class="col-sm-6">
        <div class="panel panel-primary" style="word-break:break-all;">
            <div class="panel-heading">
                <h3 class="panel-title">Keeps (Douki's Smart Goals)</h3>
            </div>
            @include('ranking.index', ['goals' => $othersgoals])
        </div>
    </div>
    @endif
@endsection