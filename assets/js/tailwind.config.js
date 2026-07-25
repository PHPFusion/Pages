/** @type {import('tailwindcss').Config} */
module.exports = {
    content: {
        relative: true,
        files: [
            '../../**/*.php',
        ],
    },
    corePlugins: {
        preflight: false,
    },
    theme: {
        extend: {
            fontFamily: {
                title: ['Inter', 'ui-sans-serif', 'system-ui', 'sans-serif'],
            },
            fontSize: {
                15: '15px',
                16: '16px',
                18: '18px',
                32: '32px',
                56: '56px',
                72: '72px',
                84: '84px',
            },
            colors: {
                grey: {
                    90: 'rgba(247, 248, 255, .9)',
                },
            },
        },
    },
};
