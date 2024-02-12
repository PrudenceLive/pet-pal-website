function getRandomPawImage() {
    const pawImages = ['paw1.jpg', 'paw2.jpg', 'paw3.jpg', 'paw4.jpg', 'paw5.jpg'];
    const randomIndex = Math.floor(Math.random() * pawImages.length);
    return `images/${pawImages[randomIndex]}`;
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



