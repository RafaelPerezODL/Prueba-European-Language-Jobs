<template>
    <div id="root">
        <div class="navbar navbar navbar-dark bg-dark">
            <div class="navbar-brand">
                <router-link to="/">Prueba European Language Jobs</router-link>
            </div>
            <ul class="nav navbar-nav navbar-right">
                <li><router-link to="/">Añadir</router-link></li>
                <li><router-link to="/lista">Lista</router-link></li>
            </ul>
        </div>
        <router-view></router-view>
    </div>
</template>