<!DOCTYPE html>
<html>
<head>
<style>
* {
  box-sizing: border-box;
}

body {
  font-family: Arial;
  padding: 10px;
  background: #f1f1f1;
}

/* Header/Blog Title */
.header {
  padding: 30px;
  text-align: center;
  background: white;
}

.header h1 {
  font-size: 50px;
}

/* Style the top navigation bar */
.topnav {
  overflow: hidden;
  background-color: #333;
}

/* Style the topnav links */
.topnav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

/* Change color on hover */
.topnav a:hover {
  background-color: #ddd;
  color: black;
}

/* Create two unequal columns that floats next to each other */
/* Left column */
.leftcolumn {   
  float: left;
  width: 75%;
}

/* Right column */
.rightcolumn {
  float: left;
  width: 25%;
  background-color: #f1f1f1;
  padding-left: 20px;
}

/* Fake image */
.fakeimg {
  background-color: #aaa;
  width: 100%;
  padding: 20px;
}

/* Add a card effect for articles */
.card {
  background-color: white;
  padding: 20px;
  margin-top: 20px;
}

/* Clear floats after the columns */
.row::after {
  content: "";
  display: table;
  clear: both;
}

/* Footer */
.footer {
  padding: 20px;
  text-align: center;
  background: #ddd;
  margin-top: 20px;
}

/* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 800px) {
  .leftcolumn, .rightcolumn {   
    width: 100%;
    padding: 0;
  }
}

/* Responsive layout - when the screen is less than 400px wide, make the navigation links stack on top of each other instead of next to each other */
@media screen and (max-width: 400px) {
  .topnav a {
    float: none;
    width: 100%;
  }
}

.tooltip {
  position: relative;
  display: inline-block;
  border-bottom: 1px dotted black;
}

.tooltip .tooltiptext {
  visibility: hidden;
  width: 120px;
  background-color: black;
  color: #fff;
  text-align: center;
  border-radius: 6px;
  padding: 5px 0;
  position: absolute;
  z-index: 1;
  bottom: 100%;
  left: 50%;
  margin-left: -60px;
  
  /* Fade in tooltip - takes 1 second to go from 0% to 100% opac: */
  opacity: 0;
  transition: opacity 5s;
}

.tooltip:hover .tooltiptext {
  visibility: visible;
  opacity: 1;
}
</style>
</head>
<body>


<div class="header">
    <h1>ORTUSEIGHT</h1>
</div>

<div class="topnav">
    <a href="#">Find Store</a>
    <a href="#">Join Us</a>
    <a href="#">Log In</a>
    <a href="#" style="float:right">Search</a>
</div>

<div class="row">
    <div class="leftcolumn">
        <div class="card">
        <h1>ORTUSEIGHT FUTSAL</h1>
        <h5>The New Local Pride Futsal Shoes</h5>
        <img src="data:image/jpeg;base64,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"
      height:200px;>
        <h2>Catalyst Hiperion IN</h2>
        <p>Sepatu futsal dengan teknologi baru serta nuansa warna baru yang sangat memanjakan mata.</p>
    </div>
    <div class="card">
        <h1>ORTUSEIGHT RUNNING</h1>
        <h5>The New Local Pride Running Shoes</h5>
        <img src="https://sporti.id/wp-content/uploads/2024/08/1-46.jpg"
      height:200px width="200px">
        <p>Cloud Blue Ortrangen</p>
        <p> Sepatu running dengan teknologi boost yang dapat memberikan kenyamanan maksimal saat berlari jauh.</p>
    </div>
    </div>
    <div class="rightcolumn">
    <div class="card">
        <h2>About Us</h2>
        <img src="data:image/png;base64,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" 
      height:100px;>
    </div>
    <div class="card">
        <h3>Search More</h3>
        <div class="tooltip"><p>Football</p>
            <span class="tooltiptext">Football Site</span>
        </div>
        <div ><p>Futsal</p></div>
        <div ><p>Running</p></div>
    </div>
    <div class="card">
        <h3>Follow Us</h3>
        <p>Instagram : @Ortuseight</p>
    </div>
  </div>
</div>

<div class="footer">
  <h5> Privacy Policy  Terms and Conditions © 2023 Ortuseight. All Rights Reserved </h5>
</div>

</body>
</html>


