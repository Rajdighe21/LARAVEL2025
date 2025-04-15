@extends('learn-blade.app')


@section('main')
<main class="container my-5">
    <div class="row">
        <div class="col-md-8 mx-auto text-center">
            <h1 class="display-4">Welcome to Our Website</h1>
            <p class="lead">We offer amazing services to help you grow and succeed. Explore our website to learn more!</p>
            <a href="{{ url('/services') }}" class="btn btn-primary btn-lg">Explore Services</a>
        </div>
    </div>
</main>
@endsection


@push('costomJs')
<script>
  console.log('Hello This is Js Send From Here And This is Apply Only For This Page');
</script>
@endpush
