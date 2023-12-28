<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Diet Calculator</title>
	<meta name="viewport" content="initial-scale=1,maximum-scale=1,user-scalable=no" />
    <script src="https://code.jquery.com/jquery-3.0.0.min.js"></script>
    <link rel="icon" type="image/x-icon" href="favicon.ico">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<style type="text/css">

/* Resetting and General Styles */
* {
  margin: 0;
  font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
}

/* Normal state styles */
.next-1 {
  height: 40px;
  width: 240px;
  padding: 10px;
  border-radius: 20px;
  cursor: pointer;
  background-color: #3498db; /* Default background color */
  color: #ffffff; /* Default text color */
  border: none;
  transition: background-color 0.3s ease, color 0.3s ease; /* Add transition */
}

/* Hover state styles */
.next-1:hover {
  background-color: #2980b9; /* New background color on hover */
  /* You can also change other properties on hover if needed */
}

@keyframes shake {
  0% {
    transform: translateX(0);
  }
  25% {
    transform: translateX(-5px);
  }
  50% {
    transform: translateX(5px);
  }
  75% {
    transform: translateX(-5px);
  }
  100% {
    transform: translateX(5px);
  }
}

/* Container styles */
.container {
  height: 100%;
  width: 100%;
  display: flex;
  flex-direction: column;
  border-top-left-radius: 10px;
  border-top-right-radius: 10px;
  background-color: #f7f7f7; /* Set your desired background color */
}

/* Header styles */
.header {
  height: 80px;
  width: 100%;
  background-color: #3498db; /* Set your desired header background color */
  border-top-left-radius: 10px;
  border-top-right-radius: 10px;
  display: flex;
  align-items: center;
  justify-content: center;
}

/* Data span styles */
#con-4-data {
  color: #fff;
  font-size: 24px;
}

/* Form container styles */
.form-container {
  height: 320px;
  width: 100%;
  background-color: #fff; /* Set your desired form background color */
  text-align: center;
  padding: 20px 0px;
}

/* Input field styles */
input {
  width: 80%;
  padding: 10px;
  margin: 10px auto;
  border: 1px solid #ccc;
  border-radius: 5px;
  display: block;
}

/* Button styles */
#next-4 {
  background-color: #3498db; /* Set your desired button background color */
  color: #fff;
  height: 40px;
  width: 240px;
  padding: 10px;
  border-radius: 20px;
  cursor: pointer;
  border: none;
  margin-top: 20px;
  font-size: 16px;
}

/* Button hover state styles */
#next-4:hover {
  background-color: #2980b9; /* Set the hover background color */
}

.food-category {
  height: 100px;
  width: 140px;
  border-radius: 4px;
  border: 1px solid #8b8b8b;
  display: flex;
  justify-content: center;
  align-items: center;
}

.food-category:hover {
  border: 2px solid grey;
}

.food-category-name {
  color: #858585;
}

/* Loading Dots */
.loading {
  color: grey;
  display: none;
}

.loading:after {
  font-size: 24px;
  content: ' .';
  animation: dots 1s steps(5, end) infinite;
}

@keyframes dots {
  0%, 20% {
    color: rgba(0, 0, 0, 0);
    text-shadow: .25em 0 0 rgba(0, 0, 0, 0), .5em 0 0 rgba(0, 0, 0, 0);
  }
  40% {
    color: black;
    text-shadow: .25em 0 0 rgba(0, 0, 0, 0), .5em 0 0 rgba(0, 0, 0, 0);
  }
  60% {
    text-shadow: .25em 0 0 black, .5em 0 0 rgba(0, 0, 0, 0);
  }
  80%, 100% {
    text-shadow: .25em 0 0 black, .5em 0 0 black;
  }
}

/* Desktop Responsive */
@media only screen and (min-width: 940px) {
  input[type="text"]:focus,
  input[type="number"]:focus {
    outline: none;
  }

  button {
    background-color: #526dff;
    border: none;
    color: #ffffff;
  }

  .email {
    height: 30px;
    width: 320px;
    text-align: left;
    border: 1px solid #dfdfdf;
    color: grey;
    border-radius: 40px;
    font-size: 19px;
  }

  #male,
  #female {
    height: 120px;
    width: 120px;
    border-radius: 50%;
    border: 4px solid grey;
  }

  #male:hover,
  #female:hover {
    border: 4px solid green;
  }

  .next-3 {
    height: 40px;
    width: 240px;
    padding: 10px;
    border-radius: 20px;
    cursor: pointer;
    display: none;
  }

  .height,
  .weight,
  .age {
    height: 40px;
    width: 320px;
    border: 1px solid #e1e1e1;
    border-radius: 4px;
    margin: 10px auto;
    font-size: 16px;
  }

  .outer-con-1 {
    height: 100vh;
    width: 100%;
    background-color: #a6e35e; /* Set your desired background color */
    display: flex;
    align-items: center;
    justify-content: center;
  }

  .con-1,
  .con-2,
  .con-3,
  .con-4,
  .con-5,
  .con-6,
  .outer-con-2 {
    height: 60vh;
    width: 50%;
    background-color: #ffffff;
    border-radius: 40px;
    border: 0px solid #c9c9c9;
    display: none;
  }

  .con-5-1-2 {
    height: 240px;
    width: 70%;
    margin: auto;
    background-color: #fff; /* Set your desired background color */
  }
}

/* Mobile Responsive */
@media only screen and (max-width: 940px) {
  input[type="text"]:focus {
    outline: none;
  }

  button {
    background-color: #526dff;
    border: none;
    color: #ffffff;
  }

  .email {
    height: 40px;
    width: 280px;
    text-align: center;
    border-radius: 20px;
    border: 1px solid #e1e1e1;
    font-size: 18px;
    color: #8b8b8b;
  }

  #male,
  #female {
    height: 120px;
    width: 120px;
    border-radius: 50%;
    border: 4px solid grey;
  }

  #male:hover,
  #female:hover {
    border: 4px solid green;
  }

  .next-3 {
    height: 40px;
    width: 240px;
    padding: 10px;
    margin-top: 50px;
    border-radius: 20px;
    cursor: pointer;
    display: none;
  }

  .height,
  .weight,
  .age {
    height: 40px;
    width: 280px;
    border: 1px solid #e1e1e1;
    border-radius: 2px;
    margin: 10px auto;
    font-size: 16px;
  }

  .outer-con-1 {
    height: 100vh;
    width: 100%;
    background-color: #a6e35e; /* Set your desired background color */
    display: flex;
    align-items: center;
    justify-content: center;
  }

  .con-1,
  .con-2,
  .con-3,
  .con-4,
  .con-5,
  .con-6,
  .outer-con-2 {
    height: 60vh;
    width: 90%;
    background-color: #ffffff;
    border-radius: 10px;
    cursor: pointer;
    border: 1px solid #c9c9c9;
    display: none;
  }

  .con-5-1-2 {
    height: 240px;
    width: 90%;
    margin: auto;
    background-color: #fff; /* Set your desired background color */
  }
}

table {
  width: 100%;
  border-collapse: collapse;
}

th, td {
  border: 1px solid #ccc;
  padding: 8px;
  text-align: left;
}

th {
  background-color: #f2f2f2;
}

.dataReceipe {
  height: 120px; width: 300px; margin: auto; bottom: 10px; border-radius: 20px; border: 1px solid grey; transform: translateX(-50%); left: 50%; position: fixed; background-color: #ffffff; text-align: center; justify-content: center; align-items: center; display: none;
}

.popup {
  display: none;
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-color: rgba(255, 255, 255, 0.9); /* Add background color and opacity */
  z-index: 1000;
  overflow: auto; /* Enable scrolling if content overflows */
}

.popup-content {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  background-color: white;
  height: 100%;
  width: 100%;
  box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.5);
}

.overlay {
  display: none;
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-color: rgba(0, 0, 0, 0.7);
  z-index: 999;
}


</style>
<body>
<audio id="vibrationSound" src="wrong.mp3"></audio>
<audio id="chooseSound" src="choose.mp3"></audio>
<input id="hiddenEmail" type="hidden" name="" value="">
<div id="outer-con-1" class="outer-con-1" style="">
	<!-------------1------------>
	<div id="con-1" class="con-1" style="">

	</div>
	<!--------------2------------>
	<div id="con-2" class="con-2" style="">
		<div style="height: 100%; width: 100%; display: block; border-top-left-radius: 10px; border-top-right-radius: 10px;">
		  <div style="height: 120px; width: 100%; background-color: ; border-top-left-radius: 10px; border-top-right-radius: 10px;">
			<span id="con-2-data"></span>
		  </div>
      <div style="height: 60px; width: 100%; background-color: ; display: flex; justify-content: center; align-items: center;">
        <img src="dietcalc-400+1200.png" style="height: 60px;">
      </div>      
		  <div style="height: 100px; width: 100%; background-color: ; display: flex; justify-content: center; align-items: center;">
		   <input id="email" class="email" type="text" name="email" placeholder="Email" style="text-align: center; font-size: 18px;">
		  </div>
		  <div style="height: 120px; width: 100%; background-color: ; display: flex; justify-content: center; align-items: center;">
               <button id="next-2" class="next-1">Next</button>
		  </div>
	    </div>
	</div>
	<!--------------3------------>
	<div id="con-3" class="con-3" style="">
		<div style="height: 100%; width: 100%; display: block; border-top-left-radius: 10px; border-top-right-radius: 10px;">
		  <div style="height: 180px; width: 100%; display: flex; justify-content: center; align-items: center; text-align: center; background-color: ; border-top-left-radius: 10px; border-top-right-radius: 10px;">
			  <span id="con-3-data"></span>
        <h2 style="color: #656565;">Choose gender</h2>
		  </div>
		  <div style="height: 140px; width: 60%; margin: auto; background-color: ; display: flex; justify-content: center; align-items: center;">
		      <div style="height: 140px; width: 50%; float: left; background-color: ; display: flex; justify-content: center; align-items: center;">
		      	  <img id="male" class="gender" gender-extract="male" src="avatar-1.png" style="cursor: pointer;">
		      </div>
		      <div style="height: 140px; width: 50%; float: right; background-color: ; display: flex; justify-content: center; align-items: center;">
		      	  <img id="female" class="gender" gender-extract="female" src="avatar-2.png" style="cursor: pointer;">
		      </div>
		  </div>
		  <div style="height: 200px; width: 100%; background-color: ; display: flex; justify-content: center; align-items: center;">
               <button id="next-3" class="next-3" style="">Next</button>
		  </div>
	    </div>
	</div>
	<!--------------4------------>
	<div id="con-4" class="con-4" style="">
    <div class="container">
        <div class="header">
            <span id="con-4-data">Your Data</span>
        </div>
        <div class="form-container">
            <input id="height" class="height" type="number" name="" placeholder="Height (5.8)">
            <br>
            <input id="weight" class="weight" type="number" name="" placeholder="Weight (65)">
            <br>
            <input id="age" class="age" type="number" name="" placeholder="Age (20)">
            <br>
            <button id="next-4" class="next-4">Next</button>
        </div>
    </div>
	</div>
	<!--------------5------------>
	<div id="con-5" class="con-5" style="">
		<div class="con-5-1" style="height: 100%; width: 100%; display: block; border-top-left-radius: 10px; border-top-right-radius: 10px;">
		  <div class="con-5-1-1" style="height: 120px; width: 100%; background-color: ; border-top-left-radius: 10px; border-top-right-radius: 10px;">

		  </div>
		  <div class="con-5-1-2" style="">
               <div style="height: 240px; width: 50%; float: left; background-color: ;">
               	  <div style="height: 120px; width: 100%; background-color: ; display: flex; justify-content: center; align-items: center;">
               	  	 <div class="food-category" id="vegetarian" extract-food-category="vegetarian" style="cursor: pointer;">
               	  		    <p class="food-category-name">Vegetarian</p>
               	  	 </div>
               	  </div>
               	  <div style="height: 120px; width: 100%; background-color: ; display: flex; justify-content: center; align-items: center;">
               	  	 <div class="food-category" id="non-vegetarian" extract-food-category="non-vegetarian" style="cursor: pointer;">
               	  		  <p class="food-category-name">Non Vegetarian</p>
               	  	 </div>
               	  </div>
               </div>
               <div style="height: 240px; width: 50%; float: right; background-color: ;">
               	  <div style="height: 120px; width: 100%; background-color: ; display: flex; justify-content: center; align-items: center;">
               	      <div class="food-category" id="eggetarian" extract-food-category="eggetarian" style="cursor: pointer;">
               	  		     <p class="food-category-name">Eggetarian</p>
               	  	  </div>	
               	  </div>
               	  <div style="height: 120px; width: 100%; background-color: ; display: flex; justify-content: center; align-items: center;">
               	  	  <div class="food-category" id="vegan" extract-food-category="vegan" style="cursor: pointer;">
               	  		     <p class="food-category-name">Vegan</p>
               	  	  </div>	
               	  </div>
               </div>
		  </div>
		  <div style="height: 120px; width: 100%; background-color: ; display: flex; justify-content: center; align-items: center;">
               <button id="next-5" class="next-5" style="height: 40px; width: 240px; display: none; padding: 10px; border-radius: 20px; cursor: pointer;">Done</button>
		  </div>
	    </div>
	</div>

	<!--------------6------------>
	<div id="con-6" class="con-6" style="">
		<div style="height: 100%; width: 100%; display: block; border-top-left-radius: 10px; border-top-right-radius: 10px;">
		  <div style="height: 120px; width: 100%; background-color: ; border-top-left-radius: 10px; border-top-right-radius: 10px;">
		  </div>
		  <div style="height: 240px; width: 100%; background-color: ; display: flex; justify-content: center; align-items: center;">
         <span id="finalResult"></span>
		  </div>
		  <div style="height: 120px; width: 100%; background-color: ; display: flex; justify-content: center; align-items: center;">
        <p class="loading">Wait :) We are finding a perfect meal for you</p>
		  </div>
	    </div>
	</div>

</div>


<div id="outer-con-2" class="outer-con-2" style="width:  100%; margin: auto;">
  <div id="dataResult" class="dataResult"></div>

</div>


<div id="dataReceipe" class="dataReceipe" style="">
   <button id="createReceipe" style="padding: 10px 15px; cursor: pointer; margin: 30px; border: 1px solid grey; border-radius: 20px;">Find Receipes</button>
</div>

<div class="overlay" id="overlay"></div>
<div id="popup" class="popup">
  <div class="popup-content">
    <!-- Add content for your full-page popup here -->
    <h2>Popup Content</h2>
    <p>This is a full-page popup.</p>
    <button id="closePopup">Close</button>
  </div>
</div>



</body>
</html>

<script type="text/javascript">
  //----------------1/2---------------//	
  setTimeout(function() {
   $("#con-1").show('1000'); 
  }, 1000);

  setTimeout(function() {
   $("#con-2").show();
   $("#con-1").hide();
   $('#email').focus() 
 }, 2500);
</script>



<script type="text/javascript">
//----------------2/3---------------//
$("#next-2").click(function(e) {
  e.preventDefault();
  var email = $("#email").val();

  // Function to validate an email address
  function isValidEmail(email) {
    // Use a regular expression for simple email validation
    var emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return emailPattern.test(email);
  }

  if (isValidEmail(email)) {
    var value = $("#email").val();
    $("#hiddenEmail").val(value);
    var dataString1 = 'email=' + email;

    $.ajax({
      type: 'POST',
      data: dataString1,
      url: 'admin/serv-email.php',
      success: function(data) {
        $("#con-2-data").html(data);
        setTimeout(function() {
          $("#con-2").hide(); // Hide too
          $("#con-3").show('5000'); // Show too
        }, 1000);
      }
    });


  } else {
    // Vibrate for 200 milliseconds (adjust duration as needed)
    // Play the MP3 sound
    var vibrationSound = document.getElementById("vibrationSound");
    vibrationSound.play();

    if ("vibrate" in navigator) {
      navigator.vibrate(200);
    }

    // Shake the input box
    var emailInput = $('#email');
    emailInput.css('border', '1px solid red');
    emailInput.css('animation', 'shake 0.5s ease-in-out infinite');

    // Clear the animation and red border after 1 second
    setTimeout(function() {
      emailInput.css('border', '');
      emailInput.css('animation', '');
    }, 1000);
  }
});

</script>



<script>
var input = document.getElementById("email");
input.addEventListener("keyup", function(event) {
  if (event.keyCode === 13) {
   event.preventDefault();
   document.getElementById("next-2").click();
  }
});
</script>



<script type="text/javascript">
// Gender Selection
var selectedGender = null; // Variable to store the selected gender

var genSelect = [...document.querySelectorAll(".gender")];
genSelect.forEach(function(btn) {
  btn.onclick = function() {
    var gender = btn.getAttribute('gender-extract');
    var email = $("#hiddenEmail").val();
    
    if (selectedGender === gender) {
      // If the user clicks on the same gender again, unselect it
      selectedGender = null;
      btn.style.border = ''; // Remove the border
    } else {
      // If the user selects a different gender, unselect the previously selected one
      if (selectedGender) {
        var previousGenderBtn = document.getElementById(selectedGender);
        previousGenderBtn.style.border = ''; // Remove the border from the previous selection
      }
      
      selectedGender = gender;
      btn.style.border = '4px solid green'; // Add a border to indicate the selection
      
      var chooseSound = document.getElementById("chooseSound");
      chooseSound.play();

      // Call the function to proceed to the next step after a 2-second delay
      setTimeout(proceedToNextStep, 2000); // 2000 milliseconds (2 seconds)
    }
    
    var dataString2 = 'gender=' + gender + '&email=' + email;
    console.log(dataString2);

    (function genderSelection() {
      $.ajax({
        type: 'POST',
        data: dataString2,
        url: 'admin/serv-gender.php',
        success: function(data) {
          $("#con-3-data").html(data);
          // $("#next-3").show('slow')
          // No need to show the "Next" button here; it's shown when a gender is selected.
        }
      });
    })();
  }
});

function proceedToNextStep() {
  if (selectedGender) {
    // Only proceed to the next step if a gender is selected
    $("#con-3").hide(); // Hide the current step
    $("#con-4").show('1000'); // Show the next step
    $("#height").focus(); //Next
  } else {
    // You may want to display an error message or prompt the user to select a gender.
    console.log("Please select a gender before proceeding.");
  }
}

  
</script>


<script type="text/javascript">
  //----------------4/5---------------//	
$(document).ready(function() {
    // Set focus on the "Height" input field when the page loads

    // Handle key events to navigate between inputs
    $("#height").keydown(function(e) {
        if (e.which === 13) { // Check if Enter key is pressed
            e.preventDefault();
            $("#weight").focus(); // Focus on the "Weight" input
        }
    });

    $("#weight").keydown(function(e) {
        if (e.which === 13) { // Check if Enter key is pressed
            e.preventDefault();
            $("#age").focus(); // Focus on the "Age" input
        }
    });

    // Handle the "Next" button click event
    $("#next-4").click(function(e) {
        e.preventDefault();
        var height = $("#height").val();
        var weight = $("#weight").val();
        var age = $("#age").val();
        var email = $("#hiddenEmail").val();

        if (height !== '' && weight !== '' && age !== '') {
            var dataString3 = 'height=' + height + '&weight=' + weight + '&age=' + age + '&email=' + email;
            console.log(dataString3);

            $.ajax({
                type: 'POST',
                data: dataString3,
                url: 'admin/serv-info.php',
                success: function(data) {
                    $("#con-4-data").html(data);
                    $("#con-4").hide();
                    $("#con-5").show('1000');
                    setTimeout(function() {
                        // Add any additional actions after success here
                    }, 2000);
                }
            });
        } else {
            if (height === '') {
                $('#height').css('border-bottom', '2px solid red');
            }
            if (weight === '') {
                $('#weight').css('border-bottom', '2px solid red');
            }
            if (age === '') {
                $('#age').css('border-bottom', '2px solid red');
            }
            setTimeout(function() {
                // Optionally, you can display an error message to the user
            }, 2000);
        }
    });
});

// Add an event listener for Enter key press
$(document).keydown(function(e) {
    if (e.which === 13) { // Check if Enter key is pressed
        e.preventDefault();
        $("#next-4").click(); // Trigger a click event on the "Next" button
    }
});

</script>

<script type="text/javascript">
//----------------5---------------//  
// Food Category Selection
var foodCatSelect = [...document.querySelectorAll(".food-category")];
var selectedFoodCategory = null; // Track the selected food category

foodCatSelect.forEach(function (btn) {
  btn.onclick = function () {
    var foodCategory = btn.getAttribute('extract-food-category');
    var email = $("#hiddenEmail").val();
    var dataString4 = 'foodCategory=' + foodCategory + '&email=' + email;
    console.log(dataString4);

    // Deselect the previously selected food category (if any)
    if (selectedFoodCategory) {
      $('#' + selectedFoodCategory).removeClass('selected-category');
      $('#' + selectedFoodCategory).css('border-color', ''); // Remove border color
      $('#' + selectedFoodCategory).css('border-width', ''); // Remove border width
      $('#' + selectedFoodCategory).css('border-style', ''); // Remove border style
    }

    // Select the new food category
    $('#' + foodCategory).addClass('selected-category');
    $('#' + foodCategory).css('border-color', 'green'); // Set border color to green
    $('#' + foodCategory).css('border-width', '2px'); // Set border width to 2 pixels (adjust as needed)
    $('#' + foodCategory).css('border-style', 'solid'); // Set border style to solid  
    selectedFoodCategory = foodCategory;

    // Trigger the next steps here (e.g., AJAX calls, showing/hiding elements) after a 2-second delay
    setTimeout(function () {
      var dataString5 = 'email=' + email;

      var chooseSound = document.getElementById("chooseSound");
      chooseSound.play();

      $.ajax({
        type: 'POST',
        data: dataString5,
        url: 'result/fetch-result.php',
        success: function (data) {
          $("#finalResult").html(data);
          setTimeout(function () {
            $(".loading").show(); // Show loading
          }, 5000);
        }
      });

      // Hide con-5 and show con-6 after a delay
      $("#con-5").hide(); // Hide con-5
      $("#con-6").show('slow'); // Show con-6

      setTimeout(function () {
        $.ajax({
          type: 'POST',
          data: dataString5,
          url: 'result/fetch-nutrients.php',
          success: function (data) {
            $("#dataResult").html(data);
            setTimeout(function () {
              $(".loading").show(); // Show loading
            }, 3000);
          }
        });

        $("#outer-con-2").show(); // Show outer-con-2
        $(".loading").hide();
        $(".dataReceipe").show();
        $("#createReceipe").show('slow');
        $("html, body").animate({ scrollTop: "+=740px" }, 800);
      }, 10000);
    }, 2000); // 2-second delay
  }
});

</script>

<script type="text/javascript">
// Add an event listener to the createReceipe button
$("#createReceipe").on("click", function () {
  // Show the popup and overlay
  $("#popup").show();
  $(".overlay").show();

  // Prevent the default behavior of the button (e.g., form submission)
  return false;
});

// Add an event listener to the close button within the popup
$("#closePopup").on("click", function () {
  // Hide the popup and overlay
  $("#popup").hide();
  $(".overlay").hide();

  // Prevent the default behavior of the button (e.g., page scroll)
  return false;
});

</script>