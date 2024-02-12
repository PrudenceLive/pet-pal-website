// Array of paw image filenames
const pawImages = ['paw1.jpg', 'paw2.jpg', 'paw3.jpg', 'paw4.jpg', 'paw5.jpg'];

// Function to generate a random paw image
function getRandomPawImage() {
    // Generate a random index within the range of pawImages array length
    const randomIndex = Math.floor(Math.random() * pawImages.length);
    // Get the random paw image filename
    const randomPawImage = pawImages[randomIndex];
    // Return the path to the random paw image
    return `images/${randomPawImage}`; // Assuming the images directory is named "images"
}

// Update the paw image source when the page loads
window.onload = function() {
    // Get a reference to the paw image element
    const pawImg = document.getElementById('pawImage');
    // Set the src attribute to a random paw image
    pawImg.src = getRandomPawImage();
};

document.addEventListener("DOMContentLoaded", function() {
    const form = document.getElementById("scheduleForm");

    form.addEventListener("submit", function(event) {
        event.preventDefault(); // Prevent the default form submission behavior

        // Get form data
        const formData = new FormData(form);

        // Optional: Perform validation here if needed

        // Construct an object from form data
        const formDataObject = {};
        formData.forEach((value, key) => {
            formDataObject[key] = value;
        });

        // Log form data (replace with your own logic)
        console.log("Form data:", formDataObject);

        // Optional: Send form data to server using fetch or XMLHttpRequest

        // Reset the form
        form.reset();
    });
});



