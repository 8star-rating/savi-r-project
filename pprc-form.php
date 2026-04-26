<?php 
$pageTitle = "Encode PPCR"; 
$activeMenu = "pprc"; 
include 'includes/header.php'; 
?>
<?php include 'includes/sidebar.php'; ?>

    <div class="flex flex-col flex-1 overflow-hidden">

<?php include 'includes/topbar.php'; ?>

        <main class="main-content">
            
            <div class="mb-6 flex justify-between items-end">
                <div>
                    <h1 class="text-2xl font-bold text-[#450a0a]">Encode Pre-Hospital Patient Care Record</h1>
                    <p class="text-sm text-gray-600 mt-1">Fields marked with an asterisk (*) are required. System will automatically encrypt PII upon submission.</p>
                </div>
            </div>

            <form id="ppcr-encoding-form" onsubmit="event.preventDefault(); window.location.href='pprc.php';">
                
                <section class="panel bg-[#fef2f2] border-[#fca5a5]">
                    <div class="panel-header border-[#fca5a5]">
                        <div class="panel-title">
                            <svg viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z"/><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z"/></svg>
                            Incident & Patient Information
                        </div>
                    </div>
                    
                    <div class="form-row">
                        <div class="form-group">
                            <label class="form-label">Incident Ref Number *</label>
                            <input type="text" class="form-input" placeholder="e.g. INC-045" required>
                        </div>
                        <div class="form-group">
                            <label class="form-label">Date of Incident *</label>
                            <input type="date" class="form-input" required>
                        </div>
                        <div class="form-group">
                            <label class="form-label">Time Dispatched / Arrived</label>
                            <div class="flex gap-2">
                                <input type="time" class="form-input" title="Dispatched">
                                <input type="time" class="form-input" title="Arrived">
                            </div>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group" style="flex: 2;">
                            <label class="form-label">Patient Full Name *</label>
                            <input type="text" class="form-input" placeholder="Last Name, First Name, M.I." required>
                        </div>
                        <div class="form-group">
                            <label class="form-label">Age</label>
                            <input type="number" class="form-input" placeholder="Years">
                        </div>
                        <div class="form-group">
                            <label class="form-label">Sex</label>
                            <select class="form-select">
                                <option value="">Select...</option>
                                <option value="M">Male</option>
                                <option value="F">Female</option>
                                <option value="U">Unknown</option>
                            </select>
                        </div>
                    </div>
                </section>

                <section class="panel">
                    <div class="panel-header">
                        <div class="panel-title">
                            <svg viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                            Clinical Assessment & GCS
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group">
                            <label class="form-label">Chief Complaint *</label>
                            <textarea class="form-textarea" placeholder="Describe the main issue or injury..." required></textarea>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group bg-gray-50 p-4 rounded-lg border border-gray-200">
                            <label class="form-label mb-2 text-gray-800">Primary Assessment (Check if abnormal)</label>
                            <div class="checkbox-group">
                                <label class="checkbox-label"><input type="checkbox"> Airway Compromised</label>
                                <label class="checkbox-label"><input type="checkbox"> Breathing Shallow</label>
                                <label class="checkbox-label"><input type="checkbox"> Bleeding / Hemorrhage</label>
                                <label class="checkbox-label"><input type="checkbox"> Pale/Cyanotic Skin</label>
                                <label class="checkbox-label"><input type="checkbox"> Delayed Cap Refill (>2s)</label>
                            </div>
                        </div>

                        <div class="form-group bg-gray-50 p-4 rounded-lg border border-gray-200">
                            <label class="form-label mb-2 text-gray-800">Glasgow Coma Scale (GCS)</label>
                            <div class="flex gap-2">
                                <select class="form-select" title="Eye Opening">
                                    <option value="">Eye (1-4)</option>
                                    <option value="4">4 - Spontaneous</option>
                                    <option value="3">3 - To Voice</option>
                                    <option value="2">2 - To Pain</option>
                                    <option value="1">1 - None</option>
                                </select>
                                <select class="form-select" title="Verbal Response">
                                    <option value="">Verbal (1-5)</option>
                                    <option value="5">5 - Oriented</option>
                                    <option value="4">4 - Confused</option>
                                    <option value="3">3 - Inappropriate</option>
                                    <option value="2">2 - Incomprehensible</option>
                                    <option value="1">1 - None</option>
                                </select>
                                <select class="form-select" title="Motor Response">
                                    <option value="">Motor (1-6)</option>
                                    <option value="6">6 - Obeys Commands</option>
                                    <option value="5">5 - Localizes Pain</option>
                                    <option value="4">4 - Withdraws</option>
                                    <option value="3">3 - Flexion</option>
                                    <option value="2">2 - Extension</option>
                                    <option value="1">1 - None</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="panel">
                    <div class="panel-header">
                        <div class="panel-title">
                            <svg viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m0 12.75h7.5m-7.5 3H12M10.5 2.25H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z"/></svg>
                            S.A.M.P.L.E. History
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group">
                            <label class="form-label">Signs & Symptoms</label>
                            <input type="text" class="form-input">
                        </div>
                        <div class="form-group">
                            <label class="form-label">Allergies</label>
                            <input type="text" class="form-input">
                        </div>
                        <div class="form-group">
                            <label class="form-label">Medications</label>
                            <input type="text" class="form-input">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group">
                            <label class="form-label">Past Medical History</label>
                            <input type="text" class="form-input">
                        </div>
                        <div class="form-group">
                            <label class="form-label">Last Oral Intake</label>
                            <input type="text" class="form-input">
                        </div>
                        <div class="form-group">
                            <label class="form-label">Events Leading Up To</label>
                            <input type="text" class="form-input">
                        </div>
                    </div>
                </section>

                <section class="panel">
                    <div class="panel-header">
                        <div class="panel-title">
                            <svg viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/><path stroke-linecap="round" stroke-linejoin="round" d="M15.91 11.672a.375.375 0 010 .656l-5.603 3.113a.375.375 0 01-.557-.328V8.887c0-.286.307-.466.557-.327l5.603 3.112z"/></svg>
                            Initial Vital Signs
                        </div>
                    </div>
                    <div class="form-row" style="align-items: flex-end;">
                        <div class="form-group" style="flex: 0.5;">
                            <label class="form-label">Time Taken</label>
                            <input type="time" class="form-input">
                        </div>
                        <div class="form-group">
                            <label class="form-label">Blood Press. (mmHg)</label>
                            <div class="flex items-center gap-2">
                                <input type="number" class="form-input" placeholder="SYS" style="width: 50%;"> <span class="text-gray-400">/</span> <input type="number" class="form-input" placeholder="DIA" style="width: 50%;">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="form-label">Heart Rate (bpm)</label>
                            <input type="number" class="form-input">
                        </div>
                        <div class="form-group">
                            <label class="form-label">Resp. Rate (cpm)</label>
                            <input type="number" class="form-input">
                        </div>
                        <div class="form-group">
                            <label class="form-label">SpO2 (%)</label>
                            <input type="number" class="form-input">
                        </div>
                        <div class="form-group">
                            <label class="form-label">Pain Scale (1-10)</label>
                            <input type="number" class="form-input" min="1" max="10">
                        </div>
                    </div>
                </section>

                <section class="panel">
                    <div class="panel-header">
                        <div class="panel-title">
                            <svg viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M8.25 18.75a1.5 1.5 0 01-3 0m3 0a1.5 1.5 0 00-3 0m3 0h6m-9 0H3.375a1.125 1.125 0 01-1.125-1.125V14.25m17.25 4.5a1.5 1.5 0 01-3 0m3 0a1.5 1.5 0 00-3 0m3 0h1.125c.621 0 1.125-.504 1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125H3.375M9 15v1.5m3-1.5v1.5m3-1.5v1.5M12 9.75v-1.5m-3 1.5v-1.5m3 1.5v-1.5m3 1.5v-1.5M10.5 6a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zm6 0a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0z"/></svg>
                            Narrative & Disposition
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group" style="flex: 2;">
                            <label class="form-label">Interventions & Narrative</label>
                            <textarea class="form-textarea" placeholder="Detail treatments provided (e.g. O2 administered, wound dressed) and overall incident narrative..." style="min-height: 120px;"></textarea>
                        </div>
                        <div class="form-group flex flex-col justify-between">
                            <div>
                                <label class="form-label">Transport Destination</label>
                                <select class="form-select">
                                    <option value="">Select Destination...</option>
                                    <option value="spmc">SPMC ER</option>
                                    <option value="ddh">Davao Doctors Hospital</option>
                                    <option value="clinic">University Clinic</option>
                                    <option value="none">Not Transported / Refused</option>
                                </select>
                            </div>
                            <div class="bg-gray-50 p-4 rounded-lg border border-gray-200 mt-4">
                                <label class="checkbox-label font-bold text-[#b91c1c]">
                                    <input type="checkbox"> Patient Refused Care/Transport
                                </label>
                            </div>
                        </div>
                    </div>
                </section>

                <div class="action-bar">
                    <button type="button" class="btn-secondary" onclick="window.location.href='pprc.php'">Cancel</button>
                    <button type="button" class="btn-secondary" style="color: #450a0a; border-color: #d1d5db;">Save as Draft</button>
                    <button type="submit" class="btn-primary">Submit Encrypted Record</button>
                </div>
                
            </form>

        </main>
    </div>

<?php include 'includes/footer.php'; ?>