// Example: Fake login system
function loginUser() {
    let email = document.getElementById("email").value;
    let pass = document.getElementById("password").value;

    if (email === "" || pass === "") {
        alert("All fields required!");
        return;
    }
    alert("Login Successful!");
    window.location.href = "index.html";
}

// Example: Add Recipe
function addRecipe() {
    let title = document.getElementById("title").value;
    let desc = document.getElementById("description").value;

    if (title === "" || desc === "") {
        alert("Please fill all fields");
        return;
    }

    alert("Recipe Added Successfully!");
}
