<x-app-layout>
    <x-slot name="header">
        <h1 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight text-center text-info">
            Manage Gallery Here
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
                                <ul class="nav-style">
                                <li><a href="/navbar.addgallery">Add Gallery</a></li>
                                <li><a href="/navbar.managegallery">Manage Gallery</a></li>
                                <li><a href="/navbar.addblogs">Add Blogs</a></li>
                                <li><a href="/navbar.manageblogs">Manage Blogs</a></li>
                                <li><a href="/navbar.addproducts">Add Products </a></li>
                                <li><a href="navbar.manageproducts">Manage Products</a></li>
                                </ul>
                            </div>

                            <div class="col-md-10">

                             <!--here we write code for validation of message--> 
                            @if($errors->any())
                                <div class='alert alert-danger'>
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

                            <!--here we pass flash data message for deletion of data-->
                            @if(Session('dele'))
                            <div class="alert alert-danger col-md-12">
                                <span class="text-dark">{{ session('dele')}}</span>
                            </div>
                            @endif 
                            
                             <!--here we pass flash data message for updation of data-->
                             @if(Session('updatesuc'))
                            <div class="alert alert-success col-md-12">
                                <span class="text-dark">{{ session('updatesuc')}}</span>
                            </div>
                            @endif 

                            <div class="table table-responsive">
                                <table id="example" class="display table table-responsive" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Galleryname</th>
                                            <th>Uploadimage</th>
                                            <th>Action</th> 
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($data as $row)
                                        <tr>
                                            <td>{{$row->id}}</td>
                                            <td>{{$row->galleryname}}</td>
                                            <td><img src='{{ asset("assets/uploads/gallery/".$row->uploadimage)}}' width="65px" height="65px";></td>
                                            <td><a href='{{ URL("/navbar.managegallery/".$row->id)}}' onclick="return confirm('Are you sure you want to delete?')"><i class="bi bi-trash text-danger"></i></a> | <a href='{{ URL("/navbar.editgallery/".$row->id)}}' onclick="return confirm('Are You Sure You Want to Edit Gallery?')"><i class="bi bi-pencil text-warning"></i>
                                        </tr>
                                        @endforeach    
                                    </tbody>
                                </table>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
$(document).ready(function () {
    $('#example').DataTable();
});
</script>

</x-app-layout>

