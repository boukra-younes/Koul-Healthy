document.addEventListener("DOMContentLoaded", function() {
    const topBar = document.getElementById('topBar');
    const buttons = document.querySelectorAll('.square');
    let previousButton = null; 
    const maxWidth = 1273; 
    
    buttons.forEach(button => {
        button.addEventListener('click', () => {
            const currentWidth = topBar.clientWidth;
            const newWidth = currentWidth + 50;
            const number = button.getAttribute('data-number');
            const numberElement = document.querySelector(`.square[data-number="${number}"] .number`);
            
            if (previousButton !== null) {
                const previousNumber = previousButton.getAttribute('data-number');
                const previousNumberElement = document.querySelector(`.square[data-number="${previousNumber}"] .number`);
                previousNumberElement.style.backgroundColor = 'rgba(255, 255, 255, 0.7)';
            }
            
            numberElement.style.backgroundColor = '#609A33'; 
            previousButton = button;  
            if (newWidth <= maxWidth) { 
                topBar.style.width = `${newWidth}px`;
            }
        });
    });
    
    document.querySelectorAll('.square').forEach(button => {
        button.addEventListener('click', function() {
            document.querySelector('.page1').style.display = 'none';
            document.querySelector('.page2').style.display = 'block' 
            });
        });

        document.querySelectorAll('.genderb').forEach(genderButton => {
            genderButton.addEventListener('click', () => {
                const currentWidth = topBar.clientWidth;
                const newWidth = currentWidth + 50;
    
                if (newWidth <= maxWidth) { 
                    topBar.style.width = `${newWidth}px`;
                }
            });
        });
        
        document.querySelectorAll('.genderb').forEach(button => {
            button.addEventListener('click', function() {
                document.querySelector('.page2').style.display = 'none';
                document.querySelector('.page3').style.display = 'block' 
                });
            });

            document.querySelectorAll('.Weightb').forEach(WeightButton => {
                WeightButton.addEventListener('click', () => {
                    const currentWidth = topBar.clientWidth;
                    const newWidth = currentWidth + 50;
        
                    if (newWidth <= maxWidth) { 
                        topBar.style.width = `${newWidth}px`;
                    }
                });
            });
            
            document.querySelectorAll('.Weightb').forEach(button => {
                button.addEventListener('click', function() {
                    document.querySelector('.page3').style.display = 'none';
                    document.querySelector('.page4').style.display = 'block' 
                    });
                });

                document.querySelectorAll('.continue').forEach(WeightButton => {
                    WeightButton.addEventListener('click', () => {
                        const currentWidth = topBar.clientWidth;
                        const newWidth = currentWidth + 50;
            
                        if (newWidth <= maxWidth) { 
                            topBar.style.width = `${newWidth}px`;
                        }
                        const tallInput = document.querySelector('.number-input');
                        const tall = parseInt(tallInput.value);
                        if (tall < 150) {
                            document.getElementById('error').style.display = 'block';
                            tallInput.style.borderColor = 'red';
                        } else {
                            document.getElementById('error').style.display = 'none';
                            tallInput.style.borderColor = 'var(--primery-color)';
                            document.querySelector('.page4').style.display = 'none';
                            document.querySelector('.page5').style.display = 'block';
                        }
                    });
                });

            document.querySelectorAll('.continue2').forEach(WeightButton => {
                WeightButton.addEventListener('click', () => {
                    const currentWidth = topBar.clientWidth;
                    const newWidth = currentWidth + 50;
        
                    if (newWidth <= maxWidth) { 
                        topBar.style.width = `${newWidth}px`;
                    }
                    const tallInput = document.querySelector('.number-input2');
                    const tall = parseInt(tallInput.value);
                    if (tall < 50) {
                        document.getElementById('error').style.display = 'block';
                        tallInput.style.borderColor = 'red';
                    } else {
                        document.getElementById('error').style.display = 'none';
                        tallInput.style.borderColor = 'var(--primery-color)';
                        document.querySelector('.page4').style.display = 'none';
                        document.querySelector('.page5').style.display = 'block';
                    }
                });
            });
});

function maxLengthCheck(object) {
    if (object.value.length > 3) {
        object.value = object.value.slice(0, 3);
    }
}
