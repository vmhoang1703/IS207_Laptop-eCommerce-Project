



//Proceed to payment function
function proceedToPayment() {
    var noticeError = document.querySelector('.notice-error');

    // Tạo một mảng chứa các ô checkbox đã được chọn
    var checkedCheckboxes = Array.from(document.querySelectorAll('.form-check-input:checked'));

    if (checkedCheckboxes.length === 0) {
        noticeError.innerHTML = "Please select at least one item.";
        return;
    }

    // // // Kiểm tra giá trị của ô input số tương ứng nếu checkbox đã được chọn
    // var isValidQuantity = checkedCheckboxes.every(function (checkbox) {
    //     var quantityInput = document.querySelector('.product-quantity[data-id="' + checkbox.id + '"]');

    //     if (!quantityInput) {
    //         noticeError.innerHTML = "Invalid quantity input.";
    //         return false; // Nếu không tìm thấy ô input số tương ứng, coi như không hợp lệ
    //     }

    //     var quantityValue = parseInt(quantityInput.value, 10);

    //     if (isNaN(quantityValue) || quantityValue < 1) {
    //         noticeError.innerHTML = "Quantity must be a positive number and greater than or equal to 1.";
    //         return false;
    //     }

    //     return true;
    // });

    // if (!isValidQuantity) {
    //     return;
    // }

    // Nếu tất cả điều kiện đều đúng, hiển thị thông báo và thực hiện các bước khác
    alert("Proceed to payment successfully!");
    // Đối với chuyển hướng thực tế, bạn có thể sử dụng window.location.href
    // window.location.href = "URL của trang thanh toán";
}