@extends('layouts.app')

@section('content')

<div class="container">
  <div class="row">
    <div class="col-8">
      <img src="/storage/{{$post->image}}" alt="" class="w-100">

    </div>
<div class="col-4">
<div>
  <div class="">
<div class="d-flex align-items-center pl-3">
  <img src="/storage/{{$post->user->profile->profileImage()}}" class="rounded-circle w-100 " style="max-width: 40px;">
  <div class="font-weight-bold pl-3"> <a href="/profile/{{$post->user->username}}">
    <span class="text-dark">{{$post->user->username}}</a></div> |
      <a href="#" class"pr-3">Follow</a>
</div>
</div>
<hr>
    <p> <a href="/profile/{{$post->user->username}}"> <span class="font-weight-bold text-dark pr-2">
      {{$post->user->username}}</a></span>{{$post->caption}}</p>
  </div>

</div>
  </div>
</div>
@endsection
