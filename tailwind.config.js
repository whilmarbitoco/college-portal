import defaultTheme from "tailwindcss/defaultTheme";
import forms from "@tailwindcss/forms";

/** @type {import('tailwindcss').Config} **/
const defaultTheme = require("tailwindcss/defaultTheme"); // Import default theme to extend from it
export default {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
    ],

    theme: {
        extend: {
            // --- Color Palette ---
            colors: {
                // You can directly define colors or use a nested structure
                primary: {
                    bg: "#1a202c", // Deep Charcoal Blue
                    text: "#e2e8f0", // Off-White/Light Gray
                },
                secondary: {
                    bg: "#28303e", // Slightly lighter charcoal blue for contrast
                },
                accent: {
                    DEFAULT: "#66b2ff", // Vibrant Sky Blue
                    darker: "#55a3ed", // For hover states
                    darkest: "#4492da", // For active states
                    light: "#8cc6ff", // For hover states on accent text
                },
                tertiary: {
                    text: "#94a3b8", // Slate Gray
                },
                border: "#4a5568", // Dark Gray Blue
                success: {
                    DEFAULT: "#48bb78", // Emerald Green
                    dark: "#166534", // Darker green
                    light: "#dcfce7", // Lighter green
                },
                danger: {
                    DEFAULT: "#ef4444", // Rose Red
                    dark: "#991b1b", // Darker red
                    light: "#fee2e2", // Lighter red
                },
                warning: {
                    DEFAULT: "#fbbf24", // Amber Yellow
                    dark: "#92400e", // Darker yellow/orange
                    light: "#fde68a", // Lighter yellow
                },
                info: {
                    DEFAULT: "#3b82f6", // Default blue for info
                    dark: "#1e40af", // Darker blue
                    light: "#bfdbfe", // Lighter blue
                },
                // Directly mapping your existing gray shades to Tailwind's default grays if they align
                // Or create custom ones if your palette deviates significantly
                gray: {
                    400: "#94a3b8", // Matches --color-tertiary-text
                    500: "#94a3b8", // Matches --color-tertiary-text
                    700: "#4a5568", // Matches --color-border
                    800: "#166534", // For status background, but this is a green shade
                    900: "#1a202c", // Matches --color-primary-bg
                },
            },

            // --- Typography ---
            fontFamily: {
                // Define your custom font family
                inter: ["Inter", ...defaultTheme.fontFamily.sans],
                // If you only have one custom font, you can make it the default sans-serif:
                // sans: ['Inter', ...defaultTheme.fontFamily.sans],
            },
            // Tailwind uses `fontWeight` for its utility classes like `font-light`, `font-normal`
            // You don't usually define these explicitly unless you want to map custom values
            // Your current values (300, 400, etc.) are already standard in Tailwind.

            // --- Spacing ---
            // Tailwind's default spacing scale is already 4px based (0.25rem = 4px).
            // You can extend it if you have specific values not covered, but yours align well.
            spacing: {
                // '1': '4px', // This is already `0.25rem` in Tailwind
                2: "8px", // This is already `0.5rem` in Tailwind
                // ... and so on.
                // If you want to strictly match your `calc` values and not rely on rem:
                // '1': 'var(--spacing-1)', // Not recommended with Tailwind for spacing
                // Better to use rem values:
                // You can add specific custom spacing if your design requires it outside the default scale
                // For example, if you had a 'spacing-13': '52px'
            },

            // --- Border Radius ---
            borderRadius: {
                sm: "2px", // Matches your --border-radius-sm
                md: "6px", // Matches your --border-radius-md
                lg: "8px", // Matches your --border-radius-lg
                xl: "12px", // Matches your --border-radius-xl
                full: "9999px", // Matches your --border-radius-full
                // Tailwind already has 'sm', 'md', 'lg', 'xl', '2xl', '3xl', 'full'
                // Double-check if your definitions overwrite or align with Tailwind's defaults.
                // It's generally better to align or extend unique names.
                // For example, if your 'md' is 6px and Tailwind's is 8px, you might rename yours
                // or just accept Tailwind's defaults. Your current values mostly align to the smaller end.
            },

            // --- Shadows ---
            boxShadow: {
                sm: "0 1px 2px 0 rgba(0, 0, 0, 0.05)", // Matches your --shadow-sm
                md: "0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06)", // Matches your --shadow-md
                lg: "0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05)", // Matches your --shadow-lg
                xl: "0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04)", // Matches your --shadow-xl
                inner: "inset 0 2px 4px 0 rgba(0, 0, 0, 0.06)", // Matches your --shadow-inner
                // Custom focus ring shadow
                "focus-accent": "0 0 0 2px rgba(102, 178, 255, 0.5)",
                "focus-danger": "0 0 0 2px rgba(239, 68, 68, 0.5)",
                "focus-offset-accent":
                    "0 0 0 2px rgba(102, 178, 255, 0.5), 0 0 0 4px rgba(26, 32, 44, 0.8)",
            },

            // --- Transitions ---
            // Tailwind provides `transition`, `duration`, `ease` utilities.
            // You can define custom transition properties and durations if needed.
            transitionProperty: {
                colors: "background-color, border-color, color, fill, stroke", // Your transition-colors
                opacity: "opacity", // Your transition-opacity
                all: "all", // Your transition-all
            },
            transitionDuration: {
                200: "200ms", // Your duration-200 (Tailwind default includes this)
            },
            transitionTimingFunction: {
                DEFAULT: "cubic-bezier(0.4, 0, 0.2, 1)", // Your default ease-in-out
            },

            // --- Keyframes and Animations (for toast) ---
            keyframes: {
                fadeInOut: {
                    "0%": { opacity: "0", transform: "translateY(20px)" },
                    "10%": { opacity: "1", transform: "translateY(0)" },
                    "90%": { opacity: "1", transform: "translateY(0)" },
                    "100%": { opacity: "0", transform: "translateY(20px)" },
                },
            },
            animation: {
                "fade-in-out": "fadeInOut 5s forwards",
            },

            // You can define custom screen sizes if yours differ from Tailwind's defaults
            // screens: {
            //   'sm': '640px',
            //   'md': '768px', // Matches your md breakpoint
            //   'lg': '1024px', // Matches your lg breakpoint
            //   'xl': '1280px',
            //   '2xl': '1536px',
            // },

            // Max-width for containers/modals
            maxWidth: {
                sm: "24rem", // 384px
                md: "28rem", // 448px
                1200: "1200px", // For your container
            },
        }, // End of extend
    },

    plugins: [forms],
};
