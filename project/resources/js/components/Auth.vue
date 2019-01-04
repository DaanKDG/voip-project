<template>
    <div class="credentials">
        <form id="auth">
            <input id="username" placeholder="username">
            <input id="password" type="password" placeholder="password">
            <button id="loginUser">Login</button>
            <button id="createUser">Signup</button>
        </form>

        <div id="call" style="display:none;">       
            current user: <span id="username"></span>

            <form>
                <input id="callUsername" placeholder="username"><br>
                <button id="call">Call</button>
                <button id="hangup">Hangup</button>
                <button id="answer">Answer</button>

                <audio id="incoming" autoplay></audio>
                <div id="callLog"></div>
            </form>
        </div>

        <div class="error"></div>
       
    </div>
</template>
<script>

    
</script>
