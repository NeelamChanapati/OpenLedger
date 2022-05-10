<?php $conn=new mysqli("localhost","root","","test") or die("unable to connect"); ?>
		
<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <style>
        @import url('https://fonts.googleapis.com/css?family=Open+Sans:600');
body {
  align-items: center;
  color: #545556;
  background: #30333A;
  display: flex;
  font-family: "Open Sans", sans-serif;
  font-size: 20px;
  height: 100vh;
  justify-content: center;
  margin: 0;
}
.showOverlay {
  bottom: 0;
  display: flex;
  font-size: 16px;
  left: calc(50% - 55px);
  margin-bottom: 7px;
  position: absolute;
}
.check {
  bottom: 0;
  display: flex;
  left: calc(50% + 40px);
  margin-bottom: 10px;
  position: absolute;
}
.containerOuter {
  background: white;
  border-radius: 8px;
  box-shadow: 2px 6px 20px 2px rgba(10,10,120,0.15);
}
.container {
  position: relative;
  margin: 20px;
  overflow: hidden;
  width: 1000px;
  
}
.hidden {
  display: none;
}
.entry {
  height: 25px;
  position: absolute;
  width: 160px;
}
.entry:nth-child(2) {
  left: 8px;
  top: 8px;
}
.entry:nth-child(4) {
  left: 8px;
  top: 58px;
}
.entry:nth-child(6) {
  left: 8px;
  top: 108px;
}
.circle {
  border: 2px solid #545556;
  border-radius: 50%;
  cursor: pointer;
  height: 20px;
  position: absolute;
  transition: border-color 300ms;
  width: 20px;
}
.entry-label {
  cursor: pointer;
  margin-top: -3px;
  padding-left: 40px;
  user-select: none;
  -moz-user-select: none;
}
.overlay {
  background: #fff;
  mask: url(#holes);
  height: 140px;
  pointer-events: none;
  transition: background 300ms;
  width: 40px;
}
.highlight {
  background: #4D98EF;
  border-radius: 50%;
  height: 12px;
  left: 14px;
  pointer-events: none;
  position: absolute;
  top: 14px;
  transition: transform 400ms cubic-bezier(0.175, 0.885, 0.32, 1.2);
  transform: translateY(-50px);
  width: 12px;
}
.hidden:nth-child(1):checked ~ .highlight {
  transform: translateY(0);
}
.hidden:nth-child(3):checked ~ .highlight {
  transform: translateY(50px);
}
.hidden:nth-child(5):checked ~ .highlight {
  transform: translateY(100px);
}
.hidden:nth-child(1):checked + .entry .circle {
  border-color: #4D98EF;
}
.hidden:nth-child(3):checked + .entry .circle {
  border-color: #4D98EF;
}
.hidden:nth-child(5):checked + .entry .circle {
  border-color: #4D98EF;
}
.check:checked ~ .containerOuter .overlay {
  background: #ecf0f4;
}
.btn-group button {
  background-color: #04AA6D; /* Green background */
  border: 1px solid green; /* Green border */
  color: white; /* White text */
  padding: 10px 24px; /* Some padding */
  cursor: pointer; /* Pointer/hand icon */
  float: left; /* Float the buttons side by side */
}

.btn-group button:not(:last-child) {
  border-right: none; /* Prevent double borders */
}

/* Clear floats (clearfix hack) */
.btn-group:after {
  content: "";
  clear: both;
  display: table;
}

/* Add a background color on hover */
.btn-group button:hover {
  background-color: #3e8e41;
}
.available{
  padding-left: 10%;
  float: left;
}
.unavailable{
  padding-right: 10%;
  float: right;
}
.pull-right{
            font-family: 'Permanent Marker', cursive;
            background-image: linear-gradient(to left, #d0f0c0, #000000);
            color: transparent;
            background-clip: text;
            -webkit-background-clip: text;
        }
.pull-right:hover{
  color: #d2f8d2;
}
</style>
</head>
    <body>

<div class="containerOuter">
  <h3 align="center">List Of Items</h3>
  <div class="container">
  <div class="available">
  <?php  //Available Items
    ?><h2>Available items</h2><?php
    $sql = "SELECT iname from items where status=1";
    
    $result = mysqli_query($conn,$sql);
    while($row = mysqli_fetch_array($result)){
        ?>
       
        <!--    <input type="checkbox" id="$row['iname']" name="" value="<?php echo $row['iname']; ?>">    -->
        <label for="$row['iname']"><?php echo $row['iname']; ?></label><br><br>

        <?php
            }
        ?>
	</div>
  <div class="unavailable">
<?php //Unavailable Items

    ?><h2>Unavailable items</h2><?php
    $sql1 = "SELECT iname from items where status=0";
    $result1 = mysqli_query($conn,$sql1);
    while($row1 = mysqli_fetch_array($result1)){
        ?>
       
        <!--    <input type="checkbox" id="$row1['iname']" name="" value="<?php echo $row1['iname']; ?>">    -->
        <label for="$row1['iname']"><?php echo $row1['iname']; ?></label><br><br>

        <?php
            }
        ?>
        <a href="base.html" class="pull-right"><i class="fa fa-arrow-left"></i>Go Back</a>

  </div>
  <!--  <input type="radio" class="hidden" id="input1" name="inputs">
    <label class="entry" for="input1"><div class="circle"></div><div class="entry-label">Item-1</div></label>
    <div class="btn-group" style="margin-left: 30%;">
      <button>Demand</button>
      <button>Request</button>
    </div><br>
    <input type="radio" class="hidden" id="input2" name="inputs">
    <label class="entry" for="input2"><div class="circle"></div><div class="entry-label">Item-2</div></label>
    <div class="btn-group" style="margin-left: 30%; margin-top: 6%;">
      <button>Demand</button>
      <button>Request</button>
    </div>
    <div class="highlight"></div>
    <div class="overlay"></div>
  </div>
</div>      -->
    </body>
</html>