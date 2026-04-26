<?php 
$pageTitle = "View Weekly Log"; 
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
                        <div class="doc-id">WLR-114</div>
                        <h1 class="doc-title">Weekly Log Report - Week 14 / 2026</h1>
                    </div>
                    <div class="badge-pending">
                        Pending Approval
                    </div>
                </div>

                <h3 class="text-lg font-bold text-[#7f1d1d] mb-4">1. Reporting Period & Personnel</h3>
                <div class="data-grid">
                    <div class="data-block">
                        <span class="data-label">Period Covered</span>
                        <span class="data-value">April 05, 2026 — April 11, 2026</span>
                    </div>
                    <div class="data-block">
                        <span class="data-label">Officer on Duty (Filing)</span>
                        <span class="data-value">User67 (Staff / Responder)</span>
                    </div>
                </div>

                <h3 class="text-lg font-bold text-[#7f1d1d] mt-8 mb-4">2. Incident & Dispatch Summary</h3>
                <div class="data-grid-4">
                    <div class="data-block">
                        <span class="data-label text-center">Total Incidents</span>
                        <span class="data-value data-value-highlight">3</span>
                    </div>
                    <div class="data-block">
                        <span class="data-label text-center">Major Incidents</span>
                        <span class="data-value data-value-highlight" style="color: #b91c1c;">0</span>
                    </div>
                    <div class="data-block">
                        <span class="data-label text-center">Minor Standbys</span>
                        <span class="data-value data-value-highlight" style="color: #1f2937;">3</span>
                    </div>
                    <div class="data-block">
                        <span class="data-label text-center">False Alarms</span>
                        <span class="data-value data-value-highlight" style="color: #6b7280; background: #f3f4f6; border-color: #d1d5db;">0</span>
                    </div>
                </div>

                <h3 class="text-lg font-bold text-[#7f1d1d] mt-8 mb-4">3. Operational Highlights & Logistics</h3>
                <div class="data-grid">
                    <div class="data-block full-width">
                        <span class="data-label">Key Highlights / Significant Events</span>
                        <span class="data-value">Routine week with no major campus disruptions. Unit Bravo was dispatched to the gymnasium three times for minor sports-related injuries during practice. All patients were treated on-site and released without transport.</span>
                    </div>
                    <div class="data-block full-width">
                        <span class="data-label">Equipment & Vehicle Status</span>
                        <span class="data-value">Ambulance 1: Fully operational, fuel at 80%.
Medical Kits: Kit B requires restocking of athletic tape and instant ice packs.
Radios: All 5 handheld units are functioning and fully charged.</span>
                    </div>
                    <div class="data-block full-width">
                        <span class="data-label">General Remarks / Handoff Notes</span>
                        <span class="data-value">Please ensure Kit B is restocked by Monday morning before the scheduled physical education classes begin.</span>
                    </div>
                </div>

                <div class="action-bar">
                    <button class="btn-secondary" onclick="window.print()">Print Document</button>
                    <button class="btn-secondary" onclick="window.location.href='wlr-form.php'">Edit Draft</button>
                    
                    <button class="btn-secondary admin-only border-red-500 text-red-700 hover:bg-red-50">Reject Log</button>
                    <button class="btn-primary btn-approve admin-only">Approve Weekly Log</button>
                </div>

            </div>

        </main>
    </div>

<?php include 'includes/footer.php'; ?>