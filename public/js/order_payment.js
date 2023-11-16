// document.addEventListener('DOMContentLoaded', function () {
//     var paymentMethodBtn = document.getElementById('paymentMethodBtn');
//     var methodDisplayName = document.querySelector('#paymentMethodBtn .method-name');
//     var methodChangeBtn = document.querySelector('#paymentMethodBtn .method-change');
//     var btnAgree = document.getElementById('btn-agree');

//     var selectedMethod = ""; // Variable to store the selected payment method

//     // Event when clicking on a payment method
//     document.querySelectorAll('.method-line').forEach(function (methodLine) {
//         methodLine.addEventListener('click', function () {
//             // Remove the method-line__active class from all elements
//             document.querySelectorAll('.method-line').forEach(function (line) {
//                 line.classList.remove('method-line__active');
//             });

//             // Add the method-line__active class to the clicked element
//             methodLine.classList.add('method-line__active');

//             // Get the method content and store it in the variable
//             selectedMethod = methodLine.querySelector('.method-name').innerText;
//         });
//     });

//     // Event when clicking on the "I agree" button
//     btnAgree.addEventListener('click', function () {
//         // Update the payment method display on the main page
//         methodDisplayName.innerText = selectedMethod;

//         // Change the content of method-change
//         methodChangeBtn.innerText = "Thay đổi";

//         // Cập nhật thông tin ngay lập tức
//         updatePaymentMethod();
//     });

//     // Event when the modal is closed
//     $('#exampleModal').on('hidden.bs.modal', function (e) {
//         // Perform any additional tasks when the modal is closed
//         // In this case, you can update the payment method immediately
//         updatePaymentMethod();
//     });

//     // Event when clicking on the "Order" button
//     document.querySelector('.btn-oder').addEventListener('click', function () {
//         // You can add your order processing logic here
//         // For example, display a confirmation message or submit the form
//         alert('Order placed successfully!');
//     });

//     function updatePaymentMethod() {
//         // Implement the logic to update the payment method display or perform other actions
//         // You may use the selectedMethod variable here to access the chosen payment method
//         console.log('Payment method updated:', selectedMethod);
//     }
// });




document.addEventListener('DOMContentLoaded', function () {
    var paymentMethodBtn = document.getElementById('paymentMethodBtn');
    var methodDisplayName = document.querySelector('#paymentMethodBtn .method-name');
    var methodChangeBtn = document.querySelector('#paymentMethodBtn .method-change');
    var btnAgree = document.getElementById('btn-agree');
    var methodImg = document.getElementById('method-img-main')
    // var methodImg = document.querySelector('.method-img.col-1'); // Updated this line

    var selectedMethod = ""; // Variable to store the selected payment method

    // Event when clicking on a payment method
    document.querySelectorAll('.method-line').forEach(function (methodLine) {
        methodLine.addEventListener('click', function () {
            // Remove the method-line__active class from all elements
            document.querySelectorAll('.method-line').forEach(function (line) {
                line.classList.remove('method-line__active');
            });

            // Add the method-line__active class to the clicked element
            methodLine.classList.add('method-line__active');

            // Get the method content and store it in the variable
            selectedMethod = methodLine.querySelector('.method-name').innerText;

            // Get the method image source and update the image in paymentMethodBtn
            var selectedImgSrc = methodLine.querySelector('.method-img').src;
            methodImg.src = selectedImgSrc; // Updated this line
        });
    });

    // Event when clicking on the "I agree" button
    btnAgree.addEventListener('click', function () {
        // Update the payment method display on the main page
        methodDisplayName.innerText = selectedMethod;

        // Change the content of method-change
        methodChangeBtn.innerText = "Thay đổi";

        // Cập nhật thông tin ngay lập tức
        updatePaymentMethod();
    });

    // Event when the modal is closed
    $('#exampleModal').on('hidden.bs.modal', function (e) {
        // Perform any additional tasks when the modal is closed
        // In this case, you can update the payment method immediately
        updatePaymentMethod();
    });

    // Event when clicking on the "Order" button
    document.querySelector('.btn-oder').addEventListener('click', function () {
        // You can add your order processing logic here
        // For example, display a confirmation message or submit the form
        alert('Order placed successfully!');
    });

    function updatePaymentMethod() {
        // Implement the logic to update the payment method display or perform other actions
        // You may use the selectedMethod variable here to access the chosen payment method
        console.log('Payment method updated:', selectedMethod);
        // You can also access the selected image source using methodImg.src
        console.log('Payment method image updated:', methodImg.src);
    }
});

