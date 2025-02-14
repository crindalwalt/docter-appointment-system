<x-layouts.admin-layout>
    <!-- Main Content -->
    <main class="main-content">
        <div class="dashboard-grid">
            <div class="stat-card">
                <h3>Total Appointments</h3>
                <div class="value">124</div>
            </div>
            <div class="stat-card">
                <h3>Today's Appointments</h3>
                <div class="value">28</div>
            </div>
            <div class="stat-card">
                <h3>New Patients</h3>
                <div class="value">12</div>
            </div>
            <div class="stat-card">
                <h3>Total Doctors</h3>
                <div class="value">8</div>
            </div>
        </div>

        <div class="appointments-table">
            <div style="display: flex; justify-content: space-between; align-items: center;">
                <h2>Recent Appointments</h2>
                <button class="btn btn-primary">New Appointment</button>
            </div>
            <table>
                <thead>
                    <tr>
                        <th>Patient Name</th>
                        <th>Date</th>
                        <th>Time</th>
                        <th>Doctor</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>John Doe</td>
                        <td>Feb 14, 2025</td>
                        <td>10:00 AM</td>
                        <td>Dr. Smith</td>
                        <td><span class="status confirmed">Confirmed</span></td>
                        <td>
                            <i class="fas fa-edit" style="margin-right: 10px; cursor: pointer;"></i>
                            <i class="fas fa-trash" style="cursor: pointer;"></i>
                        </td>
                    </tr>
                    <tr>
                        <td>Jane Smith</td>
                        <td>Feb 14, 2025</td>
                        <td>11:30 AM</td>
                        <td>Dr. Johnson</td>
                        <td><span class="status pending">Pending</span></td>
                        <td>
                            <i class="fas fa-edit" style="margin-right: 10px; cursor: pointer;"></i>
                            <i class="fas fa-trash" style="cursor: pointer;"></i>
                        </td>
                    </tr>
                    <tr>
                        <td>Robert Wilson</td>
                        <td>Feb 14, 2025</td>
                        <td>2:00 PM</td>
                        <td>Dr. Brown</td>
                        <td><span class="status confirmed">Confirmed</span></td>
                        <td>
                            <i class="fas fa-edit" style="margin-right: 10px; cursor: pointer;"></i>
                            <i class="fas fa-trash" style="cursor: pointer;"></i>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </main>

</x-layouts.admin-layout>
