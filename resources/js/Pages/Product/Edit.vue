<template>

    <Head title="Edit Product"></Head>
    <FrontendLayout>
        <div class="mt-4 mx-4">
            <div class="flex justify-between">
                <h5>Edit Product</h5>
                <Link :href="route('products.index')" class="bg-blue-500 text-white p-3 rounded mb-4">Back</Link>
            </div>
            <form @submit.prevent="updateProduct()">
                <div class="grid grid-cols-12 gap-4">
                    <div class="col-span-12">
                        <div class="mb-3">
                            <label>Name:</label>
                            <input type="text" v-model="form.name" class="py-1 w-full">
                            <div v-if="errors.name" class="text-red-500">{{ errors.name }}</div>
                        </div>
                        <div class="mb-3">
                            <label>Price:</label>
                            <input type="text" v-model="form.price" class="py-1 w-full">
                            <div v-if="errors.price" class="text-red-500">{{ errors.price }}</div>
                        </div>
                        <button type="submit" class="bg-blue-500 text-white py-2 px-5 rounded mb-4" :disabled="form.processing">
                            <span v-if="form.processing">Please wait...</span>
                            <span v-else>Update</span>
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </FrontendLayout>
</template>
<script setup>
import FrontendLayout from '@/Layouts/FrontendLayout.vue';
import { Head, Link, useForm } from '@inertiajs/vue3';
const props = defineProps({
    errors:Object,
    product:Object
});
const form = useForm({
    name: props.product.name,
    price: props.product.price,
});

const updateProduct = () => {
    const res = form.put(route('products.update',props.product.id));
    if(res){
        form.reset();
    }
};
</script>
