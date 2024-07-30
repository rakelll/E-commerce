<!DOCTYPE html>
<html>

<head>
    @include('home.css')
    <style>
        .div_deg {
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
            border: 2px solid black;
            text-align: center;
            color: white;
            font: 20px;
            font-weight: bold;
            background-color: black;
        }

        td {
            border: 1px solid skyblue;
        }

        .cart_value {
            text-align: center;
            margin-bottom: 70px;
            padding: 18px;
        }

        .order_deg {
            padding-top: 100px;
            padding-right: 100px;
            margin-top: -50px;
        }

        label {
            display: inline-block;
            width: 150px;
        }

        .div_gap {
            padding: 20px;
            display: flex;
            justify-content: center;
            align-items: center;

        }

        textarea {
            width: 200px;
            height: 70PX;
        }
    </style>
</head>

<body>
    <div class="hero_area">

        @include('home.header')
        <!-- end header section -->
        <!-- slider section -->

    </div>
    <div class="div_deg">









        <table>
            <tr>
                <th>Product Title</th>
                <th>Price</th>
                <th>Image</th>
                <th>Remove</th>
            </tr>
            <?php
            $value = 0;
            
            ?>




            @foreach ($cart as $cart)
                <tr>
                    <td>{{ $cart->product->title }}</td>
                    <td>{{ $cart->product->price }}</td>
                    <td> <img width="150" src="/products/{{ $cart->product->image }}" alt=""> </td>
                    <td> <a class="btn btn-danger" href="{{ url('remove_product', $cart->id) }}">Delete</a>
                    </td>

                </tr>
                <?php
                
                $value = $value + $cart->product->price;
                ?>
            @endforeach


        </table>
    </div>

    <div class="cart_value">
        <h3>Total value of Cart is :${{ $value }}</h3>
    </div>






    <div class="order_deg">
        <form action="{{ url('confirm_order') }}" method="post">
            @csrf
            <div class="div_gap">
                <label for="">Receiver Name</label>
                <input type="text" name="name" value="{{ Auth::user()->name }}">
            </div>
            <div class="div_gap">
                <label for="">Receiver Address</label>
                <textarea name="address" id="" cols="30" rows="10">{{ Auth::user()->address }}</textarea>
            </div>
            <div class="div_gap">
                <label for="">Receiver Phone</label>
                <input type="text" name="phone" value="{{ Auth::user()->phone }}">
            </div>

            <div class="div_gap">
                <input class="btn btn-primary" type="submit" value="Cash On Delivery">
                <a class="btn btn-success" href="{{ url('stripe', $value) }}">Pay Using Card</a>
            </div>




        </form>
    </div>


    @include('home.footer')
    <!-- info section -->



</body>

</html>
