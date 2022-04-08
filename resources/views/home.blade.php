@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-4 p-5">
            <img src="https://www.w3schools.com/images/w3schools_green.jpg" class="rounded-circle" style="height: 200px; width: 200px;">
        </div>

        <div class="col-8 pt-5">
            <div><h1>Free_Code</h1></div>
            <div class="d-flex">
                <div class="pe-5"><strong>153</strong>posts</div>
                <div class="pe-5"><strong>23k</strong>followers</div>
                <div class="pe-5"><strong>212</strong>following</div>
            </div>
            <div class="pt-4 fw-bold">freeCodeCamp.org</div>
            <div>We're a global community of millions of people learning to code together.
                LearnToCodeRPG: https://www.freecodecamp.org/news/learn-to-code-rpg/</div>
            <div><a href="#">www.freecodecamp.org</a></div>
        </div>
    </div>
{{--    For the posts--}}
    <div class="row pt-4">
        <div class="col-4">
            <img src="https://cdn.pixabay.com/photo/2021/05/12/22/13/social-media-6249432_960_720.jpg" class="w-100">
        </div>
        <div class="col-4">
            <img src="https://cdn.pixabay.com/photo/2016/11/19/14/00/code-1839406__340.jpg" class="w-100">
        </div>
        <div class="col-4">
            <img src="https://cdn.pixabay.com/photo/2016/11/30/20/58/programming-1873854__340.png" class="w-100">
        </div>
    </div>
</div>
@endsection
