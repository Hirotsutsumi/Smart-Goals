@extends('layouts.app')

@section('content')
<div class="kinoko-container">
  <h1>KINOKO COLLECTION</h1>
  <div class="container"></div>
    <div class="image-box">
      <a href="{{ asset  ('images/defaultkinoko1.jpg') }}" data-lightbox="kinoko" data-title="きのこ<br>サインアップすると仲間になるよ">
        <img class="thumbnail" src="{{ asset  ('images/defaultkinoko1.jpg') }}"></img>
        <input class="disabled_checkbox" type="checkbox"  checked />
      </a>
    </div>
    <div class="image-box">
    @if($data1 >= 1)
    <a href="{{ asset  ('images/defaultkinoko2.jpg') }}" data-lightbox="kinoko" data-title="こけきのこ<br>初めてSmart Goalを追加すると仲間になるよ">
      <img class="thumbnail" src="{{ asset ('images/defaultkinoko2.jpg')}}"></img>
      <input class="disabled_checkbox" type="checkbox"  checked />
    </a>
    @else
    <a href="{{ asset  ('images/kakushikinoko.jpg') }}" data-lightbox="kinoko" data-title="Smart Goalを追加してみてね">
      <img class="thumbnail" src="{{ asset ('images/kakushikinoko.jpg') }}"></img>
    </a>
    @endif
    </div>
    <div class="image-box">
    @if($data2[4] >= 1)
    <a href="{{ asset  ('images/work.jpg') }}" data-lightbox="kinoko" data-title="Workきのこ<br>WorkカテゴリーのSmart Goalを追加すると仲間になるよ">
      <img class="thumbnail" src="{{ asset ('images/work.jpg') }}"></img>
      <input class="disabled_checkbox" type="checkbox" checked />
    </a>
    @else
    <a href="{{ asset  ('images/kakushikinoko.jpg') }}" data-lightbox="kinoko" data-title="WorkカテゴリーのSmart Goalもあるといいなあ…">
      <img class="thumbnail" src="{{ asset ('images/kakushikinoko.jpg') }}"></img>
    </a>
    @endif
    </div>
    <div class="image-box">
    @if($data2[1] >= 1)
    <a href="{{ asset  ('images/private.jpg') }}" data-lightbox="kinoko" data-title="Privateきのこ<br>PrivateカテゴリーのSmart Goalを追加すると仲間になるよ">
      <img class="thumbnail" src="{{ asset ('images/private.jpg') }}"></img>
      <input class="disabled_checkbox" type="checkbox" checked />
    </a>
    @else
    <a href="{{ asset  ('images/kakushikinoko.jpg') }}" data-lightbox="kinoko" data-title="PrivateカテゴリーのSmart Goalもあるといいなあ…">
      <img class="thumbnail" src="{{ asset ('images/kakushikinoko.jpg') }}"></img>
    </a>
    @endif
    </div>
    <div class="image-box">
    @if($data2[2] >= 1)
    <a href="{{ asset  ('images/communication.jpg') }}" data-lightbox="kinoko" data-title="Communicationきのこ<br>CommunicationカテゴリーのSmart Goalを追加すると仲間になるよ">
      <img class="thumbnail" src="{{ asset ('images/communication.jpg') }}"></img>
      <input class="disabled_checkbox" type="checkbox" checked />
    </a>
    @else
    <a href="{{ asset  ('images/kakushikinoko.jpg') }}" data-lightbox="kinoko" data-title="CommunicationカテゴリーのSmart Goalもあるといいなあ…">
      <img class="thumbnail" src="{{ asset ('images/kakushikinoko.jpg') }}"></img>
    </a>
    @endif
    </div>
  </div>
  <div class="container">
    <div class="image-box">
    @if($data2[0] >= 1)
    <a href="{{ asset  ('images/study.jpg') }}" data-lightbox="kinoko" data-title="Studyきのこ<br>StudyカテゴリーのSmart Goalを追加すると仲間になるよ">
      <img class="thumbnail" src="{{ asset ('images/study.jpg') }}"></img>
      <input class="disabled_checkbox" type="checkbox" checked />
    </a>
    @else
    <a href="{{ asset  ('images/kakushikinoko.jpg') }}" data-lightbox="kinoko" data-title="StudyカテゴリーのSmart Goalもあるといいなあ…">
      <img class="thumbnail" src="{{ asset ('images/kakushikinoko.jpg') }}"></img>
    </a>
    @endif
    </div>
    <div class="image-box">
    @if($data2[3] >= 1)
    <a href="{{ asset  ('images/health.jpg') }}" data-lightbox="kinoko" data-title="Healthきのこ<br>HealthカテゴリーのSmart Goalを追加すると仲間になるよ">
      <img class="thumbnail" src="{{ asset ('images/health.jpg') }}"></img>
      <input class="disabled_checkbox" type="checkbox" checked />
    </a>
    @else
    <a href="{{ asset  ('images/kakushikinoko.jpg') }}" data-lightbox="kinoko" data-title="HealthカテゴリーのSmart Goalもあるといいなあ…">
      <img class="thumbnail" src="{{ asset ('images/kakushikinoko.jpg') }}"></img>
    </a>
    @endif
    </div>
    <div class="image-box">
    @if($data3>=15)
    <a href="{{ asset  ('images/devil.jpg') }}" data-lightbox="kinoko" data-title="あくまきのこ<br>Smart Goalを１５こ達成すると仲間になるよ">
      <img class="thumbnail" src="{{ asset ('images/devil.jpg') }}"></img>
      <input class="disabled_checkbox" type="checkbox" checked />
    </a>
    @else
    <a href="{{ asset  ('images/kakushikinoko.jpg') }}" data-lightbox="kinoko" data-title="いっぱいSmart Goal達成してね！">
      <img class="thumbnail" src="{{ asset ('images/kakushikinoko.jpg') }}"></img>
    </a>
    @endif
    </div>
    <div class="image-box">
    @if($data3 >= 1)
    <a href="{{ asset  ('images/dog.jpg') }}" data-lightbox="kinoko" data-title="わんわん<br>初めてSmart Goalを達成すると仲間になるよ">
      <img class="thumbnail" src="{{ asset ('images/dog.jpg') }}"></img>
      <input class="disabled_checkbox" type="checkbox" checked />
    </a>
    @else
    <a href="{{ asset  ('images/kakushikinoko.jpg') }}" data-lightbox="kinoko" data-title="Smart Goal達成できたかな？">
      <img class="thumbnail" src="{{ asset ('images/kakushikinoko.jpg') }}"></img>
    </a>
    @endif
    </div>
    <div class="image-box">
    @if($keepdata >= 1)
    <a href="{{ asset  ('images/sue.jpg') }}" data-lightbox="kinoko" data-title="へなちょこきのこ<br>Smart Goalを1こKeepすると仲間になるよ">
      <img class="thumbnail" src="{{ asset ('images/sue.jpg') }}"></img>
      <input class="disabled_checkbox" type="checkbox" checked />
    </a>
    @else
    <a href="{{ asset  ('images/kakushikinoko.jpg') }}" data-lightbox="kinoko" data-title="Smart GoalをKeepしてみてね！">
      <img class="thumbnail" src="{{ asset ('images/kakushikinoko.jpg') }}"></img>
    </a>
    @endif
    </div>
  </div>
  <div class="container">
    <div class="image-box">
    @if($data3 >= 3)
    <a href="{{ asset  ('images/panda.jpg') }}" data-lightbox="kinoko" data-title="ぱんちゃん<br>Smart Goalを3こ達成すると仲間になるよ">
      <img class="thumbnail" src="{{ asset ('images/panda.jpg') }}"></img>
      <input class="disabled_checkbox" type="checkbox" checked />
    </a>
    @else
    <a href="{{ asset  ('images/kakushikinoko.jpg') }}" data-lightbox="kinoko" data-title="いくつかSmart Goalを達成しよう">
      <img class="thumbnail" src="{{ asset ('images/kakushikinoko.jpg') }}"></img>
    </a>
    @endif
    </div>
    <div class="image-box">
    @if($data3 >= 5)
    <a href="{{ asset  ('images/tiger.jpg') }}" data-lightbox="kinoko" data-title="とらきのこ<br>Smart Goalを５こ達成すると仲間になるよ">
      <img class="thumbnail" src="{{ asset ('images/tiger.jpg') }}"></img>
      <input class="disabled_checkbox" type="checkbox" checked />
    </a>
    @else
    <a href="{{ asset  ('images/kakushikinoko.jpg') }}" data-lightbox="kinoko" data-title="もうちょっとSmart Goalを達成しよう">
      <img class="thumbnail" src="{{ asset ('images/kakushikinoko.jpg') }}"></img>
    </a>
    @endif
    </div>
    <div class="image-box">
    @if($data3 >= 7)
    <a href="{{ asset  ('images/kyouryuu.jpg') }}" data-lightbox="kinoko" data-title="きょうりゅうきのこ<br>Smart Goalを７こ達成すると仲間になるよ">
      <img class="thumbnail" src="{{ asset ('images/kyouryuu.jpg') }}"></img>
      <input class="disabled_checkbox" type="checkbox" checked />
    </a>
    @else
    <a href="{{ asset  ('images/kakushikinoko.jpg') }}" data-lightbox="kinoko" data-title="もっとSmart Goalを達成しよう">
      <img class="thumbnail" src="{{ asset ('images/kakushikinoko.jpg') }}"></img>
    </a>
    @endif
    </div>
    <div class="image-box">
    @if($data3 >= 10)
    <a href="{{ asset  ('images/kirin.jpg') }}" data-lightbox="kinoko" data-title="きりんさんきのこ<br>Smart Goalを10こ達成すると仲間になるよ">
      <img class="thumbnail" src="{{ asset ('images/kirin.jpg') }}"></img>
      <input class="disabled_checkbox" type="checkbox" checked />
    </a>
    @else
    <a href="{{ asset  ('images/kakushikinoko.jpg') }}" data-lightbox="kinoko" data-title="もっともっとSmart Goalを達成しよう！">
      <img class="thumbnail" src="{{ asset ('images/kakushikinoko.jpg') }}"></img>
    </a>
    @endif
    </div>
    <div class="image-box">
    @if($data1 >= 6)
    <a href="{{ asset  ('images/kuma.jpg') }}" data-lightbox="kinoko" data-title="くまさんきのこ<br>Smart Goalを6こ追加すると仲間になるよ">
      <img class="thumbnail" src="{{ asset ('images/kuma.jpg') }}"></img>
      <input class="disabled_checkbox" type="checkbox" checked />
    </a>
    @else
    <a href="{{ asset  ('images/kakushikinoko.jpg') }}" data-lightbox="kinoko" data-title="いくつかSmart Goalを追加してね">
      <img class="thumbnail" src="{{ asset ('images/kakushikinoko.jpg') }}"></img>
    </a>
    @endif
    </div>
  </div>
  <div class="container">
    <div class="image-box">
    @if($data1 >= 9)
    <a href="{{ asset  ('images/pig.jpg') }}" data-lightbox="kinoko" data-title="ぶたさんきのこ<br>Smart Goalを9こ追加すると仲間になるよ">
      <img class="thumbnail" src="{{ asset ('images/pig.jpg') }}"></img>
      <input class="disabled_checkbox" type="checkbox" checked />
    </a>
    @else
    <a href="{{ asset  ('images/kakushikinoko.jpg') }}" data-lightbox="kinoko" data-title="もうちょっとSmart Goalを追加しよう">
      <img class="thumbnail" src="{{ asset ('images/kakushikinoko.jpg') }}"></img>
    </a>
    @endif
    </div>
    <div class="image-box">
    @if($data1 >= 12)
    <a href="{{ asset  ('images/sai.jpg') }}" data-lightbox="kinoko" data-title="さいきのこ<br>Smart Goalを12こ追加すると仲間になるよ">
      <img class="thumbnail" src="{{ asset ('images/sai.jpg') }}"></img>
      <input class="disabled_checkbox" type="checkbox" checked />
    </a>
    @else
    <a href="{{ asset  ('images/kakushikinoko.jpg') }}" data-lightbox="kinoko" data-title="もっとSmart Goalを追加してね">
      <img class="thumbnail" src="{{ asset ('images/kakushikinoko.jpg') }}"></img>
    </a>
    @endif
    </div>
    <div class="image-box">
    @if($data1 >= 15)
    <a href="{{ asset  ('images/rabbit.jpg') }}" data-lightbox="kinoko" data-title="うさちゃんきのこ<br>Smart Goalを15こ追加すると仲間になるよ">
      <img class="thumbnail" src="{{ asset ('images/rabbit.jpg') }}"></img>
      <input class="disabled_checkbox" type="checkbox" checked />
    </a>
    @else
    <a href="{{ asset  ('images/kakushikinoko.jpg') }}" data-lightbox="kinoko" data-title="もっともっとSmart Goalを追加しよう">
      <img class="thumbnail" src="{{ asset ('images/kakushikinoko.jpg') }}"></img>
    </a>
    @endif
    </div>
    <div class="image-box">
    @if($keepdata >= 3)
    <a href="{{ asset  ('images/zebra.jpg') }}" data-lightbox="kinoko" data-title="しまうまきのこ<br>Smart Goalを3こKeepすると仲間になるよ">
      <img class="thumbnail" src="{{ asset ('images/zebra.jpg') }}"></img>
      <input class="disabled_checkbox" type="checkbox" checked />
    </a>
    @else
    <a href="{{ asset  ('images/kakushikinoko.jpg') }}" data-lightbox="kinoko" data-title="もうちょっとSmart GoalをKeepしてね！">
      <img class="thumbnail" src="{{ asset ('images/kakushikinoko.jpg') }}"></img>
    </a>
    @endif
    </div>
    <div class="image-box">
    @if($keepdata >= 5)
    <a href="{{ asset  ('images/elephant.jpg') }}" data-lightbox="kinoko" data-title="ぞうさんきのこ<br>Smart Goalを5こKeepすると仲間になるよ">
      <img class="thumbnail" src="{{ asset ('images/elephant.jpg') }}"></img>
      <input class="disabled_checkbox" type="checkbox" checked />
    </a>
    @else
    <a href="{{ asset  ('images/kakushikinoko.jpg') }}" data-lightbox="kinoko" data-title="もっとSmart GoalをKeepしよう！">
      <img class="thumbnail" src="{{ asset ('images/kakushikinoko.jpg') }}"></img>
    </a>
    @endif
    </div>  
  </div>
</div>

@endsection
