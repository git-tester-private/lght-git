<template>
    <div class="bg-main-vid">
      <video autoplay loop muted playsinline class="main-vid">
        <source src="@/assets/vid/main.mp4" type="video/mp4" />
      </video>
      <div class="letters-container">
        <div class="letter-grid">
          <div class="letter top-left">L</div>
          <div class="letter top-right">G</div>
          <div class="letter bottom-left">H</div>
          <div class="letter bottom-right">T</div>
        </div>
      </div>
    </div>
  
    <section class="container">
    <Header/>
    </section>
  
    <main class="container">
      <div class="section-rich-text main-section">
        <div class="rich-text">
          An artful approach to lightning - <br>
          handmade in Canada, perfect for <br>
          any space you call home.
        </div>
      </div>
  
  
      <div class="main-section">
  
        <div class="absolute-section-header">
          <h2 class="section-header">Bestsellers</h2>
        </div>
        <div id="bestsellers-grid">
          <div class="row1">
            <img src="@/assets/pic/gwen-1.png" class="image-1" alt="Gwen">
            <img src="@/assets/pic/gwen-2.png" class="image-hov" alt="Gwen Hover">
          </div>
          <div class="row1">
            <img src="@/assets/pic/iris-1.png" class="image-1" alt="Iris">
            <img src="@/assets/pic/iris-2.png" class="image-hov" alt="Iris Hover">
          </div>
          <div class="row1">
            <img src="@/assets/pic/margaux-1.png" class="image-1" alt="Margaux">
            <img src="@/assets/pic/margaux-2.png" class="image-hov" alt="Margaux Hover">
          </div>
          <div class="row1">
            <img src="@/assets/pic/prairie-1.png" class="image-1" alt="Prairie">
            <img src="@/assets/pic/prairie-2.png" class="image-hov" alt="Prairie Hover">
          </div>
          <div class="row1">
            <img src="@/assets/pic/tulip-1.png" class="image-1" alt="Tulip">
            <img src="@/assets/pic/tulip-2.png" class="image-hov" alt="Tulip Hover">
          </div>
          <div id="row2col1">
            <img src="@/assets/pic/extra-1.png" class="image-bestsellers-grid-row-2-collumn-1" alt="Image 1">
          </div>
          <div id="row2col2">VIEW ALL</div>
          <div id="row2col3">
            <img src="@/assets/pic/extra-2.png" class="image-bestsellers-grid-row-2-collumn-2" id="img1" alt="Image 2">
            <img src="@/assets/pic/extra-3.png" class="image-bestsellers-grid-row-2-collumn-2" id="img2" alt="Image 3">
          </div>
        </div>
  
      </div>
  
  
      <div class="main-section">
        <div class="absolute-section-header">
          <h2 class="section-header shades-header">Shades of light</h2>
        </div>
  
        <div class="shades-grid">
          <div class="shades-grid-1">
            <video autoplay loop muted playsinline class="vid-2">
              <source src="@/assets/vid/shades1.mp4" type="video/mp4" />
            </video>
          </div>
  
  
          <div class="shades-grid-2">
            <video autoplay loop muted playsinline class="vid-2-1">
              <source src="@/assets/vid/shades2.mp4" type="video/mp4" />
            </video>
          </div>
  
          <div class="shades-grid-3">
            <p>
              Let the neutral tones of our light <br>
              fixtures complement any space<br> they call home. This carefully<br> curated palette is an effortless<br>
              reflection of natures movements<br> in a day. Offered in 6 versatile<br> shades, these lights<br>will
              transform your space from<br> morning to night.<br>
            </p>
            <span>
              <a href="" id="link-shop-lightning">SHOP LIGHTNING<svg viewBox="0 0 14 10" fill="none" aria-hidden="true"
                  focusable="false" class="icon icon-arrow" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M8.537.808a.5.5 0 01.817-.162l4 4a.5.5 0 010 .708l-4 4a.5.5 0 11-.708-.708L11.793 5.5H1a.5.5 0 010-1h10.793L8.646 1.354a.5.5 0 01-.109-.546z"
                    fill="currentColor">
                  </path>
                </svg>
              </a>
            </span>
          </div>
        </div>
      </div>
  
  
  
      <div class="main-section">
        <div class="absolute-section-header">
          <h2 class="section-header slider-header">As seen in</h2>
        </div>
        <div class="marquee">
          <div class="marquee-track">
            <div class="slide">
              <img src="@/assets/pic/slider/slide1.png" alt="Slide 1">
            </div>
            <div class="slide">
              <img src="@/assets/pic/slider/slide2.png" alt="Slide 2">
            </div>
            <div class="slide">
              <img src="@/assets/pic/slider/slide3.png" alt="Slide 3">
            </div>
            <div class="slide">
              <img src="@/assets/pic/slider/slide4.png" alt="Slide 4">
            </div>
            <div class="slide">
              <img src="@/assets/pic/slider/slide5.png" alt="Slide 5">
            </div>
  
  
            <!-- Дублируем слайды для бесконечной прокрутки -->
            <div class="slide">
              <img src="@/assets/pic/slider/slide1.png" alt="Slide 1">
            </div>
            <div class="slide">
              <img src="@/assets/pic/slider/slide2.png" alt="Slide 2">
            </div>
            <div class="slide">
              <img src="@/assets/pic/slider/slide3.png" alt="Slide 3">
            </div>
            <div class="slide">
              <img src="@/assets/pic/slider/slide4.png" alt="Slide 4">
            </div>
            <div class="slide">
              <img src="@/assets/pic/slider/slide5.png" alt="Slide 5">
            </div>
          </div>
        </div>
      </div>
      <Footer/>
    </main>

  

  
  </template>
  
  
  
  
  
  
  
  
  
  <style scoped>
@import '../assets/home-style.css';
</style>
  
  
  
  
  
  <script>


  import { useHeaderState } from '@/composables/useHeader';
  
  export default {
    setup() {
      const {
        isHeaderFixed,
        isMegaMenuVisible,
        showMegaMenu,
        hideMegaMenu,
      } = useHeaderState();
  
      return {
        isHeaderFixed,
        isMegaMenuVisible,
        showMegaMenu,
        hideMegaMenu,
      };
    },
  };
  </script>
  