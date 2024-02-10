// This JavaScript file adds interactivity to the Pet Pal web application

// Define variables to store elements that we'll interact with
const scheduleButton = document.getElementById('scheduleButton');
const scheduleForm = document.getElementById('scheduleForm');

// Add event listeners to the scheduleButton and scheduleForm
scheduleButton.addEventListener('click', () => {
    // Display the scheduleForm when the scheduleButton is clicked
    scheduleForm.style.display = 'block';
});

// Add event listener to the scheduleForm submission
scheduleForm.addEventListener('submit', (event) => {
    // Prevent the default form submission behavior
    event.preventDefault();

    // Get the form input values
    const name = document.getElementById('name').value;
    const email = document.getElementById('email').value;
    const phone = document.getElementById('phone').value;
    const message = document.getElementById('message').value;

    // You can perform validation or submit the form data to a server here
    // For now, let's just log the form data to the console
    console.log('Form submitted with the following data:');
    console.log('Name:', name);
    console.log('Email:', email);
    console.log('Phone:', phone);
    console.log('Message:', message);

    // Reset the form fields after submission (optional)
    scheduleForm.reset();
});
