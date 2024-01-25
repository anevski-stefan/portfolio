<template>
    <div class="contact-form flex flex-col items-center justify-center w-full max-w-md mx-auto p-8 my-16 rounded-lg shadow-md bg-gray-100">
      <h1 class="text-2xl font-bold mb-8">Contact Me</h1>
      <form @submit.prevent="submitForm">
        <label for="name" class="mb-2 text-lg block">Name:</label>
        <input v-model="formData.name" type="text" id="name" class="border p-2 rounded-md w-full focus:ring focus:ring-blue-500 focus:ring-opacity-50" required>
        <label for="message" class="mb-2 text-lg block mt-4">Message:</label>
        <textarea v-model="formData.message" id="message" class="border p-2 rounded-md w-full h-32 focus:ring focus:ring-blue-500 focus:ring-opacity-50" required></textarea>
        <button type="submit" class="mt-4 px-4 py-2 rounded-md bg-blue-500 text-white font-bold hover:bg-blue-600 focus:outline-none">Send Message</button>
      </form>
    </div>
  </template>
  
  <script>
  export default {
    data() {
      return {
        formData: {
          name: '',
          message: ''
        }
      };
    },
    methods: {
      submitForm() {
        const mailtoLink = `mailto:anevskistefan11@gmail.com?subject=Contact Form Submission&body=Name: ${this.formData.name}%0AMessage: ${this.formData.message}`;
        window.location.href = mailtoLink;
  
        this.resetForm();
      },
      resetForm() {
        this.formData = {
          name: '',
          email: '',
          message: ''
        };
      }
    }
  };
  </script>
  