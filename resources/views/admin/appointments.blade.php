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
                        <th class="p-3 border">User_id</th>
                        <th class="p-3 border">Doctor_id</th>
                        <th class="p-3 border">Date Time</th>
                        <th class="p-3 border">New_patient</th>
                        <th class="p-3 border">Status</th>
                        <th class="p-3 border">Description</th>
                        <th class="p-3 border">Actions</th>
                    </tr>
                </thead>
                <tbody>

                    @if($product -> isNotEmpty())
                    @foreach ($product as $item)

                    <tr class="border hover:bg-gray-700 transition">
                        <td class="p-3">{{$item->user->name}}</td>
                        <td class="p-3">{{$item->doctor->name}}</td>
                        <td class="p-3">{{$item->booking_time}}</td>
                        <td class="p-3">{{$item->new_patient}}</td>

                        <td class="p-3">
                            
                            @if($item->status == 'pending')
                            <span class="bg-yellow-500 px-3 py-1 rounded">{{$item->status}}</span>
    
                            @elseif($item->status == 'active')
                            <span class="bg-green-500 px-3 py-1 rounded">{{$item->status}}</span>
                            @elseif($item->status == 'cancelled')
                            <span class="bg-red-500 px-3 py-1 rounded">{{$item->status}}</span>
                            @endif
                        
                        </td>

                        
                        <td class="p-3">{{$item->description}}</td>
                        <td class="p-3">
                            <button class="bg-yellow-500 hover:bg-yellow-600 px-3 py-1 rounded"><i class="fas fa-edit">confirm</i></button>
                            <button class="bg-red-500 hover:bg-red-600 px-3 py-1 rounded"><i class="fas fa-trash">deleted</i></button>
                        </td>
                    </tr>
                    @endforeach
                

                    @endif
                </tbody>
            </table>
        </div>

</x-layouts.admin>