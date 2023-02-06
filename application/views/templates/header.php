<!DOCTYPE html>
<html lang="en">

<head>



	<script src="https://cdn.tailwindcss.com"></script>
	<script src="https://kit.fontawesome.com/8b42dcad4f.js" crossorigin="anonymous"></script>
	<script defer src="https://unpkg.com/alpinejs@3.10.5/dist/cdn.min.js"></script>
	<link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/style.css">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
	<link rel="stylesheet"
		href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" />
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tw-elements/dist/css/index.min.css" />
	<script src="https://cdn.tailwindcss.com"></script>


	<style>
		body {
			background-color: #fcf3f6;

		}

		main {
			padding: 0 10%;
			font-family: 'Open Sans', sans-serif;
			background-color: #fcf3f6;
		}

		nav {
			padding: 0 10%;
			background-color: #77002e;


		}

		.emp-icon svg,
		.emp-icon h3 {
			display: inline;
		}

		.header {
			background-color: #77002e;

		}
	</style>
	<title>ciBlog</title>
</head>

<body>
	<header class='header w-full px-4 '>


		<nav class="p-3 border-gray-200 rounded  dark:bg-gray-800 dark:border-gray-700">
			<div class="container flex flex-wrap items-center justify-between mx-auto">
				<a href="<?php echo base_url(); ?>" class="flex items-center">
					<span class="self-center text-4xl  font-bold text-white whitespace-nowrap dark:text-white">Employee
						Manager </span>
				</a>
				<button data-collapse-toggle="navbar-solid-bg" type="button"
					class="inline-flex items-center p-2 ml-3 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
					aria-controls="navbar-solid-bg" aria-expanded="false">
					<span class="sr-only">Open main menu</span>
					<svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
						xmlns="http://www.w3.org/2000/svg">
						<path fill-rule="evenodd"
							d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
							clip-rule="evenodd"></path>
					</svg>
				</button>
				<div class="hidden w-full md:block md:w-auto" id="navbar-solid-bg">
					<ul
						class="flex flex-col mt-4 rounded-lg  md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium md:border-0 md:bg-transparent dark:bg-gray-800 md:dark:bg-transparent dark:border-gray-700">
						<li>
							<a href="<?php echo base_url(); ?>"
								class="block py-2 pl-3 pr-4 text-white rounded  md:hover:bg-transparent md:border-0  md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 text-2xl dark:hover:text-white md:dark:hover:bg-transparent">All
								Employees</a>
						</li>
						<li>
							<a href="<?php echo site_url('/employee/create'); ?>"
								class="block py-2 pl-3 pr-4 text-white rounded  md:hover:bg-transparent md:border-0  md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 text-2xl dark:hover:text-white md:dark:hover:bg-transparent">Add
								New Employee</a>
						</li>

					</ul>
				</div>
			</div>
		</nav>


	</header>
	<main>