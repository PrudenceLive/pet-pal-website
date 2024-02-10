// JavaScript for validating form inputs in Pet Pal contact form

// Get the form element
const form = document.getElementById('scheduleForm');

// Add event listener for form submission
form.addEventListener('submit', function(event) {
    // Perform form validation here
    const nameInput = document.getElementById('name');
    const nameValue = nameInput.value.trim();

    if (nameValue === '') {
        alert('Please enter your name.');
        event.preventDefault(); // Prevent form submission if validation fails
    }
});
