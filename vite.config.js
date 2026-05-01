import { defineConfig } from "vite";
import tailwindcss from "@tailwindcss/vite";
import liveReload from "vite-plugin-full-reload";

export default defineConfig(({ command }) => {
  const isBuild = command === "build";

  return {
    plugins: [tailwindcss(), liveReload("**/*.php")],

    base: isBuild ? "/wp-content/themes/fathur-studio/dist/" : "/",

    server: {
      host: true,
      port: 5173,
      strictPort: true,
      cors: true,

      hmr: {
        host: "localhost",
        protocol: "ws",
        port: 5173,
      },
    },

    build: {
      manifest: true,
      outDir: "dist",
      emptyOutDir: true,
      rollupOptions: {
        input: "assets/js/app.js",
      },
    },
  };
});
