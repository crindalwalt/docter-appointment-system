<x-layouts.doctor>

    <!-- Main Content -->
    <div class="flex-1 flex flex-col overflow-hidden">
      <!-- Header -->
      <header class="bg-white shadow p-4">
        <div class="flex justify-between items-center">
          <h1 class="text-xl font-bold">Patients</h1>
          <div class="flex items-center">
            <span class="mr-4">🔔</span>
            <img src="https://via.placeholder.com/40" alt="Profile" class="rounded-full">
          </div>
        </div>
      </header>

      <!-- Body -->
      <main class="flex-1 p-6 overflow-y-auto">
        <!-- Search and Add Patient Section -->
        <div class="mb-6 flex justify-between items-center">
          <div class="flex space-x-4">
            <input
              type="text"
              placeholder="Search patients..."
              class="p-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
            />
            <button class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">
              Search
            </button>
          </div>
          <button class="bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600">
            + Add New Patient
          </button>
        </div>

        <!-- Patients Table -->
        <div class="bg-white p-6 rounded-lg shadow">
          <h2 class="text-lg font-semibold mb-4">All Patients</h2>
          <table class="w-full">
            <thead>
              <tr class="border-b">
                <th class="text-left p-2">Patient Name</th>
                <th class="text-left p-2">Email</th>
                <th class="text-left p-2">Age</th>
                <th class="text-left p-2">Gender</th>
                <th class="text-left p-2">Status</th>
                <th class="text-left p-2">Phone number</th>

                <th class="text-left p-2">Action</th>
              </tr>
            </thead>
            <tbody>

               @if($patients->isNotEmpty())
               @foreach($patients as $items)



              

              <tr class="border-b hover:bg-gray-50">
                <td class="p-2">{{ $items->name }}</td>
                <td class="p-2">{{ $items->email }}</td>
                <td class="p-2">{{ $items->age }}</td>
                <td class="p-2">{{ $items->gender }}</td>
                <td class="p-2"><span class="bg-green-100 text-green-800 px-2 py-1 rounded">Active</span></td>
                <td><span>{{ $items->phone_number }}</span></td>
                <td class="p-2">
                  <button class="bg-blue-500 text-white px-3 py-1 rounded hover:bg-blue-600">View</button>
                  <button class="bg-yellow-500 text-white px-3 py-1 rounded hover:bg-yellow-600 ml-2">Edit</button>
                </td>
              </tr>
              @endforeach
              @else
              No data found
              @endif



              {{-- <tr class="border-b hover:bg-gray-50">
                <td class="p-2">John Smith</td>
                <td class="p-2">35</td>
                <td class="p-2">Male</td>
                <td class="p-2">2025-02-10</td>
                <td class="p-2"><span class="bg-green-100 text-green-800 px-2 py-1 rounded">Active</span></td>
                <td><span>Phone</span></td>
                <td class="p-2">
                  <button class="bg-blue-500 text-white px-3 py-1 rounded hover:bg-blue-600">View</button>
                  <button class="bg-yellow-500 text-white px-3 py-1 rounded hover:bg-yellow-600 ml-2">Edit</button>
                </td>
              </tr>
              <tr class="border-b hover:bg-gray-50">
                <td class="p-2">Alice Johnson</td>
                <td class="p-2">42</td>
                <td class="p-2">Female</td>
                <td class="p-2">2025-02-05</td>
                <td class="p-2"><span class="bg-green-100 text-green-800 px-2 py-1 rounded">Active</span></td>
                <td><span>Phone</span></td>
                <td class="p-2">
                  <button class="bg-blue-500 text-white px-3 py-1 rounded hover:bg-blue-600">View</button>
                  <button class="bg-yellow-500 text-white px-3 py-1 rounded hover:bg-yellow-600 ml-2">Edit</button>
                </td>
              </tr> --}}
            </tbody>
          </table>
        </div>
      </main>

</x-layouts.doctor>
