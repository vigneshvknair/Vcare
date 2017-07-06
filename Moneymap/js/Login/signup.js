 document.addEventListener("DOMContentLoaded", function() {

    // JavaScript form validation

     var checkPassword = function(str)
    {
      var re = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}$/;
      return re.test(str);
    };

    var checkForm = function(e)
    {
      if(this.user.value == "") {
        alert("Error: Username cannot be blank!");
        this.user.focus();
        e.preventDefault(); // equivalent to return false
        return;
      }
      re = /^\w+$/;
      if(!re.test(this.user.value)) {
        alert("Error: Username must contain only letters, numbers and underscores!");
        this.user.focus();
        e.preventDefault();
        return;
      }
      if(this.pass.value != "" && this.pass.value == this.cpass.value) {
        if(!checkPassword(this.pass.value)) {
          alert("The password you have entered is not valid!");
          this.pass.focus();
          e.preventDefault();
          return;
        }
      } else {
        alert("Error: Please check that you've entered and confirmed your password!");
        this.pass.focus();
        e.preventDefault();
        return;
      }
      alert("Registration entries valid!");
    };

    var signupform = document.getElementById("signupform");
    signupform.addEventListener("submit", checkForm, true);

    // HTML5 form validation

    var supports_input_validity = function()
    {
      var i = document.createElement("input");
      return "setCustomValidity" in i;
    }

    if(supports_input_validity()) {
      var usernameInput = document.getElementByName("uname");
      usernameInput.setCustomValidity(usernameInput.title);

      var pwd1Input = document.getElementByName("pass");
      pwd1Input.setCustomValidity(pwd1Input.title);

      var pwd2Input = document.getElementByName("cpass");

      // input key handlers

      usernameInput.addEventListener("keyup", function() {
        usernameInput.setCustomValidity(this.validity.patternMismatch ? usernameInput.title : "");
      }, false);

      pwd1Input.addEventListener("keyup", function() {
        this.setCustomValidity(this.validity.patternMismatch ? pwd1Input.title : "");
        if(this.checkValidity()) {
          pwd2Input.pattern = this.value;
          pwd2Input.setCustomValidity(pwd2Input.title);
        } else {
          pwd2Input.pattern = this.pattern;
          pwd2Input.setCustomValidity("");
        }
      }, false);

      pwd2Input.addEventListener("keyup", function() {
        this.setCustomValidity(this.validity.patternMismatch ? pwd2Input.title : "");
      }, false);

    }

  }, false);
