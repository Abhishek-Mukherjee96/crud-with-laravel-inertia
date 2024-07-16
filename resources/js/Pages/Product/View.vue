<template>

    <Head title="View Product"></Head>
    <FrontendLayout>
        <div class="mt-4 mx-4">
            <div class="flex justify-between">
                <h5>View Product</h5>
                <Link :href="route('products.index')" class="bg-blue-500 text-white p-3 rounded mb-4">Back</Link>
            </div>
            <div class="grid grid-cols-12 gap-4">
                <div class="col-span-12">
                    <div class="mb-3">
                        <label>Name: {{ product.name }}</label>
                    </div>
                    <div class="mb-3">
                        <label>Price: {{ product.price }}</label>
                    </div>
                </div>
            </div>
        </div>
    </FrontendLayout>
</template>
<script setup>
import FrontendLayout from '@/Layouts/FrontendLayout.vue';
import { Head, Link } from '@inertiajs/vue3';
defineProps({
    product: Object
});
</script>
