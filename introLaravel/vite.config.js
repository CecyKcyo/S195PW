// import { defineConfig } from 'vite';
// import laravel from 'laravel-vite-plugin';

// export default defineConfig({
//   plugins: [
//     laravel({
//       input: ['resources/js/app.js', 'resources/css/app.css'],
//       refresh: true,
//     }),
//   ],
// });

import { defineConfig } from 'vite';

export default defineConfig({
  build: {
    rollupOptions: {
      external: []
    }
  }
});