<template>
  <div>
       <ModalDeleteUser/>
        <Nav></Nav>
        <router-view></router-view>
  </div>
</template>

<script>

import Nav from './components/NavBar.vue';
import ModalDeleteUser from "./views/user/_modalDelete.vue";

export default {
    components: {
        Nav,
        ModalDeleteUser
    }
}
</script>

<style>

</style>
