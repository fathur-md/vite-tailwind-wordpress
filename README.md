# Fathur Studio WordPress Theme

This repository is primarily my personal documentation and learning log for building a modern WordPress theme using **Vite** and **Tailwind CSS**. The code, structure, and notes here are intended to help me (and anyone interested) track progress, experiment, and revisit solutions. If you want to try, use, or modify anything here, feel free—no guarantees, but you're welcome to explore!

Currently, this project is a work in progress. Implemented features include a **navbar**, **hero section (front page)**, and a main styling system supporting **backgrounds**, **dark mode**, and **light mode**. The theme has been successfully deployed and runs well for my use case.

**Live demo:** [https://vite-wp-test.free.nf/](https://vite-wp-test.free.nf/)

> Note: This project is part of my learning journey, referencing various open-source resources and with help from AI. Feedback, suggestions, and contributions from more experienced developers are very welcome via issues or pull requests.

## Features

- ⚡ Fast frontend build with Vite
- 🎨 Modern styling with Tailwind CSS
- 🧩 Modular structure for easy development
- 🔌 Modern asset integration with WordPress
- 🌙 Support for dark mode and light mode
- 📱 Responsive design (continuously improved)

## Directory Structure

```bash
.
├── assets/
│   ├── css/
│   │   └── main.css
│   └── js/
│       └── app.js
├── dist/
├── includes/
│   └── vite.php
├── template-parts/
│   ├── footer/
│   │   └── footer-main.php
│   ├── header/
│   │   └── navbar.php
│   └── sections/
│       └── hero.php
├── footer.php
├── front-page.php
├── functions.php
├── header.php
├── index.php
├── page.php
├── single.php
├── style.css
├── vite.config.js
├── package.json
├── pnpm-lock.yaml
├── pnpm-workspace.yaml
└── README.md
```

## Installation

> **Note:** I use [LocalWP](https://localwp.com/) for local WordPress development and testing. You can use any local server, but the instructions below assume a LocalWP setup.

If you want to try this theme for yourself, clone the repository into your WordPress themes directory:

```bash
git clone https://github.com/fathur-md/vite-tailwind-wordpress.git
```

Navigate to the project folder:

```bash
cd vite-tailwind-wordpress
```

Install dependencies:

```bash
pnpm install
```

Start the development server:

```bash
pnpm run dev
```

Then activate the theme via the WordPress dashboard:

**Appearance → Themes → Fathur Studio Theme**

## Development

Main development areas:

- Main styling is in the `assets/` folder
- UI components are in `template-parts/`
- Build and bundling configuration is in `vite.config.js`
- Vite asset integration with WordPress is handled in `includes/vite.php`

## Contribution

This is a personal documentation project, but contributions to improve structure, performance, or to share best practices are always welcome.

Feel free to open:

- Issues
- Pull Requests
- Technical Discussions

## License

This project is licensed under the **MIT** license.
