// Cart to store selected items and prices
let cart = [];

// Function to add items to the cart and calculate total
function addToCart(itemName, itemPrice) {
    // Add item to cart
    cart.push({ name: itemName, price: itemPrice });

    // Calculate total price
    let total = cart.reduce((acc, item) => acc + item.price, 0);

    // Update total price on the page
    document.getElementById("totalPrice").textContent = `Rp. ${total.toLocaleString()}`;
    // Add a little animation on the total price
    animateTotalPrice();
}

// Function to animate total price when updated
function animateTotalPrice() {
    const totalPriceElement = document.getElementById("totalPrice");
    totalPriceElement.classList.add("animate-price");
    setTimeout(() => {
        totalPriceElement.classList.remove("animate-price");
    }, 1000);
}

// Optional: Show cart contents (can be used to view cart items)
function showCart() {
    alert('Items in Cart: ' + cart.map(item => item.name).join(', '));
}
