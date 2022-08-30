/* --------------------------------------------------------------------------

 *
 *  Copyright 2000 All Rights Reserved.
 * -------------------------------------------------------------------------- 
 * javascript handle initialization
    1. uikit slideshow
    2. Iframe video
    3. Counter config
 * -------------------------------------------------------------------------- */

'use strict';

const HomepageApp = {
    //----------- 1. uikit slideshow -----------
    theme_slideshow: function() {
        let slideshow = UIkit.slideshow('.in-slideshow', {
            autoplay: true,
            autoplayInterval: 7000,
            pauseOnHover: false,
            animation: 'fade',
            minHeight: 480,
            maxHeight: 700
        });
    },
    //---------- 2. Iframe video -----------
    theme_iframe: function() {
        let iframe = {
            selector: '.in-wave-3',
            url: 'https://www.youtube.com/embed/F3QpgXBtDeo',
            width: 900,
            height: 506
        }
        if (typeof(document.querySelector(iframe.selector)) != 'undefined' && document.querySelector(iframe.selector) != null) {
            let iframeWrap = document.querySelector('.in-wave-iframe'),
                iframeInsert = `<iframe src="${iframe.url}" width="${iframe.width}" height="${iframe.height}" data-uk-video="automute: true" data-uk-img></iframe>`,
                iframeTag = document.getElementsByTagName('iframe'),
                observer = new IntersectionObserver(function(entries) {
                    if (entries[0].isIntersecting === true) {
                        iframeWrap.insertAdjacentHTML('beforeend', iframeInsert)
                    } else if (entries[0].isIntersecting === false && iframeTag.length > 0) {
                        iframeTag[0].remove()
                    }
                }, {
                    threshold: [0]
                });
            observer.observe(document.querySelector(iframe.selector));
        }
    },
    //---------- 3. Counter config -----------
    theme_counter: function() {
        let counter = new counterUp({
            selector: '.count',
            start: 0,
            duration: 3200,
            intvalues: true,
            interval: 50
        });
        if (typeof(document.querySelector(counter.props.selector)) != 'undefined' && document.querySelector(counter.props.selector) != null) {
            let observer = new IntersectionObserver(function(entries) {
                if (entries[0].isIntersecting === true)
                    counter.start();
            }, {
                threshold: [0]
            });
            observer.observe(document.querySelector(counter.props.selector));
        }
    },
    theme_init: function() {
        HomepageApp.theme_slideshow();
        HomepageApp.theme_iframe();
        HomepageApp.theme_counter();
    }
}

document.addEventListener('DOMContentLoaded', function() {
    HomepageApp.theme_init();
});