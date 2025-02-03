import './assets/main.css';
// import './assets/home-style.css';
// import './assets/collections.css';

import { createApp } from 'vue';
import App from './App.vue';
import Header from '@/components/Header.vue'; // Импорт глобального компонента
import Footer from '@/components/Footer.vue'; // Импорт глобального компонента

import router from './router';

// Создаём приложение
const app = createApp(App);

// Регистрируем глобальный компонент
app.component('Header', Header);

app.component('Footer', Footer);

// Подключаем маршрутизатор
app.use(router);

// Монтируем приложение
app.mount('#app');
