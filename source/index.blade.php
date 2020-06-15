@extends('_layouts.master')

@section('body')
<h1>Hello world!</h1>

<div x-data="{ open: false }">
    <button @click="open = true">Open Dropdown</button>

    <ul
        x-show="open"
        @click.away="open = false"
    >
        Dropdown Body
    </ul>
</div>
@endsection
