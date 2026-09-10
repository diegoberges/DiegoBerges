import eslintPluginAstro from "eslint-plugin-astro";

export default [
  {
    ignores: ["old/**", ".astro/**", "dist/**"],
  },
  ...eslintPluginAstro.configs.recommended,
];
