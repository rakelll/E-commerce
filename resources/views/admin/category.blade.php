<!DOCTYPE html>
<html>

<head>
    @include('admin.css')
    <style>
        input[type='text'] {
            width: 400px;
            height: 30px;
        }

        .div_deg {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .table_deg {
            text-align: center;
            margin: auto;
            border: 2px solid yellowgreen;
            margin-top: 50px;
            width: 1000px;

            th {
                background-color: skyblue;
                padding: 10px;
                font-size: 20px;
                font-weight: bold;
                color: white;
            }

            td {
                color: white;
                padding: 10px;
                border: 1px solid skyblue;
            }
    </style>
</head>

<body>
    @include ('admin.header')

    @include('admin.sidebar')

    <!-- Sidebar Navigation end-->
    <div class="page-content">
        <div class="page-header">
            <div class="container-fluid">
                <h1 style="color: white">Add Category</h1>
                <div class="div_deg">
                    <form action="{{ url('add_category') }}" method="post">
                        @csrf
                        <div>
                            <input type="text" name="category" id="">
                            <input class="btn-primary" type="submit" value="add category">
                        </div>
                    </form>
                </div>
                <div>
                    <table class="table_deg">

                        <tr>
                            <th>Category Name</th>
                            <th>Edit</th>
                            <th>Delete</th>

                        </tr>
                        @foreach ($data as $data)
                            <tr>
                                <td>{{ $data->category_name }}</td>
                                <td>
                                    <a class="btn-success" href="{{ url('edit_category', $data->id) }}">Edit</a>
                                </td>
                                <td>
                                    <a class="btn btn-danger" onclick="confirmation(event)"
                                        href="{{ url('delete_category', $data->id) }}">Delete</a>
                                </td>

                            </tr>
                        @endforeach
                    </table>






                </div>


            </div>
        </div>
        <!-- JavaScript files-->
        @include('admin.js')


</body>

</html>
