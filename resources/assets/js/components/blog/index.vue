<template>
    <div>
        <h1>Blog index</h1>
        <router-link :to="{ name: 'blog-new' }">Nouveau</router-link>
    </div>
</template>

<script>
   export default {
       mounted() {
           console.log('ouais');
       }
   }
</script>