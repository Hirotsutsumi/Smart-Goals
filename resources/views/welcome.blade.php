@extends('layouts.app')

@section('cover')
<div class='top'>
    <section class="main-top">
        <p class="site-title-sub">SmartGoal管理アプリ</p>
        <h1 class="site-title"> Welcome to SmartGoals</h1>
            <div class="buttons">
                <a class="button button-showy" href="#about">ABOUT</a>
            </div>
    </section>
    <section class="about" id="about">
    <h2 class="heading">SmartGoals</h2>
    <p class="about-text">
      SmartGoalsはSmartGoalの作成をサポートします。<br>
      My StatusのレーダーチャートでSmartGoalの達成率を確認できます。<br>
      また同期のSmarGoalを検索、KeepしてSmarGoal作成の際に参考にすることもできます。<br>
      使い続けることできのこが集まり、アバター画像に設定することもできます。<br>
      毎日の日報作成時に使って効率よく日報を書きましょう！
    </p>
    <div class="buttons">
        <a class="button button-showy" href="{{ route('signup.get') }}">SIGN UP</a>
    </div>
  </section>
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