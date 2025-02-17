
<x-layouts.doctor>
    <!-- Main Content -->
    <div class="flex-1 flex flex-col overflow-hidden">
      <!-- Header -->
      <header class="bg-white shadow p-4">
        <div class="flex justify-between items-center">
          <h1 class="text-xl font-bold">Welcome, Dr. John Doe</h1>
          <div class="flex items-center">
            <span class="mr-4">🔔</span>
            <img src="https://via.placeholder.com/40" alt="Profile" class="rounded-full">
          </div>
        </div>
      </header>

      <!-- Body -->
      <main class="flex-1 p-6 overflow-y-auto">
        <!-- Statistics Cards -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-6">
          <div class="bg-white p-6 rounded-lg shadow">
            <h3 class="text-lg font-semibold">Total Appointments</h3>
            <p class="text-2xl font-bold">120</p>
            <p class="text-sm text-gray-500">+5% from last month</p>
          </div>
          <div class="bg-white p-6 rounded-lg shadow">
            <h3 class="text-lg font-semibold">Patients Treated</h3>
            <p class="text-2xl font-bold">95</p>
            <p class="text-sm text-gray-500">+10% from last month</p>
          </div>
          <div class="bg-white p-6 rounded-lg shadow">
            <h3 class="text-lg font-semibold">Pending Follow-ups</h3>
            <p class="text-2xl font-bold">8</p>
            <p class="text-sm text-gray-500">2 urgent</p>
          </div>
        </div>

        <!-- Upcoming Appointments Table -->
        <div class="bg-white p-6 rounded-lg shadow">
          <h2 class="text-lg font-semibold mb-4">Upcoming Appointments</h2>
          <table class="w-full">
            <thead>
              <tr class="border-b">
                <th class="text-left p-2">Patient Name</th>
                <th class="text-left p-2">Time</th>
                <th class="text-left p-2">Status</th>
                <th class="text-left p-2">Action</th>
              </tr>
            </thead>
            <tbody>
              <tr class="border-b hover:bg-gray-50">
                <td class="p-2">Jane Doe</td>
                <td class="p-2">10:00 AM</td>
                <td class="p-2"><span class="bg-green-100 text-green-800 px-2 py-1 rounded">Confirmed</span></td>
                <td class="p-2">
                  <button class="bg-blue-500 text-white px-3 py-1 rounded hover:bg-blue-600">View</button>
                </td>
              </tr>
              <tr class="border-b hover:bg-gray-50">
                <td class="p-2">John Smith</td>
                <td class="p-2">11:30 AM</td>
                <td class="p-2"><span class="bg-yellow-100 text-yellow-800 px-2 py-1 rounded">Pending</span></td>
                <td class="p-2">
                  <button class="bg-blue-500 text-white px-3 py-1 rounded hover:bg-blue-600">View</button>
                </td>
              </tr>
              <tr class="border-b hover:bg-gray-50">
                <td class="p-2">Alice Johnson</td>
                <td class="p-2">1:00 PM</td>
                <td class="p-2"><span class="bg-red-100 text-red-800 px-2 py-1 rounded">Cancelled</span></td>
                <td class="p-2">
                  <button class="bg-blue-500 text-white px-3 py-1 rounded hover:bg-blue-600">View</button>
                </td>
              </tr>
            </tbody>
          </table>
        </div>

        <!-- Quick Actions -->
        <div class="bg-white p-6 rounded-lg shadow mt-6">
          <h2 class="text-lg font-semibold mb-4">Quick Actions</h2>
          <div class="flex space-x-4">
            <button class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Add New Appointment</button>
            <button class="bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600">Write Prescription</button>
            <button class="bg-purple-500 text-white px-4 py-2 rounded hover:bg-purple-600">View Patient History</button>
          </div>
        </div>
      </main>
</x-layouts.doctor>
