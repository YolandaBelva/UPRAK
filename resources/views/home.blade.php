<html>
    <head>
        <title>Home Page</title>
    </head>

    <style>
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}
.topnav {
  overflow: hidden;
  background-color: #333;
}

.topnav a {
  float: right;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #04AA6D;
  color: white;
}
* {
  box-sizing: border-box;
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

    .card {
  margin: 10px;
  background-color: #fff;
  border-radius: 10px;
  box-shadow: 0 2px 20px rgba(0, 0, 0, 0.2);
  overflow: hidden;
  width: 300px;
  height: 350px;
}
.card-header img {
  width: 100%;
  height: 200px;
  object-fit: cover;
}
.card-body {
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: flex-start;
  padding: 20px;
  min-height:50px;
}

.tag {
  background: #cccccc;
  border-radius: 50px;
  font-size: 12px;
  margin: 0;
  color: #fff;
  padding: 2px 10px;
  text-transform: uppercase;
  cursor: pointer;
}
.tag-teal {
  background-color: #47bcd4;
}
.tag-purple {
  background-color: #5e76bf;
}
.tag-pink {
  background-color: #cd5b9f;
}

.card-body p {
  font-size: 13px;
  margin: 0 0 40px;
}
.container {
  display: flex;
  margin-left:30px;
  flex-wrap: wrap;
  
}
    </style>

    <body>
    <div class="topnav">
    <a href="/landing" class="logo" style="float:left">Hotelio</a>
  <a href="" class="active">Hotels</a>
  <a href="/landing">Home</a>
</div>

@foreach ($hotels as $hotel)
<div class="container">
<div class="card">
    <div class="card-header">
     <a href="/detail/{{$hotel->id}}"> <img src="{{ asset('image/padma-hotel-bandung.jpg') }}" alt="rover" /></a>
    </div>
    <div class="card-body">
      <span class="tag tag-teal">{{ $hotel->lokasi }}</span>
      <h4>
      {{ $hotel->nama_hotel }}
      </h4>
      <p>
        <b><font size="5px">{{ $hotel->harga }}</font></b>$/Night
      </p>
      <div class="user">
        
        <div class="user-info">
        </div>

      </div>
    </div>
  </div>
  @endforeach
</div>
         <a href="/add"> <img class="circle" src="https://cdn-icons-png.flaticon.com/512/1828/1828919.png"> </a>
</div>
</body>
</html>