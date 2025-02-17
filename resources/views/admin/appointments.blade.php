<x-layouts.admin>


     <!-- Main Content -->
     <div class="ml-72 flex-1 flex flex-col p-6">

        <!-- Header -->
        <header class="bg-gray-800 p-4 flex justify-between items-center rounded-lg shadow-md">
            <h2 class="text-xl font-semibold">Appointments</h2>
            <button class="bg-blue-500 hover:bg-blue-600 transition px-4 py-2 rounded flex items-center gap-2">
                <i class="fas fa-plus"></i> Add Appointment
            </button>
        </header>

        <!-- Search Bar -->
        <div class="mt-6 flex items-center bg-gray-800 p-3 rounded-lg">
            <i class="fas fa-search text-gray-400"></i>
            <input type="text" placeholder="Search appointments..." class="bg-transparent ml-2 outline-none text-white w-full">
        </div>

        <!-- Appointments List -->
        <div class="mt-6 bg-gray-800 p-6 rounded-lg shadow-md">
            <h3 class="text-xl font-semibold mb-3">Appointments List</h3>
            <table class="w-full text-left border-collapse">
                <thead>
                    <tr class="bg-gray-700">
                        <th class="p-3 border">Patient</th>
                        <th class="p-3 border">Doctor</th>
                        <th class="p-3 border">Date</th>
                        <th class="p-3 border">Time</th>
                        <th class="p-3 border">Status</th>
                        <th class="p-3 border">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="border hover:bg-gray-700 transition">
                        <td class="p-3">Ali Khan</td>
                        <td class="p-3">Dr. Ahmed</td>
                        <td class="p-3">Feb 20, 2025</td>
                        <td class="p-3">10:00 AM</td>
                        <td class="p-3"><span class="bg-green-500 px-3 py-1 rounded">Confirmed</span></td>
                        <td class="p-3">
                            <button class="bg-yellow-500 hover:bg-yellow-600 px-3 py-1 rounded"><i class="fas fa-edit"></i></button>
                            <button class="bg-red-500 hover:bg-red-600 px-3 py-1 rounded"><i class="fas fa-trash"></i></button>
                        </td>
                    </tr>
                    <tr class="border hover:bg-gray-700 transition">
                        <td class="p-3">Fatima Noor</td>
                        <td class="p-3">Dr. Sarah</td>
                        <td class="p-3">Feb 22, 2025</td>
                        <td class="p-3">1:30 PM</td>
                        <td class="p-3"><span class="bg-yellow-500 px-3 py-1 rounded">Pending</span></td>
                        <td class="p-3">
                            <button class="bg-yellow-500 hover:bg-yellow-600 px-3 py-1 rounded"><i class="fas fa-edit"></i></button>
                            <button class="bg-red-500 hover:bg-red-600 px-3 py-1 rounded"><i class="fas fa-trash"></i></button>
                        </td>
                    </tr>
                    <tr class="border hover:bg-gray-700 transition">
                        <td class="p-3">Ahmed Raza</td>
                        <td class="p-3">Dr. Ali</td>
                        <td class="p-3">Feb 25, 2025</td>
                        <td class="p-3">3:00 PM</td>
                        <td class="p-3"><span class="bg-red-500 px-3 py-1 rounded">Cancelled</span></td>
                        <td class="p-3">
                            <button class="bg-yellow-500 hover:bg-yellow-600 px-3 py-1 rounded"><i class="fas fa-edit"></i></button>
                            <button class="bg-red-500 hover:bg-red-600 px-3 py-1 rounded"><i class="fas fa-trash"></i></button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

</x-layouts.admin>
