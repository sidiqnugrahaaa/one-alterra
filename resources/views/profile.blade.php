@extends('layouts.main')

@section('content')
    <div class="container mx-auto ">
        <div class="flex justify-between px-8 my-10">
            <div class="flex items-center">
                <img src="https://i.mydramalist.com/XNe1X_5c.jpg" class="w-32 h-32 rounded-full object-cover" alt="">
                <div class="ms-6">
                    <h1 class="font-semibold text-3xl text-one-secondary mb-2">{{ $user->name }}</h1>
                    <h4 class="text-xl text-gray-500">{{ $user->email }}</h4>
                </div>
            </div>
            <div class="flex items-center">
                <button type="button"
                    class="text-white bg-one-secondary hover:bg-one-secondary focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Edit
                    Profile</button>
            </div>
        </div>
        <hr class="h-px my-8 bg-gray-200 border-0 dark:bg-gray-700">
        <div class="mb-16" id="enrolled-course">
            <h4 class="text-one-secondary font-semibold text-2xl mb-8">Enrolled Courses</h4>
            <div class="grid grid-cols-2 gap-32">
                @foreach ($enrolledCourse as $item)
                    <div class="rounded-lg shadow-lg  bg-white flex">
                        <img class="object-cover rounded-l-lg w-72 " src="{{ asset('assets/kelas/kelas_1.png') }}"
                            alt="">
                        <div class="flex flex-col py-4 px-6 leading-normal ">
                            <h5 class="mb-4 text-2xl font-semibold text-one-secondary">
                                {{ $item->course->title }}</h5>
                            <div class="mb-2">
                                <div class="flex justify-end mb-1">
                                    <span class="text-sm font-medium text-one-primary ">{{ $item->progress }}%</span>
                                </div>
                                <div class="w-full bg-gray-200 rounded-full h-2.5 mb-4 dark:bg-gray-700">
                                    <div class="bg-one-primary h-2.5 rounded-full"
                                        style="{{ 'width: ' . $item->progress . '%' }}"></div>
                                </div>
                            </div>
                            @php
                                $item->current_content_id = $item->current_content_id ?? 'introduction';
                            @endphp
                            @if ($item->current_content_id != 'introduction')
                                <a href="{{ route('course.show', ['id' => $item->id, 'detail' => $item->current_content_id]) }}"
                                    class="text-center cursor-pointer focus:outline-none text-white bg-one-secondary font-medium rounded-lg text-sm px-5 py-2.5 mb-2">
                                    Lanjutkan</a>
                            @else
                                <a href="{{ route('course.show', ['id' => $item->id, 'detail' => $item->current_content_id]) }}"
                                    class="text-center cursor-pointer focus:outline-none text-white bg-one-secondary font-medium rounded-lg text-sm px-5 py-2.5 mb-2">
                                    Start Course</a>
                            @endif
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        <div class="mb-32" id="waktu-belajar">
            <div class="grid grid-cols-2 gap-32">
                <div>
                    <h4 class="text-one-secondary font-semibold text-2xl mb-8">Waktu Belajar</h4>
                    <figure class="highcharts-figure bg-white rounded-xl shadow-lg p-8">
                        <div id="container"></div>
                    </figure>
                </div>
                <div>
                    <h4 class="text-one-secondary font-semibold text-2xl mb-8">Skor Tes</h4>

                    <div class="relative overflow-x-auto p-8 bg-white shadow-lg rounded-lg">
                        <table class="w-full text-sm text-left text-one-secondary rounded-lg">
                            <thead class="text-lg font-normal text-white bg-one-primary ">
                                <tr>
                                    <th scope="col" class="px-6 py-3">
                                        Tanggal
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Judul
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Skor
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($listScore as $score)
                                    <tr class="bg-white border-b dark:bg-gray-800">
                                        <th scope="row" class="px-6 py-4 font-medium whitespace-nowrap">
                                            {{ $score['taken_date'] }}
                                        </th>
                                        <td class="px-6 py-4">
                                            {{ $score['title'] }}
                                        </td>
                                        <td class="px-6 py-4 font-semibold">
                                            {{ $score['score'] }}
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>

    </div>
@endsection

@section('script')
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script>
        var chartData = [{
                day: 'Day 1',
                hours: 3
            },
            {
                day: 'Day 2',
                hours: 4
            },
            {
                day: 'Day 3',
                hours: 5
            },
            {
                day: 'Day 4',
                hours: 6
            },
            {
                day: 'Day 5',
                hours: 0
            },
            {
                day: 'Day 6',
                hours: 7
            },
            {
                day: 'Day 7',
                hours: 8
            }
        ];

        Highcharts.chart('container', {
            chart: {
                type: 'areaspline'
            },
            title: null,
            xAxis: {
                categories: chartData.map(item => item.day),
            },
            yAxis: {
                title: {
                    text: 'Jam',
                    position: 'middle'
                }
            },
            credits: {
                enabled: false
            },
            series: [{
                name: 'Study Time',
                data: chartData.map(item => item.hours),
                color: 'rgba(124, 181, 236, 0.7)', // Set your preferred color
                marker: {
                    enabled: true,
                    symbol: 'circle'
                }
            }]
        });
    </script>
@endsection
