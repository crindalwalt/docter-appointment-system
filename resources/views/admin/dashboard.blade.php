<x-layouts.admin>
    <!-- Main Content -->
    <div class="ml-72 flex-1 flex flex-col p-6">

        <!-- Header -->
        <header class="bg-gray-800 p-4 flex justify-between items-center rounded-lg shadow-md">
            <h2 class="text-xl font-semibold">Dashboard Overview</h2>
            <div class="relative">
                <button class="flex items-center gap-2 focus:outline-none">
                    <img src="https://picsum.photos/40/40" class="w-10 h-10 rounded-full border-2 border-blue-500"
                        alt="Admin">
                    <span class="text-gray-300">Admin</span>
                </button>
            </div>
        </header>

        <!-- Dashboard Stats -->
        <main class="flex-1 py-6">
            <div class="grid grid-cols-3 gap-6">
                <div
                    class="p-6 rounded-lg shadow-md glass flex items-center justify-between transform hover:scale-105 transition">
                    <div>
                        <h3 class="text-lg font-semibold">Total Doctors</h3>
                        <p class="text-3xl font-bold text-blue-500">15</p>
                    </div>
                    <i class="fas fa-user-md text-4xl text-blue-500"></i>
                </div>
                <div
                    class="p-6 rounded-lg shadow-md glass flex items-center justify-between transform hover:scale-105 transition">
                    <div>
                        <h3 class="text-lg font-semibold">Total Patients</h3>
                        <p class="text-3xl font-bold text-green-500">120</p>
                    </div>
                    <i class="fas fa-users text-4xl text-green-500"></i>
                </div>
                <div
                    class="p-6 rounded-lg shadow-md glass flex items-center justify-between transform hover:scale-105 transition">
                    <div>
                        <h3 class="text-lg font-semibold">Appointments Today</h3>
                        <p class="text-3xl font-bold text-yellow-500">30</p>
                    </div>
                    <i class="fas fa-calendar-check text-4xl text-yellow-500"></i>
                </div>
            </div>

            <!-- Recent Appointments -->
            <div class="bg-gray-800 p-6 rounded-lg shadow-md mt-6">
                <h3 class="text-xl font-semibold mb-3">Recent Appointments</h3>
                <table class="w-full text-left border-collapse">
                    <thead>
                        <tr class="bg-gray-700">
                            <th class="p-3 border">Patient</th>
                            <th class="p-3 border">Doctor</th>
                            <th class="p-3 border">Date</th>
                            <th class="p-3 border">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="border">
                            <td class="p-3 flex items-center gap-2"><img src="https://via.placeholder.com/30"
                                    class="rounded-full" alt=""> Ali Khan</td>
                            <td class="p-3">Dr. Ahmed</td>
                            <td class="p-3">17 Feb 2025</td>
                            <td class="p-3 text-green-500">Completed</td>
                        </tr>
                        <tr class="border">
                            <td class="p-3 flex items-center gap-2"><img src="https://via.placeholder.com/30"
                                    class="rounded-full" alt=""> Fatima Noor</td>
                            <td class="p-3">Dr. Sarah</td>
                            <td class="p-3">18 Feb 2025</td>
                            <td class="p-3 text-yellow-500">Pending</td>
                        </tr>
                    </tbody>
                </table>
            </div>

        </main>
</x-layouts.admin>
