<!-- <h1>test</h1> -->









<section class="flex mt-24 items-center flex-1">
    <div class="flex flex-col w-full ">
        <h1 class="text-5xl font-extrabold text-center lg:text-7xl 2xl:text-8xl">
            <span
                class="text-transparent bg-gradient-to-br bg-clip-text from-teal-500 via-indigo-500 to-sky-500 dark:from-teal-200 dark:via-indigo-300 dark:to-sky-500">
               Add New 
            </span>

            <span
                class="text-transparent bg-gradient-to-tr bg-clip-text from-blue-500 via-pink-500 to-red-500 dark:from-sky-300 dark:via-pink-300 dark:to-red-500">
                Employee
            </span>
        </h1>

      

       

      
    </div>



</section>

<section class="max-w-4xl p-6 mx-auto bg-white rounded-md shadow-md shadow-xl border dark:bg-gray-800">
    <h2 class="text-lg font-semibold text-gray-700 bg-white capitalize dark:text-white">New Employee Information</h2>
<!-- for validation msg -->
<?php echo validation_errors(); ?>

<?php echo form_open_multipart('employee/create'); ?>

        <div class="grid bg-white grid-cols-1 gap-6 mt-4 sm:grid-cols-2">
            <div class="form-group bg-white">
                <label class="text-gray-700 bg-white dark:text-gray-200" for="name">Name</label>
                <input id="name"
                name='name'
                type="text"
                 class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 dark:focus:border-blue-300 focus:outline-none focus:ring">
            </div>

            <div class="form-group bg-white">
                <label class="text-gray-700 bg-white dark:text-gray-200" for="address"> Address</label>
                <input
                name='address'
                id="address" type="text" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 dark:focus:border-blue-300 focus:outline-none focus:ring">
            </div>
            <div class="form-group bg-white">
                <label class="text-gray-700 bg-white dark:text-gray-200" for="phone"> Phone NO</label>
                <input id="phone" name='phone'
                type="text" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 dark:focus:border-blue-300 focus:outline-none focus:ring">
            </div>

        </div>

        <div class="flex justify-end  bg-white">
            <button class="px-8 py-2.5 leading-5 text-white bg-white transition-colors duration-300 transform bg-blue-700 rounded-md hover:bg-gray-600 focus:outline-none focus:bg-gray-600">Submit</button>
        </div>
    </form>
</section>
