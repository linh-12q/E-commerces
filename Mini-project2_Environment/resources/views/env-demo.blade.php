<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Environment Configuration Demo</title>
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: 'Inter', sans-serif;
            background-color: #f3f4f6; 
            color: #1f2937;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }
        .container {
            background: white;
            width: 100%;
            max-width: 480px;
            padding: 2.5rem;
            border-radius: 16px;
            box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.1), 0 8px 10px -6px rgba(0, 0, 0, 0.1);
            border-top: 6px solid #6366f1; 
        }
        h1 {
            font-size: 1.5rem;
            font-weight: 700;
            color: #111827;
            margin-bottom: 0.5rem;
        }

        .subtitle {
            font-size: 0.95rem;
            color: #6b7280;
            line-height: 1.5;
            margin-bottom: 2rem;
        }

        code {
            background-color: #eef2ff;
            color: #4f46e5;
            padding: 2px 6px;
            border-radius: 4px;
            font-family: monospace;
            font-size: 0.9em;
        }
        .info-row {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 1rem 0;
            border-bottom: 1px solid #e5e7eb;
        }

        .info-row:last-child {
            border-bottom: none;
        }

        .label {
            font-weight: 600;
            color: #4b5563;
            font-size: 0.95rem;
        }

        .value {
            font-weight: 500;
            color: #111827;
        }

    
        .badge {
            display: inline-flex;
            align-items: center;
            padding: 0.35rem 0.85rem;
            border-radius: 9999px; 
            font-size: 0.8rem;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 0.05em;
        }
        .badge.local {
            background-color: #ecfdf5; 
            color: #047857; 
            border: 1px solid #a7f3d0;
        }
        .badge.production {
            background-color: #fef2f2; 
            color: #b91c1c; 
            border: 1px solid #fecaca;
        }
        .dot {
            width: 6px;
            height: 6px;
            border-radius: 50%;
            margin-right: 8px;
        }
        .local .dot { background-color: #10b981; }
        .production .dot { background-color: #ef4444; }

    </style>
</head>
<body>

    <div class="container">
        <h1>Environment Demo</h1>
        <p class="subtitle">
            This project safely reads system variables using the Laravel <code>config()</code> helper system.
        </p>

        <div class="info-row">
            <span class="label">App Name</span>
            <span class="value">{{ $data['appName'] }}</span>
        </div>

        <div class="info-row">
            <span class="label">Environment</span>
            
            <span class="badge {{ $data['environment'] == 'local' ? 'local' : 'production' }}">
                <span class="dot"></span>
                {{ $data['environment'] }}
            </span>
        </div>

        <div class="info-row">
            <span class="label">Debug Mode</span>
            <span class="value">
                {{ $data['debugMode'] ? 'Enabled' : 'Disabled' }}
            </span>
        </div>
    </div>

</body>
</html>