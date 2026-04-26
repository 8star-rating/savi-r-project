<?php 
$pageTitle = "Dashboard Overview"; 
$activeMenu = "dashboard"; 
include 'includes/header.php'; 
?>
<?php include 'includes/sidebar.php'; ?>
    
    <div class="flex flex-col flex-1 overflow-hidden">

<?php include 'includes/topbar.php'; ?>

        <main class="main-content">

            <div class="mb-8">
                <h1 class="text-2xl font-bold text-[#450a0a]">Admin Dashboard</h1>
                <p class="text-sm text-gray-600 mt-1">Strategically review, finalize, or edit documentation for all incidents and operations.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-3 mb-6">

                <div class="module-card card-red" onclick="window.location.href='odp.php'">
                    <div class="card-label">Manage</div>
                    <div class="card-title">Operational Documentation &amp; Planning</div>
                    <div class="stat-chips">
                        <div class="stat-chip"><div class="stat-num">12</div><div class="stat-lbl">Active IAPs</div></div>
                        <div class="stat-chip"><div class="stat-num">4</div><div class="stat-lbl">Pending AARs</div></div>
                    </div>
                    <div class="card-divider"></div>
                    <div class="card-row">
                        <svg viewBox="0 0 24 24" stroke-width="1.6"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12h3.75M9 15h3.75M9 18h3.75m3 .75H18a2.25 2.25 0 002.25-2.25V6.108c0-1.135-.845-2.098-1.976-2.192a48.424 48.424 0 00-1.123-.08m-5.801 0c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 00.75-.75 2.25 2.25 0 00-.1-.664m-5.8 0A2.251 2.251 0 0113.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m0 0H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V9.375c0-.621-.504-1.125-1.125-1.125H8.25z"/></svg>
                        <div class="card-row-text">Recent IAPs</div><div class="card-badge">View</div>
                    </div>
                    <div class="card-row">
                        <svg viewBox="0 0 24 24" stroke-width="1.6"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                        <div class="card-row-text">Pending AAR approvals</div><div class="card-badge">4 due</div>
                    </div>
                    <div class="card-row">
                        <svg viewBox="0 0 24 24" stroke-width="1.6"><path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5"/></svg>
                        <div class="card-row-text">Weekly log reports</div><div class="card-badge">This week</div>
                    </div>
                    <div class="card-accent">
                        <svg viewBox="0 0 24 24" stroke-width="0.8"><rect x="3" y="3" width="18" height="18" rx="2"/><path d="M9 9h6M9 13h6M9 17h4"/></svg>
                    </div>
                </div>

                <div class="module-card card-darkred" onclick="window.location.href='pprc.php'">
                    <div class="card-label">Manage</div>
                    <div class="card-title">Pre-Hospital Patient Care Records</div>
                    <div class="stat-chips">
                        <div class="stat-chip"><div class="stat-num">87</div><div class="stat-lbl">Masked</div></div>
                        <div class="stat-chip"><div class="stat-num">6</div><div class="stat-lbl">Unread</div></div>
                    </div>
                    <div class="card-divider"></div>
                    <div class="card-row">
                        <svg viewBox="0 0 24 24" stroke-width="1.6"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75m-3-7.036A11.959 11.959 0 013.598 6 11.99 11.99 0 003 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285z"/></svg>
                        <div class="card-row-text">Strictly masked reports</div><div class="card-badge">87</div>
                    </div>
                    <div class="card-row">
                        <svg viewBox="0 0 24 24" stroke-width="1.6"><path stroke-linecap="round" stroke-linejoin="round" d="M21.75 9v.906a2.25 2.25 0 01-1.183 1.981l-6.478 3.488M2.25 9v.906a2.25 2.25 0 001.183 1.981l6.478 3.488m8.839 2.51l-4.66-2.51m0 0l-1.023-.55a2.25 2.25 0 00-2.134 0l-1.022.55m0 0l-4.661 2.51m16.5 1.615a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V8.844a2.25 2.25 0 011.183-1.98l7.5-4.04a2.25 2.25 0 012.134 0l7.5 4.04a2.25 2.25 0 011.183 1.98V19.5z"/></svg>
                        <div class="card-row-text">New submissions (unread)</div><div class="card-badge">6 new</div>
                    </div>
                    <div class="card-row">
                        <svg viewBox="0 0 24 24" stroke-width="1.6"><path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                        <div class="card-row-text">Recent encounters</div><div class="card-badge">Today</div>
                    </div>
                    <div class="card-accent">
                        <svg viewBox="0 0 24 24" stroke-width="0.8"><path d="M12 2l2 7h7l-5.5 4 2 7L12 16l-5.5 4 2-7L3 9h7z"/></svg>
                    </div>
                </div>

                <div class="module-card card-lightred" onclick="window.location.href='personnel.php'">
                    <div class="card-label">Manage</div>
                    <div class="card-title">Personnel Management</div>
                    <div class="stat-chips">
                        <div class="stat-chip"><div class="stat-num">34</div><div class="stat-lbl">Total staff</div></div>
                        <div class="stat-chip"><div class="stat-num">3</div><div class="stat-lbl">Cert. expiring</div></div>
                    </div>
                    <div class="card-divider"></div>
                    <div class="card-row">
                        <svg viewBox="0 0 24 24" stroke-width="1.6"><path stroke-linecap="round" stroke-linejoin="round" d="M15 19.128a9.38 9.38 0 002.625.372 9.337 9.337 0 004.121-.952 4.125 4.125 0 00-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 018.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0111.964-3.07M12 6.375a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zm8.25 2.25a2.625 2.625 0 11-5.25 0 2.625 2.625 0 015.25 0z"/></svg>
                        <div class="card-row-text">Active designations</div><div class="card-badge">8 roles</div>
                    </div>
                    <div class="card-row">
                        <svg viewBox="0 0 24 24" stroke-width="1.6"><path stroke-linecap="round" stroke-linejoin="round" d="M4.26 10.147a60.436 60.436 0 00-.491 6.347A48.627 48.627 0 0112 20.904a48.627 48.627 0 018.232-4.41 60.46 60.46 0 00-.491-6.347m-15.482 0a50.57 50.57 0 00-2.658-.813A59.905 59.905 0 0112 3.493a59.902 59.902 0 0110.399 5.84c-.896.248-1.783.52-2.658.814m-15.482 0A50.697 50.697 0 0112 13.489a50.702 50.702 0 017.74-3.342M6.75 15a.75.75 0 100-1.5.75.75 0 000 1.5zm0 0v-3.675A55.378 55.378 0 0112 8.443m-7.007 11.55A5.981 5.981 0 006.75 15.75v-1.5"/></svg>
                        <div class="card-row-text">Upcoming certifications</div><div class="card-badge">3 soon</div>
                    </div>
                    <div class="card-row">
                        <svg viewBox="0 0 24 24" stroke-width="1.6"><path stroke-linecap="round" stroke-linejoin="round" d="M16.5 10.5V6.75a4.5 4.5 0 10-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 002.25-2.25v-6.75a2.25 2.25 0 00-2.25-2.25H6.75a2.25 2.25 0 00-2.25 2.25v6.75a2.25 2.25 0 002.25 2.25z"/></svg>
                        <div class="card-row-text">Privilege management</div><div class="card-badge">Admin</div>
                    </div>
                    <div class="card-accent">
                        <svg viewBox="0 0 24 24" stroke-width="0.8"><circle cx="12" cy="8" r="4"/><path d="M4 20c0-4 3.6-7 8-7s8 3 8 7"/></svg>
                    </div>
                </div>

            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-3">

                <div class="panel">
                    <div class="panel-title">
                        <svg viewBox="0 0 24 24" stroke-width="1.6"><path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                        Recent activity
                    </div>
                    <div class="activity-row"><div class="act-dot dot-red"></div><div class="act-text">IAP #043 submitted by Dela Cruz</div><div class="act-time">09:14</div></div>
                    <div class="activity-row"><div class="act-dot dot-orange"></div><div class="act-text">AAR #021 pending approval</div><div class="act-time">08:50</div></div>
                    <div class="activity-row"><div class="act-dot dot-red"></div><div class="act-text">PPCR #187 new unread report</div><div class="act-time">08:33</div></div>
                    <div class="activity-row"><div class="act-dot dot-green"></div><div class="act-text">Staff record updated — Santos, M.</div><div class="act-time">08:10</div></div>
                    <div class="activity-row"><div class="act-dot dot-orange"></div><div class="act-text">Weekly log due — Unit Bravo</div><div class="act-time">Yesterday</div></div>
                </div>

                <div class="panel">
                    <div class="panel-title">
                        <svg viewBox="0 0 24 24" stroke-width="1.6"><path stroke-linecap="round" stroke-linejoin="round" d="M14.857 17.082a23.848 23.848 0 005.454-1.31A8.967 8.967 0 0118 9.75V9A6 6 0 006 9v.75a8.967 8.967 0 01-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 01-5.714 0m5.714 0a3 3 0 11-5.714 0"/></svg>
                        Memos &amp; directives
                    </div>
                    <div class="memo-item">
                        <div class="memo-top"><div class="memo-title">Drill Exercise — May 3</div><div class="memo-badge">New</div></div>
                        <div class="memo-sub">Issued by Director Reyes · Apr 19</div>
                    </div>
                    <div class="memo-item">
                        <div class="memo-top"><div class="memo-title">PPCR Submission Protocol Update</div><div class="memo-badge">New</div></div>
                        <div class="memo-sub">Issued by Admin67 · Apr 17</div>
                    </div>
                    <div class="memo-item">
                        <div class="memo-top"><div class="memo-title">Q2 Certification Deadline Reminder</div></div>
                        <div class="memo-sub">Issued by Director Reyes · Apr 14</div>
                    </div>
                    <div class="memo-item">
                        <div class="memo-top"><div class="memo-title">Unit Alpha — Reassignment Notice</div></div>
                        <div class="memo-sub">Issued by Admin67 · Apr 10</div>
                    </div>
                </div>

                <div class="panel">
                    <div class="panel-title">
                        <svg viewBox="0 0 24 24" stroke-width="1.6"><path stroke-linecap="round" stroke-linejoin="round" d="M3 13.125C3 12.504 3.504 12 4.125 12h2.25c.621 0 1.125.504 1.125 1.125v6.75C7.5 20.496 6.996 21 6.375 21h-2.25A1.125 1.125 0 013 19.875v-6.75zM9.75 8.625c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125v11.25c0-.621-.504-1.125-1.125-1.125h-2.25a1.125 1.125 0 01-1.125-1.125V8.625zM16.5 4.125c0-.621.504-1.125 1.125-1.125h2.25C20.496 3 21 3.504 21 4.125v15.75c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 01-1.125-1.125V4.125z"/></svg>
                        Module stats summary
                    </div>
                    <table class="stat-table">
                        <tr><td>Total IAPs filed</td><td>12</td></tr>
                        <tr><td>AARs approved</td><td>8</td></tr>
                        <tr><td>AARs pending</td><td>4</td></tr>
                        <tr><td>PPCR total records</td><td>93</td></tr>
                        <tr><td>PPCR masked</td><td>87</td></tr>
                        <tr><td>Active staff</td><td>34</td></tr>
                        <tr><td>Certifications expiring</td><td>3</td></tr>
                    </table>
                </div>

                <div class="panel">
                    <div class="panel-title">
                        <svg viewBox="0 0 24 24" stroke-width="1.6"><path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5m-9-6h.008v.008H12v-.008zM12 15h.008v.008H12V15zm0 2.25h.008v.008H12v-.008zM9.75 15h.008v.008H9.75V15zm0 2.25h.008v.008H9.75v-.008zM7.5 15h.008v.008H7.5V15zm0 2.25h.008v.008H7.5v-.008zm6.75-4.5h.008v.008h-.008v-.008zm0 2.25h.008v.008h-.008V15zm0 2.25h.008v.008h-.008v-.008zm2.25-4.5h.008v.008H16.5v-.008zm0 2.25h.008v.008H16.5V15z"/></svg>
                        Upcoming deadlines
                    </div>
                    <table class="stat-table">
                        <tr><td>AAR #021 approval</td><td>Apr 22</td></tr>
                        <tr><td>Weekly log — Unit Bravo</td><td>Apr 23</td></tr>
                        <tr><td>Drill exercise</td><td>May 3</td></tr>
                        <tr><td>Santos cert. renewal</td><td>May 10</td></tr>
                        <tr><td>Q2 certification deadline</td><td>Jun 1</td></tr>
                        <tr><td>IAP review — Cycle 2</td><td>Jun 15</td></tr>
                    </table>
                </div>

            </div>
        </main>
    </div>

<?php include 'includes/footer.php'; ?>