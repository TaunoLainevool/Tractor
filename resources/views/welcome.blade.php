@extends('layout')

@section('content')
		<!-- Banner -->
			<section id="banner">
				<div class="inner">
					<h1>This is Tractor, an assistant of new age agriculturer</h1>
				</div>
			</section>

		<!-- Main -->
			<article id="one" class="post style1">
				<div class="image">
					<img src="images/sunset-field.jpg" alt="" data-position="75% center" />
                </div>

				<div class="content">
					<div class="inner">
						<header>
                            <h2><a href="/about">Thoughts about farming</a></h2>
                        </header>
                        @foreach ($articles as $article)
                        <header>
                        <p class="info">{{$article->author}}</a></p>
						</header>
                        <p>{{$article->body}}</p>
                        @endforeach
						<ul class="actions">
							<li><a href="/about" class="button alt">Read More</a></li>
						</ul>
					</div>
                </div>

            </article>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
            <script src="assets/js/main.js"></script>

@endsection
