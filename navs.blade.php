@extends('layouts.main')
@section('content')


<div class="navs">
    <div class="col-md-2 bg-light">
        <div class="card mt-4">
          <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
            <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="/" role="tab">Home</a>
            <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="/masterdata" role="tab">Master Data</a>
            <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="/about" role="tab">About</a>
            <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="/faq" role="tab">FAQ</a>
          </div>
        </div>
      </div>
</div>

@endsection
