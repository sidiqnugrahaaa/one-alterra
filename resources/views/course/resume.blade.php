@extends('layouts.course')

@section('content')
    <div class="w-full bg-white rounded-2xl h-fill p-8 text-one-secondary">
        <h1 class="text-2xl font-bold mb-8"> {{ $currentContent->content->title }}</h1>
        {!! $currentContent->content->contentPracticum->description !!}
        <hr>
        <div>
            <h5 class="text-lg font-bold my-2nline-flex items-center">Jawaban<span id="jawaban-error"
                    class="text-sm font-medium text-red-300 ml-2"></span></h5>
            <textarea id="jawaban" name="jawaban" rows="4"
                class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 "
                placeholder="Jawaban" {{ $currentContent->status == 1 ? 'readonly' : '' }}>{{ $currentContent->status == 1 ? $currentContent->taskTaken->answer : '' }}</textarea>
        </div>
        <div>
            <h5 class="text-lg font-bold my-2 inline-flex items-center">Upload File <span id="upload-error"
                    class="text-sm font-medium text-red-300 ml-2"></span></h5>
            <div class="flex items-center justify-center w-full">
                <label for="{{ $currentContent->status == 0 ? 'dropzone-file' : '' }}"
                    class="flex flex-col items-center justify-center w-full h-64 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 ">
                    <div class="flex flex-col items-center justify-center pt-5 pb-6 file-info">
                        @if ($currentContent->status == 1)
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-8 h-8 mb-4 text-gray-500">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m0 12.75h7.5m-7.5 3H12M10.5 2.25H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z" />
                            </svg>
                            <p class="mb-2 text-sm text-gray-500 "><span
                                    class="font-semibold">{{ 'File_jawaban_' . $currentContent->taskTaken->file }}</span>
                            </p>
                        @else
                            <svg class="w-8 h-8 mb-4 text-gray-500 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 20 16">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2" />
                            </svg>
                            <p class="mb-2 text-sm text-gray-500 "><span class="font-semibold">Click to
                                    upload</span> or drag and drop</p>
                            <p class="text-xs text-gray-500 ">docx, doc, pdf</p>
                        @endif
                    </div>
                    @if ($currentContent->status == 0)
                        <input id="dropzone-file" type="file" name="file_task" class="hidden" onchange="changefile()" />
                    @endif
                </label>
            </div>

        </div>
        @if ($currentContent->status == 0)
            <div class="text-end">
                <button onclick="submitTask()" type="button"
                    class=" text-white bg-one-primary hover:bg-one-primary focus:ring-4 font-medium rounded-lg px-5 py-2.5 my-2">Submit
                </button>
            </div>
        @endif
    </div>
@endsection

@section('script')
    <script>
        function submitTask() {
            $('#jawaban-error').text('');
            $('#upload-error').text('');
            let formData = new FormData();
            formData.append('_token', '{{ csrf_token() }}');
            formData.append('id_task', '{{ $currentContent->id }}');
            formData.append('jawaban', document.getElementById('jawaban').value);
            formData.append('file_task', document.getElementById('dropzone-file').files[0]);
            console.log(formData);
            $.ajax({
                url: "{{ route('course.task.submit') }}",
                type: "POST",
                data: formData,
                contentType: false, // Set content type to false
                processData: false, // Don't process the files
                success: function(data) {
                    if (data.status == 'success') {
                        Swal.fire({
                            icon: 'success',
                            title: 'Berhasil',
                            text: data.message,
                            showConfirmButton: false,
                            timer: 1500
                        }).then((result) => {
                            var url =
                                "{{ route('course.show', ['id' => $enrolled->id, 'detail' => $currentContent->id]) }}"
                            window.location.href = url;
                        })
                    } else {
                        Swal.fire({
                            icon: 'error',
                            title: 'Gagal',
                            text: data.message,
                            showConfirmButton: true,
                            confirmButtonColor: '#F37524',
                        })
                    }
                },
                error: function(response) {
                    data = response.responseJSON;
                    if (data.errors && data.errors.jawaban) {
                        $('#jawaban-error').text(data.errors.jawaban[0]);
                    }

                    if (data.errors && data.errors.file_task) {
                        $('#upload-error').text(data.errors.file_task[0]);
                    }
                    Swal.fire({
                        icon: 'error',
                        title: 'Gagal',
                        text: data.message,
                        showConfirmButton: true,
                        confirmButtonColor: '#F37524',
                    })
                }
            });
        }

        function changefile() {
            let fileName = $('#dropzone-file').val().split('\\').pop();
            if (fileName) {
                $('.file-info').html(`<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8 mb-4 text-gray-500">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m0 12.75h7.5m-7.5 3H12M10.5 2.25H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z" />
                                    </svg>
                                <p class="mb-2 text-sm text-gray-500 "><span class="font-semibold">` + fileName +
                    `</span></p>
                               `);
            }
        }
    </script>
@endsection
