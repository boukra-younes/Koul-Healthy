document.addEventListener('DOMContentLoaded', function() {
    var checkChef = document.getElementById('checkchef');
    var checkLivrere = document.getElementById('checklivrere');
    var fileInputContainer = document.querySelector('.file-input-container');
    var fileInputContainer1 = document.querySelector('.file-input-container1');
    var test1 = document.querySelector('.test1');
    var test2 = document.querySelector('.test2');

    checkChef.addEventListener('change', function() {
        if (checkChef.checked) {
            fileInputContainer.style.display = 'block';
            test1.style.display = 'block';
            fileInputContainer1.style.display = 'none';
            test2.style.display = 'none';
        } else {
            fileInputContainer.style.display = 'none';
            test1.style.display = 'none';
        }
    });

    checkLivrere.addEventListener('change', function() {
        if (checkLivrere.checked) {
            fileInputContainer1.style.display = 'block';
            test2.style.display = 'block';
            fileInputContainer.style.display = 'none';
            test1.style.display = 'none';
        } else {
            fileInputContainer1.style.display = 'none';
            test2.style.display = 'none';
        }
    });
});
