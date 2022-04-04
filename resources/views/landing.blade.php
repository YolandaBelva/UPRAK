<html>
    <head>
        <title>Landing Page</title>
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

.column {
  float: left;
  width: 100%;
  margin-top:20px;
}

body {
  background-image: url('image/dashboard.jpg');
  background-size: 100%;
}

/* Clearfix (clear floats) */
.row::after {
  content: "";
  clear: both;
  display: table;
}
.text{
  text-align:left; 
  padding: 20px;
  margin: 30px;
}

h1{
  font-size: 90px;
}
p {
  font-size: 25px;
}
a.button {
  background-color: transparent;
  border: 1px solid black;
  color: black;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}
a.button:hover{
  background-color:grey;
}
    </style>
 <form>
    <body>
    <div class="row">
  <div class="column">
      <div class="text">
        <h1>Our world is<br>your Playground</h1>
        <p>We give you want you want and <br>less what you don't need</p>
        <a href="/home" class="button">Explore</a>
        
      </div>
  </div>
</div>
    </body>
  </form>
</html>