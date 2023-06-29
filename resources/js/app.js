import 'flowbite';
import "./bootstrap";
import "../scss/app.scss";
import "@protonemedia/laravel-splade/dist/style.css";
import "bootstrap-icons/font/bootstrap-icons.css"

import { createApp, reactive } from "vue/dist/vue.esm-bundler.js";
import { renderSpladeApp, SpladePlugin } from "@protonemedia/laravel-splade";
import { changeAndApplyTheme } from './global-helpers';

const el = document.getElementById("app");

const App = createApp({ render: renderSpladeApp({ el }) });

// splade related plugin configuration
App.use(SpladePlugin, {
    "max_keep_alive": 10,
    "transform_anchors": false,
    "progress_bar": true,
});

// register global properties an functions
App.config.globalProperties.changeTheme = changeAndApplyTheme;

App.mount(el);

