@extends('layouts.app')

@section('content')
@extends ('layouts.header')
<div class="main-content">
    <section class="banner d-flex justify-content-start align-items-end p-4 mb-5">
        <div class="container d-flex justify-content-between align-items-center">
            <h1 class="fw-semibold text-white display-4">{{ $student->name }}</h1>
        </div>
    </section>
    <div class="container px-4">
        <div class="row mb-5">
                {{ $student->description }}
            </div>
        </div>
    </div>
</div>
@endsection