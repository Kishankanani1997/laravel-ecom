<x-app-layout>
    <x-slot name="header">
        <h1 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight text-center text-info">
            Edit Blogs Here
        </h1>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <!-- {{ __("You're logged in!") }}    -->
                    <div class="container">
                        <div class="row">
                            <div class="col-md-2 sidebar">
                                <ul class="manage-style">
                                <li style="padding:6px";><a href="/navbar.addgallery">Add Gallery</a></li>
                                <li style="padding:6px";><a href="/navbar.managegallery">Manage Gallery</a></li>
                                <li style="padding:6px";><a href="/navbar.addblogs">Add Blogs</a></li>
                                <li style="padding:6px";><a href="/navbar.manageblogs">Manage Blogs</a></li>
                                <li style="padding:6px";><a href="/navbar.addproducts">Add Products </a></li>
                                <li style="padding:6px";><a href="navbar.manageproducts">Manage Products</a></li>
                                </ul>
                            </div>


                            <div class="col-md-10">

                             <!--here we write code for validation of message--> 
                            @if($errors->any())
                                <div class='alert alert-danger col-md-10 mx-auto'>
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif

                            <!--here we pass flash data message-->
                            @if(Session('success'))
                                <div class="alert alert-success">
                                    <span class="text-dark">{{ session('success')}}</span>
                                </div>
                            @endif

                            <form method="post" enctype="multipart/form-data">
                                @csrf
                                    <div class="form-group col-md-10 mx-auto">
                                        <label>*Edit Blog Title*</label>
                                        <input type="text" name="blogtitle" value="{{$editblogs->blogtitle}}" placeholder="Enter Blog Title" class="form-control">
                                    </div>

                                    <div class="form-group mt-4 col-md-10 mx-auto">
                                        <label>*Edit Blog*</label>
                                        <input type="text" name="addblog" value="{{$editblogs->addblog}}" placeholder="Add Your Blog" class="form-control">
                                    </div>

                                    <div class="form-group mt-4 col-md-10 mx-auto">
                                        <label>*Edit Blog Date*</label>
                                        <input type="date" name="blogdate" value="{{$editblogs->blogdate}}"class="form-control">
                                    </div>

                                    <div class="form-group mt-4 col-md-10 mx-auto">
                                        <label>*Edit Blogimage*</label>
                                        <input type="file" name="blogimage" value="{{$editblogs->blogimage}}" class="form-control">
                                    </div>

                                    <div class="col-md-10 mx-auto">
                                        <input type="submit" name="submit" value="Submit" class="btn btn-success bg bg-success mt-4">
                                        <input type="reset" name="reset" value="Reset" class="btn btn-danger bg bg-danger mt-4">
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
