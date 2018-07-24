@extends('layouts.app')

@section('cover')
<div class='top'>
    <div class="skills">
        <div class="skills-wrapper">
             
            <section  id="howtouse">
                <h2 class="heading">HOW TO USE</h2>
                 <div class="buttons">
                    <a class="button button-sho" href="#howtouse">BASIC</a>
                    <a class="button button-sho" href="#search">SEARCH</a>
                    <a class="button button-sho" href="#keep">KEEP</a>
                    <a class="button button-sho" href="#kinoko">KINOKO</a>
                 </div>
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
            <div class='text-right'>
                <a class='' href="#howtouse">↑ page_top</a>
            </div>
            <section  id="search">
                 <div class="skill-box">
                    <img src="{{ secure_asset("images/search.png") }}" alt="howtouse">
                </div>
                <div class="skill-box">  
                    <div class="skill-title">SEARCH</div>
                        <p class="skill-text">
                            🔍Search for Smart Goalsで<br>
                            他のユーザーのSmart Goalを<br>
                            絞り込み検索！<br>
                            ✔ボタンで参考にしたいユーザーの<br>
                            Smart GoalをKeep!
                        </p>
                    </div>
            </section>
            <section  id="keep">
                 <div class="skill-box">  
                    <div class="skill-title">KEEP List</div>
                        <p class="skill-text">
                            KeepしたSmart Goalを<br>
                            Keepsページでチェックできる!<br>
                            SmartGoal作成の時にコピーして使えます。
                        </p>
                    </div>
                <div class="skill-box">
                    <img src="{{ secure_asset("images/keep.png") }}" alt="howtouse">
                </div>
            </section>
            <div class='text-right'>
                <a class='' href="#howtouse">↑ page_top</a>
            </div>
            <section  id="kinoko">
                <div class="skill-box">
                    <img src="{{ secure_asset("images/kinoko.png") }}" alt="howtouse">
                </div>
                <div class="skill-box">  
                    <div class="skill-title">KINOKO</div>
                        <p class="skill-text">
                        Smart Goalをたくさん設定して<br>
                        全20種類のきのこをコンプリートしよう!<br>
                        きのこをクリックすると<br>
                        名前と獲得条件がわかる！
                        </p>
                </div>
            </section>
            <div class='text-right'>
                <a class='' href="#howtouse">↑ page_top</a>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
$(function(){
    $('a[href^=#]').click(function(){
        var speed = 800;
        var href= $(this).attr("href");
        var target = $(href == "#" || href == "" ? 'html' : href);
        var position = target.offset().top;
        $("html, body").animate({scrollTop:position}, speed, "swing");
        return false;
    });
});
</script>
@endsection