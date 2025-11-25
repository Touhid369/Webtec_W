function addBook() {
    const title = document.getElementById("title").value.trim();
    const year = document.getElementById("year").value.trim();
    const currentYear = new Date().getFullYear();

    const titlePattern = /^[A-Za-z]+$/;

    // Validate title
    if (!titlePattern.test(title)) {
        alert("Title must contain only alphabetic characters (no spaces, numbers, or symbols).");
        return;
    }

    // Validate year
    if (!/^\d{4}$/.test(year) || year < 1900 || year > currentYear) {
        alert("Year must be a valid four-digit number between 1900 and " + currentYear + ".");
        return;
    }

    // Add a new row in table
    const tableBody = document.getElementById("bookTable").querySelector("tbody");
    const newRow = document.createElement("tr");

    if (year < 2000) {
        newRow.classList.add("old-book");
    } else {
        newRow.classList.add("new-book");
    }

    newRow.innerHTML = `
        <td>${title}</td>
        <td>${year}</td>
    `;

    tableBody.appendChild(newRow);

    // Clear inputs
    document.getElementById("title").value = "";
    document.getElementById("year").value = "";
}
