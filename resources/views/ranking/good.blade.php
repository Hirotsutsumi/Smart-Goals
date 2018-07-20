@extends('layouts.app')

@section('content')
    <div class='page_title'>
        <h1>Smart Goals List</h1>
    </div>
    <div class="col-sm-6">
        <div class="panel panel-original" style="word-break:break-all;">
            <div class="panel-heading">
                <h3 class="panel-title">Keeps (Your Smart Goals)</h3>
            </div>
            @include('ranking.index', ['goals' => $mygoals])
        </div>
    </div>
    <div class="col-sm-6">
        <div class="panel panel-original" style="word-break:break-all;">
            <div class="panel-heading">
                <h3 class="panel-title">Keeps (Douki's Smart Goals)</h3>
            </div>
            @include('ranking.index', ['goals' => $othersgoals])
        </div>
    </div>
@endsection