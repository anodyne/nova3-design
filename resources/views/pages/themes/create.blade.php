@extends('layouts.app')

@section('title', 'Create a Theme')

@section('content')
	@component('components.page-header')
		@slot('section', 'Presentation')
		@slot('title', 'Create a Theme')
	@endcomponent
@endsection
