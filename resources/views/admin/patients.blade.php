<x-layouts.admin>
<!-- Main Content -->
<div class="ml-72 flex-1 flex flex-col p-6">

    <!-- Header -->
    <header class="bg-gray-800 p-4 flex justify-between items-center rounded-lg shadow-md">
        <h2 class="text-xl font-semibold">Patients</h2>
        <button class="bg-blue-500 hover:bg-blue-600 transition px-4 py-2 rounded flex items-center gap-2">
            <i class="fas fa-user-plus"></i> Add Patient
        </button>
    </header>

    <!-- Search Bar -->
    <div class="mt-6 flex items-center bg-gray-800 p-3 rounded-lg">
        <i class="fas fa-search text-gray-400"></i>
        <input type="text" placeholder="Search patients..." class="bg-transparent ml-2 outline-none text-white w-full">
    </div>

    <!-- Patients List -->
    <div class="mt-6 bg-gray-800 p-6 rounded-lg shadow-md">
        <h3 class="text-xl font-semibold mb-3">Patients List</h3>
        <table class="w-full text-left border-collapse">
            <thead>
                <tr class="bg-gray-700">
                    <th class="p-3 border">Patient</th>
                    <th class="p-3 border">Age</th>
                    <th class="p-3 border">Contact</th>
                    <th class="p-3 border">Status</th>
                    <th class="p-3 border">Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr class="border hover:bg-gray-700 transition">
                    <td class="p-3 flex items-center gap-2"><img src="https://via.placeholder.com/40" class="rounded-full" alt=""> Ali Khan</td>
                    <td class="p-3">35</td>
                    <td class="p-3">+92 300 1234567</td>
                    <td class="p-3"><span class="bg-green-500 px-3 py-1 rounded">Active</span></td>
                    <td class="p-3">
                        <button class="bg-yellow-500 hover:bg-yellow-600 px-3 py-1 rounded"><i class="fas fa-edit"></i></button>
                        <button class="bg-red-500 hover:bg-red-600 px-3 py-1 rounded"><i class="fas fa-trash"></i></button>
                    </td>
                </tr>
                <tr class="border hover:bg-gray-700 transition">
                    <td class="p-3 flex items-center gap-2"><img src="https://via.placeholder.com/40" class="rounded-full" alt=""> Fatima Noor</td>
                    <td class="p-3">28</td>
                    <td class="p-3">+92 312 6543210</td>
                    <td class="p-3"><span class="bg-yellow-500 px-3 py-1 rounded">Pending</span></td>
                    <td class="p-3">
                        <button class="bg-yellow-500 hover:bg-yellow-600 px-3 py-1 rounded"><i class="fas fa-edit"></i></button>
                        <button class="bg-red-500 hover:bg-red-600 px-3 py-1 rounded"><i class="fas fa-trash"></i></button>
                    </td>
                </tr>
                <tr class="border hover:bg-gray-700 transition">
                    <td class="p-3 flex items-center gap-2"><img src="https://via.placeholder.com/40" class="rounded-full" alt=""> Ahmed Raza</td>
                    <td class="p-3">42</td>
                    <td class="p-3">+92 321 9876543</td>
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
