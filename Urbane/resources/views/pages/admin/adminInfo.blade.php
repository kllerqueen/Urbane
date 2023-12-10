@extends('template.adminTemplate')


@section('body')

    <div class="px-2 md:px-8 py-2 md:py-4 w-full">

        <div class="flex flex-col gap-[10px] mb-[50px] text-primary">
            <h1 class="bold-24 md:bold-32">
                Information
            </h1>
            <div class="flex max-w-[1000px] w-full flex-col text-white">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-2">
                    <div class="flex flex-col w-full">
                        <div class="flex flex-row gap-2 p-3 rounded-md w-full ">
                            <div class="flex flex-row items-center bg-primary/30 p-3 rounded-md w-full gap-2">
                                <div class="bg-black p-3 rounded-full">
                                    <img src="{{url('assets/admin/boxInfo.png')}}" alt="" class="w-[30px] h-[30px]">
                                </div>
                                <div class="flex flex-col h-full justify-between">
                                    <h1 class="regular-12 md:regular-14 lg:regular-16">Total Products</h1>
                                    <p class="bold-14 md:bold-20 lg:bold-24">{{ $products }}</p>
                                </div>
                            </div>
                            <div class="flex flex-row items-center bg-primary/30 p-3 rounded-md w-full gap-2">
                                <div class="bg-black p-3 rounded-full flex items-center justify-center">
                                    <i class='bx bxs-user text-[28px]'></i>
                                </div>
                                <div class="flex flex-col h-full justify-between">
                                    <h1 class="regular-12 md:regular-14 lg:regular-16">Total Users</h1>
                                    <p class="bold-14 md:bold-20 lg:bold-24">{{ $users }}</p>
                                </div>
                            </div>
                        </div>

                        <div class="w-full h-[300px] px-3 pb-3">
                            <div class="bg-primary/30 rounded-md w-full h-full ">
                                <canvas id="transactionChart" class=" max-w-full max-h-full  p-2 " ></canvas>
                            </div>
                        </div>
                    </div>
                    <div class="w-full h-[250px] min-[460px]:h-full py-3 pr-3">
                        <div class="bg-primary/30 rounded-md h-full w-full  p-2">
                            <canvas id="lineChart" class=" w-full max-w-full min-h-full " ></canvas>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col gap-[10px] text-white overflow-x-auto ">
                    <div class="grid grid-cols-3Admin gap-8 items-center p-4 bg-primary rounded-md w-fit">
                        <p>Name</p>
                        <p>Action</p>
                        <p>DateTime</p>
                    </div>

                    <div class="flex flex-col gap-2">
                        @forelse ($history as $item)
                            <div class="grid grid-cols-3Admin gap-8 items-center border-2 border-white p-1 rounded-md w-fit">
                                <h1>{{ $item->admin_name }}</h1>
                                <h1>{{ $item->action }}</h1>
                                <h1>{{ \Carbon\Carbon::parse($item->datetime)->timezone('Asia/Jakarta')->format('d F Y H:i:s') }}</h1>
                            </div>
                        @empty
                            <h1 class="text-center">No history</h1>
                        @endforelse

                    </div>
                </div>

            </div>


        </div>

    </div>


    <script>
        window.onload = function() {
            const navLinks = document.querySelectorAll('#nav-link');
            navLinks.forEach(link => {
                link.addEventListener('click', function () {
                    navLinks.forEach(navLink => {
                        navLink.parentElement.classList.remove('active')
                    });
                    link.parentElement.classList.add('active');
                });
            });
            navLinks[1].parentElement.classList.add('active')
        }

        const transactionChart = document.getElementById('transactionChart');

        new Chart(transactionChart, {
            type: 'doughnut',
            data: {
                labels: ['Completed', 'Failed', 'On process' ],
                datasets: [{
                    label: '# of Votes',
                    data: [{{ $completed }}, {{ $failed }}, {{ $process }}],
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
                scales: {
                    x: {
                        display: false
                    },
                    y: {
                        display: false
                    }
                },
                plugins: {
                    legend: {
                        position: 'bottom',

                    },
                    title: {
                        display: true,
                        text: 'Transaction Sales',
                        color: 'white',
                        position: 'top',
                        fontSize: 20
                    }
                }
            }
        });

        const lineChart = document.getElementById('lineChart');

        new Chart(lineChart, {
            type: 'line',
            data: {
                labels: ['1', '2', '3' , '4', '5' , '6'],
                datasets: [{
                    label: 'User Growth',
                    data: [12, 19, 3, 12 , 35, 12],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    x: {
                        grid: {
                            color:'white'
                        }
                    },
                    y: {
                        grid: {
                            color:'white'
                        }
                    }
                },
                responsive: true,
                plugins: {
                    legend:{
                        display:false
                    },
                    title: {
                        display: true,
                        text: 'User Growth',
                        color:'white'
                    }
                }
            },
        });
    </script>



@endsection
