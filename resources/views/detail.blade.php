<html>
    <head>
        <title>Detail Page</title>
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

        .container-card{
            width: 100%;
            height: 90%;

        }

        .img-hotel{
            width: 100%;
        }

        h3{
            width: 100%;
        }

        p{
            width: 100%;
        }

        .card{
            width: 30%;
            margin-left: 35vw;
        }

        .img-wifi{
            width: 10%;
            margin-right: 5%;
            margin-bottom: 5%;
        }

        .card-one{
            border: 2px solid black;
            padding-bottom: 5%;
        }

        input[type=submit] {
        background-color: #04AA6D;
        color: white;
        padding: 12px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        }

    </style>

    <body>
    <ul>
        <li><a class="active" href="/home">Home</a></li>
        <li><a href="/tampilkandata/{{ $hotels->id }}">Edit</a></li>
        <li><a href="/delete/{{$hotels->id}}">Hapus</a></li>
    </ul>

    <center><h1> {{$hotels->nama_hotel}}</h1>
    <p>Location</p></center>

    <div class="container-card">
        <div class="card">
            <img class="img-hotel" src="https://blog-media.lifepal.co.id/wp-content/uploads/2018/08/10134030/5-Hotel-Bintang-5-Ini-Milik-Orang.jpg" alt="">
            <h3> About The Hotel </h3>
            <p> {{$hotels->sinopsis}}</p>
            <h3> Facility</h3>
            <img class="img-wifi" src="https://cdn-icons.flaticon.com/png/512/2859/premium/2859724.png?token=exp=1648604139~hmac=ca0cf6b53c3ab0a73d72383fb6d0df25">
            <img class="img-wifi" src="https://cdn-icons-png.flaticon.com/512/985/985505.png">
            <img class="img-wifi" src="https://cdn-icons.flaticon.com/png/512/3130/premium/3130222.png?token=exp=1648604537~hmac=89fe5884a48a2d234c6ae7684f99d238">
        
            <div class="card-one"><center>
                <h1>Start Booking</h1>
                <h2> $50/night </h2>
                <input type="submit">

            </div></center>
        </div>
    </div>
    
    </body>
</html>