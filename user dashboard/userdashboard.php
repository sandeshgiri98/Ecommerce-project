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
                <div class="product-form-fill">
                <div class="brand_info">
                      <div class="brand">
                        <label for="brand">Brand</label>
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
                      </div>
                      <div class="types_laptop">
                        <label for="laptop-type">Select Laptop Type</label>
                        <select name="laptop-type" id="laptop-type">
                            <option value="Gaming Laptop">Gaming Laptop</option>
                            <option value="Notebook">Notebook</option>
                            <option value="Ultraportable">Ultraportable</option>
                            <option value="Ultrabook">Ultrabook</option>
                            <option value="Chromebook">Chromebook</option>
                            <option value="MacBook">MacBook</option>
                            <option value="Convertible (2-in-1)">Convertible (2-in-1)</option>
                            <option value="Tablet as a laptop">Tablet as a laptop</option>
                        </select>
                      </div>
                    </div>
                    <br>
                    <label for="name">Product Name</label>
                    <input type="text" id="name" name="name">
                    <br>
                    <label for="ram">RAM</label>
                    <div class="ram_types">
                      <div class="ram_gb">
                        <select name="ram" id="ram">
                        <option value="4GB">4GB</option>
                        <option value="8GB">8GB</option>
                        <option value="16GB">16GB</option>
                        <option value="32GB">32GB</option>
                        <option value="64GB">64GB</option>
                        </select>
                      </div>
                      <div class="ram_ddr">
                        <select name="ddr" id="ddr">
                          <option value="DDR3">DDR3</option>
                          <option value="DDR4">DDR4</option>
                          <option value="DDR5">DDR5</option>
                        </select>
                      </div>
                      <div class="ram_mhz">
                        <select name="mhz" id="mhz">
                          <option value="2400">2400 MHz</option>
                          <option value="2666">2666 MHz</option>
                          <option value="3000">3000 MHz</option>
                          <option value="3200">3200 MHz</option>
                          <option value="3600">3600 MHz</option>
                          <option value="4000">4000 MHz</option>
                          <option value="4266">4266 MHz</option>
                          <option value="4400">4400 MHz</option>
                          <option value="5333">5333 MHz</option>
                          <option value="6400">6400 MHz</option>
                        </select>
                      </div>
                    </div>
                    <br>
                     <div class="storage">
                      <div class="ssd_storage_types">
                        <label for="ssd">SSD Storage</label>
                        <select name="ssd" id="ssd">
                          <option value="128GB">128GB SSD</option>
                          <option value="250GB">250GB SSD</option>
                          <option value="500GB">500GB SSD</option>
                          <option value="1TB">1TB SSD</option>
                          <option value="2TB">2TB SSD</option>
                        </select>
                      </div>
                      <div class="ssd_types">
                      <label for="ssd_types">SSD Types</label>
                        <select name="ssd_types" id="ssd_types">
                          <option value="NVMe">NVMe SSD</option>
                          <option value="SATA">SATA SSD</option>
                          <option value="M.2">M.2 SSD</option>
                          <option value="PCIe">PCIe SSD</option>
                          <option value="External">External SSD</option>
                        </select>
                      </div>
                      <div class="hdd_types">
                        <label for="hdd">HDD Storage</label>
                        <select name="memory-size" id="memory-size">
                        <option value="128 GB">128 GB</option>
                        <option value="256 GB">256 GB</option>
                        <option value="512 GB">512 GB</option>
                        <option value="1 TB">1 TB</option>
                        <option value="2 TB">2 TB</option>
                        <option value="4 TB">4 TB</option>
                        <option value="8 TB">8 TB</option>
                        </select>
                      </div>
                     </div>
                     <br>
                      <div class="price_list">
                        <div>
                          <label for="main-price">Main Price</label>
                          <input type="number" id="main-price" name="main-price">
                        </div>
                        <div>
                          <label for="discount-price">Discount Price</label>
                          <input type="number" id="discount-price" name="discount-price">
                        </div>
                       
                        <div>
                          <label for="offer-price">Offer Price</label>
                          <input type="number" id="offer-price" name="offer-price" readonly>
                        </div>
                      </div>
                        <br>
                        <h1>Upload Product Photo</h1>
                        <input type="file" id="photoInput" name="image" accept="image/*">
                    </div>
                <button type="submit">Submit    
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
