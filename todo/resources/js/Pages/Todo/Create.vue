<template>
    <AuthenticatedLayout>
        <Head title="Create Todo">

        </Head>
      <template #header>
        <h2 class="text-xl font-semibold leading-tight text-gray-800">Create a new todo</h2>
      </template>

      <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
          <div class="p-8 overflow-hidden bg-white shadow-sm sm:rounded-lg">
            <h3 class="mb-4 text-lg font-semibold">New TODO</h3>
            <form @submit.prevent="submitForm" >
              <div class="mb-4">
                <label for="title" class="block text-sm font-medium text-gray-700">Title</label>
                <input v-model="form.title" type="text" id="title" name="title" placeholder="Title" class="block w-full mt-1 border-gray-300 rounded-md focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"  />
                <p class="mt-1 text-xs text-red-500" v-if="form.errors.title">{{ form.errors.title }}</p>

              </div>
              <div class="mb-4">
                <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
                <textarea placeholder="Description" v-model="form.description" id="description" name="description" rows="3" class="block w-full mt-1 border-gray-300 rounded-md focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"></textarea>
                <p class="mt-1 text-xs text-red-500" v-if="form.errors.description">{{ form.errors.description }}</p>

              </div>
              <div>
                <button type="submit" class="px-4 py-2 text-white bg-green-500 rounded hover:bg-green-600">Create</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </AuthenticatedLayout>
  </template>

<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';
import { useForm } from '@inertiajs/vue3';

const form = useForm({
    title: '',
    description: '',
});

const submitForm = () => form.post(route('todos.store'), {
    onSuccess: () => {
        form.reset();
    },

});
</script>

