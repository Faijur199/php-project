<nav class="bg-gray-800 justify-between" >
  <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
    <div class="relative flex h-16 items-center justify-between">
      <div class="absolute inset-y-0 left-0 flex items-center">
      </div>
      <div class="flex  w-full  justify-between">
        <div class="flex shrink-0 items-center">
          <a href="index.php">
          <img class="h-9 w-auto  rounded-3xl" src="./profilepic.png" alt="Your Company" />
          </a>
        </div>
        <div class="gap-x-6">
          <div class="flex space-x-4">
            <a href="index.php" class="rounded-md bg-gray-900 px-3 py-2 text-sm font-medium text-white" aria-current="page">HOME</a>
            <a href="index.php#shop" class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Product</a>
            <a href="index.php#about" class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white">About</a>
            <a href="index.php#contact" class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Contact</a>
            <?php if (isset($_SESSION['email'])): ?>
      <li>
        <a href="logout.php" class="text-red-600 font-semibold hover:underline">Logout</a>
      </li>
    <?php endif; ?>
          </div>
        </div>
        <div class="flex justify-end gap-x-1">
            <input class=" bg-white rounded-2xl px-3" type="search" placeholder="Search...">
            <a href="#" class="bg-white px-2 py-1 rounded-xl hover:bg-gray-700 hover:text-white">Search</a>
        </div>
      </div>
    </div>
  </div>
  
</nav>

