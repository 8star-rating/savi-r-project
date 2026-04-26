<?php 
$pageTitle = "Create Draft IAP"; 
$activeMenu = "odp"; 
include 'includes/header.php'; 
?>
<?php include 'includes/sidebar.php'; ?>

    <div class="flex flex-col flex-1 overflow-hidden">

<?php include 'includes/topbar.php'; ?>

        <main class="main-content">
            
            <div class="mb-6 flex justify-between items-end">
                <div>
                    <h1 class="text-2xl font-bold text-[#450a0a]">Draft Incident Action Plan (IAP)</h1>
                    <p class="text-sm text-gray-600 mt-1">Define operational periods, objectives, and assign tactical resources.</p>
                </div>
            </div>

            <form id="iap-encoding-form" onsubmit="event.preventDefault(); window.location.href='odp.php';">
                
                <section class="panel bg-[#fef2f2] border-[#fca5a5]">
                    <div class="panel-header border-[#fca5a5]">
                        <div class="panel-title">
                            <svg viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5"/></svg>
                            1. Incident Details & Operational Period
                        </div>
                    </div>
                    
                    <div class="form-row">
                        <div class="form-group" style="flex: 2;">
                            <label class="form-label">Incident Name / Event *</label>
                            <input type="text" class="form-input" placeholder="e.g. Typhoon Response / Campus Fire Drill" required>
                        </div>
                        <div class="form-group">
                            <label class="form-label">Incident Ref #</label>
                            <input type="text" class="form-input" value="IAP-AUTO" disabled style="background-color: #f3f4f6; color: #9ca3af;">
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group">
                            <label class="form-label">Operational Period Start *</label>
                            <input type="datetime-local" class="form-input" required>
                        </div>
                        <div class="form-group">
                            <label class="form-label">Operational Period End *</label>
                            <input type="datetime-local" class="form-input" required>
                        </div>
                        <div class="form-group">
                            <label class="form-label">Prepared By (Officer) *</label>
                            <input type="text" class="form-input active-user-name-input" readonly style="background-color: #f3f4f6; color: #450a0a; font-weight: 500;">
                        </div>
                    </div>
                </section>

                <section class="panel">
                    <div class="panel-header">
                        <div class="panel-title">
                            <svg viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M3.75 3v11.25A2.25 2.25 0 006 16.5h2.25M3.75 3h-1.5m1.5 0h16.5m0 0h1.5m-1.5 0v11.25A2.25 2.25 0 0118 16.5h-2.25m-7.5 0h7.5m-7.5 0l-1 3m8.5-3l1 3m0 0l.5 1.5m-.5-1.5h-9.5m0 0l-.5 1.5M9 11.25v1.5M12 9v3.75m3-6v6"/></svg>
                            2. Incident Objectives (ICS 202)
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group">
                            <label class="form-label">Overall Strategic Objectives *</label>
                            <textarea class="form-textarea" placeholder="List the broad objectives for this operational period (e.g. 1. Ensure safety of all responders. 2. Evacuate Zone A...)" required style="min-height: 100px;"></textarea>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group">
                            <label class="form-label">Tactical Strategies / Execution Plan</label>
                            <textarea class="form-textarea" placeholder="Describe how the objectives will be met..."></textarea>
                        </div>
                    </div>
                    
                    <div class="form-row">
                        <div class="form-group">
                            <label class="form-label text-[#b91c1c]">Weather & Safety Hazards</label>
                            <textarea class="form-textarea border-[#fca5a5]" placeholder="Identify specific safety concerns or weather conditions affecting operations..."></textarea>
                        </div>
                    </div>
                </section>

                <section class="panel">
                    <div class="panel-header">
                        <div class="panel-title">
                            <svg viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M15 19.128a9.38 9.38 0 002.625.372 9.337 9.337 0 004.121-.952 4.125 4.125 0 00-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 018.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0111.964-3.07M12 6.375a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zm8.25 2.25a2.625 2.625 0 11-5.25 0 2.625 2.625 0 015.25 0z"/></svg>
                            3. Resource & Tactical Assignments
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group bg-gray-50 p-4 rounded-lg border border-gray-200">
                            <label class="form-label mb-2 text-gray-800">Participating Units (Check all that apply)</label>
                            <div class="checkbox-group">
                                <label class="checkbox-label"><input type="checkbox"> Unit Alpha (Search & Rescue)</label>
                                <label class="checkbox-label"><input type="checkbox"> Unit Bravo (Medical/Triage)</label>
                                <label class="checkbox-label"><input type="checkbox"> Campus Security</label>
                                <label class="checkbox-label"><input type="checkbox"> Logistics Support</label>
                                <label class="checkbox-label"><input type="checkbox"> Communications Desk</label>
                                <label class="checkbox-label"><input type="checkbox"> External Partner (BFP/911)</label>
                            </div>
                        </div>
                    </div>

                    <div class="form-row mt-2">
                        <div class="form-group">
                            <label class="form-label">Incident Commander</label>
                            <input type="text" class="form-input" placeholder="Name of designated IC">
                        </div>
                        <div class="form-group">
                            <label class="form-label">Operations Section Chief</label>
                            <input type="text" class="form-input" placeholder="Name of OSC">
                        </div>
                    </div>
                </section>

                <div class="action-bar">
                    <button type="button" class="btn-secondary" onclick="window.location.href='odp.php'">Cancel</button>
                    <button type="button" class="btn-secondary" style="color: #450a0a; border-color: #d1d5db;">Save as Draft</button>
                    <button type="submit" class="btn-primary" id="submit-btn">Submit for Approval</button>
                </div>
                
            </form>

        </main>
    </div>

<?php include 'includes/footer.php'; ?>