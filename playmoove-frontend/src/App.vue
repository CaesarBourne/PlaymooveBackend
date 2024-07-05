<template>
  <div id="app">
    <header class="bg-indigo-600 p-4">
      <nav class="container mx-auto flex justify-between">
        <div class="text-white font-bold">My App</div>
        <ul class="flex space-x-4">
          <li>
            <router-link class="text-white" to="/login">Login</router-link>
          </li>
          <li>
            <router-link class="text-white" to="/register">Register</router-link>
          </li>
        </ul>
      </nav>
    </header>
    <main class="container mx-auto py-8">
      <router-view></router-view>
    </main>
  </div>
</template>

<script>
export default {
  name: 'App',
}
</script>

<style>
/* Global styles or TailwindCSS import */
@import "tailwindcss/tailwind.css";

body {
  margin: 0;
  font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
}
</style>
