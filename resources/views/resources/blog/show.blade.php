@extends('layouts.app')

@section('content')
<blog-post-details-view :initial-slug="'{{ $slug }}'"></blog-post-details-view>
@endsection
