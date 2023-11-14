<footer class="w-full fixed bottom-0 bg-white">
    <div class="flex items-center justify-between mx-16 p-6">
        <a href="{{ route('course.prev', $currentContent->id) }}" class="flex items-center text-one-secondary">
            <div class="rounded-full bg-one-secondary w-8 h-8 flex items-center justify-center">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-5 h-5 text-white">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5" />
                </svg>
            </div>

            <div class="ml-3 font-semibold tracking-wid">
                Topik Sebelumnya
            </div>
        </a>
        @if ($currentContent->is_passed)
            @if (
                ($currentContent->content->type == 4 ||
                    $currentContent->content->type == 5 ||
                    $currentContent->content->type == 6) &&
                    $currentContent->status == 0)
                <a href="#" class="flex items-center md:order-2 text-gray-300">
                    <div class="mr-3 font-semibold tracking-wide">
                        Selesai
                    </div>
                    <div class="rounded-full bg-gray-300 w-8 h-8 flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-5 h-5 text-white">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                        </svg>

                    </div>
                @else
                    <a href="{{ route('course.next', $currentContent->id) }}"
                        class="flex items-center md:order-2 text-one-primary">
                        <div class="mr-3 font-semibold tracking-wide">
                            @if ($currentContent->status == 0)
                                Selesai
                            @elseif($currentContent->status == 1)
                                Topik Selanjutnya
                            @endif
                        </div>
                        <div class="rounded-full bg-one-primary w-8 h-8 flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-5 h-5 text-white">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                            </svg>

                        </div>

                    </a>
            @endif
        @else
            @if (
                ($currentContent->content->type == 4 ||
                    $currentContent->content->type == 5 ||
                    $currentContent->content->type == 6) &&
                    $currentContent->status == 0)
                <a href="#" class="flex items-center md:order-2 text-gray-300">
                    <div class="mr-3 font-semibold tracking-wide">
                        Selesai
                    </div>
                    <div class="rounded-full bg-gray-300 w-8 h-8 flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-5 h-5 text-white">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                        </svg>

                    </div>
                @else
                    <button data-modal-target="keyword-modal" data-modal-toggle="keyword-modal" type="button"
                        class="flex items-center md:order-2 text-one-primary">
                        <div class="mr-3 font-semibold tracking-wide">
                            Topik Selanjutnya
                        </div>
                        <div class="rounded-full bg-one-primary w-8 h-8 flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-5 h-5 text-white">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                            </svg>

                        </div>
                    </button>
            @endif
        @endif
    </div>
</footer>
