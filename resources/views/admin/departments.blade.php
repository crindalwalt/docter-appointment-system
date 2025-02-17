<x-layouts.admin>

    <!-- Main Content -->
    <div class="ml-72 flex-1 flex flex-col p-6">

        <!-- Header -->
        <header class="bg-gray-800 p-4 flex justify-between items-center rounded-lg shadow-md">
            <h2 class="text-xl font-semibold">Departments</h2>
        </header>

        <!-- Departments List -->
        <div class="mt-6 bg-gray-800 p-6 rounded-lg shadow-md">
            <h3 class="text-xl font-semibold mb-4">Existing Departments</h3>
            <table class="w-full text-left">
                <thead>
                    <tr class="bg-gray-700">
                        <th class="p-3">#</th>
                        <th class="p-3">Department Name</th>
                        <th class="p-3">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="bg-gray-600">
                        <td class="p-3">1</td>
                        <td class="p-3">Cardiology</td>
                        <td class="p-3">
                            <button class="text-red-500 hover:text-red-700"><i class="fas fa-trash"></i></button>
                        </td>
                    </tr>
                    <tr class="bg-gray-700">
                        <td class="p-3">2</td>
                        <td class="p-3">Neurology</td>
                        <td class="p-3">
                            <button class="text-red-500 hover:text-red-700"><i class="fas fa-trash"></i></button>
                        </td>
                    </tr>
                    <tr class="bg-gray-600">
                        <td class="p-3">3</td>
                        <td class="p-3">Orthopedics</td>
                        <td class="p-3">
                            <button class="text-red-500 hover:text-red-700"><i class="fas fa-trash"></i></button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!-- Add New Department -->
        <div class="mt-6 bg-gray-800 p-6 rounded-lg shadow-md">
            <h3 class="text-xl font-semibold mb-4">Add New Department</h3>
            <form>
                <label class="block text-gray-400">Department Name</label>
                <input type="text" class="w-full bg-gray-700 p-2 rounded mt-2 focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Enter department name">

                <button class="mt-4 bg-green-500 hover:bg-green-600 px-4 py-2 rounded w-full">Add Department</button>
            </form>
        </div>
</x-layouts.admin>
