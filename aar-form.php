<?php 
$pageTitle = "Submit AAR"; 
$activeMenu = "odp"; 
include 'includes/header.php'; 
?>
<?php include 'includes/sidebar.php'; ?>
    
    <div class="flex flex-col flex-1 overflow-hidden">

<?php include 'includes/topbar.php'; ?>

        <main class="main-content">
            
            <div class="mb-6 flex justify-between items-end">
                <div>
                    <h1 class="text-2xl font-bold text-[#450a0a]">Submit After Activity Report (AAR)</h1>
                    <p class="text-sm text-gray-600 mt-1">Evaluate the completed operation, identify strengths, and propose corrective actions.</p>
                </div>
            </div>

            <form id="aar-encoding-form" onsubmit="event.preventDefault(); window.location.href='odp.php';">
                
                <section class="panel bg-[#fef2f2] border-[#fca5a5]">
                    <div class="panel-header border-[#fca5a5]">
                        <div class="panel-title">
                            <svg viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25"/></svg>
                            1. Activity Information
                        </div>
                    </div>
                    
                    <div class="form-row">
                        <div class="form-group">
                            <label class="form-label">Linked IAP Reference *</label>
                            <select class="form-select" required>
                                <option value="">Select previous IAP...</option>
                                <option value="IAP-044">IAP-044: Campus Fire Drill</option>
                                <option value="IAP-043">IAP-043: Typhoon Response</option>
                                <option value="none">No associated IAP (Spontaneous Event)</option>
                            </select>
                        </div>
                        <div class="form-group" style="flex: 2;">
                            <label class="form-label">Activity Name / Event *</label>
                            <input type="text" class="form-input" placeholder="Name of the event being evaluated" required>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group">
                            <label class="form-label">Date of Activity *</label>
                            <input type="date" class="form-input" required>
                        </div>
                        <div class="form-group">
                            <label class="form-label">Total Duration (Hours) *</label>
                            <input type="number" class="form-input" step="0.5" placeholder="e.g. 4.5" required>
                        </div>
                        <div class="form-group">
                            <label class="form-label">Evaluated By *</label>
                            <input type="text" class="form-input active-user-name-input" readonly style="background-color: #f3f4f6; color: #450a0a; font-weight: 500;">
                        </div>
                    </div>
                </section>

                <section class="panel">
                    <div class="panel-header">
                        <div class="panel-title">
                            <svg viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                            2. Operational Evaluation
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group">
                            <label class="form-label">Executive Summary</label>
                            <textarea class="form-textarea" placeholder="Provide a brief summary of how the operation unfolded..."></textarea>
                        </div>
                    </div>

                    <div class="form-row mt-4">
                        <div class="form-group">
                            <label class="form-label text-green-700">What Went Well? (Strengths / Successes) *</label>
                            <textarea class="form-textarea border-green-200" placeholder="List the tactics, resources, or decisions that were effective..." required style="min-height: 100px;"></textarea>
                        </div>
                    </div>
                    
                    <div class="form-row">
                        <div class="form-group">
                            <label class="form-label text-[#b91c1c]">Areas for Improvement (Weaknesses / Challenges) *</label>
                            <textarea class="form-textarea border-[#fca5a5]" placeholder="List the bottlenecks, failures, or issues encountered during the operation..." required style="min-height: 100px;"></textarea>
                        </div>
                    </div>
                </section>

                <section class="panel">
                    <div class="panel-header">
                        <div class="panel-title">
                            <svg viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 18v-5.25m0 0a6.01 6.01 0 001.5-.189m-1.5.189a6.01 6.01 0 01-1.5-.189m3.75 7.478a12.06 12.06 0 01-4.5 0m3.75 2.383a14.406 14.406 0 01-3 0M14.25 18v-.192c0-.983.658-1.823 1.508-2.316a7.5 7.5 0 10-7.516 0c.85.493 1.509 1.333 1.509 2.316V18"/></svg>
                            3. Recommendations & Corrective Actions
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group">
                            <label class="form-label">Proposed Corrective Actions *</label>
                            <textarea class="form-textarea" placeholder="How do we fix the weaknesses identified above for future incidents?" required style="min-height: 100px;"></textarea>
                        </div>
                    </div>
                </section>

                <div class="action-bar">
                    <button type="button" class="btn-secondary" onclick="window.location.href='odp.php'">Cancel</button>
                    <button type="button" class="btn-secondary" style="color: #450a0a; border-color: #d1d5db;">Save Draft</button>
                    <button type="submit" class="btn-primary" id="submit-btn">Submit AAR for Review</button>
                </div>
                
            </form>

        </main>
    </div>

<?php include 'includes/footer.php'; ?>