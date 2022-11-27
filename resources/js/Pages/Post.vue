<script setup>
import { Link } from '@inertiajs/inertia-vue3'
import AdminLayout from '@/Layouts/AdminLayout.vue'

defineProps({
    posts: Object,
})
</script>

<template>
    <AdminLayout title="Posts">
        <template v-slot:topButton>
            <Link :href="route('post.new')" class="btn btn-sm btn-primary">New</Link>
        </template>

        <div class="overflow-x-auto">
            <table class="table table-zebra w-full">
                <thead>
                    <tr>
                        <th><input type="checkbox" class="checkbox" /></th>
                        <th>ID</th>
                        <th>Title</th>
                        <th>Slug</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr v-for="post in posts" :key="post.id">
                        <th><input type="checkbox" class="checkbox" /></th>
                        <th>{{ post.id }}</th>
                        <td>{{ post.title }}</td>
                        <td><span class="text-slate-400">{{ post.slug }}</span></td>
                        <td><Link class="btn btn-sm btn-primary" :href="route('post.edit', post.id)">Edit</Link></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </AdminLayout>
</template>
