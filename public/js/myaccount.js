// điều hướng navbar
function activateNavItem(element) {
    // Remove 'active' class from all nav links
    var navLinks = document.querySelectorAll('.nav-link');
    navLinks.forEach(function(link) {
      link.classList.remove('active');
      link.removeAttribute('aria-current');
    });

    // Add 'active' class and 'aria-current' attribute to the clicked nav link
    element.classList.add('active');
    element.setAttribute('aria-current', 'page');
  }



  document.getElementById('toggle-password').addEventListener('click', function () {
    var passwordInput = document.getElementById('custom-password');
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
  });



//   document.getElementById('toggle-password').addEventListener('click', function () {
//     var passwordInput = document.getElementById('custom-password');
//     var eyeIconShow = document.querySelector('.show-password');
//     var eyeIconHide = document.querySelector('.hide-password');

//     if (passwordInput && eyeIconShow && eyeIconHide) {
//         if (passwordInput.type === 'password') {
//             passwordInput.type = 'text';
//             eyeIconShow.style.display = 'none';
//             eyeIconHide.style.display = 'inline-block';
//         } else {
//             passwordInput.type = 'password';
//             eyeIconShow.style.display = 'inline-block';
//             eyeIconHide.style.display = 'none';
//         }
//     }
// });
