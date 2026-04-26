<?php 
$pageTitle = "Patient Care Records"; 
$activeMenu = "pprc"; 
include 'includes/header.php'; 
?>
<?php include 'includes/sidebar.php'; ?>

    <div class="flex flex-col flex-1 overflow-hidden">

<?php include 'includes/topbar.php'; ?>

        <main class="main-content">
            
            <div class="mb-8">
                <h1 class="text-2xl font-bold text-[#450a0a]">Pre-Hospital Patient Care Records (PPCR)</h1>
                <p class="text-sm text-gray-600 mt-1">Strict confidentiality protocols apply. All patient personally identifiable information (PII) is encrypted.</p>
            </div>

            <section class="panel">
                <div class="panel-header">
                    <div class="panel-title">
                        <svg viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126zM12 15.75h.007v.008H12v-.008z"/></svg>
                        Recent Patient Encounters
                    </div>
                    <button class="btn-primary" onclick="window.location.href='pprc-form.php'">+ Encode New PPCR</button>
                </div>
                <div class="data-table-wrapper">
                    <table class="data-table">
                        <thead>
                            <tr>
                                <th>PPCR ID</th>
                                <th>Incident / Date</th>
                                <th>Patient Info</th>
                                <th>Chief Complaint</th>
                                <th>Vitals Status</th>
                                <th>Transport Dest.</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>PPCR-189</td>
                                <td>
                                    INC-043
                                    <span class="sub-text">2026-04-20 14:30</span>
                                </td>
                                <td>
                                    <span class="badge badge-masked patient-name" data-masked="P*** D***" data-unmasked="Pedro Dela Cruz">P*** D***</span>
                                    <span class="sub-text">24 yrs • M</span>
                                </td>
                                <td>Laceration on right arm</td>
                                <td><span class="badge badge-stable">Stable</span></td>
                                <td>SPMC ER</td>
                                <td>
                                    <span class="action-link">View Full Vitals</span> 
                                    <span class="action-link admin-only">Edit</span>
                                </td>
                            </tr>
                            <tr>
                                <td>PPCR-190</td>
                                <td>
                                    INC-044
                                    <span class="sub-text">2026-04-21 09:15</span>
                                </td>
                                <td>
                                    <span class="badge badge-masked patient-name" data-masked="*** ***" data-unmasked="Maria Santos">*** ***</span>
                                    <span class="sub-text">19 yrs • F</span>
                                </td>
                                <td>Heat Exhaustion / Fainting</td>
                                <td><span class="badge badge-warning">Monitor</span></td>
                                <td>University Clinic</td>
                                <td>
                                    <span class="action-link">View Full Vitals</span> 
                                    <span class="action-link admin-only">Edit</span>
                                </td>
                            </tr>
                            <tr>
                                <td>PPCR-191</td>
                                <td>
                                    INC-043
                                    <span class="sub-text">2026-04-22 08:00</span>
                                </td>
                                <td>
                                    <span class="badge badge-masked patient-name" data-masked="R*** M***" data-unmasked="Ramon Mendoza">R*** M***</span>
                                    <span class="sub-text">45 yrs • M</span>
                                </td>
                                <td>Severe Chest Pain</td>
                                <td><span class="badge badge-critical">Critical</span></td>
                                <td>Davao Doctors Hosp.</td>
                                <td>
                                    <span class="action-link">View Full Vitals</span> 
                                    <span class="action-link admin-only">Edit</span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </section>

            <section class="panel">
                <div class="panel-header">
                    <div class="panel-title">
                        <svg viewBox="0 0 24 24" stroke-width="1.6"><path stroke-linecap="round" stroke-linejoin="round" d="M20.25 14.15v4.25c0 1.094-.787 2.036-1.872 2.18-2.087.277-4.216.42-6.378.42s-4.291-.143-6.378-.42c-1.085-.144-1.872-1.086-1.872-2.18v-4.25m16.5 0a2.18 2.18 0 00.75-1.661V8.706c0-1.081-.768-2.015-1.837-2.175a48.114 48.114 0 00-3.413-.387m4.5 8.006c-.194.165-.42.295-.673.38A23.978 23.978 0 0112 15.75c-2.648 0-5.195-.429-7.577-1.22a2.016 2.016 0 01-.673-.38m0 0A2.18 2.18 0 013 12.489V8.706c0-1.081.768-2.015 1.837-2.175a48.111 48.111 0 013.413-.387m7.5 0V5.25A2.25 2.25 0 0013.5 3h-3a2.25 2.25 0 00-2.25 2.25v.894m7.5 0a48.667 48.667 0 00-7.5 0M12 12.75h.008v.008H12v-.008z"/></svg>
                        Archived Records Repository
                    </div>
                </div>
                <div class="data-table-wrapper">
                    <table class="data-table">
                        <thead>
                            <tr>
                                <th>PPCR ID</th>
                                <th>Date Filed</th>
                                <th>Incident Ref</th>
                                <th>Encoded By</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>PPCR-142</td>
                                <td>2025-11-12</td>
                                <td>INC-021</td>
                                <td>User67</td>
                                <td><span class="badge" style="background: #f3f4f6; color: #6b7280;">Archived</span></td>
                                <td>
                                    <span class="action-link user-only">Request Decryption Access</span>
                                    <span class="action-link admin-only">Decrypt & View</span>
                                </td>
                            </tr>
                            <tr>
                                <td>PPCR-143</td>
                                <td>2025-11-15</td>
                                <td>INC-022</td>
                                <td>M. Santos</td>
                                <td><span class="badge" style="background: #f3f4f6; color: #6b7280;">Archived</span></td>
                                <td>
                                    <span class="action-link user-only">Request Decryption Access</span>
                                    <span class="action-link admin-only">Decrypt & View</span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </section>

        </main>
    </div>

<?php include 'includes/footer.php'; ?>