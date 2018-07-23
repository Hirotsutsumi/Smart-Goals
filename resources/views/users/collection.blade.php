@extends('layouts.app')

@section('content')
<div class="kinoko-container">
  <h1>KINOKO COLLECTION</h1>
  {!! Form::open(['route' => 'users.profile']) !!} 
  <div class="container"></div>
    <div class="image-box">
      <img class="thumbnail" src="{{ asset  ('images/defaultkinoko1.jpg') }}"></img>
      <input class="disabled_checkbox" type="checkbox" name="image" value="images/defaultkinoko1.jpg"  checked />
    </div>
    <div class="image-box">
    @if($data1 >= 1)
      <img class="thumbnail" src="{{ asset ('images/defaultkinoko2.jpg')}}"></img>
      <input class="disabled_checkbox" type="checkbox" name="image" value="images/defaultkinoko2.jpg"  checked />
    @else
      <img class="thumbnail" src="{{ asset ('images/kakushikinoko.jpg') }}"></img>
    @endif
    </div>
    <div class="image-box">
    @if($data2[4] >= 1)
      <img class="thumbnail" src="{{ asset ('images/work.jpg') }}"></img>
      <input class="disabled_checkbox" type="checkbox" name="image" value="images/work.jpg" checked />
    @else
      <img class="thumbnail" src="{{ asset ('images/kakushikinoko.jpg') }}"></img>
    @endif
    </div>
    <div class="image-box">
    @if($data2[1] >= 1)
      <img class="thumbnail" src="{{ asset ('images/private.jpg') }}"></img>
      <input class="disabled_checkbox" type="checkbox" name="image" value="images/private.jpg" checked />
    @else
      <img class="thumbnail" src="{{ asset ('images/kakushikinoko.jpg') }}"></img>
    @endif
    </div>
    <div class="image-box">
    @if($data2[2] >= 1)
      <img class="thumbnail" src="{{ asset ('images/communication.jpg') }}"></img>
      <input class="disabled_checkbox" type="checkbox" name="image" value="images/communication.jpg" checked />
    @else
      <img class="thumbnail" src="{{ asset ('images/kakushikinoko.jpg') }}"></img>
    @endif
    </div>
  </div>
  <div class="container">
    <div class="image-box">
    @if($data2[0] >= 1)
      <img class="thumbnail" src="{{ asset ('images/study.jpg') }}"></img>
      <input class="disabled_checkbox" type="checkbox" name="image" value="images/study.jpg" checked />
    @else
      <img class="thumbnail" src="{{ asset ('images/kakushikinoko.jpg') }}"></img>
    @endif
    </div>
    <div class="image-box">
    @if($data2[3] >= 1)
      <img class="thumbnail" src="{{ asset ('images/health.jpg') }}"></img>
      <input class="disabled_checkbox" type="checkbox" name="image" value= checked />
    @else
      <img class="thumbnail" src="{{ asset ('images/kakushikinoko.jpg') }}"></img>
    @endif
    </div>
    <div class="image-box">
    @if($data3>=15)
      <img class="thumbnail" src="{{ asset ('images/devil.jpg') }}"></img>
      <input class="disabled_checkbox" type="checkbox" name="image" value="images/health.jpg" checked />
    @else
      <img class="thumbnail" src="{{ asset ('images/kakushikinoko.jpg') }}"></img>
    @endif
    </div>
    <div class="image-box">
    @if($data3 >= 1)
      <img class="thumbnail" src="{{ asset ('images/dog.jpg') }}"></img>
      <input class="disabled_checkbox" type="checkbox" name="image" value="images/dog.jpg" checked />
    @else
      <img class="thumbnail" src="{{ asset ('images/kakushikinoko.jpg') }}"></img>
    @endif
    </div>
    <div class="image-box">
    @if($keepdata >= 1)
      <img class="thumbnail" src="{{ asset ('images/sue.jpg') }}"></img>
      <input class="disabled_checkbox" type="checkbox" name="image" value="{{ asset ('images/sue.jpg') }}" checked />
    @else
      <img class="thumbnail" src="{{ asset ('images/kakushikinoko.jpg') }}"></img>
    @endif
    </div>
  </div>
  <div class="container">
    <div class="image-box">
    @if($data3 >= 3)
      <img class="thumbnail" src="{{ asset ('images/panda.jpg') }}"></img>
      <input class="disabled_checkbox" type="checkbox" name="image" value="images/panda.jpg" checked />
    @else
      <img class="thumbnail" src="{{ asset ('images/kakushikinoko.jpg') }}"></img>
    @endif
    </div>
    <div class="image-box">
    @if($data3 >= 5)
      <img class="thumbnail" src="{{ asset ('images/tiger.jpg') }}"></img>
      <input class="disabled_checkbox" type="checkbox" name="image" value="images/tiger.jpg" checked />
    @else
      <img class="thumbnail" src="{{ asset ('images/kakushikinoko.jpg') }}"></img>
    @endif
    </div>
    <div class="image-box">
    @if($data3 >= 7)
      <img class="thumbnail" src="{{ asset ('images/kyouryuu.jpg') }}"></img>
      <input class="disabled_checkbox" type="checkbox" name="image" value="images/kyouryuu.jpg" checked />
    @else
      <img class="thumbnail" src="{{ asset ('images/kakushikinoko.jpg') }}"></img>
    @endif
    </div>
    <div class="image-box">
    @if($data3 >= 10)
      <img class="thumbnail" src="{{ asset ('images/kirin.jpg') }}"></img>
      <input class="disabled_checkbox" type="checkbox" name="image" value="images/kirin.jpg" checked />
    @else
      <img class="thumbnail" src="{{ asset ('images/kakushikinoko.jpg') }}"></img>
    @endif
    </div>
    <div class="image-box">
    @if($data1 >= 6)
      <img class="thumbnail" src="{{ asset ('images/kuma.jpg') }}"></img>
      <input class="disabled_checkbox" type="checkbox" name="image" value="images/kuma.jpg" checked />
    @else
      <img class="thumbnail" src="{{ asset ('images/kakushikinoko.jpg') }}"></img>
    @endif
    </div>
  </div>
  <div class="container">
    <div class="image-box">
    @if($data1 >= 9)
      <img class="thumbnail" src="{{ asset ('images/pig.jpg') }}"></img>
      <input class="disabled_checkbox" type="checkbox" name="image" value="images/pig.jpg" checked />
    @else
      <img class="thumbnail" src="{{ asset ('images/kakushikinoko.jpg') }}"></img>
    @endif
    </div>
    <div class="image-box">
    @if($data1 >= 12)
      <img class="thumbnail" src="{{ asset ('images/sai.jpg') }}"></img>
      <input class="disabled_checkbox" type="checkbox" name="image" value="images/sai.jpg" checked />
    @else
      <img class="thumbnail" src="{{ asset ('images/kakushikinoko.jpg') }}"></img>
    @endif
    </div>
    <div class="image-box">
    @if($data1 >= 15)
      <img class="thumbnail" src="{{ asset ('images/rabbit.jpg') }}"></img>
      <input class="disabled_checkbox" type="checkbox" name="image" value="images/rabbit.jpg" checked />
    @else
      <img class="thumbnail" src="{{ asset ('images/kakushikinoko.jpg') }}"></img>
    @endif
    </div>
    <div class="image-box">
    @if($keepdata >= 3)
      <img class="thumbnail" src="{{ asset ('images/zebra.jpg') }}"></img>
      <input class="disabled_checkbox" type="checkbox" name="image" value="images/zebra.jpg" checked />
    @else
      <img class="thumbnail" src="{{ asset ('images/kakushikinoko.jpg') }}"></img>
    @endif
    </div>
    <div class="image-box">
    @if($keepdata >= 5)
      <img class="thumbnail" src="{{ asset ('images/elephant.jpg') }}"></img>
      <input class="disabled_checkbox" type="checkbox" name="image" value="images/elephant.jpg" checked />
    @else
      <img class="thumbnail" src="{{ asset ('images/kakushikinoko.jpg') }}"></img>
    @endif
    </div>
    
    <div class="register button">
     
    {!! Form::submit('Register', ['class' => 'btn btn-primary btn-block']) !!}
    {!! Form::close() !!}
    </div>
    
@endsection
