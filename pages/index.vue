<script setup>
const {data:posts} = await useAsyncData('latest-posts', () =>
    queryContent('/blog')
    .sort({data: 1})
    .limit(3)
    .find()
)


const services = [
    {
        title: 'App Development',
        icon: 'material-symbols:laptop-chromebook-outline',
        description: 'Bring your app ideas to life, from concept to launch, with expertise in native, hybrid, and web development',
    },
    {
        title: 'Responsive Web Design',
        icon: 'material-symbols:responsive-layout',
        description: 'Build seamless online experiences that connect with users and drive conversions across desktop, mobile, and tablets',
    },
    {
        title: 'Consulting',
        icon: 'solar:users-group-two-rounded-bold',
        description: 'Unlock the full potential of your digital initiatives with bespoke consulting tailored to your business needs',
    },
    {
        title: 'Freelance',
        icon: 'simple-icons:freelancer',
        description: 'Bring my passion and agility to your project, delivering exceptional results with a flexible and collaborative approach',
    }
];
</script>

<template>
    <section>
        <h1 class="text-5xl font-bold mt-20">👋Hello, I'm Stefan Anevski!</h1>
        <p class="text-base text-gray-900 p-2 italic">Software Engineer at One inside</p>
    </section>
    <section class="flex flex-col md:flex-row">
        <div class="md:w-3/4">
            <h2 class="text-3xl font-bold mt-8">My Story</h2>
            <p class="text-lg py-2">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum aut culpa eius odio assumenda fugit autem, mollitia suscipit totam eaque, dolorum cum reiciendis natus maxime rem, modi hic? Quas, vel?
            </p>
            <p class="text-lg py-2">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum aut culpa eius odio assumenda fugit autem, mollitia suscipit totam eaque, dolorum cum reiciendis natus maxime rem, modi hic? Quas, vel?
            </p>
            <p class="text-lg py-2">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum aut culpa eius odio assumenda fugit autem, mollitia suscipit totam eaque, dolorum cum reiciendis natus maxime rem, modi hic? Quas, vel?
            </p>
        </div>
        <img src="~/assets/images/me.jpg" alt="picture-of-me" class="w-1/2 md:max-w-sm p-8 mx-auto rounded-full">
    </section>
    <section class="mb-20">
        <h2 class="text-3xl font-bold mt-8">Latest Blog Posts</h2>
        <div class="grid md:grid-cols-3 pt-8 gap-10">
            <Post :posts="posts" />
        </div>
    </section>
    <section class="mb-20">
        <h2 class="text-3xl font-bold mt-8">Services</h2>
        <div class="grid md:grid-cols-3 pt-8 gap-10">
            <Service :services="services" />
        </div>
    </section>
</template>
