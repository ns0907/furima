<template>
  <div class="row">
    <Sidebar />
    <Main />
  </div>
</template>

<script>
import Sidebar from '@/components/modules/mypage/Sidebar.vue';
import Main from '@/components/modules/mypage/Main.vue';
export default {
  name: 'MypageComponent',
  components: {
    Main,
    Sidebar,
  },
  setup() {
  },
};
</script>

