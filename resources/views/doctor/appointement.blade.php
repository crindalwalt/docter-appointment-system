<x-layouts.doctor>
    <!-- Main Content -->
    <div class="flex-1 flex flex-col overflow-hidden">
        <!-- Header -->
        <header class="bg-white shadow p-4">
            <div class="flex justify-between items-center">
                <h1 class="text-xl font-bold">Appointments</h1>
                <div class="flex items-center">
                    <span class="mr-4">🔔</span>
                    <img src="https://via.placeholder.com/40" alt="Profile" class="rounded-full">
                </div>
            </div>
        </header>

        <!-- Body -->
        <main class="flex-1 p-6 overflow-y-auto">
            <!-- Filter Section -->
            <div class="mb-6">
                <h2 class="text-lg font-semibold mb-4">Filter Appointments</h2>
                <div class="flex space-x-4">
                    <button class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">All</button>
                    <button class="bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600">Confirmed</button>
                    <button class="bg-yellow-500 text-white px-4 py-2 rounded hover:bg-yellow-600">Pending</button>
                    <button class="bg-red-500 text-white px-4 py-2 rounded hover:bg-red-600">Cancelled</button>
                </div>
            </div>

            <!-- Appointments Table -->
            <div class="bg-white p-6 rounded-lg shadow">
                <h2 class="text-lg font-semibold mb-4">All Appointments</h2>
                <table class="w-full">
                    <thead>
                        <tr class="border-b">
                            <th class="text-left p-2">Patient Name</th>
                            <th class="text-left p-2">Date</th>
                            <th class="text-left p-2">Time</th>
                            <th class="text-left p-2">Status</th>
                            <th class="text-left p-2">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="border-b hover:bg-gray-50">
                            <td class="p-2">Jane Doe</td>
                            <td class="p-2">2025-02-18</td>
                            <td class="p-2">10:00 AM</td>
                            <td class="p-2"><span
                                    class="bg-green-100 text-green-800 px-2 py-1 rounded">Confirmed</span></td>
                            <td class="p-2">
                                <button class="bg-blue-500 text-white px-3 py-1 rounded hover:bg-blue-600">View</button>
                                <button
                                    class="bg-yellow-500 text-white px-3 py-1 rounded hover:bg-yellow-600 ml-2">Reschedule</button>
                            </td>
                        </tr>
                        <tr class="border-b hover:bg-gray-50">
                            <td class="p-2">John Smith</td>
                            <td class="p-2">2025-02-18</td>
                            <td class="p-2">11:30 AM</td>
                            <td class="p-2"><span
                                    class="bg-yellow-100 text-yellow-800 px-2 py-1 rounded">Pending</span></td>
                            <td class="p-2">
                                <button class="bg-blue-500 text-white px-3 py-1 rounded hover:bg-blue-600">View</button>
                                <button
                                    class="bg-yellow-500 text-white px-3 py-1 rounded hover:bg-yellow-600 ml-2">Reschedule</button>
                            </td>
                        </tr>
                        <tr class="border-b hover:bg-gray-50">
                            <td class="p-2">Alice Johnson</td>
                            <td class="p-2">2025-02-19</td>
                            <td class="p-2">1:00 PM</td>
                            <td class="p-2"><span class="bg-red-100 text-red-800 px-2 py-1 rounded">Cancelled</span>
                            </td>
                            <td class="p-2">
                                <button class="bg-blue-500 text-white px-3 py-1 rounded hover:bg-blue-600">View</button>
                                <button
                                    class="bg-yellow-500 text-white px-3 py-1 rounded hover:bg-yellow-600 ml-2">Reschedule</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </main>
</x-layouts.doctor>
