<template>
    <Head title="Usuarios" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight flex justify-between items-center">
                Usuários <ButtonLink class="ml-4" :href="route('user.create')">Adicionar Usuário</ButtonLink>
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">
                        <table class="table-auto w-full">
                        <thead>
                        <tr>
                            <th class="px-4 py-2">Nome</th>
                            <th class="px-4 py-2">E-mail</th>
                            <th class="px-4 py-2">Papel</th>
                            <th class="px-4 py-2">Ações</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr v-for="(user, key) in users" :key="key">
                            <td class="border px-4 py-2">{{ user.name }}</td>
                            <td class="border px-4 py-2">{{ user.email }}</td>
                            <td class="border px-4 py-2">{{ user.role_id }}</td>
                            <td class="border px-4 py-2 w-16">
                                <div style="display: flex; gap: 10px;">
                                    <ButtonLink @click="editUser(user)">Editar</ButtonLink>
                                    <ButtonLink @click="deleteUser(user)">Excluir</ButtonLink>
                                </div>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>

<script>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import ButtonLink from '@/Components/ButtonLink.vue'
import { Head } from '@inertiajs/vue3';

export default {
    props: {
        users: Array
    },
    components: {
        AuthenticatedLayout,
        Head,
        ButtonLink,
    }
}
</script>

