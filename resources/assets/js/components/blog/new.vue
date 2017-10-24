<template>
    <div>
        <h2>Bonjour ici le bloooog (nouveau)</h2>
        <router-link :to="{ name: 'blog-index' }">Retour</router-link>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('blog#new')
        }
    }
</script>