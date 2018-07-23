@extends('layouts.app')

@section('cover')
<div class='top'>
    <section class="main-top">
        <p class="site-title-sub">SmartGoal管理アプリ</p>
        <h1 class="site-title"> Welcome to SmartGoals</h1>
            <div class="buttons">
                <a class="button button-showy" href="#howtouse">HOW TO USE</a>
            </div>
    </section>
    <div class="skills">
        <h2 class="heading">HOW TO USE</h2>
        <div class="skills-wrapper">
            <section  id="howtouse">
                <div class="skill-box">
                    <img src="{{ secure_asset("images/Step0.png") }}" alt="howtouse">
                </div>
                <div class="skill-box">  
                    <div class="skill-title">STEP0. REGISTER</div>
                        <p class="skill-text">
                        まずSmart Goalを登録、<br>
                        目標達成してきのこを集めよう！<br>
                        </p>
                </div>
            </section>
            <section>　　　
            <div class="skill-box">  
                <div class="skill-title">STEP1. REVIEW</div>
                    <p class="skill-text">
                    Smart Goalを振り返り<br>
                    達成率などを入力<br>
                    出力されたテンプレートで<br>
                    日報を作成しましょう！
                    </p>
            </div>
            <div class="skill-box">
                <img src="{{ secure_asset("images/Step1.png") }}" alt="howtouse">
            </div>
            </section>
            <section>
            <div class="skill-box">
                <img src="{{ secure_asset("images/Step2.png") }}" alt="howtouse">
            </div>
            <div class="skill-box">  
                <div class="skill-title">STEP2. CHECK</div>
                    <p class="skill-text">
                    左上のロゴをクリックしてMy Statusへ!<br>
                    達成度や過去のSmart Goalをチェック!
                    </p>
            </div>
            </section>
            <section>
            <div class="skill-box">  
                <div class="skill-title">STEP3. ADD</div>
                    <p class="skill-text">
                    Smart Goalを追加すると<br>
                    テンプレートが出力されます<br>
                    出力されたテンプレートをコピーして<br>
                    日報完成！
                    </p>
            </div>
            <div class="skill-box">
                <img src="{{ secure_asset("images/Step3.png") }}" alt="howtouse">
            </div>
            </section>
            <div class="buttons">
                <a class="button button-showyy" href="{{ route('signup.get') }}">SIGN UP!</a>
            </div>
        </div>
    </div>
    <div class="main-top">
        <section id="contact">
            <h2 class="heading">ABOUT US</h2>
            <p class="contact-text">
                purple tribe<br>
                チームきりんさん<br>
                RYO　ISSEI　HIRO　SUE　KANAKO　ONOSHIN
            </p>
        </section>
    </div>
</div>
@endsection