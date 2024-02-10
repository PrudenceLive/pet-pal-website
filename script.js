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


