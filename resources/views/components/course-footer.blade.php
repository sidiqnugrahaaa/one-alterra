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
        <a href="{{ route('course.next', $currentContent->id) }}" class="flex items-center md:order-2 text-one-primary">
            <div class="mr-3 font-semibold tracking-wide">
                @if ($currentContent->status == 0)
                    Selesai
                @else
                    Topik Selanjutnya
                @endif
            </div>
            <div class="rounded-full bg-one-primary w-8 h-8 flex items-center justify-center">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-5 h-5 text-white">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                </svg>

            </div>

        </a>
    </div>
</footer>
