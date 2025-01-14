<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"  rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="./style.css">
    <script src="https://kit.fontawesome.com/c26cd2166c.js"></script>
    <title>Web coffee</title>
</head>
<body>
    

<!-- navbar.php-->
<div class="">
		<div class="col-md-12">
            <?php include_once 'navbar.php' ?>
        </div>
    </div>
    <!-- <nav class="navbar navbar-expand-lg">
        <div class="container">
          <a class="navbar-brand" href="#">CoffeeShop</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarScroll">
            <ul class="navbar-nav m-auto my-2 my-lg-0">
              <li class="nav-item">
                <a class="nav-link active" href="#home">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#bests">BEST SELLERS</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#store">
                  Store
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#menu">Menu</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#team">Team</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#contact">Contact</a>
              </li>
            </ul>
            <form class="d-flex" role="search">
              <input class="px-2 search" type="search" placeholder="Search" aria-label="Search">
              <button class="btn0" type="submit">Search</button>
            </form>
          </div>
        </div>
    </nav> -->

    <!-- MAIN CONTENT -->
    <div class="">
		<div class="col-md-12">
            <?php include_once 'main.php' ?>
        </div>
    </div>
    <!-- <section class="main">
      <div class="container">
        <h1 class="pt-5">Welcome to coffee shop r2f — ★!</h1>
      </div>
    </section> -->



    <!-- ======================================= -->
<!-- Gallery kopi -->
  <div class="">
		<div class="col-md-12">
      <?php include_once 'gallery.php' ?>
    </div>
  </div>
    <!-- <section class="new">
        <div class="container">
          <h1 class="pt-7 m-auto text-center" style="color: whitesmoke;">Gallery CoffeeShop R2F ⋆˚࿔</h1>
        </div>
    </section> -->



<!-- best seller menu -->
  <div>
		<div class="col-md-12">
      <?php include_once 'bests.php' ?>
    </div>
  </div>
    <!-- <section class="product" id="bests">
      <div class="container">
        <div class="row py-3">
          <div class="col-lg-5 m-auto text-center">
            <h1>Best Sellers</h1>
            <h6 style="color: brown;">Kenikmatan, Kenyamanan, Kelezatan</h6>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-3 text-center">
            <div class="card border-0 bg-light mb-2">
              <div class="card-body">
                <img src="images/bests 1.jpg" class="img-fluid" alt="">
              </div>
            </div>
            <h6>Latte Coffee</h6>
            <p>💸 Rp. 25.760</p>
          </div>
          <div class="col-lg-3 text-center">
            <div class="card border-0 bg-light mb-2">
              <div class="card-body">
                <img src="images/bests 2.jpg" class="img-fluid" alt="">
              </div>
            </div>
            <h6>Iced Matcha</h6>
            <p>💸 Rp. 25.000</p>
          </div>
          <div class="col-lg-3 text-center">
            <div class="card border-0 bg-light mb-2">
              <div class="card-body">
                <img src="images/bests 3.jpeg" class="img-fluid" alt="">
              </div>
            </div>
            <h6>Cromboloni</h6>
            <p>💸 Rp. 15.000</p>
          </div>
          <div class="col-lg-3 text-center">
            <div class="card border-0 bg-light mb-2">
              <div class="card-body">
                <img src="images/bests 4.jpg" class="img-fluid" alt="">
              </div>
            </div>
            <h6>Cookies Choco</h6>
            <p>💸 Rp. 20.000</p>
          </div>
        </div>
      </div>
    </section> -->

<!-- about store -->
<div>
		<div class="col-md-12">
      <?php include_once 'about.php' ?>
    </div>
</div>
    <!-- <section class="about" id="store">
      <div class="container py-5">
        <div class="row py-5">
          <div class="col-lg-8 m-auto text-center">
            <h1>ABOUT US</h1>
          </div>
          <div class="row">
            <div class="col-lg-4">
              <img src="images/about1.jpg" class="img-fluid" alt="">
              <h5>Sentuhan ajaib barista</h5>
              <p>Nikmati seni latte yang indah dan rasa kopi yang kaya di kedai kami.
                Kami menggunakan biji kopi berkualitas tinggi dan susu segar untuk menciptakan minuman yang sempurna untuk setiap selera.</p>
            </div>
            <div class="col-lg-4">
              <img src="images/about2.jpg" class="img-fluid" alt="">
              <h5>Baking Pastry Bakery</h5>
              <p>Kami hanya menggunakan bahan-bahan terbaik dan segar untuk menciptakan roti dan kue yang berkualitas tinggi. Rasakan perbedaannya dalam setiap gigitan.</p>
            </div>
            <div class="col-lg-4">
              <img src="images/about3.jpg" class="img-fluid" alt="">
              <h5>Sentuhan ajaib barista</h5>
              <p>Rasakan kesegaran setiap tegukan kopi kami. Biji kopi berkualitas tinggi digiling segar dan diseduh dengan metode manual yang presisi. Setiap cangkir kopi adalah perayaan cita rasa asli dari biji kopi pilihan.</p>
            </div>
          </div>
        </div>
      </div>
    </section> -->

    <!-- Menu Section -->
  <div>
		<div class="col-md-12">
      <?php include_once 'menu.php' ?>
    </div>
  </div>
<!-- <section class="menu" id="menu">
  <div class="container">
      <div class="row py-1">
          <div class="col-lg-5 m-auto text-center">
              <h1 class="menu-heading">Menu</h1>
              <h6 class="subheading">Kenikmatan, Kenyamanan, Kelezatan</h6>
          </div>
      </div> -->

      <!-- Menu Items -->
      <!-- <div class="row"> -->
          <!-- MENU 1-->
          <!-- <div class="col-lg-3 text-center menu-item">
              <div class="card border-0 bg-light mb-4">
                  <div class="card-body">
                      <img src="images/menu 1.jpg" class="img-fluid" alt="Americano">
                  </div>
              </div>
              <h6 class="item-title">Americano</h6>
              <p class="price">💸 Rp. 25.000</p>
              <button class="btn-add" onclick="addToCart('Americano', 25000)">Add to Cart</button>
          </div> -->
          <!-- MENU 2-->
          <!-- <div class="col-lg-3 text-center menu-item">
              <div class="card border-0 bg-light mb-4">
                  <div class="card-body">
                      <img src="images/menu 2.jpg" class="img-fluid" alt="Caramel Coffee">
                  </div>
              </div>
              <h6 class="item-title">Caramel Coffee</h6>
              <p class="price">💸 Rp. 21.999</p>
              <button class="btn-add" onclick="addToCart('Caramel Coffee', 21999)">Add to Cart</button>
          </div> -->
          <!-- MENU 3-->
          <!-- <div class="col-lg-3 text-center menu-item">
              <div class="card border-0 bg-light mb-4">
                  <div class="card-body">
                      <img src="images/menu 3.jpg" class="img-fluid" alt="Cold Brew">
                  </div>
              </div>
              <h6 class="item-title">Cold Brew</h6>
              <p class="price">💸 Rp. 30.000</p>
              <button class="btn-add" onclick="addToCart('Cold Brew', 30000)">Add to Cart</button>
          </div> -->
          <!-- MENU 4-->
          <!-- <div class="col-lg-3 text-center menu-item">
              <div class="card border-0 bg-light mb-4">
                  <div class="card-body">
                      <img src="images/menu 4.jpg" class="img-fluid" alt="Mocha Recipe">
                  </div>
              </div>
              <h6 class="item-title">Mocha Recipe</h6>
              <p class="price">💸 Rp. 24.599</p>
              <button class="btn-add" onclick="addToCart('Mocha Recipe', 24599)">Add to Cart</button>
          </div> -->
          <!-- MENU 5-->
          <!-- <div class="col-lg-3 text-center menu-item">
            <div class="card border-0 bg-light mb-4">
                <div class="card-body">
                    <img src="images/menu 5.jpg" class="img-fluid" alt="Choco Lava">
                </div>
            </div>
            <h6 class="item-title">Choco Lava</h6>
            <p class="price">💸 Rp. 20.567</p>
            <button class="btn-add" onclick="addToCart('Choco Lava', 20567)">Add to Cart</button>
          </div> -->
        <!-- MENU 6-->
        <!-- <div class="col-lg-3 text-center menu-item">
            <div class="card border-0 bg-light mb-4">
                <div class="card-body">
                    <img src="images/menu 6.jpg" class="img-fluid" alt="Mocktail Mojito">
                </div>
            </div>
            <h6 class="item-title">Mocktail Mojito</h6>
            <p class="price">💸 Rp. 26.243</p>
            <button class="btn-add" onclick="addToCart('Mocktail Mojito', 26243)">Add to Cart</button>
        </div> -->
        <!-- MENU 7-->
        <!-- <div class="col-lg-3 text-center menu-item">
            <div class="card border-0 bg-light mb-4">
                <div class="card-body">
                    <img src="images/menu 7.jpeg" class="img-fluid" alt="Red Velvet">
                </div>
            </div>
            <h6 class="item-title">Red Velvet</h6>
            <p class="price">💸 Rp. 25.000</p>
            <button class="btn-add" onclick="addToCart('Red Velvet', 25000)">Add to Cart</button>
        </div> -->
        <!-- MENU 8-->
        <!-- <div class="col-lg-3 text-center menu-item">
            <div class="card border-0 bg-light mb-4">
                <div class="card-body">
                    <img src="images/menu 8.jpg" class="img-fluid" alt="Taro Milk Boba">
                </div>
            </div>
            <h6 class="item-title">Taro Milk Boba</h6>
            <p class="price">💸 Rp. 25.000</p>
            <button class="btn-add" onclick="addToCart('Taro Milk Boba', 25000)">Add to Cart</button>
        </div> -->
        <!-- MENU 9-->
        <!-- <div class="col-lg-3 text-center menu-item">
            <div class="card border-0 bg-light mb-4">
                <div class="card-body">
                    <img src="images/menu 9.jpg" class="img-fluid" alt="Croissant">
                </div>
            </div>
          <h6 class="item-title">Croissant</h6>
          <p class="price">💸 Rp. 18.988</p>
          <button class="btn-add" onclick="addToCart('Croissant', 18988)">Add to Cart</button>
        </div> -->
        <!-- MENU 10-->
        <!-- <div class="col-lg-3 text-center menu-item">
            <div class="card border-0 bg-light mb-4">
                <div class="card-body">
                    <img src="images/menu 10.jpeg" class="img-fluid" alt="Peanut Butter Cheesecake">
                </div>
            </div>
          <h6 class="item-title">Peanut Butter Cheesecake</h6>
          <p class="price">💸 Rp. 37.800</p>
          <button class="btn-add" onclick="addToCart('Peanut Butter Cheesecake', 37800)">Add to Cart</button>
        </div> -->
        <!-- MENU 11 -->
        <!-- <div class="col-lg-3 text-center menu-item">
            <div class="card border-0 bg-light mb-4">
                <div class="card-body">
                    <img src="images/menu 11.jpg" class="img-fluid" alt="Cupcake">
                </div>
            </div>
          <h6 class="item-title">Cupcake</h6>
          <p class="price">💸 Rp. 15.000</p>
          <button class="btn-add" onclick="addToCart('Cupcake', 15000)">Add to Cart</button>
        </div> -->
        <!-- MENU 12-->
        <!-- <div class="col-lg-3 text-center menu-item">
            <div class="card border-0 bg-light mb-4">
                <div class="card-body">
                    <img src="images/menu 12.jpg" class="img-fluid" alt="Cream Cheese Puff Pastry">
                </div>
            </div>
          <h6 class="item-title">Cream Cheese Puff Pastry</h6>
          <p class="price">💸 Rp. 18.899</p>
          <button class="btn-add" onclick="addToCart('Cream Cheese Puff Pastry', 18899)">Add to Cart</button>
        </div> -->
        <!-- MENU 13-->
        <!-- <div class="col-lg-3 text-center menu-item">
            <div class="card border-0 bg-light mb-4">
                <div class="card-body">
                    <img src="images/bests 1.jpg" class="img-fluid" alt="Latte Coffee">
                </div>
            </div>
          <h6 class="item-title">Latte Coffee</h6>
          <p class="price">💸 Rp. 25.760</p>
          <button class="btn-add" onclick="addToCart('Latte Coffee', 25760)">Add to Cart</button>
        </div> -->
        <!-- MENU 14-->
        <!-- <div class="col-lg-3 text-center menu-item">
            <div class="card border-0 bg-light mb-4">
                <div class="card-body">
                    <img src="images/bests 2.jpg" class="img-fluid" alt="Iced Matcha">
                </div>
            </div>
          <h6 class="item-title">Iced Matcha</h6>
          <p class="price">💸 Rp. 20.000</p>
          <button class="btn-add" onclick="addToCart('Iced Matcha', 20000)">Add to Cart</button>
        </div> -->
        <!-- MENU 15-->
        <!-- <div class="col-lg-3 text-center menu-item">
            <div class="card border-0 bg-light mb-4">
                <div class="card-body">
                    <img src="images/bests 3.jpeg" class="img-fluid" alt="Cromboloni">
                </div>
            </div>
          <h6 class="item-title">Cromboloni</h6>
          <p class="price">💸 Rp. 15.000</p>
          <button class="btn-add" onclick="addToCart('Cromboloni', 15000)">Add to Cart</button>
        </div> -->
        <!-- MENU 16-->
        <!-- <div class="col-lg-3 text-center menu-item">
            <div class="card border-0 bg-light mb-4">
                <div class="card-body">
                    <img src="images/bests 4.jpg" class="img-fluid" alt="Cookies Choco">
                </div>
            </div>
          <h6 class="item-title">Cookies Choco</h6>
          <p class="price">💸 Rp. 20.000</p>
          <button class="btn-add" onclick="addToCart('Cookies Choco', 20000)">Add to Cart</button>
        </div>
      </div> -->

      <!-- Total Price -->
      <!-- <div class="row">
          <div class="col-lg-6 text-center m-auto">
              <h3 class="total-text">Total: <span id="totalPrice">Rp. 0</span></h3>
              <button class="btn-view-cart" onclick="showCart()">View Cart</button>
          </div>
      </div>
  </div>
</section> -->

<!--JS MENU -->
<!-- <script>
  // Cart to store selected items and prices
  let cart = [];

  // Function to add items to the cart and calculate total
  function addToCart(itemName, itemPrice) {
      // Add item to cart
      cart.push({ name: itemName, price: itemPrice });

      // Calculate total price
      let total = cart.reduce((acc, item) => acc + item.price, 0);

      // Update total price on the page
      document.getElementById("totalPrice").textContent = `Rp. ${total.toLocaleString()}`;
  }

  // Optional: Show cart contents (can be used to view cart items)
  function showCart() {
      alert('Items in Cart: ' + cart.map(item => item.name).join(', '));
  }
</script> -->


    

    <!-- team section -->
  <div>
		<div class="col-md-12">
      <?php include_once 'team.php' ?>
    </div>
  </div>
    <!-- <section id="team" class="team section-padding py-5">
      <div class="container">
        <div class="row">
          <div class="col-lg-5 m-auto text-center">
            <div class="section-header text-center pb-2">
              <h2>Our Team</h2>
            </div>
          </div>
        </div> -->
        <!-- <div class="row">
          <div class="col-12 col-md-6 col-lg-4">
            <div class="card text-center">
              <div class="card-body">
                <img src="images/profil1.jpg" class="img-fluid" alt="">
                <h3 class="card-tittle py-2">M Syahrul Fauzan</h3>
                <p class="card-text">Your time is limited, so don't waste it living someone else's life.</p>
    
                <p class="socials"> -->
                  <!-- Tambahkan link sosial media -->
                  <!-- <a href="https://instagram.com/fauza4n03" target="_blank">
                    <i class="bi bi-instagram text-dark mx-1"></i>
                  </a>
                  <a href="https://linkedin.com/in/username" target="_blank">
                    <i class="bi bi-linkedin text-dark mx-1"></i>
                  </a>
                  <a href="https://twitter.com/username" target="_blank">
                    <i class="bi bi-twitter text-dark mx-1"></i>
                  </a>
                </p>
              </div>
            </div>
          </div> -->
          <!-- <div class="col-12 col-md-6 col-lg-4">
            <div class="card text-center">
              <div class="card-body">
                <img src="images/profil2.jpg" class="img-fluid" alt="">
                <h3 class="card-tittle py-2">Muhammad Rafli</h3>
                <p class="card-text">Life is what happens to you while you're busy making other plans.</p>
    
                <p class="socials"> -->
                  <!-- Tambahkan link sosial media -->
                  <!-- <a href="https://instagram.com/username" target="_blank">
                    <i class="bi bi-instagram text-dark mx-1"></i>
                  </a>
                  <a href="https://linkedin.com/in/username" target="_blank">
                    <i class="bi bi-linkedin text-dark mx-1"></i>
                  </a>
                  <a href="https://twitter.com/username" target="_blank">
                    <i class="bi bi-twitter text-dark mx-1"></i>
                  </a>
                </p>
              </div>
            </div>
          </div> -->
          <!-- <div class="col-12 col-md-6 col-lg-4">
            <div class="card text-center">
              <div class="card-body">
                <img src="images/profil3.jpg" class="img-fluid" alt="">
                <h3 class="card-tittle py-2">Rahma Hervina</h3>
                <p class="card-text">It does not matter how slowly you go as long as you do not stop.</p>
    
                <p class="socials"> -->
                  <!-- Tambahkan link sosial media -->
                  <!-- <a href="https://instagram.com/rhm.dwsrr" target="_blank">
                    <i class="bi bi-instagram text-dark mx-1"></i>
                  </a>
                  <a href="https://linkedin.com/in/username" target="_blank">
                    <i class="bi bi-linkedin text-dark mx-1"></i>
                  </a>
                  <a href="https://twitter.com/username" target="_blank">
                    <i class="bi bi-twitter text-dark mx-1"></i>
                  </a>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section> -->
    

<!-- contact -->
  <div>
		<div class="col-md-12">
      <?php include_once 'contact.php' ?>
    </div>
  </div>
<!-- <section class="contact py-5" id="contact">
  <div class="container py-5">
    <div class="row">
      <div class="col-lg-5 m-auto text-center">
        <h1>Contact Us</h1>
        <h6 style="color: brown;">Always Be In Touch With Us</h6>
      </div>
    </div>
    <div class="row py-5">
      <div class="col-lg-9 m-auto">
        <div class="row">
          <div class="col-lg-4">
            <h6>LOCATION</h6>
            <p>Jl. Bahureksa No.1, Bandung</p>

            <h6>PHONE</h6>
            <p>62551428932772</p>

            <h6>EMAIL</h6>
            <p>coffeeshopr2f@gmail.com</p>
          </div>
          <div class="col-lg-7"> -->
            <!-- Form mulai di sini -->
            <!-- <form id="contactForm">
              <div class="row">
                <div class="col-lg-6">
                  <input type="text" id="firstName" name="first_name" class="form-control bg-light" placeholder="First Name" required>
                </div>
                <div class="col-lg-6">
                  <input type="text" id="lastName" name="last_name" class="form-control bg-light" placeholder="Last Name" required>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-12 py-3">
                  <textarea id="message" name="message" class="form-control bg-light" placeholder="Enter Your Message" cols="10" rows="5" required></textarea>
                </div>
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
            </form> -->
            <!-- Form selesai di sini -->
          <!-- </div>
        </div>
      </div>
    </div>
  </div>
</section> -->

<!-- JS CONTACT-->
<!-- Tambahkan Script JavaScript di sini -->
<!-- <script>
  document.getElementById('contactForm').addEventListener('submit', function(event) {
    event.preventDefault(); // Mencegah form untuk dikirimkan ke server

    // Mengambil data dari form
    const firstName = document.getElementById('firstName').value;
    const lastName = document.getElementById('lastName').value;
    const message = document.getElementById('message').value;

    // Menampilkan data ke konsol (bisa disesuaikan dengan aksi lain)
    console.log('First Name:', firstName);
    console.log('Last Name:', lastName);
    console.log('Message:', message);

    // Menampilkan pesan sukses (bisa disesuaikan dengan aksi lain)
    alert('Your message has been received!');

    // Anda bisa melakukan tindakan lebih lanjut seperti mengirim data ke server di sini
  });
</script> -->


     <!-- footer content -->
  <div>
		<div class="col-md-12">
      <?php include_once 'footer.php' ?>
    </div>
  </div>
     <!-- <section class="news py-5">
      <div class="container py-5">
        <div class="row">
          <div class="col-lg-9 m-auto text-center">
            <h1>Join Our Secret Society</h1>
            <input type="text" class="px-3" placeholder="Enter Your Email">
            <button class="btn2">Submit</button>
          </div>
        </div>
        <div class="row pt-5">
          <div class="col-lg-11 m-auto">
            <div class="row">
              <div class="col-lg-3 py-3">
                <h5 class="pb-3">CUSTOMER CARE</h5>
                <p>Regular</p>
                <p>On Time</p>
                <p>Always Care</p>
              </div>
              <div class="col-lg-3 py-3">
                <h5 class="pb-3">FAQ's</h5>
                <p>Regular</p>
                <p>Shopping & Delivery</p>
                <p>Always Care</p>
              </div>
              <div class="col-lg-3 py-3">
                <h5 class="pb-3">OUR COMPANI</h5>
                <p>About</p>
                <p>New Menu</p>
                <p>Menu</p>
              </div>
              <div class="col-lg-3 py-3">
                <h5 class="pb-3">SOCIAL MEDIA</h5>
                <span><i class="fab fa-facebook"></i></span>
                <span><i class="fab fa-instagram"></i></span>
                <span><i class="fab fa-linkedin"></i></span>
                <span><i class="fab fa-github"></i></span>
              </div>
            </div>
          </div>
        </div>
      </div>
     </section> -->


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js crossorigin="anonymous""></script>

    

</body>
</html>