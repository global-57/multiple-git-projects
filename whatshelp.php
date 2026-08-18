<!-- GetButton.io widget -->
<script type="text/javascript">
    (function () {
        var options = {
            telegram: "<?php echo $db->config("telegram");?>", // Telegram bot username
            whatsapp: "<?php echo $db->config("whatsapp");?>", // WhatsApp number
            call_to_action: "Send message to us", // Call to action
            button_color: "#129BF4", // Color of button
            position: "right", // Position may be 'right' or 'left'
            order: "telegram,whatsapp", // Order of buttons
        };
        var proto = 'https:', host = "getbutton.io", url = proto + '//static.' + host;
        var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = url + '/widget-send-button/js/init.js';
        s.onload = function () { WhWidgetSendButton.init(host, proto, options); };
        var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x);
    })();
</script>
<!-- /GetButton.io widget -->