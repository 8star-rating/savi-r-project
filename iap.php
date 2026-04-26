<?php 
$pageTitle = "View IAP Record"; 
$activeMenu = "odp"; 
include 'includes/header.php'; 
?>
<?php include 'includes/sidebar.php'; ?>  

    <div class="flex flex-col flex-1 overflow-hidden">
        
<?php include 'includes/topbar.php'; ?>

        <main class="main-content">
            
            <div class="panel">
                <div class="doc-header">
                    <div>
                        <div class="doc-id">IAP-044</div>
                        <h1 class="doc-title">Campus Fire Drill Operations</h1>
                    </div>
                    <div class="badge-pending">
                        Pending Approval
                    </div>
                </div>

                <h3 class="text-lg font-bold text-[#7f1d1d] mb-4">1. Incident Details & Operational Period</h3>
                <div class="data-grid">
                    <div class="data-block">
                        <span class="data-label">Operational Period Start</span>
                        <span class="data-value">May 3, 2026 - 08:00 AM</span>
                    </div>
                    <div class="data-block">
                        <span class="data-label">Operational Period End</span>
                        <span class="data-value">May 3, 2026 - 12:00 PM</span>
                    </div>
                    <div class="data-block">
                        <span class="data-label">Prepared By (Officer)</span>
                        <span class="data-value">Admin67</span>
                    </div>
                    <div class="data-block">
                        <span class="data-label">Date Submitted</span>
                        <span class="data-value">April 24, 2026</span>
                    </div>
                </div>

                <h3 class="text-lg font-bold text-[#7f1d1d] mt-8 mb-4">2. Incident Objectives (ICS 202)</h3>
                <div class="data-grid">
                    <div class="data-block full-width">
                        <span class="data-label">Overall Strategic Objectives</span>
                        <span class="data-value">1. Ensure safe and orderly evacuation of all students and staff from Main Building.
2. Establish a clear medical triage zone at the open field.
3. Coordinate with BFP for perimeter security.</span>
                    </div>
                    <div class="data-block full-width">
                        <span class="data-label">Tactical Strategies / Execution Plan</span>
                        <span class="data-value">Unit Alpha will clear floors 1-3. Unit Bravo will standby at the field for mock medical triage. Communications desk will relay all updates via radio channel 2.</span>
                    </div>
                    <div class="data-block full-width">
                        <span class="data-label">Weather & Safety Hazards</span>
                        <span class="data-value text-[#b91c1c] bg-[#fef2f2] border-[#fca5a5]">High heat index expected at 10:00 AM. Ensure hydration stations are deployed near the triage zone to prevent heat exhaustion.</span>
                    </div>
                </div>

                <h3 class="text-lg font-bold text-[#7f1d1d] mt-8 mb-4">3. Resource & Tactical Assignments</h3>
                <div class="data-grid">
                    <div class="data-block">
                        <span class="data-label">Participating Units</span>
                        <span class="data-value">Unit Alpha (Search & Rescue)<br>Unit Bravo (Medical/Triage)<br>External Partner (BFP/911)</span>
                    </div>
                    <div class="data-block">
                        <div class="mb-4">
                            <span class="data-label">Incident Commander</span>
                            <span class="data-value block mt-1">Director Reyes</span>
                        </div>
                        <div>
                            <span class="data-label">Operations Section Chief</span>
                            <span class="data-value block mt-1">M. Santos</span>
                        </div>
                    </div>
                </div>

                <div class="action-bar">
                    <button class="btn-secondary" onclick="window.print()">Print Document</button>
                    <button class="btn-secondary" onclick="window.location.href='iap-form.php'">Edit Draft</button>
                    
                    <button class="btn-secondary admin-only border-red-500 text-red-700 hover:bg-red-50">Reject Revision</button>
                    <button class="btn-primary btn-approve admin-only">Approve IAP</button>
                </div>

            </div>

        </main>
    </div>

<?php include 'includes/footer.php'; ?>