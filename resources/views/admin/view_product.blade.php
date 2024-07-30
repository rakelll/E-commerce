<!DOCTYPE html>
<html>

<head>
    @include('admin.css')
    <style>
        .div_deg {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 60px;
        }

        .table_deg {
            text-align: center;
            margin: auto;
            border: 2px solid yellowgreen;
            margin-top: 50px;
            width: 1000px;
        }

        th {
            background-color: skyblue;
            padding: 15px;
            font-size: 18px;
            font-weight: bold;
            color: white;
        }

        td {
            border: 1px solid skyblue;
            text-align: center;
            color: white;
        }

        input[type='search'] {
            width: 500px;
            height: 60px;
            margin-left: 50px;
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
                <form action="{{url('product_search')}}" method="get">
                    @csrf
                    <input type="search" name="search">
                    <input type="submit" class="btn btn-secondary" value="Search">
                </form>
                <div class="div_deg">
                    <table class="table_deg">
                        <tr>
                            <th>
                                Product title
                            </th>
                            <th>
                                Description
                            </th>
                            <th>
                                Category
                            </th>
                            <th>
                                Price
                            </th>
                            <th>
                                Quantity
                            </th>
                            <th>
                                Image
                            </th>
                            <th>
                                Edit
                            </th>
                            <th>
                                Delete
                            </th>

                        </tr>
                        @foreach ($product as $products)
                            <tr>
                                <td>{{ $products->title }}</td>
                                {{-- <td>{!! Str::limit($products->description, 20) !!}</td> --}}
                                <td>{!! Str::words($products->description, 5) !!}</td>
                                <td>{{ $products->category }}</td>
                                <td>{{ $products->price }}</td>
                                <td>{{ $products->quantity }}</td>
                                <td> <img height="140" width="140px" src="products/{{ $products->image }}"
                                        alt=""> </td>
                                <td> <a class="btn btn-success"
                                        href="{{ url('update_product', $products->id) }}">Update</a>
                                </td>
                                <td> <a class="btn btn-danger" onclick="confirmation(event)"
                                        href="{{ url('delete_product', $products->id) }}">Delete</a>
                                </td>

                            </tr>
                        @endforeach




                    </table>
                </div>
                <div class="div_deg"> {{ $product->links() }}</div>

            </div>
        </div>

        <!-- JavaScript files-->


        @include('admin.js')

</body>

</html>
