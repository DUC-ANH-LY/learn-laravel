@extends('layouts.master')
@section('title', 'Dashboard')
@section('content')
    Welcome to your application dashboard! {{$recentPosts }}
@endsection
@section('footerScripts')
    @parent
    <script src="dashboard.js"></script>
@endsection
