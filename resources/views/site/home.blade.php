@extends('site.layouts.landpage')

@section('content')
    @foreach ($landingPage as $sector)
        <x-full-height-sector
            :id="$sector['id']"
            :title="$sector['title']"
            :description="$sector['description']"
            :image="$sector['image']"
            :titleside="$sector['titleside']"
            :type="$sector['type']"
        />
    @endforeach
@endsection
