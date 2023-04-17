<template>
  <nav class="col-md-3 d-none d-md-block sidebar">
    <div class="sidebar-sticky">
      <ul class="nav flex-column">
        <li class="nav-item">
          <a class="nav-link active" href="/mypage/user/profile/"> プロフィール </a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="#"> メールアドレス・パスワード（comming soon） </a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="#"> 住所（comming soon） </a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="/mypage/goodlists/"> いいねした商品（comming soon）</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="#"> 閲覧履歴（comming soon）</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="#"> 出品した商品（comming soon）</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="#"> 購入した商品（comming soon）</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="#"> 下書き一覧（comming soon）</a>
        </li>
      </ul>
    </div>
  </nav>
</template>

<script>
export default {
  name: 'SidebarComponent',
  props: {
    msg: String,
  },
};
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style lang="scss" scoped>
.nav-item {
  &:first-child {
    margin-top: 1rem;
  }
  margin-bottom: 1rem;
}

h3 {
  margin: 40px 0 0;
}
ul {
  list-style-type: none;
  padding: 0;
}
li {
  display: inline-block;
  margin: 0 10px;
}
a {
  color: #42b983;
}
</style>
