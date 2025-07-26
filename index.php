 <?php
session_start();
if (!isset($_SESSION['email'])) {
    header("Location: login.html");
    exit();
}
?>
 
  <!DOCTYPE html>
  <html lang="en">

  <head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jiya Bag Shop - Eco-Friendly Hemp Bags</title>
    <link rel="stylesheet" href="./src/output.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
  </head>

  <body class=" bg-gray-100 text-gray-800 ">
    <?php  include'navbar.php'?>
    <section></section>
    <!-- <h1 class=" flex  justify-center text-5xl pt-7">Welcome to Jiya Bag Shop</h1> -->
      <!-- <p class=" pt-5 pl-70">At Jiya Bag Shop, we specialize in stylish, eco-friendly, and handcrafted bags designed to suit your daily needs. <br>Whether you’re looking for durable hemp backpacks, trendy shoulder bags, or handmade pouches, we’ve got you covered.</p> -->
    </div>
    
    <!DOCTYPE html>
  <html lang="en">
    <head>
      <meta charset="UTF-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <title>Hemp Bags</title>
      <script src="https://cdn.tailwindcss.com"></script>
    </head>
    <body class="bg-amber-50 text-stone-800 font-sans">

      <!-- Hero Section -->
      <header class="flex flex-col md:flex-row items-center justify-between p-8 bg-amber-100">
        <div class="max-w-xl mb-6 md:mb-0">
          <h1 class="text-4xl font-bold mb-4">HEMP BAGS</h1>
          <p class="text-lg mb-6">Sustainable & Eco-Friendly</p>
          <a href="#shop" class="inline-block bg-stone-800 text-white px-6 py-3 rounded hover:bg-stone-700">Shop Now</a>
        </div>
        <style>
      html,
      body {
        position: relative;
        height: 100%;
      }

      body {
        background: #000;
        font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
        font-size: 14px;
        color: #fff;
        margin: 0;
        padding: 0;
      }

      .swiper {
        width: 50%;
        height: 50%;
      }

      .swiper-slide {
        text-align: center;
        font-size: 18px;
        background: #444;
        display: flex;
        justify-content: center;
        align-items: center;
      }

      .swiper-slide img {
        display: block;
        width: 100%;
        height: 100%;
        object-fit: cover;
        object-position: center;
      }
    </style>
    <div class="swiper mySwiper">
      <div class="swiper-wrapper">
        <div class="swiper-slide"><img src="./images/MPS__21.jpg" alt=""></div>
        <div class="swiper-slide"><img src="./images/MPS__24.jpg" alt=""></div>
        <div class="swiper-slide"><img src="./images/MPS__32.jpg" alt=""></div>
        <div class="swiper-slide"><img src="./images/MPS__38.jpg" alt=""></div>
        <div class="swiper-slide"><img src="./images/MPS__40.jpg" alt=""></div>
        <div class="swiper-slide"><img src="./images/MPS__45.jpg" alt=""></div>
        <div class="swiper-slide"><img src="./images/MPS__48.jpg" alt=""></div>
        <div class="swiper-slide"><img src="./images/MPS__51.jpg" alt=""></div>
        <div class="swiper-slide"><img src="./images/MPS__6.0.jpg" alt=""></div>
      </div>
      <!-- <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div> -->
      <div class="swiper-pagination"></div>
    </div>

    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <script>
      var swiper = new Swiper(".mySwiper", {
        spaceBetween: 30,
        centeredSlides: true,
        autoplay: {
          delay: 2500,
          disableOnInteraction: false,
        },
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
        },
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
      });
    </script>
        
        <!-- <img src="./images/MPS__45.jpg" alt="Hemp Bag" class="w-80 rounded-lg shadow-lg"> -->
      </header>

      <!-- Products Section -->
      <section class="py-12 px-6 text-center" id="shop">
        <h2 class="text-3xl font-semibold mb-10">Featured Products</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
          
          <!-- Product Card -->
          <div class="bg-white p-4 rounded-lg shadow">
            <img src="./images/MPS__2.0.jpg" alt="Backpack" class="w-full h-48 object-cover mb-4 rounded">
            <h3 class="text-xl font-medium">Side Crossbody Bag</h3>
            <p class="text-stone-600">$49.00</p>
            <button class="mt-2 bg-amber-200 text-stone-900 px-4 py-2 rounded hover:bg-amber-300">Add to Cart</button>
          </div>

          <div class="bg-white p-4 rounded-lg shadow">
            <img src="./images/MPS__21.jpg" alt="Tote Bag" class="w-full h-48 object-cover mb-4 rounded">
            <h3 class="text-xl font-medium">Hemp Kushan Side Bag</h3>
            <p class="text-stone-600">$42.00</p>
            <button class="mt-2 bg-amber-200 text-stone-900 px-4 py-2 rounded hover:bg-amber-300">Add to Cart</button>
          </div>

          <div class="bg-white p-4 rounded-lg shadow">
            <img src="./images/MPS__23.jpg" alt="Sling Bag" class="w-full h-48 object-cover mb-4 rounded">
            <h3 class="text-xl font-medium">Single PP Bag</h3>
            <p class="text-stone-600">$49.00</p>
            <button class="mt-2 bg-amber-200 text-stone-900 px-4 py-2 rounded hover:bg-amber-300">Add to Cart</button>
          </div>

          <div class="bg-white p-4 rounded-lg shadow">
            <img src="./images/MPS__24.jpg" alt="Crossbody Bag" class="w-full h-48 object-cover mb-4 rounded">
            <h3 class="text-xl font-medium">Crossbody Bag</h3>
            <p class="text-stone-600">$49.00</p>
            <button class="mt-2 bg-amber-200 text-stone-900 px-4 py-2 rounded hover:bg-amber-300">Add to Cart</button>
          </div>
          <div class="bg-white p-4 rounded-lg shadow">
            <img src="./images/MPS__26.jpg" alt="Tote Bag" class="w-full h-48 object-cover mb-4 rounded">
            <h3 class="text-xl font-medium">Hemp Kushan Side Bag</h3>
            <p class="text-stone-600">$42.00</p>
            <button class="mt-2 bg-amber-200 text-stone-900 px-4 py-2 rounded hover:bg-amber-300">Add to Cart</button>
          </div>

          <div class="bg-white p-4 rounded-lg shadow">
            <img src="./images/MPS__27.jpg" alt="Sling Bag" class="w-full h-48 object-cover mb-4 rounded">
            <h3 class="text-xl font-medium">Single PP Bag</h3>
            <p class="text-stone-600">$49.00</p>
            <button class="mt-2 bg-amber-200 text-stone-900 px-4 py-2 rounded hover:bg-amber-300">Add to Cart</button>
          </div>

          <div class="bg-white p-4 rounded-lg shadow">
            <img src="./images/MPS__30.jpg" alt="Crossbody Bag" class="w-full h-48 object-cover mb-4 rounded">
            <h3 class="text-xl font-medium">Crossbody Bag</h3>
            <p class="text-stone-600">$49.00</p>
            <button class="mt-2 bg-amber-200 text-stone-900 px-4 py-2 rounded hover:bg-amber-300">Add to Cart</button>
          </div>
          <div class="bg-white p-4 rounded-lg shadow">
            <img src="./images/MPS__32.jpg" alt="Tote Bag" class="w-full h-48 object-cover mb-4 rounded">
            <h3 class="text-xl font-medium">Hemp Kushan Side Bag</h3>
            <p class="text-stone-600">$42.00</p>
            <button class="mt-2 bg-amber-200 text-stone-900 px-4 py-2 rounded hover:bg-amber-300">Add to Cart</button>
          </div>

          <div class="bg-white p-4 rounded-lg shadow">
            <img src="./images/MPS__36.jpg" alt="Sling Bag" class="w-full h-48 object-cover mb-4 rounded">
            <h3 class="text-xl font-medium">Single PP Bag</h3>
            <p class="text-stone-600">$49.00</p>
            <button class="mt-2 bg-amber-200 text-stone-900 px-4 py-2 rounded hover:bg-amber-300">Add to Cart</button>
          </div>

          <div class="bg-white p-4 rounded-lg shadow">
            <img src="./images/MPS__38.jpg" alt="Crossbody Bag" class="w-full h-48 object-cover mb-4 rounded">
            <h3 class="text-xl font-medium">Crossbody Bag</h3>
            <p class="text-stone-600">$49.00</p>
            <button class="mt-2 bg-amber-200 text-stone-900 px-4 py-2 rounded hover:bg-amber-300">Add to Cart</button>
          </div>
          <div class="bg-white p-4 rounded-lg shadow">
            <img src="./images/MPS__40.jpg" alt="" class="w-full h-48 object-cover mb-4 rounded">
            <h3 class="text-xl font-medium">Single PP Hemp</h3>
            <p class=" text-stone-600">$51.00</p>
            <button class="mt-2 bg-amber-200 text-stone-900 px-4 py-2 rounded hover:bg-amber-300">Add to Cart</button>
          </div>
          <div class="bg-white p-4 rounded-lg shadow">
            <img src="./images/MPS__42.jpg" alt="" class="w-full h-48 object-cover mb-4 rounded">
            <h3 class="text-xl font-medium">Single PP Hemp</h3>
            <p class=" text-stone-600">$51.00</p>
            <button class="mt-2 bg-amber-200 text-stone-900 px-4 py-2 rounded hover:bg-amber-300">Add to Cart</button>
          </div>
          <div class="bg-white p-4 rounded-lg shadow">
            <img src="./images/MPS__45.jpg" alt="" class="w-full h-48 object-cover mb-4 rounded">
            <h3 class="text-xl font-medium">Single PP Hemp</h3>
            <p class=" text-stone-600">$51.00</p>
            <button class="mt-2 bg-amber-200 text-stone-900 px-4 py-2 rounded hover:bg-amber-300">Add to Cart</button>
          </div>
          <div class="bg-white p-4 rounded-lg shadow">
            <img src="./images/MPS__46.jpg" alt="" class="w-full h-48 object-cover mb-4 rounded">
            <h3 class="text-xl font-medium">Single PP Hemp</h3>
            <p class=" text-stone-600">$51.00</p>
            <button class="mt-2 bg-amber-200 text-stone-900 px-4 py-2 rounded hover:bg-amber-300">Add to Cart</button>
          </div>
          <div class="bg-white p-4 rounded-lg shadow">
            <img src="./images/MPS__48.jpg" alt="" class="w-full h-48 object-cover mb-4 rounded">
            <h3 class="text-xl font-medium">Single PP Hemp</h3>
            <p class=" text-stone-600">$51.00</p>
            <button class="mt-2 bg-amber-200 text-stone-900 px-4 py-2 rounded hover:bg-amber-300">Add to Cart</button>
          </div>
          <div class="bg-white p-4 rounded-lg shadow">
            <img src="./images/MPS__51.jpg" alt="" class="w-full h-48 object-cover mb-4 rounded">
            <h3 class="text-xl font-medium">Single PP Hemp</h3>
            <p class=" text-stone-600">$51.00</p>
            <button class="mt-2 bg-amber-200 text-stone-900 px-4 py-2 rounded hover:bg-amber-300">Add to Cart</button>
          </div>
          </div>
        </div>
      </section>

      <!-- About Section -->
      <section class="bg-amber-100 py-12 px-6 text-center" id="about">
        <h2 class="text-2xl font-semibold mb-4">About Us</h2>
        <p class="max-w-3xl mx-auto text-stone-700">
          We offer high-quality hemp bags that are both stylish and environmentally conscious. Our products are made from natural, sustainable materials—perfect for eco-friendly living.
        </p>
      </section>

      <!-- Contact Section -->
      <footer >
      <section class="bg-stone-800 text-white py-8 text-center" id="contact">
        <h2 class="text-xl font-semibold mb-2">Contact Us</h2>
        <p>Email: faijurrahaman463@gmail.com | Phone:9803404875</p>
        <p>Address: Jyatha,Kathmandu</p>
        </section>
      </footer>

    </body>
  </html>

    
      
  </html>