<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';
import { defineProps } from 'vue';
import { Link } from '@inertiajs/vue3';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import SecondaryButton from '@/Components/SecondaryButton.vue';
import dangerButton from '@/Components/DangerButton.vue';


const props = defineProps({
  todo: {
    type: Object,
    required: true,
  },
});


</script>


<template>
    <Head title="Todo Details" />
    <AuthenticatedLayout>
      <template #header>
        <h2 class="text-xl font-semibold leading-tight text-gray-800">{{ todo.title }}</h2>
      </template>

      <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
          <div class="p-8 overflow-hidden bg-white shadow-sm sm:rounded-lg">
            <h3 class="mb-4 text-lg font-semibold">TODO Details</h3>
            <div class="mb-4">
              <strong>Title:</strong> {{ todo.title }}
            </div>
            <div class="mb-4">
              <strong>Status:</strong>
              <span :class="{'text-green-600': todo.completed, 'text-red-600': !todo.completed}">
                {{ todo.completed ? 'Completed' : 'Pending' }}
              </span>
            </div>
            <div class="mb-4">
              <strong>Description:</strong> {{ todo.description }}
            </div>
            <div class="flex items-center space-x-4">
              <PrimaryButton>
                <Link :href="route('dashboard')">Back to List</Link>
              </PrimaryButton>

              <secondary-button>
                <Link :href="route('todos.edit', todo.id)">Edit</Link>
              </secondary-button>

              <danger-button>
                <Link :href="route('todos.destroy', todo.id)" method="delete" as="button">Delete</Link>
              </danger-button>

            </div>
          </div>
        </div>
      </div>
    </AuthenticatedLayout>
  </template>



