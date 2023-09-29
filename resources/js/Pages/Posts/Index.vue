<template>
  <Head title="Posts" />
  <AuthenticatedLayout>
    <template #header>
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">Posts</h2>
    </template>
    <div>Wcha Chayeb !</div>
    <PostContainer
      v-for="post in props.posts"
      :key="post.id"
      :title="post.title"
      :description="post.description"
      :postDate="new Date(post.created_at)"
      :userName="post.user.name"
      :userId="post.user.id"
    />
  </AuthenticatedLayout>
</template>
<script setup lang="ts">
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import PostContainer from "./Components/PostContainer.vue";
import { Head } from "@inertiajs/vue3";

const props = defineProps<{
  posts: Array<Object>;
}>();
</script>
<style>
</style>