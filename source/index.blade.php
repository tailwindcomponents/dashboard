@extends('_layouts.master')

@section('body')
<div class="flex h-screen bg-gray-200">
    @include('_layouts._sidebar')

    <div class="flex-1 flex flex-col">
        @include('_layouts._header')

        <main class="flex-1 overflow-y-auto bg-gray-200">
            <div class="container mx-auto px-6 w-full h-full"></div>
        </main>
    </div>
</div>
@endsection
