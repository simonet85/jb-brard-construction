@extends('layouts.master')

@section('content')

<!-- header section ends -->

@include("partials.slider")

<!-- about section starts  -->

@include('partials.about')

<!-- about section ends -->

<!-- services section starts  -->
@include("partials.services")
<!-- services section ends -->

<!-- parallax section starts  -->

@include("partials.parallax")


@endsection