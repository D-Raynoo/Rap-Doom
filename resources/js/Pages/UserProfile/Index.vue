<template>
  <div
    class="w-full h-screen m-4 rounded-md bg-slate-500 shadow-xl flex items-center justify-center"
  >
    <div class="px-4 py-2 bg-slate-200 rounded-md shadow-2xl">
      <h1 class="text-2xl">Full Name: {{ props.user[0].name }}</h1>
      <h3 class="text-base">My E-Mail: {{ props.user[0].email }}</h3>
      <h3>Joined Us At: {{ props.user[0].created_at }}</h3>
    </div>
  </div>
</template>
<script setup lang="ts">
interface user {
  user: Array<{
    name: string;
    email: string;
    created_at: string;
  }>;
}

const props = defineProps<user>();
</script>
<style>
</style>