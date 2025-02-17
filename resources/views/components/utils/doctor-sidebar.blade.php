<div class="bg-blue-800 text-white w-64 p-4">
    <h2 class="text-2xl font-bold mb-6">Doctor Panel</h2>
    <ul>
      <li class="mb-4">
        <a href="{{ route('doctor.dashboard') }}" class="hover:text-blue-200 flex items-center">
          <span class="mr-2">🏠</span> Dashboard
        </a>
      </li>
      <li class="mb-4">
        <a href="{{ route('doctor.appointement') }}" class="hover:text-blue-200 flex items-center">
          <span class="mr-2">📅</span> Appointments
        </a>
      </li>
      <li class="mb-4">
        <a href="{{ route('doctor.patients') }}" class="hover:text-blue-200 flex items-center">
          <span class="mr-2">👤</span> Patients
        </a>
      </li>
      <li class="mb-4">
        <a href="{{ route('doctor.settings') }}" class="hover:text-blue-200 flex items-center">
          <span class="mr-2">⚙️</span> Settings
        </a>
      </li>
      <li class="mb-4">
        <a href="#" class="hover:text-blue-200 flex items-center">
          <span class="mr-2">🚪</span> Logout
        </a>
      </li>
    </ul>
  </div>
