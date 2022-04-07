<?php
session_start();
if (!(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] != '')) {
header ("Location: index.php");
}
?>
<!doctype html>
<html lang="en">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8" />
	<meta http-equiv="pragma" content="no-cache" />
	<META HTTP-EQUIV="CACHE-CONTROL" CONTENT="NO-CACHE">
    <title>Somium: Cijfer Berekenen</title>
	<link rel="shortcut icon" href="./favicon2.png" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css">
	<link rel="stylesheet" href="cijferberekenen.css">

    <script src="https://cdn.jsdelivr.net/npm/vue@2.5.16/dist/vue.js"></script>
	<script>
	function startTime() {
		const today = new Date();
		let h = today.getHours();
		let m = today.getMinutes();
		let s = today.getSeconds();
		m = checkTime(m);
		s = checkTime(s);
		document.getElementById('txt').innerHTML =  h + ":" + m + ":" + s;
		setTimeout(startTime, 1000);
	}
	
	function checkTime(i) {
		if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10
		return i;
	}
	</script>

</head>
<body onload="startTime()">
    <div class="navi">
        <ul>
          <img class="navlogo" src="./favicon2.png"></img>
          <li class="home"><a href="./index.php"><i class="fas fa-home">&nbspStart</i></a></li>
          <li class="about"><a href="./cijfers.php"><i class="fas fa-award">&nbspCijfers</i></a></li>
          <li class="tutorials"><a class="active" href="./cijferberekenen.php"><i class="fas fa-calculator">&nbspBerekenen</i></a></li>
          <li class="contact"><a href="./zermelo.php"><i class="fas fa-calendar-alt">&nbspZermelo</i></a></li>
          <li id="txt" class="clock" ></li>
          <button class="logoutbutton"  onclick="location.href='./logout.php'" type="button"><i class="fas fa-sign-out-alt"></i><b>Uitloggen</b></button>
        </ul>
      </div>
      <div>
      <button id="myBtn1"><i class="fa fa-question-circle"></i></button>

<!-- The Modal -->
    <div class="container">
    <div id="calendar"></div>
   </div>
   <div id="myModal" class="modal">

<!-- Modal content -->
<div class="modal-content">
  <span class="close">&times;</span>
  <p>Op deze site kunt u een gewenst cijfer berekenen<br><br>
  Als eerst vult u het gewenste cijfer in met de bijbehorende weging<br>
  Vul daarna de door het jaar behaalde cijfers in met de daar bijbehorende weging <br>
  U kunt eventueel een extra vak toevoegen door op "extra cijfer" te kliken<br>
  Uw gewenste cijfer staat bij: "Wat moet ik halen"<br>
  </p>
</div>
<script>
  // Get the modal
  var modal = document.getElementById("myModal");

  // Get the button that opens the modal
  var btn1 = document.getElementById("myBtn1");

  // Get the <span> element that closes the modal
  var span = document.getElementsByClassName("close")[0];

  // When the user clicks the button, open the modal 
  btn1.onclick = function() {
  modal.style.display = "block";
  }

  // When the user clicks on <span> (x), close the modal
  span.onclick = function() {
  modal.style.display = "none";
  }

  // When the user clicks anywhere outside of the modal, close it
  window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
  }
</script>
</div>
</div>
        <div id="app">
            <div class="container">
                <calc-form inline-template>
                    <div>
                        <div class="row">
                            <div class="col-10 offset-1">
                                <h1 class="text-muted"></h1>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-10 offset-1">
                                <div class="row">
 
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-10 offset-md-1">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="col-12 col-md-6">
                                            <h3 class="text-muted" style="text-align:center;">
                                                Wat moet ik halen: {{ roundedGoal }}
                                            </h3>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-md-6 col-12">
                                                <strong>Gewenst cijfer</strong>
                                                <input type="number" class="form-control" placeholder="Cijfer" min="0" v-model="goal">
                                            </div>
                                            <div class="form-group col-md-6 col-12">
                                                <strong>Weging gewenst cijfer</strong>
                                                <input type="number" class="form-control" placeholder="Weging" min="0" v-model="weight">
                                            </div>
                                        </div>
                                        <form>
                                            <strong>Cijfers</strong>
                                            <div class="row" v-for="note in notes">
                                                <div class="col-12 col-md-6">
                                                    <div class="form-group">
                                                        <input class="form-control" type="number" min="0" v-model="note.value"
                                                            placeholder="Cijfer">
                                                    </div>
                                                </div>
                                                <div class="col-8 col-md-3">
                                                    <div class="form-group">
                                                        <input class="form-control" type="number" min="0" v-model="note.weight"
                                                            placeholder="Weging">
                                                    </div>
                                                </div>
                                                <div class="col-4 col-md-3">
                                                    <div class="form-group">
                                                        <button class="btn btn-danger btn-block text-center delete-button"
                                                                v-bind:disabled="notes.length <= 1"
                                                                @click.prevent="deleteField(note.index)">
                                                            <i class="fa fa-times"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                                <div class="divider"></div>
                                            </div>
                                            <div class="row">
                                                <div class="col-12">
                                                    <button class="btn btn-primary btn-block" @click.prevent="addField">
                                                        Extra Cijfer
                                                    </button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </calc-form>
    </div>
<script src="./js/app.js"></script>
</body>
</html>
