@extends('layout')
@section('content')
            <!-- Main -->
            <section id="main">
                <div class="inner">
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                @endif
                    <h1> Welcome, {{Auth()->user()->name}}!</h1>
                    <h2>Dashboard<h1>
                        <div class="image fit">
                            <img src="images/pexels-photo-388415.jpeg" alt="" />
                        </div>
                </div>
            </div>
</section>

            <!-- Scripts -->
            <script src="assets/js/jquery.min.js"></script>
            <script src="assets/js/jquery.scrolly.min.js"></script>
            <script src="assets/js/skel.min.js"></script>
            <script src="assets/js/util.js"></script>
            <script src="assets/js/main.js"></script>

@endsection
