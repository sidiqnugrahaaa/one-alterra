@extends('layouts.course')

@section('content')
    <div class="w-full bg-white rounded-2xl h-fill p-8 text-one-secondary">
        <h1 class="text-2xl font-bold mb-8"> {{ $currentContent->content->title }}</h1>
        {!! $currentContent->content->contentPracticum->description !!}
        <hr>
        <div>
            <h5 class="text-lg font-bold my-2">Resume</h5>
            <textarea id="message" rows="4"
                class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 "
                placeholder="Jawaban"></textarea>
        </div>
        <div>
            <h5 class="text-lg font-bold my-2">Upload File</h5>
            <div class="flex items-center justify-center w-full">
                <label for="dropzone-file"
                    class="flex flex-col items-center justify-center w-full h-64 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 ">
                    <div class="flex flex-col items-center justify-center pt-5 pb-6">
                        <svg class="w-8 h-8 mb-4 text-gray-500 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 20 16">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2" />
                        </svg>
                        <p class="mb-2 text-sm text-gray-500 "><span class="font-semibold">Click to
                                upload</span> or drag and drop</p>
                        <p class="text-xs text-gray-500 ">docx, doc, pdf</p>
                    </div>
                    <input id="dropzone-file" type="file" class="hidden" />
                </label>
            </div>

        </div>
        <div class="text-end font-semibold mt-8" id="infoAnswered"></div>
        <div class="text-end">
            <button type="button"
                class=" text-white bg-one-primary hover:bg-one-primary focus:ring-4 font-medium rounded-lg px-5 py-2.5 my-2">Submit
            </button>
        </div>
    </div>
@endsection