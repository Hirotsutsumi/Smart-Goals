@extends('layouts.app')

@section('content')
<div class='top'>
    <div class="skills">
        <div class="skills-wrapper">
           <section>
            <div class="skill-box">
                <img src="{{ secure_asset("images/onoshin.png") }}" alt="onoshin">
            </div>
            <div class="skill-box">  
                <div class="skill-title">まずはSmartGoalを追加しよう！</div>
                    <p class="skill-text">
                    </p>
            </div>
             <div class="buttons">
                    <a class="button button-sho" href="{{ route('goals.create') }}">CREATE FIRST Smart Goals</a>
             </div>
            </section>
        </div>
    </div>
</div>
@endsection