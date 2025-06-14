<?php include './logic/session.php'; ?>
<?php include './logic/get_random3_trips.php'; ?>
<?php include './logic/get_random4_products.php'; ?>
<!DOCTYPE html>
<html lang="en"><head>
    <?php include './components/website-icon.php'; ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wilderness Escape | Premium Camping Experiences</title>
    <script src="https://cdn.tailwindcss.com"></script><style type="text/css" id="operaUserStyle">
  video {
    filter: -opera-shader(url(data:text/plain;base64,Ly8gaHR0cHM6Ly9naXRodWIuY29tL0dQVU9wZW4tRWZmZWN0cy9GaWRlbGl0eUZYLUNBUwovLyB2MwoKdW5pZm9ybSBzaGFkZXIgaUNodW5rOwp1bmlmb3JtIGZsb2F0MiBpQ2h1bmtTaXplOwp1bmlmb3JtIGZsb2F0MiBpTW91c2U7CnVuaWZvcm0gZmxvYXQgaUFyZ3NbMV07Cgpjb25zdCBmbG9hdCBFUFNJT04gPSAwLjE7CmNvbnN0IGZsb2F0IFZfTUlOID0gMDsKY29uc3QgZmxvYXQgVl9MT1cgPSAwLjI1Owpjb25zdCBmbG9hdCBWX01FRCA9IDAuNTsKY29uc3QgZmxvYXQgVl9ISUdIID0gMC43NTsKY29uc3QgZmxvYXQgVl9NQVggPSAxOwoKY29uc3QgZmxvYXQgVEhSRVNIT0xEX0FSRUEgPSA4MDAgKiA2MDA7CmNvbnN0IGZsb2F0IE1JTl9BUkVBID0gNDAwICogMTAwOwpjb25zdCBmbG9hdCBNSU5fU1RSSVAgPSAyMDsKY29uc3QgZmxvYXQgTUFSR0lOID0gMTsKCmZsb2F0MyBwaXhlbChpbnQgeCwgaW50IHksIGZsb2F0MiB4eSkgewogICAgcmV0dXJuIGlDaHVuay5ldmFsKHh5ICsgZmxvYXQyKHgsIHkpKS5yZ2I7Cn0KCmZsb2F0MyBzaGFycGVuKGZsb2F0MiB4eSkgewogICAgZmxvYXQzIGYgPQogICAgICAgIHBpeGVsKC0xLCAtMSwgeHkpICogIDEgKwogICAgICAgIHBpeGVsKCAwLCAtMSwgeHkpICogLTEgKwogICAgICAgIHBpeGVsKCAxLCAtMSwgeHkpICogIDEgKwoKICAgICAgICBwaXhlbCgtMSwgMCwgeHkpICogLTEgICsKICAgICAgICBwaXhlbCggMCwgMCwgeHkpICogLTEgICsKICAgICAgICBwaXhlbCggMSwgMCwgeHkpICogLTEgICsKCiAgICAgICAgcGl4ZWwoLTEsIDEsIHh5KSAqIDEgICArCiAgICAgICAgcGl4ZWwoIDAsIDEsIHh5KSAqIC0xICArCiAgICAgICAgcGl4ZWwoIDEsIDEsIHh5KSAqIDE7CiAgICByZXR1cm4gZiAvIC0xOwp9CgpmbG9hdDQgUkdYMihmbG9hdDIgeHkpIHsKICAgIGZsb2F0NCBjb2xvciA9IGlDaHVuay5ldmFsKHh5KTsKCiAgICBpZiAoaUNodW5rU2l6ZS54ICogaUNodW5rU2l6ZS55IDwgTUlOX0FSRUEpIHsKICAgICAgICByZXR1cm4gY29sb3I7CiAgICB9CgogICAgaWYgKGlDaHVua1NpemUueSA8IE1JTl9TVFJJUCB8fCBpQ2h1bmtTaXplLnggPCBNSU5fU1RSSVApIHsKICAgICAgICByZXR1cm4gY29sb3I7CiAgICB9CgogICAgaWYgKHh5LnggPCBNQVJHSU4gfHwgeHkueCA+IChpQ2h1bmtTaXplLnggLSBNQVJHSU4pIHx8CiAgICAgICAgeHkueSA8IE1BUkdJTiB8fCB4eS55ID4gKGlDaHVua1NpemUueSAtIE1BUkdJTikpIHsKICAgICAgICByZXR1cm4gY29sb3I7CiAgICB9CgogICAgcmV0dXJuIGZsb2F0NChzaGFycGVuKHh5KSwgMSk7Cn0KCmZsb2F0IG1pbjMoZmxvYXQgeCwgZmxvYXQgeSwgZmxvYXQgeikgewogICAgcmV0dXJuIG1pbih4LCBtaW4oeSwgeikpOwp9CgpmbG9hdCBtYXgzKGZsb2F0IHgsIGZsb2F0IHksIGZsb2F0IHopIHsKICAgIHJldHVybiBtYXgoeCwgbWF4KHksIHopKTsKfQoKZmxvYXQgcmNwKGZsb2F0IHYpIHsKICAgIHJldHVybiAxIC8gdjsKfQoKZmxvYXQzIFJHWDMoZmxvYXQyIHh5LCBmbG9hdCBzdHJlbmd0aCkgewogICAgZmxvYXQzIGEgPSBwaXhlbCgtMSwgLTEsIHh5KTsKICAgIGZsb2F0MyBiID0gcGl4ZWwoIDAsIC0xLCB4eSk7CiAgICBmbG9hdDMgYyA9IHBpeGVsKCAxLCAtMSwgeHkpOwoKICAgIGZsb2F0MyBkID0gcGl4ZWwoLTEsIDAsIHh5KTsKICAgIGZsb2F0MyBlID0gcGl4ZWwoIDAsIDAsIHh5KTsKICAgIGZsb2F0MyBmID0gcGl4ZWwoIDEsIDAsIHh5KTsKCiAgICBmbG9hdDMgZyA9IHBpeGVsKC0xLCAxLCB4eSk7CiAgICBmbG9hdDMgaCA9IHBpeGVsKCAwLCAxLCB4eSk7CiAgICBmbG9hdDMgaSA9IHBpeGVsKCAxLCAxLCB4eSk7CgogICAgZmxvYXQgbW5SID0gbWluMyhtaW4zKGQuciwgZS5yLCBmLnIpLCBiLnIsIGgucik7CiAgICBmbG9hdCBtbkcgPSBtaW4zKG1pbjMoZC5nLCBlLmcsIGYuZyksIGIuZywgaC5nKTsKICAgIGZsb2F0IG1uQiA9IG1pbjMobWluMyhkLmIsIGUuYiwgZi5iKSwgYi5iLCBoLmIpOwoKICAgIGZsb2F0IG1uUjIgPSBtaW4zKG1pbjMobW5SLCBhLnIsIGMuciksIGcuciwgaS5yKTsKICAgIGZsb2F0IG1uRzIgPSBtaW4zKG1pbjMobW5HLCBhLmcsIGMuZyksIGcuZywgaS5nKTsKICAgIGZsb2F0IG1uQjIgPSBtaW4zKG1pbjMobW5CLCBhLmIsIGMuYiksIGcuYiwgaS5iKTsKCiAgICBtblIgPSBtblIgKyBtblIyOwogICAgbW5HID0gbW5HICsgbW5HMjsKICAgIG1uQiA9IG1uQiArIG1uQjI7CgogICAgZmxvYXQgbXhSID0gbWF4MyhtYXgzKGQuciwgZS5yLCBmLnIpLCBiLnIsIGgucik7CiAgICBmbG9hdCBteEcgPSBtYXgzKG1heDMoZC5nLCBlLmcsIGYuZyksIGIuZywgaC5nKTsKICAgIGZsb2F0IG14QiA9IG1heDMobWF4MyhkLmIsIGUuYiwgZi5iKSwgYi5iLCBoLmIpOwoKICAgIGZsb2F0IG14UjIgPSBtYXgzKG1heDMobXhSLCBhLnIsIGMuciksIGcuciwgaS5yKTsKICAgIGZsb2F0IG14RzIgPSBtYXgzKG1heDMobXhHLCBhLmcsIGMuZyksIGcuZywgaS5nKTsKICAgIGZsb2F0IG14QjIgPSBtYXgzKG1heDMobXhCLCBhLmIsIGMuYiksIGcuYiwgaS5iKTsKCiAgICBteFIgPSBteFIgKyBteFIyOwogICAgbXhHID0gbXhHICsgbXhHMjsKICAgIG14QiA9IG14QiArIG14QjI7CgogICAgZmxvYXQgcmNwTVIgPSByY3AobXhSKTsKICAgIGZsb2F0IHJjcE1HID0gcmNwKG14Ryk7CiAgICBmbG9hdCByY3BNQiA9IHJjcChteEIpOwoKICAgIGZsb2F0IGFtcFIgPSBzYXR1cmF0ZShtaW4obW5SLCAyIC0gbXhSKSAqIHJjcE1SKTsKICAgIGZsb2F0IGFtcEcgPSBzYXR1cmF0ZShtaW4obW5HLCAyIC0gbXhHKSAqIHJjcE1HKTsKICAgIGZsb2F0IGFtcEIgPSBzYXR1cmF0ZShtaW4obW5CLCAyIC0gbXhCKSAqIHJjcE1CKTsKCiAgICBhbXBSID0gc3FydChhbXBSKTsKICAgIGFtcEcgPSBzcXJ0KGFtcEcpOwogICAgYW1wQiA9IHNxcnQoYW1wQik7CgogICAgZmxvYXQgcGVhayA9IC1yY3AobWl4KDgsIDUsIHN0cmVuZ3RoKSk7CgogICAgZmxvYXQgd1IgPSBhbXBSICogcGVhazsKICAgIGZsb2F0IHdHID0gYW1wRyAqIHBlYWs7CiAgICBmbG9hdCB3QiA9IGFtcEIgKiBwZWFrOwoKICAgIGZsb2F0IHJjcFdlaWdodFIgPSByY3AoMSArIDQgKiB3Uik7CiAgICBmbG9hdCByY3BXZWlnaHRHID0gcmNwKDEgKyA0ICogd0cpOwogICAgZmxvYXQgcmNwV2VpZ2h0QiA9IHJjcCgxICsgNCAqIHdCKTsKCiAgICByZXR1cm4gZmxvYXQzKAogICAgICAgIHNhdHVyYXRlKChiLnIgKiB3UiArIGQuciAqIHdSICsgZi5yICogd1IgKyBoLnIgKiB3UiArIGUucikgKiByY3BXZWlnaHRSKSwKICAgICAgICBzYXR1cmF0ZSgoYi5nICogd0cgKyBkLmcgKiB3RyArIGYuZyAqIHdHICsgaC5nICogd0cgKyBlLmcpICogcmNwV2VpZ2h0RyksCiAgICAgICAgc2F0dXJhdGUoKGIuYiAqIHdCICsgZC5iICogd0IgKyBmLmIgKiB3QiArIGguYiAqIHdCICsgZS5iKSAqIHJjcFdlaWdodEIpKTsKfQoKCmZsb2F0NCBtYWluKGZsb2F0MiB4eSkgewoKICAgIGZsb2F0NCBvcmlnaW5hbENvbG9yID0gaUNodW5rLmV2YWwoeHkpOwogICAgaWYgKG9yaWdpbmFsQ29sb3IuYSA8IDEpIHsKICAgICAgICByZXR1cm4gaUNodW5rLmV2YWwoeHkpOwogICAgfQoKICAgIGZsb2F0IGludGVuc2l0eSA9IGlBcmdzWzBdOwogICAgZmxvYXQgc3RyZW5ndGggPSAwOwogICAgZmxvYXQzIGNvbG9yOwoKICAgIGlmIChpbnRlbnNpdHkgPCBWX01JTiArIEVQU0lPTikgewogICAgICAgIHN0cmVuZ3RoID0gMC4xMDsKICAgICAgICBjb2xvciA9IFJHWDMoeHksIHN0cmVuZ3RoKTsKCiAgICB9IGVsc2UgaWYgKGludGVuc2l0eSA+IFZfTE9XIC0gRVBTSU9OICYmIGludGVuc2l0eSA8IFZfTE9XICsgRVBTSU9OKSB7CiAgICAgICAgc3RyZW5ndGggPSAwLjMzOwogICAgICAgIGNvbG9yID0gUkdYMyh4eSwgc3RyZW5ndGgpOwoKICAgIH0gZWxzZSBpZiAoaW50ZW5zaXR5ID4gVl9NRUQgLSBFUFNJT04gJiYgaW50ZW5zaXR5IDwgVl9NRUQgKyBFUFNJT04pIHsKICAgICAgICBzdHJlbmd0aCA9IDAuNTsKICAgICAgICBjb2xvciA9IFJHWDMoeHksIHN0cmVuZ3RoKTsKCiAgICB9IGVsc2UgaWYgKGludGVuc2l0eSA+IFZfSElHSCAtIEVQU0lPTiAmJiBpbnRlbnNpdHkgPCBWX0hJR0ggKyBFUFNJT04pIHsKICAgICAgICBzdHJlbmd0aCA9IDAuOTk7CiAgICAgICAgY29sb3IgPSBSR1gzKHh5LCBzdHJlbmd0aCk7CgogICAgfSBlbHNlIGlmIChpbnRlbnNpdHkgPiBWX01BWCAtIEVQU0lPTikgewogICAgICAgIHN0cmVuZ3RoID0gMTsKICAgICAgICBjb2xvciA9IFJHWDIoeHkpLnJnYjsKICAgIH0KCiAgICByZXR1cm4gZmxvYXQ0KGNvbG9yLCBvcmlnaW5hbENvbG9yLmEpOwp9) -opera-args(0.75 calc(env(-opera-accent-color-r, 255)/255) calc(env(-opera-accent-color-g, 255)/255) calc(env(-opera-accent-color-b, 255)/255)));
  }
</style>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap');
        
        :root {
            --primary: #388e3c;
            --background: #F2F4F5;
        }
        
        body {
            font-family: 'Montserrat', sans-serif;
            background-color: var(--background);
        }
        
        .primary-bg {
            background-color: var(--primary);
        }
        
        .primary-text {
            color: var(--primary);
        }
        
        .hero-section {
            background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='1200' height='600' viewBox='0 0 1200 600'%3E%3Crect width='1200' height='600' fill='%23333'/%3E%3Cpath d='M600,500 L800,200 L1000,500 Z' fill='%23555'/%3E%3Cpath d='M400,500 L600,100 L800,500 Z' fill='%23444'/%3E%3Cpath d='M200,500 L400,200 L600,500 Z' fill='%23555'/%3E%3Cpath d='M0,500 L200,300 L400,500 Z' fill='%23444'/%3E%3Cpath d='M800,500 L1000,300 L1200,500 Z' fill='%23444'/%3E%3Ccircle cx='900' cy='150' r='50' fill='%23ffcc00' opacity='0.8'/%3E%3C/svg%3E");
            background-size: cover;
            background-position: center;
            height: 600px;
        }
        
        .testimonial-card {
            transition: transform 0.3s ease;
        }
        
        .testimonial-card:hover {
            transform: translateY(-5px);
        }
        
        .nav-link {
            position: relative;
        }
        
        .nav-link::after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            bottom: -2px;
            left: 0;
            background-color: white;
            transition: width 0.3s ease;
        }
        
        .nav-link:hover::after {
            width: 100%;
        }
        
        .camping-card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        
        .camping-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
        }
        
        .scroll-to-top {
            display: none;
            position: fixed;
            bottom: 20px;
            right: 20px;
            z-index: 99;
            cursor: pointer;
            transition: opacity 0.3s ease;
        }
    </style>
<style>*, ::before, ::after{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-gradient-from-position: ;--tw-gradient-via-position: ;--tw-gradient-to-position: ;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: ;--tw-contain-size: ;--tw-contain-layout: ;--tw-contain-paint: ;--tw-contain-style: }::backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-gradient-from-position: ;--tw-gradient-via-position: ;--tw-gradient-to-position: ;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: ;--tw-contain-size: ;--tw-contain-layout: ;--tw-contain-paint: ;--tw-contain-style: }/* ! tailwindcss v3.4.16 | MIT License | https://tailwindcss.com */*,::after,::before{box-sizing:border-box;border-width:0;border-style:solid;border-color:#e5e7eb}::after,::before{--tw-content:''}:host,html{line-height:1.5;-webkit-text-size-adjust:100%;-moz-tab-size:4;tab-size:4;font-family:ui-sans-serif, system-ui, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";font-feature-settings:normal;font-variation-settings:normal;-webkit-tap-highlight-color:transparent}body{margin:0;line-height:inherit}hr{height:0;color:inherit;border-top-width:1px}abbr:where([title]){-webkit-text-decoration:underline dotted;text-decoration:underline dotted}h1,h2,h3,h4,h5,h6{font-size:inherit;font-weight:inherit}a{color:inherit;text-decoration:inherit}b,strong{font-weight:bolder}code,kbd,pre,samp{font-family:ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;font-feature-settings:normal;font-variation-settings:normal;font-size:1em}small{font-size:80%}sub,sup{font-size:75%;line-height:0;position:relative;vertical-align:baseline}sub{bottom:-.25em}sup{top:-.5em}table{text-indent:0;border-color:inherit;border-collapse:collapse}button,input,optgroup,select,textarea{font-family:inherit;font-feature-settings:inherit;font-variation-settings:inherit;font-size:100%;font-weight:inherit;line-height:inherit;letter-spacing:inherit;color:inherit;margin:0;padding:0}button,select{text-transform:none}button,input:where([type=button]),input:where([type=reset]),input:where([type=submit]){-webkit-appearance:button;background-color:transparent;background-image:none}:-moz-focusring{outline:auto}:-moz-ui-invalid{box-shadow:none}progress{vertical-align:baseline}::-webkit-inner-spin-button,::-webkit-outer-spin-button{height:auto}[type=search]{-webkit-appearance:textfield;outline-offset:-2px}::-webkit-search-decoration{-webkit-appearance:none}::-webkit-file-upload-button{-webkit-appearance:button;font:inherit}summary{display:list-item}blockquote,dd,dl,figure,h1,h2,h3,h4,h5,h6,hr,p,pre{margin:0}fieldset{margin:0;padding:0}legend{padding:0}menu,ol,ul{list-style:none;margin:0;padding:0}dialog{padding:0}textarea{resize:vertical}input::placeholder,textarea::placeholder{opacity:1;color:#9ca3af}[role=button],button{cursor:pointer}:disabled{cursor:default}audio,canvas,embed,iframe,img,object,svg,video{display:block;vertical-align:middle}img,video{max-width:100%;height:auto}[hidden]:where(:not([hidden=until-found])){display:none}.container{width:100%}@media (min-width: 640px){.container{max-width:640px}}@media (min-width: 768px){.container{max-width:768px}}@media (min-width: 1024px){.container{max-width:1024px}}@media (min-width: 1280px){.container{max-width:1280px}}@media (min-width: 1536px){.container{max-width:1536px}}.absolute{position:absolute}.relative{position:relative}.sticky{position:sticky}.bottom-0{bottom:0px}.left-0{left:0px}.right-0{right:0px}.top-0{top:0px}.z-50{z-index:50}.mx-auto{margin-left:auto;margin-right:auto}.my-4{margin-top:1rem;margin-bottom:1rem}.mb-1{margin-bottom:0.25rem}.mb-12{margin-bottom:3rem}.mb-2{margin-bottom:0.5rem}.mb-4{margin-bottom:1rem}.mb-8{margin-bottom:2rem}.ml-2{margin-left:0.5rem}.ml-3{margin-left:0.75rem}.mr-2{margin-right:0.5rem}.mt-12{margin-top:3rem}.mt-6{margin-top:1.5rem}.block{display:block}.flex{display:flex}.grid{display:grid}.hidden{display:none}.h-10{height:2.5rem}.h-16{height:4rem}.h-24{height:6rem}.h-48{height:12rem}.h-5{height:1.25rem}.h-6{height:1.5rem}.h-64{height:16rem}.h-8{height:2rem}.h-full{height:100%}.w-10{width:2.5rem}.w-16{width:4rem}.w-24{width:6rem}.w-5{width:1.25rem}.w-6{width:1.5rem}.w-8{width:2rem}.w-full{width:100%}.max-w-2xl{max-width:42rem}.scale-105{--tw-scale-x:1.05;--tw-scale-y:1.05;transform:translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}.transform{transform:translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}.grid-cols-1{grid-template-columns:repeat(1, minmax(0, 1fr))}.flex-col{flex-direction:column}.items-center{align-items:center}.justify-center{justify-content:center}.justify-between{justify-content:space-between}.gap-4{gap:1rem}.gap-6{gap:1.5rem}.gap-8{gap:2rem}.space-x-2 > :not([hidden]) ~ :not([hidden]){--tw-space-x-reverse:0;margin-right:calc(0.5rem * var(--tw-space-x-reverse));margin-left:calc(0.5rem * calc(1 - var(--tw-space-x-reverse)))}.space-x-8 > :not([hidden]) ~ :not([hidden]){--tw-space-x-reverse:0;margin-right:calc(2rem * var(--tw-space-x-reverse));margin-left:calc(2rem * calc(1 - var(--tw-space-x-reverse)))}.space-y-3 > :not([hidden]) ~ :not([hidden]){--tw-space-y-reverse:0;margin-top:calc(0.75rem * calc(1 - var(--tw-space-y-reverse)));margin-bottom:calc(0.75rem * var(--tw-space-y-reverse))}.overflow-hidden{overflow:hidden}.rounded{border-radius:0.25rem}.rounded-full{border-radius:9999px}.rounded-lg{border-radius:0.5rem}.border{border-width:1px}.border-2{border-width:2px}.border-gray-200{--tw-border-opacity:1;border-color:rgb(229 231 235 / var(--tw-border-opacity, 1))}.border-green-600{--tw-border-opacity:1;border-color:rgb(22 163 74 / var(--tw-border-opacity, 1))}.bg-gray-100{--tw-bg-opacity:1;background-color:rgb(243 244 246 / var(--tw-bg-opacity, 1))}.bg-gray-200{--tw-bg-opacity:1;background-color:rgb(229 231 235 / var(--tw-bg-opacity, 1))}.bg-gray-300{--tw-bg-opacity:1;background-color:rgb(209 213 219 / var(--tw-bg-opacity, 1))}.bg-gray-50{--tw-bg-opacity:1;background-color:rgb(249 250 251 / var(--tw-bg-opacity, 1))}.bg-green-100{--tw-bg-opacity:1;background-color:rgb(220 252 231 / var(--tw-bg-opacity, 1))}.bg-white{--tw-bg-opacity:1;background-color:rgb(255 255 255 / var(--tw-bg-opacity, 1))}.bg-yellow-500{--tw-bg-opacity:1;background-color:rgb(234 179 8 / var(--tw-bg-opacity, 1))}.bg-gradient-to-t{background-image:linear-gradient(to top, var(--tw-gradient-stops))}.from-black{--tw-gradient-from:#000 var(--tw-gradient-from-position);--tw-gradient-to:rgb(0 0 0 / 0) var(--tw-gradient-to-position);--tw-gradient-stops:var(--tw-gradient-from), var(--tw-gradient-to)}.to-transparent{--tw-gradient-to:transparent var(--tw-gradient-to-position)}.p-4{padding:1rem}.p-6{padding:1.5rem}.px-4{padding-left:1rem;padding-right:1rem}.px-8{padding-left:2rem;padding-right:2rem}.py-1{padding-top:0.25rem;padding-bottom:0.25rem}.py-16{padding-top:4rem;padding-bottom:4rem}.py-2{padding-top:0.5rem;padding-bottom:0.5rem}.py-3{padding-top:0.75rem;padding-bottom:0.75rem}.pb-4{padding-bottom:1rem}.pt-3{padding-top:0.75rem}.text-center{text-align:center}.text-2xl{font-size:1.5rem;line-height:2rem}.text-3xl{font-size:1.875rem;line-height:2.25rem}.text-4xl{font-size:2.25rem;line-height:2.5rem}.text-lg{font-size:1.125rem;line-height:1.75rem}.text-sm{font-size:0.875rem;line-height:1.25rem}.text-xl{font-size:1.25rem;line-height:1.75rem}.font-bold{font-weight:700}.font-medium{font-weight:500}.font-semibold{font-weight:600}.text-gray-200{--tw-text-opacity:1;color:rgb(229 231 235 / var(--tw-text-opacity, 1))}.text-gray-300{--tw-text-opacity:1;color:rgb(209 213 219 / var(--tw-text-opacity, 1))}.text-gray-400{--tw-text-opacity:1;color:rgb(156 163 175 / var(--tw-text-opacity, 1))}.text-gray-500{--tw-text-opacity:1;color:rgb(107 114 128 / var(--tw-text-opacity, 1))}.text-gray-600{--tw-text-opacity:1;color:rgb(75 85 99 / var(--tw-text-opacity, 1))}.text-gray-800{--tw-text-opacity:1;color:rgb(31 41 55 / var(--tw-text-opacity, 1))}.text-white{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity, 1))}.text-yellow-400{--tw-text-opacity:1;color:rgb(250 204 21 / var(--tw-text-opacity, 1))}.shadow-lg{--tw-shadow:0 10px 15px -3px rgb(0 0 0 / 0.1), 0 4px 6px -4px rgb(0 0 0 / 0.1);--tw-shadow-colored:0 10px 15px -3px var(--tw-shadow-color), 0 4px 6px -4px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.shadow-md{--tw-shadow:0 4px 6px -1px rgb(0 0 0 / 0.1), 0 2px 4px -2px rgb(0 0 0 / 0.1);--tw-shadow-colored:0 4px 6px -1px var(--tw-shadow-color), 0 2px 4px -2px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.transition{transition-property:color, background-color, border-color, fill, stroke, opacity, box-shadow, transform, filter, -webkit-text-decoration-color, -webkit-backdrop-filter;transition-property:color, background-color, border-color, text-decoration-color, fill, stroke, opacity, box-shadow, transform, filter, backdrop-filter;transition-property:color, background-color, border-color, text-decoration-color, fill, stroke, opacity, box-shadow, transform, filter, backdrop-filter, -webkit-text-decoration-color, -webkit-backdrop-filter;transition-timing-function:cubic-bezier(0.4, 0, 0.2, 1);transition-duration:150ms}.transition-shadow{transition-property:box-shadow;transition-timing-function:cubic-bezier(0.4, 0, 0.2, 1);transition-duration:150ms}.transition-transform{transition-property:transform;transition-timing-function:cubic-bezier(0.4, 0, 0.2, 1);transition-duration:150ms}.duration-300{transition-duration:300ms}.hover\:scale-105:hover{--tw-scale-x:1.05;--tw-scale-y:1.05;transform:translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}.hover\:bg-gray-100:hover{--tw-bg-opacity:1;background-color:rgb(243 244 246 / var(--tw-bg-opacity, 1))}.hover\:bg-opacity-90:hover{--tw-bg-opacity:0.9}.hover\:shadow-xl:hover{--tw-shadow:0 20px 25px -5px rgb(0 0 0 / 0.1), 0 8px 10px -6px rgb(0 0 0 / 0.1);--tw-shadow-colored:0 20px 25px -5px var(--tw-shadow-color), 0 8px 10px -6px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.focus\:outline-none:focus{outline:2px solid transparent;outline-offset:2px}@media (min-width: 768px){.md\:flex{display:flex}.md\:hidden{display:none}.md\:grid-cols-2{grid-template-columns:repeat(2, minmax(0, 1fr))}.md\:grid-cols-3{grid-template-columns:repeat(3, minmax(0, 1fr))}.md\:flex-row{flex-direction:row}.md\:text-2xl{font-size:1.5rem;line-height:2rem}.md\:text-6xl{font-size:3.75rem;line-height:1}}@media (min-width: 1024px){.lg\:grid-cols-3{grid-template-columns:repeat(3, minmax(0, 1fr))}.lg\:grid-cols-4{grid-template-columns:repeat(4, minmax(0, 1fr))}}</style></head>
<body>
    <!-- Navigation -->
    <?php include './components/navbar.php'; ?>

    <!-- Hero Section -->
    <section id="home" class="hero-section flex items-center justify-center h-[100vh]">
        <div class="text-center text-white px-4">
            <h1 class="text-4xl md:text-6xl font-bold mb-4">Discover the Great Outdoors</h1>
            <p class="text-xl md:text-2xl mb-8">Unforgettable camping experiences in nature's most beautiful locations</p>
            <div class="flex flex-col md:flex-row justify-center gap-4">
                <a href="trips.php" class="primary-bg text-white font-semibold py-3 px-8 rounded-lg hover:bg-opacity-90 transition duration-300 shadow-lg">
                    Explore Destinations
</a>
                <a href="store.php" class="bg-white text-gray-800 font-semibold py-3 px-8 rounded-lg hover:bg-opacity-90 transition duration-300 shadow-lg">
                    View Products
</a>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="py-16 px-4">
        <div class="container mx-auto">
            <h2 class="text-3xl font-bold text-center mb-12">Why Choose ESCAPE?</h2>
            
            <div class="grid grid-cols-3 md:grid-cols-3 gap-8">
                <div class="bg-white p-6 rounded-lg shadow-md text-center">
                    <div class="bg-green-100 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 primary-text" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-2">Safety First</h3>
                    <p class="text-gray-600">All our camping sites are regularly inspected and maintained to ensure your safety and comfort.</p>
                </div>
                
                <div class="bg-white p-6 rounded-lg shadow-md text-center">
                    <div class="bg-green-100 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 primary-text" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16H9m3 0h3"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-2">Expert Guides</h3>
                    <p class="text-gray-600">Our experienced guides know the terrain and will enhance your outdoor adventure.</p>
                </div>
                
                <div class="bg-white p-6 rounded-lg shadow-md text-center">
                    <div class="bg-green-100 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 primary-text" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-2">Premium Equipment</h3>
                    <p class="text-gray-600">We provide high-quality camping gear to ensure your comfort in the ESCAPE.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Destinations Section -->
    <section id="destinations" class="py-16 px-4 bg-white">
        <div class="container mx-auto">
            <h2 class="text-3xl font-bold text-center mb-4">Popular Destinations</h2>
            <p class="text-center text-gray-600 mb-12 max-w-2xl mx-auto">Explore our handpicked camping locations that offer breathtaking views and unforgettable experiences.</p>
            
            <div class="grid grid-cols-3 md:grid-cols-3 lg:grid-cols-3 gap-8">
        <?php if ($error): ?>
    <p class="text-red-500"><?php echo htmlspecialchars($error); ?></p>
<?php else: ?>
    <?php foreach (array_slice($trips, 0, 3) as $trip): ?>
    <div class="camping-card bg-white rounded-lg overflow-hidden shadow-lg">
        <div class="h-64 bg-gray-300 relative">
            <img src="<?php echo htmlspecialchars($trip['image_url']); ?>" alt="<?php echo htmlspecialchars($trip['label']); ?>" class="w-full h-full object-cover" />
            <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black to-transparent p-4">
                <h3 class="text-white text-xl font-bold"><?php echo htmlspecialchars($trip['label']); ?></h3>
                <p class="text-gray-200"><?php echo htmlspecialchars($trip['location'] ?? ''); ?></p>
            </div>
        </div>
        <div class="p-6">
            <div class="flex items-center mb-4">
                <div class="flex text-yellow-400">
                    <!-- 5 stars -->
                    <?php for ($i = 0; $i < 5; $i++): ?>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                        </svg>
                    <?php endfor; ?>
                </div>
                <span class="text-gray-600 ml-2"><?php echo htmlspecialchars($trip['rating'] ?? '5.0'); ?> (<?php echo htmlspecialchars($trip['reviews'] ?? 'N/A'); ?> reviews)</span>
            </div>
            <p class="text-gray-600 mb-4"><?php echo htmlspecialchars($trip['description']); ?></p>
            <div class="flex items-center justify-between">
                <span class="text-xl font-bold primary-text"><?php echo htmlspecialchars($trip['price']); ?> TND</span>
                <a href="payment.php?id=<?php echo $trip['id']; ?>" class="primary-bg text-white py-2 px-4 rounded-lg hover:bg-opacity-90 transition duration-300">Book Now</a>
            </div>
        </div>
    </div>
    <?php endforeach; ?>
<?php endif; ?>
            </div>
            
            <div class="text-center mt-12">
                <a href="trips.php" class="primary-bg text-white font-semibold py-3 px-8 rounded-lg hover:bg-opacity-90 transition duration-300 shadow-lg">
                    View All Destinations
</a>
            </div>
        </div>
    </section>


    <!-- Gear Section -->
    <section id="gear" class="py-16 px-4 bg-white">
        <div class="container mx-auto">
            <h2 class="text-3xl font-bold text-center mb-4">Essential Camping Gear</h2>
            <p class="text-center text-gray-600 mb-12 max-w-2xl mx-auto">Quality equipment for your outdoor adventures. Rent or purchase what you need for your next camping trip.</p>
            
<?php if ($error): ?>
    <p style="color: red;"><?php echo htmlspecialchars($error); ?></p>
<?php else: ?>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
        <?php foreach ($products as $product): ?>
            <a href="product.php?id=<?php echo $product['id']; ?>" class="block hover:no-underline">
                <div class="bg-gray-50 rounded-lg overflow-hidden shadow-md hover:shadow-xl transition-shadow">
                    <div class="h-48 bg-gray-200 flex items-center justify-center overflow-hidden">
                        <img 
                            src="<?php echo htmlspecialchars($product['image_url']); ?>" 
                            alt="<?php echo htmlspecialchars($product['name']); ?>" 
                            class="h-full w-full object-cover"
                        />
                    </div>
                    <div class="p-4">
                        <h3 class="font-semibold text-lg mb-2 text-gray-800 text-center">
                            <?php echo htmlspecialchars($product['name']); ?>
                        </h3>
                        <div class="text-sm text-gray-600 mb-2 line-clamp-2 text-center">
                            <?php echo htmlspecialchars(mb_strimwidth($product['description'], 0, 100, "...")); ?>
                        </div>
                        <div class="font-bold primary-text text-center text-lg mb-4">
                            <?php echo htmlspecialchars($product['price']); ?> TND
                        </div>

                               <button 
                            type="submit" 
                            class="w-full primary-bg text-white py-2 rounded hover:bg-opacity-90 transition duration-300"
                        >
                            Add to Cart
                        </button>
                    </div>
                </div>
            </a>
        <?php endforeach; ?>
    </div>
<?php endif; ?>
            
            <div class="text-center mt-12">
                <button class="primary-bg text-white font-semibold py-3 px-8 rounded-lg hover:bg-opacity-90 transition duration-300 shadow-lg">
                    View All Products
                </button>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section id="testimonials" class="py-16 px-4">
        <div class="container mx-auto">
            <h2 class="text-3xl font-bold text-center mb-4">What Our Campers Say</h2>
            <p class="text-center text-gray-600 mb-12 max-w-2xl mx-auto">Don't just take our word for it. Here's what our happy campers have to say about their experiences with us.</p>
            
            <div class="grid grid-cols-3 md:grid-cols-3 gap-8">
                <!-- Testimonial 1 -->
                <div class="testimonial-card bg-white p-6 rounded-lg shadow-md">
                    <div class="flex items-center mb-4">
                        <div class="flex text-yellow-400">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                            </svg>
                        </div>
                    </div>
                    <p class="text-gray-600 mb-4">"The Mountain Vista camping experience was absolutely incredible! The guides were knowledgeable, the equipment was top-notch, and the views were breathtaking. Can't wait to book my next trip!"</p>
                    <div class="flex items-center">
                        <div class="w-10 h-10 bg-gray-300 rounded-full flex items-center justify-center">
                            <span class="text-gray-600 font-semibold">JD</span>
                        </div>
                        <div class="ml-3">
                            <h4 class="font-semibold">John Doe</h4>
                            <p class="text-gray-500 text-sm">Mountain Vista, July 2023</p>
                        </div>
                    </div>
                </div>

                 <div class="testimonial-card bg-white p-6 rounded-lg shadow-md">
                    <div class="flex items-center mb-4">
                        <div class="flex text-yellow-400">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                            </svg>
                        </div>
                    </div>
                    <p class="text-gray-600 mb-4">"The Mountain Vista camping experience was absolutely incredible! The guides were knowledgeable, the equipment was top-notch, and the views were breathtaking. Can't wait to book my next trip!"</p>
                    <div class="flex items-center">
                        <div class="w-10 h-10 bg-gray-300 rounded-full flex items-center justify-center">
                            <span class="text-gray-600 font-semibold">JD</span>
                        </div>
                        <div class="ml-3">
                            <h4 class="font-semibold">John Doe</h4>
                            <p class="text-gray-500 text-sm">Mountain Vista, July 2023</p>
                        </div>
                    </div>
                </div>

                 <div class="testimonial-card bg-white p-6 rounded-lg shadow-md">
                    <div class="flex items-center mb-4">
                        <div class="flex text-yellow-400">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                            </svg>
                        </div>
                    </div>
                    <p class="text-gray-600 mb-4">"The Mountain Vista camping experience was absolutely incredible! The guides were knowledgeable, the equipment was top-notch, and the views were breathtaking. Can't wait to book my next trip!"</p>
                    <div class="flex items-center">
                        <div class="w-10 h-10 bg-gray-300 rounded-full flex items-center justify-center">
                            <span class="text-gray-600 font-semibold">JD</span>
                        </div>
                        <div class="ml-3">
                            <h4 class="font-semibold">John Doe</h4>
                            <p class="text-gray-500 text-sm">Mountain Vista, July 2023</p>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </section>
    <?php include './components/footer.php'; ?>

 
    <!-- Scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            // Smooth scrolling for navigation links
            $('a[href^="#"]').on('click', function(event) {
                event.preventDefault();
                var target = this.hash;
                $('html, body').animate({
                    scrollTop: $(target).offset().top
                }, 800);
            });
        });
    </script>
</body>
</html>