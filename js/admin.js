// scripts.js
document.addEventListener('DOMContentLoaded', function() {
    const btnAddProduct = document.getElementById('btnAddProduct');
    const btnDisplayProducts = document.getElementById('btnDisplayProducts');
    const addProductContainer = document.getElementById('addProductContainer');
    const productListContainer = document.getElementById('productListContainer');

    btnAddProduct.addEventListener('click', function() {
        addProductContainer.style.display = 'block';
        productListContainer.style.display = 'none';
    });

    btnDisplayProducts.addEventListener('click', function() {
        addProductContainer.style.display = 'none';
        productListContainer.style.display = 'block';
    });
});
