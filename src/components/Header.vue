<template>
    <header>
        <div id="velttext">
            <div class="logo"><img class="logoimg" src="../assets/img/logo.svg" alt="かたつむり大作戦ロゴ" ondragstart="return false;" oncontextmenu="return false;"></div>
            <div class="btn"><a href="#" v-scroll-to="'#effect'">かたつむり大作戦とは？</a></div>
        </div>
    </header>
</template>

<script>
    export default {
        name: 'Header'
    }
</script>

<style>
    header {
        display: table;
        margin: 0;
        height: 100%;
        min-height: 100%;
        width: 100%;
        text-align: center
    }

    #velttext {
        display: table-cell;
        vertical-align: middle;
        text-align: center;
        margin: 0
    }

    #velttext a {
        transition: all .7s ease-in-out
    }

    .logoimg {
        -moz-user-select: none;
        -webkit-user-select: none;
        -ms-user-select: none;
        -webkit-user-drag: none
    }

    .btn {
        display: inline-block;
        width: 200px;
        padding: 10px;
        background: #fff;
        border-radius: 25px;
        margin: auto
    }

    .btn a {
        color: black
    }
</style>