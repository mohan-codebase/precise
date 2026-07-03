<?php http_response_code(404); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>404 Not Found</title>
  <style>
    body {
      margin: 0;
      padding: 0;
      height: 100vh;
      font-family: 'Segoe UI', Arial, sans-serif;
      display: flex;
      justify-content: center;
      align-items: center;
      background: linear-gradient(135deg, #1e3c72, #2a5298);
      color: #fff;
      text-align: center;
      overflow: hidden;
    }

    .container {
      max-width: 600px;
      padding: 30px;
      animation: fadeIn 1s ease-out;
    }

    h1 {
      font-size: 120px;
      margin: 0;
      font-weight: 900;
      letter-spacing: -5px;
      color: #ff4c60;
      animation: bounce 2s infinite;
    }

    h2 {
      font-size: 32px;
      margin: 10px 0;
      font-weight: 600;
    }

    p {
      font-size: 18px;
      margin: 20px 0;
      line-height: 1.6;
      opacity: 0.9;
    }

    a {
      display: inline-block;
      margin-top: 25px;
      padding: 12px 28px;
      font-size: 18px;
      font-weight: bold;
      text-decoration: none;
      color: #1e3c72;
      background: #fff;
      border-radius: 50px;
      transition: 0.3s;
    }

    a:hover {
      background: #ff4c60;
      color: #fff;
      transform: translateY(-3px);
      box-shadow: 0 8px 20px rgba(0,0,0,0.3);
    }

    /* Floating animated shapes */
    .shape {
      position: absolute;
      border-radius: 50%;
      background: rgba(255, 255, 255, 0.1);
      animation: float 10s infinite ease-in-out;
    }

    .shape1 { width: 120px; height: 120px; top: 10%; left: 20%; }
    .shape2 { width: 200px; height: 200px; bottom: 15%; right: 15%; animation-duration: 12s; }
    .shape3 { width: 80px; height: 80px; bottom: 25%; left: 10%; animation-duration: 15s; }

    @keyframes fadeIn {
      from { opacity: 0; transform: scale(0.95); }
      to { opacity: 1; transform: scale(1); }
    }

    @keyframes bounce {
      0%, 100% { transform: translateY(0); }
      50% { transform: translateY(-10px); }
    }

    @keyframes float {
      0%, 100% { transform: translateY(0); }
      50% { transform: translateY(-30px); }
    }
  </style>
</head>
<body>
  <!-- Floating background shapes -->
  <div class="shape shape1"></div>
  <div class="shape shape2"></div>
  <div class="shape shape3"></div>

  <div class="container">
    <h1>404</h1>
    <h2>Oops! Page Not Found</h2>
    <p>It looks like the page you are trying to reach doesn’t exist,<br>
    has been moved, or is temporarily unavailable.</p>
    <a href="/index.php">Back to Home</a>
  </div>
</body>
</html>
