<template>
    <nav>
        <div class="navlogo">
            <a href="#" v-scroll-to="'#app'"><img src="../assets/img/logo.svg" alt="かたつむり大作戦ロゴ" ondragstart="return false;" oncontextmenu="return false;"></a>
        </div>
        <div class="navicon" :class="{active: isActive}" @click="isActive = !isActive">
            <span></span>
            <span></span>
            <span></span>
        </div>
        <ul id="menu" :class="{active: isActive}">
            <li><a href="#" v-scroll-to="'#effect'">趣旨</a></li>
            <li><a href="#" v-scroll-to="'#points'">3箇条</a></li>
            <li><a href="#" v-scroll-to="'#share'">共有する</a></li>
            <li><a href="#" v-scroll-to="'#news'">ニュース</a></li>
            <li><a href="#" v-scroll-to="'#approval'">賛同団体</a></li>
            <li><a href="#" v-scroll-to="'#distribution'">配布場所</a></li>
            <li><a href="#" v-scroll-to="'#contact'">問い合わせ先</a></li>
        </ul>
    </nav>
</template>

<script>
    export default {
        name: 'NavBar',
        data: function() {
            return {
                isActive: false
            }
        }
    }
</script>

<style lang="scss">
    nav {
        background: rgba(80, 80, 80, 1);
        margin: 0;
        height: 60px;
        width: 100%;
        text-align: right;
        position: sticky;
        top: 0;
        z-index: 1;
        ul li {
            display: inline-block;
            padding-right: 20px
        }

        .navlogo {
            margin-bottom: -60px;
            height: 60px;
            width: 120px
        }

        .navicon {
            display: none
        }

    }

    @media screen and (max-width: 700px) {
        nav {
            ul {
                transition: height .15s .6s linear;
                margin-top: 60px;
                height: 0;
                background-color: rgba(80, 80, 80, 1);
                li {
                    margin-top: 5px;
                    transform: translateY(-1200px);
                    transition: transform .01s .65s;
                    a {
                        transition: opacity .6s;
                        opacity: 0
                    }
                }

                &.active {
                    transition: height .15s linear;
                    height: 60px;
                    li {
                        transform: translateY(0);
                        transition: transform .01s;
                        a {
                            transition: opacity .6s .2s;
                            opacity: 1
                        }
                    }
                }
            }

            .navicon {
                display: block;
                float: right;
                position: absolute;
                right: 10px;
                margin-top: 10px;
                width: 42px;
                height: 42px;
                span {
                    display: block;
                    background: #fff;
                    width: 24px;
                    height: 2px;
                    position: absolute;
                    left: 9px;
                    transition: all .4s;
                    &:first-child {
                        top: 12px;
                    }
                    &:nth-child(2) {
                        margin-top: -1px;
                        top: 50%
                    }
                    &:last-child {
                        bottom: 12px
                    }
                }
                &.active span {
                    &:first-child {
                        transform: translateY(8px) rotate(45deg)
                    }
                    &:nth-child(2) {
                        opacity: 0
                    }
                    &:last-child {
                        transform: translateY(-8px) rotate(-45deg)
                    }
                }
            }
        }
    }

    @media screen and (max-width: 339px) {
        nav ul.active {
            height: 90px
        }
    }
</style>