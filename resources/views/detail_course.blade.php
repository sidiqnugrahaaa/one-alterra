@extends('layouts.main')

@section('content')
    <div class="w-screen h-fill relative overflow-hidden bg-[#F4F9FF]">
        <div class="container mx-auto">
            <div class="py-8 text-one-secondary px-8">
                <h1 class="text-3xl mb-4">Becoming Professional<br>UI/UX Designer</h1>
                <h5 class="text-lg">Kampus Merdeka</h5>
            </div>
        </div>
    </div>
    <div class="container mx-auto">
        <div class="grid grid-cols-3 gap-16 p-8">
            <div class="col-span-2 flex flex-col items-center">
                <iframe width="780" height="400" class="shadow-xl rounded-xl mb-16"
                    src="https://www.youtube.com/embed/_btxV8tJM7w?si=K5SFEeTuMRkinQr9&amp;controls=0"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    allowfullscreen></iframe>


                <div class="mb-4 border-b border-gray-200 w-full">
                    <ul class="flex w-full text-sm font-medium text-center" id="myTab" data-tabs-toggle="#myTabContent"
                        role="tablist">
                        <li class="mr-2 w-1/2" role="presentation">
                            <button
                                class="inline-block w-full p-4 border-b-2 rounded-t-lg border-transparent  hover:text-one-primary hover:border-one-primary hover:bg-orange-100"
                                id="profile-tab" data-tabs-target="#profile" type="button" role="tab"
                                aria-controls="profile"
                                aria-selected="{text-one-primary border-one-primary bg-orange-100}">Informasi</button>
                        </li>
                        <li class="mr-2 w-1/2" role="presentation">
                            <button
                                class="inline-block w-full p-4 border-b-2 border-transparent rounded-t-lg hover:text-one-primary hover:border-one-primary hover:bg-orange-100"
                                id="dashboard-tab" data-tabs-target="#dashboard" type="button" role="tab"
                                aria-controls="dashboard" aria-selected="false">Silabus</button>
                        </li>

                    </ul>
                </div>
                <div id="myTabContent" class="w-full">
                    <div class="hidden py-4 text-one-secondary" id="profile" role="tabpanel"
                        aria-labelledby="profile-tab">
                        <h6 class="font-bold mb-4 text-lg">Tentang Kelas</h6>
                        <p class="mb-8 leading-relaxed">
                            Salah satu pekerjaan yang sedang on-demand menurut Linkedin yaitu UI/UX Designer. Alasannya
                            sangat sederhana dengan adanya profesi ini mampu meningkatkan pengalaman pengguna. UI / UX
                            memainkan peran integral dalam membantu aplikasi agar menonjol. Oleh karena itu, memiliki UI
                            yang terintegrasi dan harmonis atau UX dalam aplikasi seluler tidak hanya membantu bisnis untuk
                            menarik lebih banyak pengguna tetapi juga meningkatkan kepuasan pelanggan.
                        </p>
                        <h6 class="font-bold mb-4 text-lg">Tools yang Digunakan</h6>
                        <div class="flex mb-8">
                            <div class="flex items-center mr-16">
                                <img src="https://cdn.sanity.io/images/599r6htc/localized/46a76c802176eb17b04e12108de7e7e0f3736dc6-1024x1024.png"
                                    alt="logo-figma" class="w-16 h-16">
                                <div class="text-lg ml-4">Figma</div>
                            </div>
                            <div class="flex items-center mr-16">
                                <img src="https://images-eds-ssl.xboxlive.com/image?url=Q_rwcVSTCIytJ0KOzcjWTYtI_MIrVq4WfN7M.qN7gV3ayNiQeJK6Uxg366DH3bnRmVWMFBWWyXonVyp6x0RYE1elb_jkQQQH7FwsNBBqQO4iFrOIwXtaGkMjmrISfBfgMsCEGwIBPArmzCSVWYx1zA--&format=source"
                                    alt="logo-figma" class="w-16 h-16">
                                <div class="text-lg ml-4">Visual Studio Code</div>
                            </div>
                        </div>
                        <h6 class="font-bold mb-4 text-lg">Mentor</h6>
                        <div class="flex">
                            <img src="{{ asset('assets/mentor/Mentor ganteng.png') }}" class="w-32 h-32" alt="">
                            <div class="ml-8">
                                <h5 class="font-semibold mb-2">Winston Ramadhan</h5>
                                <p class="leading-relaxed">Winston adalah seorang mentor kelas dunia dalam kursus UI/UX
                                    design
                                    kami, dengan
                                    pengalaman berharga dari perusahaan ternama dalam industri. Dia telah membantu banyak
                                    profesional muda memahami dan menguasai prinsip-prinsip desain antarmuka pengguna.
                                    Bergabunglah dengan kursusnya sekarang dan ikuti jejak suksesnya untuk mencapai tingkat
                                    keahlian yang luar biasa dalam UI/UX design!</p>
                            </div>
                        </div>
                    </div>
                    <div class="hidden p-4 rounded-lg w-full" id="dashboard" role="tabpanel"
                        aria-labelledby="dashboard-tab">
                        @foreach ($detailCourse as $blueIndex => $item)
                            <div class="my-4">
                                <h5 class="text-one-secondary text-md uppercase">{{ $item->title }}</h5>
                                @foreach ($item->syllabus as $syllabusIndex => $syllabus)
                                    <div id="{{ 'accordion-' . $blueIndex }}" data-accordion="collapse"
                                        class=" bg-[#E6E6E6] p-4 rounded-xl my-2" data-active-classes="text-one-secondary"
                                        data-inactive-classes="text-one-secondary">
                                        <h2 id="{{ 'accordion-' . $blueIndex . '-heading-' . $syllabusIndex + 1 }}">
                                            <button type="button"
                                                class="flex items-center justify-between w-full font-medium text-left text-gray-500 border-b border-gray-200  
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
                                                <div class="bg-white flex items-center rounded-xl p-3 mt-4">
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
                                            @endforeach
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        @endforeach
                    </div>
                </div>

            </div>
            <div class="relative">
                <div class="w-full h-fill p-4 bg-white shadow-lg rounded-lg sticky top-8">
                    <img src="{{ asset('assets/kelas/kelas_1.png') }}" class="w-full h-48 rounded-lg mb-4"
                        alt="">
                    <div class="flex items-center mb-2">
                        <svg width="32" height="33" viewBox="0 0 32 33" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M8.01501 18.818C8.0184 18.8857 8.00798 18.9534 7.98438 19.017C7.96077 19.0806 7.92448 19.1387 7.87771 19.1878C7.83094 19.2369 7.77466 19.276 7.71231 19.3027C7.64996 19.3293 7.58283 19.343 7.51501 19.343H2.00001C1.77431 19.3433 1.55512 19.2673 1.37811 19.1273C1.20109 18.9872 1.07664 18.7914 1.02501 18.5717C0.992865 18.4213 0.994347 18.2657 1.02935 18.1159C1.06436 17.9662 1.13203 17.826 1.22751 17.7055C2.10977 16.5354 3.28038 15.6142 4.62501 15.0317C4.03467 14.4935 3.5819 13.8216 3.30461 13.0724C3.02732 12.3232 2.9336 11.5184 3.03128 10.7255C3.12897 9.93264 3.41522 9.1747 3.86606 8.51519C4.31691 7.85568 4.91922 7.3138 5.62255 6.93494C6.32588 6.55608 7.10976 6.35126 7.90852 6.33764C8.70729 6.32402 9.49769 6.502 10.2135 6.85667C10.9294 7.21133 11.5498 7.73236 12.0229 8.37612C12.4959 9.01988 12.8079 9.76762 12.9325 10.5567C12.9486 10.6628 12.9296 10.7713 12.8784 10.8656C12.8272 10.9599 12.7465 11.0349 12.6488 11.0792C11.2618 11.7204 10.0871 12.745 9.2634 14.0321C8.4397 15.3191 8.00133 16.8149 8.00001 18.343C8.00001 18.503 8.00001 18.6605 8.01501 18.818ZM30.765 17.7042C29.8848 16.5355 28.7169 15.6148 27.375 15.0317C27.9654 14.4935 28.4181 13.8216 28.6954 13.0724C28.9727 12.3232 29.0664 11.5184 28.9687 10.7255C28.8711 9.93264 28.5848 9.1747 28.134 8.51519C27.6831 7.85568 27.0808 7.3138 26.3775 6.93494C25.6741 6.55608 24.8903 6.35126 24.0915 6.33764C23.2927 6.32402 22.5023 6.502 21.7865 6.85667C21.0707 7.21133 20.4502 7.73236 19.9772 8.37612C19.5041 9.01988 19.1922 9.76762 19.0675 10.5567C19.0514 10.6628 19.0704 10.7713 19.1216 10.8656C19.1729 10.9599 19.2535 11.0349 19.3513 11.0792C20.7383 11.7204 21.9129 12.745 22.7366 14.0321C23.5603 15.3191 23.9987 16.8149 24 18.343C24 18.503 24 18.6605 23.985 18.818C23.9816 18.8857 23.992 18.9534 24.0157 19.017C24.0393 19.0806 24.0755 19.1387 24.1223 19.1878C24.1691 19.2369 24.2254 19.276 24.2877 19.3027C24.3501 19.3293 24.4172 19.343 24.485 19.343H30C30.2257 19.3433 30.4449 19.2673 30.6219 19.1273C30.7989 18.9872 30.9234 18.7914 30.975 18.5717C31.0074 18.421 31.0059 18.2651 30.9706 18.1151C30.9354 17.9651 30.8673 17.8247 30.7713 17.7042H30.765ZM19.64 23.1017C20.6357 22.3392 21.3674 21.2838 21.7323 20.0839C22.0972 18.884 22.0769 17.6 21.6744 16.4122C21.2718 15.2244 20.5071 14.1927 19.4879 13.4619C18.4686 12.7312 17.246 12.3382 15.9919 12.3382C14.7377 12.3382 13.5151 12.7312 12.4959 13.4619C11.4766 14.1927 10.712 15.2244 10.3094 16.4122C9.90683 17.6 9.88657 18.884 10.2515 20.0839C10.6164 21.2838 11.3481 22.3392 12.3438 23.1017C10.5769 23.8673 9.1016 25.1783 8.13376 26.843C8.04599 26.995 7.99978 27.1675 7.99979 27.343C7.9998 27.5186 8.04603 27.691 8.13382 27.8431C8.22161 27.9951 8.34788 28.1213 8.49993 28.2091C8.65199 28.2968 8.82446 28.343 9.00001 28.343H23C23.1756 28.343 23.348 28.2968 23.5001 28.2091C23.6521 28.1213 23.7784 27.9951 23.8662 27.8431C23.954 27.691 24.0002 27.5186 24.0002 27.343C24.0002 27.1675 23.954 26.995 23.8663 26.843C22.8964 25.1772 21.4183 23.8661 19.6488 23.1017H19.64Z"
                                fill="#19345F" />
                        </svg>
                        <div class="ml-4 font-light">526 Peserta Terdaftar</div>
                    </div>
                    <div class="flex items-center mb-2">
                        <svg width="32" height="33" viewBox="0 0 32 33" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M28.9562 24.6618L24.8075 4.9368C24.7538 4.67886 24.6497 4.43405 24.5012 4.21645C24.3526 3.99886 24.1626 3.81276 23.9419 3.66884C23.7212 3.52493 23.4742 3.42604 23.2152 3.37785C22.9562 3.32966 22.6902 3.33313 22.4325 3.38805L16.5812 4.64555C16.0637 4.75888 15.6118 5.07197 15.3239 5.51673C15.036 5.9615 14.9353 6.50195 15.0437 7.02055L19.1925 26.7456C19.285 27.1956 19.5295 27.6001 19.8851 27.891C20.2407 28.1819 20.6856 28.3415 21.145 28.3431C21.287 28.3429 21.4286 28.3278 21.5675 28.2981L27.4188 27.0406C27.9369 26.927 28.3893 26.6132 28.6772 26.1677C28.9652 25.7222 29.0655 25.1809 28.9562 24.6618ZM17 6.6118C17 6.6043 17 6.60055 17 6.60055L22.85 5.35055L23.2663 7.3343L17.4163 8.59305L17 6.6118ZM18.25 12.5343L17.8312 10.5468L23.6838 9.2893L24.1012 11.2768L18.25 12.5343ZM27 25.0856L21.15 26.3356L20.7337 24.3518L26.5837 23.0931L27 25.0743C27 25.0818 27 25.0856 27 25.0856ZM13 4.34305H7C6.46957 4.34305 5.96086 4.55377 5.58579 4.92884C5.21071 5.30391 5 5.81262 5 6.34305V26.3431C5 26.8735 5.21071 27.3822 5.58579 27.7573C5.96086 28.1323 6.46957 28.3431 7 28.3431H13C13.5304 28.3431 14.0391 28.1323 14.4142 27.7573C14.7893 27.3822 15 26.8735 15 26.3431V6.34305C15 5.81262 14.7893 5.30391 14.4142 4.92884C14.0391 4.55377 13.5304 4.34305 13 4.34305ZM7 6.34305H13V8.34305H7V6.34305ZM13 26.3431H7V24.3431H13V26.3431Z"
                                fill="#19345F" />
                        </svg>

                        <div class="ml-4 font-light">Full Akses Video & Materi</div>
                    </div>
                    <div class="flex items-center mb-2">
                        <svg width="32" height="33" viewBox="0 0 32 33" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M16 3.34302C13.4288 3.34302 10.9154 4.10545 8.77759 5.53391C6.63975 6.96237 4.97351 8.99269 3.98957 11.3681C3.00563 13.7436 2.74819 16.3574 3.2498 18.8792C3.75141 21.4009 4.98953 23.7173 6.80762 25.5354C8.6257 27.3535 10.9421 28.5916 13.4638 29.0932C15.9856 29.5948 18.5995 29.3374 20.9749 28.3535C23.3503 27.3695 25.3807 25.7033 26.8091 23.5654C28.2376 21.4276 29 18.9142 29 16.343C28.9964 12.8963 27.6256 9.59183 25.1884 7.15465C22.7512 4.71746 19.4467 3.34666 16 3.34302ZM23 17.343H16C15.7348 17.343 15.4804 17.2377 15.2929 17.0501C15.1054 16.8626 15 16.6082 15 16.343V9.34302C15 9.0778 15.1054 8.82345 15.2929 8.63591C15.4804 8.44837 15.7348 8.34302 16 8.34302C16.2652 8.34302 16.5196 8.44837 16.7071 8.63591C16.8946 8.82345 17 9.0778 17 9.34302V15.343H23C23.2652 15.343 23.5196 15.4484 23.7071 15.6359C23.8946 15.8234 24 16.0778 24 16.343C24 16.6082 23.8946 16.8626 23.7071 17.0501C23.5196 17.2377 23.2652 17.343 23 17.343Z"
                                fill="#19345F" />
                        </svg>

                        <div class="ml-4 font-light">Waktu Belajar Fleksibel</div>
                    </div>
                    <div class="flex items-center mb-2">
                        <svg width="32" height="33" viewBox="0 0 32 33" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M26 4.34302H23V3.34302C23 3.0778 22.8946 2.82345 22.7071 2.63591C22.5196 2.44837 22.2652 2.34302 22 2.34302C21.7348 2.34302 21.4804 2.44837 21.2929 2.63591C21.1054 2.82345 21 3.0778 21 3.34302V4.34302H11V3.34302C11 3.0778 10.8946 2.82345 10.7071 2.63591C10.5196 2.44837 10.2652 2.34302 10 2.34302C9.73478 2.34302 9.48043 2.44837 9.29289 2.63591C9.10536 2.82345 9 3.0778 9 3.34302V4.34302H6C5.46957 4.34302 4.96086 4.55373 4.58579 4.9288C4.21071 5.30388 4 5.81258 4 6.34302V26.343C4 26.8735 4.21071 27.3822 4.58579 27.7572C4.96086 28.1323 5.46957 28.343 6 28.343H26C26.5304 28.343 27.0391 28.1323 27.4142 27.7572C27.7893 27.3822 28 26.8735 28 26.343V6.34302C28 5.81258 27.7893 5.30388 27.4142 4.9288C27.0391 4.55373 26.5304 4.34302 26 4.34302ZM26 10.343H6V6.34302H9V7.34302C9 7.60823 9.10536 7.86259 9.29289 8.05012C9.48043 8.23766 9.73478 8.34302 10 8.34302C10.2652 8.34302 10.5196 8.23766 10.7071 8.05012C10.8946 7.86259 11 7.60823 11 7.34302V6.34302H21V7.34302C21 7.60823 21.1054 7.86259 21.2929 8.05012C21.4804 8.23766 21.7348 8.34302 22 8.34302C22.2652 8.34302 22.5196 8.23766 22.7071 8.05012C22.8946 7.86259 23 7.60823 23 7.34302V6.34302H26V10.343Z"
                                fill="#19345F" />
                        </svg>

                        <div class="ml-4 font-light">Durasi Belajar 4 Bulan</div>
                    </div>
                    <div class="flex items-center mb-2">
                        <svg width="32" height="33" viewBox="0 0 32 33" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M28.9739 23.7593C29.6792 22.3257 30.0307 20.7439 29.9989 19.1466C29.9672 17.5492 29.5532 15.9826 28.7916 14.5781C28.03 13.1737 26.943 11.9721 25.6215 11.0741C24.3 10.1761 22.7827 9.6078 21.1964 9.4168C20.6703 8.19045 19.9041 7.0818 18.943 6.15616C17.9818 5.23052 16.8451 4.50661 15.5998 4.02709C14.3545 3.54757 13.0258 3.32214 11.6921 3.36407C10.3583 3.406 9.04644 3.71445 7.83374 4.27125C6.62103 4.82804 5.53203 5.62192 4.6309 6.60611C3.72976 7.5903 3.03472 8.74489 2.58672 10.0019C2.13872 11.2588 1.94682 12.5927 2.02234 13.925C2.09785 15.2573 2.43925 16.561 3.02642 17.7593L2.06892 21.1118C1.98347 21.4117 1.97973 21.729 2.05807 22.0309C2.13642 22.3327 2.294 22.6082 2.51452 22.8287C2.73503 23.0492 3.01047 23.2068 3.31233 23.2851C3.61418 23.3635 3.93149 23.3597 4.23142 23.2743L7.58392 22.3168C8.59555 22.8135 9.68374 23.1359 10.8027 23.2705C11.336 24.5202 12.1185 25.648 13.1022 26.5852C14.0859 27.5224 15.2503 28.2493 16.5243 28.7215C17.7983 29.1937 19.1551 29.4014 20.512 29.3318C21.8689 29.2622 23.1974 28.9169 24.4164 28.3168L27.7689 29.2743C28.0688 29.3597 28.3861 29.3635 28.688 29.2851C28.9899 29.2068 29.2653 29.0492 29.4858 28.8287C29.7063 28.6082 29.8639 28.3327 29.9423 28.0309C30.0206 27.729 30.0169 27.4117 29.9314 27.1118L28.9739 23.7593ZM26.9414 23.9268L27.8852 27.228L24.5839 26.2843C24.3324 26.2136 24.0632 26.2441 23.8339 26.3693C21.9905 27.3722 19.8271 27.6113 17.8092 27.0353C15.7913 26.4593 14.0801 25.1142 13.0439 23.2893C14.4132 23.1467 15.7383 22.7226 16.936 22.0437C18.1337 21.3648 19.1781 20.4457 20.0038 19.3441C20.8295 18.2425 21.4186 16.9821 21.7342 15.642C22.0498 14.3019 22.085 12.9111 21.8377 11.5568C23.0359 11.8392 24.1529 12.3943 25.1015 13.179C26.0501 13.9637 26.8049 14.9567 27.307 16.0807C27.8091 17.2048 28.045 18.4296 27.9963 19.6597C27.9477 20.8899 27.6157 22.0922 27.0264 23.173C26.9002 23.4034 26.8697 23.6741 26.9414 23.9268Z"
                                fill="#19345F" />
                        </svg>

                        <div class="ml-4 font-light">Grup Diskusi Dengan Mentor</div>
                    </div>
                    <div class="flex items-center mb-2">
                        <svg width="32" height="33" viewBox="0 0 32 33" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M29 11.4505V7.34302C29 6.81258 28.7893 6.30388 28.4142 5.9288C28.0391 5.55373 27.5304 5.34302 27 5.34302H5C4.46957 5.34302 3.96086 5.55373 3.58579 5.9288C3.21071 6.30388 3 6.81258 3 7.34302V23.343C3 23.8735 3.21071 24.3822 3.58579 24.7572C3.96086 25.1323 4.46957 25.343 5 25.343H19V28.343C18.9999 28.5136 19.0434 28.6813 19.1264 28.8303C19.2093 28.9793 19.329 29.1046 19.4741 29.1943C19.6192 29.284 19.7847 29.3351 19.9551 29.3427C20.1255 29.3504 20.295 29.3143 20.4475 29.238L24 27.4605L27.5525 29.238C27.705 29.3143 27.8745 29.3504 28.0449 29.3427C28.2153 29.3351 28.3808 29.284 28.5259 29.1943C28.671 29.1046 28.7907 28.9793 28.8736 28.8303C28.9566 28.6813 29.0001 28.5136 29 28.343V21.2355C30.2819 19.9297 31.0002 18.1729 31.0002 16.343C31.0002 14.5131 30.2819 12.7563 29 11.4505ZM16 18.343H9C8.73478 18.343 8.48043 18.2377 8.29289 18.0501C8.10536 17.8626 8 17.6082 8 17.343C8 17.0778 8.10536 16.8234 8.29289 16.6359C8.48043 16.4484 8.73478 16.343 9 16.343H16C16.2652 16.343 16.5196 16.4484 16.7071 16.6359C16.8946 16.8234 17 17.0778 17 17.343C17 17.6082 16.8946 17.8626 16.7071 18.0501C16.5196 18.2377 16.2652 18.343 16 18.343ZM16 14.343H9C8.73478 14.343 8.48043 14.2377 8.29289 14.0501C8.10536 13.8626 8 13.6082 8 13.343C8 13.0778 8.10536 12.8234 8.29289 12.6359C8.48043 12.4484 8.73478 12.343 9 12.343H16C16.2652 12.343 16.5196 12.4484 16.7071 12.6359C16.8946 12.8234 17 13.0778 17 13.343C17 13.6082 16.8946 13.8626 16.7071 14.0501C16.5196 14.2377 16.2652 14.343 16 14.343ZM27 26.7255L24.4475 25.448C24.3086 25.3785 24.1554 25.3423 24 25.3423C23.8446 25.3423 23.6914 25.3785 23.5525 25.448L21 26.7255V22.6668C21.9374 23.112 22.9622 23.343 24 23.343C25.0378 23.343 26.0626 23.112 27 22.6668V26.7255ZM24 21.343C23.0111 21.343 22.0444 21.0498 21.2221 20.5004C20.3999 19.951 19.759 19.1701 19.3806 18.2564C19.0022 17.3428 18.9031 16.3375 19.0961 15.3676C19.289 14.3977 19.7652 13.5067 20.4645 12.8075C21.1637 12.1082 22.0546 11.632 23.0245 11.4391C23.9945 11.2462 24.9998 11.3452 25.9134 11.7236C26.827 12.1021 27.6079 12.7429 28.1573 13.5652C28.7068 14.3874 29 15.3541 29 16.343C29 17.6691 28.4732 18.9409 27.5355 19.8786C26.5979 20.8162 25.3261 21.343 24 21.343Z"
                                fill="#19345F" />
                        </svg>

                        <div class="ml-4 font-light">Sertifikat Online dan Terverifikasi</div>
                    </div>
                    <div class="text-end font-semibold py-4">Rp. 36.000.000,-</div>
                    @if (Auth::check())
                        @if ($enrolled)
                            <a href="{{ route('profile') }}" type="button"
                                class="w-full text-white text-center bg-one-primary hover:bg-one-primary focus:ring-4 font-medium rounded-lg text-sm px-5 py-2.5 mb-2">Lanjutkan
                                Belajar
                            </a>
                        @else
                            <a href="{{ route('payment.course') }}" type="button"
                                class="w-full text-white text-center bg-one-primary hover:bg-one-primary focus:ring-4 font-medium rounded-lg text-sm px-5 py-2.5 mb-2">Beli
                                Sekarang</a>
                        @endif
                    @else
                        <a href="{{ route('payment.course') }}" type="button"
                            class="w-full text-white text-center bg-one-primary hover:bg-one-primary focus:ring-4 font-medium rounded-lg text-sm px-5 py-2.5 mb-2">Beli
                            Sekarang</a>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
