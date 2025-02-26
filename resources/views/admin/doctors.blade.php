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
                        <th class="p-3 border">Doctor Name</th>
                        <th class="p-3 border">Email Adress</th>
                        <th class="p-3 border">Phone Number</th>
                        <th class="p-3 border">Status</th>
                        <th class="p-3 border">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @if ($products->isNotEmpty())
                    @foreach ($products as $item)

                    <tr class="border hover:bg-gray-700 transition">
                        <td class="p-3 flex items-center gap-2"><img src="https://via.placeholder.com/40" class="rounded-full" alt=""> {{$item->name}}</td>
                        <td class="p-3">{{$item->email}}</td>
                        <td class="p-3">{{$item->phone}}</td>
                        <td class="p-3">
                            
                        @if($item->status == 'pending')
                        <span class="bg-yellow-500 px-3 py-1 rounded">{{$item->status}}</span>

                        @elseif($item->status == 'active')
                        <span class="bg-green-500 px-3 py-1 rounded">{{$item->status}}</span>
                        @elseif($item->status == 'cancelled')
                        <span class="bg-red-500 px-3 py-1 rounded">{{$item->status}}</span>
                        @endif
                    
                    </td>
                        <td class="p-3">
                            <button class=" bg-yellow-500 hover:bg-yellow-600 px-3 py-1 rounded"><i class="fas fa-edit"></i>confirm</button>
                            <button class="bg-red-500 hover:bg-red-600 px-3 py-1 rounded"><i class="fas fa-trash"></i>deleted</button>
                        </td>
                    </tr>
                    @endforeach
                    @endif

                </tbody>
            </table>
        </div>
</x-layouts.admin>