$("#vehicle_brand").select2( {
 placeholder: "Select Car Brand",
 allowClear: true
 } );
$("#vehicle_color").select2( {
 placeholder: "Select Vehicle Color",
 allowClear: true
 } );
$("#reg_country").select2( {
 placeholder: "Select Registration Country",
 allowClear: true
 } );
$("#diver").select2( {
 placeholder: "Select Driver",
 allowClear: true
 } );
$("#role").select2( {
 placeholder: "Select Role",
 allowClear: true
 } );
$("#get_ticket_no").select2( {
 placeholder: "Select ticket no.",
 allowClear: true
 } );
$("#get_c_ticket_no").select2( {
 placeholder: "Select ticket no.",
 allowClear: true
 } );
$(document).ready(function () {
   $("#new_password, #r_new_password,#oldpassword").keyup(checkPasswordMatch);
        $('#p_save').prop('disabled', true);
});
    function checkPasswordMatch() {
    var password = $("#new_password").val();
    var confirmPassword = $("#r_new_password").val();
    if(password.length<8){
        $("#status").text("Too short new password! Atleast 8 characters are allowed");
        $('#status').css("color", "red");
        $('#p_save').prop('disabled', true);
    }
    else if (password != confirmPassword){
        $("#status").text("New password and retype new password do not match!");
        $('#status').css("color", "red");
        $('#p_save').prop('disabled', true);
    }
    else{
        $("#status").text("Passwords match.");
        $('#status').css("color", "green");
        $('#p_save').prop('disabled', false);
    }
}


$("#changepassword_form").submit(function(event) {
      /* stop form from submitting normally */
      event.preventDefault();
      /* get the action attribute from the <form action=""> element */
      var $form = $( this ),
          url = $form.attr( 'action' );

      /* Send the data using post */
      var posting = $.post( url, { 
          oldpassword: $('#oldpassword').val(), 
          new_password: $('#new_password').val(), 
          p_save: $('#p_save').val()
      
      } );
      posting.done(function( data ) {
          if(data.trim()=="done"){
            $('#status').text("Password updated successfully");
            $('#status').css("color", "green");
          }
          else if(data.trim()==""){  
          //$('#c_status').text(data);
          $('#status').text("Wrong old password or old and new passwords are same");
          $('#status').css("color", "red");
          }
          else {  
          //$('#status').text(data);
          $('#status').text("Sorry!! There has been an error");
          $('#status').css("color", "red");
          }
      });
    });

$("#c_checkout_form").submit(function(event) {
      /* stop form from submitting normally */
      event.preventDefault();
      /* get the action attribute from the <form action=""> element */
      var $form = $( this ),
          url = $form.attr( 'action' );

      /* Send the data using post */
      var posting = $.post( url, { 
          ticket_no: $('#get_c_ticket_no').val(),  
          c_checkout: $('#c_checkout').val()
      
      } );
      posting.done(function( data ) {
          if(data.trim()=="done"){
            $('#c_status').text("Record updated successfully");
            $('#c_status').css("color", "green");
          }
          else if(data.trim()==""){  
          //$('#c_status').text(data);
          $('#c_status').text("Error!! Entered ticket status must be 'On way' for checkout");
          $('#c_status').css("color", "red");
          }
          else {  
          //$('#c_status').text(data);
          $('#c_status').text("Sorry!! Make Sure you have entered valid ticket no.");
          $('#c_status').css("color", "red");
          }
      });
         // $('#status').text(data);
    });


$("#onway_form").submit(function(event) {
      /* stop form from submitting normally */
      event.preventDefault();
      /* get the action attribute from the <form action=""> element */
      var $form = $( this ),
          url = $form.attr( 'action' );

      /* Send the data using post */
      var posting = $.post( url, { 
          ticket_no: $('#get_ticket_no').val(),  
          onway: $('#onway').val()
      
      } );

      posting.done(function( data ) {
          if(data.trim()=="done"){
            $('#status').text("Record updated successfully");
            $('#status').css("color", "green");
          }
          else if(data.trim()==""){  
          //$('#c_status').text(data);
          $('#status').text("Error!! Entered ticket status must be 'Requested' for 'On Way'");
          $('#status').css("color", "red");
          }
          else {  
         // $('#status').text(data);
          $('#status').text("Sorry!! There has been an error!!\n Make Sure you have entered valid ticket no.");
          $('#status').css("color", "red");
          }
      });
         // $('#status').text(data);
    });

$("#login_form").submit(function(event) {
      /* stop form from submitting normally */
      event.preventDefault();

      /* get the action attribute from the <form action=""> element */
      var $form = $( this ),
          url = $form.attr( 'action' );

      /* Send the data using post */
      var posting = $.post( url, { 
          email: $('#email').val(), 
          password: $('#password').val(),
          login: $('#login').val()
      
      } );

      /* Alerts the results */
      posting.done(function( data ) {
          if(data.indexOf("index") >= 0){
            $('#status').text("Signed in successfully");
            $('#status').css("color", "green");
            eval(data);
            //window.location.href='index.php';
          }
          else {
              
          //$('#status').text(data);
          $('#status').text("Sorry!! email or password doesn't match.");
          $('#status').css("color", "red");
          }
      });
    });

$("#rate_form").submit(function(event) {
      /* stop form from submitting normally */
      event.preventDefault();

      /* get the action attribute from the <form action=""> element */
      var $form = $( this ),
          url = $form.attr( 'action' );

      /* Send the data using post */
      var posting = $.post( url, { 
          shift1_start: $('#shift1_start').val(), 
          shift1_end: $('#shift1_end').val(),
          shift1_rate: $('#shift1_rate').val(),
          shift2_start: $('#shift2_start').val(),
          shift2_end: $('#shift2_end').val(),
          shift2_rate: $('#shift2_rate').val(),
          update_rates: $('#update_rates').val()
      
      } );

      /* Alerts the results */
      posting.done(function( data ) {
          if(data.trim()=="done"){
            $('#status').text("Record updated successfully");
            $('#status').css("color", "green");
          }
          else {
              
          //$('#status').text(data);
          $('#status').text("Sorry!! There has been an error!!\n Make Sure you have filled all fields correctly.");
          $('#status').css("color", "red");
          }
      });
    });
$("#user_form").submit(function(event) {
      /* stop form from submitting normally */
      event.preventDefault();

      /* get the action attribute from the <form action=""> element */
      var $form = $( this ),
          url = $form.attr( 'action' );

      /* Send the data using post */
      var posting = $.post( url, { 
          user_email: $('#user_email').val(), 
          user_name: $('#user_name').val(),
          user_password: $('#user_password').val(),
          user_role: $('#user_role option:selected').val(),
          add_user: $('#add_user').val()
      
      } );

      /* Alerts the results */
      posting.done(function( data ) {
          if(data.trim()=="done"){
            $('#status').text("Record added successfully");
            $('#status').css("color", "green");
          }
          else {
              
          //$('#status').text(data);
          $('#status').text("Sorry!! There has been an error!!\n Make Sure you have filled all fields correctly.");
          $('#status').css("color", "red");
          }
      });
    });
$("#driver_form").submit(function(event) {
      /* stop form from submitting normally */
      event.preventDefault();

      /* get the action attribute from the <form action=""> element */
      var $form = $( this ),
          url = $form.attr( 'action' );

      /* Send the data using post */
      var posting = $.post( url, { 
          driver_name: $('#driver_name').val(), 
          driver_email: $('#driver_email').val(),
          add_driver: $('#add_driver').val()
      
      } );

      /* Alerts the results */
      posting.done(function( data ) {
          if(data=="done"){
            $('#status').text("Record added successfully");
            $('#status').css("color", "green");
          }
          else {
              
          //$('#status').text(data);
           $('#status').text("Sorry!! There has been an error!!\n Make Sure you have filled all fields correctly.");
          $('#status').css("color", "red");
          }
      });
    });
$("#checkin_form").submit(function(event) {
      /* stop form from submitting normally */
      event.preventDefault();

      /* get the action attribute from the <form action=""> element */
      var $form = $( this ),
          url = $form.attr( 'action' );

      /* Send the data using post */
      var posting = $.post( url, { 
          ticket_no: $('#ticket_no').val(), 
          parking_no: $('#parking_no').val(), 
          vehicle_brand: $('#vehicle_brand option:selected').val(), 
          vehicle_model: $('#vehicle_model').val(), 
          vehicle_color: $('#vehicle_color option:selected').val(), 
          description: $('#description').val(), 
          reg_country: $('#reg_country option:selected').val(),
          vehicle_reg: $('#vehicle_reg').val(), 
          diver: $('#diver option:selected').val(), 
          checkin: $('#checkin').val()
      
      } );

      /* Alerts the results */
      posting.done(function( data ) {
          if(data.trim()=="done"){
            $('#status').text("Record added successfully");
            $('#status').css("color", "green");
          }
          else {
              
        $('#status').text(data);
        //$('#status').text("Sorry!! There has been an error!!\n Ticket_no exists or you have filled fields incorrectly.");
        $('#status').css("color", "red");
          }
      });
    });
$(document).ready(function() {
    if($('#t_amount').val()==0){
        $('#checkout').text("Generate Bill");
    }
    else{
        $('#checkout').text("Check Out");
    }
});

$("#checkout_form").submit(function(event) {
      /* stop form from submitting normally */
      event.preventDefault();
      /* get the action attribute from the <form action=""> element */
      var $form = $( this ),
          url = $form.attr( 'action' );
      /* Send the data using post */
      var posting = $.post( url, { 
          ticket_no: $('#get_ticket_no').val(), 
          cashier_name: $('#cashier_name').val(), 
          t_amount: $('#t_amount').val(), 
          submitbtn: $('#checkout').text()
      } );

      /* Alerts the results */
      posting.done(function( data ) {
       if (data.indexOf("already") >= 0){ 
          $('#status').text("Ticket already registered as paid. Refresh the page to enter new ticket");
        }   
      else if (data.indexOf("-") >= 0){
            hours=parseInt(data.split("-")[0])*10;
          $('#t_amount').val(hours); //lets the rate is 10 dhirham
          $('#checkout').text("Check Out");
          $('#status').text("");
        }
      else if(data.trim()=="done"){
            $('#status').text("Checked-Out initiated successfully!!");
            $('#status').css("color", "green");
        }
      else {
       // $('#status').text('"'+data+'"');
        $('#status').text("Sorry!! There has been an error!!\n");
        $('#status').css("color", "red");
      }
          //$('#status').text(data);
      });
    });

$('.badge').each(function(){
    if($(this).text().toLowerCase()=="checked-in"){ 
       $(this).addClass("bgc-green-50"); 
       $(this).addClass("c-green-700"); 
    }/*
    else if($(this).text().toLowerCase()=="requested"){ 
       $(this).addClass("bgc-yellow-50"); 
       $(this).addClass("c-yellow-700"); 
    }*/
    else if($(this).text().toLowerCase()=="requested"){ 
       $(this).addClass("bgc-deep-purple-50"); 
       $(this).addClass("c-deep-purple-700"); 
    }
    else if($(this).text().toLowerCase()=="on the way"){ 
       $(this).addClass("bgc-pink-50"); 
       $(this).addClass("c-pink-700"); 
    }
    else if($(this).text().toLowerCase()=="collect now"){ 
       $(this).addClass("bgc-orange-50"); 
       $(this).addClass("c-orange-700"); 
    }
    else if($(this).text().toLowerCase()=="checked-out"){ 
       $(this).addClass("bgc-red-50"); 
       $(this).addClass("c-red-700"); 
    }
 });
