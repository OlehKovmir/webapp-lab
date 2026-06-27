export default [
  {
    ignores: [
      "node_modules/**",
      "vendor/**",
      "dist/**",
      "build/**",
      "**/*.min.js"
    ]
  },
  {
    rules: {
      "no-unused-vars": "warn"
    }
  }
];
