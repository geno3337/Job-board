@extends('layouts.layout')
@Section('title', 'Blog')
@Section('content')
    <x-blog::BlogDetail :post=$post/>
@endSection
