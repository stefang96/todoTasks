$("#registration").on("click", function() {
  var form = $("#register-form");
  var form_data = form.serialize();
  var message = $("#message_reg");
  console.log(form_data);
  $.ajax({
    type: "POST",
    url: "view/ajax/emptyFieldRegister.php",
    data: form_data,
    dataType: "json",
    success: function(data) {
      console.log(data.status);

      if (data.status == true) {
        console.log("Usao u true");

        form.submit();
      } else {
        message.html(data.message);

        message.attr("hidden", false);
      }
    },
    error: function(response) {
      console.log("Error!");
      console.log(response);
    }
  });
});

$("#loginBtn").on("click", function() {
  var form = $("#login-form");
  var form_data = form.serialize();
  var message = $("#message_reg");
  console.log(form_data);
  $.ajax({
    type: "POST",
    url: "view/ajax/emptyFieldLogin.php",
    data: form_data,
    dataType: "json",
    success: function(data) {
      console.log(data.status);

      if (data.status == true) {
        console.log("Usao u true");

        form.submit();
      } else {
        message.html(data.message);

        message.attr("hidden", false);
      }
    },
    error: function(response) {
      console.log("Error!");
      console.log(response);
    }
  });
});

$("#emailRegister").on("blur", function() {
  var email = $("#emailRegister").val();
  var name = $("#emailRegister").attr("name");

  $.ajax({
    url: "view/ajax/validateRegister.php",
    method: "POST",
    data: { value: email, name: name },
    dataType: "text"
  })
    .done(function(data) {
      $("#emailP").html(data);
      if (data != false) {
        $("#emailP").attr("hidden", false);
      } else {
        $("#emailP").attr("hidden", true);
      }
    })
    .fail(function(data, txtStatus) {
      alert(txtStatus);
    });
});
