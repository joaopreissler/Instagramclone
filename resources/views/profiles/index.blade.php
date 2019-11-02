@extends('layouts.app')
<link rel="stylesheet" href="resources\sass\app.scss">
@section('content')

<div class="container">
    <div class="row">
        <div class="col-3 pd-5">
            <img src="\svg\myphoto.jpg" class="rounded-circle" alt="">
        </div>
<div class="col-9 pt-5">
  <div class="d-flex justify-content-between align-items-baseline"><h1>{{$user->username}}</h1>
<a href="#">Add new post</a>
  </div>
  <div class="d-flex">
       <div class="pr-5"><strong>153</strong> posts</div>
       <div class="pr-5"><strong>23k</strong> followers</div>
       <div class="pr-5"><strong>121</strong> following</div>
  </div>
  <div class="pt-4 font-weight-bold">{{$user->profile->title}}</div>
<div>{{$user->profile->description}}</div>
<div><a href="#">{{$user->profile->url ?? 'N/A'}}</a></div>
  </div>
</div>
  <div class="row pt-5">
  <div class="col-4"><img src="https://instagram.fsdu11-1.fna.fbcdn.net/vp/302598e52b8b30b7a105300578790150/5E50E641/t51.2885-15/e35/c1.0.1438.1438a/s480x480/64506789_705958589848400_1972114791205560627_n.jpg?_nc_ht=instagram.fsdu11-1.fna.fbcdn.net&_nc_cat=108" class="w-100" alt=""> </div>
  <div class="col-4"><img src="https://instagram.fsdu11-1.fna.fbcdn.net/vp/2f1d29646a795d6018143758d7edc32e/5E54F153/t51.2885-15/e35/s480x480/51318541_360416941495122_7467701549964774448_n.jpg?_nc_ht=instagram.fsdu11-1.fna.fbcdn.net&_nc_cat=106" class="w-100" alt=""> </div>
  <div class="col-4"><img src="https://instagram.fsdu11-1.fna.fbcdn.net/vp/bb2a3e38b78c21103dc806c38f163690/5E426F58/t51.2885-15/e35/s480x480/28428600_1494819907295751_4272707738930249728_n.jpg?_nc_ht=instagram.fsdu11-1.fna.fbcdn.net&_nc_cat=103" class="w-100" alt=""> </div>
</div>
</div>

@endsection
