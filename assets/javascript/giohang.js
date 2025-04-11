
// xử lý tăng giảm sản phẩm
var quantityElement = document.getElementById("qty-id");

function increaseQuantity() {
    var currentQuantity = parseInt(quantityElement.value);
    quantityElement.value = currentQuantity + 1;
    updateTotalPrice();

}

function decreaseQuantity() {
    var currentQuantity = parseInt(quantityElement.value);
    if (currentQuantity > 1) {
        quantityElement.value = currentQuantity - 1;    
    updateTotalPrice();

    }
}
// Sự kiện thay đổi giá trị
var priceProduct = document.getElementById('total-Price');
priceProduct.addEventListener('change', function () {
    updateTotalPrice();
});

// Hàm cập nhật tổng số tiền
function updateTotalPrice() {
    var quantity = parseInt(quantityElement.value);
    var price = parseFloat(quantityElement.getAttribute('value')); // Giá sản phẩm từ PHP
    var totalPrice = quantity * price;
    return totalPrice;

    
    // Cập nhật tổng số tiền ở đây, có thể làm thông qua JavaScript hoặc gửi yêu cầu Ajax để cập nhật trên server.
}


