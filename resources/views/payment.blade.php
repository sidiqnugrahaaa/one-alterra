@extends('layouts.main')

@section('content')
    <div class="container mx-auto text-one-secondary">
        <div class="text-3xl font-normal px-8 py-16">
            Pendaftaran Program<br>
            Becoming Professional UI/UX Designer
        </div>
        <hr class="h-px bg-gray-200 border-0">
        <div class="flex flex-col items-center my-8">
            <ol class="flex items-center w-4/6">
                <li
                    class="flex w-full items-center text-one-primary after:content-[''] after:w-full after:h-1 after:border-b after:mx-4 after:border-one-primary after:border-4 after:inline-block ">
                    <span
                        class="flex items-center justify-center w-10 h-10 bg-one-primary rounded-full lg:h-12 lg:w-12  shrink-0">
                        <svg class="w-3.5 h-3.5 text-white lg:w-4 lg:h-4 " aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 12">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M1 5.917 5.724 10.5 15 1.5" />
                        </svg>
                    </span>
                </li>
                <li
                    class="flex w-full items-center after:content-[''] after:w-full after:h-1 after:border-b after:border-gray-100 after:border-4 after:mx-4 after:inline-block ">
                    <span
                        class="flex items-center justify-center w-10 h-10 bg-one-primary rounded-full lg:h-12 lg:w-12  shrink-0">
                    </span>
                </li>
                <li class="flex items-center w-fill">
                    <span
                        class="flex items-center justify-center w-10 h-10 bg-gray-100 rounded-full lg:h-12 lg:w-12  shrink-0">
                    </span>
                </li>
            </ol>

        </div>
        <form class="py-8 text-one-secondary" method="POST" action="">
            @csrf
            <div class="grid grid-cols-2 px-8 my-16">

                <div>
                    <h4 class="text-lg font-semibold mb-4">Data Diri</h4>
                    <div class="mb-6">
                        <label for="nama" class="block mb-2 text-xs font-light">Nama Lengkap *</label>
                        <input type="text" id="nama" name="full_name"
                            class="border border-one-secondary text-sm rounded-lg block
                            w-full p-2.5 "
                            placeholder="Masukan Nama Lengkap" required>
                    </div>
                    <div class="mb-6">
                        <label for="nama" class="block mb-2 text-xs font-light">Email *</label>
                        <input type="text" id="nama" name="email"
                            class="border border-one-secondary text-sm rounded-lg block
                            w-full p-2.5 "
                            placeholder="Masukan Email" required>
                    </div>
                    <div class="mb-6">
                        <label for="nama" class="block mb-2 text-xs font-light">Nomor Telepon *</label>
                        <input type="text" id="nama" name="phone_number"
                            class="border border-one-secondary text-sm rounded-lg block
                            w-full p-2.5 "
                            placeholder="Masukan Nomor Telepon" required>
                    </div>
                    <div class="mb-6">
                        <label for="city" class="block mb-2 text-xs font-light">Kota *</label>
                        <input type="text" id="city" name="city"
                            class="border border-one-secondary text-sm rounded-lg block
                            w-full p-2.5 "
                            placeholder="Masukan Kota Tempat Tinggal" required>
                    </div>
                    <div class="mb-6">
                        <label for="provinsi" class="block mb-2 text-xs font-light">Provinsi *</label>
                        <input type="text" id="provinsi" name="provinsi"
                            class="border border-one-secondary text-sm rounded-lg block
                            w-full p-2.5 "
                            placeholder="Masukan Provinsi Tempat Tinggal" required>
                    </div>
                    <div class="mb-6">
                        <label for="hope" class="block mb-2 text-xs font-light">Harapan Mengikuti Program ini *</label>
                        <textarea id="hope" name="hope" rows="4"
                            class="block p-2.5 w-full text-sm rounded-lg border border-one-secondary " placeholder="Tulis Harapanmu disini..."></textarea>
                    </div>

                    <h4 class="text-lg font-semibold mb-4">Metode Pembayaran</h4>
                    <div class="rounded-lg bg-blue-50 border border-1 border-gray-400">
                        <div class="flex items-center p-4 border-b border-b-1 border-gray-400">
                            <input id="country-option-1" type="radio" name="payment_method" value="BNI"
                                class="w-4 h-4 border-one-primary">
                            <img src="{{ asset('assets/bank/bni.png') }}" class="h-4 w-auto ml-4">
                            <div class="ml-2">Bank Transfer - BNI</div>
                        </div>
                        <div class="flex items-center p-4 border-b border-b-1 border-gray-400">
                            <input id="country-option-1" type="radio" name="payment_method" value="BCA"
                                class="w-4 h-4 border-one-primary">
                            <img src="{{ asset('assets/bank/bca.png') }}" class="h-4 w-auto ml-4">
                            <div class="ml-2">Bank Transfer - BCA</div>
                        </div>
                        <div class="flex items-center p-4 border-b border-b-1 border-gray-400">
                            <input id="country-option-1" type="radio" name="payment_method" value="MANDIRI"
                                class="w-4 h-4 border-one-primary">
                            <img src="{{ asset('assets/bank/mandiri.png') }}" class="h-4 w-auto ml-4">
                            <div class="ml-2">Bank Transfer - MANDIRI</div>
                        </div>
                        <div class="flex items-center p-4">
                            <input id="country-option-1" type="radio" name="payment_method" value="BRI"
                                class="w-4 h-4 border-one-primary">
                            <img src="{{ asset('assets/bank/bri.png') }}" class="h-4 w-auto ml-4">
                            <div class="ml-2">Bank Transfer - BRI</div>
                        </div>



                    </div>
                </div>
                <div class="ml-40">
                    <h4 class="text-lg font-semibold mb-4">Pesanan Anda</h4>
                    <div class="p-4 rounded-xl shadow-lg">
                        <div class="basis-1/2 flex justify-between items-center mb-8">
                            <div class="flex items-center">
                                <img src="{{ asset('assets/kelas/kelas_1.png') }}" class="w-14 h-14 rounded-lg"
                                    alt="">
                                <div class="ml-2">Becoming Profesional UI/UX Designer</div>
                            </div>
                            <div class="basis-1/2 flex justify-between">
                                <div class="px-2">x1</div>
                                <div class="grow">Rp. 36.000.000</div>
                            </div>
                        </div>
                        <hr class="h-px bg-gray-200 border-0">
                        <div class="flex justify-between py-4 font-semibold text-lg">
                            <div>Total</div>
                            <div>Rp. 36.000.000.,-</div>
                        </div>
                        <button type="submit"
                            class="w-full text-white bg-one-primary hover:bg-one-primary focus:ring-4 font-medium rounded-lg text-sm px-5 py-2.5 my-2">Checkout
                        </button>
                        {{-- data-modal-target="popup-modal" data-modal-toggle="popup-modal"  --}}
                    </div>

                </div>

            </div>
        </form>
    </div>
@endsection

@section('modal')
    <div id="popup-modal" tabindex="-1"
        class="fixed top-0 left-0 right-0 z-50 hidden p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative w-full max-w-md max-h-full">
            <div class="relative bg-white rounded-lg shadow ">
                <div class="text-center">
                    <div class="flex justify-center">
                        <img src="{{ asset('assets/modal/check.png') }}" class="w-48 h-auto" alt="">
                    </div>
                    <div class="px-6 pb-6">
                        <h3 class="mb-2 text-xl font-semibold text-one-secondary">Pendaftaran Berhasil</h3>
                        <p class="text-sm font-light px-16 mb-2">Silakan periksa email untuk detail pembelian. Selamat
                            Belajar!
                        </p>
                        <button data-modal-hide="popup-modal" type="button"
                            class="text-white bg-one-primary hover:bg-one-primary focus:ring-4 focus:outline-none focus:ring-red-300  font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center mr-2">
                            Ok
                        </button>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
