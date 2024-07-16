<template>
    <FrontendLayout>
        <Head title="Home Page"></Head>
        <h1>Name: {{ name }}</h1>
        <h1>This is Home Page</h1>
    </FrontendLayout>
</template>

<script setup>
import FrontendLayout from '@/Layouts/FrontendLayout.vue';
import { Head } from '@inertiajs/vue3';
defineProps({
   name : String 
});
</script>
<style lang="sass" scoped>

</style>
