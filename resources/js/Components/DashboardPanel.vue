<template>
    <div class="bg-white rounded-lg shadow-md px-3 py-2">
        <div class="text-indigo-500 text-lg py-1 border-b">
            <slot name="title" />
        </div>
        <div class="h-56 overflow-auto text-gray-600 pt-1">
            <div v-if="items.length">
                <slot name="content" />
            </div>
            <div v-else class="text-sm text-center text-gray-400 font-semibold mt-10 flex flex-col">
                <span>No hay elemntos para mostrar</span>
                <i class="fa-regular fa-face-grin-beam-sweat text-5xl text-gray-300 mt-3"></i>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    props:{
        items: Array,
    }
}
</script>
