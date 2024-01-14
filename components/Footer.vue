<script setup>
    const links = [
        { name: 'Github', href:'https://github.com/anevski-stefan', icon: 'mdi:github' },
        { name: 'Twitter', href:'https://twitter.com/StefanAnevski2', icon: 'mdi:twitter-circle' },
        { name: 'Facebook', href:'https://www.facebook.com/anevskis/', icon: 'ic:baseline-facebook' },
        { name: 'Linkedin', href:'https://www.linkedin.com/in/stefan-anevski/', icon: 'entypo-social:linkedin-with-circle' },
        { name: 'Instagram', href:'https://www.instagram.com/stefananevski/', icon: 'mdi:instagram' }
    ]
</script>

<template>
    <footer class="bg-gray-800">
        <section class="mx-auto max-w-7xl px-2 sm:px-4 lg:py-6 text-gray-300 flex flex-row">
            <p class="flex-1">&copy; Stefan Anevski 2024. All Rights Reserved</p>
            <div class="flex flex-row justify-center gap-4 mb-4 mt-2">
                <a v-for="link in links" :key="link.name" :href="link.href">
                    <Icon :name="link.icon" size="1.5rem" class="text-gray-300"></Icon>
                </a>
            </div>
        </section>
    </footer>
</template>

