 // điều hướng navbar
 function activateNavItem(element) {
    // Remove 'active' class from all nav links
    var navLinks = document.querySelectorAll('.nav-link');
    navLinks.forEach(function (link) {
      link.classList.remove('active');
      link.removeAttribute('aria-current');
    });

    // Add 'active' class and 'aria-current' attribute to the clicked nav link
    element.classList.add('active');
    element.setAttribute('aria-current', 'page');
  }

  document.getElementById('toggle-password').addEventListener('click', function () {
    togglePassword('custom-password');
  });

  document.getElementById('toggle-new-password').addEventListener('click', function () {
    togglePassword('custom-new-password');
  });

  document.getElementById('toggle-confirm-password').addEventListener('click', function () {
    togglePassword('custom-confirm-password');
  });

  function togglePassword(inputId) {
    var passwordInput = document.getElementById(inputId);
    var eyeIconShow = document.querySelector('.show-password');
    var eyeIconHide = document.querySelector('.hide-password');

    if (passwordInput.getAttribute('type') === 'password') {
      passwordInput.setAttribute('type', 'text');
      eyeIconShow.style.display = 'none';
      eyeIconHide.style.display = 'inline-block';
    } else {
      passwordInput.setAttribute('type', 'password');
      eyeIconShow.style.display = 'inline-block';
      eyeIconHide.style.display = 'none';
    }
  }

  document.getElementById('save-infor').addEventListener('click', function () {
    var newPassword = document.getElementById('custom-new-password').value;
    var confirmPassword = document.getElementById('custom-confirm-password').value;
    var emailInput = document.getElementById('custom-email-last').value;

    var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

    var newPassword = document.getElementById('custom-new-password').value;

    if (!isValidPassword(newPassword)) {
      alert("Password must contain at least one uppercase letter, one lowercase letter, one number, and one special character.");
      return;
    }
    if (!emailRegex.test(emailInput)) {
      alert("Invalid email format. Please enter a valid email address.");
      return;
    }

    if (newPassword !== confirmPassword) {
      alert("New password and confirm password do not match.");
      return;
    }

    var inputs = document.querySelectorAll('input');
    for (var i = 0; i < inputs.length; i++) {
      if (inputs[i].value.trim() === '') {
        alert("Please fill in all fields.");
        return;
      }
    }

    alert("Information updated successfully!");
  });

  function isValidPassword(password) {
    var passwordRegex = /^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[!@#$%^&*()_+])[A-Za-z\d!@#$%^&*()_+]+$/;
    return passwordRegex.test(password);
  }