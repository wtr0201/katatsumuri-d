<template>
    <div id="distribution">
        <h2>ステッカー配布場所<span style="font-size:small;">(敬称略)</span></h2>
        <hr>
        <ul>
            <li v-for="(distribution, index) in distributions" :key="index">
                <a :href="distribution.url" target="_blank">{{ distribution.name }}</a>
            </li>
        </ul>
        <p style="font-size:smaller">※配布が終了している場合もございます。予めご了承ください。</p>
    </div>
</template>

<script>
    import distributions from '../assets/distributions'

    export default {
        name: 'Distribution',
        data: function () {
            return {
                distributions: distributions
            }
        }
    }
</script>

<style lang="scss">
    #distribution a {
        text-decoration: underline
    }

    @media screen and (max-width: 700px) {
        #distribution ul {
            padding: 0;
            list-style: none;
            li {
                margin: 1em 0 1em 0
            }
        }
    }

    @media screen and (max-width: 339px) {
        #distribution > ul {
            padding: 0;
        }
    }
</style>