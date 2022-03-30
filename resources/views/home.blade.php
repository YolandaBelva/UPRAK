<html>
    <head>
        <title>Home Page</title>
    </head>

    <style>
        ul {
        list-style-type: none;
        margin: 0;
        padding: 0;
        overflow: hidden;
        background-color: #333;
        }

        li {
        float: left;
        }

        li a {
        display: block;
        color: white;
        text-align: center;
        padding: 14px 16px;
        text-decoration: none;
        }

        li a:hover {
        background-color: #111;
        }

        .hotel{
            margin-left: 2vw;
            width: 18%;
            height: 50%;
            
        }

        .hotel-img{
           width: 100%;
        }

        .container-hotels{
            width: 100%;
            height: 90%;
            display: flex;
            flex-wrap: wrap;
            padding-top: 2vw;
        }

        .circle{
            width: 3%;
            position: absolute;
            left: 95%;
            top: 99%;
            }


    </style>


    <body>
    <ul>
            <li><a class="active" href="#home">Home</a></li>
            <li><a href="#news">Hotels</a></li>
    </ul>
    <div class="container-hotels">
    @foreach ($hotels as $hotel)
    <div class="hotel">
       <a href="/detail/{{$hotel->id}}"> <img class="hotel-img" src="https://s-light.tiket.photos/t/01E25EBZS3W0FY9GTG6C42E1SE/t_htl-dskt/tix-hotel/images-web/2021/03/16/2fe50a8d-d997-41e5-b6de-bc0901ec8228-1615888512764-f7a27d7aa200152dd1633e71db070da7.jpg" alt=""></a>
        <p class="nh">{{ $hotel->nama_hotel }}</p>
        <p>{{ $hotel->lokasi }}</p>
        <p>{{ $hotel->harga }}</p>
    </div>
    
    @endforeach


</div>
         <a href="/add"> <img class="circle" src="https://cdn-icons-png.flaticon.com/512/1828/1828919.png"> </a>

</body>
</html>