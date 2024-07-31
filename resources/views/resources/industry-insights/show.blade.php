@extends('layouts.app')

@section('content')
<industry-insights-post-details-view :initial-slug="'{{ $slug }}'"></industry-insights-post-details-view>
@endsection
