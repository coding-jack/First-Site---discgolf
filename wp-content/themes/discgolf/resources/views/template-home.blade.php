{{--
  Template Name: Home Template
--}}

@extends('layouts.fluid')

@section('content')
  @while(have_posts()) @php(the_post())
    <div class="row hero">
      <div class="container">
        <div class="row">
          <div class="col">
            <h1 class="text-white">Disc Golf Fuck Yeah!</h1>
          </div>
        </div>
      </div>
    </div>
    <div class="row py-5">
      <div class="container">
        <div class="row intro">
          <div class="col-12 col-md-6 intro-pic">
            <img src="https://i.ytimg.com/vi/YAMZOG_9gno/hqdefault.jpg" class="w-100 img-fluid pb-4 pb-md-0">
          </div>
          <div class="col-12 col-md-6">
            <h2>Do You Like Discing? Fuck Yeah!</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas non lectus fermentum, hendrerit dui ultrices, maximus lectus. Quisque id laoreet elit. Cras ultricies tempor ipsum et convallis. Cras suscipit ultricies posuere. Nunc tincidunt ornare magna, sed posuere augue convallis sed. Phasellus nulla nisi, interdum id rhoncus a, lobortis non augue. Fusce massa nulla, vestibulum sit amet ex sit amet, luctus rhoncus metus. Fusce faucibus sed nulla vitae bibendum. Nulla rutrum ex vitae sapien semper, eu bibendum turpis tempus. Vivamus odio mauris, placerat at magna vel, maximus elementum ex.</p>
          </div>
        </div>
        <div class="row description py-5">
          <div class="col text-center">
            <h2>Hi guys, I like disc golfing!</h2>
            <h4 class="pb-3">Derp Derp a Derp duuurrrrrr!</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas non lectus fermentum, hendrerit dui ultrices, maximus lectus. Quisque id laoreet elit. Cras ultricies tempor ipsum et convallis. Cras suscipit ultricies posuere. Nunc tincidunt ornare magna, sed posuere augue convallis sed. Phasellus nulla nisi, interdum id rhoncus a, lobortis non augue. Fusce massa nulla, vestibulum sit amet ex sit amet, luctus rhoncus metus. Fusce faucibus sed nulla vitae bibendum. Nulla rutrum ex vitae sapien semper, eu bibendum turpis tempus. Vivamus odio mauris, placerat at magna vel, maximus elementum ex.</p>
          </div>
        </div>
      </div>
    </div>
    <div class="row gallery bg-inverse py-5">
      <div class="container">
        <div class="row">
          <div class="col">
            <img src="https://media.giphy.com/media/MGYY2FIs8VrfW/giphy.gif" class="w-100 img-fluid">
          </div>
          <div class="col">
            <img src="https://media.giphy.com/media/3t7RAFhu75Wwg/giphy.gif" class="w-100 img-fluid">
          </div>
          <div class="col">
            <img src="https://media.giphy.com/media/pa37AAGzKXoek/giphy.gif" class="w-100 img-fluid">
          </div>
        </div>
      </div>
    </div>

  @endwhile
@endsection
