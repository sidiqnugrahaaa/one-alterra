@extends('layouts.course')

@section('content')
    <div class="w-full bg-white rounded-2xl h-fill p-8 text-one-secondary">
        @if ($currentContent->status)
            <div class="text-center" id="info-nilai">
                <h1 class="text-2xl font-bold">Hore! Kamu telah menyelesaikan</h1>
                <h1 class="text-2xl font-bold">{{ $currentContent->content->title }}</h1>
                <div class="mx-40 flex flex-col items-center bg-cover bg-no-repeat"
                    style="background-image: url({{ asset('assets/party.png') }})">
                    <div class="mt-10 mb-6">Nilai kamu:</div>
                    <div class="flex items-center justify-center rounded-full w-32 h-32 bg-one-primary">
                        <h1 class="text-white text-5xl font-bold">{{ $currentContent->testScore[0]->total_score }}</h1>
                    </div>
                    <button onclick="infoNilai(false)" type="button"
                        class=" mt-8 text-white bg-one-primary hover:bg-one-primary focus:ring-4 font-medium rounded-lg px-5 py-2.5 my-2">Lihat
                        Rekap Nilai
                    </button>
                </div>
            </div>
        @endif
        <form id="testForm" class="{{ $currentContent->status ? 'hidden' : '' }}">
            <input type="hidden" name="id_test" value="{{ $currentContent->id }}">
            <h1 class="text-2xl font-bold mb-2"> {{ $currentContent->content->title }}</h1>
            <p>{{ $currentContent->content->contentTest->description }}</p>
            <div class="mt-8">
                @foreach ($currentContent->testTaken as $test)
                    <div class="bg-gray-200 text-one-secondary rounded-xl p-6 mt-6">
                        <div class="flex">
                            <div class="font-semibold mr-2">{{ $test->testQuestion->question_number }}.</div>
                            <div>{{ $test->testQuestion->question }}</div>
                        </div>
                        @if ($test->testQuestion->question_image)
                            <div class="mt-4">
                                <img src="{{ $test->testQuestion->question_image }}" class="w-80 h-auto ml-6 mb-6"
                                    alt="">
                            </div>
                        @endif
                        <div class="my-2 grid grid-flow-row grid-cols-2 ml-6">
                            <div class="flex items-center mb-4">
                                <input id="{{ 'question_' . $test->testQuestion->id . '_a' }}" type="radio"
                                    value="a" name="{{ 'question_' . $test->testQuestion->id }}"
                                    class="w-4 h-4 text-one-primary focus:ring-one-primary border-gray-300 cursor-pointer"
                                    {{ $test->answer_a ? 'checked' : '' }}>
                                <label for="{{ 'question_' . $test->testQuestion->id . '_a' }}"
                                    class="ms-2 hover:cursor-pointer">{{ $test->testQuestion->answer_a }}</label>
                            </div>
                            <div class="flex items-center mb-4">
                                <input id="{{ 'question_' . $test->testQuestion->id . '_b' }}" type="radio"
                                    value="b" name="{{ 'question_' . $test->testQuestion->id }}"
                                    class="w-4 h-4 text-one-primary focus:ring-one-primary border-gray-300 cursor-pointer"
                                    {{ $test->answer_b ? 'checked' : '' }}>
                                <label for="{{ 'question_' . $test->testQuestion->id . '_b' }}"
                                    class="ms-2 hover:cursor-pointer">{{ $test->testQuestion->answer_b }}</label>
                            </div>
                            <div class="flex items-center mb-4">
                                <input id="{{ 'question_' . $test->testQuestion->id . '_c' }}" type="radio"
                                    value="c" name="{{ 'question_' . $test->testQuestion->id }}"
                                    class="w-4 h-4 text-one-primary focus:ring-one-primary border-gray-300 cursor-pointer"
                                    {{ $test->answer_c ? 'checked' : '' }}>
                                <label for="{{ 'question_' . $test->testQuestion->id . '_c' }}"
                                    class="ms-2 hover:cursor-pointer">{{ $test->testQuestion->answer_c }}</label>
                            </div>
                            <div class="flex items-center mb-4">
                                <input id="{{ 'question_' . $test->testQuestion->id . '_d' }}" type="radio"
                                    value="d" name="{{ 'question_' . $test->testQuestion->id }}"
                                    class="w-4 h-4 text-one-primary focus:ring-one-primary border-gray-300 cursor-pointer"
                                    {{ $test->answer_d ? 'checked' : '' }}>
                                <label for="{{ 'question_' . $test->testQuestion->id . '_d' }}"
                                    class="ms-2 hover:cursor-pointer">{{ $test->testQuestion->answer_d }}</label>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="text-end font-semibold mt-8" id="infoAnswered"></div>
            @if ($currentContent->status)
                <div class="text-end">
                    <button onclick="infoNilai(true)" type="button"
                        class=" mt-8 text-white bg-one-primary hover:bg-one-primary focus:ring-4 font-medium rounded-lg px-5 py-2.5 my-2">
                        Lihat Nilai
                    </button>
                </div>
            @else
                <div class="text-end">
                    <button onclick="submitTest({{ $currentContent->id }})" type="button"
                        class=" text-white bg-one-primary hover:bg-one-primary focus:ring-4 font-medium rounded-lg px-5 py-2.5 my-2">Submit
                    </button>
                </div>
            @endif
        </form>
    </div>
@endsection

@section('script')
    <script>
        let totalQuestion = '{{ $currentContent->content->contentTest->testQuestion->count() }}';
        $('input[type=radio]').on('click', function() {
            let questionAnswered = $('input[type=radio]:checked').length;
            $('#infoAnswered').text(questionAnswered + '/' + totalQuestion + ' Jawab Terisi');
        });


        function submitTest(detail) {
            Swal.fire({
                title: 'Apakah kamu yakin?',
                text: "Kamu tidak bisa mengubah jawaban setelah submit",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#F37524',
                cancelButtonColor: '#9CA3AF',
                confirmButtonText: 'Submit',
                cancelButtonText: 'Batal'
            }).then((result) => {
                if (result.isConfirmed) {
                    let formData = $('#testForm').serializeArray();
                    formData.push({
                        name: '_token',
                        value: "{{ csrf_token() }}",
                    });

                    let dataObject = {};
                    formData.forEach(item => {
                        dataObject[item.name] = item.value;
                    });

                    $.ajax({
                        url: "{{ route('course.test.submit') }}",
                        type: 'POST',
                        data: dataObject,
                        success: function(response) {
                            console.log(response);
                            Swal.fire({
                                title: 'Berhasil!',
                                text: 'Jawaban Berhasil Tersimpan',
                                icon: 'success',
                                confirmButtonColor: '#F37524',
                                confirmButtonText: 'Selesai',
                            }).then((result) => {
                                if (result.isConfirmed) {
                                    var url =
                                        "{{ route('course.show', ['id' => $enrolled->id, 'detail' => ':id']) }}"
                                        .replace(
                                            ':id', detail);
                                    window.location.href = url;

                                }
                            })
                        }
                    })
                }
            })
        }

        function infoNilai(state) {
            if (state) {
                $('#info-nilai').show();
                $('#testForm').hide();
                $('html, body').animate({
                    scrollTop: 0
                }, 'slow');
            } else {
                $('#info-nilai').hide();
                $('#testForm').show();
            }
        }
    </script>
@endsection
