<?php 
$pageTitle = "File Weekly Log"; 
$activeMenu = "odp"; 
include 'includes/header.php'; 
?>
<?php include 'includes/sidebar.php'; ?>

    <div class="flex flex-col flex-1 overflow-hidden">

<?php include 'includes/topbar.php'; ?>

        <main class="main-content">
            
            <div class="mb-6 flex justify-between items-end">
                <div>
                    <h1 class="text-2xl font-bold text-[#450a0a]">File Weekly Log Report (WLR)</h1>
                    <p class="text-sm text-gray-600 mt-1">Summarize unit activities, incident counts, and resource statuses for the week.</p>
                </div>
            </div>

            <form id="wlr-encoding-form" onsubmit="event.preventDefault(); window.location.href='odp.php';">
                
                <section class="panel bg-[#fef2f2] border-[#fca5a5]">
                    <div class="panel-header border-[#fca5a5]">
                        <div class="panel-title">
                            <svg viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5"/></svg>
                            1. Reporting Period & Personnel
                        </div>
                    </div>
                    
                    <div class="form-row">
                        <div class="form-group">
                            <label class="form-label">Week Number *</label>
                            <input type="number" class="form-input" placeholder="e.g. 14" required>
                        </div>
                        <div class="form-group">
                            <label class="form-label">Year *</label>
                            <input type="number" class="form-input" placeholder="e.g. 2026" required>
                        </div>
                        <div class="form-group" style="flex: 2;">
                            <label class="form-label">Filing Officer *</label>
                            <input type="text" class="form-input active-user-name-input" readonly style="background-color: #f3f4f6; color: #450a0a; font-weight: 500;">
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group">
                            <label class="form-label">Period Start Date *</label>
                            <input type="date" class="form-input" required>
                        </div>
                        <div class="form-group">
                            <label class="form-label">Period End Date *</label>
                            <input type="date" class="form-input" required>
                        </div>
                    </div>
                </section>

                <section class="panel">
                    <div class="panel-header">
                        <div class="panel-title">
                            <svg viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M3.75 3v11.25A2.25 2.25 0 006 16.5h2.25M3.75 3h-1.5m1.5 0h16.5m0 0h1.5m-1.5 0v11.25A2.25 2.25 0 0118 16.5h-2.25m-7.5 0h7.5m-7.5 0l-1 3m8.5-3l1 3m0 0l.5 1.5m-.5-1.5h-9.5m0 0l-.5 1.5M9 11.25v1.5M12 9v3.75m3-6v6"/></svg>
                            2. Incident & Dispatch Summary
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group bg-gray-50 p-4 rounded-lg border border-gray-200">
                            <label class="form-label mb-2 text-gray-800">Total Incidents Responded To</label>
                            <input type="number" class="form-input" placeholder="0" required>
                        </div>
                        <div class="form-group bg-gray-50 p-4 rounded-lg border border-gray-200">
                            <label class="form-label mb-2 text-[#b91c1c]">Major Incidents (Requiring IAP/AAR)</label>
                            <input type="number" class="form-input border-[#fca5a5]" placeholder="0" required>
                        </div>
                        <div class="form-group bg-gray-50 p-4 rounded-lg border border-gray-200">
                            <label class="form-label mb-2 text-gray-800">Minor / Routine Standbys</label>
                            <input type="number" class="form-input" placeholder="0" required>
                        </div>
                        <div class="form-group bg-gray-50 p-4 rounded-lg border border-gray-200">
                            <label class="form-label mb-2 text-gray-500">False Alarms / Canceled</label>
                            <input type="number" class="form-input" placeholder="0">
                        </div>
                    </div>
                </section>

                <section class="panel">
                    <div class="panel-header">
                        <div class="panel-title">
                            <svg viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m0 12.75h7.5m-7.5 3H12M10.5 2.25H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z"/></svg>
                            3. Operational Highlights & Logistics
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group">
                            <label class="form-label">Key Highlights / Significant Events</label>
                            <textarea class="form-textarea" placeholder="Summarize any major events, VIP visits, or significant campus occurrences this week..."></textarea>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group">
                            <label class="form-label">Equipment & Vehicle Status</label>
                            <textarea class="form-textarea" placeholder="e.g. Ambulance 1 is due for PMS. Defibrillator pads restocked..."></textarea>
                        </div>
                    </div>
                    
                    <div class="form-row">
                        <div class="form-group">
                            <label class="form-label">General Remarks / Handoff Notes</label>
                            <textarea class="form-textarea" placeholder="Any final notes for the next week's shift..."></textarea>
                        </div>
                    </div>
                </section>

                <div class="action-bar">
                    <button type="button" class="btn-secondary" onclick="window.location.href='odp.php'">Cancel</button>
                    <button type="button" class="btn-secondary" style="color: #450a0a; border-color: #d1d5db;">Save Draft</button>
                    <button type="submit" class="btn-primary" id="submit-btn">File Weekly Log</button>
                </div>
                
            </form>

        </main>
    </div>

<?php include 'includes/footer.php'; ?>