<?php
session_start();
if (!(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] != '')) {
header ("Location: index.php");
}
// Include config file
    require_once "config.php";
    $username = $_SESSION["username"];
    
    
    // Prepare a select statement
    $sql = "SELECT * FROM `cijfers` WHERE `username` = ?";
        
    if($stmt = mysqli_prepare($link, $sql)){
        // Bind variables to the prepared statement as parameters
        mysqli_stmt_bind_param($stmt, "s", $param_username);
        
        // Set parameters
        $param_username = $username;
        
        // Attempt to execute the prepared statement
        if(mysqli_stmt_execute($stmt)){
            // Store result
            mysqli_stmt_store_result($stmt);
            
            // Bind result variables
            mysqli_stmt_bind_result($stmt, $username, $aardrijkskunde1, $aardrijkskunde2, $aardrijkskunde3, $aardrijkskundegem, $biologie1, $biologie2, $biologie3, $biologiegem, $nederlands1, $nederlands2, $nederlands3, $nederlandsgem, $engels1, $engels2, $engels3, $engelsgem, $duits1, $duits2, $duits3, $duitsgem, $informatica1, $informatica2, $informatica3, $informaticagem, $LO1, $LO2, $LO3, $LOgem, $natuurkunde1, $natuurkunde2, $natuurkunde3, $natuurkundegem, $scheikunde1, $scheikunde2, $scheikunde3, $scheikundegem, $wiskunde1, $wiskunde2, $wiskunde3, $wiskundegem);
            mysqli_stmt_fetch($stmt);
			
 			setcookie("aardrijkskunde1", $aardrijkskunde1, time() + (86400 * 30), "/"); // 86400 = 1 day
 			$_COOKIE['aardrijkskunde1'] = $aardrijkskunde1;
 			setcookie("aardrijkskunde2", $aardrijkskunde2, time() + (86400 * 30), "/"); // 86400 = 1 day
 			$_COOKIE['aardrijkskunde2'] = $aardrijkskunde2;
			 setcookie("aardrijkskunde3", $aardrijkskunde3, time() + (86400 * 30), "/"); // 86400 = 1 day
 			$_COOKIE['aardrijkskunde3'] = $aardrijkskunde3;
			 setcookie("aardrijkskundegem", $aardrijkskundegem, time() + (86400 * 30), "/"); // 86400 = 1 day
 			$_COOKIE['aardrijkskundegem'] = $aardrijkskundegem;
       		
			 setcookie("biologie1", $biologie1, time() + (86400 * 30), "/");
 			$_COOKIE['biologie1'] = $biologie1;
			 setcookie("biologie2", $biologie2, time() + (86400 * 30), "/");
 			$_COOKIE['biologie2'] = $biologie2;
			 setcookie("biologie3", $biologie3, time() + (86400 * 30), "/");
 			$_COOKIE['biologie3'] = $biologie3;
			 setcookie("biologiegem", $biologiegem, time() + (86400 * 30), "/");
 			$_COOKIE['biologiegem'] = $biologiegem;
 			
			 setcookie("nederlands1", $nederlands1, time() + (86400 * 30), "/"); // 86400 = 1 day
 			$_COOKIE['nederlands1'] = $nederlands1;
 			setcookie("nederlands2", $nederlands2, time() + (86400 * 30), "/"); // 86400 = 1 day
 			$_COOKIE['nederlands2'] = $nederlands2;
			 setcookie("nederlands3", $nederlands3, time() + (86400 * 30), "/"); // 86400 = 1 day
 			$_COOKIE['nederlands3'] = $nederlands3;
			 setcookie("nederlandsgem", $nederlandsgem, time() + (86400 * 30), "/"); // 86400 = 1 day
 			$_COOKIE['nederlandsgem'] = $nederlandsgem;

			 setcookie("engels1", $engels1, time() + (86400 * 30), "/");
 			$_COOKIE['engels1'] = $engels1;
			 setcookie("engels2", $engels2, time() + (86400 * 30), "/");
 			$_COOKIE['engels2'] = $engels2;
			 setcookie("engels3", $engels3, time() + (86400 * 30), "/");
 			$_COOKIE['engels3'] = $engels3;
			 setcookie("engelsgem", $engelsgem, time() + (86400 * 30), "/");
 			$_COOKIE['engelsgem'] = $engelsgem;

			 setcookie("duits1", $duits1, time() + (86400 * 30), "/");
 			$_COOKIE['duits1'] = $duits1;
			 setcookie("duits2", $duits2, time() + (86400 * 30), "/");
 			$_COOKIE['duits2'] = $duits2;
			 setcookie("duits3", $duits3, time() + (86400 * 30), "/");
 			$_COOKIE['duits3'] = $duits3;
			 setcookie("duitsgem", $duitsgem, time() + (86400 * 30), "/");
 			$_COOKIE['duitsgem'] = $duitsgem;
       		
			 setcookie("informatica1", $informatica1, time() + (86400 * 30), "/");
 			$_COOKIE['informatica1'] = $informatica1;
			 setcookie("informatica2", $informatica2, time() + (86400 * 30), "/");
 			$_COOKIE['informatica2'] = $informatica2;
			 setcookie("informatica3", $informatica3, time() + (86400 * 30), "/");
 			$_COOKIE['informatica3'] = $informatica3;
			 setcookie("informaticagem", $informaticagem, time() + (86400 * 30), "/");
 			$_COOKIE['informaticagem'] = $informaticagem;
 			
			 setcookie("duits1", $duits1, time() + (86400 * 30), "/");
 			$_COOKIE['duits1'] = $duits1;
			 setcookie("duits2", $duits2, time() + (86400 * 30), "/");
 			$_COOKIE['duits2'] = $duits2;
			 setcookie("duits3", $duits3, time() + (86400 * 30), "/");
 			$_COOKIE['duits3'] = $duits3;
			 setcookie("duitsgem", $duitsgem, time() + (86400 * 30), "/");
 			$_COOKIE['duitsgem'] = $duitsgem;
			
			 setcookie("LO1", $LO1, time() + (86400 * 30), "/"); // 86400 = 1 day
 			$_COOKIE['LO1'] = $LO1;
 			setcookie("LO2", $LO2, time() + (86400 * 30), "/"); // 86400 = 1 day
 			$_COOKIE['LO2'] = $LO2;
			 setcookie("LO3", $LO3, time() + (86400 * 30), "/"); // 86400 = 1 day
 			$_COOKIE['LO3'] = $LO3;
			 setcookie("LOgem", $LOgem, time() + (86400 * 30), "/"); // 86400 = 1 day
 			$_COOKIE['LOgem'] = $LOgem;
       		
			 setcookie("engels1", $engels1, time() + (86400 * 30), "/");
 			$_COOKIE['engels1'] = $engels1;
			 setcookie("engels2", $engels2, time() + (86400 * 30), "/");
 			$_COOKIE['engels2'] = $engels2;
			 setcookie("engels3", $engels3, time() + (86400 * 30), "/");
 			$_COOKIE['engels3'] = $engels3;
			 setcookie("engelsgem", $engelsgem, time() + (86400 * 30), "/");
 			$_COOKIE['engelsgem'] = $engelsgem;
 			
			 setcookie("natuurkunde1", $natuurkunde1, time() + (86400 * 30), "/");
 			$_COOKIE['natuurkunde1'] = $natuurkunde1;
			 setcookie("natuurkunde2", $natuurkunde2, time() + (86400 * 30), "/");
 			$_COOKIE['natuurkunde2'] = $natuurkunde2;
			 setcookie("natuurkunde3", $natuurkunde3, time() + (86400 * 30), "/");
 			$_COOKIE['natuurkunde3'] = $natuurkunde3;
			 setcookie("natuurkundegem", $natuurkundegem, time() + (86400 * 30), "/");
 			$_COOKIE['natuurkundegem'] = $natuurkundegem;

			 setcookie("scheikunde1", $scheikunde1, time() + (86400 * 30), "/");
 			$_COOKIE['scheikunde1'] = $scheikunde1;
			 setcookie("scheikunde2", $scheikunde2, time() + (86400 * 30), "/");
 			$_COOKIE['scheikunde2'] = $scheikunde2;
			 setcookie("scheikunde3", $scheikunde3, time() + (86400 * 30), "/");
 			$_COOKIE['scheikunde3'] = $scheikunde3;
			 setcookie("scheikundegem", $scheikundegem, time() + (86400 * 30), "/");
 			$_COOKIE['scheikundegem'] = $scheikundegem;

			 setcookie("wiskunde1", $wiskunde1, time() + (86400 * 30), "/");
 			$_COOKIE['wiskunde1'] = $wiskunde1;
			 setcookie("wiskunde2", $wiskunde2, time() + (86400 * 30), "/");
 			$_COOKIE['wiskunde2'] = $wiskunde2;
			 setcookie("wiskunde3", $wiskunde3, time() + (86400 * 30), "/");
 			$_COOKIE['wiskunde3'] = $wiskunde3;
			 setcookie("wiskundegem", $wiskundegem, time() + (86400 * 30), "/");
 			$_COOKIE['wiskundegem'] = $wiskundegem;
 			

        } else{
            // Username doesn't exist, display a generic error message
            $login_err = "Gebruiker niet bekend";
        }
        
        // Close statement
        mysqli_stmt_close($stmt);
        
        
    } else{
        echo "Oops! Something went wrong. Please try again later";
    }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Somium: Cijfers </title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8" />
	<meta http-equiv="pragma" content="no-cache" />
	<META HTTP-EQUIV="CACHE-CONTROL" CONTENT="NO-CACHE">
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<link rel="shortcut icon" href="./favicon2.png" />
	<link rel="stylesheet" href="cijfers.css">
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
	<script type="text/javascript">
	
	function getCookie(name) {
      const value = `; ${document.cookie}`;
      const parts = value.split(`; ${name}=`);
      if (parts.length === 2) return parts.pop().split(';').shift();
    }
	
	$(document).ready(function($)
	{
	    let aardrijkskunde1 = getCookie('aardrijkskunde1');
		let aardrijkskunde2 = getCookie('aardrijkskunde2');
		let aardrijkskunde3 = getCookie('aardrijkskunde3');
		let aardrijkskundegem = (((parseFloat(getCookie('aardrijkskunde1'))) + (parseFloat(getCookie('aardrijkskunde2'))) + (parseFloat(getCookie('aardrijkskunde3'))))/3).toFixed(1);
	    let biologie1 = getCookie('biologie1');
		let biologie2 = getCookie('biologie2');
		let biologie3 = getCookie('biologie3');
		let biologiegem = (((parseFloat(getCookie('biologie1'))) + (parseFloat(getCookie('biologie2'))) + (parseFloat(getCookie('biologie3'))))/3).toFixed(1);
	    let nederlands1 = getCookie('nederlands1');
		let nederlands2 = getCookie('nederlands2');
		let nederlands3 = getCookie('nederlands3');
		let nederlandsgem = (((parseFloat(getCookie('nederlands1'))) + (parseFloat(getCookie('nederlands2'))) + (parseFloat(getCookie('nederlands3'))))/3).toFixed(1);
		let engels1 = getCookie('engels1');
		let engels2 = getCookie('engels2');
		let engels3 = getCookie('engels3');
		let engelsgem = (((parseFloat(getCookie('engels1'))) + (parseFloat(getCookie('engels2'))) + (parseFloat(getCookie('engels3'))))/3).toFixed(1);
	    let duits1 = getCookie('duits1');
		let duits2 = getCookie('duits2');
		let duits3 = getCookie('duits3');
		let duitsgem = (((parseFloat(getCookie('duits1'))) + (parseFloat(getCookie('duits2'))) + (parseFloat(getCookie('duits3'))))/3).toFixed(1);
	    let informatica1 = getCookie('informatica1');
		let informatica2 = getCookie('informatica2');
		let informatica3 = getCookie('informatica3');
		let informaticagem = (((parseFloat(getCookie('informatica1'))) + (parseFloat(getCookie('informatica2'))) + (parseFloat(getCookie('informatica3'))))/3).toFixed(1);
		let LO1 = getCookie('LO1');
		let LO2 = getCookie('LO2');
		let LO3 = getCookie('LO3');
		let LOgem = (((parseFloat(getCookie('LO1'))) + (parseFloat(getCookie('LO2'))) + (parseFloat(getCookie('LO3'))))/3).toFixed(1);
	    let natuurkunde1 = getCookie('natuurkunde1');
		let natuurkunde2 = getCookie('natuurkunde2');
		let natuurkunde3 = getCookie('natuurkunde3');
		let natuurkundegem = (((parseFloat(getCookie('natuurkunde1'))) + (parseFloat(getCookie('natuurkunde2'))) + (parseFloat(getCookie('natuurkunde3'))))/3).toFixed(1);
	    let scheikunde1 = getCookie('scheikunde1');
		let scheikunde2 = getCookie('scheikunde2');
		let scheikunde3 = getCookie('scheikunde3');
		let scheikundegem = (((parseFloat(getCookie('scheikunde1'))) + (parseFloat(getCookie('scheikunde2'))) + (parseFloat(getCookie('scheikunde3'))))/3).toFixed(1);
		let wiskunde1 = getCookie('wiskunde1');
		let wiskunde2 = getCookie('wiskunde2');
		let wiskunde3 = getCookie('wiskunde3');
		let wiskundegem = (((parseFloat(getCookie('wiskunde1'))) + (parseFloat(getCookie('wiskunde2'))) + (parseFloat(getCookie('wiskunde3'))))/3).toFixed(1);
		//ajax row data
		var ajax_data =
		[
			{fname:"Aardrijkskunde", Periode1: aardrijkskunde1, Periode2: aardrijkskunde2, Periode3: aardrijkskunde3, Gemiddeld:aardrijkskundegem}, 
			{fname:"Biologie", Periode1:biologie1, Periode2:biologie2,Periode3:biologie3, Gemiddeld:biologiegem},
			{fname:"Duits", Periode1: duits1, Periode2: duits2, Periode3: duits3, Gemiddeld:duitsgem},
			{fname:"Engels", Periode1: engels1, Periode2: engels2, Periode3: engels3, Gemiddeld:engelsgem},
			{fname:"Informatica", Periode1:informatica1, Periode2:informatica2, Periode3:informatica3, Gemiddeld:informaticagem}, 
			{fname:"Lichamelijke opvoeding", Periode1:LO1, Periode2:LO2, Periode3:LO3, Gemiddeld:LOgem},
			{fname:"Natuurkunde", Periode1:natuurkunde1, Periode2:natuurkunde2, Periode3:natuurkunde3, Gemiddeld:natuurkundegem},
			{fname:"Nederlands", Periode1: nederlands1, Periode2: nederlands2, Periode3: nederlands3, Gemiddeld:nederlandsgem},
			{fname:"Scheikunde", Periode1:scheikunde1, Periode2:scheikunde2, Periode3:scheikunde3, Gemiddeld:scheikundegem}, 
			{fname:"Wiskunde", Periode1:wiskunde1, Periode2:wiskunde2, Periode3:wiskunde3, Gemiddeld:wiskundegem} 
		]



		var random_id = function  () 
		{
			var id_num = Math.random().toString(9).substr(2,3);
			var id_str = Math.random().toString(36).substr(2);
			
			return id_num + id_str;
		}


		//--->create data table > start
		var tbl = '';
		tbl +='<table class="table table-hover">'

			//--->create table header > start
			tbl +='<thead>';
				tbl +='<tr>';
				tbl +='<th>Vak</th>';
				tbl +='<th>Periode 1</th>';
				tbl +='<th>Periode 2</th>';
				tbl +='<th>Periode 3</th>';
				tbl +='<th>Gemiddeld</th>';
				tbl +='</tr>';
			tbl +='</thead>';
			//--->create table header > end

			
			//--->create table body > start
			tbl +='<tbody>';

				//--->create table body rows > start
				$.each(ajax_data, function(index, val) 
				{
					//you can replace with your database row id
					var row_id = random_id();

					//loop through ajax row data
					tbl +='<tr row_id="'+row_id+'">';
						tbl +='<td ><div class="row_data" edit_type="click" col_name="fname">'+val['fname']+'</div></td>';
						tbl +='<td ><div class="row_data" edit_type="click" col_name="Periode1">'+val['Periode1']+'</div></td>';
						tbl +='<td ><div class="row_data" edit_type="click" col_name="Periode2">'+val['Periode2']+'</div></td>';
						tbl +='<td ><div class="row_data" edit_type="click" col_name="Periode3">'+val['Periode3']+'</div></td>';
						//Er moet nu voor gezorgd worden dat de gemiddelde tabel niet geedit kan worden (niet klikbaar)
						tbl +='<td ><div class="row_data" edit_type="click" col_name="Gemiddeld">'+val['Gemiddeld']+'</div></td>';

						//--->edit options > start
						tbl +='<td>';
							

							//only show this button if edit button is clicked
							tbl +='<span class="btn_save"> <a href="#" class="btn btn-link"  row_id="'+row_id+'"> Save</a> | </span>';
							tbl +='<span class="btn_cancel"> <a href="#" class="btn btn-link" row_id="'+row_id+'"> Cancel</a> | </span>';

						tbl +='</td>';
						//--->edit options > end
						
					tbl +='</tr>';
				});

				//--->create table body rows > end

			tbl +='</tbody>';
			//--->create table body > end

		tbl +='</table>'	
		//--->create data table > end

		//out put table data
		$(document).find('.tbl_user_data').html(tbl);

		$(document).find('.btn_save').hide();
		$(document).find('.btn_cancel').hide(); 

        function isFloat(n){
            return Number(n) === n && n % 1 !== 0;
        }   

        $(".row_data").keypress(function(e){ return e.which != 13; });
        $(".row_data").keypress(function(e){ return e.which != 32; });
        $(".row_data").keypress(function(e){ 
            if (this.innerHTML.length > 2) {
				e.preventDefault();                
            }
        });

		//--->make div editable > start
		$(document).on('click', '.row_data', function(event) 
		{
			event.preventDefault(); 
			if($(this).attr('edit_type') == 'button')
			{
				return false; 
			}
			
			

			//make div editable
			$(this).closest('div').attr('contenteditable', 'true');
			//add bg css
			$(this).addClass('bg-warning').css('padding','5px');

			$(this).focus();
		})	
		//--->make div editable > end
		
        
		
		//--->save single field data > start (This is for click out of field)
		$(document).on('focusout', '.row_data', function(event) {
			event.preventDefault();
			if($(this).attr('edit_type') == 'button')
			{
				return false; 
			}

			var row_id = $(this).closest('tr').attr('row_id'); 
			let vak = $(this).closest('tr').find('td:first').text()
			
			var row_div = $(this)				
			.removeClass('bg-warning') //add bg css
			.css('padding','')

			var col_name = row_div.attr('col_name');
			var col_val = row_div.html(); 

			var arr = {};
			arr[col_name] = col_val;

			//use the "arr"	object for your ajax call
			$.extend(arr, {row_id:row_id});

			//out put to show
			let input = parseFloat(arr[col_name])
			row_div.html(input);
			
			//document.cookie='duits1='+input;
			console.log(vak.toLowerCase() + col_name.substr(-1)+'='+input)
            document.cookie=vak.toLowerCase() + col_name.substr(-1)+'='+input+';path=/';
			window.location.href = "./cijferopslaan.php";
			
			//Deze code hieronder moet nog even naar gekeken worden. 
			//Het betreft het rood worden van de cijfers (Als dit ingeschakeld wordt, dan zal de hele achtergrond naar rood veranderen)
			//Ook houdt de rode kleur niet vast, maar gaat weer weg bij het inladen van de pagina. (Moet dus gekoppeld worden aan de cookies (jquery))
			/* 
				var grade = input;
				var BackgroundColor="RED";
				console.log(grade);
				if( grade < 5.5){
				document.body.style.backgroundColor=BackgroundColor; 
				}
			*/
            
            
		
		})	
		//--->save single field data > end
        
       // document.getElementById("session").innerHTML = 'huh'
		
		//--->button > edit > start	
		$(document).on('click', '.btn_edit', function(event) 
		{
			event.preventDefault();
			var tbl_row = $(this).closest('tr');

			var row_id = tbl_row.attr('row_id');

			tbl_row.find('.btn_save').show();
			tbl_row.find('.btn_cancel').show();

			//hide edit button
			tbl_row.find('.btn_edit').hide(); 

			//make the whole row editable
			tbl_row.find('.row_data')
			.attr('contenteditable', 'true')
			.attr('edit_type', 'button')
			.addClass('bg-warning')
			.css('padding','3px')

			//--->add the original entry > start
			tbl_row.find('.row_data').each(function(index, val) 
			{  
				//this will help in case user decided to click on cancel button
				$(this).attr('original_entry', $(this).html());
			}); 		
			//--->add the original entry > end

		});
		//--->button > edit > end


		//--->button > cancel > start	
		$(document).on('click', '.btn_cancel', function(event) 
		{
			event.preventDefault();

			var tbl_row = $(this).closest('tr');

			var row_id = tbl_row.attr('row_id');

			//hide save and cacel buttons
			tbl_row.find('.btn_save').hide();
			tbl_row.find('.btn_cancel').hide();

			//show edit button

			//make the whole row editable
			tbl_row.find('.row_data')
			.attr('edit_type', 'click')
			.removeClass('bg-warning')
			.css('padding','') 

			tbl_row.find('.row_data').each(function(index, val) 
			{   
				$(this).html( $(this).attr('original_entry') ); 
			});  
		});
		//--->button > cancel > end

		
		//--->save whole row entery > start	
		$(document).on('click', '.btn_save', function(event) 
		{
			event.preventDefault();
			var tbl_row = $(this).closest('tr');

			var row_id = tbl_row.attr('row_id');

			
			//hide save and cacel buttons
			tbl_row.find('.btn_save').hide();
			tbl_row.find('.btn_cancel').hide();

			//show edit button


			//make the whole row editable
			tbl_row.find('.row_data')
			.attr('edit_type', 'click')
			.removeClass('bg-warning')
			.css('padding','') 

			//--->get row data > start
			var arr = {}; 
			tbl_row.find('.row_data').each(function(index, val) 
			{   
				var col_name = $(this).attr('col_name');  
				var col_val  =  $(this).html();
				arr[col_name] = col_val;
			});
			//--->get row data > end

			//use the "arr"	object for your ajax call
			$.extend(arr, {row_id:row_id});

			//out put to show
			$('.post_msg').html( '<pre class="bg-success">'+JSON.stringify(arr, null, 2) +'</pre>')
				

		});
		//--->save whole row entery > end


	}); 
	</script>
	<script>
// When the user clicks on div, open the popup
function myFunction() {
  var popup = document.getElementById("myPopup");
  popup.classList.toggle("show");
}
</script>
</head>
<body onload="startTime()">
    <div class="nav">
        <ul>
          <img class="navlogo" src="./favicon2.png"></img>
		  <!--  <p class="welkom">Welkom <?php echo $username; ?></p> -->
          <li class="home"><a href="./index.php"><i class="fas fa-home">&nbspStart</i></a></li>
          <li class="about"><a class="active" href="./cijfers.php"><i class="fas fa-award">&nbspCijfers</i></a></li>
          <li class="tutorials"><a href="./cijferberekenen.php"><i class="fas fa-calculator">&nbspBerekenen</i></a></li>
          <li class="contact"><a href="./zermelo.php"><i class="fas fa-calendar-alt">&nbspZermelo</i></a></li>
          <li id="txt" class="clock" ></li>
          <button class="logoutbutton"  onclick="location.href='./logout.php'" type="button"><i class="fas fa-sign-out-alt"></i><b>Uitloggen</b></button>	
        </ul>
      </div>		<button id="myBtn1"><i class="fa fa-question-circle"></i></button>

<!-- The Modal -->
<div id="myModal" class="modal">

<!-- Modal content -->
<div class="modal-content">
	<span class="close">&times;</span>
	<p>U kunt cijfers bewerken door op het gewenste cijfer bij het desbetreffende vak te klikken.<br><br>
	Klaar met het wijzigen van uw cijfer? <br>
	Klik dan op een willekeurige plaats op de site. <br>
	Uw cijfer is opgeslagen in de database en is alleen voor u zichtbaar.<br>
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
</div>
	<div class="panel panel-default">  <!--titel bovin-->
		<div class="panel-heading"><p><b> Cijfers van <?php echo $username; ?> in 6 VWO</b></p>
		</div> <!--maakt tekst dikgedrukt-->
		<div class="panel-body"></div>
		<div class="tbl_user_data"></div>
	  </div>
</body>
</html>




 




 

