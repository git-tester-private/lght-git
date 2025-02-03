<template>
  <router-view v-slot="{ Component }">
    <keep-alive include="Collections">
      <component :is="Component" />
    </keep-alive>
  </router-view>
</template>
