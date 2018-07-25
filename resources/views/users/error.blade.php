@extends('layouts.app')

@section('content')
           <section>
            <div class="skill-box">
                <img src="{{ secure_asset("images/onoshin5.png") }}" alt="onoshin">
            </div>
            <div class="skill-box">  
                <div class="error-title">Woops!!</div>
                    <p class="skill-text">
                        まずはSmartGoalを追加しよう！<br>
                        Smart Goalを追加すると
                        Reviewできるようになるよ！<br><br>
                    </p>
                     <div class="buttons">
                    <a class="btn btn-register btn-block" href="{{ route('goals.create') }}">CREATE SMART GOALS</a>
                    </div>
             </div>
            </div>
            </section>
        
@endsection