/** @type { import('@storybook/vue3-vite').StorybookConfig } */
const config = {
  stories: [
      "../resources/js/components/*.mdx",
      "../resources/js/components/*.stories.@(js|jsx|ts|tsx)",

      "../resources/js/components/**/*.mdx",
      "../resources/js/components/**/*.stories.@(js|jsx|ts|tsx)",
  ],
  addons: [
    "@storybook/addon-links",
    "@storybook/addon-essentials",
    "@storybook/addon-interactions",
  ],
  framework: {
    name: "@storybook/vue3-vite",
    options: {},
  },
  docs: {
    autodocs: "tag",
  },
};
export default config;
