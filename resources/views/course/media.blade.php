@extends('layouts.course')

@section('content')
    @if ($currentContent->content->type == 2)
        @if ($currentContent->content->contentVideo)
            <div class="w-full mb-4">
                {!! $currentContent->content->contentVideo->embed_code !!}

            </div>
            <div class="bg-[#FFEFE5] text-gray-600 text-sm me-2 px-2.5 py-1 rounded inline-flex items-center ">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                    class="w-6 h-6 mr-2 text-one-primary">
                    <path fill-rule="evenodd"
                        d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12zm8.706-1.442c1.146-.573 2.437.463 2.126 1.706l-.709 2.836.042-.02a.75.75 0 01.67 1.34l-.04.022c-1.147.573-2.438-.463-2.127-1.706l.71-2.836-.042.02a.75.75 0 11-.671-1.34l.041-.022zM12 9a.75.75 0 100-1.5.75.75 0 000 1.5z"
                        clip-rule="evenodd" />
                </svg> Perhatikan video dengan seksama, karena akan ada Keyword untuk membuka section berikutnya.
            </div>
            <div class="info my-4">
                <h1 class="text-one-secondary text-3xl font-bold">{{ $currentContent->content->contentVideo->title }}
                </h1>
                <p class="text-one-secondary text-lg mt-2">{{ $currentContent->content->contentVideo->description }}
                </p>
            </div>
        @endif
    @else
        @if ($currentContent->content->contentSlide)
            <div class="w-full mb-4">
                {!! $currentContent->content->contentSlide->embed_code !!}

            </div>
            <div class="info my-4">
                <h1 class="text-one-secondary text-3xl font-bold">{{ $currentContent->content->contentSlide->title }}
                </h1>
                <p class="text-one-secondary text-lg mt-2">{{ $currentContent->content->contentSlide->description }}
                </p>
            </div>
        @endif
    @endif
@endsection
