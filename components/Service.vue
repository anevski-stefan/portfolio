<script setup>
    const props = defineProps(['services'])
</script>

<template>
    <div v-for="service in props.services" class="bg-white rounded-lg shadow-md overflow-hidden">
        <div class="p-6">
            <Icon :name="service.icon" size="3rem"/>
            <h2 class="text-xl font-bold mb-2">{{ service.title }}</h2>
            <p class="text-gray-700 mb-4">{{ service.description }}</p>
        </div>
    </div>
</template>