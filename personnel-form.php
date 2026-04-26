<?php 
$pageTitle = "Register Personnel"; 
$activeMenu = "directory"; 
include 'includes/header.php'; 
?>
<?php include 'includes/sidebar.php'; ?>

    <div class="flex flex-col flex-1 overflow-hidden">

<?php include 'includes/topbar.php'; ?>

        <main class="main-content">
            
            <div class="mb-6 flex justify-between items-end">
                <div>
                    <h1 class="text-2xl font-bold text-[#450a0a]">Register New Personnel</h1>
                    <p class="text-sm text-gray-600 mt-1">Enroll a new staff member, assign their system role, and input their qualifications.</p>
                </div>
                <div class="bg-[#fef2f2] text-[#dc2626] px-4 py-2 rounded-lg border border-[#fca5a5] text-xs font-bold uppercase tracking-wide flex items-center gap-2 admin-only">
                    <svg viewBox="0 0 24 24" width="16" height="16" stroke="currentColor" fill="none" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"/></svg>
                    Restricted Action
                </div>
            </div>

            <div class="user-only bg-red-100 text-red-800 p-6 rounded-xl border border-red-300 mb-8 font-semibold text-center">
                Access Denied: Only System Administrators can register new personnel. 
                <br><br>
                <button onclick="window.location.href='personnel.php'" class="btn-primary">Return to Directory</button>
            </div>

            <form id="personnel-encoding-form" class="admin-only" onsubmit="event.preventDefault(); window.location.href='personnel.php';">
                
                <section class="panel bg-[#fef2f2] border-[#fca5a5]">
                    <div class="panel-header border-[#fca5a5]">
                        <div class="panel-title">
                            <svg viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M15 19.128a9.38 9.38 0 002.625.372 9.337 9.337 0 004.121-.952 4.125 4.125 0 00-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 018.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0111.964-3.07M12 6.375a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zm8.25 2.25a2.625 2.625 0 11-5.25 0 2.625 2.625 0 015.25 0z"/></svg>
                            1. Basic Information
                        </div>
                    </div>
                    
                    <div class="form-row">
                        <div class="form-group" style="flex: 2;">
                            <label class="form-label">Full Name *</label>
                            <input type="text" class="form-input" placeholder="First Name, Middle Initial, Last Name" required>
                        </div>
                        <div class="form-group">
                            <label class="form-label">Auto-Generated Staff ID</label>
                            <input type="text" class="form-input" value="STF-088" disabled style="background-color: #f3f4f6; color: #9ca3af; font-weight: 600;">
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group">
                            <label class="form-label">Official Email Address *</label>
                            <input type="email" class="form-input" placeholder="username@udrrmo.edu.ph" required>
                        </div>
                        <div class="form-group">
                            <label class="form-label">Primary Contact Number *</label>
                            <input type="tel" class="form-input" placeholder="09XX-XXX-XXXX" required>
                        </div>
                    </div>
                </section>

                <section class="panel">
                    <div class="panel-header">
                        <div class="panel-title">
                            <svg viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M16.5 10.5V6.75a4.5 4.5 0 10-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 002.25-2.25v-6.75a2.25 2.25 0 00-2.25-2.25H6.75a2.25 2.25 0 00-2.25 2.25v6.75a2.25 2.25 0 002.25 2.25z"/></svg>
                            2. System Access & Security
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group">
                            <label class="form-label">Assign System Role *</label>
                            <select class="form-select" required>
                                <option value="">Select a role...</option>
                                <option value="staff">Staff / Responder (Limited Access)</option>
                                <option value="admin">System Administrator (Full Access)</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="form-label">Initial Account Status</label>
                            <select class="form-select">
                                <option value="active">Active (Ready for login)</option>
                                <option value="inactive">Inactive (Suspended)</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-row mt-4">
                        <div class="form-group bg-gray-50 p-4 rounded-lg border border-gray-200">
                            <label class="form-label mb-2 text-[#b91c1c]">Temporary Password Setup</label>
                            <div class="flex gap-4">
                                <input type="text" class="form-input" value="Welcome2UDRRMO!" readonly style="flex: 2; background-color: #fff;">
                                <button type="button" class="btn-secondary" style="white-space: nowrap;">Generate New</button>
                            </div>
                            <p class="text-xs text-gray-500 mt-2">The user will be required to change this password upon their first login.</p>
                        </div>
                    </div>
                </section>

                <section class="panel">
                    <div class="panel-header">
                        <div class="panel-title">
                            <svg viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                            3. Initial Certifications (Optional)
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group bg-gray-50 p-4 rounded-lg border border-gray-200">
                            <label class="form-label mb-2 text-gray-800">Current Medical / Operational Credentials</label>
                            <div class="checkbox-group">
                                <label class="checkbox-label"><input type="checkbox"> Basic Life Support (BLS)</label>
                                <label class="checkbox-label"><input type="checkbox"> Standard First Aid (SFA)</label>
                                <label class="checkbox-label"><input type="checkbox"> Emergency Medical Technician (EMT-B)</label>
                                <label class="checkbox-label"><input type="checkbox"> ICS 100 / 200</label>
                                <label class="checkbox-label"><input type="checkbox"> WASAR / CSSR</label>
                            </div>
                            <p class="text-xs text-gray-500 mt-4">Note: The user can upload their specific expiration dates and certificates via their "My Profile" tab later.</p>
                        </div>
                    </div>
                </section>

                <div class="action-bar">
                    <button type="button" class="btn-secondary" onclick="window.location.href='personnel.php'">Cancel</button>
                    <button type="submit" class="btn-primary" id="submit-btn">Register Personnel</button>
                </div>
                
            </form>

        </main>
    </div>

<?php include 'includes/footer.php'; ?>