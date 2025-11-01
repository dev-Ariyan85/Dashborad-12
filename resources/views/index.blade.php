<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Dashboard</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
</head>
<body class="bg-gray-100 flex" x-data="{ page: 'dashboard' }">

  <!-- Sidebar -->
  <aside class="w-64 bg-white h-screen shadow-md">
    <div class="p-6">
      <h1 class="text-2xl font-bold text-gray-800">AdminPanel</h1>
    </div>
    <nav class="mt-6">
      <button @click="page='dashboard'" class="w-full text-left block py-2.5 px-6 rounded hover:bg-gray-200 transition">Dashboard</button>
      <button @click="page='users'" class="w-full text-left block py-2.5 px-6 rounded hover:bg-gray-200 transition">Users</button>
      <button @click="page='orders'" class="w-full text-left block py-2.5 px-6 rounded hover:bg-gray-200 transition">Orders</button>
      <button @click="page='products'" class="w-full text-left block py-2.5 px-6 rounded hover:bg-gray-200 transition">Products</button>
      <button @click="page='settings'" class="w-full text-left block py-2.5 px-6 rounded hover:bg-gray-200 transition">Settings</button>
    </nav>
  </aside>

  <!-- Main Content -->
  <div class="flex-1 flex flex-col">

    <!-- Top Navbar -->
    <header class="bg-white shadow p-4 flex justify-between items-center">
      <h2 class="text-xl font-semibold text-gray-700 capitalize" x-text="page"></h2>
      <div class="flex items-center space-x-4">
        <input type="text" placeholder="Search..." class="px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
        <button class="bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600 transition">Logout</button>
      </div>
    </header>

    <!-- Content -->
    <main class="p-6 flex-1 overflow-y-auto">

      <!-- Dashboard Page -->
      <div x-show="page==='dashboard'">
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mb-6">
          <div class="bg-white shadow rounded-lg p-5">
            <p class="text-gray-500">Users</p>
            <p class="text-2xl font-bold text-gray-700">1,234</p>
          </div>
          <div class="bg-white shadow rounded-lg p-5">
            <p class="text-gray-500">Orders</p>
            <p class="text-2xl font-bold text-gray-700">567</p>
          </div>
          <div class="bg-white shadow rounded-lg p-5">
            <p class="text-gray-500">Revenue</p>
            <p class="text-2xl font-bold text-gray-700">$12,345</p>
          </div>
          <div class="bg-white shadow rounded-lg p-5">
            <p class="text-gray-500">Products</p>
            <p class="text-2xl font-bold text-gray-700">89</p>
          </div>
        </div>
      </div>
      
      <!-- Orders Page -->
      <div x-show="page==='orders'">
        <div class="bg-white shadow rounded-lg p-5">
          <h3 class="text-lg font-semibold text-gray-700 mb-4">Orders List</h3>
          <p>Orders page content goes here.</p>
        </div>
      </div>

      <!-- Products Page -->
      <div x-show="page==='products'">
        <div class="bg-white shadow rounded-lg p-5">
          <h3 class="text-lg font-semibold text-gray-700 mb-4">Products List</h3>
          <p>Products page content goes here.</p>
        </div>
      </div>

      <!-- Settings Page -->
      <div x-show="page==='settings'">
        <div class="bg-white shadow rounded-lg p-5">
          <h3 class="text-lg font-semibold text-gray-700 mb-4">Settings</h3>
          <p>Settings page content goes here.</p>
        </div>
      </div>

    </main>
  </div>

</body>
</html>
