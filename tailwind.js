module.exports = {
    content: [
        'index.php',
        'header.php',
        'footer.php',
        'archive.php',
        'single.php',
        'category.php',
        'functions.php',
        'templates/**/*.php'
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
            require('@tailwindcss/line-clamp'),
        ]
}