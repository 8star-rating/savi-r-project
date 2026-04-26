<script>
        document.addEventListener("DOMContentLoaded", () => {
            // 1. Determine the Role
            let role = 'user'; 
            const urlParams = new URLSearchParams(window.location.search);
            const urlRole = urlParams.get('role');
            
            if (window.location.pathname.includes('admin.php')) {
                role = 'admin';
            } else if (window.location.pathname.includes('user.php')) {
                role = 'user';
            } else if (urlRole) {
                role = urlRole;
            } else {
                role = localStorage.getItem('savi_role') || 'user';
            }

            localStorage.setItem('savi_role', role);

            // 2. Apply CSS classes
            document.body.classList.add(role + '-view');
            const roleBadge = document.getElementById('roleBadge');
            if (roleBadge) {
                roleBadge.innerText = role === 'admin' ? 'Admin View' : 'User View';
            }

            const topbarCenter = document.querySelector('.topbar-center');
            if (topbarCenter && topbarCenter.innerText.includes('Dashboard Overview')) {
                if (role === 'admin') {
                    topbarCenter.innerText = 'Hello, Admin Arjen 👋';
                } else {
                    topbarCenter.innerText = 'Hello, User Juan 👋';
                }
            }

            // 3. Dynamic Text Transformation
            const sbIap = document.getElementById('sb-iap-text');
            const sbAar = document.getElementById('sb-aar-text');
            const sbWlr = document.getElementById('sb-wlr-text');
            const sbPprc = document.getElementById('sb-pprc-text');

            if (role === 'admin') {
                if(sbIap) sbIap.innerText = 'Incident Action Plans';
                if(sbAar) sbAar.innerText = 'After Activity Reports';
                if(sbWlr) sbWlr.innerText = 'Weekly Log Reports';
                if(sbPprc) sbPprc.innerText = 'Patient Care Records';

                // Optional Dashboard text changes
                const mainTitle = document.querySelector('h1');
                if (mainTitle && mainTitle.innerText.includes('Planning')) {
                    mainTitle.innerText = 'ODP Management Hub';
                    const subText = document.querySelector('p.text-sm');
                    if(subText) subText.innerText = 'Strategically review, finalize, or edit documentation for all incidents and operations.';
                }
            } else {
                if(sbIap) sbIap.innerText = 'Draft IAP';
                if(sbAar) sbAar.innerText = 'Draft AAR';
                if(sbWlr) sbWlr.innerText = 'File weekly log';
                if(sbPprc) sbPprc.innerText = 'Encode patient care';
            }

            // 4. Force links to carry the role
            document.querySelectorAll('a').forEach(link => {
                link.addEventListener('click', function(e) {
                    let href = this.getAttribute('href');
                    if (href && !href.startsWith('#') && !href.startsWith('http')) {
                        e.preventDefault();
                        let separator = href.includes('?') ? '&' : '?';
                        let hashParts = href.split('#');
                        let newUrl = hashParts[0] + separator + 'role=' + role + (hashParts[1] ? '#' + hashParts[1] : '');
                        window.location.href = newUrl;
                    }
                });
            });

            // 5. Update clickable buttons
            document.querySelectorAll('[onclick^="window.location.href"]').forEach(btn => {
                let onclickStr = btn.getAttribute('onclick');
                let match = onclickStr.match(/'([^']+)'/);
                
                if (match) {
                    let targetPage = match[1]; 
                    if (!targetPage.includes('admin.php') && !targetPage.includes('user.php') && !targetPage.includes('?')) {
                        let newOnclick = `window.location.href='${targetPage}?role=${role}'`;
                        btn.setAttribute('onclick', newOnclick);
                    }
                }
            });
        });

        // --- SIDEBAR & DASHBOARD RETURN LOGIC ---
        const sidebar = document.getElementById('sidebar');
        const toggleBtn = document.getElementById('sidebarToggle');
        if(toggleBtn && sidebar) {
            toggleBtn.addEventListener('click', () => {
                sidebar.classList.toggle('collapsed');
            });
        }

        const dashLink = document.getElementById('nav-dashboard');
        if(dashLink) {
            dashLink.addEventListener('click', function(e) {
                e.preventDefault();
                const currentRole = localStorage.getItem('savi_role') || 'user'; 
                window.location.href = currentRole === 'admin' ? 'admin.php' : 'user.php';
            });
        }

        document.addEventListener("DOMContentLoaded", () => {
            const role = localStorage.getItem('savi_role') || 'user';
            const userName = document.querySelector('.active-user-name');
            
            if (userName) {
                if (role === 'admin') {
                    userName.innerText = 'Arjen Greer Bonggo (Admin67)';
                    document.querySelector('.active-user-role').innerText = 'System Administrator / Focal Person';
                    document.querySelector('.active-user-initial').innerText = 'A';
                    document.querySelector('.active-user-id').innerText = 'STF-001';
                    document.querySelector('.active-user-email').innerText = 'agbonggo@udrrmo.edu.ph';
                    document.querySelector('.active-user-access').innerText = 'Full Access (Admin)';
                } else {
                    userName.innerText = 'Juan Dela Cruz (User67)';
                    document.querySelector('.active-user-role').innerText = 'DRRM Staff / Responder';
                    document.querySelector('.active-user-initial').innerText = 'J';
                    document.querySelector('.active-user-id').innerText = 'STF-045';
                    document.querySelector('.active-user-email').innerText = 'juan@udrrmo.edu.ph';
                    document.querySelector('.active-user-access').innerText = 'Minimal (View & Store)';
                }
            }
        });
    </script>
</body>
</html>