


// document.addEventListener('DOMContentLoaded', function () {
//     // Lấy các phần tử cần thao tác
//     var proceedBtn = document.getElementById('proceed_btn');
//     var confirmBtn = document.getElementById('confirm_btn');
//     var returnBtn = document.getElementById('return_btn');
//     var cancelStep1 = document.getElementById('cancel_step_1');
//     var cancelStep2 = document.getElementById('cancel_step_2');
//     var cancelStep3 = document.getElementById('cancel_step_3');
//     var cancelStep4 = document.getElementById('cancel_step_4');
  
//     // Xử lý sự kiện khi nút "Confirm" được nhấn
//     confirmBtn.addEventListener('click', function () {
//       // Loại bỏ class "d-none" từ các phần tử có id "proceed_btn" và "cancel_step_2"
//       proceedBtn.classList.remove('d-none');
//       cancelStep2.classList.remove('d-none');
  
//       // Thêm class "d-none" vào các phần tử có id "cancel_step_1", "return_btn", "confirm_btn"
//       cancelStep1.classList.add('d-none');
//       returnBtn.classList.add('d-none');
//       confirmBtn.classList.add('d-none');
//     });
  
//     // Xử lý sự kiện khi nút "Proceed to cancel" được nhấn
//     proceedBtn.addEventListener('click', function () {
//       // Kiểm tra xem có ít nhất một input type="radio" được chọn
//       var radioInputs = document.querySelectorAll('.line-check input[type="radio"]:checked');
//       if (radioInputs.length > 0) {
//         // Kiểm tra data-status của cancel_step_3 và cancel_step_4
//         var status3 = cancelStep3.getAttribute('data-status');
//         var status4 = cancelStep4.getAttribute('data-status');
  
//         if (status4 === 'success') {
//           // Loại bỏ class "d-none" từ các phần tử có id "cancel_step_4", "return_btn"
//           cancelStep4.classList.remove('d-none');
//           returnBtn.classList.remove('d-none');
  
//           // Thêm class "d-none" vào các phần tử có id "cancel_step_2", "proceed_btn"
//           cancelStep2.classList.add('d-none');
//           proceedBtn.classList.add('d-none');
//         } else {
//                // Loại bỏ class "d-none" từ các phần tử có id "cancel_step_3", "return_btn"
//           cancelStep3.classList.remove('d-none');
//           returnBtn.classList.remove('d-none');
  
//           // Thêm class "d-none" vào các phần tử có id "cancel_step_2", "proceed_btn"
//           cancelStep2.classList.add('d-none');
//           proceedBtn.classList.add('d-none');
//         }
//         // Các xử lý khác nếu cần
//       } else {
//         // Hiển thị thông báo hoặc thực hiện các xử lý khác nếu không có radio được chọn
//         alert('Vui lòng chọn ít nhất một lý do.');
//       }
//     });
  
//     // Xử lý sự kiện khi modal được đóng
//     var cancelOrderModal = new bootstrap.Modal(document.getElementById('cancel_order-modal'));
//     cancelOrderModal._element.addEventListener('hidden.bs.modal', function () {
//       // Reset về trạng thái mặc định tại cancel_step_1 khi modal được đóng
//       proceedBtn.classList.add('d-none');
//       confirmBtn.classList.remove('d-none');
//       returnBtn.classList.remove('d-none');
//       cancelStep1.classList.remove('d-none');
//       cancelStep2.classList.add('d-none');
//     });
  
//     // Các xử lý khác nếu cần
//   });
  