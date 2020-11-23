const defaultTheme = require("tailwindcss/defaultTheme");

module.exports = {
    purge: [
        "./vendor/laravel/jetstream/**/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php"
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ["Nunito", ...defaultTheme.fontFamily.sans]
            }
        }
    },

    variants: {
        opacity: ["responsive", "hover", "focus", "disabled"],
        textColor: ["responsive", "hover", "focus", "group-hover"]
    },

    plugins: [
        require("@tailwindcss/ui"),
        require("@tailwindcss/typography"),
        require("@tailwindcss/forms")
    ]
};
