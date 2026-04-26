<header class="topbar">
    <div class="flex items-center gap-3">
        <button id="sidebarToggle" class="icon-btn" title="Toggle Sidebar">
            <svg viewBox="0 0 24 24" stroke-width="1.6"><path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5"/></svg>
        </button>
    </div>
    
    <div class="topbar-center font-bold">
        <?php echo isset($pageTitle) ? $pageTitle : 'Dashboard'; ?>
    </div>
    
    <div class="topbar-right">
        <span id="roleBadge" class="text-xs font-bold px-2 py-1 bg-red-800 rounded text-white mr-2 uppercase tracking-wide"></span>
        
        <button onclick="window.location.href='settings.php'" class="icon-btn" title="System Settings">
            <svg viewBox="0 0 24 24" stroke-width="1.6"><path stroke-linecap="round" stroke-linejoin="round" d="M10.341 16.341a4.5 4.5 0 1 1 3.318-3.318M12 20.25c-4.556 0-8.25-3.694-8.25-8.25S7.444 3.75 12 3.75s8.25 3.694 8.25 8.25-3.694 8.25-8.25 8.25z" /><path stroke-linecap="round" stroke-linejoin="round" d="M12 15a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" /></svg>
        </button>

        <button onclick="window.location.href='myprofile.php'" class="icon-btn" title="My Profile">
            <svg viewBox="0 0 24 24" stroke-width="1.6"><path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z"/></svg>
        </button>
        
        <?php if(isset($topbarButton)): ?>
            <?php echo $topbarButton; ?>
        <?php endif; ?>
    </div>
</header>