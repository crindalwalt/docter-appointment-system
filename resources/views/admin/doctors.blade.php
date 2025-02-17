<x-layouts.admin>

        <!-- Main Content -->
        <div class="ml-72 flex-1 flex flex-col p-6">

            <!-- Header -->
            <header class="bg-gray-800 p-4 flex justify-between items-center rounded-lg shadow-md">
                <h2 class="text-xl font-semibold">Doctors</h2>
                <button class="bg-blue-500 hover:bg-blue-600 transition px-4 py-2 rounded flex items-center gap-2">
                    <i class="fas fa-plus"></i> Add Doctor
                </button>
            </header>

            <!-- Search Bar -->
            <div class="mt-6 flex items-center bg-gray-800 p-3 rounded-lg">
                <i class="fas fa-search text-gray-400"></i>
                <input type="text" placeholder="Search doctors..." class="bg-transparent ml-2 outline-none text-white w-full">
            </div>

            <!-- Doctors List -->
            <div class="mt-6 bg-gray-800 p-6 rounded-lg shadow-md">
                <h3 class="text-xl font-semibold mb-3">Doctors List</h3>
                <table class="w-full text-left border-collapse">
                    <thead>
                        <tr class="bg-gray-700">
                            <th class="p-3 border">Doctor</th>
                            <th class="p-3 border">Specialization</th>
                            <th class="p-3 border">Experience</th>
                            <th class="p-3 border">Status</th>
                            <th class="p-3 border">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="border hover:bg-gray-700 transition">
                            <td class="p-3 flex items-center gap-2"><img src="https://via.placeholder.com/40" class="rounded-full" alt=""> Dr. Ahmed</td>
                            <td class="p-3">Cardiologist</td>
                            <td class="p-3">10 Years</td>
                            <td class="p-3"><span class="bg-green-500 px-3 py-1 rounded">Active</span></td>
                            <td class="p-3">
                                <button class="bg-yellow-500 hover:bg-yellow-600 px-3 py-1 rounded"><i class="fas fa-edit"></i></button>
                                <button class="bg-red-500 hover:bg-red-600 px-3 py-1 rounded"><i class="fas fa-trash"></i></button>
                            </td>
                        </tr>
                        <tr class="border hover:bg-gray-700 transition">
                            <td class="p-3 flex items-center gap-2"><img src="https://via.placeholder.com/40" class="rounded-full" alt=""> Dr. Sarah</td>
                            <td class="p-3">Neurologist</td>
                            <td class="p-3">8 Years</td>
                            <td class="p-3"><span class="bg-yellow-500 px-3 py-1 rounded">Pending</span></td>
                            <td class="p-3">
                                <button class="bg-yellow-500 hover:bg-yellow-600 px-3 py-1 rounded"><i class="fas fa-edit"></i></button>
                                <button class="bg-red-500 hover:bg-red-600 px-3 py-1 rounded"><i class="fas fa-trash"></i></button>
                            </td>
                        </tr>
                        <tr class="border hover:bg-gray-700 transition">
                            <td class="p-3 flex items-center gap-2"><img src="https://via.placeholder.com/40" class="rounded-full" alt=""> Dr. Ali</td>
                            <td class="p-3">Dermatologist</td>
                            <td class="p-3">5 Years</td>
                            <td class="p-3"><span class="bg-red-500 px-3 py-1 rounded">Inactive</span></td>
                            <td class="p-3">
                                <button class="bg-yellow-500 hover:bg-yellow-600 px-3 py-1 rounded"><i class="fas fa-edit"></i></button>
                                <button class="bg-red-500 hover:bg-red-600 px-3 py-1 rounded"><i class="fas fa-trash"></i></button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
</x-layouts.admin>
