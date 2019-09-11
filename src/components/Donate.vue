<template>
    <div id="donate">
        <h2>賛同金 受け付け</h2>
        <hr>
        <p>今後の継続的な活動の為に、賛同金も受け付けています。ご協力の程よろしくお願い致します。</p>
        <div class="info">
            <h3>賛同金振り込み口座</h3>
            <p>京都銀行 城陽支店（普）5101621</p>
            <p>京都サポ連かたつむり大作戦 事務局長 市野雅樹</p>
            <p>（キョウトサポレンカタツムリダイサクセン ジムキョクチョウ イチノマサキ）</p>
        </div>
    </div>
</template>

<script>
    export default {
        name: 'Donate'
    }
</script>

<style>
    @media screen and (max-width:700px) {
        #donate {
            margin-top: 60px
        }
    }

    @media screen and (max-width:339px) {
        #donate {
            margin-top: 90px
        }
    }

    #donate > .info {
        border: 2px solid rgba(0, 0, 0, 0.1);
        padding: 0 2em;
    }
</style>