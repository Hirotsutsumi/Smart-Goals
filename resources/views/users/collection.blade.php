@extends('layouts.app')

@section('content')
<div class="kinoko-container">
  <h1>KINOKO COLLECTION</h1>
  <div class="container"></div>
    <div class="image-box">
      <a href="{{ asset  ('images/defaultkinoko1.jpg') }}" data-lightbox="kinoko" data-title="ここにぶんしょうをいれてね">
        <img class="thumbnail" src="{{ asset  ('images/defaultkinoko1.jpg') }}"></img>
        <input class="disabled_checkbox" type="checkbox"  checked />
      </a>
    </div>
    <div class="image-box">
    @if($data1 >= 1)
    <a href="{{ asset  ('images/defaultkinoko2.jpg') }}" data-lightbox="kinoko" data-title="ここにぶんしょうをいれてね">
      <img class="thumbnail" src="{{ asset ('images/defaultkinoko2.jpg')}}"></img>
      <input class="disabled_checkbox" type="checkbox"  checked />
    </a>
    @else
    <a href="{{ asset  ('images/kakushikinoko.jpg') }}" data-lightbox="kinoko" data-title="ここにぶんしょうをいれてね">
      <img class="thumbnail" src="{{ asset ('images/kakushikinoko.jpg') }}"></img>
    </a>
    @endif
    </div>
    <div class="image-box">
    @if($data2[4] >= 1)
    <a href="{{ asset  ('images/work.jpg') }}" data-lightbox="kinoko" data-title="ここにぶんしょうをいれてね">
      <img class="thumbnail" src="{{ asset ('images/work.jpg') }}"></img>
      <input class="disabled_checkbox" type="checkbox" checked />
    </a>
    @else
    <a href="{{ asset  ('images/kakushikinoko.jpg') }}" data-lightbox="kinoko" data-title="ここにぶんしょうをいれてね">
      <img class="thumbnail" src="{{ asset ('images/kakushikinoko.jpg') }}"></img>
    </a>
    @endif
    </div>
    <div class="image-box">
    @if($data2[1] >= 1)
    <a href="{{ asset  ('images/private.jpg') }}" data-lightbox="kinoko" data-title="ここにぶんしょうをいれてね">
      <img class="thumbnail" src="{{ asset ('images/private.jpg') }}"></img>
      <input class="disabled_checkbox" type="checkbox" checked />
    </a>
    @else
    <a href="{{ asset  ('images/kakushikinoko.jpg') }}" data-lightbox="kinoko" data-title="ここにぶんしょうをいれてね">
      <img class="thumbnail" src="{{ asset ('images/kakushikinoko.jpg') }}"></img>
    </a>
    @endif
    </div>
    <div class="image-box">
    @if($data2[2] >= 1)
    <a href="{{ asset  ('images/communication.jpg') }}" data-lightbox="kinoko" data-title="ここにぶんしょうをいれてね">
      <img class="thumbnail" src="{{ asset ('images/communication.jpg') }}"></img>
      <input class="disabled_checkbox" type="checkbox" checked />
    </a>
    @else
    <a href="{{ asset  ('images/kakushikinoko.jpg') }}" data-lightbox="kinoko" data-title="ここにぶんしょうをいれてね">
      <img class="thumbnail" src="{{ asset ('images/kakushikinoko.jpg') }}"></img>
    </a>
    @endif
    </div>
  </div>
  <div class="container">
    <div class="image-box">
    @if($data2[0] >= 1)
    <a href="{{ asset  ('images/study.jpg') }}" data-lightbox="kinoko" data-title="ここにぶんしょうをいれてね">
      <img class="thumbnail" src="{{ asset ('images/study.jpg') }}"></img>
      <input class="disabled_checkbox" type="checkbox" checked />
    </a>
    @else
    <a href="{{ asset  ('images/kakushikinoko.jpg') }}" data-lightbox="kinoko" data-title="ここにぶんしょうをいれてね">
      <img class="thumbnail" src="{{ asset ('images/kakushikinoko.jpg') }}"></img>
    </a>
    @endif
    </div>
    <div class="image-box">
    @if($data2[3] >= 1)
    <a href="{{ asset  ('images/health.jpg') }}" data-lightbox="kinoko" data-title="ここにぶんしょうをいれてね">
      <img class="thumbnail" src="{{ asset ('images/health.jpg') }}"></img>
      <input class="disabled_checkbox" type="checkbox" checked />
    </a>
    @else
    <a href="{{ asset  ('images/kakushikinoko.jpg') }}" data-lightbox="kinoko" data-title="ここにぶんしょうをいれてね">
      <img class="thumbnail" src="{{ asset ('images/kakushikinoko.jpg') }}"></img>
    </a>
    @endif
    </div>
    <div class="image-box">
    @if($data3>=15)
    <a href="{{ asset  ('images/devil.jpg') }}" data-lightbox="kinoko" data-title="ここにぶんしょうをいれてね">
      <img class="thumbnail" src="{{ asset ('images/devil.jpg') }}"></img>
      <input class="disabled_checkbox" type="checkbox" checked />
    </a>
    @else
    <a href="{{ asset  ('images/kakushikinoko.jpg') }}" data-lightbox="kinoko" data-title="ここにぶんしょうをいれてね">
      <img class="thumbnail" src="{{ asset ('images/kakushikinoko.jpg') }}"></img>
    </a>
    @endif
    </div>
    <div class="image-box">
    @if($data3 >= 1)
    <a href="{{ asset  ('images/dog.jpg') }}" data-lightbox="kinoko" data-title="ここにぶんしょうをいれてね">
      <img class="thumbnail" src="{{ asset ('images/dog.jpg') }}"></img>
      <input class="disabled_checkbox" type="checkbox" checked />
    </a>
    @else
    <a href="{{ asset  ('images/kakushikinoko.jpg') }}" data-lightbox="kinoko" data-title="ここにぶんしょうをいれてね">
      <img class="thumbnail" src="{{ asset ('images/kakushikinoko.jpg') }}"></img>
    </a>
    @endif
    </div>
    <div class="image-box">
    @if($keepdata >= 1)
    <a href="{{ asset  ('images/sue.jpg') }}" data-lightbox="kinoko" data-title="ここにぶんしょうをいれてね">
      <img class="thumbnail" src="{{ asset ('images/sue.jpg') }}"></img>
      <input class="disabled_checkbox" type="checkbox" checked />
    </a>
    @else
    <a href="{{ asset  ('images/kakushikinoko.jpg') }}" data-lightbox="kinoko" data-title="ここにぶんしょうをいれてね">
      <img class="thumbnail" src="{{ asset ('images/kakushikinoko.jpg') }}"></img>
    </a>
    @endif
    </div>
  </div>
  <div class="container">
    <div class="image-box">
    @if($data3 >= 3)
    <a href="{{ asset  ('images/panda.jpg') }}" data-lightbox="kinoko" data-title="ここにぶんしょうをいれてね">
      <img class="thumbnail" src="{{ asset ('images/panda.jpg') }}"></img>
      <input class="disabled_checkbox" type="checkbox" checked />
    </a>
    @else
    <a href="{{ asset  ('images/kakushikinoko.jpg') }}" data-lightbox="kinoko" data-title="ここにぶんしょうをいれてね">
      <img class="thumbnail" src="{{ asset ('images/kakushikinoko.jpg') }}"></img>
    </a>
    @endif
    </div>
    <div class="image-box">
    @if($data3 >= 5)
    <a href="{{ asset  ('images/tiger.jpg') }}" data-lightbox="kinoko" data-title="ここにぶんしょうをいれてね">
      <img class="thumbnail" src="{{ asset ('images/tiger.jpg') }}"></img>
      <input class="disabled_checkbox" type="checkbox" checked />
    </a>
    @else
    <a href="{{ asset  ('images/kakushikinoko.jpg') }}" data-lightbox="kinoko" data-title="ここにぶんしょうをいれてね">
      <img class="thumbnail" src="{{ asset ('images/kakushikinoko.jpg') }}"></img>
    </a>
    @endif
    </div>
    <div class="image-box">
    @if($data3 >= 7)
    <a href="{{ asset  ('images/kyouryuu.jpg') }}" data-lightbox="kinoko" data-title="ここにぶんしょうをいれてね">
      <img class="thumbnail" src="{{ asset ('images/kyouryuu.jpg') }}"></img>
      <input class="disabled_checkbox" type="checkbox" checked />
    </a>
    @else
    <a href="{{ asset  ('images/kakushikinoko.jpg') }}" data-lightbox="kinoko" data-title="ここにぶんしょうをいれてね">
      <img class="thumbnail" src="{{ asset ('images/kakushikinoko.jpg') }}"></img>
    </a>
    @endif
    </div>
    <div class="image-box">
    @if($data3 >= 10)
    <a href="{{ asset  ('images/kirin.jpg') }}" data-lightbox="kinoko" data-title="ここにぶんしょうをいれてね">
      <img class="thumbnail" src="{{ asset ('images/kirin.jpg') }}"></img>
      <input class="disabled_checkbox" type="checkbox" checked />
    </a>
    @else
    <a href="{{ asset  ('images/kakushikinoko.jpg') }}" data-lightbox="kinoko" data-title="ここにぶんしょうをいれてね">
      <img class="thumbnail" src="{{ asset ('images/kakushikinoko.jpg') }}"></img>
    </a>
    @endif
    </div>
    <div class="image-box">
    @if($data1 >= 6)
    <a href="{{ asset  ('images/kuma.jpg') }}" data-lightbox="kinoko" data-title="ここにぶんしょうをいれてね">
      <img class="thumbnail" src="{{ asset ('images/kuma.jpg') }}"></img>
      <input class="disabled_checkbox" type="checkbox" checked />
    </a>
    @else
    <a href="{{ asset  ('images/kakushikinoko.jpg') }}" data-lightbox="kinoko" data-title="ここにぶんしょうをいれてね">
      <img class="thumbnail" src="{{ asset ('images/kakushikinoko.jpg') }}"></img>
    </a>
    @endif
    </div>
  </div>
  <div class="container">
    <div class="image-box">
    @if($data1 >= 9)
    <a href="{{ asset  ('images/pig.jpg') }}" data-lightbox="kinoko" data-title="ここにぶんしょうをいれてね">
      <img class="thumbnail" src="{{ asset ('images/pig.jpg') }}"></img>
      <input class="disabled_checkbox" type="checkbox" checked />
    </a>
    @else
    <a href="{{ asset  ('images/kakushikinoko.jpg') }}" data-lightbox="kinoko" data-title="ここにぶんしょうをいれてね">
      <img class="thumbnail" src="{{ asset ('images/kakushikinoko.jpg') }}"></img>
    </a>
    @endif
    </div>
    <div class="image-box">
    @if($data1 >= 12)
    <a href="{{ asset  ('images/sai.jpg') }}" data-lightbox="kinoko" data-title="ここにぶんしょうをいれてね">
      <img class="thumbnail" src="{{ asset ('images/sai.jpg') }}"></img>
      <input class="disabled_checkbox" type="checkbox" checked />
    </a>
    @else
    <a href="{{ asset  ('images/kakushikinoko.jpg') }}" data-lightbox="kinoko" data-title="ここにぶんしょうをいれてね">
      <img class="thumbnail" src="{{ asset ('images/kakushikinoko.jpg') }}"></img>
    </a>
    @endif
    </div>
    <div class="image-box">
    @if($data1 >= 15)
    <a href="{{ asset  ('images/rabbit.jpg') }}" data-lightbox="kinoko" data-title="ここにぶんしょうをいれてね">
      <img class="thumbnail" src="{{ asset ('images/rabbit.jpg') }}"></img>
      <input class="disabled_checkbox" type="checkbox" checked />
    </a>
    @else
    <a href="{{ asset  ('images/kakushikinoko.jpg') }}" data-lightbox="kinoko" data-title="ここにぶんしょうをいれてね">
      <img class="thumbnail" src="{{ asset ('images/kakushikinoko.jpg') }}"></img>
    </a>
    @endif
    </div>
    <div class="image-box">
    @if($keepdata >= 3)
    <a href="{{ asset  ('images/zebra.jpg') }}" data-lightbox="kinoko" data-title="ここにぶんしょうをいれてね">
      <img class="thumbnail" src="{{ asset ('images/zebra.jpg') }}"></img>
      <input class="disabled_checkbox" type="checkbox" checked />
    </a>
    @else
    <a href="{{ asset  ('images/kakushikinoko.jpg') }}" data-lightbox="kinoko" data-title="ここにぶんしょうをいれてね">
      <img class="thumbnail" src="{{ asset ('images/kakushikinoko.jpg') }}"></img>
    </a>
    @endif
    </div>
    <div class="image-box">
    @if($keepdata >= 5)
    <a href="{{ asset  ('images/elephant.jpg') }}" data-lightbox="kinoko" data-title="ここにぶんしょうをいれてね">
      <img class="thumbnail" src="{{ asset ('images/elephant.jpg') }}"></img>
      <input class="disabled_checkbox" type="checkbox" checked />
    </a>
    @else
    <a href="{{ asset  ('images/kakushikinoko.jpg') }}" data-lightbox="kinoko" data-title="ここにぶんしょうをいれてね">
      <img class="thumbnail" src="{{ asset ('images/kakushikinoko.jpg') }}"></img>
    </a>
    @endif
    </div>  
  </div>
</div>

@endsection
