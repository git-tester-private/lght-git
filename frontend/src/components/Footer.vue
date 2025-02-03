<template>

  <div class="main-section main-collections-section">
    <div class="collections-section">

      <div class="collection-banner">
        <div class="collection-banner-border banner-border1">
          <img src="@/assets/pic/collection1.png" alt="Collection 1">
        </div>
        <div class="collection-banner-text">
          <h3>Lght at Home</h3>
          <p>Lght at Home, a haven of design inspiration. Coming Soon...</p>
        </div>
      </div>

      <div class="collection-banner">
        <div class="collection-banner-border banner-border2">
          <img src="@/assets/pic/collection2.png" alt="Collection 2">
        </div>
        <div class="collection-banner-text">
          <h3>Merch</h3>
          <p>Lght merch inspired by the brigghtest of days</p>
        </div>
      </div>

      <div class="collection-banner">
        <div class="collection-banner-border banner-border3">
          <img src="@/assets/pic/collection3.png" alt="Collection 3">
        </div>
        <div class="collection-banner-text">
          <h3>Lght x Light & Dwell</h3>
          <p>Shop our collaboration with Oregon based, interior design<br> firm, Light & Dwell </p>
        </div>
      </div>
    </div>
  </div>

  <footer class=" main-footer-section">
    <div class="footer-section ">
      <div class="footer-links-column">
        <ul class="footer-links-list">
          <li><a href="">ABOUT</a></li>
          <li><a href="">CONTACT</a></li>
          <li><a href="">INSTAGRAM</a></li>
          <li><a href="">FAQ</a></li>
        </ul>
      </div>
      <div class="footer-links-column">
        <ul class="footer-links-list">
          <li><a href="">LGHT POLICY</a></li>
          <li><a href="">RETURN POLICY</a></li>
          <li><a href="">WARRANTY</a></li>
          <li><a href="">MATERIAL & CARE</a></li>
        </ul>
      </div>

      <div class="footer-form-column">
        <h2 id="sub-text">SUBSCRIBE TO OUR EMAILS</h2>



        <div class="input-form">
          <input type="text" name="" id="email-input" placeholder=" ">
          <label for="email-input">EMAIL</label>
          <button>
            <svg viewBox="0 0 14 10" fill="none" aria-hidden="true" focusable="false" class="icon icon-arrow"
              xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" clip-rule="evenodd"
                d="M8.537.808a.5.5 0 01.817-.162l4 4a.5.5 0 010 .708l-4 4a.5.5 0 11-.708-.708L11.793 5.5H1a.5.5 0 010-1h10.793L8.646 1.354a.5.5 0 01-.109-.546z"
                fill="currentColor">
              </path>
            </svg>
          </button>
        </div>
      </div>
      <div>
        <img src="@/assets/pic/footer.png" alt="">
      </div>
    </div>
    <div class="footer-bot">
      <span>© 2024</span>
      <a href="">LGHT LIGHTSHOP</a>
      <a href="">SITE CREDITS</a>
    </div>
  </footer>
</template>

<script>
</script>

<style scooped>
.main-collections-section {
  padding-top: 3vw;
  padding-bottom: 3vw;
}

.collections-section {
  display: grid;
  grid-template-columns: 1fr 1fr 1fr;
  align-items: start;
  /* Выравниваем элементы по верхнему краю */
  gap: 20px;
}

.banner-border1 {
  background-image: url(./src/assets/pic/border1.png);
}

.banner-border2 {
  background-image: url(./src/assets/pic/border2.png);
}

.banner-border3 {
  background-image: url(./src/assets/pic/border3.png);
}

.collection-banner {
  display: flex;
  /* align-items: center; */
  justify-content: center;
  flex-direction: column;
  padding: 0 1vw;
  gap: 20px;
}

.collection-banner-border {
  position: relative;
  background-repeat: no-repeat;
  background-position: center center;
  background-size: contain;
  display: flex;
  justify-content: center;
  align-items: center;
  padding: 6%
}

.collection-banner-border img {
  width: 100%;
  height: 90%;
  background-size: contain;
}

.collection-banner-text {
  display: flex;
  flex-direction: column;
  gap: 10px;
  padding-left: 40px;
}

.collection-banner-text h3 {
  font-weight: 200;
  color: rgb(var(--color-foreground));
}

.collection-banner-text p {
  font-weight: 100;
  color: rgb(var(--color-foreground));
}



/* --footer-- */
.main-footer-section {
  padding-top: 4vw;
  margin-bottom: 2vw;
  border: 1px solid black;
  border-bottom: none;
  position: relative;
  width: 100%;
}

.footer-section {
  margin-left: 10rem;
  margin-right: 10rem;
  display: flex;
  flex-direction: row;
  justify-content: space-between;
}

.footer-links-column {
  display: flex;
}

.footer-links-list {
  display: flex;
  flex-direction: column;
  gap: 10px;
  list-style: none;
  justify-content: center;
}

.footer-links-column .footer-links-list a {
  font-size: 14px;
  font-weight: 100;


}

#sub-text {
  font-size: 16px;
  font-weight: 100;

}

.footer-form-column {
  display: flex;
  flex-direction: column;
  width: 360px;
  gap: 30px;
  justify-content: center;
}

#email-input {
  width: 100%;
  /* Ширина input */
  border: none;
  /* Убираем стандартную рамку */
  background: transparent;
  /* Прозрачный фон */
  font-size: 16px;
  /* Размер текста */
  outline: none;

  color: rgb(var(--color-foreground));
  padding-bottom: 5px;
  /* Отступ текста от верхней и нижней границы */
}


.input-form label {
  position: absolute;
  left: 0;
  color: rgb(var(--color-foreground), 0.5);
  font-size: 14px;
  pointer-events: none;
  /* Лейбл не активен для кликов */
  transition: opacity 0.3s ease, transform 0.3s ease;
}

#email-input:focus+label,
#email-input:not(:placeholder-shown)+label {
  opacity: 0;
  /* Скрываем label */

}

.input-form {
  position: relative;
  display: flex;
  flex-direction: row;
  border-bottom: 1px solid;
}

.input-form svg {
  width: 0.9rem;

}

.input-form button {
  background-color: transparent;
  border: none;

}

.footer-bot {
  margin-top: 3rem;
  width: 100%;
  /* Во всю ширину контейнера */
  background-color: rgb(var(--color-foreground));
  /* Чёрный фон */
  height: 50px;
  /* Высота (настраиваемая) */
  display: flex;
  justify-content: center;
  align-items: center;
  gap: 5px;
}

.footer-bot a {
  font-size: 12px;
  color: rgb(var(--color-background), 0.9);
  font-weight: 100;
}

.footer-bot a:nth-child(3) {
  font-size: 12px;
  color: rgb(var(--color-background), 0.9);
  font-weight: 100;
  text-decoration: underline;
}

.footer-bot span {
  font-weight: 100;
  font-size: 11px;
  color: rgb(var(--color-background), 0.9);
}
</style>