import js from "@eslint/js";
import pluginVue from "eslint-plugin-vue";
import globals from "globals";

export default [
    {
        ignores: ["node_modules/**", "dist/**"],
    },

    js.configs.recommended,

    ...pluginVue.configs["flat/recommended"],

    {
        files: ["**/*.{js,vue}"],

        languageOptions: {
            globals: {
                ...globals.browser,
            },
        },

        rules: {
            "vue/multi-word-component-names": "off",
        },
    },
];