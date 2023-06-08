<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="frontpage.css"/>
    <link rel="stylesheet" href="cart.css" />
  </head>
  <body>
    <!-- head -->

<div class="header">
  <span class="nav_left">
      <img class="sliders" src="slider/logo3.svg" alt="" style="width: 60px; height: 50px; margin-right: 300px;" />
  </span>
  <nav>
      <ul class="nav_ul">
          <span><li><a href="#" class="ab">Laptop</a></li></span>
          <span><li><a href="#" class="ab">Custom PC</a></li></span>
          <span><li><a href="#" class="ab">Gaming Gears</a></li></span>
          <span><li><a href="#" class="ab">Gaming</a></li></span>
      </ul>
  </nav>
  

  <span class="nav_right">
      <form action="">
          <input type="search" placeholder="Search.." />
          <a href="">
              <span class="search_notif">
                  <img class="sliders"src="slider/search.png" alt="" style="width: 1.1rem; height: 1.1rem; margin: 0px 3px 0px 5px" />
                  
              </span>
          </a>

          <a href="">
              <span class="search_notif">
                  <img src="photoes/addtocart.svg" alt="" style="width: 1.2rem; height: 1.2rem;margin: 0px px 0px 5px" />
                  <span id="count">

                  </span>
              </span>
          </a>
      </form>
  </span>
  <div class="login_register">
    <div>
     <a href="../login/login.php" id="login_button">Login</a></p>
    </div>
    <div>
      <a href="../register/Register.php" id="register_button">Register</a></p>
    </div>
  </div>
</div>

<!-- body -->

<div class="body" style="display: flex;justify-content: space-around;">

  <div style="width:98%;background: #32353b;height: 350px;margin: 10px;display: flex;box-shadow: 2px 2px 8px black;" class="img_slider">
      <!-- <img src="slider/leftt.png" alt="" class="ar1" style="transform: rotate(180deg);"> -->
      <img class="sliders" src="photoes/macbook.jpg" alt="image not found" id="slider">
      <!-- <img src="slider/leftt.png" alt="" class="ar2" style="transform: rotate(180deg);"> -->
  </div>

        <!------------------------------------------------------------------------------------->
        <!-- New Arrivals -->
    </div>
    <div class="container">
      <p class="head-text" style="margin-top: 10px;"><b>New Arrivals</b></p>
            <!-- new Cart file -->
            <div class="new-arrivals-cards">
            <div class="cart">
              <a href="https://www.google.com/">
                <div class="inner-photo">New</div>
                <div class="inner-cart">
                  <span><img class="product-nm" src="photoes/lap11.jpg" alt="Image Not Found"></span>
                </div>
                <div class="paragraph">
                  <p class="product-name" name="product"><b>DELL XPS13</b></p>
                  <div class="product-title__title">           
                    <p class="product-title__info">
                      <span class="product-title">13.5</span>
                      <span class="product-title">Intel i5</span>
                      <span class="product-title">8GB RAM</span>
                      <span class="product-title">256GB</span>
                      <span class="product-title">Silver Gray</span>
                      <span class="product-title">Nvdia GEFORCE RTX 4080 24GB </span>
                    </p>
                  </div>
                </div>
                <div class="price-box">
                  <p class="price" name="price">NPR 56,000</p>
                  <p class="SP">57,700</p>
                </div>
                <div class="discount">
                  <span class="save">Save: </span>
                  <span class="currency">NPR</span>
                  <span><b>1,700</b></span>
                </div>
                <div class="line"></div>
              </a>
              <div class="last-part">
                <div class="button-container">
                  <button class="add-to-cart" id="cart-added" alt="add to cart" value="AddToCart" type="submit">
                    <img class="img-cart" src="photoes/addtocart.svg" alt="Image not found">
                  </button>
                  <!-------------------------------------->
                  <div class="popup-overlay">
                    <div class="popup-content">
                      <p>Successfully added to cart.</p>
                      <button class="close-button">Close</button>
                    </div>
                  </div>
                </div>
                <div class="button-container">
                  <button class="add-to-cart" value="AddToCart" type="submit">
                    <img class="img-cart" id="downcart" onclick="photoFunction()" src="photoes/wishlist.svg" alt="Image not found">
                  </button>
                </div>
              </div>
            </div>
            <!-- First Cart File End -->
                <!-- cart 2 -->
                <div class="cart">
                  <a href="https://www.google.com/">
                    <div class="inner-photo">New</div>
                    <div class="inner-cart">
                      <span><img class="product-nm" src="photoes/ppp/1.jpg" alt="Image Not Found"></span>
                    </div>
                    <div class="paragraph">
                      <p class="product-name" name="product"><b>Asus VivoBook 15 Laptop</b></p>
                      <div class="product-title__title">           
                        <p class="product-title__info">
                          <span class="product-title">15.6</span>
                          <span class="product-title">Intel i3</span>
                          <span class="product-title">4GB RAM</span>
                          <span class="product-title">256GB NVMe M.2 SSD</span>
                          <span class="product-title">Silver Gray</span>
                        </p>
                      </div>
                    </div>
                    <div class="price-box">
                      <p class="price" name="price">NPR 81,999</p>
                      <p class="SP">83,000</p>
                    </div>
                    <div class="discount">
                      <span class="save">Save: </span>
                      <span class="currency">NPR</span>
                      <span><b>1,001</b></span>
                    </div>
                    <div class="line"></div>
                  </a>
                  <div class="last-part">
                    <div class="button-container">
                      <button class="add-to-cart" value="AddToCart" type="submit">
                        <img class="img-cart" src="photoes/addtocart.svg" alt="Image not found">
                      </button>
                      <!-- <div class="popup-overlay">
                        <div class="popup-content">
                          <p>Successfully added to cart.</p>
                          <button class="close-button">Close</button>
                        </div>
                      </div> -->
                    </div>
                    <div class="button-container">
                      <button class="add-to-cart" value="AddToCart" type="submit">
                        <img class="img-cart" id="downcart" onclick="photoFunction()" src="photoes/wishlist.svg" alt="Image not found">
                      </button>
                    </div>
                  </div>
                </div>
                <!-- 2nd Cart File End -->
                <!-- cart 3 -->
                <div class="cart">
                  <a href="https://www.google.com/">
                    <div class="inner-photo">New</div>
                    <div class="inner-cart">
                      <span><img class="product-nm" src="photoes/ppp/2.jpg" alt="Image Not Found"></span>
                    </div>
                    <div class="paragraph">
                      <p class="product-name" name="product"><b>MSI Raider GE78 Gaming Laptop</b></p>
                      <div class="product-title__title">           
                        <p class="product-title__info">
                          <span class="product-title">17</span>
                          <span class="product-title">Intel Core i9</span>
                          <span class="product-title">32GB RAM</span>
                          <span class="product-title">2 TB PCIe NVMe M.2 SSD </span>
                          <!-- <span class="product-title">Black</span> -->
                        </p>
                      </div>
                    </div>
                    <div class="price-box">
                      <p class="price" name="price">NPR 7,20,000</p>
                      <!-- <p class="SP">57,700</p> -->
                    </div>
                    <!-- <div class="discount">
                      <span class="save">Save: </span>
                      <span class="currency">NPR</span>
                      <span><b>1,700</b></span>
                    </div> -->
                    <div class="line" style="margin-top: 32px;"></div>
                  </a>
                  <div class="last-part">
                    <div class="button-container">
                      <button class="add-to-cart" value="AddToCart" type="submit">
                        <img class="img-cart" src="photoes/addtocart.svg" alt="Image not found">
                      </button>
                      <!-- <div class="popup-overlay">
                        <div class="popup-content">
                          <p>Successfully added to cart.</p>
                          <button class="close-button">Close</button>
                        </div>
                      </div> -->
                    </div>
                    <div class="button-container">
                      <button class="add-to-cart" value="AddToCart" type="submit">
                        <img class="img-cart" id="downcart" onclick="photoFunction()" src="photoes/wishlist.svg" alt="Image not found">
                      </button>
                    </div>
                  </div>
                </div>
                <!-- 3rd Cart File End -->
                <!-- cart 4 -->
                <div class="cart">
                  <a href="https://www.google.com/">
                    <div class="inner-photo">New</div>
                    <div class="inner-cart">
                      <span><img class="product-nm" src="photoes/ppp/4.jpg" alt="Image Not Found"></span>
                    </div>
                    <div class="paragraph">
                      <p class="product-name" name="product"><b>ROG Strix SCAR18 Gaming Laptop</b></p>
                      <div class="product-title__title">           
                        <p class="product-title__info">
                          <span class="product-title">18</span>
                          <span class="product-title">Intel Core i9</span>
                          <span class="product-title">32GB RAM</span>
                          <span class="product-title">2TB SSD</span>
                          <span class="product-title">RTX 4080 24GB </span>
                        </p>
                      </div>
                    </div>
                    <div class="price-box">
                      <p class="price" name="price">NPR 5,90,000</p>
                      <!-- <p class="SP">57,700</p> -->
                    </div>
                    <!-- <div class="discount">
                      <span class="save">Save: </span>
                      <span class="currency">NPR</span>
                      <span><b>1,700</b></span>
                    </div> -->
                    <div class="line" style="margin-top: 32px;"></div>
                  </a>
                  <div class="last-part">
                    <div class="button-container">
                      <button class="add-to-cart"  value="AddToCart" type="submit">
                        <img class="img-cart" src="photoes/addtocart.svg" alt="Image not found">
                      </button>
                      <!-- <div class="popup-overlay">
                        <div class="popup-content">
                          <p>Successfully added to cart.</p>
                          <button class="close-button">Close</button>
                        </div>
                      </div> -->
                    </div>
                    <div class="button-container">
                      <button class="add-to-cart" value="AddToCart" type="submit">
                        <img class="img-cart" id="downcart" onclick="photoFunction()" src="photoes/wishlist.svg" alt="Image not found">
                      </button>
                    </div>
                  </div>
                </div>
                <!-- 4th Cart File End -->
                <!-- cart 5 -->
                <div class="cart">
                  <a href="https://www.google.com/">
                    <div class="inner-photo">New</div>
                    <div class="inner-cart">
                      <span><img class="product-nm" src="photoes/ppp/5.jpg" alt="Image Not Found"></span>
                    </div>
                    <div class="paragraph">
                      <p class="product-name" name="product"><b>Lenovo Legion S7 Gaming Laptop</b></p>
                      <div class="product-title__title">           
                        <p class="product-title__info">
                          <span class="product-title">16</span>
                          <span class="product-title">Intel Core i7</span>
                          <span class="product-title">24GB RAM</span>
                          <span class="product-title">1 TB M.2 NVMe PCIe 4.0 SSD</span>
                          <!-- <span class="product-title">Silver Gray</span> -->
                        </p>
                      </div>
                    </div>
                    <div class="price-box">
                      <p class="price" name="price">NPR 3,50,000</p>
                      <p class="SP">3,70,000</p>
                    </div>
                    <div class="discount">
                      <span class="save">Save: </span>
                      <span class="currency">NPR</span>
                      <span><b>20,000</b></span>
                    </div>
                    <div class="line"></div>
                  </a>
                  <div class="last-part">
                    <div class="button-container">
                      <button class="add-to-cart" value="AddToCart" type="submit">
                        <img class="img-cart" src="photoes/addtocart.svg" alt="Image not found">
                      </button>
                      <!-- <div class="popup-overlay">
                        <div class="popup-content">
                          <p>Successfully added to cart.</p>
                          <button class="close-button">Close</button>
                        </div>
                      </div> -->
                    </div>
                    <div class="button-container">
                      <button class="add-to-cart" value="AddToCart" type="submit">
                        <img class="img-cart" id="downcart" onclick="photoFunction()" src="photoes/wishlist.svg" alt="Image not found">
                      </button>
                    </div>
                  </div>
                </div>
              </div>
                <!-- ALL THE END -->
                 <!------------------------------------------------------------------------------------->
        <!--Weekly Offers-->
                <div class="container2">
                  <p class="head-text" style="margin-top: 10px;"><b>Weekly Offers</b></p>
                        <!-- new Cart file -->
                        <div class="new-arrivals-cards">
                        <div class="cart">
                          <a href="https://www.google.com/">
                            <div class="inner-photo">Offer</div>
                            <div class="inner-cart">
                              <span><img class="product-nm" src="photoes/ppp/6.jpg" alt="Image Not Found"></span>
                            </div>
                            <div class="paragraph">
                              <p class="product-name" name="product"><b>ROG ZephyrusG15 Gaming Laptop</b></p>
                              <div class="product-title__title">           
                                <p class="product-title__info">
                                  <span class="product-title">15.6</span>
                                  <span class="product-title">AMD Ryzen 7</span>
                                  <span class="product-title">8GB RAM</span>
                                  <span class="product-title">1 TB M.2 NVMe PCIe 4.0 SSD</span>
                                  <!-- <span class="product-title">NVIDIA GeForce 6 GB</span> -->
                                </p>
                              </div>
                            </div>
                            <div class="price-box">
                              <p class="price" name="price">NPR 3,80,000</p>
                              <p class="SP">3,95,000</p>
                            </div>
                            <div class="discount">
                              <span class="save">Save: </span>
                              <span class="currency">NPR</span>
                              <span><b>15,000</b></span>
                            </div>
                            <div class="line"></div>
                          </a>
                          <div class="last-part">
                            <div class="button-container">
                              <button class="add-to-cart" alt="add to cart" value="AddToCart" type="submit">
                                <img class="img-cart" src="photoes/addtocart.svg" alt="Image not found">
                              </button>
                              <!-- <div class="popup-overlay">
                                <div class="popup-content">
                                  <p>Successfully added to cart.</p>
                                  <button class="close-button">Close</button>
                                </div>
                              </div> -->
                            </div>
                            <div class="button-container">
                              <button class="add-to-cart" value="AddToCart" type="submit">
                                <img class="img-cart" id="downcart" onclick="photoFunction()" src="photoes/wishlist.svg" alt="Image not found">
                              </button>
                            </div>
                          </div>
                        </div>
                        <!-- First Cart File End -->
                            <!-- cart 2 -->
                            <div class="cart">
                              <a href="https://www.google.com/">
                                <div class="inner-photo">Offer</div>
                                <div class="inner-cart">
                                  <span><img class="product-nm" src="photoes/ppp/7.jpg" alt="Image Not Found"></span>
                                </div>
                                <div class="paragraph">
                                  <p class="product-name" name="product"><b>MSI GF66 Gaming Laptop</b></p>
                                  <div class="product-title__title">           
                                    <p class="product-title__info">
                                      <span class="product-title">15.6</span>
                                      <span class="product-title">Intel Core i7</span>
                                      <span class="product-title">16GB RAM</span>
                                      <span class="product-title">1 TB SSD</span>
                                      <span class="product-title">NVIDIA GeForce 8 GB</span>
                                    </p>
                                  </div>
                                </div>
                                <div class="price-box">
                                  <p class="price" name="price">NPR 4,12,000</p>
                                  <p class="SP">4,15,000</p>
                                </div>
                                <div class="discount">
                                  <span class="save">Save: </span>
                                  <span class="currency">NPR</span>
                                  <span><b>3,000</b></span>
                                </div>
                                <div class="line"></div>
                              </a>
                              <div class="last-part">
                                <div class="button-container">
                                  <button class="add-to-cart" value="AddToCart" type="submit">
                                    <img class="img-cart" src="photoes/addtocart.svg" alt="Image not found">
                                  </button>
                                  <!-- <div class="popup-overlay">
                                    <div class="popup-content">
                                      <p>Successfully added to cart.</p>
                                      <button class="close-button">Close</button>
                                    </div>
                                  </div> -->
                                </div>
                                <div class="button-container">
                                  <button class="add-to-cart" value="AddToCart" type="submit">
                                    <img class="img-cart" id="downcart" onclick="photoFunction()" src="photoes/wishlist.svg" alt="Image not found">
                                  </button>
                                </div>
                              </div>
                            </div>
                            <!-- 2nd Cart File End -->
                            <!-- cart 3 -->
                            <div class="cart">
                              <a href="https://www.google.com/">
                                <div class="inner-photo">Offer</div>
                                <div class="inner-cart">
                                  <span><img class="product-nm" src="photoes/ppp/8.jpg" alt="Image Not Found"></span>
                                </div>
                                <div class="paragraph">
                                  <p class="product-name" name="product"><b>Asus TUF Gaming F17 Laptop</b></p>
                                  <div class="product-title__title">           
                                    <p class="product-title__info">
                                      <span class="product-title">17.3</span>
                                      <span class="product-title">Intel Core i7</span>
                                      <span class="product-title">16GB RAM</span>
                                      <span class="product-title">1 TB PCIe NVMe M.2 SSD </span>
                                      <!-- <span class="product-title">Black</span> -->
                                    </p>
                                  </div>
                                </div>
                                <div class="price-box">
                                  <p class="price" name="price">NPR 5,49,999</p>
                                  <p class="SP">5,60,000</p>
                                </div>
                                <div class="discount">
                                  <span class="save">Save: </span>
                                  <span class="currency">NPR</span>
                                  <span><b>10,001</b></span>
                                </div>
                                <div class="line"></div>
                              </a>
                              <div class="last-part">
                                <div class="button-container">
                                  <button class="add-to-cart" value="AddToCart" type="submit">
                                    <img class="img-cart" src="photoes/addtocart.svg" alt="Image not found">
                                  </button>
                                  <!-- <div class="popup-overlay">
                                    <div class="popup-content">
                                      <p>Successfully added to cart.</p>
                                      <button class="close-button">Close</button>
                                    </div>
                                  </div> -->
                                </div>
                                <div class="button-container">
                                  <button class="add-to-cart" value="AddToCart" type="submit">
                                    <img class="img-cart" id="downcart" onclick="photoFunction()" src="photoes/wishlist.svg" alt="Image not found">
                                  </button>
                                </div>
                              </div>
                            </div>
                            <!-- 3rd Cart File End -->
                            <!-- cart 4 -->
                            <div class="cart">
                              <a href="https://www.google.com/">
                                <div class="inner-photo">Offer</div>
                                <div class="inner-cart">
                                  <span><img class="product-nm" src="photoes/ppp/9.jpg" alt="Image Not Found"></span>
                                </div>
                                <div class="paragraph">
                                  <p class="product-name" name="product"><b>Dell Alienware X15 Gaming Laptop</b></p>
                                  <div class="product-title__title">           
                                    <p class="product-title__info">
                                      <span class="product-title">15.6</span>
                                      <span class="product-title">Intel Core i9</span>
                                      <span class="product-title">32GB RAM</span>
                                      <span class="product-title">1 TB PCIe NVMe M.2 SSD</span>
                                      <!-- <span class="product-title">NVDIA GeForce 16 GB</span> -->
                                    </p>
                                  </div>
                                </div>
                                <div class="price-box">
                                  <p class="price" name="price">NPR 8,00,000</p>
                                  <p class="SP">8,07,700</p>
                                </div>
                                <div class="discount">
                                  <span class="save">Save: </span>
                                  <span class="currency">NPR</span>
                                  <span><b>7,700</b></span>
                                </div>
                                <div class="line"></div>
                              </a>
                              <div class="last-part">
                                <div class="button-container">
                                  <button class="add-to-cart" value="AddToCart" type="submit">
                                    <img class="img-cart" src="photoes/addtocart.svg" alt="Image not found">
                                  </button>
                                  <!-- <div class="popup-overlay">
                                    <div class="popup-content">
                                      <p>Successfully added to cart.</p>
                                      <button class="close-button">Close</button>
                                    </div>
                                  </div> -->
                                </div>
                                <div class="button-container">
                                  <button class="add-to-cart" value="AddToCart" type="submit">
                                    <img class="img-cart" id="downcart" onclick="photoFunction()" src="photoes/wishlist.svg" alt="Image not found">
                                  </button>
                                </div>
                              </div>
                            </div>
                            <!-- 4th Cart File End -->
                            <!-- cart 10 -->
                            <div class="cart">
                              <a href="https://www.google.com/">
                                <div class="inner-photo">Offer</div>
                                <div class="inner-cart">
                                  <span><img class="product-nm" src="photoes/ppp/10.jpg" alt="Image Not Found"></span>
                                </div>
                                <div class="paragraph">
                                  <p class="product-name" name="product"><b>Lenovo IdeaPad Gaming 3 Gaming Laptop</b></p>
                                  <div class="product-title__title">           
                                    <p class="product-title__info">
                                      <span class="product-title">15.6</span>
                                      <span class="product-title">Intel Core i5</span>
                                      <span class="product-title">8GB RAM</span>
                                      <span class="product-title">512 GB PCIe NVMe M.2 SSD</span>
                                      <!-- <span class="product-title">Silver Gray</span> -->
                                    </p>
                                  </div>
                                </div>
                                <div class="price-box">
                                  <p class="price" name="price">NPR 1,30,000</p>
                                  <p class="SP">1,35,000/p>
                                </div>
                                <div class="discount">
                                  <span class="save">Save: </span>
                                  <span class="currency">NPR</span>
                                  <span><b>5,000</b></span>
                                </div>
                                <div class="line"></div>
                              </a>
                              <div class="last-part">
                                <div class="button-container">
                                  <button class="add-to-cart" value="AddToCart" type="submit">
                                    <img class="img-cart" src="photoes/addtocart.svg" alt="Image not found">
                                  </button>
                                  <!-- <div class="popup-overlay">
                                    <div class="popup-content">
                                      <p>Successfully added to cart.</p>
                                      <button class="close-button">Close</button>
                                    </div>
                                  </div> -->
                                </div>
                                <div class="button-container">
                                  <button class="add-to-cart" value="AddToCart" type="submit">
                                    <img class="img-cart" id="downcart" onclick="photoFunction()" src="photoes/wishlist.svg" alt="Image not found">
                                  </button>
                                </div>
                              </div>
                            </div>
                          </div>
                            <!-- ALL THE END -->
                    <div id="upperArrow">
                      <img src="slider/circle-up-solid.svg" alt="" class="to-top">
                    </div>
                    <script src="frontpage.js"></script>

          <!-- <div id="popbx">
            <p>Our time is limited, so don't waste it living someone else's life. Don't be trapped by 
              dogma – which is living with the results of other people's thinking.<br> <b align="center">-Steve Jobs</b></p>
            <img src="slider/slide3.jpg" alt="">
            <button id="popbtn">Join now</button>
            <span id="deleteMeetingClose">&times;</span>
          </div> -->
        </div>
    </div>   
  </body>
</html>
