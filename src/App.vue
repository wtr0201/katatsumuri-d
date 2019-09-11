<template>
  <div id="app">
    <Header></Header>
    <div class="content">
      <NavBar></NavBar>
      <div id="wrapper">
        <Effect></Effect>
        <Points></Points>
        <Share></Share>
        <News></News>
        <Donate></Donate>
        <Approval></Approval>
        <Distribution></Distribution>
        <Contact></Contact>
      </div>
      <Footer></Footer>
    </div>
  </div>
</template>

<script>
    import Approval     from './components/Approval'
    import Contact      from './components/Contact'
    import Distribution from './components/Distribution'
    import Donate       from './components/Donate'
    import Effect       from './components/Effect'
    import Footer       from './components/Footer'
    import Header       from './components/Header'
    import NavBar       from './components/NavBar'
    import News         from './components/News'
    import Points       from './components/Points'
    import Share        from './components/Share'

export default {
    name: 'app',
    components: {
        Approval,
        Contact,
        Distribution,
        Effect,
        Footer,
        Header,
        NavBar,
        Donate,
        News,
        Points,
        Share
    }
}
</script>

<style lang="scss">
  body {
    font-family: "小塚ゴシック Pro", "ヒラギノ角ゴ Pro W3", メイリオ, Osaka, Arial, Verdana, "ＭＳ Ｐゴシック", sans-serif;
    background: #009d41 center fixed;
    background-size: contain;
  }

  html,
  body,
  div#app {
    height: 100%;
    width: 100%;
    margin: 0;
    color: white
  }

  a {
    color: white;
    text-decoration: none
  }

  h2 {
    padding-top: 0;
    text-align: center
  }

  #wrapper {
    max-width: 850px;
    margin: auto
  }

  .center {
    text-align: center;
  }

  .logo {
    width: 100%;
    height: 35%;
    max-height: 450px;
    margin: auto;
    display: inline-block;
    img {
      width: 100%;
      max-width: 600px;
      height: auto;
      max-height: 450px
    }
  }

  @media screen and (max-width: 879px) {
    #wrapper {
      padding: 0 1em
    }
  }

  @media screen and (max-width: 339px) {
    body {
      font-size: small;
    }
    #wrapper {
      padding: 0 1em;
    }
  }

</style>
