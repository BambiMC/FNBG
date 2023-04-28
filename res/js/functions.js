function toggleMobileMenu() {
  document.getElementById("mobile-menu").classList.toggle("hidden");
}

function randomFunction() {
  const symbols = document.getElementsByClassName("symbol");

  for (const element of symbols) {
    element.classList.toggle("rainbow-text");
  }
}

function randomFunction2() {
    const symbols = ["□", "█", "▲", "◊", "░", "▒", "▓", "▼", "◉", "◑", "◖"];
    const container = document.querySelector('.container2');
    container.innerHTML = '';
    for (let i = 0; i < 20; i++) {
        const left = Math.random() * 100 + "%";
        const top = Math.random() * 100 + "%";
        const delay = (Math.random() * -15) + "s";
        const symbol = symbols[Math.floor(Math.random() * symbols.length)];
        const div = document.createElement('div');
        div.classList.add('symbol');
        div.style.left = left;
        div.style.top = top;
        div.style.animationDelay = delay;
        div.innerHTML = `<p>${symbol}</p>`;
        container.appendChild(div);
    }
}

function sendContact() {
  var valid;
  valid = validateContact();
  if (valid) {
    jQuery.ajax({
      url: "res/php/contact_mail.php",
      data:
        "userName=" +
        $("#userName").val() +
        "&userEmail=" +
        $("#userEmail").val() +
        "&subject=" +
        $("#subject").val() +
        "&content=" +
        $(content).val(),
      type: "POST",
      success: function (data) {
        $("#mail-status").html(data);
      },
      error: function () {},
    });
  }
}

function validateContact() {
  var valid = true;

  //php function to validate email
  $email = test_input($_POST["email"]);
  if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $emailErr = "Invalid email format";
  }

  /*$(".demoInputBox").css("background-color", "");
        $(".info").html("");
        if (!$("#userName").val()) {
            $("#userName-info").html("(required)");
            $("#userName").css("background-color", "#FFFFDF");
            valid = false;
        }
        if (!$("#userEmail").val()) {
            $("#userEmail-info").html("(required)");
            $("#userEmail").css("background-color", "#FFFFDF");
            valid = false;
        }
        if (!$("#userEmail").val().match(/^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/)) {
            $("#userEmail-info").html("(invalid)");
            $("#userEmail").css("background-color", "#FFFFDF");
            valid = false;
        }
        if (!$("#subject").val()) {
            $("#subject-info").html("(required)");
            $("#subject").css("background-color", "#FFFFDF");
            valid = false;
        }
        if (!$("#content").val()) {
            $("#content-info").html("(required)");
            $("#content").css("background-color", "#FFFFDF");
            valid = false;
        }*/
  return valid;
}
