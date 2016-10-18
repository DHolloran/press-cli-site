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
		<a href="/install/" class="btn btn-inverse video-hero-btn">
            <span class="type-prefix">$</span> <span class="type" style="width:14ch">press install</span>
        </a>
		<a href="/about/" class="btn btn-inverse video-hero-btn">
            <span class="type-prefix">$</span> <span class="type" style="width:12ch">press about</span>
        </a>
        <a href="/docs/" class="btn btn-inverse video-hero-btn">
            <span class="type-prefix">$</span> <span class="type" style="width:11ch">press docs</span>
        </a>
	</div>
</div>
@endsection
