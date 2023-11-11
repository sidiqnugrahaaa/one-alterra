<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-[#E6E6E6]">
    <div class="relative w-full">
        @include('../components/course-header')
        <main class="mx-24">
            <div class="grid grid-cols-12 gap-6 my-24">
                <div class="col-span-8 mr-2">

                    @yield('content')

                </div>
                <div class="col-span-4 bg-white rounded-2xl py-6 px-3 w-full">
                    <h4 class="text-one-secondary text-xl font-semibold">Course Section</h4>
                    <div class="mt-4 mb-8">
                        <div class="flex justify-end mb-1">
                            <span class="text-sm font-medium text-one-primary ">{{ $enrolled->progress }}%</span>
                        </div>
                        <div class="w-full bg-gray-200 rounded-full h-2.5 mb-4 dark:bg-gray-700">
                            <div class="bg-one-primary h-2.5 rounded-full"
                                style="{{ 'width: ' . $enrolled->progress . '%' }}"></div>
                        </div>
                    </div>
                    @foreach ($detailCourse as $blueIndex => $item)
                        <div class="my-4 w-full">
                            <h5 class="text-one-secondary text-md uppercase">{{ $item->title }}</h5>
                            @foreach ($item->syllabus as $syllabusIndex => $syllabus)
                                <div id="{{ 'accordion-' . $blueIndex }}" data-accordion="collapse"
                                    class=" bg-[#E6E6E6] p-4 rounded-xl my-2" data-active-classes="text-one-secondary"
                                    data-inactive-classes="text-one-secondary">
                                    <h2 id="{{ 'accordion-' . $blueIndex . '-heading-' . $syllabusIndex + 1 }}">
                                        <button type="button"
                                            class="flex items-center justify-between w-full font-medium text-left text-gray-500 border-b border-gray-200 dark:border-gray-700 dark:text-gray-400"
                                            data-accordion-target="{{ '#accordion-' . $blueIndex . '-body-' . $syllabusIndex + 1 }}"
                                            aria-expanded="true"
                                            aria-controls="{{ 'accordion-' . $blueIndex . '-body-' . $syllabusIndex + 1 }}">
                                            <span>{{ $syllabus->title }}</span>
                                            <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0"
                                                aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                                viewBox="0 0 10 6">
                                                <path stroke="currentColor" stroke-linecap="round"
                                                    stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5" />
                                            </svg>
                                        </button>
                                    </h2>
                                    <div id="{{ 'accordion-' . $blueIndex . '-body-' . $syllabusIndex + 1 }}"
                                        class="hidden"
                                        aria-labelledby="{{ 'accordion-' . $blueIndex . '-heading-' . $syllabusIndex + 1 }}">
                                        @foreach ($syllabus->content as $contentIndex => $content)
                                            <div class="bg-white flex items-center rounded-xl p-3 mt-4 justify-between">
                                                <div class="flex items-center">
                                                    <div class="mr-2">
                                                        @switch($content->type)
                                                            @case(1)
                                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                                    viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                                    class="w-6 h-6">
                                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                                        d="M11.25 11.25l.041-.02a.75.75 0 011.063.852l-.708 2.836a.75.75 0 001.063.853l.041-.021M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-9-3.75h.008v.008H12V8.25z" />
                                                                </svg>
                                                            @break

                                                            @case(2)
                                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                                    viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                                    class="w-6 h-6">
                                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                                        d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                                        d="M15.91 11.672a.375.375 0 010 .656l-5.603 3.113a.375.375 0 01-.557-.328V8.887c0-.286.307-.466.557-.327l5.603 3.112z" />
                                                                </svg>
                                                            @break

                                                            @case(3)
                                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                                    viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                                    class="w-6 h-6">
                                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                                        d="M3.75 3v11.25A2.25 2.25 0 006 16.5h2.25M3.75 3h-1.5m1.5 0h16.5m0 0h1.5m-1.5 0v11.25A2.25 2.25 0 0118 16.5h-2.25m-7.5 0h7.5m-7.5 0l-1 3m8.5-3l1 3m0 0l.5 1.5m-.5-1.5h-9.5m0 0l-.5 1.5M9 11.25v1.5M12 9v3.75m3-6v6" />
                                                                </svg>
                                                            @break

                                                            @case(4)
                                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                                    viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                                    class="w-6 h-6">
                                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                                        d="M10.125 2.25h-4.5c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125v-9M10.125 2.25h.375a9 9 0 019 9v.375M10.125 2.25A3.375 3.375 0 0113.5 5.625v1.5c0 .621.504 1.125 1.125 1.125h1.5a3.375 3.375 0 013.375 3.375M9 15l2.25 2.25L15 12" />
                                                                </svg>
                                                            @break

                                                            @case(5)
                                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                                    viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                                    class="w-6 h-6">
                                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                                        d="M14.25 6.087c0-.355.186-.676.401-.959.221-.29.349-.634.349-1.003 0-1.036-1.007-1.875-2.25-1.875s-2.25.84-2.25 1.875c0 .369.128.713.349 1.003.215.283.401.604.401.959v0a.64.64 0 01-.657.643 48.39 48.39 0 01-4.163-.3c.186 1.613.293 3.25.315 4.907a.656.656 0 01-.658.663v0c-.355 0-.676-.186-.959-.401a1.647 1.647 0 00-1.003-.349c-1.036 0-1.875 1.007-1.875 2.25s.84 2.25 1.875 2.25c.369 0 .713-.128 1.003-.349.283-.215.604-.401.959-.401v0c.31 0 .555.26.532.57a48.039 48.039 0 01-.642 5.056c1.518.19 3.058.309 4.616.354a.64.64 0 00.657-.643v0c0-.355-.186-.676-.401-.959a1.647 1.647 0 01-.349-1.003c0-1.035 1.008-1.875 2.25-1.875 1.243 0 2.25.84 2.25 1.875 0 .369-.128.713-.349 1.003-.215.283-.4.604-.4.959v0c0 .333.277.599.61.58a48.1 48.1 0 005.427-.63 48.05 48.05 0 00.582-4.717.532.532 0 00-.533-.57v0c-.355 0-.676.186-.959.401-.29.221-.634.349-1.003.349-1.035 0-1.875-1.007-1.875-2.25s.84-2.25 1.875-2.25c.37 0 .713.128 1.003.349.283.215.604.401.96.401v0a.656.656 0 00.658-.663 48.422 48.422 0 00-.37-5.36c-1.886.342-3.81.574-5.766.689a.578.578 0 01-.61-.58v0z" />
                                                                </svg>
                                                            @break

                                                            @case(6)
                                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                                    viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                                    class="w-6 h-6">
                                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                                        d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                                                                </svg>
                                                            @break

                                                            @default
                                                        @endswitch
                                                    </div>
                                                    <div class="text-sm text-one-secondary">{{ $content->title }}
                                                    </div>
                                                </div>
                                                <div class="ml-2 right-0">
                                                    @if ($content->id < $enrolled->currentCourse->content_id)
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                            fill="currentColor" class="text-one-secondary w-6 h-6">
                                                            <path fill-rule="evenodd"
                                                                d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12zm13.36-1.814a.75.75 0 10-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 00-1.06 1.06l2.25 2.25a.75.75 0 001.14-.094l3.75-5.25z"
                                                                clip-rule="evenodd" />
                                                        </svg>
                                                    @else
                                                        <div class="bg-[#E6E6E6] rounded-full w-5 h-5"></div>
                                                    @endif
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    @endforeach
                </div>
            </div>
        </main>
        @include('../components/course-footer')
    </div>
    @yield('modal')
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @yield('script')
    <script>
        const csrfToken = document.head.querySelector('meta[name="csrf-token"]').content;
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': csrfToken
            }
        });
    </script>
</body>

</html>
