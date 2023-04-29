document.addEventListener('DOMContentLoaded', () => {
    const btn = document.getElementById("menu-btn");
    const menu = document.getElementById("menu");
    const logo = document.getElementById("logo");

    // hamburger button menu
    btn.addEventListener("click", navToggle);

    function navToggle() {
        btn.classList.toggle("open");
        menu.classList.toggle("flex");
        menu.classList.toggle("hidden");

        // if (menu.classList.contains("flex")) {
        //     logo.setAttribute("src", "/wp-content/themes/gdna_wp_theme_updated/assets/images/g-dna-logo-mobile.png");
        // } else {
        //     logo.setAttribute("src", "/wp-content/themes/gdna_wp_theme_updated/assets/images/g-dna-logo-default.webp");
        // }
    }
});

document.addEventListener("click", (e) => {
    const isDropdownButton = e.target.matches("[data-dropdown-button]");
    if (!isDropdownButton && e.target.closest("[data-dropdown]") != null) return;
    let currentDropdown;
    if (isDropdownButton) {
        currentDropdown = e.target.closest("[data-dropdown]");
        currentDropdown.classList.toggle("active");
    }

    let max = Number.NEGATIVE_INFINITY;
    const subItems = document.getElementsByClassName('information-grid ');
    for (let subItem of subItems) {
        if (subItem.innerText.length > max) {
            max = subItem.innerText.length;
        }
    }
    document.getElementsByClassName('information-grid ')[0].style.removeProperty('width')

    if (max !== Number.NEGATIVE_INFINITY) {
        const width = document.getElementsByClassName('information-grid ')[0].clientWidth;
        document.getElementsByClassName('information-grid ')[0].style.setProperty('width', `calc(100% + ${width + max}px)`);
    }
    max = Number.NEGATIVE_INFINITY;
    document.querySelectorAll("[data-dropdown].active").forEach((dropdown) => {
        if (dropdown === currentDropdown) return;

        dropdown.classList.remove("active");
        dropdown.classList.add("visited");
    });
});