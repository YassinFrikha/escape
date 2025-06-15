<?php include './logic/session.php'; ?>
<html lang="en"><head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php include './components/website-icon.php'; ?>
    <title>Escape | Terms and Conditions</title>
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
        
        .terms-section {
            transition: all 0.3s ease;
        }
        
        .terms-section:hover {
            transform: translateY(-2px);
        }
        
        .social-icon {
            transition: transform 0.3s ease, color 0.3s ease;
        }
        
        .social-icon:hover {
            transform: translateY(-3px);
        }
        
        .table-of-contents a {
            transition: all 0.2s ease;
        }
        
        .table-of-contents a:hover {
            color: var(--primary);
            padding-left: 5px;
        }
        
        .back-to-top {
            opacity: 0;
            visibility: hidden;
            transition: all 0.3s ease;
        }
        
        .back-to-top.visible {
            opacity: 1;
            visibility: visible;
        }
    </style>
<style>*, ::before, ::after{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-gradient-from-position: ;--tw-gradient-via-position: ;--tw-gradient-to-position: ;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: ;--tw-contain-size: ;--tw-contain-layout: ;--tw-contain-paint: ;--tw-contain-style: }::backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-gradient-from-position: ;--tw-gradient-via-position: ;--tw-gradient-to-position: ;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: ;--tw-contain-size: ;--tw-contain-layout: ;--tw-contain-paint: ;--tw-contain-style: }/* ! tailwindcss v3.4.16 | MIT License | https://tailwindcss.com */*,::after,::before{box-sizing:border-box;border-width:0;border-style:solid;border-color:#e5e7eb}::after,::before{--tw-content:''}:host,html{line-height:1.5;-webkit-text-size-adjust:100%;-moz-tab-size:4;tab-size:4;font-family:ui-sans-serif, system-ui, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";font-feature-settings:normal;font-variation-settings:normal;-webkit-tap-highlight-color:transparent}body{margin:0;line-height:inherit}hr{height:0;color:inherit;border-top-width:1px}abbr:where([title]){-webkit-text-decoration:underline dotted;text-decoration:underline dotted}h1,h2,h3,h4,h5,h6{font-size:inherit;font-weight:inherit}a{color:inherit;text-decoration:inherit}b,strong{font-weight:bolder}code,kbd,pre,samp{font-family:ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;font-feature-settings:normal;font-variation-settings:normal;font-size:1em}small{font-size:80%}sub,sup{font-size:75%;line-height:0;position:relative;vertical-align:baseline}sub{bottom:-.25em}sup{top:-.5em}table{text-indent:0;border-color:inherit;border-collapse:collapse}button,input,optgroup,select,textarea{font-family:inherit;font-feature-settings:inherit;font-variation-settings:inherit;font-size:100%;font-weight:inherit;line-height:inherit;letter-spacing:inherit;color:inherit;margin:0;padding:0}button,select{text-transform:none}button,input:where([type=button]),input:where([type=reset]),input:where([type=submit]){-webkit-appearance:button;background-color:transparent;background-image:none}:-moz-focusring{outline:auto}:-moz-ui-invalid{box-shadow:none}progress{vertical-align:baseline}::-webkit-inner-spin-button,::-webkit-outer-spin-button{height:auto}[type=search]{-webkit-appearance:textfield;outline-offset:-2px}::-webkit-search-decoration{-webkit-appearance:none}::-webkit-file-upload-button{-webkit-appearance:button;font:inherit}summary{display:list-item}blockquote,dd,dl,figure,h1,h2,h3,h4,h5,h6,hr,p,pre{margin:0}fieldset{margin:0;padding:0}legend{padding:0}menu,ol,ul{list-style:none;margin:0;padding:0}dialog{padding:0}textarea{resize:vertical}input::placeholder,textarea::placeholder{opacity:1;color:#9ca3af}[role=button],button{cursor:pointer}:disabled{cursor:default}audio,canvas,embed,iframe,img,object,svg,video{display:block;vertical-align:middle}img,video{max-width:100%;height:auto}[hidden]:where(:not([hidden=until-found])){display:none}.container{width:100%}@media (min-width: 640px){.container{max-width:640px}}@media (min-width: 768px){.container{max-width:768px}}@media (min-width: 1024px){.container{max-width:1024px}}@media (min-width: 1280px){.container{max-width:1280px}}@media (min-width: 1536px){.container{max-width:1536px}}.visible{visibility:visible}.fixed{position:fixed}.sticky{position:sticky}.bottom-8{bottom:2rem}.right-8{right:2rem}.top-0{top:0px}.top-24{top:6rem}.z-50{z-index:50}.mx-auto{margin-left:auto;margin-right:auto}.mb-1{margin-bottom:0.25rem}.mb-10{margin-bottom:2.5rem}.mb-2{margin-bottom:0.5rem}.mb-4{margin-bottom:1rem}.mb-6{margin-bottom:1.5rem}.mt-2{margin-top:0.5rem}.mt-8{margin-top:2rem}.block{display:block}.flex{display:flex}.grid{display:grid}.hidden{display:none}.h-5{height:1.25rem}.h-6{height:1.5rem}.h-8{height:2rem}.w-5{width:1.25rem}.w-6{width:1.5rem}.w-8{width:2rem}.w-full{width:100%}.max-w-3xl{max-width:48rem}.max-w-5xl{max-width:64rem}.cursor-not-allowed{cursor:not-allowed}.list-disc{list-style-type:disc}.grid-cols-1{grid-template-columns:repeat(1, minmax(0, 1fr))}.flex-col{flex-direction:column}.items-center{align-items:center}.justify-between{justify-content:space-between}.gap-8{gap:2rem}.space-x-2 > :not([hidden]) ~ :not([hidden]){--tw-space-x-reverse:0;margin-right:calc(0.5rem * var(--tw-space-x-reverse));margin-left:calc(0.5rem * calc(1 - var(--tw-space-x-reverse)))}.space-x-4 > :not([hidden]) ~ :not([hidden]){--tw-space-x-reverse:0;margin-right:calc(1rem * var(--tw-space-x-reverse));margin-left:calc(1rem * calc(1 - var(--tw-space-x-reverse)))}.space-x-8 > :not([hidden]) ~ :not([hidden]){--tw-space-x-reverse:0;margin-right:calc(2rem * var(--tw-space-x-reverse));margin-left:calc(2rem * calc(1 - var(--tw-space-x-reverse)))}.space-y-2 > :not([hidden]) ~ :not([hidden]){--tw-space-y-reverse:0;margin-top:calc(0.5rem * calc(1 - var(--tw-space-y-reverse)));margin-bottom:calc(0.5rem * var(--tw-space-y-reverse))}.space-y-3 > :not([hidden]) ~ :not([hidden]){--tw-space-y-reverse:0;margin-top:calc(0.75rem * calc(1 - var(--tw-space-y-reverse)));margin-bottom:calc(0.75rem * var(--tw-space-y-reverse))}.rounded{border-radius:0.25rem}.rounded-full{border-radius:9999px}.rounded-lg{border-radius:0.5rem}.rounded-l-lg{border-top-left-radius:0.5rem;border-bottom-left-radius:0.5rem}.rounded-r-lg{border-top-right-radius:0.5rem;border-bottom-right-radius:0.5rem}.border-t{border-top-width:1px}.border-gray-300{--tw-border-opacity:1;border-color:rgb(209 213 219 / var(--tw-border-opacity, 1))}.border-green-700{--tw-border-opacity:1;border-color:rgb(21 128 61 / var(--tw-border-opacity, 1))}.bg-gray-50{--tw-bg-opacity:1;background-color:rgb(249 250 251 / var(--tw-bg-opacity, 1))}.bg-white{--tw-bg-opacity:1;background-color:rgb(255 255 255 / var(--tw-bg-opacity, 1))}.p-3{padding:0.75rem}.p-5{padding:1.25rem}.p-6{padding:1.5rem}.p-8{padding:2rem}.px-4{padding-left:1rem;padding-right:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.py-12{padding-top:3rem;padding-bottom:3rem}.py-16{padding-top:4rem;padding-bottom:4rem}.py-2{padding-top:0.5rem;padding-bottom:0.5rem}.py-3{padding-top:0.75rem;padding-bottom:0.75rem}.pb-4{padding-bottom:1rem}.pl-5{padding-left:1.25rem}.pt-3{padding-top:0.75rem}.pt-8{padding-top:2rem}.text-center{text-align:center}.text-2xl{font-size:1.5rem;line-height:2rem}.text-4xl{font-size:2.25rem;line-height:2.5rem}.text-lg{font-size:1.125rem;line-height:1.75rem}.text-sm{font-size:0.875rem;line-height:1.25rem}.text-xl{font-size:1.25rem;line-height:1.75rem}.font-bold{font-weight:700}.font-medium{font-weight:500}.font-semibold{font-weight:600}.text-gray-700{--tw-text-opacity:1;color:rgb(55 65 81 / var(--tw-text-opacity, 1))}.text-gray-800{--tw-text-opacity:1;color:rgb(31 41 55 / var(--tw-text-opacity, 1))}.text-green-600{--tw-text-opacity:1;color:rgb(22 163 74 / var(--tw-text-opacity, 1))}.text-green-800{--tw-text-opacity:1;color:rgb(22 101 52 / var(--tw-text-opacity, 1))}.text-white{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity, 1))}.opacity-50{opacity:0.5}.shadow-lg{--tw-shadow:0 10px 15px -3px rgb(0 0 0 / 0.1), 0 4px 6px -4px rgb(0 0 0 / 0.1);--tw-shadow-colored:0 10px 15px -3px var(--tw-shadow-color), 0 4px 6px -4px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.shadow-md{--tw-shadow:0 4px 6px -1px rgb(0 0 0 / 0.1), 0 2px 4px -2px rgb(0 0 0 / 0.1);--tw-shadow-colored:0 4px 6px -1px var(--tw-shadow-color), 0 2px 4px -2px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.transition{transition-property:color, background-color, border-color, fill, stroke, opacity, box-shadow, transform, filter, -webkit-text-decoration-color, -webkit-backdrop-filter;transition-property:color, background-color, border-color, text-decoration-color, fill, stroke, opacity, box-shadow, transform, filter, backdrop-filter;transition-property:color, background-color, border-color, text-decoration-color, fill, stroke, opacity, box-shadow, transform, filter, backdrop-filter, -webkit-text-decoration-color, -webkit-backdrop-filter;transition-timing-function:cubic-bezier(0.4, 0, 0.2, 1);transition-duration:150ms}.duration-300{transition-duration:300ms}.hover\:bg-gray-100:hover{--tw-bg-opacity:1;background-color:rgb(243 244 246 / var(--tw-bg-opacity, 1))}.hover\:text-gray-300:hover{--tw-text-opacity:1;color:rgb(209 213 219 / var(--tw-text-opacity, 1))}.focus\:outline-none:focus{outline:2px solid transparent;outline-offset:2px}.focus\:ring-green-500:focus{--tw-ring-opacity:1;--tw-ring-color:rgb(34 197 94 / var(--tw-ring-opacity, 1))}@media (min-width: 768px){.md\:flex{display:flex}.md\:hidden{display:none}.md\:w-1\/4{width:25%}.md\:w-3\/4{width:75%}.md\:grid-cols-2{grid-template-columns:repeat(2, minmax(0, 1fr))}.md\:flex-row{flex-direction:row}}@media (min-width: 1024px){.lg\:grid-cols-4{grid-template-columns:repeat(4, minmax(0, 1fr))}}</style><style type="text/css">:root [href^="//mage98rquewz.com/"], :root [href^="//x4pollyxxpush.com/"], :root span[id^="ezoic-pub-ad-placeholder-"], :root ins.adsbygoogle[data-ad-slot], :root ins.adsbygoogle[data-ad-client], :root img[src^="https://s-img.adskeeper.com/"], :root guj-ad, :root gpt-ad, :root div[id^="zergnet-widget"], :root div[id^="vuukle-ad-"], :root div[id^="taboola-stream-"], :root div[id^="sticky_ad_"], :root div[id^="st"][style^="z-index: 999999999;"], :root div[id^="gpt_ad_"], :root div[id^="ezoic-pub-ad-"], :root div[id^="dfp-ad-"], :root div[id^="crt-"][style], :root div[id^="adspot-"], :root div[id^="adrotate_widgets-"], :root ps-connatix-module, :root div[id^="ad_position_"], :root div[id^="ad-div-"], :root div[id*="ScriptRoot"], :root div[id*="MarketGid"], :root div[data-id-advertdfpconf], :root div[data-dfp-id], :root hl-adsense, :root div[data-contentexchange-widget], :root div[data-alias="300x250 Ad 2"], :root div[data-adzone], :root div[data-adunit-path], :root div[data-adname], :root div[data-ad-targeting], :root div[data-ad-region], :root div[data-ad-placeholder], :root div[aria-label="Ads"], :root display-ads, :root display-ad-component, :root atf-ad-slot, :root aside[id^="adrotate_widgets-"], :root amp-fx-flying-carpet, :root amp-embed[type="taboola"], :root amp-connatix-player, :root amp-ad-custom, :root amp-ad, :root div[id^="google_dfp_"], :root ad-slot, :root ad-shield-ads, :root a[style="width:100%;height:100%;z-index:10000000000000000;position:absolute;top:0;left:0;"], :root a[onmousedown^="this.href='https://paid.outbrain.com/network/redir?"] + .ob_source, :root a[href^="https://xbet-4.com/"], :root div[id^="ad-position-"], :root a[href^="https://www.toprevenuegate.com/"], :root a[href^="https://www.purevpn.com/"][href*="&utm_source=aff-"], :root a[href^="https://www.privateinternetaccess.com/"] > img, :root a[href^="https://www.onlineusershielder.com/"], :root a[href^="https://financeads.net/tc.php?"], :root a[href^="https://www.mrskin.com/tour"], :root a[href^="https://www.infowarsstore.com/"] > img, :root a[href^="https://www.highperformancecpmgate.com/"], :root a[href^="https://www.highcpmrevenuenetwork.com/"], :root a[href^="https://www.get-express-vpn.com/offer/"], :root a[href^="https://lnkxt.bannerator.com/"], :root a[href^="https://www.geekbuying.com/dynamic-ads/"], :root a[href^="https://www.financeads.net/tc.php?"], :root a[href^="https://www.effectiveratecpm.com/"], :root [href^="https://www.herbanomic.com/"] > img, :root a[href^="https://maymooth-stopic.com/"], :root a[href^="https://www.dql2clk.com/"], :root a[href^="https://www.nutaku.net/signup/landing/"], :root a[href^="https://www.dating-finder.com/signup/?ai_d="], :root a[href^="https://explore-site.com/"], :root a[href^="https://www.brazzersnetwork.com/landing/"], :root a[href^="https://www.adxsrve.com/"], :root [data-template-type="nativead"], :root a[href^="https://www.endorico.com/Smartlink/"], :root a[href^="https://www.adultempire.com/"][href*="?partner_id="], :root a[href^="https://voluum.prom-xcams.com/"], :root a[href^="https://twinrdsyte.com/"], :root a[href^="https://twinrdsrv.com/"], :root a[href^="https://trk.nfl-online-streams.club/"], :root a[href^="https://tracking.avapartner.com/"], :root a[href^="https://track.wg-aff.com"], :root a[href^="https://track.ultravpn.com/"], :root a[href^="https://track.afcpatrk.com/"], :root a[href^="https://torguard.net/aff.php"] > img, :root [data-identity="adhesive-ad"], :root a[href^="https://tc.tradetracker.net/"] > img, :root a[href^="https://tatrck.com/"], :root a[href^="https://click.candyoffers.com/"], :root [href^="https://zstacklife.com/"] img, :root a[href^="https://t.aslnk.link/"], :root a[href^="https://t.adating.link/"], :root a[href^="https://go.trackitalltheway.com/"], :root [href^="https://track.fiverr.com/visit/"] > img, :root a[href^="https://syndication.exoclick.com/"], :root a[href^="https://syndication.dynsrvtbg.com/"], :root div[data-alias="300x250 Ad 1"], :root a[href^="https://syndicate.contentsserved.com/"], :root a[href^="https://svb-analytics.trackerrr.com/"], :root a[href^="https://ad.doubleclick.net/"], :root a[href^="https://static.fleshlight.com/images/banners/"], :root a[href^="https://slkmis.com/"], :root bottomadblock, :root a[href^="https://s.zlinkd.com/"], :root a[href^="https://s.zlink3.com/"], :root a[href^="https://www.mrskin.com/account/"], :root a[href^="https://s.optzsrv.com/"], :root a[href^="https://s.ma3ion.com/"], :root a[href^="https://s.eunow4u.com/"], :root #kt_player > div[style$="display: block;"][style*="inset: 0px;"], :root [href$="/sexdating.php"], :root a[href^="https://quotationfirearmrevision.com/"], :root a[href^="https://pubads.g.doubleclick.net/"], :root a[href^="https://prf.hn/click/"][href*="/camref:"] > img, :root a[href^="https://www.dating-finder.com/?ai_d="], :root a[href^="https://serve.awmdelivery.com/"], :root a[href^="https://prf.hn/click/"][href*="/adref:"] > img, :root app-ad, :root [href^="https://ap.octopuspop.com/click/"] > img, :root a[href^="https://postback1win.com/"], :root a[href^="https://mmwebhandler.aff-online.com/"], :root a[href^="https://www.bet365.com/"][href*="affiliate="], :root a[href^="https://pb-track.com/"], :root a[href^="https://pb-front.com/"], :root a[href^="https://paid.outbrain.com/network/redir?"], :root a[href^="https://streamate.com/landing/click/"], :root div[class^="Adstyled__AdWrapper-"], :root a[href^="https://osfultrbriolenai.info/"], :root a[href^="https://upsups.click/"], :root a[href^="https://ndt5.net/"], :root a[href^="https://natour.naughtyamerica.com/track/"], :root a[href^="https://mediaserver.entainpartners.com/renderBanner.do?"], :root a[href^="https://m.do.co/c/"] > img, :root a[href^="https://lead1.pl/"], :root a[href^="https://landing.brazzersnetwork.com/"], :root a[href^="https://join.virtuallust3d.com/"], :root a[href^="https://kiksajex.com/"], :root a[href^="https://juicyads.in/"], :root a[href^="https://snowdayonline.xyz/"], :root a[href^="https://mediaserver.gvcaffiliates.com/renderBanner.do?"], :root a[href^="https://join.dreamsexworld.com/"], :root a[href^="https://jaxofuna.com/"], :root a[href^="https://italarizege.xyz/"], :root a[href^="https://iqbroker.com/"][href*="?aff="], :root a[href^="https://identicaldrench.com/"], :root a[href^="https://hot-growngames.life/"], :root a[href^="https://helmethomicidal.com/"], :root a[href^="https://golinks.work/"], :root ark-top-ad, :root a[href^="https://s.zlinkn.com/"], :root a[href^="https://go.xxxvjmp.com/"], :root [class^="tile-picker__CitrusBannerContainer-sc-"], :root a[href^="https://go.xxxiijmp.com"], :root a[href^="https://go.xtbaffiliates.com/"], :root [data-role="tile-ads-module"], :root a[href^="https://go.xlviirdr.com"], :root div[class$="-adlabel"], :root a[href^="https://go.xlviiirdr.com"], :root a[href^="https://ismlks.com/"], :root [href^="https://www.mypillow.com/"] > img, :root a[href^="https://go.xlirdr.com"], :root [data-css-class="dfp-inarticle"], :root a[href^="https://l.hyenadata.com/"], :root a[href^="https://go.tmrjmp.com"], :root a[href^="https://zirdough.net/"], :root a[href^="https://s.deltraff.com/"], :root a[href^="https://go.markets.com/visit/?bta="], :root a[href^="https://billing.purevpn.com/aff.php"] > img, :root a[href^="https://go.hpyrdr.com/"], :root a[href^="https://lijavaxa.com/"], :root a[href^="https://go.goaserv.com/"], :root a[href^="https://t.hrtye.com/"], :root a[href^="https://go.etoro.com/"] > img, :root a[href^="https://go.dmzjmp.com"], :root a[href^="https://www.bang.com/?aff="], :root #mgb-container > #mgb, :root a[href^="https://go.admjmp.com"], :root a[href^="https://ak.stikroltiltoowi.net/"], :root a[href^="https://get.surfshark.net/aff_c?"][href*="&aff_id="] > img, :root a[href^="https://www.adskeeper.com"], :root a[data-redirect^="https://paid.outbrain.com/network/redir?"], :root [href^="https://clicks.affstrack.com/"] > img, :root a[href^="https://ak.hauchiwu.com/"], :root a[href^="https://engine.phn.doublepimp.com/"], :root a[href^="https://engine.blueistheneworanges.com/"], :root a[href^="https://drumskilxoa.click/"], :root a[href^="https://dl-protect.net/"], :root a[href*=".foxqck.com/"], :root a[href^="https://ctosrd.com/"], :root a[href^="https://clixtrac.com/"], :root [href^="https://noqreport.com/"] > img, :root a[href^="https://clicks.pipaffiliates.com/"], :root app-advertisement, :root a[href^="https://getmatchedlocally.com/"], :root a[href^="https://clickins.slixa.com/"], :root a[href^="https://datewhisper.life/"], :root a[href^="https://get-link.xyz/"], :root a[href^="https://click.linksynergy.com/fs-bin/"] > img, :root a[href^="https://combodef.com/"], :root a[href^="https://click.hoolig.app/"], :root a[href^="https://click.ggpickaff.com/"], :root a[href^="https://track.totalav.com/"], :root a[href^="https://ctrdwm.com/"], :root img[src^="https://images.purevpnaffiliates.com"], :root a[href^="https://porntubemate.com/"], :root a[href^="https://clickadilla.com/"], :root a[href^="https://click.dtiserv2.com/"], :root a[href^="https://go.xlvirdr.com"], :root a[href^="http://www.iyalc.com/"], :root a[href^="https://claring-loccelkin.com/"], :root a[href^="https://bongacams2.com/track?"], :root a[href^="https://t.ajrkm1.com/"], :root a[href^="https://bongacams10.com/track?"], :root a[href^="https://www.sheetmusicplus.com/"][href*="?aff_id="], :root a[href^="https://bngpt.com/"], :root a[href^="https://black77854.com/"], :root a[href^="https://rixofa.com/"], :root #ads[style^="position: absolute; z-index: 30; width: 100%; height"], :root a[href^="https://disobediencecalculatormaiden.com/"], :root a[href^="https://best-experience-cool.com/"], :root a[href^="https://banners.livepartners.com/"], :root a[href^="https://myclick-2.com/"], :root a[href^="https://sexynearme.com/"], :root a[href^="https://baipahanoop.net/"], :root a[href^="http://revolvemockerycopper.com/"], :root a[href^="https://awptjmp.com/"], :root a[href^="https://join.sexworld3d.com/track/"], :root a[href^="https://aweptjmp.com/"], :root a[href^="https://ausoafab.net/"], :root a[href^="https://adclick.g.doubleclick.net/"], :root a[href^="https://aj1070.online/"], :root a[href^="https://bc.game/"], :root a[href^="https://ak.oalsauwy.net/"], :root a[href^="https://a.bestcontentoperation.top/"], :root a[href^="https://adultfriendfinder.com/go/"], :root a[href^="https://ads.planetwin365affiliate.com/"], :root a[href^="https://ads.leovegas.com/"], :root .nya-slot[style], :root a[href^="https://a.bestcontentweb.top/"], :root a[href^="https://a2.adform.net/"], :root a[href^="https://a.candyai.love/"], :root a[href^="https://playnano.online/offerwalls/?ref="], :root a[href^="https://a.adtng.com/"], :root .banner-img > .pbl, :root [data-m-ad-id], :root a[href^="https://a-ads.com/"], :root [id^="ad_slider"], :root a[href^="https://click.ggpickyaff.com/"], :root broadstreet-zone-container, :root a[href^="https://ak.psaltauw.net/"], :root a[href^="https://1winpb.com/"], :root div[id^="rc-widget-"], :root a[href^="http://eslp34af.click/"], :root a[href^="https://turnstileunavailablesite.com/"], :root a[href^="https://chaturbate.com/in/?"], :root a[href^="https://prf.hn/click/"][href*="/creativeref:"] > img, :root a[href*="&maxads="], :root a[href^="http://www.adultempire.com/unlimited/promo?"][href*="&partner_id="], :root a[href^="https://1betandgonow.com/"], :root a[href^="https://eergortu.net/"], :root div[id^="optidigital-adslot"], :root a[href^="https://123-stream.org/"], :root a[href^="https://in.rabbtrk.com/"], :root a[href^="http://www.h4trck.com/"], :root a[href^="http://www.friendlyduck.com/AF_"], :root a[href^="https://go.rmhfrtnd.com"], :root a[href^="https://allhost.shop/aff.php?"], :root [data-dynamic-ads], :root a[href^="http://vnte9urn.click/"], :root a[href^="http://troopsassistedstupidity.com/"], :root a[href^="http://trk.globwo.online/"], :root a[href^="https://random-affiliate.atimaze.com/"], :root a-ad, :root a[href^="https://offhandpump.com/"], :root a[href^="http://stickingrepute.com/"], :root #slashboxes > .deals-rail, :root a[href^="http://roadcontagion.com/"], :root a[href^="http://premonitioninventdisagree.com/"], :root a[href^="http://cam4com.go2cloud.org/aff_c?"], :root a[href^="https://ads.betfair.com/redirect.aspx?"], :root [href^="https://www.mypatriotsupply.com/"] > img, :root a[href^="https://trk.softonixs.xyz/"], :root [data-advadstrackid], :root a[href^="http://muzzlematrix.com/"], :root a[href^="https://track.adform.net/"], :root a[href^="http://avthelkp.net/"], :root a[href^="https://a.medfoodhome.com/"], :root a[href^="https://engine.flixtrial.com/"], :root [data-type="ad-vertical"], :root [data-taboola-options], :root a[href^="http://annulmentequitycereals.com/"], :root a[href^="//startgaming.net/tienda/" i], :root a[href^="https://join.virtualtaboo.com/track/"], :root [id^="ad_sky"], :root a[href^="http://coefficienttolerategravel.com/"], :root a[href^="https://a.medfoodsafety.com/"], :root a[href^="//go.eabids.com/"], :root a[href^="//ejitsirdosha.net/"], :root a[href^=" https://www.friendlyduck.com/AF_"], :root [data-cl-spot-id], :root a[href*="/jump/next.php?r="], :root a[href^="https://go.rmishe.com/"], :root [href^="https://ilovemyfreedoms.com/landing-"], :root a[href^="https://syndication.optimizesrv.com/"], :root a[href*="//daichoho.com/"], :root a[href^="https://go.nordvpn.net/aff"] > img, :root .\[\&_\.gdprAdTransparencyCogWheelButton\]\:\!pjra-z-\[5\], :root [href^="http://clicks.totemcash.com/"], :root a[href^="https://ad.zanox.com/ppc/"] > img, :root a[href^="https://lone-pack.com/"], :root [data-d-ad-id], :root a[href*=".engine.adglare.net/"], :root a[href^="https://t.ajrkm3.com/"], :root [href^="https://aads.com/campaigns/"], :root a[href^="//stighoazon.com/"], :root [href^="https://www.profitablegatecpm.com/"], :root div[id^="lazyad-"], :root a[href^="http://com-1.pro/"], :root a[href*=".cfm?domain="][href*="&fp="], :root [data-ad-name], :root a[href^="https://loboclick.com/"], :root a[data-url^="https://vulpix.bet/?ref="], :root a[href^="https://ab.advertiserurl.com/aff/"], :root a[data-oburl^="https://paid.outbrain.com/network/redir?"], :root a[href^="https://go.xlivrdr.com"], :root [onclick^="location.href='https://1337x.vpnonly.site/"], :root [name^="google_ads_iframe"], :root [id^="section-ad-banner"], :root a[href^="https://www.goldenfrog.com/vyprvpn?offer_id="][href*="&aff_id="], :root a[href*="//jjgirls.com/sex/Chaturbate"], :root [id^="ad-wrap-"], :root [href^="https://zone.gotrackier.com/"], :root a[href^="http://sarcasmadvisor.com/"], :root [href^="https://www.restoro.com/"], :root [href^="https://www.targetingpartner.com/"], :root .section-subheader > .section-hotel-prices-header, :root [href^="https://www.hostg.xyz/"] > img, :root a[href^="http://adultfriendfinder.com/go/"], :root a[href^="https://fastestvpn.com/lifetime-special-deal?a_aid="], :root a[href^="https://tour.mrskin.com/"], :root [href^="https://www.brighteonstore.com/products/"] img, :root citrus-ad-wrapper, :root a[href^="https://go.grinsbest.com/"], :root a[href^="https://vo2.qrlsx.com/"], :root [href^="https://www.avantlink.com/click.php"] img, :root a[href^="https://t.acam.link/"], :root a[href^="https://go.strpjmp.com/"], :root [href^="https://url.totaladblock.com/"], :root div[id^="div-ads-"], :root [href^="https://rapidgator.net/article/premium/ref/"], :root [href^="https://join.girlsoutwest.com/"], :root a[href^="https://activate-game.com/"], :root .scroll-fixable.rail-right > .deals-rail, :root [data-wpas-zoneid], :root a[href^="https://track.aftrk3.com/"], :root [href^="https://join3.bannedsextapes.com"], :root a[href^="https://bodelen.com/"], :root a[href*=".g2afse.com/"], :root div[id^="adngin-"], :root [data-rc-widget], :root span[data-ez-ph-id], :root [href^="https://track.aftrk1.com/"], :root [href^="https://join.playboyplus.com/track/"], :root a[href^="https://go.xxxijmp.com"], :root [href^="https://istlnkcl.com/"], :root a[href^="https://tm-offers.gamingadult.com/"], :root [href^="https://charmingdatings.life/"], :root [href^="https://glersakr.com/"], :root a[href^="https://a.bestcontentfood.top/"], :root [href^="https://cpa.10kfreesilver.com/"], :root [data-id^="div-gpt-ad"], :root a[href^="https://tracker.loropartners.com/"], :root [href^="https://awbbjmp.com/"], :root div[ow-ad-unit-wrapper], :root a[data-href^="http://ads.trafficjunky.net/"], :root a[href^="http://partners.etoro.com/"], :root a[href^="https://www.friendlyduck.com/AF_"], :root [href^="https://ad1.adfarm1.adition.com/"], :root a[href^="https://bngprm.com/"], :root [href^="https://shiftnetwork.infusionsoft.com/go/"] > img, :root a[href^="https://go.bushheel.com/"], :root a[href^="https://ctjdwm.com/"], :root a[href^="https://camfapr.com/landing/click/"], :root div[data-ad-wrapper], :root .gnt_em_vp_c[data-g-s="vp_dk"], :root [href="//sexcams.plus/"], :root [href^="http://www.mypillow.com/"] > img, :root a[href^="https://promerycergerful.com/"], :root #kt_player > a[target="_blank"], :root a[href^="http://bongacams.com/track?"], :root [href^="http://mypillow.com/"] > img, :root [href="https://ourgoldguy.com/contact/"] img, :root .ob_container .item-container-obpd, :root [id^="div-gpt-ad"], :root a[href^="https://go.rmhfrtnd.com/"], :root [href="https://jdrucker.com/gold"] > img, :root a[href^="https://www.liquidfire.mobi/"], :root .grid > .container > #aside-promotion, :root DFP-AD, :root [href^="https://go.xlrdr.com"], :root a[href^="https://s.cant3am.com/"], :root [data-testid^="taboola-"], :root a[href^="https://track.1234sd123.com/"], :root zeus-ad, :root [data-testid="prism-ad-wrapper"], :root [href^="https://ad.admitad.com/"], :root [href^="https://mypillow.com/"] > img, :root [data-testid="ad_testID"], :root [href^="https://antiagingbed.com/discount/"] > img, :root a[href*=".adsrv.eacdn.com/"], :root [href^="https://optimizedelite.com/"] > img, :root [data-name="adaptiveConstructorAd"], :root a[href^="https://go.cmtaffiliates.com/"], :root [data-testid="adBanner-wrapper"], :root [href^="https://mylead.global/stl/"] > img, :root [href^="https://mypatriotsupply.com/"] > img, :root a[href^="https://go.hpyjmp.com"], :root iframe[scrolling="no"][sandbox*="allow-popups allow-modals"][style^="width: 100%; height: 100%; border: none;"], :root [href^="https://mystore.com/"] > img, :root a[href^="https://81ac.xyz/"], :root [href^="https://wct.link/click?"], :root div[data-adunit], :root app-large-ad, :root [href^="https://turtlebids.irauctions.com/"] img, :root a[href^="https://believessway.com/"], :root a[href^="https://witnessjacket.com/"], :root [data-mobile-ad-id], :root [class^="amp-ad-"], :root a[href^="http://handgripvegetationhols.com/"], :root a[href^="https://go.bbrdbr.com"], :root a[href^="https://fc.lc/ref/"], :root [data-adshim], :root topadblock, :root a[href^="//s.zlinkd.com/"], :root #teaser1[style^="width:autopx;"], :root [href^="https://www.cloudways.com/en/?id"], :root [data-asg-ins], :root a[href^="https://gamingadlt.com/?offer="], :root [data-desktop-ad-id], :root [data-adbridg-ad-class], :root #teaser3[style^="width:autopx;"], :root [data-adblockkey], :root [data-block-type="ad"], :root [data-ad-width], :root [onclick*="content.ad/"], :root [data-ad-manager-id], :root AMP-AD, :root [data-ad-cls], :root [data-ez-name], :root a[href^="https://go.mnaspm.com/"], :root a[href^="https://service.bv-aff-trx.com/"], :root a[href^="https://6-partner.com/"], :root [class^="s2nPlayer"], :root a[href^="https://traffdaq.com/"], :root [data-testid="commercial-label-taboola"], :root [class^="div-gpt-ad"], :root a[href^="http://tc.tradetracker.net/"] > img, :root a[href^="https://www8.smartadserver.com/"], :root a[href^="https://pb-imc.com/"], :root [href^="https://affiliate.fastcomet.com/"] > img, :root [class^="adDisplay-module"], :root [data-freestar-ad][id], :root AD-SLOT, :root a[href^="https://www.googleadservices.com/pagead/aclk?"] > img, :root [data-ad-module], :root a[href^="https://go.skinstrip.net"][href*="?campaignId="], :root #teaser2[style^="width:autopx;"], :root [data-revive-zoneid], :root a[href^="https://losingoldfry.com/"], :root div[id^="div-gpt-"], :root a[href^="https://gml-grp.com/"], :root .ob_dual_right > .ob_ads_header ~ .odb_div, :root a[href^="https://cam4com.go2cloud.org/"], :root a[href^="http://li.blogtrottr.com/click?"], :root a[onmousedown^="this.href='https://paid.outbrain.com/network/redir?"], :root a[href^="https://t.ajump1.com/"], :root a[href^="https://go.xxxjmp.com"], :root #leader-companion > a[href], :root a[href^="https://wittered-mainging.com/"], :root #teaser3[style="width: 100%;text-align: center;display: scroll;position:fixed;bottom: 0;margin: 0 auto;z-index: 103;"], :root [href^="https://wwp.hoqodd.com/redirect-zone/"] { display: none !important; }</style></head>
<body>
    <!-- Navigation -->
    <?php include './components/navbar.php'; ?>


    <!-- Page Header -->
    <div class="primary-bg text-white py-12">
        <div class="container mx-auto px-4 text-center">
            <h1 class="text-4xl font-bold mb-4">Terms and Conditions</h1>
            <p class="text-xl max-w-3xl mx-auto">Please read these terms and conditions carefully before using our services.</p>
            <p class="mt-2 text-sm">Last Updated: June 15, 2023</p>
        </div>
    </div>

    <!-- Terms Content -->
    <section class="py-16 px-4">
        <div class="container mx-auto max-w-5xl">
            <div class="flex flex-col md:flex-row gap-8">
                <!-- Table of Contents (Sidebar) -->
                <div class="md:w-1/4">
                    <div class="bg-white rounded-lg shadow-md p-6 sticky top-24">
                        <h2 class="text-xl font-bold mb-4 primary-text">Table of Contents</h2>
                        <ul class="space-y-2 table-of-contents">
                            <li><a href="#introduction" class="text-gray-700 hover:text-primary-600">1. Introduction</a></li>
                            <li><a href="#definitions" class="text-gray-700 hover:text-primary-600">2. Definitions</a></li>
                            <li><a href="#services" class="text-gray-700 hover:text-primary-600">3. Services</a></li>
                            <li><a href="#booking" class="text-gray-700 hover:text-primary-600">4. Booking &amp; Payment</a></li>
                            <li><a href="#cancellation" class="text-gray-700 hover:text-primary-600">5. Cancellation Policy</a></li>
                            <li><a href="#conduct" class="text-gray-700 hover:text-primary-600">6. Code of Conduct</a></li>
                            <li><a href="#liability" class="text-gray-700 hover:text-primary-600">7. Liability &amp; Risks</a></li>
                            <li><a href="#insurance" class="text-gray-700 hover:text-primary-600">8. Insurance</a></li>
                            <li><a href="#privacy" class="text-gray-700 hover:text-primary-600">9. Privacy Policy</a></li>
                            <li><a href="#intellectual" class="text-gray-700 hover:text-primary-600">10. Intellectual Property</a></li>
                            <li><a href="#modifications" class="text-gray-700 hover:text-primary-600">11. Modifications</a></li>
                            <li><a href="#governing" class="text-gray-700 hover:text-primary-600">12. Governing Law</a></li>
                            <li><a href="#contact-info" class="text-gray-700 hover:text-primary-600">13. Contact Information</a></li>
                        </ul>
                    </div>
                </div>
                
                <!-- Main Content -->
                <div class="md:w-3/4">
                    <div class="bg-white rounded-lg shadow-md p-8">
                        <!-- Introduction -->
                        <div id="introduction" class="terms-section mb-10">
                            <h2 class="text-2xl font-bold mb-4 primary-text">1. Introduction</h2>
                            <p class="mb-4">Welcome to Escape. These Terms and Conditions govern your use of our website and services, including the booking of camping trips and related activities. By accessing our website or using our services, you agree to be bound by these Terms and Conditions.</p>
                            <p>If you do not agree with any part of these terms, please do not use our website or services. We recommend that you print a copy of these Terms and Conditions for future reference.</p>
                        </div>
                        
                        <!-- Definitions -->
                        <div id="definitions" class="terms-section mb-10">
                            <h2 class="text-2xl font-bold mb-4 primary-text">2. Definitions</h2>
                            <p class="mb-4">Throughout these Terms and Conditions, the following terms shall have the meanings assigned to them below:</p>
                            <ul class="list-disc pl-5 space-y-2">
                                <li><strong>"Company", "We", "Us", "Our"</strong> refers to Escape, its owners, directors, employees, and agents.</li>
                                <li><strong>"Customer", "You", "Your"</strong> refers to the individual or entity accessing our website or using our services.</li>
                                <li><strong>"Services"</strong> refers to camping trips, outdoor activities, equipment rental, and any other services offered by Escape.</li>
                                <li><strong>"Website"</strong> refers to the Escape website and any associated mobile applications.</li>
                                <li><strong>"Booking"</strong> refers to a reservation for any of our services.</li>
                                <li><strong>"Trip"</strong> refers to a camping expedition, outdoor adventure, or any other activity organized by Escape.</li>
                            </ul>
                        </div>
                        
                        <!-- Services -->
                        <div id="services" class="terms-section mb-10">
                            <h2 class="text-2xl font-bold mb-4 primary-text">3. Services</h2>
                            <p class="mb-4">Escape offers a variety of outdoor adventure services, including but not limited to:</p>
                            <ul class="list-disc pl-5 space-y-2 mb-4">
                                <li>Guided camping trips to various destinations</li>
                                <li>Camping equipment rental</li>
                                <li>Outdoor skills training and workshops</li>
                                <li>Transportation to and from camping sites</li>
                                <li>Meal preparation during trips</li>
                            </ul>
                            <p class="mb-4">The specific details of each service, including duration, location, included amenities, and pricing, will be clearly communicated at the time of booking.</p>
                            <p>We reserve the right to modify or discontinue any service at any time. We will make reasonable efforts to notify customers of any significant changes to booked services.</p>
                        </div>
                        
                        <!-- Booking & Payment -->
                        <div id="booking" class="terms-section mb-10">
                            <h2 class="text-2xl font-bold mb-4 primary-text">4. Booking &amp; Payment</h2>
                            <h3 class="text-xl font-semibold mb-2">4.1 Booking Process</h3>
                            <p class="mb-4">Bookings can be made through our website, by phone, or via email. A booking is not confirmed until you receive a written confirmation from us and the required payment has been processed.</p>
                            
                            <h3 class="text-xl font-semibold mb-2">4.2 Payment Terms</h3>
                            <p class="mb-4">Payment terms are as follows:</p>
                            <ul class="list-disc pl-5 space-y-2 mb-4">
                                <li>For bookings made more than 60 days in advance: 30% deposit at the time of booking, with the remaining balance due 45 days before the trip start date.</li>
                                <li>For bookings made 45-60 days in advance: 50% deposit at the time of booking, with the remaining balance due 30 days before the trip start date.</li>
                                <li>For bookings made less than 45 days in advance: Full payment is required at the time of booking.</li>
                            </ul>
                            
                            <h3 class="text-xl font-semibold mb-2">4.3 Accepted Payment Methods</h3>
                            <p class="mb-4">We accept the following payment methods:</p>
                            <ul class="list-disc pl-5 space-y-2 mb-4">
                                <li>Major credit cards (Visa, Mastercard, American Express, Discover)</li>
                                <li>PayPal</li>
                                <li>Bank transfers</li>
                                <li>Escape gift cards</li>
                            </ul>
                            
                            <h3 class="text-xl font-semibold mb-2">4.4 Price Changes</h3>
                            <p class="mb-4">All prices are subject to change until a booking is confirmed. Once a booking is confirmed, the price will not change unless you modify your booking or unless the change is due to government action such as tax increases.</p>
                            
                            <h3 class="text-xl font-semibold mb-2">4.5 Age Requirements</h3>
                            <p>Customers must be at least 18 years old to make a booking. Participants under 18 must be accompanied by a parent or guardian who assumes full responsibility for their safety and conduct.</p>
                        </div>
                        
                        <!-- Cancellation Policy -->
                        <div id="cancellation" class="terms-section mb-10">
                            <h2 class="text-2xl font-bold mb-4 primary-text">5. Cancellation Policy</h2>
                            <h3 class="text-xl font-semibold mb-2">5.1 Customer Cancellations</h3>
                            <p class="mb-4">Our cancellation policy is as follows:</p>
                            <ul class="list-disc pl-5 space-y-2 mb-4">
                                <li>Cancellations made 30+ days before the trip: Full refund minus a 10% administrative fee</li>
                                <li>Cancellations made 15-29 days before the trip: 70% refund</li>
                                <li>Cancellations made 7-14 days before the trip: 50% refund</li>
                                <li>Cancellations made less than 7 days before the trip: No refund</li>
                            </ul>
                            <p class="mb-4">All cancellation requests must be submitted in writing to our customer service team.</p>
                            
                            <h3 class="text-xl font-semibold mb-2">5.2 Modifications</h3>
                            <p class="mb-4">Requests to modify bookings are subject to availability and the following fees:</p>
                            <ul class="list-disc pl-5 space-y-2 mb-4">
                                <li>Changes made 30+ days before the trip: No additional fee</li>
                                <li>Changes made 15-29 days before the trip: $25 modification fee</li>
                                <li>Changes made less than 15 days before the trip: $50 modification fee</li>
                            </ul>
                            <p class="mb-4">Significant changes, such as changing dates or destinations, may be treated as a cancellation and rebooking, subject to our cancellation policy.</p>
                            
                            <h3 class="text-xl font-semibold mb-2">5.3 Company Cancellations</h3>
                            <p class="mb-4">Escape reserves the right to cancel any trip due to insufficient bookings, severe weather conditions, safety concerns, or any other circumstances beyond our control. In such cases, customers will be offered:</p>
                            <ul class="list-disc pl-5 space-y-2 mb-4">
                                <li>A full refund of all payments made; or</li>
                                <li>The option to transfer to another available trip; or</li>
                                <li>A credit for future use, valid for 18 months from the date of cancellation</li>
                            </ul>
                            <p>Escape is not responsible for any additional expenses incurred by customers as a result of our cancellations, such as non-refundable transportation costs, accommodation, or other arrangements. We strongly recommend purchasing travel insurance to cover such contingencies.</p>
                        </div>
                        
                        <!-- Code of Conduct -->
                        <div id="conduct" class="terms-section mb-10">
                            <h2 class="text-2xl font-bold mb-4 primary-text">6. Code of Conduct</h2>
                            <p class="mb-4">All participants in our trips are expected to adhere to the following code of conduct:</p>
                            <ul class="list-disc pl-5 space-y-2 mb-4">
                                <li>Follow all instructions provided by guides and staff members</li>
                                <li>Respect the natural environment and practice Leave No Trace principles</li>
                                <li>Respect the rights and privacy of other participants</li>
                                <li>Do not engage in any illegal activities during the trip</li>
                                <li>Do not bring or consume illegal substances</li>
                                <li>Consume alcohol responsibly, if permitted on the trip</li>
                                <li>Disclose any medical conditions or dietary requirements that may affect participation</li>
                            </ul>
                            <p>Escape reserves the right to remove any participant from a trip who violates this code of conduct, endangers themselves or others, or significantly disrupts the experience for other participants. In such cases, no refund will be provided, and the participant will be responsible for any additional costs incurred as a result of their early departure.</p>
                        </div>
                        
                        <!-- Liability & Risks -->
                        <div id="liability" class="terms-section mb-10">
                            <h2 class="text-2xl font-bold mb-4 primary-text">7. Liability &amp; Risks</h2>
                            <h3 class="text-xl font-semibold mb-2">7.1 Assumption of Risk</h3>
                            <p class="mb-4">Outdoor activities involve inherent risks, including but not limited to:</p>
                            <ul class="list-disc pl-5 space-y-2 mb-4">
                                <li>Exposure to the elements and extreme weather conditions</li>
                                <li>Encounters with wildlife</li>
                                <li>Physical exertion and potential injuries</li>
                                <li>Remote locations with limited access to immediate medical care</li>
                                <li>Equipment failures</li>
                            </ul>
                            <p class="mb-4">By booking our services, you acknowledge and accept these risks. All participants will be required to sign a separate waiver of liability before participating in any activities.</p>
                            
                            <h3 class="text-xl font-semibold mb-2">7.2 Limitation of Liability</h3>
                            <p class="mb-4">To the fullest extent permitted by law, Escape shall not be liable for:</p>
                            <ul class="list-disc pl-5 space-y-2 mb-4">
                                <li>Any personal injury, death, property damage, or loss suffered by any participant, except where caused by our negligence</li>
                                <li>Any changes to services necessitated by weather, safety concerns, or other factors beyond our control</li>
                                <li>Any indirect, consequential, or special damages arising from the use of our services</li>
                                <li>Any loss or damage to personal belongings during trips</li>
                            </ul>
                            <p>Our total liability to you for all claims shall not exceed the total amount paid by you for the specific service giving rise to the claim.</p>
                        </div>
                        
                        <!-- Insurance -->
                        <div id="insurance" class="terms-section mb-10">
                            <h2 class="text-2xl font-bold mb-4 primary-text">8. Insurance</h2>
                            <p class="mb-4">We strongly recommend that all participants obtain comprehensive travel insurance that includes coverage for:</p>
                            <ul class="list-disc pl-5 space-y-2 mb-4">
                                <li>Trip cancellation and interruption</li>
                                <li>Emergency medical treatment and evacuation</li>
                                <li>Personal accident and injury</li>
                                <li>Personal belongings and equipment</li>
                            </ul>
                            <p>Escape maintains liability insurance as required by law, but this does not replace the need for personal travel insurance. Proof of insurance may be required for certain high-risk activities or remote destinations.</p>
                        </div>
                        
                        <!-- Privacy Policy -->
                        <div id="privacy" class="terms-section mb-10">
                            <h2 class="text-2xl font-bold mb-4 primary-text">9. Privacy Policy</h2>
                            <p class="mb-4">We collect and process personal information in accordance with our Privacy Policy, which is incorporated into these Terms and Conditions by reference. By using our services, you consent to the collection and processing of your personal information as described in our Privacy Policy.</p>
                            <p>We may use photographs or videos taken during trips for promotional purposes unless you specifically request otherwise in writing before the start of your trip.</p>
                        </div>
                        
                        <!-- Intellectual Property -->
                        <div id="intellectual" class="terms-section mb-10">
                            <h2 class="text-2xl font-bold mb-4 primary-text">10. Intellectual Property</h2>
                            <p class="mb-4">All content on our website, including text, graphics, logos, images, audio clips, digital downloads, and software, is the property of Escape or its content suppliers and is protected by international copyright laws.</p>
                            <p class="mb-4">You may not reproduce, distribute, modify, display, perform, or use any materials from our website without our prior written permission.</p>
                            <p>The Escape name, logo, and all related product and service names, designs, and slogans are trademarks of Escape. You may not use such marks without our prior written permission.</p>
                        </div>
                        
                        <!-- Modifications -->
                        <div id="modifications" class="terms-section mb-10">
                            <h2 class="text-2xl font-bold mb-4 primary-text">11. Modifications</h2>
                            <p class="mb-4">We reserve the right to modify these Terms and Conditions at any time. Any changes will be effective immediately upon posting on our website. Your continued use of our services after any such changes constitutes your acceptance of the new Terms and Conditions.</p>
                            <p>It is your responsibility to review these Terms and Conditions periodically for changes. If you do not agree with any modifications, you should discontinue using our services.</p>
                        </div>
                        
                        <!-- Governing Law -->
                        <div id="governing" class="terms-section mb-10">
                            <h2 class="text-2xl font-bold mb-4 primary-text">12. Governing Law</h2>
                            <p class="mb-4">These Terms and Conditions shall be governed by and construed in accordance with the laws of [Jurisdiction], without giving effect to any principles of conflicts of law.</p>
                            <p class="mb-4">Any dispute arising from these Terms and Conditions or your use of our services shall be resolved exclusively in the courts of [Jurisdiction].</p>
                            <p>If any provision of these Terms and Conditions is found to be invalid or unenforceable, the remaining provisions shall remain in full force and effect.</p>
                        </div>
                        
                        <!-- Contact Information -->
                        <div id="contact-info" class="terms-section">
                            <h2 class="text-2xl font-bold mb-4 primary-text">13. Contact Information</h2>
                            <p class="mb-4">If you have any questions or concerns about these Terms and Conditions, please contact us at:</p>
                            <div class="bg-gray-50 p-5 rounded-lg">
                                <p class="mb-1"><strong>Escape</strong></p>
                                <p class="mb-1">123 Adventure Way</p>
                                <p class="mb-1">Mountain View, CA 94043</p>
                                <p class="mb-1">Email: info@wildernessescape.com</p>
                                <p>Phone: (555) 123-4567</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Back to Top Button -->
    <button id="back-to-top" class="back-to-top fixed bottom-8 right-8 primary-bg text-white p-3 rounded-full shadow-lg visible">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18"></path>
        </svg>
    </button>

    <!-- Footer -->
    <iframe src="./components/footer.html" width="100%" height="413" style="border:0;" loading="lazy"></iframe>


    <script>
        document.addEventListener('DOMContentLoaded', function () {
        // Mobile Menu Toggle
        const mobileMenuButton = document.getElementById('mobile-menu-button');
        const mobileMenu = document.getElementById('mobile-menu');
        
        mobileMenuButton.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });
        
        // Back to Top Button
        const backToTopButton = document.getElementById('back-to-top');
        
        window.addEventListener('scroll', () => {
            if (window.pageYOffset > 300) {
                backToTopButton.classList.add('visible');
            } else {
                backToTopButton.classList.remove('visible');
            }
        });
        
        backToTopButton.addEventListener('click', () => {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });
        
        // Smooth scrolling for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                
                const targetId = this.getAttribute('href');
                if (targetId === '#') return;
                
                const targetElement = document.querySelector(targetId);
                if (targetElement) {
                    targetElement.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                    
                    // Close mobile menu if open
                    if (!mobileMenu.classList.contains('hidden')) {
                        mobileMenu.classList.add('hidden');
                    }
                }
            });
        });
        
        // Terms acceptance checkbox
        const acceptCheckbox = document.getElementById('accept-terms');
        const acceptButton = document.getElementById('accept-button');
        
        acceptCheckbox.addEventListener('change', () => {
            if (acceptCheckbox.checked) {
                acceptButton.classList.remove('opacity-50', 'cursor-not-allowed');
                acceptButton.classList.add('hover:bg-opacity-90');
            } else {
                acceptButton.classList.add('opacity-50', 'cursor-not-allowed');
                acceptButton.classList.remove('hover:bg-opacity-90');
            }
        });
        
        acceptButton.addEventListener('click', () => {
            if (acceptCheckbox.checked) {
                alert('Thank you for accepting our Terms and Conditions!');
                // Here you would typically redirect the user or perform some other action
            } else {
                alert('Please accept the Terms and Conditions to continue.');
            }
        });
        
        // Newsletter form submission (Demo)
        const newsletterForm = document.querySelector('footer form');
        if (newsletterForm) {
            newsletterForm.addEventListener('submit', (e) => {
                e.preventDefault();
                const emailInput = newsletterForm.querySelector('input[type="email"]');
                if (emailInput.value) {
                    alert('Thank you for subscribing to our newsletter!');
                    emailInput.value = '';
                } else {
                    alert('Please enter your email address.');
                }
            });
        }
    });
    </script>
<script>(function(){function c(){var b=a.contentDocument||a.contentWindow.document;if(b){var d=b.createElement('script');d.innerHTML="window.__CF$cv$params={r:'950282120086777b',t:'MTc0OTk5NTEyOC4wMDAwMDA='};var a=document.createElement('script');a.nonce='';a.src='/cdn-cgi/challenge-platform/scripts/jsd/main.js';document.getElementsByTagName('head')[0].appendChild(a);";b.getElementsByTagName('head')[0].appendChild(d)}}if(document.body){var a=document.createElement('iframe');a.height=1;a.width=1;a.style.position='absolute';a.style.top=0;a.style.left=0;a.style.border='none';a.style.visibility='hidden';document.body.appendChild(a);if('loading'!==document.readyState)c();else if(window.addEventListener)document.addEventListener('DOMContentLoaded',c);else{var e=document.onreadystatechange||function(){};document.onreadystatechange=function(b){e(b);'loading'!==document.readyState&&(document.onreadystatechange=e,c())}}}})();</script><iframe height="1" width="1" style="position: absolute; top: 0px; left: 0px; border: none; visibility: hidden;"></iframe>

</body></html>