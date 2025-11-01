@extends('layouts.admin')

@section('content')
    <!-- Stats Cards -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-6">

        <!-- Today's Sales -->
        <div class="bg-white rounded-xl shadow-md p-6 border-l-4 border-green-500">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-gray-600 text-sm mb-1">Today's Sales</p>
                    <h3 class="text-3xl font-bold text-gray-800">$4,850</h3>
                    <p class="text-green-500 text-sm mt-2">
                        <i class="fas fa-arrow-up"></i> 12.5% vs yesterday
                    </p>
                </div>
                <div class="bg-green-100 w-14 h-14 rounded-full flex items-center justify-center">
                    <i class="fas fa-dollar-sign text-2xl text-green-500"></i>
                </div>
            </div>
        </div>

        <!-- Total Orders -->
        <div class="bg-white rounded-xl shadow-md p-6 border-l-4 border-blue-500">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-gray-600 text-sm mb-1">Total Orders</p>
                    <h3 class="text-3xl font-bold text-gray-800">127</h3>
                    <p class="text-blue-500 text-sm mt-2">
                        <i class="fas fa-arrow-up"></i> 8.3% vs yesterday
                    </p>
                </div>
                <div class="bg-blue-100 w-14 h-14 rounded-full flex items-center justify-center">
                    <i class="fas fa-shopping-bag text-2xl text-blue-500"></i>
                </div>
            </div>
        </div>

        <!-- Products Sold -->
        <div class="bg-white rounded-xl shadow-md p-6 border-l-4 border-purple-500">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-gray-600 text-sm mb-1">Products Sold</p>
                    <h3 class="text-3xl font-bold text-gray-800">342</h3>
                    <p class="text-purple-500 text-sm mt-2">
                        <i class="fas fa-arrow-up"></i> 15.2% vs yesterday
                    </p>
                </div>
                <div class="bg-purple-100 w-14 h-14 rounded-full flex items-center justify-center">
                    <i class="fas fa-box text-2xl text-purple-500"></i>
                </div>
            </div>
        </div>

        <!-- Low Stock Alert -->
        <div class="bg-white rounded-xl shadow-md p-6 border-l-4 border-orange-500">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-gray-600 text-sm mb-1">Low Stock Items</p>
                    <h3 class="text-3xl font-bold text-gray-800">18</h3>
                    <p class="text-orange-500 text-sm mt-2">
                        <i class="fas fa-exclamation-triangle"></i> Needs attention
                    </p>
                </div>
                <div class="bg-orange-100 w-14 h-14 rounded-full flex items-center justify-center">
                    <i class="fas fa-warehouse text-2xl text-orange-500"></i>
                </div>
            </div>
        </div>
    </div>

    <!-- Charts & Tables Row -->
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 mb-6">

        <!-- Sales Chart -->
        <div class="lg:col-span-2 bg-white rounded-xl shadow-md p-6">
            <div class="flex items-center justify-between mb-4">
                <h3 class="text-lg font-bold text-gray-800">Sales Overview</h3>
                <select
                    class="border border-gray-300 rounded-lg px-3 py-1 text-sm focus:outline-none focus:ring-2 focus:ring-blue-500">
                    <option>Last 7 Days</option>
                    <option>Last 30 Days</option>
                    <option>Last 3 Months</option>
                </select>
            </div>

            <!-- Simple Bar Chart Representation -->
            <div class="flex items-end justify-between h-64 space-x-2">
                <div class="flex-1 flex flex-col items-center">
                    <div class="w-full bg-blue-500 rounded-t" style="height: 45%"></div>
                    <p class="text-xs text-gray-600 mt-2">Mon</p>
                </div>
                <div class="flex-1 flex flex-col items-center">
                    <div class="w-full bg-blue-500 rounded-t" style="height: 65%"></div>
                    <p class="text-xs text-gray-600 mt-2">Tue</p>
                </div>
                <div class="flex-1 flex flex-col items-center">
                    <div class="w-full bg-blue-500 rounded-t" style="height: 55%"></div>
                    <p class="text-xs text-gray-600 mt-2">Wed</p>
                </div>
                <div class="flex-1 flex flex-col items-center">
                    <div class="w-full bg-blue-500 rounded-t" style="height: 80%"></div>
                    <p class="text-xs text-gray-600 mt-2">Thu</p>
                </div>
                <div class="flex-1 flex flex-col items-center">
                    <div class="w-full bg-blue-500 rounded-t" style="height: 70%"></div>
                    <p class="text-xs text-gray-600 mt-2">Fri</p>
                </div>
                <div class="flex-1 flex flex-col items-center">
                    <div class="w-full bg-blue-500 rounded-t" style="height: 90%"></div>
                    <p class="text-xs text-gray-600 mt-2">Sat</p>
                </div>
                <div class="flex-1 flex flex-col items-center">
                    <div class="w-full bg-blue-500 rounded-t" style="height: 60%"></div>
                    <p class="text-xs text-gray-600 mt-2">Sun</p>
                </div>
            </div>
        </div>

        <!-- Top Products -->
        <div class="bg-white rounded-xl shadow-md p-6">
            <h3 class="text-lg font-bold text-gray-800 mb-4">Top Products</h3>
            <div class="space-y-4">
                <div class="flex items-center justify-between">
                    <div class="flex items-center space-x-3">
                        <div class="w-10 h-10 bg-blue-100 rounded-lg flex items-center justify-center">
                            <i class="fas fa-laptop text-blue-500"></i>
                        </div>
                        <div>
                            <p class="font-semibold text-sm">Laptop Pro 15"</p>
                            <p class="text-xs text-gray-500">45 sold</p>
                        </div>
                    </div>
                    <span class="text-green-500 font-bold">$1,350</span>
                </div>

                <div class="flex items-center justify-between">
                    <div class="flex items-center space-x-3">
                        <div class="w-10 h-10 bg-purple-100 rounded-lg flex items-center justify-center">
                            <i class="fas fa-headphones text-purple-500"></i>
                        </div>
                        <div>
                            <p class="font-semibold text-sm">Wireless Headphones</p>
                            <p class="text-xs text-gray-500">38 sold</p>
                        </div>
                    </div>
                    <span class="text-green-500 font-bold">$760</span>
                </div>

                <div class="flex items-center justify-between">
                    <div class="flex items-center space-x-3">
                        <div class="w-10 h-10 bg-green-100 rounded-lg flex items-center justify-center">
                            <i class="fas fa-mobile-alt text-green-500"></i>
                        </div>
                        <div>
                            <p class="font-semibold text-sm">Smartphone X</p>
                            <p class="text-xs text-gray-500">32 sold</p>
                        </div>
                    </div>
                    <span class="text-green-500 font-bold">$960</span>
                </div>

                <div class="flex items-center justify-between">
                    <div class="flex items-center space-x-3">
                        <div class="w-10 h-10 bg-orange-100 rounded-lg flex items-center justify-center">
                            <i class="fas fa-keyboard text-orange-500"></i>
                        </div>
                        <div>
                            <p class="font-semibold text-sm">Mechanical Keyboard</p>
                            <p class="text-xs text-gray-500">28 sold</p>
                        </div>
                    </div>
                    <span class="text-green-500 font-bold">$420</span>
                </div>

                <div class="flex items-center justify-between">
                    <div class="flex items-center space-x-3">
                        <div class="w-10 h-10 bg-red-100 rounded-lg flex items-center justify-center">
                            <i class="fas fa-mouse text-red-500"></i>
                        </div>
                        <div>
                            <p class="font-semibold text-sm">Gaming Mouse</p>
                            <p class="text-xs text-gray-500">25 sold</p>
                        </div>
                    </div>
                    <span class="text-green-500 font-bold">$375</span>
                </div>
            </div>
        </div>
    </div>

    <!-- Recent Transactions -->
    <div class="bg-white rounded-xl shadow-md p-6">
        <div class="flex items-center justify-between mb-4">
            <h3 class="text-lg font-bold text-gray-800">Recent Transactions</h3>
            <a href="#" class="text-blue-500 hover:text-blue-700 text-sm font-semibold">View All</a>
        </div>

        <div class="overflow-x-auto">
            <table class="w-full">
                <thead class="bg-gray-50">
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Order ID</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Customer</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Items</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Amount</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Payment</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Status</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Time</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    <tr class="hover:bg-gray-50">
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">#ORD-1245
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-600">John Smith</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-600">3 items</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-semibold text-gray-900">$245.00
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-600">
                            <i class="fas fa-credit-card text-blue-500"></i> Card
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span
                                class="px-2 py-1 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                Completed
                            </span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-600">2 min ago</td>
                    </tr>
                    <tr class="hover:bg-gray-50">
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">#ORD-1244
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-600">Sarah Johnson</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-600">5 items</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-semibold text-gray-900">$189.50
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-600">
                            <i class="fas fa-money-bill-wave text-green-500"></i> Cash
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span
                                class="px-2 py-1 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                Completed
                            </span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-600">5 min ago</td>
                    </tr>
                    <tr class="hover:bg-gray-50">
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">#ORD-1243
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-600">Mike Wilson</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-600">2 items</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-semibold text-gray-900">$456.00
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-600">
                            <i class="fas fa-credit-card text-blue-500"></i> Card
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span
                                class="px-2 py-1 inline-flex text-xs leading-5 font-semibold rounded-full bg-yellow-100 text-yellow-800">
                                Pending
                            </span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-600">8 min ago</td>
                    </tr>
                    <tr class="hover:bg-gray-50">
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">#ORD-1242
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-600">Emily Brown</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-600">1 item</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-semibold text-gray-900">$89.99
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-600">
                            <i class="fas fa-wallet text-purple-500"></i> Digital
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span
                                class="px-2 py-1 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                Completed
                            </span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-600">12 min ago</td>
                    </tr>
                    <tr class="hover:bg-gray-50">
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">#ORD-1241
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-600">David Lee</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-600">4 items</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-semibold text-gray-900">$325.75
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-600">
                            <i class="fas fa-money-bill-wave text-green-500"></i> Cash
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span
                                class="px-2 py-1 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                Completed
                            </span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-600">15 min ago</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
