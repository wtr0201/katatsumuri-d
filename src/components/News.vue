<template>
    <div id="news">
        <h2>ニュースリリース</h2>
        <hr>
        <ul class="detail">
            <li v-for="(col, index) in news" :key="index">
                <p>
                    <a class="accdetail" :class="{ open:isset(index) }" @click="toggle(index)">{{ col.title }}({{ col.date }})</a>
                </p>
                <div class="detail-column" :class="{ open:isset(index) }">
                    <div class="message">
                        <p v-for="(row, colIndex) in col.text" :key="colIndex" v-html="row"></p>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</template>

<script>
    import news from '../assets/news'
    export default {
        name: 'News',
        data: function() {
            return {
                news: news.reverse(),
                isOpen: []
            }
        },
        methods: {
            toggle: function (index) {
                let arrayIndex = this.isOpen.indexOf(index)
                if (arrayIndex >= 0){
                    this.isOpen.splice(arrayIndex, 1)
                } else {
                    this.isOpen.push(index)
                }
            },
            isset: function(index) {
                return this.isOpen.indexOf(index) >= 0
            }
        }
    }
</script>

<style lang="scss">
    .detail {
        margin: 1.5em 0 0;
        padding: 12px 18px;
        border: 2px solid rgba(0, 0, 0, 0.1);
        li {
            margin:     0;
            padding:    0;
            list-style: none;
            p {
                margin:     0;
                padding:    0;
                list-style: none;
                a {
                    position: relative;
                    top: 0;
                    left: 0;
                    display: block;
                    padding: 8px 0;
                    font-weight: 700;
                    text-decoration: none;
                    &:after {
                        color: #333;
                        background: rgba(0, 0, 255, 0.1);
                        content: "詳しく見る";
                        font-size: .85em;
                        height: 17px;
                        line-height: 17px;
                        padding: 4px 8px;
                        margin: 0 8px
                    }
                    &.open:after {
                        content: "閉じる"
                    }
                }

            }

            .detail-column {
                margin: 0;
                padding: 0;
                border-bottom: 1px solid rgba(0, 0, 0, 0.1);
                background: rgba(0, 0,0,.05);
                border-radius: 15px;
                max-height: 0;
                overflow: hidden;
                transition: all .6s;
                .message {
                    padding: 1em;
                    p {
                        min-height: 1.5rem;
                    }
                }
                &.open {
                    max-height: 5000px;
                }
            }
        }
    }
</style>