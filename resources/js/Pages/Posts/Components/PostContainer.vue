<template>
  <div
    class="w-2/3 h-auto px-4 py-2 bg-slate-400 rounded-md shadow-md mb-8 mx-auto"
  >
    <h1 class="text-xl font-extrabold text-left underline underline-offset-2">
      {{ props.title }}
    </h1>

    <p class="text-base mb-4">{{ props.description }}</p>
    <div
      class="flex justify-between items-center text-xs text-white font-extralight"
    >
      <h3>
        {{ months[props.postDate.getMonth()] }}-{{ props.postDate.getDate() }} |
        {{ props.postDate.getHours() }}:{{ props.postDate.getMinutes() }}
      </h3>
      <a
        :href="
          route('user.show', {
            id: props.userId,
          })
        "
        class="hover:scale-110 transition-transform duration-75"
      >
        {{ props.userName }}
      </a>
    </div>
  </div>
</template>

<script setup lang="ts">
interface post {
  title: string;
  description: string;
  postDate: Date;
  userName: string;
  userId: number;
}

const months = [
  "Jan",
  "Febr",
  "Mar",
  "Apr",
  "May",
  "Jun",
  "Jul",
  "Aug",
  "Sep",
  "Oct",
  "Nov",
  "Dec",
];

const props = defineProps<post>();
</script>

<style>
</style>