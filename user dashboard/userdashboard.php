<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>User Dashboard</title>
  <link rel="stylesheet" href="userdash.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/>
</head>
<body>
  <div class="container">
    <nav>
      <ul>
        <li><a href="#" class="logo">
          <img src="usser.gif">
          <span class="nav-item">Admin</span>
        </a></li>
        <li><a href="#">
          <i class="fas fa-menorah"></i>
          <span class="nav-item">Dashboard</span>
        </a></li>
        <li><a href="#">
          <i class="fas fa-comment"></i>
          <span class="nav-item">Message</span>
        </a></li>
        <li><a href="#">
          <i class="fas fa-database"></i>
          <span class="nav-item">Report</span>
        </a></li>
        <li><a href="#">
          <i class="fas fa-chart-bar"></i>
          <span class="nav-item">Products</span>
        </a></li>
        <li><a href="#">
          <i class="fas fa-cog"></i>
          <span class="nav-item">Setting</span>
        </a></li>

        <li><a href="#" class="logout">
          <i class="fas fa-sign-out-alt"></i>
          <span class="nav-item">Log out</span>
        </a></li>
      </ul>
    </nav>


    <section class="main">
      <div class="main-top">
      </div>
      <section class="Products">
        <div class="product-details">
          <h1 class="product-heading">Product Details</h1>
          <div class="product-adding-form">
            <form action="../user dashboard/redirect.php" method="POST">
              <fieldset style="border: 1px solid black;">
                <legend align="center">Product Information</legend>
                <div class="product-form-fill">

                  <label for="brand">Brand:</label>
                  <select id="brand" name="brand">
                    <option value="asus">Asus</option>
                    <option value="dell">Dell</option>
                    <option value="hp">HP</option>
                    <option value="macbook">Macbook</option>
                    <option value="lenovo">Lenovo</option>
                    <option value="samsung">Samsung</option>
                    <option value="microsoft">Microsoft</option>
                    <option value="msi">MSI</option>
                    <option value="vaio">VAIO</option>
                    <option value="huawei">Huawei</option>
                    <option value="razer">Razer</option>
                  </select>

                    <br>
                    <label for="name">Product Name</label>
                    <input type="name" id="name" name="name">
                    <br>
                        
                    <label for="ram" >RAM</label>
                    <input type="text" id="ram" name="ram">
                    <br>
                      <label for="ssd" >SSD</label>
                      <input type="text" id="ssd" name="ssd">
                    <br>
                    <h1>Upload Product Photo</h1>
                    <input type="file" id="photoInput" name="image" accept="image/*">
                    </div>
                <button type="submit">Submit    
              </fieldset>
            </form>
          </div>
        </div>
      <!-- <section class="attendance">
        <div class="attendance-list">
          <h1>Product Details</h1>
          <table class="table">
            <thead>
              <tr>
                <th>ID</th>
                <th>Brand and Model</th>
                <th>Processor</th>
                <th>RAM</th>
                <th>SSD</th>
                <th>Graphics Card</th>
                <th>Specifications</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td>MSI Raider GE78 Gaming Laptop</td>
                <td>Intel Core i9</td>
                <td>32GB</td>
                <td>2 TB PCIe SSD</td>
                <td>NVIDIA GeForce RTX 4050 12 GB</td>
                <td><button>View</button></td>
              </tr>
              <tr>
                <td>2</td>
                <td>ASUS TUF Gaming A17</td>
                <td>Intel Core i7</td>
                <td>16GB</td>
                <td>1 TB SSD</td>
                <td>NVIDIA GeForce RTX 3070 4 GB</td>
                <td><button>View</button></td>
              </tr>
              <tr>
                <td>3</td>
                <td>Microsoft Surfafce 13</td>
                <td>Intel Core i5</td>
                <td>8GB</td>
                <td>1 TB PCIe SSD</td>
                <td>Intel inbuilt 4GB</td>
                <td><button>View</button></td>
              </tr>
              <tr>
                <td>4</td>
                <td>Alienware AX15</td>
                <td>Intel Core i7</td>
                <td>16GB</td>
                <td>512 PCIe SSD</td>
                <td>NVIDIA GeForce RTX 3050 4 GB</td>
                <td><button>View</button></td>
              </tr>
            </tbody>
          </table>
        </div>
      </section> -->
    </section>
  </div>
  <script>

  </script>

</body>
</html>
