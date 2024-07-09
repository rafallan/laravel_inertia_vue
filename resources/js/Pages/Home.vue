<script setup>

import PaginationLinks from './Components/PaginationLinks.vue';


defineProps({
    users: Object,
});

// Format Date
const getDate = (date) =>
    new Date(date).toLocaleDateString("en-us", {
        year: "numeric",
        month: "long",
        day: "numeric",
    })

</script>

<template>

    <Head :title="` | ${$page.component}`" />

    <div>
        <table>
            <thead>
                <tr class="bg-slate-300">
                    <th>Avatar</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Registration Date</th>
                </tr>
            </thead>

            <tbody>
                <tr v-for="user in users.data" :key="user.id">
                    <td><img :src="user.avatar ? ('storage/' + user.avatar) : 'storage/avatars/default.png'"
                            class="avatar" alt=""></td>
                    <td>{{ user.name }}</td>
                    <td>{{ user.email }}</td>
                    <td>{{ getDate(user.created_at) }}</td>
                </tr>
            </tbody>
        </table>
        <!-- Pagination Links -->
        <!-- <div>
            <Link v-for="link in users.links" :key="link.label" v-html="link.label" :href="link.url" class="p-1 mx-1"
                :class="{ 'text-slate-300': !link.url, 'text-blue-500 font-medium': link.active }">
            </Link>

            <p class="text-slate-600 text-sm">
                showing {{ users.from }} to {{ users.to }} of {{ users.total }} results
            </p>
        </div> -->

        <div>
            <PaginationLinks :paginator="users" />
        </div>
    </div>

</template>
