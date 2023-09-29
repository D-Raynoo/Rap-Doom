<template>
  <AuthenticatedLayout>
    <div
      class="w-full h-screen rounded-md bg-slate-500 shadow-md flex items-center justify-center"
    >
      <form
        class="w-1/3 bg-slate-300 rounded-md shadow-2xl py-6 px-3"
        @submit.prevent="submit"
      >
        <div class="w-full">
          <div class="mb-2 w-full">
            <label
              for="title"
              class="block mb-2 text-sm font-medium text-slate-900"
              >Title</label
            >
            <input
              type="text"
              id="title"
              name="title"
              class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
              placeholder="Title"
              v-model="post.title"
            />
          </div>
          <div class="mb-2 w-full">
            <label
              for="description"
              class="block mb-2 text-sm font-medium text-slate-900"
              >Description</label
            >
            <textarea
              id="description"
              name="description"
              rows="4"
              class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500"
              placeholder="Write your description here..."
              v-model="post.description"
            ></textarea>
          </div>
        </div>
        <button
          type="submit"
          class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
        >
          POST
        </button>
      </form>
    </div>
  </AuthenticatedLayout>
</template>

<script setup lang="ts">
import type { Ref } from "vue";
import { ref } from "vue";
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import { router } from "@inertiajs/vue3";

interface Post {
  title: string;
  description: string;
}

const post: Ref<Post> = ref({
  title: "",
  description: "",
});

function submit() {
  router.post("/new-post/post", post.value);
}
</script>

<style>
</style>