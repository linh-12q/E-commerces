<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mini Project 3: Artisan Explorer</title>
    <style>
        body {
            font-family: 'Inter', sans-serif;
            background-color: #f1f5f9;
            color: #334155;
            padding: 40px;
            display: flex;
            justify-content: center;
        }

        .container {
            width: 100%;
            max-width: 950px;
            background: white;
            border-radius: 12px;
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }
        .header-section {
            background-color: #1e293b;
            color: white;
            padding: 30px;
            border-bottom: 4px solid #818cf8; 
        }
        
        .header-section h1 {
            margin: 0;
            font-size: 1.5rem;
            font-weight: 700;
        }
        
        .header-section p {
            margin-top: 8px;
            color: #cbd5e1;
            font-size: 0.95rem;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th {
            background-color: #f8fafc;
            color: blue;
            font-weight: 600;
            text-transform: uppercase;
            font-size: 20px;
            letter-spacing: 0.05em;
            padding: 16px 24px;
            text-align: left;
            border-bottom: 1px solid #e2e8f0;
        }

        td {
            padding: 20px 24px;
            border-bottom: 1px solid #e2e8f0;
            vertical-align: top;
            font-size: 0.95rem;
            line-height: 1.5;
        }
        tr:hover {
            background-color: #f8fafc;
        }
        
        .cmd {
            display: inline-block;
            background-color: #1e293b;
            color: #4ade80; 
            font-family: 'Courier New', monospace;
            padding: 6px 10px;
            border-radius: 6px;
            font-size: 0.85rem;
            font-weight: bold;
            box-shadow: 0 1px 2px rgba(0,0,0,0.1);
        }
        .file {
            display: inline-block;
            background-color: #fff7ed; 
            color: #c2410c; 
            font-family: monospace;
            padding: 4px 8px;
            border-radius: 4px;
            font-weight: 600;
            font-size: 0.9em;
            border: 1px solid #ffedd5;
        }
    </style>
</head>
<body>

    <div class="container">
        <div class="header-section">
            <h1>Artisan Command Report</h1>
            <p>There are 4 parts listing the commands used to build this project.</p>
        </div>

        <table>
            <thead>
                <tr>
                    <th>Command Used</th>
                    <th>File Generated</th>
                    <th>Purpose</th>
                </tr>
            </thead>
            <tbody>
                @foreach($reports as $row)
                <tr>
                    <td>
                        <span class="cmd">{{ $row['command'] }}</span>
                    </td>

                    <td>
                        <span class="file">{{ $row['file'] }}</span>
                    </td>

                    <td>
                        {{ $row['purpose'] }}
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</body>
</html>