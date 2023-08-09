<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>


    <!-- Card is full width. Use in 12 col grid for best view. -->
    <!-- Card code block start -->
    <div class="w-full grid sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-8 lg:mt-11">
        <div class="bg-white dark:bg-gray-800 rounded py-5 pl-6 flex items-start shadow">
            <div class="text-gray-700 dark:text-gray-400">
                <img class="dark:hidden"
                    src="https://tuk-cdn.s3.amazonaws.com/can-uploader/medium_stat_cards_alternate_style-svg1.svg"
                    alt="icon" />
                <img class="hidden dark:block"
                    src="https://tuk-cdn.s3.amazonaws.com/can-uploader/medium_stat_cards_alternate_style-svg1dark.svg"
                    alt="icon" />
            </div>
            <div class="pl-3 pr-10 mt-1">
                <h3 tabindex="0"
                    class="focus:outline-none font-normal leading-4 text-gray-800 dark:text-gray-100 text-base">Profit
                    Earned</h3>
                <div class="flex items-end mt-4">
                    <h2 tabindex="0"
                        class="focus:outline-none text-indigo-700 dark:text-indigo-600 text-2xl leading-normal font-bold">
                        2,330</h2>
                    <p tabindex="0" class="focus:outline-none ml-2 mb-1 text-sm text-gray-600 dark:text-gray-400">from
                        2,125</p>
                </div>
                <div class="flex items-center mt-5">
                    <div class="text-green-700">
                        <svg xmlns="http://www.w3.org/2000/svg" tabindex="0" aria-label="trending up icon"
                            role="img" class="focus:outline-none icon icon-tabler icon-tabler-trending-up"
                            width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                            fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" />
                            <polyline points="3 17 9 11 13 15 21 7" />
                            <polyline points="14 7 21 7 21 14" />
                        </svg>
                    </div>
                    <p tabindex="0"
                        class="focus:outline-none text-green-700 text-xs tracking-wide font-bold leading-normal pl-1">
                        7.2% Increase</p>
                </div>
            </div>
        </div>
        <div class="bg-white dark:bg-gray-800 rounded py-5 pl-6 flex items-start shadow">
            <div class="text-gray-700 dark:text-gray-400">
                <img class="dark:hidden"
                    src="https://tuk-cdn.s3.amazonaws.com/can-uploader/medium_stat_cards_alternate_style-svg1.svg"
                    alt="icon" />
                <img class="hidden dark:block"
                    src="https://tuk-cdn.s3.amazonaws.com/can-uploader/medium_stat_cards_alternate_style-svg1dark.svg"
                    alt="icon" />
            </div>
            <div class="pl-3 pr-10 mt-1">
                <h3 tabindex="0"
                    class="focus:outline-none font-normal leading-4 text-gray-800 dark:text-gray-100 text-base">Average
                    Click Rate</h3>
                <div class="flex items-end mt-4">
                    <h2 tabindex="0"
                        class="focus:outline-none text-indigo-700 dark:text-indigo-600 text-2xl leading-normal font-bold">
                        22.3%</h2>
                    <p tabindex="0" class="focus:outline-none ml-2 mb-1 text-sm text-gray-600 dark:text-gray-400">from
                        21.2%</p>
                </div>
                <div class="flex items-center mt-5">
                    <div class="text-green-700">
                        <svg xmlns="http://www.w3.org/2000/svg" tabindex="0" aria-label="trending up icon"
                            role="img" class="focus:outline-none icon icon-tabler icon-tabler-trending-up"
                            width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                            fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" />
                            <polyline points="3 17 9 11 13 15 21 7" />
                            <polyline points="14 7 21 7 21 14" />
                        </svg>
                    </div>
                    <p tabindex="0"
                        class="focus:outline-none text-green-700 text-xs tracking-wide font-bold leading-normal pl-1">
                        7.2% Increase</p>
                </div>
            </div>
        </div>
        <div class="bg-white dark:bg-gray-800 rounded py-5 pl-6 flex items-start shadow">
            <div class="text-gray-700 dark:text-gray-400">
                <img class="dark:hidden"
                    src="https://tuk-cdn.s3.amazonaws.com/can-uploader/medium_stat_cards_alternate_style-svg1.svg"
                    alt="icon" />
                <img class="hidden dark:block"
                    src="https://tuk-cdn.s3.amazonaws.com/can-uploader/medium_stat_cards_alternate_style-svg1dark.svg"
                    alt="icon" />
            </div>
            <div class="pl-3 pr-10 mt-1">
                <h3 tabindex="0"
                    class="focus:outline-none font-normal leading-4 text-gray-800 dark:text-gray-100 text-base">Total
                    Sales</h3>
                <div class="flex items-end mt-4">
                    <h2 tabindex="0"
                        class="focus:outline-none text-indigo-700 dark:text-indigo-600 text-2xl leading-normal font-bold">
                        2,330</h2>
                    <p tabindex="0" class="focus:outline-none ml-2 mb-1 text-sm text-gray-600 dark:text-gray-400">from
                        2,850</p>
                </div>
                <div class="flex items-center mt-5">
                    <div class="text-red-700">
                        <svg xmlns="http://www.w3.org/2000/svg" tabindex="0" aria-label="trending down icon"
                            role="img" class="focus:outline-none icon icon-tabler icon-tabler-trending-down"
                            width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" />
                            <polyline points="3 7 9 13 13 9 21 17" />
                            <polyline points="21 10 21 17 14 17" />
                        </svg>
                    </div>
                    <p tabindex="0"
                        class="focus:outline-none text-red-700 text-xs tracking-wide font-bold leading-normal pl-1">
                        3.5% Decrease</p>
                </div>
            </div>
        </div>
        <div class="bg-white dark:bg-gray-800 rounded py-5 pl-6 flex items-start shadow">
            <img class="dark:hidden"
                src="https://tuk-cdn.s3.amazonaws.com/can-uploader/medium_stat_cards_alternate_style-svg1.svg"
                alt="icon" />
            <img class="hidden dark:block"
                src="https://tuk-cdn.s3.amazonaws.com/can-uploader/medium_stat_cards_alternate_style-svg1dark.svg"
                alt="icon" />
            <div class="pl-3 pr-10 mt-1">
                <h3 tabindex="0"
                    class="focus:outline-none font-normal leading-4 text-gray-800 dark:text-gray-100 text-base">Profit
                    Earned</h3>
                <div class="flex items-end mt-4">
                    <h2 tabindex="0"
                        class="focus:outline-none text-indigo-700 dark:text-indigo-600 text-2xl leading-normal font-bold">
                        $1200</h2>
                    <p tabindex="0" class="focus:outline-none ml-2 mb-1 text-sm text-gray-600 dark:text-gray-400">
                        from $800</p>
                </div>
                <div class="flex items-center mt-5">
                    <div class="text-green-700">
                        <svg xmlns="http://www.w3.org/2000/svg" tabindex="0" aria-label="trending up icon"
                            role="img" class="focus:outline-none icon icon-tabler icon-tabler-trending-up"
                            width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" />
                            <polyline points="3 17 9 11 13 15 21 7" />
                            <polyline points="14 7 21 7 21 14" />
                        </svg>
                    </div>
                    <p tabindex="0"
                        class="focus:outline-none text-green-700 text-xs tracking-wide font-bold leading-normal pl-1">
                        7.2% Increase</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Card code block end -->


    <div class="w-full flex items-center justify-center py-12 sm:px-6 px-4">
        <div class="sm:max-w-3xl w-full rounded shadow bg-white dark:bg-gray-800">
            <!-- Please include this script in the head section of your webpage to make the chart work.-->
            <!-- <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script> -->
            <div class="px-5">
                <div class="md:flex">
                    <div class="md:w-3/4 py-6 md:pr-7">
                        <div class="md:flex items-center">
                            <p class="text-xl font-semibold leading-5 md:pr-48 dark:text-gray-100 text-gray-800">
                                Revenue Report</p>
                            <div class="flex items-center md:pt-0 pt-4">
                                <div class="flex items-center">
                                    <div class="w-3 h-3 bg-indigo-700 rounded-full"></div>
                                    <p class="text-sm leading-none text-gray-500 dark:text-gray-400 pl-2">Earning</p>
                                </div>
                                <div class="flex items-center pl-5">
                                    <div class="w-3 h-3 bg-yellow-400 rounded-full"></div>
                                    <p class="text-sm leading-none pl-2 text-gray-500 dark:text-gray-400">Expense</p>
                                </div>
                            </div>
                        </div>
                        <div class="w-full h-full pt-8">
                            <canvas id="canvas"></canvas>
                        </div>
                    </div>
                    <div class="md:border-l md:py-6 py-4 border-gray-200 md:w-1/4 h-full flex items-center flex-col">
                        <div class="flex items-center relative w-20 rounded border border-indigo-700">
                            <select aria-label="select year"
                                class="focus:ring-2  focus:ring-offset-2 focus:ring-indigo-700 rounded-md py-1.5 px-3.5 uppercase tracking-normal focus:outline-none text-xs font-semibold leading-none text-center text-indigo-700 appearance-none pr-3.5 z-20 relative bg-transparent w-full">
                                <option value="2020">2020</option>
                                <option value="2019">2019</option>
                                <option value="2018">2018</option>
                            </select>
                            <div class="mx-1 absolute right-0 z-10 pointer-event-none">
                                <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/card94-svg1.svg"
                                    alt="chevron-down" />

                            </div>
                        </div>
                        <p
                            class="text-2xl font-medium leading-normal pt-10 text-center dark:text-gray-100 text-gray-800">
                            $25,852</p>
                        <p class="text-sm leading-none text-center pt-3 text-gray-500 dark:text-gray-400">Budget:
                            56,800</p>
                        <div class="px-11 pt-8">
                            <canvas id="myChart" width="130"></canvas>
                        </div>
                        <button
                            class="focus:outline-none focus:ring-2 focus:ring-offset-2 focus:bg-indigo-800 focus:ring-indigo-700 text-sm mt-12 mb-6 font-medium leading-none text-center text-white py-2.5 px-5 rounded bg-indigo-700 hover:bg-indigo-600">Increase
                            Budget</button>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <script>
        var ctx = document.getElementById("canvas").getContext("2d");

        var data = {
            labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep"],
            datasets: [{
                    label: "Earning",
                    backgroundColor: ["#4338CA", "#4338CA", "#4338CA", "#4338CA", "#4338CA", "#4338CA", "#4338CA",
                        "#4338CA", "#4338CA"
                    ],
                    data: [100, 200, 300, 250, 100, 50, 200, 300, 100],
                    borderColor: "#FFFFFF",
                    borderWidth: 0,
                    fill: false,
                },

                {
                    label: "Expenses",
                    backgroundColor: ["#FBBF24", "#FBBF24", "#FBBF24", "#FBBF24", "#FBBF24", "#FBBF24", "#FBBF24",
                        "#FBBF24", "#FBBF24"
                    ],
                    data: [-100, -200, -250, -250, -100, -50, -200, -250, -100],
                    borderColor: "#FFFFFF",
                    borderWidth: 0,
                },
            ],
        };

        var myBarChart = new Chart(ctx, {
            type: "bar",
            data: data,
            options: {
                legend: {
                    display: false,
                },
                barValueSpacing: 0,
                barRoundness: 1,
                scales: {
                    yAxes: [{
                        ticks: {
                            min: -300,
                            max: 300,
                        },
                        gridLines: {
                            display: false,
                            drawBorder: false,
                        },
                    }, ],
                    xAxes: [{
                        stacked: true,
                        barPercentage: 0.2,
                        gridLines: {
                            display: false,
                            drawBorder: false,
                        },
                    }, ],
                },
            },
        });
        // chart2
        var ctx = document.getElementById("myChart").getContext("2d");
        var myChart = new Chart(ctx, {
            type: "line",
            data: {
                labels: ["", "", "", " ", "", ""],
                datasets: [{
                        data: [22, 28, 25, 28, 26, 22],
                        backgroundColor: ["#FFFFFF"],
                        borderColor: ["#4338CA"],

                        borderWidth: 1,
                        strokeColor: "#6366F1",
                        fill: false,
                    },
                    {
                        data: [1, 5, 8, 9, 6, 9],
                        backgroundColor: ["#FFFFFF"],
                        borderColor: ["#4338CA"],
                        borderDash: [5],
                        borderWidth: 1,
                        strokeColor: "#6366F1",
                        fill: false,
                    },
                ],
            },
            options: {
                elements: {
                    point: {
                        radius: 0,
                    },
                },
                generateLabels: {
                    hidden: true,
                },
                legend: {
                    display: false,
                },
                scales: {
                    yAxes: [{
                        gridLines: {
                            display: false,
                            drawBorder: false,
                        },
                        display: false,
                        ticks: {
                            min: 0,
                            max: 30,
                        },
                    }, ],
                    xAxes: [{
                        gridLines: {
                            display: false,
                            drawBorder: false,
                        },
                        display: false,
                    }, ],
                },
            },
        });
    </script>


</x-app-layout>
