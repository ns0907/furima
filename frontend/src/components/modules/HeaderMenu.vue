<template>
  <header id="header">
    <nav class="navbar navbar-expand-lg navbar-light bg-body-tertiary">
      <div class="container-fluid">
        <a class="navbar-brand" href="#" id="header-logo"><img src="@/assets/img/logo.png" /></a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#Navber">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-end" id="Navber">
          <div class="col-5">
            <form class="d-flex" role="search">
              <input
                type="search"
                class="form-control me-2"
                placeholder="検索..."
                aria-label="検索..."
              />
              <button type="submit" class="btn btn-outline-success flex-shrink-0">検索</button>
            </form>
          </div>
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link" href="https://github.com/ns0907/furima/blob/main/README.md"
                >Read me</a
              >
            </li>
            <li class="nav-item">
              <a
                class="nav-link"
                href="#"
                data-toggle="modal"
                data-target="#loginModal"
                v-if="!store.isLogin"
                >ログイン</a
              >
              <a class="nav-link" href="#" @click="logout()" v-else
                >ログアウト</a
              >
            </li>
            <li class="nav-item">
              <a
                class="nav-link"
                href="#"
                data-toggle="modal"
                data-target="#registModal"
                v-if="!store.isLogin"
                >会員登録</a
              >
              <a class="nav-link" href="mypage" v-else>マイページ</a>
            </li>
            <!-- <li class="nav-item dropdown">
              <a
                href="#"
                class="nav-link dropdown-toggle"
                role="button"
                data-toggle="dropdown"
                aria-expanded="false"
              >
                ドロップダウン
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">メニュー1</a></li>
                <li><a class="dropdown-item" href="#">メニュー2</a></li>
                <li><hr class="dropdown-divider" /></li>
                <li><a class="dropdown-item" href="#">その他</a></li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled">無効</a>
            </li> -->
          </ul>
        </div>
        <!-- /.navbar-collapse -->
      </div>
      <!-- /.container-fluid -->
    </nav>
  </header>
  <LoginModal></LoginModal>
  <RegistModal></RegistModal>
</template>

<script>
import LoginModal from '@/components/modals/LoginModal';
import RegistModal from '@/components/modals/RegistModal';
import { loginStore } from '@/stores/loginStore';
import LoginHelper from '@/functions/LoginHelper';
export default {
  name: 'HeaderMenuComponent',
  components: { LoginModal, RegistModal },
  setup() {
    const store = loginStore();
    const {logout} = LoginHelper();
    return { store, logout };
  },
};
</script>

<style lang="scss">
@import '@/assets/common/scss/_common.scss';
#header {
  border-bottom: 2px solid lightgray;

  &-logo img {
    width: 150px;
  }

  &-search {
    width: 400px;
    height: auto;
  }
}
</style>
