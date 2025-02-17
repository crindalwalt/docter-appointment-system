<x-layouts.admin>
<!-- Main Content -->
<div class="ml-72 flex-1 flex flex-col p-6">

    <!-- Header -->
    <header class="bg-gray-800 p-4 flex justify-between items-center rounded-lg shadow-md">
        <h2 class="text-xl font-semibold">Settings</h2>
    </header>

    <!-- Profile Settings -->
    <div class="mt-6 bg-gray-800 p-6 rounded-lg shadow-md">
        <h3 class="text-xl font-semibold mb-4">Profile Settings</h3>
        <div class="flex items-center gap-4">
            <img src="https://via.placeholder.com/80" class="rounded-full" alt="">
            <div>
                <p class="text-lg">Admin Name</p>
                <p class="text-gray-400">admin@example.com</p>
            </div>
            <button class="bg-blue-500 hover:bg-blue-600 px-4 py-2 rounded"><i class="fas fa-edit"></i> Edit</button>
        </div>
    </div>

    <!-- Change Password -->
    <div class="mt-6 bg-gray-800 p-6 rounded-lg shadow-md">
        <h3 class="text-xl font-semibold mb-4">Change Password</h3>
        <form>
            <label class="block text-gray-400">Current Password</label>
            <input type="password" class="w-full bg-gray-700 p-2 rounded mt-2 focus:outline-none focus:ring-2 focus:ring-blue-500">

            <label class="block text-gray-400 mt-4">New Password</label>
            <input type="password" class="w-full bg-gray-700 p-2 rounded mt-2 focus:outline-none focus:ring-2 focus:ring-blue-500">

            <label class="block text-gray-400 mt-4">Confirm New Password</label>
            <input type="password" class="w-full bg-gray-700 p-2 rounded mt-2 focus:outline-none focus:ring-2 focus:ring-blue-500">

            <button class="mt-4 bg-green-500 hover:bg-green-600 px-4 py-2 rounded w-full">Update Password</button>
        </form>
    </div>

    <!-- Notifications Settings -->
    <div class="mt-6 bg-gray-800 p-6 rounded-lg shadow-md">
        <h3 class="text-xl font-semibold mb-4">Notification Settings</h3>
        <div class="flex justify-between items-center p-3 bg-gray-700 rounded">
            <span>Email Notifications</span>
            <input type="checkbox" class="w-6 h-6">
        </div>
        <div class="flex justify-between items-center p-3 bg-gray-700 rounded mt-2">
            <span>Push Notifications</span>
            <input type="checkbox" class="w-6 h-6">
        </div>
    </div>

    <!-- Theme Settings -->
    <div class="mt-6 bg-gray-800 p-6 rounded-lg shadow-md">
        <h3 class="text-xl font-semibold mb-4">Theme Settings</h3>
        <div class="flex items-center gap-4">
            <button class="bg-gray-700 hover:bg-gray-600 p-3 rounded">Light Mode</button>
            <button class="bg-gray-700 hover:bg-gray-600 p-3 rounded">Dark Mode</button>
            <button class="bg-gray-700 hover:bg-gray-600 p-3 rounded">System Default</button>
        </div>
    </div>

</x-layouts.admin>
