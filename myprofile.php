<?php 
$pageTitle = "My Profile"; 
$activeMenu = "profile"; 
include 'includes/header.php'; 
?>
<?php include 'includes/sidebar.php'; ?> 

    <div class="flex flex-col flex-1 overflow-hidden">

<?php include 'includes/topbar.php'; ?>

        <main class="main-content">
            
            <div class="mb-8">
                <h1 class="text-2xl font-bold text-[#450a0a]">My Account Details</h1>
                <p class="text-sm text-gray-600 mt-1">Review your contact information, system access level, and valid operational certifications.</p>
            </div>

            <section class="panel bg-[#fef2f2] border-[#fca5a5]">
                <div class="panel-header">
                    <div class="panel-title">
                        <svg viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z"/></svg>
                        Personal Information
                    </div>
                    <button class="btn-primary">Edit Profile</button>
                </div>
                
                <div class="profile-header">
                    <div class="profile-avatar active-user-initial">A</div>
                    <div>
                        <h2 class="text-2xl font-bold text-[#450a0a] active-user-name">Admin67</h2>
                        <p class="text-sm font-semibold text-[#dc2626] active-user-role">System Administrator</p>
                    </div>
                </div>

                <div class="profile-grid">
                    <div class="profile-field">
                        <span class="field-label">Staff ID</span>
                        <span class="field-value active-user-id">STF-001</span>
                    </div>
                    <div class="profile-field">
                        <span class="field-label">Email Address</span>
                        <span class="field-value active-user-email">admin67@udrrmo.edu.ph</span>
                    </div>
                    <div class="profile-field">
                        <span class="field-label">Contact Number</span>
                        <span class="field-value">0917-123-4567</span>
                    </div>
                    <div class="profile-field">
                        <span class="field-label">System Access Level</span>
                        <span class="field-value active-user-access">Full Access (Admin)</span>
                    </div>
                    <div class="profile-field">
                        <span class="field-label">Account Status</span>
                        <span class="field-value text-green-700">Active</span>
                    </div>
                    <div class="profile-field">
                        <span class="field-label">Date Joined</span>
                        <span class="field-value">January 15, 2024</span>
                    </div>
                </div>
            </section>

            <section class="panel">
                <div class="panel-header">
                    <div class="panel-title">
                        <svg viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                        My Certifications & Training
                    </div>
                    <button class="btn-secondary">+ Add Certification</button>
                </div>
                <div class="data-table-wrapper">
                    <table class="data-table">
                        <thead>
                            <tr>
                                <th>Certification Name</th>
                                <th>Date Obtained</th>
                                <th>Expiry Date</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="font-bold">Basic Life Support (BLS)</td>
                                <td>2024-05-10</td>
                                <td>2026-05-10</td>
                                <td><span class="badge badge-active">Valid</span></td>
                                <td><span class="action-link">View Certificate</span></td>
                            </tr>
                            <tr>
                                <td class="font-bold">Emergency Medical Tech (EMT-B)</td>
                                <td>2023-11-20</td>
                                <td>2026-11-20</td>
                                <td><span class="badge badge-warning">Expires Soon</span></td>
                                <td><span class="action-link">View Certificate</span></td>
                            </tr>
                            <tr>
                                <td class="font-bold">Incident Command System (ICS 100)</td>
                                <td>2024-01-15</td>
                                <td>No Expiry</td>
                                <td><span class="badge badge-active">Valid</span></td>
                                <td><span class="action-link">View Certificate</span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </section>

        </main>
    </div>

<?php include 'includes/footer.php'; ?>