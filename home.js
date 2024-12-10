// Simple JavaScript to handle search click
document.querySelector('button').addEventListener('click', function() {
    const job = document.querySelector('input[type="text"]').value;
    const location = document.querySelectorAll('input[type="text"]')[1].value;
    
    if (job && location) {
        alert(`Searching for ${job} jobs in ${location}`);
    } else {
        alert("Please fill in both fields");
    }
});
