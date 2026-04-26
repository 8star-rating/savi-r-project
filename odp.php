<?php 
$pageTitle = "Operational Documentation & Planning"; 
$activeMenu = "odp"; 
include 'includes/header.php'; 
?>
<?php include 'includes/sidebar.php'; ?>
    
    <div class="flex flex-col flex-1 overflow-hidden">

<?php include 'includes/topbar.php'; ?>

        <main class="main-content">
            
            <div class="mb-8">
                <h1 class="text-2xl font-bold text-[#450a0a]">Planning &amp; Evaluation Repository</h1>
                <p class="text-sm text-gray-600 mt-1">Manage, approve, and track all strategic documentation regarding incidents and operations.</p>
            </div>

            <section id="iap-section" class="panel">
                <div class="panel-header">
                    <div class="panel-title">
                        <svg viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12h3.75M9 15h3.75M9 18h3.75m3 .75H18a2.25 2.25 0 002.25-2.25V6.108c0-1.135-.845-2.098-1.976-2.192a48.424 48.424 0 00-1.123-.08m-5.801 0c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 00.75-.75 2.25 2.25 0 00-.1-.664m-5.8 0A2.251 2.251 0 0113.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m0 0H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V9.375c0-.621-.504-1.125-1.125-1.125H8.25z"/></svg>
                        Incident Action Plans (IAP)
                    </div>
                    <button class="btn-primary" onclick="window.location.href='iap-form.php'">+ Create Draft IAP</button>
                </div>
                <div class="data-table-wrapper">
                    <table class="data-table">
                        <thead>
                            <tr>
                                <th>IAP ID</th>
                                <th>Incident Name</th>
                                <th>Period Start</th>
                                <th>Authored By</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>IAP-043</td>
                                <td>Typhoon Response 2026</td>
                                <td>2026-04-18 06:00</td>
                                <td>M. Santos</td>
                                <td><span class="badge badge-approved">Approved</span></td>
                                <td>
                                    <span class="action-link" onclick="window.location.href='iap.php'">View Docs</span> 
                                    <span class="action-link admin-only" onclick="window.location.href='iap.php'">Edit</span>
                                </td>
                            </tr>
                            <tr>
                                <td>IAP-044</td>
                                <td>Campus Fire Drill</td>
                                <td>2026-05-03 08:00</td>
                                <td>Admin67</td>
                                <td><span class="badge badge-pending">Pending</span></td>
                                <td>
                                    <span class="action-link admin-only" onclick="window.location.href='iap.php'">Review</span> 
                                    <span class="action-link admin-only" onclick="window.location.href='iap.php'">Edit</span>
                                    <span class="action-link user-only" onclick="window.location.href='iap.php'">View Status</span>
                                </td>
                            </tr>
                            <tr>
                                <td>IAP-045</td>
                                <td>Medical Standby - Intramurals</td>
                                <td>2026-05-10 07:00</td>
                                <td>User67</td>
                                <td><span class="badge badge-draft">Draft</span></td>
                                <td>
                                    <span class="action-link" onclick="window.location.href='iap.php'">Encode</span> 
                                    <span class="action-link admin-only" onclick="window.location.href='iap.php'" style="color: #ef4444;">Delete</span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </section>

            <section id="aar-section" class="panel">
                <div class="panel-header">
                    <div class="panel-title">
                        <svg viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                        After Activity Reports (AAR)
                    </div>
                   <button class="btn-primary" onclick="window.location.href='aar-form.php'">+ Submit AAR</button>
                </div>
                <div class="data-table-wrapper">
                    <table class="data-table">
                        <thead>
                            <tr>
                                <th>AAR ID</th>
                                <th>Related IAP ID</th>
                                <th>Activity Date</th>
                                <th>Duration (Hrs)</th>
                                <th>Authored By</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>AAR-020</td>
                                <td>IAP-040</td>
                                <td>2026-03-22</td>
                                <td>4.50</td>
                                <td>Director Reyes</td>
                                <td><span class="action-link" onclick="window.location.href='aar.php'">View Evaluation</span></td>
                            </tr>
                            <tr>
                                <td>AAR-021</td>
                                <td>IAP-041</td>
                                <td>2026-04-10</td>
                                <td>8.00</td>
                                <td>Admin67</td>
                                <td>
                                    <span class="action-link" onclick="window.location.href='aar.php'">View Evaluation</span> 
                                    <span class="action-link admin-only" onclick="window.location.href='aar.php'">Edit</span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </section>

            <section id="wlr-section" class="panel">
                <div class="panel-header">
                    <div class="panel-title">
                        <svg viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5"/></svg>
                        Weekly Log Reports
                    </div>
                    <button class="btn-primary" onclick="window.location.href='wlr-form.php'">+ File Log</button>
                </div>
                <div class="data-table-wrapper">
                    <table class="data-table">
                        <thead>
                            <tr>
                                <th>Log ID</th>
                                <th>Week / Year</th>
                                <th>Period Covered</th>
                                <th>Officer on Duty</th>
                                <th>Incidents Logged</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>LOG-114</td>
                                <td>Week 14 / 2026</td>
                                <td>Apr 05 - Apr 11</td>
                                <td>User67</td>
                                <td>3 Minor, 0 Major</td>
                                <td>
                                    <span class="action-link" onclick="window.location.href='wlr.php'">View Log</span>
                                    <span class="action-link admin-only" onclick="window.location.href='wlr-form.php'">Edit</span>
                                </td>
                            </tr>
                            <tr>
                                <td>LOG-115</td>
                                <td>Week 15 / 2026</td>
                                <td>Apr 12 - Apr 18</td>
                                <td>M. Santos</td>
                                <td>1 Minor, 1 Major</td>
                                <td>
                                    <span class="action-link" onclick="window.location.href='wlr.php'">View Log</span>
                                    <span class="action-link admin-only" onclick="window.location.href='wlr-form.php'">Edit</span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </section>

        </main>
    </div>

<?php include 'includes/footer.php'; ?>