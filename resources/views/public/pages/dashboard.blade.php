@extends('public.layouts.app')
@section('title', 'Application | Dashboard')
@section('content')


<!--breadcrumbs-->
<div class="px-12 max-sm:px-6 py-3 mt-2">
    <nav class="flex" aria-label="Breadcrumb">
        <ol class="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse">
            <li class="inline-flex items-center">
                <p class="inline-flex items-center text-sm font-medium text-gray-700">
                    <svg class="w-3 h-3 me-2.5" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                        viewBox="0 0 20 20">
                        <path
                            d="m19.707 9.293-2-2-7-7a1 1 0 0 0-1.414 0l-7 7-2 2a1 1 0 0 0 1.414 1.414L2 10.414V18a2 2 0 0 0 2 2h3a1 1 0 0 0 1-1v-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v4a1 1 0 0 0 1 1h3a2 2 0 0 0 2-2v-7.586l.293.293a1 1 0 0 0 1.414-1.414Z" />
                    </svg>
                    Main Panel
                </p>
            </li>
            <li aria-current="page">
                <div class="flex items-center">
                    <svg class="rtl:rotate-180 w-3 h-3 text-gray-400 mx-1" xmlns="http://www.w3.org/2000/svg"
                        fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="2" d="m1 9 4-4-4-4" />
                    </svg>
                    <p class="ms-1 text-sm font-medium text-gray-700 md:ms-2">Dashboard</p>
                </div>
            </li>
        </ol>
    </nav>
</div>

<!-- your dashboard content -->
<div class="flex flex-wrap gap-5 justify-center items-center py-2">
   <!--green/blue data grid-->
        <div class="w-1/6 max-lg:w-1/3 max-sm:w-1/2 h-[70px] bg-basic-offset-2 flex">
            <div class="bg-basic w-1/3 h-full flex justify-center items-center">
                <img src="{{ asset('assets/Images/dashboard/data-cards/pd.png') }}" alt="card-img" class="w-1/2">
            </div>
            <div class="flex flex-col justify-center items-center w-2/3">
                <p class="text-xs w-full pl-2">Total Purchase Due</p>
                <h3 class="text-xl max-lg:text-lg w-full pl-2">Rs. 0.00</h3>
            </div>
        </div>
        <div class="w-1/6 max-lg:w-1/3 max-sm:w-1/2 h-[70px] bg-basic-offset-2 flex">
            <div class="bg-basic w-1/3 h-full flex justify-center items-center">
                <img src="{{ asset('assets/Images/dashboard/data-cards/sd.png') }}" alt="card-img" class="w-1/2">
            </div>
            <div class="flex flex-col justify-center items-center w-2/3">
                <p class="text-xs w-full pl-2">Total Sales Due</p>
                <h3 class="text-xl max-lg:text-lg w-full pl-2">Rs. 0.00</h3>
            </div>
        </div>
        <div class="w-1/6 max-lg:w-1/3 max-sm:w-1/2 h-[70px] bg-basic-offset-2 flex">
            <div class="bg-basic w-1/3 h-full flex justify-center items-center">
                <img src="{{ asset('assets/Images/dashboard/data-cards/sa.png') }}" alt="card-img" class="w-1/2">
            </div>
            <div class="flex flex-col justify-center items-center w-2/3">
                <p class="text-xs w-full pl-2">Total Sales Amount</p>
                <h3 class="text-xl max-lg:text-lg w-full pl-2">Rs. 0.00</h3>
            </div>
        </div>
        <div class="w-1/6 max-lg:w-1/3 max-sm:w-1/2 h-[70px] bg-basic-offset-2 flex">
            <div class="bg-basic w-1/3 h-full flex justify-center items-center">
                <img src="{{ asset('assets/Images/dashboard/data-cards/ea.png') }}" alt="card-img" class="w-1/2">
            </div>
            <div class="flex flex-col justify-center items-center w-2/3">
                <p class="text-xs w-full pl-2">Total Expenses Amount</p>
                <h3 class="text-xl max-lg:text-lg w-full pl-2">Rs. 0.00</h3>
            </div>
        </div>
        <div class="w-1/6 max-lg:w-1/3 max-sm:w-1/2 h-[70px] bg-basic-offset-4 flex">
            <div class="bg-basic w-1/3 h-full flex justify-center items-center">
                <img src="{{ asset('assets/Images/dashboard/data-cards/pd.png') }}" alt="card-img" class="w-1/2">
            </div>
            <div class="flex flex-col justify-center items-center w-2/3">
                <p class="text-xs w-full pl-2">Today Total Purchase</p>
                <h3 class="text-xl max-lg:text-lg w-full pl-2">Rs. 0.00</h3>
            </div>

        </div>
        <div class="w-1/6 max-lg:w-1/3 max-sm:w-1/2 h-[70px] bg-basic-offset-4 flex">
            <div class="bg-basic w-1/3 h-full flex justify-center items-center">
                <img src="{{ asset('assets/Images/dashboard/data-cards/sd.png') }}" alt="card-img" class="w-1/2">
            </div>
            <div class="flex flex-col justify-center items-center w-2/3">
                <p class="text-xs w-full pl-2">Total Payment Recieved (Sales)</p>
                <h3 class="text-xl max-lg:text-lg w-full pl-2">Rs. 0.00</h3>
            </div>

        </div>
        <div class="w-1/6 max-lg:w-1/3 max-sm:w-1/2 h-[70px] bg-basic-offset-4 flex">
            <div class="bg-basic w-1/3 h-full flex justify-center items-center">
                <img src="{{ asset('assets/Images/dashboard/data-cards/sa.png') }}" alt="card-img" class="w-1/2">
            </div>
            <div class="flex flex-col justify-center items-center w-2/3">
                <p class="text-xs w-full pl-2">Today Total Sales</p>
                <h3 class="text-xl max-lg:text-lg w-full pl-2">Rs. 0.00</h3>
            </div>

        </div>
        <div class="w-1/6 max-lg:w-1/3 max-sm:w-1/2 h-[70px] bg-basic-offset-4 flex">
            <div class="bg-basic w-1/3 h-full flex justify-center items-center">
                <img src="{{ asset('assets/Images/dashboard/data-cards/ea.png') }}" alt="card-img" class="w-1/2">
            </div>
            <div class="flex flex-col justify-center items-center w-2/3">
                <p class="text-xs w-full pl-2">Today Total Expenses</p>
                <h3 class="text-xl max-lg:text-lg w-full pl-2">Rs. 0.00</h3>
            </div>

        </div>
    </div>
    <!--rounded panel-->
    <div class="px-12 max-sm:px-6">
        <div class="rounded-2xl border-black border-2 h-[150px] max-md:h-fit flex items-center gap-3 max-md:flex-col">
            <div class="w-1/4 h-full flex flex-col justify-center items-center max-md:w-full">
                <div class="flex max-md:items-center">
                    <img src="{{ asset('assets/Images/dashboard/rounded-panel/customer.png') }}" alt="card-img" class="w-1/2">
                    <span class="flex flex-col w-1/2 h-full justify-evenly">
                        <p class="text-center">Customers</p>
                        <h3 class="text-2xl text-center font-bold">04</h3>
                    </span>
                </div>
            </div>
            <div class="w-[1px] h-5/6 border-[1px] border-black max-md:w-5/6"></div>
            <div class="w-1/4 h-full flex flex-col justify-center items-center max-md:w-full">
                <div class="flex max-md:items-center">
                    <img src="{{ asset('assets/Images/dashboard/rounded-panel/supplier.png') }}" alt="card-img" class="w-1/2">
                    <span class="flex flex-col w-1/2 h-full justify-evenly">
                        <p class="text-center">Suppliers</p>
                        <h3 class="text-2xl text-center font-bold">04</h3>
                    </span>
                </div>
            </div>
            <div class="w-[1px] h-5/6 border-[1px] border-black max-md:w-5/6"></div>
            <div class="w-1/4 h-full flex flex-col justify-center items-center max-md:w-full">
                <div class="flex max-md:items-center">
                    <img src="{{ asset('assets/Images/dashboard/rounded-panel/purchases.png') }}" alt="card-img" class="w-1/2">
                    <span class="flex flex-col w-1/2 h-full justify-evenly">
                        <p class="text-center">Purchases</p>
                        <h3 class="text-2xl text-center font-bold">04</h3>
                    </span>
                </div>
            </div>
            <div class="w-[1px] h-5/6 border-[1px] border-black max-md:w-5/6"></div>
            <div class="w-1/4 h-full flex flex-col justify-center items-center max-md:w-full">
                <div class="flex max-md:items-center">
                    <img src="{{ asset('assets/Images/dashboard/rounded-panel/invoice.png') }}" alt="card-img" class="w-1/2">
                    <span class="flex flex-col w-1/2 h-full justify-evenly">
                        <p class="text-center">Sales Invoice</p>
                        <h3 class="text-2xl text-center font-bold">04</h3>
                    </span>
                </div>
            </div>
        </div>
    </div>
    <!--chart + table-->
    <div class="h-fit">
        <!--btns-->
        <div class="px-12 max-sm:px-6 py-2 flex justify-end gap-3">
            <button id="chartBtn" class="border-black border-[1px] bg-black text-white p-3 rounded-lg">
                Sales Chart
            </button>
            <button id="tableBtn" class="border-black border-[1px] p-3 rounded-lg">Stock Alert</button>
        </div>
        <!--chart/table container-->
        <div class="w-full px-12 max-sm:px-6 pt-5">
            <!--chart-->
            <div id="chart" class="flex flex-col w-full">
                <h1 class="text-2xl pb-5">Sales Chart</h1>
                <!--chart from flowbite-->
                <div class=" w-full h-full bg-white rounded-lg shadow">
                    <div class="flex justify-between p-4 md:p-6 pb-0 md:pb-0">
                        <div class="flex items-center px-2.5 py-0.5 text-base font-semibold text-black text-center">
                            Sales Per Month
                        </div>
                    </div>
                    <div id="labels-chart" class="px-2.5"></div>
                </div>
            </div>
            <!--table-->
            <div id="table" class="hidden bg-white lg:h-[300px] overflow-y-auto">
                <!--table from flowbite-->
                <div class="relative">
                    <table class="w-full text-sm text-left rtl:text-right text-gray-500">
                        <thead class="text-xs text-white uppercase bg-basic">
                            <tr>
                                <th scope="col" class="px-6 py-3 rounded-tl-lg">
                                    #
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Item Name
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Current Stock
                                </th>
                                <th scope="col" class="px-6 py-3 rounded-tr-lg">
                                    Minimum Quantity
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="bg-white border-2 text-black">
                                <th scope="row" class="px-6 py-4 font-medium whitespace-nowrap">
                                    1
                                </th>
                                <td class="px-6 py-4">
                                    Statue 191
                                </td>
                                <td class="px-6 py-4">
                                    0
                                </td>
                                <td class="px-6 py-4">
                                    01
                                </td>
                            </tr>
                            <tr class="bg-white border-2 text-black border-b">
                                <th scope="row" class="px-6 py-4 font-medium whitespace-nowrap">
                                    1
                                </th>
                                <td class="px-6 py-4">
                                    Statue 191
                                </td>
                                <td class="px-6 py-4">
                                    0
                                </td>
                                <td class="px-6 py-4">
                                    01
                                </td>
                            </tr>
                            <tr class="bg-white border-2 text-black border-b">
                                <th scope="row" class="px-6 py-4 font-medium whitespace-nowrap">
                                    1
                                </th>
                                <td class="px-6 py-4">
                                    Statue 191
                                </td>
                                <td class="px-6 py-4">
                                    0
                                </td>
                                <td class="px-6 py-4">
                                    01
                                </td>
                            </tr>
                            <tr class="bg-white border-2 text-black border-b">
                                <th scope="row" class="px-6 py-4 font-medium whitespace-nowrap">
                                    1
                                </th>
                                <td class="px-6 py-4">
                                    Statue 191
                                </td>
                                <td class="px-6 py-4">
                                    0
                                </td>
                                <td class="px-6 py-4">
                                    01
                                </td>
                            </tr>
                            <tr class="bg-white border-2 text-black border-b">
                                <th scope="row" class="px-6 py-4 font-medium whitespace-nowrap">
                                    1
                                </th>
                                <td class="px-6 py-4">
                                    Statue 191
                                </td>
                                <td class="px-6 py-4">
                                    0
                                </td>
                                <td class="px-6 py-4">
                                    01
                                </td>
                            </tr>
                            <tr class="bg-white border-2 text-black border-b">
                                <th scope="row" class="px-6 py-4 font-medium whitespace-nowrap">
                                    1
                                </th>
                                <td class="px-6 py-4">
                                    Statue 191
                                </td>
                                <td class="px-6 py-4">
                                    0
                                </td>
                                <td class="px-6 py-4">
                                    01
                                </td>
                            </tr>
                            <tr class="bg-white border-2 text-black border-b">
                                <th scope="row" class="px-6 py-4 font-medium whitespace-nowrap">
                                    1
                                </th>
                                <td class="px-6 py-4">
                                    Statue 191
                                </td>
                                <td class="px-6 py-4">
                                    0
                                </td>
                                <td class="px-6 py-4">
                                    01
                                </td>
                            </tr>
                            <tr class="bg-white border-2 text-black border-b">
                                <th scope="row" class="px-6 py-4 font-medium whitespace-nowrap">
                                    1
                                </th>
                                <td class="px-6 py-4">
                                    Statue 191
                                </td>
                                <td class="px-6 py-4">
                                    0
                                </td>
                                <td class="px-6 py-4">
                                    01
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <script>
    // for toggling chart/table
    const chartBtn = document.getElementById("chartBtn");
    const tableBtn = document.getElementById("tableBtn");

    const chart = document.getElementById("chart");
    const table = document.getElementById("table");

    chartBtn.addEventListener("click", event => {
        chartBtn.style.backgroundColor = "black";
        chartBtn.style.color = "white";
        tableBtn.style.backgroundColor = "white";
        tableBtn.style.color = "black";
        chart.style.display = "block";
        table.style.display = "none";
    })

    tableBtn.addEventListener("click", event => {
        chartBtn.style.backgroundColor = "white";
        chartBtn.style.color = "black";
        tableBtn.style.backgroundColor = "black";
        tableBtn.style.color = "white";
        table.style.display = "block";
        chart.style.display = "none";
    })

    // for flowbite chart
    const options = {
        // set the labels option to true to show the labels on the X and Y axis
        xaxis: {
            show: true,
            categories: ['JAN', 'FEB', 'MAR', 'APR', 'MAY', 'JUN', 'JUL', 'AUG', 'SEP', 'OCT', 'NOV', 'DEC'],
            labels: {
                show: true,
                style: {
                    fontFamily: "Inter, sans-serif",
                    cssClass: 'text-xs font-normal fill-gray-500'
                }
            },
            axisBorder: {
                show: false,
            },
            axisTicks: {
                show: false,
            },
        },
        yaxis: {
            show: true,
            labels: {
                show: true,
                style: {
                    fontFamily: "Inter, sans-serif",
                    cssClass: 'text-xs font-normal fill-gray-500'
                },
                formatter: function (value) {
                    return '$' + value;
                }
            }
        },
        series: [
            {
                name: "Sales",
                data: [0, 40, 80, 20, 140, 100, 40, 140, 100, 60, 40, 180],
                color: "#1A56DB",
            },
        ],
        chart: {
            sparkline: {
                enabled: false
            },
            height: "100%",
            width: "100%",
            type: "area",
            fontFamily: "Inter, sans-serif",
            dropShadow: {
                enabled: false,
            },
            toolbar: {
                show: false,
            },
        },
        tooltip: {
            enabled: true,
            x: {
                show: false,
            },
        },
        fill: {
            type: "gradient",
            gradient: {
                opacityFrom: 0.55,
                opacityTo: 0,
                shade: "#1C64F2",
                gradientToColors: ["#1C64F2"],
            },
        },
        dataLabels: {
            enabled: false,
        },
        stroke: {
            width: 6,
        },
        legend: {
            show: false
        },
        grid: {
            show: false,
        },
    }

    if (document.getElementById("labels-chart") && typeof ApexCharts !== 'undefined') {
        const chart = new ApexCharts(document.getElementById("labels-chart"), options);
        chart.render();
    }

</script>

@endsection
@push('scripts')
<script>
    // set page title to appName
    document.title = `${appName} | Dashboard`;
</script>
@endpush
