<section class="text-gray-600 body-font layout">
  <div class="container mx-auto flex px-5 py-24 md:flex-row flex-col items-center">
    <div class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6 mb-10 md:mb-0">
      <img class="object-cover object-center rounded" alt="hero"
      src="https://cdn.supsystic.com/wp-content/uploads/2018/07/7FRONT-END-EDITING-FEATURE.png">
    </div>
    <div class="lg:flex-grow md:w-1/2 lg:pl-24 md:pl-16 flex flex-col md:items-start md:text-left items-center text-center">
      <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900">
        Edit <?php echo $employee['name'] ; ?> Information</h1>
     
    </div>
  </div>
</section>



<div class="layout">
<section class="max-w-4xl p-6 mx-auto bg-white rounded-md shadow-md shadow-xl border dark:bg-gray-800">
    <h2 class="text-lg font-semibold text-gray-700 capitalize dark:text-white">Update Employee Information</h2>

    <form>
        <div class="grid grid-cols-1 gap-6 mt-4 sm:grid-cols-2">
            <div>
                <label class="text-gray-700 dark:text-gray-200" for="username">Name</label>
                <input id="username"
                value="<?php echo $employee['name'] ; ?>"
                type="text"
                 class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 dark:focus:border-blue-300 focus:outline-none focus:ring">
            </div>

            <div>
                <label class="text-gray-700 dark:text-gray-200" for="address"> Address</label>
                <input
                value="<?php echo $employee['address'] ; ?>"
                id="address" type="text" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 dark:focus:border-blue-300 focus:outline-none focus:ring">
            </div>
            <div>
                <label class="text-gray-700 dark:text-gray-200" for="phone"> Phone NO</label>
                <input id="phone" 
                value="<?php echo $employee['phone'] ; ?>"
                type="text" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 dark:focus:border-blue-300 focus:outline-none focus:ring">
            </div>

        </div>

        <div class="flex justify-end mt-6">
            <button class="px-8 py-2.5 leading-5 text-white transition-colors duration-300 transform bg-blue-700 rounded-md hover:bg-gray-600 focus:outline-none focus:bg-gray-600">Update</button>
        </div>
    </form>
</section>
<hr class="my-2 mx-auto w-48 h-1 bg-gray-100 rounded border-0 md:my-10 dark:bg-gray-700">

<section class="mt-8">
    <!-- <h1 class="text-3xl"> [EMP NAME] Tasks</h1> -->
    
<h3 class="text-3xl title-font dark:text-white"><?php echo $employee['name'] ; ?> Tasks</h3>
<!-- SEARCH FORM -->

<div class='search layout'>

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
<hr class="my-2 mx-auto w-48 h-1 bg-gray-100 rounded border-0 md:my-10 dark:bg-gray-700">

<!-- ALL TASKS -->



<section>
<div class="mt-8 grid grid-cols-2 gap-x-4 gap-y-8 lg:grid-cols-3">
<a
  class="relative block rounded-xl border border-gray-100 p-8 shadow-xl"
  href=""
>
<span
    class="absolute right-4 top-4 rounded-full bg-green-100 px-3 py-1.5 text-xs font-medium text-green-600"
  >
    ID
  </span>


  <div class="mt-4 text-gray-500 sm:pr-8">
  <div class="emp-icon">
    <svg 
  class="h-8 w-8 sm:h-10 sm:w-10 flex"
  xmlns="http://www.w3.org/2000/svg" 
  viewBox="0 0 576 512">
  <path d="M184.1 38.2c9.9 8.9 10.7 24 1.8 33.9l-72 80c-4.4 4.9-10.6 7.8-17.2 7.9s-12.9-2.4-17.6-7L39 113c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l22.1 22.1 55.1-61.2c8.9-9.9 24-10.7 33.9-1.8zm0 160c9.9 8.9 10.7 24 1.8 33.9l-72 80c-4.4 4.9-10.6 7.8-17.2 7.9s-12.9-2.4-17.6-7L39 273c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l22.1 22.1 55.1-61.2c8.9-9.9 24-10.7 33.9-1.8zM256 96c0-17.7 14.3-32 32-32H512c17.7 0 32 14.3 32 32s-14.3 32-32 32H288c-17.7 0-32-14.3-32-32zm0 160c0-17.7 14.3-32 32-32H512c17.7 0 32 14.3 32 32s-14.3 32-32 32H288c-17.7 0-32-14.3-32-32zM192 416c0-17.7 14.3-32 32-32H512c17.7 0 32 14.3 32 32s-14.3 32-32 32H224c-17.7 0-32-14.3-32-32zM80 464c-26.5 0-48-21.5-48-48s21.5-48 48-48s48 21.5 48 48s-21.5 48-48 48z"/></svg>
  
  

    <h3 class="mt-16 text-xl flex  font-bold text-gray-900">EMP NAME</h3>
</div>

<div class="my-8 pb-4 w-full">

<small class="mt-2  text-sm sm:block">
      PHONE: +962770700820 
</small>

<p> survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>
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


  </div>
</a>
<a
  class="relative block rounded-xl border border-gray-100 p-8 shadow-xl"
  href=""
>
<span
    class="absolute right-4 top-4 rounded-full bg-green-100 px-3 py-1.5 text-xs font-medium text-green-600"
  >
    ID
  </span>

  

  <div class="mt-4 text-gray-500 sm:pr-8">
  <div class="emp-icon">
    <svg 
  class="h-8 w-8 sm:h-10 sm:w-10 flex"
  xmlns="http://www.w3.org/2000/svg" 
  viewBox="0 0 576 512">
  <path d="M184.1 38.2c9.9 8.9 10.7 24 1.8 33.9l-72 80c-4.4 4.9-10.6 7.8-17.2 7.9s-12.9-2.4-17.6-7L39 113c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l22.1 22.1 55.1-61.2c8.9-9.9 24-10.7 33.9-1.8zm0 160c9.9 8.9 10.7 24 1.8 33.9l-72 80c-4.4 4.9-10.6 7.8-17.2 7.9s-12.9-2.4-17.6-7L39 273c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l22.1 22.1 55.1-61.2c8.9-9.9 24-10.7 33.9-1.8zM256 96c0-17.7 14.3-32 32-32H512c17.7 0 32 14.3 32 32s-14.3 32-32 32H288c-17.7 0-32-14.3-32-32zm0 160c0-17.7 14.3-32 32-32H512c17.7 0 32 14.3 32 32s-14.3 32-32 32H288c-17.7 0-32-14.3-32-32zM192 416c0-17.7 14.3-32 32-32H512c17.7 0 32 14.3 32 32s-14.3 32-32 32H224c-17.7 0-32-14.3-32-32zM80 464c-26.5 0-48-21.5-48-48s21.5-48 48-48s48 21.5 48 48s-21.5 48-48 48z"/></svg>
  
  

    <h3 class="mt-16 text-xl flex  font-bold text-gray-900">EMP NAME</h3>
</div>

<div class="my-8 pb-4 w-full">

<small class="mt-2  text-sm sm:block">
      PHONE: +962770700820 
</small>

<p> survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>
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


  </div>
</a>
<a
  class="relative block rounded-xl border border-gray-100 p-8 shadow-xl"
  href=""
>
<span
    class="absolute right-4 top-4 rounded-full bg-green-100 px-3 py-1.5 text-xs font-medium text-green-600"
  >
    ID
  </span>

  

  <div class="mt-4 text-gray-500 sm:pr-8">
  <div class="emp-icon">
    <svg 
  class="h-8 w-8 sm:h-10 sm:w-10 flex"
  xmlns="http://www.w3.org/2000/svg" 
  viewBox="0 0 576 512">
  <path d="M184.1 38.2c9.9 8.9 10.7 24 1.8 33.9l-72 80c-4.4 4.9-10.6 7.8-17.2 7.9s-12.9-2.4-17.6-7L39 113c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l22.1 22.1 55.1-61.2c8.9-9.9 24-10.7 33.9-1.8zm0 160c9.9 8.9 10.7 24 1.8 33.9l-72 80c-4.4 4.9-10.6 7.8-17.2 7.9s-12.9-2.4-17.6-7L39 273c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l22.1 22.1 55.1-61.2c8.9-9.9 24-10.7 33.9-1.8zM256 96c0-17.7 14.3-32 32-32H512c17.7 0 32 14.3 32 32s-14.3 32-32 32H288c-17.7 0-32-14.3-32-32zm0 160c0-17.7 14.3-32 32-32H512c17.7 0 32 14.3 32 32s-14.3 32-32 32H288c-17.7 0-32-14.3-32-32zM192 416c0-17.7 14.3-32 32-32H512c17.7 0 32 14.3 32 32s-14.3 32-32 32H224c-17.7 0-32-14.3-32-32zM80 464c-26.5 0-48-21.5-48-48s21.5-48 48-48s48 21.5 48 48s-21.5 48-48 48z"/></svg>
  
  

    <h3 class="mt-16 text-xl flex  font-bold text-gray-900">EMP NAME</h3>
</div>

<div class="my-8 pb-4 w-full">

<small class="mt-2  text-sm sm:block">
      PHONE: +962770700820 
</small>

<p> survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>
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


  </div>
</a>
<a
  class="relative block rounded-xl border border-gray-100 p-8 shadow-xl"
  href=""
>
<span
    class="absolute right-4 top-4 rounded-full bg-green-100 px-3 py-1.5 text-xs font-medium text-green-600"
  >
    ID
  </span>

  

  <div class="mt-4 text-gray-500 sm:pr-8">
  <div class="emp-icon">
    <svg 
  class="h-8 w-8 sm:h-10 sm:w-10 flex"
  xmlns="http://www.w3.org/2000/svg" 
  viewBox="0 0 576 512">
  <path d="M184.1 38.2c9.9 8.9 10.7 24 1.8 33.9l-72 80c-4.4 4.9-10.6 7.8-17.2 7.9s-12.9-2.4-17.6-7L39 113c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l22.1 22.1 55.1-61.2c8.9-9.9 24-10.7 33.9-1.8zm0 160c9.9 8.9 10.7 24 1.8 33.9l-72 80c-4.4 4.9-10.6 7.8-17.2 7.9s-12.9-2.4-17.6-7L39 273c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l22.1 22.1 55.1-61.2c8.9-9.9 24-10.7 33.9-1.8zM256 96c0-17.7 14.3-32 32-32H512c17.7 0 32 14.3 32 32s-14.3 32-32 32H288c-17.7 0-32-14.3-32-32zm0 160c0-17.7 14.3-32 32-32H512c17.7 0 32 14.3 32 32s-14.3 32-32 32H288c-17.7 0-32-14.3-32-32zM192 416c0-17.7 14.3-32 32-32H512c17.7 0 32 14.3 32 32s-14.3 32-32 32H224c-17.7 0-32-14.3-32-32zM80 464c-26.5 0-48-21.5-48-48s21.5-48 48-48s48 21.5 48 48s-21.5 48-48 48z"/></svg>
  
  

    <h3 class="mt-16 text-xl flex  font-bold text-gray-900">EMP NAME</h3>
</div>

<div class="my-8 pb-4 w-full">

<small class="mt-2  text-sm sm:block">
      PHONE: +962770700820 
</small>

<p> survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>
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


  </div>
</a>
<a
  class="relative block rounded-xl border border-gray-100 p-8 shadow-xl"
  href=""
>
<span
    class="absolute right-4 top-4 rounded-full bg-green-100 px-3 py-1.5 text-xs font-medium text-green-600"
  >
    ID
  </span>

  

  <div class="mt-4 text-gray-500 sm:pr-8">
  <div class="emp-icon">
    <svg 
  class="h-8 w-8 sm:h-10 sm:w-10 flex"
  xmlns="http://www.w3.org/2000/svg" 
  viewBox="0 0 576 512">
  <path d="M184.1 38.2c9.9 8.9 10.7 24 1.8 33.9l-72 80c-4.4 4.9-10.6 7.8-17.2 7.9s-12.9-2.4-17.6-7L39 113c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l22.1 22.1 55.1-61.2c8.9-9.9 24-10.7 33.9-1.8zm0 160c9.9 8.9 10.7 24 1.8 33.9l-72 80c-4.4 4.9-10.6 7.8-17.2 7.9s-12.9-2.4-17.6-7L39 273c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l22.1 22.1 55.1-61.2c8.9-9.9 24-10.7 33.9-1.8zM256 96c0-17.7 14.3-32 32-32H512c17.7 0 32 14.3 32 32s-14.3 32-32 32H288c-17.7 0-32-14.3-32-32zm0 160c0-17.7 14.3-32 32-32H512c17.7 0 32 14.3 32 32s-14.3 32-32 32H288c-17.7 0-32-14.3-32-32zM192 416c0-17.7 14.3-32 32-32H512c17.7 0 32 14.3 32 32s-14.3 32-32 32H224c-17.7 0-32-14.3-32-32zM80 464c-26.5 0-48-21.5-48-48s21.5-48 48-48s48 21.5 48 48s-21.5 48-48 48z"/></svg>
  
  

    <h3 class="mt-16 text-xl flex  font-bold text-gray-900">EMP NAME</h3>
</div>

<div class="my-8 pb-4 w-full">

<small class="mt-2  text-sm sm:block">
      PHONE: +962770700820 
</small>

<p> survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>
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


  </div>
</a>
<a
  class="relative block rounded-xl border border-gray-100 p-8 shadow-xl"
  href=""
>
<span
    class="absolute right-4 top-4 rounded-full bg-green-100 px-3 py-1.5 text-xs font-medium text-green-600"
  >
    ID
  </span>

  

  <div class="mt-4 text-gray-500 sm:pr-8">
  <div class="emp-icon">
    <svg 
  class="h-8 w-8 sm:h-10 sm:w-10 flex"
  xmlns="http://www.w3.org/2000/svg" 
  viewBox="0 0 576 512">
  <path d="M184.1 38.2c9.9 8.9 10.7 24 1.8 33.9l-72 80c-4.4 4.9-10.6 7.8-17.2 7.9s-12.9-2.4-17.6-7L39 113c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l22.1 22.1 55.1-61.2c8.9-9.9 24-10.7 33.9-1.8zm0 160c9.9 8.9 10.7 24 1.8 33.9l-72 80c-4.4 4.9-10.6 7.8-17.2 7.9s-12.9-2.4-17.6-7L39 273c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l22.1 22.1 55.1-61.2c8.9-9.9 24-10.7 33.9-1.8zM256 96c0-17.7 14.3-32 32-32H512c17.7 0 32 14.3 32 32s-14.3 32-32 32H288c-17.7 0-32-14.3-32-32zm0 160c0-17.7 14.3-32 32-32H512c17.7 0 32 14.3 32 32s-14.3 32-32 32H288c-17.7 0-32-14.3-32-32zM192 416c0-17.7 14.3-32 32-32H512c17.7 0 32 14.3 32 32s-14.3 32-32 32H224c-17.7 0-32-14.3-32-32zM80 464c-26.5 0-48-21.5-48-48s21.5-48 48-48s48 21.5 48 48s-21.5 48-48 48z"/></svg>
  
  

    <h3 class="mt-16 text-xl flex  font-bold text-gray-900">EMP NAME</h3>
</div>

<div class="my-8 pb-4 w-full">

<small class="mt-2  text-sm sm:block">
      PHONE: +962770700820 
</small>

<p> survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>
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


  </div>
</a>
<a
  class="relative block rounded-xl border border-gray-100 p-8 shadow-xl"
  href=""
>
<span
    class="absolute right-4 top-4 rounded-full bg-green-100 px-3 py-1.5 text-xs font-medium text-green-600"
  >
    ID
  </span>

  

  <div class="mt-4 text-gray-500 sm:pr-8">
  <div class="emp-icon">
    <svg 
  class="h-8 w-8 sm:h-10 sm:w-10 flex"
  xmlns="http://www.w3.org/2000/svg" 
  viewBox="0 0 576 512">
  <path d="M184.1 38.2c9.9 8.9 10.7 24 1.8 33.9l-72 80c-4.4 4.9-10.6 7.8-17.2 7.9s-12.9-2.4-17.6-7L39 113c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l22.1 22.1 55.1-61.2c8.9-9.9 24-10.7 33.9-1.8zm0 160c9.9 8.9 10.7 24 1.8 33.9l-72 80c-4.4 4.9-10.6 7.8-17.2 7.9s-12.9-2.4-17.6-7L39 273c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l22.1 22.1 55.1-61.2c8.9-9.9 24-10.7 33.9-1.8zM256 96c0-17.7 14.3-32 32-32H512c17.7 0 32 14.3 32 32s-14.3 32-32 32H288c-17.7 0-32-14.3-32-32zm0 160c0-17.7 14.3-32 32-32H512c17.7 0 32 14.3 32 32s-14.3 32-32 32H288c-17.7 0-32-14.3-32-32zM192 416c0-17.7 14.3-32 32-32H512c17.7 0 32 14.3 32 32s-14.3 32-32 32H224c-17.7 0-32-14.3-32-32zM80 464c-26.5 0-48-21.5-48-48s21.5-48 48-48s48 21.5 48 48s-21.5 48-48 48z"/></svg>
  
  

    <h3 class="mt-16 text-xl flex  font-bold text-gray-900">EMP NAME</h3>
</div>

<div class="my-8 pb-4 w-full">

<small class="mt-2  text-sm sm:block">
      PHONE: +962770700820 
</small>

<p> survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>
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


  </div>
</a>
<a
  class="relative block rounded-xl border border-gray-100 p-8 shadow-xl"
  href=""
>
<span
    class="absolute right-4 top-4 rounded-full bg-green-100 px-3 py-1.5 text-xs font-medium text-green-600"
  >
    ID
  </span>

  

  <div class="mt-4 text-gray-500 sm:pr-8">
  <div class="emp-icon">
    <svg 
  class="h-8 w-8 sm:h-10 sm:w-10 flex"
  xmlns="http://www.w3.org/2000/svg" 
  viewBox="0 0 576 512">
  <path d="M184.1 38.2c9.9 8.9 10.7 24 1.8 33.9l-72 80c-4.4 4.9-10.6 7.8-17.2 7.9s-12.9-2.4-17.6-7L39 113c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l22.1 22.1 55.1-61.2c8.9-9.9 24-10.7 33.9-1.8zm0 160c9.9 8.9 10.7 24 1.8 33.9l-72 80c-4.4 4.9-10.6 7.8-17.2 7.9s-12.9-2.4-17.6-7L39 273c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l22.1 22.1 55.1-61.2c8.9-9.9 24-10.7 33.9-1.8zM256 96c0-17.7 14.3-32 32-32H512c17.7 0 32 14.3 32 32s-14.3 32-32 32H288c-17.7 0-32-14.3-32-32zm0 160c0-17.7 14.3-32 32-32H512c17.7 0 32 14.3 32 32s-14.3 32-32 32H288c-17.7 0-32-14.3-32-32zM192 416c0-17.7 14.3-32 32-32H512c17.7 0 32 14.3 32 32s-14.3 32-32 32H224c-17.7 0-32-14.3-32-32zM80 464c-26.5 0-48-21.5-48-48s21.5-48 48-48s48 21.5 48 48s-21.5 48-48 48z"/></svg>
  
  

    <h3 class="mt-16 text-xl flex  font-bold text-gray-900">EMP NAME</h3>
</div>

<div class="my-8 pb-4 w-full">

<small class="mt-2  text-sm sm:block">
      PHONE: +962770700820 
</small>

<p> survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>
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


  </div>
</a>


</div>
</section>
</section>
</div>