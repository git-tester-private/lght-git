import { createRouter, createWebHistory } from "vue-router";
import Home from "../components/Home.vue";
import Collections from "../components/Collections.vue";
import ProductPage from "../components/ProductPage.vue";

const routes = [
  { path: "/", name: "Home", component: Home },
  {
    path: "/collections/:category?",
    name: "Collections",
    component: Collections,
    props: true,
  },
  {
    path: "/product/:name",
    name: "ProductPage",
    component: ProductPage,
    props: true,
  },
];

const router = createRouter({
  history: createWebHistory(),
  routes,
  scrollBehavior(to, from, savedPosition) {
    // Если возвращаемся на страницу коллекций
    if (to.name === "Collections" && from.name === "ProductPage") {
      const category = to.params.category || "all";
      const position = sessionStorage.getItem(
        `scrollPosition:Collections:${category}`
      );
      if (position) {
        return JSON.parse(position); // Восстанавливаем сохранённую позицию
      }
    }

    // Если переходим между категориями, сбрасываем скролл на верх
    if (to.name === "Collections" && from.name === "Collections") {
      return { top: 0 };
    }

    // Для других страниц используем сохранённую позицию или сбрасываем на верх
    return savedPosition || { top: 0 };
  },
});

export default router;
