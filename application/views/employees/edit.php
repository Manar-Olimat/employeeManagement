
<section class="flex mt-24 items-center flex-1">
    <div class="flex flex-col w-full ">
        <h1 class="text-5xl font-extrabold text-center lg:text-7xl 2xl:text-8xl">
            <span
                class="text-transparent bg-gradient-to-br bg-clip-text from-teal-500 via-indigo-500 to-sky-500 dark:from-teal-200 dark:via-indigo-300 dark:to-sky-500">
                Edit
            </span>

            <span
                class="text-transparent bg-gradient-to-tr bg-clip-text from-blue-500 via-pink-500 to-red-500 dark:from-sky-300 dark:via-pink-300 dark:to-red-500">
                Employee
            </span>
        </h1>


    </div>



</section>

<section class="max-w-4xl p-6 mx-auto bg-white rounded-md shadow-md shadow-xl border dark:bg-gray-800">
    <h2 class="text-lg font-semibold text-gray-700 capitalize dark:text-white">Edit Employee Information</h2>
    <!-- for validation msg -->
    <?php echo validation_errors(); ?>

    <?php echo form_open_multipart('employee/update'); ?>
    <input type="hidden" name="id" value="<?php echo $employee['id']; ?>">

    <div class="grid grid-cols-1 gap-6 mt-4 sm:grid-cols-2">
        <div class="form-group">
            <label class="text-gray-700 dark:text-gray-200" for="name">Name</label>
            <input id="name" name='name' value="<?php echo $employee['name']; ?>" type="text"
                class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 dark:focus:border-blue-300 focus:outline-none focus:ring">
        </div>

        <div class="form-group">
            <label class="text-gray-700 dark:text-gray-200" for="address"> Address</label>
            <input name='address' value="<?php echo $employee['address']; ?>" id="address" type="text"
                class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 dark:focus:border-blue-300 focus:outline-none focus:ring">
        </div>
        <div class="form-group">
            <label class="text-gray-700 dark:text-gray-200" for="phone"> Phone NO</label>
            <input id="phone" name='phone' value="<?php echo $employee['phone']; ?>" type="text"
                class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 dark:focus:border-blue-300 focus:outline-none focus:ring">
        </div>

    </div>

    <div class="flex justify-end mt-6">
        <button
            class="px-8 py-2.5 leading-5 text-white transition-colors duration-300 transform bg-blue-700 rounded-md hover:bg-gray-600 focus:outline-none focus:bg-gray-600">Update</button>
    </div>
    </form>
</section>



<hr class="my-8 h-px mx-8 bg-gray-200 border-0 dark:bg-gray-700">

<section class="flex mt-24 items-center flex-1">
    <div class="flex flex-col w-full ">
        <h1 class="text-5xl font-extrabold text-center lg:text-7xl 2xl:text-8xl">
            <span
                class="text-transparent bg-gradient-to-br bg-clip-text from-teal-500 via-indigo-500 to-sky-500 dark:from-teal-200 dark:via-indigo-300 dark:to-sky-500">
                Employee
            </span>

            <span
                class="text-transparent bg-gradient-to-tr bg-clip-text from-blue-500 via-pink-500 to-red-500 dark:from-sky-300 dark:via-pink-300 dark:to-red-500">
                Tasks
            </span>
        </h1>






    </div>
    <br> <br>






</section>
<!-- ALL TASKS -->
<!-- DELETE EMPLOYEE FROM DB-->

<?php echo form_open('/tasks/create/' . $employee['id']); ?>
<input type="hidden" name="id" value="<?php echo $employee['id']; ?>">

<button type="submit"
    class="px-8 py-3 text-sm font-medium tracking-wide text-white capitalize transition-colors duration-300 transform bg-blue-500 rounded-md hover:bg-blue-600 focus:bg-blue-600 focus:outline-none sm:mx-2">
    Add New
</button>
<!-- <input type="submit" value="Delete" class="btn btn-danger"> -->
</form>



<section>
    <div class="mt-8 grid grid-cols-2 gap-x-4 gap-y-8 lg:grid-cols-3">
    <?php if (empty($tasks)) { ?>  
    <h1> This Employee Has No Tasks</h1>
    <?php } else {
    foreach ($tasks as $task):
         ?>
        <div class="relative block rounded-xl border bg-white mb-8 border-gray-100 p-8 shadow-xl" >
            <span
                class="absolute right-4 top-4 rounded-full bg-green-100 px-3 py-1.5 text-xs font-medium text-green-600">
                ID: <?php echo $task['id']; ?>
            </span>


            <div class="mt-4 text-gray-500 sm:pr-8">
                <div class="emp-icon">
                    <svg class="h-8 w-8 sm:h-10 sm:w-10 flex" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                        <path
                            d="M184.1 38.2c9.9 8.9 10.7 24 1.8 33.9l-72 80c-4.4 4.9-10.6 7.8-17.2 7.9s-12.9-2.4-17.6-7L39 113c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l22.1 22.1 55.1-61.2c8.9-9.9 24-10.7 33.9-1.8zm0 160c9.9 8.9 10.7 24 1.8 33.9l-72 80c-4.4 4.9-10.6 7.8-17.2 7.9s-12.9-2.4-17.6-7L39 273c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l22.1 22.1 55.1-61.2c8.9-9.9 24-10.7 33.9-1.8zM256 96c0-17.7 14.3-32 32-32H512c17.7 0 32 14.3 32 32s-14.3 32-32 32H288c-17.7 0-32-14.3-32-32zm0 160c0-17.7 14.3-32 32-32H512c17.7 0 32 14.3 32 32s-14.3 32-32 32H288c-17.7 0-32-14.3-32-32zM192 416c0-17.7 14.3-32 32-32H512c17.7 0 32 14.3 32 32s-14.3 32-32 32H224c-17.7 0-32-14.3-32-32zM80 464c-26.5 0-48-21.5-48-48s21.5-48 48-48s48 21.5 48 48s-21.5 48-48 48z" />
                    </svg>



                    <h3 class="mt-16 text-xl flex  font-bold text-gray-900"> <?php echo $task['title']; ?></h3>
                </div>

                <div class="my-8 pb-4 w-full">

                    <small class="mt-2  text-sm sm:block">
                    <?php echo $task['due_date']; ?>
                    </small>

                    <p>  <?php echo $task['description']; ?></p>
                </div>


            </div>

            <div class="w-full ">
                <!-- EDIT POST -->
<button type="button">

<span
  class="absolute right-4 bottom-4 rounded-full bg-blue-100 px-3 py-1.5 text-xs font-medium text-blue-600"
  data-bs-toggle="modal" data-bs-target="#editTask">
<i class="fa-solid fa-list-check"></i> edit
</span>
</button>
<!-- DELETE EMPLOYEE FROM DB-->
<?php echo form_open('/tasks/delete/'.$task['id']); ?>
<button type="submit " >
<span
  class="absolute right-24 bottom-4 rounded-full bg-red-100 px-3 py-1.5 text-xs font-medium text-red-600"
>
<i class="fa-solid fa-trash-can"></i> delete
</span>
</button>
  </form>



            </div>
    </div>
     <!-- EDIT TASK MODAL -->

     
<div class="modal fade fixed top-0 left-0 hidden w-full h-full outline-none overflow-x-hidden overflow-y-auto" id="editTask" tabindex="-1" aria-labelledby="editTaskTitle" aria-modal="true" role="dialog">
  <div class="modal-dialog modal-dialog-centered relative w-auto pointer-events-none">
    <div class="modal-content border-none shadow-lg relative flex flex-col w-full pointer-events-auto bg-white bg-clip-padding rounded-md outline-none text-current">
      <!--HEAD  -->
    <div class="modal-header flex flex-shrink-0 items-center justify-between p-4 border-b border-gray-200 rounded-t-md">
        <h5 class="text-xl font-medium leading-normal text-gray-800" id="exampleModalScrollableLabel">
          Edit <?php echo $task['title']; ?>
        </h5>
        <button type="button"
          class="btn-close box-content w-4 h-4 p-1 text-black border-none rounded-none opacity-50 focus:shadow-none focus:outline-none focus:opacity-100 hover:text-black hover:opacity-75 hover:no-underline"
          data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <!-- BODY -->
      <div class="modal-body relative p-4">
      <?php echo form_open_multipart('tasks/update'); ?>
<input type="hidden" name="id" value="<?php echo $task['id']; ?>">

        <div class="grid grid-cols-1 gap-6 mt-4 sm:grid-cols-2">
            <div class="form-group">
                <label class="text-gray-700 dark:text-gray-200" for="title">Title</label>
                <input id="title"
                name='title'
                value="<?php echo $task['title']; ?>"
                type="text"
                 class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 dark:focus:border-blue-300 focus:outline-none focus:ring">
            </div>

            <div class="form-group">
                <label class="text-gray-700 dark:text-gray-200" for="due_date"> Due Date</label>
                <input
                name='due_date'
                value="<?php echo $task['due_date']; ?>"
                id="due_date" type="date" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 dark:focus:border-blue-300 focus:outline-none focus:ring">
            </div>
            <div class="form-group">
                <label class="text-gray-700 dark:text-gray-200" for="description"   > Description</label>
                
                <textarea id="description" class="form-control block w-full px-4" name="description" placeholder="Add Description">

                <?php echo $task['description']; ?>
                </textarea>

            </div>

    

        </div>

        
    
      </div>

      <!-- FOOTER -->
      <div
        class="modal-footer flex flex-shrink-0 flex-wrap items-center justify-end p-4 border-t border-gray-200 rounded-b-md">
        <button type="button"
          class="inline-block px-6 py-2.5 bg-purple-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-purple-700 hover:shadow-lg focus:bg-purple-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-purple-800 active:shadow-lg transition duration-150 ease-in-out"
          data-bs-dismiss="modal">
          Close
        </button>
        <button type="submit"
          class="inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out ml-1">
          Save changes
        </button>
      </div></form>
    </div>
  </div>
</div>



        <?php endforeach;
}?>

    </div>
</section>


