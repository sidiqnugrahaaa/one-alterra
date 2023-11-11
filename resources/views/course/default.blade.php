@extends('layouts.course')

@section('content')
    <div class="w-full bg-white rounded-2xl h-fill p-8 text-one-secondary">
        <h1 class="text-2xl font-bold mb-8"> {{ $currentContent->content->title }}</h1>
        <hr>

        {!! $currentContent->content->contentText->content_value !!}

    </div>
@endsection
