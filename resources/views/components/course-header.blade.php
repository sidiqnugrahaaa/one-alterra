<header class="w-full fixed text-one-secondary bg-[#E6E6E6] top-0">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
        <a href="{{ route('profile') }}">
            <div class="flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5" />
                </svg>
                <div class="ml-3 text-xl font-semibold tracking-wide text-gray-800 ">
                    Becoming
                    Professional UI/UX Designer
                </div>
            </div>
        </a>
        <div class="flex items-center md:order-2">
            <button type="button"
                class="flex mr-3 text-sm bg-gray-800 rounded-full md:mr-0 focus:ring-4 focus:ring-gray-300 "
                id="user-menu-button" aria-expanded="false" data-dropdown-toggle="user-dropdown"
                data-dropdown-placement="bottom">
                <span class="sr-only">Open user menu</span>
                <img class="w-10 h-10 rounded-full object-cover" src="{{ asset('assets/profile/profile.jpg') }}"
                    alt="user photo">
            </button>
            <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded-lg shadow "
                id="user-dropdown">
                <div class="px-4 py-3">
                    <span class="block text-sm text-gray-900 ">{{ session('user') }}</span>
                    <span class="block text-sm  text-gray-500 truncate ">{{ session('email') }}</span>
                </div>
                <ul class="py-2" aria-labelledby="user-menu-button">
                    <li>
                        <a href="{{ route('profile') }}"
                            class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 ">Profile</a>
                    </li>
                    <li>
                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 ">Settings</a>
                    </li>
                    <li>
                        <a href="{{ route('logout') }}"
                            class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 ">Sign
                            out</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</header>
