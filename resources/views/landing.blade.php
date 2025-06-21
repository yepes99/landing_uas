@extends('layouts.app')

@section('title', 'Curso Arte Digital')


  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />


@section('content')
<main>
@include('hero')
@include('section-2')
@include('section-3')
@include('section-4')
@include('section-5')
@include('section-6')

@include('contact-form')
  



</main>
@endsection
