@extends('admin.layouts.dashboard')

@section('content')
  <h1>Home Admin</h1>
  {{ auth()->user()->name }}
@endsection
