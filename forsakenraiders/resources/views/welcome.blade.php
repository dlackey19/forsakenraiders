@extends('layouts.default')

@section('css')
    @parent
    <style media="screen">
        .hero {
            background-image: linear-gradient(rgba(0, 0, 0,)), url('http://cdn.conbraco.com/elkharttriwent/images/homepage-hero.jpg'); background-repeat: no-repeat;background-size: cover;
        }
    </style>
@stop

@section('js')
    @parent
    <script src="/js/specific/welcome.js"></script>
@stop

@section('hero')
    <section class="hero bg-black">
        <div class="hero-container grid-container text-center text-white">
            <h1 class="text-center tablet-text-center tablet-phm text-uppercase mbl hide-on-mobile"><b style="letter-spacing:3px;">Add Title</b></h1>
            <p class="tablet-phm lead">[Add more content here]</p>
            <p><a class="btn btn-white btn-outline mtxl mobile-mtl" href="#">Learn More</a></p>
        </div>
    </section>
@endsection
