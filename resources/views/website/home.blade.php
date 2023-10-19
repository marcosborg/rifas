@extends('layouts.website')
@section('content')

<x-hero-slider :slides=$slides />

<x-posts />

@endsection