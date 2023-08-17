<script setup>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import { Head, usePage } from "@inertiajs/vue3";
import Todos from "@/Components/Todos.vue";
import { computed } from "vue";

defineProps({
    todos: {
        type: Object,
        required: true,
    },
});
const page = usePage();
let flashSuccess = page.props.flash ? page.props.flash.success : null;

</script>

<template>
  <Head title="Dashboard" />

  <AuthenticatedLayout>
    <template #header>
      <h2 class="text-xl font-semibold leading-tight text-gray-800">
        Your All Todos
      </h2>
    </template>

    <div class="py-12">
      <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
        <div v-if="flashSuccess" class="success">
                <div class="flex p-4 mb-4 text-sm text-green-700 bg-green-100 rounded-lg" role="alert">
                    <svg class="inline w-5 h-5 mr-3" fill="currentColor" viewBox="0 0 20 20"
                         xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                              d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                              clip-rule="evenodd"></path>
                    </svg>
                    <div>
                        <span class="font-medium">Success!</span> {{ flashSuccess }}
                    </div>
                </div>
            </div>
        <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">

          <Todos :todos="todos.data" />
        </div>
      </div>
    </div>
  </AuthenticatedLayout>
</template>
