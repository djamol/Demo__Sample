<html lang="en"><head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Invoice</title>
 
   
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.0/css/font-awesome.css">

<script
  src="https://code.jquery.com/jquery-3.6.3.min.js"
  integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU="
  crossorigin="anonymous"></script>
<script src="/public/js/mainController.js"></script>

<style>*, ::before, ::after {
    --tw-border-spacing-x: 0;
    --tw-border-spacing-y: 0;
    --tw-translate-x: 0;
    --tw-translate-y: 0;
    --tw-rotate: 0;
    --tw-skew-x: 0;
    --tw-skew-y: 0;
    --tw-scale-x: 1;
    --tw-scale-y: 1;
    --tw-pan-x:  ;
    --tw-pan-y:  ;
    --tw-pinch-zoom:  ;
    --tw-scroll-snap-strictness: proximity;
    --tw-ordinal:  ;
    --tw-slashed-zero:  ;
    --tw-numeric-figure:  ;
    --tw-numeric-spacing:  ;
    --tw-numeric-fraction:  ;
    --tw-ring-inset:  ;
    --tw-ring-offset-width: 0px;
    --tw-ring-offset-color: #fff;
    --tw-ring-color: rgb(59 130 246 / 0.5);
    --tw-ring-offset-shadow: 0 0 #0000;
    --tw-ring-shadow: 0 0 #0000;
    --tw-shadow: 0 0 #0000;
    --tw-shadow-colored: 0 0 #0000;
    --tw-blur:  ;
    --tw-brightness:  ;
    --tw-contrast:  ;
    --tw-grayscale:  ;
    --tw-hue-rotate:  ;
    --tw-invert:  ;
    --tw-saturate:  ;
    --tw-sepia:  ;
    --tw-drop-shadow:  ;
    --tw-backdrop-blur:  ;
    --tw-backdrop-brightness:  ;
    --tw-backdrop-contrast:  ;
    --tw-backdrop-grayscale:  ;
    --tw-backdrop-hue-rotate:  ;
    --tw-backdrop-invert:  ;
    --tw-backdrop-opacity:  ;
    --tw-backdrop-saturate:  ;
    --tw-backdrop-sepia:  
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
    --tw-pan-x:  ;
    --tw-pan-y:  ;
    --tw-pinch-zoom:  ;
    --tw-scroll-snap-strictness: proximity;
    --tw-ordinal:  ;
    --tw-slashed-zero:  ;
    --tw-numeric-figure:  ;
    --tw-numeric-spacing:  ;
    --tw-numeric-fraction:  ;
    --tw-ring-inset:  ;
    --tw-ring-offset-width: 0px;
    --tw-ring-offset-color: #fff;
    --tw-ring-color: rgb(59 130 246 / 0.5);
    --tw-ring-offset-shadow: 0 0 #0000;
    --tw-ring-shadow: 0 0 #0000;
    --tw-shadow: 0 0 #0000;
    --tw-shadow-colored: 0 0 #0000;
    --tw-blur:  ;
    --tw-brightness:  ;
    --tw-contrast:  ;
    --tw-grayscale:  ;
    --tw-hue-rotate:  ;
    --tw-invert:  ;
    --tw-saturate:  ;
    --tw-sepia:  ;
    --tw-drop-shadow:  ;
    --tw-backdrop-blur:  ;
    --tw-backdrop-brightness:  ;
    --tw-backdrop-contrast:  ;
    --tw-backdrop-grayscale:  ;
    --tw-backdrop-hue-rotate:  ;
    --tw-backdrop-invert:  ;
    --tw-backdrop-opacity:  ;
    --tw-backdrop-saturate:  ;
    --tw-backdrop-sepia:  
}
.gpt-center-with-flex {
    display: flex;
    align-items: center;
    justify-content: center
}
.gpt-sr-only {
    position: absolute !important;
    width: 1px !important;
    height: 1px !important;
    padding: 0 !important;
    margin: -1px !important;
    overflow: hidden !important;
    clip: rect(0, 0, 0, 0) !important;
    white-space: nowrap !important;
    border-width: 0 !important
}
.gpt-fixed {
    position: fixed !important
}
.gpt-absolute {
    position: absolute !important
}
.gpt-relative {
    position: relative !important
}
.gpt-top-0 {
    top: 0px !important
}
.gpt-left-0 {
    left: 0px !important
}
.gpt-bottom-6 {
    bottom: 24px !important
}
.gpt-right-6 {
    right: 24px !important
}
.-gpt-top-2 {
    top: -8px !important
}
.-gpt-right-2 {
    right: -8px !important
}
.-gpt-bottom-1 {
    bottom: -4px !important
}
.gpt-right-1 {
    right: 4px !important
}
.gpt-z-\[99999999\] {
    z-index: 99999999 !important
}
.gpt-z-50 {
    z-index: 50 !important
}
.gpt-z-10 {
    z-index: 10 !important
}
.gpt-z-20 {
    z-index: 20 !important
}
.gpt-m-3 {
    margin: 12px !important
}
.gpt-my-auto {
    margin-top: auto !important;
    margin-bottom: auto !important
}
.gpt-my-2 {
    margin-top: 8px !important;
    margin-bottom: 8px !important
}
.gpt-my-3 {
    margin-top: 12px !important;
    margin-bottom: 12px !important
}
.gpt-mb-2 {
    margin-bottom: 8px !important
}
.gpt-mt-2 {
    margin-top: 8px !important
}
.gpt-mb-4 {
    margin-bottom: 16px !important
}
.gpt-mb-3 {
    margin-bottom: 12px !important
}
.gpt-ml-auto {
    margin-left: auto !important
}
.gpt-mt-6 {
    margin-top: 24px !important
}
.gpt-mr-1 {
    margin-right: 4px !important
}
.gpt-box-border {
    box-sizing: border-box !important
}
.gpt-flex {
    display: flex !important
}
.gpt-inline-flex {
    display: inline-flex !important
}
.gpt-h-screen {
    height: 100vh !important
}
.gpt-h-4 {
    height: 16px !important
}
.gpt-h-full {
    height: 100% !important
}
.gpt-h-5 {
    height: 20px !important
}
.gpt-h-12 {
    height: 48px !important
}
.gpt-h-40 {
    height: 160px !important
}
.gpt-h-7 {
    height: 28px !important
}
.gpt-h-6 {
    height: 24px !important
}
.gpt-h-8 {
    height: 32px !important
}
.gpt-max-h-28 {
    max-height: 112px !important
}
.gpt-max-h-24 {
    max-height: 96px !important
}
.gpt-max-h-12 {
    max-height: 48px !important
}
.gpt-max-h-80 {
    max-height: 320px !important
}
.gpt-min-h-\[48px\] {
    min-height: 48px !important
}
.gpt-min-h-\[24px\] {
    min-height: 24px !important
}
.gpt-min-h-\[20rem\] {
    min-height: 20rem !important
}
.gpt-min-h-\[5rem\] {
    min-height: 5rem !important
}
.gpt-w-14 {
    width: 56px !important
}
.gpt-w-full {
    width: 100% !important
}
.gpt-w-\[600px_\!important\] {
    width: 600px !important
}
.gpt-w-4 {
    width: 16px !important
}
.gpt-w-5 {
    width: 20px !important
}
.gpt-w-3 {
    width: 12px !important
}
.gpt-w-7 {
    width: 28px !important
}
.gpt-w-6 {
    width: 24px !important
}
.gpt-w-11 {
    width: 44px !important
}
.gpt-w-12 {
    width: 48px !important
}
.gpt-w-8 {
    width: 32px !important
}
.gpt-min-w-\[320px\] {
    min-width: 320px !important
}
.gpt-max-w-\[200px\] {
    max-width: 200px !important
}
.gpt-max-w-\[600px\] {
    max-width: 600px !important
}
.gpt-flex-1 {
    flex: 1 1 0% !important
}
@keyframes gpt-fade-in-merlinGUI {
    from {
        opacity: 0;
        transform: translateY(100px) scale(0.8)
    }
    to {
        opacity: 1;
        transform: none scale(1)
    }
}
.gpt-animate-fade-in-merlinGUI {
    animation: gpt-fade-in-merlinGUI 200ms 0ms ease forwards !important
}
@keyframes gpt-fade-out-merlinGUI {
    from {
        opacity: 1;
        transform: none scale(1)
    }
    to {
        opacity: 0;
        transform: translateY(100px) scale(0.8)
    }
}
.gpt-animate-fade-out-merlinGUI {
    animation: gpt-fade-out-merlinGUI 200ms 0ms ease forwards !important
}
@keyframes gpt-fade-in-2 {
    from {
        opacity: 0
    }
    to {
        opacity: 1
    }
}
.gpt-animate-fade-in-2 {
    animation: gpt-fade-in-2 300ms 0ms ease-in forwards !important
}
@keyframes gpt-fade-in {
    from {
        opacity: 0;
        transform: translateY(-10px) scale(0.8)
    }
    to {
        opacity: 1;
        transform: none scale(1)
    }
}
.gpt-animate-fade-in {
    animation: gpt-fade-in 300ms 0ms ease forwards !important
}
@keyframes gpt-fade-out {
    from {
        opacity: 1;
        transform: none scale(1)
    }
    to {
        opacity: 0;
        transform: translateY(-10px) scale(0.8)
    }
}
.gpt-animate-fade-out {
    animation: gpt-fade-out 300ms 0ms ease forwards !important
}
.gpt-cursor-pointer {
    cursor: pointer !important
}
.gpt-cursor-not-allowed {
    cursor: not-allowed !important
}
.gpt-cursor-grab {
    cursor: grab !important
}
.gpt-select-none {
    -webkit-user-select: none !important;
       -moz-user-select: none !important;
            user-select: none !important
}
.gpt-resize-none {
    resize: none !important
}
.gpt-flex-row {
    flex-direction: row !important
}
.gpt-flex-row-reverse {
    flex-direction: row-reverse !important
}
.gpt-flex-col {
    flex-direction: column !important
}
.gpt-items-start {
    align-items: flex-start !important
}
.gpt-items-center {
    align-items: center !important
}
.gpt-items-stretch {
    align-items: stretch !important
}
.gpt-justify-start {
    justify-content: flex-start !important
}
.gpt-justify-end {
    justify-content: flex-end !important
}
.gpt-justify-center {
    justify-content: center !important
}
.gpt-justify-between {
    justify-content: space-between !important
}
.gpt-gap-2 {
    gap: 8px !important
}
.gpt-gap-4 {
    gap: 16px !important
}
.gpt-gap-6 {
    gap: 24px !important
}
.gpt-gap-3 {
    gap: 12px !important
}
.gpt-gap-1 {
    gap: 4px !important
}
.gpt-overflow-hidden {
    overflow: hidden !important
}
.gpt-overflow-x-auto {
    overflow-x: auto !important
}
.gpt-overflow-y-auto {
    overflow-y: auto !important
}
.gpt-overflow-x-hidden {
    overflow-x: hidden !important
}
.gpt-overflow-y-hidden {
    overflow-y: hidden !important
}
.gpt-overflow-y-visible {
    overflow-y: visible !important
}
.gpt-text-ellipsis {
    text-overflow: ellipsis !important
}
.gpt-whitespace-nowrap {
    white-space: nowrap !important
}
.gpt-break-words {
    overflow-wrap: break-word !important
}
.gpt-rounded-full {
    border-radius: 9999px !important
}
.gpt-rounded-lg {
    border-radius: 8px !important
}
.gpt-rounded {
    border-radius: 4px !important
}
.gpt-rounded-md {
    border-radius: 6px !important
}
.gpt-rounded-2xl {
    border-radius: 16px !important
}
.gpt-rounded-xl {
    border-radius: 12px !important
}
.gpt-rounded-3xl {
    border-radius: 24px !important
}
.gpt-rounded-t-xl {
    border-top-left-radius: 12px !important;
    border-top-right-radius: 12px !important
}
.gpt-border {
    border-width: 1px !important
}
.gpt-border-\[0px\] {
    border-width: 0px !important
}
.gpt-border-b {
    border-bottom-width: 1px !important
}
.gpt-border-t {
    border-top-width: 1px !important
}
.gpt-border-t-0 {
    border-top-width: 0px !important
}
.gpt-border-solid {
    border-style: solid !important
}
.gpt-border-none {
    border-style: none !important
}
.gpt-border-slate-300 {
    --tw-border-opacity: 1 !important;
    border-color: rgb(203 213 225 / var(--tw-border-opacity)) !important
}
.gpt-border-slate-700 {
    --tw-border-opacity: 1 !important;
    border-color: rgb(51 65 85 / var(--tw-border-opacity)) !important
}
.gpt-border-violet-700 {
    --tw-border-opacity: 1 !important;
    border-color: rgb(109 40 217 / var(--tw-border-opacity)) !important
}
.gpt-border-b-slate-300 {
    --tw-border-opacity: 1 !important;
    border-bottom-color: rgb(203 213 225 / var(--tw-border-opacity)) !important
}
.gpt-border-t-slate-300 {
    --tw-border-opacity: 1 !important;
    border-top-color: rgb(203 213 225 / var(--tw-border-opacity)) !important
}
.gpt-bg-gray-800 {
    --tw-bg-opacity: 1 !important;
    background-color: rgb(31 41 55 / var(--tw-bg-opacity)) !important
}
.gpt-bg-gray-200 {
    --tw-bg-opacity: 1 !important;
    background-color: rgb(229 231 235 / var(--tw-bg-opacity)) !important
}
.gpt-bg-transparent {
    background-color: transparent !important
}
.gpt-bg-slate-300 {
    --tw-bg-opacity: 1 !important;
    background-color: rgb(203 213 225 / var(--tw-bg-opacity)) !important
}
.gpt-bg-slate-100 {
    --tw-bg-opacity: 1 !important;
    background-color: rgb(241 245 249 / var(--tw-bg-opacity)) !important
}
.gpt-bg-slate-200 {
    --tw-bg-opacity: 1 !important;
    background-color: rgb(226 232 240 / var(--tw-bg-opacity)) !important
}
.gpt-bg-slate-800 {
    --tw-bg-opacity: 1 !important;
    background-color: rgb(30 41 59 / var(--tw-bg-opacity)) !important
}
.gpt-bg-slate-700 {
    --tw-bg-opacity: 1 !important;
    background-color: rgb(51 65 85 / var(--tw-bg-opacity)) !important
}
.gpt-bg-white {
    --tw-bg-opacity: 1 !important;
    background-color: rgb(255 255 255 / var(--tw-bg-opacity)) !important
}
.gpt-bg-red-700 {
    --tw-bg-opacity: 1 !important;
    background-color: rgb(185 28 28 / var(--tw-bg-opacity)) !important
}
.gpt-bg-slate-900 {
    --tw-bg-opacity: 1 !important;
    background-color: rgb(15 23 42 / var(--tw-bg-opacity)) !important
}
.gpt-bg-violet-600 {
    --tw-bg-opacity: 1 !important;
    background-color: rgb(124 58 237 / var(--tw-bg-opacity)) !important
}
.gpt-bg-slate-400 {
    --tw-bg-opacity: 1 !important;
    background-color: rgb(148 163 184 / var(--tw-bg-opacity)) !important
}
.gpt-bg-violet-800 {
    --tw-bg-opacity: 1 !important;
    background-color: rgb(91 33 182 / var(--tw-bg-opacity)) !important
}
.gpt-bg-slate-600 {
    --tw-bg-opacity: 1 !important;
    background-color: rgb(71 85 105 / var(--tw-bg-opacity)) !important
}
.gpt-bg-slate-500 {
    --tw-bg-opacity: 1 !important;
    background-color: rgb(100 116 139 / var(--tw-bg-opacity)) !important
}
.gpt-bg-green-100 {
    --tw-bg-opacity: 1 !important;
    background-color: rgb(220 252 231 / var(--tw-bg-opacity)) !important
}
.gpt-bg-opacity-10 {
    --tw-bg-opacity: 0.1 !important
}
.gpt-bg-gradient-to-br {
    background-image: linear-gradient(to bottom right, var(--tw-gradient-stops)) !important
}
.gpt-bg-btn-gradient {
    background-image: linear-gradient(45deg, #facc15, #db2777, #7e22ce, #5b21b6) !important
}
.gpt-bg-gradient-to-b {
    background-image: linear-gradient(to bottom, var(--tw-gradient-stops)) !important
}
.gpt-from-purple-700 {
    --tw-gradient-from: #7e22ce !important;
    --tw-gradient-to: rgb(126 34 206 / 0) !important;
    --tw-gradient-stops: var(--tw-gradient-from), var(--tw-gradient-to) !important
}
.gpt-from-purple-900 {
    --tw-gradient-from: #581c87 !important;
    --tw-gradient-to: rgb(88 28 135 / 0) !important;
    --tw-gradient-stops: var(--tw-gradient-from), var(--tw-gradient-to) !important
}
.gpt-from-blue-700 {
    --tw-gradient-from: #1d4ed8 !important;
    --tw-gradient-to: rgb(29 78 216 / 0) !important;
    --tw-gradient-stops: var(--tw-gradient-from), var(--tw-gradient-to) !important
}
.gpt-from-amber-500 {
    --tw-gradient-from: #f59e0b !important;
    --tw-gradient-to: rgb(245 158 11 / 0) !important;
    --tw-gradient-stops: var(--tw-gradient-from), var(--tw-gradient-to) !important
}
.gpt-via-pink-500 {
    --tw-gradient-to: rgb(236 72 153 / 0) !important;
    --tw-gradient-stops: var(--tw-gradient-from), #ec4899, var(--tw-gradient-to) !important
}
.gpt-to-fuchsia-600 {
    --tw-gradient-to: #c026d3 !important
}
.gpt-to-purple-900 {
    --tw-gradient-to: #581c87 !important
}
.gpt-to-blue-500 {
    --tw-gradient-to: #3b82f6 !important
}
.gpt-to-violet-800 {
    --tw-gradient-to: #5b21b6 !important
}
.gpt-to-amber-800 {
    --tw-gradient-to: #92400e !important
}
.gpt-bg-right-bottom {
    background-position: right bottom !important
}
.gpt-fill-slate-50 {
    fill: #f8fafc !important
}
.gpt-p-\[2px\] {
    padding: 2px !important
}
.gpt-p-2 {
    padding: 8px !important
}
.gpt-p-3 {
    padding: 12px !important
}
.gpt-p-0 {
    padding: 0px !important
}
.gpt-p-1 {
    padding: 4px !important
}
.gpt-p-\[1px\] {
    padding: 1px !important
}
.gpt-py-1 {
    padding-top: 4px !important;
    padding-bottom: 4px !important
}
.gpt-px-4 {
    padding-left: 16px !important;
    padding-right: 16px !important
}
.gpt-py-2 {
    padding-top: 8px !important;
    padding-bottom: 8px !important
}
.gpt-px-3 {
    padding-left: 12px !important;
    padding-right: 12px !important
}
.gpt-px-2 {
    padding-left: 8px !important;
    padding-right: 8px !important
}
.gpt-py-3 {
    padding-top: 12px !important;
    padding-bottom: 12px !important
}
.gpt-px-1 {
    padding-left: 4px !important;
    padding-right: 4px !important
}
.gpt-py-4 {
    padding-top: 16px !important;
    padding-bottom: 16px !important
}
.gpt-pt-\[7\%\] {
    padding-top: 7% !important
}
.gpt-pt-\[3\%\] {
    padding-top: 3% !important
}
.gpt-pr-8 {
    padding-right: 32px !important
}
.gpt-text-left {
    text-align: left !important
}
.gpt-text-center {
    text-align: center !important
}
.gpt-font-sans {
    font-family: Inter, ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji" !important
}
.gpt-text-xs {
    font-size: 12px !important;
    line-height: 16px !important
}
.gpt-text-sm {
    font-size: 14px !important;
    line-height: 20px !important
}
.gpt-text-base {
    font-size: 16px !important;
    line-height: 24px !important
}
.gpt-text-lg {
    font-size: 18px !important;
    line-height: 28px !important
}
.gpt-text-xl {
    font-size: 20px !important;
    line-height: 28px !important
}
.gpt-font-medium {
    font-weight: 500 !important
}
.gpt-font-normal {
    font-weight: 400 !important
}
.gpt-font-light {
    font-weight: 300 !important
}
.gpt-tracking-wide {
    letter-spacing: 0.025em !important
}
.gpt-text-slate-50 {
    --tw-text-opacity: 1 !important;
    color: rgb(248 250 252 / var(--tw-text-opacity)) !important
}
.gpt-text-black {
    --tw-text-opacity: 1 !important;
    color: rgb(0 0 0 / var(--tw-text-opacity)) !important
}
.gpt-text-gray-900 {
    --tw-text-opacity: 1 !important;
    color: rgb(17 24 39 / var(--tw-text-opacity)) !important
}
.gpt-text-green-500 {
    --tw-text-opacity: 1 !important;
    color: rgb(34 197 94 / var(--tw-text-opacity)) !important
}
.gpt-text-slate-700 {
    --tw-text-opacity: 1 !important;
    color: rgb(51 65 85 / var(--tw-text-opacity)) !important
}
.gpt-text-slate-900 {
    --tw-text-opacity: 1 !important;
    color: rgb(15 23 42 / var(--tw-text-opacity)) !important
}
.gpt-text-slate-500 {
    --tw-text-opacity: 1 !important;
    color: rgb(100 116 139 / var(--tw-text-opacity)) !important
}
.gpt-text-green-700 {
    --tw-text-opacity: 1 !important;
    color: rgb(21 128 61 / var(--tw-text-opacity)) !important
}
.gpt-text-gray-400 {
    --tw-text-opacity: 1 !important;
    color: rgb(156 163 175 / var(--tw-text-opacity)) !important
}
.gpt-text-violet-600 {
    --tw-text-opacity: 1 !important;
    color: rgb(124 58 237 / var(--tw-text-opacity)) !important
}
.gpt-text-neutral-800 {
    --tw-text-opacity: 1 !important;
    color: rgb(38 38 38 / var(--tw-text-opacity)) !important
}
.gpt-text-slate-100 {
    --tw-text-opacity: 1 !important;
    color: rgb(241 245 249 / var(--tw-text-opacity)) !important
}
.gpt-text-slate-300 {
    --tw-text-opacity: 1 !important;
    color: rgb(203 213 225 / var(--tw-text-opacity)) !important
}
.gpt-text-green-800 {
    --tw-text-opacity: 1 !important;
    color: rgb(22 101 52 / var(--tw-text-opacity)) !important
}
.gpt-text-amber-700 {
    --tw-text-opacity: 1 !important;
    color: rgb(180 83 9 / var(--tw-text-opacity)) !important
}
.gpt-underline {
    text-decoration-line: underline !important
}
.gpt-underline-offset-2 {
    text-underline-offset: 2px !important
}
.gpt-opacity-0 {
    opacity: 0 !important
}
.gpt-shadow-none {
    --tw-shadow: 0 0 #0000 !important;
    --tw-shadow-colored: 0 0 #0000 !important;
    box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow) !important
}
.gpt-outline-none {
    outline: 2px solid transparent !important;
    outline-offset: 2px !important
}
.gpt-blur-sm {
    --tw-blur: blur(4px) !important;
    filter: var(--tw-blur) var(--tw-brightness) var(--tw-contrast) var(--tw-grayscale) var(--tw-hue-rotate) var(--tw-invert) var(--tw-saturate) var(--tw-sepia) var(--tw-drop-shadow) !important
}
.gpt-drop-shadow-3xl {
    --tw-drop-shadow: drop-shadow(0 35px 35px rgba(0, 0, 0, 0.4)) !important;
    filter: var(--tw-blur) var(--tw-brightness) var(--tw-contrast) var(--tw-grayscale) var(--tw-hue-rotate) var(--tw-invert) var(--tw-saturate) var(--tw-sepia) var(--tw-drop-shadow) !important
}
.gpt-backdrop-blur {
    --tw-backdrop-blur: blur(8px) !important;
    -webkit-backdrop-filter: var(--tw-backdrop-blur) var(--tw-backdrop-brightness) var(--tw-backdrop-contrast) var(--tw-backdrop-grayscale) var(--tw-backdrop-hue-rotate) var(--tw-backdrop-invert) var(--tw-backdrop-opacity) var(--tw-backdrop-saturate) var(--tw-backdrop-sepia) !important;
            backdrop-filter: var(--tw-backdrop-blur) var(--tw-backdrop-brightness) var(--tw-backdrop-contrast) var(--tw-backdrop-grayscale) var(--tw-backdrop-hue-rotate) var(--tw-backdrop-invert) var(--tw-backdrop-opacity) var(--tw-backdrop-saturate) var(--tw-backdrop-sepia) !important
}
.gpt-transition-colors {
    transition-property: color, background-color, border-color, text-decoration-color, fill, stroke !important;
    transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1) !important;
    transition-duration: 150ms !important
}
.gpt-transition-all {
    transition-property: all !important;
    transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1) !important;
    transition-duration: 150ms !important
}
.gpt-transition-opacity {
    transition-property: opacity !important;
    transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1) !important;
    transition-duration: 150ms !important
}
.gpt-duration-200 {
    transition-duration: 200ms !important
}
.gpt-duration-300 {
    transition-duration: 300ms !important
}
.gpt-duration-75 {
    transition-duration: 75ms !important
}
.gpt-duration-500 {
    transition-duration: 500ms !important
}
.gpt-duration-700 {
    transition-duration: 700ms !important
}
.gpt-ease-in {
    transition-timing-function: cubic-bezier(0.4, 0, 1, 1) !important
}
.\[border-bottom-style\:solid\] {
    border-bottom-style: solid
}
.\[border-top-style\:solid\] {
    border-top-style: solid
}
.\[border-style\:solid\] {
    border-style: solid
}
.\[background-size\:400\%_400\%\] {
    background-size: 400% 400%
}
.placeholder\:gpt-text-base::-moz-placeholder {
    font-size: 16px !important;
    line-height: 24px !important
}
.placeholder\:gpt-text-base::placeholder {
    font-size: 16px !important;
    line-height: 24px !important
}
.placeholder\:gpt-text-slate-400::-moz-placeholder {
    --tw-text-opacity: 1 !important;
    color: rgb(148 163 184 / var(--tw-text-opacity)) !important
}
.placeholder\:gpt-text-slate-400::placeholder {
    --tw-text-opacity: 1 !important;
    color: rgb(148 163 184 / var(--tw-text-opacity)) !important
}
.after\:gpt-absolute::after {
    content: var(--tw-content) !important;
    position: absolute !important
}
.after\:gpt-top-\[2px\]::after {
    content: var(--tw-content) !important;
    top: 2px !important
}
.after\:gpt-left-\[2px\]::after {
    content: var(--tw-content) !important;
    left: 2px !important
}
.after\:gpt-h-5::after {
    content: var(--tw-content) !important;
    height: 20px !important
}
.after\:gpt-w-5::after {
    content: var(--tw-content) !important;
    width: 20px !important
}
.after\:gpt-rounded-full::after {
    content: var(--tw-content) !important;
    border-radius: 9999px !important
}
.after\:gpt-border::after {
    content: var(--tw-content) !important;
    border-width: 1px !important
}
.after\:gpt-border-gray-300::after {
    content: var(--tw-content) !important;
    --tw-border-opacity: 1 !important;
    border-color: rgb(209 213 219 / var(--tw-border-opacity)) !important
}
.after\:gpt-bg-white::after {
    content: var(--tw-content) !important;
    --tw-bg-opacity: 1 !important;
    background-color: rgb(255 255 255 / var(--tw-bg-opacity)) !important
}
.after\:gpt-transition-colors::after {
    content: var(--tw-content) !important;
    transition-property: color, background-color, border-color, text-decoration-color, fill, stroke !important;
    transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1) !important;
    transition-duration: 150ms !important
}
.after\:gpt-content-\[\'\'\]::after {
    --tw-content: '' !important;
    content: var(--tw-content) !important
}
.hover\:gpt-bg-slate-600:hover {
    --tw-bg-opacity: 1 !important;
    background-color: rgb(71 85 105 / var(--tw-bg-opacity)) !important
}
.hover\:gpt-bg-slate-700:hover {
    --tw-bg-opacity: 1 !important;
    background-color: rgb(51 65 85 / var(--tw-bg-opacity)) !important
}
.hover\:gpt-bg-slate-300:hover {
    --tw-bg-opacity: 1 !important;
    background-color: rgb(203 213 225 / var(--tw-bg-opacity)) !important
}
.hover\:gpt-bg-slate-500:hover {
    --tw-bg-opacity: 1 !important;
    background-color: rgb(100 116 139 / var(--tw-bg-opacity)) !important
}
.hover\:gpt-bg-left-top:hover {
    background-position: left top !important
}
.gpt-group:hover .group-hover\:gpt-opacity-100 {
    opacity: 1 !important
}
.gpt-peer:checked ~ .peer-checked\:gpt-bg-blue-700 {
    --tw-bg-opacity: 1 !important;
    background-color: rgb(29 78 216 / var(--tw-bg-opacity)) !important
}
.gpt-peer:checked ~ .peer-checked\:after\:gpt-translate-x-full::after {
    content: var(--tw-content) !important;
    --tw-translate-x: 100% !important;
    transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y)) !important
}
.gpt-peer:checked ~ .peer-checked\:after\:gpt-border-white::after {
    content: var(--tw-content) !important;
    --tw-border-opacity: 1 !important;
    border-color: rgb(255 255 255 / var(--tw-border-opacity)) !important
}
@media (prefers-color-scheme: dark) {
    .dark\:gpt-border {
        border-width: 1px !important
    }
    .dark\:gpt-border-none {
        border-style: none !important
    }
    .dark\:gpt-border-slate-700 {
        --tw-border-opacity: 1 !important;
        border-color: rgb(51 65 85 / var(--tw-border-opacity)) !important
    }
    .dark\:gpt-border-gray-600 {
        --tw-border-opacity: 1 !important;
        border-color: rgb(75 85 99 / var(--tw-border-opacity)) !important
    }
    .dark\:gpt-border-b-slate-700 {
        --tw-border-opacity: 1 !important;
        border-bottom-color: rgb(51 65 85 / var(--tw-border-opacity)) !important
    }
    .dark\:gpt-border-t-slate-700 {
        --tw-border-opacity: 1 !important;
        border-top-color: rgb(51 65 85 / var(--tw-border-opacity)) !important
    }
    .dark\:gpt-border-t-slate-600 {
        --tw-border-opacity: 1 !important;
        border-top-color: rgb(71 85 105 / var(--tw-border-opacity)) !important
    }
    .dark\:gpt-bg-gray-800 {
        --tw-bg-opacity: 1 !important;
        background-color: rgb(31 41 55 / var(--tw-bg-opacity)) !important
    }
    .dark\:gpt-bg-slate-900 {
        --tw-bg-opacity: 1 !important;
        background-color: rgb(15 23 42 / var(--tw-bg-opacity)) !important
    }
    .dark\:gpt-bg-slate-700 {
        --tw-bg-opacity: 1 !important;
        background-color: rgb(51 65 85 / var(--tw-bg-opacity)) !important
    }
    .dark\:gpt-bg-slate-800 {
        --tw-bg-opacity: 1 !important;
        background-color: rgb(30 41 59 / var(--tw-bg-opacity)) !important
    }
    .dark\:gpt-bg-slate-300 {
        --tw-bg-opacity: 1 !important;
        background-color: rgb(203 213 225 / var(--tw-bg-opacity)) !important
    }
    .dark\:gpt-bg-\[\#0F172A_\!important\] {
        background-color: #0F172A !important
    }
    .dark\:gpt-bg-gray-700 {
        --tw-bg-opacity: 1 !important;
        background-color: rgb(55 65 81 / var(--tw-bg-opacity)) !important
    }
    .dark\:gpt-bg-slate-600 {
        --tw-bg-opacity: 1 !important;
        background-color: rgb(71 85 105 / var(--tw-bg-opacity)) !important
    }
    .dark\:gpt-bg-green-900 {
        --tw-bg-opacity: 1 !important;
        background-color: rgb(20 83 45 / var(--tw-bg-opacity)) !important
    }
    .dark\:gpt-text-slate-200 {
        --tw-text-opacity: 1 !important;
        color: rgb(226 232 240 / var(--tw-text-opacity)) !important
    }
    .dark\:gpt-text-gray-200 {
        --tw-text-opacity: 1 !important;
        color: rgb(229 231 235 / var(--tw-text-opacity)) !important
    }
    .dark\:gpt-text-slate-50 {
        --tw-text-opacity: 1 !important;
        color: rgb(248 250 252 / var(--tw-text-opacity)) !important
    }
    .dark\:gpt-text-slate-100 {
        --tw-text-opacity: 1 !important;
        color: rgb(241 245 249 / var(--tw-text-opacity)) !important
    }
    .dark\:gpt-text-green-500 {
        --tw-text-opacity: 1 !important;
        color: rgb(34 197 94 / var(--tw-text-opacity)) !important
    }
    .dark\:gpt-text-slate-400 {
        --tw-text-opacity: 1 !important;
        color: rgb(148 163 184 / var(--tw-text-opacity)) !important
    }
    .dark\:gpt-text-slate-900 {
        --tw-text-opacity: 1 !important;
        color: rgb(15 23 42 / var(--tw-text-opacity)) !important
    }
    .dark\:gpt-text-gray-300 {
        --tw-text-opacity: 1 !important;
        color: rgb(209 213 219 / var(--tw-text-opacity)) !important
    }
    .dark\:gpt-text-slate-500 {
        --tw-text-opacity: 1 !important;
        color: rgb(100 116 139 / var(--tw-text-opacity)) !important
    }
    .dark\:gpt-text-green-200 {
        --tw-text-opacity: 1 !important;
        color: rgb(187 247 208 / var(--tw-text-opacity)) !important
    }
    .dark\:gpt-text-amber-500 {
        --tw-text-opacity: 1 !important;
        color: rgb(245 158 11 / var(--tw-text-opacity)) !important
    }
    .dark\:gpt-outline-none {
        outline: 2px solid transparent !important;
        outline-offset: 2px !important
    }
    .dark\:hover\:gpt-bg-gray-700:hover {
        --tw-bg-opacity: 1 !important;
        background-color: rgb(55 65 81 / var(--tw-bg-opacity)) !important
    }
    .dark\:hover\:gpt-bg-slate-700:hover {
        --tw-bg-opacity: 1 !important;
        background-color: rgb(51 65 85 / var(--tw-bg-opacity)) !important
    }
}
.\[\&\>\*\]\:gpt-px-2>* {
    padding-left: 8px !important;
    padding-right: 8px !important
}

/*# sourceMappingURL=data:application/json;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8uL3NyYy9hc3NldHMvc3R5bGVzL2dsb2JhbC5jc3MiLCI8bm8gc291cmNlPiJdLCJuYW1lcyI6W10sIm1hcHBpbmdzIjoiQUFBQTtJQUFBLHdCQUFjO0lBQWQsd0JBQWM7SUFBZCxtQkFBYztJQUFkLG1CQUFjO0lBQWQsY0FBYztJQUFkLGNBQWM7SUFBZCxjQUFjO0lBQWQsZUFBYztJQUFkLGVBQWM7SUFBZCxhQUFjO0lBQWQsYUFBYztJQUFkLGtCQUFjO0lBQWQsc0NBQWM7SUFBZCxlQUFjO0lBQWQsb0JBQWM7SUFBZCxzQkFBYztJQUFkLHVCQUFjO0lBQWQsd0JBQWM7SUFBZCxrQkFBYztJQUFkLDJCQUFjO0lBQWQsNEJBQWM7SUFBZCxzQ0FBYztJQUFkLGtDQUFjO0lBQWQsMkJBQWM7SUFBZCxzQkFBYztJQUFkLDhCQUFjO0lBQWQsWUFBYztJQUFkLGtCQUFjO0lBQWQsZ0JBQWM7SUFBZCxpQkFBYztJQUFkLGtCQUFjO0lBQWQsY0FBYztJQUFkLGdCQUFjO0lBQWQsYUFBYztJQUFkLG1CQUFjO0lBQWQscUJBQWM7SUFBZCwyQkFBYztJQUFkLHlCQUFjO0lBQWQsMEJBQWM7SUFBZCwyQkFBYztJQUFkLHVCQUFjO0lBQWQsd0JBQWM7SUFBZCx5QkFBYztJQUFkO0FBQWM7QUFBZDtJQUFBLHdCQUFjO0lBQWQsd0JBQWM7SUFBZCxtQkFBYztJQUFkLG1CQUFjO0lBQWQsY0FBYztJQUFkLGNBQWM7SUFBZCxjQUFjO0lBQWQsZUFBYztJQUFkLGVBQWM7SUFBZCxhQUFjO0lBQWQsYUFBYztJQUFkLGtCQUFjO0lBQWQsc0NBQWM7SUFBZCxlQUFjO0lBQWQsb0JBQWM7SUFBZCxzQkFBYztJQUFkLHVCQUFjO0lBQWQsd0JBQWM7SUFBZCxrQkFBYztJQUFkLDJCQUFjO0lBQWQsNEJBQWM7SUFBZCxzQ0FBYztJQUFkLGtDQUFjO0lBQWQsMkJBQWM7SUFBZCxzQkFBYztJQUFkLDhCQUFjO0lBQWQsWUFBYztJQUFkLGtCQUFjO0lBQWQsZ0JBQWM7SUFBZCxpQkFBYztJQUFkLGtCQUFjO0lBQWQsY0FBYztJQUFkLGdCQUFjO0lBQWQsYUFBYztJQUFkLG1CQUFjO0lBQWQscUJBQWM7SUFBZCwyQkFBYztJQUFkLHlCQUFjO0lBQWQsMEJBQWM7SUFBZCwyQkFBYztJQUFkLHVCQUFjO0lBQWQsd0JBQWM7SUFBZCx5QkFBYztJQUFkO0FBQWM7QUFNWjtJQUFBLGFBQW1EO0lBQW5ELG1CQUFtRDtJQUFuRDtBQUFtRDtBQUpyRDtJQUFBLDZCQUFtQjtJQUFuQixxQkFBbUI7SUFBbkIsc0JBQW1CO0lBQW5CLHFCQUFtQjtJQUFuQix1QkFBbUI7SUFBbkIsMkJBQW1CO0lBQW5CLGlDQUFtQjtJQUFuQiw4QkFBbUI7SUFBbkI7QUFBbUI7QUFBbkI7SUFBQTtBQUFtQjtBQUFuQjtJQUFBO0FBQW1CO0FBQW5CO0lBQUE7QUFBbUI7QUFBbkI7SUFBQTtBQUFtQjtBQUFuQjtJQUFBO0FBQW1CO0FBQW5CO0lBQUE7QUFBbUI7QUFBbkI7SUFBQTtBQUFtQjtBQUFuQjtJQUFBO0FBQW1CO0FBQW5CO0lBQUE7QUFBbUI7QUFBbkI7SUFBQTtBQUFtQjtBQUFuQjtJQUFBO0FBQW1CO0FBQW5CO0lBQUE7QUFBbUI7QUFBbkI7SUFBQTtBQUFtQjtBQUFuQjtJQUFBO0FBQW1CO0FBQW5CO0lBQUE7QUFBbUI7QUFBbkI7SUFBQTtBQUFtQjtBQUFuQjtJQUFBLDJCQUFtQjtJQUFuQjtBQUFtQjtBQUFuQjtJQUFBLDBCQUFtQjtJQUFuQjtBQUFtQjtBQUFuQjtJQUFBLDJCQUFtQjtJQUFuQjtBQUFtQjtBQUFuQjtJQUFBO0FBQW1CO0FBQW5CO0lBQUE7QUFBbUI7QUFBbkI7SUFBQTtBQUFtQjtBQUFuQjtJQUFBO0FBQW1CO0FBQW5CO0lBQUE7QUFBbUI7QUFBbkI7SUFBQTtBQUFtQjtBQUFuQjtJQUFBO0FBQW1CO0FBQW5CO0lBQUE7QUFBbUI7QUFBbkI7SUFBQTtBQUFtQjtBQUFuQjtJQUFBO0FBQW1CO0FBQW5CO0lBQUE7QUFBbUI7QUFBbkI7SUFBQTtBQUFtQjtBQUFuQjtJQUFBO0FBQW1CO0FBQW5CO0lBQUE7QUFBbUI7QUFBbkI7SUFBQTtBQUFtQjtBQUFuQjtJQUFBO0FBQW1CO0FBQW5CO0lBQUE7QUFBbUI7QUFBbkI7SUFBQTtBQUFtQjtBQUFuQjtJQUFBO0FBQW1CO0FBQW5CO0lBQUE7QUFBbUI7QUFBbkI7SUFBQTtBQUFtQjtBQUFuQjtJQUFBO0FBQW1CO0FBQW5CO0lBQUE7QUFBbUI7QUFBbkI7SUFBQTtBQUFtQjtBQUFuQjtJQUFBO0FBQW1CO0FBQW5CO0lBQUE7QUFBbUI7QUFBbkI7SUFBQTtBQUFtQjtBQUFuQjtJQUFBO0FBQW1CO0FBQW5CO0lBQUE7QUFBbUI7QUFBbkI7SUFBQTtBQUFtQjtBQUFuQjtJQUFBO0FBQW1CO0FBQW5CO0lBQUE7QUFBbUI7QUFBbkI7SUFBQTtBQUFtQjtBQUFuQjtJQUFBO0FBQW1CO0FBQW5CO0lBQUE7QUFBbUI7QUFBbkI7SUFBQTtBQUFtQjtBQUFuQjtJQUFBO0FBQW1CO0FBQW5CO0lBQUE7QUFBbUI7QUFBbkI7SUFBQTtBQUFtQjtBQUFuQjtJQUFBO0FBQW1CO0FBQW5CO0lBQUE7QUFBbUI7QUFBbkI7SUFBQTtBQUFtQjtBQUFuQjtJQUFBO1FBQUEsVUFBbUI7UUFBbkI7SUFBbUI7SUFBbkI7UUFBQSxVQUFtQjtRQUFuQjtJQUFtQjtBQUFBO0FBQW5CO0lBQUE7QUFBbUI7QUFBbkI7SUFBQTtRQUFBLFVBQW1CO1FBQW5CO0lBQW1CO0lBQW5CO1FBQUEsVUFBbUI7UUFBbkI7SUFBbUI7QUFBQTtBQUFuQjtJQUFBO0FBQW1CO0FBQW5CO0lBQUE7UUFBQTtJQUFtQjtJQUFuQjtRQUFBO0lBQW1CO0FBQUE7QUFBbkI7SUFBQTtBQUFtQjtBQUFuQjtJQUFBO1FBQUEsVUFBbUI7UUFBbkI7SUFBbUI7SUFBbkI7UUFBQSxVQUFtQjtRQUFuQjtJQUFtQjtBQUFBO0FBQW5CO0lBQUE7QUFBbUI7QUFBbkI7SUFBQTtRQUFBLFVBQW1CO1FBQW5CO0lBQW1CO0lBQW5CO1FBQUEsVUFBbUI7UUFBbkI7SUFBbUI7QUFBQTtBQUFuQjtJQUFBO0FBQW1CO0FBQW5CO0lBQUE7QUFBbUI7QUFBbkI7SUFBQTtBQUFtQjtBQUFuQjtJQUFBO0FBQW1CO0FBQW5CO0lBQUEsb0NBQW1CO09BQW5CLGlDQUFtQjtZQUFuQjtBQUFtQjtBQUFuQjtJQUFBO0FBQW1CO0FBQW5CO0lBQUE7QUFBbUI7QUFBbkI7SUFBQTtBQUFtQjtBQUFuQjtJQUFBO0FBQW1CO0FBQW5CO0lBQUE7QUFBbUI7QUFBbkI7SUFBQTtBQUFtQjtBQUFuQjtJQUFBO0FBQW1CO0FBQW5CO0lBQUE7QUFBbUI7QUFBbkI7SUFBQTtBQUFtQjtBQUFuQjtJQUFBO0FBQW1CO0FBQW5CO0lBQUE7QUFBbUI7QUFBbkI7SUFBQTtBQUFtQjtBQUFuQjtJQUFBO0FBQW1CO0FBQW5CO0lBQUE7QUFBbUI7QUFBbkI7SUFBQTtBQUFtQjtBQUFuQjtJQUFBO0FBQW1CO0FBQW5CO0lBQUE7QUFBbUI7QUFBbkI7SUFBQTtBQUFtQjtBQUFuQjtJQUFBO0FBQW1CO0FBQW5CO0lBQUE7QUFBbUI7QUFBbkI7SUFBQTtBQUFtQjtBQUFuQjtJQUFBO0FBQW1CO0FBQW5CO0lBQUE7QUFBbUI7QUFBbkI7SUFBQTtBQUFtQjtBQUFuQjtJQUFBO0FBQW1CO0FBQW5CO0lBQUE7QUFBbUI7QUFBbkI7SUFBQTtBQUFtQjtBQUFuQjtJQUFBO0FBQW1CO0FBQW5CO0lBQUE7QUFBbUI7QUFBbkI7SUFBQTtBQUFtQjtBQUFuQjtJQUFBO0FBQW1CO0FBQW5CO0lBQUE7QUFBbUI7QUFBbkI7SUFBQSx1Q0FBbUI7SUFBbkI7QUFBbUI7QUFBbkI7SUFBQTtBQUFtQjtBQUFuQjtJQUFBO0FBQW1CO0FBQW5CO0lBQUE7QUFBbUI7QUFBbkI7SUFBQTtBQUFtQjtBQUFuQjtJQUFBO0FBQW1CO0FBQW5CO0lBQUE7QUFBbUI7QUFBbkI7SUFBQTtBQUFtQjtBQUFuQjtJQUFBLGlDQUFtQjtJQUFuQjtBQUFtQjtBQUFuQjtJQUFBLGlDQUFtQjtJQUFuQjtBQUFtQjtBQUFuQjtJQUFBLGlDQUFtQjtJQUFuQjtBQUFtQjtBQUFuQjtJQUFBLGlDQUFtQjtJQUFuQjtBQUFtQjtBQUFuQjtJQUFBLGlDQUFtQjtJQUFuQjtBQUFtQjtBQUFuQjtJQUFBLDZCQUFtQjtJQUFuQjtBQUFtQjtBQUFuQjtJQUFBLDZCQUFtQjtJQUFuQjtBQUFtQjtBQUFuQjtJQUFBO0FBQW1CO0FBQW5CO0lBQUEsNkJBQW1CO0lBQW5CO0FBQW1CO0FBQW5CO0lBQUEsNkJBQW1CO0lBQW5CO0FBQW1CO0FBQW5CO0lBQUEsNkJBQW1CO0lBQW5CO0FBQW1CO0FBQW5CO0lBQUEsNkJBQW1CO0lBQW5CO0FBQW1CO0FBQW5CO0lBQUEsNkJBQW1CO0lBQW5CO0FBQW1CO0FBQW5CO0lBQUEsNkJBQW1CO0lBQW5CO0FBQW1CO0FBQW5CO0lBQUEsNkJBQW1CO0lBQW5CO0FBQW1CO0FBQW5CO0lBQUEsNkJBQW1CO0lBQW5CO0FBQW1CO0FBQW5CO0lBQUEsNkJBQW1CO0lBQW5CO0FBQW1CO0FBQW5CO0lBQUEsNkJBQW1CO0lBQW5CO0FBQW1CO0FBQW5CO0lBQUEsNkJBQW1CO0lBQW5CO0FBQW1CO0FBQW5CO0lBQUEsNkJBQW1CO0lBQW5CO0FBQW1CO0FBQW5CO0lBQUEsNkJBQW1CO0lBQW5CO0FBQW1CO0FBQW5CO0lBQUEsNkJBQW1CO0lBQW5CO0FBQW1CO0FBQW5CO0lBQUE7QUFBbUI7QUFBbkI7SUFBQTtBQUFtQjtBQUFuQjtJQUFBO0FBQW1CO0FBQW5CO0lBQUE7QUFBbUI7QUFBbkI7SUFBQSxzQ0FBbUI7SUFBbkIsZ0RBQW1CO0lBQW5CO0FBQW1CO0FBQW5CO0lBQUEsc0NBQW1CO0lBQW5CLCtDQUFtQjtJQUFuQjtBQUFtQjtBQUFuQjtJQUFBLHNDQUFtQjtJQUFuQiwrQ0FBbUI7SUFBbkI7QUFBbUI7QUFBbkI7SUFBQSxzQ0FBbUI7SUFBbkIsZ0RBQW1CO0lBQW5CO0FBQW1CO0FBQW5CO0lBQUEsZ0RBQW1CO0lBQW5CO0FBQW1CO0FBQW5CO0lBQUE7QUFBbUI7QUFBbkI7SUFBQTtBQUFtQjtBQUFuQjtJQUFBO0FBQW1CO0FBQW5CO0lBQUE7QUFBbUI7QUFBbkI7SUFBQTtBQUFtQjtBQUFuQjtJQUFBO0FBQW1CO0FBQW5CO0lBQUE7QUFBbUI7QUFBbkI7SUFBQTtBQUFtQjtBQUFuQjtJQUFBO0FBQW1CO0FBQW5CO0lBQUE7QUFBbUI7QUFBbkI7SUFBQTtBQUFtQjtBQUFuQjtJQUFBO0FBQW1CO0FBQW5CO0lBQUE7QUFBbUI7QUFBbkI7SUFBQSwyQkFBbUI7SUFBbkI7QUFBbUI7QUFBbkI7SUFBQSw2QkFBbUI7SUFBbkI7QUFBbUI7QUFBbkI7SUFBQSwyQkFBbUI7SUFBbkI7QUFBbUI7QUFBbkI7SUFBQSw2QkFBbUI7SUFBbkI7QUFBbUI7QUFBbkI7SUFBQSw0QkFBbUI7SUFBbkI7QUFBbUI7QUFBbkI7SUFBQSw0QkFBbUI7SUFBbkI7QUFBbUI7QUFBbkI7SUFBQSw0QkFBbUI7SUFBbkI7QUFBbUI7QUFBbkI7SUFBQSw0QkFBbUI7SUFBbkI7QUFBbUI7QUFBbkI7SUFBQTtBQUFtQjtBQUFuQjtJQUFBO0FBQW1CO0FBQW5CO0lBQUE7QUFBbUI7QUFBbkI7SUFBQTtBQUFtQjtBQUFuQjtJQUFBO0FBQW1CO0FBQW5CO0lBQUE7QUFBbUI7QUFBbkI7SUFBQSwwQkFBbUI7SUFBbkI7QUFBbUI7QUFBbkI7SUFBQSwwQkFBbUI7SUFBbkI7QUFBbUI7QUFBbkI7SUFBQSwwQkFBbUI7SUFBbkI7QUFBbUI7QUFBbkI7SUFBQSwwQkFBbUI7SUFBbkI7QUFBbUI7QUFBbkI7SUFBQSwwQkFBbUI7SUFBbkI7QUFBbUI7QUFBbkI7SUFBQTtBQUFtQjtBQUFuQjtJQUFBO0FBQW1CO0FBQW5CO0lBQUE7QUFBbUI7QUFBbkI7SUFBQTtBQUFtQjtBQUFuQjtJQUFBLCtCQUFtQjtJQUFuQjtBQUFtQjtBQUFuQjtJQUFBLCtCQUFtQjtJQUFuQjtBQUFtQjtBQUFuQjtJQUFBLCtCQUFtQjtJQUFuQjtBQUFtQjtBQUFuQjtJQUFBLCtCQUFtQjtJQUFuQjtBQUFtQjtBQUFuQjtJQUFBLCtCQUFtQjtJQUFuQjtBQUFtQjtBQUFuQjtJQUFBLCtCQUFtQjtJQUFuQjtBQUFtQjtBQUFuQjtJQUFBLCtCQUFtQjtJQUFuQjtBQUFtQjtBQUFuQjtJQUFBLCtCQUFtQjtJQUFuQjtBQUFtQjtBQUFuQjtJQUFBLCtCQUFtQjtJQUFuQjtBQUFtQjtBQUFuQjtJQUFBLCtCQUFtQjtJQUFuQjtBQUFtQjtBQUFuQjtJQUFBLCtCQUFtQjtJQUFuQjtBQUFtQjtBQUFuQjtJQUFBLCtCQUFtQjtJQUFuQjtBQUFtQjtBQUFuQjtJQUFBLCtCQUFtQjtJQUFuQjtBQUFtQjtBQUFuQjtJQUFBLCtCQUFtQjtJQUFuQjtBQUFtQjtBQUFuQjtJQUFBLCtCQUFtQjtJQUFuQjtBQUFtQjtBQUFuQjtJQUFBO0FBQW1CO0FBQW5CO0lBQUE7QUFBbUI7QUFBbkI7SUFBQTtBQUFtQjtBQUFuQjtJQUFBLGlDQUFtQjtJQUFuQix5Q0FBbUI7SUFBbkI7QUFBbUI7QUFBbkI7SUFBQSx5Q0FBbUI7SUFBbkI7QUFBbUI7QUFBbkI7SUFBQSwrQkFBbUI7SUFBbkI7QUFBbUI7QUFBbkI7SUFBQSx3RUFBbUI7SUFBbkI7QUFBbUI7QUFBbkI7SUFBQSx3Q0FBbUI7SUFBbkIsMFJBQW1CO1lBQW5CO0FBQW1CO0FBQW5CO0lBQUEsMEdBQW1CO0lBQW5CLG1FQUFtQjtJQUFuQjtBQUFtQjtBQUFuQjtJQUFBLG1DQUFtQjtJQUFuQixtRUFBbUI7SUFBbkI7QUFBbUI7QUFBbkI7SUFBQSx1Q0FBbUI7SUFBbkIsbUVBQW1CO0lBQW5CO0FBQW1CO0FBQW5CO0lBQUE7QUFBbUI7QUFBbkI7SUFBQTtBQUFtQjtBQUFuQjtJQUFBO0FBQW1CO0FBQW5CO0lBQUE7QUFBbUI7QUFBbkI7SUFBQTtBQUFtQjtBQUFuQjtJQUFBO0FBQW1CO0FBQW5CO0lBQUE7QUFBbUI7QUFBbkI7SUFBQTtBQUFtQjtBQUFuQjtJQUFBO0FBQW1CO0FBQW5CO0lBQUE7QUFBbUI7QUFGbkI7SUFBQSwyQkNBQTtJREFBO0NDQUE7QURBQTtJQUFBLDJCQ0FBO0lEQUE7Q0NBQTtBREFBO0lBQUEsZ0NDQUE7SURBQTtDQ0FBO0FEQUE7SUFBQSxnQ0NBQTtJREFBO0NDQUE7QURBQTtJQUFBLHNDQ0FBO0lEQUE7Q0NBQTtBREFBO0lBQUEsc0NDQUE7SURBQTtDQ0FBO0FEQUE7SUFBQSxzQ0NBQTtJREFBO0NDQUE7QURBQTtJQUFBLHNDQ0FBO0lEQUE7Q0NBQTtBREFBO0lBQUEsc0NDQUE7SURBQTtDQ0FBO0FEQUE7SUFBQSxzQ0NBQTtJREFBO0NDQUE7QURBQTtJQUFBLHNDQ0FBO0lEQUE7Q0NBQTtBREFBO0lBQUEsc0NDQUE7SURBQSxrQ0NBQTtJREFBO0NDQUE7QURBQTtJQUFBLHNDQ0FBO0lEQUEsOEJDQUE7SURBQTtDQ0FBO0FEQUE7SUFBQSxzQ0NBQTtJREFBLDJHQ0FBO0lEQUEsb0VDQUE7SURBQTtDQ0FBO0FEQUE7SUFBQSw0QkNBQTtJREFBO0NDQUE7QURBQTtJQUFBLDhCQ0FBO0lEQUE7Q0NBQTtBREFBO0lBQUEsOEJDQUE7SURBQTtDQ0FBO0FEQUE7SUFBQSw4QkNBQTtJREFBO0NDQUE7QURBQTtJQUFBLDhCQ0FBO0lEQUE7Q0NBQTtBREFBO0lBQUE7Q0NBQTtBREFBO0lBQUE7Q0NBQTtBREFBO0lBQUEsOEJDQUE7SURBQTtDQ0FBO0FEQUE7SUFBQSxzQ0NBQTtJREFBLGtDQ0FBO0lEQUE7Q0NBQTtBREFBO0lBQUEsc0NDQUE7SURBQSxrQ0NBQTtJREFBO0NDQUE7QURBQTtJQUFBO1FBQUE7S0NBQTtJREFBO1FBQUE7S0NBQTtJREFBO1FBQUEsa0NDQUE7UURBQTtLQ0FBO0lEQUE7UUFBQSxrQ0NBQTtRREFBO0tDQUE7SURBQTtRQUFBLGtDQ0FBO1FEQUE7S0NBQTtJREFBO1FBQUEsa0NDQUE7UURBQTtLQ0FBO0lEQUE7UUFBQSxrQ0NBQTtRREFBO0tDQUE7SURBQTtRQUFBLDhCQ0FBO1FEQUE7S0NBQTtJREFBO1FBQUEsOEJDQUE7UURBQTtLQ0FBO0lEQUE7UUFBQSw4QkNBQTtRREFBO0tDQUE7SURBQTtRQUFBLDhCQ0FBO1FEQUE7S0NBQTtJREFBO1FBQUEsOEJDQUE7UURBQTtLQ0FBO0lEQUE7UUFBQTtLQ0FBO0lEQUE7UUFBQSw4QkNBQTtRREFBO0tDQUE7SURBQTtRQUFBLDhCQ0FBO1FEQUE7S0NBQTtJREFBO1FBQUEsOEJDQUE7UURBQTtLQ0FBO0lEQUE7UUFBQSxnQ0NBQTtRREFBO0tDQUE7SURBQTtRQUFBLGdDQ0FBO1FEQUE7S0NBQTtJREFBO1FBQUEsZ0NDQUE7UURBQTtLQ0FBO0lEQUE7UUFBQSxnQ0NBQTtRREFBO0tDQUE7SURBQTtRQUFBLGdDQ0FBO1FEQUE7S0NBQTtJREFBO1FBQUEsZ0NDQUE7UURBQTtLQ0FBO0lEQUE7UUFBQSxnQ0NBQTtRREFBO0tDQUE7SURBQTtRQUFBLGdDQ0FBO1FEQUE7S0NBQTtJREFBO1FBQUEsZ0NDQUE7UURBQTtLQ0FBO0lEQUE7UUFBQSxnQ0NBQTtRREFBO0tDQUE7SURBQTtRQUFBLGdDQ0FBO1FEQUE7S0NBQTtJREFBO1FBQUEsMENDQUE7UURBQTtLQ0FBO0lEQUE7UUFBQSw4QkNBQTtRREFBO0tDQUE7SURBQTtRQUFBLDhCQ0FBO1FEQUE7S0NBQTtDQUFBO0FEQUE7SUFBQSw2QkNBQTtJREFBO0NDQUEiLCJzb3VyY2VzQ29udGVudCI6WyJAdGFpbHdpbmQgYmFzZTtcbkB0YWlsd2luZCBjb21wb25lbnRzO1xuQHRhaWx3aW5kIHV0aWxpdGllcztcblxuQGxheWVyIGNvbXBvbmVudHMge1xuXHQuZ3B0LWNlbnRlci13aXRoLWZsZXgge1xuXHRcdEBhcHBseSBncHQtZmxleCBncHQtanVzdGlmeS1jZW50ZXIgZ3B0LWl0ZW1zLWNlbnRlcjtcblx0fVxufVxuIixudWxsXSwic291cmNlUm9vdCI6IiJ9 */</style></head>
<body  data-new-gr-c-s-check-loaded="14.1097.0" data-gr-ext-installed=""  ng-app="myApp" ng-controller="myCtrl">

    <div class="container">
       <div class="card">
      <div class="card-header">
     <button id="printpagebutton" onclick="printpage();" style="
    position: absolute;
    right: 284px;
">Print</button>
        <span class="float-left "><img src="/public/images/logo.jpg" style="width: 14%;position: absolute;right: 57px;" alt="No Logo"></span>
       
       <div class="float-center">

        <h4>Company Name</h4>
        <small> Comapany Address,Pune, Maharashtra </small><br>
        <small>+91-9999999999 &emsp;  support@example.com &emsp;   www.example.com </small>

       </div>
       
        <div class="float-left">
        <strong>Purchase Order No.{{$data->id}}</strong> 
        <br> 
        <strong>Vendor Name :{{$data->vendor}}</strong> 
         
        </div>
      </div>
      <div class="card-body">
      <div class="row mb-4">
      <div class="col-sm-6">
      <h6 class="mb-3">Vendor</h6>
     <div>Contact Person : {{$data->vendor}}</div>
      <div>Street Address : {{($vendor_other['address'])}}</div>
      <div>City : {{($vendor_other['city'])}}</div>
      <div>Zip Code : {{($vendor_other['zip'])}}</div>
<div>Phone : {{($vendor_other['phone'])}}</div>
<div>Email : {{($vendor_other['email'])}}</div>
      </div>
      
      <div class="col-sm-6">
      <h6 class="mb-3">Ship To</h6>
      
     <div>Contact Person : {{$data->customer}}</div>
      <div>Street Address :{{($customer_other['address'])}}</div>
      <div>City : {{($customer_other['city'])}}</div>
      <div>Zip Code : {{($customer_other['zip'])}}</div>
<div>Phone : {{($customer_other['phone'])}}</div>
<div>Email : {{($customer_other['email'])}}</div>

      </div>
      
      
      
      </div>
      
      <div class="table-responsive-sm">
      <table class="table table-striped">
      <thead>
      <tr>
      <th class="center">Item ID</th>
      <th>Item</th>
      <th>Description</th>
      
      <th class="left">Quantity</th>
        <th class="center">Price</th>
      <th class="right">Total</th>
      <!--
      <th class="right" onclick="addnew()">Add <i class="fa fa-plus" aria-hidden="true"></i></th>
  -->
      </tr>
      </thead>
      <tbody>
        @if($item !=null)
        @foreach($item as $product)

      <tr>
      <td class="center">{{$product['id']}}</td>
      <td class="left strong">{{$product['name']}}</td>
      <td class="left">{{$product['desc']}}</td>
      
      <td class="center">{{$product['qty']}}</td>
        <td class="left">{{$product['price']}}</td>
      <td class="right">{{$product['total']}}</td>
      </tr>
            @endforeach
        @endif
   
      </tbody>
      </table>
      </div>
      <div class="row">
      
      
      <div class="col-md-6"><b class=" border rounded justify-content-center  d-flex align-items-center">Notes and Instructions</b>
    
<p>1. Please mention purchase order number in the invoice</p>
<p>2. All deliveries to be made to the shipping address mentioned above.</p>
<p>3. We reserve the right to reject goods that are not in good order or condition as determined by our quality control.</p>
<p>4. Goods to be delivered within 15 days from date of PO</p>
</div>
<div class="col-lg-4 col-sm-5 ml-auto ">

    
        <table class="table table-clear ">
        <tbody><tr><td>Sub Total : {{$data->total_bill}}</td>
        </tr></tbody><tbody>
          <tr style="page-break-after: always;">
            <td class="left">Discount:0</td>       
          </tr>
          <tr>
            <td class="left">Sales Tax 3%: {{$data->total_bill* (3 / 100) }}</td>       
          </tr>
          <tr>
            <td class="left">Shipping: 0 </td>       
          </tr>
          <tr>
            <td class="left"><strong>Total : {{$data->total_bill+$data->total_bill* (3 / 100) }}</strong></td>       
          </tr>

          
          
          </tbody><tbody>
        </tbody></table>
      </div>
      
    
      
      </div>
      
      </div>
      
      </div>

      <h6 style="margin-left:30%;">Thank you for choosing us to do your bussiness</h6>
      </div>
     
    
  


<div id="merlinExt-merlinGUI" class="merlinExt merlinGUI"></div><div id="merlinExt-ctrlGMessage" class="merlinExt ctrlGMessage"></div><div id="merlinExt-selectContextBtn" class="merlinExt selectContextBtn"></div></body><grammarly-desktop-integration data-grammarly-shadow-root="true"></grammarly-desktop-integration></html>