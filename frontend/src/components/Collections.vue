<template>
  <div class="container">
    <Header />

    <main class="collection-section">
      <div class="collection">
        <section class="collection-menu">
          <h1>Products</h1>
          <div class="collection-menu-categories">
            <!-- Ссылки для категорий -->
            <router-link
              :to="{ name: 'Collections' }"
              :class="{ active: !$route.params.category }"
            >
              Shop All
            </router-link>
            <router-link
              v-for="category in categories"
              :key="category"
              :to="{ name: 'Collections', params: { category } }"
              :class="{ active: $route.params.category === category }"
            >
              {{ category }}
            </router-link>
          </div>
        </section>

        <!-- Список товаров -->
        <div class="collection-grid">
          <keep-alive>
          <ProductList
            :category="$route.params.category"
            basePath="/src/assets/pic/collection"
          />
        </keep-alive>
        </div>
      </div>
    </main>

    <Footer />
  </div>
</template>

<script>
import Header from "./Header.vue";
import Footer from "./Footer.vue";
import ProductList from "./ProductList.vue";

export default {
  name: "Collections",
  watch: {
    // Следим за изменением категории в маршруте
    "$route.params.category"() {
      // Сбрасываем скролл на верх при смене категории
      window.scrollTo({ top: 0, behavior: "smooth" });
    },
  },
  mounted() {
    // Восстанавливаем позицию скролла только при возврате на страницу
    const category = this.$route.params.category || "all";
    const position = sessionStorage.getItem(
      `scrollPosition:Collections:${category}`
    );
    if (position) {
      const { top } = JSON.parse(position);
      window.scrollTo({ top, behavior: "auto" });
    }
  },
  beforeRouteLeave(to, from, next) {
    // Сохраняем позицию скролла перед уходом со страницы
    if (from.name === "Collections") {
      const category = this.$route.params.category || "all";
      const scrollPosition = { top: window.scrollY };
      sessionStorage.setItem(
        `scrollPosition:Collections:${category}`,
        JSON.stringify(scrollPosition)
      );
    }
    next();
  },
  components: {
    Header,
    Footer,
    ProductList,
  },
  data() {
    return {
      categories: [
        "Candelabras",
        "Flush Mounts",
        "Floor Lamps",
        "Pendants",
        "Sconces",
        "Table Lamps",
      ],
    };
  },
};
</script>

<style scoped>
@import "../assets/collections.css";
</style>
