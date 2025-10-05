
@extends('public.layouts.app')
@section('content')

    <div class="h-5/6 max-lg:h-[83vh] flex flex-col items-center">
        <!--breadcrumbs-->
        <div class="px-12 max-sm:px-6 py-5 w-full">
            <nav class="flex" aria-label="Breadcrumb">
                <ol class="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse">
                    <li class="inline-flex items-center">
                        <p class="inline-flex items-center text-sm font-medium text-gray-700">
                            <svg class="w-3 h-3 me-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="m19.707 9.293-2-2-7-7a1 1 0 0 0-1.414 0l-7 7-2 2a1 1 0 0 0 1.414 1.414L2 10.414V18a2 2 0 0 0 2 2h3a1 1 0 0 0 1-1v-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v4a1 1 0 0 0 1 1h3a2 2 0 0 0 2-2v-7.586l.293.293a1 1 0 0 0 1.414-1.414Z" />
                            </svg>
                            Main Panel
                        </p>
                    </li>
                    <li aria-current="page">
                        <div class="flex items-center">
                            <svg class="rtl:rotate-180 w-3 h-3 text-gray-400 mx-1" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 9 4-4-4-4" />
                            </svg>
                            <p class="ms-1 text-sm font-medium text-gray-700 md:ms-2">
                                Fruit Management
                            </p>
                        </div>
                    </li>
                </ol>
            </nav>
        </div>
        <div class="grid place-items-center h-5/6 w-full">
            <!--Main Panel (for max-lg)-->
            <div
                class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 gap-4 w-fit gap-6 h-fit py-6 gap-6 text-white px-12">
                <div onclick="window.location='{{ route('fruit-management-billing') }}'"
                    class="w-[200px] max-lg:w-[150px] h-[200px] max-lg:h-[150px] bg-basic rounded-lg flex flex-col gap-3 justify-center items-center hover:scale-90 transition-all cursor-pointer uppercase lg:text-xl">
                    <img src="{{ asset('assets/Images/main-panel/btn-icons/billing.svg') }}"
                        class="w-[105px] h-[105px] max-xl:w-[70px] max-xl:h-[70px]" alt="">
                    <p class="text-center">Billing</p>
                </div>
                <div onclick="window.location='{{ route('fruit-management-create-basket') }}'"
                    class="w-[200px] max-lg:w-[150px] h-[200px] max-lg:h-[150px] bg-basic rounded-lg flex flex-col gap-3 justify-center items-center hover:scale-90 transition-all cursor-pointer uppercase lg:text-xl">
                    <img src="{{ asset('assets/Images/main-panel/btn-icons/product-management.png') }}"
                        class="w-[105px] h-[105px] max-lg:w-[70px] max-lg:h-[70px]" alt="">
                    <p class="text-center">Create Fruit</p>
                </div>
                <div onclick="window.location='{{ route('fruit-management-product') }}'"
                    class="w-[200px] max-lg:w-[150px] h-[200px] max-lg:h-[150px] bg-basic rounded-lg flex flex-col gap-3 justify-center items-center hover:scale-90 transition-all cursor-pointer uppercase lg:text-xl">
                    <img src="{{ asset('assets/Images/main-panel/btn-icons/product-management.png') }}"
                        class="w-[105px] h-[105px] max-lg:w-[70px] max-lg:h-[70px]" alt="">
                    <p class="text-center">Create Basket</p>
                </div>
            </div>
        </div>
    </div>

@endsection
@push('scripts')
<script>
    // set page title to appName
    document.title = `${appName} | Fruit Management`;
</script>
@endpush

