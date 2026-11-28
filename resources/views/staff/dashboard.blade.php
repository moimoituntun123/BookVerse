<!DOCTYPE html>
<html lang="vi">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="color-scheme" content="light">
  <title>Nhân viên | BookVerse</title>
  <style>
    :root{--pink:#dc3c75;--pink-dark:#bd285e;--pink-soft:#fff0f5;--pink-line:#f9d9e5;--bg:#f8f7fa;--white:#fff;--ink:#2e2935;--sub:#7f7a88;--line:#ebe8ef;--green:#278565;--orange:#b76b15;--blue:#4976b8;--shadow:0 8px 28px rgba(35,25,48,.035)}
    *{box-sizing:border-box}html,body{margin:0;min-height:100%;font-family:Inter,"Segoe UI",Arial,sans-serif;color:var(--ink);background:var(--bg);font-size:14px}button,input,select,textarea{font:inherit}button{cursor:pointer}a{color:inherit;text-decoration:none}svg{width:18px;height:18px;fill:none;stroke:currentColor;stroke-width:1.85;stroke-linecap:round;stroke-linejoin:round;flex-shrink:0}button:focus-visible,a:focus-visible,input:focus-visible,select:focus-visible,textarea:focus-visible{outline:3px solid #ffc0d7;outline-offset:2px}
    .app{display:flex;min-height:100vh}.sidebar{position:fixed;left:0;top:0;bottom:0;width:252px;background:white;border-right:1px solid var(--line);z-index:30;display:flex;flex-direction:column}.brand{height:87px;padding:25px 23px;display:flex;align-items:center;gap:10px;border-bottom:1px solid #f2eff3}.brand-icon{width:39px;height:39px;border-radius:12px;display:grid;place-items:center;background:var(--pink);color:#fff}.brand-icon svg{width:22px;height:22px}.brand-title{font-size:21px;font-weight:850;letter-spacing:-.8px;line-height:1.05}.brand-title span{color:var(--pink)}.brand-sub{font-size:9px;color:#a09aa8;letter-spacing:1.45px;font-weight:800;margin-top:5px}.nav{padding:26px 12px;overflow:auto;flex:1}.nav-caption{font-size:10px;font-weight:800;letter-spacing:1.3px;color:#a4a0ac;padding:0 13px 11px}.nav-item{border:0;background:transparent;width:100%;display:flex;align-items:center;gap:12px;text-align:left;padding:12px 13px;color:#686371;border-radius:9px;margin-bottom:5px;font-weight:650;transition:.15s}.nav-item svg{width:19px;height:19px;color:#898391}.nav-item:hover{background:#fcf6f9;color:var(--pink)}.nav-item.active{background:var(--pink-soft);color:var(--pink);font-weight:800}.nav-item.active svg{color:var(--pink)}.nav-count{margin-left:auto;font-size:11px;border-radius:6px;min-width:21px;padding:2px 5px;text-align:center;background:#f5eff2;color:#a35b75}.nav-item.active .nav-count{background:#f9d9e7;color:#b72b60}.sidebar-bottom{padding:18px 14px;border-top:1px solid var(--line)}.side-info{padding:12px;border:1px solid #f3e1e9;border-radius:10px;background:#fff9fb;display:flex;gap:9px;align-items:flex-start;font-size:11px;color:#8f7a85;line-height:1.7}.side-info svg{color:var(--pink);width:16px}.sidebar-footer{font-size:10px;color:#b0abb5;text-align:center;padding-top:15px}
    .main{margin-left:252px;min-width:0;flex:1}.topbar{height:76px;background:white;border-bottom:1px solid var(--line);display:flex;align-items:center;justify-content:space-between;gap:20px;padding:0 35px}.top-left,.top-right{display:flex;align-items:center;gap:16px}.breadcrumb{color:#aaa4b0;font-size:12px}.breadcrumb b{color:#534c5d}.searchbox{height:37px;display:flex;align-items:center;gap:9px;border:1px solid #ede9ee;background:#faf9fb;padding:0 12px;border-radius:9px;width:min(300px,30vw);color:#9994a0}.searchbox input{border:0;outline:none;background:transparent;width:100%;min-width:0;font-size:12px;color:var(--ink)}.searchbox svg{width:16px}.mini-icon{background:transparent;border:1px solid var(--line);height:36px;width:36px;border-radius:9px;display:grid;place-items:center;color:#77717f}.staff-profile{display:flex;align-items:center;gap:9px;border-left:1px solid var(--line);padding-left:17px}.avatar{width:36px;height:36px;display:grid;place-items:center;background:#ffe0eb;color:#ae2e63;border-radius:50%;font-size:12px;font-weight:800}.profile-name{font-size:12px;font-weight:800}.profile-role{font-size:10px;color:#97919f;margin-top:3px}.hamburger{display:none}.workspace{max-width:1530px;margin:0 auto;padding:33px 35px 55px}.heading-row{display:flex;justify-content:space-between;align-items:center;gap:16px;margin-bottom:25px}.eyebrow{font-size:10px;color:var(--pink);letter-spacing:1.3px;font-weight:800;text-transform:uppercase;margin-bottom:9px}.title{font-size:27px;line-height:1.25;font-weight:850;letter-spacing:-.75px;margin:0}.subtitle{font-size:12px;color:#898390;line-height:1.65;margin:8px 0 0}.heading-actions,.flex-actions{display:flex;gap:9px;align-items:center;flex-wrap:wrap}.btn{border:1px solid var(--line);border-radius:9px;padding:10px 13px;display:inline-flex;align-items:center;justify-content:center;gap:7px;font-weight:750;font-size:12px;background:#fff;color:#5d5563;white-space:nowrap;min-height:37px;transition:.15s}.btn:hover{border-color:#edb9ce;background:#fff7fa}.btn svg{width:16px;height:16px}.btn.primary{background:var(--pink);border-color:var(--pink);color:white}.btn.primary:hover{background:var(--pink-dark)}.btn.soft{background:#fff1f6;color:var(--pink);border-color:#ffe2ed}.btn.danger{color:#b23c50;background:#fff4f5;border-color:#ffdde2}.btn.success{color:var(--green);background:#effbf5;border-color:#daf2e6}.btn.sm{min-height:29px;padding:6px 10px;font-size:11px;border-radius:7px}.btn.icon-only{padding:9px}.btn:disabled{opacity:.55;cursor:not-allowed}.surface{background:white;border:1px solid #eeebf0;border-radius:13px;box-shadow:var(--shadow)}.surface-pad{padding:20px 22px}.stat-grid{display:grid;grid-template-columns:repeat(4,minmax(0,1fr));gap:15px;margin-bottom:21px}.stat{padding:19px 20px 18px;min-width:0}.stat-top{display:flex;align-items:center;justify-content:space-between;gap:8px}.stat-label{color:#7d7784;font-size:12px;font-weight:650}.stat-icon{height:35px;width:35px;display:grid;place-items:center;border-radius:10px}.stat-icon.pink{background:#ffecf3;color:var(--pink)}.stat-icon.amber{background:#fff3e1;color:var(--orange)}.stat-icon.green{background:#eaf8f2;color:var(--green)}.stat-icon.blue{background:#eaf3ff;color:var(--blue)}.stat-num{font-size:30px;font-weight:850;letter-spacing:-1px;margin-top:8px;line-height:1.1}.stat-desc{font-size:11px;color:#97919f;margin-top:9px}.stat-desc .hot{color:var(--pink);font-weight:800}.dashboard-grid{display:grid;grid-template-columns:minmax(0,1.6fr) minmax(310px,1fr);gap:18px;margin-bottom:20px}.section-header{display:flex;align-items:flex-start;justify-content:space-between;gap:10px;margin-bottom:16px}.section-title{font-weight:850;font-size:16px;letter-spacing:-.2px;margin:0}.section-desc{font-size:11px;color:#9b95a2;margin:6px 0 0}.subtle-link{font-size:11px;color:var(--pink);font-weight:800;border:0;background:transparent;display:inline-flex;align-items:center;gap:4px;white-space:nowrap;padding:5px 0}.subtle-link svg{width:13px;height:13px}.table-scroll{overflow-x:auto}.data-table{width:100%;border-collapse:collapse;text-align:left;font-size:12px}.data-table th{font-size:10px;text-transform:uppercase;letter-spacing:.55px;color:#a09aa7;font-weight:800;background:#fcfafc;padding:11px 13px;border-bottom:1px solid var(--line);white-space:nowrap}.data-table td{padding:13px;border-bottom:1px solid #f2eff3;vertical-align:middle}.data-table tbody tr:last-child td{border-bottom:0}.data-table tbody tr:hover{background:#fffafd}.text-mono{font-family:ui-monospace,SFMono-Regular,Consolas,monospace;font-size:11px;letter-spacing:-.1px}.main-text{color:#403946;font-weight:750}.secondary-text{color:#a09aa5;font-size:11px;margin-top:4px}.muted{color:#928d99}.pink{color:var(--pink)}.text-right{text-align:right}.text-center{text-align:center}.badge{display:inline-flex;align-items:center;gap:5px;white-space:nowrap;padding:5px 8px;border-radius:6px;font-weight:750;font-size:10px;background:#f2f0f4;color:#77717d}.badge:before{content:"";display:inline-block;width:5px;height:5px;border-radius:50%;background:currentColor}.badge.pink{color:#c03268;background:#fff0f5}.badge.orange{color:#a8711a;background:#fff6e7}.badge.green{color:#26815e;background:#eaf8f1}.badge.blue{color:#4173b9;background:#edf3ff}.badge.red{color:#b83f50;background:#fff0f1}.badge.grey{color:#7f7b86;background:#f4f3f5}.quick-list{display:grid;grid-template-columns:repeat(2,minmax(0,1fr));gap:9px}.quick-tile{border:1px solid var(--line);border-radius:10px;background:#fff;padding:15px 12px;text-align:left;display:flex;align-items:center;gap:10px;color:#5b5362;min-height:77px}.quick-tile:hover{border-color:var(--pink-line);background:#fff9fc}.quick-tile .tile-icon{width:35px;height:35px;border-radius:9px;background:#fff0f6;display:grid;place-items:center;color:var(--pink)}.quick-tile strong{font-size:11px;display:block}.quick-tile small{font-size:10px;color:#9e97a3;display:block;margin-top:4px}.warning-box{display:flex;align-items:center;gap:12px;border-radius:9px;background:#fff8f0;border:1px solid #f7e5c7;padding:13px 15px;margin-top:16px;color:#986121;font-size:11px;line-height:1.6}.warning-box svg{color:#ca8c32}.mini-bars{display:flex;align-items:end;height:48px;gap:5px}.mini-bars i{display:block;width:10px;background:#f8c3d6;border-radius:3px 3px 0 0}.mini-bars i:nth-child(5),.mini-bars i:nth-child(7){background:#e14880}.divider{height:1px;background:var(--line);margin:19px 0}.list-row{display:flex;align-items:center;justify-content:space-between;gap:12px;padding:12px 0;border-bottom:1px solid #f2eff3}.list-row:last-child{border:0}.book-thumb{height:44px;width:34px;border-radius:4px;display:grid;place-items:center;color:#fff;font-weight:800;font-size:9px;flex-shrink:0;box-shadow:2px 3px 7px #42304822;text-align:center;padding:3px}.book-thumb svg{height:18px;width:18px}.book-line{display:flex;align-items:center;gap:10px;min-width:0}.book-line .main-text{font-size:12px}.book-line .secondary-text{font-size:10px}.book-mini{display:flex;align-items:center;gap:10px}.progress-rail{height:5px;background:#f4eaf0;overflow:hidden;border-radius:9px;margin-top:8px}.progress-fill{height:100%;background:var(--pink);border-radius:9px}.warning-panel{background:#fffbfc}.activity-list{display:grid;gap:3px}.activity{display:flex;gap:11px;align-items:flex-start;padding:10px 0;border-bottom:1px solid #f2eff3}.activity:last-child{border:0}.activity-dot{width:30px;height:30px;border-radius:50%;display:grid;place-items:center;background:#f9eff5;color:var(--pink);flex-shrink:0}.activity-dot svg{width:15px;height:15px}.activity p{margin:0;font-size:11px;line-height:1.65;color:#645e6a}.activity time{font-size:10px;color:#a19ca7;margin-top:4px;display:block}.toolbar{display:flex;gap:9px;align-items:center;justify-content:space-between;margin-bottom:15px;flex-wrap:wrap}.toolbar-left{display:flex;gap:8px;align-items:center;flex-wrap:wrap}.field{border:1px solid var(--line);border-radius:9px;padding:10px 11px;background:white;color:#514a58;outline:none;min-height:39px;max-width:100%}.field:focus{border-color:#e9a8bf;box-shadow:0 0 0 3px #fff0f5}.field.search{min-width:235px}.field.select{min-width:150px}.table-tag{font-size:11px;color:#94909c}.empty{border:1px dashed #e5dfe8;border-radius:10px;padding:35px 15px;text-align:center;color:#99929e}.empty svg{width:30px;height:30px;color:#d2bac6}.empty b{display:block;color:#655d69;margin-top:9px}.empty p{font-size:12px}.inline-actions{display:flex;align-items:center;gap:6px;flex-wrap:wrap}.metrics-line{display:flex;gap:10px;align-items:center;flex-wrap:wrap;margin-bottom:17px}.metric-pill{background:white;border:1px solid var(--line);padding:8px 11px;border-radius:8px;color:#837d89;font-size:11px}.metric-pill strong{color:#4a4250}.tab-filter{display:flex;gap:4px;padding:4px;background:#f3f1f5;border-radius:10px;width:max-content;max-width:100%;overflow:auto}.tab-filter button{border:0;border-radius:7px;background:transparent;color:#88818f;font-size:11px;font-weight:700;padding:8px 12px;white-space:nowrap}.tab-filter button.active{background:white;box-shadow:0 1px 3px #3328391c;color:var(--pink)}.note{font-size:11px;color:#9c96a2;line-height:1.6;margin-top:14px}.mini-summary{display:flex;align-items:center;justify-content:space-between;gap:10px;margin-bottom:15px}.stock-low{color:#c1535a;font-weight:800}.stock-ok{color:#298262;font-weight:800}.stock-medium{color:#bf7c23;font-weight:800}.info-banner{display:flex;gap:10px;align-items:flex-start;border:1px solid #f5d4e0;background:#fff7fa;color:#9c4f6e;padding:12px 15px;border-radius:9px;font-size:11px;line-height:1.65;margin-bottom:17px}.info-banner svg{color:var(--pink)}.footer{margin:24px 0;text-align:center;color:#b0aab5;font-size:10px}
    .overlay{position:fixed;inset:0;background:rgba(28,20,33,.42);z-index:40;display:grid;place-items:center;padding:17px;overflow:auto}.modal{width:min(590px,100%);max-height:min(90vh,950px);overflow:auto;background:white;border-radius:15px;box-shadow:0 25px 90px #23152933}.modal.wide{width:min(760px,100%)}.modal-top{display:flex;align-items:flex-start;justify-content:space-between;gap:12px;padding:20px 24px;border-bottom:1px solid var(--line)}.modal-top h2{margin:0;font-size:17px;font-weight:850}.modal-top p{margin:7px 0 0;font-size:11px;color:#99939f;line-height:1.5}.modal-body{padding:22px 24px}.modal-foot{border-top:1px solid var(--line);padding:15px 24px;display:flex;gap:9px;justify-content:flex-end}.form-grid{display:grid;grid-template-columns:repeat(2,minmax(0,1fr));gap:15px}.form-group{display:flex;flex-direction:column;gap:6px;min-width:0}.form-group.wide{grid-column:1/-1}.form-group label{font-size:11px;font-weight:750;color:#665e6b}.form-group input,.form-group select,.form-group textarea{border:1px solid #e7e3ea;border-radius:8px;padding:10px 11px;min-height:39px;outline:0;width:100%;background:#fff;color:#3a343e}.form-group textarea{resize:vertical;min-height:65px}.form-group input:focus,.form-group select:focus,.form-group textarea:focus{border-color:#e2a6bc;box-shadow:0 0 0 3px #fff1f5}.form-hint{font-size:10px;color:#a29ba6;line-height:1.55}.detail-grid{display:grid;grid-template-columns:repeat(2,minmax(0,1fr));gap:15px}.detail-cell span{display:block;font-size:10px;color:#9c95a0;margin-bottom:5px}.detail-cell strong{font-size:12px;color:#514955}.detail-section{margin-top:21px;padding-top:17px;border-top:1px solid var(--line)}.detail-section h3{margin:0 0 11px;font-size:13px}.detail-book{display:flex;align-items:center;justify-content:space-between;gap:10px;padding:10px 0;border-bottom:1px solid #f4f1f5;font-size:12px}.detail-book:last-child{border:0}.slip{border:1px dashed #bbb2bd;padding:20px;border-radius:5px;color:#4b4450}.slip h3{text-align:center;font-size:18px;margin:8px 0 20px}.slip p{font-size:12px;line-height:1.7}.toast-wrap{position:fixed;right:22px;bottom:20px;z-index:80;display:grid;gap:8px;max-width:min(400px,calc(100vw - 30px))}.toast{background:#312b37;color:white;border-radius:10px;box-shadow:0 10px 30px #342c3838;padding:13px 16px;display:flex;gap:10px;align-items:flex-start;font-size:12px;line-height:1.55}.toast svg{color:#ffd0e1;width:16px}.mobile-shade{display:none}
    @media(max-width:1250px){.workspace{padding:27px 24px}.topbar{padding:0 24px}.stat{padding:17px 15px}.dashboard-grid{grid-template-columns:minmax(0,1.3fr) minmax(285px,1fr)}}
    @media(max-width:1050px){.sidebar{width:228px}.main{margin-left:228px}.stat-grid{grid-template-columns:repeat(2,minmax(0,1fr))}.dashboard-grid{grid-template-columns:1fr}.dashboard-grid>.surface{min-width:0}}
    @media(max-width:750px){.sidebar{transform:translateX(-100%);transition:transform .2s}.sidebar.open{transform:translateX(0)}.mobile-shade.visible{display:block;position:fixed;inset:0;background:#211b2855;z-index:29}.main{margin-left:0}.hamburger{display:grid}.topbar{height:64px;padding:0 16px}.workspace{padding:25px 15px 40px}.breadcrumb{display:none}.searchbox{width:min(220px,35vw)}.top-left{gap:9px}.top-right{gap:8px}.staff-profile{padding-left:9px}.profile-text{display:none}.heading-row{align-items:flex-start}.title{font-size:23px}.heading-actions{justify-content:flex-end}.stat-grid{gap:10px}.stat-num{font-size:25px}.stat{padding:15px 13px}.stat-label{font-size:11px}.surface-pad{padding:17px 14px}.form-grid{grid-template-columns:1fr}.quick-list{gap:8px}}
    @media(max-width:480px){.searchbox{display:none}.heading-row{flex-direction:column}.heading-actions{width:100%}.heading-actions .btn{flex:1}.stat-grid{grid-template-columns:repeat(2,minmax(0,1fr))}.stat-icon{height:29px;width:29px}.quick-list{grid-template-columns:1fr 1fr}.quick-tile{padding:10px 8px;gap:6px}.quick-tile .tile-icon{height:29px;width:29px}.quick-tile strong{font-size:10px}.quick-tile small{font-size:9px}.detail-grid{grid-template-columns:1fr 1fr}.modal-body{padding:17px}.modal-top,.modal-foot{padding:16px}}
    @media print{body *{visibility:hidden!important}.modal.slip-modal,.modal.slip-modal *{visibility:visible!important}.modal.slip-modal{position:absolute;left:0;top:0;width:100%;max-height:none;box-shadow:none}.modal.slip-modal .modal-top,.modal.slip-modal .modal-foot{display:none!important}.modal.slip-modal .slip{border:0}.overlay{background:white;position:static;padding:0}}
  </style>
</head>
<body>
<svg aria-hidden="true" style="position:absolute;width:0;height:0;overflow:hidden" xmlns="http://www.w3.org/2000/svg">
  <symbol id="i-book" viewBox="0 0 24 24"><path d="M12 7c-3-2-7-2-10-1v13c4-1 7-1 10 1 3-2 6-2 10-1V6c-4-1-7-1-10 1Z"/><path d="M12 7v13"/></symbol>
  <symbol id="i-dashboard" viewBox="0 0 24 24"><rect x="3" y="3" width="7" height="7" rx="1.5"/><rect x="14" y="3" width="7" height="7" rx="1.5"/><rect x="3" y="14" width="7" height="7" rx="1.5"/><rect x="14" y="14" width="7" height="7" rx="1.5"/></symbol>
  <symbol id="i-books" viewBox="0 0 24 24"><path d="M4 19V5a2 2 0 0 1 2-2h13v16H6a2 2 0 0 0 0 4h13"/><path d="M8 7h7M8 11h7"/></symbol>
  <symbol id="i-box" viewBox="0 0 24 24"><path d="m3 7 9-4 9 4-9 4-9-4Z"/><path d="M3 7v10l9 4 9-4V7M12 11v10"/></symbol>
  <symbol id="i-layers" viewBox="0 0 24 24"><path d="m12 3 9 5-9 5-9-5 9-5ZM3 12l9 5 9-5M3 16l9 5 9-5"/></symbol>
  <symbol id="i-warehouse" viewBox="0 0 24 24"><path d="M3 10 12 3l9 7v11H3V10Z"/><path d="M9 21v-8h6v8M3 10h18"/></symbol>
  <symbol id="i-orders" viewBox="0 0 24 24"><rect x="5" y="4" width="14" height="17" rx="2"/><path d="M9 4.5V3h6v1.5M9 10h6M9 14h6M9 18h3"/></symbol>
  <symbol id="i-return" viewBox="0 0 24 24"><path d="M9 14 4 9l5-5"/><path d="M4 9h10a6 6 0 0 1 0 12h-3"/></symbol>
  <symbol id="i-truck" viewBox="0 0 24 24"><path d="M3 6h12v12H3zM15 10h4l3 4v4h-7z"/><circle cx="7" cy="19" r="2"/><circle cx="18" cy="19" r="2"/></symbol>
  <symbol id="i-search" viewBox="0 0 24 24"><circle cx="10.5" cy="10.5" r="7"/><path d="m16 16 5 5"/></symbol>
  <symbol id="i-bell" viewBox="0 0 24 24"><path d="M18 8a6 6 0 0 0-12 0c0 7-3 8-3 9h18c0-1-3-2-3-9M10 21h4"/></symbol>
  <symbol id="i-plus" viewBox="0 0 24 24"><path d="M12 5v14M5 12h14"/></symbol>
  <symbol id="i-arrow" viewBox="0 0 24 24"><path d="M5 12h14m-6-6 6 6-6 6"/></symbol>
  <symbol id="i-chevron" viewBox="0 0 24 24"><path d="m9 6 6 6-6 6"/></symbol>
  <symbol id="i-alert" viewBox="0 0 24 24"><path d="m12 3 10 18H2L12 3Z"/><path d="M12 9v5M12 18h.01"/></symbol>
  <symbol id="i-check" viewBox="0 0 24 24"><path d="m5 12 5 5L20 7"/></symbol>
  <symbol id="i-check-circle" viewBox="0 0 24 24"><circle cx="12" cy="12" r="9"/><path d="m8 12 3 3 5-6"/></symbol>
  <symbol id="i-close" viewBox="0 0 24 24"><path d="M18 6 6 18M6 6l12 12"/></symbol>
  <symbol id="i-menu" viewBox="0 0 24 24"><path d="M4 7h16M4 12h16M4 17h16"/></symbol>
  <symbol id="i-edit" viewBox="0 0 24 24"><path d="m4 16 11-11 4 4-11 11-5 1 1-5ZM13 7l4 4"/></symbol>
  <symbol id="i-eye" viewBox="0 0 24 24"><path d="M2 12s4-7 10-7 10 7 10 7-4 7-10 7S2 12 2 12Z"/><circle cx="12" cy="12" r="3"/></symbol>
  <symbol id="i-up" viewBox="0 0 24 24"><path d="M12 20V4m-6 6 6-6 6 6"/></symbol>
  <symbol id="i-down" viewBox="0 0 24 24"><path d="M12 4v16m-6-6 6 6 6-6"/></symbol>
  <symbol id="i-calendar" viewBox="0 0 24 24"><rect x="3" y="5" width="18" height="16" rx="2"/><path d="M7 3v4M17 3v4M3 10h18"/></symbol>
  <symbol id="i-printer" viewBox="0 0 24 24"><path d="M6 9V3h12v6M6 18H4a2 2 0 0 1-2-2v-5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2h-2"/><path d="M6 15h12v7H6zM18 12h1"/></symbol>
  <symbol id="i-filter" viewBox="0 0 24 24"><path d="M4 5h16l-6.5 7.5V20l-3 1v-8.5L4 5Z"/></symbol>
  <symbol id="i-info" viewBox="0 0 24 24"><circle cx="12" cy="12" r="9"/><path d="M12 11v5M12 7h.01"/></symbol>
  <symbol id="i-clock" viewBox="0 0 24 24"><circle cx="12" cy="12" r="9"/><path d="M12 7v5l3 2"/></symbol>
  <symbol id="i-file" viewBox="0 0 24 24"><path d="M6 3h8l4 4v14H6zM14 3v5h4M9 13h6M9 17h6"/></symbol>
</svg>
<div class="mobile-shade" id="mobile-shade"></div>
<div class="app">
  <aside class="sidebar" id="sidebar">
    <div class="brand"><div class="brand-icon"><svg><use href="#i-book"/></svg></div><div><div class="brand-title">Book<span>Verse</span></div><div class="brand-sub">STAFF WORKSPACE</div></div></div>
    <nav class="nav" aria-label="Điều hướng nhân viên">
      <div class="nav-caption">KHÔNG GIAN LÀM VIỆC</div>
      <button class="nav-item active" data-view="overview"><svg><use href="#i-dashboard"/></svg> Tổng quan</button>
      <button class="nav-item" data-view="catalog"><svg><use href="#i-books"/></svg> Đầu sách &amp; biến thể</button>
      <button class="nav-item" data-view="warehouse"><svg><use href="#i-warehouse"/></svg> Tồn kho &amp; nhập/xuất <span class="nav-count" id="nav-stock">0</span></button>
      <div class="nav-caption" style="margin-top:24px">VẬN HÀNH ĐƠN HÀNG</div>
      <button class="nav-item" data-view="orders"><svg><use href="#i-orders"/></svg> Xử lý đơn hàng <span class="nav-count" id="nav-orders">0</span></button>
      <button class="nav-item" data-view="delivery"><svg><use href="#i-truck"/></svg> Phiếu giao hàng</button>
      <button class="nav-item" data-view="returns"><svg><use href="#i-return"/></svg> Hủy / hoàn hàng <span class="nav-count" id="nav-returns">0</span></button>
    </nav>
    <div class="sidebar-bottom"><div class="sidebar-footer">BookVerse • Giao diện nhân viên</div></div>
  </aside>
  <div class="main">
    <header class="topbar">
      <div class="top-left"><button class="mini-icon hamburger" id="menu-toggle" aria-label="Mở menu"><svg><use href="#i-menu"/></svg></button><div class="breadcrumb">BookVerse <span style="padding:0 7px">/</span> <b id="crumb">Tổng quan</b></div></div>
      <div class="top-right"><label class="searchbox"><svg><use href="#i-search"/></svg><input id="global-search" type="search" placeholder="Tìm sách, SKU, mã đơn..." aria-label="Tìm kiếm toàn hệ thống" /></label><button class="mini-icon" id="notification-btn" title="Xem việc cần xử lý" aria-label="Xem việc cần xử lý"><svg><use href="#i-bell"/></svg></button><div class="staff-profile"><div class="avatar">NT</div><div class="profile-text"><div class="profile-name">Nguyen Manh Tung</div><div class="profile-role">Nhân viên</div></div></div><form action="{{ route('logout') }}" method="POST">@csrf<button type="submit" class="btn sm danger">Đăng xuất</button></form></div>
    </header>
    <main class="workspace" id="workspace"><div id="heading"></div><div id="page-body"></div><div class="footer">© BookVerse · Giao diện quản lý dành cho nhân viên</div></main>
  </div>
</div>
<div id="modal-root"></div><div class="toast-wrap" id="toast-wrap" aria-live="polite"></div>
<script>
(() => {
'use strict';
const el = (id) => document.getElementById(id);
const icon = (key) => `<svg aria-hidden="true"><use href="#i-${key}"></use></svg>`;
const esc = (value) => String(value ?? '').replace(/[&<>"']/g,c=>({'&':'&amp;','<':'&lt;','>':'&gt;','"':'&quot;',"'":'&#39;'}[c]));
const money = (amount) => Number(amount).toLocaleString('vi-VN') + 'đ';
const today = () => new Date().toLocaleDateString('vi-VN',{day:'2-digit',month:'2-digit',year:'numeric'});
const stamp = () => new Date().toLocaleString('vi-VN',{hour:'2-digit',minute:'2-digit',day:'2-digit',month:'2-digit'});
const colors = ['#d97e87','#7587bd','#9a91c9','#b4a087','#70a697','#ac7ea3'];
const books = [
  {id:'S001',title:'Nhà giả kim',author:'Paulo Coelho',publisher:'NXB Hội Nhà Văn',category:'Văn học'},
  {id:'S002',title:'Cây cam ngọt của tôi',author:'José Mauro de Vasconcelos',publisher:'NXB Hội Nhà Văn',category:'Văn học'},
  {id:'S003',title:'Thói quen nguyên tử',author:'James Clear',publisher:'NXB Thế Giới',category:'Kỹ năng'},
  {id:'S004',title:'Thám tử lừng danh Conan',author:'Gosho Aoyama',publisher:'NXB Kim Đồng',category:'Truyện tranh'},
  {id:'S005',title:'Đắc nhân tâm',author:'Dale Carnegie',publisher:'NXB Tổng Hợp',category:'Kỹ năng'}
];
// ISBN ở đây chỉ dùng để minh họa giao diện, không phải dữ liệu xuất bản đã xác minh.
const variants = [
  {id:'BT001',bookId:'S001',sku:'BV-NGK-M-2024',isbn:'9786040000019',cover:'Bìa mềm',volume:1,year:2024,price:89000,stock:52,reserved:7,min:12},
  {id:'BT002',bookId:'S001',sku:'BV-NGK-C-2024',isbn:'9786040000026',cover:'Bìa cứng',volume:1,year:2024,price:148000,stock:8,reserved:3,min:10},
  {id:'BT003',bookId:'S002',sku:'BV-CCN-M-2023',isbn:'9786040000033',cover:'Bìa mềm',volume:1,year:2023,price:105000,stock:31,reserved:5,min:10},
  {id:'BT004',bookId:'S003',sku:'BV-TQNT-M-2025',isbn:'9786040000040',cover:'Bìa mềm',volume:1,year:2025,price:169000,stock:6,reserved:2,min:10},
  {id:'BT005',bookId:'S004',sku:'BV-CONAN-T03-M',isbn:'9786040000057',cover:'Bìa mềm',volume:3,year:2024,price:25000,stock:22,reserved:3,min:10},
  {id:'BT006',bookId:'S004',sku:'BV-CONAN-T04-M',isbn:'9786040000064',cover:'Bìa mềm',volume:4,year:2024,price:25000,stock:5,reserved:1,min:10},
  {id:'BT007',bookId:'S005',sku:'BV-DNT-M-2024',isbn:'9786040000071',cover:'Bìa mềm',volume:1,year:2024,price:92000,stock:27,reserved:4,min:10}
];
const orders = [
  {id:'DH-1045',customer:'Khách hàng 01',phone:'09xx xxx 101',address:'Cầu Giấy, Hà Nội',items:[{id:'BT001',qty:2}],payment:'COD',total:178000,status:'pending',request:null,created:'08:45 · '+today()},
  {id:'DH-1044',customer:'Khách hàng 02',phone:'09xx xxx 102',address:'Thanh Xuân, Hà Nội',items:[{id:'BT003',qty:1},{id:'BT005',qty:2}],payment:'VNPAY',total:155000,status:'pending',request:null,created:'08:25 · '+today()},
  {id:'DH-1043',customer:'Khách hàng 03',phone:'09xx xxx 103',address:'Hai Bà Trưng, Hà Nội',items:[{id:'BT004',qty:1}],payment:'MoMo',total:169000,status:'confirmed',request:null,created:'Hôm qua'},
  {id:'DH-1042',customer:'Khách hàng 04',phone:'09xx xxx 104',address:'Nam Từ Liêm, Hà Nội',items:[{id:'BT006',qty:1}],payment:'COD',total:25000,status:'packed',request:null,created:'Hôm qua'},
  {id:'DH-1041',customer:'Khách hàng 05',phone:'09xx xxx 105',address:'Hà Đông, Hà Nội',items:[{id:'BT002',qty:1}],payment:'VNPAY',total:148000,status:'shipping',request:null,created:'30/10/2026'},
  {id:'DH-1040',customer:'Khách hàng 06',phone:'09xx xxx 106',address:'Long Biên, Hà Nội',items:[{id:'BT007',qty:1}],payment:'COD',total:92000,status:'pending',request:'cancel',created:'Hôm qua',reason:'Đặt nhầm sản phẩm'},
  {id:'DH-1039',customer:'Khách hàng 07',phone:'09xx xxx 107',address:'Hoàng Mai, Hà Nội',items:[{id:'BT005',qty:1}],payment:'VNPAY',total:25000,status:'completed',request:'return',created:'29/10/2026',reason:'Sản phẩm bị lỗi in'},
  {id:'DH-1038',customer:'Khách hàng 08',phone:'09xx xxx 108',address:'Đống Đa, Hà Nội',items:[{id:'BT001',qty:1}],payment:'COD',total:89000,status:'completed',request:null,created:'28/10/2026'}
];
const slips = [{id:'PG-0038',orderId:'DH-1041',carrier:'Giao hàng nhanh',tracking:'GHN-DEMO-0038',date:'30/10/2026'}];
const movements = [{id:'NK-020',variantId:'BT001',type:'in',qty:25,note:'Nhập bổ sung theo kế hoạch',date:'31/10/2026'},{id:'XK-019',variantId:'BT004',type:'out',qty:2,note:'Xuất điều chỉnh nội bộ',date:'30/10/2026'}];
const activities = [
  {text:'Đơn <b>DH-1043</b> đã được xác nhận.',date:'09:10 · Hôm nay',icon:'check-circle'},
  {text:'Kho vừa nhập <b>25 cuốn Nhà giả kim</b>.',date:'16:30 · Hôm qua',icon:'down'},
  {text:'Có yêu cầu hoàn hàng của <b>DH-1039</b>.',date:'15:12 · Hôm qua',icon:'return'}
];
let view='overview',search='',filter='all',stockFilter='all',orderFilter='all',modal=null;
const bookById = id=> books.find(b=>b.id===id);
const varById = id=> variants.find(v=>v.id===id);
const orderById = id=> orders.find(o=>o.id===id);
const available = v=>v.stock-v.reserved;
const low = v=>available(v)<=v.min;
const numberLow = ()=> variants.filter(low).length;
const numberPending = ()=> orders.filter(o=>o.status==='pending'&&!o.request).length;
const numberReturns = ()=>orders.filter(o=>o.request).length;
const productName = v=> {let b=bookById(v.bookId);return (b?b.title:'Đầu sách không xác định')+(v.volume>1||b?.id==='S004'?` · Tập ${v.volume}`:'');};
const bookThumb = b=>`<span class="book-thumb" style="background:${colors[Math.max(0,books.indexOf(b))%colors.length]}">${icon('book')}</span>`;
const statusText = s=>({pending:'Chờ xác nhận',confirmed:'Đã xác nhận',packed:'Đã đóng gói',shipping:'Đang giao',completed:'Hoàn thành',canceled:'Đã hủy',returned:'Đã hoàn'})[s]||s;
const statusBadge = s=>`<span class="badge ${({pending:'orange',confirmed:'blue',packed:'blue',shipping:'pink',completed:'green',canceled:'red',returned:'grey'})[s]}">${statusText(s)}</span>`;
function heading(title,description,actions=''){
  el('heading').innerHTML=`<div class="heading-row"><div><div class="eyebrow">BOOKVERSE / QUẢN LÝ NỘI BỘ</div><h1 class="title">${title}</h1><p class="subtitle">${description}</p></div><div class="heading-actions">${actions}</div></div>`;
  el('crumb').textContent=title;
}
function updateCounts(){el('nav-stock').textContent=numberLow();el('nav-orders').textContent=numberPending();el('nav-returns').textContent=numberReturns();}
function stat(label,value,caption,color,ico){return `<section class="surface stat"><div class="stat-top"><span class="stat-label">${label}</span><span class="stat-icon ${color}">${icon(ico)}</span></div><div class="stat-num">${value}</div><div class="stat-desc">${caption}</div></section>`}
function overview(){
 const required=orders.filter(o=>['pending','confirmed','packed'].includes(o.status)&&!o.request);
 const lowArr=variants.filter(low).slice(0,4);
 heading('Tổng quan công việc',`Chào mừng trở lại! Đây là tình hình vận hành ngày ${today()}.`,`<button class="btn" data-view="warehouse">${icon('warehouse')} Xem tồn kho</button><button class="btn primary" data-view="orders">${icon('orders')} Xử lý đơn</button>`);
 el('page-body').innerHTML=`
   <div class="stat-grid">${stat('Đầu sách',books.length,'Các tựa sách đang quản lý','pink','books')}${stat('Đơn chờ xác nhận',numberPending(),'<span class="hot">Cần xử lý sớm</span>','amber','orders')}${stat('Biến thể tồn thấp',numberLow(),'Dựa trên lượng khả dụng','blue','warehouse')}${stat('Yêu cầu hủy / hoàn',numberReturns(),'Đang chờ phản hồi','green','return')}</div>
   <div class="dashboard-grid"><section class="surface surface-pad"><div class="section-header"><div><h2 class="section-title">Đơn hàng cần xử lý</h2><p class="section-desc">Ưu tiên xác nhận, đóng gói và giao đơn</p></div><button class="subtle-link" data-view="orders">Xem tất cả ${icon('arrow')}</button></div>
   <div class="table-scroll"><table class="data-table"><thead><tr><th>Mã đơn</th><th>Khách hàng</th><th>Giá trị</th><th>Trạng thái</th><th class="text-right">Thao tác</th></tr></thead><tbody>${required.slice(0,5).map(o=>`<tr><td><span class="text-mono main-text">${esc(o.id)}</span><div class="secondary-text">${esc(o.created)}</div></td><td class="main-text">${esc(o.customer)}</td><td>${money(o.total)}</td><td>${statusBadge(o.status)}</td><td class="text-right">${orderActionButton(o)}</td></tr>`).join('')||`<tr><td colspan="5"><div class="empty">Không có đơn cần xử lý.</div></td></tr>`}</tbody></table></div></section>
   <section class="surface surface-pad"><div class="section-header"><div><h2 class="section-title">Thao tác nhanh</h2><p class="section-desc">Các công việc thường dùng của nhân viên</p></div></div><div class="quick-list">
    <button class="quick-tile" data-action="open-book"><span class="tile-icon">${icon('plus')}</span><span><strong>Thêm đầu sách</strong><small>Quản lý danh mục</small></span></button>
    <button class="quick-tile" data-action="open-variant"><span class="tile-icon">${icon('layers')}</span><span><strong>Thêm biến thể</strong><small>SKU, ISBN, giá</small></span></button>
    <button class="quick-tile" data-action="stock-in"><span class="tile-icon">${icon('down')}</span><span><strong>Nhập kho</strong><small>Tăng số lượng tồn</small></span></button>
    <button class="quick-tile" data-action="stock-out"><span class="tile-icon">${icon('up')}</span><span><strong>Xuất kho</strong><small>Điều chỉnh tồn</small></span></button>
   </div><div class="warning-box">${icon('alert')}<span><b>${numberLow()} biến thể</b> đang ở hoặc dưới mức tồn tối thiểu. Kiểm tra tồn khả dụng trước khi xác nhận đơn.</span></div></section></div>
   <div class="dashboard-grid"><section class="surface surface-pad"><div class="section-header"><div><h2 class="section-title">Cảnh báo tồn kho</h2><p class="section-desc">Số khả dụng = tồn thực tế − số đã giữ</p></div><button class="subtle-link" data-view="warehouse">Kiểm tra kho ${icon('arrow')}</button></div>${lowArr.map(v=>`<div class="list-row"><div class="book-line">${bookThumb(bookById(v.bookId))}<div><div class="main-text">${esc(productName(v))}</div><div class="secondary-text text-mono">${esc(v.sku)}</div></div></div><div style="text-align:right"><span class="stock-low">${available(v)} cuốn</span><div class="secondary-text">Mức tối thiểu: ${v.min}</div></div></div>`).join('')||'<div class="empty">Tồn kho hiện ổn định.</div>'}</section>
   <section class="surface surface-pad"><div class="section-header"><div><h2 class="section-title">Hoạt động gần đây</h2><p class="section-desc">Thao tác mô phỏng trong hệ thống</p></div>${icon('clock')}</div><div class="activity-list">${activities.slice(0,5).map(a=>`<div class="activity"><span class="activity-dot">${icon(a.icon)}</span><div><p>${a.text}</p><time>${esc(a.date)}</time></div></div>`).join('')}</div></section></div>`;
}
function catalog(){
 heading('Đầu sách & biến thể','Quản lý thông tin đầu sách; mỗi phiên bản có SKU và ISBN riêng.',`<button class="btn" data-action="open-variant">${icon('layers')} Thêm biến thể</button><button class="btn primary" data-action="open-book">${icon('plus')} Thêm đầu sách</button>`);
 const matching=books.filter(b=>(b.title+' '+b.author+' '+b.id+' '+variants.filter(v=>v.bookId===b.id).map(v=>v.sku+' '+v.isbn).join(' ')).toLowerCase().includes(search));
 el('page-body').innerHTML=`
 <section class="surface surface-pad"><div class="toolbar"><div class="toolbar-left"><label class="field" style="display:flex;gap:7px;align-items:center">${icon('search')} <input class="no-border" style="border:0;outline:0;width:240px;max-width:40vw" id="local-search" placeholder="Tìm tên sách, SKU, ISBN..." value="${esc(search)}"></label></div><span class="table-tag">${matching.length} đầu sách · ${variants.length} biến thể</span></div>
 <div class="table-scroll"><table class="data-table"><thead><tr><th>Đầu sách</th><th>Mã sách</th><th>Thể loại</th><th>Biến thể</th><th>Trạng thái kho</th><th class="text-right">Thao tác</th></tr></thead><tbody>${matching.map(b=>{const vs=variants.filter(v=>v.bookId===b.id); return `<tr><td><div class="book-line">${bookThumb(b)}<div><div class="main-text">${esc(b.title)}</div><div class="secondary-text">${esc(b.author)}</div></div></div></td><td class="text-mono">${esc(b.id)}</td><td>${esc(b.category)}</td><td>${vs.length} phiên bản<div class="secondary-text">${vs.length?esc(vs[0].sku):'Chưa có SKU'}</div></td><td>${vs.length?(vs.some(low)?'<span class="badge orange">Có tồn thấp</span>':'<span class="badge green">Ổn định</span>'):'<span class="badge grey">Chưa nhập kho</span>'}</td><td><div class="inline-actions" style="justify-content:flex-end"><button class="btn sm" data-action="view-book" data-id="${b.id}">${icon('eye')} Chi tiết</button><button class="btn sm icon-only" title="Chỉnh sửa đầu sách" data-action="edit-book" data-id="${b.id}">${icon('edit')}</button></div></td></tr>`}).join('')||`<tr><td colspan="6"><div class="empty">Không tìm thấy đầu sách phù hợp.</div></td></tr>`}</tbody></table></div></section>
 <section class="surface surface-pad" style="margin-top:18px"><div class="section-header"><div><h2 class="section-title">Danh sách biến thể / SKU</h2><p class="section-desc">Giá và số lượng được quản lý theo từng biến thể</p></div></div><div class="table-scroll"><table class="data-table"><thead><tr><th>SKU</th><th>Sản phẩm</th><th>Loại bìa</th><th>ISBN</th><th>Giá</th><th>Tồn khả dụng</th><th class="text-right">Sửa</th></tr></thead><tbody>${variants.filter(v=>(v.sku+' '+v.isbn+' '+productName(v)).toLowerCase().includes(search)).map(v=>`<tr><td class="text-mono main-text">${esc(v.sku)}</td><td>${esc(productName(v))}<div class="secondary-text">Năm ${v.year}</div></td><td>${esc(v.cover)}</td><td class="text-mono">${esc(v.isbn)}</td><td>${money(v.price)}</td><td class="${low(v)?'stock-low':'stock-ok'}">${available(v)}</td><td class="text-right"><button class="btn sm icon-only" data-action="edit-variant" data-id="${v.id}" title="Sửa biến thể">${icon('edit')}</button></td></tr>`).join('')||`<tr><td colspan="7"><div class="empty">Không có biến thể phù hợp.</div></td></tr>`}</tbody></table></div></section>`;
}
function warehouse(){
 heading('Tồn kho & nhập/xuất','Theo dõi tồn vật lý, hàng đã giữ và số lượng khả dụng theo SKU.',`<button class="btn" data-action="stock-out">${icon('up')} Xuất kho</button><button class="btn primary" data-action="stock-in">${icon('down')} Nhập kho</button>`);
 const totalPhysical=variants.reduce((a,v)=>a+v.stock,0), totalReserved=variants.reduce((a,v)=>a+v.reserved,0);
 const display=variants.filter(v=>(stockFilter!=='low'||low(v))&&(productName(v)+' '+v.sku+' '+v.isbn).toLowerCase().includes(search));
 el('page-body').innerHTML=`<div class="stat-grid">${stat('Tồn thực tế',totalPhysical+' cuốn','Tổng số lượng hiện có','pink','box')}${stat('Đang giữ cho đơn',totalReserved+' cuốn','Chưa xuất kho','blue','orders')}${stat('Tồn khả dụng',(totalPhysical-totalReserved)+' cuốn','Có thể xác nhận đơn','green','check-circle')}${stat('SKU cần bổ sung',numberLow(),'Khả dụng ≤ mức tối thiểu','amber','alert')}</div>
 <div class="surface surface-pad"><div class="toolbar"><div class="toolbar-left"><input class="field search" id="local-search" placeholder="Tìm tên sách hoặc SKU..." value="${esc(search)}"><select class="field select" id="stock-filter"><option value="all" ${stockFilter==='all'?'selected':''}>Tất cả trạng thái</option><option value="low" ${stockFilter==='low'?'selected':''}>Chỉ tồn thấp</option></select></div><span class="table-tag">Kho chính · ${display.length} SKU</span></div><div class="table-scroll"><table class="data-table"><thead><tr><th>SKU / tên sách</th><th>Kho</th><th class="text-center">Tồn thực tế</th><th class="text-center">Đã giữ</th><th class="text-center">Khả dụng</th><th>Mức tối thiểu</th><th>Trạng thái</th><th class="text-right">Thao tác</th></tr></thead><tbody>${display.map(v=>`<tr><td><div class="main-text text-mono">${esc(v.sku)}</div><div class="secondary-text">${esc(productName(v))}</div></td><td>Kho chính</td><td class="text-center">${v.stock}</td><td class="text-center">${v.reserved}</td><td class="text-center"><strong class="${low(v)?'stock-low':'stock-ok'}">${available(v)}</strong></td><td>${v.min} cuốn</td><td>${low(v)?'<span class="badge orange">Tồn thấp</span>':'<span class="badge green">Đủ hàng</span>'}</td><td class="text-right"><button class="btn sm" data-action="stock-in" data-id="${v.id}">+ Nhập</button></td></tr>`).join('')||`<tr><td colspan="8"><div class="empty">Không có SKU phù hợp.</div></td></tr>`}</tbody></table></div></div>
 <section class="surface surface-pad" style="margin-top:18px"><div class="section-header"><div><h2 class="section-title">Lịch sử nhập / xuất gần đây</h2><p class="section-desc">Phát sinh trong bản demo</p></div></div><div class="table-scroll"><table class="data-table"><thead><tr><th>Mã phiếu</th><th>Thời gian</th><th>SKU</th><th>Loại</th><th>Số lượng</th><th>Ghi chú</th></tr></thead><tbody>${movements.map(m=>`<tr><td class="text-mono main-text">${esc(m.id)}</td><td>${esc(m.date)}</td><td class="text-mono">${esc(varById(m.variantId)?.sku||'—')}</td><td>${m.type==='in'?'<span class="badge green">Nhập kho</span>':'<span class="badge orange">Xuất kho</span>'}</td><td class="${m.type==='in'?'stock-ok':'stock-low'}">${m.type==='in'?'+':'−'}${m.qty}</td><td>${esc(m.note)}</td></tr>`).join('')}</tbody></table></div></section>`;
}
function orderActionButton(o){
 if(o.request)return `<button class="btn sm" data-view="returns">${icon('return')} Xem yêu cầu</button>`;
 const options={pending:['confirm','Xác nhận'],confirmed:['pack','Đóng gói'],packed:['ship','Lập phiếu giao'],shipping:['complete','Đã giao']};
 const item=options[o.status];return item?`<button class="btn sm ${o.status==='pending'?'soft':''}" data-action="${item[0]}" data-id="${o.id}">${item[1]}</button>`:`<button class="btn sm" data-action="view-order" data-id="${o.id}">Chi tiết</button>`;
}
function orderList(){
 heading('Xử lý đơn hàng','Xác nhận đơn, đóng gói, tạo phiếu giao và cập nhật trạng thái.',`<button class="btn" data-view="delivery">${icon('file')} Danh sách phiếu giao</button>`);
 const counts=['pending','confirmed','packed','shipping','completed'].map(s=>orders.filter(o=>o.status===s).length);
 const display=orders.filter(o=> (orderFilter==='all'||o.status===orderFilter) && (o.id+' '+o.customer+' '+o.payment+' '+o.items.map(x=>varById(x.id)?.sku||'').join(' ')).toLowerCase().includes(search));
 el('page-body').innerHTML=`<div class="metrics-line"><span class="metric-pill">Chờ xác nhận: <strong>${counts[0]}</strong></span><span class="metric-pill">Chờ đóng gói: <strong>${counts[1]}</strong></span><span class="metric-pill">Chờ giao: <strong>${counts[2]}</strong></span><span class="metric-pill">Đang giao: <strong>${counts[3]}</strong></span></div><div class="surface surface-pad"><div class="toolbar"><div class="tab-filter">${[['all','Tất cả'],['pending','Chờ xác nhận'],['confirmed','Đã xác nhận'],['packed','Đã đóng gói'],['shipping','Đang giao']].map(x=>`<button class="${orderFilter===x[0]?'active':''}" data-order-filter="${x[0]}">${x[1]}</button>`).join('')}</div><input class="field search" id="local-search" placeholder="Tìm mã đơn, khách hàng..." value="${esc(search)}"></div><div class="table-scroll"><table class="data-table"><thead><tr><th>Mã đơn / thời gian</th><th>Khách hàng</th><th>Sản phẩm</th><th>Thanh toán</th><th>Tổng tiền</th><th>Trạng thái</th><th class="text-right">Thao tác</th></tr></thead><tbody>${display.map(o=>`<tr><td><button class="subtle-link text-mono" style="font-size:12px" data-action="view-order" data-id="${o.id}">${esc(o.id)}</button><div class="secondary-text">${esc(o.created)}</div></td><td><span class="main-text">${esc(o.customer)}</span><div class="secondary-text">${esc(o.address)}</div></td><td>${o.items.reduce((n,i)=>n+i.qty,0)} cuốn<div class="secondary-text">${esc(productName(varById(o.items[0].id)))}</div></td><td>${esc(o.payment)}</td><td class="main-text">${money(o.total)}</td><td>${statusBadge(o.status)}${o.request?`<div class="secondary-text pink">Yêu cầu ${o.request==='cancel'?'hủy':'hoàn'}</div>`:''}</td><td><div class="inline-actions" style="justify-content:flex-end">${orderActionButton(o)}<button class="btn sm icon-only" title="Xem chi tiết" data-action="view-order" data-id="${o.id}">${icon('eye')}</button></div></td></tr>`).join('')||`<tr><td colspan="7"><div class="empty">Không tìm thấy đơn hàng.</div></td></tr>`}</tbody></table></div></div><p class="note">Luồng minh họa: Chờ xác nhận → Đã xác nhận → Đã đóng gói → Lập phiếu giao/Đang giao → Hoàn thành. Khi xác nhận, hàng được giữ theo SKU; khi lập phiếu giao, số lượng được xuất khỏi kho.</p>`;
}
function delivery(){
 heading('Phiếu giao hàng','Quản lý các phiếu đã lập và thông tin đơn vị vận chuyển.',`<button class="btn primary" data-view="orders">${icon('plus')} Xử lý đơn cần giao</button>`);
 el('page-body').innerHTML=`<section class="surface surface-pad"><div class="section-header"><div><h2 class="section-title">Danh sách phiếu giao</h2><p class="section-desc">Phiếu tạo sau khi đơn hàng được đóng gói</p></div></div><div class="table-scroll"><table class="data-table"><thead><tr><th>Số phiếu</th><th>Mã đơn</th><th>Ngày lập</th><th>Đơn vị vận chuyển</th><th>Mã vận đơn</th><th class="text-right">Thao tác</th></tr></thead><tbody>${slips.map(s=>`<tr><td class="main-text text-mono">${esc(s.id)}</td><td class="text-mono">${esc(s.orderId)}</td><td>${esc(s.date)}</td><td>${esc(s.carrier)}</td><td class="text-mono">${esc(s.tracking)}</td><td class="text-right"><button class="btn sm" data-action="view-slip" data-id="${s.id}">${icon('eye')} Xem phiếu</button></td></tr>`).join('')||'<tr><td colspan="6"><div class="empty">Chưa có phiếu giao hàng.</div></td></tr>'}</tbody></table></div></section>`;
}
function returnsView(){
 heading('Hủy / hoàn hàng','Tiếp nhận, kiểm tra và xử lý yêu cầu sau đặt hàng.',`<button class="btn" data-view="orders">${icon('orders')} Tất cả đơn hàng</button>`);
 const requests=orders.filter(o=>o.request);
 el('page-body').innerHTML=`<div class="info-banner">${icon('info')}<div><strong>Quy trình minh họa:</strong> Hủy đơn trước khi giao sẽ giải phóng số lượng đã giữ. Với hoàn hàng, chỉ tăng tồn kho khi nhân viên xác nhận đã nhận lại hàng đạt yêu cầu. Hoàn tiền thực tế cần tích hợp hệ thống thanh toán.</div></div>
 <section class="surface surface-pad"><div class="section-header"><div><h2 class="section-title">Yêu cầu đang chờ</h2><p class="section-desc">Có ${requests.length} trường hợp cần phản hồi</p></div></div><div class="table-scroll"><table class="data-table"><thead><tr><th>Mã đơn</th><th>Khách hàng</th><th>Loại yêu cầu</th><th>Lý do</th><th>Giá trị</th><th class="text-right">Thao tác</th></tr></thead><tbody>${requests.map(o=>`<tr><td class="main-text text-mono">${esc(o.id)}</td><td>${esc(o.customer)}</td><td>${o.request==='cancel'?'<span class="badge orange">Yêu cầu hủy</span>':'<span class="badge pink">Yêu cầu hoàn</span>'}</td><td>${esc(o.reason||'Không có lý do')}</td><td>${money(o.total)}</td><td><div class="inline-actions" style="justify-content:flex-end"><button class="btn sm ${o.request==='cancel'?'danger':'success'}" data-action="approve-request" data-id="${o.id}">${o.request==='cancel'?'Duyệt hủy':'Xác nhận nhận hàng hoàn'}</button><button class="btn sm" data-action="reject-request" data-id="${o.id}">Từ chối</button></div></td></tr>`).join('')||'<tr><td colspan="6"><div class="empty">Không có yêu cầu đang chờ.</div></td></tr>'}</tbody></table></div></section>`;
}
function render(){updateCounts();el('global-search').value=search;document.querySelectorAll('[data-view].nav-item').forEach(n=>n.classList.toggle('active',n.dataset.view===view));if(view==='overview')overview();if(view==='catalog')catalog();if(view==='warehouse')warehouse();if(view==='orders')orderList();if(view==='delivery')delivery();if(view==='returns')returnsView();}
function navigate(destination){if(modal)closeModal();view=destination;search='';document.getElementById('sidebar').classList.remove('open');el('mobile-shade').classList.remove('visible');render();window.scrollTo({top:0,behavior:'smooth'});}
function toast(text){const node=document.createElement('div');node.className='toast';node.innerHTML=icon('check-circle')+'<span>'+esc(text)+'</span>';el('toast-wrap').appendChild(node);setTimeout(()=>node.remove(),4000);}
function activity(text,ico='check-circle'){activities.unshift({text,date:stamp(),icon:ico});}
function wrapModal(title,description,body,foot='',wide=false,slip=false){return `<div class="overlay" id="modal-overlay"><div class="modal ${wide?'wide':''} ${slip?'slip-modal':''}" role="dialog" aria-modal="true" aria-labelledby="modal-title"><div class="modal-top"><div><h2 id="modal-title">${title}</h2><p>${description}</p></div><button class="btn sm icon-only" data-action="close-modal" aria-label="Đóng">${icon('close')}</button></div>${body}<div class="modal-foot">${foot||`<button class="btn" data-action="close-modal">Đóng</button>`}</div></div></div>`;}
const inp=(label,name,placeholder,value='',type='text',required=true,wide=false,other='')=>`<div class="form-group ${wide?'wide':''}"><label for="f-${name}">${label}</label><input id="f-${name}" name="${name}" type="${type}" placeholder="${esc(placeholder)}" value="${esc(value)}" ${required?'required':''} ${other}></div>`;
const selection=(label,name,options,selected='',wide=false)=>`<div class="form-group ${wide?'wide':''}"><label for="f-${name}">${label}</label><select id="f-${name}" name="${name}" required>${options.map(([v,t])=>`<option value="${esc(v)}" ${String(v)===String(selected)?'selected':''}>${esc(t)}</option>`).join('')}</select></div>`;
function open(kind,id=null){
 modal={kind,id};let html='';
 if(kind==='book'||kind==='edit-book'){
  const b=kind==='edit-book'?bookById(id):null;
  html=wrapModal(b?'Chỉnh sửa đầu sách':'Thêm đầu sách mới','Thông tin chung của đầu sách, không bao gồm SKU và giá bán.',`<form id="modal-form" data-form="${kind}"><div class="modal-body"><div class="form-grid">${inp('Tên đầu sách *','title','Ví dụ: Nhà giả kim',b?.title||'', 'text', true,true)}${inp('Tác giả *','author','Tên tác giả',b?.author||'')}${selection('Thể loại','category',[['Văn học','Văn học'],['Kỹ năng','Kỹ năng'],['Truyện tranh','Truyện tranh'],['Kinh tế','Kinh tế'],['Thiếu nhi','Thiếu nhi'],['Khác','Khác']],b?.category||'Văn học')}${inp('Nhà xuất bản','publisher','Nhà xuất bản',b?.publisher||'', 'text',false,true)}</div></div><div class="modal-foot"><button class="btn" type="button" data-action="close-modal">Hủy</button><button class="btn primary" type="submit">${b?'Lưu thay đổi':'Thêm đầu sách'}</button></div></form>`, '',false);html=html.replace(/<div class="modal-foot"><button class="btn" data-action="close-modal">Đóng<\/button><\/div><\/div><\/div>$/,'</div></div>');
 }
 if(kind==='variant'||kind==='edit-variant'){
  const v=kind==='edit-variant'?varById(id):null;
  html=wrapModal(v?'Chỉnh sửa biến thể':'Thêm biến thể sách','Mỗi biến thể cần có SKU duy nhất và ISBN phù hợp.',`<form id="modal-form" data-form="${kind}"><div class="modal-body"><div class="form-grid">${selection('Đầu sách *','bookId',books.map(b=>[b.id,b.title]),v?.bookId||id||'',true)}${inp('SKU *','sku','BV-TENSACH-M-2026',v?.sku||'')}${inp('ISBN-13 *','isbn','9786040000012',v?.isbn||'')}${selection('Loại bìa','cover',[['Bìa mềm','Bìa mềm'],['Bìa cứng','Bìa cứng'],['Bản đặc biệt','Bản đặc biệt']],v?.cover||'Bìa mềm')}${inp('Số tập','volume','1',v?.volume||1,'number',true,false,'min="1" max="9999"')}${inp('Năm xuất bản','year','2026',v?.year||2026,'number',true,false,'min="1900" max="2100"')}${inp('Giá bán (đ)','price','89000',v?.price||'', 'number',true,false,'min="0" step="1000"')}${inp('Mức tồn tối thiểu','min','10',v?.min||10,'number',true,false,'min="0"')}</div><p class="form-hint" style="margin-top:13px">${v?'Số lượng tồn được cập nhật ở mục Nhập / xuất kho.':'Biến thể mới có tồn kho bằng 0. Sau khi tạo, sử dụng chức năng Nhập kho.'} ISBN chỉ được kiểm tra cấu trúc 13 chữ số và số kiểm tra; không xác thực quyền sở hữu ISBN.</p></div><div class="modal-foot"><button class="btn" type="button" data-action="close-modal">Hủy</button><button class="btn primary" type="submit">${v?'Lưu thay đổi':'Tạo biến thể'}</button></div></form>`,'',true);html=html.replace(/<div class="modal-foot"><button class="btn" data-action="close-modal">Đóng<\/button><\/div><\/div><\/div>$/,'</div></div>');
 }
 if(kind==='stock'){
  const direction=id?.type||'in';const specified=id?.variantId||variants[0]?.id;
  html=wrapModal(direction==='in'?'Tạo phiếu nhập kho':'Tạo phiếu xuất kho','Ghi nhận nhập hoặc xuất tại kho chính.',`<form id="modal-form" data-form="stock"><div class="modal-body"><div class="form-grid">${selection('Biến thể / SKU','variantId',variants.map(v=>[v.id,`${v.sku} — ${productName(v)} (khả dụng ${available(v)})`]),specified,true)}${selection('Loại giao dịch','direction',[['in','Nhập kho (+)'],['out','Xuất kho (−)']],direction)}${inp('Số lượng *','qty','Ví dụ: 20',1,'number',true,false,'min="1" max="100000"')}${inp('Ghi chú / lý do *','note','Nhập hàng từ nhà cung cấp','', 'text',true,true)}</div><p class="form-hint" style="margin-top:13px">Không cho xuất vượt số lượng khả dụng đã trừ hàng giữ cho đơn.</p></div><div class="modal-foot"><button class="btn" type="button" data-action="close-modal">Hủy</button><button class="btn primary" type="submit">Lưu phiếu kho</button></div></form>`,'');html=html.replace(/<div class="modal-foot"><button class="btn" data-action="close-modal">Đóng<\/button><\/div><\/div><\/div>$/,'</div></div>');
 }
 if(kind==='delivery-form'){
  const o=orderById(id);html=wrapModal('Lập phiếu giao hàng',`Đơn ${esc(o.id)} · ${esc(o.customer)} · ${money(o.total)}`,`<form id="modal-form" data-form="delivery"><div class="modal-body"><div class="form-grid">${selection('Đơn vị vận chuyển','carrier',[['Giao hàng nhanh','Giao hàng nhanh'],['Giao hàng tiết kiệm','Giao hàng tiết kiệm'],['Viettel Post','Viettel Post'],['Khác','Khác']])}${inp('Mã vận đơn *','tracking','Mã tracking tham khảo','')}${inp('Người nhận','receiver','Tên người nhận',o.customer,'text',true,true)}</div><div class="info-banner" style="margin-top:16px;margin-bottom:0">${icon('info')}Sau khi lập phiếu, hệ thống demo trừ tồn thực tế và số lượng đã giữ theo từng SKU; đơn chuyển sang “Đang giao”.</div></div><div class="modal-foot"><button class="btn" type="button" data-action="close-modal">Hủy</button><button class="btn primary" type="submit">${icon('file')} Tạo phiếu & xuất kho</button></div></form>`,'');html=html.replace(/<div class="modal-foot"><button class="btn" data-action="close-modal">Đóng<\/button><\/div><\/div><\/div>$/,'</div></div>');
 }
 if(kind==='view-book'){
  const b=bookById(id),vs=variants.filter(v=>v.bookId===id);
  html=wrapModal(esc(b.title),`${esc(b.author)} · ${esc(b.publisher)}`,`<div class="modal-body"><div class="detail-grid"><div class="detail-cell"><span>Mã đầu sách</span><strong>${esc(b.id)}</strong></div><div class="detail-cell"><span>Thể loại</span><strong>${esc(b.category)}</strong></div></div><div class="detail-section"><h3>Biến thể của đầu sách (${vs.length})</h3>${vs.map(v=>`<div class="detail-book"><div><div class="main-text">${esc(v.cover)} · Tập ${v.volume} · ${v.year}</div><div class="secondary-text text-mono">${esc(v.sku)} · ISBN ${esc(v.isbn)}</div></div><div style="text-align:right"><strong>${money(v.price)}</strong><div class="secondary-text">Khả dụng: ${available(v)}</div></div></div>`).join('')||'<p class="muted">Chưa có biến thể.</p>'}</div></div>`,`<button class="btn" data-action="close-modal">Đóng</button><button class="btn primary" data-action="open-variant" data-id="${b.id}">${icon('plus')} Thêm biến thể</button>`,true);
 }
 if(kind==='view-order'){
  const o=orderById(id);
  html=wrapModal(`Chi tiết đơn ${esc(o.id)}`,`${esc(o.created)} · ${statusText(o.status)}`,`<div class="modal-body"><div class="detail-grid"><div class="detail-cell"><span>Khách hàng</span><strong>${esc(o.customer)}</strong></div><div class="detail-cell"><span>Số điện thoại</span><strong>${esc(o.phone)}</strong></div><div class="detail-cell"><span>Địa chỉ nhận</span><strong>${esc(o.address)}</strong></div><div class="detail-cell"><span>Thanh toán</span><strong>${esc(o.payment)}</strong></div></div><div class="detail-section"><h3>Sản phẩm trong đơn</h3>${o.items.map(i=>{let v=varById(i.id);return `<div class="detail-book"><div><div class="main-text">${esc(productName(v))}</div><div class="secondary-text text-mono">${esc(v.sku)} · ${esc(v.cover)}</div></div><strong>x${i.qty}</strong></div>`}).join('')}<div style="display:flex;justify-content:space-between;margin-top:18px"><strong>Tổng thanh toán</strong><strong style="color:var(--pink);font-size:17px">${money(o.total)}</strong></div></div>${o.request?`<div class="info-banner" style="margin-top:18px;margin-bottom:0">${icon('alert')}Yêu cầu ${o.request==='cancel'?'hủy':'hoàn'}: ${esc(o.reason||'Không có lý do')}</div>`:''}</div>`,`<button class="btn" data-action="close-modal">Đóng</button>${o.request?`<button class="btn primary" data-view="returns">Xử lý yêu cầu</button>`:orderActionButton(o)}`,true);
 }
 if(kind==='view-slip'){
  const s=slips.find(x=>x.id===id),o=orderById(s.orderId);
  html=wrapModal('Phiếu giao hàng',`Phiếu ${esc(s.id)} · ${esc(s.date)}`,`<div class="modal-body"><div class="slip"><div style="font-size:17px;font-weight:850;color:var(--pink)">BookVerse</div><h3>PHIẾU GIAO HÀNG</h3><div class="detail-grid"><div class="detail-cell"><span>Mã phiếu</span><strong>${esc(s.id)}</strong></div><div class="detail-cell"><span>Mã đơn</span><strong>${esc(o.id)}</strong></div><div class="detail-cell"><span>Đơn vị vận chuyển</span><strong>${esc(s.carrier)}</strong></div><div class="detail-cell"><span>Mã vận đơn</span><strong>${esc(s.tracking)}</strong></div><div class="detail-cell"><span>Người nhận</span><strong>${esc(o.customer)}</strong></div><div class="detail-cell"><span>Địa chỉ</span><strong>${esc(o.address)}</strong></div></div><div class="detail-section"><h3>Hàng giao</h3>${o.items.map(i=>`<div class="detail-book"><span>${esc(productName(varById(i.id)))}</span><b>x${i.qty}</b></div>`).join('')}<p style="text-align:right"><strong>Giá trị: ${money(o.total)}</strong></p></div><p style="text-align:center;color:#988e9a;font-size:10px;margin-top:23px">Phiếu mẫu, chưa tích hợp vận đơn thực tế</p></div></div>`,`<button class="btn" data-action="close-modal">Đóng</button><button class="btn primary" data-action="print-slip">${icon('printer')} In phiếu</button>`,true,true);
 }
 el('modal-root').innerHTML=html;
 const first=el('modal-root').querySelector('input,select,button');first?.focus();
}
function closeModal(){modal=null;el('modal-root').innerHTML='';}
function validateIsbn(s){const d=s.replace(/[-\s]/g,'');if(!/^\d{13}$/.test(d))return false;let sum=0;for(let i=0;i<12;i++)sum+=Number(d[i])*(i%2?3:1);return (10-sum%10)%10===Number(d[12]);}
function saveForm(form){const d=Object.fromEntries(new FormData(form).entries());
 if(modal.kind==='book'||modal.kind==='edit-book'){
  if(!d.title.trim()||!d.author.trim())return alert('Vui lòng nhập tên sách và tác giả.');
  if(modal.kind==='book'){const b={id:'S'+String(Math.max(0,...books.map(x=>Number(x.id.slice(1))))+1).padStart(3,'0'),title:d.title.trim(),author:d.author.trim(),category:d.category,publisher:d.publisher.trim()};books.push(b);activity('Đã thêm đầu sách <b>'+esc(b.title)+'</b>.','books');toast('Đã thêm đầu sách. Tiếp tục tạo biến thể để quản lý SKU.');}
  else{Object.assign(bookById(modal.id),{title:d.title.trim(),author:d.author.trim(),category:d.category,publisher:d.publisher.trim()});toast('Đã cập nhật thông tin đầu sách.');}view='catalog';
 }
 if(modal.kind==='variant'||modal.kind==='edit-variant'){
  const isbn=d.isbn.replace(/[-\s]/g,''); if(!validateIsbn(isbn))return alert('ISBN-13 không hợp lệ. Hãy nhập đúng 13 chữ số và số kiểm tra.');
  const sku=d.sku.trim().toUpperCase();if(variants.some(v=>v.sku.toUpperCase()===sku&&v.id!==modal.id))return alert('SKU đã tồn tại. Hãy sử dụng SKU duy nhất.');
  const attrs={bookId:d.bookId,sku,isbn,cover:d.cover,volume:Number(d.volume),year:Number(d.year),price:Number(d.price),min:Number(d.min)};
  if(modal.kind==='variant'){variants.push({id:'BT'+String(Math.max(0,...variants.map(v=>Number(v.id.slice(2))))+1).padStart(3,'0'),...attrs,stock:0,reserved:0});toast('Đã thêm biến thể. Tồn kho ban đầu bằng 0.');activity('Đã thêm biến thể <b>'+esc(sku)+'</b>.','layers');}
  else{Object.assign(varById(modal.id),attrs);toast('Đã cập nhật biến thể và SKU.');}view='catalog';
 }
 if(modal.kind==='stock'){
  const v=varById(d.variantId),qty=Number(d.qty);if(!v||!Number.isInteger(qty)||qty<=0)return alert('Vui lòng chọn SKU và nhập số lượng hợp lệ.');
  if(d.direction==='out'&&available(v)<qty)return alert(`Không đủ tồn khả dụng. Chỉ có thể xuất tối đa ${available(v)} cuốn.`);
  v.stock+=d.direction==='in'?qty:-qty;
  const prefix=d.direction==='in'?'NK':'XK';movements.unshift({id:prefix+'-'+String(movements.length+21).padStart(3,'0'),variantId:v.id,type:d.direction,qty,note:d.note.trim(),date:stamp()});
  activity(`Đã ${d.direction==='in'?'nhập':'xuất'} <b>${qty} cuốn</b> SKU ${esc(v.sku)}.`,d.direction==='in'?'down':'up');toast(`Đã ${d.direction==='in'?'nhập':'xuất'} ${qty} cuốn và cập nhật tồn kho.`);view='warehouse';
 }
 if(modal.kind==='delivery-form'){
  const o=orderById(modal.id);if(o?.status!=='packed'||o.request)return alert('Đơn hàng không còn đủ điều kiện lập phiếu.');
  if(!d.tracking.trim())return alert('Cần nhập mã vận đơn.');
  if(o.items.some(i=>{let v=varById(i.id);return !v||v.stock<i.qty||v.reserved<i.qty;}))return alert('Dữ liệu tồn kho không hợp lệ. Không thể xuất kho.');
  o.items.forEach(i=>{let v=varById(i.id);v.stock-=i.qty;v.reserved-=i.qty;});
  const id='PG-'+String(39+slips.length).padStart(4,'0');slips.unshift({id,orderId:o.id,carrier:d.carrier,tracking:d.tracking.trim(),date:stamp()});o.status='shipping';activity(`Đã lập phiếu giao <b>${esc(id)}</b> cho đơn ${esc(o.id)}.`,'truck');toast('Đã tạo phiếu giao, xuất kho và chuyển đơn sang Đang giao.');view='delivery';
 }
 closeModal();render();
}
function handleAction(action,id){
 if(action==='open-book')return open('book');
 if(action==='edit-book')return open('edit-book',id);
 if(action==='view-book')return open('view-book',id);
 if(action==='open-variant')return open('variant',id);
 if(action==='edit-variant')return open('edit-variant',id);
 if(action==='stock-in'||action==='stock-out')return open('stock',{type:action==='stock-in'?'in':'out',variantId:id||variants[0].id});
 if(action==='view-order')return open('view-order',id);
 if(action==='view-slip')return open('view-slip',id);
 if(action==='close-modal')return closeModal();
 if(action==='print-slip')return window.print();
 const o=orderById(id);if(!o)return;
 if(action==='confirm'){
  if(o.status!=='pending'||o.request)return alert('Đơn không còn ở trạng thái có thể xác nhận.');
  if(o.items.some(i=>!varById(i.id)||available(varById(i.id))<i.qty))return alert('Không đủ tồn khả dụng để xác nhận đơn. Hãy nhập kho trước.');
  o.items.forEach(i=>varById(i.id).reserved+=i.qty);o.status='confirmed';activity(`Đã xác nhận và giữ hàng cho đơn <b>${esc(o.id)}</b>.`);toast(`Đã xác nhận đơn ${o.id} và giữ hàng theo SKU.`);
 }
 if(action==='pack'){
  if(o.status!=='confirmed'||o.request)return alert('Đơn chưa đủ điều kiện đóng gói.');
  o.status='packed';activity(`Đã đóng gói đơn <b>${esc(o.id)}</b>.`,'box');toast('Đã cập nhật: Đã đóng gói.');
 }
 if(action==='ship'){
  if(o.status!=='packed'||o.request)return alert('Đơn phải được đóng gói trước khi lập phiếu.');return open('delivery-form',id);
 }
 if(action==='complete'){
  if(o.status!=='shipping')return alert('Đơn chưa được giao đi.');o.status='completed';activity(`Đã ghi nhận giao thành công đơn <b>${esc(o.id)}</b>.`);toast('Đơn hàng đã hoàn thành.');
 }
 if(action==='approve-request'){
  if(!o.request)return alert('Yêu cầu không còn tồn tại.');
  const request=o.request;
  if(request==='cancel'){
   if(!['pending','confirmed','packed'].includes(o.status))return alert('Đơn đã gửi đi; cần quy trình hoàn hàng.');
   if(!window.confirm(`Duyệt hủy ${o.id}? Số lượng đã giữ (nếu có) sẽ được giải phóng.`))return;
   if(['confirmed','packed'].includes(o.status))o.items.forEach(i=>varById(i.id).reserved-=i.qty);
   o.status='canceled';o.request=null;
  }else{
   if(o.status!=='completed')return alert('Chỉ xác nhận hoàn kho khi đơn đã hoàn tất và đã nhận hàng.');
   if(!window.confirm(`Xác nhận đã nhận lại hàng hoàn của ${o.id} và nhập về kho?`))return;
   o.items.forEach(i=>varById(i.id).stock+=i.qty);o.status='returned';o.request=null;
  }
  activity(`Đã xử lý yêu cầu <b>${request==='cancel'?'hủy':'hoàn'}</b> của đơn ${esc(o.id)}.`,'return');toast(request==='cancel'?'Đã hủy đơn và giải phóng hàng giữ.':'Đã xác nhận hàng hoàn và nhập kho. Hoàn tiền chưa được thực hiện.');
 }
 if(action==='reject-request'){
  if(!o.request)return; if(!window.confirm(`Từ chối yêu cầu của đơn ${o.id}?`))return;
  o.request=null;toast('Đã từ chối yêu cầu và giữ nguyên trạng thái đơn.');
 }
 closeModal();render();
}
function bind(){
 document.addEventListener('click',event=>{
  const target=event.target.closest('[data-view],[data-action],[data-order-filter]');
  if(target){if(target.dataset.view){navigate(target.dataset.view);return;}if(target.dataset.orderFilter){orderFilter=target.dataset.orderFilter;render();return;}if(target.dataset.action){handleAction(target.dataset.action,target.dataset.id);return;}}
  if(event.target.id==='modal-overlay')closeModal();
 });
 document.addEventListener('submit',event=>{if(event.target.id==='modal-form'){event.preventDefault();saveForm(event.target);}});
 document.addEventListener('input',event=>{
  if(event.target.id==='global-search'||event.target.id==='local-search'){
   const input=event.target;const position=input.selectionStart;search=input.value.toLowerCase().trim();if(input.id==='global-search'&&view==='overview'){view='catalog';}
   render();const next=el(input.id);if(next){next.focus();if(position!=null){try{next.setSelectionRange(position,position);}catch(_){}}}
  }
 });
 document.addEventListener('change',event=>{if(event.target.id==='stock-filter'){stockFilter=event.target.value;render();}});
 el('menu-toggle').addEventListener('click',()=>{el('sidebar').classList.toggle('open');el('mobile-shade').classList.toggle('visible')});
 el('mobile-shade').addEventListener('click',()=>{el('sidebar').classList.remove('open');el('mobile-shade').classList.remove('visible')});
 el('notification-btn').addEventListener('click',()=>navigate(numberReturns()?'returns':numberPending()?'orders':'warehouse'));
 document.addEventListener('keydown',event=>{if(event.key==='Escape')closeModal();});
}
bind();render();
})();
</script>
</body>
</html>
