@extends('public.layouts.app')
@section('title', 'Application | Main Panel')
@section('content')

<!--center-->
    <div class="grid place-items-center h-5/6 w-full">
        <!--Main Panel (for max-lg)-->
        <div
            class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 gap-4 w-fit gap-6 h-fit py-6 gap-6 text-white px-12">
            <div onclick="window.location='{{ route('dashboard') }}'"
                class="w-[200px] max-lg:w-[150px] h-[200px] max-lg:h-[150px] bg-basic rounded-lg flex flex-col gap-3 justify-center items-center hover:scale-90 transition-all cursor-pointer uppercase lg:text-xl">
                <img src="assets/images/main-panel/btn-icons/dash.svg"
                    class="w-[105px] h-[105px] max-xl:w-[70px] max-xl:h-[70px]" alt="">
                <p class="text-center">Dashboard</p>
            </div>
            <div onclick="locatePanelItem('fruit-management');"
                class="w-[200px] max-lg:w-[150px] h-[200px] max-lg:h-[150px] bg-basic rounded-lg flex flex-col gap-3 justify-center items-center hover:scale-90 transition-all cursor-pointer uppercase lg:text-xl">
                <img src="assets/images/main-panel/btn-icons/fruit.png"
                    class="w-[105px] h-[105px] max-xl:w-[70px] max-xl:h-[70px]" alt="">
                <p class="text-center">Fruit Management</p>
            </div>
            <div onclick="locatePanelItem('pooja-bhanda');"
                class="w-[200px] max-lg:w-[150px] h-[200px] max-lg:h-[150px] bg-basic rounded-lg flex flex-col gap-3 justify-center items-center hover:scale-90 transition-all cursor-pointer uppercase lg:text-xl">
                <img src="assets/images/main-panel/btn-icons/product-management.png"
                    class="w-[105px] h-[105px] max-xl:w-[70px] max-xl:h-[70px]" alt="">
                <p class="text-center">Pooja Bhanda Management</p>
            </div>
            <div onclick="locatePanelItem('branch-mgmt');"
                class="w-[200px] max-lg:w-[150px] h-[200px] max-lg:h-[150px] bg-basic rounded-lg flex flex-col gap-3 justify-center items-center hover:scale-90 transition-all cursor-pointer uppercase lg:text-xl">
                <img src="assets/images/main-panel/btn-icons/warehouse-mgmt.png"
                    class="w-[105px] h-[105px] max-xl:w-[70px] max-xl:h-[70px]" alt="">
                <p class="text-center">Branch Management</p>
            </div>
            <div onclick="locatePanelItem('expenses');"
                class="w-[200px] max-lg:w-[150px] h-[200px] max-lg:h-[150px] bg-basic rounded-lg flex flex-col gap-3 justify-center items-center hover:scale-90 transition-all cursor-pointer uppercase lg:text-xl">
                <img src="assets/images/main-panel/btn-icons/expenses.svg"
                    class="w-[105px] h-[105px] max-xl:w-[70px] max-xl:h-[70px]" alt="">
                <p class="text-center">Expenses</p>
            </div>
            <div onclick="locatePanelItem('fruit-management/billing');"
                class="w-[200px] max-lg:w-[150px] h-[200px] max-lg:h-[150px] bg-basic rounded-lg flex flex-col gap-3 justify-center items-center hover:scale-90 transition-all cursor-pointer uppercase lg:text-xl">
                <img src="../assets/images//main-panel/btn-icons/billing.svg"
                    class="w-[105px] h-[105px] max-xl:w-[70px] max-xl:h-[70px]" alt="">
                <p class="text-center">Billing</p>
            </div>
            <div onclick="locatePanelItem('sales');"
                class="w-[200px] max-lg:w-[150px] h-[200px] max-lg:h-[150px] bg-basic rounded-lg flex flex-col gap-3 justify-center items-center hover:scale-90 transition-all cursor-pointer uppercase lg:text-xl">
                <img src="../assets/images//main-panel/btn-icons/sales.svg"
                    class="w-[105px] h-[105px] max-xl:w-[70px] max-xl:h-[70px]" alt="">
                <p class="text-center">Sales</p>
            </div>
            <div onclick="locatePanelItem('supplier-mgmt');"
                class="w-[200px] max-lg:w-[150px] h-[200px] max-lg:h-[150px] bg-basic rounded-lg flex flex-col gap-3 justify-center items-center hover:scale-90 transition-all cursor-pointer uppercase lg:text-xl">
                <img src="../assets/images//main-panel/btn-icons/supp-mgmt.png"
                    class="w-[105px] h-[105px] max-xl:w-[70px] max-xl:h-[70px]" alt="">
                <p class="text-center">Suppliers</p>
            </div>
            <div onclick="locatePanelItem('production');"
                class="w-[200px] max-lg:w-[150px] h-[200px] max-lg:h-[150px] bg-basic rounded-lg flex flex-col gap-3 justify-center items-center hover:scale-90 transition-all cursor-pointer uppercase lg:text-xl">
                <img src="../assets/images//main-panel/btn-icons/production.png"
                    class="w-[105px] h-[105px] max-xl:w-[70px] max-xl:h-[70px]" alt="">
                <p class="text-center">Production</p>
            </div>
            <div onclick="locatePanelItem('stock');"
                class="w-[200px] max-lg:w-[150px] h-[200px] max-lg:h-[150px] bg-basic rounded-lg flex flex-col gap-3 justify-center items-center hover:scale-90 transition-all cursor-pointer uppercase lg:text-xl">
                <img src="../assets/images//main-panel/btn-icons/inventory-management.png"
                    class="w-[105px] h-[105px] max-xl:w-[70px] max-xl:h-[70px]" alt="">
                <p class="text-center">Stock Management</p>
            </div>
            <div onclick="locatePanelItem('users');"
                class="w-[200px] max-lg:w-[150px] h-[200px] max-lg:h-[150px] bg-basic rounded-lg flex flex-col gap-3 justify-center items-center hover:scale-90 transition-all cursor-pointer uppercase lg:text-xl">
                <img src="../assets/images//main-panel/btn-icons/users.svg"
                    class="w-[105px] h-[105px] max-xl:w-[70px] max-xl:h-[70px]" alt="">
                <p class="text-center">Users</p>
            </div>
            <div onclick="locatePanelItem('customers');"
                class="w-[200px] max-lg:w-[150px] h-[200px] max-lg:h-[150px] bg-basic rounded-lg flex flex-col gap-3 justify-center items-center hover:scale-90 transition-all cursor-pointer uppercase lg:text-xl">
                <img src="../assets/images//main-panel/btn-icons/customer.svg"
                    class="w-[105px] h-[105px] max-xl:w-[70px] max-xl:h-[70px]" alt="">
                <p class="text-center">Customers</p>
            </div>
            <div onclick="locatePanelItem('#');"
                class="w-[200px] max-lg:w-[150px] h-[200px] max-lg:h-[150px] bg-basic rounded-lg flex flex-col gap-3 justify-center items-center hover:scale-90 transition-all cursor-pointer uppercase lg:text-xl">
                <img src="../assets/images//main-panel/btn-icons/finance.png"
                    class="w-[105px] h-[105px] max-xl:w-[70px] max-xl:h-[70px]" alt="">
                <p class="text-center">Finance Department </p>
            </div>
            <div onclick="locatePanelItem('#');"
                class="w-[200px] max-lg:w-[150px] h-[200px] max-lg:h-[150px] bg-basic rounded-lg flex flex-col gap-3 justify-center items-center hover:scale-90 transition-all cursor-pointer uppercase lg:text-xl">
                <img src="../assets/images//main-panel/btn-icons/hr.png"
                    class="w-[105px] h-[105px] max-xl:w-[70px] max-xl:h-[70px]" alt="">
                <p class="text-center">HR Department</p>
            </div>
             <div onclick="locatePanelItem('settings');"
                class="w-[200px] max-lg:w-[150px] h-[200px] max-lg:h-[150px] bg-basic rounded-lg flex flex-col gap-3 justify-center items-center hover:scale-90 transition-all cursor-pointer uppercase lg:text-xl">
                <img src="../assets/images//main-panel/btn-icons/settings.png"
                    class="w-[105px] h-[105px] max-xl:w-[70px] max-xl:h-[70px]" alt="">
                <p class="text-center">Settings</p>
            </div>
        </div>
    </div>
@endsection
