document.querySelectorAll('.filter-btn').forEach(button => {
    button.addEventListener('click', () => {
        const target = button.dataset.target;
        const container = button.closest('.container');
        container.querySelectorAll('.products').forEach(productSection => {
            if (productSection.classList.contains(target)) {
                productSection.classList.add('active');
            } else {
                productSection.classList.remove('active');
            }
        });
    });
});

document.querySelectorAll('.toggle-old-buttons').forEach(button => {
    button.addEventListener('click', () => {
        button.nextElementSibling.classList.toggle('show-old-buttons');
    });
});

document.querySelectorAll('.next-btn').forEach((button, index) => {
    button.addEventListener('click', () => {
        const currentContainer = document.querySelector(`.container${index + 1}`);
        const nextContainer = document.querySelector(`.container${index + 2}`);
        if (nextContainer) {
            currentContainer.style.display = 'none';
            nextContainer.style.display = 'flex';
        }
    });
});
