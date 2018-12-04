export default {
  init() {

  },
  finalize() {
    // (() => {
    //   const productsNext = document.getElementById('productsNext');
    //   const productsPrev = document.getElementById('productsPrev');
    //   let slideIndex = 1;

    //   productsNext.onclick = () => { plusSlides(1);}
    //   productsPrev.onclick = () => { plusSlides(-1);}

    //   const plusSlides = (n) => {
    //     showSlides(slideIndex += n);
    //   }

    //   const showSlides = (n) => {
    //     let i;
    //     let slides = document.getElementsByClassName("products-table-wrapper-products-list-mobile");
    //     if (n > slides.length) {
    //       slideIndex = 1
    //     }
    //     if (n < 1) {
    //       slideIndex = slides.length
    //     }
    //     for (i = 0; i < slides.length; i++) {
    //       slides[i].style.display = "none";
    //     }
    //     slides[slideIndex - 1].style.display = 'block';
    //   }
    //   return showSlides(slideIndex)
    // })();
  },
};
