function switchPage(event, pageId) {
    event.preventDefault();
    // Hide all pages
    document.querySelectorAll('.page').forEach(page => page.style.display = 'none');
    // Show the selected page
    document.getElementById(pageId).style.display = 'block';
    alert("uygfieqzduqhoehdqhpiugh<eohmdfouezqç_f");
}

function submitForm(event) {
    event.preventDefault();
    document.getElementById('dietForm').submit();
}