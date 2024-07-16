<template>
    <nav class="flex justify-between bg-gray-200 p-4">
        <div class="text-lg ">
            Navbar
        </div>
        <div>
            <ul class="flex gap-x-4 me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <Link class="text-dark" :href="route('index')">Home</Link>
                </li>
                <li class="nav-item">
                    <Link class="text-dark" :href="route('about')">About</Link>
                </li>
                <li class="nav-item">
                    <Link class="text-dark" :href="route('contact')">Contact</Link>
                </li>
            </ul>
        </div>
    </nav>
</template>
<script setup>
import { Link } from '@inertiajs/vue3';
</script>
