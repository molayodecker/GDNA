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
    // //const pathUrl = 'http://res.cloudinary.com/dwbs6mbsy/image/upload/h_100,l_gdna:backgroundImages:play-button-icon-png-18910_kvhki0,w_100/v1/gdna/backgroundImages/';
    // const pathUrl = 'https://res.cloudinary.com/dwbs6mbsy/video/upload/h_300,l_gdna:backgroundImages:play-button-icon-png-18910_kvhki0,w_300/w_600/f_auto:animated/e_loop/v1683128623/gdna/backgroundImages/sdnruury3nwy6z3ofw8h.mp4';
    // const gifImages = ['G-DNA_GrantVideo_Final_2_2_plnw0t', 'G-DNA_GrantVideo_Final_2_1_cq5tjx', 'G-DNA_GrantVideo_Final_2_3_krvnfb', 'G-DNA_GrantVideo_Final_2_4_sd7dcv'] 
    // const ranImages = Math.floor(Math.random() * gifImages.length);
    // const elem = document.getElementById('hero');
    // elem.style.backgroundImage = `url('${pathUrl}')`;
    // elem.setAttribute("href", "google.com");
});
//https://res.cloudinary.com/dwbs6mbsy/video/upload/h_300,l_gdna:backgroundImages:play-button-icon-png-18910_kvhki0,w_300/w_600/f_auto:animated/e_loop/v1683128623/gdna/backgroundImages/ylrhnduildfm0hsb0aks.mp4
//https://res.cloudinary.com/dwbs6mbsy/image/upload/v1683084619/gdna/backgroundImages/play-button-icon-png-18910_kvhki0.png
//http://res.cloudinary.com/dwbs6mbsy/image/upload/h_100,l_gdna:backgroundImages:play-button-icon-png-18910_kvhki0,w_100/v1/gdna/backgroundImages/G-DNA_GrantVideo_Final_2_2_plnw0t