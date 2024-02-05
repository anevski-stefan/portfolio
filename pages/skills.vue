<script setup>
const skills = [
  {
    name: 'Html',
    icon: 'i-devicon:html5',
    filled: '100%'
  },
  {
    name: 'Css',
    icon: 'i-vscode-icons:file-type-css',
    filled: '100%'
  },
  {
    name: 'JavaScript',
    icon: 'i-logos:javascript',
    filled: '100%'
  },
  {
    name: 'React',
    icon: 'i-logos:react',
    filled: '100%'
  },
  {
    name: 'Next JS',
    icon: 'i-skill-icons:nextjs-light',
    filled: '100%'
  },
  {
    name: 'Solid JS',
    icon: 'i-skill-icons:solidjs-light',
    filled: '100%'
  },
  {
    name: 'Java',
    icon: 'i-devicon:java-wordmark',
    filled: '100%'
  },
  {
    name: 'Django',
    icon: 'i-vscode-icons:file-type-django',
    filled: '100%'
  },
  {
    name: 'SpringBoot',
    icon: 'i-simple-icons:springboot',
    filled: '100%'
  },
  {
    name: 'PostgreSQL',
    icon: 'i-logos:postgresql',
    filled: '100%'
  },
  {
    name: 'MySQL',
    icon: 'i-skill-icons:mysql-dark',
    filled: '100%'
  },
  {
    name: 'Php',
    icon: 'i-devicon:php',
    filled: '100%'
  }
];
</script>
<template>
  <div class="max-w-4xl mx-auto p-8">
    <h1 class="text-3xl font-bold mb-8 text-center">Skills</h1>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
      <Skill :skills="skills"/>
    </div>
  </div>
</template>

