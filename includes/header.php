<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Savi-R | <?php echo isset($pageTitle) ? $pageTitle : 'System'; ?></title>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" type="text/css" href="assets/output.css">
    
    <style>
        * { box-sizing: border-box; }
        body { font-family: 'Inter', sans-serif; margin: 0; }

        /* Sidebar UI */
        .sidebar { width: 210px; flex-shrink: 0; background: #450a0a; min-height: 100vh; display: flex; flex-direction: column; transition: margin-left 0.3s ease; z-index: 50; }
        .sidebar.collapsed { margin-left: -210px; }
        .sb-logo { padding: 18px 16px 12px; border-bottom: 0.5px solid rgba(255,255,255,0.07); }
        .sb-logo-title { font-size: 15px; font-weight: 700; color: #ffffff; letter-spacing: 0.04em; }
        .sb-nav { flex: 1; overflow-y: auto; padding: 8px 0; }
        .sb-section-title { font-size: 10px; font-weight: 500; color: #fca5a5; letter-spacing: 0.1em; text-transform: uppercase; padding: 12px 14px 4px; }
        .sb-item { display: flex; align-items: center; gap: 8px; padding: 6px 14px; cursor: pointer; transition: background 0.15s; border-left: 2px solid transparent; text-decoration: none; }
        .sb-item:hover { background: rgba(255,255,255,0.06); }
        .sb-item.active { background: rgba(239,68,68,0.2); border-left-color: #ef4444; }
        .sb-item svg { width: 13px; height: 13px; stroke: #fca5a5; fill: none; flex-shrink: 0; }
        .sb-item.active svg { stroke: #ffffff; }
        .sb-item span { font-size: 13px; color: #ffffff; line-height: 1.3; }
        .sb-item.active span { font-weight: 700; color: #ffffff; }

        /* Header UI */
        .topbar { background: #7f1d1d; height: 52px; display: flex; align-items: center; justify-content: space-between; padding: 0 20px; flex-shrink: 0; border-bottom: 0.5px solid rgba(255,255,255,0.1); }
        .topbar-center { font-size: 15px; font-weight: 500; color: #fff; }
        .topbar-right { display: flex; align-items: center; gap: 8px; }
        .icon-btn { width: 32px; height: 32px; border-radius: 50%; border: 0.5px solid rgba(255,255,255,0.2); background: rgba(255,255,255,0.08); display: flex; align-items: center; justify-content: center; cursor: pointer; transition: background 0.15s; }
        .icon-btn:hover { background: rgba(255,255,255,0.15); }
        .icon-btn svg { width: 15px; height: 15px; stroke: #fca5a5; fill: none; }

        /* Main Content & Panels */
        .main-content { flex: 1; overflow-y: auto; padding: 24px; background: #fff9f9; }
        .panel { background: #fff; border: 1px solid #fecaca; border-radius: 12px; padding: 20px; margin-bottom: 24px; box-shadow: 0 2px 4px rgba(0,0,0,0.02); }
        .panel-header { display: flex; justify-content: space-between; align-items: center; margin-bottom: 16px; border-bottom: 1px solid #fef2f2; padding-bottom: 12px; }
        .panel-title { font-size: 17px; font-weight: 700; color: #7f1d1d; display: flex; align-items: center; gap: 8px; }
        .panel-title svg { width: 18px; height: 18px; stroke: #dc2626; fill: none; }
        
        /* Action Buttons */
        .btn-primary { background: #dc2626; color: white; padding: 10px 20px; border-radius: 8px; font-size: 13px; font-weight: 600; cursor: pointer; transition: background 0.15s; border: none; }
        .btn-primary:hover { background: #b91c1c; }
        .btn-secondary { background: #fef2f2; color: #dc2626; padding: 10px 20px; border-radius: 8px; font-size: 13px; font-weight: 600; cursor: pointer; transition: background 0.15s; border: 1px solid #fecaca; }
        .btn-secondary:hover { background: #fee2e2; }
        .action-bar { display: flex; justify-content: flex-end; gap: 12px; margin-top: 32px; padding-top: 20px; border-top: 1px solid #fecaca; }

        /* Form Specific UI */
        .form-row { display: flex; gap: 16px; margin-bottom: 16px; }
        @media (max-width: 768px) { .form-row { flex-direction: column; gap: 12px; } }
        .form-group { flex: 1; display: flex; flex-direction: column; gap: 6px; }
        .form-label { font-size: 12px; font-weight: 600; color: #7f1d1d; text-transform: uppercase; letter-spacing: 0.05em; }
        .form-input, .form-select, .form-textarea { width: 100%; padding: 10px 14px; border: 1px solid #fca5a5; border-radius: 8px; font-size: 13px; font-family: 'Inter', sans-serif; transition: all 0.2s; outline: none; background: #fffafa; color: #450a0a; }
        .form-input:focus, .form-select:focus, .form-textarea:focus { border-color: #dc2626; box-shadow: 0 0 0 3px rgba(220, 38, 38, 0.1); background: #fff; }
        .form-textarea { resize: vertical; min-height: 80px; }
        .checkbox-group { display: flex; flex-wrap: wrap; gap: 16px; margin-top: 8px; }
        .checkbox-label { display: flex; align-items: center; gap: 6px; font-size: 14px; color: #450a0a; cursor: pointer; }
        .checkbox-label input { accent-color: #dc2626; width: 16px; height: 16px; cursor: pointer; }

        /* Data Tables */
        .data-table-wrapper { overflow-x: auto; border-radius: 8px; border: 1px solid #fecaca; }
        .data-table { width: 100%; border-collapse: collapse; text-align: left; }
        .data-table th { background: #7f1d1d; color: white; padding: 12px 16px; font-size: 11px; font-weight: 500; text-transform: uppercase; letter-spacing: 0.05em; }
        .data-table td { padding: 12px 16px; font-size: 13px; border-bottom: 1px solid #fef2f2; color: #450a0a; }
        .data-table tr:last-child td { border-bottom: none; }
        .data-table tr:hover td { background: #fffafa; }
        
        /* Badges & Links */
        .badge { padding: 4px 8px; border-radius: 4px; font-size: 11px; font-weight: 600; text-transform: uppercase; }
        .badge-approved { background: #dcfce7; color: #166534; }
        .badge-pending { background: #fef08a; color: #854d0e; }
        .badge-draft { background: #f3f4f6; color: #374151; }
        .action-link { color: #2563eb; font-weight: 500; cursor: pointer; text-decoration: underline; margin-right: 8px;}
        .action-link:hover { color: #1d4ed8; }

        /* Read-Only Document Styles */
        .doc-header { display: flex; justify-content: space-between; align-items: flex-start; border-bottom: 2px solid #fecaca; padding-bottom: 16px; margin-bottom: 24px; }
        .doc-id { font-size: 15px; font-weight: 700; color: #dc2626; letter-spacing: 0.05em; }
        .doc-title { font-size: 25px; font-weight: 800; color: #450a0a; margin-top: 4px; }
        .data-grid { display: grid; grid-template-columns: repeat(2, 1fr); gap: 24px; margin-bottom: 24px; }
        .data-grid-4 { display: grid; grid-template-columns: repeat(4, 1fr); gap: 16px; margin-bottom: 24px; }
        .data-block { display: flex; flex-direction: column; gap: 4px; }
        .data-label { font-size: 12px; font-weight: 600; color: #9ca3af; text-transform: uppercase; letter-spacing: 0.05em; }
        .data-value { font-size: 15px; color: #1f2937; font-weight: 500; background: #f9fafb; padding: 12px; border-radius: 8px; border: 1px solid #e5e7eb; }
        .data-value-highlight { text-align: center; font-size: 21px; font-weight: 700; color: #dc2626; background: #fef2f2; border-color: #fca5a5; }
        .data-value.full-width { grid-column: span 2; white-space: pre-wrap; }
        .btn-approve { background: #166534; color: white; border: none; }
        .btn-approve:hover { background: #14532d; }

        /* ROLE-BASED DISPLAY LOGIC */
        body.user-view .admin-only { display: none !important; }
        body.admin-view .user-only { display: none !important; }

        /* --- DASHBOARD MODULE CARDS --- */
        .module-card { border-radius: 20px; padding: 18px; display: flex; flex-direction: column; gap: 10px; cursor: pointer; transition: transform 0.15s, filter 0.15s; position: relative; overflow: hidden; }
        .module-card:hover { transform: translateY(-3px); filter: brightness(1.05); }
        .card-red { background: #dc2626; }
        .card-darkred { background: #7f1d1d; }
        .card-lightred { background: #ef4444; }
        .card-label { font-size: 10px; font-weight: 500; letter-spacing: 0.08em; text-transform: uppercase; color: rgba(255,255,255,0.5); }
        .card-title { font-size: 14px; font-weight: 500; color: #fff; line-height: 1.4; }
        .card-divider { height: 0.5px; background: rgba(255,255,255,0.15); }
        .stat-chips { display: flex; gap: 6px; }
        .stat-chip { flex: 1; background: rgba(0,0,0,0.18); border-radius: 10px; padding: 6px 8px; }
        .stat-num { font-size: 19px; font-weight: 500; color: #fff; }
        .stat-lbl { font-size: 10px; color: rgba(255,255,255,0.5); }
        .card-row { display: flex; align-items: center; gap: 6px; }
        .card-row svg { width: 11px; height: 11px; stroke: rgba(255,255,255,0.4); fill: none; flex-shrink: 0; }
        .card-row-text { font-size: 11px; color: rgba(255,255,255,0.65); flex: 1; }
        .card-badge { font-size: 10px; font-weight: 500; padding: 1px 6px; border-radius: 4px; background: rgba(255,255,255,0.12); color: rgba(255,255,255,0.6); }
        .card-accent { position: absolute; bottom: -14px; right: -10px; width: 72px; height: 72px; opacity: 0.08; }
        .card-accent svg { width: 72px; height: 72px; stroke: #fff; fill: none; }

        /* --- DASHBOARD ACTIVITY PANELS --- */
        .activity-row { display: flex; align-items: center; gap: 8px; padding: 6px 0; border-bottom: 1px solid #fef2f2; }
        .activity-row:last-child { border-bottom: none; }
        .act-dot { width: 6px; height: 6px; border-radius: 50%; flex-shrink: 0; }
        .dot-red { background: #ef4444; }
        .dot-orange { background: #f97316; }
        .dot-green { background: #22c55e; }
        .act-text { font-size: 12px; color: #7f1d1d; flex: 1; font-weight: 500; }
        .act-time { font-size: 10px; color: #b91c1c; }
        .memo-item { padding: 6px 0; border-bottom: 1px solid #fef2f2; }
        .memo-item:last-child { border-bottom: none; }
        .memo-top { display: flex; justify-content: space-between; align-items: center; }
        .memo-title { font-size: 12px; font-weight: 600; color: #7f1d1d; }
        .memo-badge { font-size: 9px; padding: 2px 6px; border-radius: 4px; background: #fecaca; color: #7f1d1d; font-weight: 600; }
        .memo-sub { font-size: 11px; color: #b91c1c; margin-top: 4px; }
        .stat-table { width: 100%; border-collapse: collapse; }
        .stat-table td { font-size: 12px; padding: 6px 0; border-bottom: 1px solid #fef2f2; }
        .stat-table td:first-child { color: #9f1239; font-weight: 500; }
        .stat-table td:last-child { text-align: right; color: #7f1d1d; font-weight: 700; }
        .stat-table tr:last-child td { border-bottom: none; }

        /* --- PROFILE LAYOUT --- */
        .profile-header { display: flex; align-items: center; gap: 20px; margin-bottom: 24px; padding-bottom: 24px; border-bottom: 1px solid #fef2f2; }
        .profile-avatar { width: 80px; height: 80px; background: #dc2626; color: white; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 32px; font-weight: 700; }
        .profile-grid { display: grid; grid-template-columns: repeat(auto-fill, minmax(200px, 1fr)); gap: 20px; }
        .profile-field { display: flex; flex-direction: column; gap: 4px; }
        .field-label { font-size: 10px; color: #9ca3af; text-transform: uppercase; font-weight: 600; letter-spacing: 0.05em; }
        .field-value { font-size: 14px; font-weight: 500; color: #450a0a; }
    </style>

    
</head>
<body class="flex h-screen overflow-hidden">