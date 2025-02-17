<x-layouts.doctor>

    <!-- Main Content -->
    <div class="flex-1 flex flex-col overflow-hidden">
      <!-- Header -->
      <header class="bg-white shadow p-4">
        <div class="flex justify-between items-center">
          <h1 class="text-xl font-bold">Settings</h1>
          <div class="flex items-center">
            <span class="mr-4">🔔</span>
            <img src="https://via.placeholder.com/40" alt="Profile" class="rounded-full">
          </div>
        </div>
      </header>

      <!-- Body -->
      <main class="flex-1 p-6 overflow-y-auto">
        <!-- Profile Settings -->
        <div class="bg-white p-6 rounded-lg shadow mb-6">
          <h2 class="text-lg font-semibold mb-4">Profile Settings</h2>
          <form>
            <div class="mb-4">
              <label class="block text-sm font-medium mb-1">Full Name</label>
              <input
                type="text"
                value="Dr. John Doe"
                class="w-full p-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
              />
            </div>
            <div class="mb-4">
              <label class="block text-sm font-medium mb-1">Email</label>
              <input
                type="email"
                value="john.doe@example.com"
                class="w-full p-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
              />
            </div>
            <div class="mb-4">
              <label class="block text-sm font-medium mb-1">Phone Number</label>
              <input
                type="tel"
                value="+1234567890"
                class="w-full p-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
              />
            </div>
            <button class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">
              Update Profile
            </button>
          </form>
        </div>

        <!-- Change Password -->
        <div class="bg-white p-6 rounded-lg shadow mb-6">
          <h2 class="text-lg font-semibold mb-4">Change Password</h2>
          <form>
            <div class="mb-4">
              <label class="block text-sm font-medium mb-1">Current Password</label>
              <input
                type="password"
                class="w-full p-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
              />
            </div>
            <div class="mb-4">
              <label class="block text-sm font-medium mb-1">New Password</label>
              <input
                type="password"
                class="w-full p-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
              />
            </div>
            <div class="mb-4">
              <label class="block text-sm font-medium mb-1">Confirm New Password</label>
              <input
                type="password"
                class="w-full p-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
              />
            </div>
            <button class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">
              Change Password
            </button>
          </form>
        </div>

        <!-- Notification Preferences -->
        <div class="bg-white p-6 rounded-lg shadow">
          <h2 class="text-lg font-semibold mb-4">Notification Preferences</h2>
          <form>
            <div class="mb-4">
              <label class="flex items-center">
                <input type="checkbox" class="mr-2" checked />
                <span>Email Notifications</span>
              </label>
            </div>
            <div class="mb-4">
              <label class="flex items-center">
                <input type="checkbox" class="mr-2" checked />
                <span>SMS Notifications</span>
              </label>
            </div>
            <div class="mb-4">
              <label class="flex items-center">
                <input type="checkbox" class="mr-2" />
                <span>Push Notifications</span>
              </label>
            </div>
            <button class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">
              Save Preferences
            </button>
          </form>
        </div>
      </main>
    </x-layouts.doctor>
