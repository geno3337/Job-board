@extends('layouts.layout')
@Section('title', 'Blog')
@Section('content')
    <x-blog::BlogCard :posts=$posts/>
    {{-- <x-CardDetails :job=$job/> --}}

@endSection
