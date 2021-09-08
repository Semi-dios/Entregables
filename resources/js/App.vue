<template>
  <div>
        <Nav></Nav>
        <router-view></router-view>
  </div>
</template>

<script>

import Nav from './components/NavBar.vue';

export default {
    components: {
        Nav,
    }
}
</script>

<style>

</style>
