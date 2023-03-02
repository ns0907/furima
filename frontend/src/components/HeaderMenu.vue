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
              <a class="nav-link" href="#" data-toggle="modal" data-target="#loginModal"
                >ログイン</a
              >
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">会員登録</a>
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
  <div id="overlay" v-show="showContent">
    <div id="loginContent">
      <span class="square_btn" @click="closeModal"></span>
    </div>
  </div>

  <!-- ボタン・リンククリック後に表示される画面の内容 -->
  <div
    class="modal fade"
    id="loginModal"
    tabindex="-1"
    role="dialog"
    aria-labelledby="basicModal"
    aria-hidden="true"
  >
    <div class="modal-dialog">
      <div class="modal-content p-3">
        <div class="modal-header border-0 mx-auto">
          <div class="modal-title text-center h3">ログイン</div>
        </div>
        <div class="modal-body">
          <p>メールアドレス：<input type="text" class="form-control" /></p>
          <p>パスワード：<input type="text" class="form-control" /></p>
        </div>
        <div class="modal-footer border-0">
          <button type="button" class="btn btn-primary w-100" @click="login">ログイン</button>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import { ref } from 'vue';
export default {
  name: 'HeaderMenuComponent',
  setup() {
    // data
    const showContent = ref(false);

    // methods
    const openModal = () => {
      showContent.value = true;
    };
    const closeModal = () => {
      showContent.value = false;
    };

    // computed

    // lifecycle hooks

    return { showContent, openModal, closeModal };
  },
};
</script>

<style lang="scss">
@import "@/assets/common/scss/_common.scss";
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

#overlay {
  /* 要素を重ねた時の順番 */
  z-index: 1;

  /* 画面全体を覆う設定 */
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-color: rgba(0, 0, 0, 0.5);

  /* 画面の中央に要素を表示させる設定 */
  display: flex;
  align-items: center;
  justify-content: center;
}

#loginContent {
  z-index: 2;
  width: 75%;
  padding: 3em;
  background: #fff;

  input {
    width: 100%;
  }

  // ×ボタン
  .square_btn {
    display: block;
    position: relative;
    width: 30px;
    height: 30px;
    border: 2px solid #333; /* 枠の調整 */
    background: #fff; /* ボタンの背景色 */
    float: right;
    cursor: pointer;
  }

  .square_btn::before,
  .square_btn::after {
    content: '';
    position: absolute;
    top: 50%;
    left: 50%;
    width: 3px; /* 棒の幅（太さ） */
    height: 27px; /* 棒の高さ */
    background: #333; /* バツ印の色 */
  }

  .square_btn::before {
    transform: translate(-50%, -50%) rotate(45deg);
  }

  .square_btn::after {
    transform: translate(-50%, -50%) rotate(-45deg);
  }

  @include mq(sm) {
    .modal-dialog {
      max-width: 65% !important;
    }
  }
}
</style>
