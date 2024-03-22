<x-layout>

    @if (session()->has('success'))
        {{session('success')}}
    @endif
    <x-hero />
    <x-blogs-section :$blogs />

</x-layout>
