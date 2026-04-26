<?php 
$pageTitle = "Staff Directory"; 
$activeMenu = "directory"; 
include 'includes/header.php'; 
?>
<?php include 'includes/sidebar.php'; ?>

    <div class="flex flex-col flex-1 overflow-hidden">

<?php include 'includes/topbar.php'; ?>

        <main class="main-content">
            <div class="mb-8">
                <h1 class="text-2xl font-bold text-[#450a0a]">UDRRMO Staff Directory</h1>
                <p class="text-sm text-gray-600 mt-1">Search, view, and manage all active and inactive personnel records.</p>
            </div>

            <section class="panel">
                <div class="panel-header">
                    <div class="panel-title">
                        <svg viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M15 19.128a9.38 9.38 0 002.625.372 9.337 9.337 0 004.121-.952 4.125 4.125 0 00-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 018.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0111.964-3.07M12 6.375a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zm8.25 2.25a2.625 2.625 0 11-5.25 0 2.625 2.625 0 015.25 0z"/></svg>
                        All Staff Records
                    </div>
                    <button class="btn-primary admin-only" onclick="window.location.href='personnel-form.php'">+ Register New Staff</button>
                </div>

                <div class="flex gap-3 mb-4">
                    <input type="text" placeholder="Search by name or email..." class="flex-1 p-2 text-sm border border-gray-300 rounded-md focus:outline-none focus:border-[#dc2626]">
                    <select class="p-2 text-sm border border-gray-300 rounded-md focus:outline-none focus:border-[#dc2626]">
                        <option value="">All Roles</option>
                        <option value="admin">Administrators</option>
                        <option value="staff">Standard Staff</option>
                    </select>
                </div>

                <div class="data-table-wrapper">
                    <table class="data-table">
                        <thead>
                            <tr>
                                <th>Staff ID</th>
                                <th>Personnel Name</th>
                                <th>Contact Information</th>
                                <th>System Role</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>STF-001</td>
                                <td class="font-bold">Arjen Greer Bonggo</td>
                                <td>
                                    agbonggo@udrrmo.edu.ph
                                    <span class="sub-text">0917-123-4567</span>
                                </td>
                                <td><span class="badge badge-admin">Administrator</span></td>
                                <td><span class="badge badge-active">Active</span></td>
                                <td>
                                    <span class="action-link">View Profile</span>
                                    <span class="action-link admin-only">Manage Access</span>
                                </td>
                            </tr>
                            <tr>
                                <td>STF-002</td>
                                <td class="font-bold">Kim Ian Lipat</td>
                                <td>
                                    kilipat@udrrmo.edu.ph
                                    <span class="sub-text">0918-987-6543</span>
                                </td>
                                <td><span class="badge badge-admin">Administrator</span></td>
                                <td><span class="badge badge-active">Active</span></td>
                                <td>
                                    <span class="action-link">View Profile</span>
                                    <span class="action-link admin-only">Manage Access</span>
                                </td>
                            </tr>
                            <tr>
                                <td>STF-045</td>
                                <td class="font-bold">Juan Dela Cruz</td>
                                <td>
                                    juan@udrrmo.edu.ph
                                    <span class="sub-text">0922-333-4444</span>
                                </td>
                                <td><span class="badge badge-staff">Staff / Responder</span></td>
                                <td><span class="badge badge-active">Active</span></td>
                                <td>
                                    <span class="action-link">View Profile</span>
                                    <span class="action-link admin-only">Manage Access</span>
                                </td>
                            </tr>
                            <tr>
                                <td>STF-032</td>
                                <td class="font-bold">Maria Santos</td>
                                <td>
                                    msantos@udrrmo.edu.ph
                                    <span class="sub-text">0999-111-2222</span>
                                </td>
                                <td><span class="badge badge-staff">Staff / Responder</span></td>
                                <td><span class="badge badge-inactive">Inactive</span></td>
                                <td>
                                    <span class="action-link">View Profile</span>
                                    <span class="action-link admin-only">Manage Access</span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </section>

        </main>
    </div>

<?php include 'includes/footer.php'; ?>