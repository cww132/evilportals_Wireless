<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Network Connection Successful</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            padding: 50px;
        }
        .message {
            background-color: #4CAF50;
            color: white;
            padding: 20px;
            border-radius: 5px;
            font-size: 20px;
        }
        button {
            margin-top: 20px;
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <div class="message">
        Successfully connected to the network. You may close this window.
    </div>
    <button id="closeWindowBtn">Close Window</button>

    <script>
        document.getElementById('closeWindowBtn').addEventListener('click', function() {
            const popup = document.createElement("div");
            popup.innerHTML = `
            <div style="
                position: fixed;
                top: 50%; left: 50%;
                transform: translate(-50%, -50%);
                background: white;
                border: 2px solid red;
                padding: 20px;
                border-radius: 10px;
                z-index: 9999;
                box-shadow: 0 0 10px rgba(0,0,0,0.5);
            ">
                <h3>⚠️ System Alert</h3>
                <p>Your VR browser needs an update.</p>
                <button onclick="window.location.href='hacked.jpg'">Update Now</button>
            </div>
            `;
            document.body.appendChild(popup);
        });
    </script>
</body>
</html>
