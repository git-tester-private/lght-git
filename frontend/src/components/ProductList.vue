<template>
  <div v-for="product in products" :key="product.id" class="product">
    <router-link
      :to="`/product/${encodeURIComponent(product.name)}`"
      class="product-link"
    >
      <div class="image-container">
        <img
          :src="`${basePath}/${product.image_url}`"
          :alt="product.name"
          class="product-image"
        />
      </div>
      <p class="product-name">{{ product.name }}</p>
      <p class="product-price">{{ product.price }}</p>
    </router-link>
  </div>
</template>

<script>
import { ref, watch, onMounted } from "vue";

export default {
  name: "ProductList",
  props: {
    category: {
      type: String,
      default: null,
    },
    basePath: {
      type: String,
      required: true,
    },
  },

  setup(props) {
    const products = ref([]);
    const isLoading = ref(false);

    const fetchProducts = async () => {
      if (isLoading.value) return;

      isLoading.value = true;
      try {
        let url = "http://localhost:8080/api/data.php";
        if (props.category) {
          url += `?category=${encodeURIComponent(props.category)}`;
        }

        const response = await fetch(url);
        if (!response.ok) {
          throw new Error(`HTTP error! status: ${response.status}`);
        }

        const newData = await response.json();
        products.value = []; // Очищаем массив перед загрузкой новых данных
        products.value = newData; // Заменяем на новые данные
      } catch (error) {
        console.error("Ошибка загрузки данных:", error);
      } finally {
        isLoading.value = false;
      }
    };

    watch(() => props.category, fetchProducts);
    onMounted(fetchProducts);

    return { products };
  },
};
</script>

<style scoped>
.product {
  display: flex;
  flex-direction: column;
  cursor: pointer;

}

.product-link {
  display: block;
  text-decoration: none;
  color: inherit;
}

.image-container {
  position: relative;
  width: 100%;
  height: 80%;
overflow: hidden;

}

.image-container::before {
  content: "";
  display: block;
  padding-top: 100%; /* Создаёт квадратный контейнер */
  padding-bottom: 56.25%;
}

.product-image {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  object-fit: cover;
  transition: transform 0.7s ease;
}

.product-image:hover {
  transform: scale(1.03);
}

.product-name {
  text-transform: uppercase;
  font-size: 20px;
  padding-top: 10px;
  font-weight: 100;
}

.product-price {
  font-weight: 100;
  font-size: 18px;
}
</style>
