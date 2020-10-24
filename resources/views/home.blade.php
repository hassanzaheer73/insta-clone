@extends('layouts.app')

@section('content')
<div class="container overflow-auto" style="height:580px; border-radius: 25px; background-color:#fff;">
    <div class="row">
        <div class="col-lg-3"><img src="./img/blackBack.jpg" height="100px" style="margin:20px;"  class="rounded-circle"/></div>
        <div class="col-lg-9"><div style="margin:20px;">
        <b>{{ Auth::user()->username }}</b>
        </div>
        <div class="row">
        <div class="p-2"><strong>15</strong> posts</div>
        <div class="p-2"><strong>23k</strong> followers</div>
        <div class="p-2"><strong>212</strong> following</div>
        </div>
        <div class="pt-3"><b>hashChat.org</b></div>
        <div>We're a global community of millions of people learning to code together. We're an open source, donor-supported, 501(c)(3) nonprofit.</div>
        <div><a href="">www.hashmaters.com</a></div>
        </div>
    </div>
</div>
@endsection
