<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Admin Dashboard</title>
  <link rel="stylesheet" href="admindash.css" />
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
            <form action="../admin_dashboard/redirect.php" method="POST">
              <!------------------------------------------------------------------------------------------------->
                <div class="product-form-fill">
                <div class="brand_info">
                      <div class="brand">
                        <label for="brand">Brand</label>
                        <select id="brand" name="brand" required>
                        <option value="" disabled selected>Select</option>
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
                      <!------------------------------------------------------------------------------------------------->
                      <div class="laptop_types">
                        <label for="laptop-type">Select Laptop Type</label>
                        <select id="laptop-type"  name="laptop_type" required>
                            <option value="" disabled selected>Select</option>
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
                    <!------------------------------------------------------------------------------------------------->
                    <label for="name">Product Name</label>
                    <input type="text" id="name" name="name" required>
                    <br>
                    <!------------------------------------------------------------------------------------------------->
                    <label for="graphics_card">Select Graphics Card</label>
                    <select id="graphics_card" name="graphics_card">
                    <option value="" disabled selected>Select</option>
                      <optgroup label="NVIDIA GeForce RTX Series">
                       <option value="None">None</option>
                        <option value="GeForce RTX 4090">GeForce RTX 4090</option>
                        <option value="GeForce RTX 4080Ti">GeForce RTX 4080Ti</option>
                        <option value="GeForce RTX 4080">GeForce RTX 4080</option>
                        <option value="GeForce RTX 4070Ti">GeForce RTX 4070Ti</option>
                        <option value="GeForce RTX 4070">GeForce RTX 4070</option>
                        <option value="GeForce RTX 4060Ti">GeForce RTX 4060Ti</option>
                        <option value="GeForce RTX 4060">GeForce RTX 4060</option>
                        <option value="GeForce RTX 4050Ti">GeForce RTX 4050Ti</option>
                        <option value="GeForce RTX 4050">GeForce RTX 4050</option>
                        <option value="GeForce RTX 3090Ti">GeForce RTX 3090Ti</option>
                        <option value="GeForce RTX 3090">GeForce RTX 3090</option>
                        <option value="GeForce RTX 3080Ti">GeForce RTX 3080Ti</option>
                        <option value="GeForce RTX 3080">GeForce RTX 3080</option>
                        <option value="GeForce RTX 3070Ti">GeForce RTX 3070Ti</option>
                        <option value="GeForce RTX 3070">GeForce RTX 3070</option>
                        <option value="GeForce RTX 3060 Ti">GeForce RTX 3060 Ti</option>
                        <option value="GeForce RTX 3060">GeForce RTX 3060</option>
                        <option value="GeForce RTX 3050 Ti">GeForce RTX 3050 Ti</option>
                        <option value="GeForce RTX 3050">GeForce RTX 3050</option>
                      </optgroup>
                      <optgroup label="NVIDIA GeForce GTX Series">
                        <option value="GeForce GTX 1660 Ti">GeForce GTX 1660 Ti</option>
                        <option value="GeForce GTX 1660 Super">GeForce GTX 1660 Super</option>
                        <option value="GeForce GTX 1660">GeForce GTX 1660</option>
                        <option value="GeForce GTX 1650 Super">GeForce GTX 1650 Super</option>
                        <option value="GeForce GTX 1650">GeForce GTX 1650</option>
                      </optgroup>
                      <optgroup label="AMD Radeon RX Series">
                        <option value="Radeon RX 6900 XT">Radeon RX 6900 XT</option>
                        <option value="Radeon RX 6800 XT">Radeon RX 6800 XT</option>
                        <option value="Radeon RX 6800">Radeon RX 6800</option>
                        <option value="Radeon RX 6700 XT">Radeon RX 6700 XT</option>
                        <option value="Radeon RX 6600 XT">Radeon RX 6600 XT</option>
                        <option value="Radeon RX 6600">Radeon RX 6600</option>
                      </optgroup>
                      <optgroup label="Intel Xe Graphics Series">
                        <option value="Intel Iris Xe Graphics G7">Intel Iris Xe Graphics G7</option>
                        <option value="Intel Iris Xe Graphics G4">Intel Iris Xe Graphics G4</option>
                        <option value="Intel UHD Graphics Xe G4">Intel UHD Graphics Xe G4</option>
                      </optgroup>
                    </select>
                    <br>
                    <!------------------------------------------------------------------------------------------------->
                    <label for="processor">Select a Processor:</label>
                    <select id="processor" name="processor" required>
                        <option value="">Select Processor</option>
                        
                        <optgroup label="Intel Core 13th Gen">
                            <option value="i9">Intel Core i9 (13th Gen)</option>
                            <option value="i7">Intel Core i7 (13th Gen)</option>
                            <option value="i5">Intel Core i5 (13th Gen)</option>
                            <option value="i3">Intel Core i3 (13th Gen)</option>
                        </optgroup>
                        <optgroup label="Intel Core 12th Gen">
                            <option value="i9">Intel Core i9 (12th Gen)</option>
                            <option value="i7">Intel Core i7 (12th Gen)</option>
                            <option value="i5">Intel Core i5 (12th Gen)</option>
                            <option value="i3">Intel Core i3 (12th Gen)</option>
                        </optgroup>
                        <optgroup label="Intel Core 10th Gen">
                            <option value="i9">Intel Core i9 (10th Gen)</option>
                            <option value="i7">Intel Core i7 (10th Gen)</option>
                            <option value="i5">Intel Core i5 (10th Gen)</option>
                            <option value="i3">Intel Core i3 (10th Gen)</option>
                        </optgroup>
                        <optgroup label="Intel Core 9th Gen">
                            <option value="i9">Intel Core i9 (9th Gen)</option>
                            <option value="i7">Intel Core i7 (9th Gen)</option>
                            <option value="i5">Intel Core i5 (9th Gen)</option>
                            <option value="i3">Intel Core i3 (9th Gen)</option>
                        </optgroup>
                        
                        <optgroup label="AMD Ryzen">
                            <option value="9">AMD Ryzen 9</option>
                            <option value="7">AMD Ryzen 7</option>
                            <option value="5">AMD Ryzen 5</option>
                            <option value="3">AMD Ryzen 3</option>
                            <option value="Threadripper">AMD Ryzen Threadripper</option>
                        </optgroup>
                        
                        <optgroup label="Apple M">
                            <option value="M1">Apple M1 </option>
                            <option value="M1X">Apple M1X </option>
                            <option value="M2">Apple M2 </option>
                        </optgroup>
                        
                        <optgroup label="Qualcomm Snapdragon">
                            <option value="Snapdragon 8">Qualcomm Snapdragon 8 </option>
                            <option value="Snapdragon 7">Qualcomm Snapdragon 7 </option>
                            <option value="Snapdragon 6">Qualcomm Snapdragon 6 </option>
                        </optgroup>
                        
                        <optgroup label="IBM POWER">
                            <option value="POWER9">IBM POWER9</option>
                            <option value="POWER10">IBM POWER10</option>
                        </optgroup>
                        
                        <optgroup label="NVIDIA Tegra">
                            <option value="Tegra X1">NVIDIA Tegra X1 </option>
                            <option value="Tegra X2">NVIDIA Tegra X2 </option>
                        </optgroup>
                        
                        <optgroup label="ARM Cortex">
                            <option value="Cortex-A">ARM Cortex-A </option>
                            <option value="Cortex-R">ARM Cortex-R</option>
                            <option value="Cortex-M">ARM Cortex-M</option>
                        </optgroup>
                    </select>
                    <br>
                    <!------------------------------------------------------------------------------------------------->
                    <label for="ram">RAM</label>
                    <div class="ram_types">
                      <div class="ram_gb">
                        <select name="ram" id="ram" required>
                        <option value="" disabled selected>Select</option>
                        <option value="4GB">4GB</option>
                        <option value="8GB">8GB</option>
                        <option value="16GB">16GB</option>
                        <option value="32GB">32GB</option>
                        <option value="64GB">64GB</option>
                        </select>
                      </div>
                      <div class="ram_ddr">
                        <select name="ddr" id="ddr" required>
                          <option value="" disabled selected>Select</option>
                          <option value="DDR3">DDR3</option>
                          <option value="DDR4">DDR4</option>
                          <option value="DDR5">DDR5</option>
                        </select>
                      </div>
                      <div class="ram_mhz">
                        <select name="mhz" id="mhz" required>
                          <option value="" disabled selected>Select</option>
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
                    <!------------------------------------------------------------------------------------------------->
                     <div class="storage">
                      <div class="ssd_storage_types">
                        <label for="ssd">SSD Storage</label>
                        <select id="ssd" name="ssd" >
                          <option value="" disabled selected>Select</option>
                          <option value="None">None</option>
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
                          <option value="" disabled selected>Select</option>
                          <option value="None">None</option>
                          <option value="NVMe">NVMe SSD</option>
                          <option value="SATA">SATA SSD</option>
                          <option value="M.2">M.2 SSD</option>
                          <option value="PCIe">PCIe SSD</option>
                          <option value="External">External SSD</option>
                        </select>
                      </div>
                      <div class="hdd_types">
                        <label for="hdd">HDD Storage</label>
                        <select id="memory_size" name="memory_size">
                        <option value="" disabled selected>Select</option>
                        <option value="None">None</option>
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
                     <!------------------------------------------------------------------------------------------------->
                      <div class="price_list">
                        <div>
                          <label for="main-price">Main Price</label>
                          <input type="number" id="main-price" name="main-price" required>
                        </div>
                        <div>
                          <label for="discount-price">Discount Price</label>
                          <input type="number" id="discount-price" name="discount-price" >
                        </div>
                       
                        <div>
                          <label for="offer-price">Offer Price</label>
                          <input type="number" id="offer-price" name="offer-price" readonly>
                        </div>
                      </div>
                        <br>
                        <h1>Upload Product Photo</h1>
                        <input type="file" id="photoInput" name="image" accept="image/*" required>
                    </div>
                    <!------------------------------------------------------------------------------------------------->
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
