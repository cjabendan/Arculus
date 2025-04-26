document.addEventListener('DOMContentLoaded', function () {
    const dropdownToggle = document.querySelector('.dropdown-toggle');
    const dropdownMenu = document.querySelector('.dropdown-menu');

    dropdownToggle.addEventListener('click', function (e) {
        e.stopPropagation(); // Prevent click from propagating to the document
        dropdownMenu.classList.toggle('show');
    });

    // Close the dropdown if the user clicks outside of it
    document.addEventListener('click', function () {
        dropdownMenu.classList.remove('show');
    });
});