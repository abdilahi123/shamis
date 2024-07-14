<?php include '../assets/components/header.php';
include '../assets/components/sidebar.php'
?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>User Management</title>
<style>
body {
  font-family: Arial, sans-serif;
  background-color: #f0f0f0;
  margin: 0;
  padding: 0;
}

.container {
  max-width: 800px;
  margin: 20px auto;
  background-color: #fff;
  padding: 20px;
  border-radius: 8px;
  box-shadow: 0 0 10px rgba(0,0,0,0.1);
}

h1 {
  text-align: center;
  color: #333;
}

table {
  width: 100%;
  border-collapse: collapse;
  margin-top: 20px;
}

table, th, td {
  border: 1px solid #ccc;
}

th, td {
  padding: 12px;
  text-align: left;
}

th {
  background-color: #f2f2f2;
  color: #333;
}

tr:nth-child(even) {
  background-color: #f9f9f9;
}

tr:hover {
  background-color: #e0e0e0;
  cursor: pointer;
}

.btn {
  display: inline-block;
  padding: 8px 16px;
  text-decoration: none;
  background-color: #007bff;
  color: #fff;
  border-radius: 4px;
}

.btn:hover {
  background-color: #0056b3;
}
</style>
</head>
<body>

<div class="container">
  <h1>User Management</h1>
  
  <table>
    <thead>
      <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Role</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>John Doe</td>
        <td>john.doe@example.com</td>
        <td>Parent</td>
        <td><a href="#" class="btn">Edit</a> <a href="#" class="btn">Delete</a></td>
      </tr>
      <tr>
        <td>Jane Smith</td>
        <td>jane.smith@example.com</td>
        <td>Admin</td>
        <td><a href="#" class="btn">Edit</a> <a href="#" class="btn">Delete</a></td>
      </tr>
      <!-- Add more rows as needed -->
    </tbody>
  </table>
</div>

</body>
</html>



    <?php include '../assets/components/footer.php'; ?>