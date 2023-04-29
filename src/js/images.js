const baseUrl = "https://res.cloudinary.com/dwbs6mbsy/image/upload";
document.addEventListener("DOMContentLoaded", () => {
    (() => {
        Array.from(document.querySelectorAll("[data-bg]")).forEach((image) => {
            const { clientWidth, clientHeight } = image;
            const imageParams = `w_${clientWidth ?? 675},h_${
        clientHeight ?? 379
      },c_fill,g_auto,f_auto`;
            const imagePath = image.dataset.bg.split("upload")[1];
            const url = `${baseUrl}/${imageParams}${imagePath}`;
            const formattedUrl = `url('${url}')`;
            image.style.backgroundImage = formattedUrl;
            image.style.backgroundRepeat = "no-repeat";
        });
    })();
});