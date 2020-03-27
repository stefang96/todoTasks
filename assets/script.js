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

$("#gridCheck1").on("change", function() {
  var chb = $("#gridCheck1");

  if (chb.prop("checked")) {
    console.log("da");
    $("#selectList").attr("disabled", true);
  } else {
    console.log("ne");
    $("#selectList").attr("disabled", false);
  }
});

$("#addTask").on("click", function() {
  var form = $("#createTask");
  var form_data = form.serialize();
  var message = $("#message_reg");
  console.log(form_data);
  $.ajax({
    type: "POST",
    url: "view/ajax/emptyFieldCreateTask.php",
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

console.log($("#id2"));
// [<div id="outer"><div id="inner"></div></div>], [<div id="inner"></div>]

var arid1 = [];
var arid2 = [];
var arid3 = [];
var id1 = 0;
var id2 = 0;
var id3 = 0;
$(".id1").each(function(i, ele) {
  if (ele.innerText != "") {
    arid1.push(ele.innerText);
  } else {
    id1++;
  }
});
$(".id2").each(function(i, ele) {
  if (ele.innerText != "") {
    arid2.push(ele.innerText);
  } else {
    id2++;
  }
});
$(".id3").each(function(i, ele) {
  if (ele.innerText != "") {
    arid3.push(ele.innerText);
  } else {
    id3++;
  }
});

$(".id1").length = $(".id1").length - id1;
$(".id2").length = $(".id2").length - id2;
$(".id3").length = $(".id3").length - id3;

var big = Math.max(
  $(".id1").length - id1,
  $(".id2").length - id2,
  $(".id3").length - id3
);

if (arid1.length < big) {
  for (var i = arid1.length; i < big; i++) {
    arid1.push(" ");
  }
}
if (arid2.length < big) {
  for (var i = arid2.length; i < big; i++) {
    arid2.push(" ");
  }
}
if (arid3.length < big) {
  for (var i = arid3.length; i < big; i++) {
    arid3.push(" ");
  }
}

console.log(arid1);
console.log(arid3);

console.log(arid2);
console.log(big);

$(".id1").each(function(i, ele) {
  if (i < big) {
    console.log(i);
    ele.innerText = arid1[i];
  } else {
    ele.hidden = true;
    console.log("da");
  }
});
$(".id2").each(function(i, ele) {
  if (i < big) {
    console.log(i);
    ele.innerText = arid2[i];
  } else {
    ele.hidden = true;
    console.log("da");
  }
});
$(".id3").each(function(i, ele) {
  if (i < big) {
    console.log(i);
    ele.innerText = arid3[i];
  } else {
    ele.hidden = true;
    console.log("da");
  }
});

console.log($(".id2").length);

console.log($(".id1").length);
console.log($(".id3").length);

function detailsModal(id) {
  $("#detailsModal").modal();
}
