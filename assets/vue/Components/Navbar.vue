<template>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <router-link class="navbar-brand" :to="{path: 'home'}">App</router-link>
        <button
                class="navbar-toggler"
                type="button"
                data-toggle="collapse"
                data-target="#navbarNav"
                aria-controls="navbarNav"
                aria-expanded="false"
                aria-label="Toggle navigation"
        >
            <span class="navbar-toggler-icon" />
        </button>
        <div
                id="navbarNav"
                class="collapse navbar-collapse"
        >
            <ul class="navbar-nav">
                <router-link class="nav-item" tag="li" :to="{path: 'home'}" active-class="active">
                    <a class="nav-link">Home</a>
                </router-link>
                <router-link class="nav-item" tag="li" :to="{path: 'about'}" active-class="active">
                    <a class="nav-link">About</a>
                </router-link>
            </ul>
        </div>
    </nav>
</template>
