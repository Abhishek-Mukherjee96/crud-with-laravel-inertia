<template>
 <div>
    <Navbar></Navbar>
    <slot></slot>
 </div>   
</template>
<script setup>
import Navbar from '@/Components/Navbar.vue';
</script>