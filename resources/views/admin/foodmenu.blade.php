<x-app-layout>
    
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Corona Admin</title>
    <!-- plugins:css -->
    @include("admin.admincss")

  </head>
  <body>
    
  <div class="container-scroller">
    @include("admin.navbar")

    <div style="position: relative; top: 60px; right: -150px">
        <form action="{{('/uploadfood')}}" method="post" enctype="multipart/form-data">

        @csrf

            <div>
                <label>Title</label>
                <input style="color: black" type="text" name="title" placeholder="title" required>
            </div>
            <div>
                <label>Price</label>
                <input style="color: black"type="number" name="price" placeholder="Price" required>
            </div>
            <div>
                <label>Image</label>
                <input type="file" name="image" placeholder="Image" required>
            </div>
            <div>
                <label>Description</label>
                <input style="color: black"type="text" name="description" placeholder="description" required>
            </div>
            <div>
                <input style="color: black;" type="submit" value="Save">
            </div>
        </form>
    </div>

</div>
    @include("admin.adminscript")
    
  </body>
</html>
</x-app-layout>