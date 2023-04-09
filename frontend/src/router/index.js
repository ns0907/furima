import { createRouter, createWebHistory } from 'vue-router'
import Top from '@/components/Top.vue'
import Mypage from '@/components/Mypage.vue';
import { loginStore } from '@/stores/loginStore';

const routes = [
  {
    path: '/',
    name: 'top',
    component: Top,
  },
  {
    path: '/mypage',
    name: 'mypage',
    component: Mypage,
    meta: { requiresAuth: true },
  },
];

const router = createRouter({
  history: createWebHistory(process.env.BASE_URL),
  routes
})

// メタフィールドrequiresAuthが要認証trueなら認証フラグ判定
router.beforeEach((to, from, next) => {
  const store = loginStore();
  if (to.matched.some((record) => record.meta.requiresAuth)) {
    // requiresAuthがtrueなら評価
    if (!store.isLogin) {
      // 未ログインならログインページへ
      next('/');
    } else {
      next(); // スルー
    }
  } else {
    next(); // スルー
  }
})

export default router
