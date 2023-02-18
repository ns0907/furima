<template>
  <div class="item container-xl">
    <div class="item-row row mt-3 mb-3">
      <div class="item-row-col item-row-col col-4">
        <div class="card">
          <div class="square">
            <img src="@/assets/img/img01.jpg" class="card-img-top" />
          </div>
          <div class="card-body d-none d-md-block">
            <h5 class="card-title">カードのタイトル</h5>
            <p class="card-text">
              /url 以下のテキストを追加のコンテンツへの自然な導入としてサポート。カードのコンテンツ
              カードのコンテンツ
            </p>
            <a href="#" class="btn btn-primary">ボタン</a>
          </div>
        </div>
      </div>
      <div class="item-row-col col-4">
        <div class="card">
          <div class="square">
            <img src="@/assets/img/img01.jpg" class="card-img-top" />
          </div>
          <div class="card-body d-none d-md-block">
            <h5 class="card-title">カードのタイトル</h5>
            <p class="card-text">
              /url 以下のテキストを追加のコンテンツへの自然な導入としてサポート。カードのコンテンツ
              カードのコンテンツ
            </p>
            <a href="#" class="btn btn-primary">ボタン</a>
          </div>
        </div>
      </div>
      <div class="item-row-col col-4">
        <div class="card">
          <div class="square">
            <img src="@/assets/img/img01.jpg" class="card-img-top" />
          </div>
          <div class="card-body d-none d-md-block">
            <h5 class="card-title">カードのタイトル</h5>
            <p class="card-text">
              /url 以下のテキストを追加のコンテンツへの自然な導入としてサポート。カードのコンテンツ
              カードのコンテンツ
            </p>
            <a href="#" class="btn btn-primary">ボタン</a>
          </div>
        </div>
      </div>
    </div>
    <div class="row mt-3 mb-3">
      <div class="item-row-col col-4">
        <div class="card">
          <div class="square">
            <img src="@/assets/img/img01.jpg" class="card-img-top" />
          </div>
          <div class="card-body d-none d-md-block">
            <h5 class="card-title">カードのタイトル</h5>
            <p class="card-text">
              /url 以下のテキストを追加のコンテンツへの自然な導入としてサポート。カードのコンテンツ
              カードのコンテンツ
            </p>
            <a href="#" class="btn btn-primary">ボタン</a>
          </div>
        </div>
      </div>
      <div class="item-row-col col-4">
        <div class="card">
          <div class="square">
            <img src="@/assets/img/img01.jpg" class="card-img-top" />
          </div>
          <div class="card-body d-none d-md-block">
            <h5 class="card-title">カードのタイトル</h5>
            <p class="card-text">
              /url 以下のテキストを追加のコンテンツへの自然な導入としてサポート。カードのコンテンツ
              カードのコンテンツ
            </p>
            <a href="#" class="btn btn-primary">ボタン</a>
          </div>
        </div>
      </div>
      <div class="item-row-col col-4">
        <div class="card">
          <div class="square">
            <img src="@/assets/img/img01.jpg" class="card-img-top" />
          </div>
          <div class="card-body d-none d-md-block">
            <h5 class="card-title">カードのタイトル</h5>
            <p class="card-text">
              /url 以下のテキストを追加のコンテンツへの自然な導入としてサポート。カードのコンテンツ
              カードのコンテンツ
            </p>
            <a href="#" class="btn btn-primary">ボタン</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: 'HelloWorld',
  props: {
    msg: String,
  },
};
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style lang="scss" scoped>
.square {
  position: relative;
  overflow: hidden;
  padding-bottom: 100%;
}
.square img {
  position: absolute;
}

.item-row-col {
  padding-left: 2px;
  padding-right: 2px;
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
