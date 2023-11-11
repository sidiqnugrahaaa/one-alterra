<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <header>
        <nav class="bg-white border-gray-200 ">
            <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto px-4 py-4">
                <a href="https://flowbite.com/" class="flex items-center">
                    <img src="{{ asset('logo_alterra.svg') }}" class="h-14 mr-3" alt="Alterra Logo" />
                </a>
                <button data-collapse-toggle="navbar-default" type="button"
                    class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200"
                    aria-controls="navbar-default" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 17 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M1 1h15M1 7h15M1 13h15" />
                    </svg>
                </button>
                <div class="hidden w-full md:block md:w-auto" id="navbar-default">
                    <ul
                        class="font-medium flex flex-col p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 md:mt-0 md:border-0 md:bg-white ">
                        <li>
                            <a href="#"
                                class="block py-2 pl-3 pr-4 text-white bg-blue-700 rounded md:bg-transparent md:text-one-primary md:p-0 "
                                aria-current="page">Home</a>
                        </li>
                        <li>
                            <a href="#"
                                class="block py-2 pl-3 pr-4 text-one-primary rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0">Flexi
                                Program</a>
                        </li>
                        <li>
                            <a href="#"
                                class="block py-2 pl-3 pr-4 text-one-primary rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0">Online
                                Class</a>
                        </li>
                        <li>
                            <a href="#"
                                class="block py-2 pl-3 pr-4 text-one-primary rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 ">Kampus
                                Merdeka</a>
                        </li>
                    </ul>
                </div>

                <div class="inline-flex items-center p-2">
                    <button type="button"
                        class="focus:outline-none text-white bg-one-primary hover:bg-yellow-500 focus:ring-4 focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2">Login</button>
                </div>
            </div>
        </nav>
    </header>
    <main>
        <div class="w-screen h-100 relative overflow-hidden">
            <div
                class="bg-[radial-gradient(ellipse_at_center,_var(--tw-gradient-stops))] from-[#ffb78a] via-transparent to-transparent -z-10 absolute h-[1200px] w-[1200px] rounded-full -left-96 -top-96">
            </div>
            <div
                class="bg-[radial-gradient(ellipse_at_center,_var(--tw-gradient-stops))] from-[#bbcff0] via-transparent to-transparent -z-20 absolute h-[1400px] w-[1400px] rounded-full -right-96 -top-40">
            </div>
            <div class="container mx-auto flex flex-col items-center">
                <div class="flex justify-center text-5xl py-8">
                    <span class="text-one-primary font-bold me-3"> #KarirITMenanti </span>
                    <span class="text-one-secondary"> Kamu Disini</span>
                </div>
                <div class="text-lg text-one-secondary font-semibold">
                    Jadi tech talent berkualitas bersama Alterra Academy!
                </div>
                <img src="{{ asset('assets/illustation.svg') }}" class="w-[620px] h-auto" alt="">
                <div class="font-semibold text-one-secondary mt-8">Partner Kami:</div>
                <div class="w-full flex justify-around my-4">
                    <img src="{{ asset('assets/partner/logo_1.png') }}" class="h-10 w-auto" alt="">
                    <img src="{{ asset('assets/partner/logo_2.png') }}" class="h-10 w-auto" alt="">
                    <img src="{{ asset('assets/partner/logo_3.png') }}" class="h-10 w-auto" alt="">
                    <img src="{{ asset('assets/partner/logo_4.png') }}" class="h-10 w-auto" alt="">
                    <img src="{{ asset('assets/partner/logo_5.png') }}" class="h-10 w-auto" alt="">
                    <img src="{{ asset('assets/partner/logo_6.png') }}" class="h-10 w-auto" alt="">
                </div>
            </div>
        </div>
        <div class="container mx-auto py-20 bg-white">
            <h2 class="text-center mb-14 text-3xl font-medium text-one-secondary">Kenapa Alterra Academy?</h2>
            <div class="grid grid-cols-4 gap-8 px-16">
                <div
                    class="border-[1px] border-one-primary py-8 rounded-xl flex flex-col items-center shadow-sm shadow-one-primary">
                    <svg width="42" height="41" viewBox="0 0 42 41" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path opacity="0.2"
                            d="M20.7765 4.05054C17.4206 4.05054 14.2021 5.38366 11.8291 7.75664C9.45617 10.1296 8.12305 13.3481 8.12305 16.704C8.12305 28.092 20.7765 36.9494 20.7765 36.9494C20.7765 36.9494 33.4299 28.092 33.4299 16.704C33.4299 13.3481 32.0968 10.1296 29.7238 7.75664C27.3508 5.38366 24.1324 4.05054 20.7765 4.05054ZM20.7765 21.7653C19.7754 21.7653 18.7969 21.4685 17.9645 20.9123C17.1322 20.3562 16.4835 19.5657 16.1004 18.6409C15.7173 17.716 15.6171 16.6983 15.8124 15.7165C16.0076 14.7347 16.4897 13.8329 17.1975 13.125C17.9054 12.4172 18.8072 11.9351 19.7891 11.7398C20.7709 11.5446 21.7885 11.6448 22.7134 12.0279C23.6382 12.4109 24.4287 13.0597 24.9848 13.892C25.541 14.7244 25.8378 15.7029 25.8378 16.704C25.8378 18.0463 25.3046 19.3337 24.3554 20.2829C23.4062 21.2321 22.1188 21.7653 20.7765 21.7653Z"
                            fill="#F37524" />
                        <path
                            d="M32.1645 35.6841H24.3415C25.6557 34.5107 26.895 33.256 28.0522 31.9276C32.3939 26.9342 34.6952 21.6704 34.6952 16.7039C34.6952 13.0124 33.2288 9.47215 30.6185 6.86187C28.0082 4.25159 24.4679 2.78516 20.7764 2.78516C17.0849 2.78516 13.5447 4.25159 10.9344 6.86187C8.3241 9.47215 6.85767 13.0124 6.85767 16.7039C6.85767 21.6704 9.15268 26.9342 13.5007 31.9276C14.6579 33.256 15.8972 34.5107 17.2113 35.6841H9.38835C9.05276 35.6841 8.73092 35.8174 8.49362 36.0547C8.25632 36.292 8.12301 36.6138 8.12301 36.9494C8.12301 37.285 8.25632 37.6068 8.49362 37.8441C8.73092 38.0814 9.05276 38.2148 9.38835 38.2148H32.1645C32.5001 38.2148 32.822 38.0814 33.0593 37.8441C33.2966 37.6068 33.4299 37.285 33.4299 36.9494C33.4299 36.6138 33.2966 36.292 33.0593 36.0547C32.822 35.8174 32.5001 35.6841 32.1645 35.6841ZM9.38835 16.7039C9.38835 13.6836 10.5882 10.787 12.7238 8.65133C14.8595 6.51565 17.7561 5.31584 20.7764 5.31584C23.7967 5.31584 26.6933 6.51565 28.829 8.65133C30.9647 10.787 32.1645 13.6836 32.1645 16.7039C32.1645 25.7559 23.391 33.3116 20.7764 35.3677C18.1619 33.3116 9.38835 25.7559 9.38835 16.7039ZM27.1031 16.7039C27.1031 15.4526 26.7321 14.2294 26.0369 13.189C25.3417 12.1486 24.3536 11.3377 23.1976 10.8588C22.0415 10.38 20.7694 10.2547 19.5422 10.4988C18.3149 10.7429 17.1876 11.3455 16.3028 12.2303C15.418 13.1151 14.8154 14.2424 14.5713 15.4696C14.3272 16.6969 14.4525 17.969 14.9313 19.1251C15.4102 20.2811 16.2211 21.2692 17.2615 21.9644C18.3019 22.6596 19.5251 23.0306 20.7764 23.0306C22.4544 23.0306 24.0636 22.3641 25.2501 21.1776C26.4366 19.9911 27.1031 18.3819 27.1031 16.7039ZM16.9804 16.7039C16.9804 15.9531 17.203 15.2192 17.6202 14.595C18.0373 13.9707 18.6301 13.4842 19.3238 13.1969C20.0174 12.9095 20.7806 12.8344 21.517 12.9808C22.2534 13.1273 22.9298 13.4888 23.4606 14.0197C23.9915 14.5506 24.3531 15.227 24.4995 15.9634C24.646 16.6997 24.5708 17.463 24.2835 18.1566C23.9962 18.8502 23.5096 19.4431 22.8854 19.8602C22.2611 20.2773 21.5272 20.5 20.7764 20.5C19.7697 20.5 18.8041 20.1 18.0922 19.3881C17.3803 18.6762 16.9804 17.7107 16.9804 16.7039Z"
                            fill="#F37524" />
                    </svg>
                    <h4 class="mt-8 text-one-secondary font-medium text-xl">Kapan Saja, Di Mana Saja</h4>
                    <div class="px-3 mt-6 text-center text-one-secondary font-light">
                        Di kafe atau di rumah, pagi atau malam, mobile atau desktop,
                        bebas! Kamu bisa akses Alterra Academy Online Program di
                        mana pun dan kapan pun.
                    </div>
                </div>

                <div
                    class="border-[1px] border-one-secondary py-8 rounded-xl flex flex-col items-center shadow-sm shadow-one-secondary">
                    <svg width="41" height="41" viewBox="0 0 41 41" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path opacity="0.2"
                            d="M22.0266 5.50001V34.25H7.02661V13.8359C7.02648 13.6301 7.07718 13.4274 7.17422 13.2459C7.27126 13.0643 7.41163 12.9096 7.58286 12.7953L20.0829 4.46251C20.2709 4.33703 20.4895 4.2649 20.7153 4.25382C20.9412 4.24274 21.1658 4.29311 21.3652 4.39957C21.5647 4.50604 21.7315 4.6646 21.848 4.85839C21.9645 5.05217 22.0262 5.27392 22.0266 5.50001Z"
                            fill="#F37524" />
                        <path
                            d="M38.2766 33H35.7766V15.5C35.7766 14.837 35.5132 14.2011 35.0444 13.7323C34.5755 13.2634 33.9397 13 33.2766 13H23.2766V5.50004C23.2769 5.04732 23.1543 4.60303 22.9218 4.21457C22.6893 3.82611 22.3557 3.50807 21.9566 3.2944C21.5575 3.08072 21.1078 2.97943 20.6556 3.00134C20.2034 3.02325 19.7657 3.16753 19.3891 3.41879L6.88911 11.75C6.5462 11.9788 6.26519 12.2888 6.07109 12.6525C5.87699 13.0162 5.77583 13.4222 5.77661 13.8344V33H3.27661C2.94509 33 2.62715 33.1317 2.39273 33.3662C2.15831 33.6006 2.02661 33.9185 2.02661 34.25C2.02661 34.5816 2.15831 34.8995 2.39273 35.1339C2.62715 35.3683 2.94509 35.5 3.27661 35.5H38.2766C38.6081 35.5 38.9261 35.3683 39.1605 35.1339C39.3949 34.8995 39.5266 34.5816 39.5266 34.25C39.5266 33.9185 39.3949 33.6006 39.1605 33.3662C38.9261 33.1317 38.6081 33 38.2766 33ZM33.2766 15.5V33H23.2766V15.5H33.2766ZM8.27661 13.8344L20.7766 5.50004V33H8.27661V13.8344ZM18.2766 18V20.5C18.2766 20.8316 18.1449 21.1495 17.9105 21.3839C17.6761 21.6183 17.3581 21.75 17.0266 21.75C16.6951 21.75 16.3771 21.6183 16.1427 21.3839C15.9083 21.1495 15.7766 20.8316 15.7766 20.5V18C15.7766 17.6685 15.9083 17.3506 16.1427 17.1162C16.3771 16.8817 16.6951 16.75 17.0266 16.75C17.3581 16.75 17.6761 16.8817 17.9105 17.1162C18.1449 17.3506 18.2766 17.6685 18.2766 18ZM13.2766 18V20.5C13.2766 20.8316 13.1449 21.1495 12.9105 21.3839C12.6761 21.6183 12.3581 21.75 12.0266 21.75C11.6951 21.75 11.3771 21.6183 11.1427 21.3839C10.9083 21.1495 10.7766 20.8316 10.7766 20.5V18C10.7766 17.6685 10.9083 17.3506 11.1427 17.1162C11.3771 16.8817 11.6951 16.75 12.0266 16.75C12.3581 16.75 12.6761 16.8817 12.9105 17.1162C13.1449 17.3506 13.2766 17.6685 13.2766 18ZM13.2766 26.75V29.25C13.2766 29.5816 13.1449 29.8995 12.9105 30.1339C12.6761 30.3683 12.3581 30.5 12.0266 30.5C11.6951 30.5 11.3771 30.3683 11.1427 30.1339C10.9083 29.8995 10.7766 29.5816 10.7766 29.25V26.75C10.7766 26.4185 10.9083 26.1006 11.1427 25.8662C11.3771 25.6317 11.6951 25.5 12.0266 25.5C12.3581 25.5 12.6761 25.6317 12.9105 25.8662C13.1449 26.1006 13.2766 26.4185 13.2766 26.75ZM18.2766 26.75V29.25C18.2766 29.5816 18.1449 29.8995 17.9105 30.1339C17.6761 30.3683 17.3581 30.5 17.0266 30.5C16.6951 30.5 16.3771 30.3683 16.1427 30.1339C15.9083 29.8995 15.7766 29.5816 15.7766 29.25V26.75C15.7766 26.4185 15.9083 26.1006 16.1427 25.8662C16.3771 25.6317 16.6951 25.5 17.0266 25.5C17.3581 25.5 17.6761 25.6317 17.9105 25.8662C18.1449 26.1006 18.2766 26.4185 18.2766 26.75Z"
                            fill="#F37524" />
                    </svg>
                    <h4 class="mt-8 text-one-secondary font-medium text-xl">Materi Strandar Industri</h4>
                    <div class="px-3 mt-6 text-center text-one-secondary font-light">
                        Di kafe atau di rumah, pagi atau malam, mobile atau desktop,
                        bebas! Kamu bisa akses Alterra Academy Online Program di
                        mana pun dan kapan pun.
                    </div>
                </div>

                <div
                    class="border-[1px] border-one-primary py-8 rounded-xl flex flex-col items-center shadow-sm shadow-one-primary">
                    <svg width="41" height="41" viewBox="0 0 41 41" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path opacity="0.2"
                            d="M30.7766 13V28H17.0266C18.0155 28 18.9822 27.7068 19.8045 27.1573C20.6267 26.6079 21.2676 25.827 21.646 24.9134C22.0244 23.9998 22.1235 22.9945 21.9305 22.0245C21.7376 21.0546 21.2614 20.1637 20.5621 19.4645C19.8629 18.7652 18.972 18.289 18.0021 18.0961C17.0322 17.9031 16.0268 18.0022 15.1132 18.3806C14.1996 18.759 13.4187 19.3999 12.8693 20.2221C12.3199 21.0444 12.0266 22.0111 12.0266 23H10.7766V13H30.7766Z"
                            fill="#F37524" />
                        <path
                            d="M34.5266 6.75H7.02661C6.36357 6.75 5.72769 7.01339 5.25884 7.48223C4.79 7.95107 4.52661 8.58696 4.52661 9.25V31.75C4.52661 32.413 4.79 33.0489 5.25884 33.5178C5.72769 33.9866 6.36357 34.25 7.02661 34.25H9.1188C9.35537 34.2501 9.58711 34.183 9.78708 34.0566C9.98706 33.9302 10.1471 33.7497 10.2485 33.5359C10.8563 32.2526 11.816 31.1682 13.0159 30.4089C14.2158 29.6495 15.6066 29.2464 17.0266 29.2464C18.4466 29.2464 19.8374 29.6495 21.0373 30.4089C22.2372 31.1682 23.1969 32.2526 23.8047 33.5359C23.9062 33.7497 24.0662 33.9302 24.2661 34.0566C24.4661 34.183 24.6979 34.2501 24.9344 34.25H34.5266C35.1897 34.25 35.8255 33.9866 36.2944 33.5178C36.7632 33.0489 37.0266 32.413 37.0266 31.75V9.25C37.0266 8.58696 36.7632 7.95107 36.2944 7.48223C35.8255 7.01339 35.1897 6.75 34.5266 6.75ZM13.2766 23C13.2766 22.2583 13.4965 21.5333 13.9086 20.9166C14.3207 20.2999 14.9063 19.8193 15.5915 19.5355C16.2768 19.2516 17.0308 19.1774 17.7582 19.3221C18.4856 19.4667 19.1538 19.8239 19.6783 20.3483C20.2027 20.8728 20.5599 21.541 20.7046 22.2684C20.8493 22.9958 20.775 23.7498 20.4912 24.4351C20.2073 25.1203 19.7267 25.706 19.11 26.118C18.4933 26.5301 17.7683 26.75 17.0266 26.75C16.032 26.75 15.0782 26.3549 14.375 25.6517C13.6717 24.9484 13.2766 23.9946 13.2766 23ZM34.5266 31.75H25.6875C24.6437 29.9553 23.0702 28.5276 21.1829 27.6625C22.1291 26.82 22.7969 25.7097 23.0978 24.479C23.3987 23.2483 23.3184 21.9552 22.8677 20.7711C22.4169 19.587 21.6169 18.5679 20.5738 17.8489C19.5306 17.1298 18.2936 16.7447 17.0266 16.7447C15.7596 16.7447 14.5226 17.1298 13.4794 17.8489C12.4363 18.5679 11.6363 19.587 11.1855 20.7711C10.7348 21.9552 10.6545 23.2483 10.9554 24.479C11.2563 25.7097 11.9241 26.82 12.8704 27.6625C10.983 28.5276 9.40953 29.9553 8.36567 31.75H7.02661V9.25H34.5266V31.75ZM9.52661 15.5V13C9.52661 12.6685 9.65831 12.3505 9.89273 12.1161C10.1271 11.8817 10.4451 11.75 10.7766 11.75H30.7766C31.1081 11.75 31.4261 11.8817 31.6605 12.1161C31.8949 12.3505 32.0266 12.6685 32.0266 13V28C32.0266 28.3315 31.8949 28.6495 31.6605 28.8839C31.4261 29.1183 31.1081 29.25 30.7766 29.25H28.2766C27.9451 29.25 27.6271 29.1183 27.3927 28.8839C27.1583 28.6495 27.0266 28.3315 27.0266 28C27.0266 27.6685 27.1583 27.3505 27.3927 27.1161C27.6271 26.8817 27.9451 26.75 28.2766 26.75H29.5266V14.25H12.0266V15.5C12.0266 15.8315 11.8949 16.1495 11.6605 16.3839C11.4261 16.6183 11.1081 16.75 10.7766 16.75C10.4451 16.75 10.1271 16.6183 9.89273 16.3839C9.65831 16.1495 9.52661 15.8315 9.52661 15.5Z"
                            fill="#F37524" />
                    </svg>
                    <h4 class="mt-8 text-one-secondary font-medium text-xl">Mentor Berpengalaman</h4>
                    <div class="px-3 mt-6 text-center text-one-secondary font-light">
                        Di kafe atau di rumah, pagi atau malam, mobile atau desktop,
                        bebas! Kamu bisa akses Alterra Academy Online Program di
                        mana pun dan kapan pun.
                    </div>
                </div>

                <div
                    class="border-[1px] border-one-secondary py-8 rounded-xl flex flex-col items-center shadow-sm shadow-one-secondary">
                    <svg width="41" height="41" viewBox="0 0 41 41" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_149_578)">
                            <path opacity="0.2" d="M33.2766 11.75V29.25H8.27661V11.75H33.2766Z" fill="#F37524" />
                            <path
                                d="M14.5266 23V20.5C14.5266 20.1685 14.6583 19.8505 14.8927 19.6161C15.1271 19.3817 15.4451 19.25 15.7766 19.25C16.1081 19.25 16.4261 19.3817 16.6605 19.6161C16.8949 19.8505 17.0266 20.1685 17.0266 20.5V23C17.0266 23.3315 16.8949 23.6495 16.6605 23.8839C16.4261 24.1183 16.1081 24.25 15.7766 24.25C15.4451 24.25 15.1271 24.1183 14.8927 23.8839C14.6583 23.6495 14.5266 23.3315 14.5266 23ZM20.7766 24.25C21.1081 24.25 21.4261 24.1183 21.6605 23.8839C21.8949 23.6495 22.0266 23.3315 22.0266 23V19.25C22.0266 18.9185 21.8949 18.6005 21.6605 18.3661C21.4261 18.1317 21.1081 18 20.7766 18C20.4451 18 20.1271 18.1317 19.8927 18.3661C19.6583 18.6005 19.5266 18.9185 19.5266 19.25V23C19.5266 23.3315 19.6583 23.6495 19.8927 23.8839C20.1271 24.1183 20.4451 24.25 20.7766 24.25ZM25.7766 24.25C26.1081 24.25 26.4261 24.1183 26.6605 23.8839C26.8949 23.6495 27.0266 23.3315 27.0266 23V18C27.0266 17.6685 26.8949 17.3505 26.6605 17.1161C26.4261 16.8817 26.1081 16.75 25.7766 16.75C25.4451 16.75 25.1271 16.8817 24.8927 17.1161C24.6583 17.3505 24.5266 17.6685 24.5266 18V23C24.5266 23.3315 24.6583 23.6495 24.8927 23.8839C25.1271 24.1183 25.4451 24.25 25.7766 24.25ZM34.5266 13V28H35.7766C36.1081 28 36.4261 28.1317 36.6605 28.3661C36.8949 28.6005 37.0266 28.9185 37.0266 29.25C37.0266 29.5815 36.8949 29.8995 36.6605 30.1339C36.4261 30.3683 36.1081 30.5 35.7766 30.5H22.0266V33.2156C22.8606 33.5105 23.5636 34.0907 24.0112 34.8537C24.4587 35.6167 24.6222 36.5134 24.4726 37.3853C24.323 38.2572 23.87 39.0481 23.1937 39.6183C22.5174 40.1884 21.6612 40.5012 20.7766 40.5012C19.892 40.5012 19.0359 40.1884 18.3595 39.6183C17.6832 39.0481 17.2302 38.2572 17.0806 37.3853C16.931 36.5134 17.0945 35.6167 17.5421 34.8537C17.9897 34.0907 18.6926 33.5105 19.5266 33.2156V30.5H5.77661C5.44509 30.5 5.12715 30.3683 4.89273 30.1339C4.65831 29.8995 4.52661 29.5815 4.52661 29.25C4.52661 28.9185 4.65831 28.6005 4.89273 28.3661C5.12715 28.1317 5.44509 28 5.77661 28H7.02661V13C6.36357 13 5.72769 12.7366 5.25884 12.2678C4.79 11.7989 4.52661 11.163 4.52661 10.5V8C4.52661 7.33696 4.79 6.70107 5.25884 6.23223C5.72769 5.76339 6.36357 5.5 7.02661 5.5H34.5266C35.1897 5.5 35.8255 5.76339 36.2944 6.23223C36.7632 6.70107 37.0266 7.33696 37.0266 8V10.5C37.0266 11.163 36.7632 11.7989 36.2944 12.2678C35.8255 12.7366 35.1897 13 34.5266 13ZM22.0266 36.75C22.0266 36.5028 21.9533 36.2611 21.8159 36.0555C21.6786 35.85 21.4834 35.6898 21.255 35.5951C21.0266 35.5005 20.7752 35.4758 20.5327 35.524C20.2903 35.5723 20.0675 35.6913 19.8927 35.8661C19.7179 36.0409 19.5989 36.2637 19.5506 36.5061C19.5024 36.7486 19.5272 36.9999 19.6218 37.2284C19.7164 37.4568 19.8766 37.652 20.0821 37.7893C20.2877 37.9267 20.5294 38 20.7766 38C21.1081 38 21.4261 37.8683 21.6605 37.6339C21.8949 37.3995 22.0266 37.0815 22.0266 36.75ZM7.02661 10.5H34.5266V8H7.02661V10.5ZM32.0266 13H9.52661V28H32.0266V13Z"
                                fill="#F37524" />
                        </g>
                        <defs>
                            <clipPath id="clip0_149_578">
                                <rect width="40" height="40" fill="white"
                                    transform="translate(0.776611 0.5)" />
                            </clipPath>
                        </defs>
                    </svg>
                    <h4 class="mt-8 text-one-secondary font-medium text-xl">Praktek Dengan Project</h4>
                    <div class="px-3 mt-6 text-center text-one-secondary font-light">
                        Di kafe atau di rumah, pagi atau malam, mobile atau desktop,
                        bebas! Kamu bisa akses Alterra Academy Online Program di
                        mana pun dan kapan pun.
                    </div>
                </div>
            </div>

        </div>

        <div class="w-screen h-100 relative">
            <div class="w-1/2 h-56 bg-one-primary bg-opacity-20 rounded-r-full absolute -z-10 "></div>
            <div class="container mx-auto mb-16">
                <div class="grid grid-cols-2 gap-12 px-16">
                    <div class="flex items-center">
                        <div class="text-4xl font-medium text-one-secondary"">
                            <h1 class="mb-6">Pilih Program</h1>
                            <h1>Yang Cocok Untukmu </h1>
                        </div>
                    </div>
                    <div class="rounded-lg shadow-lg  bg-white flex">
                        <img class="object-cover rounded-l-lg w-48 " src="{{ asset('assets/program/program_1.png') }}"
                            alt="">
                        <div class="flex flex-col p-4 leading-normal">
                            <h5 class="mb-2 text-2xl font-bold text-one-secondary">
                                Online Class</h5>
                            <p class="mb-3 font-normal text-one-secondary">Raih karir
                                impianmu
                                sebagai Software Engineer tanpa merasa khawatir soal biaya. Bayar biaya program
                                setelah dapat kerja!
                            </p>
                            <div class=" text-end">
                                <button type="button"
                                    class="focus:outline-none text-white bg-one-primary hover:bg-yellow-500 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2">Lihat
                                    Program</button>
                            </div>
                        </div>
                    </div>
                    <div class="rounded-lg shadow-lg  bg-white flex">
                        <img class="object-cover rounded-l-lg w-48 " src="{{ asset('assets/program/program_3.png') }}"
                            alt="">
                        <div class="flex flex-col p-4 leading-normal">
                            <h5 class="mb-2 text-2xl font-bold text-one-secondary">
                                Flexi Program</h5>
                            <p class="mb-3 font-normal text-one-secondary">Lengkapi keahlihan kamu sebagai Mahasiswa
                                agar siap menjadi Talenta Digital berkualitas yang #SesuaiDemand Industri setelah lulus.
                            </p>
                            <div class=" text-end">
                                <button type="button"
                                    class="focus:outline-none text-white bg-one-primary hover:bg-yellow-500 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2">Lihat
                                    Program</button>
                            </div>
                        </div>
                    </div>
                    <div class="rounded-lg shadow-lg  bg-white flex">
                        <img class="object-cover rounded-l-lg w-48 "
                            src="{{ asset('assets/program/program_2.png') }}" alt="">
                        <div class="flex flex-col p-4 leading-normal">
                            <h5 class="mb-2 text-2xl font-bold text-one-secondary">
                                Kampus Merdeka</h5>
                            <p class="mb-3 font-normal text-one-secondary">Lengkapi keahlihan kamu sebagai Mahasiswa
                                agar siap menjadi Talenta Digital berkualitas yang #SesuaiDemand Industri setelah lulus.
                            </p>
                            <div class=" text-end">
                                <button type="button"
                                    class="focus:outline-none text-white bg-one-primary hover:bg-yellow-500 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2">Lihat
                                    Program</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container mx-auto py-20 bg-white">
            <h2 class="text-center mb-14 text-3xl font-medium text-one-secondary">Kelas Terpopuler</h2>
            <div class="grid grid-cols-2 px-32 gap-8">
                <div class="bg-white shadow-md rounded-xl mx-10">
                    <img src="{{ asset('assets/kelas/kelas_4.png') }}" class="object-cover rounded-t-xl"
                        alt="">
                    <div class="text-one-secondary p-4">
                        <h4 class="font-medium text-xl">Mastering Golang Programming</h4>
                        <p class="font-light mt-2">Di kelas ini kamu akan mempelajari database, server, framework Echo,
                            serta bahasa GO yang
                            dipakai oleh Startup Unicorn di Indonesia.</p>
                        <div class="text-center mt-4">
                            <button type="button"
                                class="focus:outline-none text-white bg-one-secondary hover:bg-one-secondary font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2">
                                Daftar Sekarang</button>
                        </div>
                    </div>
                </div>
                <div class="bg-white shadow-md rounded-xl mx-10">
                    <img src="{{ asset('assets/kelas/kelas_1.png') }}" class="object-cover rounded-t-xl"
                        alt="">
                    <div class="text-one-secondary p-4">
                        <h4 class="font-medium text-xl">Becoming Professional UI/UX Designer</h4>
                        <p class="font-light mt-2">Di kelas ini kamu akan mempelajari database, server, framework Echo,
                            serta bahasa GO yang dipakai oleh Startup Unicorn di Indonesia.</p>
                        <div class="text-center mt-4">
                            <button type="button"
                                class="focus:outline-none text-white bg-one-secondary hover:bg-one-secondary font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2">
                                Daftar Sekarang</button>
                        </div>
                    </div>
                </div>
                <div class="bg-white shadow-md rounded-xl mx-10">
                    <img src="{{ asset('assets/kelas/kelas_2.png') }}" class="object-cover rounded-t-xl"
                        alt="">
                    <div class="text-one-secondary p-4">
                        <h4 class="font-medium text-xl">2023 Complete Front-End Engineer Career with ReactJS</h4>
                        <p class="font-light mt-2">Di kelas ini kamu akan mempelajari database, server, framework Echo,
                            serta bahasa GO yang dipakai oleh Startup Unicorn di Indonesia.</p>
                        <div class="text-center mt-4">
                            <button type="button"
                                class="focus:outline-none text-white bg-one-secondary hover:bg-one-secondary font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2">
                                Daftar Sekarang</button>
                        </div>
                    </div>
                </div>
                <div class="bg-white shadow-md rounded-xl mx-10">
                    <img src="{{ asset('assets/kelas/kelas_3.png') }}" class="object-cover rounded-t-xl"
                        alt="">
                    <div class="text-one-secondary p-4">
                        <h4 class="font-medium text-xl">2023 Complete Front-End Engineer Career with Flutter</h4>
                        <p class="font-light mt-2">Di kelas ini kamu akan mempelajari database, server, framework Echo,
                            serta bahasa GO yang
                            dipakai oleh Startup Unicorn di Indonesia.</p>
                        <div class="text-center mt-4">
                            <button type="button"
                                class="focus:outline-none text-white bg-one-secondary hover:bg-one-secondary font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2">
                                Daftar Sekarang</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="py-20 bg-[#F4F9FF]">
            <div class="container mx-auto">
                <h2 class="text-center mb-8 text-3xl font-medium text-one-secondary">Kata Mereka...</h2>
            </div>
            <div class="flex flex-justify-center px-32">
                <div class="my-3 relative shadow-sm">
                    <!-- Balon pesan -->
                    <div class="bg-white px-6 pt-6 rounded-2xl relative z-10 pb-8">
                        <div class="flex items-center">
                            <img src="" class="w-12 h-12 object-cover rounded-full" alt="">
                            <div class="ms-4">
                                <h5 class="text-one-secondary font-medium">Albert Flores</h5>
                                <p class="text-gray-500 font-light text-xs">Scrum Master - Figma</p>
                            </div>
                        </div>
                        <div class="font-light text-one-secondary text-xs mt-6 leading-5">
                            "Awalnya sih Penasaran tentang pemrograman Golang yang ada cuma di alta saja, setelah
                            berjalannya waktu, alhamdulillah dapat bimbingan dari mentor, sangat praktis dan mudah
                            dipahami.
                        </div>
                        <svg class="w-8 h-8 text-gray-400 mb-4 opacity-50 absolute right-2 bottom-0"
                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                            viewBox="0 0 18 14">
                            <path
                                d="M6 0H2a2 2 0 0 0-2 2v4a2 2 0 0 0 2 2h4v1a3 3 0 0 1-3 3H2a1 1 0 0 0 0 2h1a5.006 5.006 0 0 0 5-5V2a2 2 0 0 0-2-2Zm10 0h-4a2 2 0 0 0-2 2v4a2 2 0 0 0 2 2h4v1a3 3 0 0 1-3 3h-1a1 1 0 0 0 0 2h1a5.006 5.006 0 0 0 5-5V2a2 2 0 0 0-2-2Z" />
                        </svg>
                    </div>
                    <div class="absolute -bottom-2 right-14 z-10 transform translate-x-1/2 w-8 h-8">
                        <div class="w-full h-full bg-white rotate-45 transform origin-bottom"></div>
                    </div>
                </div>
                <div class="my-3 relative shadow-sm mx-20">
                    <!-- Balon pesan -->
                    <div class="bg-white px-6 pt-6 rounded-2xl relative z-10 pb-8">
                        <div class="flex items-center">
                            <img src="" class="w-16 h-16 object-cover rounded-full" alt="">
                            <div class="ms-4">
                                <h5 class="text-one-secondary font-medium text-lg">Albert Flores</h5>
                                <p class="text-gray-500 font-light text-sm">Software Developer - Tokopedia</p>
                            </div>
                        </div>
                        <div class="font-light text-one-secondary mt-6 leading-6">
                            “Belajar di alterra academy benar benar dimentori dari dasar dan juga membuat kita aktif
                            belajar mandiri dengan task task tugas hariannya. Meskipun aktif belajar mandiri, kita tetap
                            dipantau oleh para mentor jika menemukan hal-hal yang kita tidak mengerti.
                        </div>
                        <svg class="w-8 h-8 text-gray-400 mb-4 opacity-50 absolute right-2 bottom-0"
                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                            viewBox="0 0 18 14">
                            <path
                                d="M6 0H2a2 2 0 0 0-2 2v4a2 2 0 0 0 2 2h4v1a3 3 0 0 1-3 3H2a1 1 0 0 0 0 2h1a5.006 5.006 0 0 0 5-5V2a2 2 0 0 0-2-2Zm10 0h-4a2 2 0 0 0-2 2v4a2 2 0 0 0 2 2h4v1a3 3 0 0 1-3 3h-1a1 1 0 0 0 0 2h1a5.006 5.006 0 0 0 5-5V2a2 2 0 0 0-2-2Z" />
                        </svg>
                    </div>
                    <div class="absolute -bottom-2 right-14 z-10 transform translate-x-1/2 w-8 h-8">
                        <div class="w-full h-full bg-white rotate-45 transform origin-bottom"></div>
                    </div>
                </div>
                <div class="my-3 relative shadow-sm">
                    <!-- Balon pesan -->
                    <div class="bg-white px-6 pt-6 rounded-2xl relative z-10 pb-8">
                        <div class="flex items-center">
                            <img src="" class="w-12 h-12 object-cover rounded-full" alt="">
                            <div class="ms-4">
                                <h5 class="text-one-secondary font-medium">Albert Flores</h5>
                                <p class="text-gray-500 font-light text-xs">Scrum Master - Figma</p>
                            </div>
                        </div>
                        <div class="font-light text-one-secondary text-sm mt-6 leading-6">
                            "Awalnya sih Penasaran tentang pemrograman Golang yang ada cuma di alta saja, setelah
                            berjalannya waktu, alhamdulillah dapat bimbingan dari mentor, sangat praktis dan mudah
                            dipahami.
                        </div>
                        <svg class="w-8 h-8 text-gray-400 mb-4 opacity-50 absolute right-2 bottom-0"
                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                            viewBox="0 0 18 14">
                            <path
                                d="M6 0H2a2 2 0 0 0-2 2v4a2 2 0 0 0 2 2h4v1a3 3 0 0 1-3 3H2a1 1 0 0 0 0 2h1a5.006 5.006 0 0 0 5-5V2a2 2 0 0 0-2-2Zm10 0h-4a2 2 0 0 0-2 2v4a2 2 0 0 0 2 2h4v1a3 3 0 0 1-3 3h-1a1 1 0 0 0 0 2h1a5.006 5.006 0 0 0 5-5V2a2 2 0 0 0-2-2Z" />
                        </svg>
                    </div>
                    <div class="absolute -bottom-2 right-14 z-10 transform translate-x-1/2 w-8 h-8">
                        <div class="w-full h-full bg-white rotate-45 transform origin-bottom"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="relative overflow-hidden">
            <div
                class="bg-[radial-gradient(ellipse_at_center,_var(--tw-gradient-stops))] from-[#ffb78a] via-transparent to-transparent -z-10 absolute h-[1200px] w-[1200px] rounded-full -right-[600px] -top-52">
            </div>
            <div
                class="bg-[radial-gradient(ellipse_at_center,_var(--tw-gradient-stops))] from-[#bbcff0] via-transparent to-transparent -z-20 absolute h-[1000px] w-[1000px] opacity-70 rounded-full -left-80 -top-80">
            </div>
            <div class="container mx-auto flex px-32 py-16 items-center">
                <div class="basis-2/3 flex">
                    <div class="basis-1/2 leading-8 text-one-secondary">
                        <img src="{{ asset('logo_alterra.svg') }}" alt="" class="mb-4">
                        <p>Kebijakan Privasi</p>
                        <p>FAQ</p>
                        <p>© 2023. All rights reserved.</p>
                    </div>
                    <div class="basis-1/2 self-end leading-8 text-one-secondary">
                        <p>Tentang Alterra Academy</p>
                        <p>Breakthrough 2023</p>
                    </div>

                </div>
                <div class="basis-1/3 text-one-secondary">
                    <p class="font-semibold mb-6">Hubungi Kami</p>
                    <p>Jalan Raya Tidar, Nomor 23, Karangbesuki,
                        Kota Malang, Jawa Timur. 65146.</p>
                    <div class="flex gap-2 mt-4">
                        <div class="w-10 h-10 rounded-full bg-one-primary flex items-center justify-center">
                            <svg width="22" height="22" viewBox="0 0 19 18" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M18.2688 9.25C18.2688 13.6094 15.0696 17.2305 10.886 17.8633V11.7812H12.925L13.3118 9.25H10.886V7.63281C10.886 6.92969 11.2375 6.26172 12.3274 6.26172H13.4172V4.11719C13.4172 4.11719 12.4329 3.94141 11.4485 3.94141C9.47974 3.94141 8.17896 5.17188 8.17896 7.35156V9.25H5.96411V11.7812H8.17896V17.8633C3.99536 17.2305 0.831299 13.6094 0.831299 9.25C0.831299 4.43359 4.73364 0.53125 9.55005 0.53125C14.3665 0.53125 18.2688 4.43359 18.2688 9.25Z"
                                    fill="white" />
                            </svg>
                        </div>
                        <div class="w-10 h-10 rounded-full bg-one-primary flex items-center justify-center">
                            <svg width="22" height="22" viewBox="0 0 17 17" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M8.57983 4.20703C10.7947 4.20703 12.6228 6.03516 12.6228 8.25C12.6228 10.5 10.7947 12.293 8.57983 12.293C6.32983 12.293 4.53687 10.5 4.53687 8.25C4.53687 6.03516 6.32983 4.20703 8.57983 4.20703ZM8.57983 10.8867C10.0212 10.8867 11.1814 9.72656 11.1814 8.25C11.1814 6.80859 10.0212 5.64844 8.57983 5.64844C7.10327 5.64844 5.94312 6.80859 5.94312 8.25C5.94312 9.72656 7.13843 10.8867 8.57983 10.8867ZM13.7126 4.06641C13.7126 4.59375 13.2908 5.01562 12.7634 5.01562C12.2361 5.01562 11.8142 4.59375 11.8142 4.06641C11.8142 3.53906 12.2361 3.11719 12.7634 3.11719C13.2908 3.11719 13.7126 3.53906 13.7126 4.06641ZM16.3845 5.01562C16.4548 6.31641 16.4548 10.2188 16.3845 11.5195C16.3142 12.7852 16.033 13.875 15.1189 14.8242C14.2048 15.7383 13.0798 16.0195 11.8142 16.0898C10.5134 16.1602 6.61108 16.1602 5.3103 16.0898C4.04468 16.0195 2.95483 15.7383 2.00562 14.8242C1.09155 13.875 0.810303 12.7852 0.73999 11.5195C0.669678 10.2188 0.669678 6.31641 0.73999 5.01562C0.810303 3.75 1.09155 2.625 2.00562 1.71094C2.95483 0.796875 4.04468 0.515625 5.3103 0.445312C6.61108 0.375 10.5134 0.375 11.8142 0.445312C13.0798 0.515625 14.2048 0.796875 15.1189 1.71094C16.033 2.625 16.3142 3.75 16.3845 5.01562ZM14.697 12.8906C15.1189 11.8711 15.0134 9.41016 15.0134 8.25C15.0134 7.125 15.1189 4.66406 14.697 3.60938C14.4158 2.94141 13.8884 2.37891 13.2205 2.13281C12.1658 1.71094 9.70483 1.81641 8.57983 1.81641C7.41968 1.81641 4.95874 1.71094 3.93921 2.13281C3.23608 2.41406 2.70874 2.94141 2.42749 3.60938C2.00562 4.66406 2.11108 7.125 2.11108 8.25C2.11108 9.41016 2.00562 11.8711 2.42749 12.8906C2.70874 13.5938 3.23608 14.1211 3.93921 14.4023C4.95874 14.8242 7.41968 14.7188 8.57983 14.7188C9.70483 14.7188 12.1658 14.8242 13.2205 14.4023C13.8884 14.1211 14.4509 13.5938 14.697 12.8906Z"
                                    fill="white" />
                            </svg>

                        </div>
                        <div class="w-10 h-10 rounded-full bg-one-primary flex items-center justify-center">
                            <svg width="22" height="16" viewBox="0 0 20 14" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M18.9158 2.64453C19.3376 4.12109 19.3376 7.28516 19.3376 7.28516C19.3376 7.28516 19.3376 10.4141 18.9158 11.9258C18.7048 12.7695 18.0369 13.4023 17.2283 13.6133C15.7166 14 9.73999 14 9.73999 14C9.73999 14 3.72827 14 2.21655 13.6133C1.40796 13.4023 0.73999 12.7695 0.529053 11.9258C0.107178 10.4141 0.107178 7.28516 0.107178 7.28516C0.107178 7.28516 0.107178 4.12109 0.529053 2.64453C0.73999 1.80078 1.40796 1.13281 2.21655 0.921875C3.72827 0.5 9.73999 0.5 9.73999 0.5C9.73999 0.5 15.7166 0.5 17.2283 0.921875C18.0369 1.13281 18.7048 1.80078 18.9158 2.64453ZM7.77124 10.1328L12.7634 7.28516L7.77124 4.4375V10.1328Z"
                                    fill="white" />
                            </svg>
                        </div>
                        <div class="w-10 h-10 rounded-full bg-one-primary flex items-center justify-center">
                            <svg width="22" height="19" viewBox="0 0 19 18" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M9.56006 0.53125C14.3765 0.53125 18.2788 4.43359 18.2788 9.25C18.2788 14.0664 14.3765 17.9688 9.56006 17.9688C4.74365 17.9688 0.841309 14.0664 0.841309 9.25C0.841309 4.43359 4.74365 0.53125 9.56006 0.53125ZM13.814 6.50781C13.9546 5.94531 13.603 5.69922 13.2163 5.83984L4.81396 9.07422C4.25146 9.28516 4.25146 9.63672 4.7085 9.77734L6.85303 10.4453L11.8452 7.28125C12.0913 7.14062 12.3022 7.24609 12.1265 7.38672L8.0835 11.043L7.94287 13.2578C8.15381 13.2578 8.25928 13.1523 8.36475 13.0469L9.41943 12.0273L11.5991 13.6445C12.021 13.8555 12.3022 13.75 12.4077 13.2578L13.814 6.50781Z"
                                    fill="white" />
                            </svg>

                        </div>
                        <div class="w-10 h-10 rounded-full bg-one-primary flex items-center justify-center">
                            <svg width="22" height="22" viewBox="0 0 17 17" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M13.8042 2.69531C15.2808 4.17188 16.1948 6.10547 16.1948 8.21484C16.1948 12.5039 12.6089 16.0195 8.28467 16.0195C6.98389 16.0195 5.71826 15.668 4.55811 15.0703L0.444824 16.125L1.53467 12.082C0.866699 10.9219 0.47998 9.58594 0.47998 8.17969C0.47998 3.89062 3.99561 0.375 8.28467 0.375C10.394 0.375 12.3628 1.21875 13.8042 2.69531ZM8.28467 14.6836C11.8706 14.6836 14.8589 11.7656 14.8589 8.21484C14.8589 6.45703 14.1206 4.83984 12.8901 3.60938C11.6597 2.37891 10.0425 1.71094 8.31982 1.71094C4.73389 1.71094 1.81592 4.62891 1.81592 8.17969C1.81592 9.41016 2.16748 10.6055 2.80029 11.6602L2.97607 11.9062L2.30811 14.2969L4.76904 13.6289L4.97998 13.7695C5.99951 14.3672 7.12451 14.6836 8.28467 14.6836ZM11.8706 9.83203C12.0464 9.9375 12.187 9.97266 12.2222 10.0781C12.2925 10.1484 12.2925 10.5352 12.1167 10.9922C11.9409 11.4492 11.1675 11.8711 10.8159 11.9062C10.1831 12.0117 9.69092 11.9766 8.46045 11.4141C6.4917 10.5703 5.22607 8.60156 5.12061 8.49609C5.01514 8.35547 4.34717 7.44141 4.34717 6.45703C4.34717 5.50781 4.83936 5.05078 5.01514 4.83984C5.19092 4.62891 5.40186 4.59375 5.54248 4.59375C5.64795 4.59375 5.78857 4.59375 5.89404 4.59375C6.03467 4.59375 6.17529 4.55859 6.35107 4.94531C6.4917 5.33203 6.91357 6.28125 6.94873 6.38672C6.98389 6.49219 7.01904 6.59766 6.94873 6.73828C6.59717 7.47656 6.17529 7.44141 6.38623 7.79297C7.15967 9.09375 7.89795 9.55078 9.05811 10.1133C9.23389 10.2188 9.33936 10.1836 9.47998 10.0781C9.58545 9.9375 9.97217 9.48047 10.0776 9.30469C10.2183 9.09375 10.3589 9.12891 10.5347 9.19922C10.7104 9.26953 11.6597 9.72656 11.8706 9.83203Z"
                                    fill="white" />
                            </svg>

                        </div>
                        <div class="w-10 h-10 rounded-full bg-one-primary flex items-center justify-center">
                            <svg width="22" height="16" viewBox="0 0 19 14" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M17.7485 4.96484C17.8892 4.85938 18.1001 4.96484 18.1001 5.14062V12.3125C18.1001 13.2617 17.3267 14 16.4126 14H1.7876C0.838379 14 0.100098 13.2617 0.100098 12.3125V5.14062C0.100098 4.96484 0.275879 4.85938 0.416504 4.96484C1.2251 5.59766 2.24463 6.37109 5.83057 8.97266C6.56885 9.5 7.83447 10.6602 9.1001 10.6602C10.3306 10.6602 11.6313 9.5 12.3345 8.97266C15.9204 6.37109 16.9399 5.59766 17.7485 4.96484ZM9.1001 9.5C8.25635 9.53516 7.09619 8.48047 6.49854 8.05859C1.82275 4.68359 1.47119 4.36719 0.416504 3.52344C0.205566 3.38281 0.100098 3.13672 0.100098 2.85547V2.1875C0.100098 1.27344 0.838379 0.5 1.7876 0.5H16.4126C17.3267 0.5 18.1001 1.27344 18.1001 2.1875V2.85547C18.1001 3.13672 17.9595 3.38281 17.7485 3.52344C16.6938 4.36719 16.3423 4.68359 11.6665 8.05859C11.0688 8.48047 9.90869 9.53516 9.1001 9.5Z"
                                    fill="white" />
                            </svg>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <footer></footer>
</body>

</html>
