<?php
session_start();
if (!(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] != '')) {
header ("Location: index.php");
}

include('dbcon.php');
$query = $conn->query("SELECT * FROM events ORDER BY id" );
?>
<!DOCTYPE html>
<html>
<head>
<title>Somium: Startpagina </title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8" />
<meta http-equiv="pragma" content="no-cache" />
<meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate">
<meta http-equiv="Expires" content=-10>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
<link rel="shortcut icon" href="./favicon2.png" sizes="32x32">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<link rel="stylesheet" href="./home.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.css" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.min.js"></script>
<script>
//H= hours, m= minutes, s= seconds
//Set inside txt id in html code the time (h,m,s)
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
  //If the time is greater than 10, add a 0 to correct for example 7:00 to 07:00 hours
  function checkTime(i) {
    if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10
    return i;
  }
  </script>
  <script>
  //If the screen is greater than 250px show the normal navbar
  //If the screen is smaller than 250px show the collapsable navbar and hide the normal navbar
  function openNav() {
  document.getElementById("mynav").style.width = "250px";
	}

	/* Set the width of the sidebar to 0 (hide it) */
	function closeNav() {
	  document.getElementById("mynav").style.width = "0";
	}
	</script>
  <script>
  //Add the variable calendar from the stylesheet above and set it as a variable calendar
  //Set it to editable to add and remove events
  //Inside the header add the arrows to change the dates on the left side, in the center add the title of the event and on right site the current date/date that the event is taking place
    $(document).ready(function() {
     var calendar = $('#calendar').fullCalendar({
      editable:true,
      header:{
       left:'prev,next today',
       center:'title',
       right:'month,agendaWeek,agendaDay'
      },
      //collect from the database the event (title, name, start date and end date). Set it as editable, selectable en automatic date change (to auto align it to the favorable date if changed).
      events: [<?php while ($row = $query ->fetch_object()) { ?>{ id : '<?php echo $row->id; ?>', title : '<?php echo $row->title; ?>', start : '<?php echo $row->start_event; ?>', end : '<?php echo $row->end_event; ?>', }, <?php } ?>],
      selectable:true,
      selectHelper:true,
      select: function(start, end, allDay)
      {
    // Add the var title and prompt/alert it as enter event title
      var title = prompt("Enter Event Title");
      if(title)
      {
    // If the title is correct (if something is typed inside the alterbox), upload it to the database by the help of the following code inside insert.php
        var start = $.fullCalendar.formatDate(start, "Y-MM-DD HH:mm:ss");
        var end = $.fullCalendar.formatDate(end, "Y-MM-DD HH:mm:ss");
        $.ajax({
        url:"insert.php",
        type:"POST",
        data:{title:title, start:start, end:end},
        //If successfully uploaded, show a notifcation to the user inside the browser and reload the page
        success:function(data)
        {
          calendar.fullCalendar('refetchEvents');
          alert("Added Successfully");
          window.location.replace("home.php");
        }
        })
      }
      },
    // If the date of the event is changed, collect the update.php file to change the start date and end date (var start, end, title and the id of the event).
    // If changed succesfully, show a notification to the user that the event is changed correctly
      editable:true,
      eventResize:function(event)
      {
      var start = $.fullCalendar.formatDate(event.start, "Y-MM-DD HH:mm:ss");
      var end = $.fullCalendar.formatDate(event.end, "Y-MM-DD HH:mm:ss");
      var title = event.title;
      var id = event.id;
      $.ajax({
        url:"update.php",
        type:"POST",
        data:{title:title, start:start, end:end, id:id},
        success:function(){
        calendar.fullCalendar('refetchEvents');
        alert('Event Update');
        window.location.replace("home.php");
        }
      })
      },
    //Do the same thing as described above, only by moving the event with the help of the mousecursor to a new date
      eventDrop:function(event)
      {
      var start = $.fullCalendar.formatDate(event.start, "Y-MM-DD HH:mm:ss");
      var end = $.fullCalendar.formatDate(event.end, "Y-MM-DD HH:mm:ss");
      var title = event.title;
      var id = event.id;
      $.ajax({
        url:"update.php",
        type:"POST",
        data:{title:title, start:start, end:end, id:id},
        success:function()
        {
        calendar.fullCalendar('refetchEvents');
        alert("Event Updated");
        window.location.replace("home.php");
        }
      });
      },
    // If the event is clicked again, show a notification to the user to make sure the person really wants to remove the event
    // If "yes" is clicked, remove the event by calling the delete.php file and run the code inside it.
    // If removed correctly refresh the page and show a notication to the user that the event is removed correctly from somium and the database
      eventClick:function(event)
      {
      if(confirm("Are you sure you want to remove it?"))
      {
        var id = event.id;
        $.ajax({
        url:"delete.php",
        type:"POST",
        data:{id:id},
        success:function()
        {
          calendar.fullCalendar('refetchEvents');
          alert("Event Removed");
          window.location.replace("home.php");
        }
        })
      }
      },
 
    });
  });
</script>
</head>
  <body onload="startTime()">
    <div class="nav" id="mynav">
        <ul>
          <img class="navlogo" src="./favicon2.png"></img>
		      <li href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</li>
          <li class="home"><a class="active" href="./index.php"><i class="fas fa-home">&nbspStart</i></a></li>
          <li class="about"><a href="./cijfers.php"><i class="fas fa-award">&nbspCijfers</i></a></li>
          <li class="tutorials"><a href="./cijferberekenen.php"><i class="fas fa-calculator">&nbspBerekenen</i></a></li>
          <li class="contact"><a href="./zermelo.php"><i class="fas fa-calendar-alt">&nbspZermelo</i></a></li>
          <li id="txt" class="clock" ></li>
          <button class="logoutbutton"  onclick="location.href='./logout.php'" type="button"><i class="fas fa-sign-out-alt"></i><b>Uitloggen</b></button>
        </ul>
      </div>
	  <button class="openbtn" onclick="openNav()">&#9776; Toggle Sidepanel</button>
    <button id="myBtn1"><i class="fa fa-question-circle"></i></button>

<!-- The Modal -->
    <div class="container">
    <div id="calendar"></div>
   </div>
   <div id="myModal" class="modal">

<!-- Modal content -->
<div class="modal-content">
  <span class="close">&times;</span>
  <p>U kunt een event toevoegen door op de gewenste datum te klikken.<br><br>
  Wilt u een event verwijderen?<br>
  Klik dan op de desbetreffende event <br>
  U krijgt een popup te zien, waarmee u het verwijderen kunt bevestigen<br>
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
  </body>
  <footer>
    <div Class= 'adres'>
		<p>Somium BV ∙ Sportlaan 3 ∙ 2161 VA Lisse ∙ Nederland</p>
	</div>
  </footer>
</html>