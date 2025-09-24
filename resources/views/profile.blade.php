<!DOCTYPE html>
<html>
<head>
    <title>Profile</title>
</head>
<body style="background: #e3eafc; font-family: 'Segoe UI', Arial, sans-serif; margin:0; padding:0; min-height:100vh;">
    
    <div style="max-width: 370px; margin: 40px auto; background: #fff; padding: 32px 28px 28px 28px; border-radius: 18px; box-shadow:0 4px 24px rgba(25, 118, 210, 0.13); text-align: center;">
        <!-- Avatar -->
        <div style="margin-bottom: 28px;">
            <div style="width:110px; height:110px; margin:0 auto; border-radius:50%; background: linear-gradient(135deg, #e3eafc 60%, #b6c8f9 100%); border:4px solid #b6c8f9; display:flex; align-items:center; justify-content:center;">
                <!-- SVG User Icon -->
                <svg width="70" height="70" viewBox="0 0 24 24" fill="#bdbdbd" xmlns="http://www.w3.org/2000/svg">
                    <circle cx="12" cy="8" r="5" fill="#bdbdbd"/>
                    <path d="M12 14c-5 0-8 2.5-8 5v1h16v-1c0-2.5-3-5-8-5z" fill="#bdbdbd"/>
                </svg>
            </div>
        </div>
        <!-- Info -->
        <div style="margin-bottom: 18px;">
            <div style="background:#f5f8ff; border-radius:8px; margin-bottom:12px; padding:12px 0; font-size:1.25em; font-weight:600; color:#1976d2; letter-spacing:1px; box-shadow:0 1px 4px rgba(25,118,210,0.04);">
                {{ $nama }}
            </div>
            <div style="background:#f5f8ff; border-radius:8px; margin-bottom:12px; padding:12px 0; font-size:1.1em; color:#333;">
                Kelas: <span style="font-weight:500;">{{ $kelas }}</span>
            </div>
            <div style="background:#f5f8ff; border-radius:8px; padding:12px 0; font-size:1.1em; color:#333;">
                NPM: <span style="font-weight:500;">{{ $npm }}</span>
            </div>
        </div>
        <!-- Creative: Social/Dummy Button -->
        <div style="margin-top:18px; display: flex; flex-wrap: wrap; justify-content: center; gap: 10px;">
            <button style="padding:10px 28px; background:#1976d2; color:#fff; border:none; border-radius:6px; font-size:1em; font-weight:500; cursor:pointer; box-shadow:0 2px 8px rgba(25,118,210,0.08); transition:background 0.2s;">
                Kontak Saya
            </button>
            <div style="display: flex; align-items: center; background: #f5f8ff; border-radius: 6px; padding: 8px 14px; min-width: 0; max-width: 100%; overflow-x: auto;">
                <span style="vertical-align:middle; margin-right:6px;">✉️</span>
                <a href="mailto:{{ strtolower(str_replace(' ', '', $nama)) }}@student.univ.ac.id"
                   style="color:#1976d2; text-decoration:none; font-size:1em; font-weight:500; white-space:nowrap; overflow-x:auto;">
                    Email: {{ strtolower(str_replace(' ', '', $nama)) }}@student.univ.ac.id
                </a>
            </div>
        </div>
    </div>
</body>
</html>
