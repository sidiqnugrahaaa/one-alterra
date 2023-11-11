<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <div class="h-screen">
        <div class="flex h-full w-full items-center">
            <div class="flex flex-col justify-between items-center h-full w-[700px] bg-cover bg-no-repeat py-32"
                style="background-image: url({{ asset('assets/bg_auth.png') }})">
                <img src="{{ asset('logo_alterra.svg') }}" class="w-72 h-auto" alt="">
                <p class="px-32 text-center text-white tracking-wide text-lg">
                    Mentransformasi 250+ alumni menjadi Tech Talent berkualitas dengan karir serta income yang lebih
                    baik di Indonesia 💫
                    <br><br>
                    #KarirITMenanti Kamu Disini!
                </p>
            </div>
            <div class="py-16 px-48 grow">
                <form action="{{ route('sign-up-post') }}" method="POST">
                    @csrf
                    <h3 class="font-semibold text-one-secondary text-3xl mb-4">Daftar Akun Alterra</h3>
                    <div class="mb-6">
                        <label for="nama" class="block mb-2 text-xs font-light">Nama Lengkap</label>
                        <input type="text" id="nama"
                            class="border border-one-secondary text-sm rounded-lg block
                        w-full p-2.5 "
                            placeholder="Masukan Nama Lengkap" required name="fullname">
                        <div class="text-[10px] pt-1">Masukkan nama asli Anda, nama akan digunakan pada data
                            sertifikat</div>
                    </div>
                    <div class="mb-6">
                        <label for="phone" class="block mb-2 text-xs font-light">Nomor Telpon</label>
                        <input type="text" id="phone"
                            class="border border-one-secondary text-sm rounded-lg block
                        w-full p-2.5 "
                            placeholder="Masukan Nomor Telpon" required name="phone_number">
                    </div>
                    <div class="mb-6">
                        <label for="email" class="block mb-2 text-xs font-light">Email</label>
                        <input type="email" id="email"
                            class="border border-one-secondary text-sm rounded-lg block
                        w-full p-2.5 "
                            placeholder="Masukan Email" name="email" required>
                    </div>
                    <div class="mb-6">
                        <label for="username" class="block mb-2 text-xs font-light">Username</label>
                        <input type="text" id="username"
                            class="border border-one-secondary text-sm rounded-lg block
                        w-full p-2.5 "
                            placeholder="Masukan Username" name="username" required>
                    </div>
                    <div class="mb-6">
                        <label for="password" class="block mb-2 text-xs font-light">Password</label>
                        <input type="password" id="password"
                            class="border border-one-secondary text-sm rounded-lg block
                        w-full p-2.5 "
                            placeholder="Masukan Password" name="password" required>
                    </div>
                    <div class="mb-6">
                        <button type="submit"
                            class="w-full text-white bg-one-primary hover:bg-one-primary focus:ring-4 font-medium rounded-lg text-sm px-5 py-2.5 my-2">Daftar
                        </button>
                    </div>
                </form>
                {{-- <div class="text-one-primary text-center text-sm">
                    Belum punya akun? <a href="#" class="font-semibold">Daftar</a>
                </div> --}}
            </div>
        </div>
    </div>
</body>

</html>
