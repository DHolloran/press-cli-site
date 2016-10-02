@extends('_layouts.index')

@section('body')
<video autoplay loop muted class="press-bg-video">
	<source src="uploads/press-bg.m4v" type="video/mp4">
	<source src="uploads/press-bg.webm" type="video/webm">
</video>
<div class="video-hero">
	<div class="video-hero-inner">
		<h1>Press CLI</h1>
		<h2>Configurable WordPress Installer</h2>
		<a href="/install/" class="btn btn-inverse video-hero-btn">$ press install</a>
		<a href="/about/" class="btn btn-inverse video-hero-btn">$ press learn-more</a>
	</div>
</div>
@endsection
