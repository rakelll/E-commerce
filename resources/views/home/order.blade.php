<!DOCTYPE html>
<html>

<head>
    @include('home.css')
    <style>
        .class_center {
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 60px;
        }

        table {
            border: 2px solid black;
            text-align: center;
            width: 800px;
        }

        th {
            border: 2px solid skyblue;
            background-color: black;
            color: white;
            text-align: center;
            font-weight: bold;
            font-size: 19px;
        }

        td {
            border: 1px solid skyblue;
            padding: 10px;
        }
    </style>
</head>

<body>
    <div class="hero_area">

        @include('home.header')
        <!-- end header section -->
        <!-- slider section -->



        <!-- end slider section -->
    </div>
    <div class="class_center">
        <table>
            <tr>
                <th>Product Name</th>
                <th>Price</th>
                <th>Delivery Status</th>
                <th>Image</th>
            </tr>
            @foreach ($order as $order)
                <tr>
                    <td>{{ $order->product->title }}</td>
                    <td>{{ $order->product->price }}</td>
                    <td>{{ $order->status }}</td>
                    <td><img height="150px" width="150px" src="products/{{ $order->product->image }}" alt=""></td>
                </tr>
            @endforeach
        </table>
    </div>










    <!-- end hero area -->

    <!-- shop section -->



    <!-- end shop section -->



    <!-- contact section -->

    <!-- end contact section -->


    @include('home.footer')
    <!-- info section -->


</body>

</html>
