<!DOCTYPE html>
<html>

<head>
    @include('home.css')
    <style>
        img {
            height: 400px;
            width: 400px;
        }

        .div_center {
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 30px;
        }

        .detail-box {
            padding: 15px;
        }
    </style>
</head>

<body>
    <div class="hero_area">

        @include('home.header')


    </div>

    {{-- Product deatails start --}}

    <section class="shop_section layout_padding">
        <div class="container">
            <div class="heading_container heading_center">

            </div>
            <div class="row">

                <div class=" col-md-12">
                    <div class="box">

                        <div class="div_center">
                            <img src="/products/{{ $data->image }}" alt="">
                        </div>
                        <div class="detail-box">
                            <h6>
                                {{ $data->title }}
                            </h6>
                            <h6>
                                Price
                                <span>
                                    ${{ $data->price }}
                                </span>
                            </h6>

                        </div>
                        <div class="detail-box">
                            <h6>
                                Category : {{ $data->category }}
                            </h6>
                            <h6>
                                Available Quantity
                                <span>
                                    {{ $data->quantity }}
                                </span>
                            </h6>

                        </div>
                        <div class="detail-box">

                            <p> {{ $data->description }}
                            </p>

                        </div>

                    </div>
                </div>



            </div>

        </div>
    </section>


    <script type="text/javascript">
        function confirmation(ev) {
            ev.preventDefault();
            var urlToRedirect = ev.currentTarget.getAttribute('href');
            console.log(urlToRedirect);

            swal({
                    title: "ARE YOU SURE TO DELETE THIS",
                    text: "This delete will be permanent",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,

                })
                .then((willCancel) => {
                    if (willCancel) {
                        window.location.href = urlToRedirect;
                    }
                })
        };
    </script>


    {{-- product details end --}}
    @include('home.footer')
    <!-- info section -->


</body>

</html>
