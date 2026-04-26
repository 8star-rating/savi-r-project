<aside class="sidebar" id="sidebar">
    <div class="sb-logo">
        <div class="sb-logo-title">Savi-R | UDRRMO</div>
    </div>
    <nav class="sb-nav">
        <div class="sb-section-title">General</div>
        <a href="admin.php" id="nav-dashboard" class="sb-item <?php echo (isset($activeMenu) && $activeMenu == 'dashboard') ? 'active' : ''; ?>">
            <svg viewBox="0 0 24 24" stroke-width="1.6"><path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12l8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25"/></svg>
            <span>Dashboard overview</span>
        </a>
        <a href="#" class="sb-item <?php echo (isset($activeMenu) && $activeMenu == 'memos') ? 'active' : ''; ?>">
            <svg viewBox="0 0 24 24" stroke-width="1.6"><path stroke-linecap="round" stroke-linejoin="round" d="M14.857 17.082a23.848 23.848 0 005.454-1.31A8.967 8.967 0 0118 9.75V9A6 6 0 006 9v.75a8.967 8.967 0 01-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 01-5.714 0m5.714 0a3 3 0 11-5.714 0"/></svg>
            <span>Memos &amp; directives</span>
        </a>

        <div class="sb-section-title">Operational Doc &amp; Planning</div>
        <a href="odp.php#iap-section" class="sb-item <?php echo (isset($activeMenu) && $activeMenu == 'odp') ? 'active' : ''; ?>">
            <svg viewBox="0 0 24 24" stroke-width="1.6"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12h3.75M9 15h3.75M9 18h3.75m3 .75H18a2.25 2.25 0 002.25-2.25V6.108c0-1.135-.845-2.098-1.976-2.192a48.424 48.424 0 00-1.123-.08m-5.801 0c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 00.75-.75 2.25 2.25 0 00-.1-.664m-5.8 0A2.251 2.251 0 0113.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m0 0H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V9.375c0-.621-.504-1.125-1.125-1.125H8.25z"/></svg>
            <span id="sb-iap-text">Incident Action Plans</span>
        </a>
        <a href="odp.php#aar-section" class="sb-item <?php echo (isset($activeMenu) && $activeMenu == 'odp') ? 'active' : ''; ?>">
            <svg viewBox="0 0 24 24" stroke-width="1.6"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
            <span id="sb-aar-text">After Activity Reports</span>
        </a>
        <a href="odp.php#wlr-section" class="sb-item <?php echo (isset($activeMenu) && $activeMenu == 'odp') ? 'active' : ''; ?>">
            <svg viewBox="0 0 24 24" stroke-width="1.6"><path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5"/></svg>
            <span id="sb-wlr-text">Weekly Log Reports</span>
        </a>

        <div class="sb-section-title">Confidential Records</div>
        <a href="pprc.php" class="sb-item <?php echo (isset($activeMenu) && $activeMenu == 'pprc') ? 'active' : ''; ?>">
            <svg viewBox="0 0 24 24" stroke-width="1.6"><path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126zM12 15.75h.007v.008H12v-.008z"/></svg>
            <span id="sb-pprc-text">Patient Care Records</span>
        </a>

        <div class="sb-section-title">Personnel</div>
        <a href="personnel.php" class="sb-item <?php echo (isset($activeMenu) && $activeMenu == 'directory') ? 'active' : ''; ?>">
            <svg viewBox="0 0 24 24" stroke-width="1.6"><path stroke-linecap="round" stroke-linejoin="round" d="M15 19.128a9.38 9.38 0 002.625.372 9.337 9.337 0 004.121-.952 4.125 4.125 0 00-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 018.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0111.964-3.07M12 6.375a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zm8.25 2.25a2.625 2.625 0 11-5.25 0 2.625 2.625 0 015.25 0z"/></svg>
            <span>Staff directory</span>
        </a>
    </nav>
</aside>