    // google tracking code
    (function (i, s, o, g, r, a, m) {
        i['GoogleAnalyticsObject'] = r; i[r] = i[r] || function () {
            (i[r].q = i[r].q || []).push(arguments)
        }, i[r].l = 1 * new Date(); a = s.createElement(o),
        m = s.getElementsByTagName(o)[0]; a.async = 1; a.src = g; m.parentNode.insertBefore(a, m)
    })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

    ga('create', 'UA-40470023-3', 'auto');
    ga('send', 'pageview');
    
    
    var trackOutboundLink = function (url) {
        ga('send', 'event', 'outbound', 'click', url, {
            'transport': 'beacon',
            'hitCallback': function () { console.log('Google Analytics Tracking: ' + url) }
        });
    }     
   
   function appendTrackingCode(selector, attribute) {
    elem = $(selector);
    console.log(elem);
        $.each(elem, function (index, value) {
            if (value.getAttribute(attribute)!==undefined) {
                var labelName = value.getAttribute(attribute).replace(/\s+/g, '');
                console.log(index + ' (' + attribute + ')' + ' - ' + labelName);
                value.setAttribute('onclick', 'trackOutboundLink("' + labelName + '")');
            } else {
                console.log('this element has no attribute');
            }
        })
    }
    
    