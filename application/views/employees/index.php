<!-- <h1>test</h1> -->









<section class="flex items-center flex-1">
    <div class="flex flex-col w-full ">
        <h1 class="text-5xl font-extrabold text-center lg:text-7xl 2xl:text-8xl">
            <span
                class="text-transparent bg-gradient-to-br bg-clip-text from-teal-500 via-indigo-500 to-sky-500 dark:from-teal-200 dark:via-indigo-300 dark:to-sky-500">
                Coming
            </span>

            <span
                class="text-transparent bg-gradient-to-tr bg-clip-text from-blue-500 via-pink-500 to-red-500 dark:from-sky-300 dark:via-pink-300 dark:to-red-500">
                Soon
            </span>
        </h1>

        <p class="max-w-3xl mx-auto mt-6 text-lg text-center text-gray-700 dark:text-white md:text-xl">
            Lorem ipsum dolor sit amet
            consectetur adipisicing elit. Fugit alias nihil incidunt.
        </p>

        <div class="flex flex-col mt-8 space-y-3 sm:-mx-2 sm:flex-row sm:justify-center sm:space-y-0">
            <input id="email" type="text"
                class="px-6 py-3 text-gray-700 bg-white border rounded-md dark:bg-gray-900 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 dark:focus:border-blue-300 focus:outline-none focus:ring sm:mx-2"
                placeholder="Email Address" />

            <button
                class="px-8 py-3 text-sm font-medium tracking-wide text-white capitalize transition-colors duration-300 transform bg-blue-500 rounded-md hover:bg-blue-600 focus:bg-blue-600 focus:outline-none sm:mx-2">
                Notify Me
            </button>
        </div>

        <p class="mt-8 text-center text-gray-700 dark:text-white text-md md:text-xl">Notify me when App is
            launched :)</p>
    </div>
</section>

<!-- SEARCH FORM -->

<div class='search '>

    <form>
        <label for="default-search"
            class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
        <div class="relative">
            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="none"
                    stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                </svg>
            </div>
            <input type="search" id="default-search"
                class="block w-full p-4 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="Search Mockups, Logos..." required>
            <button type="submit"
                class="text-white absolute right-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Search</button>
        </div>
    </form>

</div>


<!-- ALL EMPLOYEES -->







<section>
<div class="mt-8 grid grid-cols-2 gap-x-4 gap-y-8 lg:grid-cols-4">

<?php foreach ($employees as $employee) : ?>



 <a
  class="relative block rounded-xl border border-gray-100 p-8 shadow-xl"
  href="<?php echo site_url('/employee/'.$employee['id']); ?>"
>
<span
    class="absolute right-4 top-4 rounded-full bg-green-100 px-3 py-1.5 text-xs font-medium text-green-600"
  >
  <?php echo $employee['id'] ; ?>
  </span>

  

  <div class="mt-4 text-gray-500 sm:pr-8">
  <div class="emp-icon">
   <svg
   class="h-8 w-8 sm:h-10 sm:w-10 flex"
 xmlns="http://www.w3.org/2000/svg"
  viewBox="0 0 448 512">
 <path d="M224 0c70.7 0 128 57.3 128 128s-57.3 128-128 128s-128-57.3-128-128S153.3 0 224 0zM209.1 359.2l-18.6-31c-6.4-10.7 1.3-24.2 13.7-24.2H224h19.7c12.4 0 20.1 13.6 13.7 24.2l-18.6 31 33.4 123.9 39.5-161.2c77.2 12 136.3 78.8 136.3 159.4c0 17-13.8 30.7-30.7 30.7H265.1 182.9 30.7C13.8 512 0 498.2 0 481.3c0-80.6 59.1-147.4 136.3-159.4l39.5 161.2 33.4-123.9z"/></svg>    
 
  

    <h3 class="mt-16 text-xl flex  font-bold text-gray-900">  <?php echo $employee['name'] ; ?></h3>
</div>

<div class="my-8 pb-4 w-full">

<small class="mt-2  text-sm sm:block">
      PHONE:   <?php echo $employee['phone'] ; ?>
</small>

<small class="mt-2  text-sm sm:block">
      ADDRESS:  <?php echo $employee['address'] ; ?>
</small>
</div>


  </div>

  <div class="w-full ">
  <span
    class="absolute right-4 bottom-4 rounded-full bg-blue-100 px-3 py-1.5 text-xs font-medium text-blue-600"
  >
  <i class="fa-solid fa-user-pen"></i> edit
  </span>

  <span
    class="absolute right-24 bottom-4 rounded-full bg-red-100 px-3 py-1.5 text-xs font-medium text-red-600"
  >
  <i class="fa-solid fa-trash-can"></i> delete
  </span>

  <span
    class="absolute ml-4 right-44 bottom-4 rounded-full bg-red-100 px-3 py-1.5 text-xs font-medium text-red-600 "
  >
  <i class="fa-solid fa-trash-can"></i> JS delete  
  </span>
  </div>
</a>

<?php endforeach; ?>



</div>
</section>