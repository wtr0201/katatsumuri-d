<template>
    <div id="share" class="center">
        <h2>共有する</h2>
        <hr>
        <ul>
            <li>
                <a href="https://twitter.com/intent/tweet?url=https://katatsumuri-d.com/&amp;text=私は交通安全運動の「%20%23かたつむり大作戦！%20」に賛同します！&amp;tw_p=tweetbutton" data-slimstat-tracking="true" data-slimstat-callback="true" data-slimstat-type="0"><img src="../assets/img/twitter.svg" alt="twitter">twitter</a>
            </li>
            <li>
                <a href="https://www.facebook.com/sharer.php?src=bm&amp;u=https://katatsumuri-d.com/&amp;t=" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;" data-slimstat-tracking="true" data-slimstat-callback="true" data-slimstat-type="0"><img src="../assets/img/facebook.svg" alt="Facebook">Facebook</a>
            </li>
            <li>
                <a href="https://line.me/R/msg/text/?私は交通安全運動の「かたつむり大作戦！」に賛同します！%0Ahttps://katatsumuri-d.com/" data-slimstat-tracking="true" data-slimstat-callback="true" data-slimstat-type="0"><img src="../assets/img/LINE.svg" alt="LINE">LINE</a>
            </li>
            <li>
                <a href="mailto:?body=私は交通安全運動の「かたつむり大作戦！」に賛同します！%0Ahttps://katatsumuri-d.com/" data-slimstat-tracking="true" data-slimstat-callback="true" data-slimstat-type="0"><img src="../assets/img/mail.svg" alt="mail">mail</a>
            </li>
        </ul>
    </div>
</template>

<script>
    export default {
        name: 'Share'
    }
</script>

<style lang="scss">
    #share ul {
        margin: 0;
        padding: 0;
        li {
            display: inline-block;
            width: 20%;
            a img{
                width: 100%;
                height: auto;
                margin: 0;
                padding: 0;
            }
        }
    }
</style>