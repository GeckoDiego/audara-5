@extends('layouts.base')
@section('title', 'Audara Manager')
@section('link')
@endsection
@section('body_content')
  @component('layouts.menu.sidenav', ['dmenu' => $dmenu])
    <h4 class="font-weight-bold py-3 mb-4">
        Dashboard
        <div class="text-muted text-tiny mt-1">
        <small class="font-weight-normal">Today is Tuesday, 8 February 2018</small>
        </div>
      </h4>
      <div id="wrapper"></div>
  @endcomponent
@endsection
@section('script')
@endsection