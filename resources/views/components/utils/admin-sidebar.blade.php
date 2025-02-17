    <!-- Sidebar -->
    <aside class="w-72 h-screen p-6 glass fixed">
        <h2 class="text-2xl font-bold flex items-center gap-2">
            <i class="fas fa-user-shield text-blue-500"></i> Admin Panel
        </h2>
        <nav class="mt-8">
            <ul>
                <li class="mb-4"><a href="{{ route('admin.dashboard') }}"
                        class="flex items-center gap-3 p-3 rounded hover:bg-blue-600 transition"><i
                            class="fas fa-tachometer-alt"></i> Dashboard</a></li>
                <li class="mb-4"><a href="{{ route('admin.doctors') }}"
                        class="flex items-center gap-3 p-3 rounded hover:bg-blue-600 transition"><i
                            class="fas fa-user-md"></i> Doctors</a></li>
                <li class="mb-4"><a href="{{ route('admin.patients') }}"
                        class="flex items-center gap-3 p-3 rounded hover:bg-blue-600 transition"><i
                            class="fas fa-users"></i> Patients</a></li>
                <li class="mb-4"><a href="{{ route('admin.appointements') }}"
                        class="flex items-center gap-3 p-3 rounded hover:bg-blue-600 transition"><i
                            class="fas fa-calendar-check"></i> Appointments</a></li>
                <li class="mb-4"><a href="{{ route('admin.departments') }}"
                        class="flex items-center gap-3 p-3 rounded hover:bg-blue-600 transition"><i
                            class="fas fa-cog"></i> Departments</a></li>
                <li class="mb-4"><a href="{{ route('admin.settings') }}"
                        class="flex items-center gap-3 p-3 rounded hover:bg-blue-600 transition"><i
                            class="fas fa-cog"></i> Settings</a></li>
            </ul>
        </nav>
    </aside>
