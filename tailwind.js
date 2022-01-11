module.exports = {
    content: [
        './**/*.php',
        './dist/**/*.js',
        './**/*.vue'
    ],
    theme: {
        fontFamily: {
            'sans': ['franklin-gothic-compressed', 'sans-serif'],
            'serif': ['mrs-eaves', 'serif']
        },
        container: {
            center: true,
            padding: '1rem',
        },
        extend:{
            colors:{
                'logo-extradark': '#304215',
                'logo-dark': '#435c1d',
                'logo-medium':'#98c73a',
                'logo-light': '#d2e7b5'
            },
        }
    },
    plugins:
        [
            require('tailwind-scrollbar'),
            require('@tailwindcss/line-clamp'),
        ]
}