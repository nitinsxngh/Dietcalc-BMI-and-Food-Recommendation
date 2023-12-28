  //----------------1/2---------------//  
  setTimeout(function() {
    $("#con-1").show('1000');
  }, 1000);

  setTimeout(function() {
    $("#con-2").show();
    $("#con-1").hide();
    $('#email').focus();
  }, 2500);

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
            $("#con-2").hide();
            $("#con-3").show('5000');
          }, 1000);
        }
      });
    } else {
      var vibrationSound = document.getElementById("vibrationSound");
      vibrationSound.play();

      if ("vibrate" in navigator) {
        navigator.vibrate(200);
      }

      var emailInput = $('#email');
      emailInput.css('border', '1px solid red');
      emailInput.css('animation', 'shake 0.5s ease-in-out infinite');

      setTimeout(function() {
        emailInput.css('border', '');
        emailInput.css('animation', '');
      }, 1000);
    }
  });

  var input = document.getElementById("email");
  input.addEventListener("keyup", function(event) {
    if (event.keyCode === 13) {
      event.preventDefault();
      document.getElementById("next-2").click();
    }
  });

  // Gender Selection
  var selectedGender = null;
  var genSelect = [...document.querySelectorAll(".gender")];
  genSelect.forEach(function(btn) {
    btn.onclick = function() {
      var gender = btn.getAttribute('gender-extract');
      var email = $("#hiddenEmail").val();

      if (selectedGender === gender) {
        selectedGender = null;
        btn.style.border = '';
      } else {
        if (selectedGender) {
          var previousGenderBtn = document.getElementById(selectedGender);
          previousGenderBtn.style.border = '';
        }

        selectedGender = gender;
        btn.style.border = '4px solid green';

        var chooseSound = document.getElementById("chooseSound");
        chooseSound.play();

        setTimeout(proceedToNextStep, 2000);
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
          }
        });
      })();
    }
  });

  function proceedToNextStep() {
    if (selectedGender) {
      $("#con-3").hide();
      $("#con-4").show('1000');
      $("#height").focus();
    } else {
      console.log("Please select a gender before proceeding.");
    }
  }

  //----------------4/5---------------//  
  $(document).ready(function() {
    $("#height").keydown(function(e) {
      if (e.which === 13) {
        e.preventDefault();
        $("#weight").focus();
      }
    });

    $("#weight").keydown(function(e) {
      if (e.which === 13) {
        e.preventDefault();
        $("#age").focus();
      }
    });

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

  $(document).keydown(function(e) {
    if (e.which === 13) {
      e.preventDefault();
      $("#next-4").click();
    }
  });

  //----------------5---------------//
  var foodCatSelect = [...document.querySelectorAll(".food-category")];
  var selectedFoodCategory = null;

  foodCatSelect.forEach(function(btn) {
    btn.onclick = function() {
      var foodCategory = btn.getAttribute('extract-food-category');
      var email = $("#hiddenEmail").val();
      var dataString4 = 'foodCategory=' + foodCategory + '&email=' + email;
      console.log(dataString4);

      if (selectedFoodCategory) {
        $('#' + selectedFoodCategory).removeClass('selected-category');
        $('#' + selectedFoodCategory).css('border-color', '');
        $('#' + selectedFoodCategory).css('border-width', '');
        $('#' + selectedFoodCategory).css('border-style', '');
      }

      $('#' + foodCategory).addClass('selected-category');
      $('#' + foodCategory).css('border-color', 'green');
      $('#' + foodCategory).css('border-width', '2px');
      $('#' + foodCategory).css('border-style', 'solid');
      selectedFoodCategory = foodCategory;

      setTimeout(function() {
        var dataString5 = 'email=' + email;

        var chooseSound = document.getElementById("chooseSound");
        chooseSound.play();

        $.ajax({
          type: 'POST',
          data: dataString5,
          url: 'result/fetch-result.php',
          success: function(data) {
            $("#finalResult").html(data);
            setTimeout(function() {
              $(".loading").show();
            }, 5000);
          }
        });

        $("#con-5").hide();
        $("#con-6").show('slow');

        setTimeout(function() {
          $.ajax({
            type: 'POST',
            data: dataString5,
            url: 'result/fetch-nutrients.php',
            success: function(data) {
              $("#dataResult").html(data);
              setTimeout(function() {
                $(".loading").show();
              }, 3000);
            }
          });

          $("#outer-con-2").show();
          $(".loading").hide();
          $(".dataReceipe").show();
          $("#createReceipe").show('slow');
          $("html, body").animate({
            scrollTop: "+=740px"
          }, 800);
        }, 10000);
      }, 2000);
    }
  });

  // Add an event listener to the createReceipe button
  $("#createReceipe").on("click", function() {
    $("#popup").show();
    $(".overlay").show();
    return false;
  });

  // Add an event listener to the close button within the popup
  $("#closePopup").on("click", function() {
    $("#popup").hide();
    $(".overlay").hide();
    return false;
  });
