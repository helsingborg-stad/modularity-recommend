import { createViteConfig } from "vite-config-factory";

const entries = {
        'css/modularity-recommend': './source/sass/modularity-recommend.scss',
};

export default createViteConfig(entries, {
	outDir: "assets/dist",
	manifestFile: "manifest.json",
});
