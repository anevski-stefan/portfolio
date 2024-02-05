<script setup>
const props = defineProps(['skills'])
</script>


<template>
  <div v-for="skill in props.skills" class="bg-white p-4 rounded-md shadow-md mb-4 transition-transform transform-gpu hover:scale-105">
    <div class="flex items-center mb-2">
      <div class="mr-2">
        <Icon :name="skill.icon" size="1.5rem"></Icon>
      </div>
      <h2 class="text-base font-semibold">{{ skill.name }}</h2>
    </div>
    <div class="bar bg-gray-200 h-2 rounded-full w-full relative overflow-hidden mb-2">
      <div class="bar-filled bg-blue-500 h-full" :style="{ width: skill.filled }"></div>
    </div>
    <div class="flex justify-between">
      <span class="text-xs font-semibold text-gray-700">{{ skill.filled }}</span>
    </div>
  </div>
</template>
