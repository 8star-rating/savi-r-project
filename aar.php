<?php 
$pageTitle = "View AAR Record"; 
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
                        <div class="doc-id">AAR-021 (Linked to IAP-041)</div>
                        <h1 class="doc-title">Intramurals Medical Standby Evaluation</h1>
                    </div>
                    <div class="badge-pending">
                        Pending Approval
                    </div>
                </div>

                <h3 class="text-lg font-bold text-[#7f1d1d] mb-4">1. Activity Information</h3>
                <div class="data-grid">
                    <div class="data-block">
                        <span class="data-label">Date of Activity</span>
                        <span class="data-value">April 10, 2026</span>
                    </div>
                    <div class="data-block">
                        <span class="data-label">Total Duration</span>
                        <span class="data-value">8.00 Hours</span>
                    </div>
                    <div class="data-block">
                        <span class="data-label">Evaluated By</span>
                        <span class="data-value">Admin67</span>
                    </div>
                    <div class="data-block">
                        <span class="data-label">Date Submitted</span>
                        <span class="data-value">April 11, 2026</span>
                    </div>
                </div>

                <h3 class="text-lg font-bold text-[#7f1d1d] mt-8 mb-4">2. Operational Evaluation</h3>
                <div class="data-grid">
                    <div class="data-block full-width">
                        <span class="data-label">Executive Summary</span>
                        <span class="data-value">Medical standby was provided for the duration of the track and field events. 4 minor incidents (abrasions/heat exhaustion) were managed successfully. 0 transports required.</span>
                    </div>
                    <div class="data-block full-width">
                        <span class="data-label text-green-700">What Went Well? (Strengths / Successes)</span>
                        <span class="data-value bg-green-50 border-green-200">The central location of the triage tent allowed for rapid response to the track. Communication with campus security was seamless via radio channel 1.</span>
                    </div>
                    <div class="data-block full-width">
                        <span class="data-label text-[#b91c1c]">Areas for Improvement (Weaknesses / Challenges)</span>
                        <span class="data-value bg-[#fef2f2] border-[#fca5a5]">Ice packs in the medical kit ran out by 1:00 PM due to the high volume of heat-related complaints. The tent provided insufficient shade during peak noon hours.</span>
                    </div>
                </div>

                <h3 class="text-lg font-bold text-[#7f1d1d] mt-8 mb-4">3. Recommendations & Corrective Actions</h3>
                <div class="data-grid">
                    <div class="data-block full-width">
                        <span class="data-label">Proposed Corrective Actions</span>
                        <span class="data-value">1. Logistics must double the cooler capacity for ice packs during outdoor events.
2. Procurement of a larger, UV-reflective canopy tent for the triage area before the next outdoor event.</span>
                    </div>
                </div>

                <div class="action-bar">
                    <button class="btn-secondary" onclick="window.print()">Print Document</button>
                    <button class="btn-secondary" onclick="window.location.href='aar-form.php'">Edit Draft</button>
                    
                    <button class="btn-secondary admin-only border-red-500 text-red-700 hover:bg-red-50">Reject Revision</button>
                    <button class="btn-primary btn-approve admin-only">Approve AAR</button>
                </div>

            </div>

        </main>
    </div>

<?php include 'includes/footer.php'; ?>