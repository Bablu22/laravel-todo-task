<script setup>
import { Link, useForm } from '@inertiajs/vue3';
import { defineProps } from 'vue';

const props = defineProps({
    todos: {
        type: Array,
        required: true,
    },
});

const hasTodos = props.todos.length > 0;
const form = useForm({
    todo_id: null,
});

const updateStatus = (todo) => {
    form.todo_id = todo.id;
    form.patch(route('todos.status', todo.id));
};

</script>

<template>
    <div class="container p-8 mx-auto">
        <div class="w-full overflow-x-auto">
            <table class="min-w-full overflow-hidden border rounded-lg">
                <thead class="text-white bg-gradient-to-r from-blue-500 to-purple-600">
                    <tr>
                        <th class="px-6 py-3 text-left">Title</th>
                        <th class="px-6 py-3 text-left">Status</th>
                        <th class="px-6 py-3 text-left">Change Status</th>
                        <th class="px-6 py-3 text-center">Actions</th>
                    </tr>
                </thead>
                <tbody class="bg-white">
                    <tr v-for="todo in todos" :key="todo.id" class="hover:bg-gray-100">
                        <td class="px-6 py-4 border-b">{{ todo.title }}</td>
                        <td class="px-6 py-4 border-b">
    <span :class="[{'text-green-600': todo.completed, 'text-red-600': !todo.completed}, 'font-medium']">
        {{ todo.completed ? 'Completed' : 'Pending' }}
    </span>
</td>


                        <td class="px-6 py-4 border-b">
                            <label class="relative inline-flex items-center cursor-pointer">
                                <input
                                    type="checkbox"
                                    class="sr-only peer"
                                    :checked="todo.completed"
                                    @change="updateStatus(todo)"
                                >
                                <div class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600"></div>
                                <span class="ml-3 text-sm font-medium text-gray-900 dark:text-gray-300">{{ todo.completed ? 'Make Incomplete' :"Make Complete"  }}</span>
                            </label>
                        </td>

                        <td class="px-6 py-4 text-center border-b">
                            <div class="flex justify-center space-x-4">
                                <Link :href="route('todos.show', todo.id)" class="text-blue-500 transition duration-300 transform hover:underline hover:scale-110">Show</Link>
                                <Link :href="route('todos.edit', todo.id)" class="text-green-500 transition duration-300 transform hover:underline hover:scale-110">Edit</Link>
                                <Link :href="route('todos.destroy', todo.id)" method="delete" as="button" class="text-red-500 transition duration-300 transform hover:underline hover:scale-110">Delete</Link>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
            <!-- Display message when no todos -->
            <div v-if="!hasTodos" class="mt-4 text-center text-gray-500">
                No todos available.
            </div>
        </div>
    </div>
</template>
