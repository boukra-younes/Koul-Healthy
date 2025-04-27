// scripts.js
function editField(field) {
    const fieldValue = document.getElementById(field).textContent;
    document.getElementById(field + 'Edit').value = fieldValue;
    document.getElementById(field + '-form').style.display = 'block';
}

function cancelEdit(field) {
    document.getElementById(field + '-form').style.display = 'none';
}

document.getElementById('username-form').addEventListener('submit', function(event) {
    event.preventDefault();
    const newValue = document.getElementById('usernameEdit').value;
    document.getElementById('username').textContent = newValue;
    cancelEdit('username');
});

document.getElementById('fullname-form').addEventListener('submit', function(event) {
    event.preventDefault();
    const newValue = document.getElementById('fullnameEdit').value;
    document.getElementById('fullname').textContent = newValue;
    cancelEdit('fullname');
});

document.getElementById('phone-form').addEventListener('submit', function(event) {
    event.preventDefault();
    const newValue = document.getElementById('phoneEdit').value;
    document.getElementById('phone').textContent = newValue;
    cancelEdit('phone');
});

document.getElementById('email-form').addEventListener('submit', function(event) {
    event.preventDefault();
    const newValue = document.getElementById('emailEdit').value;
    document.getElementById('email').textContent = newValue;
    cancelEdit('email');
});

function editPassword() {
    document.getElementById('password-form').style.display = 'block';
}

function cancelPasswordEdit() {
    document.getElementById('password-form').style.display = 'none';
}

document.getElementById('password-form').addEventListener('submit', function(event) {
    event.preventDefault();
    const currentPassword = document.getElementById('currentPassword').value;
    const newPassword = document.getElementById('newPassword').value;
    const confirmPassword = document.getElementById('confirmPassword').value;

    if (newPassword === confirmPassword) {
        // Code to update password goes here
        console.log('Password updated');
        cancelPasswordEdit();
    } else {
        alert('New password and confirmation do not match');
    }
});
