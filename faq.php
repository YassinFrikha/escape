<?php include './logic/session.php'; ?>
<html lang="en"><head>
    <meta charset="UTF-8">
    <?php include './components/website-icon.php'; ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Escape | Frequently Asked Questions</title>
    <script src="https://cdn.tailwindcss.com"></script>
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
        
        .faq-item {
            border-radius: 8px;
            overflow: hidden;
            transition: all 0.3s ease;
        }
        
        .faq-question {
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        
        .faq-question:hover {
            background-color: rgba(56, 142, 60, 0.1);
        }
        
        .faq-answer {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.5s ease, padding 0.5s ease;
        }
        
        .faq-item.active .faq-answer {
            max-height: 500px;
            padding: 1.5rem;
        }
        
        .faq-item.active .faq-icon-plus {
            display: none;
        }
        
        .faq-item:not(.active) .faq-icon-minus {
            display: none;
        }
        
        .social-icon {
            transition: transform 0.3s ease, color 0.3s ease;
        }
        
        .social-icon:hover {
            transform: translateY(-3px);
        }
        
        .category-button {
            transition: all 0.3s ease;
        }
        
        .category-button.active {
            background-color: var(--primary);
            color: white;
        }
        
        .search-input:focus {
            border-color: var(--primary);
            box-shadow: 0 0 0 3px rgba(56, 142, 60, 0.2);
        }
    </style>
<style>*, ::before, ::after{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-gradient-from-position: ;--tw-gradient-via-position: ;--tw-gradient-to-position: ;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: ;--tw-contain-size: ;--tw-contain-layout: ;--tw-contain-paint: ;--tw-contain-style: }::backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-gradient-from-position: ;--tw-gradient-via-position: ;--tw-gradient-to-position: ;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: ;--tw-contain-size: ;--tw-contain-layout: ;--tw-contain-paint: ;--tw-contain-style: }/* ! tailwindcss v3.4.16 | MIT License | https://tailwindcss.com */*,::after,::before{box-sizing:border-box;border-width:0;border-style:solid;border-color:#e5e7eb}::after,::before{--tw-content:''}:host,html{line-height:1.5;-webkit-text-size-adjust:100%;-moz-tab-size:4;tab-size:4;font-family:ui-sans-serif, system-ui, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";font-feature-settings:normal;font-variation-settings:normal;-webkit-tap-highlight-color:transparent}body{margin:0;line-height:inherit}hr{height:0;color:inherit;border-top-width:1px}abbr:where([title]){-webkit-text-decoration:underline dotted;text-decoration:underline dotted}h1,h2,h3,h4,h5,h6{font-size:inherit;font-weight:inherit}a{color:inherit;text-decoration:inherit}b,strong{font-weight:bolder}code,kbd,pre,samp{font-family:ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;font-feature-settings:normal;font-variation-settings:normal;font-size:1em}small{font-size:80%}sub,sup{font-size:75%;line-height:0;position:relative;vertical-align:baseline}sub{bottom:-.25em}sup{top:-.5em}table{text-indent:0;border-color:inherit;border-collapse:collapse}button,input,optgroup,select,textarea{font-family:inherit;font-feature-settings:inherit;font-variation-settings:inherit;font-size:100%;font-weight:inherit;line-height:inherit;letter-spacing:inherit;color:inherit;margin:0;padding:0}button,select{text-transform:none}button,input:where([type=button]),input:where([type=reset]),input:where([type=submit]){-webkit-appearance:button;background-color:transparent;background-image:none}:-moz-focusring{outline:auto}:-moz-ui-invalid{box-shadow:none}progress{vertical-align:baseline}::-webkit-inner-spin-button,::-webkit-outer-spin-button{height:auto}[type=search]{-webkit-appearance:textfield;outline-offset:-2px}::-webkit-search-decoration{-webkit-appearance:none}::-webkit-file-upload-button{-webkit-appearance:button;font:inherit}summary{display:list-item}blockquote,dd,dl,figure,h1,h2,h3,h4,h5,h6,hr,p,pre{margin:0}fieldset{margin:0;padding:0}legend{padding:0}menu,ol,ul{list-style:none;margin:0;padding:0}dialog{padding:0}textarea{resize:vertical}input::placeholder,textarea::placeholder{opacity:1;color:#9ca3af}[role=button],button{cursor:pointer}:disabled{cursor:default}audio,canvas,embed,iframe,img,object,svg,video{display:block;vertical-align:middle}img,video{max-width:100%;height:auto}[hidden]:where(:not([hidden=until-found])){display:none}.container{width:100%}@media (min-width: 640px){.container{max-width:640px}}@media (min-width: 768px){.container{max-width:768px}}@media (min-width: 1024px){.container{max-width:1024px}}@media (min-width: 1280px){.container{max-width:1280px}}@media (min-width: 1536px){.container{max-width:1536px}}.absolute{position:absolute}.relative{position:relative}.sticky{position:sticky}.left-3{left:0.75rem}.top-0{top:0px}.top-3{top:0.75rem}.z-50{z-index:50}.mx-auto{margin-left:auto;margin-right:auto}.mb-12{margin-bottom:3rem}.mb-2{margin-bottom:0.5rem}.mb-4{margin-bottom:1rem}.mb-6{margin-bottom:1.5rem}.mr-2{margin-right:0.5rem}.mt-16{margin-top:4rem}.mt-2{margin-top:0.5rem}.mt-4{margin-top:1rem}.mt-8{margin-top:2rem}.block{display:block}.flex{display:flex}.grid{display:grid}.hidden{display:none}.h-16{height:4rem}.h-5{height:1.25rem}.h-6{height:1.5rem}.h-8{height:2rem}.w-16{width:4rem}.w-5{width:1.25rem}.w-6{width:1.5rem}.w-8{width:2rem}.w-full{width:100%}.max-w-3xl{max-width:48rem}.max-w-5xl{max-width:64rem}.flex-shrink-0{flex-shrink:0}.list-disc{list-style-type:disc}.grid-cols-1{grid-template-columns:repeat(1, minmax(0, 1fr))}.flex-col{flex-direction:column}.flex-wrap{flex-wrap:wrap}.items-center{align-items:center}.justify-center{justify-content:center}.justify-between{justify-content:space-between}.gap-2{gap:0.5rem}.gap-4{gap:1rem}.gap-6{gap:1.5rem}.gap-8{gap:2rem}.space-x-2 > :not([hidden]) ~ :not([hidden]){--tw-space-x-reverse:0;margin-right:calc(0.5rem * var(--tw-space-x-reverse));margin-left:calc(0.5rem * calc(1 - var(--tw-space-x-reverse)))}.space-x-4 > :not([hidden]) ~ :not([hidden]){--tw-space-x-reverse:0;margin-right:calc(1rem * var(--tw-space-x-reverse));margin-left:calc(1rem * calc(1 - var(--tw-space-x-reverse)))}.space-x-8 > :not([hidden]) ~ :not([hidden]){--tw-space-x-reverse:0;margin-right:calc(2rem * var(--tw-space-x-reverse));margin-left:calc(2rem * calc(1 - var(--tw-space-x-reverse)))}.space-y-1 > :not([hidden]) ~ :not([hidden]){--tw-space-y-reverse:0;margin-top:calc(0.25rem * calc(1 - var(--tw-space-y-reverse)));margin-bottom:calc(0.25rem * var(--tw-space-y-reverse))}.space-y-2 > :not([hidden]) ~ :not([hidden]){--tw-space-y-reverse:0;margin-top:calc(0.5rem * calc(1 - var(--tw-space-y-reverse)));margin-bottom:calc(0.5rem * var(--tw-space-y-reverse))}.space-y-3 > :not([hidden]) ~ :not([hidden]){--tw-space-y-reverse:0;margin-top:calc(0.75rem * calc(1 - var(--tw-space-y-reverse)));margin-bottom:calc(0.75rem * var(--tw-space-y-reverse))}.space-y-6 > :not([hidden]) ~ :not([hidden]){--tw-space-y-reverse:0;margin-top:calc(1.5rem * calc(1 - var(--tw-space-y-reverse)));margin-bottom:calc(1.5rem * var(--tw-space-y-reverse))}.overflow-hidden{overflow:hidden}.rounded{border-radius:0.25rem}.rounded-full{border-radius:9999px}.rounded-lg{border-radius:0.5rem}.rounded-l-lg{border-top-left-radius:0.5rem;border-bottom-left-radius:0.5rem}.rounded-r-lg{border-top-right-radius:0.5rem;border-bottom-right-radius:0.5rem}.border{border-width:1px}.border-t{border-top-width:1px}.border-gray-100{--tw-border-opacity:1;border-color:rgb(243 244 246 / var(--tw-border-opacity, 1))}.border-gray-300{--tw-border-opacity:1;border-color:rgb(209 213 219 / var(--tw-border-opacity, 1))}.border-green-700{--tw-border-opacity:1;border-color:rgb(21 128 61 / var(--tw-border-opacity, 1))}.bg-gray-50{--tw-bg-opacity:1;background-color:rgb(249 250 251 / var(--tw-bg-opacity, 1))}.bg-white{--tw-bg-opacity:1;background-color:rgb(255 255 255 / var(--tw-bg-opacity, 1))}.p-5{padding:1.25rem}.p-8{padding:2rem}.px-4{padding-left:1rem;padding-right:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.px-8{padding-left:2rem;padding-right:2rem}.py-10{padding-top:2.5rem;padding-bottom:2.5rem}.py-12{padding-top:3rem;padding-bottom:3rem}.py-16{padding-top:4rem;padding-bottom:4rem}.py-2{padding-top:0.5rem;padding-bottom:0.5rem}.py-3{padding-top:0.75rem;padding-bottom:0.75rem}.pb-4{padding-bottom:1rem}.pl-12{padding-left:3rem}.pl-5{padding-left:1.25rem}.pt-3{padding-top:0.75rem}.pt-8{padding-top:2rem}.text-center{text-align:center}.text-2xl{font-size:1.5rem;line-height:2rem}.text-4xl{font-size:2.25rem;line-height:2.5rem}.text-lg{font-size:1.125rem;line-height:1.75rem}.text-sm{font-size:0.875rem;line-height:1.25rem}.text-xl{font-size:1.25rem;line-height:1.75rem}.font-bold{font-weight:700}.font-medium{font-weight:500}.font-semibold{font-weight:600}.text-gray-400{--tw-text-opacity:1;color:rgb(156 163 175 / var(--tw-text-opacity, 1))}.text-gray-600{--tw-text-opacity:1;color:rgb(75 85 99 / var(--tw-text-opacity, 1))}.text-gray-700{--tw-text-opacity:1;color:rgb(55 65 81 / var(--tw-text-opacity, 1))}.text-gray-800{--tw-text-opacity:1;color:rgb(31 41 55 / var(--tw-text-opacity, 1))}.text-green-800{--tw-text-opacity:1;color:rgb(22 101 52 / var(--tw-text-opacity, 1))}.text-white{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity, 1))}.shadow-lg{--tw-shadow:0 10px 15px -3px rgb(0 0 0 / 0.1), 0 4px 6px -4px rgb(0 0 0 / 0.1);--tw-shadow-colored:0 10px 15px -3px var(--tw-shadow-color), 0 4px 6px -4px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.shadow-md{--tw-shadow:0 4px 6px -1px rgb(0 0 0 / 0.1), 0 2px 4px -2px rgb(0 0 0 / 0.1);--tw-shadow-colored:0 4px 6px -1px var(--tw-shadow-color), 0 2px 4px -2px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.transition{transition-property:color, background-color, border-color, fill, stroke, opacity, box-shadow, transform, filter, -webkit-text-decoration-color, -webkit-backdrop-filter;transition-property:color, background-color, border-color, text-decoration-color, fill, stroke, opacity, box-shadow, transform, filter, backdrop-filter;transition-property:color, background-color, border-color, text-decoration-color, fill, stroke, opacity, box-shadow, transform, filter, backdrop-filter, -webkit-text-decoration-color, -webkit-backdrop-filter;transition-timing-function:cubic-bezier(0.4, 0, 0.2, 1);transition-duration:150ms}.duration-300{transition-duration:300ms}.hover\:bg-gray-100:hover{--tw-bg-opacity:1;background-color:rgb(243 244 246 / var(--tw-bg-opacity, 1))}.hover\:bg-gray-50:hover{--tw-bg-opacity:1;background-color:rgb(249 250 251 / var(--tw-bg-opacity, 1))}.hover\:bg-opacity-90:hover{--tw-bg-opacity:0.9}.hover\:text-gray-300:hover{--tw-text-opacity:1;color:rgb(209 213 219 / var(--tw-text-opacity, 1))}.focus\:outline-none:focus{outline:2px solid transparent;outline-offset:2px}@media (min-width: 640px){.sm\:flex-row{flex-direction:row}}@media (min-width: 768px){.md\:flex{display:flex}.md\:hidden{display:none}.md\:w-1\/2{width:50%}.md\:grid-cols-2{grid-template-columns:repeat(2, minmax(0, 1fr))}.md\:flex-row{flex-direction:row}.md\:justify-end{justify-content:flex-end}}@media (min-width: 1024px){.lg\:grid-cols-4{grid-template-columns:repeat(4, minmax(0, 1fr))}}</style><style type="text/css">:root [href^="//mage98rquewz.com/"], :root [href^="//x4pollyxxpush.com/"], :root span[id^="ezoic-pub-ad-placeholder-"], :root ins.adsbygoogle[data-ad-slot], :root ins.adsbygoogle[data-ad-client], :root img[src^="https://s-img.adskeeper.com/"], :root guj-ad, :root gpt-ad, :root div[id^="zergnet-widget"], :root div[id^="vuukle-ad-"], :root div[id^="taboola-stream-"], :root div[id^="sticky_ad_"], :root div[id^="st"][style^="z-index: 999999999;"], :root div[id^="gpt_ad_"], :root div[id^="ezoic-pub-ad-"], :root div[id^="dfp-ad-"], :root div[id^="crt-"][style], :root div[id^="adspot-"], :root div[id^="adrotate_widgets-"], :root ps-connatix-module, :root div[id^="ad_position_"], :root div[id^="ad-div-"], :root div[id*="ScriptRoot"], :root div[id*="MarketGid"], :root div[data-id-advertdfpconf], :root div[data-dfp-id], :root hl-adsense, :root div[data-contentexchange-widget], :root div[data-alias="300x250 Ad 2"], :root div[data-adzone], :root div[data-adunit-path], :root div[data-adname], :root div[data-ad-targeting], :root div[data-ad-region], :root div[data-ad-placeholder], :root div[aria-label="Ads"], :root display-ads, :root display-ad-component, :root atf-ad-slot, :root aside[id^="adrotate_widgets-"], :root amp-fx-flying-carpet, :root amp-embed[type="taboola"], :root amp-connatix-player, :root amp-ad-custom, :root amp-ad, :root div[id^="google_dfp_"], :root ad-slot, :root ad-shield-ads, :root a[style="width:100%;height:100%;z-index:10000000000000000;position:absolute;top:0;left:0;"], :root a[onmousedown^="this.href='https://paid.outbrain.com/network/redir?"] + .ob_source, :root a[href^="https://xbet-4.com/"], :root div[id^="ad-position-"], :root a[href^="https://www.toprevenuegate.com/"], :root a[href^="https://www.purevpn.com/"][href*="&utm_source=aff-"], :root a[href^="https://www.privateinternetaccess.com/"] > img, :root a[href^="https://www.onlineusershielder.com/"], :root a[href^="https://financeads.net/tc.php?"], :root a[href^="https://www.mrskin.com/tour"], :root a[href^="https://www.infowarsstore.com/"] > img, :root a[href^="https://www.highperformancecpmgate.com/"], :root a[href^="https://www.highcpmrevenuenetwork.com/"], :root a[href^="https://www.get-express-vpn.com/offer/"], :root a[href^="https://lnkxt.bannerator.com/"], :root a[href^="https://www.geekbuying.com/dynamic-ads/"], :root a[href^="https://www.financeads.net/tc.php?"], :root a[href^="https://www.effectiveratecpm.com/"], :root [href^="https://www.herbanomic.com/"] > img, :root a[href^="https://maymooth-stopic.com/"], :root a[href^="https://www.dql2clk.com/"], :root a[href^="https://www.nutaku.net/signup/landing/"], :root a[href^="https://www.dating-finder.com/signup/?ai_d="], :root a[href^="https://explore-site.com/"], :root a[href^="https://www.brazzersnetwork.com/landing/"], :root a[href^="https://www.adxsrve.com/"], :root [data-template-type="nativead"], :root a[href^="https://www.endorico.com/Smartlink/"], :root a[href^="https://www.adultempire.com/"][href*="?partner_id="], :root a[href^="https://voluum.prom-xcams.com/"], :root a[href^="https://twinrdsyte.com/"], :root a[href^="https://twinrdsrv.com/"], :root a[href^="https://trk.nfl-online-streams.club/"], :root a[href^="https://tracking.avapartner.com/"], :root a[href^="https://track.wg-aff.com"], :root a[href^="https://track.ultravpn.com/"], :root a[href^="https://track.afcpatrk.com/"], :root a[href^="https://torguard.net/aff.php"] > img, :root [data-identity="adhesive-ad"], :root a[href^="https://tc.tradetracker.net/"] > img, :root a[href^="https://tatrck.com/"], :root a[href^="https://click.candyoffers.com/"], :root [href^="https://zstacklife.com/"] img, :root a[href^="https://t.aslnk.link/"], :root a[href^="https://t.adating.link/"], :root a[href^="https://go.trackitalltheway.com/"], :root [href^="https://track.fiverr.com/visit/"] > img, :root a[href^="https://syndication.exoclick.com/"], :root a[href^="https://syndication.dynsrvtbg.com/"], :root div[data-alias="300x250 Ad 1"], :root a[href^="https://syndicate.contentsserved.com/"], :root a[href^="https://svb-analytics.trackerrr.com/"], :root a[href^="https://ad.doubleclick.net/"], :root a[href^="https://static.fleshlight.com/images/banners/"], :root a[href^="https://slkmis.com/"], :root bottomadblock, :root a[href^="https://s.zlinkd.com/"], :root a[href^="https://s.zlink3.com/"], :root a[href^="https://www.mrskin.com/account/"], :root a[href^="https://s.optzsrv.com/"], :root a[href^="https://s.ma3ion.com/"], :root a[href^="https://s.eunow4u.com/"], :root #kt_player > div[style$="display: block;"][style*="inset: 0px;"], :root [href$="/sexdating.php"], :root a[href^="https://quotationfirearmrevision.com/"], :root a[href^="https://pubads.g.doubleclick.net/"], :root a[href^="https://prf.hn/click/"][href*="/camref:"] > img, :root a[href^="https://www.dating-finder.com/?ai_d="], :root a[href^="https://serve.awmdelivery.com/"], :root a[href^="https://prf.hn/click/"][href*="/adref:"] > img, :root app-ad, :root [href^="https://ap.octopuspop.com/click/"] > img, :root a[href^="https://postback1win.com/"], :root a[href^="https://mmwebhandler.aff-online.com/"], :root a[href^="https://www.bet365.com/"][href*="affiliate="], :root a[href^="https://pb-track.com/"], :root a[href^="https://pb-front.com/"], :root a[href^="https://paid.outbrain.com/network/redir?"], :root a[href^="https://streamate.com/landing/click/"], :root div[class^="Adstyled__AdWrapper-"], :root a[href^="https://osfultrbriolenai.info/"], :root a[href^="https://upsups.click/"], :root a[href^="https://ndt5.net/"], :root a[href^="https://natour.naughtyamerica.com/track/"], :root a[href^="https://mediaserver.entainpartners.com/renderBanner.do?"], :root a[href^="https://m.do.co/c/"] > img, :root a[href^="https://lead1.pl/"], :root a[href^="https://landing.brazzersnetwork.com/"], :root a[href^="https://join.virtuallust3d.com/"], :root a[href^="https://kiksajex.com/"], :root a[href^="https://juicyads.in/"], :root a[href^="https://snowdayonline.xyz/"], :root a[href^="https://mediaserver.gvcaffiliates.com/renderBanner.do?"], :root a[href^="https://join.dreamsexworld.com/"], :root a[href^="https://jaxofuna.com/"], :root a[href^="https://italarizege.xyz/"], :root a[href^="https://iqbroker.com/"][href*="?aff="], :root a[href^="https://identicaldrench.com/"], :root a[href^="https://hot-growngames.life/"], :root a[href^="https://helmethomicidal.com/"], :root a[href^="https://golinks.work/"], :root ark-top-ad, :root a[href^="https://s.zlinkn.com/"], :root a[href^="https://go.xxxvjmp.com/"], :root [class^="tile-picker__CitrusBannerContainer-sc-"], :root a[href^="https://go.xxxiijmp.com"], :root a[href^="https://go.xtbaffiliates.com/"], :root [data-role="tile-ads-module"], :root a[href^="https://go.xlviirdr.com"], :root div[class$="-adlabel"], :root a[href^="https://go.xlviiirdr.com"], :root a[href^="https://ismlks.com/"], :root [href^="https://www.mypillow.com/"] > img, :root a[href^="https://go.xlirdr.com"], :root [data-css-class="dfp-inarticle"], :root a[href^="https://l.hyenadata.com/"], :root a[href^="https://go.tmrjmp.com"], :root a[href^="https://zirdough.net/"], :root a[href^="https://s.deltraff.com/"], :root a[href^="https://go.markets.com/visit/?bta="], :root a[href^="https://billing.purevpn.com/aff.php"] > img, :root a[href^="https://go.hpyrdr.com/"], :root a[href^="https://lijavaxa.com/"], :root a[href^="https://go.goaserv.com/"], :root a[href^="https://t.hrtye.com/"], :root a[href^="https://go.etoro.com/"] > img, :root a[href^="https://go.dmzjmp.com"], :root a[href^="https://www.bang.com/?aff="], :root #mgb-container > #mgb, :root a[href^="https://go.admjmp.com"], :root a[href^="https://ak.stikroltiltoowi.net/"], :root a[href^="https://get.surfshark.net/aff_c?"][href*="&aff_id="] > img, :root a[href^="https://www.adskeeper.com"], :root a[data-redirect^="https://paid.outbrain.com/network/redir?"], :root [href^="https://clicks.affstrack.com/"] > img, :root a[href^="https://ak.hauchiwu.com/"], :root a[href^="https://engine.phn.doublepimp.com/"], :root a[href^="https://engine.blueistheneworanges.com/"], :root a[href^="https://drumskilxoa.click/"], :root a[href^="https://dl-protect.net/"], :root a[href*=".foxqck.com/"], :root a[href^="https://ctosrd.com/"], :root a[href^="https://clixtrac.com/"], :root [href^="https://noqreport.com/"] > img, :root a[href^="https://clicks.pipaffiliates.com/"], :root app-advertisement, :root a[href^="https://getmatchedlocally.com/"], :root a[href^="https://clickins.slixa.com/"], :root a[href^="https://datewhisper.life/"], :root a[href^="https://get-link.xyz/"], :root a[href^="https://click.linksynergy.com/fs-bin/"] > img, :root a[href^="https://combodef.com/"], :root a[href^="https://click.hoolig.app/"], :root a[href^="https://click.ggpickaff.com/"], :root a[href^="https://track.totalav.com/"], :root a[href^="https://ctrdwm.com/"], :root img[src^="https://images.purevpnaffiliates.com"], :root a[href^="https://porntubemate.com/"], :root a[href^="https://clickadilla.com/"], :root a[href^="https://click.dtiserv2.com/"], :root a[href^="https://go.xlvirdr.com"], :root a[href^="http://www.iyalc.com/"], :root a[href^="https://claring-loccelkin.com/"], :root a[href^="https://bongacams2.com/track?"], :root a[href^="https://t.ajrkm1.com/"], :root a[href^="https://bongacams10.com/track?"], :root a[href^="https://www.sheetmusicplus.com/"][href*="?aff_id="], :root a[href^="https://bngpt.com/"], :root a[href^="https://black77854.com/"], :root a[href^="https://rixofa.com/"], :root #ads[style^="position: absolute; z-index: 30; width: 100%; height"], :root a[href^="https://disobediencecalculatormaiden.com/"], :root a[href^="https://best-experience-cool.com/"], :root a[href^="https://banners.livepartners.com/"], :root a[href^="https://myclick-2.com/"], :root a[href^="https://sexynearme.com/"], :root a[href^="https://baipahanoop.net/"], :root a[href^="http://revolvemockerycopper.com/"], :root a[href^="https://awptjmp.com/"], :root a[href^="https://join.sexworld3d.com/track/"], :root a[href^="https://aweptjmp.com/"], :root a[href^="https://ausoafab.net/"], :root a[href^="https://adclick.g.doubleclick.net/"], :root a[href^="https://aj1070.online/"], :root a[href^="https://bc.game/"], :root a[href^="https://ak.oalsauwy.net/"], :root a[href^="https://a.bestcontentoperation.top/"], :root a[href^="https://adultfriendfinder.com/go/"], :root a[href^="https://ads.planetwin365affiliate.com/"], :root a[href^="https://ads.leovegas.com/"], :root .nya-slot[style], :root a[href^="https://a.bestcontentweb.top/"], :root a[href^="https://a2.adform.net/"], :root a[href^="https://a.candyai.love/"], :root a[href^="https://playnano.online/offerwalls/?ref="], :root a[href^="https://a.adtng.com/"], :root .banner-img > .pbl, :root [data-m-ad-id], :root a[href^="https://a-ads.com/"], :root [id^="ad_slider"], :root a[href^="https://click.ggpickyaff.com/"], :root broadstreet-zone-container, :root a[href^="https://ak.psaltauw.net/"], :root a[href^="https://1winpb.com/"], :root div[id^="rc-widget-"], :root a[href^="http://eslp34af.click/"], :root a[href^="https://turnstileunavailablesite.com/"], :root a[href^="https://chaturbate.com/in/?"], :root a[href^="https://prf.hn/click/"][href*="/creativeref:"] > img, :root a[href*="&maxads="], :root a[href^="http://www.adultempire.com/unlimited/promo?"][href*="&partner_id="], :root a[href^="https://1betandgonow.com/"], :root a[href^="https://eergortu.net/"], :root div[id^="optidigital-adslot"], :root a[href^="https://123-stream.org/"], :root a[href^="https://in.rabbtrk.com/"], :root a[href^="http://www.h4trck.com/"], :root a[href^="http://www.friendlyduck.com/AF_"], :root a[href^="https://go.rmhfrtnd.com"], :root a[href^="https://allhost.shop/aff.php?"], :root [data-dynamic-ads], :root a[href^="http://vnte9urn.click/"], :root a[href^="http://troopsassistedstupidity.com/"], :root a[href^="http://trk.globwo.online/"], :root a[href^="https://random-affiliate.atimaze.com/"], :root a-ad, :root a[href^="https://offhandpump.com/"], :root a[href^="http://stickingrepute.com/"], :root #slashboxes > .deals-rail, :root a[href^="http://roadcontagion.com/"], :root a[href^="http://premonitioninventdisagree.com/"], :root a[href^="http://cam4com.go2cloud.org/aff_c?"], :root a[href^="https://ads.betfair.com/redirect.aspx?"], :root [href^="https://www.mypatriotsupply.com/"] > img, :root a[href^="https://trk.softonixs.xyz/"], :root [data-advadstrackid], :root a[href^="http://muzzlematrix.com/"], :root a[href^="https://track.adform.net/"], :root a[href^="http://avthelkp.net/"], :root a[href^="https://a.medfoodhome.com/"], :root a[href^="https://engine.flixtrial.com/"], :root [data-type="ad-vertical"], :root [data-taboola-options], :root a[href^="http://annulmentequitycereals.com/"], :root a[href^="//startgaming.net/tienda/" i], :root a[href^="https://join.virtualtaboo.com/track/"], :root [id^="ad_sky"], :root a[href^="http://coefficienttolerategravel.com/"], :root a[href^="https://a.medfoodsafety.com/"], :root a[href^="//go.eabids.com/"], :root a[href^="//ejitsirdosha.net/"], :root a[href^=" https://www.friendlyduck.com/AF_"], :root [data-cl-spot-id], :root a[href*="/jump/next.php?r="], :root a[href^="https://go.rmishe.com/"], :root [href^="https://ilovemyfreedoms.com/landing-"], :root a[href^="https://syndication.optimizesrv.com/"], :root a[href*="//daichoho.com/"], :root a[href^="https://go.nordvpn.net/aff"] > img, :root .\[\&_\.gdprAdTransparencyCogWheelButton\]\:\!pjra-z-\[5\], :root [href^="http://clicks.totemcash.com/"], :root a[href^="https://ad.zanox.com/ppc/"] > img, :root a[href^="https://lone-pack.com/"], :root [data-d-ad-id], :root a[href*=".engine.adglare.net/"], :root a[href^="https://t.ajrkm3.com/"], :root [href^="https://aads.com/campaigns/"], :root a[href^="//stighoazon.com/"], :root [href^="https://www.profitablegatecpm.com/"], :root div[id^="lazyad-"], :root a[href^="http://com-1.pro/"], :root a[href*=".cfm?domain="][href*="&fp="], :root [data-ad-name], :root a[href^="https://loboclick.com/"], :root a[data-url^="https://vulpix.bet/?ref="], :root a[href^="https://ab.advertiserurl.com/aff/"], :root a[data-oburl^="https://paid.outbrain.com/network/redir?"], :root a[href^="https://go.xlivrdr.com"], :root [onclick^="location.href='https://1337x.vpnonly.site/"], :root [name^="google_ads_iframe"], :root [id^="section-ad-banner"], :root a[href^="https://www.goldenfrog.com/vyprvpn?offer_id="][href*="&aff_id="], :root a[href*="//jjgirls.com/sex/Chaturbate"], :root [id^="ad-wrap-"], :root [href^="https://zone.gotrackier.com/"], :root a[href^="http://sarcasmadvisor.com/"], :root [href^="https://www.restoro.com/"], :root [href^="https://www.targetingpartner.com/"], :root .section-subheader > .section-hotel-prices-header, :root [href^="https://www.hostg.xyz/"] > img, :root a[href^="http://adultfriendfinder.com/go/"], :root a[href^="https://fastestvpn.com/lifetime-special-deal?a_aid="], :root a[href^="https://tour.mrskin.com/"], :root [href^="https://www.brighteonstore.com/products/"] img, :root citrus-ad-wrapper, :root a[href^="https://go.grinsbest.com/"], :root a[href^="https://vo2.qrlsx.com/"], :root [href^="https://www.avantlink.com/click.php"] img, :root a[href^="https://t.acam.link/"], :root a[href^="https://go.strpjmp.com/"], :root [href^="https://url.totaladblock.com/"], :root div[id^="div-ads-"], :root [href^="https://rapidgator.net/article/premium/ref/"], :root [href^="https://join.girlsoutwest.com/"], :root a[href^="https://activate-game.com/"], :root .scroll-fixable.rail-right > .deals-rail, :root [data-wpas-zoneid], :root a[href^="https://track.aftrk3.com/"], :root [href^="https://join3.bannedsextapes.com"], :root a[href^="https://bodelen.com/"], :root a[href*=".g2afse.com/"], :root div[id^="adngin-"], :root [data-rc-widget], :root span[data-ez-ph-id], :root [href^="https://track.aftrk1.com/"], :root [href^="https://join.playboyplus.com/track/"], :root a[href^="https://go.xxxijmp.com"], :root [href^="https://istlnkcl.com/"], :root a[href^="https://tm-offers.gamingadult.com/"], :root [href^="https://charmingdatings.life/"], :root [href^="https://glersakr.com/"], :root a[href^="https://a.bestcontentfood.top/"], :root [href^="https://cpa.10kfreesilver.com/"], :root [data-id^="div-gpt-ad"], :root a[href^="https://tracker.loropartners.com/"], :root [href^="https://awbbjmp.com/"], :root div[ow-ad-unit-wrapper], :root a[data-href^="http://ads.trafficjunky.net/"], :root a[href^="http://partners.etoro.com/"], :root a[href^="https://www.friendlyduck.com/AF_"], :root [href^="https://ad1.adfarm1.adition.com/"], :root a[href^="https://bngprm.com/"], :root [href^="https://shiftnetwork.infusionsoft.com/go/"] > img, :root a[href^="https://go.bushheel.com/"], :root a[href^="https://ctjdwm.com/"], :root a[href^="https://camfapr.com/landing/click/"], :root div[data-ad-wrapper], :root .gnt_em_vp_c[data-g-s="vp_dk"], :root [href="//sexcams.plus/"], :root [href^="http://www.mypillow.com/"] > img, :root a[href^="https://promerycergerful.com/"], :root #kt_player > a[target="_blank"], :root a[href^="http://bongacams.com/track?"], :root [href^="http://mypillow.com/"] > img, :root [href="https://ourgoldguy.com/contact/"] img, :root .ob_container .item-container-obpd, :root [id^="div-gpt-ad"], :root a[href^="https://go.rmhfrtnd.com/"], :root [href="https://jdrucker.com/gold"] > img, :root a[href^="https://www.liquidfire.mobi/"], :root .grid > .container > #aside-promotion, :root DFP-AD, :root [href^="https://go.xlrdr.com"], :root a[href^="https://s.cant3am.com/"], :root [data-testid^="taboola-"], :root a[href^="https://track.1234sd123.com/"], :root zeus-ad, :root [data-testid="prism-ad-wrapper"], :root [href^="https://ad.admitad.com/"], :root [href^="https://mypillow.com/"] > img, :root [data-testid="ad_testID"], :root [href^="https://antiagingbed.com/discount/"] > img, :root a[href*=".adsrv.eacdn.com/"], :root [href^="https://optimizedelite.com/"] > img, :root [data-name="adaptiveConstructorAd"], :root a[href^="https://go.cmtaffiliates.com/"], :root [data-testid="adBanner-wrapper"], :root [href^="https://mylead.global/stl/"] > img, :root [href^="https://mypatriotsupply.com/"] > img, :root a[href^="https://go.hpyjmp.com"], :root iframe[scrolling="no"][sandbox*="allow-popups allow-modals"][style^="width: 100%; height: 100%; border: none;"], :root [href^="https://mystore.com/"] > img, :root a[href^="https://81ac.xyz/"], :root [href^="https://wct.link/click?"], :root div[data-adunit], :root app-large-ad, :root [href^="https://turtlebids.irauctions.com/"] img, :root a[href^="https://believessway.com/"], :root a[href^="https://witnessjacket.com/"], :root [data-mobile-ad-id], :root [class^="amp-ad-"], :root a[href^="http://handgripvegetationhols.com/"], :root a[href^="https://go.bbrdbr.com"], :root a[href^="https://fc.lc/ref/"], :root [data-adshim], :root topadblock, :root a[href^="//s.zlinkd.com/"], :root #teaser1[style^="width:autopx;"], :root [href^="https://www.cloudways.com/en/?id"], :root [data-asg-ins], :root a[href^="https://gamingadlt.com/?offer="], :root [data-desktop-ad-id], :root [data-adbridg-ad-class], :root #teaser3[style^="width:autopx;"], :root [data-adblockkey], :root [data-block-type="ad"], :root [data-ad-width], :root [onclick*="content.ad/"], :root [data-ad-manager-id], :root AMP-AD, :root [data-ad-cls], :root [data-ez-name], :root a[href^="https://go.mnaspm.com/"], :root a[href^="https://service.bv-aff-trx.com/"], :root a[href^="https://6-partner.com/"], :root [class^="s2nPlayer"], :root a[href^="https://traffdaq.com/"], :root [data-testid="commercial-label-taboola"], :root [class^="div-gpt-ad"], :root a[href^="http://tc.tradetracker.net/"] > img, :root a[href^="https://www8.smartadserver.com/"], :root a[href^="https://pb-imc.com/"], :root [href^="https://affiliate.fastcomet.com/"] > img, :root [class^="adDisplay-module"], :root [data-freestar-ad][id], :root AD-SLOT, :root a[href^="https://www.googleadservices.com/pagead/aclk?"] > img, :root [data-ad-module], :root a[href^="https://go.skinstrip.net"][href*="?campaignId="], :root #teaser2[style^="width:autopx;"], :root [data-revive-zoneid], :root a[href^="https://losingoldfry.com/"], :root div[id^="div-gpt-"], :root a[href^="https://gml-grp.com/"], :root .ob_dual_right > .ob_ads_header ~ .odb_div, :root a[href^="https://cam4com.go2cloud.org/"], :root a[href^="http://li.blogtrottr.com/click?"], :root a[onmousedown^="this.href='https://paid.outbrain.com/network/redir?"], :root a[href^="https://t.ajump1.com/"], :root a[href^="https://go.xxxjmp.com"], :root #leader-companion > a[href], :root a[href^="https://wittered-mainging.com/"], :root #teaser3[style="width: 100%;text-align: center;display: scroll;position:fixed;bottom: 0;margin: 0 auto;z-index: 103;"], :root [href^="https://wwp.hoqodd.com/redirect-zone/"] { display: none !important; }</style></head>
<body>
    <!-- Navigation -->
    <?php include './components/navbar.php'; ?>


    <!-- Page Header -->
    <div class="primary-bg text-white py-12">
        <div class="container mx-auto px-4 text-center">
            <h1 class="text-4xl font-bold mb-4">Frequently Asked Questions</h1>
            <p class="text-xl max-w-3xl mx-auto">Find answers to the most common questions about our camping experiences, booking process, and more.</p>
        </div>
    </div>

    <!-- FAQ Content -->
    <section class="py-16 px-4">
        <div class="container mx-auto max-w-5xl">
            <!-- Search and Filter -->
            <div class="mb-12">
                <div class="flex flex-col md:flex-row gap-6 items-center justify-between">
                    <!-- Search -->
                    <div class="w-full md:w-1/2">
                        <div class="relative">
                            <input type="text" id="faq-search" placeholder="Search for questions..." class="search-input w-full px-4 py-3 pl-12 border border-gray-300 rounded-lg focus:outline-none transition duration-300">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-400 absolute left-3 top-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                            </svg>
                        </div>
                    </div>
                    
                    <!-- Categories -->
                    <div class="flex flex-wrap gap-2 justify-center md:justify-end">
                        <button class="category-button active px-4 py-2 rounded-full border border-gray-300 text-sm font-medium" data-category="all">All</button>
                        <button class="category-button px-4 py-2 rounded-full border border-gray-300 text-sm font-medium" data-category="booking">Booking</button>
                        <button class="category-button px-4 py-2 rounded-full border border-gray-300 text-sm font-medium" data-category="camping">Camping</button>
                        <button class="category-button px-4 py-2 rounded-full border border-gray-300 text-sm font-medium" data-category="gear">Gear</button>
                        <button class="category-button px-4 py-2 rounded-full border border-gray-300 text-sm font-medium" data-category="payment">Payment</button>
                    </div>
                </div>
            </div>
            
            <!-- FAQ Items -->
            <div class="space-y-6" id="faq-container">
                <!-- Booking FAQs -->
                <div class="faq-item bg-white shadow-md border border-gray-100" data-category="booking">
                    <div class="faq-question flex justify-between items-center p-5">
                        <h3 class="text-lg font-semibold">How do I book a camping trip?</h3>
                        <div class="flex-shrink-0">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 faq-icon-plus primary-text" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 faq-icon-minus primary-text" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 12H6"></path>
                            </svg>
                        </div>
                    </div>
                    <div class="faq-answer bg-gray-50 border-t border-gray-100">
                        <p>Booking a camping trip with  Escape is easy! Simply visit our website and navigate to the "Packages" section. Browse through our available destinations and select the one that interests you. Choose your preferred dates, the number of people in your group, and any additional services you might need. Complete the booking form, make your payment, and you'll receive a confirmation email with all the details of your trip.</p>
                    </div>
                </div>
                
                <div class="faq-item bg-white shadow-md border border-gray-100" data-category="booking">
                    <div class="faq-question flex justify-between items-center p-5">
                        <h3 class="text-lg font-semibold">What is your cancellation policy?</h3>
                        <div class="flex-shrink-0">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 faq-icon-plus primary-text" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 faq-icon-minus primary-text" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 12H6"></path>
                            </svg>
                        </div>
                    </div>
                    <div class="faq-answer bg-gray-50 border-t border-gray-100">
                        <p>Our cancellation policy is as follows:</p>
                        <ul class="list-disc pl-5 mt-2 space-y-1">
                            <li>Cancellations made 30+ days before the trip: Full refund minus a 10% administrative fee</li>
                            <li>Cancellations made 15-29 days before the trip: 70% refund</li>
                            <li>Cancellations made 7-14 days before the trip: 50% refund</li>
                            <li>Cancellations made less than 7 days before the trip: No refund</li>
                        </ul>
                        <p class="mt-2">We understand that emergencies happen, so please contact us if you need to cancel due to unforeseen circumstances, and we'll do our best to accommodate you.</p>
                    </div>
                </div>
                
                <div class="faq-item bg-white shadow-md border border-gray-100" data-category="booking">
                    <div class="faq-question flex justify-between items-center p-5">
                        <h3 class="text-lg font-semibold">Can I modify my booking after confirmation?</h3>
                        <div class="flex-shrink-0">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 faq-icon-plus primary-text" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 faq-icon-minus primary-text" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 12H6"></path>
                            </svg>
                        </div>
                    </div>
                    <div class="faq-answer bg-gray-50 border-t border-gray-100">
                        <p>Yes, you can modify your booking after confirmation, subject to availability and the following conditions:</p>
                        <ul class="list-disc pl-5 mt-2 space-y-1">
                            <li>Changes made 30+ days before the trip: No additional fee</li>
                            <li>Changes made 15-29 days before the trip: $25 modification fee</li>
                            <li>Changes made less than 15 days before the trip: $50 modification fee</li>
                        </ul>
                        <p class="mt-2">Please note that significant changes, such as changing dates or destinations, may be treated as a cancellation and rebooking, subject to our cancellation policy. Contact our customer service team for assistance with any modifications.</p>
                    </div>
                </div>
                
                <!-- Camping FAQs -->
                <div class="faq-item bg-white shadow-md border border-gray-100" data-category="camping">
                    <div class="faq-question flex justify-between items-center p-5">
                        <h3 class="text-lg font-semibold">What should I pack for my camping trip?</h3>
                        <div class="flex-shrink-0">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 faq-icon-plus primary-text" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 faq-icon-minus primary-text" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 12H6"></path>
                            </svg>
                        </div>
                    </div>
                    <div class="faq-answer bg-gray-50 border-t border-gray-100">
                        <p>Here's a basic packing list for your camping trip:</p>
                        <ul class="list-disc pl-5 mt-2 space-y-1">
                            <li>Weather-appropriate clothing (layers are recommended)</li>
                            <li>Sturdy hiking boots or shoes</li>
                            <li>Rain gear</li>
                            <li>Sleeping bag (appropriate for the season)</li>
                            <li>Personal toiletries and medications</li>
                            <li>Sunscreen and insect repellent</li>
                            <li>Headlamp or flashlight with extra batteries</li>
                            <li>Water bottle or hydration system</li>
                            <li>Personal identification and emergency contact information</li>
                        </ul>
                        <p class="mt-2">A detailed packing list specific to your chosen destination and season will be provided in your booking confirmation email.</p>
                    </div>
                </div>
                
                <div class="faq-item bg-white shadow-md border border-gray-100" data-category="camping">
                    <div class="faq-question flex justify-between items-center p-5">
                        <h3 class="text-lg font-semibold">Are your camping trips suitable for beginners?</h3>
                        <div class="flex-shrink-0">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 faq-icon-plus primary-text" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 faq-icon-minus primary-text" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 12H6"></path>
                            </svg>
                        </div>
                    </div>
                    <div class="faq-answer bg-gray-50 border-t border-gray-100">
                        <p>Absolutely! We offer camping experiences for all skill levels, from complete beginners to seasoned outdoor enthusiasts. Our trips are categorized by difficulty level:</p>
                        <ul class="list-disc pl-5 mt-2 space-y-1">
                            <li><strong>Level 1 (Beginner):</strong> Perfect for first-time campers with comfortable accommodations, minimal hiking, and full guide support</li>
                            <li><strong>Level 2 (Intermediate):</strong> For those with some camping experience, involving moderate hiking and more rustic accommodations</li>
                            <li><strong>Level 3 (Advanced):</strong> For experienced campers, potentially including challenging terrain, longer hikes, and more primitive camping conditions</li>
                        </ul>
                        <p class="mt-2">Our experienced guides provide instruction and support throughout the trip, ensuring everyone has a safe and enjoyable experience regardless of their skill level.</p>
                    </div>
                </div>
                
                <div class="faq-item bg-white shadow-md border border-gray-100" data-category="camping">
                    <div class="faq-question flex justify-between items-center p-5">
                        <h3 class="text-lg font-semibold">What happens in case of bad weather?</h3>
                        <div class="flex-shrink-0">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 faq-icon-plus primary-text" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 faq-icon-minus primary-text" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 12H6"></path>
                            </svg>
                        </div>
                    </div>
                    <div class="faq-answer bg-gray-50 border-t border-gray-100">
                        <p>We monitor weather conditions closely and prioritize safety above all else. In case of inclement weather:</p>
                        <ul class="list-disc pl-5 mt-2 space-y-1">
                            <li>Minor weather issues: We'll adjust activities as needed while continuing the trip</li>
                            <li>Moderate weather concerns: We may modify the itinerary, change locations, or provide alternative indoor activities</li>
                            <li>Severe weather: If conditions are unsafe, we may postpone or cancel the trip</li>
                        </ul>
                        <p class="mt-2">If we need to cancel a trip due to severe weather, you'll be offered a full refund or the option to reschedule. Our guides are trained in  first aid and emergency procedures to handle changing conditions safely.</p>
                    </div>
                </div>
                
                <!-- Gear FAQs -->
                <div class="faq-item bg-white shadow-md border border-gray-100" data-category="gear">
                    <div class="faq-question flex justify-between items-center p-5">
                        <h3 class="text-lg font-semibold">Do I need to bring my own camping gear?</h3>
                        <div class="flex-shrink-0">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 faq-icon-plus primary-text" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 faq-icon-minus primary-text" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 12H6"></path>
                            </svg>
                        </div>
                    </div>
                    <div class="faq-answer bg-gray-50 border-t border-gray-100">
                        <p>For most of our camping packages, we provide all essential camping gear, including:</p>
                        <ul class="list-disc pl-5 mt-2 space-y-1">
                            <li>Tents</li>
                            <li>Sleeping pads</li>
                            <li>Cooking equipment</li>
                            <li>Eating utensils</li>
                            <li>First aid supplies</li>
                            <li>Navigation tools</li>
                        </ul>
                        <p class="mt-2">You'll need to bring your personal items such as a sleeping bag, clothing, toiletries, and any personal medications. We offer sleeping bag rentals for an additional fee if you don't have your own. A detailed list of what's provided and what you need to bring will be included in your booking confirmation.</p>
                    </div>
                </div>
                
                <div class="faq-item bg-white shadow-md border border-gray-100" data-category="gear">
                    <div class="faq-question flex justify-between items-center p-5">
                        <h3 class="text-lg font-semibold">Can I rent additional camping gear?</h3>
                        <div class="flex-shrink-0">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 faq-icon-plus primary-text" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 faq-icon-minus primary-text" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 12H6"></path>
                            </svg>
                        </div>
                    </div>
                    <div class="faq-answer bg-gray-50 border-t border-gray-100">
                        <p>Yes, we offer a variety of additional gear rentals to enhance your camping experience:</p>
                        <ul class="list-disc pl-5 mt-2 space-y-1">
                            <li>Sleeping bags (various temperature ratings): $15-25 per trip</li>
                            <li>Inflatable pillows: $5 per trip</li>
                            <li>Trekking poles: $10 per trip</li>
                            <li>Backpacks: $20 per trip</li>
                            <li>Camp chairs: $8 per trip</li>
                            <li>Headlamps: $5 per trip</li>
                        </ul>
                        <p class="mt-2">You can add these rentals during the booking process or by contacting our customer service team at least 7 days before your trip. All rental gear is professionally cleaned and inspected between uses to ensure quality and safety.</p>
                    </div>
                </div>
                
                <!-- Payment FAQs -->
                <div class="faq-item bg-white shadow-md border border-gray-100 active" data-category="payment">
                    <div class="faq-question flex justify-between items-center p-5">
                        <h3 class="text-lg font-semibold">What payment methods do you accept?</h3>
                        <div class="flex-shrink-0">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 faq-icon-plus primary-text" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 faq-icon-minus primary-text" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 12H6"></path>
                            </svg>
                        </div>
                    </div>
                    <div class="faq-answer bg-gray-50 border-t border-gray-100">
                        <p>We accept the following payment methods:</p>
                        <ul class="list-disc pl-5 mt-2 space-y-1">
                            <li>All major credit cards (Visa, Mastercard, American Express, Discover)</li>
                            <li>PayPal</li>
                            <li>Bank transfers</li>
                            <li>Gift cards (available for purchase on our website)</li>
                        </ul>
                        <p class="mt-2">All payments are processed securely through our encrypted payment system. For bookings made more than 60 days in advance, we offer the option to pay a 30% deposit with the balance due 45 days before the trip.</p>
                    </div>
                </div>
                
                <div class="faq-item bg-white shadow-md border border-gray-100" data-category="payment">
                    <div class="faq-question flex justify-between items-center p-5">
                        <h3 class="text-lg font-semibold">Do you offer any discounts?</h3>
                        <div class="flex-shrink-0">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 faq-icon-plus primary-text" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 faq-icon-minus primary-text" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 12H6"></path>
                            </svg>
                        </div>
                    </div>
                    <div class="faq-answer bg-gray-50 border-t border-gray-100">
                        <p>Yes, we offer several discount options:</p>
                        <ul class="list-disc pl-5 mt-2 space-y-1">
                            <li><strong>Group discounts:</strong> 10% off for groups of 6 or more</li>
                            <li><strong>Early bird discount:</strong> 15% off when booking at least 4 months in advance</li>
                            <li><strong>Return customer discount:</strong> 10% off for previous customers</li>
                            <li><strong>Off-season discount:</strong> 15-20% off during designated off-peak periods</li>
                            <li><strong>Military and first responder discount:</strong> 15% off with valid ID</li>
                        </ul>
                        <p class="mt-2">Please note that discounts cannot be combined. To apply a discount, use the appropriate code during checkout or contact our customer service team for assistance.</p>
                    </div>
                </div>
                
                <!-- More FAQs -->
                <div class="faq-item bg-white shadow-md border border-gray-100" data-category="camping">
                    <div class="faq-question flex justify-between items-center p-5">
                        <h3 class="text-lg font-semibold">Are meals included in the camping packages?</h3>
                        <div class="flex-shrink-0">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 faq-icon-plus primary-text" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 faq-icon-minus primary-text" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 12H6"></path>
                            </svg>
                        </div>
                    </div>
                    <div class="faq-answer bg-gray-50 border-t border-gray-100">
                        <p>Yes, most of our camping packages include all meals during the trip. Our experienced camp chefs prepare delicious, nutritious meals using fresh, locally-sourced ingredients whenever possible. We can accommodate most dietary restrictions and preferences, including vegetarian, vegan, gluten-free, and allergies, when notified in advance.</p>
                        <p class="mt-2">For day trips, we typically provide lunch and snacks. For multi-day trips, we provide breakfast, lunch, dinner, and snacks. The specific meal plan will be detailed in your trip itinerary.</p>
                    </div>
                </div>
                
                <div class="faq-item bg-white shadow-md border border-gray-100" data-category="booking">
                    <div class="faq-question flex justify-between items-center p-5">
                        <h3 class="text-lg font-semibold">Is there a minimum age requirement for your trips?</h3>
                        <div class="flex-shrink-0">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 faq-icon-plus primary-text" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 faq-icon-minus primary-text" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 12H6"></path>
                            </svg>
                        </div>
                    </div>
                    <div class="faq-answer bg-gray-50 border-t border-gray-100">
                        <p>Age requirements vary depending on the trip difficulty and destination:</p>
                        <ul class="list-disc pl-5 mt-2 space-y-1">
                            <li><strong>Family-friendly trips:</strong> Children as young as 5 years old are welcome, accompanied by a parent or guardian</li>
                            <li><strong>Standard trips:</strong> Minimum age of 12, accompanied by a parent or guardian</li>
                            <li><strong>Advanced/challenging trips:</strong> Minimum age of 16, accompanied by a parent or guardian</li>
                            <li><strong>Solo travelers:</strong> Must be 18 or older to participate without a guardian</li>
                        </ul>
                        <p class="mt-2">We offer specialized family camping trips designed specifically for families with young children, featuring kid-friendly activities and appropriate pacing.</p>
                    </div>
                </div>
            </div>
            
            <!-- No Results Message -->
            <div id="no-results" class="hidden text-center py-10">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16 mx-auto text-gray-400 mb-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.172 16.172a4 4 0 015.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                </svg>
                <h3 class="text-xl font-semibold text-gray-700 mb-2">No matching questions found</h3>
                <p class="text-gray-600">Try adjusting your search or browse all categories</p>
                <button id="reset-search" class="mt-4 primary-bg text-white font-medium py-2 px-6 rounded-lg hover:bg-opacity-90 transition duration-300">View All Questions</button>
            </div>
            
            <!-- Still Have Questions -->
            <div class="mt-16 bg-white shadow-lg rounded-lg overflow-hidden border border-gray-100">
                <div class="p-8 text-center">
                    <h3 class="text-2xl font-bold mb-4">Still Have Questions?</h3>
                    <p class="text-gray-600 mb-6">Can't find the answer you're looking for? Please contact our friendly team.</p>
                    <div class="flex flex-col sm:flex-row justify-center gap-4">
                        <a href="contact.php" class="primary-bg text-white font-semibold py-3 px-8 rounded-lg hover:bg-opacity-90 transition duration-300 flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                            </svg>
                            Contact Us
                        </a>
                        <a href="tel:+21625703035" class="bg-white text-gray-800 font-semibold py-3 px-8 rounded-lg border border-gray-300 hover:bg-gray-50 transition duration-300 flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                            </svg>
                            Call Us
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <iframe src="./components/footer.html" width="100%" height="413" style="border:0;" loading="lazy"></iframe>

 <script>
document.addEventListener('DOMContentLoaded', function () {
    // Mobile Menu Toggle
    const mobileMenuButton = document.getElementById('mobile-menu-button');
    const mobileMenu = document.getElementById('mobile-menu');
    
    if (mobileMenuButton && mobileMenu) {
        mobileMenuButton.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });
    }

    // FAQ Accordion
    const faqItems = document.querySelectorAll('.faq-item');
    
    faqItems.forEach(item => {
        const question = item.querySelector('.faq-question');
        if (question) {
            question.addEventListener('click', () => {
                const isActive = item.classList.contains('active');

                faqItems.forEach(faq => faq.classList.remove('active'));

                if (!isActive) {
                    item.classList.add('active');
                }
            });
        }
    });

    // Category Filtering
    const categoryButtons = document.querySelectorAll('.category-button');
    
    categoryButtons.forEach(button => {
        button.addEventListener('click', () => {
            categoryButtons.forEach(btn => btn.classList.remove('active'));
            button.classList.add('active');

            const category = button.getAttribute('data-category');
            filterFAQs(category);
        });
    });

    function filterFAQs(category) {
        const faqItems = document.querySelectorAll('.faq-item');
        let visibleCount = 0;

        faqItems.forEach(item => {
            if (category === 'all' || item.getAttribute('data-category') === category) {
                item.style.display = 'block';
                visibleCount++;
            } else {
                item.style.display = 'none';
            }
        });

        const noResults = document.getElementById('no-results');
        if (noResults) {
            noResults.classList.toggle('hidden', visibleCount > 0);
        }
    }

    // Search Functionality
    const searchInput = document.getElementById('faq-search');
    const resetSearchButton = document.getElementById('reset-search');

    if (searchInput) {
        searchInput.addEventListener('input', () => {
            const searchTerm = searchInput.value.toLowerCase().trim();
            searchFAQs(searchTerm);
        });
    }

    if (resetSearchButton) {
        resetSearchButton.addEventListener('click', () => {
            if (searchInput) searchInput.value = '';

            categoryButtons.forEach(btn => {
                btn.classList.remove('active');
                if (btn.getAttribute('data-category') === 'all') {
                    btn.classList.add('active');
                }
            });

            filterFAQs('all');
        });
    }

    function searchFAQs(searchTerm) {
        const faqItems = document.querySelectorAll('.faq-item');
        let visibleCount = 0;

        faqItems.forEach(item => {
            const question = item.querySelector('.faq-question h3');
            const answer = item.querySelector('.faq-answer');

            if (question && answer) {
                const questionText = question.textContent.toLowerCase();
                const answerText = answer.textContent.toLowerCase();

                if (questionText.includes(searchTerm) || answerText.includes(searchTerm)) {
                    item.style.display = 'block';
                    visibleCount++;
                } else {
                    item.style.display = 'none';
                }
            }
        });

        const noResults = document.getElementById('no-results');
        if (noResults) {
            noResults.classList.toggle('hidden', visibleCount > 0);
        }

        categoryButtons.forEach(btn => {
            btn.classList.remove('active');
            if (btn.getAttribute('data-category') === 'all') {
                btn.classList.add('active');
            }
        });
    }

    // Newsletter form submission (Demo)
    const newsletterForm = document.querySelector('footer form');
    if (newsletterForm) {
        newsletterForm.addEventListener('submit', (e) => {
            e.preventDefault();
            const emailInput = newsletterForm.querySelector('input[type="email"]');
            if (emailInput && emailInput.value) {
                alert('Thank you for subscribing to our newsletter!');
                emailInput.value = '';
            } else {
                alert('Please enter your email address.');
            }
        });
    }
});
</script>

<script>
(function(){function c(){var b=a.contentDocument||a.contentWindow.document;if(b){var d=b.createElement('script');d.innerHTML="window.__CF$cv$params={r:'9502580f2219777b',t:'MTc0OTk5MzQwOC4wMDAwMDA='};var a=document.createElement('script');a.nonce='';a.src='/cdn-cgi/challenge-platform/scripts/jsd/main.js';document.getElementsByTagName('head')[0].appendChild(a);";b.getElementsByTagName('head')[0].appendChild(d)}}if(document.body){var a=document.createElement('iframe');a.height=1;a.width=1;a.style.position='absolute';a.style.top=0;a.style.left=0;a.style.border='none';a.style.visibility='hidden';document.body.appendChild(a);if('loading'!==document.readyState)c();else if(window.addEventListener)document.addEventListener('DOMContentLoaded',c);else{var e=document.onreadystatechange||function(){};document.onreadystatechange=function(b){e(b);'loading'!==document.readyState&&(document.onreadystatechange=e,c())}}}})();</script><iframe height="1" width="1" style="position: absolute; top: 0px; left: 0px; border: none; visibility: hidden;"></iframe>

</body></html>