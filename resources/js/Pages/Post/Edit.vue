<script setup>
import AdminLayout from '@/Layouts/AdminLayout.vue'
import { QuillEditor } from '@vueup/vue-quill'
import '@vueup/vue-quill/dist/vue-quill.snow.css'

defineProps({
    post: Object,
})
</script>

<template>
    <AdminLayout :title="post.title">
        <form>
            <div class="form-control w-full mb-4">
                <label class="label">
                    <span class="label-text">Title</span>
                </label>
                <input v-model="post.title" type="text" class="input input-bordered w-full" />
            </div>
            <div class="form-control w-full mb-4">
                <label class="label">
                    <span class="label-text">Meta Keywords</span>
                </label>
                <input v-model="post.meta_keywords" type="text" class="input input-bordered w-full" />
            </div>
            <div class="form-control w-full mb-4">
                <label class="label">
                    <span class="label-text">Meta Description</span>
                </label>
                <textarea v-model="post.meta_description" class="textarea textarea-bordered w-full h-24"></textarea>
            </div>
            <div class="form-control w-full mb-4">
                <label class="label">
                    <span class="label-text">Intro</span>
                </label>
                <QuillEditor v-model:content="post.intro" contentType="html" theme="snow" />
            </div>
            <div class="form-control w-full mb-4">
                <label class="label">
                    <span class="label-text">Content</span>
                </label>
                <QuillEditor v-model:content="post.content" contentType="html" theme="snow" />
            </div>
            <div class="mt-8">
                <button class="btn btn-active btn-primary" type="submit">Save</button>
                <button class="btn bg-red-600 ml-4 text-white">Delete</button>
            </div>
        </form>
    </AdminLayout>
</template>
