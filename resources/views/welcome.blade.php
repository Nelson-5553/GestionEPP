<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Gestion EPP</title>

    <!-- Fonts -->
    <link rel="icon" type="image/svg+xml" href="{{ asset('favicon.svg') }}">

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>

    <!-- Styles / Scripts -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @else
        <style>
            /* ! tailwindcss v3.4.17 | MIT License | https://tailwindcss.com */
            *,
            :before,
            :after {
                --tw-border-spacing-x: 0;
                --tw-border-spacing-y: 0;
                --tw-translate-x: 0;
                --tw-translate-y: 0;
                --tw-rotate: 0;
                --tw-skew-x: 0;
                --tw-skew-y: 0;
                --tw-scale-x: 1;
                --tw-scale-y: 1;
                --tw-pan-x: ;
                --tw-pan-y: ;
                --tw-pinch-zoom: ;
                --tw-scroll-snap-strictness: proximity;
                --tw-gradient-from-position: ;
                --tw-gradient-via-position: ;
                --tw-gradient-to-position: ;
                --tw-ordinal: ;
                --tw-slashed-zero: ;
                --tw-numeric-figure: ;
                --tw-numeric-spacing: ;
                --tw-numeric-fraction: ;
                --tw-ring-inset: ;
                --tw-ring-offset-width: 0px;
                --tw-ring-offset-color: #fff;
                --tw-ring-color: rgb(59 130 246 / .5);
                --tw-ring-offset-shadow: 0 0 #0000;
                --tw-ring-shadow: 0 0 #0000;
                --tw-shadow: 0 0 #0000;
                --tw-shadow-colored: 0 0 #0000;
                --tw-blur: ;
                --tw-brightness: ;
                --tw-contrast: ;
                --tw-grayscale: ;
                --tw-hue-rotate: ;
                --tw-invert: ;
                --tw-saturate: ;
                --tw-sepia: ;
                --tw-drop-shadow: ;
                --tw-backdrop-blur: ;
                --tw-backdrop-brightness: ;
                --tw-backdrop-contrast: ;
                --tw-backdrop-grayscale: ;
                --tw-backdrop-hue-rotate: ;
                --tw-backdrop-invert: ;
                --tw-backdrop-opacity: ;
                --tw-backdrop-saturate: ;
                --tw-backdrop-sepia: ;
                --tw-contain-size: ;
                --tw-contain-layout: ;
                --tw-contain-paint: ;
                --tw-contain-style:
            }

            ::backdrop {
                --tw-border-spacing-x: 0;
                --tw-border-spacing-y: 0;
                --tw-translate-x: 0;
                --tw-translate-y: 0;
                --tw-rotate: 0;
                --tw-skew-x: 0;
                --tw-skew-y: 0;
                --tw-scale-x: 1;
                --tw-scale-y: 1;
                --tw-pan-x: ;
                --tw-pan-y: ;
                --tw-pinch-zoom: ;
                --tw-scroll-snap-strictness: proximity;
                --tw-gradient-from-position: ;
                --tw-gradient-via-position: ;
                --tw-gradient-to-position: ;
                --tw-ordinal: ;
                --tw-slashed-zero: ;
                --tw-numeric-figure: ;
                --tw-numeric-spacing: ;
                --tw-numeric-fraction: ;
                --tw-ring-inset: ;
                --tw-ring-offset-width: 0px;
                --tw-ring-offset-color: #fff;
                --tw-ring-color: rgb(59 130 246 / .5);
                --tw-ring-offset-shadow: 0 0 #0000;
                --tw-ring-shadow: 0 0 #0000;
                --tw-shadow: 0 0 #0000;
                --tw-shadow-colored: 0 0 #0000;
                --tw-blur: ;
                --tw-brightness: ;
                --tw-contrast: ;
                --tw-grayscale: ;
                --tw-hue-rotate: ;
                --tw-invert: ;
                --tw-saturate: ;
                --tw-sepia: ;
                --tw-drop-shadow: ;
                --tw-backdrop-blur: ;
                --tw-backdrop-brightness: ;
                --tw-backdrop-contrast: ;
                --tw-backdrop-grayscale: ;
                --tw-backdrop-hue-rotate: ;
                --tw-backdrop-invert: ;
                --tw-backdrop-opacity: ;
                --tw-backdrop-saturate: ;
                --tw-backdrop-sepia: ;
                --tw-contain-size: ;
                --tw-contain-layout: ;
                --tw-contain-paint: ;
                --tw-contain-style:
            }

            *,
            :before,
            :after {
                box-sizing: border-box;
                border-width: 0;
                border-style: solid;
                border-color: #e5e7eb
            }

            :before,
            :after {
                --tw-content: ""
            }

            html,
            :host {
                line-height: 1.5;
                -webkit-text-size-adjust: 100%;
                -moz-tab-size: 4;
                -o-tab-size: 4;
                tab-size: 4;
                font-family: Figtree, ui-sans-serif, system-ui, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", Segoe UI Symbol, "Noto Color Emoji";
                font-feature-settings: normal;
                font-variation-settings: normal;
                -webkit-tap-highlight-color: transparent
            }

            body {
                margin: 0;
                line-height: inherit
            }

            hr {
                height: 0;
                color: inherit;
                border-top-width: 1px
            }

            abbr:where([title]) {
                -webkit-text-decoration: underline dotted;
                text-decoration: underline dotted
            }

            h1,
            h2,
            h3,
            h4,
            h5,
            h6 {
                font-size: inherit;
                font-weight: inherit
            }

            a {
                color: inherit;
                text-decoration: inherit
            }

            b,
            strong {
                font-weight: bolder
            }

            code,
            kbd,
            samp,
            pre {
                font-family: ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, Liberation Mono, Courier New, monospace;
                font-feature-settings: normal;
                font-variation-settings: normal;
                font-size: 1em
            }

            small {
                font-size: 80%
            }

            sub,
            sup {
                font-size: 75%;
                line-height: 0;
                position: relative;
                vertical-align: baseline
            }

            sub {
                bottom: -.25em
            }

            sup {
                top: -.5em
            }

            table {
                text-indent: 0;
                border-color: inherit;
                border-collapse: collapse
            }

            button,
            input,
            optgroup,
            select,
            textarea {
                font-family: inherit;
                font-feature-settings: inherit;
                font-variation-settings: inherit;
                font-size: 100%;
                font-weight: inherit;
                line-height: inherit;
                letter-spacing: inherit;
                color: inherit;
                margin: 0;
                padding: 0
            }

            button,
            select {
                text-transform: none
            }

            button,
            input:where([type=button]),
            input:where([type=reset]),
            input:where([type=submit]) {
                -webkit-appearance: button;
                background-color: transparent;
                background-image: none
            }

            :-moz-focusring {
                outline: auto
            }

            :-moz-ui-invalid {
                box-shadow: none
            }

            progress {
                vertical-align: baseline
            }

            ::-webkit-inner-spin-button,
            ::-webkit-outer-spin-button {
                height: auto
            }

            [type=search] {
                -webkit-appearance: textfield;
                outline-offset: -2px
            }

            ::-webkit-search-decoration {
                -webkit-appearance: none
            }

            ::-webkit-file-upload-button {
                -webkit-appearance: button;
                font: inherit
            }

            summary {
                display: list-item
            }

            blockquote,
            dl,
            dd,
            h1,
            h2,
            h3,
            h4,
            h5,
            h6,
            hr,
            figure,
            p,
            pre {
                margin: 0
            }

            fieldset {
                margin: 0;
                padding: 0
            }

            legend {
                padding: 0
            }

            ol,
            ul,
            menu {
                list-style: none;
                margin: 0;
                padding: 0
            }

            dialog {
                padding: 0
            }

            textarea {
                resize: vertical
            }

            input::-moz-placeholder,
            textarea::-moz-placeholder {
                opacity: 1;
                color: #9ca3af
            }

            input::placeholder,
            textarea::placeholder {
                opacity: 1;
                color: #9ca3af
            }

            button,
            [role=button] {
                cursor: pointer
            }

            :disabled {
                cursor: default
            }

            img,
            svg,
            video,
            canvas,
            audio,
            iframe,
            embed,
            object {
                display: block;
                vertical-align: middle
            }

            img,
            video {
                max-width: 100%;
                height: auto
            }

            [hidden]:where(:not([hidden=until-found])) {
                display: none
            }

            .absolute {
                position: absolute
            }

            .relative {
                position: relative
            }

            .-bottom-16 {
                bottom: -4rem
            }

            .-left-16 {
                left: -4rem
            }

            .-left-20 {
                left: -5rem
            }

            .top-0 {
                top: 0
            }

            .z-0 {
                z-index: 0
            }

            .\!row-span-1 {
                grid-row: span 1 / span 1 !important
            }

            .-mx-3 {
                margin-left: -.75rem;
                margin-right: -.75rem
            }

            .-ml-px {
                margin-left: -1px
            }

            .ml-3 {
                margin-left: .75rem
            }

            .mt-4 {
                margin-top: 1rem
            }

            .mt-6 {
                margin-top: 1.5rem
            }

            .flex {
                display: flex
            }

            .inline-flex {
                display: inline-flex
            }

            .table {
                display: table
            }

            .grid {
                display: grid
            }

            .\!hidden {
                display: none !important
            }

            .hidden {
                display: none
            }

            .aspect-video {
                aspect-ratio: 16 / 9
            }

            .size-12 {
                width: 3rem;
                height: 3rem
            }

            .size-5 {
                width: 1.25rem;
                height: 1.25rem
            }

            .size-6 {
                width: 1.5rem;
                height: 1.5rem
            }

            .h-12 {
                height: 3rem
            }

            .h-40 {
                height: 10rem
            }

            .h-5 {
                height: 1.25rem
            }

            .h-full {
                height: 100%
            }

            .min-h-screen {
                min-height: 100vh
            }

            .w-5 {
                width: 1.25rem
            }

            .w-\[calc\(100\%_\+_8rem\)\] {
                width: calc(100% + 8rem)
            }

            .w-auto {
                width: auto
            }

            .w-full {
                width: 100%
            }

            .max-w-2xl {
                max-width: 42rem
            }

            .max-w-\[877px\] {
                max-width: 877px
            }

            .flex-1 {
                flex: 1 1 0%
            }

            .shrink-0 {
                flex-shrink: 0
            }

            .transform {
                transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skew(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))
            }

            .cursor-default {
                cursor: default
            }

            .resize {
                resize: both
            }

            .grid-cols-2 {
                grid-template-columns: repeat(2, minmax(0, 1fr))
            }

            .\!flex-row {
                flex-direction: row !important
            }

            .flex-col {
                flex-direction: column
            }

            .items-start {
                align-items: flex-start
            }

            .items-center {
                align-items: center
            }

            .items-stretch {
                align-items: stretch
            }

            .justify-end {
                justify-content: flex-end
            }

            .justify-center {
                justify-content: center
            }

            .justify-between {
                justify-content: space-between
            }

            .justify-items-center {
                justify-items: center
            }

            .gap-2 {
                gap: .5rem
            }

            .gap-4 {
                gap: 1rem
            }

            .gap-6 {
                gap: 1.5rem
            }

            .self-center {
                align-self: center
            }

            .overflow-hidden {
                overflow: hidden
            }

            .rounded-\[10px\] {
                border-radius: 10px
            }

            .rounded-full {
                border-radius: 9999px
            }

            .rounded-lg {
                border-radius: .5rem
            }

            .rounded-md {
                border-radius: .375rem
            }

            .rounded-sm {
                border-radius: .125rem
            }

            .rounded-l-md {
                border-top-left-radius: .375rem;
                border-bottom-left-radius: .375rem
            }

            .rounded-r-md {
                border-top-right-radius: .375rem;
                border-bottom-right-radius: .375rem
            }

            .border {
                border-width: 1px
            }

            .border-gray-300 {
                --tw-border-opacity: 1;
                border-color: rgb(209 213 219 / var(--tw-border-opacity, 1))
            }

            .bg-\[\#FF2D20\]\/10 {
                background-color: #ff2d201a
            }

            .bg-gray-50 {
                --tw-bg-opacity: 1;
                background-color: rgb(249 250 251 / var(--tw-bg-opacity, 1))
            }

            .bg-white {
                --tw-bg-opacity: 1;
                background-color: rgb(255 255 255 / var(--tw-bg-opacity, 1))
            }

            .bg-gradient-to-b {
                background-image: linear-gradient(to bottom, var(--tw-gradient-stops))
            }

            .from-transparent {
                --tw-gradient-from: transparent var(--tw-gradient-from-position);
                --tw-gradient-to: rgb(0 0 0 / 0) var(--tw-gradient-to-position);
                --tw-gradient-stops: var(--tw-gradient-from), var(--tw-gradient-to)
            }

            .via-white {
                --tw-gradient-to: rgb(255 255 255 / 0) var(--tw-gradient-to-position);
                --tw-gradient-stops: var(--tw-gradient-from), #fff var(--tw-gradient-via-position), var(--tw-gradient-to)
            }

            .to-white {
                --tw-gradient-to: #fff var(--tw-gradient-to-position)
            }

            .to-zinc-900 {
                --tw-gradient-to: #18181b var(--tw-gradient-to-position)
            }

            .stroke-\[\#FF2D20\] {
                stroke: #ff2d20
            }

            .object-cover {
                -o-object-fit: cover;
                object-fit: cover
            }

            .object-top {
                -o-object-position: top;
                object-position: top
            }

            .p-6 {
                padding: 1.5rem
            }

            .px-2 {
                padding-left: .5rem;
                padding-right: .5rem
            }

            .px-3 {
                padding-left: .75rem;
                padding-right: .75rem
            }

            .px-4 {
                padding-left: 1rem;
                padding-right: 1rem
            }

            .px-6 {
                padding-left: 1.5rem;
                padding-right: 1.5rem
            }

            .py-10 {
                padding-top: 2.5rem;
                padding-bottom: 2.5rem
            }

            .py-16 {
                padding-top: 4rem;
                padding-bottom: 4rem
            }

            .py-2 {
                padding-top: .5rem;
                padding-bottom: .5rem
            }

            .pt-3 {
                padding-top: .75rem
            }

            .text-center {
                text-align: center
            }

            .font-sans {
                font-family: Figtree, ui-sans-serif, system-ui, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", Segoe UI Symbol, "Noto Color Emoji"
            }

            .text-sm {
                font-size: .875rem;
                line-height: 1.25rem
            }

            .text-sm\/relaxed {
                font-size: .875rem;
                line-height: 1.625
            }

            .text-xl {
                font-size: 1.25rem;
                line-height: 1.75rem
            }

            .font-medium {
                font-weight: 500
            }

            .font-semibold {
                font-weight: 600
            }

            .leading-5 {
                line-height: 1.25rem
            }

            .text-black {
                --tw-text-opacity: 1;
                color: rgb(0 0 0 / var(--tw-text-opacity, 1))
            }

            .text-black\/50 {
                color: #00000080
            }

            .text-gray-500 {
                --tw-text-opacity: 1;
                color: rgb(107 114 128 / var(--tw-text-opacity, 1))
            }

            .text-gray-700 {
                --tw-text-opacity: 1;
                color: rgb(55 65 81 / var(--tw-text-opacity, 1))
            }

            .text-white {
                --tw-text-opacity: 1;
                color: rgb(255 255 255 / var(--tw-text-opacity, 1))
            }

            .underline {
                text-decoration-line: underline
            }

            .antialiased {
                -webkit-font-smoothing: antialiased;
                -moz-osx-font-smoothing: grayscale
            }

            .shadow-\[0px_14px_34px_0px_rgba\(0\,0\,0\,0\.08\)\] {
                --tw-shadow: 0px 14px 34px 0px rgba(0, 0, 0, .08);
                --tw-shadow-colored: 0px 14px 34px 0px var(--tw-shadow-color);
                box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)
            }

            .shadow-sm {
                --tw-shadow: 0 1px 2px 0 rgb(0 0 0 / .05);
                --tw-shadow-colored: 0 1px 2px 0 var(--tw-shadow-color);
                box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)
            }

            .ring-1 {
                --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);
                --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);
                box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)
            }

            .ring-black {
                --tw-ring-opacity: 1;
                --tw-ring-color: rgb(0 0 0 / var(--tw-ring-opacity, 1))
            }

            .ring-gray-300 {
                --tw-ring-opacity: 1;
                --tw-ring-color: rgb(209 213 219 / var(--tw-ring-opacity, 1))
            }

            .ring-transparent {
                --tw-ring-color: transparent
            }

            .ring-white {
                --tw-ring-opacity: 1;
                --tw-ring-color: rgb(255 255 255 / var(--tw-ring-opacity, 1))
            }

            .ring-white\/\[0\.05\] {
                --tw-ring-color: rgb(255 255 255 / .05)
            }

            .drop-shadow-\[0px_4px_34px_rgba\(0\,0\,0\,0\.06\)\] {
                --tw-drop-shadow: drop-shadow(0px 4px 34px rgba(0, 0, 0, .06));
                filter: var(--tw-blur) var(--tw-brightness) var(--tw-contrast) var(--tw-grayscale) var(--tw-hue-rotate) var(--tw-invert) var(--tw-saturate) var(--tw-sepia) var(--tw-drop-shadow)
            }

            .drop-shadow-\[0px_4px_34px_rgba\(0\,0\,0\,0\.25\)\] {
                --tw-drop-shadow: drop-shadow(0px 4px 34px rgba(0, 0, 0, .25));
                filter: var(--tw-blur) var(--tw-brightness) var(--tw-contrast) var(--tw-grayscale) var(--tw-hue-rotate) var(--tw-invert) var(--tw-saturate) var(--tw-sepia) var(--tw-drop-shadow)
            }

            .filter {
                filter: var(--tw-blur) var(--tw-brightness) var(--tw-contrast) var(--tw-grayscale) var(--tw-hue-rotate) var(--tw-invert) var(--tw-saturate) var(--tw-sepia) var(--tw-drop-shadow)
            }

            .transition {
                transition-property: color, background-color, border-color, text-decoration-color, fill, stroke, opacity, box-shadow, transform, filter, -webkit-backdrop-filter;
                transition-property: color, background-color, border-color, text-decoration-color, fill, stroke, opacity, box-shadow, transform, filter, backdrop-filter;
                transition-property: color, background-color, border-color, text-decoration-color, fill, stroke, opacity, box-shadow, transform, filter, backdrop-filter, -webkit-backdrop-filter;
                transition-timing-function: cubic-bezier(.4, 0, .2, 1);
                transition-duration: .15s
            }

            .duration-150 {
                transition-duration: .15s
            }

            .duration-300 {
                transition-duration: .3s
            }

            .ease-in-out {
                transition-timing-function: cubic-bezier(.4, 0, .2, 1)
            }

            .selection\:bg-\[\#FF2D20\] *::-moz-selection {
                --tw-bg-opacity: 1;
                background-color: rgb(255 45 32 / var(--tw-bg-opacity, 1))
            }

            .selection\:bg-\[\#FF2D20\] *::selection {
                --tw-bg-opacity: 1;
                background-color: rgb(255 45 32 / var(--tw-bg-opacity, 1))
            }

            .selection\:text-white *::-moz-selection {
                --tw-text-opacity: 1;
                color: rgb(255 255 255 / var(--tw-text-opacity, 1))
            }

            .selection\:text-white *::selection {
                --tw-text-opacity: 1;
                color: rgb(255 255 255 / var(--tw-text-opacity, 1))
            }

            .selection\:bg-\[\#FF2D20\]::-moz-selection {
                --tw-bg-opacity: 1;
                background-color: rgb(255 45 32 / var(--tw-bg-opacity, 1))
            }

            .selection\:bg-\[\#FF2D20\]::selection {
                --tw-bg-opacity: 1;
                background-color: rgb(255 45 32 / var(--tw-bg-opacity, 1))
            }

            .selection\:text-white::-moz-selection {
                --tw-text-opacity: 1;
                color: rgb(255 255 255 / var(--tw-text-opacity, 1))
            }

            .selection\:text-white::selection {
                --tw-text-opacity: 1;
                color: rgb(255 255 255 / var(--tw-text-opacity, 1))
            }

            .hover\:text-black:hover {
                --tw-text-opacity: 1;
                color: rgb(0 0 0 / var(--tw-text-opacity, 1))
            }

            .hover\:text-black\/70:hover {
                color: #000000b3
            }

            .hover\:text-gray-400:hover {
                --tw-text-opacity: 1;
                color: rgb(156 163 175 / var(--tw-text-opacity, 1))
            }

            .hover\:text-gray-500:hover {
                --tw-text-opacity: 1;
                color: rgb(107 114 128 / var(--tw-text-opacity, 1))
            }

            .hover\:ring-black\/20:hover {
                --tw-ring-color: rgb(0 0 0 / .2)
            }

            .focus\:z-10:focus {
                z-index: 10
            }

            .focus\:border-blue-300:focus {
                --tw-border-opacity: 1;
                border-color: rgb(147 197 253 / var(--tw-border-opacity, 1))
            }

            .focus\:outline-none:focus {
                outline: 2px solid transparent;
                outline-offset: 2px
            }

            .focus\:ring:focus {
                --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);
                --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(3px + var(--tw-ring-offset-width)) var(--tw-ring-color);
                box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)
            }

            .focus-visible\:ring-1:focus-visible {
                --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);
                --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);
                box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)
            }

            .focus-visible\:ring-\[\#FF2D20\]:focus-visible {
                --tw-ring-opacity: 1;
                --tw-ring-color: rgb(255 45 32 / var(--tw-ring-opacity, 1))
            }

            .active\:bg-gray-100:active {
                --tw-bg-opacity: 1;
                background-color: rgb(243 244 246 / var(--tw-bg-opacity, 1))
            }

            .active\:text-gray-500:active {
                --tw-text-opacity: 1;
                color: rgb(107 114 128 / var(--tw-text-opacity, 1))
            }

            .active\:text-gray-700:active {
                --tw-text-opacity: 1;
                color: rgb(55 65 81 / var(--tw-text-opacity, 1))
            }

            @media (min-width: 640px) {
                .sm\:flex {
                    display: flex
                }

                .sm\:hidden {
                    display: none
                }

                .sm\:size-16 {
                    width: 4rem;
                    height: 4rem
                }

                .sm\:size-6 {
                    width: 1.5rem;
                    height: 1.5rem
                }

                .sm\:flex-1 {
                    flex: 1 1 0%
                }

                .sm\:items-center {
                    align-items: center
                }

                .sm\:justify-between {
                    justify-content: space-between
                }

                .sm\:pt-5 {
                    padding-top: 1.25rem
                }
            }

            @media (min-width: 768px) {
                .md\:row-span-3 {
                    grid-row: span 3 / span 3
                }
            }

            @media (min-width: 1024px) {
                .lg\:col-start-2 {
                    grid-column-start: 2
                }

                .lg\:h-16 {
                    height: 4rem
                }

                .lg\:max-w-7xl {
                    max-width: 80rem
                }

                .lg\:grid-cols-2 {
                    grid-template-columns: repeat(2, minmax(0, 1fr))
                }

                .lg\:grid-cols-3 {
                    grid-template-columns: repeat(3, minmax(0, 1fr))
                }

                .lg\:flex-col {
                    flex-direction: column
                }

                .lg\:items-end {
                    align-items: flex-end
                }

                .lg\:justify-center {
                    justify-content: center
                }

                .lg\:gap-8 {
                    gap: 2rem
                }

                .lg\:p-10 {
                    padding: 2.5rem
                }

                .lg\:pb-10 {
                    padding-bottom: 2.5rem
                }

                .lg\:pt-0 {
                    padding-top: 0
                }

                .lg\:text-\[\#FF2D20\] {
                    --tw-text-opacity: 1;
                    color: rgb(255 45 32 / var(--tw-text-opacity, 1))
                }
            }

            .rtl\:flex-row-reverse:where([dir=rtl], [dir=rtl] *) {
                flex-direction: row-reverse
            }

            @media (prefers-color-scheme: dark) {
                .dark\:block {
                    display: block
                }

                .dark\:hidden {
                    display: none
                }

                .dark\:border-gray-600 {
                    --tw-border-opacity: 1;
                    border-color: rgb(75 85 99 / var(--tw-border-opacity, 1))
                }

                .dark\:bg-black {
                    --tw-bg-opacity: 1;
                    background-color: rgb(0 0 0 / var(--tw-bg-opacity, 1))
                }

                .dark\:bg-gray-800 {
                    --tw-bg-opacity: 1;
                    background-color: rgb(31 41 55 / var(--tw-bg-opacity, 1))
                }

                .dark\:bg-zinc-900 {
                    --tw-bg-opacity: 1;
                    background-color: rgb(24 24 27 / var(--tw-bg-opacity, 1))
                }

                .dark\:via-zinc-900 {
                    --tw-gradient-to: rgb(24 24 27 / 0) var(--tw-gradient-to-position);
                    --tw-gradient-stops: var(--tw-gradient-from), #18181b var(--tw-gradient-via-position), var(--tw-gradient-to)
                }

                .dark\:to-zinc-900 {
                    --tw-gradient-to: #18181b var(--tw-gradient-to-position)
                }

                .dark\:text-gray-300 {
                    --tw-text-opacity: 1;
                    color: rgb(209 213 219 / var(--tw-text-opacity, 1))
                }

                .dark\:text-gray-400 {
                    --tw-text-opacity: 1;
                    color: rgb(156 163 175 / var(--tw-text-opacity, 1))
                }

                .dark\:text-gray-600 {
                    --tw-text-opacity: 1;
                    color: rgb(75 85 99 / var(--tw-text-opacity, 1))
                }

                .dark\:text-white {
                    --tw-text-opacity: 1;
                    color: rgb(255 255 255 / var(--tw-text-opacity, 1))
                }

                .dark\:text-white\/50 {
                    color: #ffffff80
                }

                .dark\:text-white\/70 {
                    color: #ffffffb3
                }

                .dark\:ring-zinc-800 {
                    --tw-ring-opacity: 1;
                    --tw-ring-color: rgb(39 39 42 / var(--tw-ring-opacity, 1))
                }

                .dark\:hover\:text-gray-300:hover {
                    --tw-text-opacity: 1;
                    color: rgb(209 213 219 / var(--tw-text-opacity, 1))
                }

                .dark\:hover\:text-white:hover {
                    --tw-text-opacity: 1;
                    color: rgb(255 255 255 / var(--tw-text-opacity, 1))
                }

                .dark\:hover\:text-white\/70:hover {
                    color: #ffffffb3
                }

                .dark\:hover\:text-white\/80:hover {
                    color: #fffc
                }

                .dark\:hover\:ring-zinc-700:hover {
                    --tw-ring-opacity: 1;
                    --tw-ring-color: rgb(63 63 70 / var(--tw-ring-opacity, 1))
                }

                .dark\:focus\:border-blue-700:focus {
                    --tw-border-opacity: 1;
                    border-color: rgb(29 78 216 / var(--tw-border-opacity, 1))
                }

                .dark\:focus\:border-blue-800:focus {
                    --tw-border-opacity: 1;
                    border-color: rgb(30 64 175 / var(--tw-border-opacity, 1))
                }

                .dark\:focus-visible\:ring-\[\#FF2D20\]:focus-visible {
                    --tw-ring-opacity: 1;
                    --tw-ring-color: rgb(255 45 32 / var(--tw-ring-opacity, 1))
                }

                .dark\:focus-visible\:ring-white:focus-visible {
                    --tw-ring-opacity: 1;
                    --tw-ring-color: rgb(255 255 255 / var(--tw-ring-opacity, 1))
                }

                .dark\:active\:bg-gray-700:active {
                    --tw-bg-opacity: 1;
                    background-color: rgb(55 65 81 / var(--tw-bg-opacity, 1))
                }

                .dark\:active\:text-gray-300:active {
                    --tw-text-opacity: 1;
                    color: rgb(209 213 219 / var(--tw-text-opacity, 1))
                }
            }
        </style>
    @endif
</head>

<body class="font-sans antialiased">
    <div class="bg-slate-100">
        <header class="absolute inset-x-0 top-0 z-50">
            <nav class="flex items-center justify-between p-6 lg:px-8" aria-label="Global">
                <div class="flex lg:flex-1">
                    <a href="#" class="-m-1.5 p-1.5">
                        <span
                            class="flex size-8 items-center justify-center overflow-hidden rounded-full bg-[#5A67BA] text-white text-lg font-bold tracking-wider text-on-danger/80">G</span>
                    </a>
                </div>
                <div class="flex ">
                    <div class="lg:flex lg:flex-1 lg:justify-end">

                        @if (Route::has('login'))
                            <nav class="-mx-3 flex flex-1 justify-end">
                                @auth
                                    <a href="{{ url('/dashboard') }}"
                                        class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20]">
                                        Dashboard
                                    </a>
                                @else
                                    <a href="{{ route('login') }}"
                                        class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20]">
                                        {{ __('Login') }}
                                    </a>

                                    @if (Route::has('register'))
                                        <a href="{{ route('register') }}"
                                            class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20]">
                                            {{ __('Register') }}
                                        </a>
                                    @endif
                                @endauth
                            </nav>
                        @endif
                    </div>
            </nav>


        </header>

        <div class="relative isolate px-6 pt-14 lg:px-8">
            <div class="absolute inset-x-0 -top-40 -z-10 transform-gpu overflow-hidden blur-3xl sm:-top-80"
                aria-hidden="true">
                <div class="relative left-[calc(50%-11rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 rotate-[30deg] bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%-30rem)] sm:w-[72.1875rem]"
                    style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)">
                </div>
            </div>
            <div class="mx-auto max-w-4xl py-32 sm:py-48 lg:py-56">
                <div class="hidden sm:mb-8 sm:flex sm:justify-center">
                    <div
                        class="relative rounded-full px-3 py-1 text-sm/6 text-gray-600 ring-1 ring-gray-900/10 hover:ring-gray-900/20">
                        Trabajo en proceso <a href="#" class="font-semibold text-indigo-600"><span
                                class="absolute inset-0" aria-hidden="true"></span>Read more <span
                                aria-hidden="true">&rarr;</span></a>
                    </div>
                </div>
                <div class="text-center">
                    <div class="flex flex-col justify-center items-center gap-2 mb-6">
                        <span
                            class="flex size-12 md:size-24 items-center justify-center overflow-hidden rounded-full bg-[#5A67BA] text-white text-xl md:text-6xl font-bold tracking-wider text-on-danger/80 mb-12">G</span>
                        <a href="#" class="ml-2 w-fit  text-3xl  md:text-6xl font-bold text-[#5A67BA]">
                            <h1 class="">Gestion EPP</h1>
                        </a>
                    </div>
                    <p class="mt-8 text-pretty text-lg font-medium text-gray-500 sm:text-xl/8">La solución eficiente
                        para el control de Equipos de Protección Personal en Gestión Salud. Optimiza la administración,
                        asegura el cumplimiento y lleva un registro preciso en un solo lugar.</p>
                    <div class="flex justify-center mt-4" x-data="{ videoModalIsOpen: false }">
                        <button x-on:click="videoModalIsOpen = true, $refs.video.play()" type="button"
                            class="flex flex-row rounded-md bg-indigo-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" aria-hidden="true"
                                fill="currentColor" class="w-4 h-4">
                                <path fill-rule="evenodd"
                                    d="M4.5 5.653c0-1.426 1.529-2.33 2.779-1.643l11.54 6.348c1.295.712 1.295 2.573 0 3.285L7.28 19.991c-1.25.687-2.779-.217-2.779-1.643V5.653z"
                                    clip-rule="evenodd" />
                            </svg>
                            Play Video
                        </button>
                        <div x-cloak x-show="videoModalIsOpen" x-transition.opacity.duration.200ms
                            x-trap.inert.noscroll="videoModalIsOpen"
                            x-on:keydown.esc.window="videoModalIsOpen = false, $refs.video.pause()"
                            x-on:click.self="videoModalIsOpen = false, $refs.video.pause()"
                            class="fixed inset-0 z-30 flex items-center justify-center bg-black/20 p-4 backdrop-blur-md lg:p-8"
                            role="dialog" aria-modal="true" aria-labelledby="videoModalTitle">
                            <!-- Modal Dialog -->
                            <div x-show="videoModalIsOpen"
                                x-transition:enter="transition ease-out duration-300 delay-200"
                                x-transition:enter-start="opacity-0 translate-y-8"
                                x-transition:enter-end="opacity-100 translate-y-0" class="max-w-2xl w-full relative">
                                <!-- Close Button -->
                                <button type="button" x-show="videoModalIsOpen"
                                    x-on:click="videoModalIsOpen = false, $refs.video.pause()"
                                    x-transition:enter="transition ease-out duration-200 delay-500"
                                    x-transition:enter-start="opacity-0 scale-0"
                                    x-transition:enter-end="opacity-100 scale-100"
                                    class="absolute -top-12 right-0 flex items-center justify-center rounded-full bg-neutral-50 p-1.5 text-neutral-900 hover:opacity-75 active:opacity-100 dark:bg-neutral-900 dark:text-white"
                                    aria-label="close modal">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" aria-hidden="true"
                                        stroke="currentColor" fill="none" stroke-width="1.4" class="w-4 h-4">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                                    </svg>
                                </button>
                                <!-- Video -->
                                <video x-ref="video" class="w-full max-w-7xl rounded-md aspect-video" controls>
                                    <track default kind="captions" srclang="en" src="" />
                                    <source src="https://penguinui.s3.amazonaws.com/component-assets/peng.webm"
                                        type="video/webm">
                                    <source src="https://penguinui.s3.amazonaws.com/component-assets/peng.mp4"
                                        type="video/mp4">
                                    Your browser does not support HTML video.
                                </video>
                            </div>
                        </div>
                    </div>


                    <div class="grid grid-cols-1 lg:grid-cols-3 w-full gap-4 mt-12">
                        <div class="bg-white p-6 rounded-xl shadow-md">
                            <div class="w-12 h-12 bg-indigo-100 rounded-lg flex items-center justify-center mb-4 mx-auto">
                              <svg
                                xmlns="http://www.w3.org/2000/svg"
                                class="h-6 w-6 text-indigo-600"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke="currentColor"
                              >
                                <path
                                  strokeLinecap="round"
                                  strokeLinejoin="round"
                                  strokeWidth={2}
                                  d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"
                                />
                              </svg>
                            </div>
                            <h3 class="text-xl font-semibold mb-2 text-gray-800">Cumplimiento Normativo</h3>
                            <p class="text-gray-600">Asegura el cumplimiento de normativas de seguridad y salud ocupacional.</p>
                          </div>
                          <div class="bg-white p-6 rounded-xl shadow-md">
                            <div class="w-12 h-12 bg-indigo-100 rounded-lg flex items-center justify-center mb-4 mx-auto">
                              <svg
                                xmlns="http://www.w3.org/2000/svg"
                                class="h-6 w-6 text-indigo-600"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke="currentColor"
                              >
                                <path
                                  strokeLinecap="round"
                                  strokeLinejoin="round"
                                  strokeWidth={2}
                                  d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"
                                />
                              </svg>
                            </div>
                            <h3 class="text-xl font-semibold mb-2 text-gray-800">Análisis y Reportes</h3>
                            <p class="text-gray-600">Obtén informes detallados para tomar decisiones basadas en datos.</p>
                          </div>
                          <div class="bg-white p-6 rounded-xl shadow-md">
                            <div class="w-12 h-12 bg-indigo-100 rounded-lg flex items-center justify-center mb-4 mx-auto">
                              <svg
                                xmlns="http://www.w3.org/2000/svg"
                                class="h-6 w-6 text-indigo-600"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke="currentColor"
                              >
                                <path
                                  strokeLinecap="round"
                                  strokeLinejoin="round"
                                  strokeWidth={2}
                                  d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"
                                />
                              </svg>
                            </div>
                            <h3 class="text-xl font-semibold mb-2 text-gray-800">Control Eficiente</h3>
                            <p class="text-gray-600">Gestiona inventarios y asignaciones de EPP con facilidad y precisión.</p>
                          </div>

                    </div>
                </div>
            </div>

        </div>
    </div>

</body>

</html>
