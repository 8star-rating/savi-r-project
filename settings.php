<?php 
$pageTitle = "System Settings"; 
$activeMenu = ""; // Leave blank so it doesn't highlight a sidebar item
include 'includes/header.php'; 
?>
<?php include 'includes/sidebar.php'; ?>

    <div class="flex flex-col flex-1 overflow-hidden">
        
        <?php include 'includes/topbar.php'; ?>

        <main class="main-content">
            
            <div class="mb-8">
                <h1 class="text-2xl font-bold text-[#450a0a]">System Settings</h1>
                <p class="text-sm text-gray-600 mt-1">Manage your account credentials and personal information.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                
                <div class="col-span-1">
                    <div class="panel flex flex-col gap-6 sticky top-6">
                        <div class="text-center mt-2">
                            <div id="profile-initials" class="w-20 h-20 bg-[#dc2626] rounded-full mx-auto mb-3 flex items-center justify-center text-white text-2xl font-bold shadow-inner"></div>
                            <h2 id="profile-name" class="text-lg font-bold text-[#450a0a]"></h2>
                            <p id="profile-role" class="text-[#dc2626] font-semibold text-xs uppercase tracking-wider mt-1"></p>
                        </div>
                        
                        <hr class="border-[#fef2f2] my-1">
                        
                        <nav class="flex flex-col gap-2">
                            <button id="btn-password" onclick="switchTab('password')" class="text-left px-4 py-3 bg-[#fef2f2] text-[#dc2626] font-bold rounded-xl transition text-sm flex items-center gap-3 border border-[#fecaca]">
                                <svg viewBox="0 0 24 24" stroke-width="2" class="w-4 h-4 stroke-current fill-none"><path stroke-linecap="round" stroke-linejoin="round" d="M16.5 10.5V6.75a4.5 4.5 0 10-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 002.25-2.25v-6.75a2.25 2.25 0 00-2.25-2.25H6.75a2.25 2.25 0 00-2.25 2.25v6.75a2.25 2.25 0 002.25 2.25z"/></svg>
                                Password & Security
                            </button>
                            <button id="btn-profile" onclick="switchTab('profile')" class="text-left px-4 py-3 text-gray-500 hover:bg-gray-50 font-semibold rounded-xl transition text-sm flex items-center gap-3 border border-transparent">
                                <svg viewBox="0 0 24 24" stroke-width="2" class="w-4 h-4 stroke-current fill-none"><path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z"/></svg>
                                Edit Profile
                            </button>
                        </nav>
                        
                        <div class="mt-4 pt-4 border-t border-[#fef2f2]">
                            <button onclick="window.location.href='index.php'" class="w-full py-3 text-[#dc2626] font-bold bg-white border border-[#fca5a5] rounded-xl hover:bg-[#fef2f2] transition uppercase tracking-widest text-xs">
                                Log Out
                            </button>
                        </div>
                    </div>
                </div>

                <div class="col-span-1 md:col-span-2">
                    
                    <div id="section-password" class="panel block">
                        <div class="panel-header mb-6">
                            <div class="panel-title">
                                <svg viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M16.5 10.5V6.75a4.5 4.5 0 10-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 002.25-2.25v-6.75a2.25 2.25 0 00-2.25-2.25H6.75a2.25 2.25 0 00-2.25 2.25v6.75a2.25 2.25 0 002.25 2.25z"/></svg>
                                Password Management
                            </div>
                        </div>
                        <p class="text-sm text-gray-600 mb-6">Update your account credentials. For security, please use a strong password.</p>

                        <form action="#" method="POST">
                            <div class="form-group mb-4">
                                <label class="form-label">Current Password</label>
                                <input type="password" name="current_password" placeholder="Enter current password" required class="form-input">
                            </div>
                            <div class="form-row">
                                <div class="form-group">
                                    <label class="form-label">New Password</label>
                                    <input type="password" name="new_password" placeholder="Create new password" required class="form-input">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Confirm New Password</label>
                                    <input type="password" name="confirm_password" placeholder="Confirm new password" required class="form-input">
                                </div>
                            </div>
                            <div class="action-bar">
                                <button type="submit" class="btn-primary">Update Password</button>
                            </div>
                        </form>
                    </div>

                    <div id="section-profile" class="panel hidden">
                        <div class="panel-header mb-6">
                            <div class="panel-title">
                                <svg viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z"/></svg>
                                Profile Information
                            </div>
                        </div>
                        <p class="text-sm text-gray-600 mb-6">Update your personal details and contact information.</p>

                        <form action="#" method="POST">
                            <div class="form-row">
                                <div class="form-group">
                                    <label class="form-label">First Name</label>
                                    <input type="text" id="input-first-name" name="first_name" required class="form-input">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Last Name</label>
                                    <input type="text" id="input-last-name" name="last_name" required class="form-input">
                                </div>
                            </div>
                            <div class="form-group mb-4">
                                <label class="form-label">Official Email Address</label>
                                <input type="email" id="input-email" name="email" required class="form-input">
                            </div>
                            <div class="form-group">
                                <label class="form-label text-gray-400">System Access Role (Read Only)</label>
                                <input type="text" id="input-role" disabled class="form-input bg-gray-100 text-gray-500 cursor-not-allowed border-gray-200">
                            </div>
                            <div class="action-bar">
                                <button type="submit" class="btn-primary">Save Changes</button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </main>
    </div>

    <script>
        // Tab Switching Logic
        function switchTab(tabName) {
            const secPassword = document.getElementById('section-password');
            const secProfile = document.getElementById('section-profile');
            const btnPassword = document.getElementById('btn-password');
            const btnProfile = document.getElementById('btn-profile');

            const inactiveClass = "text-left px-4 py-3 text-gray-500 hover:bg-gray-50 font-semibold rounded-xl transition text-sm flex items-center gap-3 border border-transparent";
            const activeClass = "text-left px-4 py-3 bg-[#fef2f2] text-[#dc2626] font-bold rounded-xl transition text-sm flex items-center gap-3 border border-[#fecaca]";
            
            btnPassword.className = inactiveClass;
            btnProfile.className = inactiveClass;
            secPassword.style.display = 'none';
            secProfile.style.display = 'none';

            if (tabName === 'password') {
                secPassword.style.display = 'block';
                btnPassword.className = activeClass;
            } else if (tabName === 'profile') {
                secProfile.style.display = 'block';
                btnProfile.className = activeClass;
            }
        }

        // Smart Profile Data Logic
        document.addEventListener('DOMContentLoaded', () => {
            const role = localStorage.getItem('savi_role') || 'user'; 
            
            // Populate Profile Data Based on Role
            const profileInitials = document.getElementById('profile-initials');
            const profileName = document.getElementById('profile-name');
            const profileRole = document.getElementById('profile-role');
            
            const inputFirstName = document.getElementById('input-first-name');
            const inputLastName = document.getElementById('input-last-name');
            const inputEmail = document.getElementById('input-email');
            const inputRole = document.getElementById('input-role');

            if (role === 'admin') {
                // Set to Admin67
                profileInitials.textContent = 'A';
                profileName.textContent = 'Arjen Bonggo';
                profileRole.textContent = 'System Admin';
                
                inputFirstName.value = 'Arjen';
                inputLastName.value = 'Bonggo';
                inputEmail.value = 'agbonggo@udrrmo.edu.ph';
                inputRole.value = 'Full Access (Admin)';
            } else {
                // Set to Juan Dela Cruz
                profileInitials.textContent = 'J';
                profileName.textContent = 'Juan Dela Cruz';
                profileRole.textContent = 'Staff';
                
                inputFirstName.value = 'Juan';
                inputLastName.value = 'Dela Cruz';
                inputEmail.value = 'juan@udrrmo.edu.ph';
                inputRole.value = 'Minimal (View & Store)';
            }
        });
    </script>

<?php include 'includes/footer.php'; ?>