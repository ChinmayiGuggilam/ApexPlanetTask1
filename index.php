<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Local Dev Environment</title>
  <style>
    body {
      margin: 0;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background: linear-gradient(to right, #a1c4fd, #c2e9fb);
      display: flex;
      align-items: center;
      justify-content: center;
      min-height: 100vh;
      padding: 20px;
    }

    .container {
      display: flex;
      flex-wrap: wrap;
      gap: 30px;
      justify-content: center;
    }

    .card {
      background-color: #fff;
      width: 280px;
      padding: 25px;
      border-radius: 15px;
      box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
      text-align: center;
      transition: transform 0.3s ease;
    }

    .card:hover {
      transform: scale(1.05);
    }

    .card img {
      width: 100px;
      height: auto;
      margin-bottom: 15px;
    }

    .card h2 {
      margin: 10px 0;
      color: #333;
    }

    .card p {
      font-size: 14px;
      color: #666;
    }
  </style>
</head>
<body>

<div class="container">

  <!-- PHP Card -->
  <div class="card">
    <img src="https://www.php.net/images/logos/php-logo.svg" alt="PHP Logo">
    <h2><?php echo "PHP"; ?></h2>
    <p>PHP is a popular server-side scripting language designed for web development.</p>
  </div>

  <!-- MySQL Card -->
  <div class="card">
    <img src="https://upload.wikimedia.org/wikipedia/en/d/dd/MySQL_logo.svg" alt="MySQL Logo">
    <h2>MySQL</h2>
    <p>MySQL is an open-source relational database management system, commonly used with PHP.</p>
  </div>

</div>

</body>
</html>
