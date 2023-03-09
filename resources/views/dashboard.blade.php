<x-app-layout>
    <x-slot name="header">
        <h1 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight text-center text-dark">
            Welcome to the Laravel Dashboard 
        </h1>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <!-- {{ __("You're logged in!") }}    -->
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 sidebar" style="background-color: aqua;">
                                <ul>
                                <li style="padding:10px 16px";><a href="/navbar.addgallery">Add Gallery</a></li>
                                <li style="padding:10px 16px";><a href="/navbar.managegallery">Manage Gallery</a></li>
                                <li style="padding:10px 16px";><a href="/navbar.addblogs">Add Blogs</a></li>
                                <li style="padding:10px 16px";><a href="/navbar.manageblogs">Manage Blogs</a></li>
                                <li style="padding:10px 16px";><a href="/navbar.addproducts">Add Products </a></li>
                                <li style="padding:10px 16px";><a href="navbar.manageproducts">Manage Products</a></li>
                                </ul>
                            </div>
                            <img src="{{ asset('assets/image/dashboard.png')}}" class="mt-4 mx-5" style="width:1050px; height:550px;">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
