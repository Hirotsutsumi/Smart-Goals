@extends('layouts.app')

@section('cover')
<div class='top'>
    <div class="skills">
        <div class="skills-wrapper">
            <section  id="howtouse">
                <h2 class="heading">HOW TO USE</h2>
                <h3 class="Judy"><strong>初めての方はこちら</strong></h3>
                <div class="skill-box">
                    <img src="{{ secure_asset("images/Step0.png") }}" alt="howtouse">
                </div>
                <div class="skill-box">  
                    <div class="skill-title">STEP0. REGISTER</div>
                        <p class="skill-text">
                        まずSmart Goalを登録しましょう。<br>
                        目標達成してきのこを集めよう！<br>
                        </p>
                </div>
            </section>
            <section>　　　
            <h3 class="Judy"><strong>2回目以降の方はこちら</strong></h3>
                <div class="skill-box">  
                    <div class="skill-title">STEP1. REVIEW</div>
                        <p class="skill-text">
                        Smart Goalを振り返り
                        達成率などを入力<br>
                        出力されたテンプレートで日報を作成しましょう！
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
                    過去の達成度と同期のSmartGoalを参考に<br>
                    次のSmart Goalを考えよう！
                    </p>
            </div>
            </section>
            <section>
            <div class="skill-box">  
                <div class="skill-title">STEP3. ADD</div>
                    <p class="skill-text">
                    Smart Goalを追加するとテンプレートが出力されます<br>
                    出力されたテンプレートをコピーして日報完成！
                    </p>
            </div>
            <div class="skill-box">
                <img src="{{ secure_asset("images/Step3.png") }}" alt="howtouse">
            </div>
            </section>
        </div>
    </div>
</div>
@endsection