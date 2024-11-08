<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Profile Page</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    .sidebar {
      height: 100vh;
      width: 250px;
      position: fixed;
      top: 0;
      left: 0;
      background-color: #0d6efd;
      padding-top: 20px;
    }
    .sidebar a {
      color: white;
      padding: 15px;
      text-decoration: none;
      display: block;
      text-align: left;
    }
    .sidebar a:hover {
      background-color: #007bff;
    }
    .main-content {
      margin-left: 250px;
      padding: 20px;
    }
    .profile-header {
      display: flex;
      align-items: center;
    }
    .profile-header img {
      border-radius: 50%;
      margin-right: 15px;
    }
  </style>
</head>
<body>

  <!-- Sidebar -->
  <div class="sidebar">
    <a href="#"><img src="https://via.placeholder.com/50" alt="User Image" class="rounded-circle me-2"> Alexis</a>
    <a href="#">Profil</a>
    <a href="#">Favorite</a>
    <a href="#">Setting</a>
    <a href="#">Log-out</a>
  </div>

  <!-- Main content -->
  <div class="main-content">
    <h2>Profil</h2>
    <div class="card p-4">
      <div class="profile-header">
        <img src="https://via.placeholder.com/100" alt="Profile Image">
        <div>
          <h4>Alexis_keren</h4>
          <p>Google</p>
        </div>
      </div>
      <hr>
      <p><strong>Alexis</strong></p>
      <p>Jakarta Selatan</p>
      <p><a href="https://instagram.com/Alexis._" target="_blank">https://instagram.com/Alexis._</a></p>
      <button class="btn btn-secondary">Edit Profil</button>
    </div>
  </div>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
