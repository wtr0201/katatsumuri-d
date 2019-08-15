<template>
    <div id="approval">
        <h2>主な賛同団体<span style="font-size:small;">(敬称略)</span></h2>
        <hr>
        <ul>
            <li v-for="(approval, index) in approvals" :key="index">
                <a :href="approval.url" target="_blank">{{ approval.name }}</a>
            </li>
        </ul>
    </div>
</template>

<script>
    import approvals from '../assets/approvals'

    export default {
        name: 'Approval',
        data: function () {
            return {
                approvals: approvals
            }
        }
    }
</script>

<style lang="scss">
    #approval a {
        text-decoration: underline
    }

    @media screen and (max-width: 700px) {
        #approval ul {
            padding: 0;
            list-style: none;
            li {
                margin: 1em 0 1em 0
            }
        }
    }

    @media screen and (max-width: 339px) {
        #approval > ul {
            padding: 0;
        }
    }
</style>