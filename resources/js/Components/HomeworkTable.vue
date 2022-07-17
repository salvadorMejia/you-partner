<template>
  <div class="flex justify-between items-center py-1 mt-4">
    <Pagination :pagination="homeworks" />
    <InputSearch v-model="search" class="mb-2 ml-4 flex-1" />
  </div>
  <div class="overflow-x-auto text-sm">
    <table class="w-full whitespace-nowrap">
      <tbody>
        <tr
          v-for="_homework in homeworks.data"
          :key="_homework.id"
          class="focus:outline-none h-16 border border-gray-100 rounded"
        >
          <td class="">
            <div class="flex items-center pl-5">
              <p class="font-medium leading-none text-gray-700 mr-2">
                {{ _homework.title }}
              </p>
            </div>
          </td>
          <td class="pl-24">
            <div class="flex items-center">
              <i class="fa-solid fa-tag"></i>
              <p class="text-sm leading-none text-gray-600 ml-2">
                {{ _homework.school_subject.name }}
              </p>
            </div>
          </td>

          <td class="pl-5">
            <div class="flex items-center">
              <i class="fa-solid fa-comment-dots"></i>
              <p class="text-sm leading-none text-gray-600 ml-2">0</p>
            </div>
          </td>
          <td class="pl-5">
            <div class="flex items-center">
              <i class="fa-solid fa-paperclip"></i>
              <p class="text-sm leading-none text-gray-600 ml-2">
                {{ _homework.resources.length }}
              </p>
            </div>
          </td>
          <td class="pl-5">
            <div
              class="
                py-3
                px-3
                text-sm
                focus:outline-none
                leading-none
                text-red-700
                bg-red-100
                rounded
              "
            >
              Para: 01/01/2022
            </div>
          </td>
          <td class="pl-4">
            <button
              class="
                focus:ring-2 focus:ring-offset-2 focus:ring-red-300
                text-sm
                leading-none
                text-gray-600
                py-3
                px-5
                bg-gray-100
                rounded
                hover:bg-gray-200
                focus:outline-none
              "
            >
              View
            </button>
          </td>
          <td>
            <div class="relative px-5 pt-2">
              <button
                class="focus:ring-2 rounded-md focus:outline-none"
                role="button"
                aria-label="option"
              >
                <i class="fa-solid fa-ellipsis"></i>
              </button>
              <div
                class="
                  dropdown-content
                  bg-white
                  shadow
                  w-24
                  absolute
                  z-30
                  right-0
                  mr-6
                  hidden
                "
              >
                <div
                  tabindex="0"
                  class="
                    focus:outline-none focus:text-indigo-600
                    text-xs
                    w-full
                    hover:bg-indigo-700
                    py-4
                    px-4
                    cursor-pointer
                    hover:text-white
                  "
                >
                  <p>Edit</p>
                </div>
                <div
                  tabindex="0"
                  class="
                    focus:outline-none focus:text-indigo-600
                    text-xs
                    w-full
                    hover:bg-indigo-700
                    py-4
                    px-4
                    cursor-pointer
                    hover:text-white
                  "
                >
                  <p>Delete</p>
                </div>
              </div>
            </div>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
</template>

<script>
import Pagination from "@/Components/Pagination.vue";
import Input from "@/Jetstream/Input.vue";
import InputSearch from "@/Components/Common/InputSearch.vue";

export default {
  data() {
    return {
      search: "",
    };
  },
  components: {
    Pagination,
    Input,
    InputSearch,
  },
  props: {
    homeworks: Object,
  },
};
</script>