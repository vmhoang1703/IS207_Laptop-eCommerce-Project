document.addEventListener("DOMContentLoaded", function () {
    var paymentMethodBtn = document.getElementById("paymentMethodBtn");
    var methodDisplayName = document.querySelector(
        "#paymentMethodBtn .method-name"
    );
    var methodChangeBtn = document.querySelector(
        "#paymentMethodBtn .method-change"
    );
    var btnAgree = document.getElementById("btn-agree");
    var methodImg = document.getElementById("method-img-main");
    var selectedMethodInput = document.getElementById("selectedPaymentMethod");

    var selectedMethod = ""; // Variable to store the selected payment method
    var selectedImgSrc = ""; // Variable to store the selected image source

    // Event when clicking on a payment method
    document.querySelectorAll(".method-line").forEach(function (methodLine) {
        methodLine.addEventListener("click", function () {
            // Remove the method-line__active class from all elements
            document.querySelectorAll(".method-line").forEach(function (line) {
                line.classList.remove("method-line__active");
            });

            // Add the method-line__active class to the clicked element
            methodLine.classList.add("method-line__active");

            // Get the method content and store it in the variable
            selectedMethod = methodLine.querySelector(".method-name").innerText;

            // Get the method image source and store it in the variable
            selectedImgSrc = methodLine.querySelector(".method-img").src;

            // Set the value of the selectedPaymentMethod input field
            selectedMethodInput.value = selectedMethod;
        });
    });

    // Event when clicking on the "I agree" button
    btnAgree.addEventListener("click", function () {
        // Update the payment method display on the main page
        methodDisplayName.innerText = selectedMethod;
        // Change the content of method-change
        methodChangeBtn.innerText = "Change";
        // Cập nhật thông tin ngay lập tức
        updatePaymentMethod();

        // Update the method image source in paymentMethodBtn
        methodImg.src = selectedImgSrc;
    });

    function updatePaymentMethod() {
        console.log("Payment method updated:", selectedMethod);
        // You can also access the selected image source using selectedImgSrc
        console.log("Payment method image updated:", selectedImgSrc);
    }
});
