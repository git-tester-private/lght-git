<template>
    <div class="container">
      <Header />
  
      <div class="product-collection">
        <div class="product-page">
          <div class="product-info">
            <h1 class="product-name">{{ product.name }}</h1>
            <p class="product-price">{{ product.price }} ₽</p>
  
            <div class="description">
              <p v-for="(line, index) in formattedDescription" :key="index">
                {{ line }}
              </p>
            </div>
          </div>
  
          <div class="product-images">
            <div v-for="(image, index) in images" :key="index" class="image-container">
              <img :src="`${basePath}/${image}`" :alt="'Image ' + (index + 1)" />
            </div>
          </div>
        </div>
      </div>
  
      <Footer />
    </div>
  </template>
  
  <script>
import { ref, onMounted, nextTick } from "vue";

export default {
  name: "ProductPage",
  props: {
    name: {
      type: String,
      required: true,
    },
    basePath: {
      type: String,
      default: "/src/assets/pic/collection",
    },
  },
  setup(props) {
    const product = ref({});
    const images = ref([]);
    const formattedDescription = ref([]);
    const imagesLoaded = ref(false);

    const fetchProduct = async () => {
      try {
        const response = await fetch(
          `http://localhost:8080/api/product.php?name=${encodeURIComponent(
            props.name
          )}`
        );
        product.value = await response.json();
        formattedDescription.value = product.value.description.split("\n");

        const imagesResponse = await fetch(
          `http://localhost:8080/api/product_images.php?product_id=${product.value.id}`
        );
        images.value = await imagesResponse.json();
      } catch (error) {
        console.error("Ошибка загрузки данных:", error);
      }
    };

    const handleImageLoad = () => {
      imagesLoaded.value = true;
    //   restoreScrollPosition();
    };



    onMounted(async () => {
      await fetchProduct();

      // Проверяем, все ли изображения загрузились
      if (images.value.length > 0) {
        let loadedImages = 0;
        images.value.forEach((image) => {
          const img = new Image();
          img.src = `${props.basePath}/${image}`;
          img.onload = () => {
            loadedImages += 1;
            if (loadedImages === images.value.length) {
              handleImageLoad();
            }
          };
        });
      }
    });

    return { product, images, formattedDescription, imagesLoaded };
  },

};
</script>

  
  
  <style scoped>
  @import "../assets/productPage.css";
  </style>
  