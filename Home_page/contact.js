const col1 = document.getElementById('myCol1');

    col1.addEventListener('mouseenter', function() {
    col1.style.border = '2px solid #609a33';
    const svgIcon = col1.querySelector('svg');
    svgIcon.style.fill = '#609a33';  
});


col1.addEventListener('mouseleave', function() {
    col1.style.border = ''; 
    const svgIcon = col1.querySelector('svg');
    svgIcon.style.fill = ''; 
});

const col2 = document.getElementById('myCol2');

    col2.addEventListener('mouseenter', function() {
    col2.style.border = '2px solid #609a33';
    const svgIcon = col2.querySelector('svg');
    svgIcon.style.fill = '#609a33';  
});


col2.addEventListener('mouseleave', function() {
    col2.style.border = ''; 
    const svgIcon = col2.querySelector('svg');
    svgIcon.style.fill = ''; 
});

const col3 = document.getElementById('myCol3');

    col3.addEventListener('mouseenter', function() {
    col3.style.border = '2px solid #609a33';
    const svgIcon = col3.querySelector('svg');
    svgIcon.style.fill = '#609a33';  
});


col3.addEventListener('mouseleave', function() {
    col3.style.border = ''; 
    const svgIcon = col3.querySelector('svg');
    svgIcon.style.fill = ''; 
});